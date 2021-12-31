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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群伸缩组属性
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID
 * @method boolean getAutoScalingGroupEnabled() 获取是否开启
 * @method void setAutoScalingGroupEnabled(boolean $AutoScalingGroupEnabled) 设置是否开启
 * @method AutoScalingGroupRange getAutoScalingGroupRange() 获取伸缩组最大最小实例数
 * @method void setAutoScalingGroupRange(AutoScalingGroupRange $AutoScalingGroupRange) 设置伸缩组最大最小实例数
 */
class ClusterAsGroupAttribute extends AbstractModel
{
    /**
     * @var string 伸缩组ID
     */
    public $AutoScalingGroupId;

    /**
     * @var boolean 是否开启
     */
    public $AutoScalingGroupEnabled;

    /**
     * @var AutoScalingGroupRange 伸缩组最大最小实例数
     */
    public $AutoScalingGroupRange;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID
     * @param boolean $AutoScalingGroupEnabled 是否开启
     * @param AutoScalingGroupRange $AutoScalingGroupRange 伸缩组最大最小实例数
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("AutoScalingGroupEnabled",$param) and $param["AutoScalingGroupEnabled"] !== null) {
            $this->AutoScalingGroupEnabled = $param["AutoScalingGroupEnabled"];
        }

        if (array_key_exists("AutoScalingGroupRange",$param) and $param["AutoScalingGroupRange"] !== null) {
            $this->AutoScalingGroupRange = new AutoScalingGroupRange();
            $this->AutoScalingGroupRange->deserialize($param["AutoScalingGroupRange"]);
        }
    }
}
