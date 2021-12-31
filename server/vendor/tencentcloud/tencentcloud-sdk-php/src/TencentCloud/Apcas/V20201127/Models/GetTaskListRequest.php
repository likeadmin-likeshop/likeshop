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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTaskList请求参数结构体
 *
 * @method integer getPageNumber() 获取查询分页页码
 * @method void setPageNumber(integer $PageNumber) 设置查询分页页码
 * @method integer getPageSize() 获取查询分页大小
 * @method void setPageSize(integer $PageSize) 设置查询分页大小
 * @method integer getStartTime() 获取查询起始时间（13位数字的UNIX时间戳，单位毫秒 ）
 * @method void setStartTime(integer $StartTime) 设置查询起始时间（13位数字的UNIX时间戳，单位毫秒 ）
 * @method integer getEndTime() 获取查询结束时间（13位数字的UNIX时间戳，单位毫秒 ）
 * @method void setEndTime(integer $EndTime) 设置查询结束时间（13位数字的UNIX时间戳，单位毫秒 ）
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getTaskStatus() 获取查询任务状态 0:默认状态 1:任务正在运行 2:任务运行成功 3:任务运行失败
 * @method void setTaskStatus(integer $TaskStatus) 设置查询任务状态 0:默认状态 1:任务正在运行 2:任务运行成功 3:任务运行失败
 */
class GetTaskListRequest extends AbstractModel
{
    /**
     * @var integer 查询分页页码
     */
    public $PageNumber;

    /**
     * @var integer 查询分页大小
     */
    public $PageSize;

    /**
     * @var integer 查询起始时间（13位数字的UNIX时间戳，单位毫秒 ）
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间（13位数字的UNIX时间戳，单位毫秒 ）
     */
    public $EndTime;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 查询任务状态 0:默认状态 1:任务正在运行 2:任务运行成功 3:任务运行失败
     */
    public $TaskStatus;

    /**
     * @param integer $PageNumber 查询分页页码
     * @param integer $PageSize 查询分页大小
     * @param integer $StartTime 查询起始时间（13位数字的UNIX时间戳，单位毫秒 ）
     * @param integer $EndTime 查询结束时间（13位数字的UNIX时间戳，单位毫秒 ）
     * @param string $TaskName 任务名称
     * @param integer $TaskStatus 查询任务状态 0:默认状态 1:任务正在运行 2:任务运行成功 3:任务运行失败
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
