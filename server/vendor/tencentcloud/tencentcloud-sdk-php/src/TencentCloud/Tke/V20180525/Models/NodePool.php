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
 * 节点池描述
 *
 * @method string getNodePoolId() 获取NodePoolId 资源池id
 * @method void setNodePoolId(string $NodePoolId) 设置NodePoolId 资源池id
 * @method string getName() 获取Name 资源池名称
 * @method void setName(string $Name) 设置Name 资源池名称
 * @method string getClusterInstanceId() 获取ClusterInstanceId 集群实例id
 * @method void setClusterInstanceId(string $ClusterInstanceId) 设置ClusterInstanceId 集群实例id
 * @method string getLifeState() 获取LifeState 状态，当前节点池生命周期状态包括：creating，normal，updating，deleting，deleted
 * @method void setLifeState(string $LifeState) 设置LifeState 状态，当前节点池生命周期状态包括：creating，normal，updating，deleting，deleted
 * @method string getLaunchConfigurationId() 获取LaunchConfigurationId 配置
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置LaunchConfigurationId 配置
 * @method string getAutoscalingGroupId() 获取AutoscalingGroupId 分组id
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) 设置AutoscalingGroupId 分组id
 * @method array getLabels() 获取Labels 标签
 * @method void setLabels(array $Labels) 设置Labels 标签
 * @method array getTaints() 获取Taints 污点标记
 * @method void setTaints(array $Taints) 设置Taints 污点标记
 * @method NodeCountSummary getNodeCountSummary() 获取NodeCountSummary 节点列表
 * @method void setNodeCountSummary(NodeCountSummary $NodeCountSummary) 设置NodeCountSummary 节点列表
 * @method string getAutoscalingGroupStatus() 获取状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalingGroupStatus(string $AutoscalingGroupStatus) 设置状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxNodesNum() 获取最大节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxNodesNum(integer $MaxNodesNum) 设置最大节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinNodesNum() 获取最小节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinNodesNum(integer $MinNodesNum) 设置最小节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDesiredNodesNum() 获取期望的节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesiredNodesNum(integer $DesiredNodesNum) 设置期望的节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodePoolOs() 获取节点池osName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePoolOs(string $NodePoolOs) 设置节点池osName
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsCustomizeType() 获取容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageId() 获取镜像id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置镜像id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDesiredPodNum() 获取集群属于节点podCIDR大小自定义模式时，节点池需要带上pod数量属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesiredPodNum(integer $DesiredPodNum) 设置集群属于节点podCIDR大小自定义模式时，节点池需要带上pod数量属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserScript() 获取用户自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserScript(string $UserScript) 设置用户自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodePool extends AbstractModel
{
    /**
     * @var string NodePoolId 资源池id
     */
    public $NodePoolId;

    /**
     * @var string Name 资源池名称
     */
    public $Name;

    /**
     * @var string ClusterInstanceId 集群实例id
     */
    public $ClusterInstanceId;

    /**
     * @var string LifeState 状态，当前节点池生命周期状态包括：creating，normal，updating，deleting，deleted
     */
    public $LifeState;

    /**
     * @var string LaunchConfigurationId 配置
     */
    public $LaunchConfigurationId;

    /**
     * @var string AutoscalingGroupId 分组id
     */
    public $AutoscalingGroupId;

    /**
     * @var array Labels 标签
     */
    public $Labels;

    /**
     * @var array Taints 污点标记
     */
    public $Taints;

    /**
     * @var NodeCountSummary NodeCountSummary 节点列表
     */
    public $NodeCountSummary;

    /**
     * @var string 状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalingGroupStatus;

    /**
     * @var integer 最大节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxNodesNum;

    /**
     * @var integer 最小节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinNodesNum;

    /**
     * @var integer 期望的节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DesiredNodesNum;

    /**
     * @var string 节点池osName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePoolOs;

    /**
     * @var string 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsCustomizeType;

    /**
     * @var string 镜像id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var integer 集群属于节点podCIDR大小自定义模式时，节点池需要带上pod数量属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DesiredPodNum;

    /**
     * @var string 用户自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserScript;

    /**
     * @param string $NodePoolId NodePoolId 资源池id
     * @param string $Name Name 资源池名称
     * @param string $ClusterInstanceId ClusterInstanceId 集群实例id
     * @param string $LifeState LifeState 状态，当前节点池生命周期状态包括：creating，normal，updating，deleting，deleted
     * @param string $LaunchConfigurationId LaunchConfigurationId 配置
     * @param string $AutoscalingGroupId AutoscalingGroupId 分组id
     * @param array $Labels Labels 标签
     * @param array $Taints Taints 污点标记
     * @param NodeCountSummary $NodeCountSummary NodeCountSummary 节点列表
     * @param string $AutoscalingGroupStatus 状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxNodesNum 最大节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinNodesNum 最小节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DesiredNodesNum 期望的节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodePoolOs 节点池osName
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsCustomizeType 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageId 镜像id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DesiredPodNum 集群属于节点podCIDR大小自定义模式时，节点池需要带上pod数量属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserScript 用户自定义脚本
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
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterInstanceId",$param) and $param["ClusterInstanceId"] !== null) {
            $this->ClusterInstanceId = $param["ClusterInstanceId"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("AutoscalingGroupId",$param) and $param["AutoscalingGroupId"] !== null) {
            $this->AutoscalingGroupId = $param["AutoscalingGroupId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("NodeCountSummary",$param) and $param["NodeCountSummary"] !== null) {
            $this->NodeCountSummary = new NodeCountSummary();
            $this->NodeCountSummary->deserialize($param["NodeCountSummary"]);
        }

        if (array_key_exists("AutoscalingGroupStatus",$param) and $param["AutoscalingGroupStatus"] !== null) {
            $this->AutoscalingGroupStatus = $param["AutoscalingGroupStatus"];
        }

        if (array_key_exists("MaxNodesNum",$param) and $param["MaxNodesNum"] !== null) {
            $this->MaxNodesNum = $param["MaxNodesNum"];
        }

        if (array_key_exists("MinNodesNum",$param) and $param["MinNodesNum"] !== null) {
            $this->MinNodesNum = $param["MinNodesNum"];
        }

        if (array_key_exists("DesiredNodesNum",$param) and $param["DesiredNodesNum"] !== null) {
            $this->DesiredNodesNum = $param["DesiredNodesNum"];
        }

        if (array_key_exists("NodePoolOs",$param) and $param["NodePoolOs"] !== null) {
            $this->NodePoolOs = $param["NodePoolOs"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("DesiredPodNum",$param) and $param["DesiredPodNum"] !== null) {
            $this->DesiredPodNum = $param["DesiredPodNum"];
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }
    }
}
