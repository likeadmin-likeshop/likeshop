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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddBandwidthPackageResources请求参数结构体
 *
 * @method array getResourceIds() 获取资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'
 * @method void setResourceIds(array $ResourceIds) 设置资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'
 * @method string getBandwidthPackageId() 获取带宽包唯一标识ID，形如'bwp-xxxx'
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包唯一标识ID，形如'bwp-xxxx'
 * @method string getNetworkType() 获取带宽包类型，当前支持'BGP'类型，表示内部资源是BGP IP。
 * @method void setNetworkType(string $NetworkType) 设置带宽包类型，当前支持'BGP'类型，表示内部资源是BGP IP。
 * @method string getResourceType() 获取资源类型，包括'Address', 'LoadBalance'
 * @method void setResourceType(string $ResourceType) 设置资源类型，包括'Address', 'LoadBalance'
 * @method string getProtocol() 获取带宽包协议类型。当前支持'ipv4'和'ipv6'协议类型。
 * @method void setProtocol(string $Protocol) 设置带宽包协议类型。当前支持'ipv4'和'ipv6'协议类型。
 */
class AddBandwidthPackageResourcesRequest extends AbstractModel
{
    /**
     * @var array 资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'
     */
    public $ResourceIds;

    /**
     * @var string 带宽包唯一标识ID，形如'bwp-xxxx'
     */
    public $BandwidthPackageId;

    /**
     * @var string 带宽包类型，当前支持'BGP'类型，表示内部资源是BGP IP。
     */
    public $NetworkType;

    /**
     * @var string 资源类型，包括'Address', 'LoadBalance'
     */
    public $ResourceType;

    /**
     * @var string 带宽包协议类型。当前支持'ipv4'和'ipv6'协议类型。
     */
    public $Protocol;

    /**
     * @param array $ResourceIds 资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'
     * @param string $BandwidthPackageId 带宽包唯一标识ID，形如'bwp-xxxx'
     * @param string $NetworkType 带宽包类型，当前支持'BGP'类型，表示内部资源是BGP IP。
     * @param string $ResourceType 资源类型，包括'Address', 'LoadBalance'
     * @param string $Protocol 带宽包协议类型。当前支持'ipv4'和'ipv6'协议类型。
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
