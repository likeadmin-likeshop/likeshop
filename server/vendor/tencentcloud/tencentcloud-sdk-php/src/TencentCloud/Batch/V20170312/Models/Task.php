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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务
 *
 * @method Application getApplication() 获取应用程序信息
 * @method void setApplication(Application $Application) 设置应用程序信息
 * @method string getTaskName() 获取任务名称，在一个作业内部唯一
 * @method void setTaskName(string $TaskName) 设置任务名称，在一个作业内部唯一
 * @method integer getTaskInstanceNum() 获取任务实例运行个数
 * @method void setTaskInstanceNum(integer $TaskInstanceNum) 设置任务实例运行个数
 * @method AnonymousComputeEnv getComputeEnv() 获取运行环境信息，ComputeEnv 和 EnvId 必须指定一个（且只有一个）参数。
 * @method void setComputeEnv(AnonymousComputeEnv $ComputeEnv) 设置运行环境信息，ComputeEnv 和 EnvId 必须指定一个（且只有一个）参数。
 * @method string getEnvId() 获取计算环境ID，ComputeEnv 和 EnvId 必须指定一个（且只有一个）参数。
 * @method void setEnvId(string $EnvId) 设置计算环境ID，ComputeEnv 和 EnvId 必须指定一个（且只有一个）参数。
 * @method RedirectInfo getRedirectInfo() 获取重定向信息
 * @method void setRedirectInfo(RedirectInfo $RedirectInfo) 设置重定向信息
 * @method RedirectLocalInfo getRedirectLocalInfo() 获取重定向本地信息
 * @method void setRedirectLocalInfo(RedirectLocalInfo $RedirectLocalInfo) 设置重定向本地信息
 * @method array getInputMappings() 获取输入映射
 * @method void setInputMappings(array $InputMappings) 设置输入映射
 * @method array getOutputMappings() 获取输出映射
 * @method void setOutputMappings(array $OutputMappings) 设置输出映射
 * @method array getOutputMappingConfigs() 获取输出映射配置
 * @method void setOutputMappingConfigs(array $OutputMappingConfigs) 设置输出映射配置
 * @method array getEnvVars() 获取自定义环境变量
 * @method void setEnvVars(array $EnvVars) 设置自定义环境变量
 * @method array getAuthentications() 获取授权信息
 * @method void setAuthentications(array $Authentications) 设置授权信息
 * @method string getFailedAction() 获取TaskInstance失败后处理方式，取值包括TERMINATE（默认）、INTERRUPT、FAST_INTERRUPT。
 * @method void setFailedAction(string $FailedAction) 设置TaskInstance失败后处理方式，取值包括TERMINATE（默认）、INTERRUPT、FAST_INTERRUPT。
 * @method integer getMaxRetryCount() 获取任务失败后的最大重试次数，默认为0
 * @method void setMaxRetryCount(integer $MaxRetryCount) 设置任务失败后的最大重试次数，默认为0
 * @method integer getTimeout() 获取任务启动后的超时时间，单位秒，默认为86400秒
 * @method void setTimeout(integer $Timeout) 设置任务启动后的超时时间，单位秒，默认为86400秒
 * @method integer getMaxConcurrentNum() 获取任务最大并发数限制，默认没有限制。
 * @method void setMaxConcurrentNum(integer $MaxConcurrentNum) 设置任务最大并发数限制，默认没有限制。
 * @method boolean getRestartComputeNode() 获取任务完成后，重启计算节点。适用于指定计算环境执行任务。
 * @method void setRestartComputeNode(boolean $RestartComputeNode) 设置任务完成后，重启计算节点。适用于指定计算环境执行任务。
 * @method integer getResourceMaxRetryCount() 获取启动任务过程中，创建计算资源如CVM失败后的最大重试次数，默认为0。
 * @method void setResourceMaxRetryCount(integer $ResourceMaxRetryCount) 设置启动任务过程中，创建计算资源如CVM失败后的最大重试次数，默认为0。
 */
class Task extends AbstractModel
{
    /**
     * @var Application 应用程序信息
     */
    public $Application;

    /**
     * @var string 任务名称，在一个作业内部唯一
     */
    public $TaskName;

    /**
     * @var integer 任务实例运行个数
     */
    public $TaskInstanceNum;

    /**
     * @var AnonymousComputeEnv 运行环境信息，ComputeEnv 和 EnvId 必须指定一个（且只有一个）参数。
     */
    public $ComputeEnv;

    /**
     * @var string 计算环境ID，ComputeEnv 和 EnvId 必须指定一个（且只有一个）参数。
     */
    public $EnvId;

    /**
     * @var RedirectInfo 重定向信息
     */
    public $RedirectInfo;

    /**
     * @var RedirectLocalInfo 重定向本地信息
     */
    public $RedirectLocalInfo;

    /**
     * @var array 输入映射
     */
    public $InputMappings;

    /**
     * @var array 输出映射
     */
    public $OutputMappings;

    /**
     * @var array 输出映射配置
     */
    public $OutputMappingConfigs;

    /**
     * @var array 自定义环境变量
     */
    public $EnvVars;

    /**
     * @var array 授权信息
     */
    public $Authentications;

    /**
     * @var string TaskInstance失败后处理方式，取值包括TERMINATE（默认）、INTERRUPT、FAST_INTERRUPT。
     */
    public $FailedAction;

