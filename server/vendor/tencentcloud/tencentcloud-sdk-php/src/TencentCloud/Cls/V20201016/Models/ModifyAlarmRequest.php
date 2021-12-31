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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarm请求参数结构体
 *
 * @method string getAlarmId() 获取告警策略ID。
 * @method void setAlarmId(string $AlarmId) 设置告警策略ID。
 * @method string getName() 获取告警策略名称
 * @method void setName(string $Name) 设置告警策略名称
 * @method MonitorTime getMonitorTime() 获取监控任务运行时间点。
 * @method void setMonitorTime(MonitorTime $MonitorTime) 设置监控任务运行时间点。
 * @method string getCondition() 获取触发条件。
 * @method void setCondition(string $Condition) 设置触发条件。
 * @method integer getTriggerCount() 获取持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。
 * @method void setTriggerCount(integer $TriggerCount) 设置持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。
 * @method integer getAlarmPeriod() 获取告警重复的周期。单位是分钟。取值范围是0~1440。
 * @method void setAlarmPeriod(integer $AlarmPeriod) 设置告警重复的周期。单位是分钟。取值范围是0~1440。
 * @method array getAlarmNoticeIds() 获取关联的告警通知模板列表。
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) 设置关联的告警通知模板列表。
 * @method array getAlarmTargets() 获取监控对象列表。
 * @method void setAlarmTargets(array $AlarmTargets) 设置监控对象列表。
 * @method boolean getStatus() 获取是否开启告警策略。
 * @method void setStatus(boolean $Status) 设置是否开启告警策略。
 */
class ModifyAlarmRequest extends AbstractModel
{
    /**
     * @var string 告警策略ID。
     */
    public $AlarmId;

    /**
     * @var string 告警策略名称
     */
    public $Name;

    /**
     * @var MonitorTime 监控任务运行时间点。
     */
    public $MonitorTime;

    /**
     * @var string 触发条件。
     */
    public $Condition;

    /**
     * @var integer 持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。
     */
    public $TriggerCount;

    /**
     * @var integer 告警重复的周期。单位是分钟。取值范围是0~1440。
     */
    public $AlarmPeriod;

    /**
     * @var array 关联的告警通知模板列表。
     */
    public $AlarmNoticeIds;

    /**
     * @var array 监控对象列表。
     */
    public $AlarmTargets;

    /**
     * @var boolean 是否开启告警策略。
     */
    public $Status;

    /**
     * @param string $AlarmId 告警策略ID。
     * @param string $Name 告警策略名称
     * @param MonitorTime $MonitorTime 监控任务运行时间点。
     * @param string $Condition 触发条件。
     * @param integer $TriggerCount 持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。
     * @param integer $AlarmPeriod 告警重复的周期。单位是分钟。取值范围是0~1440。
     * @param array $AlarmNoticeIds 关联的告警通知模板列表。
     * @param array $AlarmTargets 监控对象列表。
     * @param boolean $Status 是否开启告警策略。
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MonitorTime",$param) and $param["MonitorTime"] !== null) {
            $this->MonitorTime = new MonitorTime();
            $this->MonitorTime->deserialize($param["MonitorTime"]);
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("TriggerCount",$param) and $param["TriggerCount"] !== null) {
            $this->TriggerCount = $param["TriggerCount"];
        }

        if (array_key_exists("AlarmPeriod",$param) and $param["AlarmPeriod"] !== null) {
            $this->AlarmPeriod = $param["AlarmPeriod"];
        }

        if (array_key_exists("AlarmNoticeIds",$param) and $param["AlarmNoticeIds"] !== null) {
            $this->AlarmNoticeIds = $param["AlarmNoticeIds"];
        }

        if (array_key_exists("AlarmTargets",$param) and $param["AlarmTargets"] !== null) {
            $this->AlarmTargets = [];
            foreach ($param["AlarmTargets"] as $key => $value){
                $obj = new AlarmTarget();
                $obj->deserialize($value);
                array_push($this->AlarmTargets, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
