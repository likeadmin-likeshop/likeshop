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
 * UnassignIpv6CidrBlock请求参数结构体
 *
 * @method string getVpcId() 获取`VPC`实例`ID`，形如：`vpc-f49l6u0z`。
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`，形如：`vpc-f49l6u0z`。
 * @method string getIpv6CidrBlock() 获取`IPv6`网段。形如：`3402:4e00:20:1000::/56`
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置`IPv6`网段。形如：`3402:4e00:20:1000::/56`
 */
class UnassignIpv6CidrBlockRequest extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`，形如：`vpc-f49l6u0z`。
     */
    public $VpcId;

    /**
     * @var string `IPv6`网段。形如：`3402:4e00:20:1000::/56`
     */
    public $Ipv6CidrBlock;

    /**
     * @param string $VpcId `VPC`实例`ID`，形如：`vpc-f49l6u0z`。
     * @param string $Ipv6CidrBlock `IPv6`网段。形如：`3402:4e00:20:1000::/56`
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

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }
    }
}
