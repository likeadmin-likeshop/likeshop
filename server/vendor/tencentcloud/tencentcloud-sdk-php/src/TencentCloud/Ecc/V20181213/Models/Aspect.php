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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作文批改每个维度名字与得分
 *
 * @method string getName() 获取维度名字
 * @method void setName(string $Name) 设置维度名字
 * @method float getScore() 获取维度得分
 * @method void setScore(float $Score) 设置维度得分
 * @method float getPercentage() 获取维度分数占比
 * @method void setPercentage(float $Percentage) 设置维度分数占比
 */
class Aspect extends AbstractModel
{
    /**
     * @var string 维度名字
     */
    public $Name;

    /**
     * @var float 维度得分
     */
    public $Score;

    /**
     * @var float 维度分数占比
     */
    public $Percentage;

    /**
     * @param string $Name 维度名字
     * @param float $Score 维度得分
     * @param float $Percentage 维度分数占比
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }
    }
}
