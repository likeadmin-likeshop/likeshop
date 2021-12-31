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
 * 人脸融合不适宜内容识别返回参数item
 *
 * @method string getCategory() 获取保留字段
 * @method void setCategory(string $Category) 设置保留字段
 * @method string getCode() 获取状态码， 0为处理成功，其他值为处理失败
 * @method void setCode(string $Code) 设置状态码， 0为处理成功，其他值为处理失败
 * @method string getCodeDescription() 获取对应状态码信息描述
 * @method void setCodeDescription(string $CodeDescription) 设置对应状态码信息描述
 * @method float getConfidence() 获取保留字段
 * @method void setConfidence(float $Confidence) 设置保留字段
 * @method string getSuggestion() 获取保留字段
 * @method void setSuggestion(string $Suggestion) 设置保留字段
 * @method array getDetailSet() 获取审核详细内容
 * @method void setDetailSet(array $DetailSet) 设置审核详细内容
 */
class FuseFaceReviewResult extends AbstractModel
{
    /**
     * @var string 保留字段
     */
    public $Category;

    /**
     * @var string 状态码， 0为处理成功，其他值为处理失败
     */
    public $Code;

    /**
     * @var string 对应状态码信息描述
     */
    public $CodeDescription;

    /**
     * @var float 保留字段
     */
    public $Confidence;

    /**
     * @var string 保留字段
     */
    public $Suggestion;

    /**
     * @var array 审核详细内容
     */
    public $DetailSet;

    /**
     * @param string $Category 保留字段
     * @param string $Code 状态码， 0为处理成功，其他值为处理失败
     * @param string $CodeDescription 对应状态码信息描述
     * @param float $Confidence 保留字段
     * @param string $Suggestion 保留字段
     * @param array $DetailSet 审核详细内容
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CodeDescription",$param) and $param["CodeDescription"] !== null) {
            $this->CodeDescription = $param["CodeDescription"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("DetailSet",$param) and $param["DetailSet"] !== null) {
            $this->DetailSet = [];
            foreach ($param["DetailSet"] as $key => $value){
                $obj = new FuseFaceReviewDetail();
                $obj->deserialize($value);
                array_push($this->DetailSet, $obj);
            }
        }
    }
}
