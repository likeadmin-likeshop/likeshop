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
 * 属性字段
 *
 * @method string getName() 获取属性名称
 * @method void setName(string $Name) 设置属性名称
 * @method string getType() 获取属性类型
 * @method void setType(string $Type) 设置属性类型
 * @method string getDescription() 获取属性描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置属性描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class PropertyField extends AbstractModel
{
    /**
     * @var string 属性名称
     */
    public $Name;

    /**
     * @var string 属性类型
     */
    public $Type;

    /**
     * @var string 属性描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $Name 属性名称
     * @param string $Type 属性类型
     * @param string $Description 属性描述
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
