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
 * 路由冲突对象
 *
 * @method string getRouteTableId() 获取路由表实例ID，例如：rtb-azd4dt1c。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID，例如：rtb-azd4dt1c。
 * @method string getDestinationCidrBlock() 获取要检查的与之冲突的目的端
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置要检查的与之冲突的目的端
 * @method array getConflictSet() 获取冲突的路由策略列表
 * @method void setConflictSet(array $ConflictSet) 设置冲突的路由策略列表
 */
class RouteConflict extends AbstractModel
{
    /**
     * @var string 路由表实例ID，例如：rtb-azd4dt1c。
     */
    public $RouteTableId;

    /**
     * @var string 要检查的与之冲突的目的端
     */
    public $DestinationCidrBlock;

    /**
     * @var array 冲突的路由策略列表
     */
    public $ConflictSet;

    /**
     * @param string $RouteTableId 路由表实例ID，例如：rtb-azd4dt1c。
     * @param string $DestinationCidrBlock 要检查的与之冲突的目的端
     * @param array $ConflictSet 冲突的路由策略列表
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

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("ConflictSet",$param) and $param["ConflictSet"] !== null) {
            $this->ConflictSet = [];
            foreach ($param["ConflictSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->ConflictSet, $obj);
            }
        }
    }
}
