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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批改结果按句点评的详细信息
 *
 * @method array getSuggestions() 获取句子错误纠正信息
 * @method void setSuggestions(array $Suggestions) 设置句子错误纠正信息
 * @method SentenceItem getSentence() 获取句子信息
 * @method void setSentence(SentenceItem $Sentence) 设置句子信息
 */
class SentenceCom extends AbstractModel
{
    /**
     * @var array 句子错误纠正信息
     */
    public $Suggestions;

    /**
     * @var SentenceItem 句子信息
     */
    public $Sentence;

    /**
     * @param array $Suggestions 句子错误纠正信息
     * @param SentenceItem $Sentence 句子信息
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
        if (array_key_exists("Suggestions",$param) and $param["Suggestions"] !== null) {
            $this->Suggestions = [];
            foreach ($param["Suggestions"] as $key => $value){
                $obj = new SentenceSuggest();
                $obj->deserialize($value);
                array_push($this->Suggestions, $obj);
            }
        }

        if (array_key_exists("Sentence",$param) and $param["Sentence"] !== null) {
            $this->Sentence = new SentenceItem();
            $this->Sentence->deserialize($param["Sentence"]);
        }
    }
}
