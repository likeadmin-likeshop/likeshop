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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EstablishWxGatewayRoute请求参数结构体
 *
 * @method string getGatewayId() 获取网关id
 * @method void setGatewayId(string $GatewayId) 设置网关id
 * @method string getGatewayRouteName() 获取服务名称
 * @method void setGatewayRouteName(string $GatewayRouteName) 设置服务名称
 * @method string getGatewayRouteAddr() 获取服务地址
 * @method void setGatewayRouteAddr(string $GatewayRouteAddr) 设置服务地址
 * @method string getGatewayRouteProtocol() 获取协议类型 http/https
 * @method void setGatewayRouteProtocol(string $GatewayRouteProtocol) 设置协议类型 http/https
 * @method string getGatewayRouteDesc() 获取服务描述
 * @method void setGatewayRouteDesc(string $GatewayRouteDesc) 设置服务描述
 */
class EstablishWxGatewayRouteRequest extends AbstractModel
{
    /**
     * @var string 网关id
     */
    public $GatewayId;

    /**
     * @var string 服务名称
     */
    public $GatewayRouteName;

    /**
     * @var string 服务地址
     */
    public $GatewayRouteAddr;

    /**
     * @var string 协议类型 http/https
     */
    public $GatewayRouteProtocol;

    /**
     * @var string 服务描述
     */
    public $GatewayRouteDesc;

    /**
     * @param string $GatewayId 网关id
     * @param string $GatewayRouteName 服务名称
     * @param string $GatewayRouteAddr 服务地址
     * @param string $GatewayRouteProtocol 协议类型 http/https
     * @param string $GatewayRouteDesc 服务描述
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayRouteName",$param) and $param["GatewayRouteName"] !== null) {
            $this->GatewayRouteName = $param["GatewayRouteName"];
        }

        if (array_key_exists("GatewayRouteAddr",$param) and $param["GatewayRouteAddr"] !== null) {
            $this->GatewayRouteAddr = $param["GatewayRouteAddr"];
        }

        if (array_key_exists("GatewayRouteProtocol",$param) and $param["GatewayRouteProtocol"] !== null) {
            $this->GatewayRouteProtocol = $param["GatewayRouteProtocol"];
        }

        if (array_key_exists("GatewayRouteDesc",$param) and $param["GatewayRouteDesc"] !== null) {
            $this->GatewayRouteDesc = $param["GatewayRouteDesc"];
        }
    }
}
