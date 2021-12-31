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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployServiceV2请求参数结构体
 *
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method integer getContainerPort() 获取容器端口
 * @method void setContainerPort(integer $ContainerPort) 设置容器端口
 * @method integer getInitPodNum() 获取初始化 pod 数
 * @method void setInitPodNum(integer $InitPodNum) 设置初始化 pod 数
 * @method float getCpuSpec() 获取cpu规格
 * @method void setCpuSpec(float $CpuSpec) 设置cpu规格
 * @method float getMemorySpec() 获取内存规格
 * @method void setMemorySpec(float $MemorySpec) 设置内存规格
 * @method string getNamespaceId() 获取环境ID
 * @method void setNamespaceId(string $NamespaceId) 设置环境ID
 * @method string getImgRepo() 获取镜像仓库
 * @method void setImgRepo(string $ImgRepo) 设置镜像仓库
 * @method string getVersionDesc() 获取版本描述信息
 * @method void setVersionDesc(string $VersionDesc) 设置版本描述信息
 * @method string getJvmOpts() 获取启动参数
 * @method void setJvmOpts(string $JvmOpts) 设置启动参数
 * @method EsInfo getEsInfo() 获取弹性伸缩配置，不传默认不启用弹性伸缩配置
 * @method void setEsInfo(EsInfo $EsInfo) 设置弹性伸缩配置，不传默认不启用弹性伸缩配置
 * @method array getEnvConf() 获取环境变量配置
 * @method void setEnvConf(array $EnvConf) 设置环境变量配置
 * @method array getLogConfs() 获取日志配置
 * @method void setLogConfs(array $LogConfs) 设置日志配置
 * @method array getStorageConfs() 获取数据卷配置
 * @method void setStorageConfs(array $StorageConfs) 设置数据卷配置
 * @method array getStorageMountConfs() 获取数据卷挂载配置
 * @method void setStorageMountConfs(array $StorageMountConfs) 设置数据卷挂载配置
 * @method string getDeployMode() 获取部署类型。
- JAR：通过 jar 包部署
- WAR：通过 war 包部署
- IMAGE：通过镜像部署
 * @method void setDeployMode(string $DeployMode) 设置部署类型。
- JAR：通过 jar 包部署
- WAR：通过 war 包部署
- IMAGE：通过镜像部署
 * @method string getDeployVersion() 获取部署类型为 IMAGE 时，该参数表示镜像 tag。
部署类型为 JAR/WAR 时，该参数表示包版本号。
 * @method void setDeployVersion(string $DeployVersion) 设置部署类型为 IMAGE 时，该参数表示镜像 tag。
部署类型为 JAR/WAR 时，该参数表示包版本号。
 * @method string getPkgName() 获取包名。使用 JAR 包或者 WAR 包部署的时候必填。
 * @method void setPkgName(string $PkgName) 设置包名。使用 JAR 包或者 WAR 包部署的时候必填。
 * @method string getJdkVersion() 获取JDK 版本。
- KONA：使用 kona jdk。
- OPEN：使用 open jdk。
 * @method void setJdkVersion(string $JdkVersion) 设置JDK 版本。
- KONA：使用 kona jdk。
- OPEN：使用 open jdk。
 * @method array getSecurityGroupIds() 获取安全组ID s
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID s
 * @method LogOutputConf getLogOutputConf() 获取日志输出配置
 * @method void setLogOutputConf(LogOutputConf $LogOutputConf) 设置日志输出配置
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method string getDescription() 获取版本描述
 * @method void setDescription(string $Description) 设置版本描述
 * @method string getImageCommand() 获取镜像命令
 * @method void setImageCommand(string $ImageCommand) 设置镜像命令
 * @method array getImageArgs() 获取镜像命令参数
 * @method void setImageArgs(array $ImageArgs) 设置镜像命令参数
 * @method array getPortMappings() 获取服务端口映射
 * @method void setPortMappings(array $PortMappings) 设置服务端口映射
 * @method boolean getUseRegistryDefaultConfig() 获取是否添加默认注册中心配置
 * @method void setUseRegistryDefaultConfig(boolean $UseRegistryDefaultConfig) 设置是否添加默认注册中心配置
 * @method array getSettingConfs() 获取挂载配置信息
 * @method void setSettingConfs(array $SettingConfs) 设置挂载配置信息
 * @method EksService getEksService() 获取eks 访问设置
 * @method void setEksService(EksService $EksService) 设置eks 访问设置
 */
