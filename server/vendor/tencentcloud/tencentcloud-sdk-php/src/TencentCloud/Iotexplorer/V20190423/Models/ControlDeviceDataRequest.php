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
 * ControlDeviceData请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getData() 获取属性数据, JSON格式字符串, 注意字段需要在物模型属性里定义
 * @method void setData(string $Data) 设置属性数据, JSON格式字符串, 注意字段需要在物模型属性里定义
 * @method string getMethod() 获取请求类型 , 不填该参数或者 desired 表示下发属性给设备,  reported 表示模拟设备上报属性
 * @method void setMethod(string $Method) 设置请求类型 , 不填该参数或者 desired 表示下发属性给设备,  reported 表示模拟设备上报属性
 * @method string getDeviceId() 获取设备ID，该字段有值将代替 ProductId/DeviceName , 通常情况不需要填写
 * @method void setDeviceId(string $DeviceId) 设置设备ID，该字段有值将代替 ProductId/DeviceName , 通常情况不需要填写
 * @method integer getDataTimestamp() 获取上报数据UNIX时间戳(毫秒), 仅对Method:reported有效
 * @method void setDataTimestamp(integer $DataTimestamp) 设置上报数据UNIX时间戳(毫秒), 仅对Method:reported有效
 */
class ControlDeviceDataRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 属性数据, JSON格式字符串, 注意字段需要在物模型属性里定义
     */
    public $Data;

    /**
     * @var string 请求类型 , 不填该参数或者 desired 表示下发属性给设备,  reported 表示模拟设备上报属性
     */
    public $Method;

    /**
     * @var string 设备ID，该字段有值将代替 ProductId/DeviceName , 通常情况不需要填写
     */
    public $DeviceId;

    /**
     * @var integer 上报数据UNIX时间戳(毫秒), 仅对Method:reported有效
     */
    public $DataTimestamp;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $Data 属性数据, JSON格式字符串, 注意字段需要在物模型属性里定义
     * @param string $Method 请求类型 , 不填该参数或者 desired 表示下发属性给设备,  reported 表示模拟设备上报属性
     * @param string $DeviceId 设备ID，该字段有值将代替 ProductId/DeviceName , 通常情况不需要填写
     * @param integer $DataTimestamp 上报数据UNIX时间戳(毫秒), 仅对Method:reported有效
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DataTimestamp",$param) and $param["DataTimestamp"] !== null) {
            $this->DataTimestamp = $param["DataTimestamp"];
        }
    }
}
