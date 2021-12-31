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
 * 黑石子网的信息
 *
 * @method string getVpcId() 获取私有网络的唯一ID。
 * @method void setVpcId(string $VpcId) 设置私有网络的唯一ID。
 * @method string getVpcName() 获取VPC的名称。
 * @method void setVpcName(string $VpcName) 设置VPC的名称。
 * @method string getVpcCidrBlock() 获取VPC的CIDR。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置VPC的CIDR。
 * @method string getSubnetId() 获取私有网络的唯一ID
 * @method void setSubnetId(string $SubnetId) 设置私有网络的唯一ID
 * @method string getSubnetName() 获取子网名称。
 * @method void setSubnetName(string $SubnetName) 设置子网名称。
 * @method string getCidrBlock() 获取子网CIDR。
 * @method void setCidrBlock(string $CidrBlock) 设置子网CIDR。
 * @method integer getType() 获取子网类型。0: 黑石物理机子网; 6: ccs子网; 7 Docker子网; 8: 虚拟机子网
 * @method void setType(integer $Type) 设置子网类型。0: 黑石物理机子网; 6: ccs子网; 7 Docker子网; 8: 虚拟机子网
 * @method integer getZoneId() 获取子网可用区ID。
 * @method void setZoneId(integer $ZoneId) 设置子网可用区ID。
 * @method integer getCpmNum() 获取子网物理机的个数
 * @method void setCpmNum(integer $CpmNum) 设置子网物理机的个数
 * @method integer getVlanId() 获取子网的VlanId。
 * @method void setVlanId(integer $VlanId) 设置子网的VlanId。
 * @method integer getDistributedFlag() 获取是否开启分布式网关 ，关闭为0，开启为1。
 * @method void setDistributedFlag(integer $DistributedFlag) 设置是否开启分布式网关 ，关闭为0，开启为1。
 * @method integer getDhcpEnable() 获取是否开启dhcp relay ，关闭为0，开启为1。默认为0。
 * @method void setDhcpEnable(integer $DhcpEnable) 设置是否开启dhcp relay ，关闭为0，开启为1。默认为0。
 * @method array getDhcpServerIp() 获取DHCP SERVER 的IP地址数组。IP地址为相同VPC的子网内分配的IP。
 * @method void setDhcpServerIp(array $DhcpServerIp) 设置DHCP SERVER 的IP地址数组。IP地址为相同VPC的子网内分配的IP。
 * @method integer getIpReserve() 获取预留的IP个数。从该子网的最大可分配IP倒序分配N个IP 用于DHCP 动态分配使用的地址段。
 * @method void setIpReserve(integer $IpReserve) 设置预留的IP个数。从该子网的最大可分配IP倒序分配N个IP 用于DHCP 动态分配使用的地址段。
 * @method integer getAvailableIpNum() 获取子网中可用的IP个数
 * @method void setAvailableIpNum(integer $AvailableIpNum) 设置子网中可用的IP个数
 * @method integer getTotalIpNum() 获取子网中总共的IP个数
 * @method void setTotalIpNum(integer $TotalIpNum) 设置子网中总共的IP个数
 * @method string getSubnetCreateTime() 获取子网创建时间
 * @method void setSubnetCreateTime(string $SubnetCreateTime) 设置子网创建时间
 * @method integer getIsSmartNic() 获取25G子网标识
 * @method void setIsSmartNic(integer $IsSmartNic) 设置25G子网标识
 * @method string getZone() 获取子网可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置子网可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVpcZoneId() 获取VPC所在可用区ID
 * @method void setVpcZoneId(integer $VpcZoneId) 设置VPC所在可用区ID
 * @method string getVpcZone() 获取VPC所在可用区
 * @method void setVpcZone(string $VpcZone) 设置VPC所在可用区
 * @method integer getBroadcastFlag() 获取是否开启广播，关闭为0，开启为1。
 * @method void setBroadcastFlag(integer $BroadcastFlag) 设置是否开启广播，关闭为0，开启为1。
 */
class SubnetInfo extends AbstractModel
{
    /**
     * @var string 私有网络的唯一ID。
     */
    public $VpcId;

    /**
     * @var string VPC的名称。
     */
    public $VpcName;

    /**
     * @var string VPC的CIDR。
     */
    public $VpcCidrBlock;

    /**
     * @var string 私有网络的唯一ID
     */
    public $SubnetId;

    /**
     * @var string 子网名称。
     */
    public $SubnetName;

    /**
     * @var string 子网CIDR。
     */
    public $CidrBlock;

    /**
     * @var integer 子网类型。0: 黑石物理机子网; 6: ccs子网; 7 Docker子网; 8: 虚拟机子网
     */
    public $Type;

    /**
     * @var integer 子网可用区ID。
     */
    public $ZoneId;

    /**
     * @var integer 子网物理机的个数
     */
    public $CpmNum;

    /**
     * @var integer 子网的VlanId。
     */
    public $VlanId;

