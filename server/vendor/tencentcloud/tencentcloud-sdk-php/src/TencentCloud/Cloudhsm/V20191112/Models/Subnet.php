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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subnet对象
 *
 * @method string getVpcId() 获取VPC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网实例ID，例如：subnet-bthucmmy。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID，例如：subnet-bthucmmy。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetName() 获取子网名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetName(string $SubnetName) 设置子网名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCidrBlock() 获取子网的 IPv4 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCidrBlock(string $CidrBlock) 设置子网的 IPv4 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailableIpAddressCount() 获取可用IP数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableIpAddressCount(integer $AvailableIpAddressCount) 设置可用IP数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpv6CidrBlock() 获取子网的 IPv6 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置子网的 IPv6 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalIpAddressCount() 获取总IP数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalIpAddressCount(integer $TotalIpAddressCount) 设置总IP数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDefault() 获取是否为默认Subnet
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(boolean $IsDefault) 设置是否为默认Subnet
注意：此字段可能返回 null，表示取不到有效值。
 */
class Subnet extends AbstractModel
{
    /**
     * @var string VPC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网实例ID，例如：subnet-bthucmmy。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 子网名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetName;

    /**
     * @var string 子网的 IPv4 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CidrBlock;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var integer 可用IP数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableIpAddressCount;

    /**
     * @var string 子网的 IPv6 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6CidrBlock;

    /**
     * @var integer 总IP数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalIpAddressCount;

    /**
     * @var boolean 是否为默认Subnet
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @param string $VpcId VPC实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网实例ID，例如：subnet-bthucmmy。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetName 子网名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CidrBlock 子网的 IPv4 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvailableIpAddressCount 可用IP数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ipv6CidrBlock 子网的 IPv6 CIDR。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalIpAddressCount 总IP数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDefault 是否为默认Subnet
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AvailableIpAddressCount",$param) and $param["AvailableIpAddressCount"] !== null) {
            $this->AvailableIpAddressCount = $param["AvailableIpAddressCount"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("TotalIpAddressCount",$param) and $param["TotalIpAddressCount"] !== null) {
            $this->TotalIpAddressCount = $param["TotalIpAddressCount"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
