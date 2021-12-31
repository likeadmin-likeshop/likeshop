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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本类型
 *
 * @method integer getId() 获取类别Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置类别Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取类别层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置类别层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取类别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置类别名
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextType extends AbstractModel
{
    /**
     * @var integer 类别Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 类别层级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 类别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param integer $Id 类别Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 类别层级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 类别名
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
