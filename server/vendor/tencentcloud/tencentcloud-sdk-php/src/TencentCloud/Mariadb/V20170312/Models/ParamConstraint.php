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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数约束
 *
 * @method string getType() 获取约束类型,如枚举enum，区间section
 * @method void setType(string $Type) 设置约束类型,如枚举enum，区间section
 * @method string getEnum() 获取约束类型为enum时的可选值列表
 * @method void setEnum(string $Enum) 设置约束类型为enum时的可选值列表
 * @method ConstraintRange getRange() 获取约束类型为section时的范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRange(ConstraintRange $Range) 设置约束类型为section时的范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getString() 获取约束类型为string时的可选值列表
 * @method void setString(string $String) 设置约束类型为string时的可选值列表
 */
class ParamConstraint extends AbstractModel
{
    /**
     * @var string 约束类型,如枚举enum，区间section
     */
    public $Type;

    /**
     * @var string 约束类型为enum时的可选值列表
     */
    public $Enum;

    /**
     * @var ConstraintRange 约束类型为section时的范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Range;

    /**
     * @var string 约束类型为string时的可选值列表
     */
    public $String;

    /**
     * @param string $Type 约束类型,如枚举enum，区间section
     * @param string $Enum 约束类型为enum时的可选值列表
     * @param ConstraintRange $Range 约束类型为section时的范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $String 约束类型为string时的可选值列表
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Enum",$param) and $param["Enum"] !== null) {
            $this->Enum = $param["Enum"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = new ConstraintRange();
            $this->Range->deserialize($param["Range"]);
        }

        if (array_key_exists("String",$param) and $param["String"] !== null) {
            $this->String = $param["String"];
        }
    }
}