    /**
     * @var integer 任务失败后的最大重试次数，默认为0
     */
    public $MaxRetryCount;

    /**
     * @var integer 任务启动后的超时时间，单位秒，默认为86400秒
     */
    public $Timeout;

    /**
     * @var integer 任务最大并发数限制，默认没有限制。
     */
    public $MaxConcurrentNum;

    /**
     * @var boolean 任务完成后，重启计算节点。适用于指定计算环境执行任务。
     */
    public $RestartComputeNode;

    /**
     * @var integer 启动任务过程中，创建计算资源如CVM失败后的最大重试次数，默认为0。
     */
    public $ResourceMaxRetryCount;

    /**
     * @param Application $Application 应用程序信息
     * @param string $TaskName 任务名称，在一个作业内部唯一
     * @param integer $TaskInstanceNum 任务实例运行个数
     * @param AnonymousComputeEnv $ComputeEnv 运行环境信息，ComputeEnv 和 EnvId 必须指定一个（且只有一个）参数。
     * @param string $EnvId 计算环境ID，ComputeEnv 和 EnvId 必须指定一个（且只有一个）参数。
     * @param RedirectInfo $RedirectInfo 重定向信息
     * @param RedirectLocalInfo $RedirectLocalInfo 重定向本地信息
     * @param array $InputMappings 输入映射
     * @param array $OutputMappings 输出映射
     * @param array $OutputMappingConfigs 输出映射配置
     * @param array $EnvVars 自定义环境变量
     * @param array $Authentications 授权信息
     * @param string $FailedAction TaskInstance失败后处理方式，取值包括TERMINATE（默认）、INTERRUPT、FAST_INTERRUPT。
     * @param integer $MaxRetryCount 任务失败后的最大重试次数，默认为0
     * @param integer $Timeout 任务启动后的超时时间，单位秒，默认为86400秒
     * @param integer $MaxConcurrentNum 任务最大并发数限制，默认没有限制。
     * @param boolean $RestartComputeNode 任务完成后，重启计算节点。适用于指定计算环境执行任务。
     * @param integer $ResourceMaxRetryCount 启动任务过程中，创建计算资源如CVM失败后的最大重试次数，默认为0。
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
        if (array_key_exists("Application",$param) and $param["Application"] !== null) {
            $this->Application = new Application();
            $this->Application->deserialize($param["Application"]);
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskInstanceNum",$param) and $param["TaskInstanceNum"] !== null) {
            $this->TaskInstanceNum = $param["TaskInstanceNum"];
        }

        if (array_key_exists("ComputeEnv",$param) and $param["ComputeEnv"] !== null) {
            $this->ComputeEnv = new AnonymousComputeEnv();
            $this->ComputeEnv->deserialize($param["ComputeEnv"]);
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("RedirectInfo",$param) and $param["RedirectInfo"] !== null) {
            $this->RedirectInfo = new RedirectInfo();
            $this->RedirectInfo->deserialize($param["RedirectInfo"]);
        }

        if (array_key_exists("RedirectLocalInfo",$param) and $param["RedirectLocalInfo"] !== null) {
            $this->RedirectLocalInfo = new RedirectLocalInfo();
            $this->RedirectLocalInfo->deserialize($param["RedirectLocalInfo"]);
        }

        if (array_key_exists("InputMappings",$param) and $param["InputMappings"] !== null) {
            $this->InputMappings = [];
            foreach ($param["InputMappings"] as $key => $value){
                $obj = new InputMapping();
                $obj->deserialize($value);
                array_push($this->InputMappings, $obj);
            }
        }

        if (array_key_exists("OutputMappings",$param) and $param["OutputMappings"] !== null) {
            $this->OutputMappings = [];
            foreach ($param["OutputMappings"] as $key => $value){
                $obj = new OutputMapping();
                $obj->deserialize($value);
                array_push($this->OutputMappings, $obj);
            }
        }

        if (array_key_exists("OutputMappingConfigs",$param) and $param["OutputMappingConfigs"] !== null) {
            $this->OutputMappingConfigs = [];
            foreach ($param["OutputMappingConfigs"] as $key => $value){
                $obj = new OutputMappingConfig();
                $obj->deserialize($value);
                array_push($this->OutputMappingConfigs, $obj);
            }
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("Authentications",$param) and $param["Authentications"] !== null) {
            $this->Authentications = [];
            foreach ($param["Authentications"] as $key => $value){
                $obj = new Authentication();
                $obj->deserialize($value);
                array_push($this->Authentications, $obj);
            }
        }

        if (array_key_exists("FailedAction",$param) and $param["FailedAction"] !== null) {
            $this->FailedAction = $param["FailedAction"];
        }

        if (array_key_exists("MaxRetryCount",$param) and $param["MaxRetryCount"] !== null) {
            $this->MaxRetryCount = $param["MaxRetryCount"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("MaxConcurrentNum",$param) and $param["MaxConcurrentNum"] !== null) {
            $this->MaxConcurrentNum = $param["MaxConcurrentNum"];
        }

        if (array_key_exists("RestartComputeNode",$param) and $param["RestartComputeNode"] !== null) {
            $this->RestartComputeNode = $param["RestartComputeNode"];
        }

        if (array_key_exists("ResourceMaxRetryCount",$param) and $param["ResourceMaxRetryCount"] !== null) {
            $this->ResourceMaxRetryCount = $param["ResourceMaxRetryCount"];
        }
    }
}
