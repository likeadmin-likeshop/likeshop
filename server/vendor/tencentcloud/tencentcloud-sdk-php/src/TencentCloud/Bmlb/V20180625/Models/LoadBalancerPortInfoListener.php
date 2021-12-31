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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取黑石负载均衡端口相关信息时返回的监听器信息（四层和七层）。
 *
 * @method string getListenerId() 获取负载均衡监听器ID。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器ID。
 * @method string getListenerName() 获取监听器名称。
 * @method void setListenerName(string $ListenerName) 设置监听器名称。
 * @method string getProtocol() 获取监听器协议类型，可选值：http，https，tcp，udp。
 * @method void setProtocol(string $Protocol) 设置监听器协议类型，可选值：http，https，tcp，udp。
 * @method integer getLoadBalancerPort() 获取监听器的监听端口。
 * @method void setLoadBalancerPort(integer $LoadBalancerPort) 设置监听器的监听端口。
 * @method integer getBandwidth() 获取计费模式为按固定带宽方式时监听器的限速值，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置计费模式为按固定带宽方式时监听器的限速值，单位：Mbps。
 * @method integer getStatus() 获取监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method void setStatus(integer $Status) 设置监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method integer getPort() 获取与监听器绑定的主机端口。
 * @method void setPort(integer $Port) 设置与监听器绑定的主机端口。
 */
class LoadBalancerPortInfoListener extends AbstractModel
{
    /**
     * @var string 负载均衡监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 监听器名称。
     */
    public $ListenerName;

    /**
     * @var string 监听器协议类型，可选值：http，https，tcp，udp。
     */
    public $Protocol;

    /**
     * @var integer 监听器的监听端口。
     */
    public $LoadBalancerPort;

    /**
     * @var integer 计费模式为按固定带宽方式时监听器的限速值，单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var integer 监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     */
    public $Status;

    /**
     * @var integer 与监听器绑定的主机端口。
     */
    public $Port;

    /**
     * @param string $ListenerId 负载均衡监听器ID。
     * @param string $ListenerName 监听器名称。
     * @param string $Protocol 监听器协议类型，可选值：http，https，tcp，udp。
     * @param integer $LoadBalancerPort 监听器的监听端口。
     * @param integer $Bandwidth 计费模式为按固定带宽方式时监听器的限速值，单位：Mbps。
     * @param integer $Status 监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     * @param integer $Port 与监听器绑定的主机端口。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("LoadBalancerPort",$param) and $param["LoadBalancerPort"] !== null) {
            $this->LoadBalancerPort = $param["LoadBalancerPort"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