    /**
     * @var integer 是否开启分布式网关 ，关闭为0，开启为1。
     */
    public $DistributedFlag;

    /**
     * @var integer 是否开启dhcp relay ，关闭为0，开启为1。默认为0。
     */
    public $DhcpEnable;

    /**
     * @var array DHCP SERVER 的IP地址数组。IP地址为相同VPC的子网内分配的IP。
     */
    public $DhcpServerIp;

    /**
     * @var integer 预留的IP个数。从该子网的最大可分配IP倒序分配N个IP 用于DHCP 动态分配使用的地址段。
     */
    public $IpReserve;

    /**
     * @var integer 子网中可用的IP个数
     */
    public $AvailableIpNum;

    /**
     * @var integer 子网中总共的IP个数
     */
    public $TotalIpNum;

    /**
     * @var string 子网创建时间
     */
    public $SubnetCreateTime;

    /**
     * @var integer 25G子网标识
     */
    public $IsSmartNic;

    /**
     * @var string 子网可用区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var integer VPC所在可用区ID
     */
    public $VpcZoneId;

    /**
     * @var string VPC所在可用区
     */
    public $VpcZone;

    /**
     * @var integer 是否开启广播，关闭为0，开启为1。
     */
    public $BroadcastFlag;

    /**
     * @param string $VpcId 私有网络的唯一ID。
     * @param string $VpcName VPC的名称。
     * @param string $VpcCidrBlock VPC的CIDR。
     * @param string $SubnetId 私有网络的唯一ID
     * @param string $SubnetName 子网名称。
     * @param string $CidrBlock 子网CIDR。
     * @param integer $Type 子网类型。0: 黑石物理机子网; 6: ccs子网; 7 Docker子网; 8: 虚拟机子网
     * @param integer $ZoneId 子网可用区ID。
     * @param integer $CpmNum 子网物理机的个数
     * @param integer $VlanId 子网的VlanId。
     * @param integer $DistributedFlag 是否开启分布式网关 ，关闭为0，开启为1。
     * @param integer $DhcpEnable 是否开启dhcp relay ，关闭为0，开启为1。默认为0。
     * @param array $DhcpServerIp DHCP SERVER 的IP地址数组。IP地址为相同VPC的子网内分配的IP。
     * @param integer $IpReserve 预留的IP个数。从该子网的最大可分配IP倒序分配N个IP 用于DHCP 动态分配使用的地址段。
     * @param integer $AvailableIpNum 子网中可用的IP个数
     * @param integer $TotalIpNum 子网中总共的IP个数
     * @param string $SubnetCreateTime 子网创建时间
     * @param integer $IsSmartNic 25G子网标识
     * @param string $Zone 子网可用区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VpcZoneId VPC所在可用区ID
     * @param string $VpcZone VPC所在可用区
     * @param integer $BroadcastFlag 是否开启广播，关闭为0，开启为1。
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

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("CpmNum",$param) and $param["CpmNum"] !== null) {
            $this->CpmNum = $param["CpmNum"];
        }

        if (array_key_exists("VlanId",$param) and $param["VlanId"] !== null) {
            $this->VlanId = $param["VlanId"];
        }

        if (array_key_exists("DistributedFlag",$param) and $param["DistributedFlag"] !== null) {
            $this->DistributedFlag = $param["DistributedFlag"];
        }

        if (array_key_exists("DhcpEnable",$param) and $param["DhcpEnable"] !== null) {
            $this->DhcpEnable = $param["DhcpEnable"];
        }

        if (array_key_exists("DhcpServerIp",$param) and $param["DhcpServerIp"] !== null) {
            $this->DhcpServerIp = $param["DhcpServerIp"];
        }

        if (array_key_exists("IpReserve",$param) and $param["IpReserve"] !== null) {
            $this->IpReserve = $param["IpReserve"];
        }

        if (array_key_exists("AvailableIpNum",$param) and $param["AvailableIpNum"] !== null) {
            $this->AvailableIpNum = $param["AvailableIpNum"];
        }

        if (array_key_exists("TotalIpNum",$param) and $param["TotalIpNum"] !== null) {
            $this->TotalIpNum = $param["TotalIpNum"];
        }

        if (array_key_exists("SubnetCreateTime",$param) and $param["SubnetCreateTime"] !== null) {
            $this->SubnetCreateTime = $param["SubnetCreateTime"];
        }

        if (array_key_exists("IsSmartNic",$param) and $param["IsSmartNic"] !== null) {
            $this->IsSmartNic = $param["IsSmartNic"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcZoneId",$param) and $param["VpcZoneId"] !== null) {
            $this->VpcZoneId = $param["VpcZoneId"];
        }

        if (array_key_exists("VpcZone",$param) and $param["VpcZone"] !== null) {
            $this->VpcZone = $param["VpcZone"];
        }

        if (array_key_exists("BroadcastFlag",$param) and $param["BroadcastFlag"] !== null) {
            $this->BroadcastFlag = $param["BroadcastFlag"];
        }
    }
}
