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
 * 词条信息。
 *
 * @method string getText() 获取词条文本内容。
 * @method void setText(string $Text) 设置词条文本内容。
 * @method string getCreateTime() 获取词条创建时间。
 * @method void setCreateTime(string $CreateTime) 设置词条创建时间。
 * @method string getPos() 获取词条的词性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPos(string $Pos) 设置词条的词性。
注意：此字段可能返回 null，表示取不到有效值。
 */
class WordItem extends AbstractModel
{
    /**
     * @var string 词条文本内容。
     */
    public $Text;

    /**
     * @var string 词条创建时间。
     */
    public $CreateTime;

    /**
     * @var string 词条的词性。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pos;

    /**
     * @param string $Text 词条文本内容。
     * @param string $CreateTime 词条创建时间。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Pos",$param) and $param["Pos"] !== null) {
            $this->Pos = $param["Pos"];
        }
    }
}
