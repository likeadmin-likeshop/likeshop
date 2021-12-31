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
namespace TencentCloud\Facefusion\V20181201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸融合不适宜内容识别人脸信息
 *
 * @method string getField() 获取保留字段
 * @method void setField(string $Field) 设置保留字段
 * @method string getLabel() 获取人员名称
 * @method void setLabel(string $Label) 设置人员名称
 * @method float getConfidence() 获取对应识别label的置信度，分数越高意味涉政可能性越大。 
0到70，Suggestion建议为PASS； 
70到80，Suggestion建议为REVIEW； 
80到100，Suggestion建议为BLOCK。
 * @method void setConfidence(float $Confidence) 设置对应识别label的置信度，分数越高意味涉政可能性越大。 
0到70，Suggestion建议为PASS； 
70到80，Suggestion建议为REVIEW； 
80到100，Suggestion建议为BLOCK。
 * @method string getSuggestion() 获取识别场景的审核结论：  
PASS：正常 
REVIEW：疑似  
BLOCK：违规
 * @method void setSuggestion(string $Suggestion) 设置识别场景的审核结论：  
PASS：正常 
REVIEW：疑似  
BLOCK：违规
 */
class FuseFaceReviewDetail extends AbstractModel
{
    /**
     * @var string 保留字段
     */
    public $Field;

    /**
     * @var string 人员名称
     */
    public $Label;

    /**
     * @var float 对应识别label的置信度，分数越高意味涉政可能性越大。 
0到70，Suggestion建议为PASS； 
70到80，Suggestion建议为REVIEW； 
80到100，Suggestion建议为BLOCK。
     */
    public $Confidence;

    /**
     * @var string 识别场景的审核结论：  
PASS：正常 
REVIEW：疑似  
BLOCK：违规
     */
    public $Suggestion;

    /**
     * @param string $Field 保留字段
     * @param string $Label 人员名称
     * @param float $Confidence 对应识别label的置信度，分数越高意味涉政可能性越大。 
0到70，Suggestion建议为PASS； 
70到80，Suggestion建议为REVIEW； 
80到100，Suggestion建议为BLOCK。
     * @param string $Suggestion 识别场景的审核结论：  
PASS：正常 
REVIEW：疑似  
BLOCK：违规
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }
    }
}
