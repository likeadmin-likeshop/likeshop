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
 * CreateDomain请求参数结构体
 *
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method string getDomain() 获取需要创建的域名，一个监听器下最大支持100个域名。
 * @method void setDomain(string $Domain) 设置需要创建的域名，一个监听器下最大支持100个域名。
 * @method string getCertificateId() 获取服务器证书，用于客户端与GAAP的HTTPS的交互。
 * @method void setCertificateId(string $CertificateId) 设置服务器证书，用于客户端与GAAP的HTTPS的交互。
 * @method string getClientCertificateId() 获取客户端CA证书，用于客户端与GAAP的HTTPS的交互。
仅当采用双向认证的方式时，需要设置该字段或PolyClientCertificateIds字段。
 * @method void setClientCertificateId(string $ClientCertificateId) 设置客户端CA证书，用于客户端与GAAP的HTTPS的交互。
仅当采用双向认证的方式时，需要设置该字段或PolyClientCertificateIds字段。
 * @method array getPolyClientCertificateIds() 获取客户端CA证书，用于客户端与GAAP的HTTPS的交互。
仅当采用双向认证的方式时，需要设置该字段或ClientCertificateId字段。
 * @method void setPolyClientCertificateIds(array $PolyClientCertificateIds) 设置客户端CA证书，用于客户端与GAAP的HTTPS的交互。
仅当采用双向认证的方式时，需要设置该字段或ClientCertificateId字段。
 */
class CreateDomainRequest extends AbstractModel
{
    /**
     * @var string 监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 需要创建的域名，一个监听器下最大支持100个域名。
     */
    public $Domain;

    /**
     * @var string 服务器证书，用于客户端与GAAP的HTTPS的交互。
     */
    public $CertificateId;

    /**
     * @var string 客户端CA证书，用于客户端与GAAP的HTTPS的交互。
仅当采用双向认证的方式时，需要设置该字段或PolyClientCertificateIds字段。
     */
    public $ClientCertificateId;

    /**
     * @var array 客户端CA证书，用于客户端与GAAP的HTTPS的交互。
仅当采用双向认证的方式时，需要设置该字段或ClientCertificateId字段。
     */
    public $PolyClientCertificateIds;

    /**
     * @param string $ListenerId 监听器ID。
     * @param string $Domain 需要创建的域名，一个监听器下最大支持100个域名。
     * @param string $CertificateId 服务器证书，用于客户端与GAAP的HTTPS的交互。
     * @param string $ClientCertificateId 客户端CA证书，用于客户端与GAAP的HTTPS的交互。
仅当采用双向认证的方式时，需要设置该字段或PolyClientCertificateIds字段。
     * @param array $PolyClientCertificateIds 客户端CA证书，用于客户端与GAAP的HTTPS的交互。
仅当采用双向认证的方式时，需要设置该字段或ClientCertificateId字段。
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
