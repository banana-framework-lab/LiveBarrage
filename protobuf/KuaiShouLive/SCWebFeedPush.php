<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: KuaiShouLive.proto

namespace KuaiShouLive;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KuaiShouLive.SCWebFeedPush</code>
 */
class SCWebFeedPush extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string displayWatchingCount = 1;</code>
     */
    private $displayWatchingCount = '';
    /**
     * Generated from protobuf field <code>string displayLikeCount = 2;</code>
     */
    private $displayLikeCount = '';
    /**
     * Generated from protobuf field <code>uint64 pendingLikeCount = 3;</code>
     */
    private $pendingLikeCount = 0;
    /**
     * Generated from protobuf field <code>uint64 pushInterval = 4;</code>
     */
    private $pushInterval = 0;
    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebCommentFeed commentFeeds = 5;</code>
     */
    private $commentFeeds;
    /**
     * Generated from protobuf field <code>string commentCursor = 6;</code>
     */
    private $commentCursor = '';
    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebComboCommentFeed comboCommentFeeds = 7;</code>
     */
    private $comboCommentFeeds;
    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebLikeFeed likeFeeds = 8;</code>
     */
    private $likeFeeds;
    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebGiftFeed giftFeeds = 9;</code>
     */
    private $giftFeeds;
    /**
     * Generated from protobuf field <code>string giftCursor = 10;</code>
     */
    private $giftCursor = '';
    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebSystemNoticeFeed systemNoticeFeeds = 11;</code>
     */
    private $systemNoticeFeeds;
    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebShareFeed shareFeeds = 12;</code>
     */
    private $shareFeeds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $displayWatchingCount
     *     @type string $displayLikeCount
     *     @type int|string $pendingLikeCount
     *     @type int|string $pushInterval
     *     @type \KuaiShouLive\WebCommentFeed[]|\Google\Protobuf\Internal\RepeatedField $commentFeeds
     *     @type string $commentCursor
     *     @type \KuaiShouLive\WebComboCommentFeed[]|\Google\Protobuf\Internal\RepeatedField $comboCommentFeeds
     *     @type \KuaiShouLive\WebLikeFeed[]|\Google\Protobuf\Internal\RepeatedField $likeFeeds
     *     @type \KuaiShouLive\WebGiftFeed[]|\Google\Protobuf\Internal\RepeatedField $giftFeeds
     *     @type string $giftCursor
     *     @type \KuaiShouLive\WebSystemNoticeFeed[]|\Google\Protobuf\Internal\RepeatedField $systemNoticeFeeds
     *     @type \KuaiShouLive\WebShareFeed[]|\Google\Protobuf\Internal\RepeatedField $shareFeeds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\KuaiShouLive::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string displayWatchingCount = 1;</code>
     * @return string
     */
    public function getDisplayWatchingCount()
    {
        return $this->displayWatchingCount;
    }

    /**
     * Generated from protobuf field <code>string displayWatchingCount = 1;</code>
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
     * Generated from protobuf field <code>string displayLikeCount = 2;</code>
     * @return string
     */
    public function getDisplayLikeCount()
    {
        return $this->displayLikeCount;
    }

    /**
     * Generated from protobuf field <code>string displayLikeCount = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayLikeCount($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayLikeCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 pendingLikeCount = 3;</code>
     * @return int|string
     */
    public function getPendingLikeCount()
    {
        return $this->pendingLikeCount;
    }

    /**
     * Generated from protobuf field <code>uint64 pendingLikeCount = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPendingLikeCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->pendingLikeCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 pushInterval = 4;</code>
     * @return int|string
     */
    public function getPushInterval()
    {
        return $this->pushInterval;
    }

    /**
     * Generated from protobuf field <code>uint64 pushInterval = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPushInterval($var)
    {
        GPBUtil::checkUint64($var);
        $this->pushInterval = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebCommentFeed commentFeeds = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommentFeeds()
    {
        return $this->commentFeeds;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebCommentFeed commentFeeds = 5;</code>
     * @param \KuaiShouLive\WebCommentFeed[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommentFeeds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KuaiShouLive\WebCommentFeed::class);
        $this->commentFeeds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string commentCursor = 6;</code>
     * @return string
     */
    public function getCommentCursor()
    {
        return $this->commentCursor;
    }

    /**
     * Generated from protobuf field <code>string commentCursor = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCommentCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->commentCursor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebComboCommentFeed comboCommentFeeds = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getComboCommentFeeds()
    {
        return $this->comboCommentFeeds;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebComboCommentFeed comboCommentFeeds = 7;</code>
     * @param \KuaiShouLive\WebComboCommentFeed[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setComboCommentFeeds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KuaiShouLive\WebComboCommentFeed::class);
        $this->comboCommentFeeds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebLikeFeed likeFeeds = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLikeFeeds()
    {
        return $this->likeFeeds;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebLikeFeed likeFeeds = 8;</code>
     * @param \KuaiShouLive\WebLikeFeed[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLikeFeeds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KuaiShouLive\WebLikeFeed::class);
        $this->likeFeeds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebGiftFeed giftFeeds = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGiftFeeds()
    {
        return $this->giftFeeds;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebGiftFeed giftFeeds = 9;</code>
     * @param \KuaiShouLive\WebGiftFeed[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGiftFeeds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KuaiShouLive\WebGiftFeed::class);
        $this->giftFeeds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string giftCursor = 10;</code>
     * @return string
     */
    public function getGiftCursor()
    {
        return $this->giftCursor;
    }

    /**
     * Generated from protobuf field <code>string giftCursor = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setGiftCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->giftCursor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebSystemNoticeFeed systemNoticeFeeds = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSystemNoticeFeeds()
    {
        return $this->systemNoticeFeeds;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebSystemNoticeFeed systemNoticeFeeds = 11;</code>
     * @param \KuaiShouLive\WebSystemNoticeFeed[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSystemNoticeFeeds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KuaiShouLive\WebSystemNoticeFeed::class);
        $this->systemNoticeFeeds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebShareFeed shareFeeds = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShareFeeds()
    {
        return $this->shareFeeds;
    }

    /**
     * Generated from protobuf field <code>repeated .KuaiShouLive.WebShareFeed shareFeeds = 12;</code>
     * @param \KuaiShouLive\WebShareFeed[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShareFeeds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KuaiShouLive\WebShareFeed::class);
        $this->shareFeeds = $arr;

        return $this;
    }

}

