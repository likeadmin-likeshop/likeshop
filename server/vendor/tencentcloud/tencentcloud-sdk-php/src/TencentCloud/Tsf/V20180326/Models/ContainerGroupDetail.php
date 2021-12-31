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
 *  容器部署组详情
 *
 * @method string getGroupId() 获取部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceNum() 获取实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNum(integer $InstanceNum) 设置实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentNum() 获取已启动实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentNum(integer $CurrentNum) 设置已启动实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServer() 获取镜像server
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServer(string $Server) 设置镜像server
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReponame() 获取镜像名，如/tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReponame(string $Reponame) 设置镜像名，如/tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagName() 获取镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagName(string $TagName) 设置镜像版本名称
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
 * @method string getApplicationId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLbIp() 获取负载均衡ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLbIp(string $LbIp) 设置负载均衡ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterIp() 获取Service ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIp(string $ClusterIp) 设置Service ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNodePort() 获取NodePort端口，只有公网和NodePort访问方式才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePort(integer $NodePort) 设置NodePort端口，只有公网和NodePort访问方式才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuLimit() 获取最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuLimit(string $CpuLimit) 设置最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemLimit() 获取最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemLimit(string $MemLimit) 设置最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccessType() 获取0:公网 1:集群内访问 2：NodePort
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessType(integer $AccessType) 设置0:公网 1:集群内访问 2：NodePort
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateType() 获取更新方式：0:快速更新 1:滚动更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateType(integer $UpdateType) 设置更新方式：0:快速更新 1:滚动更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateIvl() 获取更新间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateIvl(integer $UpdateIvl) 设置更新间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtocolPorts() 获取端口数组对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolPorts(array $ProtocolPorts) 设置端口数组对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvs() 获取环境变量数组对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvs(array $Envs) 设置环境变量数组对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取pod错误信息描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置pod错误信息描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取部署组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置部署组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceType() 获取服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceType(string $MicroserviceType) 设置服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuRequest() 获取初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuRequest(string $CpuRequest) 设置初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemRequest() 获取初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemRequest(string $MemRequest) 设置初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupResourceType() 获取部署组资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupResourceType(string $GroupResourceType) 设置部署组资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取部署组实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置部署组实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdatedTime() 获取部署组更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(integer $UpdatedTime) 设置部署组更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxSurge() 获取kubernetes滚动更新策略的MaxSurge参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxSurge(string $MaxSurge) 设置kubernetes滚动更新策略的MaxSurge参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxUnavailable() 获取kubernetes滚动更新策略的MaxUnavailable参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxUnavailable(string $MaxUnavailable) 设置kubernetes滚动更新策略的MaxUnavailable参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckSettings getHealthCheckSettings() 获取部署组健康检查设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置部署组健康检查设置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerGroupDetail extends AbstractModel
{
    /**
     * @var string 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer 实例总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNum;

    /**
     * @var integer 已启动实例总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentNum;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 镜像server
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Server;

    /**
     * @var string 镜像名，如/tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reponame;

    /**
     * @var string 镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagName;

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
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 负载均衡ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LbIp;

    /**
     * @var string 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string Service ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIp;

    /**
     * @var integer NodePort端口，只有公网和NodePort访问方式才有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePort;

    /**
     * @var string 最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuLimit;

    /**
     * @var string 最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemLimit;

    /**
     * @var integer 0:公网 1:集群内访问 2：NodePort
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessType;

    /**
     * @var integer 更新方式：0:快速更新 1:滚动更新
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateType;

    /**
     * @var integer 更新间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateIvl;

    /**
     * @var array 端口数组对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolPorts;

    /**
     * @var array 环境变量数组对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Envs;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var string pod错误信息描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 部署组状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 服务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceType;

    /**
     * @var string 初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuRequest;

    /**
     * @var string 初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemRequest;

    /**
     * @var string 子网id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 部署组资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupResourceType;

    /**
     * @var integer 部署组实例个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var integer 部署组更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var string kubernetes滚动更新策略的MaxSurge参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxSurge;

    /**
     * @var string kubernetes滚动更新策略的MaxUnavailable参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxUnavailable;

    /**
     * @var HealthCheckSettings 部署组健康检查设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckSettings;

    /**
     * @param string $GroupId 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceNum 实例总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentNum 已启动实例总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Server 镜像server
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reponame 镜像名，如/tsf/nginx
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagName 镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId 命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LbIp 负载均衡ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterIp Service ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NodePort NodePort端口，只有公网和NodePort访问方式才有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuLimit 最大分配的 CPU 核数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemLimit 最大分配的内存 MiB 数，对应 K8S limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccessType 0:公网 1:集群内访问 2：NodePort
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateType 更新方式：0:快速更新 1:滚动更新
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateIvl 更新间隔,单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProtocolPorts 端口数组对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Envs 环境变量数组对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message pod错误信息描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 部署组状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceType 服务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuRequest 初始分配的 CPU 核数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemRequest 初始分配的内存 MiB 数，对应 K8S request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupResourceType 部署组资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount 部署组实例个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdatedTime 部署组更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxSurge kubernetes滚动更新策略的MaxSurge参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxUnavailable kubernetes滚动更新策略的MaxUnavailable参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckSettings $HealthCheckSettings 部署组健康检查设置
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("Reponame",$param) and $param["Reponame"] !== null) {
            $this->Reponame = $param["Reponame"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
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

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("LbIp",$param) and $param["LbIp"] !== null) {
            $this->LbIp = $param["LbIp"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ClusterIp",$param) and $param["ClusterIp"] !== null) {
            $this->ClusterIp = $param["ClusterIp"];
        }

        if (array_key_exists("NodePort",$param) and $param["NodePort"] !== null) {
            $this->NodePort = $param["NodePort"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("UpdateIvl",$param) and $param["UpdateIvl"] !== null) {
            $this->UpdateIvl = $param["UpdateIvl"];
        }

        if (array_key_exists("ProtocolPorts",$param) and $param["ProtocolPorts"] !== null) {
            $this->ProtocolPorts = [];
            foreach ($param["ProtocolPorts"] as $key => $value){
                $obj = new ProtocolPort();
                $obj->deserialize($value);
                array_push($this->ProtocolPorts, $obj);
            }
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("MemRequest",$param) and $param["MemRequest"] !== null) {
            $this->MemRequest = $param["MemRequest"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("GroupResourceType",$param) and $param["GroupResourceType"] !== null) {
            $this->GroupResourceType = $param["GroupResourceType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("MaxSurge",$param) and $param["MaxSurge"] !== null) {
            $this->MaxSurge = $param["MaxSurge"];
        }

        if (array_key_exists("MaxUnavailable",$param) and $param["MaxUnavailable"] !== null) {
            $this->MaxUnavailable = $param["MaxUnavailable"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
        }
    }
}
