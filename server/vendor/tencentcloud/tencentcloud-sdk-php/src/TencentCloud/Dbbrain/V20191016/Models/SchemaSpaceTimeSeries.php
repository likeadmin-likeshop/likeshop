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
 * 库空间时序数据
 *
 * @method string getTableSchema() 获取库名
 * @method void setTableSchema(string $TableSchema) 设置库名
 * @method MonitorMetricSeriesData getSeriesData() 获取单位时间间隔内的空间指标数据。
 * @method void setSeriesData(MonitorMetricSeriesData $SeriesData) 设置单位时间间隔内的空间指标数据。
 */
class SchemaSpaceTimeSeries extends AbstractModel
{
    /**
     * @var string 库名
     */
    public $TableSchema;

    /**
     * @var MonitorMetricSeriesData 单位时间间隔内的空间指标数据。
     */
    public $SeriesData;

    /**
     * @param string $TableSchema 库名
     * @param MonitorMetricSeriesData $SeriesData 单位时间间隔内的空间指标数据。
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
        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("SeriesData",$param) and $param["SeriesData"] !== null) {
            $this->SeriesData = new MonitorMetricSeriesData();
            $this->SeriesData->deserialize($param["SeriesData"]);
        }
    }
}
