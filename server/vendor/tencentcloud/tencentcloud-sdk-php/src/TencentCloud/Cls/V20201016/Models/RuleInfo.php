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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引规则，FullText、KeyValue、Tag参数必须输入一个有效参数
 *
 * @method FullTextInfo getFullText() 获取全文索引配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullText(FullTextInfo $FullText) 设置全文索引配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleKeyValueInfo getKeyValue() 获取键值索引配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyValue(RuleKeyValueInfo $KeyValue) 设置键值索引配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleTagInfo getTag() 获取元字段索引配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(RuleTagInfo $Tag) 设置元字段索引配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleInfo extends AbstractModel
{
    /**
     * @var FullTextInfo 全文索引配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullText;

    /**
     * @var RuleKeyValueInfo 键值索引配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyValue;

    /**
     * @var RuleTagInfo 元字段索引配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @param FullTextInfo $FullText 全文索引配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleKeyValueInfo $KeyValue 键值索引配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleTagInfo $Tag 元字段索引配置
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
        if (array_key_exists("FullText",$param) and $param["FullText"] !== null) {
            $this->FullText = new FullTextInfo();
            $this->FullText->deserialize($param["FullText"]);
        }

        if (array_key_exists("KeyValue",$param) and $param["KeyValue"] !== null) {
            $this->KeyValue = new RuleKeyValueInfo();
            $this->KeyValue->deserialize($param["KeyValue"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new RuleTagInfo();
            $this->Tag->deserialize($param["Tag"]);
        }
    }
}
