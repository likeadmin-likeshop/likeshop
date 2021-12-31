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
 * WithdrawNotifyRoutes请求参数结构体
 *
 * @method string getRouteTableId() 获取路由表唯一ID。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表唯一ID。
 * @method array getRouteItemIds() 获取路由策略唯一ID。
 * @method void setRouteItemIds(array $RouteItemIds) 设置路由策略唯一ID。
 */
class WithdrawNotifyRoutesRequest extends AbstractModel
{
    /**
     * @var string 路由表唯一ID。
     */
    public $RouteTableId;

    /**
     * @var array 路由策略唯一ID。
     */
    public $RouteItemIds;

    /**
     * @param string $RouteTableId 路由表唯一ID。
     * @param array $RouteItemIds 路由策略唯一ID。
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

        if (array_key_exists("RouteItemIds",$param) and $param["RouteItemIds"] !== null) {
            $this->RouteItemIds = $param["RouteItemIds"];
        }
    }
}
