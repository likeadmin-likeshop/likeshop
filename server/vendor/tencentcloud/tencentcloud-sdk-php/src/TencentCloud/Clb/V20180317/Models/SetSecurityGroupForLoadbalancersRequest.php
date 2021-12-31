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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetSecurityGroupForLoadbalancers请求参数结构体
 *
 * @method string getSecurityGroup() 获取安全组ID，如 sg-12345678
 * @method void setSecurityGroup(string $SecurityGroup) 设置安全组ID，如 sg-12345678
 * @method string getOperationType() 获取ADD 绑定安全组；
DEL 解绑安全组
 * @method void setOperationType(string $OperationType) 设置ADD 绑定安全组；
DEL 解绑安全组
 * @method array getLoadBalancerIds() 获取负载均衡实例ID数组
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置负载均衡实例ID数组
 */
class SetSecurityGroupForLoadbalancersRequest extends AbstractModel
{
    /**
     * @var string 安全组ID，如 sg-12345678
     */
    public $SecurityGroup;

    /**
     * @var string ADD 绑定安全组；
DEL 解绑安全组
     */
    public $OperationType;

    /**
     * @var array 负载均衡实例ID数组
     */
    public $LoadBalancerIds;

    /**
     * @param string $SecurityGroup 安全组ID，如 sg-12345678
     * @param string $OperationType ADD 绑定安全组；
DEL 解绑安全组
     * @param array $LoadBalancerIds 负载均衡实例ID数组
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
        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }
    }
}
