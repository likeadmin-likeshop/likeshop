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
namespace TencentCloud\Cii\V20201210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于返回结构化任务结果
 *
 * @method float getQuality() 获取图片质量分
 * @method void setQuality(float $Quality) 设置图片质量分
 * @method string getStructureResult() 获取由结构化算法结构化json转换的字符串，具体协议参见算法结构化结果协议
 * @method void setStructureResult(string $StructureResult) 设置由结构化算法结构化json转换的字符串，具体协议参见算法结构化结果协议
 */
class ResultObject extends AbstractModel
{
    /**
     * @var float 图片质量分
     */
    public $Quality;

    /**
     * @var string 由结构化算法结构化json转换的字符串，具体协议参见算法结构化结果协议
     */
    public $StructureResult;

    /**
     * @param float $Quality 图片质量分
     * @param string $StructureResult 由结构化算法结构化json转换的字符串，具体协议参见算法结构化结果协议
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
        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }

        if (array_key_exists("StructureResult",$param) and $param["StructureResult"] !== null) {
            $this->StructureResult = $param["StructureResult"];
        }
    }
}
