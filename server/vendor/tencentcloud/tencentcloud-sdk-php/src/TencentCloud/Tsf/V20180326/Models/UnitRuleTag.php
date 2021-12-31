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
 * 微服务网关单元化规则标签
 *
 * @method string getTagType() 获取标签类型 : U(用户标签)
 * @method void setTagType(string $TagType) 设置标签类型 : U(用户标签)
 * @method string getTagField() 获取标签名
 * @method void setTagField(string $TagField) 设置标签名
 * @method string getTagOperator() 获取操作符:IN/NOT_IN/EQUAL/NOT_EQUAL/REGEX
 * @method void setTagOperator(string $TagOperator) 设置操作符:IN/NOT_IN/EQUAL/NOT_EQUAL/REGEX
 * @method string getTagValue() 获取标签值
 * @method void setTagValue(string $TagValue) 设置标签值
 * @method string getUnitRuleItemId() 获取单元化规则项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitRuleItemId(string $UnitRuleItemId) 设置单元化规则项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class UnitRuleTag extends AbstractModel
{
    /**
     * @var string 标签类型 : U(用户标签)
     */
    public $TagType;

    /**
     * @var string 标签名
     */
    public $TagField;

    /**
     * @var string 操作符:IN/NOT_IN/EQUAL/NOT_EQUAL/REGEX
     */
    public $TagOperator;

    /**
     * @var string 标签值
     */
    public $TagValue;

    /**
     * @var string 单元化规则项ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitRuleItemId;

    /**
     * @var string 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param string $TagType 标签类型 : U(用户标签)
     * @param string $TagField 标签名
     * @param string $TagOperator 操作符:IN/NOT_IN/EQUAL/NOT_EQUAL/REGEX
     * @param string $TagValue 标签值
     * @param string $UnitRuleItemId 单元化规则项ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 规则ID
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
        if (array_key_exists("TagType",$param) and $param["TagType"] !== null) {
            $this->TagType = $param["TagType"];
        }

        if (array_key_exists("TagField",$param) and $param["TagField"] !== null) {
            $this->TagField = $param["TagField"];
        }

        if (array_key_exists("TagOperator",$param) and $param["TagOperator"] !== null) {
            $this->TagOperator = $param["TagOperator"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("UnitRuleItemId",$param) and $param["UnitRuleItemId"] !== null) {
            $this->UnitRuleItemId = $param["UnitRuleItemId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
