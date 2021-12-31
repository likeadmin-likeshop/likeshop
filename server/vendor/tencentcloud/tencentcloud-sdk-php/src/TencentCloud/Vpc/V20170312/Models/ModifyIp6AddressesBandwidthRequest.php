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
 * ModifyIp6AddressesBandwidth请求参数结构体
 *
 * @method integer getInternetMaxBandwidthOut() 获取修改的目标带宽，单位Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置修改的目标带宽，单位Mbps
 * @method array getIp6Addresses() 获取IPV6地址。Ip6Addresses和Ip6AddressId必须且只能传一个
 * @method void setIp6Addresses(array $Ip6Addresses) 设置IPV6地址。Ip6Addresses和Ip6AddressId必须且只能传一个
 * @method array getIp6AddressIds() 获取IPV6地址对应的唯一ID，形如eip-xxxxxxxx。Ip6Addresses和Ip6AddressId必须且只能传一个
 * @method void setIp6AddressIds(array $Ip6AddressIds) 设置IPV6地址对应的唯一ID，形如eip-xxxxxxxx。Ip6Addresses和Ip6AddressId必须且只能传一个
 */
class ModifyIp6AddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var integer 修改的目标带宽，单位Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var array IPV6地址。Ip6Addresses和Ip6AddressId必须且只能传一个
     */
    public $Ip6Addresses;

    /**
     * @var array IPV6地址对应的唯一ID，形如eip-xxxxxxxx。Ip6Addresses和Ip6AddressId必须且只能传一个
     */
    public $Ip6AddressIds;

    /**
     * @param integer $InternetMaxBandwidthOut 修改的目标带宽，单位Mbps
     * @param array $Ip6Addresses IPV6地址。Ip6Addresses和Ip6AddressId必须且只能传一个
     * @param array $Ip6AddressIds IPV6地址对应的唯一ID，形如eip-xxxxxxxx。Ip6Addresses和Ip6AddressId必须且只能传一个
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
        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("Ip6Addresses",$param) and $param["Ip6Addresses"] !== null) {
            $this->Ip6Addresses = $param["Ip6Addresses"];
        }

        if (array_key_exists("Ip6AddressIds",$param) and $param["Ip6AddressIds"] !== null) {
            $this->Ip6AddressIds = $param["Ip6AddressIds"];
        }
    }
}
