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
 * Result结果详情
 *
 * @method integer getHitFlag() 获取违规标志
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitFlag(integer $HitFlag) 设置违规标志
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取命中的标签
Porn 色情
Sexy 性感
Illegal 违法
Abuse 谩骂
Ad 广告
以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置命中的标签
Porn 色情
Sexy 性感
Illegal 违法
Abuse 谩骂
Ad 广告
以及其他令人反感、不安全或不适宜的内容类型。
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
 * @method integer getScore() 获取得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResults() 获取画面截帧图片结果集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResults(array $Results) 设置画面截帧图片结果集
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取图片URL地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置图片URL地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取附加字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置附加字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageResult extends AbstractModel
{
    /**
     * @var integer 违规标志
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitFlag;

    /**
     * @var string 命中的标签
Porn 色情
Sexy 性感
Illegal 违法
Abuse 谩骂
Ad 广告
以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var integer 得分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var array 画面截帧图片结果集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Results;

    /**
     * @var string 图片URL地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 附加字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @param integer $HitFlag 违规标志
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label 命中的标签
Porn 色情
Sexy 性感
Illegal 违法
Abuse 谩骂
Ad 广告
以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 得分
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Results 画面截帧图片结果集
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 图片URL地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra 附加字段
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
        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new ImageResultResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
