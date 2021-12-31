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
 * 设备日志条目
 *
 * @method string getId() 获取日志id
 * @method void setId(string $Id) 设置日志id
 * @method string getMsg() 获取日志内容
 * @method void setMsg(string $Msg) 设置日志内容
 * @method string getCode() 获取状态码
 * @method void setCode(string $Code) 设置状态码
 * @method integer getTimestamp() 获取时间戳
 * @method void setTimestamp(integer $Timestamp) 设置时间戳
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getMethod() 获取设备动作
 * @method void setMethod(string $Method) 设置设备动作
 */
class DeviceLogEntry extends AbstractModel
{
    /**
     * @var string 日志id
     */
    public $Id;

    /**
     * @var string 日志内容
     */
    public $Msg;

    /**
     * @var string 状态码
     */
    public $Code;

    /**
     * @var integer 时间戳
     */
    public $Timestamp;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备动作
     */
    public $Method;

    /**
     * @param string $Id 日志id
     * @param string $Msg 日志内容
     * @param string $Code 状态码
     * @param integer $Timestamp 时间戳
     * @param string $DeviceName 设备名称
     * @param string $Method 设备动作
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
