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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本分类结果
 *
 * @method string getFirstClassName() 获取一级分类名称
 * @method void setFirstClassName(string $FirstClassName) 设置一级分类名称
 * @method string getSecondClassName() 获取二级分类名称
 * @method void setSecondClassName(string $SecondClassName) 设置二级分类名称
 * @method float getFirstClassProbability() 获取一级分类概率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstClassProbability(float $FirstClassProbability) 设置一级分类概率
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSecondClassProbability() 获取二级分类概率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondClassProbability(float $SecondClassProbability) 设置二级分类概率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThirdClassName() 获取三级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdClassName(string $ThirdClassName) 设置三级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getThirdClassProbability() 获取三级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdClassProbability(float $ThirdClassProbability) 设置三级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFourthClassName() 获取四级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFourthClassName(string $FourthClassName) 设置四级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFourthClassProbability() 获取四级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFourthClassProbability(float $FourthClassProbability) 设置四级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFifthClassName() 获取五级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFifthClassName(string $FifthClassName) 设置五级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFifthClassProbability() 获取五级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFifthClassProbability(float $FifthClassProbability) 设置五级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClassificationResult extends AbstractModel
{
    /**
     * @var string 一级分类名称
     */
    public $FirstClassName;

    /**
     * @var string 二级分类名称
     */
    public $SecondClassName;

    /**
     * @var float 一级分类概率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstClassProbability;

    /**
     * @var float 二级分类概率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondClassProbability;

    /**
     * @var string 三级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdClassName;

    /**
     * @var float 三级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdClassProbability;

    /**
     * @var string 四级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FourthClassName;

    /**
     * @var float 四级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FourthClassProbability;

    /**
     * @var string 五级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FifthClassName;

    /**
     * @var float 五级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FifthClassProbability;

    /**
     * @param string $FirstClassName 一级分类名称
     * @param string $SecondClassName 二级分类名称
     * @param float $FirstClassProbability 一级分类概率
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SecondClassProbability 二级分类概率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThirdClassName 三级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ThirdClassProbability 三级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FourthClassName 四级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FourthClassProbability 四级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FifthClassName 五级分类名称，仅有当新闻领域五分类可能出现，详情见文本分类文档
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FifthClassProbability 五级分类概率，仅有当新闻领域五分类可能出现，详情见文本分类文档
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
        if (array_key_exists("FirstClassName",$param) and $param["FirstClassName"] !== null) {
            $this->FirstClassName = $param["FirstClassName"];
        }

        if (array_key_exists("SecondClassName",$param) and $param["SecondClassName"] !== null) {
            $this->SecondClassName = $param["SecondClassName"];
        }

        if (array_key_exists("FirstClassProbability",$param) and $param["FirstClassProbability"] !== null) {
            $this->FirstClassProbability = $param["FirstClassProbability"];
        }

        if (array_key_exists("SecondClassProbability",$param) and $param["SecondClassProbability"] !== null) {
            $this->SecondClassProbability = $param["SecondClassProbability"];
        }

        if (array_key_exists("ThirdClassName",$param) and $param["ThirdClassName"] !== null) {
            $this->ThirdClassName = $param["ThirdClassName"];
        }

        if (array_key_exists("ThirdClassProbability",$param) and $param["ThirdClassProbability"] !== null) {
            $this->ThirdClassProbability = $param["ThirdClassProbability"];
        }

        if (array_key_exists("FourthClassName",$param) and $param["FourthClassName"] !== null) {
            $this->FourthClassName = $param["FourthClassName"];
        }

        if (array_key_exists("FourthClassProbability",$param) and $param["FourthClassProbability"] !== null) {
            $this->FourthClassProbability = $param["FourthClassProbability"];
        }

        if (array_key_exists("FifthClassName",$param) and $param["FifthClassName"] !== null) {
            $this->FifthClassName = $param["FifthClassName"];
        }

        if (array_key_exists("FifthClassProbability",$param) and $param["FifthClassProbability"] !== null) {
            $this->FifthClassProbability = $param["FifthClassProbability"];
        }
    }
}
