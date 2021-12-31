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
 * 四个维度的得分
 *
 * @method Aspect getWords() 获取词汇维度
 * @method void setWords(Aspect $Words) 设置词汇维度
 * @method Aspect getSentences() 获取句子维度
 * @method void setSentences(Aspect $Sentences) 设置句子维度
 * @method Aspect getStructure() 获取篇章结构维度
 * @method void setStructure(Aspect $Structure) 设置篇章结构维度
 * @method Aspect getContent() 获取内容维度
 * @method void setContent(Aspect $Content) 设置内容维度
 * @method float getScore() 获取维度得分
 * @method void setScore(float $Score) 设置维度得分
 * @method float getPercentage() 获取维度分数占比
 * @method void setPercentage(float $Percentage) 设置维度分数占比
 */
class ScoreCategory extends AbstractModel
{
    /**
     * @var Aspect 词汇维度
     */
    public $Words;

    /**
     * @var Aspect 句子维度
     */
    public $Sentences;

    /**
     * @var Aspect 篇章结构维度
     */
    public $Structure;

    /**
     * @var Aspect 内容维度
     */
    public $Content;

    /**
     * @var float 维度得分
     */
    public $Score;

    /**
     * @var float 维度分数占比
     */
    public $Percentage;

    /**
     * @param Aspect $Words 词汇维度
     * @param Aspect $Sentences 句子维度
     * @param Aspect $Structure 篇章结构维度
     * @param Aspect $Content 内容维度
     * @param float $Score 维度得分
     * @param float $Percentage 维度分数占比
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
        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = new Aspect();
            $this->Words->deserialize($param["Words"]);
        }

        if (array_key_exists("Sentences",$param) and $param["Sentences"] !== null) {
            $this->Sentences = new Aspect();
            $this->Sentences->deserialize($param["Sentences"]);
        }

        if (array_key_exists("Structure",$param) and $param["Structure"] !== null) {
            $this->Structure = new Aspect();
            $this->Structure->deserialize($param["Structure"]);
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new Aspect();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }
    }
}
