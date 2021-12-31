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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡监听器
 *
 * @method string getListenerId() 获取负载均衡监听器 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取监听器协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置监听器协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取监听器端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置监听器端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheck getHealthCheck() 获取监听器的健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置监听器的健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduler() 获取请求的调度方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduler(string $Scheduler) 设置请求的调度方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionExpireTime() 获取会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getListenerName() 获取监听器的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerName(string $ListenerName) 设置监听器的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取监听器的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置监听器的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionType() 获取监听器的会话类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionType(string $SessionType) 设置监听器的会话类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class Listener extends AbstractModel
{
    /**
     * @var string 负载均衡监听器 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerId;

    /**
     * @var string 监听器协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var integer 监听器端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var HealthCheck 监听器的健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheck;

    /**
     * @var string 请求的调度方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheduler;

    /**
     * @var integer 会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionExpireTime;

    /**
     * @var string 监听器的名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerName;

    /**
     * @var string 监听器的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 监听器的会话类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionType;

    /**
     * @param string $ListenerId 负载均衡监听器 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 监听器协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 监听器端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheck $HealthCheck 监听器的健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheduler 请求的调度方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionExpireTime 会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ListenerName 监听器的名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 监听器的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionType 监听器的会话类型
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }
    }
}
