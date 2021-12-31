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
 * DescribeCDNUsageData请求参数结构体
 *
 * @method string getStartTime() 获取起始日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setStartTime(string $StartTime) 设置起始日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getEndTime() 获取结束日期，需大于开始日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setEndTime(string $EndTime) 设置结束日期，需大于开始日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getDataType() 获取CDN 统计数据类型，有效值：
<li>Flux：流量，单位为 byte。</li>
<li>Bandwidth：带宽，单位为 bps。</li>
 * @method void setDataType(string $DataType) 设置CDN 统计数据类型，有效值：
<li>Flux：流量，单位为 byte。</li>
<li>Bandwidth：带宽，单位为 bps。</li>
 * @method integer getDataInterval() 获取用量数据的时间粒度，单位：分钟，取值有：
<li>5：5 分钟粒度，返回指定查询时间内5分钟粒度的明细数据。</li>
<li>60：小时粒度，返回指定查询时间内1小时粒度的数据。</li>
<li>1440：天粒度，返回指定查询时间内1天粒度的数据。</li>
默认值为1440，返回天粒度的数据。
 * @method void setDataInterval(integer $DataInterval) 设置用量数据的时间粒度，单位：分钟，取值有：
<li>5：5 分钟粒度，返回指定查询时间内5分钟粒度的明细数据。</li>
<li>60：小时粒度，返回指定查询时间内1小时粒度的数据。</li>
<li>1440：天粒度，返回指定查询时间内1天粒度的数据。</li>
默认值为1440，返回天粒度的数据。
 * @method array getDomainNames() 获取域名列表。一次最多查询20个域名的用量数据。可以指定多个域名，查询这些域名叠加的用量数据。默认返回所有域名叠加的用量数据。
 * @method void setDomainNames(array $DomainNames) 设置域名列表。一次最多查询20个域名的用量数据。可以指定多个域名，查询这些域名叠加的用量数据。默认返回所有域名叠加的用量数据。
 * @method integer getSubAppId() 获取点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
当该字段为1时，表示以管理员身份查询所有子应用（含主应用）的用量合计，此时时间粒度只支持天粒度。
 * @method void setSubAppId(integer $SubAppId) 设置点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
当该字段为1时，表示以管理员身份查询所有子应用（含主应用）的用量合计，此时时间粒度只支持天粒度。
 */
class DescribeCDNUsageDataRequest extends AbstractModel
{
    /**
     * @var string 起始日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $StartTime;

    /**
     * @var string 结束日期，需大于开始日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $EndTime;

    /**
     * @var string CDN 统计数据类型，有效值：
<li>Flux：流量，单位为 byte。</li>
<li>Bandwidth：带宽，单位为 bps。</li>
     */
    public $DataType;

    /**
     * @var integer 用量数据的时间粒度，单位：分钟，取值有：
<li>5：5 分钟粒度，返回指定查询时间内5分钟粒度的明细数据。</li>
<li>60：小时粒度，返回指定查询时间内1小时粒度的数据。</li>
<li>1440：天粒度，返回指定查询时间内1天粒度的数据。</li>
默认值为1440，返回天粒度的数据。
     */
    public $DataInterval;

    /**
     * @var array 域名列表。一次最多查询20个域名的用量数据。可以指定多个域名，查询这些域名叠加的用量数据。默认返回所有域名叠加的用量数据。
     */
    public $DomainNames;

    /**
     * @var integer 点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
当该字段为1时，表示以管理员身份查询所有子应用（含主应用）的用量合计，此时时间粒度只支持天粒度。
     */
    public $SubAppId;

    /**
     * @param string $StartTime 起始日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $EndTime 结束日期，需大于开始日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $DataType CDN 统计数据类型，有效值：
<li>Flux：流量，单位为 byte。</li>
<li>Bandwidth：带宽，单位为 bps。</li>
     * @param integer $DataInterval 用量数据的时间粒度，单位：分钟，取值有：
<li>5：5 分钟粒度，返回指定查询时间内5分钟粒度的明细数据。</li>
<li>60：小时粒度，返回指定查询时间内1小时粒度的数据。</li>
<li>1440：天粒度，返回指定查询时间内1天粒度的数据。</li>
默认值为1440，返回天粒度的数据。
     * @param array $DomainNames 域名列表。一次最多查询20个域名的用量数据。可以指定多个域名，查询这些域名叠加的用量数据。默认返回所有域名叠加的用量数据。
     * @param integer $SubAppId 点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
当该字段为1时，表示以管理员身份查询所有子应用（含主应用）的用量合计，此时时间粒度只支持天粒度。
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

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("DataInterval",$param) and $param["DataInterval"] !== null) {
            $this->DataInterval = $param["DataInterval"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
