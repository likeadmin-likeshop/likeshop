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
 * CreateTCPListeners请求参数结构体
 *
 * @method string getListenerName() 获取监听器名称。
 * @method void setListenerName(string $ListenerName) 设置监听器名称。
 * @method array getPorts() 获取监听器端口列表。
 * @method void setPorts(array $Ports) 设置监听器端口列表。
 * @method string getScheduler() 获取监听器源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）。
 * @method void setScheduler(string $Scheduler) 设置监听器源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）。
 * @method integer getHealthCheck() 获取源站是否开启健康检查：1开启，0关闭，UDP监听器不支持健康检查
 * @method void setHealthCheck(integer $HealthCheck) 设置源站是否开启健康检查：1开启，0关闭，UDP监听器不支持健康检查
 * @method string getRealServerType() 获取监听器对应源站类型，支持IP或者DOMAIN类型。DOMAIN源站类型不支持wrr的源站调度策略。
 * @method void setRealServerType(string $RealServerType) 设置监听器对应源站类型，支持IP或者DOMAIN类型。DOMAIN源站类型不支持wrr的源站调度策略。
 * @method string getProxyId() 获取通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method void setProxyId(string $ProxyId) 设置通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method string getGroupId() 获取通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method void setGroupId(string $GroupId) 设置通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
 * @method integer getDelayLoop() 获取源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
 * @method void setDelayLoop(integer $DelayLoop) 设置源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
 * @method integer getConnectTimeout() 获取源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
 * @method array getRealServerPorts() 获取源站端口列表，该参数仅支持v1版本监听器和通道组监听器。
 * @method void setRealServerPorts(array $RealServerPorts) 设置源站端口列表，该参数仅支持v1版本监听器和通道组监听器。
 * @method integer getClientIPMethod() 获取监听器获取客户端 IP 的方式，0表示 TOA, 1表示Proxy Protocol
 * @method void setClientIPMethod(integer $ClientIPMethod) 设置监听器获取客户端 IP 的方式，0表示 TOA, 1表示Proxy Protocol
 * @method integer getFailoverSwitch() 获取源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
 * @method void setFailoverSwitch(integer $FailoverSwitch) 设置源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
 */
class CreateTCPListenersRequest extends AbstractModel
{
    /**
     * @var string 监听器名称。
     */
    public $ListenerName;

    /**
     * @var array 监听器端口列表。
     */
    public $Ports;

    /**
     * @var string 监听器源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）。
     */
    public $Scheduler;

    /**
     * @var integer 源站是否开启健康检查：1开启，0关闭，UDP监听器不支持健康检查
     */
    public $HealthCheck;

    /**
     * @var string 监听器对应源站类型，支持IP或者DOMAIN类型。DOMAIN源站类型不支持wrr的源站调度策略。
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
     * @var integer 源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
     */
    public $DelayLoop;

    /**
     * @var integer 源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
     */
    public $ConnectTimeout;

    /**
     * @var array 源站端口列表，该参数仅支持v1版本监听器和通道组监听器。
     */
    public $RealServerPorts;

    /**
     * @var integer 监听器获取客户端 IP 的方式，0表示 TOA, 1表示Proxy Protocol
     */
    public $ClientIPMethod;

    /**
     * @var integer 源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
     */
    public $FailoverSwitch;

    /**
     * @param string $ListenerName 监听器名称。
     * @param array $Ports 监听器端口列表。
     * @param string $Scheduler 监听器源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）。
     * @param integer $HealthCheck 源站是否开启健康检查：1开启，0关闭，UDP监听器不支持健康检查
     * @param string $RealServerType 监听器对应源站类型，支持IP或者DOMAIN类型。DOMAIN源站类型不支持wrr的源站调度策略。
     * @param string $ProxyId 通道ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     * @param string $GroupId 通道组ID，ProxyId和GroupId必须设置一个，但不能同时设置。
     * @param integer $DelayLoop 源站健康检查时间间隔，单位：秒。时间间隔取值在[5，300]之间。
     * @param integer $ConnectTimeout 源站健康检查响应超时时间，单位：秒。超时时间取值在[2，60]之间。超时时间应小于健康检查时间间隔DelayLoop。
     * @param array $RealServerPorts 源站端口列表，该参数仅支持v1版本监听器和通道组监听器。
     * @param integer $ClientIPMethod 监听器获取客户端 IP 的方式，0表示 TOA, 1表示Proxy Protocol
     * @param integer $FailoverSwitch 源站是否开启主备模式：1开启，0关闭，DOMAIN类型源站不支持开启
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

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
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

        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("RealServerPorts",$param) and $param["RealServerPorts"] !== null) {
            $this->RealServerPorts = $param["RealServerPorts"];
        }

        if (array_key_exists("ClientIPMethod",$param) and $param["ClientIPMethod"] !== null) {
            $this->ClientIPMethod = $param["ClientIPMethod"];
        }

        if (array_key_exists("FailoverSwitch",$param) and $param["FailoverSwitch"] !== null) {
            $this->FailoverSwitch = $param["FailoverSwitch"];
        }
    }
}
