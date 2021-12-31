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
 * DescribeLiveStreamPublishedList请求参数结构体
 *
 * @method string getDomainName() 获取您的推流域名。
 * @method void setDomainName(string $DomainName) 设置您的推流域名。
 * @method string getEndTime() 获取结束时间。
UTC 格式，例如：2016-06-30T19:00:00Z。
不超过当前时间。
注意：EndTime和StartTime相差不可超过30天。
 * @method void setEndTime(string $EndTime) 设置结束时间。
UTC 格式，例如：2016-06-30T19:00:00Z。
不超过当前时间。
注意：EndTime和StartTime相差不可超过30天。
 * @method string getStartTime() 获取起始时间。 
UTC 格式，例如：2016-06-29T19:00:00Z。
最长支持查询60天内数据。
 * @method void setStartTime(string $StartTime) 设置起始时间。 
UTC 格式，例如：2016-06-29T19:00:00Z。
最长支持查询60天内数据。
 * @method string getAppName() 获取推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。不支持模糊匹配。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。不支持模糊匹配。
 * @method integer getPageNum() 获取取得第几页。
默认值：1。
 * @method void setPageNum(integer $PageNum) 设置取得第几页。
默认值：1。
 * @method integer getPageSize() 获取分页大小。
最大值：100。
取值范围：10~100 之前的任意整数。
默认值：10。
 * @method void setPageSize(integer $PageSize) 设置分页大小。
最大值：100。
取值范围：10~100 之前的任意整数。
默认值：10。
 * @method string getStreamName() 获取流名称，支持模糊匹配。
 * @method void setStreamName(string $StreamName) 设置流名称，支持模糊匹配。
 */
class DescribeLiveStreamPublishedListRequest extends AbstractModel
{
    /**
     * @var string 您的推流域名。
     */
    public $DomainName;

    /**
     * @var string 结束时间。
UTC 格式，例如：2016-06-30T19:00:00Z。
不超过当前时间。
注意：EndTime和StartTime相差不可超过30天。
     */
    public $EndTime;

    /**
     * @var string 起始时间。 
UTC 格式，例如：2016-06-29T19:00:00Z。
最长支持查询60天内数据。
     */
    public $StartTime;

    /**
     * @var string 推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。不支持模糊匹配。
     */
    public $AppName;

    /**
     * @var integer 取得第几页。
默认值：1。
     */
    public $PageNum;

    /**
     * @var integer 分页大小。
最大值：100。
取值范围：10~100 之前的任意整数。
默认值：10。
     */
    public $PageSize;

    /**
     * @var string 流名称，支持模糊匹配。
     */
    public $StreamName;

    /**
     * @param string $DomainName 您的推流域名。
     * @param string $EndTime 结束时间。
UTC 格式，例如：2016-06-30T19:00:00Z。
不超过当前时间。
注意：EndTime和StartTime相差不可超过30天。
     * @param string $StartTime 起始时间。 
UTC 格式，例如：2016-06-29T19:00:00Z。
最长支持查询60天内数据。
     * @param string $AppName 推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。不支持模糊匹配。
     * @param integer $PageNum 取得第几页。
默认值：1。
     * @param integer $PageSize 分页大小。
最大值：100。
取值范围：10~100 之前的任意整数。
默认值：10。
     * @param string $StreamName 流名称，支持模糊匹配。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
