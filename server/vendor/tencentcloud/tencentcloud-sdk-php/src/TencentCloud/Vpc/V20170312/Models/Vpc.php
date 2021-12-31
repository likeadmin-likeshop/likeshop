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
 * 私有网络(VPC)对象。
 *
 * @method string getVpcName() 获取`VPC`名称。
 * @method void setVpcName(string $VpcName) 设置`VPC`名称。
 * @method string getVpcId() 获取`VPC`实例`ID`，例如：vpc-azd4dt1c。
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`，例如：vpc-azd4dt1c。
 * @method string getCidrBlock() 获取`VPC`的`IPv4` `CIDR`。
 * @method void setCidrBlock(string $CidrBlock) 设置`VPC`的`IPv4` `CIDR`。
 * @method boolean getIsDefault() 获取是否默认`VPC`。
 * @method void setIsDefault(boolean $IsDefault) 设置是否默认`VPC`。
 * @method boolean getEnableMulticast() 获取是否开启组播。
 * @method void setEnableMulticast(boolean $EnableMulticast) 设置是否开启组播。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method array getDnsServerSet() 获取`DNS`列表。
 * @method void setDnsServerSet(array $DnsServerSet) 设置`DNS`列表。
 * @method string getDomainName() 获取`DHCP`域名选项值。
 * @method void setDomainName(string $DomainName) 设置`DHCP`域名选项值。
 * @method string getDhcpOptionsId() 获取`DHCP`选项集`ID`。
 * @method void setDhcpOptionsId(string $DhcpOptionsId) 设置`DHCP`选项集`ID`。
 * @method boolean getEnableDhcp() 获取是否开启`DHCP`。
 * @method void setEnableDhcp(boolean $EnableDhcp) 设置是否开启`DHCP`。
 * @method string getIpv6CidrBlock() 获取`VPC`的`IPv6` `CIDR`。
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置`VPC`的`IPv6` `CIDR`。
 * @method array getTagSet() 获取标签键值对
 * @method void setTagSet(array $TagSet) 设置标签键值对
 * @method array getAssistantCidrSet() 获取辅助CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssistantCidrSet(array $AssistantCidrSet) 设置辅助CIDR
注意：此字段可能返回 null，表示取不到有效值。
 */
class Vpc extends AbstractModel
{
    /**
     * @var string `VPC`名称。
     */
    public $VpcName;

    /**
     * @var string `VPC`实例`ID`，例如：vpc-azd4dt1c。
     */
    public $VpcId;

    /**
     * @var string `VPC`的`IPv4` `CIDR`。
     */
    public $CidrBlock;

    /**
     * @var boolean 是否默认`VPC`。
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
     * @var array `DNS`列表。
     */
    public $DnsServerSet;

    /**
     * @var string `DHCP`域名选项值。
     */
    public $DomainName;

    /**
     * @var string `DHCP`选项集`ID`。
     */
    public $DhcpOptionsId;

    /**
     * @var boolean 是否开启`DHCP`。
     */
    public $EnableDhcp;

    /**
     * @var string `VPC`的`IPv6` `CIDR`。
     */
    public $Ipv6CidrBlock;

    /**
     * @var array 标签键值对
     */
    public $TagSet;

    /**
     * @var array 辅助CIDR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssistantCidrSet;

    /**
     * @param string $VpcName `VPC`名称。
     * @param string $VpcId `VPC`实例`ID`，例如：vpc-azd4dt1c。
     * @param string $CidrBlock `VPC`的`IPv4` `CIDR`。
     * @param boolean $IsDefault 是否默认`VPC`。
     * @param boolean $EnableMulticast 是否开启组播。
     * @param string $CreatedTime 创建时间。
     * @param array $DnsServerSet `DNS`列表。
     * @param string $DomainName `DHCP`域名选项值。
     * @param string $DhcpOptionsId `DHCP`选项集`ID`。
     * @param boolean $EnableDhcp 是否开启`DHCP`。
     * @param string $Ipv6CidrBlock `VPC`的`IPv6` `CIDR`。
     * @param array $TagSet 标签键值对
     * @param array $AssistantCidrSet 辅助CIDR
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
    }
}
