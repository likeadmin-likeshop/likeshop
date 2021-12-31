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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CompleteLifecycleAction请求参数结构体
 *
 * @method string getLifecycleHookId() 获取生命周期挂钩ID
 * @method void setLifecycleHookId(string $LifecycleHookId) 设置生命周期挂钩ID
 * @method string getLifecycleActionResult() 获取生命周期动作的结果，取值范围为“CONTINUE”或“ABANDON”
 * @method void setLifecycleActionResult(string $LifecycleActionResult) 设置生命周期动作的结果，取值范围为“CONTINUE”或“ABANDON”
 * @method string getInstanceId() 获取实例ID，“InstanceId”和“LifecycleActionToken”必须填充其中一个
 * @method void setInstanceId(string $InstanceId) 设置实例ID，“InstanceId”和“LifecycleActionToken”必须填充其中一个
 * @method string getLifecycleActionToken() 获取“InstanceId”和“LifecycleActionToken”必须填充其中一个
 * @method void setLifecycleActionToken(string $LifecycleActionToken) 设置“InstanceId”和“LifecycleActionToken”必须填充其中一个
 */
class CompleteLifecycleActionRequest extends AbstractModel
{
    /**
     * @var string 生命周期挂钩ID
     */
    public $LifecycleHookId;

    /**
     * @var string 生命周期动作的结果，取值范围为“CONTINUE”或“ABANDON”
     */
    public $LifecycleActionResult;

    /**
     * @var string 实例ID，“InstanceId”和“LifecycleActionToken”必须填充其中一个
     */
    public $InstanceId;

    /**
     * @var string “InstanceId”和“LifecycleActionToken”必须填充其中一个
     */
    public $LifecycleActionToken;

    /**
     * @param string $LifecycleHookId 生命周期挂钩ID
     * @param string $LifecycleActionResult 生命周期动作的结果，取值范围为“CONTINUE”或“ABANDON”
     * @param string $InstanceId 实例ID，“InstanceId”和“LifecycleActionToken”必须填充其中一个
     * @param string $LifecycleActionToken “InstanceId”和“LifecycleActionToken”必须填充其中一个
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
        if (array_key_exists("LifecycleHookId",$param) and $param["LifecycleHookId"] !== null) {
            $this->LifecycleHookId = $param["LifecycleHookId"];
        }

        if (array_key_exists("LifecycleActionResult",$param) and $param["LifecycleActionResult"] !== null) {
            $this->LifecycleActionResult = $param["LifecycleActionResult"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LifecycleActionToken",$param) and $param["LifecycleActionToken"] !== null) {
            $this->LifecycleActionToken = $param["LifecycleActionToken"];
        }
    }
}
