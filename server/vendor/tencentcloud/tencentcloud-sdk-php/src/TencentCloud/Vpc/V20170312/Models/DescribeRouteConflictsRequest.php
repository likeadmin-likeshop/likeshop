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
 * DescribeRouteConflicts请求参数结构体
 *
 * @method string getRouteTableId() 获取路由表实例ID，例如：rtb-azd4dt1c。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID，例如：rtb-azd4dt1c。
 * @method array getDestinationCidrBlocks() 获取要检查的与之冲突的目的端列表
 * @method void setDestinationCidrBlocks(array $DestinationCidrBlocks) 设置要检查的与之冲突的目的端列表
 */
class DescribeRouteConflictsRequest extends AbstractModel
{
    /**
     * @var string 路由表实例ID，例如：rtb-azd4dt1c。
     */
    public $RouteTableId;

    /**
     * @var array 要检查的与之冲突的目的端列表
     */
    public $DestinationCidrBlocks;

    /**
     * @param string $RouteTableId 路由表实例ID，例如：rtb-azd4dt1c。
     * @param array $DestinationCidrBlocks 要检查的与之冲突的目的端列表
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("DestinationCidrBlocks",$param) and $param["DestinationCidrBlocks"] !== null) {
            $this->DestinationCidrBlocks = $param["DestinationCidrBlocks"];
        }
    }
}
