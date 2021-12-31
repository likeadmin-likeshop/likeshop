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
namespace TencentCloud\Tia\V20180226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateJob请求参数结构体
 *
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getCluster() 获取运行任务的集群，详见 [使用集群](https://cloud.tencent.com/document/product/851/17317)
 * @method void setCluster(string $Cluster) 设置运行任务的集群，详见 [使用集群](https://cloud.tencent.com/document/product/851/17317)
 * @method string getRuntimeVersion() 获取运行任务的环境，详见 [运行环境](https://cloud.tencent.com/document/product/851/17320)
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行任务的环境，详见 [运行环境](https://cloud.tencent.com/document/product/851/17320)
 * @method array getPackageDir() 获取挂载的路径，支持 NFS，[CFS](https://cloud.tencent.com/product/cfs) 和 [COS](https://cloud.tencent.com/product/cos)，其中 COS 只在 [TI-A 定制环境](https://cloud.tencent.com/document/product/851/17320#ti-a-.E5.AE.9A.E5.88.B6.E7.8E.AF.E5.A2.83) 中支持
 * @method void setPackageDir(array $PackageDir) 设置挂载的路径，支持 NFS，[CFS](https://cloud.tencent.com/product/cfs) 和 [COS](https://cloud.tencent.com/product/cos)，其中 COS 只在 [TI-A 定制环境](https://cloud.tencent.com/document/product/851/17320#ti-a-.E5.AE.9A.E5.88.B6.E7.8E.AF.E5.A2.83) 中支持
 * @method array getCommand() 获取任务启动命令
 * @method void setCommand(array $Command) 设置任务启动命令
 * @method array getArgs() 获取任务启动参数
 * @method void setArgs(array $Args) 设置任务启动参数
 * @method string getScaleTier() 获取运行任务的配置信息，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method void setScaleTier(string $ScaleTier) 设置运行任务的配置信息，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method string getMasterType() 获取Master 机器类型，ScaleTier 取值为 `CUSTOM` 时必填，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method void setMasterType(string $MasterType) 设置Master 机器类型，ScaleTier 取值为 `CUSTOM` 时必填，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method string getWorkerType() 获取Worker 机器类型，ScaleTier 取值为 `CUSTOM` 时必填，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method void setWorkerType(string $WorkerType) 设置Worker 机器类型，ScaleTier 取值为 `CUSTOM` 时必填，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method string getParameterServerType() 获取Parameter server 机器类型，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method void setParameterServerType(string $ParameterServerType) 设置Parameter server 机器类型，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method integer getWorkerCount() 获取Worker 机器数量，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method void setWorkerCount(integer $WorkerCount) 设置Worker 机器数量，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method integer getParameterServerCount() 获取Parameter server 机器数量，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method void setParameterServerCount(integer $ParameterServerCount) 设置Parameter server 机器数量，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
 * @method boolean getDebug() 获取启动 debug 模式，默认为 false
 * @method void setDebug(boolean $Debug) 设置启动 debug 模式，默认为 false
 * @method array getRuntimeConf() 获取运行任务的其他配置信息
 * @method void setRuntimeConf(array $RuntimeConf) 设置运行任务的其他配置信息
 */
class CreateJobRequest extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 运行任务的集群，详见 [使用集群](https://cloud.tencent.com/document/product/851/17317)
     */
    public $Cluster;

    /**
     * @var string 运行任务的环境，详见 [运行环境](https://cloud.tencent.com/document/product/851/17320)
     */
    public $RuntimeVersion;

    /**
     * @var array 挂载的路径，支持 NFS，[CFS](https://cloud.tencent.com/product/cfs) 和 [COS](https://cloud.tencent.com/product/cos)，其中 COS 只在 [TI-A 定制环境](https://cloud.tencent.com/document/product/851/17320#ti-a-.E5.AE.9A.E5.88.B6.E7.8E.AF.E5.A2.83) 中支持
     */
    public $PackageDir;

    /**
     * @var array 任务启动命令
     */
    public $Command;

    /**
     * @var array 任务启动参数
     */
    public $Args;

    /**
     * @var string 运行任务的配置信息，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     */
    public $ScaleTier;

    /**
     * @var string Master 机器类型，ScaleTier 取值为 `CUSTOM` 时必填，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     */
    public $MasterType;

    /**
     * @var string Worker 机器类型，ScaleTier 取值为 `CUSTOM` 时必填，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     */
    public $WorkerType;

    /**
     * @var string Parameter server 机器类型，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     */
    public $ParameterServerType;

    /**
     * @var integer Worker 机器数量，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     */
    public $WorkerCount;

    /**
     * @var integer Parameter server 机器数量，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     */
    public $ParameterServerCount;

    /**
     * @var boolean 启动 debug 模式，默认为 false
     */
    public $Debug;

    /**
     * @var array 运行任务的其他配置信息
     */
    public $RuntimeConf;

    /**
     * @param string $Name 任务名称
     * @param string $Cluster 运行任务的集群，详见 [使用集群](https://cloud.tencent.com/document/product/851/17317)
     * @param string $RuntimeVersion 运行任务的环境，详见 [运行环境](https://cloud.tencent.com/document/product/851/17320)
     * @param array $PackageDir 挂载的路径，支持 NFS，[CFS](https://cloud.tencent.com/product/cfs) 和 [COS](https://cloud.tencent.com/product/cos)，其中 COS 只在 [TI-A 定制环境](https://cloud.tencent.com/document/product/851/17320#ti-a-.E5.AE.9A.E5.88.B6.E7.8E.AF.E5.A2.83) 中支持
     * @param array $Command 任务启动命令
     * @param array $Args 任务启动参数
     * @param string $ScaleTier 运行任务的配置信息，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     * @param string $MasterType Master 机器类型，ScaleTier 取值为 `CUSTOM` 时必填，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     * @param string $WorkerType Worker 机器类型，ScaleTier 取值为 `CUSTOM` 时必填，详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     * @param string $ParameterServerType Parameter server 机器类型，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     * @param integer $WorkerCount Worker 机器数量，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     * @param integer $ParameterServerCount Parameter server 机器数量，ScaleTier 取值为 `CUSTOM` 时必填,详见 [训练规模](https://cloud.tencent.com/document/product/851/17319)
     * @param boolean $Debug 启动 debug 模式，默认为 false
     * @param array $RuntimeConf 运行任务的其他配置信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("PackageDir",$param) and $param["PackageDir"] !== null) {
            $this->PackageDir = $param["PackageDir"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("ScaleTier",$param) and $param["ScaleTier"] !== null) {
            $this->ScaleTier = $param["ScaleTier"];
        }

        if (array_key_exists("MasterType",$param) and $param["MasterType"] !== null) {
            $this->MasterType = $param["MasterType"];
        }

        if (array_key_exists("WorkerType",$param) and $param["WorkerType"] !== null) {
            $this->WorkerType = $param["WorkerType"];
        }

        if (array_key_exists("ParameterServerType",$param) and $param["ParameterServerType"] !== null) {
            $this->ParameterServerType = $param["ParameterServerType"];
        }

        if (array_key_exists("WorkerCount",$param) and $param["WorkerCount"] !== null) {
            $this->WorkerCount = $param["WorkerCount"];
        }

        if (array_key_exists("ParameterServerCount",$param) and $param["ParameterServerCount"] !== null) {
            $this->ParameterServerCount = $param["ParameterServerCount"];
        }

        if (array_key_exists("Debug",$param) and $param["Debug"] !== null) {
            $this->Debug = $param["Debug"];
        }

        if (array_key_exists("RuntimeConf",$param) and $param["RuntimeConf"] !== null) {
            $this->RuntimeConf = $param["RuntimeConf"];
        }
    }
}
