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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollUpdateCloudBaseRunServerVersion请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getVersionName() 获取要替换的版本名称，可以为latest
 * @method void setVersionName(string $VersionName) 设置要替换的版本名称，可以为latest
 * @method string getUploadType() 获取枚举（package/repository/image)
 * @method void setUploadType(string $UploadType) 设置枚举（package/repository/image)
 * @method string getRepositoryType() 获取repository的类型(coding/gitlab/github)
 * @method void setRepositoryType(string $RepositoryType) 设置repository的类型(coding/gitlab/github)
 * @method integer getFlowRatio() 获取流量占比
 * @method void setFlowRatio(integer $FlowRatio) 设置流量占比
 * @method string getDockerfilePath() 获取dockerfile地址
 * @method void setDockerfilePath(string $DockerfilePath) 设置dockerfile地址
 * @method string getBuildDir() 获取构建目录
 * @method void setBuildDir(string $BuildDir) 设置构建目录
 * @method string getCpu() 获取Cpu的大小，单位：核
 * @method void setCpu(string $Cpu) 设置Cpu的大小，单位：核
 * @method string getMem() 获取Mem的大小，单位：G
 * @method void setMem(string $Mem) 设置Mem的大小，单位：G
 * @method string getMinNum() 获取最小副本数，最小值：0
 * @method void setMinNum(string $MinNum) 设置最小副本数，最小值：0
 * @method string getMaxNum() 获取最大副本数
 * @method void setMaxNum(string $MaxNum) 设置最大副本数
 * @method string getPolicyType() 获取策略类型
 * @method void setPolicyType(string $PolicyType) 设置策略类型
 * @method string getPolicyThreshold() 获取策略阈值
 * @method void setPolicyThreshold(string $PolicyThreshold) 设置策略阈值
 * @method string getEnvParams() 获取环境变量
 * @method void setEnvParams(string $EnvParams) 设置环境变量
 * @method integer getContainerPort() 获取容器端口
 * @method void setContainerPort(integer $ContainerPort) 设置容器端口
 * @method string getServerName() 获取服务名称
 * @method void setServerName(string $ServerName) 设置服务名称
 * @method string getRepository() 获取repository地址
 * @method void setRepository(string $Repository) 设置repository地址
 * @method string getBranch() 获取分支
 * @method void setBranch(string $Branch) 设置分支
 * @method string getVersionRemark() 获取版本备注
 * @method void setVersionRemark(string $VersionRemark) 设置版本备注
 * @method string getPackageName() 获取代码包名字
 * @method void setPackageName(string $PackageName) 设置代码包名字
 * @method string getPackageVersion() 获取代码包版本
 * @method void setPackageVersion(string $PackageVersion) 设置代码包版本
 * @method CloudBaseRunImageInfo getImageInfo() 获取Image的详情
 * @method void setImageInfo(CloudBaseRunImageInfo $ImageInfo) 设置Image的详情
 * @method CloudBaseCodeRepoDetail getCodeDetail() 获取Github等拉取代码的详情
 * @method void setCodeDetail(CloudBaseCodeRepoDetail $CodeDetail) 设置Github等拉取代码的详情
 * @method boolean getIsRebuild() 获取是否回放流量
 * @method void setIsRebuild(boolean $IsRebuild) 设置是否回放流量
 * @method integer getInitialDelaySeconds() 获取延迟多长时间开始健康检查（单位s）
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置延迟多长时间开始健康检查（单位s）
 * @method array getMountVolumeInfo() 获取cfs挂载信息
 * @method void setMountVolumeInfo(array $MountVolumeInfo) 设置cfs挂载信息
 * @method boolean getRollback() 获取是否回滚
 * @method void setRollback(boolean $Rollback) 设置是否回滚
 * @method string getSnapshotName() 获取版本历史名
 * @method void setSnapshotName(string $SnapshotName) 设置版本历史名
 * @method string getCustomLogs() 获取自定义采集路径
 * @method void setCustomLogs(string $CustomLogs) 设置自定义采集路径
 * @method boolean getEnableUnion() 获取是否启用统一域名
 * @method void setEnableUnion(boolean $EnableUnion) 设置是否启用统一域名
 * @method string getOperatorRemark() 获取操作备注
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作备注
 * @method string getServerPath() 获取服务路径（只会第一次生效）
 * @method void setServerPath(string $ServerPath) 设置服务路径（只会第一次生效）
 */
class RollUpdateCloudBaseRunServerVersionRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 要替换的版本名称，可以为latest
     */
    public $VersionName;

    /**
     * @var string 枚举（package/repository/image)
     */
    public $UploadType;

    /**
     * @var string repository的类型(coding/gitlab/github)
     */
    public $RepositoryType;

    /**
     * @var integer 流量占比
     */
    public $FlowRatio;

    /**
     * @var string dockerfile地址
     */
    public $DockerfilePath;

    /**
     * @var string 构建目录
     */
    public $BuildDir;

    /**
     * @var string Cpu的大小，单位：核
     */
    public $Cpu;

    /**
     * @var string Mem的大小，单位：G
     */
    public $Mem;

    /**
     * @var string 最小副本数，最小值：0
     */
    public $MinNum;

    /**
     * @var string 最大副本数
     */
    public $MaxNum;

    /**
     * @var string 策略类型
     */
    public $PolicyType;

    /**
     * @var string 策略阈值
     */
    public $PolicyThreshold;

    /**
     * @var string 环境变量
     */
    public $EnvParams;

    /**
     * @var integer 容器端口
     */
    public $ContainerPort;

    /**
     * @var string 服务名称
     */
    public $ServerName;

    /**
     * @var string repository地址
     */
    public $Repository;

    /**
     * @var string 分支
     */
    public $Branch;

    /**
     * @var string 版本备注
     */
    public $VersionRemark;

    /**
     * @var string 代码包名字
     */
    public $PackageName;

    /**
     * @var string 代码包版本
     */
    public $PackageVersion;

    /**
     * @var CloudBaseRunImageInfo Image的详情
     */
    public $ImageInfo;

    /**
     * @var CloudBaseCodeRepoDetail Github等拉取代码的详情
     */
    public $CodeDetail;

    /**
     * @var boolean 是否回放流量
     */
    public $IsRebuild;

    /**
     * @var integer 延迟多长时间开始健康检查（单位s）
     */
    public $InitialDelaySeconds;

    /**
     * @var array cfs挂载信息
     */
    public $MountVolumeInfo;

    /**
     * @var boolean 是否回滚
     */
    public $Rollback;

    /**
     * @var string 版本历史名
     */
    public $SnapshotName;

    /**
     * @var string 自定义采集路径
     */
    public $CustomLogs;

    /**
     * @var boolean 是否启用统一域名
     */
    public $EnableUnion;

    /**
     * @var string 操作备注
     */
    public $OperatorRemark;

    /**
     * @var string 服务路径（只会第一次生效）
     */
    public $ServerPath;

    /**
     * @param string $EnvId 环境ID
     * @param string $VersionName 要替换的版本名称，可以为latest
     * @param string $UploadType 枚举（package/repository/image)
     * @param string $RepositoryType repository的类型(coding/gitlab/github)
     * @param integer $FlowRatio 流量占比
     * @param string $DockerfilePath dockerfile地址
     * @param string $BuildDir 构建目录
     * @param string $Cpu Cpu的大小，单位：核
     * @param string $Mem Mem的大小，单位：G
     * @param string $MinNum 最小副本数，最小值：0
     * @param string $MaxNum 最大副本数
     * @param string $PolicyType 策略类型
     * @param string $PolicyThreshold 策略阈值
     * @param string $EnvParams 环境变量
     * @param integer $ContainerPort 容器端口
     * @param string $ServerName 服务名称
     * @param string $Repository repository地址
     * @param string $Branch 分支
     * @param string $VersionRemark 版本备注
     * @param string $PackageName 代码包名字
     * @param string $PackageVersion 代码包版本
     * @param CloudBaseRunImageInfo $ImageInfo Image的详情
     * @param CloudBaseCodeRepoDetail $CodeDetail Github等拉取代码的详情
     * @param boolean $IsRebuild 是否回放流量
     * @param integer $InitialDelaySeconds 延迟多长时间开始健康检查（单位s）
     * @param array $MountVolumeInfo cfs挂载信息
     * @param boolean $Rollback 是否回滚
     * @param string $SnapshotName 版本历史名
     * @param string $CustomLogs 自定义采集路径
     * @param boolean $EnableUnion 是否启用统一域名
     * @param string $OperatorRemark 操作备注
     * @param string $ServerPath 服务路径（只会第一次生效）
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("UploadType",$param) and $param["UploadType"] !== null) {
            $this->UploadType = $param["UploadType"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("FlowRatio",$param) and $param["FlowRatio"] !== null) {
            $this->FlowRatio = $param["FlowRatio"];
        }

        if (array_key_exists("DockerfilePath",$param) and $param["DockerfilePath"] !== null) {
            $this->DockerfilePath = $param["DockerfilePath"];
        }

        if (array_key_exists("BuildDir",$param) and $param["BuildDir"] !== null) {
            $this->BuildDir = $param["BuildDir"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("MinNum",$param) and $param["MinNum"] !== null) {
            $this->MinNum = $param["MinNum"];
        }

        if (array_key_exists("MaxNum",$param) and $param["MaxNum"] !== null) {
            $this->MaxNum = $param["MaxNum"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyThreshold",$param) and $param["PolicyThreshold"] !== null) {
            $this->PolicyThreshold = $param["PolicyThreshold"];
        }

        if (array_key_exists("EnvParams",$param) and $param["EnvParams"] !== null) {
            $this->EnvParams = $param["EnvParams"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("Repository",$param) and $param["Repository"] !== null) {
            $this->Repository = $param["Repository"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }

        if (array_key_exists("VersionRemark",$param) and $param["VersionRemark"] !== null) {
            $this->VersionRemark = $param["VersionRemark"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new CloudBaseRunImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("CodeDetail",$param) and $param["CodeDetail"] !== null) {
            $this->CodeDetail = new CloudBaseCodeRepoDetail();
            $this->CodeDetail->deserialize($param["CodeDetail"]);
        }

        if (array_key_exists("IsRebuild",$param) and $param["IsRebuild"] !== null) {
            $this->IsRebuild = $param["IsRebuild"];
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("MountVolumeInfo",$param) and $param["MountVolumeInfo"] !== null) {
            $this->MountVolumeInfo = [];
            foreach ($param["MountVolumeInfo"] as $key => $value){
                $obj = new CloudBaseRunVolumeMount();
                $obj->deserialize($value);
                array_push($this->MountVolumeInfo, $obj);
            }
        }

        if (array_key_exists("Rollback",$param) and $param["Rollback"] !== null) {
            $this->Rollback = $param["Rollback"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("CustomLogs",$param) and $param["CustomLogs"] !== null) {
            $this->CustomLogs = $param["CustomLogs"];
        }

        if (array_key_exists("EnableUnion",$param) and $param["EnableUnion"] !== null) {
            $this->EnableUnion = $param["EnableUnion"];
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }

        if (array_key_exists("ServerPath",$param) and $param["ServerPath"] !== null) {
            $this->ServerPath = $param["ServerPath"];
        }
    }
}
