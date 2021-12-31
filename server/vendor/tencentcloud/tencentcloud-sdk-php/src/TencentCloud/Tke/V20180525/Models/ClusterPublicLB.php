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
 * 弹性容器集群公网访问负载均衡信息
 *
 * @method boolean getEnabled() 获取是否开启公网访问LB
 * @method void setEnabled(boolean $Enabled) 设置是否开启公网访问LB
 * @method array getAllowFromCidrs() 获取允许访问的来源CIDR列表
 * @method void setAllowFromCidrs(array $AllowFromCidrs) 设置允许访问的来源CIDR列表
 * @method array getSecurityPolicies() 获取安全策略放通单个IP或CIDR(例如: "192.168.1.0/24",默认为拒绝所有)
 * @method void setSecurityPolicies(array $SecurityPolicies) 设置安全策略放通单个IP或CIDR(例如: "192.168.1.0/24",默认为拒绝所有)
 * @method string getExtraParam() 获取外网访问相关的扩展参数，格式为json
 * @method void setExtraParam(string $ExtraParam) 设置外网访问相关的扩展参数，格式为json
 */
class ClusterPublicLB extends AbstractModel
{
    /**
     * @var boolean 是否开启公网访问LB
     */
    public $Enabled;

    /**
     * @var array 允许访问的来源CIDR列表
     */
    public $AllowFromCidrs;

    /**
     * @var array 安全策略放通单个IP或CIDR(例如: "192.168.1.0/24",默认为拒绝所有)
     */
    public $SecurityPolicies;

    /**
     * @var string 外网访问相关的扩展参数，格式为json
     */
    public $ExtraParam;

    /**
     * @param boolean $Enabled 是否开启公网访问LB
     * @param array $AllowFromCidrs 允许访问的来源CIDR列表
     * @param array $SecurityPolicies 安全策略放通单个IP或CIDR(例如: "192.168.1.0/24",默认为拒绝所有)
     * @param string $ExtraParam 外网访问相关的扩展参数，格式为json
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("AllowFromCidrs",$param) and $param["AllowFromCidrs"] !== null) {
            $this->AllowFromCidrs = $param["AllowFromCidrs"];
        }

        if (array_key_exists("SecurityPolicies",$param) and $param["SecurityPolicies"] !== null) {
            $this->SecurityPolicies = $param["SecurityPolicies"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }
    }
}
