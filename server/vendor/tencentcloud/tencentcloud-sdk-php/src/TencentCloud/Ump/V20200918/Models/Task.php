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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getGroupCode() 获取集团编码
 * @method void setGroupCode(string $GroupCode) 设置集团编码
 * @method integer getMallId() 获取广场ID
 * @method void setMallId(integer $MallId) 设置广场ID
 * @method TaskContent getTaskContent() 获取任务内容
 * @method void setTaskContent(TaskContent $TaskContent) 设置任务内容
 * @method integer getTaskType() 获取任务类型:
1: 底图拉取
 * @method void setTaskType(integer $TaskType) 设置任务类型:
1: 底图拉取
 */
class Task extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 集团编码
     */
    public $GroupCode;

    /**
     * @var integer 广场ID
     */
    public $MallId;

    /**
     * @var TaskContent 任务内容
     */
    public $TaskContent;

    /**
     * @var integer 任务类型:
1: 底图拉取
     */
    public $TaskType;

    /**
     * @param integer $TaskId 任务ID
     * @param string $GroupCode 集团编码
     * @param integer $MallId 广场ID
     * @param TaskContent $TaskContent 任务内容
     * @param integer $TaskType 任务类型:
1: 底图拉取
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

        if (array_key_exists("GroupCode",$param) and $param["GroupCode"] !== null) {
            $this->GroupCode = $param["GroupCode"];
        }

        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }

        if (array_key_exists("TaskContent",$param) and $param["TaskContent"] !== null) {
            $this->TaskContent = new TaskContent();
            $this->TaskContent->deserialize($param["TaskContent"]);
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
