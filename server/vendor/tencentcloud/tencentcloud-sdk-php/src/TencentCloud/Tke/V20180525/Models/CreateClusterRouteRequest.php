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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterRoute请求参数结构体
 *
 * @method string getRouteTableName() 获取路由表名称。
 * @method void setRouteTableName(string $RouteTableName) 设置路由表名称。
 * @method string getDestinationCidrBlock() 获取目的端CIDR。
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置目的端CIDR。
 * @method string getGatewayIp() 获取下一跳地址。
 * @method void setGatewayIp(string $GatewayIp) 设置下一跳地址。
 */
class CreateClusterRouteRequest extends AbstractModel
{
    /**
     * @var string 路由表名称。
     */
    public $RouteTableName;

    /**
     * @var string 目的端CIDR。
     */
    public $DestinationCidrBlock;

    /**
     * @var string 下一跳地址。
     */
    public $GatewayIp;

    /**
     * @param string $RouteTableName 路由表名称。
     * @param string $DestinationCidrBlock 目的端CIDR。
     * @param string $GatewayIp 下一跳地址。
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
        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("GatewayIp",$param) and $param["GatewayIp"] !== null) {
            $this->GatewayIp = $param["GatewayIp"];
        }
    }
}
