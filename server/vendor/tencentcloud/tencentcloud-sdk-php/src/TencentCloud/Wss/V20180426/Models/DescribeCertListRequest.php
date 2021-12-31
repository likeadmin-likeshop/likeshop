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
 * DescribeCertList请求参数结构体
 *
 * @method string getModuleType() 获取模块名称，应填 ssl。
 * @method void setModuleType(string $ModuleType) 设置模块名称，应填 ssl。
 * @method integer getOffset() 获取页数，默认第一页。
 * @method void setOffset(integer $Offset) 设置页数，默认第一页。
 * @method integer getLimit() 获取每页条数，默认每页20条。
 * @method void setLimit(integer $Limit) 设置每页条数，默认每页20条。
 * @method string getSearchKey() 获取搜索关键字。
 * @method void setSearchKey(string $SearchKey) 设置搜索关键字。
 * @method string getCertType() 获取证书类型（目前支持:CA=客户端证书,SVR=服务器证书）。
 * @method void setCertType(string $CertType) 设置证书类型（目前支持:CA=客户端证书,SVR=服务器证书）。
 * @method string getId() 获取证书ID。
 * @method void setId(string $Id) 设置证书ID。
 * @method string getWithCert() 获取是否同时获取证书内容。
 * @method void setWithCert(string $WithCert) 设置是否同时获取证书内容。
 * @method string getAltDomain() 获取如传，则只返回可以给该域名使用的证书。
 * @method void setAltDomain(string $AltDomain) 设置如传，则只返回可以给该域名使用的证书。
 */
class DescribeCertListRequest extends AbstractModel
{
    /**
     * @var string 模块名称，应填 ssl。
     */
    public $ModuleType;

    /**
     * @var integer 页数，默认第一页。
     */
    public $Offset;

    /**
     * @var integer 每页条数，默认每页20条。
     */
    public $Limit;

    /**
     * @var string 搜索关键字。
     */
    public $SearchKey;

    /**
     * @var string 证书类型（目前支持:CA=客户端证书,SVR=服务器证书）。
     */
    public $CertType;

    /**
     * @var string 证书ID。
     */
    public $Id;

    /**
     * @var string 是否同时获取证书内容。
     */
    public $WithCert;

    /**
     * @var string 如传，则只返回可以给该域名使用的证书。
     */
    public $AltDomain;

    /**
     * @param string $ModuleType 模块名称，应填 ssl。
     * @param integer $Offset 页数，默认第一页。
     * @param integer $Limit 每页条数，默认每页20条。
     * @param string $SearchKey 搜索关键字。
     * @param string $CertType 证书类型（目前支持:CA=客户端证书,SVR=服务器证书）。
     * @param string $Id 证书ID。
     * @param string $WithCert 是否同时获取证书内容。
     * @param string $AltDomain 如传，则只返回可以给该域名使用的证书。
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
        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("WithCert",$param) and $param["WithCert"] !== null) {
            $this->WithCert = $param["WithCert"];
        }

        if (array_key_exists("AltDomain",$param) and $param["AltDomain"] !== null) {
            $this->AltDomain = $param["AltDomain"];
        }
    }
}
