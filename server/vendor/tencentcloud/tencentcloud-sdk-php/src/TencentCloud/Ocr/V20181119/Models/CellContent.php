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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单元格识别结果
 *
 * @method integer getParagNo() 获取段落编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParagNo(integer $ParagNo) 设置段落编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWordSize() 获取字体大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWordSize(integer $WordSize) 设置字体大小
注意：此字段可能返回 null，表示取不到有效值。
 */
class CellContent extends AbstractModel
{
    /**
     * @var integer 段落编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParagNo;

    /**
     * @var integer 字体大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WordSize;

    /**
     * @param integer $ParagNo 段落编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WordSize 字体大小
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
        if (array_key_exists("ParagNo",$param) and $param["ParagNo"] !== null) {
            $this->ParagNo = $param["ParagNo"];
        }

        if (array_key_exists("WordSize",$param) and $param["WordSize"] !== null) {
            $this->WordSize = $param["WordSize"];
        }
    }
}
