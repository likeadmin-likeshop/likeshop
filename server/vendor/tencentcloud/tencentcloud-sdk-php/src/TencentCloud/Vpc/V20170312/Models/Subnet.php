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
 * 子网对象
 *
 * @method string getVpcId() 获取`VPC`实例`ID`。
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`。
 * @method string getSubnetId() 获取子网实例`ID`，例如：subnet-bthucmmy。
 * @method void setSubnetId(string $SubnetId) 设置子网实例`ID`，例如：subnet-bthucmmy。
 * @method string getSubnetName() 获取子网名称。
 * @method void setSubnetName(string $SubnetName) 设置子网名称。
 * @method string getCidrBlock() 获取子网的 `IPv4` `CIDR`。
 * @method void setCidrBlock(string $CidrBlock) 设置子网的 `IPv4` `CIDR`。
 * @method boolean getIsDefault() 获取是否默认子网。
 * @method void setIsDefault(boolean $IsDefault) 设置是否默认子网。
 * @method boolean getEnableBroadcast() 获取是否开启广播。
 * @method void setEnableBroadcast(boolean $EnableBroadcast) 设置是否开启广播。
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method string getRouteTableId() 获取路由表实例ID，例如：rtb-l2h8d7c2。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID，例如：rtb-l2h8d7c2。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method integer getAvailableIpAddressCount() 获取可用`IPv4`数。
 * @method void setAvailableIpAddressCount(integer $AvailableIpAddressCount) 设置可用`IPv4`数。
 * @method string getIpv6CidrBlock() 获取子网的 `IPv6` `CIDR`。
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置子网的 `IPv6` `CIDR`。
 * @method string getNetworkAclId() 获取关联`ACL`ID
 * @method void setNetworkAclId(string $NetworkAclId) 设置关联`ACL`ID
 * @method boolean getIsRemoteVpcSnat() 获取是否为 `SNAT` 地址池子网。
 * @method void setIsRemoteVpcSnat(boolean $IsRemoteVpcSnat) 设置是否为 `SNAT` 地址池子网。
 * @method integer getTotalIpAddressCount() 获取子网`IPv4`总数。
 * @method void setTotalIpAddressCount(integer $TotalIpAddressCount) 设置子网`IPv4`总数。
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 * @method string getCdcId() 获取CDC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcId(string $CdcId) 设置CDC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsCdcSubnet() 获取是否是CDC所属子网。0:否 1:是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCdcSubnet(integer $IsCdcSubnet) 设置是否是CDC所属子网。0:否 1:是
注意：此字段可能返回 null，表示取不到有效值。
 */
class Subnet extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`。
     */
    public $VpcId;

    /**
     * @var string 子网实例`ID`，例如：subnet-bthucmmy。
     */
    public $SubnetId;

    /**
     * @var string 子网名称。
     */
    public $SubnetName;

    /**
     * @var string 子网的 `IPv4` `CIDR`。
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
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var string 路由表实例ID，例如：rtb-l2h8d7c2。
     */
    public $RouteTableId;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var integer 可用`IPv4`数。
     */
    public $AvailableIpAddressCount;

    /**
     * @var string 子网的 `IPv6` `CIDR`。
     */
    public $Ipv6CidrBlock;

    /**
     * @var string 关联`ACL`ID
     */
    public $NetworkAclId;

    /**
     * @var boolean 是否为 `SNAT` 地址池子网。
     */
    public $IsRemoteVpcSnat;

    /**
     * @var integer 子网`IPv4`总数。
     */
    public $TotalIpAddressCount;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @var string CDC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcId;

    /**
     * @var integer 是否是CDC所属子网。0:否 1:是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCdcSubnet;

    /**
     * @param string $VpcId `VPC`实例`ID`。
     * @param string $SubnetId 子网实例`ID`，例如：subnet-bthucmmy。
     * @param string $SubnetName 子网名称。
     * @param string $CidrBlock 子网的 `IPv4` `CIDR`。
     * @param boolean $IsDefault 是否默认子网。
     * @param boolean $EnableBroadcast 是否开启广播。
     * @param string $Zone 可用区。
     * @param string $RouteTableId 路由表实例ID，例如：rtb-l2h8d7c2。
     * @param string $CreatedTime 创建时间。
     * @param integer $AvailableIpAddressCount 可用`IPv4`数。
     * @param string $Ipv6CidrBlock 子网的 `IPv6` `CIDR`。
     * @param string $NetworkAclId 关联`ACL`ID
     * @param boolean $IsRemoteVpcSnat 是否为 `SNAT` 地址池子网。
     * @param integer $TotalIpAddressCount 子网`IPv4`总数。
     * @param array $TagSet 标签键值对。
     * @param string $CdcId CDC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsCdcSubnet 是否是CDC所属子网。0:否 1:是
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
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

        if (array_key_exists("TotalIpAddressCount",$param) and $param["TotalIpAddressCount"] !== null) {
            $this->TotalIpAddressCount = $param["TotalIpAddressCount"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("IsCdcSubnet",$param) and $param["IsCdcSubnet"] !== null) {
            $this->IsCdcSubnet = $param["IsCdcSubnet"];
        }
    }
}
