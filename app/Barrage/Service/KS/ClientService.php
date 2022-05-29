<?php

namespace App\Barrage\Service\KS;

use App\Barrage\Object\KS\KSSpiderObject;
use Closure;
use co;
use Exception;
use Swoole\Coroutine\Http\Client;
use Swoole\Timer;

class ClientService
{
    /**
     * @var Client $client
     */
    private $client;

    private $spider;

    private $onConnectFunction;

    private $liveStreamFunction;

    private function startOnConnect()
    {
        $function = $this->onConnectFunction;
        $function($this->client, $this->spider);
    }

    private function liveStreamHandle($stream, Client $client, KSSpiderObject $spider): bool
    {
        $function = $this->liveStreamFunction;
        return $function($stream, $client, $spider) ?: true;
    }

    /**
     * @param Closure $onConnectFunction
     */
    public function setOnConnectFunction(Closure $onConnectFunction)
    {
        $this->onConnectFunction = $onConnectFunction;
    }

    /**
     * @param Closure $liveStreamFunction
     */
    public function setLiveStreamFunction(Closure $liveStreamFunction)
    {
        $this->liveStreamFunction = $liveStreamFunction;
    }

    /**
     * @throws Exception
     */
    private function validate()
    {
        if (!$this->onConnectFunction) {
            throw new Exception('onConnectFunction不能为空');
        }

        if (!$this->liveStreamFunction) {
            throw new Exception('liveStreamHandleFunction不能为空');
        }

        if (!$this->spider) {
            throw new Exception('spider不能为空');
        }
    }

    /**
     * @param $errCode
     * @param $errMsg
     */
    private function handleErrCode($errCode, $errMsg)
    {
        switch ($errCode) {
            case 1017:
                echo date('Y-m-d H:i:s') . '主播已经下播' . PHP_EOL;
                break;
            default:
                echo date('Y-m-d H:i:s') . "获取信息失败:错误信息:$errMsg,错误码:$errCode" . PHP_EOL;
                break;
        }
    }

    /**
     * @param KSSpiderObject $spider
     * @throws Exception
     */
    public function run(KSSpiderObject $spider)
    {
        $this->spider = $spider;

        $this->validate();

        $host = (parse_url($this->spider->live_ws_url))['host'] ?? '';
        $this->client = new Client($host, 443, true);
        $this->client->set(['websocket_mask' => true]);
        $this->client->upgrade('/websocket');

        if ($this->client->getStatusCode() !== 101) {
            echo "websocket握手失败,返回码为" . $this->client->getStatusCode() . PHP_EOL;
            $this->client->close();
            return;
        }

        $this->startOnConnect();
        while (true) {
            $swooleMsg = $this->client->recv(-1);
            if (!$this->client->errCode) {
                if ($swooleMsg->data) {
                    if (!$this->liveStreamHandle($swooleMsg->data, $this->client, $spider)) {
                        break;
                    }
                }
            } else {
                $this->client->close();
                Timer::clearAll();
                break;
            }
            co::sleep(1);
        }

        $this->handleErrCode($this->client->errCode, $this->client->errMsg);
    }
}