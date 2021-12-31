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
 * ModifyDirectConnectGatewayAttribute请求参数结构体
 *
 * @method string getDirectConnectGatewayId() 获取专线网关唯一`ID`，形如：`dcg-9o233uri`。
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关唯一`ID`，形如：`dcg-9o233uri`。
 * @method string getDirectConnectGatewayName() 获取专线网关名称，可任意命名，但不得超过60个字符。
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) 设置专线网关名称，可任意命名，但不得超过60个字符。
 * @method string getCcnRouteType() 获取云联网路由学习类型，可选值：`BGP`（自动学习）、`STATIC`（静态，即用户配置）。只有云联网类型专线网关且开启了BGP功能才支持修改`CcnRouteType`。
 * @method void setCcnRouteType(string $CcnRouteType) 设置云联网路由学习类型，可选值：`BGP`（自动学习）、`STATIC`（静态，即用户配置）。只有云联网类型专线网关且开启了BGP功能才支持修改`CcnRouteType`。
 * @method string getModeType() 获取云联网路由发布模式，可选值：`standard`（标准模式）、`exquisite`（精细模式）。只有云联网类型专线网关才支持修改`ModeType`。
 * @method void setModeType(string $ModeType) 设置云联网路由发布模式，可选值：`standard`（标准模式）、`exquisite`（精细模式）。只有云联网类型专线网关才支持修改`ModeType`。
 */
class ModifyDirectConnectGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string 专线网关唯一`ID`，形如：`dcg-9o233uri`。
     */
    public $DirectConnectGatewayId;

    /**
     * @var string 专线网关名称，可任意命名，但不得超过60个字符。
     */
    public $DirectConnectGatewayName;

    /**
     * @var string 云联网路由学习类型，可选值：`BGP`（自动学习）、`STATIC`（静态，即用户配置）。只有云联网类型专线网关且开启了BGP功能才支持修改`CcnRouteType`。
     */
    public $CcnRouteType;

    /**
     * @var string 云联网路由发布模式，可选值：`standard`（标准模式）、`exquisite`（精细模式）。只有云联网类型专线网关才支持修改`ModeType`。
     */
    public $ModeType;

    /**
     * @param string $DirectConnectGatewayId 专线网关唯一`ID`，形如：`dcg-9o233uri`。
     * @param string $DirectConnectGatewayName 专线网关名称，可任意命名，但不得超过60个字符。
     * @param string $CcnRouteType 云联网路由学习类型，可选值：`BGP`（自动学习）、`STATIC`（静态，即用户配置）。只有云联网类型专线网关且开启了BGP功能才支持修改`CcnRouteType`。
     * @param string $ModeType 云联网路由发布模式，可选值：`standard`（标准模式）、`exquisite`（精细模式）。只有云联网类型专线网关才支持修改`ModeType`。
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("DirectConnectGatewayName",$param) and $param["DirectConnectGatewayName"] !== null) {
            $this->DirectConnectGatewayName = $param["DirectConnectGatewayName"];
        }

        if (array_key_exists("CcnRouteType",$param) and $param["CcnRouteType"] !== null) {
            $this->CcnRouteType = $param["CcnRouteType"];
        }

        if (array_key_exists("ModeType",$param) and $param["ModeType"] !== null) {
            $this->ModeType = $param["ModeType"];
        }
    }
}
