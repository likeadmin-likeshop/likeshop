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
 * 机器实例
 *
 * @method string getInstanceId() 获取机器实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置机器实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取机器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置机器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLanIp() 获取机器内网地址IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLanIp(string $LanIp) 设置机器内网地址IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanIp() 获取机器外网地址IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanIp(string $WanIp) 设置机器外网地址IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceDesc() 获取机器描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceDesc(string $InstanceDesc) 设置机器描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取VM的状态 虚机：虚机的状态 容器：Pod所在虚机的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(string $InstanceStatus) 设置VM的状态 虚机：虚机的状态 容器：Pod所在虚机的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceAvailableStatus() 获取VM的可使用状态 虚机：虚机是否能够作为资源使用 容器：虚机是否能够作为资源部署POD
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceAvailableStatus(string $InstanceAvailableStatus) 设置VM的可使用状态 虚机：虚机是否能够作为资源使用 容器：虚机是否能够作为资源部署POD
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceInstanceStatus() 获取服务下的服务实例的状态 虚机：应用是否可用 + Agent状态 容器：Pod状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceInstanceStatus(string $ServiceInstanceStatus) 设置服务下的服务实例的状态 虚机：应用是否可用 + Agent状态 容器：Pod状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCountInTsf() 获取标识此instance是否已添加在tsf中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountInTsf(integer $CountInTsf) 设置标识此instance是否已添加在tsf中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取机器所属部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置机器所属部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取机器所属应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置机器所属应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取机器所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置机器所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceCreatedTime() 获取机器实例在CVM的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCreatedTime(string $InstanceCreatedTime) 设置机器实例在CVM的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceExpiredTime() 获取机器实例在CVM的过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceExpiredTime(string $InstanceExpiredTime) 设置机器实例在CVM的过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceChargeType() 获取机器实例在CVM的计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置机器实例在CVM的计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInstanceTotalCpu() 获取机器实例总CPU信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTotalCpu(float $InstanceTotalCpu) 设置机器实例总CPU信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInstanceTotalMem() 获取机器实例总内存信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTotalMem(float $InstanceTotalMem) 设置机器实例总内存信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInstanceUsedCpu() 获取机器实例使用的CPU信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceUsedCpu(float $InstanceUsedCpu) 设置机器实例使用的CPU信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInstanceUsedMem() 获取机器实例使用的内存信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceUsedMem(float $InstanceUsedMem) 设置机器实例使用的内存信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInstanceLimitCpu() 获取机器实例Limit CPU信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceLimitCpu(float $InstanceLimitCpu) 设置机器实例Limit CPU信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInstanceLimitMem() 获取机器实例Limit 内存信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceLimitMem(float $InstanceLimitMem) 设置机器实例Limit 内存信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstancePkgVersion() 获取包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstancePkgVersion(string $InstancePkgVersion) 设置包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterType() 获取集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRestrictState() 获取机器实例业务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestrictState(string $RestrictState) 设置机器实例业务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperationState() 获取实例执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationState(integer $OperationState) 设置实例执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取NamespaceId Ns ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置NamespaceId Ns ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceZoneId() 获取InstanceZoneId 可用区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceZoneId(string $InstanceZoneId) 设置InstanceZoneId 可用区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceImportMode() 获取InstanceImportMode 导入模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceImportMode(string $InstanceImportMode) 设置InstanceImportMode 导入模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取ApplicationType应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置ApplicationType应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationResourceType() 获取ApplicationResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationResourceType(string $ApplicationResourceType) 设置ApplicationResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceSidecarStatus() 获取sidecar状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceSidecarStatus(string $ServiceSidecarStatus) 设置sidecar状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取部署组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置部署组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取NS名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置NS名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取健康检查原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置健康检查原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentVersion() 获取agent版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentVersion(string $AgentVersion) 设置agent版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class Instance extends AbstractModel
{
    /**
     * @var string 机器实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 机器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 机器内网地址IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LanIp;

    /**
     * @var string 机器外网地址IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanIp;

    /**
     * @var string 机器描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceDesc;

    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string VM的状态 虚机：虚机的状态 容器：Pod所在虚机的状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var string VM的可使用状态 虚机：虚机是否能够作为资源使用 容器：虚机是否能够作为资源部署POD
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceAvailableStatus;

    /**
     * @var string 服务下的服务实例的状态 虚机：应用是否可用 + Agent状态 容器：Pod状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceInstanceStatus;

    /**
     * @var integer 标识此instance是否已添加在tsf中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountInTsf;

    /**
     * @var string 机器所属部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 机器所属应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 机器所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var string 机器实例在CVM的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCreatedTime;

    /**
     * @var string 机器实例在CVM的过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceExpiredTime;

    /**
     * @var string 机器实例在CVM的计费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargeType;

    /**
     * @var float 机器实例总CPU信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTotalCpu;

    /**
     * @var float 机器实例总内存信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTotalMem;

    /**
     * @var float 机器实例使用的CPU信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceUsedCpu;

    /**
     * @var float 机器实例使用的内存信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceUsedMem;

    /**
     * @var float 机器实例Limit CPU信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceLimitCpu;

    /**
     * @var float 机器实例Limit 内存信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceLimitMem;

    /**
     * @var string 包版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstancePkgVersion;

    /**
     * @var string 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string 机器实例业务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestrictState;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 实例执行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationState;

    /**
     * @var string NamespaceId Ns ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var string InstanceZoneId 可用区ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceZoneId;

    /**
     * @var string InstanceImportMode 导入模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceImportMode;

    /**
     * @var string ApplicationType应用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string ApplicationResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationResourceType;

    /**
     * @var string sidecar状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceSidecarStatus;

    /**
     * @var string 部署组名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string NS名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @var string 健康检查原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string agent版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentVersion;

    /**
     * @param string $InstanceId 机器实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 机器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LanIp 机器内网地址IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanIp 机器外网地址IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceDesc 机器描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus VM的状态 虚机：虚机的状态 容器：Pod所在虚机的状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceAvailableStatus VM的可使用状态 虚机：虚机是否能够作为资源使用 容器：虚机是否能够作为资源部署POD
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceInstanceStatus 服务下的服务实例的状态 虚机：应用是否可用 + Agent状态 容器：Pod状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CountInTsf 标识此instance是否已添加在tsf中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 机器所属部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 机器所属应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 机器所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceCreatedTime 机器实例在CVM的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceExpiredTime 机器实例在CVM的过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceChargeType 机器实例在CVM的计费模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InstanceTotalCpu 机器实例总CPU信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InstanceTotalMem 机器实例总内存信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InstanceUsedCpu 机器实例使用的CPU信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InstanceUsedMem 机器实例使用的内存信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InstanceLimitCpu 机器实例Limit CPU信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InstanceLimitMem 机器实例Limit 内存信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstancePkgVersion 包版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterType 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RestrictState 机器实例业务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperationState 实例执行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId NamespaceId Ns ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceZoneId InstanceZoneId 可用区ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceImportMode InstanceImportMode 导入模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType ApplicationType应用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationResourceType ApplicationResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceSidecarStatus sidecar状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 部署组名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName NS名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 健康检查原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentVersion agent版本
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceAvailableStatus",$param) and $param["InstanceAvailableStatus"] !== null) {
            $this->InstanceAvailableStatus = $param["InstanceAvailableStatus"];
        }

        if (array_key_exists("ServiceInstanceStatus",$param) and $param["ServiceInstanceStatus"] !== null) {
            $this->ServiceInstanceStatus = $param["ServiceInstanceStatus"];
        }

        if (array_key_exists("CountInTsf",$param) and $param["CountInTsf"] !== null) {
            $this->CountInTsf = $param["CountInTsf"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("InstanceCreatedTime",$param) and $param["InstanceCreatedTime"] !== null) {
            $this->InstanceCreatedTime = $param["InstanceCreatedTime"];
        }

        if (array_key_exists("InstanceExpiredTime",$param) and $param["InstanceExpiredTime"] !== null) {
            $this->InstanceExpiredTime = $param["InstanceExpiredTime"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceTotalCpu",$param) and $param["InstanceTotalCpu"] !== null) {
            $this->InstanceTotalCpu = $param["InstanceTotalCpu"];
        }

        if (array_key_exists("InstanceTotalMem",$param) and $param["InstanceTotalMem"] !== null) {
            $this->InstanceTotalMem = $param["InstanceTotalMem"];
        }

        if (array_key_exists("InstanceUsedCpu",$param) and $param["InstanceUsedCpu"] !== null) {
            $this->InstanceUsedCpu = $param["InstanceUsedCpu"];
        }

        if (array_key_exists("InstanceUsedMem",$param) and $param["InstanceUsedMem"] !== null) {
            $this->InstanceUsedMem = $param["InstanceUsedMem"];
        }

        if (array_key_exists("InstanceLimitCpu",$param) and $param["InstanceLimitCpu"] !== null) {
            $this->InstanceLimitCpu = $param["InstanceLimitCpu"];
        }

        if (array_key_exists("InstanceLimitMem",$param) and $param["InstanceLimitMem"] !== null) {
            $this->InstanceLimitMem = $param["InstanceLimitMem"];
        }

        if (array_key_exists("InstancePkgVersion",$param) and $param["InstancePkgVersion"] !== null) {
            $this->InstancePkgVersion = $param["InstancePkgVersion"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperationState",$param) and $param["OperationState"] !== null) {
            $this->OperationState = $param["OperationState"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("InstanceZoneId",$param) and $param["InstanceZoneId"] !== null) {
            $this->InstanceZoneId = $param["InstanceZoneId"];
        }

        if (array_key_exists("InstanceImportMode",$param) and $param["InstanceImportMode"] !== null) {
            $this->InstanceImportMode = $param["InstanceImportMode"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ApplicationResourceType",$param) and $param["ApplicationResourceType"] !== null) {
            $this->ApplicationResourceType = $param["ApplicationResourceType"];
        }

        if (array_key_exists("ServiceSidecarStatus",$param) and $param["ServiceSidecarStatus"] !== null) {
            $this->ServiceSidecarStatus = $param["ServiceSidecarStatus"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }
    }
}
