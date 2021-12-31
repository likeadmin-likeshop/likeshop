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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播 AI Ocr 单词识别结果
 *
 * @method string getWord() 获取文本关键词。
 * @method void setWord(string $Word) 设置文本关键词。
 * @method float getStartPtsTime() 获取识别片段起始的 PTS 时间，单位：秒。
 * @method void setStartPtsTime(float $StartPtsTime) 设置识别片段起始的 PTS 时间，单位：秒。
 * @method float getEndPtsTime() 获取识别片段终止的 PTS 时间，单位：秒。
 * @method void setEndPtsTime(float $EndPtsTime) 设置识别片段终止的 PTS 时间，单位：秒。
 * @method float getConfidence() 获取识别片段置信度。取值：0~100。
 * @method void setConfidence(float $Confidence) 设置识别片段置信度。取值：0~100。
 * @method array getAreaCoords() 获取识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
 * @method void setAreaCoords(array $AreaCoords) 设置识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
 */
class LiveStreamOcrWordsRecognitionResult extends AbstractModel
{
    /**
     * @var string 文本关键词。
     */
    public $Word;

    /**
     * @var float 识别片段起始的 PTS 时间，单位：秒。
     */
    public $StartPtsTime;

    /**
     * @var float 识别片段终止的 PTS 时间，单位：秒。
     */
    public $EndPtsTime;

    /**
     * @var float 识别片段置信度。取值：0~100。
     */
    public $Confidence;

    /**
     * @var array 识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
     */
    public $AreaCoords;

    /**
     * @param string $Word 文本关键词。
     * @param float $StartPtsTime 识别片段起始的 PTS 时间，单位：秒。
     * @param float $EndPtsTime 识别片段终止的 PTS 时间，单位：秒。
     * @param float $Confidence 识别片段置信度。取值：0~100。
     * @param array $AreaCoords 识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
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

        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("AreaCoords",$param) and $param["AreaCoords"] !== null) {
            $this->AreaCoords = $param["AreaCoords"];
        }
    }
}
