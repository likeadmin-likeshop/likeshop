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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskInfo请求参数结构体
 *
 * @method integer getOffset() 获取开始位置
 * @method void setOffset(integer $Offset) 设置开始位置
 * @method integer getLimit() 获取数据条数
 * @method void setLimit(integer $Limit) 设置数据条数
 * @method string getStartDate() 获取时间过滤下限
 * @method void setStartDate(string $StartDate) 设置时间过滤下限
 * @method string getEndDate() 获取时间过滤上限
 * @method void setEndDate(string $EndDate) 设置时间过滤上限
 * @method array getTaskStatus() 获取任务状态ID过滤
 * @method void setTaskStatus(array $TaskStatus) 设置任务状态ID过滤
 * @method string getOrderField() 获取排序字段，目前支持：CreateTime，AuthTime，EndTime
 * @method void setOrderField(string $OrderField) 设置排序字段，目前支持：CreateTime，AuthTime，EndTime
 * @method integer getOrder() 获取排序方式 0:递增(默认) 1:递减
 * @method void setOrder(integer $Order) 设置排序方式 0:递增(默认) 1:递减
 * @method array getTaskIds() 获取任务ID过滤
 * @method void setTaskIds(array $TaskIds) 设置任务ID过滤
 * @method array getInstanceIds() 获取实例ID过滤
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID过滤
 * @method array getAliases() 获取实例别名过滤
 * @method void setAliases(array $Aliases) 设置实例别名过滤
 * @method array getTaskTypeIds() 获取故障类型ID过滤
 * @method void setTaskTypeIds(array $TaskTypeIds) 设置故障类型ID过滤
 */
class DescribeTaskInfoRequest extends AbstractModel
{
    /**
     * @var integer 开始位置
     */
    public $Offset;

    /**
     * @var integer 数据条数
     */
    public $Limit;

    /**
     * @var string 时间过滤下限
     */
    public $StartDate;

    /**
     * @var string 时间过滤上限
     */
    public $EndDate;

    /**
     * @var array 任务状态ID过滤
     */
    public $TaskStatus;

    /**
     * @var string 排序字段，目前支持：CreateTime，AuthTime，EndTime
     */
    public $OrderField;

    /**
     * @var integer 排序方式 0:递增(默认) 1:递减
     */
    public $Order;

    /**
     * @var array 任务ID过滤
     */
    public $TaskIds;

    /**
     * @var array 实例ID过滤
     */
    public $InstanceIds;

    /**
     * @var array 实例别名过滤
     */
    public $Aliases;

    /**
     * @var array 故障类型ID过滤
     */
    public $TaskTypeIds;

    /**
     * @param integer $Offset 开始位置
     * @param integer $Limit 数据条数
     * @param string $StartDate 时间过滤下限
     * @param string $EndDate 时间过滤上限
     * @param array $TaskStatus 任务状态ID过滤
     * @param string $OrderField 排序字段，目前支持：CreateTime，AuthTime，EndTime
     * @param integer $Order 排序方式 0:递增(默认) 1:递减
     * @param array $TaskIds 任务ID过滤
     * @param array $InstanceIds 实例ID过滤
     * @param array $Aliases 实例别名过滤
     * @param array $TaskTypeIds 故障类型ID过滤
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Aliases",$param) and $param["Aliases"] !== null) {
            $this->Aliases = $param["Aliases"];
        }

        if (array_key_exists("TaskTypeIds",$param) and $param["TaskTypeIds"] !== null) {
            $this->TaskTypeIds = $param["TaskTypeIds"];
        }
    }
}
