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
 * 文字识别结果
 *
 * @method string getDetectedText() 获取识别出的文本行内容
 * @method void setDetectedText(string $DetectedText) 设置识别出的文本行内容
 * @method integer getConfidence() 获取置信度 0 ~100
 * @method void setConfidence(integer $Confidence) 设置置信度 0 ~100
 * @method array getPolygon() 获取文本行坐标，以四个顶点坐标表示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolygon(array $Polygon) 设置文本行坐标，以四个顶点坐标表示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdvancedInfo() 获取此字段为扩展字段。
GeneralBasicOcr接口返回段落信息Parag，包含ParagNo。
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置此字段为扩展字段。
GeneralBasicOcr接口返回段落信息Parag，包含ParagNo。
 * @method ItemCoord getItemPolygon() 获取文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
 * @method void setItemPolygon(ItemCoord $ItemPolygon) 设置文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
 */
class TextDetection extends AbstractModel
{
    /**
     * @var string 识别出的文本行内容
     */
    public $DetectedText;

    /**
     * @var integer 置信度 0 ~100
     */
    public $Confidence;

    /**
     * @var array 文本行坐标，以四个顶点坐标表示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Polygon;

    /**
     * @var string 此字段为扩展字段。
GeneralBasicOcr接口返回段落信息Parag，包含ParagNo。
     */
    public $AdvancedInfo;

    /**
     * @var ItemCoord 文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
     */
    public $ItemPolygon;

    /**
     * @param string $DetectedText 识别出的文本行内容
     * @param integer $Confidence 置信度 0 ~100
     * @param array $Polygon 文本行坐标，以四个顶点坐标表示
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdvancedInfo 此字段为扩展字段。
GeneralBasicOcr接口返回段落信息Parag，包含ParagNo。
     * @param ItemCoord $ItemPolygon 文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
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

        if (array_key_exists("ItemPolygon",$param) and $param["ItemPolygon"] !== null) {
            $this->ItemPolygon = new ItemCoord();
            $this->ItemPolygon->deserialize($param["ItemPolygon"]);
        }
    }
}
