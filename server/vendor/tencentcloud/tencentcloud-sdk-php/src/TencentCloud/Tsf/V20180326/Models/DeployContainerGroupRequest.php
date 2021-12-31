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
 * DeployContainerGroup请求参数结构体
 *
 * @method string getGroupId() 获取部署组ID，分组唯一标识
 * @method void setGroupId(string $GroupId) 设置部署组ID，分组唯一标识
 * @method string getTagName() 获取镜像版本名称,如v1
 * @method void setTagName(string $TagName) 设置镜像版本名称,如v1
 * @method integer getInstanceNum() 获取实例数量
 * @method void setInstanceNum(integer $InstanceNum) 设置实例数量
 * @method string getServer() 获取镜像server
 * @method void setServer(string $Server) 设置镜像server
 * @method string getReponame() 获取旧版镜像名，如/tsf/nginx
 * @method void setReponame(string $Reponame) 设置旧版镜像名，如/tsf/nginx
 * @method string getCpuLimit() 获取业务容器最大的 CPU 核数，对应 K8S 的 limit；不填时默认为 request 的 2 倍
 * @method void setCpuLimit(string $CpuLimit) 设置业务容器最大的 CPU 核数，对应 K8S 的 limit；不填时默认为 request 的 2 倍
 * @method string getMemLimit() 获取业务容器最大的内存 MiB 数，对应 K8S 的 limit；不填时默认为 request 的 2 倍
 * @method void setMemLimit(string $MemLimit) 设置业务容器最大的内存 MiB 数，对应 K8S 的 limit；不填时默认为 request 的 2 倍
 * @method string getJvmOpts() 获取jvm参数
 * @method void setJvmOpts(string $JvmOpts) 设置jvm参数
 * @method string getCpuRequest() 获取业务容器分配的 CPU 核数，对应 K8S 的 request
 * @method void setCpuRequest(string $CpuRequest) 设置业务容器分配的 CPU 核数，对应 K8S 的 request
 * @method string getMemRequest() 获取业务容器分配的内存 MiB 数，对应 K8S 的 request
 * @method void setMemRequest(string $MemRequest) 设置业务容器分配的内存 MiB 数，对应 K8S 的 request
 * @method boolean getDoNotStart() 获取是否不立即启动
 * @method void setDoNotStart(boolean $DoNotStart) 设置是否不立即启动
 * @method string getRepoName() 获取（优先使用）新版镜像名，如/tsf/nginx
 * @method void setRepoName(string $RepoName) 设置（优先使用）新版镜像名，如/tsf/nginx
 * @method integer getUpdateType() 获取更新方式：0:快速更新 1:滚动更新
 * @method void setUpdateType(integer $UpdateType) 设置更新方式：0:快速更新 1:滚动更新
 * @method integer getUpdateIvl() 获取滚动更新必填，更新间隔
 * @method void setUpdateIvl(integer $UpdateIvl) 设置滚动更新必填，更新间隔
 * @method string getAgentCpuRequest() 获取agent 容器分配的 CPU 核数，对应 K8S 的 request
 * @method void setAgentCpuRequest(string $AgentCpuRequest) 设置agent 容器分配的 CPU 核数，对应 K8S 的 request
 * @method string getAgentCpuLimit() 获取agent 容器最大的 CPU 核数，对应 K8S 的 limit
 * @method void setAgentCpuLimit(string $AgentCpuLimit) 设置agent 容器最大的 CPU 核数，对应 K8S 的 limit
 * @method string getAgentMemRequest() 获取agent 容器分配的内存 MiB 数，对应 K8S 的 request
 * @method void setAgentMemRequest(string $AgentMemRequest) 设置agent 容器分配的内存 MiB 数，对应 K8S 的 request
 * @method string getAgentMemLimit() 获取agent 容器最大的内存 MiB 数，对应 K8S 的 limit
 * @method void setAgentMemLimit(string $AgentMemLimit) 设置agent 容器最大的内存 MiB 数，对应 K8S 的 limit
 * @method string getIstioCpuRequest() 获取istioproxy 容器分配的 CPU 核数，对应 K8S 的 request
 * @method void setIstioCpuRequest(string $IstioCpuRequest) 设置istioproxy 容器分配的 CPU 核数，对应 K8S 的 request
 * @method string getIstioCpuLimit() 获取istioproxy 容器最大的 CPU 核数，对应 K8S 的 limit
 * @method void setIstioCpuLimit(string $IstioCpuLimit) 设置istioproxy 容器最大的 CPU 核数，对应 K8S 的 limit
 * @method string getIstioMemRequest() 获取istioproxy 容器分配的内存 MiB 数，对应 K8S 的 request
 * @method void setIstioMemRequest(string $IstioMemRequest) 设置istioproxy 容器分配的内存 MiB 数，对应 K8S 的 request
 * @method string getIstioMemLimit() 获取istioproxy 容器最大的内存 MiB 数，对应 K8S 的 limit
 * @method void setIstioMemLimit(string $IstioMemLimit) 设置istioproxy 容器最大的内存 MiB 数，对应 K8S 的 limit
 * @method string getMaxSurge() 获取kubernetes滚动更新策略的MaxSurge参数
 * @method void setMaxSurge(string $MaxSurge) 设置kubernetes滚动更新策略的MaxSurge参数
 * @method string getMaxUnavailable() 获取kubernetes滚动更新策略的MaxUnavailable参数
 * @method void setMaxUnavailable(string $MaxUnavailable) 设置kubernetes滚动更新策略的MaxUnavailable参数
 * @method HealthCheckSettings getHealthCheckSettings() 获取健康检查配置信息，若不指定该参数，则默认不设置健康检查。
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置健康检查配置信息，若不指定该参数，则默认不设置健康检查。
 * @method array getEnvs() 获取部署组应用运行的环境变量。若不指定该参数，则默认不设置额外的环境变量。
 * @method void setEnvs(array $Envs) 设置部署组应用运行的环境变量。若不指定该参数，则默认不设置额外的环境变量。
 * @method ServiceSetting getServiceSetting() 获取容器部署组的网络设置。
 * @method void setServiceSetting(ServiceSetting $ServiceSetting) 设置容器部署组的网络设置。
 * @method boolean getDeployAgent() 获取是否部署 agent 容器。若不指定该参数，则默认不部署 agent 容器。
 * @method void setDeployAgent(boolean $DeployAgent) 设置是否部署 agent 容器。若不指定该参数，则默认不部署 agent 容器。
 * @method SchedulingStrategy getSchedulingStrategy() 获取节点调度策略。若不指定改参数，则默认不使用节点调度策略。
 * @method void setSchedulingStrategy(SchedulingStrategy $SchedulingStrategy) 设置节点调度策略。若不指定改参数，则默认不使用节点调度策略。
 */
