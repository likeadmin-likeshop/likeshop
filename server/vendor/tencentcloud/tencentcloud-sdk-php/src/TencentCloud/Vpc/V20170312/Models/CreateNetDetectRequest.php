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
 * CreateNetDetect请求参数结构体
 *
 * @method string getVpcId() 获取`VPC`实例`ID`。形如：`vpc-12345678`
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`。形如：`vpc-12345678`
 * @method string getSubnetId() 获取子网实例ID。形如：subnet-12345678。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID。形如：subnet-12345678。
 * @method string getNetDetectName() 获取网络探测名称，最大长度不能超过60个字节。
 * @method void setNetDetectName(string $NetDetectName) 设置网络探测名称，最大长度不能超过60个字节。
 * @method array getDetectDestinationIp() 获取探测目的IPv4地址数组。最多两个。
 * @method void setDetectDestinationIp(array $DetectDestinationIp) 设置探测目的IPv4地址数组。最多两个。
 * @method string getNextHopType() 获取下一跳类型，目前我们支持的类型有：
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
NAT：NAT网关；
NORMAL_CVM：普通云服务器；
CCN：云联网网关；
 * @method void setNextHopType(string $NextHopType) 设置下一跳类型，目前我们支持的类型有：
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
NAT：NAT网关；
NORMAL_CVM：普通云服务器；
CCN：云联网网关；
 * @method string getNextHopDestination() 获取下一跳目的网关，取值与“下一跳类型”相关：
下一跳类型为VPN，取值VPN网关ID，形如：vpngw-12345678；
下一跳类型为DIRECTCONNECT，取值专线网关ID，形如：dcg-12345678；
下一跳类型为PEERCONNECTION，取值对等连接ID，形如：pcx-12345678；
下一跳类型为NAT，取值Nat网关，形如：nat-12345678；
下一跳类型为NORMAL_CVM，取值云服务器IPv4地址，形如：10.0.0.12；
下一跳类型为CCN，取值云联网ID，形如：ccn-12345678；
 * @method void setNextHopDestination(string $NextHopDestination) 设置下一跳目的网关，取值与“下一跳类型”相关：
下一跳类型为VPN，取值VPN网关ID，形如：vpngw-12345678；
下一跳类型为DIRECTCONNECT，取值专线网关ID，形如：dcg-12345678；
下一跳类型为PEERCONNECTION，取值对等连接ID，形如：pcx-12345678；
下一跳类型为NAT，取值Nat网关，形如：nat-12345678；
下一跳类型为NORMAL_CVM，取值云服务器IPv4地址，形如：10.0.0.12；
下一跳类型为CCN，取值云联网ID，形如：ccn-12345678；
 * @method string getNetDetectDescription() 获取网络探测描述。
 * @method void setNetDetectDescription(string $NetDetectDescription) 设置网络探测描述。
 */
class CreateNetDetectRequest extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`。形如：`vpc-12345678`
     */
    public $VpcId;

    /**
     * @var string 子网实例ID。形如：subnet-12345678。
     */
    public $SubnetId;

    /**
     * @var string 网络探测名称，最大长度不能超过60个字节。
     */
    public $NetDetectName;

    /**
     * @var array 探测目的IPv4地址数组。最多两个。
     */
    public $DetectDestinationIp;

    /**
     * @var string 下一跳类型，目前我们支持的类型有：
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
NAT：NAT网关；
NORMAL_CVM：普通云服务器；
CCN：云联网网关；
     */
    public $NextHopType;

    /**
     * @var string 下一跳目的网关，取值与“下一跳类型”相关：
下一跳类型为VPN，取值VPN网关ID，形如：vpngw-12345678；
下一跳类型为DIRECTCONNECT，取值专线网关ID，形如：dcg-12345678；
下一跳类型为PEERCONNECTION，取值对等连接ID，形如：pcx-12345678；
下一跳类型为NAT，取值Nat网关，形如：nat-12345678；
下一跳类型为NORMAL_CVM，取值云服务器IPv4地址，形如：10.0.0.12；
下一跳类型为CCN，取值云联网ID，形如：ccn-12345678；
     */
    public $NextHopDestination;

    /**
     * @var string 网络探测描述。
     */
    public $NetDetectDescription;

    /**
     * @param string $VpcId `VPC`实例`ID`。形如：`vpc-12345678`
     * @param string $SubnetId 子网实例ID。形如：subnet-12345678。
     * @param string $NetDetectName 网络探测名称，最大长度不能超过60个字节。
     * @param array $DetectDestinationIp 探测目的IPv4地址数组。最多两个。
     * @param string $NextHopType 下一跳类型，目前我们支持的类型有：
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
NAT：NAT网关；
NORMAL_CVM：普通云服务器；
CCN：云联网网关；
     * @param string $NextHopDestination 下一跳目的网关，取值与“下一跳类型”相关：
下一跳类型为VPN，取值VPN网关ID，形如：vpngw-12345678；
下一跳类型为DIRECTCONNECT，取值专线网关ID，形如：dcg-12345678；
下一跳类型为PEERCONNECTION，取值对等连接ID，形如：pcx-12345678；
下一跳类型为NAT，取值Nat网关，形如：nat-12345678；
下一跳类型为NORMAL_CVM，取值云服务器IPv4地址，形如：10.0.0.12；
下一跳类型为CCN，取值云联网ID，形如：ccn-12345678；
     * @param string $NetDetectDescription 网络探测描述。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetDetectName",$param) and $param["NetDetectName"] !== null) {
            $this->NetDetectName = $param["NetDetectName"];
        }

        if (array_key_exists("DetectDestinationIp",$param) and $param["DetectDestinationIp"] !== null) {
            $this->DetectDestinationIp = $param["DetectDestinationIp"];
        }

        if (array_key_exists("NextHopType",$param) and $param["NextHopType"] !== null) {
            $this->NextHopType = $param["NextHopType"];
        }

        if (array_key_exists("NextHopDestination",$param) and $param["NextHopDestination"] !== null) {
            $this->NextHopDestination = $param["NextHopDestination"];
        }

        if (array_key_exists("NetDetectDescription",$param) and $param["NetDetectDescription"] !== null) {
            $this->NetDetectDescription = $param["NetDetectDescription"];
        }
    }
}
