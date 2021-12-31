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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务实例统计指标
 *
 * @method integer getSubmittedCount() 获取Submitted个数
 * @method void setSubmittedCount(integer $SubmittedCount) 设置Submitted个数
 * @method integer getPendingCount() 获取Pending个数
 * @method void setPendingCount(integer $PendingCount) 设置Pending个数
 * @method integer getRunnableCount() 获取Runnable个数
 * @method void setRunnableCount(integer $RunnableCount) 设置Runnable个数
 * @method integer getStartingCount() 获取Starting个数
 * @method void setStartingCount(integer $StartingCount) 设置Starting个数
 * @method integer getRunningCount() 获取Running个数
 * @method void setRunningCount(integer $RunningCount) 设置Running个数
 * @method integer getSucceedCount() 获取Succeed个数
 * @method void setSucceedCount(integer $SucceedCount) 设置Succeed个数
 * @method integer getFailedInterruptedCount() 获取FailedInterrupted个数
 * @method void setFailedInterruptedCount(integer $FailedInterruptedCount) 设置FailedInterrupted个数
 * @method integer getFailedCount() 获取Failed个数
 * @method void setFailedCount(integer $FailedCount) 设置Failed个数
 */
class TaskInstanceMetrics extends AbstractModel
{
    /**
     * @var integer Submitted个数
     */
    public $SubmittedCount;

    /**
     * @var integer Pending个数
     */
    public $PendingCount;

    /**
     * @var integer Runnable个数
     */
    public $RunnableCount;

    /**
     * @var integer Starting个数
     */
    public $StartingCount;

    /**
     * @var integer Running个数
     */
    public $RunningCount;

    /**
     * @var integer Succeed个数
     */
    public $SucceedCount;

    /**
     * @var integer FailedInterrupted个数
     */
    public $FailedInterruptedCount;

    /**
     * @var integer Failed个数
     */
    public $FailedCount;

    /**
     * @param integer $SubmittedCount Submitted个数
     * @param integer $PendingCount Pending个数
     * @param integer $RunnableCount Runnable个数
     * @param integer $StartingCount Starting个数
     * @param integer $RunningCount Running个数
     * @param integer $SucceedCount Succeed个数
     * @param integer $FailedInterruptedCount FailedInterrupted个数
     * @param integer $FailedCount Failed个数
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
        if (array_key_exists("SubmittedCount",$param) and $param["SubmittedCount"] !== null) {
            $this->SubmittedCount = $param["SubmittedCount"];
        }

        if (array_key_exists("PendingCount",$param) and $param["PendingCount"] !== null) {
            $this->PendingCount = $param["PendingCount"];
        }

        if (array_key_exists("RunnableCount",$param) and $param["RunnableCount"] !== null) {
            $this->RunnableCount = $param["RunnableCount"];
        }

        if (array_key_exists("StartingCount",$param) and $param["StartingCount"] !== null) {
            $this->StartingCount = $param["StartingCount"];
        }

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("SucceedCount",$param) and $param["SucceedCount"] !== null) {
            $this->SucceedCount = $param["SucceedCount"];
        }

        if (array_key_exists("FailedInterruptedCount",$param) and $param["FailedInterruptedCount"] !== null) {
            $this->FailedInterruptedCount = $param["FailedInterruptedCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }
    }
}