class DeployServiceV2Request extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var integer 容器端口
     */
    public $ContainerPort;

    /**
     * @var integer 初始化 pod 数
     */
    public $InitPodNum;

    /**
     * @var float cpu规格
     */
    public $CpuSpec;

    /**
     * @var float 内存规格
     */
    public $MemorySpec;

    /**
     * @var string 环境ID
     */
    public $NamespaceId;

    /**
     * @var string 镜像仓库
     */
    public $ImgRepo;

    /**
     * @var string 版本描述信息
     */
    public $VersionDesc;

    /**
     * @var string 启动参数
     */
    public $JvmOpts;

    /**
     * @var EsInfo 弹性伸缩配置，不传默认不启用弹性伸缩配置
     */
    public $EsInfo;

    /**
     * @var array 环境变量配置
     */
    public $EnvConf;

    /**
     * @var array 日志配置
     */
    public $LogConfs;

    /**
     * @var array 数据卷配置
     */
    public $StorageConfs;

    /**
     * @var array 数据卷挂载配置
     */
    public $StorageMountConfs;

    /**
     * @var string 部署类型。
- JAR：通过 jar 包部署
- WAR：通过 war 包部署
- IMAGE：通过镜像部署
     */
    public $DeployMode;

    /**
     * @var string 部署类型为 IMAGE 时，该参数表示镜像 tag。
部署类型为 JAR/WAR 时，该参数表示包版本号。
     */
    public $DeployVersion;

    /**
     * @var string 包名。使用 JAR 包或者 WAR 包部署的时候必填。
     */
    public $PkgName;

    /**
     * @var string JDK 版本。
- KONA：使用 kona jdk。
- OPEN：使用 open jdk。
     */
    public $JdkVersion;

    /**
     * @var array 安全组ID s
     */
    public $SecurityGroupIds;

    /**
     * @var LogOutputConf 日志输出配置
     */
    public $LogOutputConf;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var string 版本描述
     */
    public $Description;

    /**
     * @var string 镜像命令
     */
    public $ImageCommand;

    /**
     * @var array 镜像命令参数
     */
    public $ImageArgs;

    /**
     * @var array 服务端口映射
     */
    public $PortMappings;

    /**
     * @var boolean 是否添加默认注册中心配置
     */
    public $UseRegistryDefaultConfig;

    /**
     * @var array 挂载配置信息
     */
    public $SettingConfs;

    /**
     * @var EksService eks 访问设置
     */
    public $EksService;

    /**
     * @param string $ServiceId 服务ID
     * @param integer $ContainerPort 容器端口
     * @param integer $InitPodNum 初始化 pod 数
     * @param float $CpuSpec cpu规格
     * @param float $MemorySpec 内存规格
     * @param string $NamespaceId 环境ID
     * @param string $ImgRepo 镜像仓库
     * @param string $VersionDesc 版本描述信息
     * @param string $JvmOpts 启动参数
     * @param EsInfo $EsInfo 弹性伸缩配置，不传默认不启用弹性伸缩配置
     * @param array $EnvConf 环境变量配置
     * @param array $LogConfs 日志配置
     * @param array $StorageConfs 数据卷配置
     * @param array $StorageMountConfs 数据卷挂载配置
     * @param string $DeployMode 部署类型。
- JAR：通过 jar 包部署
- WAR：通过 war 包部署
- IMAGE：通过镜像部署
     * @param string $DeployVersion 部署类型为 IMAGE 时，该参数表示镜像 tag。
部署类型为 JAR/WAR 时，该参数表示包版本号。
     * @param string $PkgName 包名。使用 JAR 包或者 WAR 包部署的时候必填。
     * @param string $JdkVersion JDK 版本。
- KONA：使用 kona jdk。
- OPEN：使用 open jdk。
     * @param array $SecurityGroupIds 安全组ID s
     * @param LogOutputConf $LogOutputConf 日志输出配置
     * @param integer $SourceChannel 来源渠道
     * @param string $Description 版本描述
     * @param string $ImageCommand 镜像命令
     * @param array $ImageArgs 镜像命令参数
     * @param array $PortMappings 服务端口映射
     * @param boolean $UseRegistryDefaultConfig 是否添加默认注册中心配置
     * @param array $SettingConfs 挂载配置信息
     * @param EksService $EksService eks 访问设置
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("InitPodNum",$param) and $param["InitPodNum"] !== null) {
            $this->InitPodNum = $param["InitPodNum"];
        }

        if (array_key_exists("CpuSpec",$param) and $param["CpuSpec"] !== null) {
            $this->CpuSpec = $param["CpuSpec"];
        }

        if (array_key_exists("MemorySpec",$param) and $param["MemorySpec"] !== null) {
            $this->MemorySpec = $param["MemorySpec"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ImgRepo",$param) and $param["ImgRepo"] !== null) {
            $this->ImgRepo = $param["ImgRepo"];
        }

        if (array_key_exists("VersionDesc",$param) and $param["VersionDesc"] !== null) {
            $this->VersionDesc = $param["VersionDesc"];
        }

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
        }

        if (array_key_exists("EsInfo",$param) and $param["EsInfo"] !== null) {
            $this->EsInfo = new EsInfo();
            $this->EsInfo->deserialize($param["EsInfo"]);
        }

        if (array_key_exists("EnvConf",$param) and $param["EnvConf"] !== null) {
            $this->EnvConf = [];
            foreach ($param["EnvConf"] as $key => $value){
                $obj = new Pair();
                $obj->deserialize($value);
                array_push($this->EnvConf, $obj);
            }
        }

        if (array_key_exists("LogConfs",$param) and $param["LogConfs"] !== null) {
            $this->LogConfs = $param["LogConfs"];
        }

        if (array_key_exists("StorageConfs",$param) and $param["StorageConfs"] !== null) {
            $this->StorageConfs = [];
            foreach ($param["StorageConfs"] as $key => $value){
                $obj = new StorageConf();
                $obj->deserialize($value);
                array_push($this->StorageConfs, $obj);
            }
        }

        if (array_key_exists("StorageMountConfs",$param) and $param["StorageMountConfs"] !== null) {
            $this->StorageMountConfs = [];
            foreach ($param["StorageMountConfs"] as $key => $value){
                $obj = new StorageMountConf();
                $obj->deserialize($value);
                array_push($this->StorageMountConfs, $obj);
            }
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("JdkVersion",$param) and $param["JdkVersion"] !== null) {
            $this->JdkVersion = $param["JdkVersion"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LogOutputConf",$param) and $param["LogOutputConf"] !== null) {
            $this->LogOutputConf = new LogOutputConf();
            $this->LogOutputConf->deserialize($param["LogOutputConf"]);
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ImageCommand",$param) and $param["ImageCommand"] !== null) {
            $this->ImageCommand = $param["ImageCommand"];
        }

        if (array_key_exists("ImageArgs",$param) and $param["ImageArgs"] !== null) {
            $this->ImageArgs = $param["ImageArgs"];
        }

        if (array_key_exists("PortMappings",$param) and $param["PortMappings"] !== null) {
            $this->PortMappings = [];
            foreach ($param["PortMappings"] as $key => $value){
                $obj = new PortMapping();
                $obj->deserialize($value);
                array_push($this->PortMappings, $obj);
            }
        }

        if (array_key_exists("UseRegistryDefaultConfig",$param) and $param["UseRegistryDefaultConfig"] !== null) {
            $this->UseRegistryDefaultConfig = $param["UseRegistryDefaultConfig"];
        }

        if (array_key_exists("SettingConfs",$param) and $param["SettingConfs"] !== null) {
            $this->SettingConfs = [];
            foreach ($param["SettingConfs"] as $key => $value){
                $obj = new MountedSettingConf();
                $obj->deserialize($value);
                array_push($this->SettingConfs, $obj);
            }
        }

        if (array_key_exists("EksService",$param) and $param["EksService"] !== null) {
            $this->EksService = new EksService();
            $this->EksService->deserialize($param["EksService"]);
        }
    }
}
