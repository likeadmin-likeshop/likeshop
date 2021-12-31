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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸属性信息
 *
 * @method integer getType() 获取属性值
 * @method void setType(integer $Type) 设置属性值
 * @method float getProbability() 获取Type识别概率值，【0,1】,代表判断正确的概率。
 * @method void setProbability(float $Probability) 设置Type识别概率值，【0,1】,代表判断正确的概率。
 */
class AttributeItem extends AbstractModel
{
    /**
     * @var integer 属性值
     */
    public $Type;

    /**
     * @var float Type识别概率值，【0,1】,代表判断正确的概率。
     */
    public $Probability;

    /**
     * @param integer $Type 属性值
     * @param float $Probability Type识别概率值，【0,1】,代表判断正确的概率。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Probability",$param) and $param["Probability"] !== null) {
            $this->Probability = $param["Probability"];
        }
    }
}
