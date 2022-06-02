<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: KuaiShouLive.proto

namespace KuaiShouLive;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KuaiShouLive.SCWebLiveWatchingUsers</code>
 */
class SCWebLiveWatchingUsers extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebWatchingUserInfo watchingUser = 1;</code>
     */
    private $watchingUser;
    /**
     * Generated from protobuf field <code>string displayWatchingCount = 2;</code>
     */
    private $displayWatchingCount = '';
    /**
     * Generated from protobuf field <code>uint64 pendingDuration = 3;</code>
     */
    private $pendingDuration = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \KuaiShouLive\WebWatchingUserInfo[]|\Google\Protobuf\Internal\RepeatedField $watchingUser
     *     @type string $displayWatchingCount
     *     @type int|string $pendingDuration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\KuaiShouLive::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebWatchingUserInfo watchingUser = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWatchingUser()
    {
        return $this->watchingUser;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebWatchingUserInfo watchingUser = 1;</code>
     * @param \KuaiShouLive\WebWatchingUserInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWatchingUser($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KuaiShouLive\WebWatchingUserInfo::class);
        $this->watchingUser = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string displayWatchingCount = 2;</code>
     * @return string
     */
    public function getDisplayWatchingCount()
    {
        return $this->displayWatchingCount;
    }

    /**
     * Generated from protobuf field <code>string displayWatchingCount = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayWatchingCount($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayWatchingCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 pendingDuration = 3;</code>
     * @return int|string
     */
    public function getPendingDuration()
    {
        return $this->pendingDuration;
    }

    /**
     * Generated from protobuf field <code>uint64 pendingDuration = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPendingDuration($var)
    {
        GPBUtil::checkUint64($var);
        $this->pendingDuration = $var;

        return $this;
    }

}

