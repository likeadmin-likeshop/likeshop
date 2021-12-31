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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标配置
 *
 * @method array getOperator() 获取允许使用的运算符
 * @method void setOperator(array $Operator) 设置允许使用的运算符
 * @method array getPeriod() 获取允许配置的数据周期，以秒为单位
 * @method void setPeriod(array $Period) 设置允许配置的数据周期，以秒为单位
 * @method array getContinuePeriod() 获取允许配置的持续周期个数
 * @method void setContinuePeriod(array $ContinuePeriod) 设置允许配置的持续周期个数
 */
class MetricConfig extends AbstractModel
{
    /**
     * @var array 允许使用的运算符
     */
    public $Operator;

    /**
     * @var array 允许配置的数据周期，以秒为单位
     */
    public $Period;

    /**
     * @var array 允许配置的持续周期个数
     */
    public $ContinuePeriod;

    /**
     * @param array $Operator 允许使用的运算符
     * @param array $Period 允许配置的数据周期，以秒为单位
     * @param array $ContinuePeriod 允许配置的持续周期个数
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }
    }
}
