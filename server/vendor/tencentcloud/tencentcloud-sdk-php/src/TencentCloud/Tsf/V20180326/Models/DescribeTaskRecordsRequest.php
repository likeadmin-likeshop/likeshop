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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskRecords请求参数结构体
 *
 * @method integer getOffset() 获取翻页偏移量。
 * @method void setOffset(integer $Offset) 设置翻页偏移量。
 * @method integer getLimit() 获取翻页查询单页数量。
 * @method void setLimit(integer $Limit) 设置翻页查询单页数量。
 * @method string getSearchWord() 获取模糊查询关键字，支持任务ID和任务名称。
 * @method void setSearchWord(string $SearchWord) 设置模糊查询关键字，支持任务ID和任务名称。
 * @method string getTaskState() 获取任务启用状态。enabled/disabled
 * @method void setTaskState(string $TaskState) 设置任务启用状态。enabled/disabled
 * @method string getGroupId() 获取分组ID。
 * @method void setGroupId(string $GroupId) 设置分组ID。
 * @method string getTaskType() 获取任务类型。
 * @method void setTaskType(string $TaskType) 设置任务类型。
 * @method string getExecuteType() 获取任务触发类型，UNICAST、BROADCAST。
 * @method void setExecuteType(string $ExecuteType) 设置任务触发类型，UNICAST、BROADCAST。
 */
class DescribeTaskRecordsRequest extends AbstractModel
{
    /**
     * @var integer 翻页偏移量。
     */
    public $Offset;

    /**
     * @var integer 翻页查询单页数量。
     */
    public $Limit;

    /**
     * @var string 模糊查询关键字，支持任务ID和任务名称。
     */
    public $SearchWord;

    /**
     * @var string 任务启用状态。enabled/disabled
     */
    public $TaskState;

    /**
     * @var string 分组ID。
     */
    public $GroupId;

    /**
     * @var string 任务类型。
     */
    public $TaskType;

    /**
     * @var string 任务触发类型，UNICAST、BROADCAST。
     */
    public $ExecuteType;

    /**
     * @param integer $Offset 翻页偏移量。
     * @param integer $Limit 翻页查询单页数量。
     * @param string $SearchWord 模糊查询关键字，支持任务ID和任务名称。
     * @param string $TaskState 任务启用状态。enabled/disabled
     * @param string $GroupId 分组ID。
     * @param string $TaskType 任务类型。
     * @param string $ExecuteType 任务触发类型，UNICAST、BROADCAST。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ExecuteType",$param) and $param["ExecuteType"] !== null) {
            $this->ExecuteType = $param["ExecuteType"];
        }
    }
}
