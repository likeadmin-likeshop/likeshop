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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEcdnDomainStatistics请求参数结构体
 *
 * @method string getStartTime() 获取查询起始时间，如：2019-12-13 00:00:00。
起止时间不超过90天。
 * @method void setStartTime(string $StartTime) 设置查询起始时间，如：2019-12-13 00:00:00。
起止时间不超过90天。
 * @method string getEndTime() 获取查询结束时间，如：2019-12-13 23:59:59。
起止时间不超过90天。
 * @method void setEndTime(string $EndTime) 设置查询结束时间，如：2019-12-13 23:59:59。
起止时间不超过90天。
 * @method array getMetrics() 获取统计指标名称:
flux：流量，单位为 byte
bandwidth：带宽，单位为 bps
request：请求数，单位为 次
 * @method void setMetrics(array $Metrics) 设置统计指标名称:
flux：流量，单位为 byte
bandwidth：带宽，单位为 bps
request：请求数，单位为 次
 * @method array getDomains() 获取指定查询域名列表
 * @method void setDomains(array $Domains) 设置指定查询域名列表
 * @method array getProjects() 获取指定要查询的项目 ID，[前往查看项目 ID](https://console.cloud.tencent.com/project)
未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
 * @method void setProjects(array $Projects) 设置指定要查询的项目 ID，[前往查看项目 ID](https://console.cloud.tencent.com/project)
未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
 * @method integer getOffset() 获取列表分页起始地址，默认0。
 * @method void setOffset(integer $Offset) 设置列表分页起始地址，默认0。
 * @method integer getLimit() 获取列表分页记录条数，默认1000，最大3000。
 * @method void setLimit(integer $Limit) 设置列表分页记录条数，默认1000，最大3000。
 * @method string getArea() 获取统计区域:
mainland: 境内
oversea: 境外
global: 全部
默认 global
 * @method void setArea(string $Area) 设置统计区域:
mainland: 境内
oversea: 境外
global: 全部
默认 global
 */
class DescribeEcdnDomainStatisticsRequest extends AbstractModel
{
    /**
     * @var string 查询起始时间，如：2019-12-13 00:00:00。
起止时间不超过90天。
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，如：2019-12-13 23:59:59。
起止时间不超过90天。
     */
    public $EndTime;

    /**
     * @var array 统计指标名称:
flux：流量，单位为 byte
bandwidth：带宽，单位为 bps
request：请求数，单位为 次
     */
    public $Metrics;

    /**
     * @var array 指定查询域名列表
     */
    public $Domains;

    /**
     * @var array 指定要查询的项目 ID，[前往查看项目 ID](https://console.cloud.tencent.com/project)
未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
     */
    public $Projects;

    /**
     * @var integer 列表分页起始地址，默认0。
     */
    public $Offset;

    /**
     * @var integer 列表分页记录条数，默认1000，最大3000。
     */
    public $Limit;

    /**
     * @var string 统计区域:
mainland: 境内
oversea: 境外
global: 全部
默认 global
     */
    public $Area;

    /**
     * @param string $StartTime 查询起始时间，如：2019-12-13 00:00:00。
起止时间不超过90天。
     * @param string $EndTime 查询结束时间，如：2019-12-13 23:59:59。
起止时间不超过90天。
     * @param array $Metrics 统计指标名称:
flux：流量，单位为 byte
bandwidth：带宽，单位为 bps
request：请求数，单位为 次
     * @param array $Domains 指定查询域名列表
     * @param array $Projects 指定要查询的项目 ID，[前往查看项目 ID](https://console.cloud.tencent.com/project)
未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
     * @param integer $Offset 列表分页起始地址，默认0。
     * @param integer $Limit 列表分页记录条数，默认1000，最大3000。
     * @param string $Area 统计区域:
mainland: 境内
oversea: 境外
global: 全部
默认 global
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Projects",$param) and $param["Projects"] !== null) {
            $this->Projects = $param["Projects"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
