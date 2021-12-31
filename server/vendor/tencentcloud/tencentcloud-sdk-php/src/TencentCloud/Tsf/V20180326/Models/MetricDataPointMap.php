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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控统计数据点Map集合（单元化网关使用）
 *
 * @method array getSumReqAmount() 获取总调用次数监控数据点集合
 * @method void setSumReqAmount(array $SumReqAmount) 设置总调用次数监控数据点集合
 * @method array getAvgFailureRate() 获取平均错误率监控数据点集合
 * @method void setAvgFailureRate(array $AvgFailureRate) 设置平均错误率监控数据点集合
 * @method array getAvgTimeCost() 获取平均响应时间监控数据点集合
 * @method void setAvgTimeCost(array $AvgTimeCost) 设置平均响应时间监控数据点集合
 */
class MetricDataPointMap extends AbstractModel
{
    /**
     * @var array 总调用次数监控数据点集合
     */
    public $SumReqAmount;

    /**
     * @var array 平均错误率监控数据点集合
     */
    public $AvgFailureRate;

    /**
     * @var array 平均响应时间监控数据点集合
     */
    public $AvgTimeCost;

    /**
     * @param array $SumReqAmount 总调用次数监控数据点集合
     * @param array $AvgFailureRate 平均错误率监控数据点集合
     * @param array $AvgTimeCost 平均响应时间监控数据点集合
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
        if (array_key_exists("SumReqAmount",$param) and $param["SumReqAmount"] !== null) {
            $this->SumReqAmount = [];
            foreach ($param["SumReqAmount"] as $key => $value){
                $obj = new MetricDataPoint();
                $obj->deserialize($value);
                array_push($this->SumReqAmount, $obj);
            }
        }

        if (array_key_exists("AvgFailureRate",$param) and $param["AvgFailureRate"] !== null) {
            $this->AvgFailureRate = [];
            foreach ($param["AvgFailureRate"] as $key => $value){
                $obj = new MetricDataPoint();
                $obj->deserialize($value);
                array_push($this->AvgFailureRate, $obj);
            }
        }

        if (array_key_exists("AvgTimeCost",$param) and $param["AvgTimeCost"] !== null) {
            $this->AvgTimeCost = [];
            foreach ($param["AvgTimeCost"] as $key => $value){
                $obj = new MetricDataPoint();
                $obj->deserialize($value);
                array_push($this->AvgTimeCost, $obj);
            }
        }
    }
}
