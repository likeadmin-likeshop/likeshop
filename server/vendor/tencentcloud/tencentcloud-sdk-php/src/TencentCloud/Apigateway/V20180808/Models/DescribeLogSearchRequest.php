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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogSearch请求参数结构体
 *
 * @method string getStartTime() 获取日志开始时间
 * @method void setStartTime(string $StartTime) 设置日志开始时间
 * @method string getEndTime() 获取日志结束时间
 * @method void setEndTime(string $EndTime) 设置日志结束时间
 * @method string getServiceId() 获取服务id
 * @method void setServiceId(string $ServiceId) 设置服务id
 * @method array getFilters() 获取保留字段
 * @method void setFilters(array $Filters) 设置保留字段
 * @method integer getLimit() 获取单次要返回的日志条数，单次返回的最大条数为100
 * @method void setLimit(integer $Limit) 设置单次要返回的日志条数，单次返回的最大条数为100
 * @method string getConText() 获取根据上次返回的ConText，获取后续的内容，最多可获取10000条
 * @method void setConText(string $ConText) 设置根据上次返回的ConText，获取后续的内容，最多可获取10000条
 * @method string getSort() 获取按时间排序 asc（升序）或者 desc（降序），默认为 desc
 * @method void setSort(string $Sort) 设置按时间排序 asc（升序）或者 desc（降序），默认为 desc
 * @method string getQuery() 获取保留字段
 * @method void setQuery(string $Query) 设置保留字段
 * @method array getLogQuerys() 获取检索条件,支持的检索条件如下：
req_id：“=”
api_id：“=”
cip：“=”
uip：“:”
err_msg：“:”
rsp_st：“=” 、“!=” 、 “:” 、 “>” 、 “<”
req_t：”>=“ 、 ”<=“

说明：
“:”表示包含，“!=”表示不等于，字段含义见输出参数的LogSet说明
 * @method void setLogQuerys(array $LogQuerys) 设置检索条件,支持的检索条件如下：
req_id：“=”
api_id：“=”
cip：“=”
uip：“:”
err_msg：“:”
rsp_st：“=” 、“!=” 、 “:” 、 “>” 、 “<”
req_t：”>=“ 、 ”<=“

说明：
“:”表示包含，“!=”表示不等于，字段含义见输出参数的LogSet说明
 */
class DescribeLogSearchRequest extends AbstractModel
{
    /**
     * @var string 日志开始时间
     */
    public $StartTime;

    /**
     * @var string 日志结束时间
     */
    public $EndTime;

    /**
     * @var string 服务id
     */
    public $ServiceId;

    /**
     * @var array 保留字段
     */
    public $Filters;

    /**
     * @var integer 单次要返回的日志条数，单次返回的最大条数为100
     */
    public $Limit;

    /**
     * @var string 根据上次返回的ConText，获取后续的内容，最多可获取10000条
     */
    public $ConText;

    /**
     * @var string 按时间排序 asc（升序）或者 desc（降序），默认为 desc
     */
    public $Sort;

    /**
     * @var string 保留字段
     */
    public $Query;

    /**
     * @var array 检索条件,支持的检索条件如下：
req_id：“=”
api_id：“=”
cip：“=”
uip：“:”
err_msg：“:”
rsp_st：“=” 、“!=” 、 “:” 、 “>” 、 “<”
req_t：”>=“ 、 ”<=“

说明：
“:”表示包含，“!=”表示不等于，字段含义见输出参数的LogSet说明
     */
    public $LogQuerys;

    /**
     * @param string $StartTime 日志开始时间
     * @param string $EndTime 日志结束时间
     * @param string $ServiceId 服务id
     * @param array $Filters 保留字段
     * @param integer $Limit 单次要返回的日志条数，单次返回的最大条数为100
     * @param string $ConText 根据上次返回的ConText，获取后续的内容，最多可获取10000条
     * @param string $Sort 按时间排序 asc（升序）或者 desc（降序），默认为 desc
     * @param string $Query 保留字段
     * @param array $LogQuerys 检索条件,支持的检索条件如下：
req_id：“=”
api_id：“=”
cip：“=”
uip：“:”
err_msg：“:”
rsp_st：“=” 、“!=” 、 “:” 、 “>” 、 “<”
req_t：”>=“ 、 ”<=“

说明：
“:”表示包含，“!=”表示不等于，字段含义见输出参数的LogSet说明
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

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConText",$param) and $param["ConText"] !== null) {
            $this->ConText = $param["ConText"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("LogQuerys",$param) and $param["LogQuerys"] !== null) {
            $this->LogQuerys = [];
            foreach ($param["LogQuerys"] as $key => $value){
                $obj = new LogQuery();
                $obj->deserialize($value);
                array_push($this->LogQuerys, $obj);
            }
        }
    }
}
