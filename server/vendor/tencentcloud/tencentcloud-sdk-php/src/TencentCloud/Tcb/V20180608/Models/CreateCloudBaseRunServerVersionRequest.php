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
 * CreateCloudBaseRunServerVersion请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getUploadType() 获取枚举（package/repository/image)
 * @method void setUploadType(string $UploadType) 设置枚举（package/repository/image)
 * @method integer getFlowRatio() 获取流量占比
 * @method void setFlowRatio(integer $FlowRatio) 设置流量占比
 * @method float getCpu() 获取Cpu的大小，单位：核
 * @method void setCpu(float $Cpu) 设置Cpu的大小，单位：核
 * @method float getMem() 获取Mem的大小，单位：G
 * @method void setMem(float $Mem) 设置Mem的大小，单位：G
 * @method integer getMinNum() 获取最小副本数，最小值：0
 * @method void setMinNum(integer $MinNum) 设置最小副本数，最小值：0
 * @method integer getMaxNum() 获取副本最大数，最大值：50
 * @method void setMaxNum(integer $MaxNum) 设置副本最大数，最大值：50
 * @method string getPolicyType() 获取策略类型(枚举值：比如cpu)
 * @method void setPolicyType(string $PolicyType) 设置策略类型(枚举值：比如cpu)
 * @method integer getPolicyThreshold() 获取策略阈值
 * @method void setPolicyThreshold(integer $PolicyThreshold) 设置策略阈值
 * @method integer getContainerPort() 获取服务端口
 * @method void setContainerPort(integer $ContainerPort) 设置服务端口
 * @method string getServerName() 获取服务名称
 * @method void setServerName(string $ServerName) 设置服务名称
 * @method string getRepositoryType() 获取repository的类型(coding/gitlab/github/coding)
 * @method void setRepositoryType(string $RepositoryType) 设置repository的类型(coding/gitlab/github/coding)
 * @method string getDockerfilePath() 获取Dockerfile地址
 * @method void setDockerfilePath(string $DockerfilePath) 设置Dockerfile地址
 * @method string getBuildDir() 获取构建目录
 * @method void setBuildDir(string $BuildDir) 设置构建目录
 * @method string getEnvParams() 获取环境变量
 * @method void setEnvParams(string $EnvParams) 设置环境变量
 * @method string getRepository() 获取repository地址
 * @method void setRepository(string $Repository) 设置repository地址
 * @method string getBranch() 获取分支
 * @method void setBranch(string $Branch) 设置分支
 * @method string getVersionRemark() 获取版本备注
 * @method void setVersionRemark(string $VersionRemark) 设置版本备注
 * @method string getPackageName() 获取代码包名字
 * @method void setPackageName(string $PackageName) 设置代码包名字
 * @method string getPackageVersion() 获取代码包的版本
 * @method void setPackageVersion(string $PackageVersion) 设置代码包的版本
 * @method CloudBaseRunImageInfo getImageInfo() 获取Image的详情
 * @method void setImageInfo(CloudBaseRunImageInfo $ImageInfo) 设置Image的详情
 * @method CloudBaseCodeRepoDetail getCodeDetail() 获取Github等拉取代码的详情
 * @method void setCodeDetail(CloudBaseCodeRepoDetail $CodeDetail) 设置Github等拉取代码的详情
 * @method CloudBaseRunImageSecretInfo getImageSecretInfo() 获取私有镜像秘钥信息
 * @method void setImageSecretInfo(CloudBaseRunImageSecretInfo $ImageSecretInfo) 设置私有镜像秘钥信息
 * @method string getImagePullSecret() 获取私有镜像 认证名称
 * @method void setImagePullSecret(string $ImagePullSecret) 设置私有镜像 认证名称
 * @method string getCustomLogs() 获取用户自定义采集日志路径
 * @method void setCustomLogs(string $CustomLogs) 设置用户自定义采集日志路径
 * @method integer getInitialDelaySeconds() 获取延迟多长时间开始健康检查（单位s）
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置延迟多长时间开始健康检查（单位s）
 * @method array getMountVolumeInfo() 获取cfs挂载信息
 * @method void setMountVolumeInfo(array $MountVolumeInfo) 设置cfs挂载信息
 * @method integer getAccessType() 获取4 代表只能微信链路访问
 * @method void setAccessType(integer $AccessType) 设置4 代表只能微信链路访问
 * @method CloudBaseEsInfo getEsInfo() 获取es信息
 * @method void setEsInfo(CloudBaseEsInfo $EsInfo) 设置es信息
 * @method boolean getEnableUnion() 获取是否使用统一域名
 * @method void setEnableUnion(boolean $EnableUnion) 设置是否使用统一域名
 * @method string getOperatorRemark() 获取操作备注
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作备注
 * @method string getServerPath() 获取服务路径
 * @method void setServerPath(string $ServerPath) 设置服务路径
 * @method string getImageReuseKey() 获取镜像复用的key
 * @method void setImageReuseKey(string $ImageReuseKey) 设置镜像复用的key
 * @method array getSidecarSpecs() 获取容器的描述文件
 * @method void setSidecarSpecs(array $SidecarSpecs) 设置容器的描述文件
 * @method CloudBaseSecurityContext getSecurity() 获取安全特性
 * @method void setSecurity(CloudBaseSecurityContext $Security) 设置安全特性
 * @method array getServiceVolumes() 获取服务磁盘挂载
 * @method void setServiceVolumes(array $ServiceVolumes) 设置服务磁盘挂载
 * @method integer getIsCreateJnsGw() 获取是否创建JnsGw 0未传默认创建 1创建 2不创建
 * @method void setIsCreateJnsGw(integer $IsCreateJnsGw) 设置是否创建JnsGw 0未传默认创建 1创建 2不创建
 * @method array getServiceVolumeMounts() 获取数据卷挂载参数
 * @method void setServiceVolumeMounts(array $ServiceVolumeMounts) 设置数据卷挂载参数
 */
class CreateCloudBaseRunServerVersionRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 枚举（package/repository/image)
     */
    public $UploadType;

    /**
     * @var integer 流量占比
     */
    public $FlowRatio;

    /**
     * @var float Cpu的大小，单位：核
     */
    public $Cpu;

    /**
     * @var float Mem的大小，单位：G
     */
    public $Mem;

    /**
     * @var integer 最小副本数，最小值：0
     */
    public $MinNum;

    /**
     * @var integer 副本最大数，最大值：50
     */
    public $MaxNum;

    /**
     * @var string 策略类型(枚举值：比如cpu)
     */
    public $PolicyType;

    /**
     * @var integer 策略阈值
     */
    public $PolicyThreshold;

    /**
     * @var integer 服务端口
     */
    public $ContainerPort;

    /**
     * @var string 服务名称
     */
    public $ServerName;

    /**
     * @var string repository的类型(coding/gitlab/github/coding)
     */
    public $RepositoryType;

    /**
     * @var string Dockerfile地址
     */
    public $DockerfilePath;

    /**
     * @var string 构建目录
     */
    public $BuildDir;

    /**
     * @var string 环境变量
     */
    public $EnvParams;

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
     * @var string 代码包的版本
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
     * @var CloudBaseRunImageSecretInfo 私有镜像秘钥信息
     */
    public $ImageSecretInfo;

    /**
     * @var string 私有镜像 认证名称
     */
    public $ImagePullSecret;

    /**
     * @var string 用户自定义采集日志路径
     */
    public $CustomLogs;

    /**
     * @var integer 延迟多长时间开始健康检查（单位s）
     */
    public $InitialDelaySeconds;

    /**
     * @var array cfs挂载信息
     */
    public $MountVolumeInfo;

    /**
     * @var integer 4 代表只能微信链路访问
     */
    public $AccessType;

    /**
     * @var CloudBaseEsInfo es信息
     */
    public $EsInfo;

    /**
     * @var boolean 是否使用统一域名
     */
    public $EnableUnion;

    /**
     * @var string 操作备注
     */
    public $OperatorRemark;

    /**
     * @var string 服务路径
     */
    public $ServerPath;

    /**
     * @var string 镜像复用的key
     */
    public $ImageReuseKey;

    /**
     * @var array 容器的描述文件
     */
    public $SidecarSpecs;

    /**
     * @var CloudBaseSecurityContext 安全特性
     */
    public $Security;

    /**
     * @var array 服务磁盘挂载
     */
    public $ServiceVolumes;

    /**
     * @var integer 是否创建JnsGw 0未传默认创建 1创建 2不创建
     */
    public $IsCreateJnsGw;

    /**
     * @var array 数据卷挂载参数
     */
    public $ServiceVolumeMounts;

    /**
     * @param string $EnvId 环境ID
     * @param string $UploadType 枚举（package/repository/image)
     * @param integer $FlowRatio 流量占比
     * @param float $Cpu Cpu的大小，单位：核
     * @param float $Mem Mem的大小，单位：G
     * @param integer $MinNum 最小副本数，最小值：0
     * @param integer $MaxNum 副本最大数，最大值：50
     * @param string $PolicyType 策略类型(枚举值：比如cpu)
     * @param integer $PolicyThreshold 策略阈值
     * @param integer $ContainerPort 服务端口
     * @param string $ServerName 服务名称
     * @param string $RepositoryType repository的类型(coding/gitlab/github/coding)
     * @param string $DockerfilePath Dockerfile地址
     * @param string $BuildDir 构建目录
     * @param string $EnvParams 环境变量
     * @param string $Repository repository地址
     * @param string $Branch 分支
     * @param string $VersionRemark 版本备注
     * @param string $PackageName 代码包名字
     * @param string $PackageVersion 代码包的版本
     * @param CloudBaseRunImageInfo $ImageInfo Image的详情
     * @param CloudBaseCodeRepoDetail $CodeDetail Github等拉取代码的详情
     * @param CloudBaseRunImageSecretInfo $ImageSecretInfo 私有镜像秘钥信息
     * @param string $ImagePullSecret 私有镜像 认证名称
     * @param string $CustomLogs 用户自定义采集日志路径
     * @param integer $InitialDelaySeconds 延迟多长时间开始健康检查（单位s）
     * @param array $MountVolumeInfo cfs挂载信息
     * @param integer $AccessType 4 代表只能微信链路访问
     * @param CloudBaseEsInfo $EsInfo es信息
     * @param boolean $EnableUnion 是否使用统一域名
     * @param string $OperatorRemark 操作备注
     * @param string $ServerPath 服务路径
     * @param string $ImageReuseKey 镜像复用的key
     * @param array $SidecarSpecs 容器的描述文件
     * @param CloudBaseSecurityContext $Security 安全特性
     * @param array $ServiceVolumes 服务磁盘挂载
     * @param integer $IsCreateJnsGw 是否创建JnsGw 0未传默认创建 1创建 2不创建
     * @param array $ServiceVolumeMounts 数据卷挂载参数
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

        if (array_key_exists("UploadType",$param) and $param["UploadType"] !== null) {
            $this->UploadType = $param["UploadType"];
        }

        if (array_key_exists("FlowRatio",$param) and $param["FlowRatio"] !== null) {
            $this->FlowRatio = $param["FlowRatio"];
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

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("DockerfilePath",$param) and $param["DockerfilePath"] !== null) {
            $this->DockerfilePath = $param["DockerfilePath"];
        }

        if (array_key_exists("BuildDir",$param) and $param["BuildDir"] !== null) {
            $this->BuildDir = $param["BuildDir"];
        }

        if (array_key_exists("EnvParams",$param) and $param["EnvParams"] !== null) {
            $this->EnvParams = $param["EnvParams"];
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

        if (array_key_exists("ImageSecretInfo",$param) and $param["ImageSecretInfo"] !== null) {
            $this->ImageSecretInfo = new CloudBaseRunImageSecretInfo();
            $this->ImageSecretInfo->deserialize($param["ImageSecretInfo"]);
        }

        if (array_key_exists("ImagePullSecret",$param) and $param["ImagePullSecret"] !== null) {
            $this->ImagePullSecret = $param["ImagePullSecret"];
        }

        if (array_key_exists("CustomLogs",$param) and $param["CustomLogs"] !== null) {
            $this->CustomLogs = $param["CustomLogs"];
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

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("EsInfo",$param) and $param["EsInfo"] !== null) {
            $this->EsInfo = new CloudBaseEsInfo();
            $this->EsInfo->deserialize($param["EsInfo"]);
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

        if (array_key_exists("ImageReuseKey",$param) and $param["ImageReuseKey"] !== null) {
            $this->ImageReuseKey = $param["ImageReuseKey"];
        }

        if (array_key_exists("SidecarSpecs",$param) and $param["SidecarSpecs"] !== null) {
            $this->SidecarSpecs = [];
            foreach ($param["SidecarSpecs"] as $key => $value){
                $obj = new CloudBaseRunSideSpec();
                $obj->deserialize($value);
                array_push($this->SidecarSpecs, $obj);
            }
        }

        if (array_key_exists("Security",$param) and $param["Security"] !== null) {
            $this->Security = new CloudBaseSecurityContext();
            $this->Security->deserialize($param["Security"]);
        }

        if (array_key_exists("ServiceVolumes",$param) and $param["ServiceVolumes"] !== null) {
            $this->ServiceVolumes = [];
            foreach ($param["ServiceVolumes"] as $key => $value){
                $obj = new CloudRunServiceVolume();
                $obj->deserialize($value);
                array_push($this->ServiceVolumes, $obj);
            }
        }

        if (array_key_exists("IsCreateJnsGw",$param) and $param["IsCreateJnsGw"] !== null) {
            $this->IsCreateJnsGw = $param["IsCreateJnsGw"];
        }

        if (array_key_exists("ServiceVolumeMounts",$param) and $param["ServiceVolumeMounts"] !== null) {
            $this->ServiceVolumeMounts = [];
            foreach ($param["ServiceVolumeMounts"] as $key => $value){
                $obj = new CloudBaseRunServiceVolumeMount();
                $obj->deserialize($value);
                array_push($this->ServiceVolumeMounts, $obj);
            }
        }
    }
}
