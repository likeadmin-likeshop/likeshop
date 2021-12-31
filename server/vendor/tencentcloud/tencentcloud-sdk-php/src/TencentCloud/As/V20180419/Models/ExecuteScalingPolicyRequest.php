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
 * ExecuteScalingPolicy请求参数结构体
 *
 * @method string getAutoScalingPolicyId() 获取告警伸缩策略ID
 * @method void setAutoScalingPolicyId(string $AutoScalingPolicyId) 设置告警伸缩策略ID
 * @method boolean getHonorCooldown() 获取是否检查伸缩组活动处于冷却时间内，默认值为false
 * @method void setHonorCooldown(boolean $HonorCooldown) 设置是否检查伸缩组活动处于冷却时间内，默认值为false
 * @method string getTriggerSource() 获取执行伸缩策略的触发来源，取值包括 API 和 CLOUD_MONITOR，默认值为 API。CLOUD_MONITOR 专门供云监控触发调用。
 * @method void setTriggerSource(string $TriggerSource) 设置执行伸缩策略的触发来源，取值包括 API 和 CLOUD_MONITOR，默认值为 API。CLOUD_MONITOR 专门供云监控触发调用。
 */
class ExecuteScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string 告警伸缩策略ID
     */
    public $AutoScalingPolicyId;

    /**
     * @var boolean 是否检查伸缩组活动处于冷却时间内，默认值为false
     */
    public $HonorCooldown;

    /**
     * @var string 执行伸缩策略的触发来源，取值包括 API 和 CLOUD_MONITOR，默认值为 API。CLOUD_MONITOR 专门供云监控触发调用。
     */
    public $TriggerSource;

    /**
     * @param string $AutoScalingPolicyId 告警伸缩策略ID
     * @param boolean $HonorCooldown 是否检查伸缩组活动处于冷却时间内，默认值为false
     * @param string $TriggerSource 执行伸缩策略的触发来源，取值包括 API 和 CLOUD_MONITOR，默认值为 API。CLOUD_MONITOR 专门供云监控触发调用。
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
        if (array_key_exists("AutoScalingPolicyId",$param) and $param["AutoScalingPolicyId"] !== null) {
            $this->AutoScalingPolicyId = $param["AutoScalingPolicyId"];
        }

        if (array_key_exists("HonorCooldown",$param) and $param["HonorCooldown"] !== null) {
            $this->HonorCooldown = $param["HonorCooldown"];
        }

        if (array_key_exists("TriggerSource",$param) and $param["TriggerSource"] !== null) {
            $this->TriggerSource = $param["TriggerSource"];
        }
    }
}
