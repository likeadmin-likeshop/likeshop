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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改告警策略组传入的指标阈值条件
 *
 * @method integer getMetricId() 获取指标id
 * @method void setMetricId(integer $MetricId) 设置指标id
 * @method integer getCalcType() 获取比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等
 * @method void setCalcType(integer $CalcType) 设置比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等
 * @method string getCalcValue() 获取检测阈值
 * @method void setCalcValue(string $CalcValue) 设置检测阈值
 * @method integer getCalcPeriod() 获取检测指标的数据周期
 * @method void setCalcPeriod(integer $CalcPeriod) 设置检测指标的数据周期
 * @method integer getContinuePeriod() 获取持续周期个数
 * @method void setContinuePeriod(integer $ContinuePeriod) 设置持续周期个数
 * @method integer getAlarmNotifyType() 获取告警发送收敛类型。0连续告警，1指数告警
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置告警发送收敛类型。0连续告警，1指数告警
 * @method integer getAlarmNotifyPeriod() 获取告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) 设置告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
 * @method integer getRuleId() 获取规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改
 * @method void setRuleId(integer $RuleId) 设置规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改
 */
class ModifyPolicyGroupCondition extends AbstractModel
{
    /**
     * @var integer 指标id
     */
    public $MetricId;

    /**
     * @var integer 比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等
     */
    public $CalcType;

    /**
     * @var string 检测阈值
     */
    public $CalcValue;

    /**
     * @var integer 检测指标的数据周期
     */
    public $CalcPeriod;

    /**
     * @var integer 持续周期个数
     */
    public $ContinuePeriod;

    /**
     * @var integer 告警发送收敛类型。0连续告警，1指数告警
     */
    public $AlarmNotifyType;

    /**
     * @var integer 告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer 规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改
     */
    public $RuleId;

    /**
     * @param integer $MetricId 指标id
     * @param integer $CalcType 比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等
     * @param string $CalcValue 检测阈值
     * @param integer $CalcPeriod 检测指标的数据周期
     * @param integer $ContinuePeriod 持续周期个数
     * @param integer $AlarmNotifyType 告警发送收敛类型。0连续告警，1指数告警
     * @param integer $AlarmNotifyPeriod 告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
     * @param integer $RuleId 规则id，不填表示新增，填写了ruleId表示在已存在的规则基础上进行修改
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
        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("CalcType",$param) and $param["CalcType"] !== null) {
            $this->CalcType = $param["CalcType"];
        }

        if (array_key_exists("CalcValue",$param) and $param["CalcValue"] !== null) {
            $this->CalcValue = $param["CalcValue"];
        }

        if (array_key_exists("CalcPeriod",$param) and $param["CalcPeriod"] !== null) {
            $this->CalcPeriod = $param["CalcPeriod"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
