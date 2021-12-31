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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 周期时间点信息。
 *
 * @method integer getInterval() 获取间隔周期，单位ms
 * @method void setInterval(integer $Interval) 设置间隔周期，单位ms
 * @method integer getStartTime() 获取开始时间点，单位ms
 * @method void setStartTime(integer $StartTime) 设置开始时间点，单位ms
 */
class IntervalTime extends AbstractModel
{
    /**
     * @var integer 间隔周期，单位ms
     */
    public $Interval;

    /**
     * @var integer 开始时间点，单位ms
     */
    public $StartTime;

    /**
     * @param integer $Interval 间隔周期，单位ms
     * @param integer $StartTime 开始时间点，单位ms
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
