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
 * DescribePolicyConditionList.ConfigManual.CalcValue
 *
 * @method string getDefault() 获取默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefault(string $Default) 设置默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFixed() 获取固定值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixed(string $Fixed) 设置固定值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMax() 获取最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMax(string $Max) 设置最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMin() 获取最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMin(string $Min) 设置最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNeed() 获取是否必须
 * @method void setNeed(boolean $Need) 设置是否必须
 */
class DescribePolicyConditionListConfigManualCalcValue extends AbstractModel
{
    /**
     * @var string 默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Default;

    /**
     * @var string 固定值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fixed;

    /**
     * @var string 最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Max;

    /**
     * @var string 最小值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Min;

    /**
     * @var boolean 是否必须
     */
    public $Need;

    /**
     * @param string $Default 默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fixed 固定值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Max 最大值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Min 最小值
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Need 是否必须
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
        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Fixed",$param) and $param["Fixed"] !== null) {
            $this->Fixed = $param["Fixed"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Need",$param) and $param["Need"] !== null) {
            $this->Need = $param["Need"];
        }
    }
}
