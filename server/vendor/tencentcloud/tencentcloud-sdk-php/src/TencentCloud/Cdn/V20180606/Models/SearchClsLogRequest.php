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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchClsLog请求参数结构体
 *
 * @method string getLogsetId() 获取需要查询的日志集ID
 * @method void setLogsetId(string $LogsetId) 设置需要查询的日志集ID
 * @method string getTopicIds() 获取需要查询的日志主题ID组合，以逗号分隔
 * @method void setTopicIds(string $TopicIds) 设置需要查询的日志主题ID组合，以逗号分隔
 * @method string getStartTime() 获取需要查询的日志的起始时间，格式 YYYY-mm-dd HH:MM:SS
 * @method void setStartTime(string $StartTime) 设置需要查询的日志的起始时间，格式 YYYY-mm-dd HH:MM:SS
 * @method string getEndTime() 获取需要查询的日志的结束时间，格式 YYYY-mm-dd HH:MM:SS
 * @method void setEndTime(string $EndTime) 设置需要查询的日志的结束时间，格式 YYYY-mm-dd HH:MM:SS
 * @method integer getLimit() 获取单次要返回的日志条数，单次返回的最大条数为100
 * @method void setLimit(integer $Limit) 设置单次要返回的日志条数，单次返回的最大条数为100
 * @method string getChannel() 获取接入渠道，默认值为cdn
 * @method void setChannel(string $Channel) 设置接入渠道，默认值为cdn
 * @method string getQuery() 获取需要查询的内容，详情请参考https://cloud.tencent.com/document/product/614/16982
 * @method void setQuery(string $Query) 设置需要查询的内容，详情请参考https://cloud.tencent.com/document/product/614/16982
 * @method string getContext() 获取加载更多使用，透传上次返回的 context 值，获取后续的日志内容，通过游标最多可获取10000条，请尽可能缩小时间范围
 * @method void setContext(string $Context) 设置加载更多使用，透传上次返回的 context 值，获取后续的日志内容，通过游标最多可获取10000条，请尽可能缩小时间范围
 * @method string getSort() 获取按日志时间排序， asc（升序）或者 desc（降序），默认为 desc
 * @method void setSort(string $Sort) 设置按日志时间排序， asc（升序）或者 desc（降序），默认为 desc
 */
class SearchClsLogRequest extends AbstractModel
{
    /**
     * @var string 需要查询的日志集ID
     */
    public $LogsetId;

    /**
     * @var string 需要查询的日志主题ID组合，以逗号分隔
     */
    public $TopicIds;

    /**
     * @var string 需要查询的日志的起始时间，格式 YYYY-mm-dd HH:MM:SS
     */
    public $StartTime;

    /**
     * @var string 需要查询的日志的结束时间，格式 YYYY-mm-dd HH:MM:SS
     */
    public $EndTime;

    /**
     * @var integer 单次要返回的日志条数，单次返回的最大条数为100
     */
    public $Limit;

    /**
     * @var string 接入渠道，默认值为cdn
     */
    public $Channel;

    /**
     * @var string 需要查询的内容，详情请参考https://cloud.tencent.com/document/product/614/16982
     */
    public $Query;

    /**
     * @var string 加载更多使用，透传上次返回的 context 值，获取后续的日志内容，通过游标最多可获取10000条，请尽可能缩小时间范围
     */
    public $Context;

    /**
     * @var string 按日志时间排序， asc（升序）或者 desc（降序），默认为 desc
     */
    public $Sort;

    /**
     * @param string $LogsetId 需要查询的日志集ID
     * @param string $TopicIds 需要查询的日志主题ID组合，以逗号分隔
     * @param string $StartTime 需要查询的日志的起始时间，格式 YYYY-mm-dd HH:MM:SS
     * @param string $EndTime 需要查询的日志的结束时间，格式 YYYY-mm-dd HH:MM:SS
     * @param integer $Limit 单次要返回的日志条数，单次返回的最大条数为100
     * @param string $Channel 接入渠道，默认值为cdn
     * @param string $Query 需要查询的内容，详情请参考https://cloud.tencent.com/document/product/614/16982
     * @param string $Context 加载更多使用，透传上次返回的 context 值，获取后续的日志内容，通过游标最多可获取10000条，请尽可能缩小时间范围
     * @param string $Sort 按日志时间排序， asc（升序）或者 desc（降序），默认为 desc
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicIds",$param) and $param["TopicIds"] !== null) {
            $this->TopicIds = $param["TopicIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
