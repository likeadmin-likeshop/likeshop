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
 * 诊断报告单元信息
 *
 * @method string getKey() 获取内容单元英文名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置内容单元英文名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyText() 获取内容单元中文名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyText(string $KeyText) 设置内容单元中文名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取报告内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置报告内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueText() 获取报告内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueText(string $ValueText) 设置报告内容。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiagnoseUnit extends AbstractModel
{
    /**
     * @var string 内容单元英文名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 内容单元中文名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyText;

    /**
     * @var string 报告内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 报告内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueText;

    /**
     * @param string $Key 内容单元英文名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyText 内容单元中文名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 报告内容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueText 报告内容。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("KeyText",$param) and $param["KeyText"] !== null) {
            $this->KeyText = $param["KeyText"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueText",$param) and $param["ValueText"] !== null) {
            $this->ValueText = $param["ValueText"];
        }
    }
}
