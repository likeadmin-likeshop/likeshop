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
 * VPC内网IPv6对象。
 *
 * @method string getIpv6Address() 获取`VPC`内`IPv6`地址。
 * @method void setIpv6Address(string $Ipv6Address) 设置`VPC`内`IPv6`地址。
 * @method string getCidrBlock() 获取所属子网 `IPv6` `CIDR`。
 * @method void setCidrBlock(string $CidrBlock) 设置所属子网 `IPv6` `CIDR`。
 * @method string getIpv6AddressType() 获取`IPv6`类型。
 * @method void setIpv6AddressType(string $Ipv6AddressType) 设置`IPv6`类型。
 * @method string getCreatedTime() 获取`IPv6`申请时间。
 * @method void setCreatedTime(string $CreatedTime) 设置`IPv6`申请时间。
 */
class VpcIpv6Address extends AbstractModel
{
    /**
     * @var string `VPC`内`IPv6`地址。
     */
    public $Ipv6Address;

    /**
     * @var string 所属子网 `IPv6` `CIDR`。
     */
    public $CidrBlock;

    /**
     * @var string `IPv6`类型。
     */
    public $Ipv6AddressType;

    /**
     * @var string `IPv6`申请时间。
     */
    public $CreatedTime;

    /**
     * @param string $Ipv6Address `VPC`内`IPv6`地址。
     * @param string $CidrBlock 所属子网 `IPv6` `CIDR`。
     * @param string $Ipv6AddressType `IPv6`类型。
     * @param string $CreatedTime `IPv6`申请时间。
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
        if (array_key_exists("Ipv6Address",$param) and $param["Ipv6Address"] !== null) {
            $this->Ipv6Address = $param["Ipv6Address"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6AddressType",$param) and $param["Ipv6AddressType"] !== null) {
            $this->Ipv6AddressType = $param["Ipv6AddressType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
