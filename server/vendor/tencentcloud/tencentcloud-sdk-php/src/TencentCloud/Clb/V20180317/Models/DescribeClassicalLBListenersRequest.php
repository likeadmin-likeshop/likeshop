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
 * DescribeClassicalLBListeners请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID。
 * @method array getListenerIds() 获取负载均衡监听器ID列表。
 * @method void setListenerIds(array $ListenerIds) 设置负载均衡监听器ID列表。
 * @method string getProtocol() 获取负载均衡监听的协议：'TCP', 'UDP', 'HTTP', 'HTTPS'。
 * @method void setProtocol(string $Protocol) 设置负载均衡监听的协议：'TCP', 'UDP', 'HTTP', 'HTTPS'。
 * @method integer getListenerPort() 获取负载均衡监听端口，范围为[1-65535]。
 * @method void setListenerPort(integer $ListenerPort) 设置负载均衡监听端口，范围为[1-65535]。
 * @method integer getStatus() 获取监听器的状态，0：创建中，1：运行中。
 * @method void setStatus(integer $Status) 设置监听器的状态，0：创建中，1：运行中。
 */
class DescribeClassicalLBListenersRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID。
     */
    public $LoadBalancerId;

    /**
     * @var array 负载均衡监听器ID列表。
     */
    public $ListenerIds;

    /**
     * @var string 负载均衡监听的协议：'TCP', 'UDP', 'HTTP', 'HTTPS'。
     */
    public $Protocol;

    /**
     * @var integer 负载均衡监听端口，范围为[1-65535]。
     */
    public $ListenerPort;

    /**
     * @var integer 监听器的状态，0：创建中，1：运行中。
     */
    public $Status;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID。
     * @param array $ListenerIds 负载均衡监听器ID列表。
     * @param string $Protocol 负载均衡监听的协议：'TCP', 'UDP', 'HTTP', 'HTTPS'。
     * @param integer $ListenerPort 负载均衡监听端口，范围为[1-65535]。
     * @param integer $Status 监听器的状态，0：创建中，1：运行中。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
