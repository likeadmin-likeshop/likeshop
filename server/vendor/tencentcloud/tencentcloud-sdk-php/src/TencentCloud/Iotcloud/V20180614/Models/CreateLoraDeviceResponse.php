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
 * CreateLoraDevice返回参数结构体
 *
 * @method string getAppEui() 获取LoRa应用UUID
 * @method void setAppEui(string $AppEui) 设置LoRa应用UUID
 * @method string getDeviceEui() 获取LoRa设备UUID
 * @method void setDeviceEui(string $DeviceEui) 设置LoRa设备UUID
 * @method string getClassType() 获取设备类型,目前支持A、B、C三种
 * @method void setClassType(string $ClassType) 设置设备类型,目前支持A、B、C三种
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateLoraDeviceResponse extends AbstractModel
{
    /**
     * @var string LoRa应用UUID
     */
    public $AppEui;

    /**
     * @var string LoRa设备UUID
     */
    public $DeviceEui;

    /**
     * @var string 设备类型,目前支持A、B、C三种
     */
    public $ClassType;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppEui LoRa应用UUID
     * @param string $DeviceEui LoRa设备UUID
     * @param string $ClassType 设备类型,目前支持A、B、C三种
     * @param string $DeviceName 设备名称
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
        if (array_key_exists("AppEui",$param) and $param["AppEui"] !== null) {
            $this->AppEui = $param["AppEui"];
        }

        if (array_key_exists("DeviceEui",$param) and $param["DeviceEui"] !== null) {
            $this->DeviceEui = $param["DeviceEui"];
        }

        if (array_key_exists("ClassType",$param) and $param["ClassType"] !== null) {
            $this->ClassType = $param["ClassType"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
