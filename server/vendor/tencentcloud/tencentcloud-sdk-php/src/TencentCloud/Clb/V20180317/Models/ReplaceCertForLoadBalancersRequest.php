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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceCertForLoadBalancers请求参数结构体
 *
 * @method string getOldCertificateId() 获取需要被替换的证书的ID，可以是服务端证书或客户端证书
 * @method void setOldCertificateId(string $OldCertificateId) 设置需要被替换的证书的ID，可以是服务端证书或客户端证书
 * @method CertificateInput getCertificate() 获取新证书的内容等相关信息
 * @method void setCertificate(CertificateInput $Certificate) 设置新证书的内容等相关信息
 */
class ReplaceCertForLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string 需要被替换的证书的ID，可以是服务端证书或客户端证书
     */
    public $OldCertificateId;

    /**
     * @var CertificateInput 新证书的内容等相关信息
     */
    public $Certificate;

    /**
     * @param string $OldCertificateId 需要被替换的证书的ID，可以是服务端证书或客户端证书
     * @param CertificateInput $Certificate 新证书的内容等相关信息
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
        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }
    }
}
