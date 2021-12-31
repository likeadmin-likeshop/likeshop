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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询指标返回的时间序列
 *
 * @method integer getTime() 获取Unix时间戳，单位秒
 * @method void setTime(integer $Time) 设置Unix时间戳，单位秒
 * @method float getValue() 获取查询指标对应当前时间的值
 * @method void setValue(float $Value) 设置查询指标对应当前时间的值
 */
class TimeValue extends AbstractModel
{
    /**
     * @var integer Unix时间戳，单位秒
     */
    public $Time;

    /**
     * @var float 查询指标对应当前时间的值
     */
    public $Value;

    /**
     * @param integer $Time Unix时间戳，单位秒
     * @param float $Value 查询指标对应当前时间的值
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
