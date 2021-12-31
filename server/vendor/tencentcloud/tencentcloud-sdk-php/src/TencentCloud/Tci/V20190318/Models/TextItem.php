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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前句子的信息
 *
 * @method array getWords() 获取当前句子包含的所有单词信息
 * @method void setWords(array $Words) 设置当前句子包含的所有单词信息
 * @method float getConfidence() 获取当前句子的置信度
 * @method void setConfidence(float $Confidence) 设置当前句子的置信度
 * @method integer getMbtm() 获取当前句子语音的起始时间点，单位为ms
 * @method void setMbtm(integer $Mbtm) 设置当前句子语音的起始时间点，单位为ms
 * @method integer getMetm() 获取当前句子语音的终止时间点，单位为ms
 * @method void setMetm(integer $Metm) 设置当前句子语音的终止时间点，单位为ms
 * @method integer getTag() 获取保留参数，暂无意义
 * @method void setTag(integer $Tag) 设置保留参数，暂无意义
 * @method string getText() 获取当前句子
 * @method void setText(string $Text) 设置当前句子
 * @method integer getTextSize() 获取当前句子的字节数
 * @method void setTextSize(integer $TextSize) 设置当前句子的字节数
 */
class TextItem extends AbstractModel
{
    /**
     * @var array 当前句子包含的所有单词信息
     */
    public $Words;

    /**
     * @var float 当前句子的置信度
     */
    public $Confidence;

    /**
     * @var integer 当前句子语音的起始时间点，单位为ms
     */
    public $Mbtm;

    /**
     * @var integer 当前句子语音的终止时间点，单位为ms
     */
    public $Metm;

    /**
     * @var integer 保留参数，暂无意义
     */
    public $Tag;

    /**
     * @var string 当前句子
     */
    public $Text;

    /**
     * @var integer 当前句子的字节数
     */
    public $TextSize;

    /**
     * @param array $Words 当前句子包含的所有单词信息
     * @param float $Confidence 当前句子的置信度
     * @param integer $Mbtm 当前句子语音的起始时间点，单位为ms
     * @param integer $Metm 当前句子语音的终止时间点，单位为ms
     * @param integer $Tag 保留参数，暂无意义
     * @param string $Text 当前句子
     * @param integer $TextSize 当前句子的字节数
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
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new Word();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Mbtm",$param) and $param["Mbtm"] !== null) {
            $this->Mbtm = $param["Mbtm"];
        }

        if (array_key_exists("Metm",$param) and $param["Metm"] !== null) {
            $this->Metm = $param["Metm"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("TextSize",$param) and $param["TextSize"] !== null) {
            $this->TextSize = $param["TextSize"];
        }
    }
}
