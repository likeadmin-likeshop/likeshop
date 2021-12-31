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
 * DescribeStreamDayPlayInfoList请求参数结构体
 *
 * @method string getDayTime() 获取日期，格式：YYYY-mm-dd。
第二天凌晨3点出昨天的数据，建议在这个时间点之后查询最新数据。支持最近3个月的数据查询。
 * @method void setDayTime(string $DayTime) 设置日期，格式：YYYY-mm-dd。
第二天凌晨3点出昨天的数据，建议在这个时间点之后查询最新数据。支持最近3个月的数据查询。
 * @method string getPlayDomain() 获取播放域名。
 * @method void setPlayDomain(string $PlayDomain) 设置播放域名。
 * @method integer getPageNum() 获取页号，范围[1,1000]，默认值是1。
 * @method void setPageNum(integer $PageNum) 设置页号，范围[1,1000]，默认值是1。
 * @method integer getPageSize() 获取每页个数，范围[100,1000]，默认值是1000。
 * @method void setPageSize(integer $PageSize) 设置每页个数，范围[100,1000]，默认值是1000。
 * @method string getMainlandOrOversea() 获取可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据，
默认：查询国内+国外的数据。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据，
默认：查询国内+国外的数据。
 * @method string getServiceName() 获取服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。
 * @method void setServiceName(string $ServiceName) 设置服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。
 */
class DescribeStreamDayPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string 日期，格式：YYYY-mm-dd。
第二天凌晨3点出昨天的数据，建议在这个时间点之后查询最新数据。支持最近3个月的数据查询。
     */
    public $DayTime;

    /**
     * @var string 播放域名。
     */
    public $PlayDomain;

    /**
     * @var integer 页号，范围[1,1000]，默认值是1。
     */
    public $PageNum;

    /**
     * @var integer 每页个数，范围[100,1000]，默认值是1000。
     */
    public $PageSize;

    /**
     * @var string 可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据，
默认：查询国内+国外的数据。
     */
    public $MainlandOrOversea;

    /**
     * @var string 服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。
     */
    public $ServiceName;

    /**
     * @param string $DayTime 日期，格式：YYYY-mm-dd。
第二天凌晨3点出昨天的数据，建议在这个时间点之后查询最新数据。支持最近3个月的数据查询。
     * @param string $PlayDomain 播放域名。
     * @param integer $PageNum 页号，范围[1,1000]，默认值是1。
     * @param integer $PageSize 每页个数，范围[100,1000]，默认值是1000。
     * @param string $MainlandOrOversea 可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据，
默认：查询国内+国外的数据。
     * @param string $ServiceName 服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。
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
        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
