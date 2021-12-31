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
 * 动态扩缩容配置
 *
 * @method string getFleetId() 获取服务部署ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetId(string $FleetId) 设置服务部署ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScalingAdjustment() 获取保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalingAdjustment(string $ScalingAdjustment) 设置保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScalingAdjustmentType() 获取保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalingAdjustmentType(string $ScalingAdjustmentType) 设置保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComparisonOperator() 获取保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComparisonOperator(string $ComparisonOperator) 设置保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThreshold() 获取保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreshold(string $Threshold) 设置保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvaluationPeriods() 获取保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvaluationPeriods(string $EvaluationPeriods) 设置保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricName() 获取保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置保留参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyType() 获取策略类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyType(string $PolicyType) 设置策略类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method TargetConfiguration getTargetConfiguration() 获取基于规则的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetConfiguration(TargetConfiguration $TargetConfiguration) 设置基于规则的配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScalingPolicy extends AbstractModel
{
    /**
     * @var string 服务部署ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetId;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalingAdjustment;

    /**
     * @var string 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalingAdjustmentType;

    /**
     * @var string 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComparisonOperator;

    /**
     * @var string 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Threshold;

    /**
     * @var string 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvaluationPeriods;

    /**
     * @var string 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var string 策略类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyType;

    /**
     * @var TargetConfiguration 基于规则的配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetConfiguration;

    /**
     * @param string $FleetId 服务部署ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScalingAdjustment 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScalingAdjustmentType 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComparisonOperator 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Threshold 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EvaluationPeriods 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricName 保留参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyType 策略类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param TargetConfiguration $TargetConfiguration 基于规则的配置
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScalingAdjustment",$param) and $param["ScalingAdjustment"] !== null) {
            $this->ScalingAdjustment = $param["ScalingAdjustment"];
        }

        if (array_key_exists("ScalingAdjustmentType",$param) and $param["ScalingAdjustmentType"] !== null) {
            $this->ScalingAdjustmentType = $param["ScalingAdjustmentType"];
        }

        if (array_key_exists("ComparisonOperator",$param) and $param["ComparisonOperator"] !== null) {
            $this->ComparisonOperator = $param["ComparisonOperator"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
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
