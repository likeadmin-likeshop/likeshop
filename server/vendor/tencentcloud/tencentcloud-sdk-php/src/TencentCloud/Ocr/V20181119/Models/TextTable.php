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
 * 表格识别结果
 *
 * @method integer getColTl() 获取单元格左上角的列索引
 * @method void setColTl(integer $ColTl) 设置单元格左上角的列索引
 * @method integer getRowTl() 获取单元格左上角的行索引
 * @method void setRowTl(integer $RowTl) 设置单元格左上角的行索引
 * @method integer getColBr() 获取单元格右下角的列索引
 * @method void setColBr(integer $ColBr) 设置单元格右下角的列索引
 * @method integer getRowBr() 获取单元格右下角的行索引
 * @method void setRowBr(integer $RowBr) 设置单元格右下角的行索引
 * @method string getText() 获取单元格文字
 * @method void setText(string $Text) 设置单元格文字
 * @method string getType() 获取单元格类型，包含body（表格主体）、header（表头）、footer（表尾）三种
 * @method void setType(string $Type) 设置单元格类型，包含body（表格主体）、header（表头）、footer（表尾）三种
 * @method integer getConfidence() 获取置信度 0 ~100
 * @method void setConfidence(integer $Confidence) 设置置信度 0 ~100
 * @method array getPolygon() 获取文本行坐标，以四个顶点坐标表示
 * @method void setPolygon(array $Polygon) 设置文本行坐标，以四个顶点坐标表示
 * @method string getAdvancedInfo() 获取此字段为扩展字段
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置此字段为扩展字段
 */
class TextTable extends AbstractModel
{
    /**
     * @var integer 单元格左上角的列索引
     */
    public $ColTl;

    /**
     * @var integer 单元格左上角的行索引
     */
    public $RowTl;

    /**
     * @var integer 单元格右下角的列索引
     */
    public $ColBr;

    /**
     * @var integer 单元格右下角的行索引
     */
    public $RowBr;

    /**
     * @var string 单元格文字
     */
    public $Text;

    /**
     * @var string 单元格类型，包含body（表格主体）、header（表头）、footer（表尾）三种
     */
    public $Type;

    /**
     * @var integer 置信度 0 ~100
     */
    public $Confidence;

    /**
     * @var array 文本行坐标，以四个顶点坐标表示
     */
    public $Polygon;

    /**
     * @var string 此字段为扩展字段
     */
    public $AdvancedInfo;

    /**
     * @param integer $ColTl 单元格左上角的列索引
     * @param integer $RowTl 单元格左上角的行索引
     * @param integer $ColBr 单元格右下角的列索引
     * @param integer $RowBr 单元格右下角的行索引
     * @param string $Text 单元格文字
     * @param string $Type 单元格类型，包含body（表格主体）、header（表头）、footer（表尾）三种
     * @param integer $Confidence 置信度 0 ~100
     * @param array $Polygon 文本行坐标，以四个顶点坐标表示
     * @param string $AdvancedInfo 此字段为扩展字段
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
        if (array_key_exists("ColTl",$param) and $param["ColTl"] !== null) {
            $this->ColTl = $param["ColTl"];
        }

        if (array_key_exists("RowTl",$param) and $param["RowTl"] !== null) {
            $this->RowTl = $param["RowTl"];
        }

        if (array_key_exists("ColBr",$param) and $param["ColBr"] !== null) {
            $this->ColBr = $param["ColBr"];
        }

        if (array_key_exists("RowBr",$param) and $param["RowBr"] !== null) {
            $this->RowBr = $param["RowBr"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
    }
}
