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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC占用资源
 *
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getVpcName() 获取私有网络名称
 * @method void setVpcName(string $VpcName) 设置私有网络名称
 * @method string getCidrBlock() 获取私有网络的CIDR
 * @method void setCidrBlock(string $CidrBlock) 设置私有网络的CIDR
 * @method integer getSubnetNum() 获取子网个数
 * @method void setSubnetNum(integer $SubnetNum) 设置子网个数
 * @method integer getNatNum() 获取NAT个数
 * @method void setNatNum(integer $NatNum) 设置NAT个数
 * @method string getState() 获取VPC状态
 * @method void setState(string $State) 设置VPC状态
 * @method boolean getMonitorFlag() 获取是否开启监控
 * @method void setMonitorFlag(boolean $MonitorFlag) 设置是否开启监控
 * @method integer getCpmNum() 获取物理机个数
 * @method void setCpmNum(integer $CpmNum) 设置物理机个数
 * @method integer getLeaveIpNum() 获取可用IP个数
 * @method void setLeaveIpNum(integer $LeaveIpNum) 设置可用IP个数
 * @method integer getLbNum() 获取负载均衡个数
 * @method void setLbNum(integer $LbNum) 设置负载均衡个数
 * @method integer getTrafficMirrorNum() 获取流量镜像网关个数
 * @method void setTrafficMirrorNum(integer $TrafficMirrorNum) 设置流量镜像网关个数
 * @method integer getEipNum() 获取弹性IP个数
 * @method void setEipNum(integer $EipNum) 设置弹性IP个数
 * @method integer getPlgwNum() 获取专线网关个数
 * @method void setPlgwNum(integer $PlgwNum) 设置专线网关个数
 * @method integer getPlvpNum() 获取专线通道个数
 * @method void setPlvpNum(integer $PlvpNum) 设置专线通道个数
 * @method integer getSslVpnGwNum() 获取ssl vpn网关个数
 * @method void setSslVpnGwNum(integer $SslVpnGwNum) 设置ssl vpn网关个数
 * @method integer getVpcPeerNum() 获取对等链接个数
 * @method void setVpcPeerNum(integer $VpcPeerNum) 设置对等链接个数
 * @method integer getIpsecVpnGwNum() 获取ipsec vpn网关个数
 * @method void setIpsecVpnGwNum(integer $IpsecVpnGwNum) 设置ipsec vpn网关个数
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getIsOld() 获取是否老专区VPC
 * @method void setIsOld(boolean $IsOld) 设置是否老专区VPC
 * @method integer getCcnServiceNum() 获取云联网服务个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnServiceNum(integer $CcnServiceNum) 设置云联网服务个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVpcPeerLimitToAllRegion() 获取VPC允许创建的对等连接个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcPeerLimitToAllRegion(integer $VpcPeerLimitToAllRegion) 设置VPC允许创建的对等连接个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVpcPeerLimitToSameRegion() 获取VPC允许创建的同地域的对等连接的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcPeerLimitToSameRegion(integer $VpcPeerLimitToSameRegion) 设置VPC允许创建的同地域的对等连接的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntVpcId() 获取整型私有网络ID
 * @method void setIntVpcId(integer $IntVpcId) 设置整型私有网络ID
 */
class VpcResource extends AbstractModel
{
    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 私有网络名称
     */
    public $VpcName;

    /**
     * @var string 私有网络的CIDR
     */
    public $CidrBlock;

    /**
     * @var integer 子网个数
     */
    public $SubnetNum;

    /**
     * @var integer NAT个数
     */
    public $NatNum;

    /**
     * @var string VPC状态
     */
    public $State;

    /**
     * @var boolean 是否开启监控
     */
    public $MonitorFlag;

    /**
     * @var integer 物理机个数
     */
    public $CpmNum;

    /**
     * @var integer 可用IP个数
     */
    public $LeaveIpNum;

    /**
     * @var integer 负载均衡个数
     */
    public $LbNum;

    /**
     * @var integer 流量镜像网关个数
     */
    public $TrafficMirrorNum;

    /**
     * @var integer 弹性IP个数
     */
    public $EipNum;

    /**
     * @var integer 专线网关个数
     */
    public $PlgwNum;

    /**
     * @var integer 专线通道个数
     */
    public $PlvpNum;

    /**
     * @var integer ssl vpn网关个数
     */
    public $SslVpnGwNum;

    /**
     * @var integer 对等链接个数
     */
    public $VpcPeerNum;

    /**
     * @var integer ipsec vpn网关个数
     */
    public $IpsecVpnGwNum;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否老专区VPC
     */
    public $IsOld;

