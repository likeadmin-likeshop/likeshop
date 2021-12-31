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
 * 直播流 AI 识别结果
 *
 * @method string getType() 获取结果的类型，取值范围：
<li>FaceRecognition：人脸识别，</li>
<li>AsrWordsRecognition：语音关键词识别，</li>
<li>OcrWordsRecognition：文本关键词识别，</li>
<li>AsrFullTextRecognition：语音全文识别，</li>
<li>OcrFullTextRecognition：文本全文识别。</li>
 * @method void setType(string $Type) 设置结果的类型，取值范围：
<li>FaceRecognition：人脸识别，</li>
<li>AsrWordsRecognition：语音关键词识别，</li>
<li>OcrWordsRecognition：文本关键词识别，</li>
<li>AsrFullTextRecognition：语音全文识别，</li>
<li>OcrFullTextRecognition：文本全文识别。</li>
 * @method array getFaceRecognitionResultSet() 获取人脸识别结果，当 Type 为
FaceRecognition 时有效。
 * @method void setFaceRecognitionResultSet(array $FaceRecognitionResultSet) 设置人脸识别结果，当 Type 为
FaceRecognition 时有效。
 * @method array getAsrWordsRecognitionResultSet() 获取语音关键词识别结果，当 Type 为
AsrWordsRecognition 时有效。
 * @method void setAsrWordsRecognitionResultSet(array $AsrWordsRecognitionResultSet) 设置语音关键词识别结果，当 Type 为
AsrWordsRecognition 时有效。
 * @method array getOcrWordsRecognitionResultSet() 获取文本关键词识别结果，当 Type 为
OcrWordsRecognition 时有效。
 * @method void setOcrWordsRecognitionResultSet(array $OcrWordsRecognitionResultSet) 设置文本关键词识别结果，当 Type 为
OcrWordsRecognition 时有效。
 * @method array getAsrFullTextRecognitionResultSet() 获取语音全文识别结果，当 Type 为
AsrFullTextRecognition 时有效。
 * @method void setAsrFullTextRecognitionResultSet(array $AsrFullTextRecognitionResultSet) 设置语音全文识别结果，当 Type 为
AsrFullTextRecognition 时有效。
 * @method array getOcrFullTextRecognitionResultSet() 获取文本全文识别结果，当 Type 为
OcrFullTextRecognition 时有效。
 * @method void setOcrFullTextRecognitionResultSet(array $OcrFullTextRecognitionResultSet) 设置文本全文识别结果，当 Type 为
OcrFullTextRecognition 时有效。
 */
class LiveStreamAiRecognitionResultItem extends AbstractModel
{
    /**
     * @var string 结果的类型，取值范围：
<li>FaceRecognition：人脸识别，</li>
<li>AsrWordsRecognition：语音关键词识别，</li>
<li>OcrWordsRecognition：文本关键词识别，</li>
<li>AsrFullTextRecognition：语音全文识别，</li>
<li>OcrFullTextRecognition：文本全文识别。</li>
     */
    public $Type;

    /**
     * @var array 人脸识别结果，当 Type 为
FaceRecognition 时有效。
     */
    public $FaceRecognitionResultSet;

    /**
     * @var array 语音关键词识别结果，当 Type 为
AsrWordsRecognition 时有效。
     */
    public $AsrWordsRecognitionResultSet;

    /**
     * @var array 文本关键词识别结果，当 Type 为
OcrWordsRecognition 时有效。
     */
    public $OcrWordsRecognitionResultSet;

    /**
     * @var array 语音全文识别结果，当 Type 为
AsrFullTextRecognition 时有效。
     */
    public $AsrFullTextRecognitionResultSet;

    /**
     * @var array 文本全文识别结果，当 Type 为
OcrFullTextRecognition 时有效。
     */
    public $OcrFullTextRecognitionResultSet;

    /**
     * @param string $Type 结果的类型，取值范围：
<li>FaceRecognition：人脸识别，</li>
<li>AsrWordsRecognition：语音关键词识别，</li>
<li>OcrWordsRecognition：文本关键词识别，</li>
<li>AsrFullTextRecognition：语音全文识别，</li>
<li>OcrFullTextRecognition：文本全文识别。</li>
     * @param array $FaceRecognitionResultSet 人脸识别结果，当 Type 为
FaceRecognition 时有效。
     * @param array $AsrWordsRecognitionResultSet 语音关键词识别结果，当 Type 为
AsrWordsRecognition 时有效。
     * @param array $OcrWordsRecognitionResultSet 文本关键词识别结果，当 Type 为
OcrWordsRecognition 时有效。
     * @param array $AsrFullTextRecognitionResultSet 语音全文识别结果，当 Type 为
AsrFullTextRecognition 时有效。
     * @param array $OcrFullTextRecognitionResultSet 文本全文识别结果，当 Type 为
OcrFullTextRecognition 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FaceRecognitionResultSet",$param) and $param["FaceRecognitionResultSet"] !== null) {
            $this->FaceRecognitionResultSet = [];
            foreach ($param["FaceRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamFaceRecognitionResult();
                $obj->deserialize($value);
                array_push($this->FaceRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("AsrWordsRecognitionResultSet",$param) and $param["AsrWordsRecognitionResultSet"] !== null) {
            $this->AsrWordsRecognitionResultSet = [];
            foreach ($param["AsrWordsRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamAsrWordsRecognitionResult();
                $obj->deserialize($value);
                array_push($this->AsrWordsRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("OcrWordsRecognitionResultSet",$param) and $param["OcrWordsRecognitionResultSet"] !== null) {
            $this->OcrWordsRecognitionResultSet = [];
            foreach ($param["OcrWordsRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamOcrWordsRecognitionResult();
                $obj->deserialize($value);
                array_push($this->OcrWordsRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("AsrFullTextRecognitionResultSet",$param) and $param["AsrFullTextRecognitionResultSet"] !== null) {
            $this->AsrFullTextRecognitionResultSet = [];
            foreach ($param["AsrFullTextRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamAsrFullTextRecognitionResult();
                $obj->deserialize($value);
                array_push($this->AsrFullTextRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("OcrFullTextRecognitionResultSet",$param) and $param["OcrFullTextRecognitionResultSet"] !== null) {
            $this->OcrFullTextRecognitionResultSet = [];
            foreach ($param["OcrFullTextRecognitionResultSet"] as $key => $value){
                $obj = new LiveStreamOcrFullTextRecognitionResult();
                $obj->deserialize($value);
                array_push($this->OcrFullTextRecognitionResultSet, $obj);
            }
        }
    }
}
