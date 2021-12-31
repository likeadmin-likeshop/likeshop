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
 * 词条搜索的结果，主要描述该词条是否存在以及相关的词性。
 *
 * @method string getText() 获取被搜索的词条文本。
 * @method void setText(string $Text) 设置被搜索的词条文本。
 * @method integer getIsExist() 获取0表示词条不存在，1表示存在。
 * @method void setIsExist(integer $IsExist) 设置0表示词条不存在，1表示存在。
 * @method string getMatchText() 获取匹配到的词条文本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchText(string $MatchText) 设置匹配到的词条文本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPos() 获取词条的词性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPos(string $Pos) 设置词条的词性。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchResult extends AbstractModel
{
    /**
     * @var string 被搜索的词条文本。
     */
    public $Text;

    /**
     * @var integer 0表示词条不存在，1表示存在。
     */
    public $IsExist;

    /**
     * @var string 匹配到的词条文本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchText;

    /**
     * @var string 词条的词性。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pos;

    /**
     * @param string $Text 被搜索的词条文本。
     * @param integer $IsExist 0表示词条不存在，1表示存在。
     * @param string $MatchText 匹配到的词条文本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Pos 词条的词性。
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("IsExist",$param) and $param["IsExist"] !== null) {
            $this->IsExist = $param["IsExist"];
        }

        if (array_key_exists("MatchText",$param) and $param["MatchText"] !== null) {
            $this->MatchText = $param["MatchText"];
        }

        if (array_key_exists("Pos",$param) and $param["Pos"] !== null) {
            $this->Pos = $param["Pos"];
        }
    }
}
