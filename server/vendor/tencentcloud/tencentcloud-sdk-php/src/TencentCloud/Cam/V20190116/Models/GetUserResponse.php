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
 * GetUser返回参数结构体
 *
 * @method integer getUin() 获取子用户用户 UIN
 * @method void setUin(integer $Uin) 设置子用户用户 UIN
 * @method string getName() 获取子用户用户名
 * @method void setName(string $Name) 设置子用户用户名
 * @method integer getUid() 获取子用户 UID
 * @method void setUid(integer $Uid) 设置子用户 UID
 * @method string getRemark() 获取子用户备注
 * @method void setRemark(string $Remark) 设置子用户备注
 * @method integer getConsoleLogin() 获取子用户能否登录控制台
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置子用户能否登录控制台
 * @method string getPhoneNum() 获取手机号
 * @method void setPhoneNum(string $PhoneNum) 设置手机号
 * @method string getCountryCode() 获取区号
 * @method void setCountryCode(string $CountryCode) 设置区号
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetUserResponse extends AbstractModel
{
    /**
     * @var integer 子用户用户 UIN
     */
    public $Uin;

    /**
     * @var string 子用户用户名
     */
    public $Name;

    /**
     * @var integer 子用户 UID
     */
    public $Uid;

    /**
     * @var string 子用户备注
     */
    public $Remark;

    /**
     * @var integer 子用户能否登录控制台
     */
    public $ConsoleLogin;

    /**
     * @var string 手机号
     */
    public $PhoneNum;

    /**
     * @var string 区号
     */
    public $CountryCode;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Uin 子用户用户 UIN
     * @param string $Name 子用户用户名
     * @param integer $Uid 子用户 UID
     * @param string $Remark 子用户备注
     * @param integer $ConsoleLogin 子用户能否登录控制台
     * @param string $PhoneNum 手机号
     * @param string $CountryCode 区号
     * @param string $Email 邮箱
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
