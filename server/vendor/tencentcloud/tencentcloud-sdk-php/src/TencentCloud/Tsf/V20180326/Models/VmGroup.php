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
 * 虚拟机部署组信息
 *
 * @method string getGroupId() 获取部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取部署组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置部署组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupStatus() 获取部署组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupStatus(string $GroupStatus) 设置部署组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageId() 获取程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(string $PackageId) 设置程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取程序包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置程序包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageVersion() 获取程序包版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageVersion(string $PackageVersion) 设置程序包版本号
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
 * @method string getApplicationName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取部署组机器数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置部署组机器数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunInstanceCount() 获取部署组运行中机器数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunInstanceCount(integer $RunInstanceCount) 设置部署组运行中机器数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartupParameters() 获取部署组启动参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupParameters(string $StartupParameters) 设置部署组启动参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取部署组创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置部署组创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取部署组更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置部署组更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffInstanceCount() 获取部署组停止机器数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffInstanceCount(integer $OffInstanceCount) 设置部署组停止机器数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupDesc() 获取部署组描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupDesc(string $GroupDesc) 设置部署组描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceType() 获取微服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceType(string $MicroserviceType) 设置微服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupResourceType() 获取部署组资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupResourceType(string $GroupResourceType) 设置部署组资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdatedTime() 获取部署组更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(integer $UpdatedTime) 设置部署组更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployDesc() 获取部署应用描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployDesc(string $DeployDesc) 设置部署应用描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateType() 获取滚动发布的更新方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateType(integer $UpdateType) 设置滚动发布的更新方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeployBetaEnable() 获取发布是否启用beta批次
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployBetaEnable(boolean $DeployBetaEnable) 设置发布是否启用beta批次
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeployBatch() 获取滚动发布的批次比例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployBatch(array $DeployBatch) 设置滚动发布的批次比例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployExeMode() 获取滚动发布的批次执行方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployExeMode(string $DeployExeMode) 设置滚动发布的批次执行方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeployWaitTime() 获取滚动发布的每个批次的等待时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployWaitTime(integer $DeployWaitTime) 设置滚动发布的每个批次的等待时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableHealthCheck() 获取是否开启了健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置是否开启了健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckSettings getHealthCheckSettings() 获取健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageType() 获取程序包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageType(string $PackageType) 设置程序包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartScript() 获取启动脚本 base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartScript(string $StartScript) 设置启动脚本 base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStopScript() 获取停止脚本 base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopScript(string $StopScript) 设置停止脚本 base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取部署组备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置部署组备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class VmGroup extends AbstractModel
{
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
     * @var string 部署组状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupStatus;

    /**
     * @var string 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var string 程序包名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string 程序包版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageVersion;

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
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var integer 部署组机器数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var integer 部署组运行中机器数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunInstanceCount;

    /**
     * @var string 部署组启动参数信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupParameters;

    /**
     * @var string 部署组创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 部署组更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 部署组停止机器数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffInstanceCount;

    /**
     * @var string 部署组描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupDesc;

    /**
     * @var string 微服务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceType;

    /**
     * @var string 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string 部署组资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupResourceType;

    /**
     * @var integer 部署组更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var string 部署应用描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployDesc;

    /**
     * @var integer 滚动发布的更新方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateType;

    /**
     * @var boolean 发布是否启用beta批次
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployBetaEnable;

    /**
     * @var array 滚动发布的批次比例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployBatch;

    /**
     * @var string 滚动发布的批次执行方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployExeMode;

    /**
     * @var integer 滚动发布的每个批次的等待时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployWaitTime;

    /**
     * @var boolean 是否开启了健康检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableHealthCheck;

    /**
     * @var HealthCheckSettings 健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckSettings;

    /**
     * @var string 程序包类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var string 启动脚本 base64编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartScript;

    /**
     * @var string 停止脚本 base64编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopScript;

    /**
     * @var string 部署组备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @param string $GroupId 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 部署组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupStatus 部署组状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageId 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName 程序包名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageVersion 程序包版本号
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
     * @param string $ApplicationName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount 部署组机器数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunInstanceCount 部署组运行中机器数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartupParameters 部署组启动参数信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 部署组创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 部署组更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OffInstanceCount 部署组停止机器数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupDesc 部署组描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceType 微服务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupResourceType 部署组资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdatedTime 部署组更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployDesc 部署应用描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateType 滚动发布的更新方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeployBetaEnable 发布是否启用beta批次
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeployBatch 滚动发布的批次比例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployExeMode 滚动发布的批次执行方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeployWaitTime 滚动发布的每个批次的等待时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableHealthCheck 是否开启了健康检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckSettings $HealthCheckSettings 健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageType 程序包类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartScript 启动脚本 base64编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StopScript 停止脚本 base64编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias 部署组备注
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

        if (array_key_exists("GroupStatus",$param) and $param["GroupStatus"] !== null) {
            $this->GroupStatus = $param["GroupStatus"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
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

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("RunInstanceCount",$param) and $param["RunInstanceCount"] !== null) {
            $this->RunInstanceCount = $param["RunInstanceCount"];
        }

        if (array_key_exists("StartupParameters",$param) and $param["StartupParameters"] !== null) {
            $this->StartupParameters = $param["StartupParameters"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OffInstanceCount",$param) and $param["OffInstanceCount"] !== null) {
            $this->OffInstanceCount = $param["OffInstanceCount"];
        }

        if (array_key_exists("GroupDesc",$param) and $param["GroupDesc"] !== null) {
            $this->GroupDesc = $param["GroupDesc"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("GroupResourceType",$param) and $param["GroupResourceType"] !== null) {
            $this->GroupResourceType = $param["GroupResourceType"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("DeployDesc",$param) and $param["DeployDesc"] !== null) {
            $this->DeployDesc = $param["DeployDesc"];
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("DeployBetaEnable",$param) and $param["DeployBetaEnable"] !== null) {
            $this->DeployBetaEnable = $param["DeployBetaEnable"];
        }

        if (array_key_exists("DeployBatch",$param) and $param["DeployBatch"] !== null) {
            $this->DeployBatch = $param["DeployBatch"];
        }

        if (array_key_exists("DeployExeMode",$param) and $param["DeployExeMode"] !== null) {
            $this->DeployExeMode = $param["DeployExeMode"];
        }

        if (array_key_exists("DeployWaitTime",$param) and $param["DeployWaitTime"] !== null) {
            $this->DeployWaitTime = $param["DeployWaitTime"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("StartScript",$param) and $param["StartScript"] !== null) {
            $this->StartScript = $param["StartScript"];
        }

        if (array_key_exists("StopScript",$param) and $param["StopScript"] !== null) {
            $this->StopScript = $param["StopScript"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
