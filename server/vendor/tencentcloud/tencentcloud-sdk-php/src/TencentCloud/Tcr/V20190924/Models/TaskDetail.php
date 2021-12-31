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
 * 任务详情
 *
 * @method string getTaskName() 获取任务
 * @method void setTaskName(string $TaskName) 设置任务
 * @method string getTaskUUID() 获取任务UUID
 * @method void setTaskUUID(string $TaskUUID) 设置任务UUID
 * @method string getTaskStatus() 获取任务状态
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态
 * @method string getTaskMessage() 获取任务的状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskMessage(string $TaskMessage) 设置任务的状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取任务开始时间
 * @method void setCreatedTime(string $CreatedTime) 设置任务开始时间
 * @method string getFinishedTime() 获取任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishedTime(string $FinishedTime) 设置任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskDetail extends AbstractModel
{
    /**
     * @var string 任务
     */
    public $TaskName;

    /**
     * @var string 任务UUID
     */
    public $TaskUUID;

    /**
     * @var string 任务状态
     */
    public $TaskStatus;

    /**
     * @var string 任务的状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskMessage;

    /**
     * @var string 任务开始时间
     */
    public $CreatedTime;

    /**
     * @var string 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishedTime;

    /**
     * @param string $TaskName 任务
     * @param string $TaskUUID 任务UUID
     * @param string $TaskStatus 任务状态
     * @param string $TaskMessage 任务的状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 任务开始时间
     * @param string $FinishedTime 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskUUID",$param) and $param["TaskUUID"] !== null) {
            $this->TaskUUID = $param["TaskUUID"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskMessage",$param) and $param["TaskMessage"] !== null) {
            $this->TaskMessage = $param["TaskMessage"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }
    }
}
