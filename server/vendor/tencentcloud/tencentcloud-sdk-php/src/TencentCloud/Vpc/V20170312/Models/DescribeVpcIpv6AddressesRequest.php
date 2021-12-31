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
 * DescribeVpcIpv6Addresses请求参数结构体
 *
 * @method string getVpcId() 获取`VPC`实例`ID`，形如：`vpc-f49l6u0z`。
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`，形如：`vpc-f49l6u0z`。
 * @method array getIpv6Addresses() 获取`IP`地址列表，批量查询单次请求最多支持`10`个。
 * @method void setIpv6Addresses(array $Ipv6Addresses) 设置`IP`地址列表，批量查询单次请求最多支持`10`个。
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取返回数量。
 * @method void setLimit(integer $Limit) 设置返回数量。
 */
class DescribeVpcIpv6AddressesRequest extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`，形如：`vpc-f49l6u0z`。
     */
    public $VpcId;

    /**
     * @var array `IP`地址列表，批量查询单次请求最多支持`10`个。
     */
    public $Ipv6Addresses;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 返回数量。
     */
    public $Limit;

    /**
     * @param string $VpcId `VPC`实例`ID`，形如：`vpc-f49l6u0z`。
     * @param array $Ipv6Addresses `IP`地址列表，批量查询单次请求最多支持`10`个。
     * @param integer $Offset 偏移量。
     * @param integer $Limit 返回数量。
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

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = $param["Ipv6Addresses"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
