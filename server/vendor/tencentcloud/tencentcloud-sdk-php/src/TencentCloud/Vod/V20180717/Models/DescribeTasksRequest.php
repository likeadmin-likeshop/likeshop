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
 * DescribeTasks请求参数结构体
 *
 * @method string getStatus() 获取过滤条件：任务状态，可选值：WAITING（等待中）、PROCESSING（处理中）、FINISH（已完成）。
 * @method void setStatus(string $Status) 设置过滤条件：任务状态，可选值：WAITING（等待中）、PROCESSING（处理中）、FINISH（已完成）。
 * @method string getFileId() 获取过滤条件：文件 ID。
 * @method void setFileId(string $FileId) 设置过滤条件：文件 ID。
 * @method TimeRange getCreateTime() 获取过滤条件：任务创建时间。
 * @method void setCreateTime(TimeRange $CreateTime) 设置过滤条件：任务创建时间。
 * @method TimeRange getFinishTime() 获取过滤条件：任务结束时间。
 * @method void setFinishTime(TimeRange $FinishTime) 设置过滤条件：任务结束时间。
 * @method SortBy getSort() 获取排序方式。Sort.Field 可选：
<li> CreateTime 任务创建时间。</li>
<li>FinishTime 任务结束时间。</li>
 * @method void setSort(SortBy $Sort) 设置排序方式。Sort.Field 可选：
<li> CreateTime 任务创建时间。</li>
<li>FinishTime 任务结束时间。</li>
 * @method integer getLimit() 获取返回记录条数，默认值：10，最大值：100。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：10，最大值：100。
 * @method string getScrollToken() 获取翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。
 * @method void setScrollToken(string $ScrollToken) 设置翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string 过滤条件：任务状态，可选值：WAITING（等待中）、PROCESSING（处理中）、FINISH（已完成）。
     */
    public $Status;

    /**
     * @var string 过滤条件：文件 ID。
     */
    public $FileId;

    /**
     * @var TimeRange 过滤条件：任务创建时间。
     */
    public $CreateTime;

    /**
     * @var TimeRange 过滤条件：任务结束时间。
     */
    public $FinishTime;

    /**
     * @var SortBy 排序方式。Sort.Field 可选：
<li> CreateTime 任务创建时间。</li>
<li>FinishTime 任务结束时间。</li>
     */
    public $Sort;

    /**
     * @var integer 返回记录条数，默认值：10，最大值：100。
     */
    public $Limit;

    /**
     * @var string 翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。
     */
    public $ScrollToken;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param string $Status 过滤条件：任务状态，可选值：WAITING（等待中）、PROCESSING（处理中）、FINISH（已完成）。
     * @param string $FileId 过滤条件：文件 ID。
     * @param TimeRange $CreateTime 过滤条件：任务创建时间。
     * @param TimeRange $FinishTime 过滤条件：任务结束时间。
     * @param SortBy $Sort 排序方式。Sort.Field 可选：
<li> CreateTime 任务创建时间。</li>
<li>FinishTime 任务结束时间。</li>
     * @param integer $Limit 返回记录条数，默认值：10，最大值：100。
     * @param string $ScrollToken 翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = new TimeRange();
            $this->FinishTime->deserialize($param["FinishTime"]);
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortBy();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
