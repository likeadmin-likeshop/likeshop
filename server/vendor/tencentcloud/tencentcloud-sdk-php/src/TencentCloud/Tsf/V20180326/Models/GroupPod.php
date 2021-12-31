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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署组实例列表
 *
 * @method string getPodName() 获取实例名称(对应到kubernetes的pod名称)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置实例名称(对应到kubernetes的pod名称)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodId() 获取实例ID(对应到kubernetes的pod id)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodId(string $PodId) 设置实例ID(对应到kubernetes的pod id)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取实例状态，请参考后面的实例以及容器的状态定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置实例状态，请参考后面的实例以及容器的状态定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取实例处于当前状态的原因，例如容器下载镜像失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置实例处于当前状态的原因，例如容器下载镜像失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeIp() 获取主机IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeIp(string $NodeIp) 设置主机IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取实例IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置实例IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取实例中容器的重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置实例中容器的重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReadyCount() 获取实例中已就绪容器的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadyCount(integer $ReadyCount) 设置实例中已就绪容器的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntime() 获取运行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntime(string $Runtime) 设置运行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取实例启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置实例启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceInstanceStatus() 获取服务实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceInstanceStatus(string $ServiceInstanceStatus) 设置服务实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceAvailableStatus() 获取机器实例可使用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceAvailableStatus(string $InstanceAvailableStatus) 设置机器实例可使用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取机器实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(string $InstanceStatus) 设置机器实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeInstanceId() 获取节点实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeInstanceId(string $NodeInstanceId) 设置节点实例id
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupPod extends AbstractModel
{
    /**
     * @var string 实例名称(对应到kubernetes的pod名称)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string 实例ID(对应到kubernetes的pod id)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodId;

    /**
     * @var string 实例状态，请参考后面的实例以及容器的状态定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 实例处于当前状态的原因，例如容器下载镜像失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 主机IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeIp;

    /**
     * @var string 实例IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer 实例中容器的重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @var integer 实例中已就绪容器的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadyCount;

    /**
     * @var string 运行时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Runtime;

    /**
     * @var string 实例启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 服务实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceInstanceStatus;

    /**
     * @var string 机器实例可使用状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceAvailableStatus;

    /**
     * @var string 机器实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var string 节点实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeInstanceId;

    /**
     * @param string $PodName 实例名称(对应到kubernetes的pod名称)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodId 实例ID(对应到kubernetes的pod id)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 实例状态，请参考后面的实例以及容器的状态定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 实例处于当前状态的原因，例如容器下载镜像失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeIp 主机IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip 实例IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount 实例中容器的重启次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReadyCount 实例中已就绪容器的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Runtime 运行时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 实例启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceInstanceStatus 服务实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceAvailableStatus 机器实例可使用状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus 机器实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeInstanceId 节点实例id
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
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("ReadyCount",$param) and $param["ReadyCount"] !== null) {
            $this->ReadyCount = $param["ReadyCount"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ServiceInstanceStatus",$param) and $param["ServiceInstanceStatus"] !== null) {
            $this->ServiceInstanceStatus = $param["ServiceInstanceStatus"];
        }

        if (array_key_exists("InstanceAvailableStatus",$param) and $param["InstanceAvailableStatus"] !== null) {
            $this->InstanceAvailableStatus = $param["InstanceAvailableStatus"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("NodeInstanceId",$param) and $param["NodeInstanceId"] !== null) {
            $this->NodeInstanceId = $param["NodeInstanceId"];
        }
    }
}
