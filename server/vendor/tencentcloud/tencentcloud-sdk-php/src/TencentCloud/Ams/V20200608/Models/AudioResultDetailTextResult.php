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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频ASR文本审核结果
 *
 * @method string getLabel() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeywords() 获取命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeywords(array $Keywords) 设置命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLibId() 获取命中的LibId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibId(string $LibId) 设置命中的LibId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLibName() 获取命中的LibName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibName(string $LibName) 设置命中的LibName
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取审核建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置审核建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLibType() 获取词库类型 1 黑白库 2 自定义库
 * @method void setLibType(integer $LibType) 设置词库类型 1 黑白库 2 自定义库
 */
class AudioResultDetailTextResult extends AbstractModel
{
    /**
     * @var string 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var array 命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keywords;

    /**
     * @var string 命中的LibId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibId;

    /**
     * @var string 命中的LibName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibName;

    /**
     * @var integer 得分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var string 审核建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var integer 词库类型 1 黑白库 2 自定义库
     */
    public $LibType;

    /**
     * @param string $Label 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Keywords 命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LibId 命中的LibId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LibName 命中的LibName
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 得分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 审核建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LibType 词库类型 1 黑白库 2 自定义库
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("LibType",$param) and $param["LibType"] !== null) {
            $this->LibType = $param["LibType"];
        }
    }
}
