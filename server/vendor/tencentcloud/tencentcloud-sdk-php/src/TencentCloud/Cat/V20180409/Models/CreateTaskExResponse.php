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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTaskEx返回参数结构体
 *
 * @method integer getResultId() 获取拨测结果查询ID。接下来可以使用查询拨测是否能够成功，验证能否通过。
 * @method void setResultId(integer $ResultId) 设置拨测结果查询ID。接下来可以使用查询拨测是否能够成功，验证能否通过。
 * @method integer getTaskId() 获取拨测任务ID。验证通过后，创建任务时使用，传递给CreateTask 接口。
 * @method void setTaskId(integer $TaskId) 设置拨测任务ID。验证通过后，创建任务时使用，传递给CreateTask 接口。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateTaskExResponse extends AbstractModel
{
    /**
     * @var integer 拨测结果查询ID。接下来可以使用查询拨测是否能够成功，验证能否通过。
     */
    public $ResultId;

    /**
     * @var integer 拨测任务ID。验证通过后，创建任务时使用，传递给CreateTask 接口。
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ResultId 拨测结果查询ID。接下来可以使用查询拨测是否能够成功，验证能否通过。
     * @param integer $TaskId 拨测任务ID。验证通过后，创建任务时使用，传递给CreateTask 接口。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ResultId",$param) and $param["ResultId"] !== null) {
            $this->ResultId = $param["ResultId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
