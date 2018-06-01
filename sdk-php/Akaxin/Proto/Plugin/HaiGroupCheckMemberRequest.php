<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_group_checkMember.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *检查用户是否在某群里
 *----
 *接口名
 *----
 * /hai/group/checkMember
 *错误码
 *----
 *- success
 *- error.alert
 *
 * 
 */
class HaiGroupCheckMemberRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *群组ID
     *
     * 
     */
    private $group_id = '';
    /**
     * 待检查的成员id
     *
     * 
     */
    private $site_user_id;

    public function __construct() {
        \GPBMetadata\Plugin\HaiGroupCheckMember::initOnce();
        parent::__construct();
    }

    /**
     *群组ID
     *
     * 
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     *群组ID
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_id = $var;

        return $this;
    }

    /**
     * 待检查的成员id
     *
     * 
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     * 待检查的成员id
     *
     * 
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSiteUserId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->site_user_id = $arr;

        return $this;
    }

}
