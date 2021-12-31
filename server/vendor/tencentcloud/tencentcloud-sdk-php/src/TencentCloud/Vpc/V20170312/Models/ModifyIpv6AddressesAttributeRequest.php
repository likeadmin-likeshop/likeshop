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
 * ModifyIpv6AddressesAttribute请求参数结构体
 *
 * @method string getNetworkInterfaceId() 获取弹性网卡实例`ID`，形如：`eni-m6dyj72l`。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置弹性网卡实例`ID`，形如：`eni-m6dyj72l`。
 * @method array getIpv6Addresses() 获取指定的内网IPv6`地址信息。
 * @method void setIpv6Addresses(array $Ipv6Addresses) 设置指定的内网IPv6`地址信息。
 */
class ModifyIpv6AddressesAttributeRequest extends AbstractModel
{
    /**
     * @var string 弹性网卡实例`ID`，形如：`eni-m6dyj72l`。
     */
    public $NetworkInterfaceId;

    /**
     * @var array 指定的内网IPv6`地址信息。
     */
    public $Ipv6Addresses;

    /**
     * @param string $NetworkInterfaceId 弹性网卡实例`ID`，形如：`eni-m6dyj72l`。
     * @param array $Ipv6Addresses 指定的内网IPv6`地址信息。
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = [];
            foreach ($param["Ipv6Addresses"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6Addresses, $obj);
            }
        }
    }
}
