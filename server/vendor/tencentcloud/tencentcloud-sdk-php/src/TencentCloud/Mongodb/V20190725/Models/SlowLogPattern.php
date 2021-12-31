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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述MongoDB数据库慢日志统计信息
 *
 * @method string getPattern() 获取慢日志模式
 * @method void setPattern(string $Pattern) 设置慢日志模式
 * @method integer getMaxTime() 获取最大执行时间
 * @method void setMaxTime(integer $MaxTime) 设置最大执行时间
 * @method integer getAverageTime() 获取平均执行时间
 * @method void setAverageTime(integer $AverageTime) 设置平均执行时间
 * @method integer getTotal() 获取该模式慢日志条数
 * @method void setTotal(integer $Total) 设置该模式慢日志条数
 */
class SlowLogPattern extends AbstractModel
{
    /**
     * @var string 慢日志模式
     */
    public $Pattern;

    /**
     * @var integer 最大执行时间
     */
    public $MaxTime;

    /**
     * @var integer 平均执行时间
     */
    public $AverageTime;

    /**
     * @var integer 该模式慢日志条数
     */
    public $Total;

    /**
     * @param string $Pattern 慢日志模式
     * @param integer $MaxTime 最大执行时间
     * @param integer $AverageTime 平均执行时间
     * @param integer $Total 该模式慢日志条数
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
        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("MaxTime",$param) and $param["MaxTime"] !== null) {
            $this->MaxTime = $param["MaxTime"];
        }

        if (array_key_exists("AverageTime",$param) and $param["AverageTime"] !== null) {
            $this->AverageTime = $param["AverageTime"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
