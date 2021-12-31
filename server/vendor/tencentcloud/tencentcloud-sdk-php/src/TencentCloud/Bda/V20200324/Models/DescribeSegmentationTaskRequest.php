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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSegmentationTask请求参数结构体
 *
 * @method string getTaskID() 获取在提交分割任务成功时返回的任务标识ID。
 * @method void setTaskID(string $TaskID) 设置在提交分割任务成功时返回的任务标识ID。
 */
class DescribeSegmentationTaskRequest extends AbstractModel
{
    /**
     * @var string 在提交分割任务成功时返回的任务标识ID。
     */
    public $TaskID;

    /**
     * @param string $TaskID 在提交分割任务成功时返回的任务标识ID。
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }
    }
}
