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
 * DescribeTaskLogs请求参数结构体
 *
 * @method string getJobId() 获取作业ID
 * @method void setJobId(string $JobId) 设置作业ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method array getTaskInstanceIndexes() 获取任务实例集合
 * @method void setTaskInstanceIndexes(array $TaskInstanceIndexes) 设置任务实例集合
 * @method integer getOffset() 获取起始任务实例
 * @method void setOffset(integer $Offset) 设置起始任务实例
 * @method integer getLimit() 获取最大任务实例数
 * @method void setLimit(integer $Limit) 设置最大任务实例数
 */
class DescribeTaskLogsRequest extends AbstractModel
{
    /**
     * @var string 作业ID
     */
    public $JobId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var array 任务实例集合
     */
    public $TaskInstanceIndexes;

    /**
     * @var integer 起始任务实例
     */
    public $Offset;

    /**
     * @var integer 最大任务实例数
     */
    public $Limit;

    /**
     * @param string $JobId 作业ID
     * @param string $TaskName 任务名称
     * @param array $TaskInstanceIndexes 任务实例集合
     * @param integer $Offset 起始任务实例
     * @param integer $Limit 最大任务实例数
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskInstanceIndexes",$param) and $param["TaskInstanceIndexes"] !== null) {
            $this->TaskInstanceIndexes = $param["TaskInstanceIndexes"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
