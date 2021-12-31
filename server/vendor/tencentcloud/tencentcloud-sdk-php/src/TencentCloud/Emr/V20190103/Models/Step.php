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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行步骤
 *
 * @method string getName() 获取执行步骤名称。
 * @method void setName(string $Name) 设置执行步骤名称。
 * @method Execution getExecutionStep() 获取执行动作。
 * @method void setExecutionStep(Execution $ExecutionStep) 设置执行动作。
 * @method string getActionOnFailure() 获取执行失败策略。
1. TERMINATE_CLUSTER 执行失败时退出并销毁集群。
2. CANCEL_AND_WAIT 执行失败时阻塞等待。
3. CONTINUE 执行失败时跳过并执行后续步骤。
 * @method void setActionOnFailure(string $ActionOnFailure) 设置执行失败策略。
1. TERMINATE_CLUSTER 执行失败时退出并销毁集群。
2. CANCEL_AND_WAIT 执行失败时阻塞等待。
3. CONTINUE 执行失败时跳过并执行后续步骤。
 * @method string getUser() 获取指定执行Step时的用户名，非必须，默认为hadoop。
 * @method void setUser(string $User) 设置指定执行Step时的用户名，非必须，默认为hadoop。
 */
class Step extends AbstractModel
{
    /**
     * @var string 执行步骤名称。
     */
    public $Name;

    /**
     * @var Execution 执行动作。
     */
    public $ExecutionStep;

    /**
     * @var string 执行失败策略。
1. TERMINATE_CLUSTER 执行失败时退出并销毁集群。
2. CANCEL_AND_WAIT 执行失败时阻塞等待。
3. CONTINUE 执行失败时跳过并执行后续步骤。
     */
    public $ActionOnFailure;

    /**
     * @var string 指定执行Step时的用户名，非必须，默认为hadoop。
     */
    public $User;

    /**
     * @param string $Name 执行步骤名称。
     * @param Execution $ExecutionStep 执行动作。
     * @param string $ActionOnFailure 执行失败策略。
1. TERMINATE_CLUSTER 执行失败时退出并销毁集群。
2. CANCEL_AND_WAIT 执行失败时阻塞等待。
3. CONTINUE 执行失败时跳过并执行后续步骤。
     * @param string $User 指定执行Step时的用户名，非必须，默认为hadoop。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ExecutionStep",$param) and $param["ExecutionStep"] !== null) {
            $this->ExecutionStep = new Execution();
            $this->ExecutionStep->deserialize($param["ExecutionStep"]);
        }

        if (array_key_exists("ActionOnFailure",$param) and $param["ActionOnFailure"] !== null) {
            $this->ActionOnFailure = $param["ActionOnFailure"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
