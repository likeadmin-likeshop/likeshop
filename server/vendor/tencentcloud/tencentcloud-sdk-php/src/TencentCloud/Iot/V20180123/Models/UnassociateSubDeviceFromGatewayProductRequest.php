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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnassociateSubDeviceFromGatewayProduct请求参数结构体
 *
 * @method string getSubDeviceProductId() 获取子设备产品Id
 * @method void setSubDeviceProductId(string $SubDeviceProductId) 设置子设备产品Id
 * @method string getGatewayProductId() 获取网关设备产品Id
 * @method void setGatewayProductId(string $GatewayProductId) 设置网关设备产品Id
 */
class UnassociateSubDeviceFromGatewayProductRequest extends AbstractModel
{
    /**
     * @var string 子设备产品Id
     */
    public $SubDeviceProductId;

    /**
     * @var string 网关设备产品Id
     */
    public $GatewayProductId;

    /**
     * @param string $SubDeviceProductId 子设备产品Id
     * @param string $GatewayProductId 网关设备产品Id
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
        if (array_key_exists("SubDeviceProductId",$param) and $param["SubDeviceProductId"] !== null) {
            $this->SubDeviceProductId = $param["SubDeviceProductId"];
        }

        if (array_key_exists("GatewayProductId",$param) and $param["GatewayProductId"] !== null) {
            $this->GatewayProductId = $param["GatewayProductId"];
        }
    }
}
