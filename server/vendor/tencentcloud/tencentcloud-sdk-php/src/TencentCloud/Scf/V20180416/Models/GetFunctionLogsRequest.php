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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFunctionLogs请求参数结构体
 *
 * @method string getFunctionName() 获取函数的名称。
- 为保证[获取函数运行日志](https://cloud.tencent.com/document/product/583/18583)接口`GetFunctionLogs`兼容性，输入参数`FunctionName`仍为非必填项，但建议填写该参数，否则可能导致日志获取失败。
- 函数关联日志服务后，建议使用[日志服务](https://cloud.tencent.com/document/product/614/16875)相关接口以获得最佳日志检索体验。
 * @method void setFunctionName(string $FunctionName) 设置函数的名称。
- 为保证[获取函数运行日志](https://cloud.tencent.com/document/product/583/18583)接口`GetFunctionLogs`兼容性，输入参数`FunctionName`仍为非必填项，但建议填写该参数，否则可能导致日志获取失败。
- 函数关联日志服务后，建议使用[日志服务](https://cloud.tencent.com/document/product/614/16875)相关接口以获得最佳日志检索体验。
 * @method integer getOffset() 获取数据的偏移量，Offset+Limit不能大于10000
 * @method void setOffset(integer $Offset) 设置数据的偏移量，Offset+Limit不能大于10000
 * @method integer getLimit() 获取返回数据的长度，Offset+Limit不能大于10000
 * @method void setLimit(integer $Limit) 设置返回数据的长度，Offset+Limit不能大于10000
 * @method string getOrder() 获取以升序还是降序的方式对日志进行排序，可选值 desc和 asc
 * @method void setOrder(string $Order) 设置以升序还是降序的方式对日志进行排序，可选值 desc和 asc
 * @method string getOrderBy() 获取根据某个字段排序日志,支持以下字段：function_name, duration, mem_usage, start_time
 * @method void setOrderBy(string $OrderBy) 设置根据某个字段排序日志,支持以下字段：function_name, duration, mem_usage, start_time
 * @method LogFilter getFilter() 获取日志过滤条件。可用来区分正确和错误日志，filter.RetCode=not0 表示只返回错误日志，filter.RetCode=is0 表示只返回正确日志，不传，则返回所有日志
 * @method void setFilter(LogFilter $Filter) 设置日志过滤条件。可用来区分正确和错误日志，filter.RetCode=not0 表示只返回错误日志，filter.RetCode=is0 表示只返回正确日志，不传，则返回所有日志
 * @method string getNamespace() 获取函数的命名空间
 * @method void setNamespace(string $Namespace) 设置函数的命名空间
 * @method string getQualifier() 获取函数的版本
 * @method void setQualifier(string $Qualifier) 设置函数的版本
 * @method string getFunctionRequestId() 获取执行该函数对应的requestId
 * @method void setFunctionRequestId(string $FunctionRequestId) 设置执行该函数对应的requestId
 * @method string getStartTime() 获取查询的具体日期，例如：2017-05-16 20:00:00，只能与endtime相差一天之内
 * @method void setStartTime(string $StartTime) 设置查询的具体日期，例如：2017-05-16 20:00:00，只能与endtime相差一天之内
 * @method string getEndTime() 获取查询的具体日期，例如：2017-05-16 20:59:59，只能与startTime相差一天之内
 * @method void setEndTime(string $EndTime) 设置查询的具体日期，例如：2017-05-16 20:59:59，只能与startTime相差一天之内
 * @method LogSearchContext getSearchContext() 获取该字段已下线
 * @method void setSearchContext(LogSearchContext $SearchContext) 设置该字段已下线
 */
class GetFunctionLogsRequest extends AbstractModel
{
    /**
     * @var string 函数的名称。
- 为保证[获取函数运行日志](https://cloud.tencent.com/document/product/583/18583)接口`GetFunctionLogs`兼容性，输入参数`FunctionName`仍为非必填项，但建议填写该参数，否则可能导致日志获取失败。
- 函数关联日志服务后，建议使用[日志服务](https://cloud.tencent.com/document/product/614/16875)相关接口以获得最佳日志检索体验。
     */
    public $FunctionName;

    /**
     * @var integer 数据的偏移量，Offset+Limit不能大于10000
     */
    public $Offset;

    /**
     * @var integer 返回数据的长度，Offset+Limit不能大于10000
     */
    public $Limit;

    /**
     * @var string 以升序还是降序的方式对日志进行排序，可选值 desc和 asc
     */
    public $Order;

    /**
     * @var string 根据某个字段排序日志,支持以下字段：function_name, duration, mem_usage, start_time
     */
    public $OrderBy;

    /**
     * @var LogFilter 日志过滤条件。可用来区分正确和错误日志，filter.RetCode=not0 表示只返回错误日志，filter.RetCode=is0 表示只返回正确日志，不传，则返回所有日志
     */
    public $Filter;

    /**
     * @var string 函数的命名空间
     */
    public $Namespace;

    /**
     * @var string 函数的版本
     */
    public $Qualifier;

    /**
     * @var string 执行该函数对应的requestId
     */
    public $FunctionRequestId;

    /**
     * @var string 查询的具体日期，例如：2017-05-16 20:00:00，只能与endtime相差一天之内
     */
    public $StartTime;

    /**
     * @var string 查询的具体日期，例如：2017-05-16 20:59:59，只能与startTime相差一天之内
     */
    public $EndTime;

    /**
     * @var LogSearchContext 该字段已下线
     */
    public $SearchContext;

    /**
     * @param string $FunctionName 函数的名称。
- 为保证[获取函数运行日志](https://cloud.tencent.com/document/product/583/18583)接口`GetFunctionLogs`兼容性，输入参数`FunctionName`仍为非必填项，但建议填写该参数，否则可能导致日志获取失败。
- 函数关联日志服务后，建议使用[日志服务](https://cloud.tencent.com/document/product/614/16875)相关接口以获得最佳日志检索体验。
     * @param integer $Offset 数据的偏移量，Offset+Limit不能大于10000
     * @param integer $Limit 返回数据的长度，Offset+Limit不能大于10000
     * @param string $Order 以升序还是降序的方式对日志进行排序，可选值 desc和 asc
     * @param string $OrderBy 根据某个字段排序日志,支持以下字段：function_name, duration, mem_usage, start_time
     * @param LogFilter $Filter 日志过滤条件。可用来区分正确和错误日志，filter.RetCode=not0 表示只返回错误日志，filter.RetCode=is0 表示只返回正确日志，不传，则返回所有日志
     * @param string $Namespace 函数的命名空间
     * @param string $Qualifier 函数的版本
     * @param string $FunctionRequestId 执行该函数对应的requestId
     * @param string $StartTime 查询的具体日期，例如：2017-05-16 20:00:00，只能与endtime相差一天之内
     * @param string $EndTime 查询的具体日期，例如：2017-05-16 20:59:59，只能与startTime相差一天之内
     * @param LogSearchContext $SearchContext 该字段已下线
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new LogFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("FunctionRequestId",$param) and $param["FunctionRequestId"] !== null) {
            $this->FunctionRequestId = $param["FunctionRequestId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SearchContext",$param) and $param["SearchContext"] !== null) {
            $this->SearchContext = new LogSearchContext();
            $this->SearchContext->deserialize($param["SearchContext"]);
        }
    }
}
