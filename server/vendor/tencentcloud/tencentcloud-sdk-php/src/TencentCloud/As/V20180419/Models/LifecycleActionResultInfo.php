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
 * 生命周期挂钩动作的执行结果信息。
 *
 * @method string getLifecycleHookId() 获取生命周期挂钩标识。
 * @method void setLifecycleHookId(string $LifecycleHookId) 设置生命周期挂钩标识。
 * @method string getInstanceId() 获取实例标识。
 * @method void setInstanceId(string $InstanceId) 设置实例标识。
 * @method string getNotificationResult() 获取通知的结果，表示通知CMQ是否成功。
 * @method void setNotificationResult(string $NotificationResult) 设置通知的结果，表示通知CMQ是否成功。
 * @method string getLifecycleActionResult() 获取生命周期挂钩动作的执行结果，取值包括 CONTINUE、ABANDON。
 * @method void setLifecycleActionResult(string $LifecycleActionResult) 设置生命周期挂钩动作的执行结果，取值包括 CONTINUE、ABANDON。
 * @method string getResultReason() 获取结果的原因。
 * @method void setResultReason(string $ResultReason) 设置结果的原因。
 */
class LifecycleActionResultInfo extends AbstractModel
{
    /**
     * @var string 生命周期挂钩标识。
     */
    public $LifecycleHookId;

    /**
     * @var string 实例标识。
     */
    public $InstanceId;

    /**
     * @var string 通知的结果，表示通知CMQ是否成功。
     */
    public $NotificationResult;

    /**
     * @var string 生命周期挂钩动作的执行结果，取值包括 CONTINUE、ABANDON。
     */
    public $LifecycleActionResult;

    /**
     * @var string 结果的原因。
     */
    public $ResultReason;

    /**
     * @param string $LifecycleHookId 生命周期挂钩标识。
     * @param string $InstanceId 实例标识。
     * @param string $NotificationResult 通知的结果，表示通知CMQ是否成功。
     * @param string $LifecycleActionResult 生命周期挂钩动作的执行结果，取值包括 CONTINUE、ABANDON。
     * @param string $ResultReason 结果的原因。
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NotificationResult",$param) and $param["NotificationResult"] !== null) {
            $this->NotificationResult = $param["NotificationResult"];
        }

        if (array_key_exists("LifecycleActionResult",$param) and $param["LifecycleActionResult"] !== null) {
            $this->LifecycleActionResult = $param["LifecycleActionResult"];
        }

        if (array_key_exists("ResultReason",$param) and $param["ResultReason"] !== null) {
            $this->ResultReason = $param["ResultReason"];
        }
    }
}
