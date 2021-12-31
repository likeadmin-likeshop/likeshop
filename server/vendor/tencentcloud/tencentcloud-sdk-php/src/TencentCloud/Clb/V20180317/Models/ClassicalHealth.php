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
 * 传统型负载均衡后端服务的健康状态
 *
 * @method string getIP() 获取后端服务的内网 IP
 * @method void setIP(string $IP) 设置后端服务的内网 IP
 * @method integer getPort() 获取后端服务的端口
 * @method void setPort(integer $Port) 设置后端服务的端口
 * @method integer getListenerPort() 获取负载均衡的监听端口
 * @method void setListenerPort(integer $ListenerPort) 设置负载均衡的监听端口
 * @method string getProtocol() 获取转发协议
 * @method void setProtocol(string $Protocol) 设置转发协议
 * @method integer getHealthStatus() 获取健康检查结果，1 表示健康，0 表示不健康
 * @method void setHealthStatus(integer $HealthStatus) 设置健康检查结果，1 表示健康，0 表示不健康
 */
class ClassicalHealth extends AbstractModel
{
    /**
     * @var string 后端服务的内网 IP
     */
    public $IP;

    /**
     * @var integer 后端服务的端口
     */
    public $Port;

    /**
     * @var integer 负载均衡的监听端口
     */
    public $ListenerPort;

    /**
     * @var string 转发协议
     */
    public $Protocol;

    /**
     * @var integer 健康检查结果，1 表示健康，0 表示不健康
     */
    public $HealthStatus;

    /**
     * @param string $IP 后端服务的内网 IP
     * @param integer $Port 后端服务的端口
     * @param integer $ListenerPort 负载均衡的监听端口
     * @param string $Protocol 转发协议
     * @param integer $HealthStatus 健康检查结果，1 表示健康，0 表示不健康
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }
    }
}
