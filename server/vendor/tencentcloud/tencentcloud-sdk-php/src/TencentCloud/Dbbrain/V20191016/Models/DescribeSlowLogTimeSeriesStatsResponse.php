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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogTimeSeriesStats返回参数结构体
 *
 * @method integer getPeriod() 获取柱间单位时间间隔，单位为秒。
 * @method void setPeriod(integer $Period) 设置柱间单位时间间隔，单位为秒。
 * @method array getTimeSeries() 获取单位时间间隔内慢日志数量统计。
 * @method void setTimeSeries(array $TimeSeries) 设置单位时间间隔内慢日志数量统计。
 * @method MonitorMetricSeriesData getSeriesData() 获取单位时间间隔内的实例 cpu 利用率监控数据。
 * @method void setSeriesData(MonitorMetricSeriesData $SeriesData) 设置单位时间间隔内的实例 cpu 利用率监控数据。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSlowLogTimeSeriesStatsResponse extends AbstractModel
{
    /**
     * @var integer 柱间单位时间间隔，单位为秒。
     */
    public $Period;

    /**
     * @var array 单位时间间隔内慢日志数量统计。
     */
    public $TimeSeries;

    /**
     * @var MonitorMetricSeriesData 单位时间间隔内的实例 cpu 利用率监控数据。
     */
    public $SeriesData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Period 柱间单位时间间隔，单位为秒。
     * @param array $TimeSeries 单位时间间隔内慢日志数量统计。
     * @param MonitorMetricSeriesData $SeriesData 单位时间间隔内的实例 cpu 利用率监控数据。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("TimeSeries",$param) and $param["TimeSeries"] !== null) {
            $this->TimeSeries = [];
            foreach ($param["TimeSeries"] as $key => $value){
                $obj = new TimeSlice();
                $obj->deserialize($value);
                array_push($this->TimeSeries, $obj);
            }
        }

        if (array_key_exists("SeriesData",$param) and $param["SeriesData"] !== null) {
            $this->SeriesData = new MonitorMetricSeriesData();
            $this->SeriesData->deserialize($param["SeriesData"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
