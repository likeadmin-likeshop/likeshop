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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 克隆任务记录。
 *
 * @method string getSrcInstanceId() 获取克隆任务的源实例Id。
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置克隆任务的源实例Id。
 * @method string getDstInstanceId() 获取克隆任务的新产生实例Id。
 * @method void setDstInstanceId(string $DstInstanceId) 设置克隆任务的新产生实例Id。
 * @method integer getCloneJobId() 获取克隆任务对应的任务列表Id。
 * @method void setCloneJobId(integer $CloneJobId) 设置克隆任务对应的任务列表Id。
 * @method string getRollbackStrategy() 获取克隆实例使用的策略， 包括以下类型：  timepoint:指定时间点回档，  backupset: 指定备份文件回档。
 * @method void setRollbackStrategy(string $RollbackStrategy) 设置克隆实例使用的策略， 包括以下类型：  timepoint:指定时间点回档，  backupset: 指定备份文件回档。
 * @method string getRollbackTargetTime() 获取克隆实例回档的时间点。
 * @method void setRollbackTargetTime(string $RollbackTargetTime) 设置克隆实例回档的时间点。
 * @method string getStartTime() 获取任务开始时间。
 * @method void setStartTime(string $StartTime) 设置任务开始时间。
 * @method string getEndTime() 获取任务结束时间。
 * @method void setEndTime(string $EndTime) 设置任务结束时间。
 * @method string getTaskStatus() 获取任务状态，包括以下状态：initial,running,wait_complete,success,failed
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态，包括以下状态：initial,running,wait_complete,success,failed
 */
class CloneItem extends AbstractModel
{
    /**
     * @var string 克隆任务的源实例Id。
     */
    public $SrcInstanceId;

    /**
     * @var string 克隆任务的新产生实例Id。
     */
    public $DstInstanceId;

    /**
     * @var integer 克隆任务对应的任务列表Id。
     */
    public $CloneJobId;

    /**
     * @var string 克隆实例使用的策略， 包括以下类型：  timepoint:指定时间点回档，  backupset: 指定备份文件回档。
     */
    public $RollbackStrategy;

    /**
     * @var string 克隆实例回档的时间点。
     */
    public $RollbackTargetTime;

    /**
     * @var string 任务开始时间。
     */
    public $StartTime;

    /**
     * @var string 任务结束时间。
     */
    public $EndTime;

    /**
     * @var string 任务状态，包括以下状态：initial,running,wait_complete,success,failed
     */
    public $TaskStatus;

    /**
     * @param string $SrcInstanceId 克隆任务的源实例Id。
     * @param string $DstInstanceId 克隆任务的新产生实例Id。
     * @param integer $CloneJobId 克隆任务对应的任务列表Id。
     * @param string $RollbackStrategy 克隆实例使用的策略， 包括以下类型：  timepoint:指定时间点回档，  backupset: 指定备份文件回档。
     * @param string $RollbackTargetTime 克隆实例回档的时间点。
     * @param string $StartTime 任务开始时间。
     * @param string $EndTime 任务结束时间。
     * @param string $TaskStatus 任务状态，包括以下状态：initial,running,wait_complete,success,failed
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
        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("DstInstanceId",$param) and $param["DstInstanceId"] !== null) {
            $this->DstInstanceId = $param["DstInstanceId"];
        }

        if (array_key_exists("CloneJobId",$param) and $param["CloneJobId"] !== null) {
            $this->CloneJobId = $param["CloneJobId"];
        }

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("RollbackTargetTime",$param) and $param["RollbackTargetTime"] !== null) {
            $this->RollbackTargetTime = $param["RollbackTargetTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
