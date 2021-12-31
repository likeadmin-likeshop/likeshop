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
 * 微服务实例信息
 *
 * @method string getInstanceId() 获取机器实例ID信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置机器实例ID信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取机器实例名称信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置机器实例名称信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取服务运行的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置服务运行的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLanIp() 获取机器实例内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLanIp(string $LanIp) 设置机器实例内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanIp() 获取机器实例外网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanIp(string $WanIp) 设置机器实例外网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceAvailableStatus() 获取机器可用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceAvailableStatus(string $InstanceAvailableStatus) 设置机器可用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceInstanceStatus() 获取服务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceInstanceStatus(string $ServiceInstanceStatus) 设置服务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取部署组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置部署组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取机器TSF可用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(string $InstanceStatus) 设置机器TSF可用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealthCheckUrl() 获取健康检查URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckUrl(string $HealthCheckUrl) 设置健康检查URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterType() 获取集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationPackageVersion() 获取应用程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationPackageVersion(string $ApplicationPackageVersion) 设置应用程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceStatus() 获取服务状态，passing 在线，critical 离线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceStatus(string $ServiceStatus) 设置服务状态，passing 在线，critical 离线
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegistrationTime() 获取注册时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistrationTime(integer $RegistrationTime) 设置注册时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastHeartbeatTime() 获取上次心跳时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastHeartbeatTime(integer $LastHeartbeatTime) 设置上次心跳时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistrationId() 获取实例注册id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistrationId(string $RegistrationId) 设置实例注册id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHiddenStatus() 获取屏蔽状态，hidden 为屏蔽，unhidden 为未屏蔽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHiddenStatus(string $HiddenStatus) 设置屏蔽状态，hidden 为屏蔽，unhidden 为未屏蔽
注意：此字段可能返回 null，表示取不到有效值。
 */
class MsInstance extends AbstractModel
{
    /**
     * @var string 机器实例ID信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 机器实例名称信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 服务运行的端口号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 机器实例内网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LanIp;

    /**
     * @var string 机器实例外网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanIp;

    /**
     * @var string 机器可用状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceAvailableStatus;

    /**
     * @var string 服务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceInstanceStatus;

    /**
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

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
     * @var string 命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @var string 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 部署组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 机器TSF可用状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var string 健康检查URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckUrl;

    /**
     * @var string 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string 应用程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationPackageVersion;

    /**
     * @var string 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string 服务状态，passing 在线，critical 离线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceStatus;

    /**
     * @var integer 注册时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistrationTime;

    /**
     * @var integer 上次心跳时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastHeartbeatTime;

    /**
     * @var string 实例注册id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistrationId;

    /**
     * @var string 屏蔽状态，hidden 为屏蔽，unhidden 为未屏蔽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HiddenStatus;

    /**
     * @param string $InstanceId 机器实例ID信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 机器实例名称信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 服务运行的端口号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LanIp 机器实例内网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanIp 机器实例外网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceAvailableStatus 机器可用状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceInstanceStatus 服务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId 命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 部署组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus 机器TSF可用状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HealthCheckUrl 健康检查URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterType 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationPackageVersion 应用程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceStatus 服务状态，passing 在线，critical 离线
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegistrationTime 注册时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastHeartbeatTime 上次心跳时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistrationId 实例注册id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HiddenStatus 屏蔽状态，hidden 为屏蔽，unhidden 为未屏蔽
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("InstanceAvailableStatus",$param) and $param["InstanceAvailableStatus"] !== null) {
            $this->InstanceAvailableStatus = $param["InstanceAvailableStatus"];
        }

        if (array_key_exists("ServiceInstanceStatus",$param) and $param["ServiceInstanceStatus"] !== null) {
            $this->ServiceInstanceStatus = $param["ServiceInstanceStatus"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("HealthCheckUrl",$param) and $param["HealthCheckUrl"] !== null) {
            $this->HealthCheckUrl = $param["HealthCheckUrl"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ApplicationPackageVersion",$param) and $param["ApplicationPackageVersion"] !== null) {
            $this->ApplicationPackageVersion = $param["ApplicationPackageVersion"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }

        if (array_key_exists("RegistrationTime",$param) and $param["RegistrationTime"] !== null) {
            $this->RegistrationTime = $param["RegistrationTime"];
        }

        if (array_key_exists("LastHeartbeatTime",$param) and $param["LastHeartbeatTime"] !== null) {
            $this->LastHeartbeatTime = $param["LastHeartbeatTime"];
        }

        if (array_key_exists("RegistrationId",$param) and $param["RegistrationId"] !== null) {
            $this->RegistrationId = $param["RegistrationId"];
        }

        if (array_key_exists("HiddenStatus",$param) and $param["HiddenStatus"] !== null) {
            $this->HiddenStatus = $param["HiddenStatus"];
        }
    }
}
