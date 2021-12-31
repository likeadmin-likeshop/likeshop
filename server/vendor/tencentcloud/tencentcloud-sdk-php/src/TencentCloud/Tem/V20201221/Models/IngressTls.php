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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ingress tls 配置
 *
 * @method array getHosts() 获取host 数组, 空数组表示全部域名的默认证书
 * @method void setHosts(array $Hosts) 设置host 数组, 空数组表示全部域名的默认证书
 * @method string getSecretName() 获取secret name，如使用证书，则填空字符串
 * @method void setSecretName(string $SecretName) 设置secret name，如使用证书，则填空字符串
 * @method string getCertificateId() 获取SSL Certificate Id
 * @method void setCertificateId(string $CertificateId) 设置SSL Certificate Id
 */
class IngressTls extends AbstractModel
{
    /**
     * @var array host 数组, 空数组表示全部域名的默认证书
     */
    public $Hosts;

    /**
     * @var string secret name，如使用证书，则填空字符串
     */
    public $SecretName;

    /**
     * @var string SSL Certificate Id
     */
    public $CertificateId;

    /**
     * @param array $Hosts host 数组, 空数组表示全部域名的默认证书
     * @param string $SecretName secret name，如使用证书，则填空字符串
     * @param string $CertificateId SSL Certificate Id
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
        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }
    }
}
