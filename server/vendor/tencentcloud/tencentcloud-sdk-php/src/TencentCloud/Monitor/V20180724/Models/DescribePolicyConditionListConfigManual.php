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
 * DescribePolicyConditionList.ConfigManual
 *
 * @method DescribePolicyConditionListConfigManualCalcType getCalcType() 获取检测方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcType(DescribePolicyConditionListConfigManualCalcType $CalcType) 设置检测方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyConditionListConfigManualCalcValue getCalcValue() 获取检测阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcValue(DescribePolicyConditionListConfigManualCalcValue $CalcValue) 设置检测阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyConditionListConfigManualContinueTime getContinueTime() 获取持续时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContinueTime(DescribePolicyConditionListConfigManualContinueTime $ContinueTime) 设置持续时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyConditionListConfigManualPeriod getPeriod() 获取数据周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriod(DescribePolicyConditionListConfigManualPeriod $Period) 设置数据周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyConditionListConfigManualPeriodNum getPeriodNum() 获取持续周期个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodNum(DescribePolicyConditionListConfigManualPeriodNum $PeriodNum) 设置持续周期个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyConditionListConfigManualStatType getStatType() 获取聚合方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatType(DescribePolicyConditionListConfigManualStatType $StatType) 设置聚合方式
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyConditionListConfigManual extends AbstractModel
{
    /**
     * @var DescribePolicyConditionListConfigManualCalcType 检测方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcType;

    /**
     * @var DescribePolicyConditionListConfigManualCalcValue 检测阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcValue;

    /**
     * @var DescribePolicyConditionListConfigManualContinueTime 持续时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContinueTime;

    /**
     * @var DescribePolicyConditionListConfigManualPeriod 数据周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Period;

    /**
     * @var DescribePolicyConditionListConfigManualPeriodNum 持续周期个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodNum;

    /**
     * @var DescribePolicyConditionListConfigManualStatType 聚合方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatType;

    /**
     * @param DescribePolicyConditionListConfigManualCalcType $CalcType 检测方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyConditionListConfigManualCalcValue $CalcValue 检测阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyConditionListConfigManualContinueTime $ContinueTime 持续时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyConditionListConfigManualPeriod $Period 数据周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyConditionListConfigManualPeriodNum $PeriodNum 持续周期个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyConditionListConfigManualStatType $StatType 聚合方式
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
        if (array_key_exists("CalcType",$param) and $param["CalcType"] !== null) {
            $this->CalcType = new DescribePolicyConditionListConfigManualCalcType();
            $this->CalcType->deserialize($param["CalcType"]);
        }

        if (array_key_exists("CalcValue",$param) and $param["CalcValue"] !== null) {
            $this->CalcValue = new DescribePolicyConditionListConfigManualCalcValue();
            $this->CalcValue->deserialize($param["CalcValue"]);
        }

        if (array_key_exists("ContinueTime",$param) and $param["ContinueTime"] !== null) {
            $this->ContinueTime = new DescribePolicyConditionListConfigManualContinueTime();
            $this->ContinueTime->deserialize($param["ContinueTime"]);
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = new DescribePolicyConditionListConfigManualPeriod();
            $this->Period->deserialize($param["Period"]);
        }

        if (array_key_exists("PeriodNum",$param) and $param["PeriodNum"] !== null) {
            $this->PeriodNum = new DescribePolicyConditionListConfigManualPeriodNum();
            $this->PeriodNum->deserialize($param["PeriodNum"]);
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = new DescribePolicyConditionListConfigManualStatType();
            $this->StatType->deserialize($param["StatType"]);
        }
    }
}
