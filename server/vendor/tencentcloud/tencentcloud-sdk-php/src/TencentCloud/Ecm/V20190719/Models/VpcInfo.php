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
 * 私有网络(VPC)对象。
 *
 * @method string getVpcName() 获取VPC名称。
 * @method void setVpcName(string $VpcName) 设置VPC名称。
 * @method string getVpcId() 获取VPC实例ID，例如：vpc-azd4dt1c。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID，例如：vpc-azd4dt1c。
 * @method string getCidrBlock() 获取VPC的IPv4 CIDR。
 * @method void setCidrBlock(string $CidrBlock) 设置VPC的IPv4 CIDR。
 * @method boolean getIsDefault() 获取是否默认VPC。
 * @method void setIsDefault(boolean $IsDefault) 设置是否默认VPC。
 * @method boolean getEnableMulticast() 获取是否开启组播。
 * @method void setEnableMulticast(boolean $EnableMulticast) 设置是否开启组播。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method array getDnsServerSet() 获取DNS列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDnsServerSet(array $DnsServerSet) 设置DNS列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainName() 获取DHCP域名选项值。
 * @method void setDomainName(string $DomainName) 设置DHCP域名选项值。
 * @method string getDhcpOptionsId() 获取DHCP选项集ID。
 * @method void setDhcpOptionsId(string $DhcpOptionsId) 设置DHCP选项集ID。
 * @method boolean getEnableDhcp() 获取是否开启DHCP。
 * @method void setEnableDhcp(boolean $EnableDhcp) 设置是否开启DHCP。
 * @method string getIpv6CidrBlock() 获取VPC的IPv6 CIDR。
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置VPC的IPv6 CIDR。
 * @method array getTagSet() 获取标签键值对
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签键值对
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssistantCidrSet() 获取辅助CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssistantCidrSet(array $AssistantCidrSet) 设置辅助CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getRegionName() 获取地域中文名
 * @method void setRegionName(string $RegionName) 设置地域中文名
 * @method integer getSubnetCount() 获取包含子网数量
 * @method void setSubnetCount(integer $SubnetCount) 设置包含子网数量
 * @method integer getInstanceCount() 获取包含实例数量
 * @method void setInstanceCount(integer $InstanceCount) 设置包含实例数量
 */
class VpcInfo extends AbstractModel
{
    /**
     * @var string VPC名称。
     */
    public $VpcName;

    /**
     * @var string VPC实例ID，例如：vpc-azd4dt1c。
     */
    public $VpcId;

    /**
     * @var string VPC的IPv4 CIDR。
     */
    public $CidrBlock;

    /**
     * @var boolean 是否默认VPC。
     */
    public $IsDefault;

    /**
     * @var boolean 是否开启组播。
     */
    public $EnableMulticast;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var array DNS列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DnsServerSet;

    /**
     * @var string DHCP域名选项值。
     */
    public $DomainName;

    /**
     * @var string DHCP选项集ID。
     */
    public $DhcpOptionsId;

    /**
     * @var boolean 是否开启DHCP。
     */
    public $EnableDhcp;

    /**
     * @var string VPC的IPv6 CIDR。
     */
    public $Ipv6CidrBlock;

    /**
     * @var array 标签键值对
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var array 辅助CIDR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssistantCidrSet;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 地域中文名
     */
    public $RegionName;

    /**
     * @var integer 包含子网数量
     */
    public $SubnetCount;

    /**
     * @var integer 包含实例数量
     */
    public $InstanceCount;

    /**
     * @param string $VpcName VPC名称。
     * @param string $VpcId VPC实例ID，例如：vpc-azd4dt1c。
     * @param string $CidrBlock VPC的IPv4 CIDR。
     * @param boolean $IsDefault 是否默认VPC。
     * @param boolean $EnableMulticast 是否开启组播。
     * @param string $CreatedTime 创建时间。
     * @param array $DnsServerSet DNS列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainName DHCP域名选项值。
     * @param string $DhcpOptionsId DHCP选项集ID。
     * @param boolean $EnableDhcp 是否开启DHCP。
     * @param string $Ipv6CidrBlock VPC的IPv6 CIDR。
     * @param array $TagSet 标签键值对
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssistantCidrSet 辅助CIDR
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
     * @param string $Description 描述
     * @param string $RegionName 地域中文名
     * @param integer $SubnetCount 包含子网数量
     * @param integer $InstanceCount 包含实例数量
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
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("EnableMulticast",$param) and $param["EnableMulticast"] !== null) {
            $this->EnableMulticast = $param["EnableMulticast"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DnsServerSet",$param) and $param["DnsServerSet"] !== null) {
            $this->DnsServerSet = $param["DnsServerSet"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("DhcpOptionsId",$param) and $param["DhcpOptionsId"] !== null) {
            $this->DhcpOptionsId = $param["DhcpOptionsId"];
        }

        if (array_key_exists("EnableDhcp",$param) and $param["EnableDhcp"] !== null) {
            $this->EnableDhcp = $param["EnableDhcp"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("AssistantCidrSet",$param) and $param["AssistantCidrSet"] !== null) {
            $this->AssistantCidrSet = [];
            foreach ($param["AssistantCidrSet"] as $key => $value){
                $obj = new AssistantCidr();
                $obj->deserialize($value);
                array_push($this->AssistantCidrSet, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("SubnetCount",$param) and $param["SubnetCount"] !== null) {
            $this->SubnetCount = $param["SubnetCount"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }
    }
}
