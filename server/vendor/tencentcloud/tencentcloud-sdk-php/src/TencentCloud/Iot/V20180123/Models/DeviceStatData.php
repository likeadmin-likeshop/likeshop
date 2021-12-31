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
 * 设备统计数据
 *
 * @method string getDatetime() 获取时间点
 * @method void setDatetime(string $Datetime) 设置时间点
 * @method integer getDeviceOnline() 获取在线设备数
 * @method void setDeviceOnline(integer $DeviceOnline) 设置在线设备数
 * @method integer getDeviceActive() 获取激活设备数
 * @method void setDeviceActive(integer $DeviceActive) 设置激活设备数
 * @method integer getDeviceTotal() 获取设备总数
 * @method void setDeviceTotal(integer $DeviceTotal) 设置设备总数
 */
class DeviceStatData extends AbstractModel
{
    /**
     * @var string 时间点
     */
    public $Datetime;

    /**
     * @var integer 在线设备数
     */
    public $DeviceOnline;

    /**
     * @var integer 激活设备数
     */
    public $DeviceActive;

    /**
     * @var integer 设备总数
     */
    public $DeviceTotal;

    /**
     * @param string $Datetime 时间点
     * @param integer $DeviceOnline 在线设备数
     * @param integer $DeviceActive 激活设备数
     * @param integer $DeviceTotal 设备总数
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
        if (array_key_exists("Datetime",$param) and $param["Datetime"] !== null) {
            $this->Datetime = $param["Datetime"];
        }

        if (array_key_exists("DeviceOnline",$param) and $param["DeviceOnline"] !== null) {
            $this->DeviceOnline = $param["DeviceOnline"];
        }

        if (array_key_exists("DeviceActive",$param) and $param["DeviceActive"] !== null) {
            $this->DeviceActive = $param["DeviceActive"];
        }

        if (array_key_exists("DeviceTotal",$param) and $param["DeviceTotal"] !== null) {
            $this->DeviceTotal = $param["DeviceTotal"];
        }
    }
}
