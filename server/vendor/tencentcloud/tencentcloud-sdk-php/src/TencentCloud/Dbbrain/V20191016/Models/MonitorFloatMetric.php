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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控数据（浮点型）
 *
 * @method string getMetric() 获取指标名称。
 * @method void setMetric(string $Metric) 设置指标名称。
 * @method string getUnit() 获取指标单位。
 * @method void setUnit(string $Unit) 设置指标单位。
 * @method array getValues() 获取指标值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置指标值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MonitorFloatMetric extends AbstractModel
{
    /**
     * @var string 指标名称。
     */
    public $Metric;

    /**
     * @var string 指标单位。
     */
    public $Unit;

    /**
     * @var array 指标值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param string $Metric 指标名称。
     * @param string $Unit 指标单位。
     * @param array $Values 指标值。
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
