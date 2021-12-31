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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的质量数据，时间:值
 *
 * @method integer getTime() 获取时间，unix时间戳（1590065877s)
 * @method void setTime(integer $Time) 设置时间，unix时间戳（1590065877s)
 * @method float getValue() 获取当前时间返回参数取值，如（bigvCapFps在1590065877取值为0，则Value：0 ）
 * @method void setValue(float $Value) 设置当前时间返回参数取值，如（bigvCapFps在1590065877取值为0，则Value：0 ）
 */
class TimeValue extends AbstractModel
{
    /**
     * @var integer 时间，unix时间戳（1590065877s)
     */
    public $Time;

    /**
     * @var float 当前时间返回参数取值，如（bigvCapFps在1590065877取值为0，则Value：0 ）
     */
    public $Value;

    /**
     * @param integer $Time 时间，unix时间戳（1590065877s)
     * @param float $Value 当前时间返回参数取值，如（bigvCapFps在1590065877取值为0，则Value：0 ）
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
