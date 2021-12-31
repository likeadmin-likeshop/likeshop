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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSTrend请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
 * @method string getIp() 获取资源实例的IP
 * @method void setIp(string $Ip) 设置资源实例的IP
 * @method string getMetricName() 获取指标，取值[bps(攻击流量带宽，pps(攻击包速率))]
 * @method void setMetricName(string $MetricName) 设置指标，取值[bps(攻击流量带宽，pps(攻击包速率))]
 * @method integer getPeriod() 获取统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
 * @method void setPeriod(integer $Period) 设置统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
 * @method string getStartTime() 获取统计开始时间
 * @method void setStartTime(string $StartTime) 设置统计开始时间
 * @method string getEndTime() 获取统计结束时间
 * @method void setEndTime(string $EndTime) 设置统计结束时间
 * @method string getId() 获取资源实例ID，当Business为basic时，此字段不用填写（因为基础防护没有资源实例）
 * @method void setId(string $Id) 设置资源实例ID，当Business为basic时，此字段不用填写（因为基础防护没有资源实例）
 */
class DescribeDDoSTrendRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
     */
    public $Business;

    /**
     * @var string 资源实例的IP
     */
    public $Ip;

    /**
     * @var string 指标，取值[bps(攻击流量带宽，pps(攻击包速率))]
     */
    public $MetricName;

    /**
     * @var integer 统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
     */
    public $Period;

    /**
     * @var string 统计开始时间
     */
    public $StartTime;

    /**
     * @var string 统计结束时间
     */
    public $EndTime;

    /**
     * @var string 资源实例ID，当Business为basic时，此字段不用填写（因为基础防护没有资源实例）
     */
    public $Id;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
     * @param string $Ip 资源实例的IP
     * @param string $MetricName 指标，取值[bps(攻击流量带宽，pps(攻击包速率))]
     * @param integer $Period 统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
     * @param string $StartTime 统计开始时间
     * @param string $EndTime 统计结束时间
     * @param string $Id 资源实例ID，当Business为basic时，此字段不用填写（因为基础防护没有资源实例）
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
