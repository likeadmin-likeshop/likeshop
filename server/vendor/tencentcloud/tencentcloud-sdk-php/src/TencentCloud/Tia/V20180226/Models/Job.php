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
 * 训练任务信息
 *
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getCreateTime() 获取任务创建时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 * @method string getStartTime() 获取任务开始时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 * @method void setStartTime(string $StartTime) 设置任务开始时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 * @method string getEndTime() 获取任务结束时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 * @method void setEndTime(string $EndTime) 设置任务结束时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 * @method string getState() 获取任务状态，可能的状态为Created（已创建），Running（运行中），Succeeded（运行完成：成功），Failed（运行完成：失败）
 * @method void setState(string $State) 设置任务状态，可能的状态为Created（已创建），Running（运行中），Succeeded（运行完成：成功），Failed（运行完成：失败）
 * @method string getMessage() 获取任务状态信息
 * @method void setMessage(string $Message) 设置任务状态信息
 * @method string getScaleTier() 获取运行任务的配置信息
 * @method void setScaleTier(string $ScaleTier) 设置运行任务的配置信息
 * @method string getMasterType() 获取（ScaleTier为Custom时）master机器类型
 * @method void setMasterType(string $MasterType) 设置（ScaleTier为Custom时）master机器类型
 * @method string getWorkerType() 获取（ScaleTier为Custom时）worker机器类型
 * @method void setWorkerType(string $WorkerType) 设置（ScaleTier为Custom时）worker机器类型
 * @method string getParameterServerType() 获取（ScaleTier为Custom时）parameter server机器类型
 * @method void setParameterServerType(string $ParameterServerType) 设置（ScaleTier为Custom时）parameter server机器类型
 * @method integer getWorkerCount() 获取（ScaleTier为Custom时）worker机器数量
 * @method void setWorkerCount(integer $WorkerCount) 设置（ScaleTier为Custom时）worker机器数量
 * @method integer getParameterServerCount() 获取（ScaleTier为Custom时）parameter server机器数量
 * @method void setParameterServerCount(integer $ParameterServerCount) 设置（ScaleTier为Custom时）parameter server机器数量
 * @method array getPackageDir() 获取挂载的路径
 * @method void setPackageDir(array $PackageDir) 设置挂载的路径
 * @method array getCommand() 获取任务启动命令
 * @method void setCommand(array $Command) 设置任务启动命令
 * @method array getArgs() 获取任务启动参数
 * @method void setArgs(array $Args) 设置任务启动参数
 * @method string getCluster() 获取运行任务的集群
 * @method void setCluster(string $Cluster) 设置运行任务的集群
 * @method string getRuntimeVersion() 获取运行任务的环境
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行任务的环境
 * @method string getDelTime() 获取任务删除时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 * @method void setDelTime(string $DelTime) 设置任务删除时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
 * @method integer getAppId() 获取创建任务的AppId
 * @method void setAppId(integer $AppId) 设置创建任务的AppId
 * @method string getUin() 获取创建任务的Uin
 * @method void setUin(string $Uin) 设置创建任务的Uin
 * @method boolean getDebug() 获取创建任务的Debug模式
 * @method void setDebug(boolean $Debug) 设置创建任务的Debug模式
 * @method array getRuntimeConf() 获取Runtime的额外配置信息
 * @method void setRuntimeConf(array $RuntimeConf) 设置Runtime的额外配置信息
 * @method string getId() 获取任务Id
 * @method void setId(string $Id) 设置任务Id
 */
class Job extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 任务创建时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
     */
    public $CreateTime;

    /**
     * @var string 任务开始时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
     */
    public $StartTime;

    /**
     * @var string 任务结束时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
     */
    public $EndTime;

    /**
     * @var string 任务状态，可能的状态为Created（已创建），Running（运行中），Succeeded（运行完成：成功），Failed（运行完成：失败）
     */
    public $State;

    /**
     * @var string 任务状态信息
     */
    public $Message;

    /**
     * @var string 运行任务的配置信息
     */
    public $ScaleTier;

    /**
     * @var string （ScaleTier为Custom时）master机器类型
     */
    public $MasterType;

    /**
     * @var string （ScaleTier为Custom时）worker机器类型
     */
    public $WorkerType;

    /**
     * @var string （ScaleTier为Custom时）parameter server机器类型
     */
    public $ParameterServerType;

    /**
     * @var integer （ScaleTier为Custom时）worker机器数量
     */
    public $WorkerCount;

    /**
     * @var integer （ScaleTier为Custom时）parameter server机器数量
     */
    public $ParameterServerCount;

    /**
     * @var array 挂载的路径
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
     * @var string 运行任务的集群
     */
    public $Cluster;

    /**
     * @var string 运行任务的环境
     */
    public $RuntimeVersion;

    /**
     * @var string 任务删除时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
     */
    public $DelTime;

    /**
     * @var integer 创建任务的AppId
     */
    public $AppId;

    /**
     * @var string 创建任务的Uin
     */
    public $Uin;

    /**
     * @var boolean 创建任务的Debug模式
     */
    public $Debug;

    /**
     * @var array Runtime的额外配置信息
     */
    public $RuntimeConf;

    /**
     * @var string 任务Id
     */
    public $Id;

    /**
     * @param string $Name 任务名称
     * @param string $CreateTime 任务创建时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
     * @param string $StartTime 任务开始时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
     * @param string $EndTime 任务结束时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
     * @param string $State 任务状态，可能的状态为Created（已创建），Running（运行中），Succeeded（运行完成：成功），Failed（运行完成：失败）
     * @param string $Message 任务状态信息
     * @param string $ScaleTier 运行任务的配置信息
     * @param string $MasterType （ScaleTier为Custom时）master机器类型
     * @param string $WorkerType （ScaleTier为Custom时）worker机器类型
     * @param string $ParameterServerType （ScaleTier为Custom时）parameter server机器类型
     * @param integer $WorkerCount （ScaleTier为Custom时）worker机器数量
     * @param integer $ParameterServerCount （ScaleTier为Custom时）parameter server机器数量
     * @param array $PackageDir 挂载的路径
     * @param array $Command 任务启动命令
     * @param array $Args 任务启动参数
     * @param string $Cluster 运行任务的集群
     * @param string $RuntimeVersion 运行任务的环境
     * @param string $DelTime 任务删除时间，格式为：2006-01-02 15:04:05.999999999 -0700 MST
     * @param integer $AppId 创建任务的AppId
     * @param string $Uin 创建任务的Uin
     * @param boolean $Debug 创建任务的Debug模式
     * @param array $RuntimeConf Runtime的额外配置信息
     * @param string $Id 任务Id
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
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

        if (array_key_exists("PackageDir",$param) and $param["PackageDir"] !== null) {
            $this->PackageDir = $param["PackageDir"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("DelTime",$param) and $param["DelTime"] !== null) {
            $this->DelTime = $param["DelTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Debug",$param) and $param["Debug"] !== null) {
            $this->Debug = $param["Debug"];
        }

        if (array_key_exists("RuntimeConf",$param) and $param["RuntimeConf"] !== null) {
            $this->RuntimeConf = $param["RuntimeConf"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
