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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专用通道信息列表
 *
 * @method string getDirectConnectTunnelId() 获取专用通道ID
 * @method void setDirectConnectTunnelId(string $DirectConnectTunnelId) 设置专用通道ID
 * @method string getDirectConnectId() 获取物理专线ID
 * @method void setDirectConnectId(string $DirectConnectId) 设置物理专线ID
 * @method string getState() 获取专用通道状态
AVAILABLE:就绪或者已连接
PENDING:申请中
ALLOCATING:配置中
ALLOCATED:配置完成
ALTERING:修改中
DELETING:删除中
DELETED:删除完成
COMFIRMING:待接受
REJECTED:拒绝
 * @method void setState(string $State) 设置专用通道状态
AVAILABLE:就绪或者已连接
PENDING:申请中
ALLOCATING:配置中
ALLOCATED:配置完成
ALTERING:修改中
DELETING:删除中
DELETED:删除完成
COMFIRMING:待接受
REJECTED:拒绝
 * @method string getDirectConnectOwnerAccount() 获取物理专线的拥有者，开发商账号 ID
 * @method void setDirectConnectOwnerAccount(string $DirectConnectOwnerAccount) 设置物理专线的拥有者，开发商账号 ID
 * @method string getOwnerAccount() 获取专用通道的拥有者，开发商账号 ID
 * @method void setOwnerAccount(string $OwnerAccount) 设置专用通道的拥有者，开发商账号 ID
 * @method string getNetworkType() 获取网络类型，分别为VPC、BMVPC、CCN
 VPC：私有网络 ，BMVPC：黑石网络，CCN：云联网
 * @method void setNetworkType(string $NetworkType) 设置网络类型，分别为VPC、BMVPC、CCN
 VPC：私有网络 ，BMVPC：黑石网络，CCN：云联网
 * @method string getNetworkRegion() 获取VPC地域对应的网络名，如ap-guangzhou
 * @method void setNetworkRegion(string $NetworkRegion) 设置VPC地域对应的网络名，如ap-guangzhou
 * @method string getVpcId() 获取私有网络统一 ID 或者黑石网络统一 ID
 * @method void setVpcId(string $VpcId) 设置私有网络统一 ID 或者黑石网络统一 ID
 * @method string getDirectConnectGatewayId() 获取专线网关 ID
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关 ID
 * @method string getRouteType() 获取BGP ：BGP路由 STATIC：静态 默认为 BGP 路由
 * @method void setRouteType(string $RouteType) 设置BGP ：BGP路由 STATIC：静态 默认为 BGP 路由
 * @method BgpPeer getBgpPeer() 获取用户侧BGP，Asn，AuthKey
 * @method void setBgpPeer(BgpPeer $BgpPeer) 设置用户侧BGP，Asn，AuthKey
 * @method array getRouteFilterPrefixes() 获取用户侧网段地址
 * @method void setRouteFilterPrefixes(array $RouteFilterPrefixes) 设置用户侧网段地址
 * @method integer getVlan() 获取专用通道的Vlan
 * @method void setVlan(integer $Vlan) 设置专用通道的Vlan
 * @method string getTencentAddress() 获取TencentAddress，腾讯侧互联 IP
 * @method void setTencentAddress(string $TencentAddress) 设置TencentAddress，腾讯侧互联 IP
 * @method string getCustomerAddress() 获取CustomerAddress，用户侧互联 IP
 * @method void setCustomerAddress(string $CustomerAddress) 设置CustomerAddress，用户侧互联 IP
 * @method string getDirectConnectTunnelName() 获取专用通道名称
 * @method void setDirectConnectTunnelName(string $DirectConnectTunnelName) 设置专用通道名称
 * @method string getCreatedTime() 获取专用通道创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置专用通道创建时间
 * @method integer getBandwidth() 获取专用通道带宽值
 * @method void setBandwidth(integer $Bandwidth) 设置专用通道带宽值
 * @method array getTagSet() 获取专用通道标签值
 * @method void setTagSet(array $TagSet) 设置专用通道标签值
 * @method string getNetDetectId() 获取关联的网络自定义探测ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetDetectId(string $NetDetectId) 设置关联的网络自定义探测ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableBGPCommunity() 获取BGP community开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableBGPCommunity(boolean $EnableBGPCommunity) 设置BGP community开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNatType() 获取是否为Nat通道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatType(integer $NatType) 设置是否为Nat通道
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcRegion() 获取VPC地域简码，如gz、cd
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcRegion(string $VpcRegion) 设置VPC地域简码，如gz、cd
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBfdEnable() 获取是否开启BFD
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBfdEnable(integer $BfdEnable) 设置是否开启BFD
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessPointType() 获取专用通道接入点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessPointType(string $AccessPointType) 设置专用通道接入点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDirectConnectGatewayName() 获取专线网关名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) 设置专线网关名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取VPC名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置VPC名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTencentBackupAddress() 获取TencentBackupAddress，腾讯侧备用互联 IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTencentBackupAddress(string $TencentBackupAddress) 设置TencentBackupAddress，腾讯侧备用互联 IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSignLaw() 获取专用通道关联的物理专线是否签署了用户协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignLaw(boolean $SignLaw) 设置专用通道关联的物理专线是否签署了用户协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloudAttachId() 获取高速上云服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudAttachId(string $CloudAttachId) 设置高速上云服务ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class DirectConnectTunnel extends AbstractModel
{
    /**
     * @var string 专用通道ID
     */
    public $DirectConnectTunnelId;

    /**
     * @var string 物理专线ID
     */
    public $DirectConnectId;

    /**
     * @var string 专用通道状态
AVAILABLE:就绪或者已连接
PENDING:申请中
ALLOCATING:配置中
ALLOCATED:配置完成
ALTERING:修改中
DELETING:删除中
DELETED:删除完成
COMFIRMING:待接受
REJECTED:拒绝
     */
    public $State;

    /**
     * @var string 物理专线的拥有者，开发商账号 ID
     */
    public $DirectConnectOwnerAccount;

    /**
     * @var string 专用通道的拥有者，开发商账号 ID
     */
    public $OwnerAccount;

    /**
     * @var string 网络类型，分别为VPC、BMVPC、CCN
 VPC：私有网络 ，BMVPC：黑石网络，CCN：云联网
     */
    public $NetworkType;

    /**
     * @var string VPC地域对应的网络名，如ap-guangzhou
     */
    public $NetworkRegion;

    /**
     * @var string 私有网络统一 ID 或者黑石网络统一 ID
     */
    public $VpcId;

    /**
     * @var string 专线网关 ID
     */
    public $DirectConnectGatewayId;

    /**
     * @var string BGP ：BGP路由 STATIC：静态 默认为 BGP 路由
     */
    public $RouteType;

    /**
     * @var BgpPeer 用户侧BGP，Asn，AuthKey
     */
    public $BgpPeer;

    /**
     * @var array 用户侧网段地址
     */
    public $RouteFilterPrefixes;

    /**
     * @var integer 专用通道的Vlan
     */
    public $Vlan;

    /**
     * @var string TencentAddress，腾讯侧互联 IP
     */
    public $TencentAddress;

    /**
     * @var string CustomerAddress，用户侧互联 IP
     */
    public $CustomerAddress;

    /**
     * @var string 专用通道名称
     */
    public $DirectConnectTunnelName;

    /**
     * @var string 专用通道创建时间
     */
    public $CreatedTime;

    /**
     * @var integer 专用通道带宽值
     */
    public $Bandwidth;

    /**
     * @var array 专用通道标签值
     */
    public $TagSet;

    /**
     * @var string 关联的网络自定义探测ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetDetectId;

    /**
     * @var boolean BGP community开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableBGPCommunity;

    /**
     * @var integer 是否为Nat通道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatType;

    /**
     * @var string VPC地域简码，如gz、cd
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcRegion;

    /**
     * @var integer 是否开启BFD
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BfdEnable;

    /**
     * @var string 专用通道接入点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessPointType;

    /**
     * @var string 专线网关名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DirectConnectGatewayName;

    /**
     * @var string VPC名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @var string TencentBackupAddress，腾讯侧备用互联 IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TencentBackupAddress;

    /**
     * @var boolean 专用通道关联的物理专线是否签署了用户协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignLaw;

    /**
     * @var string 高速上云服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudAttachId;

    /**
     * @param string $DirectConnectTunnelId 专用通道ID
     * @param string $DirectConnectId 物理专线ID
     * @param string $State 专用通道状态
AVAILABLE:就绪或者已连接
PENDING:申请中
ALLOCATING:配置中
ALLOCATED:配置完成
ALTERING:修改中
DELETING:删除中
DELETED:删除完成
COMFIRMING:待接受
REJECTED:拒绝
     * @param string $DirectConnectOwnerAccount 物理专线的拥有者，开发商账号 ID
     * @param string $OwnerAccount 专用通道的拥有者，开发商账号 ID
     * @param string $NetworkType 网络类型，分别为VPC、BMVPC、CCN
 VPC：私有网络 ，BMVPC：黑石网络，CCN：云联网
     * @param string $NetworkRegion VPC地域对应的网络名，如ap-guangzhou
     * @param string $VpcId 私有网络统一 ID 或者黑石网络统一 ID
     * @param string $DirectConnectGatewayId 专线网关 ID
     * @param string $RouteType BGP ：BGP路由 STATIC：静态 默认为 BGP 路由
     * @param BgpPeer $BgpPeer 用户侧BGP，Asn，AuthKey
     * @param array $RouteFilterPrefixes 用户侧网段地址
     * @param integer $Vlan 专用通道的Vlan
     * @param string $TencentAddress TencentAddress，腾讯侧互联 IP
     * @param string $CustomerAddress CustomerAddress，用户侧互联 IP
     * @param string $DirectConnectTunnelName 专用通道名称
     * @param string $CreatedTime 专用通道创建时间
     * @param integer $Bandwidth 专用通道带宽值
     * @param array $TagSet 专用通道标签值
     * @param string $NetDetectId 关联的网络自定义探测ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableBGPCommunity BGP community开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NatType 是否为Nat通道
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcRegion VPC地域简码，如gz、cd
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BfdEnable 是否开启BFD
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessPointType 专用通道接入点类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DirectConnectGatewayName 专线网关名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName VPC名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TencentBackupAddress TencentBackupAddress，腾讯侧备用互联 IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SignLaw 专用通道关联的物理专线是否签署了用户协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloudAttachId 高速上云服务ID
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
        if (array_key_exists("DirectConnectTunnelId",$param) and $param["DirectConnectTunnelId"] !== null) {
            $this->DirectConnectTunnelId = $param["DirectConnectTunnelId"];
        }

        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            $this->DirectConnectId = $param["DirectConnectId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DirectConnectOwnerAccount",$param) and $param["DirectConnectOwnerAccount"] !== null) {
            $this->DirectConnectOwnerAccount = $param["DirectConnectOwnerAccount"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("NetworkRegion",$param) and $param["NetworkRegion"] !== null) {
            $this->NetworkRegion = $param["NetworkRegion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("BgpPeer",$param) and $param["BgpPeer"] !== null) {
            $this->BgpPeer = new BgpPeer();
            $this->BgpPeer->deserialize($param["BgpPeer"]);
        }

        if (array_key_exists("RouteFilterPrefixes",$param) and $param["RouteFilterPrefixes"] !== null) {
            $this->RouteFilterPrefixes = [];
            foreach ($param["RouteFilterPrefixes"] as $key => $value){
                $obj = new RouteFilterPrefix();
                $obj->deserialize($value);
                array_push($this->RouteFilterPrefixes, $obj);
            }
        }

        if (array_key_exists("Vlan",$param) and $param["Vlan"] !== null) {
            $this->Vlan = $param["Vlan"];
        }

        if (array_key_exists("TencentAddress",$param) and $param["TencentAddress"] !== null) {
            $this->TencentAddress = $param["TencentAddress"];
        }

        if (array_key_exists("CustomerAddress",$param) and $param["CustomerAddress"] !== null) {
            $this->CustomerAddress = $param["CustomerAddress"];
        }

        if (array_key_exists("DirectConnectTunnelName",$param) and $param["DirectConnectTunnelName"] !== null) {
            $this->DirectConnectTunnelName = $param["DirectConnectTunnelName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("NetDetectId",$param) and $param["NetDetectId"] !== null) {
            $this->NetDetectId = $param["NetDetectId"];
        }

        if (array_key_exists("EnableBGPCommunity",$param) and $param["EnableBGPCommunity"] !== null) {
            $this->EnableBGPCommunity = $param["EnableBGPCommunity"];
        }

        if (array_key_exists("NatType",$param) and $param["NatType"] !== null) {
            $this->NatType = $param["NatType"];
        }

        if (array_key_exists("VpcRegion",$param) and $param["VpcRegion"] !== null) {
            $this->VpcRegion = $param["VpcRegion"];
        }

        if (array_key_exists("BfdEnable",$param) and $param["BfdEnable"] !== null) {
            $this->BfdEnable = $param["BfdEnable"];
        }

        if (array_key_exists("AccessPointType",$param) and $param["AccessPointType"] !== null) {
            $this->AccessPointType = $param["AccessPointType"];
        }

        if (array_key_exists("DirectConnectGatewayName",$param) and $param["DirectConnectGatewayName"] !== null) {
            $this->DirectConnectGatewayName = $param["DirectConnectGatewayName"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("TencentBackupAddress",$param) and $param["TencentBackupAddress"] !== null) {
            $this->TencentBackupAddress = $param["TencentBackupAddress"];
        }

        if (array_key_exists("SignLaw",$param) and $param["SignLaw"] !== null) {
            $this->SignLaw = $param["SignLaw"];
        }

        if (array_key_exists("CloudAttachId",$param) and $param["CloudAttachId"] !== null) {
            $this->CloudAttachId = $param["CloudAttachId"];
        }
    }
}
