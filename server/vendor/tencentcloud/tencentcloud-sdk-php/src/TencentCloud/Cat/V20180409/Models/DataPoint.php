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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时延等数据，数据点
 *
 * @method string getLogTime() 获取数据点的时间
 * @method void setLogTime(string $LogTime) 设置数据点的时间
 * @method float getMetricValue() 获取数据值
 * @method void setMetricValue(float $MetricValue) 设置数据值
 */
class DataPoint extends AbstractModel
{
    /**
     * @var string 数据点的时间
     */
    public $LogTime;

    /**
     * @var float 数据值
     */
    public $MetricValue;

    /**
     * @param string $LogTime 数据点的时间
     * @param float $MetricValue 数据值
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
        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("MetricValue",$param) and $param["MetricValue"] !== null) {
            $this->MetricValue = $param["MetricValue"];
        }
    }
}
