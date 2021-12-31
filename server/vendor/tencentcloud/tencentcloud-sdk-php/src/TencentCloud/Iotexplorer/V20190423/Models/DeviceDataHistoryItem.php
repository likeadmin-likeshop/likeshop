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
 * 设备历史数据结构
 *
 * @method string getTime() 获取时间点，毫秒时间戳
 * @method void setTime(string $Time) 设置时间点，毫秒时间戳
 * @method string getValue() 获取字段取值
 * @method void setValue(string $Value) 设置字段取值
 */
class DeviceDataHistoryItem extends AbstractModel
{
    /**
     * @var string 时间点，毫秒时间戳
     */
    public $Time;

    /**
     * @var string 字段取值
     */
    public $Value;

    /**
     * @param string $Time 时间点，毫秒时间戳
     * @param string $Value 字段取值
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
