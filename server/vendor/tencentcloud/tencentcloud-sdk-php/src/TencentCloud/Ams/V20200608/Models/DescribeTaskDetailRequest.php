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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail请求参数结构体
 *
 * @method string getTaskId() 获取任务ID，创建任务后返回的TaskId字段
 * @method void setTaskId(string $TaskId) 设置任务ID，创建任务后返回的TaskId字段
 * @method boolean getShowAllSegments() 获取是否展示所有分片，默认只展示命中规则的分片
 * @method void setShowAllSegments(boolean $ShowAllSegments) 设置是否展示所有分片，默认只展示命中规则的分片
 */
class DescribeTaskDetailRequest extends AbstractModel
{
    /**
     * @var string 任务ID，创建任务后返回的TaskId字段
     */
    public $TaskId;

    /**
     * @var boolean 是否展示所有分片，默认只展示命中规则的分片
     */
    public $ShowAllSegments;

    /**
     * @param string $TaskId 任务ID，创建任务后返回的TaskId字段
     * @param boolean $ShowAllSegments 是否展示所有分片，默认只展示命中规则的分片
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

        if (array_key_exists("ShowAllSegments",$param) and $param["ShowAllSegments"] !== null) {
            $this->ShowAllSegments = $param["ShowAllSegments"];
        }
    }
}
