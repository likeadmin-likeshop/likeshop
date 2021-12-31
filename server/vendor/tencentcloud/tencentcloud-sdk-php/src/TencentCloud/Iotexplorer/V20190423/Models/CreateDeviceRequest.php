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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDevice请求参数结构体
 *
 * @method string getProductId() 获取产品ID。
 * @method void setProductId(string $ProductId) 设置产品ID。
 * @method string getDeviceName() 获取设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。
 * @method void setDeviceName(string $DeviceName) 设置设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。
 * @method string getDevAddr() 获取LoRaWAN 设备地址
 * @method void setDevAddr(string $DevAddr) 设置LoRaWAN 设备地址
 * @method string getAppKey() 获取LoRaWAN 应用密钥
 * @method void setAppKey(string $AppKey) 设置LoRaWAN 应用密钥
 * @method string getDevEUI() 获取LoRaWAN 设备唯一标识
 * @method void setDevEUI(string $DevEUI) 设置LoRaWAN 设备唯一标识
 * @method string getAppSKey() 获取LoRaWAN 应用会话密钥
 * @method void setAppSKey(string $AppSKey) 设置LoRaWAN 应用会话密钥
 * @method string getNwkSKey() 获取LoRaWAN 网络会话密钥
 * @method void setNwkSKey(string $NwkSKey) 设置LoRaWAN 网络会话密钥
 */
class CreateDeviceRequest extends AbstractModel
{
    /**
     * @var string 产品ID。
     */
    public $ProductId;

    /**
     * @var string 设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。
     */
    public $DeviceName;

    /**
     * @var string LoRaWAN 设备地址
     */
    public $DevAddr;

    /**
     * @var string LoRaWAN 应用密钥
     */
    public $AppKey;

    /**
     * @var string LoRaWAN 设备唯一标识
     */
    public $DevEUI;

    /**
     * @var string LoRaWAN 应用会话密钥
     */
    public $AppSKey;

    /**
     * @var string LoRaWAN 网络会话密钥
     */
    public $NwkSKey;

    /**
     * @param string $ProductId 产品ID。
     * @param string $DeviceName 设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。
     * @param string $DevAddr LoRaWAN 设备地址
     * @param string $AppKey LoRaWAN 应用密钥
     * @param string $DevEUI LoRaWAN 设备唯一标识
     * @param string $AppSKey LoRaWAN 应用会话密钥
     * @param string $NwkSKey LoRaWAN 网络会话密钥
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DevAddr",$param) and $param["DevAddr"] !== null) {
            $this->DevAddr = $param["DevAddr"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("DevEUI",$param) and $param["DevEUI"] !== null) {
            $this->DevEUI = $param["DevEUI"];
        }

        if (array_key_exists("AppSKey",$param) and $param["AppSKey"] !== null) {
            $this->AppSKey = $param["AppSKey"];
        }

        if (array_key_exists("NwkSKey",$param) and $param["NwkSKey"] !== null) {
            $this->NwkSKey = $param["NwkSKey"];
        }
    }
}
