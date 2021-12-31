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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProvinceIspPlayInfoList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间点，当前使用北京时间，
例：2019-02-21 10:00:00。
 * @method void setStartTime(string $StartTime) 设置起始时间点，当前使用北京时间，
例：2019-02-21 10:00:00。
 * @method string getEndTime() 获取结束时间点，当前使用北京时间，
例：2019-02-21 12:00:00。
注：EndTime 和 StartTime 只支持最近1天的数据查询。
 * @method void setEndTime(string $EndTime) 设置结束时间点，当前使用北京时间，
例：2019-02-21 12:00:00。
注：EndTime 和 StartTime 只支持最近1天的数据查询。
 * @method integer getGranularity() 获取支持如下粒度：
1：1分钟粒度（跨度不支持超过1天）
 * @method void setGranularity(integer $Granularity) 设置支持如下粒度：
1：1分钟粒度（跨度不支持超过1天）
 * @method string getStatType() 获取统计指标类型：
“Bandwidth”：带宽
“FluxPerSecond”：平均流量
“Flux”：流量
“Request”：请求数
“Online”：并发连接数
 * @method void setStatType(string $StatType) 设置统计指标类型：
“Bandwidth”：带宽
“FluxPerSecond”：平均流量
“Flux”：流量
“Request”：请求数
“Online”：并发连接数
 * @method array getPlayDomains() 获取播放域名列表。
 * @method void setPlayDomains(array $PlayDomains) 设置播放域名列表。
 * @method array getProvinceNames() 获取要查询的省份（地区）英文名称列表，如 Beijing。
 * @method void setProvinceNames(array $ProvinceNames) 设置要查询的省份（地区）英文名称列表，如 Beijing。
 * @method array getIspNames() 获取要查询的运营商英文名称列表，如 China Mobile ，如果为空，查询所有运营商的数据。
 * @method void setIspNames(array $IspNames) 设置要查询的运营商英文名称列表，如 China Mobile ，如果为空，查询所有运营商的数据。
 * @method string getMainlandOrOversea() 获取地域，可选值：Mainland，Oversea，China，Foreign，Global（默认值）；如果为空，查询总的数据；如果为“Mainland”，查询中国大陆的数据；如果为“Oversea”，则查询中国大陆以外的数据；如果为China，查询中国的数据（包括港澳台）；如果为Foreign，查询国外的数据（不包括港澳台）。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置地域，可选值：Mainland，Oversea，China，Foreign，Global（默认值）；如果为空，查询总的数据；如果为“Mainland”，查询中国大陆的数据；如果为“Oversea”，则查询中国大陆以外的数据；如果为China，查询中国的数据（包括港澳台）；如果为Foreign，查询国外的数据（不包括港澳台）。
 * @method string getIpType() 获取ip类型：
“Ipv6”：Ipv6数据
如果为空，查询总的数据；
 * @method void setIpType(string $IpType) 设置ip类型：
“Ipv6”：Ipv6数据
如果为空，查询总的数据；
 */
class DescribeProvinceIspPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，当前使用北京时间，
例：2019-02-21 10:00:00。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，当前使用北京时间，
例：2019-02-21 12:00:00。
注：EndTime 和 StartTime 只支持最近1天的数据查询。
     */
    public $EndTime;

    /**
     * @var integer 支持如下粒度：
1：1分钟粒度（跨度不支持超过1天）
     */
    public $Granularity;

    /**
     * @var string 统计指标类型：
“Bandwidth”：带宽
“FluxPerSecond”：平均流量
“Flux”：流量
“Request”：请求数
“Online”：并发连接数
     */
    public $StatType;

    /**
     * @var array 播放域名列表。
     */
    public $PlayDomains;

    /**
     * @var array 要查询的省份（地区）英文名称列表，如 Beijing。
     */
    public $ProvinceNames;

    /**
     * @var array 要查询的运营商英文名称列表，如 China Mobile ，如果为空，查询所有运营商的数据。
     */
    public $IspNames;

    /**
     * @var string 地域，可选值：Mainland，Oversea，China，Foreign，Global（默认值）；如果为空，查询总的数据；如果为“Mainland”，查询中国大陆的数据；如果为“Oversea”，则查询中国大陆以外的数据；如果为China，查询中国的数据（包括港澳台）；如果为Foreign，查询国外的数据（不包括港澳台）。
     */
    public $MainlandOrOversea;

    /**
     * @var string ip类型：
“Ipv6”：Ipv6数据
如果为空，查询总的数据；
     */
    public $IpType;

    /**
     * @param string $StartTime 起始时间点，当前使用北京时间，
例：2019-02-21 10:00:00。
     * @param string $EndTime 结束时间点，当前使用北京时间，
例：2019-02-21 12:00:00。
注：EndTime 和 StartTime 只支持最近1天的数据查询。
     * @param integer $Granularity 支持如下粒度：
1：1分钟粒度（跨度不支持超过1天）
     * @param string $StatType 统计指标类型：
“Bandwidth”：带宽
“FluxPerSecond”：平均流量
“Flux”：流量
“Request”：请求数
“Online”：并发连接数
     * @param array $PlayDomains 播放域名列表。
     * @param array $ProvinceNames 要查询的省份（地区）英文名称列表，如 Beijing。
     * @param array $IspNames 要查询的运营商英文名称列表，如 China Mobile ，如果为空，查询所有运营商的数据。
     * @param string $MainlandOrOversea 地域，可选值：Mainland，Oversea，China，Foreign，Global（默认值）；如果为空，查询总的数据；如果为“Mainland”，查询中国大陆的数据；如果为“Oversea”，则查询中国大陆以外的数据；如果为China，查询中国的数据（包括港澳台）；如果为Foreign，查询国外的数据（不包括港澳台）。
     * @param string $IpType ip类型：
“Ipv6”：Ipv6数据
如果为空，查询总的数据；
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

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("ProvinceNames",$param) and $param["ProvinceNames"] !== null) {
            $this->ProvinceNames = $param["ProvinceNames"];
        }

        if (array_key_exists("IspNames",$param) and $param["IspNames"] !== null) {
            $this->IspNames = $param["IspNames"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            $this->IpType = $param["IpType"];
        }
    }
}