class DeployContainerGroupRequest extends AbstractModel
{
    /**
     * @var string 部署组ID，分组唯一标识
     */
    public $GroupId;

    /**
     * @var string 镜像版本名称,如v1
     */
    public $TagName;

    /**
     * @var integer 实例数量
     */
    public $InstanceNum;

    /**
     * @var string 镜像server
     */
    public $Server;

    /**
     * @var string 旧版镜像名，如/tsf/nginx
     */
    public $Reponame;

    /**
     * @var string 业务容器最大的 CPU 核数，对应 K8S 的 limit；不填时默认为 request 的 2 倍
     */
    public $CpuLimit;

    /**
     * @var string 业务容器最大的内存 MiB 数，对应 K8S 的 limit；不填时默认为 request 的 2 倍
     */
    public $MemLimit;

    /**
     * @var string jvm参数
     */
    public $JvmOpts;

    /**
     * @var string 业务容器分配的 CPU 核数，对应 K8S 的 request
     */
    public $CpuRequest;

    /**
     * @var string 业务容器分配的内存 MiB 数，对应 K8S 的 request
     */
    public $MemRequest;

    /**
     * @var boolean 是否不立即启动
     */
    public $DoNotStart;

    /**
     * @var string （优先使用）新版镜像名，如/tsf/nginx
     */
    public $RepoName;

