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
 * DescribeAccountLimits返回参数结构体
 *
 * @method integer getMaxNumberOfLaunchConfigurations() 获取用户账户被允许创建的启动配置最大数量
 * @method void setMaxNumberOfLaunchConfigurations(integer $MaxNumberOfLaunchConfigurations) 设置用户账户被允许创建的启动配置最大数量
 * @method integer getNumberOfLaunchConfigurations() 获取用户账户启动配置的当前数量
 * @method void setNumberOfLaunchConfigurations(integer $NumberOfLaunchConfigurations) 设置用户账户启动配置的当前数量
 * @method integer getMaxNumberOfAutoScalingGroups() 获取用户账户被允许创建的伸缩组最大数量
 * @method void setMaxNumberOfAutoScalingGroups(integer $MaxNumberOfAutoScalingGroups) 设置用户账户被允许创建的伸缩组最大数量
 * @method integer getNumberOfAutoScalingGroups() 获取用户账户伸缩组的当前数量
 * @method void setNumberOfAutoScalingGroups(integer $NumberOfAutoScalingGroups) 设置用户账户伸缩组的当前数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccountLimitsResponse extends AbstractModel
{
    /**
     * @var integer 用户账户被允许创建的启动配置最大数量
     */
    public $MaxNumberOfLaunchConfigurations;

    /**
     * @var integer 用户账户启动配置的当前数量
     */
    public $NumberOfLaunchConfigurations;

    /**
     * @var integer 用户账户被允许创建的伸缩组最大数量
     */
    public $MaxNumberOfAutoScalingGroups;

    /**
     * @var integer 用户账户伸缩组的当前数量
     */
    public $NumberOfAutoScalingGroups;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MaxNumberOfLaunchConfigurations 用户账户被允许创建的启动配置最大数量
     * @param integer $NumberOfLaunchConfigurations 用户账户启动配置的当前数量
     * @param integer $MaxNumberOfAutoScalingGroups 用户账户被允许创建的伸缩组最大数量
     * @param integer $NumberOfAutoScalingGroups 用户账户伸缩组的当前数量
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
        if (array_key_exists("MaxNumberOfLaunchConfigurations",$param) and $param["MaxNumberOfLaunchConfigurations"] !== null) {
            $this->MaxNumberOfLaunchConfigurations = $param["MaxNumberOfLaunchConfigurations"];
        }

        if (array_key_exists("NumberOfLaunchConfigurations",$param) and $param["NumberOfLaunchConfigurations"] !== null) {
            $this->NumberOfLaunchConfigurations = $param["NumberOfLaunchConfigurations"];
        }

        if (array_key_exists("MaxNumberOfAutoScalingGroups",$param) and $param["MaxNumberOfAutoScalingGroups"] !== null) {
            $this->MaxNumberOfAutoScalingGroups = $param["MaxNumberOfAutoScalingGroups"];
        }

        if (array_key_exists("NumberOfAutoScalingGroups",$param) and $param["NumberOfAutoScalingGroups"] !== null) {
            $this->NumberOfAutoScalingGroups = $param["NumberOfAutoScalingGroups"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
