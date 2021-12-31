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
 * 私有网络相关信息配置。
 *
 * @method string getVpcId() 获取私有网络ID，形如vpc-xxx。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，形如vpc-xxx。
 * @method string getSubnetId() 获取私有网络子网ID，形如subnet-xxx。
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID，形如subnet-xxx。
 * @method boolean getAsVpcGateway() 获取是否用作公网网关。公网网关只有在实例拥有公网IP以及处于私有网络下时才能正常使用。取值范围：
TRUE：表示用作公网网关
FALSE：表示不用作公网网关

默认取值：FALSE。
 * @method void setAsVpcGateway(boolean $AsVpcGateway) 设置是否用作公网网关。公网网关只有在实例拥有公网IP以及处于私有网络下时才能正常使用。取值范围：
TRUE：表示用作公网网关
FALSE：表示不用作公网网关

默认取值：FALSE。
 * @method array getPrivateIpAddresses() 获取私有网络子网 IP 数组，在创建实例、修改实例vpc属性操作中可使用此参数。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置私有网络子网 IP 数组，在创建实例、修改实例vpc属性操作中可使用此参数。
 * @method integer getIpv6AddressCount() 获取为弹性网卡指定随机生成的 IPv6 地址数量。
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置为弹性网卡指定随机生成的 IPv6 地址数量。
 */
class VirtualPrivateCloud extends AbstractModel
{
    /**
     * @var string 私有网络ID，形如vpc-xxx。
     */
    public $VpcId;

    /**
     * @var string 私有网络子网ID，形如subnet-xxx。
     */
    public $SubnetId;

    /**
     * @var boolean 是否用作公网网关。公网网关只有在实例拥有公网IP以及处于私有网络下时才能正常使用。取值范围：
TRUE：表示用作公网网关
FALSE：表示不用作公网网关

默认取值：FALSE。
     */
    public $AsVpcGateway;

    /**
     * @var array 私有网络子网 IP 数组，在创建实例、修改实例vpc属性操作中可使用此参数。
     */
    public $PrivateIpAddresses;

    /**
     * @var integer 为弹性网卡指定随机生成的 IPv6 地址数量。
     */
    public $Ipv6AddressCount;

    /**
     * @param string $VpcId 私有网络ID，形如vpc-xxx。
     * @param string $SubnetId 私有网络子网ID，形如subnet-xxx。
     * @param boolean $AsVpcGateway 是否用作公网网关。公网网关只有在实例拥有公网IP以及处于私有网络下时才能正常使用。取值范围：
TRUE：表示用作公网网关
FALSE：表示不用作公网网关

默认取值：FALSE。
     * @param array $PrivateIpAddresses 私有网络子网 IP 数组，在创建实例、修改实例vpc属性操作中可使用此参数。
     * @param integer $Ipv6AddressCount 为弹性网卡指定随机生成的 IPv6 地址数量。
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

        if (array_key_exists("AsVpcGateway",$param) and $param["AsVpcGateway"] !== null) {
            $this->AsVpcGateway = $param["AsVpcGateway"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }
    }
}
