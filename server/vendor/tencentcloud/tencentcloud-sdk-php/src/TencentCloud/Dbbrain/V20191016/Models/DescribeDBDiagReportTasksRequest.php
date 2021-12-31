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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBDiagReportTasks请求参数结构体
 *
 * @method string getStartTime() 获取第一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。
 * @method void setStartTime(string $StartTime) 设置第一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。
 * @method string getEndTime() 获取最后一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。
 * @method void setEndTime(string $EndTime) 设置最后一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。
 * @method array getInstanceIds() 获取实例ID数组，用于筛选指定实例的任务列表。
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID数组，用于筛选指定实例的任务列表。
 * @method array getSources() 获取任务的触发来源，支持的取值包括："DAILY_INSPECTION" - 实例巡检；"SCHEDULED" - 定时生成；"MANUAL" - 手动触发。
 * @method void setSources(array $Sources) 设置任务的触发来源，支持的取值包括："DAILY_INSPECTION" - 实例巡检；"SCHEDULED" - 定时生成；"MANUAL" - 手动触发。
 * @method string getHealthLevels() 获取报告的健康等级，支持的取值包括："HEALTH" - 健康；"SUB_HEALTH" - 亚健康；"RISK" - 危险；"HIGH_RISK" - 高危。
 * @method void setHealthLevels(string $HealthLevels) 设置报告的健康等级，支持的取值包括："HEALTH" - 健康；"SUB_HEALTH" - 亚健康；"RISK" - 危险；"HIGH_RISK" - 高危。
 * @method string getTaskStatuses() 获取任务的状态，支持的取值包括："created" - 新建；"chosen" - 待执行； "running" - 执行中；"failed" - 失败；"finished" - 已完成。
 * @method void setTaskStatuses(string $TaskStatuses) 设置任务的状态，支持的取值包括："created" - 新建；"chosen" - 待执行； "running" - 执行中；"failed" - 失败；"finished" - 已完成。
 * @method integer getOffset() 获取偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认0。
 * @method integer getLimit() 获取返回数量，默认20。
 * @method void setLimit(integer $Limit) 设置返回数量，默认20。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 */
class DescribeDBDiagReportTasksRequest extends AbstractModel
{
    /**
     * @var string 第一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。
     */
    public $StartTime;

    /**
     * @var string 最后一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。
     */
    public $EndTime;

    /**
     * @var array 实例ID数组，用于筛选指定实例的任务列表。
     */
    public $InstanceIds;

    /**
     * @var array 任务的触发来源，支持的取值包括："DAILY_INSPECTION" - 实例巡检；"SCHEDULED" - 定时生成；"MANUAL" - 手动触发。
     */
    public $Sources;

    /**
     * @var string 报告的健康等级，支持的取值包括："HEALTH" - 健康；"SUB_HEALTH" - 亚健康；"RISK" - 危险；"HIGH_RISK" - 高危。
     */
    public $HealthLevels;

    /**
     * @var string 任务的状态，支持的取值包括："created" - 新建；"chosen" - 待执行； "running" - 执行中；"failed" - 失败；"finished" - 已完成。
     */
    public $TaskStatuses;

    /**
     * @var integer 偏移量，默认0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认20。
     */
    public $Limit;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @param string $StartTime 第一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。
     * @param string $EndTime 最后一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。
     * @param array $InstanceIds 实例ID数组，用于筛选指定实例的任务列表。
     * @param array $Sources 任务的触发来源，支持的取值包括："DAILY_INSPECTION" - 实例巡检；"SCHEDULED" - 定时生成；"MANUAL" - 手动触发。
     * @param string $HealthLevels 报告的健康等级，支持的取值包括："HEALTH" - 健康；"SUB_HEALTH" - 亚健康；"RISK" - 危险；"HIGH_RISK" - 高危。
     * @param string $TaskStatuses 任务的状态，支持的取值包括："created" - 新建；"chosen" - 待执行； "running" - 执行中；"failed" - 失败；"finished" - 已完成。
     * @param integer $Offset 偏移量，默认0。
     * @param integer $Limit 返回数量，默认20。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Sources",$param) and $param["Sources"] !== null) {
            $this->Sources = $param["Sources"];
        }

        if (array_key_exists("HealthLevels",$param) and $param["HealthLevels"] !== null) {
            $this->HealthLevels = $param["HealthLevels"];
        }

        if (array_key_exists("TaskStatuses",$param) and $param["TaskStatuses"] !== null) {
            $this->TaskStatuses = $param["TaskStatuses"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
