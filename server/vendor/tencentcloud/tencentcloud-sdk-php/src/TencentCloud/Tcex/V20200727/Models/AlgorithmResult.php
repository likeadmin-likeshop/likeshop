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
namespace TencentCloud\Tcex\V20200727\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 每个算法的返回结果
 *
 * @method string getAlgoId() 获取算法ID
 * @method void setAlgoId(string $AlgoId) 设置算法ID
 * @method string getAlgoName() 获取算法名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgoName(string $AlgoName) 设置算法名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取算法返回的结果。
- 当算法类型为“OCR（1）”时，结果为文本字符串
- 当算法类型为“文本分类（2）”时，结果字符串为json对象数组：
  Class：分类结果
  Confidence：置信度
- 算法类型为“情感分析（3）”时，结果字符串为json对象：
  Positive：正面情感概率
  Negative：负面情感概率
  Neutral：中性情感概率
- 当算法类型为“合同要素抽取（4）”时，结果字符串为json对象数组：
  NodeName：一级要素名称
  ItemName：二级要素名称
  Content：要素文本内容
- 当算法类型为“实体识别（5）”时，结果字符串为json对象数组：
  - Entity：实体类型
  - Content：实体文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置算法返回的结果。
- 当算法类型为“OCR（1）”时，结果为文本字符串
- 当算法类型为“文本分类（2）”时，结果字符串为json对象数组：
  Class：分类结果
  Confidence：置信度
- 算法类型为“情感分析（3）”时，结果字符串为json对象：
  Positive：正面情感概率
  Negative：负面情感概率
  Neutral：中性情感概率
- 当算法类型为“合同要素抽取（4）”时，结果字符串为json对象数组：
  NodeName：一级要素名称
  ItemName：二级要素名称
  Content：要素文本内容
- 当算法类型为“实体识别（5）”时，结果字符串为json对象数组：
  - Entity：实体类型
  - Content：实体文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getError() 获取算法调用错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(string $Error) 设置算法调用错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlgoType() 获取算法类型：
1：OCR算法
2：文本分类算法
3：情感分析算法
4：合同要素抽取算法
5、实体识别算法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgoType(integer $AlgoType) 设置算法类型：
1：OCR算法
2：文本分类算法
3：情感分析算法
4：合同要素抽取算法
5、实体识别算法
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlgorithmResult extends AbstractModel
{
    /**
     * @var string 算法ID
     */
    public $AlgoId;

    /**
     * @var string 算法名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgoName;

    /**
     * @var string 算法返回的结果。
- 当算法类型为“OCR（1）”时，结果为文本字符串
- 当算法类型为“文本分类（2）”时，结果字符串为json对象数组：
  Class：分类结果
  Confidence：置信度
- 算法类型为“情感分析（3）”时，结果字符串为json对象：
  Positive：正面情感概率
  Negative：负面情感概率
  Neutral：中性情感概率
- 当算法类型为“合同要素抽取（4）”时，结果字符串为json对象数组：
  NodeName：一级要素名称
  ItemName：二级要素名称
  Content：要素文本内容
- 当算法类型为“实体识别（5）”时，结果字符串为json对象数组：
  - Entity：实体类型
  - Content：实体文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 算法调用错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @var integer 算法类型：
1：OCR算法
2：文本分类算法
3：情感分析算法
4：合同要素抽取算法
5、实体识别算法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgoType;

    /**
     * @param string $AlgoId 算法ID
     * @param string $AlgoName 算法名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 算法返回的结果。
- 当算法类型为“OCR（1）”时，结果为文本字符串
- 当算法类型为“文本分类（2）”时，结果字符串为json对象数组：
  Class：分类结果
  Confidence：置信度
- 算法类型为“情感分析（3）”时，结果字符串为json对象：
  Positive：正面情感概率
  Negative：负面情感概率
  Neutral：中性情感概率
- 当算法类型为“合同要素抽取（4）”时，结果字符串为json对象数组：
  NodeName：一级要素名称
  ItemName：二级要素名称
  Content：要素文本内容
- 当算法类型为“实体识别（5）”时，结果字符串为json对象数组：
  - Entity：实体类型
  - Content：实体文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Error 算法调用错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlgoType 算法类型：
1：OCR算法
2：文本分类算法
3：情感分析算法
4：合同要素抽取算法
5、实体识别算法
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
        if (array_key_exists("AlgoId",$param) and $param["AlgoId"] !== null) {
            $this->AlgoId = $param["AlgoId"];
        }

        if (array_key_exists("AlgoName",$param) and $param["AlgoName"] !== null) {
            $this->AlgoName = $param["AlgoName"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }

        if (array_key_exists("AlgoType",$param) and $param["AlgoType"] !== null) {
            $this->AlgoType = $param["AlgoType"];
        }
    }
}
