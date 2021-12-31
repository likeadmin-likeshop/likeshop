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
 * BindSubDomain请求参数结构体
 *
 * @method string getServiceId() 获取服务唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置服务唯一 ID。
 * @method string getSubDomain() 获取待绑定的自定义的域名。
 * @method void setSubDomain(string $SubDomain) 设置待绑定的自定义的域名。
 * @method string getProtocol() 获取服务支持协议，可选值为http、https、http&https。
 * @method void setProtocol(string $Protocol) 设置服务支持协议，可选值为http、https、http&https。
 * @method string getNetType() 获取网络类型，可选值为OUTER、INNER。
 * @method void setNetType(string $NetType) 设置网络类型，可选值为OUTER、INNER。
 * @method boolean getIsDefaultMapping() 获取是否使用默认路径映射，默认为 true。为 false 时，表示自定义路径映射，此时 PathMappingSet 必填。
 * @method void setIsDefaultMapping(boolean $IsDefaultMapping) 设置是否使用默认路径映射，默认为 true。为 false 时，表示自定义路径映射，此时 PathMappingSet 必填。
 * @method string getNetSubDomain() 获取默认域名。
 * @method void setNetSubDomain(string $NetSubDomain) 设置默认域名。
 * @method string getCertificateId() 获取待绑定自定义域名的证书唯一 ID。针对Protocol 为https或http&https可以选择上传。
 * @method void setCertificateId(string $CertificateId) 设置待绑定自定义域名的证书唯一 ID。针对Protocol 为https或http&https可以选择上传。
 * @method array getPathMappingSet() 获取自定义域名路径映射，最多输入三个Environment，并且只能分别取值“test”、 ”prepub“、”release“。
 * @method void setPathMappingSet(array $PathMappingSet) 设置自定义域名路径映射，最多输入三个Environment，并且只能分别取值“test”、 ”prepub“、”release“。
 * @method boolean getIsForcedHttps() 获取是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
 * @method void setIsForcedHttps(boolean $IsForcedHttps) 设置是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
 */
class BindSubDomainRequest extends AbstractModel
{
    /**
     * @var string 服务唯一 ID。
     */
    public $ServiceId;

    /**
     * @var string 待绑定的自定义的域名。
     */
    public $SubDomain;

    /**
     * @var string 服务支持协议，可选值为http、https、http&https。
     */
    public $Protocol;

    /**
     * @var string 网络类型，可选值为OUTER、INNER。
     */
    public $NetType;

    /**
     * @var boolean 是否使用默认路径映射，默认为 true。为 false 时，表示自定义路径映射，此时 PathMappingSet 必填。
     */
    public $IsDefaultMapping;

    /**
     * @var string 默认域名。
     */
    public $NetSubDomain;

    /**
     * @var string 待绑定自定义域名的证书唯一 ID。针对Protocol 为https或http&https可以选择上传。
     */
    public $CertificateId;

    /**
     * @var array 自定义域名路径映射，最多输入三个Environment，并且只能分别取值“test”、 ”prepub“、”release“。
     */
    public $PathMappingSet;

    /**
     * @var boolean 是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
     */
    public $IsForcedHttps;

    /**
     * @param string $ServiceId 服务唯一 ID。
     * @param string $SubDomain 待绑定的自定义的域名。
     * @param string $Protocol 服务支持协议，可选值为http、https、http&https。
     * @param string $NetType 网络类型，可选值为OUTER、INNER。
     * @param boolean $IsDefaultMapping 是否使用默认路径映射，默认为 true。为 false 时，表示自定义路径映射，此时 PathMappingSet 必填。
     * @param string $NetSubDomain 默认域名。
     * @param string $CertificateId 待绑定自定义域名的证书唯一 ID。针对Protocol 为https或http&https可以选择上传。
     * @param array $PathMappingSet 自定义域名路径映射，最多输入三个Environment，并且只能分别取值“test”、 ”prepub“、”release“。
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("IsDefaultMapping",$param) and $param["IsDefaultMapping"] !== null) {
            $this->IsDefaultMapping = $param["IsDefaultMapping"];
        }

        if (array_key_exists("NetSubDomain",$param) and $param["NetSubDomain"] !== null) {
            $this->NetSubDomain = $param["NetSubDomain"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("PathMappingSet",$param) and $param["PathMappingSet"] !== null) {
            $this->PathMappingSet = [];
            foreach ($param["PathMappingSet"] as $key => $value){
                $obj = new PathMapping();
                $obj->deserialize($value);
                array_push($this->PathMappingSet, $obj);
            }
        }

        if (array_key_exists("IsForcedHttps",$param) and $param["IsForcedHttps"] !== null) {
            $this->IsForcedHttps = $param["IsForcedHttps"];
        }
    }
}
