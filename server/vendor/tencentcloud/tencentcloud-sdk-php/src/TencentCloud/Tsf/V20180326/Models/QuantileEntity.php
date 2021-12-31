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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分位数据模型
 *
 * @method string getMaxValue() 获取最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxValue(string $MaxValue) 设置最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinValue() 获取最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinValue(string $MinValue) 设置最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFifthPositionValue() 获取五分位值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFifthPositionValue(string $FifthPositionValue) 设置五分位值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNinthPositionValue() 获取九分位值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNinthPositionValue(string $NinthPositionValue) 设置九分位值
注意：此字段可能返回 null，表示取不到有效值。
 */
class QuantileEntity extends AbstractModel
{
    /**
     * @var string 最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxValue;

    /**
     * @var string 最小值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinValue;

    /**
     * @var string 五分位值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FifthPositionValue;

    /**
     * @var string 九分位值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NinthPositionValue;

    /**
     * @param string $MaxValue 最大值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinValue 最小值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FifthPositionValue 五分位值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NinthPositionValue 九分位值
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
        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("MinValue",$param) and $param["MinValue"] !== null) {
            $this->MinValue = $param["MinValue"];
        }

        if (array_key_exists("FifthPositionValue",$param) and $param["FifthPositionValue"] !== null) {
            $this->FifthPositionValue = $param["FifthPositionValue"];
        }

        if (array_key_exists("NinthPositionValue",$param) and $param["NinthPositionValue"] !== null) {
            $this->NinthPositionValue = $param["NinthPositionValue"];
        }
    }
}
