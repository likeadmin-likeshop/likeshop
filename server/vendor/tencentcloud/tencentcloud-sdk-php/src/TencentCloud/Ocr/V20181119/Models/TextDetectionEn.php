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
 * 英文识别结果
 *
 * @method string getDetectedText() 获取识别出的文本行内容。
 * @method void setDetectedText(string $DetectedText) 设置识别出的文本行内容。
 * @method integer getConfidence() 获取置信度 0 ~100。
 * @method void setConfidence(integer $Confidence) 设置置信度 0 ~100。
 * @method array getPolygon() 获取文本行在原图中的四点坐标。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolygon(array $Polygon) 设置文本行在原图中的四点坐标。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdvancedInfo() 获取此字段为扩展字段。目前EnglishOCR接口返回内容为空。
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置此字段为扩展字段。目前EnglishOCR接口返回内容为空。
 * @method array getWordCoordPoint() 获取英文单词在原图中的四点坐标。
 * @method void setWordCoordPoint(array $WordCoordPoint) 设置英文单词在原图中的四点坐标。
 * @method array getCandWord() 获取候选字符集(包含候选字Character以及置信度Confidence)。
 * @method void setCandWord(array $CandWord) 设置候选字符集(包含候选字Character以及置信度Confidence)。
 * @method array getWords() 获取识别出来的单词信息（包括单词Character和单词置信度confidence）
 * @method void setWords(array $Words) 设置识别出来的单词信息（包括单词Character和单词置信度confidence）
 */
class TextDetectionEn extends AbstractModel
{
    /**
     * @var string 识别出的文本行内容。
     */
    public $DetectedText;

    /**
     * @var integer 置信度 0 ~100。
     */
    public $Confidence;

    /**
     * @var array 文本行在原图中的四点坐标。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Polygon;

    /**
     * @var string 此字段为扩展字段。目前EnglishOCR接口返回内容为空。
     */
    public $AdvancedInfo;

    /**
     * @var array 英文单词在原图中的四点坐标。
     */
    public $WordCoordPoint;

    /**
     * @var array 候选字符集(包含候选字Character以及置信度Confidence)。
     */
    public $CandWord;

    /**
     * @var array 识别出来的单词信息（包括单词Character和单词置信度confidence）
     */
    public $Words;

    /**
     * @param string $DetectedText 识别出的文本行内容。
     * @param integer $Confidence 置信度 0 ~100。
     * @param array $Polygon 文本行在原图中的四点坐标。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdvancedInfo 此字段为扩展字段。目前EnglishOCR接口返回内容为空。
     * @param array $WordCoordPoint 英文单词在原图中的四点坐标。
     * @param array $CandWord 候选字符集(包含候选字Character以及置信度Confidence)。
     * @param array $Words 识别出来的单词信息（包括单词Character和单词置信度confidence）
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
        if (array_key_exists("DetectedText",$param) and $param["DetectedText"] !== null) {
            $this->DetectedText = $param["DetectedText"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = [];
            foreach ($param["Polygon"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Polygon, $obj);
            }
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("WordCoordPoint",$param) and $param["WordCoordPoint"] !== null) {
            $this->WordCoordPoint = [];
            foreach ($param["WordCoordPoint"] as $key => $value){
                $obj = new WordCoordPoint();
                $obj->deserialize($value);
                array_push($this->WordCoordPoint, $obj);
            }
        }

        if (array_key_exists("CandWord",$param) and $param["CandWord"] !== null) {
            $this->CandWord = [];
            foreach ($param["CandWord"] as $key => $value){
                $obj = new CandWord();
                $obj->deserialize($value);
                array_push($this->CandWord, $obj);
            }
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new Words();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }
    }
}
