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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务查询出参
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getMessage() 获取状态描述
 * @method void setMessage(string $Message) 设置状态描述
 * @method string getStatus() 获取状态值，SUCCESS/FAILED/OPERATING
 * @method void setStatus(string $Status) 设置状态值，SUCCESS/FAILED/OPERATING
 * @method string getAddTime() 获取任务提交时间
 * @method void setAddTime(string $AddTime) 设置任务提交时间
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method string getOperation() 获取操作名
 * @method void setOperation(string $Operation) 设置操作名
 */
class TaskOutput extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 状态描述
     */
    public $Message;

    /**
     * @var string 状态值，SUCCESS/FAILED/OPERATING
     */
    public $Status;

    /**
     * @var string 任务提交时间
     */
    public $AddTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var string 操作名
     */
    public $Operation;

    /**
     * @param string $TaskId 任务id
     * @param string $Message 状态描述
     * @param string $Status 状态值，SUCCESS/FAILED/OPERATING
     * @param string $AddTime 任务提交时间
     * @param string $EndTime 任务结束时间
     * @param string $Operation 操作名
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
