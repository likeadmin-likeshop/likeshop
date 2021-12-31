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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 句法依存分析结果，包括基础词，基础词的序号，当前词父节点的序号，句法依存关系的类型
 *
 * @method string getRelation() 获取句法依存关系的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelation(string $Relation) 设置句法依存关系的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeadId() 获取当前词父节点的序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadId(integer $HeadId) 设置当前词父节点的序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWord() 获取基础词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWord(string $Word) 设置基础词
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取基础词的序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置基础词的序号
注意：此字段可能返回 null，表示取不到有效值。
 */
class DpToken extends AbstractModel
{
    /**
     * @var string 句法依存关系的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Relation;

    /**
     * @var integer 当前词父节点的序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadId;

    /**
     * @var string 基础词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Word;

    /**
     * @var integer 基础词的序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param string $Relation 句法依存关系的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HeadId 当前词父节点的序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Word 基础词
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 基础词的序号
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
        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }

        if (array_key_exists("HeadId",$param) and $param["HeadId"] !== null) {
            $this->HeadId = $param["HeadId"];
        }

        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
