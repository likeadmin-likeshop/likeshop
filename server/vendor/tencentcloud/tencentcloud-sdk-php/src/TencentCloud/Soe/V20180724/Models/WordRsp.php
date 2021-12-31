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
namespace TencentCloud\Soe\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单词评分细则
 *
 * @method integer getMemBeginTime() 获取当前单词语音起始时间点，单位为ms，该字段段落模式下无意义。
 * @method void setMemBeginTime(integer $MemBeginTime) 设置当前单词语音起始时间点，单位为ms，该字段段落模式下无意义。
 * @method integer getMemEndTime() 获取当前单词语音终止时间点，单位为ms，该字段段落模式下无意义。
 * @method void setMemEndTime(integer $MemEndTime) 设置当前单词语音终止时间点，单位为ms，该字段段落模式下无意义。
 * @method float getPronAccuracy() 获取单词发音准确度，取值范围[-1, 100]，当取-1时指完全不匹配
 * @method void setPronAccuracy(float $PronAccuracy) 设置单词发音准确度，取值范围[-1, 100]，当取-1时指完全不匹配
 * @method float getPronFluency() 获取单词发音流利度，取值范围[0, 1]
 * @method void setPronFluency(float $PronFluency) 设置单词发音流利度，取值范围[0, 1]
 * @method string getWord() 获取当前词
 * @method void setWord(string $Word) 设置当前词
 * @method integer getMatchTag() 获取当前词与输入语句的匹配情况，0：匹配单词、1：新增单词、2：缺少单词、3：错读的词、4：未录入单词。
 * @method void setMatchTag(integer $MatchTag) 设置当前词与输入语句的匹配情况，0：匹配单词、1：新增单词、2：缺少单词、3：错读的词、4：未录入单词。
 * @method array getPhoneInfos() 获取音节评估详情
 * @method void setPhoneInfos(array $PhoneInfos) 设置音节评估详情
 * @method string getReferenceWord() 获取参考词，目前为保留字段。
 * @method void setReferenceWord(string $ReferenceWord) 设置参考词，目前为保留字段。
 */
class WordRsp extends AbstractModel
{
    /**
     * @var integer 当前单词语音起始时间点，单位为ms，该字段段落模式下无意义。
     */
    public $MemBeginTime;

    /**
     * @var integer 当前单词语音终止时间点，单位为ms，该字段段落模式下无意义。
     */
    public $MemEndTime;

    /**
     * @var float 单词发音准确度，取值范围[-1, 100]，当取-1时指完全不匹配
     */
    public $PronAccuracy;

    /**
     * @var float 单词发音流利度，取值范围[0, 1]
     */
    public $PronFluency;

    /**
     * @var string 当前词
     */
    public $Word;

    /**
     * @var integer 当前词与输入语句的匹配情况，0：匹配单词、1：新增单词、2：缺少单词、3：错读的词、4：未录入单词。
     */
    public $MatchTag;

    /**
     * @var array 音节评估详情
     */
    public $PhoneInfos;

    /**
     * @var string 参考词，目前为保留字段。
     */
    public $ReferenceWord;

    /**
     * @param integer $MemBeginTime 当前单词语音起始时间点，单位为ms，该字段段落模式下无意义。
     * @param integer $MemEndTime 当前单词语音终止时间点，单位为ms，该字段段落模式下无意义。
     * @param float $PronAccuracy 单词发音准确度，取值范围[-1, 100]，当取-1时指完全不匹配
     * @param float $PronFluency 单词发音流利度，取值范围[0, 1]
     * @param string $Word 当前词
     * @param integer $MatchTag 当前词与输入语句的匹配情况，0：匹配单词、1：新增单词、2：缺少单词、3：错读的词、4：未录入单词。
     * @param array $PhoneInfos 音节评估详情
     * @param string $ReferenceWord 参考词，目前为保留字段。
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
        if (array_key_exists("MemBeginTime",$param) and $param["MemBeginTime"] !== null) {
            $this->MemBeginTime = $param["MemBeginTime"];
        }

        if (array_key_exists("MemEndTime",$param) and $param["MemEndTime"] !== null) {
            $this->MemEndTime = $param["MemEndTime"];
        }

        if (array_key_exists("PronAccuracy",$param) and $param["PronAccuracy"] !== null) {
            $this->PronAccuracy = $param["PronAccuracy"];
        }

        if (array_key_exists("PronFluency",$param) and $param["PronFluency"] !== null) {
            $this->PronFluency = $param["PronFluency"];
        }

        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("MatchTag",$param) and $param["MatchTag"] !== null) {
            $this->MatchTag = $param["MatchTag"];
        }

        if (array_key_exists("PhoneInfos",$param) and $param["PhoneInfos"] !== null) {
            $this->PhoneInfos = [];
            foreach ($param["PhoneInfos"] as $key => $value){
                $obj = new PhoneInfo();
                $obj->deserialize($value);
                array_push($this->PhoneInfos, $obj);
            }
        }

        if (array_key_exists("ReferenceWord",$param) and $param["ReferenceWord"] !== null) {
            $this->ReferenceWord = $param["ReferenceWord"];
        }
    }
}
