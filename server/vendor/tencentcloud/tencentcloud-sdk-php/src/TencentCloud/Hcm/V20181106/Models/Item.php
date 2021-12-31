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
namespace TencentCloud\Hcm\V20181106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 识别出的算术式信息及评估结果
 *
 * @method string getItem() 获取识别的算式是否正确，算式运算结果: ‘YES’:正确 ‘NO’: 错误 ‘NA’: 非法参数
 * @method void setItem(string $Item) 设置识别的算式是否正确，算式运算结果: ‘YES’:正确 ‘NO’: 错误 ‘NA’: 非法参数
 * @method string getItemString() 获取识别出的算式，识别出的文本行字符串
 * @method void setItemString(string $ItemString) 设置识别出的算式，识别出的文本行字符串
 * @method ItemCoord getItemCoord() 获取识别的算式在图片上的位置信息，文本行在旋转纠正之后的图像中的像素坐 标，表示为(左上角 x, 左上角 y，宽 width， 高 height)
 * @method void setItemCoord(ItemCoord $ItemCoord) 设置识别的算式在图片上的位置信息，文本行在旋转纠正之后的图像中的像素坐 标，表示为(左上角 x, 左上角 y，宽 width， 高 height)
 * @method string getAnswer() 获取错题推荐答案，算式运算结果正确返回为 ""，算式运算结果错误返回推荐答案 (注:暂不支持多个关系运算符(如 1<10<7)、 无关系运算符(如 frac(1,2)+frac(2,3))、单 位换算(如 1 元=100 角)错题的推荐答案 返回)
 * @method void setAnswer(string $Answer) 设置错题推荐答案，算式运算结果正确返回为 ""，算式运算结果错误返回推荐答案 (注:暂不支持多个关系运算符(如 1<10<7)、 无关系运算符(如 frac(1,2)+frac(2,3))、单 位换算(如 1 元=100 角)错题的推荐答案 返回)
 * @method string getExpressionType() 获取算式题型编号，如加减乘除四则题型，具体题型及编号如下：1 加减乘除四则 2 加减乘除已知结果求运算因子3 判断大小 4 约等于估算 5 带余数除法 6 分数四则运算 7 单位换算 8 竖式加减法 9 竖式乘除法 10 脱式计算 11 解方程
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpressionType(string $ExpressionType) 设置算式题型编号，如加减乘除四则题型，具体题型及编号如下：1 加减乘除四则 2 加减乘除已知结果求运算因子3 判断大小 4 约等于估算 5 带余数除法 6 分数四则运算 7 单位换算 8 竖式加减法 9 竖式乘除法 10 脱式计算 11 解方程
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getItemConf() 获取文本行置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemConf(float $ItemConf) 设置文本行置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuestionId() 获取用于标识题目 id，如果有若干算式属于同一 题，则其对应的 id 相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestionId(string $QuestionId) 设置用于标识题目 id，如果有若干算式属于同一 题，则其对应的 id 相同。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Item extends AbstractModel
{
    /**
     * @var string 识别的算式是否正确，算式运算结果: ‘YES’:正确 ‘NO’: 错误 ‘NA’: 非法参数
     */
    public $Item;

    /**
     * @var string 识别出的算式，识别出的文本行字符串
     */
    public $ItemString;

    /**
     * @var ItemCoord 识别的算式在图片上的位置信息，文本行在旋转纠正之后的图像中的像素坐 标，表示为(左上角 x, 左上角 y，宽 width， 高 height)
     */
    public $ItemCoord;

    /**
     * @var string 错题推荐答案，算式运算结果正确返回为 ""，算式运算结果错误返回推荐答案 (注:暂不支持多个关系运算符(如 1<10<7)、 无关系运算符(如 frac(1,2)+frac(2,3))、单 位换算(如 1 元=100 角)错题的推荐答案 返回)
     */
    public $Answer;

    /**
     * @var string 算式题型编号，如加减乘除四则题型，具体题型及编号如下：1 加减乘除四则 2 加减乘除已知结果求运算因子3 判断大小 4 约等于估算 5 带余数除法 6 分数四则运算 7 单位换算 8 竖式加减法 9 竖式乘除法 10 脱式计算 11 解方程
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpressionType;

    /**
     * @var float 文本行置信度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemConf;

    /**
     * @var string 用于标识题目 id，如果有若干算式属于同一 题，则其对应的 id 相同。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuestionId;

    /**
     * @param string $Item 识别的算式是否正确，算式运算结果: ‘YES’:正确 ‘NO’: 错误 ‘NA’: 非法参数
     * @param string $ItemString 识别出的算式，识别出的文本行字符串
     * @param ItemCoord $ItemCoord 识别的算式在图片上的位置信息，文本行在旋转纠正之后的图像中的像素坐 标，表示为(左上角 x, 左上角 y，宽 width， 高 height)
     * @param string $Answer 错题推荐答案，算式运算结果正确返回为 ""，算式运算结果错误返回推荐答案 (注:暂不支持多个关系运算符(如 1<10<7)、 无关系运算符(如 frac(1,2)+frac(2,3))、单 位换算(如 1 元=100 角)错题的推荐答案 返回)
     * @param string $ExpressionType 算式题型编号，如加减乘除四则题型，具体题型及编号如下：1 加减乘除四则 2 加减乘除已知结果求运算因子3 判断大小 4 约等于估算 5 带余数除法 6 分数四则运算 7 单位换算 8 竖式加减法 9 竖式乘除法 10 脱式计算 11 解方程
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ItemConf 文本行置信度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QuestionId 用于标识题目 id，如果有若干算式属于同一 题，则其对应的 id 相同。
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("ItemString",$param) and $param["ItemString"] !== null) {
            $this->ItemString = $param["ItemString"];
        }

        if (array_key_exists("ItemCoord",$param) and $param["ItemCoord"] !== null) {
            $this->ItemCoord = new ItemCoord();
            $this->ItemCoord->deserialize($param["ItemCoord"]);
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("ExpressionType",$param) and $param["ExpressionType"] !== null) {
            $this->ExpressionType = $param["ExpressionType"];
        }

        if (array_key_exists("ItemConf",$param) and $param["ItemConf"] !== null) {
            $this->ItemConf = $param["ItemConf"];
        }

        if (array_key_exists("QuestionId",$param) and $param["QuestionId"] !== null) {
            $this->QuestionId = $param["QuestionId"];
        }
    }
}
