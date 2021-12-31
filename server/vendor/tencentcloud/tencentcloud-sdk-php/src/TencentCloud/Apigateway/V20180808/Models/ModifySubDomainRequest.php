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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubDomain请求参数结构体
 *
 * @method string getServiceId() 获取服务唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置服务唯一 ID。
 * @method string getSubDomain() 获取待修改路径映射的自定义的域名。
 * @method void setSubDomain(string $SubDomain) 设置待修改路径映射的自定义的域名。
 * @method boolean getIsDefaultMapping() 获取是否修改为使用默认路径映射。为 true，表示使用默认路径映射，为 false，表示使用自定义路径映射。
 * @method void setIsDefaultMapping(boolean $IsDefaultMapping) 设置是否修改为使用默认路径映射。为 true，表示使用默认路径映射，为 false，表示使用自定义路径映射。
 * @method string getCertificateId() 获取证书 ID，协议包含 HTTPS 的时候要传该字段。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID，协议包含 HTTPS 的时候要传该字段。
 * @method string getProtocol() 获取修改后的自定义域名协议类型。（http，https 或 http&https)
 * @method void setProtocol(string $Protocol) 设置修改后的自定义域名协议类型。（http，https 或 http&https)
 * @method array getPathMappingSet() 获取修改后的路径映射列表。
 * @method void setPathMappingSet(array $PathMappingSet) 设置修改后的路径映射列表。
 * @method string getNetType() 获取网络类型 （'INNER' 或 'OUTER'）
 * @method void setNetType(string $NetType) 设置网络类型 （'INNER' 或 'OUTER'）
 * @method boolean getIsForcedHttps() 获取是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
 * @method void setIsForcedHttps(boolean $IsForcedHttps) 设置是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
 */
class ModifySubDomainRequest extends AbstractModel
{
    /**
     * @var string 服务唯一 ID。
     */
    public $ServiceId;

    /**
     * @var string 待修改路径映射的自定义的域名。
     */
    public $SubDomain;

    /**
     * @var boolean 是否修改为使用默认路径映射。为 true，表示使用默认路径映射，为 false，表示使用自定义路径映射。
     */
    public $IsDefaultMapping;

    /**
     * @var string 证书 ID，协议包含 HTTPS 的时候要传该字段。
     */
    public $CertificateId;

    /**
     * @var string 修改后的自定义域名协议类型。（http，https 或 http&https)
     */
    public $Protocol;

    /**
     * @var array 修改后的路径映射列表。
     */
    public $PathMappingSet;

    /**
     * @var string 网络类型 （'INNER' 或 'OUTER'）
     */
    public $NetType;

    /**
     * @var boolean 是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
     */
    public $IsForcedHttps;

    /**
     * @param string $ServiceId 服务唯一 ID。
     * @param string $SubDomain 待修改路径映射的自定义的域名。
     * @param boolean $IsDefaultMapping 是否修改为使用默认路径映射。为 true，表示使用默认路径映射，为 false，表示使用自定义路径映射。
     * @param string $CertificateId 证书 ID，协议包含 HTTPS 的时候要传该字段。
     * @param string $Protocol 修改后的自定义域名协议类型。（http，https 或 http&https)
     * @param array $PathMappingSet 修改后的路径映射列表。
     * @param string $NetType 网络类型 （'INNER' 或 'OUTER'）
     * @param boolean $IsForcedHttps 是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("IsDefaultMapping",$param) and $param["IsDefaultMapping"] !== null) {
            $this->IsDefaultMapping = $param["IsDefaultMapping"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PathMappingSet",$param) and $param["PathMappingSet"] !== null) {
            $this->PathMappingSet = [];
            foreach ($param["PathMappingSet"] as $key => $value){
                $obj = new PathMapping();
                $obj->deserialize($value);
                array_push($this->PathMappingSet, $obj);
            }
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("IsForcedHttps",$param) and $param["IsForcedHttps"] !== null) {
            $this->IsForcedHttps = $param["IsForcedHttps"];
        }
    }
}
