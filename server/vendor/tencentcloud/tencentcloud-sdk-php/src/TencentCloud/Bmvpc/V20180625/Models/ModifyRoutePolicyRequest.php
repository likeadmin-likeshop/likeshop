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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRoutePolicy请求参数结构体
 *
 * @method string getRouteTableId() 获取路由表ID
 * @method void setRouteTableId(string $RouteTableId) 设置路由表ID
 * @method RoutePolicy getRoutePolicy() 获取修改的路由
 * @method void setRoutePolicy(RoutePolicy $RoutePolicy) 设置修改的路由
 */
class ModifyRoutePolicyRequest extends AbstractModel
{
    /**
     * @var string 路由表ID
     */
    public $RouteTableId;

    /**
     * @var RoutePolicy 修改的路由
     */
    public $RoutePolicy;

    /**
     * @param string $RouteTableId 路由表ID
     * @param RoutePolicy $RoutePolicy 修改的路由
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

        if (array_key_exists("RoutePolicy",$param) and $param["RoutePolicy"] !== null) {
            $this->RoutePolicy = new RoutePolicy();
            $this->RoutePolicy->deserialize($param["RoutePolicy"]);
        }
    }
}
