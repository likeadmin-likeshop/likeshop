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
 * DescribeVisitTopSumInfoList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method void setStartTime(string $StartTime) 设置起始时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method string getEndTime() 获取结束时间点，格式为yyyy-mm-dd HH:MM:SS
时间跨度在(0,4小时]，支持最近1天数据查询。
 * @method void setEndTime(string $EndTime) 设置结束时间点，格式为yyyy-mm-dd HH:MM:SS
时间跨度在(0,4小时]，支持最近1天数据查询。
 * @method string getTopIndex() 获取峰值指标，可选值包括”Domain”，”StreamId”。
 * @method void setTopIndex(string $TopIndex) 设置峰值指标，可选值包括”Domain”，”StreamId”。
 * @method array getPlayDomains() 获取播放域名，默认为不填，表示求总体数据。
 * @method void setPlayDomains(array $PlayDomains) 设置播放域名，默认为不填，表示求总体数据。
 * @method integer getPageNum() 获取页号，
范围是[1,1000]，
默认值是1。
 * @method void setPageNum(integer $PageNum) 设置页号，
范围是[1,1000]，
默认值是1。
 * @method integer getPageSize() 获取每页个数，范围是[1,1000]，
默认值是20。
 * @method void setPageSize(integer $PageSize) 设置每页个数，范围是[1,1000]，
默认值是20。
 * @method string getOrderParam() 获取排序指标，可选值包括” AvgFluxPerSecond”，”TotalRequest”（默认）,“TotalFlux”。
 * @method void setOrderParam(string $OrderParam) 设置排序指标，可选值包括” AvgFluxPerSecond”，”TotalRequest”（默认）,“TotalFlux”。
 */
class DescribeVisitTopSumInfoListRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，格式为yyyy-mm-dd HH:MM:SS。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，格式为yyyy-mm-dd HH:MM:SS
时间跨度在(0,4小时]，支持最近1天数据查询。
     */
    public $EndTime;

    /**
     * @var string 峰值指标，可选值包括”Domain”，”StreamId”。
     */
    public $TopIndex;

    /**
     * @var array 播放域名，默认为不填，表示求总体数据。
     */
    public $PlayDomains;

    /**
     * @var integer 页号，
范围是[1,1000]，
默认值是1。
     */
    public $PageNum;

    /**
     * @var integer 每页个数，范围是[1,1000]，
默认值是20。
     */
    public $PageSize;

    /**
     * @var string 排序指标，可选值包括” AvgFluxPerSecond”，”TotalRequest”（默认）,“TotalFlux”。
     */
    public $OrderParam;

    /**
     * @param string $StartTime 起始时间点，格式为yyyy-mm-dd HH:MM:SS。
     * @param string $EndTime 结束时间点，格式为yyyy-mm-dd HH:MM:SS
时间跨度在(0,4小时]，支持最近1天数据查询。
     * @param string $TopIndex 峰值指标，可选值包括”Domain”，”StreamId”。
     * @param array $PlayDomains 播放域名，默认为不填，表示求总体数据。
     * @param integer $PageNum 页号，
范围是[1,1000]，
默认值是1。
     * @param integer $PageSize 每页个数，范围是[1,1000]，
默认值是20。
     * @param string $OrderParam 排序指标，可选值包括” AvgFluxPerSecond”，”TotalRequest”（默认）,“TotalFlux”。
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

        if (array_key_exists("TopIndex",$param) and $param["TopIndex"] !== null) {
            $this->TopIndex = $param["TopIndex"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderParam",$param) and $param["OrderParam"] !== null) {
            $this->OrderParam = $param["OrderParam"];
        }
    }
}
