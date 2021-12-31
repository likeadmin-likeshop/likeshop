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
 * 文本纠错结果
 *
 * @method string getWord() 获取错别字内容
 * @method void setWord(string $Word) 设置错别字内容
 * @method integer getBeginOffset() 获取错别字的起始位置，从0开始
 * @method void setBeginOffset(integer $BeginOffset) 设置错别字的起始位置，从0开始
 * @method string getCorrectWord() 获取错别字纠错结果
 * @method void setCorrectWord(string $CorrectWord) 设置错别字纠错结果
 */
class CCIToken extends AbstractModel
{
    /**
     * @var string 错别字内容
     */
    public $Word;

    /**
     * @var integer 错别字的起始位置，从0开始
     */
    public $BeginOffset;

    /**
     * @var string 错别字纠错结果
     */
    public $CorrectWord;

    /**
     * @param string $Word 错别字内容
     * @param integer $BeginOffset 错别字的起始位置，从0开始
     * @param string $CorrectWord 错别字纠错结果
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

        if (array_key_exists("BeginOffset",$param) and $param["BeginOffset"] !== null) {
            $this->BeginOffset = $param["BeginOffset"];
        }

        if (array_key_exists("CorrectWord",$param) and $param["CorrectWord"] !== null) {
            $this->CorrectWord = $param["CorrectWord"];
        }
    }
}
