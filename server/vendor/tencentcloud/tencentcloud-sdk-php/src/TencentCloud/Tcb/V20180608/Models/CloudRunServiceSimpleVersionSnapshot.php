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
 * CloudRunServiceSimpleVersionSnapshot 信息
 *
 * @method string getVersionName() 获取版本名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置版本名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取版本备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置版本备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpu() 获取cpu规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(float $Cpu) 设置cpu规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMem() 获取内存规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMem(float $Mem) 设置内存规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinNum() 获取最小副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinNum(integer $MinNum) 设置最小副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxNum() 获取最大副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxNum(integer $MaxNum) 设置最大副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageUrl() 获取镜像url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageUrl(string $ImageUrl) 设置镜像url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyType() 获取扩容策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyType(string $PolicyType) 设置扩容策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyThreshold() 获取策略阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyThreshold(integer $PolicyThreshold) 设置策略阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvParams() 获取环境参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvParams(string $EnvParams) 设置环境参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContainerPort() 获取容器端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerPort(integer $ContainerPort) 设置容器端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUploadType() 获取更新类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadType(string $UploadType) 设置更新类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDockerfilePath() 获取dockerfile路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDockerfilePath(string $DockerfilePath) 设置dockerfile路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuildDir() 获取构建路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildDir(string $BuildDir) 设置构建路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoType() 获取repo类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoType(string $RepoType) 设置repo类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepo() 获取仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepo(string $Repo) 设置仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBranch() 获取分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranch(string $Branch) 设置分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvId() 获取环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvId(string $EnvId) 设置环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServerName() 获取服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerName(string $ServerName) 设置服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取package名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置package名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageVersion() 获取package版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageVersion(string $PackageVersion) 设置package版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomLogs() 获取自定义log路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomLogs(string $CustomLogs) 设置自定义log路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInitialDelaySeconds() 获取延时健康检查时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置延时健康检查时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotName() 获取snapshot名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotName(string $SnapshotName) 设置snapshot名
注意：此字段可能返回 null，表示取不到有效值。
 * @method CloudBaseRunImageInfo getImageInfo() 获取镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageInfo(CloudBaseRunImageInfo $ImageInfo) 设置镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method CloudBaseCodeRepoDetail getCodeDetail() 获取代码仓库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeDetail(CloudBaseCodeRepoDetail $CodeDetail) 设置代码仓库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudRunServiceSimpleVersionSnapshot extends AbstractModel
{
    /**
     * @var string 版本名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var string 版本备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var float cpu规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var float 内存规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mem;

    /**
     * @var integer 最小副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinNum;

    /**
     * @var integer 最大副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxNum;

    /**
     * @var string 镜像url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageUrl;

    /**
     * @var string 扩容策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyType;

    /**
     * @var integer 策略阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyThreshold;

    /**
     * @var string 环境参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvParams;

    /**
     * @var integer 容器端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerPort;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 更新类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadType;

    /**
     * @var string dockerfile路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DockerfilePath;

    /**
     * @var string 构建路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildDir;

    /**
     * @var string repo类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoType;

    /**
     * @var string 仓库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Repo;

    /**
     * @var string 分支
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branch;

    /**
     * @var string 环境id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvId;

    /**
     * @var string 服务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerName;

    /**
     * @var string package名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string package版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageVersion;

    /**
     * @var string 自定义log路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomLogs;

    /**
     * @var integer 延时健康检查时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitialDelaySeconds;

    /**
     * @var string snapshot名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotName;

    /**
     * @var CloudBaseRunImageInfo 镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageInfo;

    /**
     * @var CloudBaseCodeRepoDetail 代码仓库信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeDetail;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $VersionName 版本名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 版本备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Cpu cpu规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Mem 内存规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinNum 最小副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxNum 最大副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageUrl 镜像url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyType 扩容策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyThreshold 策略阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvParams 环境参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContainerPort 容器端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UploadType 更新类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DockerfilePath dockerfile路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuildDir 构建路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoType repo类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Repo 仓库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Branch 分支
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvId 环境id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServerName 服务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName package名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageVersion package版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomLogs 自定义log路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InitialDelaySeconds 延时健康检查时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotName snapshot名
注意：此字段可能返回 null，表示取不到有效值。
     * @param CloudBaseRunImageInfo $ImageInfo 镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param CloudBaseCodeRepoDetail $CodeDetail 代码仓库信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
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

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UploadType",$param) and $param["UploadType"] !== null) {
            $this->UploadType = $param["UploadType"];
        }

        if (array_key_exists("DockerfilePath",$param) and $param["DockerfilePath"] !== null) {
            $this->DockerfilePath = $param["DockerfilePath"];
        }

        if (array_key_exists("BuildDir",$param) and $param["BuildDir"] !== null) {
            $this->BuildDir = $param["BuildDir"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("CustomLogs",$param) and $param["CustomLogs"] !== null) {
            $this->CustomLogs = $param["CustomLogs"];
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new CloudBaseRunImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("CodeDetail",$param) and $param["CodeDetail"] !== null) {
            $this->CodeDetail = new CloudBaseCodeRepoDetail();
            $this->CodeDetail->deserialize($param["CodeDetail"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
