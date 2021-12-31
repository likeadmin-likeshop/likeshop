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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 识别结果中词文本，以及对应时间偏移
 *
 * @method string getWord() 获取词文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWord(string $Word) 设置词文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffsetStartMs() 获取在句子中的开始时间偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetStartMs(integer $OffsetStartMs) 设置在句子中的开始时间偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffsetEndMs() 获取在句子中的结束时间偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetEndMs(integer $OffsetEndMs) 设置在句子中的结束时间偏移量
注意：此字段可能返回 null，表示取不到有效值。
 */
class SentenceWords extends AbstractModel
{
    /**
     * @var string 词文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Word;

    /**
     * @var integer 在句子中的开始时间偏移量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffsetStartMs;

    /**
     * @var integer 在句子中的结束时间偏移量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffsetEndMs;

    /**
     * @param string $Word 词文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OffsetStartMs 在句子中的开始时间偏移量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OffsetEndMs 在句子中的结束时间偏移量
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
        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("OffsetStartMs",$param) and $param["OffsetStartMs"] !== null) {
            $this->OffsetStartMs = $param["OffsetStartMs"];
        }

        if (array_key_exists("OffsetEndMs",$param) and $param["OffsetEndMs"] !== null) {
            $this->OffsetEndMs = $param["OffsetEndMs"];
        }
    }
}
