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
 * 单元化API使用详情统计对象列表
 *
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getSumReqAmount() 获取该API在该命名空间下的总调用次数
 * @method void setSumReqAmount(string $SumReqAmount) 设置该API在该命名空间下的总调用次数
 * @method string getAvgFailureRate() 获取该API在该命名空间下的平均错误率
 * @method void setAvgFailureRate(string $AvgFailureRate) 设置该API在该命名空间下的平均错误率
 * @method string getAvgTimeCost() 获取该API在该命名空间下的平均响应时间
 * @method void setAvgTimeCost(string $AvgTimeCost) 设置该API在该命名空间下的平均响应时间
 * @method MetricDataPointMap getMetricDataPointMap() 获取监控数据曲线点位图Map集合
 * @method void setMetricDataPointMap(MetricDataPointMap $MetricDataPointMap) 设置监控数据曲线点位图Map集合
 * @method array getTopStatusCode() 获取状态码分布详情
 * @method void setTopStatusCode(array $TopStatusCode) 设置状态码分布详情
 * @method array getTopTimeCost() 获取耗时分布详情
 * @method void setTopTimeCost(array $TopTimeCost) 设置耗时分布详情
 * @method QuantileEntity getQuantile() 获取分位值对象
 * @method void setQuantile(QuantileEntity $Quantile) 设置分位值对象
 */
class GroupUnitApiDailyUseStatistics extends AbstractModel
{
    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 该API在该命名空间下的总调用次数
     */
    public $SumReqAmount;

    /**
     * @var string 该API在该命名空间下的平均错误率
     */
    public $AvgFailureRate;

    /**
     * @var string 该API在该命名空间下的平均响应时间
     */
    public $AvgTimeCost;

    /**
     * @var MetricDataPointMap 监控数据曲线点位图Map集合
     */
    public $MetricDataPointMap;

    /**
     * @var array 状态码分布详情
     */
    public $TopStatusCode;

    /**
     * @var array 耗时分布详情
     */
    public $TopTimeCost;

    /**
     * @var QuantileEntity 分位值对象
     */
    public $Quantile;

    /**
     * @param string $NamespaceId 命名空间ID
     * @param string $NamespaceName 命名空间名称
     * @param string $SumReqAmount 该API在该命名空间下的总调用次数
     * @param string $AvgFailureRate 该API在该命名空间下的平均错误率
     * @param string $AvgTimeCost 该API在该命名空间下的平均响应时间
     * @param MetricDataPointMap $MetricDataPointMap 监控数据曲线点位图Map集合
     * @param array $TopStatusCode 状态码分布详情
     * @param array $TopTimeCost 耗时分布详情
     * @param QuantileEntity $Quantile 分位值对象
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("SumReqAmount",$param) and $param["SumReqAmount"] !== null) {
            $this->SumReqAmount = $param["SumReqAmount"];
        }

        if (array_key_exists("AvgFailureRate",$param) and $param["AvgFailureRate"] !== null) {
            $this->AvgFailureRate = $param["AvgFailureRate"];
        }

        if (array_key_exists("AvgTimeCost",$param) and $param["AvgTimeCost"] !== null) {
            $this->AvgTimeCost = $param["AvgTimeCost"];
        }

        if (array_key_exists("MetricDataPointMap",$param) and $param["MetricDataPointMap"] !== null) {
            $this->MetricDataPointMap = new MetricDataPointMap();
            $this->MetricDataPointMap->deserialize($param["MetricDataPointMap"]);
        }

        if (array_key_exists("TopStatusCode",$param) and $param["TopStatusCode"] !== null) {
            $this->TopStatusCode = [];
            foreach ($param["TopStatusCode"] as $key => $value){
                $obj = new ApiUseStatisticsEntity();
                $obj->deserialize($value);
                array_push($this->TopStatusCode, $obj);
            }
        }

        if (array_key_exists("TopTimeCost",$param) and $param["TopTimeCost"] !== null) {
            $this->TopTimeCost = [];
            foreach ($param["TopTimeCost"] as $key => $value){
                $obj = new ApiUseStatisticsEntity();
                $obj->deserialize($value);
                array_push($this->TopTimeCost, $obj);
            }
        }

        if (array_key_exists("Quantile",$param) and $param["Quantile"] !== null) {
            $this->Quantile = new QuantileEntity();
            $this->Quantile->deserialize($param["Quantile"]);
        }
    }
}
