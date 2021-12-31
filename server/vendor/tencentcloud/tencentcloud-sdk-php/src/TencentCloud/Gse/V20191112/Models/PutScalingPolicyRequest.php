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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutScalingPolicy请求参数结构体
 *
 * @method string getFleetId() 获取扩缩容配置服务器舰队ID
 * @method void setFleetId(string $FleetId) 设置扩缩容配置服务器舰队ID
 * @method string getName() 获取扩缩容策略名称，最小长度为1，最大长度为1024
 * @method void setName(string $Name) 设置扩缩容策略名称，最小长度为1，最大长度为1024
 * @method integer getScalingAdjustment() 获取扩缩容调整值，ScalingAdjustmentType取值PercentChangeInCapacity时，取值范围-99~99
ScalingAdjustmentType取值ChangeInCapacity或ExactCapacity时，最小值要缩容的最多CVM个数，最大值为实际最大的CVM个数限额
 * @method void setScalingAdjustment(integer $ScalingAdjustment) 设置扩缩容调整值，ScalingAdjustmentType取值PercentChangeInCapacity时，取值范围-99~99
ScalingAdjustmentType取值ChangeInCapacity或ExactCapacity时，最小值要缩容的最多CVM个数，最大值为实际最大的CVM个数限额
 * @method string getScalingAdjustmentType() 获取扩缩容调整类型，取值（ChangeInCapacity，ExactCapacity，PercentChangeInCapacity）
 * @method void setScalingAdjustmentType(string $ScalingAdjustmentType) 设置扩缩容调整类型，取值（ChangeInCapacity，ExactCapacity，PercentChangeInCapacity）
 * @method float getThreshold() 获取扩缩容指标阈值
 * @method void setThreshold(float $Threshold) 设置扩缩容指标阈值
 * @method string getComparisonOperator() 获取扩缩容策略比较符，取值：>,>=,<,<=
 * @method void setComparisonOperator(string $ComparisonOperator) 设置扩缩容策略比较符，取值：>,>=,<,<=
 * @method integer getEvaluationPeriods() 获取单个策略持续时间长度（分钟）
 * @method void setEvaluationPeriods(integer $EvaluationPeriods) 设置单个策略持续时间长度（分钟）
 * @method string getMetricName() 获取扩缩容参与计算的指标名称，PolicyType取值RuleBased，
MetricName取值（AvailableGameServerSessions，AvailableCustomCount，PercentAvailableCustomCount，ActiveInstances，IdleInstances，CurrentPlayerSessions和PercentIdleInstances）；
PolicyType取值TargetBased时，MetricName取值PercentAvailableGameSessions
 * @method void setMetricName(string $MetricName) 设置扩缩容参与计算的指标名称，PolicyType取值RuleBased，
MetricName取值（AvailableGameServerSessions，AvailableCustomCount，PercentAvailableCustomCount，ActiveInstances，IdleInstances，CurrentPlayerSessions和PercentIdleInstances）；
PolicyType取值TargetBased时，MetricName取值PercentAvailableGameSessions
 * @method string getPolicyType() 获取策略类型，取值：TargetBased表示基于目标的策略；RuleBased表示基于规则的策略
 * @method void setPolicyType(string $PolicyType) 设置策略类型，取值：TargetBased表示基于目标的策略；RuleBased表示基于规则的策略
 * @method TargetConfiguration getTargetConfiguration() 获取扩缩容目标值配置，只有TargetBased类型的策略生效
 * @method void setTargetConfiguration(TargetConfiguration $TargetConfiguration) 设置扩缩容目标值配置，只有TargetBased类型的策略生效
 */
class PutScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string 扩缩容配置服务器舰队ID
     */
    public $FleetId;

    /**
     * @var string 扩缩容策略名称，最小长度为1，最大长度为1024
     */
    public $Name;

    /**
     * @var integer 扩缩容调整值，ScalingAdjustmentType取值PercentChangeInCapacity时，取值范围-99~99
ScalingAdjustmentType取值ChangeInCapacity或ExactCapacity时，最小值要缩容的最多CVM个数，最大值为实际最大的CVM个数限额
     */
    public $ScalingAdjustment;

    /**
     * @var string 扩缩容调整类型，取值（ChangeInCapacity，ExactCapacity，PercentChangeInCapacity）
     */
    public $ScalingAdjustmentType;

    /**
     * @var float 扩缩容指标阈值
     */
    public $Threshold;

    /**
     * @var string 扩缩容策略比较符，取值：>,>=,<,<=
     */
    public $ComparisonOperator;

    /**
     * @var integer 单个策略持续时间长度（分钟）
     */
    public $EvaluationPeriods;

    /**
     * @var string 扩缩容参与计算的指标名称，PolicyType取值RuleBased，
MetricName取值（AvailableGameServerSessions，AvailableCustomCount，PercentAvailableCustomCount，ActiveInstances，IdleInstances，CurrentPlayerSessions和PercentIdleInstances）；
PolicyType取值TargetBased时，MetricName取值PercentAvailableGameSessions
     */
    public $MetricName;

    /**
     * @var string 策略类型，取值：TargetBased表示基于目标的策略；RuleBased表示基于规则的策略
     */
    public $PolicyType;

    /**
     * @var TargetConfiguration 扩缩容目标值配置，只有TargetBased类型的策略生效
     */
    public $TargetConfiguration;

    /**
     * @param string $FleetId 扩缩容配置服务器舰队ID
     * @param string $Name 扩缩容策略名称，最小长度为1，最大长度为1024
     * @param integer $ScalingAdjustment 扩缩容调整值，ScalingAdjustmentType取值PercentChangeInCapacity时，取值范围-99~99
ScalingAdjustmentType取值ChangeInCapacity或ExactCapacity时，最小值要缩容的最多CVM个数，最大值为实际最大的CVM个数限额
     * @param string $ScalingAdjustmentType 扩缩容调整类型，取值（ChangeInCapacity，ExactCapacity，PercentChangeInCapacity）
     * @param float $Threshold 扩缩容指标阈值
     * @param string $ComparisonOperator 扩缩容策略比较符，取值：>,>=,<,<=
     * @param integer $EvaluationPeriods 单个策略持续时间长度（分钟）
     * @param string $MetricName 扩缩容参与计算的指标名称，PolicyType取值RuleBased，
MetricName取值（AvailableGameServerSessions，AvailableCustomCount，PercentAvailableCustomCount，ActiveInstances，IdleInstances，CurrentPlayerSessions和PercentIdleInstances）；
PolicyType取值TargetBased时，MetricName取值PercentAvailableGameSessions
     * @param string $PolicyType 策略类型，取值：TargetBased表示基于目标的策略；RuleBased表示基于规则的策略
     * @param TargetConfiguration $TargetConfiguration 扩缩容目标值配置，只有TargetBased类型的策略生效
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ScalingAdjustment",$param) and $param["ScalingAdjustment"] !== null) {
            $this->ScalingAdjustment = $param["ScalingAdjustment"];
        }

        if (array_key_exists("ScalingAdjustmentType",$param) and $param["ScalingAdjustmentType"] !== null) {
            $this->ScalingAdjustmentType = $param["ScalingAdjustmentType"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("ComparisonOperator",$param) and $param["ComparisonOperator"] !== null) {
            $this->ComparisonOperator = $param["ComparisonOperator"];
        }

        if (array_key_exists("EvaluationPeriods",$param) and $param["EvaluationPeriods"] !== null) {
            $this->EvaluationPeriods = $param["EvaluationPeriods"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("TargetConfiguration",$param) and $param["TargetConfiguration"] !== null) {
            $this->TargetConfiguration = new TargetConfiguration();
            $this->TargetConfiguration->deserialize($param["TargetConfiguration"]);
        }
    }
}
