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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDailyMostPlayedStat请求参数结构体
 *
 * @method string getDate() 获取查询日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。该参数仅日期部分有效。
 * @method void setDate(string $Date) 设置查询日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。该参数仅日期部分有效。
 * @method string getDomainName() 获取域名。查询该域名播放 Top100 的媒体文件的统计数据。默认查询所有域名的播放统计数据。
 * @method void setDomainName(string $DomainName) 设置域名。查询该域名播放 Top100 的媒体文件的统计数据。默认查询所有域名的播放统计数据。
 * @method string getMetric() 获取Top 数据的统计指标，取值有：
<li>Traffic：播放流量，按播放流量统计 Top100 的数据。</li>
<li>PlayTimes：播放次数，按播放次数统计播放 Top100 的数据。</li>
 * @method void setMetric(string $Metric) 设置Top 数据的统计指标，取值有：
<li>Traffic：播放流量，按播放流量统计 Top100 的数据。</li>
<li>PlayTimes：播放次数，按播放次数统计播放 Top100 的数据。</li>
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class DescribeDailyMostPlayedStatRequest extends AbstractModel
{
    /**
     * @var string 查询日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。该参数仅日期部分有效。
     */
    public $Date;

    /**
     * @var string 域名。查询该域名播放 Top100 的媒体文件的统计数据。默认查询所有域名的播放统计数据。
     */
    public $DomainName;

    /**
     * @var string Top 数据的统计指标，取值有：
<li>Traffic：播放流量，按播放流量统计 Top100 的数据。</li>
<li>PlayTimes：播放次数，按播放次数统计播放 Top100 的数据。</li>
     */
    public $Metric;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param string $Date 查询日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。该参数仅日期部分有效。
     * @param string $DomainName 域名。查询该域名播放 Top100 的媒体文件的统计数据。默认查询所有域名的播放统计数据。
     * @param string $Metric Top 数据的统计指标，取值有：
<li>Traffic：播放流量，按播放流量统计 Top100 的数据。</li>
<li>PlayTimes：播放次数，按播放次数统计播放 Top100 的数据。</li>
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
