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
 * 自定义脚本任务信息
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method integer getStatus() 获取任务状态ID，取值: -1(进行中) 0(结束)
 * @method void setStatus(integer $Status) 设置任务状态ID，取值: -1(进行中) 0(结束)
 * @method string getAlias() 获取脚本名称
 * @method void setAlias(string $Alias) 设置脚本名称
 * @method string getCmdId() 获取脚本ID
 * @method void setCmdId(string $CmdId) 设置脚本ID
 * @method integer getInstanceCount() 获取运行实例数量
 * @method void setInstanceCount(integer $InstanceCount) 设置运行实例数量
 * @method integer getSuccessCount() 获取运行成功数量
 * @method void setSuccessCount(integer $SuccessCount) 设置运行成功数量
 * @method integer getFailureCount() 获取运行失败数量
 * @method void setFailureCount(integer $FailureCount) 设置运行失败数量
 * @method string getRunBeginTime() 获取执行开始时间
 * @method void setRunBeginTime(string $RunBeginTime) 设置执行开始时间
 * @method string getRunEndTime() 获取执行结束时间
 * @method void setRunEndTime(string $RunEndTime) 设置执行结束时间
 */
class UserCmdTask extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var integer 任务状态ID，取值: -1(进行中) 0(结束)
     */
    public $Status;

    /**
     * @var string 脚本名称
     */
    public $Alias;

    /**
     * @var string 脚本ID
     */
    public $CmdId;

    /**
     * @var integer 运行实例数量
     */
    public $InstanceCount;

    /**
     * @var integer 运行成功数量
     */
    public $SuccessCount;

    /**
     * @var integer 运行失败数量
     */
    public $FailureCount;

    /**
     * @var string 执行开始时间
     */
    public $RunBeginTime;

    /**
     * @var string 执行结束时间
     */
    public $RunEndTime;

    /**
     * @param string $TaskId 任务ID
     * @param integer $Status 任务状态ID，取值: -1(进行中) 0(结束)
     * @param string $Alias 脚本名称
     * @param string $CmdId 脚本ID
     * @param integer $InstanceCount 运行实例数量
     * @param integer $SuccessCount 运行成功数量
     * @param integer $FailureCount 运行失败数量
     * @param string $RunBeginTime 执行开始时间
     * @param string $RunEndTime 执行结束时间
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CmdId",$param) and $param["CmdId"] !== null) {
            $this->CmdId = $param["CmdId"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailureCount",$param) and $param["FailureCount"] !== null) {
            $this->FailureCount = $param["FailureCount"];
        }

        if (array_key_exists("RunBeginTime",$param) and $param["RunBeginTime"] !== null) {
            $this->RunBeginTime = $param["RunBeginTime"];
        }

        if (array_key_exists("RunEndTime",$param) and $param["RunEndTime"] !== null) {
            $this->RunEndTime = $param["RunEndTime"];
        }
    }
}
