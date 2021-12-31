<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ims\V20200713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User结果
 *
 * @method string getUserId() 获取业务用户ID 如填写，会根据账号历史恶意情况，判定消息有害结果，特别是有利于可疑恶意情况下的辅助判断。账号可以填写微信uin、QQ号、微信openid、QQopenid、字符串等。该字段和账号类别确定唯一账号。
 * @method void setUserId(string $UserId) 设置业务用户ID 如填写，会根据账号历史恶意情况，判定消息有害结果，特别是有利于可疑恶意情况下的辅助判断。账号可以填写微信uin、QQ号、微信openid、QQopenid、字符串等。该字段和账号类别确定唯一账号。
 * @method string getAccountType() 获取业务用户ID类型 "1-微信uin 2-QQ号 3-微信群uin 4-qq群号 5-微信openid 6-QQopenid 7-其它string"
 * @method void setAccountType(string $AccountType) 设置业务用户ID类型 "1-微信uin 2-QQ号 3-微信群uin 4-qq群号 5-微信openid 6-QQopenid 7-其它string"
 * @method string getNickname() 获取用户昵称
 * @method void setNickname(string $Nickname) 设置用户昵称
 * @method integer getGender() 获取性别 默认0 未知 1 男性 2 女性
 * @method void setGender(integer $Gender) 设置性别 默认0 未知 1 男性 2 女性
 * @method integer getAge() 获取年龄 默认0 未知
 * @method void setAge(integer $Age) 设置年龄 默认0 未知
 * @method integer getLevel() 获取用户等级，默认0 未知 1 低 2 中 3 高
 * @method void setLevel(integer $Level) 设置用户等级，默认0 未知 1 低 2 中 3 高
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 * @method string getDesc() 获取用户简介，长度不超过5000字
 * @method void setDesc(string $Desc) 设置用户简介，长度不超过5000字
 * @method string getHeadUrl() 获取用户头像图片链接
 * @method void setHeadUrl(string $HeadUrl) 设置用户头像图片链接
 */
class User extends AbstractModel
{
    /**
     * @var string 业务用户ID 如填写，会根据账号历史恶意情况，判定消息有害结果，特别是有利于可疑恶意情况下的辅助判断。账号可以填写微信uin、QQ号、微信openid、QQopenid、字符串等。该字段和账号类别确定唯一账号。
     */
    public $UserId;

    /**
     * @var string 业务用户ID类型 "1-微信uin 2-QQ号 3-微信群uin 4-qq群号 5-微信openid 6-QQopenid 7-其它string"
     */
    public $AccountType;

    /**
     * @var string 用户昵称
     */
    public $Nickname;

    /**
     * @var integer 性别 默认0 未知 1 男性 2 女性
     */
    public $Gender;

    /**
     * @var integer 年龄 默认0 未知
     */
    public $Age;

    /**
     * @var integer 用户等级，默认0 未知 1 低 2 中 3 高
     */
    public $Level;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @var string 用户简介，长度不超过5000字
     */
    public $Desc;

    /**
     * @var string 用户头像图片链接
     */
    public $HeadUrl;

    /**
     * @param string $UserId 业务用户ID 如填写，会根据账号历史恶意情况，判定消息有害结果，特别是有利于可疑恶意情况下的辅助判断。账号可以填写微信uin、QQ号、微信openid、QQopenid、字符串等。该字段和账号类别确定唯一账号。
     * @param string $AccountType 业务用户ID类型 "1-微信uin 2-QQ号 3-微信群uin 4-qq群号 5-微信openid 6-QQopenid 7-其它string"
     * @param string $Nickname 用户昵称
     * @param integer $Gender 性别 默认0 未知 1 男性 2 女性
     * @param integer $Age 年龄 默认0 未知
     * @param integer $Level 用户等级，默认0 未知 1 低 2 中 3 高
     * @param string $Phone 手机号
     * @param string $Desc 用户简介，长度不超过5000字
     * @param string $HeadUrl 用户头像图片链接
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("HeadUrl",$param) and $param["HeadUrl"] !== null) {
            $this->HeadUrl = $param["HeadUrl"];
        }
    }
}
