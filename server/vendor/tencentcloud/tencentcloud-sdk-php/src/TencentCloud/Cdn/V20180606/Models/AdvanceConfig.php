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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高级配置集合
 *
 * @method string getName() 获取高级配置名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置高级配置名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取是否支持高级配置，
on：支持
off：不支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置是否支持高级配置，
on：支持
off：不支持
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdvanceConfig extends AbstractModel
{
    /**
     * @var string 高级配置名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 是否支持高级配置，
on：支持
off：不支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Name 高级配置名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 是否支持高级配置，
on：支持
off：不支持
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
