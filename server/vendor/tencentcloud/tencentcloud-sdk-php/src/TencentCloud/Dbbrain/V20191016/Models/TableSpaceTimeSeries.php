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
 * 库表空间时序数据
 *
 * @method string getTableName() 获取表名。
 * @method void setTableName(string $TableName) 设置表名。
 * @method string getTableSchema() 获取库名。
 * @method void setTableSchema(string $TableSchema) 设置库名。
 * @method string getEngine() 获取库表的存储引擎。
 * @method void setEngine(string $Engine) 设置库表的存储引擎。
 * @method MonitorFloatMetricSeriesData getSeriesData() 获取单位时间间隔内的空间指标数据。
 * @method void setSeriesData(MonitorFloatMetricSeriesData $SeriesData) 设置单位时间间隔内的空间指标数据。
 */
class TableSpaceTimeSeries extends AbstractModel
{
    /**
     * @var string 表名。
     */
    public $TableName;

    /**
     * @var string 库名。
     */
    public $TableSchema;

    /**
     * @var string 库表的存储引擎。
     */
    public $Engine;

    /**
     * @var MonitorFloatMetricSeriesData 单位时间间隔内的空间指标数据。
     */
    public $SeriesData;

    /**
     * @param string $TableName 表名。
     * @param string $TableSchema 库名。
     * @param string $Engine 库表的存储引擎。
     * @param MonitorFloatMetricSeriesData $SeriesData 单位时间间隔内的空间指标数据。
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("SeriesData",$param) and $param["SeriesData"] !== null) {
            $this->SeriesData = new MonitorFloatMetricSeriesData();
            $this->SeriesData->deserialize($param["SeriesData"]);
        }
    }
}
