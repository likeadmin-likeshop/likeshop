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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCertificate请求参数结构体
 *
 * @method string getListenerId() 获取监听器实例ID
 * @method void setListenerId(string $ListenerId) 设置监听器实例ID
 * @method string getDomain() 获取需要修改证书的域名
 * @method void setDomain(string $Domain) 设置需要修改证书的域名
 * @method string getCertificateId() 获取新的服务器证书ID。其中：
当CertificateId=default时，表示使用监听器的证书。
 * @method void setCertificateId(string $CertificateId) 设置新的服务器证书ID。其中：
当CertificateId=default时，表示使用监听器的证书。
 * @method string getClientCertificateId() 获取新的客户端证书ID。其中：
当ClientCertificateId=default时，表示使用监听器的证书。
仅当采用双向认证方式时，需要设置该参数或者PolyClientCertificateIds。
 * @method void setClientCertificateId(string $ClientCertificateId) 设置新的客户端证书ID。其中：
当ClientCertificateId=default时，表示使用监听器的证书。
仅当采用双向认证方式时，需要设置该参数或者PolyClientCertificateIds。
 * @method array getPolyClientCertificateIds() 获取新的多客户端证书ID列表。其中：
仅当采用双向认证方式时，需要设置该参数或ClientCertificateId参数。
 * @method void setPolyClientCertificateIds(array $PolyClientCertificateIds) 设置新的多客户端证书ID列表。其中：
仅当采用双向认证方式时，需要设置该参数或ClientCertificateId参数。
 */
class ModifyCertificateRequest extends AbstractModel
{
    /**
     * @var string 监听器实例ID
     */
    public $ListenerId;

    /**
     * @var string 需要修改证书的域名
     */
    public $Domain;

    /**
     * @var string 新的服务器证书ID。其中：
当CertificateId=default时，表示使用监听器的证书。
     */
    public $CertificateId;

    /**
     * @var string 新的客户端证书ID。其中：
当ClientCertificateId=default时，表示使用监听器的证书。
仅当采用双向认证方式时，需要设置该参数或者PolyClientCertificateIds。
     */
    public $ClientCertificateId;

    /**
     * @var array 新的多客户端证书ID列表。其中：
仅当采用双向认证方式时，需要设置该参数或ClientCertificateId参数。
     */
    public $PolyClientCertificateIds;

    /**
     * @param string $ListenerId 监听器实例ID
     * @param string $Domain 需要修改证书的域名
     * @param string $CertificateId 新的服务器证书ID。其中：
当CertificateId=default时，表示使用监听器的证书。
     * @param string $ClientCertificateId 新的客户端证书ID。其中：
当ClientCertificateId=default时，表示使用监听器的证书。
仅当采用双向认证方式时，需要设置该参数或者PolyClientCertificateIds。
     * @param array $PolyClientCertificateIds 新的多客户端证书ID列表。其中：
仅当采用双向认证方式时，需要设置该参数或ClientCertificateId参数。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("PolyClientCertificateIds",$param) and $param["PolyClientCertificateIds"] !== null) {
            $this->PolyClientCertificateIds = $param["PolyClientCertificateIds"];
        }
    }
}
