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
 * 指标告警配置
 *
 * @method DescribePolicyConditionListConfigManual getConfigManual() 获取指标配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigManual(DescribePolicyConditionListConfigManual $ConfigManual) 设置指标配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMetricId() 获取指标id
 * @method void setMetricId(integer $MetricId) 设置指标id
 * @method string getMetricShowName() 获取指标名称
 * @method void setMetricShowName(string $MetricShowName) 设置指标名称
 * @method string getMetricUnit() 获取指标单位
 * @method void setMetricUnit(string $MetricUnit) 设置指标单位
 */
class DescribePolicyConditionListMetric extends AbstractModel
{
    /**
     * @var DescribePolicyConditionListConfigManual 指标配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigManual;

    /**
     * @var integer 指标id
     */
    public $MetricId;

    /**
     * @var string 指标名称
     */
    public $MetricShowName;

    /**
     * @var string 指标单位
     */
    public $MetricUnit;

    /**
     * @param DescribePolicyConditionListConfigManual $ConfigManual 指标配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MetricId 指标id
     * @param string $MetricShowName 指标名称
     * @param string $MetricUnit 指标单位
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
        if (array_key_exists("ConfigManual",$param) and $param["ConfigManual"] !== null) {
            $this->ConfigManual = new DescribePolicyConditionListConfigManual();
            $this->ConfigManual->deserialize($param["ConfigManual"]);
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("MetricShowName",$param) and $param["MetricShowName"] !== null) {
            $this->MetricShowName = $param["MetricShowName"];
        }

        if (array_key_exists("MetricUnit",$param) and $param["MetricUnit"] !== null) {
            $this->MetricUnit = $param["MetricUnit"];
        }
    }
}
