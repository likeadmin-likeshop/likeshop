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
 * CreateDevice返回参数结构体
 *
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDevicePsk() 获取对称加密密钥，base64编码。采用对称加密时返回该参数
 * @method void setDevicePsk(string $DevicePsk) 设置对称加密密钥，base64编码。采用对称加密时返回该参数
 * @method string getDeviceCert() 获取设备证书，用于 TLS 建立链接时校验客户端身份。采用非对称加密时返回该参数
 * @method void setDeviceCert(string $DeviceCert) 设置设备证书，用于 TLS 建立链接时校验客户端身份。采用非对称加密时返回该参数
 * @method string getDevicePrivateKey() 获取设备私钥，用于 TLS 建立链接时校验客户端身份，腾讯云后台不保存，请妥善保管。采用非对称加密时返回该参数
 * @method void setDevicePrivateKey(string $DevicePrivateKey) 设置设备私钥，用于 TLS 建立链接时校验客户端身份，腾讯云后台不保存，请妥善保管。采用非对称加密时返回该参数
 * @method string getLoraDevEui() 获取LoRa设备的DevEui，当设备是LoRa设备时，会返回该字段
 * @method void setLoraDevEui(string $LoraDevEui) 设置LoRa设备的DevEui，当设备是LoRa设备时，会返回该字段
 * @method integer getLoraMoteType() 获取LoRa设备的MoteType，当设备是LoRa设备时，会返回该字段
 * @method void setLoraMoteType(integer $LoraMoteType) 设置LoRa设备的MoteType，当设备是LoRa设备时，会返回该字段
 * @method string getLoraAppKey() 获取LoRa设备的AppKey，当设备是LoRa设备时，会返回该字段
 * @method void setLoraAppKey(string $LoraAppKey) 设置LoRa设备的AppKey，当设备是LoRa设备时，会返回该字段
 * @method string getLoraNwkKey() 获取LoRa设备的NwkKey，当设备是LoRa设备时，会返回该字段
 * @method void setLoraNwkKey(string $LoraNwkKey) 设置LoRa设备的NwkKey，当设备是LoRa设备时，会返回该字段
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDeviceResponse extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 对称加密密钥，base64编码。采用对称加密时返回该参数
     */
    public $DevicePsk;

    /**
     * @var string 设备证书，用于 TLS 建立链接时校验客户端身份。采用非对称加密时返回该参数
     */
    public $DeviceCert;

    /**
     * @var string 设备私钥，用于 TLS 建立链接时校验客户端身份，腾讯云后台不保存，请妥善保管。采用非对称加密时返回该参数
     */
    public $DevicePrivateKey;

    /**
     * @var string LoRa设备的DevEui，当设备是LoRa设备时，会返回该字段
     */
    public $LoraDevEui;

    /**
     * @var integer LoRa设备的MoteType，当设备是LoRa设备时，会返回该字段
     */
    public $LoraMoteType;

    /**
     * @var string LoRa设备的AppKey，当设备是LoRa设备时，会返回该字段
     */
    public $LoraAppKey;

    /**
     * @var string LoRa设备的NwkKey，当设备是LoRa设备时，会返回该字段
     */
    public $LoraNwkKey;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DeviceName 设备名称
     * @param string $DevicePsk 对称加密密钥，base64编码。采用对称加密时返回该参数
     * @param string $DeviceCert 设备证书，用于 TLS 建立链接时校验客户端身份。采用非对称加密时返回该参数
     * @param string $DevicePrivateKey 设备私钥，用于 TLS 建立链接时校验客户端身份，腾讯云后台不保存，请妥善保管。采用非对称加密时返回该参数
     * @param string $LoraDevEui LoRa设备的DevEui，当设备是LoRa设备时，会返回该字段
     * @param integer $LoraMoteType LoRa设备的MoteType，当设备是LoRa设备时，会返回该字段
     * @param string $LoraAppKey LoRa设备的AppKey，当设备是LoRa设备时，会返回该字段
     * @param string $LoraNwkKey LoRa设备的NwkKey，当设备是LoRa设备时，会返回该字段
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DevicePsk",$param) and $param["DevicePsk"] !== null) {
            $this->DevicePsk = $param["DevicePsk"];
        }

        if (array_key_exists("DeviceCert",$param) and $param["DeviceCert"] !== null) {
            $this->DeviceCert = $param["DeviceCert"];
        }

        if (array_key_exists("DevicePrivateKey",$param) and $param["DevicePrivateKey"] !== null) {
            $this->DevicePrivateKey = $param["DevicePrivateKey"];
        }

        if (array_key_exists("LoraDevEui",$param) and $param["LoraDevEui"] !== null) {
            $this->LoraDevEui = $param["LoraDevEui"];
        }

        if (array_key_exists("LoraMoteType",$param) and $param["LoraMoteType"] !== null) {
            $this->LoraMoteType = $param["LoraMoteType"];
        }

        if (array_key_exists("LoraAppKey",$param) and $param["LoraAppKey"] !== null) {
            $this->LoraAppKey = $param["LoraAppKey"];
        }

        if (array_key_exists("LoraNwkKey",$param) and $param["LoraNwkKey"] !== null) {
            $this->LoraNwkKey = $param["LoraNwkKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
