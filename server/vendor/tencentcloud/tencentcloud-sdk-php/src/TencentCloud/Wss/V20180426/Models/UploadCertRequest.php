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
namespace TencentCloud\Wss\V20180426\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadCert请求参数结构体
 *
 * @method string getCert() 获取证书内容。
 * @method void setCert(string $Cert) 设置证书内容。
 * @method string getCertType() 获取证书类型（目前支持：CA 为客户端证书，SVR 为服务器证书）。
 * @method void setCertType(string $CertType) 设置证书类型（目前支持：CA 为客户端证书，SVR 为服务器证书）。
 * @method string getProjectId() 获取项目ID，详见用户指南的 [项目与标签](https://cloud.tencent.com/document/product/598/32738)。
 * @method void setProjectId(string $ProjectId) 设置项目ID，详见用户指南的 [项目与标签](https://cloud.tencent.com/document/product/598/32738)。
 * @method string getModuleType() 获取模块名称，应填 ssl。
 * @method void setModuleType(string $ModuleType) 设置模块名称，应填 ssl。
 * @method string getKey() 获取证书私钥，certType=SVR 时必填。
 * @method void setKey(string $Key) 设置证书私钥，certType=SVR 时必填。
 * @method string getAlias() 获取证书备注。
 * @method void setAlias(string $Alias) 设置证书备注。
 */
class UploadCertRequest extends AbstractModel
{
    /**
     * @var string 证书内容。
     */
    public $Cert;

    /**
     * @var string 证书类型（目前支持：CA 为客户端证书，SVR 为服务器证书）。
     */
    public $CertType;

    /**
     * @var string 项目ID，详见用户指南的 [项目与标签](https://cloud.tencent.com/document/product/598/32738)。
     */
    public $ProjectId;

    /**
     * @var string 模块名称，应填 ssl。
     */
    public $ModuleType;

    /**
     * @var string 证书私钥，certType=SVR 时必填。
     */
    public $Key;

    /**
     * @var string 证书备注。
     */
    public $Alias;

    /**
     * @param string $Cert 证书内容。
     * @param string $CertType 证书类型（目前支持：CA 为客户端证书，SVR 为服务器证书）。
     * @param string $ProjectId 项目ID，详见用户指南的 [项目与标签](https://cloud.tencent.com/document/product/598/32738)。
     * @param string $ModuleType 模块名称，应填 ssl。
     * @param string $Key 证书私钥，certType=SVR 时必填。
     * @param string $Alias 证书备注。
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
        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
