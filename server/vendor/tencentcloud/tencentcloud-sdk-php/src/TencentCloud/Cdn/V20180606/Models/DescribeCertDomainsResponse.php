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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertDomains返回参数结构体
 *
 * @method array getDomains() 获取已接入CDN的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomains(array $Domains) 设置已接入CDN的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCertifiedDomains() 获取已配置证书的CDN域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertifiedDomains(array $CertifiedDomains) 设置已配置证书的CDN域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertDomainsResponse extends AbstractModel
{
    /**
     * @var array 已接入CDN的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domains;

    /**
     * @var array 已配置证书的CDN域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertifiedDomains;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Domains 已接入CDN的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CertifiedDomains 已配置证书的CDN域名列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("CertifiedDomains",$param) and $param["CertifiedDomains"] !== null) {
            $this->CertifiedDomains = $param["CertifiedDomains"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
