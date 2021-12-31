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
 * 实例可用区及对应的实例创建数目及运营商的组合；
 *
 * @method string getZone() 获取创建实例的可用区。
 * @method void setZone(string $Zone) 设置创建实例的可用区。
 * @method integer getInstanceCount() 获取在当前可用区欲创建的实例数目。
 * @method void setInstanceCount(integer $InstanceCount) 设置在当前可用区欲创建的实例数目。
 * @method string getISP() 获取运营商如下：
CTCC：中国电信
CUCC：中国联通
CMCC：中国移动
多个运营商用英文分号连接";"，例如："CMCC;CUCC;CTCC"。多运营商需要开通白名单，请直接联系腾讯云客服。
 * @method void setISP(string $ISP) 设置运营商如下：
CTCC：中国电信
CUCC：中国联通
CMCC：中国移动
多个运营商用英文分号连接";"，例如："CMCC;CUCC;CTCC"。多运营商需要开通白名单，请直接联系腾讯云客服。
 * @method string getVpcId() 获取指定私有网络编号，SubnetId与VpcId必须同时指定或不指定
 * @method void setVpcId(string $VpcId) 设置指定私有网络编号，SubnetId与VpcId必须同时指定或不指定
 * @method string getSubnetId() 获取指定子网编号，SubnetId与VpcId必须同时指定或不指定
 * @method void setSubnetId(string $SubnetId) 设置指定子网编号，SubnetId与VpcId必须同时指定或不指定
 * @method array getPrivateIpAddresses() 获取指定主网卡内网IP。条件：SubnetId与VpcId必须同时指定，并且IP数量与InstanceCount相同，多IP主机副网卡内网IP在相同子网内通过DHCP获取。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置指定主网卡内网IP。条件：SubnetId与VpcId必须同时指定，并且IP数量与InstanceCount相同，多IP主机副网卡内网IP在相同子网内通过DHCP获取。
 * @method integer getIpv6AddressCount() 获取为弹性网卡指定随机生成的IPv6地址数量，目前数量不能大于1。
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置为弹性网卡指定随机生成的IPv6地址数量，目前数量不能大于1。
 */
class ZoneInstanceCountISP extends AbstractModel
{
    /**
     * @var string 创建实例的可用区。
     */
    public $Zone;

    /**
     * @var integer 在当前可用区欲创建的实例数目。
     */
    public $InstanceCount;

    /**
     * @var string 运营商如下：
CTCC：中国电信
CUCC：中国联通
CMCC：中国移动
多个运营商用英文分号连接";"，例如："CMCC;CUCC;CTCC"。多运营商需要开通白名单，请直接联系腾讯云客服。
     */
    public $ISP;

    /**
     * @var string 指定私有网络编号，SubnetId与VpcId必须同时指定或不指定
     */
    public $VpcId;

    /**
     * @var string 指定子网编号，SubnetId与VpcId必须同时指定或不指定
     */
    public $SubnetId;

    /**
     * @var array 指定主网卡内网IP。条件：SubnetId与VpcId必须同时指定，并且IP数量与InstanceCount相同，多IP主机副网卡内网IP在相同子网内通过DHCP获取。
     */
    public $PrivateIpAddresses;

    /**
     * @var integer 为弹性网卡指定随机生成的IPv6地址数量，目前数量不能大于1。
     */
    public $Ipv6AddressCount;

    /**
     * @param string $Zone 创建实例的可用区。
     * @param integer $InstanceCount 在当前可用区欲创建的实例数目。
     * @param string $ISP 运营商如下：
CTCC：中国电信
CUCC：中国联通
CMCC：中国移动
多个运营商用英文分号连接";"，例如："CMCC;CUCC;CTCC"。多运营商需要开通白名单，请直接联系腾讯云客服。
     * @param string $VpcId 指定私有网络编号，SubnetId与VpcId必须同时指定或不指定
     * @param string $SubnetId 指定子网编号，SubnetId与VpcId必须同时指定或不指定
     * @param array $PrivateIpAddresses 指定主网卡内网IP。条件：SubnetId与VpcId必须同时指定，并且IP数量与InstanceCount相同，多IP主机副网卡内网IP在相同子网内通过DHCP获取。
     * @param integer $Ipv6AddressCount 为弹性网卡指定随机生成的IPv6地址数量，目前数量不能大于1。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }
    }
}
