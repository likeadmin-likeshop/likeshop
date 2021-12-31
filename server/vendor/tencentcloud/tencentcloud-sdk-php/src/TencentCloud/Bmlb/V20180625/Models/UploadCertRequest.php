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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadCert请求参数结构体
 *
 * @method string getCertType() 获取证书类型，可选值：CA，SVR。
 * @method void setCertType(string $CertType) 设置证书类型，可选值：CA，SVR。
 * @method string getCert() 获取证书内容。
 * @method void setCert(string $Cert) 设置证书内容。
 * @method string getAlias() 获取证书别名。
 * @method void setAlias(string $Alias) 设置证书别名。
 * @method string getKey() 获取私钥内容，证书类型为SVR时不需要传递。
 * @method void setKey(string $Key) 设置私钥内容，证书类型为SVR时不需要传递。
 */
class UploadCertRequest extends AbstractModel
{
    /**
     * @var string 证书类型，可选值：CA，SVR。
     */
    public $CertType;

    /**
     * @var string 证书内容。
     */
    public $Cert;

    /**
     * @var string 证书别名。
     */
    public $Alias;

    /**
     * @var string 私钥内容，证书类型为SVR时不需要传递。
     */
    public $Key;

    /**
     * @param string $CertType 证书类型，可选值：CA，SVR。
     * @param string $Cert 证书内容。
     * @param string $Alias 证书别名。
     * @param string $Key 私钥内容，证书类型为SVR时不需要传递。
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
        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
