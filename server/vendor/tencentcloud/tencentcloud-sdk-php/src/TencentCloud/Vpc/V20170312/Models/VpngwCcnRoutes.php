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
 * VPN网关云联网路由信息
 *
 * @method string getRouteId() 获取路由信息ID
 * @method void setRouteId(string $RouteId) 设置路由信息ID
 * @method string getStatus() 获取路由信息是否启用
ENABLE：启用该路由
DISABLE：不启用该路由
 * @method void setStatus(string $Status) 设置路由信息是否启用
ENABLE：启用该路由
DISABLE：不启用该路由
 */
class VpngwCcnRoutes extends AbstractModel
{
    /**
     * @var string 路由信息ID
     */
    public $RouteId;

    /**
     * @var string 路由信息是否启用
ENABLE：启用该路由
DISABLE：不启用该路由
     */
    public $Status;

    /**
     * @param string $RouteId 路由信息ID
     * @param string $Status 路由信息是否启用
ENABLE：启用该路由
DISABLE：不启用该路由
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
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
