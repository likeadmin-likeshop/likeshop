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
 * AddUser请求参数结构体
 *
 * @method string getName() 获取子用户用户名
 * @method void setName(string $Name) 设置子用户用户名
 * @method string getRemark() 获取子用户备注
 * @method void setRemark(string $Remark) 设置子用户备注
 * @method integer getConsoleLogin() 获取子用户是否可以登录控制台。传0子用户无法登录控制台，传1子用户可以登录控制台。
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置子用户是否可以登录控制台。传0子用户无法登录控制台，传1子用户可以登录控制台。
 * @method integer getUseApi() 获取是否生成子用户密钥。传0不生成子用户密钥，传1生成子用户密钥。
 * @method void setUseApi(integer $UseApi) 设置是否生成子用户密钥。传0不生成子用户密钥，传1生成子用户密钥。
 * @method string getPassword() 获取子用户控制台登录密码，若未进行密码规则设置则默认密码规则为8位以上同时包含大小写字母、数字和特殊字符。只有可以登录控制台时才有效，如果传空并且上面指定允许登录控制台，则自动生成随机密码，随机密码规则为32位包含大小写字母、数字和特殊字符。
 * @method void setPassword(string $Password) 设置子用户控制台登录密码，若未进行密码规则设置则默认密码规则为8位以上同时包含大小写字母、数字和特殊字符。只有可以登录控制台时才有效，如果传空并且上面指定允许登录控制台，则自动生成随机密码，随机密码规则为32位包含大小写字母、数字和特殊字符。
 * @method integer getNeedResetPassword() 获取子用户是否要在下次登录时重置密码。传0子用户下次登录控制台不需重置密码，传1子用户下次登录控制台需要重置密码。
 * @method void setNeedResetPassword(integer $NeedResetPassword) 设置子用户是否要在下次登录时重置密码。传0子用户下次登录控制台不需重置密码，传1子用户下次登录控制台需要重置密码。
 * @method string getPhoneNum() 获取手机号
 * @method void setPhoneNum(string $PhoneNum) 设置手机号
 * @method string getCountryCode() 获取区号
 * @method void setCountryCode(string $CountryCode) 设置区号
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 */
class AddUserRequest extends AbstractModel
{
    /**
     * @var string 子用户用户名
     */
    public $Name;

    /**
     * @var string 子用户备注
     */
    public $Remark;

    /**
     * @var integer 子用户是否可以登录控制台。传0子用户无法登录控制台，传1子用户可以登录控制台。
     */
    public $ConsoleLogin;

    /**
     * @var integer 是否生成子用户密钥。传0不生成子用户密钥，传1生成子用户密钥。
     */
    public $UseApi;

    /**
     * @var string 子用户控制台登录密码，若未进行密码规则设置则默认密码规则为8位以上同时包含大小写字母、数字和特殊字符。只有可以登录控制台时才有效，如果传空并且上面指定允许登录控制台，则自动生成随机密码，随机密码规则为32位包含大小写字母、数字和特殊字符。
     */
    public $Password;

    /**
     * @var integer 子用户是否要在下次登录时重置密码。传0子用户下次登录控制台不需重置密码，传1子用户下次登录控制台需要重置密码。
     */
    public $NeedResetPassword;

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
     * @param string $Name 子用户用户名
     * @param string $Remark 子用户备注
     * @param integer $ConsoleLogin 子用户是否可以登录控制台。传0子用户无法登录控制台，传1子用户可以登录控制台。
     * @param integer $UseApi 是否生成子用户密钥。传0不生成子用户密钥，传1生成子用户密钥。
     * @param string $Password 子用户控制台登录密码，若未进行密码规则设置则默认密码规则为8位以上同时包含大小写字母、数字和特殊字符。只有可以登录控制台时才有效，如果传空并且上面指定允许登录控制台，则自动生成随机密码，随机密码规则为32位包含大小写字母、数字和特殊字符。
     * @param integer $NeedResetPassword 子用户是否要在下次登录时重置密码。传0子用户下次登录控制台不需重置密码，传1子用户下次登录控制台需要重置密码。
     * @param string $PhoneNum 手机号
     * @param string $CountryCode 区号
     * @param string $Email 邮箱
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("UseApi",$param) and $param["UseApi"] !== null) {
            $this->UseApi = $param["UseApi"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("NeedResetPassword",$param) and $param["NeedResetPassword"] !== null) {
            $this->NeedResetPassword = $param["NeedResetPassword"];
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
    }
}
