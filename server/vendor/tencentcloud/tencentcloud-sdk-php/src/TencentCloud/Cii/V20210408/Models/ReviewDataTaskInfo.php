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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人工复核数据的子任务信息
 *
 * @method string getMainTaskId() 获取主任务号
 * @method void setMainTaskId(string $MainTaskId) 设置主任务号
 * @method string getSubTaskId() 获取子任务号
 * @method void setSubTaskId(string $SubTaskId) 设置子任务号
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 */
class ReviewDataTaskInfo extends AbstractModel
{
    /**
     * @var string 主任务号
     */
    public $MainTaskId;

    /**
     * @var string 子任务号
     */
    public $SubTaskId;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @param string $MainTaskId 主任务号
     * @param string $SubTaskId 子任务号
     * @param string $TaskName 任务名
     * @param string $TaskType 任务类型
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
        if (array_key_exists("MainTaskId",$param) and $param["MainTaskId"] !== null) {
            $this->MainTaskId = $param["MainTaskId"];
        }

        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            $this->SubTaskId = $param["SubTaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
