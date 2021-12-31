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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPurgeFetchTaskStatus请求参数结构体
 *
 * @method string getExecutionTime() 获取执行时间
 * @method void setExecutionTime(string $ExecutionTime) 设置执行时间
 * @method string getExecutionStatus() 获取执行状态
success: 成功
failed: 失败
 * @method void setExecutionStatus(string $ExecutionStatus) 设置执行状态
success: 成功
failed: 失败
 * @method string getId() 获取任务 ID
 * @method void setId(string $Id) 设置任务 ID
 * @method string getExecutionStatusDesc() 获取执行状态详情
 * @method void setExecutionStatusDesc(string $ExecutionStatusDesc) 设置执行状态详情
 */
class ModifyPurgeFetchTaskStatusRequest extends AbstractModel
{
    /**
     * @var string 执行时间
     */
    public $ExecutionTime;

    /**
     * @var string 执行状态
success: 成功
failed: 失败
     */
    public $ExecutionStatus;

    /**
     * @var string 任务 ID
     */
    public $Id;

    /**
     * @var string 执行状态详情
     */
    public $ExecutionStatusDesc;

    /**
     * @param string $ExecutionTime 执行时间
     * @param string $ExecutionStatus 执行状态
success: 成功
failed: 失败
     * @param string $Id 任务 ID
     * @param string $ExecutionStatusDesc 执行状态详情
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
        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("ExecutionStatus",$param) and $param["ExecutionStatus"] !== null) {
            $this->ExecutionStatus = $param["ExecutionStatus"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ExecutionStatusDesc",$param) and $param["ExecutionStatusDesc"] !== null) {
            $this->ExecutionStatusDesc = $param["ExecutionStatusDesc"];
        }
    }
}
