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
 * 试题识别结构化信息
 *
 * @method string getQuestionTextNo() 获取题号
 * @method void setQuestionTextNo(string $QuestionTextNo) 设置题号
 * @method integer getQuestionTextType() 获取题型：
1: "选择题"
2: "填空题"
3: "解答题"
 * @method void setQuestionTextType(integer $QuestionTextType) 设置题型：
1: "选择题"
2: "填空题"
3: "解答题"
 * @method string getQuestionText() 获取题干
 * @method void setQuestionText(string $QuestionText) 设置题干
 * @method string getQuestionOptions() 获取选择题选项，包含1个或多个option
 * @method void setQuestionOptions(string $QuestionOptions) 设置选择题选项，包含1个或多个option
 * @method string getQuestionSubquestion() 获取所有子题的question属性
 * @method void setQuestionSubquestion(string $QuestionSubquestion) 设置所有子题的question属性
 * @method array getQuestionImageCoords() 获取示意图检测框在的图片中的像素坐标
 * @method void setQuestionImageCoords(array $QuestionImageCoords) 设置示意图检测框在的图片中的像素坐标
 */
class QuestionObj extends AbstractModel
{
    /**
     * @var string 题号
     */
    public $QuestionTextNo;

    /**
     * @var integer 题型：
1: "选择题"
2: "填空题"
3: "解答题"
     */
    public $QuestionTextType;

    /**
     * @var string 题干
     */
    public $QuestionText;

    /**
     * @var string 选择题选项，包含1个或多个option
     */
    public $QuestionOptions;

    /**
     * @var string 所有子题的question属性
     */
    public $QuestionSubquestion;

    /**
     * @var array 示意图检测框在的图片中的像素坐标
     */
    public $QuestionImageCoords;

    /**
     * @param string $QuestionTextNo 题号
     * @param integer $QuestionTextType 题型：
1: "选择题"
2: "填空题"
3: "解答题"
     * @param string $QuestionText 题干
     * @param string $QuestionOptions 选择题选项，包含1个或多个option
     * @param string $QuestionSubquestion 所有子题的question属性
     * @param array $QuestionImageCoords 示意图检测框在的图片中的像素坐标
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
        if (array_key_exists("QuestionTextNo",$param) and $param["QuestionTextNo"] !== null) {
            $this->QuestionTextNo = $param["QuestionTextNo"];
        }

        if (array_key_exists("QuestionTextType",$param) and $param["QuestionTextType"] !== null) {
            $this->QuestionTextType = $param["QuestionTextType"];
        }

        if (array_key_exists("QuestionText",$param) and $param["QuestionText"] !== null) {
            $this->QuestionText = $param["QuestionText"];
        }

        if (array_key_exists("QuestionOptions",$param) and $param["QuestionOptions"] !== null) {
            $this->QuestionOptions = $param["QuestionOptions"];
        }

        if (array_key_exists("QuestionSubquestion",$param) and $param["QuestionSubquestion"] !== null) {
            $this->QuestionSubquestion = $param["QuestionSubquestion"];
        }

        if (array_key_exists("QuestionImageCoords",$param) and $param["QuestionImageCoords"] !== null) {
            $this->QuestionImageCoords = [];
            foreach ($param["QuestionImageCoords"] as $key => $value){
                $obj = new Rect();
                $obj->deserialize($value);
                array_push($this->QuestionImageCoords, $obj);
            }
        }
    }
}