    /**
     * @var integer 更新方式：0:快速更新 1:滚动更新
     */
    public $UpdateType;

    /**
     * @var integer 滚动更新必填，更新间隔
     */
    public $UpdateIvl;

    /**
     * @var string agent 容器分配的 CPU 核数，对应 K8S 的 request
     */
    public $AgentCpuRequest;

    /**
     * @var string agent 容器最大的 CPU 核数，对应 K8S 的 limit
     */
    public $AgentCpuLimit;

    /**
     * @var string agent 容器分配的内存 MiB 数，对应 K8S 的 request
     */
    public $AgentMemRequest;

    /**
     * @var string agent 容器最大的内存 MiB 数，对应 K8S 的 limit
     */
    public $AgentMemLimit;

    /**
     * @var string istioproxy 容器分配的 CPU 核数，对应 K8S 的 request
     */
    public $IstioCpuRequest;

    /**
     * @var string istioproxy 容器最大的 CPU 核数，对应 K8S 的 limit
     */
    public $IstioCpuLimit;

    /**
     * @var string istioproxy 容器分配的内存 MiB 数，对应 K8S 的 request
     */
    public $IstioMemRequest;

    /**
     * @var string istioproxy 容器最大的内存 MiB 数，对应 K8S 的 limit
     */
    public $IstioMemLimit;

    /**
     * @var string kubernetes滚动更新策略的MaxSurge参数
     */
    public $MaxSurge;

    /**
     * @var string kubernetes滚动更新策略的MaxUnavailable参数
     */
    public $MaxUnavailable;

    /**
     * @var HealthCheckSettings 健康检查配置信息，若不指定该参数，则默认不设置健康检查。
     */
    public $HealthCheckSettings;

    /**
     * @var array 部署组应用运行的环境变量。若不指定该参数，则默认不设置额外的环境变量。
     */
    public $Envs;

    /**
     * @var ServiceSetting 容器部署组的网络设置。
     */
    public $ServiceSetting;

    /**
     * @var boolean 是否部署 agent 容器。若不指定该参数，则默认不部署 agent 容器。
     */
    public $DeployAgent;

    /**
     * @var SchedulingStrategy 节点调度策略。若不指定改参数，则默认不使用节点调度策略。
     */
    public $SchedulingStrategy;

