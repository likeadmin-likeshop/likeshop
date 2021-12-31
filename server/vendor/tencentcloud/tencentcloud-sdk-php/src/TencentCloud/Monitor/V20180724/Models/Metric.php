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
 * 指标，可用于设置告警、查询数据
 *
 * @method string getNamespace() 获取告警策略类型
 * @method void setNamespace(string $Namespace) 设置告警策略类型
 * @method string getMetricName() 获取指标名
 * @method void setMetricName(string $MetricName) 设置指标名
 * @method string getDescription() 获取指标展示名
 * @method void setDescription(string $Description) 设置指标展示名
 * @method float getMin() 获取最小值
 * @method void setMin(float $Min) 设置最小值
 * @method float getMax() 获取最大值
 * @method void setMax(float $Max) 设置最大值
 * @method array getDimensions() 获取维度列表
 * @method void setDimensions(array $Dimensions) 设置维度列表
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method MetricConfig getMetricConfig() 获取指标配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricConfig(MetricConfig $MetricConfig) 设置指标配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class Metric extends AbstractModel
{
    /**
     * @var string 告警策略类型
     */
    public $Namespace;

    /**
     * @var string 指标名
     */
    public $MetricName;

    /**
     * @var string 指标展示名
     */
    public $Description;

    /**
     * @var float 最小值
     */
    public $Min;

    /**
     * @var float 最大值
     */
    public $Max;

    /**
     * @var array 维度列表
     */
    public $Dimensions;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @var MetricConfig 指标配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricConfig;

    /**
     * @param string $Namespace 告警策略类型
     * @param string $MetricName 指标名
     * @param string $Description 指标展示名
     * @param float $Min 最小值
     * @param float $Max 最大值
     * @param array $Dimensions 维度列表
     * @param string $Unit 单位
     * @param MetricConfig $MetricConfig 指标配置
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("MetricConfig",$param) and $param["MetricConfig"] !== null) {
            $this->MetricConfig = new MetricConfig();
            $this->MetricConfig->deserialize($param["MetricConfig"]);
        }
    }
}
