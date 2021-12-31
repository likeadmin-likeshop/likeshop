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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备属性
 *
 * @method string getTag() 获取属性名称
 * @method void setTag(string $Tag) 设置属性名称
 * @method integer getType() 获取属性值的类型，1 int，2 string
 * @method void setType(integer $Type) 设置属性值的类型，1 int，2 string
 * @method string getValue() 获取属性的值
 * @method void setValue(string $Value) 设置属性的值
 * @method string getName() 获取属性描述名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置属性描述名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceTag extends AbstractModel
{
    /**
     * @var string 属性名称
     */
    public $Tag;

    /**
     * @var integer 属性值的类型，1 int，2 string
     */
    public $Type;

    /**
     * @var string 属性的值
     */
    public $Value;

    /**
     * @var string 属性描述名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param string $Tag 属性名称
     * @param integer $Type 属性值的类型，1 int，2 string
     * @param string $Value 属性的值
     * @param string $Name 属性描述名称
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
