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
 * DB参数描述
 *
 * @method string getParam() 获取参数名字
 * @method void setParam(string $Param) 设置参数名字
 * @method string getValue() 获取当前参数值
 * @method void setValue(string $Value) 设置当前参数值
 * @method string getSetValue() 获取设置过的值，参数生效后，该值和value一样。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetValue(string $SetValue) 设置设置过的值，参数生效后，该值和value一样。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefault() 获取系统默认值
 * @method void setDefault(string $Default) 设置系统默认值
 * @method ParamConstraint getConstraint() 获取参数限制
 * @method void setConstraint(ParamConstraint $Constraint) 设置参数限制
 * @method boolean getHaveSetValue() 获取是否有设置过值，false:没有设置过值，true:有设置过值。
 * @method void setHaveSetValue(boolean $HaveSetValue) 设置是否有设置过值，false:没有设置过值，true:有设置过值。
 */
class ParamDesc extends AbstractModel
{
    /**
     * @var string 参数名字
     */
    public $Param;

    /**
     * @var string 当前参数值
     */
    public $Value;

    /**
     * @var string 设置过的值，参数生效后，该值和value一样。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetValue;

    /**
     * @var string 系统默认值
     */
    public $Default;

    /**
     * @var ParamConstraint 参数限制
     */
    public $Constraint;

    /**
     * @var boolean 是否有设置过值，false:没有设置过值，true:有设置过值。
     */
    public $HaveSetValue;

    /**
     * @param string $Param 参数名字
     * @param string $Value 当前参数值
     * @param string $SetValue 设置过的值，参数生效后，该值和value一样。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Default 系统默认值
     * @param ParamConstraint $Constraint 参数限制
     * @param boolean $HaveSetValue 是否有设置过值，false:没有设置过值，true:有设置过值。
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
        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("SetValue",$param) and $param["SetValue"] !== null) {
            $this->SetValue = $param["SetValue"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Constraint",$param) and $param["Constraint"] !== null) {
            $this->Constraint = new ParamConstraint();
            $this->Constraint->deserialize($param["Constraint"]);
        }

        if (array_key_exists("HaveSetValue",$param) and $param["HaveSetValue"] !== null) {
            $this->HaveSetValue = $param["HaveSetValue"];
        }
    }
}
