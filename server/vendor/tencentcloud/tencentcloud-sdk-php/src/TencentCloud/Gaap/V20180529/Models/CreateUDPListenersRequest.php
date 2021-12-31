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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUDPListeners请求参数结构体
 *
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method array getPorts() 获取监听器端口列表
 * @method void setPorts(array $Ports) 设置监听器端口列表
 * @method string getScheduler() 获取监听器源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）
 * @method void setScheduler(string $Scheduler) 设置监听器源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）
 * @method string getRealServerType() 获取监听器对应源站类型，支持IP或者DOMAIN类型
 * @method void setRealServerType(string $RealServerType) 设置监听器对应源站类型，支持IP或者DOMAIN类型
 * @method string getProxyId() 获取通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method void setProxyId(string $ProxyId) 设置通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method string getGroupId() 获取通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method void setGroupId(string $GroupId) 设置通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method array getRealServerPorts() 获取源站端口列表，该参数仅支持v1版本监听器和通道组监听器
 * @method void setRealServerPorts(array $RealServerPorts) 设置源站端口列表，该参数仅支持v1版本监听器和通道组监听器
 */
class CreateUDPListenersRequest extends AbstractModel
{
    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var array 监听器端口列表
     */
    public $Ports;

    /**
     * @var string 监听器源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）
     */
    public $Scheduler;

    /**
     * @var string 监听器对应源站类型，支持IP或者DOMAIN类型
     */
    public $RealServerType;

    /**
     * @var string 通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     */
    public $ProxyId;

    /**
     * @var string 通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     */
    public $GroupId;

    /**
     * @var array 源站端口列表，该参数仅支持v1版本监听器和通道组监听器
     */
    public $RealServerPorts;

    /**
     * @param string $ListenerName 监听器名称
     * @param array $Ports 监听器端口列表
     * @param string $Scheduler 监听器源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）
     * @param string $RealServerType 监听器对应源站类型，支持IP或者DOMAIN类型
     * @param string $ProxyId 通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     * @param string $GroupId 通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     * @param array $RealServerPorts 源站端口列表，该参数仅支持v1版本监听器和通道组监听器
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
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("RealServerPorts",$param) and $param["RealServerPorts"] !== null) {
            $this->RealServerPorts = $param["RealServerPorts"];
        }
    }
}
