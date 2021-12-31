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
 * 集群的实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceRole() 获取节点角色, MASTER, WORKER, ETCD, MASTER_ETCD,ALL, 默认为WORKER
 * @method void setInstanceRole(string $InstanceRole) 设置节点角色, MASTER, WORKER, ETCD, MASTER_ETCD,ALL, 默认为WORKER
 * @method string getFailedReason() 获取实例异常(或者处于初始化中)的原因
 * @method void setFailedReason(string $FailedReason) 设置实例异常(或者处于初始化中)的原因
 * @method string getInstanceState() 获取实例的状态（running 运行中，initializing 初始化中，failed 异常）
 * @method void setInstanceState(string $InstanceState) 设置实例的状态（running 运行中，initializing 初始化中，failed 异常）
 * @method string getDrainStatus() 获取实例是否封锁状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrainStatus(string $DrainStatus) 设置实例是否封锁状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取节点配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置节点配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取添加时间
 * @method void setCreatedTime(string $CreatedTime) 设置添加时间
 * @method string getLanIP() 获取节点内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLanIP(string $LanIP) 设置节点内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodePoolId() 获取资源池ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePoolId(string $NodePoolId) 设置资源池ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoscalingGroupId() 获取自动伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) 设置自动伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class Instance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 节点角色, MASTER, WORKER, ETCD, MASTER_ETCD,ALL, 默认为WORKER
     */
    public $InstanceRole;

    /**
     * @var string 实例异常(或者处于初始化中)的原因
     */
    public $FailedReason;

    /**
     * @var string 实例的状态（running 运行中，initializing 初始化中，failed 异常）
     */
    public $InstanceState;

    /**
     * @var string 实例是否封锁状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrainStatus;

    /**
     * @var InstanceAdvancedSettings 节点配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceAdvancedSettings;

    /**
     * @var string 添加时间
     */
    public $CreatedTime;

    /**
     * @var string 节点内网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LanIP;

    /**
     * @var string 资源池ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePoolId;

    /**
     * @var string 自动伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalingGroupId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceRole 节点角色, MASTER, WORKER, ETCD, MASTER_ETCD,ALL, 默认为WORKER
     * @param string $FailedReason 实例异常(或者处于初始化中)的原因
     * @param string $InstanceState 实例的状态（running 运行中，initializing 初始化中，failed 异常）
     * @param string $DrainStatus 实例是否封锁状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings 节点配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 添加时间
     * @param string $LanIP 节点内网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodePoolId 资源池ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoscalingGroupId 自动伸缩组ID
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("DrainStatus",$param) and $param["DrainStatus"] !== null) {
            $this->DrainStatus = $param["DrainStatus"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("LanIP",$param) and $param["LanIP"] !== null) {
            $this->LanIP = $param["LanIP"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("AutoscalingGroupId",$param) and $param["AutoscalingGroupId"] !== null) {
            $this->AutoscalingGroupId = $param["AutoscalingGroupId"];
        }
    }
}
