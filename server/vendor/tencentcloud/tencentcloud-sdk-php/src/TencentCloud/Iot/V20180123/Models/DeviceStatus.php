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
 * 设备状态
 *
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getStatus() 获取设备状态（inactive, online, offline）
 * @method void setStatus(string $Status) 设置设备状态（inactive, online, offline）
 * @method string getFirstOnline() 获取首次上线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstOnline(string $FirstOnline) 设置首次上线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastOnline() 获取最后上线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOnline(string $LastOnline) 设置最后上线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOnlineTimes() 获取上线次数
 * @method void setOnlineTimes(integer $OnlineTimes) 设置上线次数
 */
class DeviceStatus extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备状态（inactive, online, offline）
     */
    public $Status;

    /**
     * @var string 首次上线时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstOnline;

    /**
     * @var string 最后上线时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOnline;

    /**
     * @var integer 上线次数
     */
    public $OnlineTimes;

    /**
     * @param string $DeviceName 设备名称
     * @param string $Status 设备状态（inactive, online, offline）
     * @param string $FirstOnline 首次上线时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastOnline 最后上线时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OnlineTimes 上线次数
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FirstOnline",$param) and $param["FirstOnline"] !== null) {
            $this->FirstOnline = $param["FirstOnline"];
        }

        if (array_key_exists("LastOnline",$param) and $param["LastOnline"] !== null) {
            $this->LastOnline = $param["LastOnline"];
        }

        if (array_key_exists("OnlineTimes",$param) and $param["OnlineTimes"] !== null) {
            $this->OnlineTimes = $param["OnlineTimes"];
        }
    }
}
