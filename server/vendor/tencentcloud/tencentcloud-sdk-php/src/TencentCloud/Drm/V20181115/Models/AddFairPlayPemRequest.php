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
namespace TencentCloud\Drm\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddFairPlayPem请求参数结构体
 *
 * @method string getPem() 获取加密后的fairplay方案申请时使用的私钥。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对私钥文件中的字段进行加密，并对加密结果进行base64编码。
 * @method void setPem(string $Pem) 设置加密后的fairplay方案申请时使用的私钥。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对私钥文件中的字段进行加密，并对加密结果进行base64编码。
 * @method string getAsk() 获取加密后的fairplay方案申请返回的ask数据。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对Ask字符串进行加密，并对加密结果进行base64编码。
 * @method void setAsk(string $Ask) 设置加密后的fairplay方案申请返回的ask数据。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对Ask字符串进行加密，并对加密结果进行base64编码。
 * @method string getPemDecryptKey() 获取私钥的解密密钥。
openssl在生成rsa时，可能会需要设置加密密钥，请记住设置的密钥。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对解密密钥进行加密，并对加密结果进行base64编码。
 * @method void setPemDecryptKey(string $PemDecryptKey) 设置私钥的解密密钥。
openssl在生成rsa时，可能会需要设置加密密钥，请记住设置的密钥。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对解密密钥进行加密，并对加密结果进行base64编码。
 * @method integer getBailorId() 获取委托者Id,适用于托管自身证书的客户。普通客户无需填该字段。
 * @method void setBailorId(integer $BailorId) 设置委托者Id,适用于托管自身证书的客户。普通客户无需填该字段。
 * @method integer getPriority() 获取私钥的优先级，优先级数值越高，优先级越高。
该值可以不传，后台将自动分配一个优先级。
 * @method void setPriority(integer $Priority) 设置私钥的优先级，优先级数值越高，优先级越高。
该值可以不传，后台将自动分配一个优先级。
 */
class AddFairPlayPemRequest extends AbstractModel
{
    /**
     * @var string 加密后的fairplay方案申请时使用的私钥。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对私钥文件中的字段进行加密，并对加密结果进行base64编码。
     */
    public $Pem;

    /**
     * @var string 加密后的fairplay方案申请返回的ask数据。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对Ask字符串进行加密，并对加密结果进行base64编码。
     */
    public $Ask;

    /**
     * @var string 私钥的解密密钥。
openssl在生成rsa时，可能会需要设置加密密钥，请记住设置的密钥。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对解密密钥进行加密，并对加密结果进行base64编码。
     */
    public $PemDecryptKey;

    /**
     * @var integer 委托者Id,适用于托管自身证书的客户。普通客户无需填该字段。
     */
    public $BailorId;

    /**
     * @var integer 私钥的优先级，优先级数值越高，优先级越高。
该值可以不传，后台将自动分配一个优先级。
     */
    public $Priority;

    /**
     * @param string $Pem 加密后的fairplay方案申请时使用的私钥。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对私钥文件中的字段进行加密，并对加密结果进行base64编码。
     * @param string $Ask 加密后的fairplay方案申请返回的ask数据。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对Ask字符串进行加密，并对加密结果进行base64编码。
     * @param string $PemDecryptKey 私钥的解密密钥。
openssl在生成rsa时，可能会需要设置加密密钥，请记住设置的密钥。
请使用腾讯云DRM 提供的公钥，使用rsa加密算法，PKCS1填充方式对解密密钥进行加密，并对加密结果进行base64编码。
     * @param integer $BailorId 委托者Id,适用于托管自身证书的客户。普通客户无需填该字段。
     * @param integer $Priority 私钥的优先级，优先级数值越高，优先级越高。
该值可以不传，后台将自动分配一个优先级。
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
        if (array_key_exists("Pem",$param) and $param["Pem"] !== null) {
            $this->Pem = $param["Pem"];
        }

        if (array_key_exists("Ask",$param) and $param["Ask"] !== null) {
            $this->Ask = $param["Ask"];
        }

        if (array_key_exists("PemDecryptKey",$param) and $param["PemDecryptKey"] !== null) {
            $this->PemDecryptKey = $param["PemDecryptKey"];
        }

        if (array_key_exists("BailorId",$param) and $param["BailorId"] !== null) {
            $this->BailorId = $param["BailorId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
