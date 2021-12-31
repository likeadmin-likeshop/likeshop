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
 * 创建策略传入的阈值告警条件
 *
 * @method integer getMetricId() 获取指标Id
 * @method void setMetricId(integer $MetricId) 设置指标Id
 * @method integer getAlarmNotifyType() 获取告警发送收敛类型。0连续告警，1指数告警
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置告警发送收敛类型。0连续告警，1指数告警
 * @method integer getAlarmNotifyPeriod() 获取告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) 设置告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
 * @method integer getCalcType() 获取比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等。如果指标有配置默认比较类型值可以不填。
 * @method void setCalcType(integer $CalcType) 设置比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等。如果指标有配置默认比较类型值可以不填。
 * @method float getCalcValue() 获取比较的值，如果指标不必须CalcValue可不填
 * @method void setCalcValue(float $CalcValue) 设置比较的值，如果指标不必须CalcValue可不填
 * @method integer getCalcPeriod() 获取数据聚合周期(单位秒)，若指标有默认值可不填
 * @method void setCalcPeriod(integer $CalcPeriod) 设置数据聚合周期(单位秒)，若指标有默认值可不填
 * @method integer getContinuePeriod() 获取持续几个检测周期触发规则会告警
 * @method void setContinuePeriod(integer $ContinuePeriod) 设置持续几个检测周期触发规则会告警
 * @method integer getRuleId() 获取如果通过模版创建，需要传入模版中该指标的对应RuleId
 * @method void setRuleId(integer $RuleId) 设置如果通过模版创建，需要传入模版中该指标的对应RuleId
 */
class CreatePolicyGroupCondition extends AbstractModel
{
    /**
     * @var integer 指标Id
     */
    public $MetricId;

    /**
     * @var integer 告警发送收敛类型。0连续告警，1指数告警
     */
    public $AlarmNotifyType;

    /**
     * @var integer 告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer 比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等。如果指标有配置默认比较类型值可以不填。
     */
    public $CalcType;

    /**
     * @var float 比较的值，如果指标不必须CalcValue可不填
     */
    public $CalcValue;

    /**
     * @var integer 数据聚合周期(单位秒)，若指标有默认值可不填
     */
    public $CalcPeriod;

    /**
     * @var integer 持续几个检测周期触发规则会告警
     */
    public $ContinuePeriod;

    /**
     * @var integer 如果通过模版创建，需要传入模版中该指标的对应RuleId
     */
    public $RuleId;

    /**
     * @param integer $MetricId 指标Id
     * @param integer $AlarmNotifyType 告警发送收敛类型。0连续告警，1指数告警
     * @param integer $AlarmNotifyPeriod 告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
     * @param integer $CalcType 比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等。如果指标有配置默认比较类型值可以不填。
     * @param float $CalcValue 比较的值，如果指标不必须CalcValue可不填
     * @param integer $CalcPeriod 数据聚合周期(单位秒)，若指标有默认值可不填
     * @param integer $ContinuePeriod 持续几个检测周期触发规则会告警
     * @param integer $RuleId 如果通过模版创建，需要传入模版中该指标的对应RuleId
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

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
