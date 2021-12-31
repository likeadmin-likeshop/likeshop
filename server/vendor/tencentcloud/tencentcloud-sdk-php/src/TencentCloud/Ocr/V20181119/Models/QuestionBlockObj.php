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
 * 数学试题识别结构化对象
 *
 * @method array getQuestionArr() 获取数学试题识别结构化信息数组
 * @method void setQuestionArr(array $QuestionArr) 设置数学试题识别结构化信息数组
 * @method Rect getQuestionBboxCoord() 获取题目主体区域检测框在图片中的像素坐标
 * @method void setQuestionBboxCoord(Rect $QuestionBboxCoord) 设置题目主体区域检测框在图片中的像素坐标
 */
class QuestionBlockObj extends AbstractModel
{
    /**
     * @var array 数学试题识别结构化信息数组
     */
    public $QuestionArr;

    /**
     * @var Rect 题目主体区域检测框在图片中的像素坐标
     */
    public $QuestionBboxCoord;

    /**
     * @param array $QuestionArr 数学试题识别结构化信息数组
     * @param Rect $QuestionBboxCoord 题目主体区域检测框在图片中的像素坐标
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
        if (array_key_exists("QuestionArr",$param) and $param["QuestionArr"] !== null) {
            $this->QuestionArr = [];
            foreach ($param["QuestionArr"] as $key => $value){
                $obj = new QuestionObj();
                $obj->deserialize($value);
                array_push($this->QuestionArr, $obj);
            }
        }

        if (array_key_exists("QuestionBboxCoord",$param) and $param["QuestionBboxCoord"] !== null) {
            $this->QuestionBboxCoord = new Rect();
            $this->QuestionBboxCoord->deserialize($param["QuestionBboxCoord"]);
        }
    }
}
