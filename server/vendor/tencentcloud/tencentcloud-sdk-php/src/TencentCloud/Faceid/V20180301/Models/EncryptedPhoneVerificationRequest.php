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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EncryptedPhoneVerification请求参数结构体
 *
 * @method string getIdCard() 获取身份证号，加密方式以EncryptionMode为准
 * @method void setIdCard(string $IdCard) 设置身份证号，加密方式以EncryptionMode为准
 * @method string getName() 获取姓名，加密方式以EncryptionMode为准
 * @method void setName(string $Name) 设置姓名，加密方式以EncryptionMode为准
 * @method string getPhone() 获取手机号，加密方式以EncryptionMode为准
 * @method void setPhone(string $Phone) 设置手机号，加密方式以EncryptionMode为准
 * @method string getEncryptionMode() 获取敏感信息的加密方式，目前只支持MD5加密传输，参数取值：

0：明文，不加密
1：使用MD5加密
 * @method void setEncryptionMode(string $EncryptionMode) 设置敏感信息的加密方式，目前只支持MD5加密传输，参数取值：

0：明文，不加密
1：使用MD5加密
 */
class EncryptedPhoneVerificationRequest extends AbstractModel
{
    /**
     * @var string 身份证号，加密方式以EncryptionMode为准
     */
    public $IdCard;

    /**
     * @var string 姓名，加密方式以EncryptionMode为准
     */
    public $Name;

    /**
     * @var string 手机号，加密方式以EncryptionMode为准
     */
    public $Phone;

    /**
     * @var string 敏感信息的加密方式，目前只支持MD5加密传输，参数取值：

0：明文，不加密
1：使用MD5加密
     */
    public $EncryptionMode;

    /**
     * @param string $IdCard 身份证号，加密方式以EncryptionMode为准
     * @param string $Name 姓名，加密方式以EncryptionMode为准
     * @param string $Phone 手机号，加密方式以EncryptionMode为准
     * @param string $EncryptionMode 敏感信息的加密方式，目前只支持MD5加密传输，参数取值：

0：明文，不加密
1：使用MD5加密
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("EncryptionMode",$param) and $param["EncryptionMode"] !== null) {
            $this->EncryptionMode = $param["EncryptionMode"];
        }
    }
}
