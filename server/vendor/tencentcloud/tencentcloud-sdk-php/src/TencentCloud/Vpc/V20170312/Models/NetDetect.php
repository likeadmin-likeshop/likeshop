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
 * 网络探测对象。
 *
 * @method string getVpcId() 获取`VPC`实例`ID`。形如：`vpc-12345678`
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`。形如：`vpc-12345678`
 * @method string getVpcName() 获取`VPC`实例名称。
 * @method void setVpcName(string $VpcName) 设置`VPC`实例名称。
 * @method string getSubnetId() 获取子网实例ID。形如：subnet-12345678。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID。形如：subnet-12345678。
 * @method string getSubnetName() 获取子网实例名称。
 * @method void setSubnetName(string $SubnetName) 设置子网实例名称。
 * @method string getNetDetectId() 获取网络探测实例ID。形如：netd-12345678。
 * @method void setNetDetectId(string $NetDetectId) 设置网络探测实例ID。形如：netd-12345678。
 * @method string getNetDetectName() 获取网络探测名称，最大长度不能超过60个字节。
 * @method void setNetDetectName(string $NetDetectName) 设置网络探测名称，最大长度不能超过60个字节。
 * @method array getDetectDestinationIp() 获取探测目的IPv4地址数组，最多两个。
 * @method void setDetectDestinationIp(array $DetectDestinationIp) 设置探测目的IPv4地址数组，最多两个。
 * @method array getDetectSourceIp() 获取系统自动分配的探测源IPv4数组。长度为2。
 * @method void setDetectSourceIp(array $DetectSourceIp) 设置系统自动分配的探测源IPv4数组。长度为2。
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
下一跳类型为CCN，取值云联网网关，形如：ccn-12345678；
 * @method void setNextHopDestination(string $NextHopDestination) 设置下一跳目的网关，取值与“下一跳类型”相关：
下一跳类型为VPN，取值VPN网关ID，形如：vpngw-12345678；
下一跳类型为DIRECTCONNECT，取值专线网关ID，形如：dcg-12345678；
下一跳类型为PEERCONNECTION，取值对等连接ID，形如：pcx-12345678；
下一跳类型为NAT，取值Nat网关，形如：nat-12345678；
下一跳类型为NORMAL_CVM，取值云服务器IPv4地址，形如：10.0.0.12；
下一跳类型为CCN，取值云联网网关，形如：ccn-12345678；
 * @method string getNextHopName() 获取下一跳网关名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextHopName(string $NextHopName) 设置下一跳网关名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetDetectDescription() 获取网络探测描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetDetectDescription(string $NetDetectDescription) 设置网络探测描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class NetDetect extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`。形如：`vpc-12345678`
     */
    public $VpcId;

    /**
     * @var string `VPC`实例名称。
     */
    public $VpcName;

    /**
     * @var string 子网实例ID。形如：subnet-12345678。
     */
    public $SubnetId;

    /**
     * @var string 子网实例名称。
     */
    public $SubnetName;

    /**
     * @var string 网络探测实例ID。形如：netd-12345678。
     */
    public $NetDetectId;

    /**
     * @var string 网络探测名称，最大长度不能超过60个字节。
     */
    public $NetDetectName;

    /**
     * @var array 探测目的IPv4地址数组，最多两个。
     */
    public $DetectDestinationIp;

    /**
     * @var array 系统自动分配的探测源IPv4数组。长度为2。
     */
    public $DetectSourceIp;

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
下一跳类型为CCN，取值云联网网关，形如：ccn-12345678；
     */
    public $NextHopDestination;

    /**
     * @var string 下一跳网关名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextHopName;

    /**
     * @var string 网络探测描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetDetectDescription;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $VpcId `VPC`实例`ID`。形如：`vpc-12345678`
     * @param string $VpcName `VPC`实例名称。
     * @param string $SubnetId 子网实例ID。形如：subnet-12345678。
     * @param string $SubnetName 子网实例名称。
     * @param string $NetDetectId 网络探测实例ID。形如：netd-12345678。
     * @param string $NetDetectName 网络探测名称，最大长度不能超过60个字节。
     * @param array $DetectDestinationIp 探测目的IPv4地址数组，最多两个。
     * @param array $DetectSourceIp 系统自动分配的探测源IPv4数组。长度为2。
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
下一跳类型为CCN，取值云联网网关，形如：ccn-12345678；
     * @param string $NextHopName 下一跳网关名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetDetectDescription 网络探测描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("NetDetectId",$param) and $param["NetDetectId"] !== null) {
            $this->NetDetectId = $param["NetDetectId"];
        }

        if (array_key_exists("NetDetectName",$param) and $param["NetDetectName"] !== null) {
            $this->NetDetectName = $param["NetDetectName"];
        }

        if (array_key_exists("DetectDestinationIp",$param) and $param["DetectDestinationIp"] !== null) {
            $this->DetectDestinationIp = $param["DetectDestinationIp"];
        }

        if (array_key_exists("DetectSourceIp",$param) and $param["DetectSourceIp"] !== null) {
            $this->DetectSourceIp = $param["DetectSourceIp"];
        }

        if (array_key_exists("NextHopType",$param) and $param["NextHopType"] !== null) {
            $this->NextHopType = $param["NextHopType"];
        }

        if (array_key_exists("NextHopDestination",$param) and $param["NextHopDestination"] !== null) {
            $this->NextHopDestination = $param["NextHopDestination"];
        }

        if (array_key_exists("NextHopName",$param) and $param["NextHopName"] !== null) {
            $this->NextHopName = $param["NextHopName"];
        }

        if (array_key_exists("NetDetectDescription",$param) and $param["NetDetectDescription"] !== null) {
            $this->NetDetectDescription = $param["NetDetectDescription"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
