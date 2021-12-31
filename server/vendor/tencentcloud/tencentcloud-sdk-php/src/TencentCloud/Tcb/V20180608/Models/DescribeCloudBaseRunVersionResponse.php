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
 * DescribeCloudBaseRunVersion返回参数结构体
 *
 * @method string getVersionName() 获取版本名称
 * @method void setVersionName(string $VersionName) 设置版本名称
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDockerfilePath() 获取Dockefile的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDockerfilePath(string $DockerfilePath) 设置Dockefile的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuildDir() 获取DockerBuild的目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildDir(string $BuildDir) 设置DockerBuild的目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinNum() 获取副本最小值
 * @method void setMinNum(integer $MinNum) 设置副本最小值
 * @method integer getMaxNum() 获取副本最大值
 * @method void setMaxNum(integer $MaxNum) 设置副本最大值
 * @method string getPolicyType() 获取策略类型
 * @method void setPolicyType(string $PolicyType) 设置策略类型
 * @method float getPolicyThreshold() 获取策略阈值
 * @method void setPolicyThreshold(float $PolicyThreshold) 设置策略阈值
 * @method string getEnvParams() 获取环境变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvParams(string $EnvParams) 设置环境变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getUpdatedTime() 获取更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
 * @method string getVersionIP() 获取版本的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionIP(string $VersionIP) 设置版本的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersionPort() 获取版本的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionPort(integer $VersionPort) 设置版本的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取版本状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置版本状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取代码包的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置代码包的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageVersion() 获取代码版本的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageVersion(string $PackageVersion) 设置代码版本的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUploadType() 获取枚举（package/repository/image)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadType(string $UploadType) 设置枚举（package/repository/image)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoType() 获取Repo的类型(coding/gitlab/github/coding)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoType(string $RepoType) 设置Repo的类型(coding/gitlab/github/coding)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepo() 获取地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepo(string $Repo) 设置地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBranch() 获取分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranch(string $Branch) 设置分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServerName() 获取服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerName(string $ServerName) 设置服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPublic() 获取是否对于外网开放
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPublic(boolean $IsPublic) 设置是否对于外网开放
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubnetIds() 获取子网实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetIds(array $SubnetIds) 设置子网实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomLogs() 获取日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomLogs(string $CustomLogs) 设置日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContainerPort() 获取监听端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerPort(integer $ContainerPort) 设置监听端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInitialDelaySeconds() 获取延迟多长时间开始健康检查（单位s）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置延迟多长时间开始健康检查（单位s）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageUrl() 获取镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageUrl(string $ImageUrl) 设置镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpuSize() 获取CPU 大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuSize(float $CpuSize) 设置CPU 大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemSize() 获取MEM 大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemSize(float $MemSize) 设置MEM 大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudBaseRunVersionResponse extends AbstractModel
{
    /**
     * @var string 版本名称
     */
    public $VersionName;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string Dockefile的路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DockerfilePath;

    /**
     * @var string DockerBuild的目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildDir;

    /**
     * @var integer 副本最小值
     */
    public $MinNum;

    /**
     * @var integer 副本最大值
     */
    public $MaxNum;

    /**
     * @var string 策略类型
     */
    public $PolicyType;

    /**
     * @var float 策略阈值
     */
    public $PolicyThreshold;

    /**
     * @var string 环境变量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvParams;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
     */
    public $UpdatedTime;

    /**
     * @var string 版本的IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionIP;

    /**
     * @var integer 版本的端口号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionPort;

    /**
     * @var string 版本状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 代码包的名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string 代码版本的名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageVersion;

    /**
     * @var string 枚举（package/repository/image)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadType;

    /**
     * @var string Repo的类型(coding/gitlab/github/coding)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoType;

    /**
     * @var string 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Repo;

    /**
     * @var string 分支
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branch;

    /**
     * @var string 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerName;

    /**
     * @var boolean 是否对于外网开放
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPublic;

    /**
     * @var string vpc id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var array 子网实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetIds;

    /**
     * @var string 日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomLogs;

    /**
     * @var integer 监听端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerPort;

    /**
     * @var integer 延迟多长时间开始健康检查（单位s）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitialDelaySeconds;

    /**
     * @var string 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageUrl;

    /**
     * @var float CPU 大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuSize;

    /**
     * @var float MEM 大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemSize;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VersionName 版本名称
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DockerfilePath Dockefile的路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuildDir DockerBuild的目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinNum 副本最小值
     * @param integer $MaxNum 副本最大值
     * @param string $PolicyType 策略类型
     * @param float $PolicyThreshold 策略阈值
     * @param string $EnvParams 环境变量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间
     * @param string $UpdatedTime 更新时间
     * @param string $VersionIP 版本的IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VersionPort 版本的端口号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 版本状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName 代码包的名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageVersion 代码版本的名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UploadType 枚举（package/repository/image)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoType Repo的类型(coding/gitlab/github/coding)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Repo 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Branch 分支
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServerName 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPublic 是否对于外网开放
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId vpc id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubnetIds 子网实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomLogs 日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContainerPort 监听端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InitialDelaySeconds 延迟多长时间开始健康检查（单位s）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageUrl 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CpuSize CPU 大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MemSize MEM 大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("DockerfilePath",$param) and $param["DockerfilePath"] !== null) {
            $this->DockerfilePath = $param["DockerfilePath"];
        }

        if (array_key_exists("BuildDir",$param) and $param["BuildDir"] !== null) {
            $this->BuildDir = $param["BuildDir"];
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("VersionIP",$param) and $param["VersionIP"] !== null) {
            $this->VersionIP = $param["VersionIP"];
        }

        if (array_key_exists("VersionPort",$param) and $param["VersionPort"] !== null) {
            $this->VersionPort = $param["VersionPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("UploadType",$param) and $param["UploadType"] !== null) {
            $this->UploadType = $param["UploadType"];
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

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("CustomLogs",$param) and $param["CustomLogs"] !== null) {
            $this->CustomLogs = $param["CustomLogs"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("CpuSize",$param) and $param["CpuSize"] !== null) {
            $this->CpuSize = $param["CpuSize"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