    /**
     * @var integer 云联网服务个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnServiceNum;

    /**
     * @var integer VPC允许创建的对等连接个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcPeerLimitToAllRegion;

    /**
     * @var integer VPC允许创建的同地域的对等连接的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcPeerLimitToSameRegion;

    /**
     * @var integer 整型私有网络ID
     */
    public $IntVpcId;

    /**
     * @param string $VpcId 私有网络ID
     * @param string $VpcName 私有网络名称
     * @param string $CidrBlock 私有网络的CIDR
     * @param integer $SubnetNum 子网个数
     * @param integer $NatNum NAT个数
     * @param string $State VPC状态
     * @param boolean $MonitorFlag 是否开启监控
     * @param integer $CpmNum 物理机个数
     * @param integer $LeaveIpNum 可用IP个数
     * @param integer $LbNum 负载均衡个数
     * @param integer $TrafficMirrorNum 流量镜像网关个数
     * @param integer $EipNum 弹性IP个数
     * @param integer $PlgwNum 专线网关个数
     * @param integer $PlvpNum 专线通道个数
     * @param integer $SslVpnGwNum ssl vpn网关个数
     * @param integer $VpcPeerNum 对等链接个数
     * @param integer $IpsecVpnGwNum ipsec vpn网关个数
     * @param string $Zone 可用区
     * @param string $CreateTime 创建时间
     * @param boolean $IsOld 是否老专区VPC
     * @param integer $CcnServiceNum 云联网服务个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VpcPeerLimitToAllRegion VPC允许创建的对等连接个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VpcPeerLimitToSameRegion VPC允许创建的同地域的对等连接的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntVpcId 整型私有网络ID
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

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("SubnetNum",$param) and $param["SubnetNum"] !== null) {
            $this->SubnetNum = $param["SubnetNum"];
        }

        if (array_key_exists("NatNum",$param) and $param["NatNum"] !== null) {
            $this->NatNum = $param["NatNum"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("MonitorFlag",$param) and $param["MonitorFlag"] !== null) {
            $this->MonitorFlag = $param["MonitorFlag"];
        }

        if (array_key_exists("CpmNum",$param) and $param["CpmNum"] !== null) {
            $this->CpmNum = $param["CpmNum"];
        }

        if (array_key_exists("LeaveIpNum",$param) and $param["LeaveIpNum"] !== null) {
            $this->LeaveIpNum = $param["LeaveIpNum"];
        }

        if (array_key_exists("LbNum",$param) and $param["LbNum"] !== null) {
            $this->LbNum = $param["LbNum"];
        }

        if (array_key_exists("TrafficMirrorNum",$param) and $param["TrafficMirrorNum"] !== null) {
            $this->TrafficMirrorNum = $param["TrafficMirrorNum"];
        }

        if (array_key_exists("EipNum",$param) and $param["EipNum"] !== null) {
            $this->EipNum = $param["EipNum"];
        }

        if (array_key_exists("PlgwNum",$param) and $param["PlgwNum"] !== null) {
            $this->PlgwNum = $param["PlgwNum"];
        }

        if (array_key_exists("PlvpNum",$param) and $param["PlvpNum"] !== null) {
            $this->PlvpNum = $param["PlvpNum"];
        }

        if (array_key_exists("SslVpnGwNum",$param) and $param["SslVpnGwNum"] !== null) {
            $this->SslVpnGwNum = $param["SslVpnGwNum"];
        }

        if (array_key_exists("VpcPeerNum",$param) and $param["VpcPeerNum"] !== null) {
            $this->VpcPeerNum = $param["VpcPeerNum"];
        }

        if (array_key_exists("IpsecVpnGwNum",$param) and $param["IpsecVpnGwNum"] !== null) {
            $this->IpsecVpnGwNum = $param["IpsecVpnGwNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsOld",$param) and $param["IsOld"] !== null) {
            $this->IsOld = $param["IsOld"];
        }

        if (array_key_exists("CcnServiceNum",$param) and $param["CcnServiceNum"] !== null) {
            $this->CcnServiceNum = $param["CcnServiceNum"];
        }

        if (array_key_exists("VpcPeerLimitToAllRegion",$param) and $param["VpcPeerLimitToAllRegion"] !== null) {
            $this->VpcPeerLimitToAllRegion = $param["VpcPeerLimitToAllRegion"];
        }

        if (array_key_exists("VpcPeerLimitToSameRegion",$param) and $param["VpcPeerLimitToSameRegion"] !== null) {
            $this->VpcPeerLimitToSameRegion = $param["VpcPeerLimitToSameRegion"];
        }

        if (array_key_exists("IntVpcId",$param) and $param["IntVpcId"] !== null) {
            $this->IntVpcId = $param["IntVpcId"];
        }
    }
}