    /**
     * @param string $GroupId 部署组ID，分组唯一标识
     * @param string $TagName 镜像版本名称,如v1
     * @param integer $InstanceNum 实例数量
     * @param string $Server 镜像server
     * @param string $Reponame 旧版镜像名，如/tsf/nginx
     * @param string $CpuLimit 业务容器最大的 CPU 核数，对应 K8S 的 limit；不填时默认为 request 的 2 倍
     * @param string $MemLimit 业务容器最大的内存 MiB 数，对应 K8S 的 limit；不填时默认为 request 的 2 倍
     * @param string $JvmOpts jvm参数
     * @param string $CpuRequest 业务容器分配的 CPU 核数，对应 K8S 的 request
     * @param string $MemRequest 业务容器分配的内存 MiB 数，对应 K8S 的 request
     * @param boolean $DoNotStart 是否不立即启动
     * @param string $RepoName （优先使用）新版镜像名，如/tsf/nginx
     * @param integer $UpdateType 更新方式：0:快速更新 1:滚动更新
     * @param integer $UpdateIvl 滚动更新必填，更新间隔
     * @param string $AgentCpuRequest agent 容器分配的 CPU 核数，对应 K8S 的 request
     * @param string $AgentCpuLimit agent 容器最大的 CPU 核数，对应 K8S 的 limit
     * @param string $AgentMemRequest agent 容器分配的内存 MiB 数，对应 K8S 的 request
     * @param string $AgentMemLimit agent 容器最大的内存 MiB 数，对应 K8S 的 limit
     * @param string $IstioCpuRequest istioproxy 容器分配的 CPU 核数，对应 K8S 的 request
     * @param string $IstioCpuLimit istioproxy 容器最大的 CPU 核数，对应 K8S 的 limit
     * @param string $IstioMemRequest istioproxy 容器分配的内存 MiB 数，对应 K8S 的 request
     * @param string $IstioMemLimit istioproxy 容器最大的内存 MiB 数，对应 K8S 的 limit
     * @param string $MaxSurge kubernetes滚动更新策略的MaxSurge参数
     * @param string $MaxUnavailable kubernetes滚动更新策略的MaxUnavailable参数
     * @param HealthCheckSettings $HealthCheckSettings 健康检查配置信息，若不指定该参数，则默认不设置健康检查。
     * @param array $Envs 部署组应用运行的环境变量。若不指定该参数，则默认不设置额外的环境变量。
     * @param ServiceSetting $ServiceSetting 容器部署组的网络设置。
     * @param boolean $DeployAgent 是否部署 agent 容器。若不指定该参数，则默认不部署 agent 容器。
     * @param SchedulingStrategy $SchedulingStrategy 节点调度策略。若不指定改参数，则默认不使用节点调度策略。
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

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("Reponame",$param) and $param["Reponame"] !== null) {
            $this->Reponame = $param["Reponame"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("MemRequest",$param) and $param["MemRequest"] !== null) {
            $this->MemRequest = $param["MemRequest"];
        }

        if (array_key_exists("DoNotStart",$param) and $param["DoNotStart"] !== null) {
            $this->DoNotStart = $param["DoNotStart"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("UpdateIvl",$param) and $param["UpdateIvl"] !== null) {
            $this->UpdateIvl = $param["UpdateIvl"];
        }

        if (array_key_exists("AgentCpuRequest",$param) and $param["AgentCpuRequest"] !== null) {
            $this->AgentCpuRequest = $param["AgentCpuRequest"];
        }

        if (array_key_exists("AgentCpuLimit",$param) and $param["AgentCpuLimit"] !== null) {
            $this->AgentCpuLimit = $param["AgentCpuLimit"];
        }

        if (array_key_exists("AgentMemRequest",$param) and $param["AgentMemRequest"] !== null) {
            $this->AgentMemRequest = $param["AgentMemRequest"];
        }

        if (array_key_exists("AgentMemLimit",$param) and $param["AgentMemLimit"] !== null) {
            $this->AgentMemLimit = $param["AgentMemLimit"];
        }

        if (array_key_exists("IstioCpuRequest",$param) and $param["IstioCpuRequest"] !== null) {
            $this->IstioCpuRequest = $param["IstioCpuRequest"];
        }

        if (array_key_exists("IstioCpuLimit",$param) and $param["IstioCpuLimit"] !== null) {
            $this->IstioCpuLimit = $param["IstioCpuLimit"];
        }

        if (array_key_exists("IstioMemRequest",$param) and $param["IstioMemRequest"] !== null) {
            $this->IstioMemRequest = $param["IstioMemRequest"];
        }

        if (array_key_exists("IstioMemLimit",$param) and $param["IstioMemLimit"] !== null) {
            $this->IstioMemLimit = $param["IstioMemLimit"];
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

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("ServiceSetting",$param) and $param["ServiceSetting"] !== null) {
            $this->ServiceSetting = new ServiceSetting();
            $this->ServiceSetting->deserialize($param["ServiceSetting"]);
        }

        if (array_key_exists("DeployAgent",$param) and $param["DeployAgent"] !== null) {
            $this->DeployAgent = $param["DeployAgent"];
        }

        if (array_key_exists("SchedulingStrategy",$param) and $param["SchedulingStrategy"] !== null) {
            $this->SchedulingStrategy = new SchedulingStrategy();
            $this->SchedulingStrategy->deserialize($param["SchedulingStrategy"]);
        }
    }
}
