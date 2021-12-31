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
 * 版本保留规则执行
 *
 * @method integer getExecutionId() 获取执行Id
 * @method void setExecutionId(integer $ExecutionId) 设置执行Id
 * @method integer getRetentionId() 获取所属规则id
 * @method void setRetentionId(integer $RetentionId) 设置所属规则id
 * @method string getStartTime() 获取执行的开始时间
 * @method void setStartTime(string $StartTime) 设置执行的开始时间
 * @method string getEndTime() 获取执行的结束时间
 * @method void setEndTime(string $EndTime) 设置执行的结束时间
 * @method string getStatus() 获取执行的状态，Failed, Succeed, Stopped, InProgress
 * @method void setStatus(string $Status) 设置执行的状态，Failed, Succeed, Stopped, InProgress
 */
class RetentionExecution extends AbstractModel
{
    /**
     * @var integer 执行Id
     */
    public $ExecutionId;

    /**
     * @var integer 所属规则id
     */
    public $RetentionId;

    /**
     * @var string 执行的开始时间
     */
    public $StartTime;

    /**
     * @var string 执行的结束时间
     */
    public $EndTime;

    /**
     * @var string 执行的状态，Failed, Succeed, Stopped, InProgress
     */
    public $Status;

    /**
     * @param integer $ExecutionId 执行Id
     * @param integer $RetentionId 所属规则id
     * @param string $StartTime 执行的开始时间
     * @param string $EndTime 执行的结束时间
     * @param string $Status 执行的状态，Failed, Succeed, Stopped, InProgress
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
        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
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
    }
}
