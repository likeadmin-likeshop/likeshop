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
 * DescribeBaradData请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method string getId() 获取资源实例ID
 * @method void setId(string $Id) 设置资源实例ID
 * @method string getMetricName() 获取指标名，取值：
connum表示TCP活跃连接数；
new_conn表示新建TCP连接数；
inactive_conn表示非活跃连接数;
intraffic表示入流量；
outtraffic表示出流量；
alltraffic表示出流量和入流量之和；
inpkg表示入包速率；
outpkg表示出包速率；
 * @method void setMetricName(string $MetricName) 设置指标名，取值：
connum表示TCP活跃连接数；
new_conn表示新建TCP连接数；
inactive_conn表示非活跃连接数;
intraffic表示入流量；
outtraffic表示出流量；
alltraffic表示出流量和入流量之和；
inpkg表示入包速率；
outpkg表示出包速率；
 * @method integer getPeriod() 获取统计时间粒度，单位秒（300表示5分钟；3600表示小时；86400表示天）
 * @method void setPeriod(integer $Period) 设置统计时间粒度，单位秒（300表示5分钟；3600表示小时；86400表示天）
 * @method string getStartTime() 获取统计开始时间，秒部分保持为0，分钟部分为5的倍数
 * @method void setStartTime(string $StartTime) 设置统计开始时间，秒部分保持为0，分钟部分为5的倍数
 * @method string getEndTime() 获取统计结束时间，秒部分保持为0，分钟部分为5的倍数
 * @method void setEndTime(string $EndTime) 设置统计结束时间，秒部分保持为0，分钟部分为5的倍数
 * @method string getStatistics() 获取统计方式，取值：
max表示最大值；
min表示最小值；
avg表示均值；
 * @method void setStatistics(string $Statistics) 设置统计方式，取值：
max表示最大值；
min表示最小值；
avg表示均值；
 * @method array getProtocolPort() 获取协议端口数组
 * @method void setProtocolPort(array $ProtocolPort) 设置协议端口数组
 * @method string getIp() 获取资源实例下的IP，只有当Business=net(高防IP专业版)时才必须填写资源的一个IP（因为高防IP专业版资源实例有多个IP，才需要指定）；
 * @method void setIp(string $Ip) 设置资源实例下的IP，只有当Business=net(高防IP专业版)时才必须填写资源的一个IP（因为高防IP专业版资源实例有多个IP，才需要指定）；
 */
class DescribeBaradDataRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 资源实例ID
     */
    public $Id;

    /**
     * @var string 指标名，取值：
connum表示TCP活跃连接数；
new_conn表示新建TCP连接数；
inactive_conn表示非活跃连接数;
intraffic表示入流量；
outtraffic表示出流量；
alltraffic表示出流量和入流量之和；
inpkg表示入包速率；
outpkg表示出包速率；
     */
    public $MetricName;

    /**
     * @var integer 统计时间粒度，单位秒（300表示5分钟；3600表示小时；86400表示天）
     */
    public $Period;

    /**
     * @var string 统计开始时间，秒部分保持为0，分钟部分为5的倍数
     */
    public $StartTime;

    /**
     * @var string 统计结束时间，秒部分保持为0，分钟部分为5的倍数
     */
    public $EndTime;

    /**
     * @var string 统计方式，取值：
max表示最大值；
min表示最小值；
avg表示均值；
     */
    public $Statistics;

    /**
     * @var array 协议端口数组
     */
    public $ProtocolPort;

    /**
     * @var string 资源实例下的IP，只有当Business=net(高防IP专业版)时才必须填写资源的一个IP（因为高防IP专业版资源实例有多个IP，才需要指定）；
     */
    public $Ip;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
     * @param string $Id 资源实例ID
     * @param string $MetricName 指标名，取值：
connum表示TCP活跃连接数；
new_conn表示新建TCP连接数；
inactive_conn表示非活跃连接数;
intraffic表示入流量；
outtraffic表示出流量；
alltraffic表示出流量和入流量之和；
inpkg表示入包速率；
outpkg表示出包速率；
     * @param integer $Period 统计时间粒度，单位秒（300表示5分钟；3600表示小时；86400表示天）
     * @param string $StartTime 统计开始时间，秒部分保持为0，分钟部分为5的倍数
     * @param string $EndTime 统计结束时间，秒部分保持为0，分钟部分为5的倍数
     * @param string $Statistics 统计方式，取值：
max表示最大值；
min表示最小值；
avg表示均值；
     * @param array $ProtocolPort 协议端口数组
     * @param string $Ip 资源实例下的IP，只有当Business=net(高防IP专业版)时才必须填写资源的一个IP（因为高防IP专业版资源实例有多个IP，才需要指定）；
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = $param["Statistics"];
        }

        if (array_key_exists("ProtocolPort",$param) and $param["ProtocolPort"] !== null) {
            $this->ProtocolPort = [];
            foreach ($param["ProtocolPort"] as $key => $value){
                $obj = new ProtocolPort();
                $obj->deserialize($value);
                array_push($this->ProtocolPort, $obj);
            }
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}
