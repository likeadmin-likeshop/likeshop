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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计算节点
 *
 * @method string getComputeNodeId() 获取计算节点ID
 * @method void setComputeNodeId(string $ComputeNodeId) 设置计算节点ID
 * @method string getComputeNodeInstanceId() 获取计算节点实例ID，对于CVM场景，即为CVM的InstanceId
 * @method void setComputeNodeInstanceId(string $ComputeNodeInstanceId) 设置计算节点实例ID，对于CVM场景，即为CVM的InstanceId
 * @method string getComputeNodeState() 获取计算节点状态
 * @method void setComputeNodeState(string $ComputeNodeState) 设置计算节点状态
 * @method integer getCpu() 获取CPU核数
 * @method void setCpu(integer $Cpu) 设置CPU核数
 * @method integer getMem() 获取内存容量，单位GiB
 * @method void setMem(integer $Mem) 设置内存容量，单位GiB
 * @method string getResourceCreatedTime() 获取资源创建完成时间
 * @method void setResourceCreatedTime(string $ResourceCreatedTime) 设置资源创建完成时间
 * @method integer getTaskInstanceNumAvailable() 获取计算节点运行  TaskInstance 可用容量。0表示计算节点忙碌。
 * @method void setTaskInstanceNumAvailable(integer $TaskInstanceNumAvailable) 设置计算节点运行  TaskInstance 可用容量。0表示计算节点忙碌。
 * @method string getAgentVersion() 获取Batch Agent 版本
 * @method void setAgentVersion(string $AgentVersion) 设置Batch Agent 版本
 * @method array getPrivateIpAddresses() 获取实例内网IP
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置实例内网IP
 * @method array getPublicIpAddresses() 获取实例公网IP
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置实例公网IP
 * @method string getResourceType() 获取计算环境资源类型，当前为CVM和CPM（黑石）
 * @method void setResourceType(string $ResourceType) 设置计算环境资源类型，当前为CVM和CPM（黑石）
 * @method string getResourceOrigin() 获取计算环境资源来源。<br>BATCH_CREATED：由批量计算创建的实例资源。<br>
USER_ATTACHED：用户添加到计算环境中的实例资源。
 * @method void setResourceOrigin(string $ResourceOrigin) 设置计算环境资源来源。<br>BATCH_CREATED：由批量计算创建的实例资源。<br>
USER_ATTACHED：用户添加到计算环境中的实例资源。
 */
class ComputeNode extends AbstractModel
{
    /**
     * @var string 计算节点ID
     */
    public $ComputeNodeId;

    /**
     * @var string 计算节点实例ID，对于CVM场景，即为CVM的InstanceId
     */
    public $ComputeNodeInstanceId;

    /**
     * @var string 计算节点状态
     */
    public $ComputeNodeState;

    /**
     * @var integer CPU核数
     */
    public $Cpu;

    /**
     * @var integer 内存容量，单位GiB
     */
    public $Mem;

    /**
     * @var string 资源创建完成时间
     */
    public $ResourceCreatedTime;

    /**
     * @var integer 计算节点运行  TaskInstance 可用容量。0表示计算节点忙碌。
     */
    public $TaskInstanceNumAvailable;

    /**
     * @var string Batch Agent 版本
     */
    public $AgentVersion;

    /**
     * @var array 实例内网IP
     */
    public $PrivateIpAddresses;

    /**
     * @var array 实例公网IP
     */
    public $PublicIpAddresses;

    /**
     * @var string 计算环境资源类型，当前为CVM和CPM（黑石）
     */
    public $ResourceType;

    /**
     * @var string 计算环境资源来源。<br>BATCH_CREATED：由批量计算创建的实例资源。<br>
USER_ATTACHED：用户添加到计算环境中的实例资源。
     */
    public $ResourceOrigin;

    /**
     * @param string $ComputeNodeId 计算节点ID
     * @param string $ComputeNodeInstanceId 计算节点实例ID，对于CVM场景，即为CVM的InstanceId
     * @param string $ComputeNodeState 计算节点状态
     * @param integer $Cpu CPU核数
     * @param integer $Mem 内存容量，单位GiB
     * @param string $ResourceCreatedTime 资源创建完成时间
     * @param integer $TaskInstanceNumAvailable 计算节点运行  TaskInstance 可用容量。0表示计算节点忙碌。
     * @param string $AgentVersion Batch Agent 版本
     * @param array $PrivateIpAddresses 实例内网IP
     * @param array $PublicIpAddresses 实例公网IP
     * @param string $ResourceType 计算环境资源类型，当前为CVM和CPM（黑石）
     * @param string $ResourceOrigin 计算环境资源来源。<br>BATCH_CREATED：由批量计算创建的实例资源。<br>
USER_ATTACHED：用户添加到计算环境中的实例资源。
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
        if (array_key_exists("ComputeNodeId",$param) and $param["ComputeNodeId"] !== null) {
            $this->ComputeNodeId = $param["ComputeNodeId"];
        }

        if (array_key_exists("ComputeNodeInstanceId",$param) and $param["ComputeNodeInstanceId"] !== null) {
            $this->ComputeNodeInstanceId = $param["ComputeNodeInstanceId"];
        }

        if (array_key_exists("ComputeNodeState",$param) and $param["ComputeNodeState"] !== null) {
            $this->ComputeNodeState = $param["ComputeNodeState"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ResourceCreatedTime",$param) and $param["ResourceCreatedTime"] !== null) {
            $this->ResourceCreatedTime = $param["ResourceCreatedTime"];
        }

        if (array_key_exists("TaskInstanceNumAvailable",$param) and $param["TaskInstanceNumAvailable"] !== null) {
            $this->TaskInstanceNumAvailable = $param["TaskInstanceNumAvailable"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceOrigin",$param) and $param["ResourceOrigin"] !== null) {
            $this->ResourceOrigin = $param["ResourceOrigin"];
        }
    }
}
