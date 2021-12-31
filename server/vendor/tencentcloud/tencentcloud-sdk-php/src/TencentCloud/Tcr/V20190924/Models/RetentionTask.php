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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本保留执行的规则
 *
 * @method integer getTaskId() 获取任务Id
 * @method void setTaskId(integer $TaskId) 设置任务Id
 * @method integer getExecutionId() 获取所属的规则执行Id
 * @method void setExecutionId(integer $ExecutionId) 设置所属的规则执行Id
 * @method string getStartTime() 获取任务开始时间
 * @method void setStartTime(string $StartTime) 设置任务开始时间
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method string getStatus() 获取任务的执行状态，Failed, Succeed, Stopped, InProgress
 * @method void setStatus(string $Status) 设置任务的执行状态，Failed, Succeed, Stopped, InProgress
 * @method integer getTotal() 获取总tag数
 * @method void setTotal(integer $Total) 设置总tag数
 * @method integer getRetained() 获取保留tag数
 * @method void setRetained(integer $Retained) 设置保留tag数
 * @method string getRepository() 获取应用的仓库
 * @method void setRepository(string $Repository) 设置应用的仓库
 */
class RetentionTask extends AbstractModel
{
    /**
     * @var integer 任务Id
     */
    public $TaskId;

    /**
     * @var integer 所属的规则执行Id
     */
    public $ExecutionId;

    /**
     * @var string 任务开始时间
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var string 任务的执行状态，Failed, Succeed, Stopped, InProgress
     */
    public $Status;

    /**
     * @var integer 总tag数
     */
    public $Total;

    /**
     * @var integer 保留tag数
     */
    public $Retained;

    /**
     * @var string 应用的仓库
     */
    public $Repository;

    /**
     * @param integer $TaskId 任务Id
     * @param integer $ExecutionId 所属的规则执行Id
     * @param string $StartTime 任务开始时间
     * @param string $EndTime 任务结束时间
     * @param string $Status 任务的执行状态，Failed, Succeed, Stopped, InProgress
     * @param integer $Total 总tag数
     * @param integer $Retained 保留tag数
     * @param string $Repository 应用的仓库
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Retained",$param) and $param["Retained"] !== null) {
            $this->Retained = $param["Retained"];
        }

        if (array_key_exists("Repository",$param) and $param["Repository"] !== null) {
            $this->Repository = $param["Repository"];
        }
    }
}
