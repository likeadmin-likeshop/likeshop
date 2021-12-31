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
 * 包含MetricName的DataPoint数据
 *
 * @method string getMetricName() 获取数据项
 * @method void setMetricName(string $MetricName) 设置数据项
 * @method array getPoints() 获取数据点的时间和值
 * @method void setPoints(array $Points) 设置数据点的时间和值
 */
class DataPointMetric extends AbstractModel
{
    /**
     * @var string 数据项
     */
    public $MetricName;

    /**
     * @var array 数据点的时间和值
     */
    public $Points;

    /**
     * @param string $MetricName 数据项
     * @param array $Points 数据点的时间和值
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new DataPoint();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }
    }
}
