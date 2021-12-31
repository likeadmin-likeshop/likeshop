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
 * 传统型负载均衡监听器信息
 *
 * @method string getListenerId() 获取负载均衡监听器ID
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器ID
 * @method integer getListenerPort() 获取负载均衡监听器端口
 * @method void setListenerPort(integer $ListenerPort) 设置负载均衡监听器端口
 * @method integer getInstancePort() 获取监听器后端转发端口
 * @method void setInstancePort(integer $InstancePort) 设置监听器后端转发端口
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method string getProtocol() 获取监听器协议类型
 * @method void setProtocol(string $Protocol) 设置监听器协议类型
 * @method integer getSessionExpire() 获取会话保持时间
 * @method void setSessionExpire(integer $SessionExpire) 设置会话保持时间
 * @method integer getHealthSwitch() 获取是否开启了健康检查：1（开启）、0（关闭）
 * @method void setHealthSwitch(integer $HealthSwitch) 设置是否开启了健康检查：1（开启）、0（关闭）
 * @method integer getTimeOut() 获取响应超时时间
 * @method void setTimeOut(integer $TimeOut) 设置响应超时时间
 * @method integer getIntervalTime() 获取检查间隔
 * @method void setIntervalTime(integer $IntervalTime) 设置检查间隔
 * @method integer getHealthNum() 获取健康阈值
 * @method void setHealthNum(integer $HealthNum) 设置健康阈值
 * @method integer getUnhealthNum() 获取不健康阈值
 * @method void setUnhealthNum(integer $UnhealthNum) 设置不健康阈值
 * @method string getHttpHash() 获取传统型公网负载均衡的 HTTP、HTTPS 监听器的请求均衡方法。wrr 表示按权重轮询，ip_hash 表示根据访问的源 IP 进行一致性哈希方式来分发
 * @method void setHttpHash(string $HttpHash) 设置传统型公网负载均衡的 HTTP、HTTPS 监听器的请求均衡方法。wrr 表示按权重轮询，ip_hash 表示根据访问的源 IP 进行一致性哈希方式来分发
 * @method integer getHttpCode() 获取传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查返回码。具体可参考创建监听器中对该字段的解释
 * @method void setHttpCode(integer $HttpCode) 设置传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查返回码。具体可参考创建监听器中对该字段的解释
 * @method string getHttpCheckPath() 获取传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查路径
 * @method void setHttpCheckPath(string $HttpCheckPath) 设置传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查路径
 * @method string getSSLMode() 获取传统型公网负载均衡的 HTTPS 监听器的认证方式
 * @method void setSSLMode(string $SSLMode) 设置传统型公网负载均衡的 HTTPS 监听器的认证方式
 * @method string getCertId() 获取传统型公网负载均衡的 HTTPS 监听器的服务端证书 ID
 * @method void setCertId(string $CertId) 设置传统型公网负载均衡的 HTTPS 监听器的服务端证书 ID
 * @method string getCertCaId() 获取传统型公网负载均衡的 HTTPS 监听器的客户端证书 ID
 * @method void setCertCaId(string $CertCaId) 设置传统型公网负载均衡的 HTTPS 监听器的客户端证书 ID
 * @method integer getStatus() 获取监听器的状态，0 表示创建中，1 表示运行中
 * @method void setStatus(integer $Status) 设置监听器的状态，0 表示创建中，1 表示运行中
 */
class ClassicalListener extends AbstractModel
{
    /**
     * @var string 负载均衡监听器ID
     */
    public $ListenerId;

    /**
     * @var integer 负载均衡监听器端口
     */
    public $ListenerPort;

    /**
     * @var integer 监听器后端转发端口
     */
    public $InstancePort;

    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var string 监听器协议类型
     */
    public $Protocol;

    /**
     * @var integer 会话保持时间
     */
    public $SessionExpire;

    /**
     * @var integer 是否开启了健康检查：1（开启）、0（关闭）
     */
    public $HealthSwitch;

    /**
     * @var integer 响应超时时间
     */
    public $TimeOut;

    /**
     * @var integer 检查间隔
     */
    public $IntervalTime;

    /**
     * @var integer 健康阈值
     */
    public $HealthNum;

    /**
     * @var integer 不健康阈值
     */
    public $UnhealthNum;

    /**
     * @var string 传统型公网负载均衡的 HTTP、HTTPS 监听器的请求均衡方法。wrr 表示按权重轮询，ip_hash 表示根据访问的源 IP 进行一致性哈希方式来分发
     */
    public $HttpHash;

    /**
     * @var integer 传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查返回码。具体可参考创建监听器中对该字段的解释
     */
    public $HttpCode;

    /**
     * @var string 传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查路径
     */
    public $HttpCheckPath;

    /**
     * @var string 传统型公网负载均衡的 HTTPS 监听器的认证方式
     */
    public $SSLMode;

    /**
     * @var string 传统型公网负载均衡的 HTTPS 监听器的服务端证书 ID
     */
    public $CertId;

    /**
     * @var string 传统型公网负载均衡的 HTTPS 监听器的客户端证书 ID
     */
    public $CertCaId;

    /**
     * @var integer 监听器的状态，0 表示创建中，1 表示运行中
     */
    public $Status;

    /**
     * @param string $ListenerId 负载均衡监听器ID
     * @param integer $ListenerPort 负载均衡监听器端口
     * @param integer $InstancePort 监听器后端转发端口
     * @param string $ListenerName 监听器名称
     * @param string $Protocol 监听器协议类型
     * @param integer $SessionExpire 会话保持时间
     * @param integer $HealthSwitch 是否开启了健康检查：1（开启）、0（关闭）
     * @param integer $TimeOut 响应超时时间
     * @param integer $IntervalTime 检查间隔
     * @param integer $HealthNum 健康阈值
     * @param integer $UnhealthNum 不健康阈值
     * @param string $HttpHash 传统型公网负载均衡的 HTTP、HTTPS 监听器的请求均衡方法。wrr 表示按权重轮询，ip_hash 表示根据访问的源 IP 进行一致性哈希方式来分发
     * @param integer $HttpCode 传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查返回码。具体可参考创建监听器中对该字段的解释
     * @param string $HttpCheckPath 传统型公网负载均衡的 HTTP、HTTPS 监听器的健康检查路径
     * @param string $SSLMode 传统型公网负载均衡的 HTTPS 监听器的认证方式
     * @param string $CertId 传统型公网负载均衡的 HTTPS 监听器的服务端证书 ID
     * @param string $CertCaId 传统型公网负载均衡的 HTTPS 监听器的客户端证书 ID
     * @param integer $Status 监听器的状态，0 表示创建中，1 表示运行中
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

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("InstancePort",$param) and $param["InstancePort"] !== null) {
            $this->InstancePort = $param["InstancePort"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SessionExpire",$param) and $param["SessionExpire"] !== null) {
            $this->SessionExpire = $param["SessionExpire"];
        }

        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnhealthNum",$param) and $param["UnhealthNum"] !== null) {
            $this->UnhealthNum = $param["UnhealthNum"];
        }

        if (array_key_exists("HttpHash",$param) and $param["HttpHash"] !== null) {
            $this->HttpHash = $param["HttpHash"];
        }

        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
