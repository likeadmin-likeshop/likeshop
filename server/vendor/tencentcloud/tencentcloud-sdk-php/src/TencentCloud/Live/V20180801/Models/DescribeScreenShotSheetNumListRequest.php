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
 * DescribeScreenShotSheetNumList请求参数结构体
 *
 * @method string getStartTime() 获取utc起始时间，格式为yyyy-mm-ddTHH:MM:SSZ
 * @method void setStartTime(string $StartTime) 设置utc起始时间，格式为yyyy-mm-ddTHH:MM:SSZ
 * @method string getEndTime() 获取utc结束时间，格式为yyyy-mm-ddTHH:MM:SSZ，支持查询最近1年数据。
 * @method void setEndTime(string $EndTime) 设置utc结束时间，格式为yyyy-mm-ddTHH:MM:SSZ，支持查询最近1年数据。
 * @method string getZone() 获取地域信息，可选值包括Mainland，Oversea，前者是查询中国大陆范围内的数据，后者是除中国大陆范围之外的数据，若不传该参数，则查询所有地区的数据。
 * @method void setZone(string $Zone) 设置地域信息，可选值包括Mainland，Oversea，前者是查询中国大陆范围内的数据，后者是除中国大陆范围之外的数据，若不传该参数，则查询所有地区的数据。
 * @method array getPushDomains() 获取推流域名（支持查询2019年11 月1日之后的域名维度数据）。
 * @method void setPushDomains(array $PushDomains) 设置推流域名（支持查询2019年11 月1日之后的域名维度数据）。
 * @method string getGranularity() 获取数据维度，数据延迟1个半小时，可选值包括：1、Minute（5分钟粒度，最大支持查询时间范围是31天），2、Day（天粒度，默认值，最大支持查询时间范围是186天当天）。
 * @method void setGranularity(string $Granularity) 设置数据维度，数据延迟1个半小时，可选值包括：1、Minute（5分钟粒度，最大支持查询时间范围是31天），2、Day（天粒度，默认值，最大支持查询时间范围是186天当天）。
 */
class DescribeScreenShotSheetNumListRequest extends AbstractModel
{
    /**
     * @var string utc起始时间，格式为yyyy-mm-ddTHH:MM:SSZ
     */
    public $StartTime;

    /**
     * @var string utc结束时间，格式为yyyy-mm-ddTHH:MM:SSZ，支持查询最近1年数据。
     */
    public $EndTime;

    /**
     * @var string 地域信息，可选值包括Mainland，Oversea，前者是查询中国大陆范围内的数据，后者是除中国大陆范围之外的数据，若不传该参数，则查询所有地区的数据。
     */
    public $Zone;

    /**
     * @var array 推流域名（支持查询2019年11 月1日之后的域名维度数据）。
     */
    public $PushDomains;

    /**
     * @var string 数据维度，数据延迟1个半小时，可选值包括：1、Minute（5分钟粒度，最大支持查询时间范围是31天），2、Day（天粒度，默认值，最大支持查询时间范围是186天当天）。
     */
    public $Granularity;

    /**
     * @param string $StartTime utc起始时间，格式为yyyy-mm-ddTHH:MM:SSZ
     * @param string $EndTime utc结束时间，格式为yyyy-mm-ddTHH:MM:SSZ，支持查询最近1年数据。
     * @param string $Zone 地域信息，可选值包括Mainland，Oversea，前者是查询中国大陆范围内的数据，后者是除中国大陆范围之外的数据，若不传该参数，则查询所有地区的数据。
     * @param array $PushDomains 推流域名（支持查询2019年11 月1日之后的域名维度数据）。
     * @param string $Granularity 数据维度，数据延迟1个半小时，可选值包括：1、Minute（5分钟粒度，最大支持查询时间范围是31天），2、Day（天粒度，默认值，最大支持查询时间范围是186天当天）。
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
