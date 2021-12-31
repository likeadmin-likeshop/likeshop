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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户组用户信息
 *
 * @method integer getUid() 获取子用户 Uid。
 * @method void setUid(integer $Uid) 设置子用户 Uid。
 * @method integer getUin() 获取子用户 Uin。
 * @method void setUin(integer $Uin) 设置子用户 Uin。
 * @method string getName() 获取子用户名称。
 * @method void setName(string $Name) 设置子用户名称。
 * @method string getPhoneNum() 获取手机号。
 * @method void setPhoneNum(string $PhoneNum) 设置手机号。
 * @method string getCountryCode() 获取手机区域代码。
 * @method void setCountryCode(string $CountryCode) 设置手机区域代码。
 * @method integer getPhoneFlag() 获取是否已验证手机。
 * @method void setPhoneFlag(integer $PhoneFlag) 设置是否已验证手机。
 * @method string getEmail() 获取邮箱地址。
 * @method void setEmail(string $Email) 设置邮箱地址。
 * @method integer getEmailFlag() 获取是否已验证邮箱。
 * @method void setEmailFlag(integer $EmailFlag) 设置是否已验证邮箱。
 * @method integer getUserType() 获取用户类型。
 * @method void setUserType(integer $UserType) 设置用户类型。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method integer getIsReceiverOwner() 获取是否为主消息接收人。
 * @method void setIsReceiverOwner(integer $IsReceiverOwner) 设置是否为主消息接收人。
 */
class GroupMemberInfo extends AbstractModel
{
    /**
     * @var integer 子用户 Uid。
     */
    public $Uid;

    /**
     * @var integer 子用户 Uin。
     */
    public $Uin;

    /**
     * @var string 子用户名称。
     */
    public $Name;

    /**
     * @var string 手机号。
     */
    public $PhoneNum;

    /**
     * @var string 手机区域代码。
     */
    public $CountryCode;

    /**
     * @var integer 是否已验证手机。
     */
    public $PhoneFlag;

    /**
     * @var string 邮箱地址。
     */
    public $Email;

    /**
     * @var integer 是否已验证邮箱。
     */
    public $EmailFlag;

    /**
     * @var integer 用户类型。
     */
    public $UserType;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 是否为主消息接收人。
     */
    public $IsReceiverOwner;

    /**
     * @param integer $Uid 子用户 Uid。
     * @param integer $Uin 子用户 Uin。
     * @param string $Name 子用户名称。
     * @param string $PhoneNum 手机号。
     * @param string $CountryCode 手机区域代码。
     * @param integer $PhoneFlag 是否已验证手机。
     * @param string $Email 邮箱地址。
     * @param integer $EmailFlag 是否已验证邮箱。
     * @param integer $UserType 用户类型。
     * @param string $CreateTime 创建时间。
     * @param integer $IsReceiverOwner 是否为主消息接收人。
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("PhoneFlag",$param) and $param["PhoneFlag"] !== null) {
            $this->PhoneFlag = $param["PhoneFlag"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("EmailFlag",$param) and $param["EmailFlag"] !== null) {
            $this->EmailFlag = $param["EmailFlag"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsReceiverOwner",$param) and $param["IsReceiverOwner"] !== null) {
            $this->IsReceiverOwner = $param["IsReceiverOwner"];
        }
    }
}
