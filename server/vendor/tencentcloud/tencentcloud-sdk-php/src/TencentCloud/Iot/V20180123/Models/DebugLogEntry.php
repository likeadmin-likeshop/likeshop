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
 * @method string getEvent() 获取行为（事件）
 * @method void setEvent(string $Event) 设置行为（事件）
 * @method string getLogType() 获取shadow/action/mqtt, 分别表示：影子/规则引擎/上下线日志
 * @method void setLogType(string $LogType) 设置shadow/action/mqtt, 分别表示：影子/规则引擎/上下线日志
 * @method integer getTimestamp() 获取时间戳
 * @method void setTimestamp(integer $Timestamp) 设置时间戳
 * @method string getResult() 获取success/fail
 * @method void setResult(string $Result) 设置success/fail
 * @method string getData() 获取日志详细内容
 * @method void setData(string $Data) 设置日志详细内容
 * @method string getTopic() 获取数据来源topic
 * @method void setTopic(string $Topic) 设置数据来源topic
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 */
class DebugLogEntry extends AbstractModel
{
    /**
     * @var string 日志id
     */
    public $Id;

    /**
     * @var string 行为（事件）
     */
    public $Event;

    /**
     * @var string shadow/action/mqtt, 分别表示：影子/规则引擎/上下线日志
     */
    public $LogType;

    /**
     * @var integer 时间戳
     */
    public $Timestamp;

    /**
     * @var string success/fail
     */
    public $Result;

    /**
     * @var string 日志详细内容
     */
    public $Data;

    /**
     * @var string 数据来源topic
     */
    public $Topic;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @param string $Id 日志id
     * @param string $Event 行为（事件）
     * @param string $LogType shadow/action/mqtt, 分别表示：影子/规则引擎/上下线日志
     * @param integer $Timestamp 时间戳
     * @param string $Result success/fail
     * @param string $Data 日志详细内容
     * @param string $Topic 数据来源topic
     * @param string $DeviceName 设备名称
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

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }
    }
}
