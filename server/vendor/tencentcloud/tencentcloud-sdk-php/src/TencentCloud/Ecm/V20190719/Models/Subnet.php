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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子网对象
 *
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getSubnetId() 获取子网实例ID，例如：subnet-bthucmmy。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID，例如：subnet-bthucmmy。
 * @method string getSubnetName() 获取子网名称。
 * @method void setSubnetName(string $SubnetName) 设置子网名称。
 * @method string getCidrBlock() 获取子网的 IPv4 CIDR。
 * @method void setCidrBlock(string $CidrBlock) 设置子网的 IPv4 CIDR。
 * @method boolean getIsDefault() 获取是否默认子网。
 * @method void setIsDefault(boolean $IsDefault) 设置是否默认子网。
 * @method boolean getEnableBroadcast() 获取是否开启广播。
 * @method void setEnableBroadcast(boolean $EnableBroadcast) 设置是否开启广播。
 * @method string getRouteTableId() 获取路由表实例ID，例如：rtb-l2h8d7c2。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID，例如：rtb-l2h8d7c2。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method integer getAvailableIpAddressCount() 获取可用IP数。
 * @method void setAvailableIpAddressCount(integer $AvailableIpAddressCount) 设置可用IP数。
 * @method string getIpv6CidrBlock() 获取子网的 IPv6 CIDR。
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置子网的 IPv6 CIDR。
 * @method string getNetworkAclId() 获取关联ACLID
 * @method void setNetworkAclId(string $NetworkAclId) 设置关联ACLID
 * @method boolean getIsRemoteVpcSnat() 获取是否为 SNAT 地址池子网。
 * @method void setIsRemoteVpcSnat(boolean $IsRemoteVpcSnat) 设置是否为 SNAT 地址池子网。
 * @method array getTagSet() 获取标签键值对。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取所在区域
 * @method void setZone(string $Zone) 设置所在区域
 * @method string getZoneName() 获取可用区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneName(string $ZoneName) 设置可用区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcCidrBlock() 获取VPC的 IPv4 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置VPC的 IPv4 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcIpv6CidrBlock() 获取VPC的 IPv6 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcIpv6CidrBlock(string $VpcIpv6CidrBlock) 设置VPC的 IPv6 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class Subnet extends AbstractModel
{
    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string 子网实例ID，例如：subnet-bthucmmy。
     */
    public $SubnetId;

    /**
     * @var string 子网名称。
     */
    public $SubnetName;

    /**
     * @var string 子网的 IPv4 CIDR。
     */
    public $CidrBlock;

    /**
     * @var boolean 是否默认子网。
     */
    public $IsDefault;

    /**
     * @var boolean 是否开启广播。
     */
    public $EnableBroadcast;

    /**
     * @var string 路由表实例ID，例如：rtb-l2h8d7c2。
     */
    public $RouteTableId;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var integer 可用IP数。
     */
    public $AvailableIpAddressCount;

    /**
     * @var string 子网的 IPv6 CIDR。
     */
    public $Ipv6CidrBlock;

    /**
     * @var string 关联ACLID
     */
    public $NetworkAclId;

    /**
     * @var boolean 是否为 SNAT 地址池子网。
     */
    public $IsRemoteVpcSnat;

    /**
     * @var array 标签键值对。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var string 所在区域
     */
    public $Zone;

    /**
     * @var string 可用区名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneName;

    /**
     * @var integer 实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var string VPC的 IPv4 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcCidrBlock;

    /**
     * @var string VPC的 IPv6 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcIpv6CidrBlock;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @param string $VpcId VPC实例ID。
     * @param string $SubnetId 子网实例ID，例如：subnet-bthucmmy。
     * @param string $SubnetName 子网名称。
     * @param string $CidrBlock 子网的 IPv4 CIDR。
     * @param boolean $IsDefault 是否默认子网。
     * @param boolean $EnableBroadcast 是否开启广播。
     * @param string $RouteTableId 路由表实例ID，例如：rtb-l2h8d7c2。
     * @param string $CreatedTime 创建时间。
     * @param integer $AvailableIpAddressCount 可用IP数。
     * @param string $Ipv6CidrBlock 子网的 IPv6 CIDR。
     * @param string $NetworkAclId 关联ACLID
     * @param boolean $IsRemoteVpcSnat 是否为 SNAT 地址池子网。
     * @param array $TagSet 标签键值对。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 所在区域
     * @param string $ZoneName 可用区名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount 实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcCidrBlock VPC的 IPv4 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcIpv6CidrBlock VPC的 IPv6 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("EnableBroadcast",$param) and $param["EnableBroadcast"] !== null) {
            $this->EnableBroadcast = $param["EnableBroadcast"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AvailableIpAddressCount",$param) and $param["AvailableIpAddressCount"] !== null) {
            $this->AvailableIpAddressCount = $param["AvailableIpAddressCount"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("IsRemoteVpcSnat",$param) and $param["IsRemoteVpcSnat"] !== null) {
            $this->IsRemoteVpcSnat = $param["IsRemoteVpcSnat"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("VpcIpv6CidrBlock",$param) and $param["VpcIpv6CidrBlock"] !== null) {
            $this->VpcIpv6CidrBlock = $param["VpcIpv6CidrBlock"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
