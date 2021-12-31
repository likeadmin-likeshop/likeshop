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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片输出结果的子结果
 *
 * @method string getScene() 获取场景
Porn 色情
Sexy 性感
Illegal 违法
Abuse 谩骂
Ad 广告
以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScene(string $Scene) 设置场景
Porn 色情
Sexy 性感
Illegal 违法
Abuse 谩骂
Ad 广告
以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHitFlag() 获取是否命中
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitFlag(integer $HitFlag) 设置是否命中
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取识别结果一级标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置识别结果一级标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubLabel() 获取识别结果二级标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubLabel(string $SubLabel) 设置识别结果二级标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNames() 获取适应特定场景，则该数据为名称列表，否则为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNames(array $Names) 设置适应特定场景，则该数据为名称列表，否则为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取图片OCR文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置图片OCR文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetails() 获取其他详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetails(array $Details) 设置其他详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageResultResult extends AbstractModel
{
    /**
     * @var string 场景
Porn 色情
Sexy 性感
Illegal 违法
Abuse 谩骂
Ad 广告
以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scene;

    /**
     * @var integer 是否命中
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitFlag;

    /**
     * @var string 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var string 识别结果一级标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string 识别结果二级标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubLabel;

    /**
     * @var integer 分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var array 适应特定场景，则该数据为名称列表，否则为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Names;

    /**
     * @var string 图片OCR文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var array 其他详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Details;

    /**
     * @param string $Scene 场景
Porn 色情
Sexy 性感
Illegal 违法
Abuse 谩骂
Ad 广告
以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HitFlag 是否命中
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label 识别结果一级标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubLabel 识别结果二级标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 分数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Names 适应特定场景，则该数据为名称列表，否则为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 图片OCR文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Details 其他详情
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new ImageResultsResultDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
