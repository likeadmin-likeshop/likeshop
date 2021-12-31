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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoraDevice请求参数结构体
 *
 * @method string getProductId() 获取产品Id ，创建产品时腾讯云为用户分配全局唯一的Id
 * @method void setProductId(string $ProductId) 设置产品Id ，创建产品时腾讯云为用户分配全局唯一的Id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDeviceType() 获取设备类型 ，目前支持A、B、C三种
 * @method void setDeviceType(string $DeviceType) 设置设备类型 ，目前支持A、B、C三种
 * @method string getAppEui() 获取LoRa应用UUID
 * @method void setAppEui(string $AppEui) 设置LoRa应用UUID
 * @method string getDeviceEui() 获取LoRa设备UUID
 * @method void setDeviceEui(string $DeviceEui) 设置LoRa设备UUID
 * @method string getAppKey() 获取LoRa应用密钥
 * @method void setAppKey(string $AppKey) 设置LoRa应用密钥
 * @method string getAuthKey() 获取LoRa设备验证密钥
 * @method void setAuthKey(string $AuthKey) 设置LoRa设备验证密钥
 * @method string getMemo() 获取设备备注
 * @method void setMemo(string $Memo) 设置设备备注
 */
class CreateLoraDeviceRequest extends AbstractModel
{
    /**
     * @var string 产品Id ，创建产品时腾讯云为用户分配全局唯一的Id
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备类型 ，目前支持A、B、C三种
     */
    public $DeviceType;

    /**
     * @var string LoRa应用UUID
     */
    public $AppEui;

    /**
     * @var string LoRa设备UUID
     */
    public $DeviceEui;

    /**
     * @var string LoRa应用密钥
     */
    public $AppKey;

    /**
     * @var string LoRa设备验证密钥
     */
    public $AuthKey;

    /**
     * @var string 设备备注
     */
    public $Memo;

    /**
     * @param string $ProductId 产品Id ，创建产品时腾讯云为用户分配全局唯一的Id
     * @param string $DeviceName 设备名称
     * @param string $DeviceType 设备类型 ，目前支持A、B、C三种
     * @param string $AppEui LoRa应用UUID
     * @param string $DeviceEui LoRa设备UUID
     * @param string $AppKey LoRa应用密钥
     * @param string $AuthKey LoRa设备验证密钥
     * @param string $Memo 设备备注
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

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("AppEui",$param) and $param["AppEui"] !== null) {
            $this->AppEui = $param["AppEui"];
        }

        if (array_key_exists("DeviceEui",$param) and $param["DeviceEui"] !== null) {
            $this->DeviceEui = $param["DeviceEui"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("AuthKey",$param) and $param["AuthKey"] !== null) {
            $this->AuthKey = $param["AuthKey"];
        }

        if (array_key_exists("Memo",$param) and $param["Memo"] !== null) {
            $this->Memo = $param["Memo"];
        }
    }
}
