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
 * KeywordsExtraction请求参数结构体
 *
 * @method string getText() 获取待处理的文本（仅支持UTF-8格式，不超过10000字）
 * @method void setText(string $Text) 设置待处理的文本（仅支持UTF-8格式，不超过10000字）
 * @method integer getNum() 获取指定关键词个数上限（默认值为5）
 * @method void setNum(integer $Num) 设置指定关键词个数上限（默认值为5）
 */
class KeywordsExtractionRequest extends AbstractModel
{
    /**
     * @var string 待处理的文本（仅支持UTF-8格式，不超过10000字）
     */
    public $Text;

    /**
     * @var integer 指定关键词个数上限（默认值为5）
     */
    public $Num;

    /**
     * @param string $Text 待处理的文本（仅支持UTF-8格式，不超过10000字）
     * @param integer $Num 指定关键词个数上限（默认值为5）
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

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
