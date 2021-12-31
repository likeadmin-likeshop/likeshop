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
 * UpdateDeviceAvailableState请求参数结构体
 *
 * @method string getProductId() 获取设备所属产品id
 * @method void setProductId(string $ProductId) 设置设备所属产品id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getEnableState() 获取要设置的设备状态，1为启用，0为禁用
 * @method void setEnableState(integer $EnableState) 设置要设置的设备状态，1为启用，0为禁用
 */
class UpdateDeviceAvailableStateRequest extends AbstractModel
{
    /**
     * @var string 设备所属产品id
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 要设置的设备状态，1为启用，0为禁用
     */
    public $EnableState;

    /**
     * @param string $ProductId 设备所属产品id
     * @param string $DeviceName 设备名称
     * @param integer $EnableState 要设置的设备状态，1为启用，0为禁用
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

        if (array_key_exists("EnableState",$param) and $param["EnableState"] !== null) {
            $this->EnableState = $param["EnableState"];
        }
    }
}
