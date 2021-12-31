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
 * 查询策略输出的阈值告警条件
 *
 * @method string getMetricShowName() 获取指标名称
 * @method void setMetricShowName(string $MetricShowName) 设置指标名称
 * @method integer getPeriod() 获取数据聚合周期(单位秒)
 * @method void setPeriod(integer $Period) 设置数据聚合周期(单位秒)
 * @method integer getMetricId() 获取指标id
 * @method void setMetricId(integer $MetricId) 设置指标id
 * @method integer getRuleId() 获取阈值规则id
 * @method void setRuleId(integer $RuleId) 设置阈值规则id
 * @method string getUnit() 获取指标单位
 * @method void setUnit(string $Unit) 设置指标单位
 * @method integer getAlarmNotifyType() 获取告警发送收敛类型。0连续告警，1指数告警
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) 设置告警发送收敛类型。0连续告警，1指数告警
 * @method integer getAlarmNotifyPeriod() 获取告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) 设置告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
 * @method integer getCalcType() 获取比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等，7表示日同比上涨，8表示日同比下降，9表示周同比上涨，10表示周同比下降，11表示周期环比上涨，12表示周期环比下降
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcType(integer $CalcType) 设置比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等，7表示日同比上涨，8表示日同比下降，9表示周同比上涨，10表示周同比下降，11表示周期环比上涨，12表示周期环比下降
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalcValue() 获取检测阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcValue(string $CalcValue) 设置检测阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContinueTime() 获取持续多长时间触发规则会告警(单位秒)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContinueTime(integer $ContinueTime) 设置持续多长时间触发规则会告警(单位秒)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricName() 获取告警指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置告警指标名
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyGroupInfoCondition extends AbstractModel
{
    /**
     * @var string 指标名称
     */
    public $MetricShowName;

    /**
     * @var integer 数据聚合周期(单位秒)
     */
    public $Period;

    /**
     * @var integer 指标id
     */
    public $MetricId;

    /**
     * @var integer 阈值规则id
     */
    public $RuleId;

    /**
     * @var string 指标单位
     */
    public $Unit;

    /**
     * @var integer 告警发送收敛类型。0连续告警，1指数告警
     */
    public $AlarmNotifyType;

    /**
     * @var integer 告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer 比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等，7表示日同比上涨，8表示日同比下降，9表示周同比上涨，10表示周同比下降，11表示周期环比上涨，12表示周期环比下降
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcType;

    /**
     * @var string 检测阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcValue;

    /**
     * @var integer 持续多长时间触发规则会告警(单位秒)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContinueTime;

    /**
     * @var string 告警指标名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @param string $MetricShowName 指标名称
     * @param integer $Period 数据聚合周期(单位秒)
     * @param integer $MetricId 指标id
     * @param integer $RuleId 阈值规则id
     * @param string $Unit 指标单位
     * @param integer $AlarmNotifyType 告警发送收敛类型。0连续告警，1指数告警
     * @param integer $AlarmNotifyPeriod 告警发送周期单位秒。<0 不触发, 0 只触发一次, >0 每隔triggerTime秒触发一次
     * @param integer $CalcType 比较类型，1表示大于，2表示大于等于，3表示小于，4表示小于等于，5表示相等，6表示不相等，7表示日同比上涨，8表示日同比下降，9表示周同比上涨，10表示周同比下降，11表示周期环比上涨，12表示周期环比下降
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalcValue 检测阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContinueTime 持续多长时间触发规则会告警(单位秒)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricName 告警指标名
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MetricShowName",$param) and $param["MetricShowName"] !== null) {
            $this->MetricShowName = $param["MetricShowName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
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

        if (array_key_exists("ContinueTime",$param) and $param["ContinueTime"] !== null) {
            $this->ContinueTime = $param["ContinueTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }
    }
}
