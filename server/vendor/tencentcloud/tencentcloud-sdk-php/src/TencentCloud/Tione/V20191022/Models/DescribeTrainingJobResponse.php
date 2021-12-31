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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrainingJob返回参数结构体
 *
 * @method AlgorithmSpecification getAlgorithmSpecification() 获取算法镜像配置
 * @method void setAlgorithmSpecification(AlgorithmSpecification $AlgorithmSpecification) 设置算法镜像配置
 * @method string getTrainingJobName() 获取任务名称
 * @method void setTrainingJobName(string $TrainingJobName) 设置任务名称
 * @method string getHyperParameters() 获取算法超级参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHyperParameters(string $HyperParameters) 设置算法超级参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInputDataConfig() 获取输入数据配置
 * @method void setInputDataConfig(array $InputDataConfig) 设置输入数据配置
 * @method OutputDataConfig getOutputDataConfig() 获取输出数据配置
 * @method void setOutputDataConfig(OutputDataConfig $OutputDataConfig) 设置输出数据配置
 * @method StoppingCondition getStoppingCondition() 获取中止条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoppingCondition(StoppingCondition $StoppingCondition) 设置中止条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceConfig getResourceConfig() 获取计算实例配置
 * @method void setResourceConfig(ResourceConfig $ResourceConfig) 设置计算实例配置
 * @method VpcConfig getVpcConfig() 获取私有网络配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置私有网络配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailureReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureReason(string $FailureReason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifiedTime() 获取最近修改时间
 * @method void setLastModifiedTime(string $LastModifiedTime) 设置最近修改时间
 * @method string getTrainingStartTime() 获取任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingStartTime(string $TrainingStartTime) 设置任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingEndTime() 获取任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingEndTime(string $TrainingEndTime) 设置任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelArtifacts getModelArtifacts() 获取模型输出配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelArtifacts(ModelArtifacts $ModelArtifacts) 设置模型输出配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecondaryStatus() 获取详细状态，取值范围
Starting：启动中
Downloading: 准备训练数据
Training: 正在训练
Uploading: 上传训练结果
Completed：已完成
Failed: 失败
MaxRuntimeExceeded: 任务超过最大运行时间
Stopping: 停止中
Stopped：已停止
 * @method void setSecondaryStatus(string $SecondaryStatus) 设置详细状态，取值范围
Starting：启动中
Downloading: 准备训练数据
Training: 正在训练
Uploading: 上传训练结果
Completed：已完成
Failed: 失败
MaxRuntimeExceeded: 任务超过最大运行时间
Stopping: 停止中
Stopped：已停止
 * @method array getSecondaryStatusTransitions() 获取详细状态事件记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondaryStatusTransitions(array $SecondaryStatusTransitions) 设置详细状态事件记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleName() 获取角色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleName(string $RoleName) 设置角色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainingJobStatus() 获取训练任务状态，取值范围
InProgress：运行中
Completed: 已完成
Failed: 失败
Stopping: 停止中
Stopped：已停止
 * @method void setTrainingJobStatus(string $TrainingJobStatus) 设置训练任务状态，取值范围
InProgress：运行中
Completed: 已完成
Failed: 失败
Stopping: 停止中
Stopped：已停止
 * @method string getLogUrl() 获取训练任务日志链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogUrl(string $LogUrl) 设置训练任务日志链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取训练任务实例ID
 * @method void setInstanceId(string $InstanceId) 设置训练任务实例ID
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTrainingJobResponse extends AbstractModel
{
    /**
     * @var AlgorithmSpecification 算法镜像配置
     */
    public $AlgorithmSpecification;

    /**
     * @var string 任务名称
     */
    public $TrainingJobName;

    /**
     * @var string 算法超级参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HyperParameters;

    /**
     * @var array 输入数据配置
     */
    public $InputDataConfig;

    /**
     * @var OutputDataConfig 输出数据配置
     */
    public $OutputDataConfig;

    /**
     * @var StoppingCondition 中止条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoppingCondition;

    /**
     * @var ResourceConfig 计算实例配置
     */
    public $ResourceConfig;

    /**
     * @var VpcConfig 私有网络配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcConfig;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureReason;

    /**
     * @var string 最近修改时间
     */
    public $LastModifiedTime;

    /**
     * @var string 任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingStartTime;

    /**
     * @var string 任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingEndTime;

    /**
     * @var ModelArtifacts 模型输出配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelArtifacts;

    /**
     * @var string 详细状态，取值范围
Starting：启动中
Downloading: 准备训练数据
Training: 正在训练
Uploading: 上传训练结果
Completed：已完成
Failed: 失败
MaxRuntimeExceeded: 任务超过最大运行时间
Stopping: 停止中
Stopped：已停止
     */
    public $SecondaryStatus;

    /**
     * @var array 详细状态事件记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondaryStatusTransitions;

    /**
     * @var string 角色名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleName;

    /**
     * @var string 训练任务状态，取值范围
InProgress：运行中
Completed: 已完成
Failed: 失败
Stopping: 停止中
Stopped：已停止
     */
    public $TrainingJobStatus;

    /**
     * @var string 训练任务日志链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogUrl;

    /**
     * @var string 训练任务实例ID
     */
    public $InstanceId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AlgorithmSpecification $AlgorithmSpecification 算法镜像配置
     * @param string $TrainingJobName 任务名称
     * @param string $HyperParameters 算法超级参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InputDataConfig 输入数据配置
     * @param OutputDataConfig $OutputDataConfig 输出数据配置
     * @param StoppingCondition $StoppingCondition 中止条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceConfig $ResourceConfig 计算实例配置
     * @param VpcConfig $VpcConfig 私有网络配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailureReason 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifiedTime 最近修改时间
     * @param string $TrainingStartTime 任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingEndTime 任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelArtifacts $ModelArtifacts 模型输出配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecondaryStatus 详细状态，取值范围
Starting：启动中
Downloading: 准备训练数据
Training: 正在训练
Uploading: 上传训练结果
Completed：已完成
Failed: 失败
MaxRuntimeExceeded: 任务超过最大运行时间
Stopping: 停止中
Stopped：已停止
     * @param array $SecondaryStatusTransitions 详细状态事件记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleName 角色名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainingJobStatus 训练任务状态，取值范围
InProgress：运行中
Completed: 已完成
Failed: 失败
Stopping: 停止中
Stopped：已停止
     * @param string $LogUrl 训练任务日志链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 训练任务实例ID
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
        if (array_key_exists("AlgorithmSpecification",$param) and $param["AlgorithmSpecification"] !== null) {
            $this->AlgorithmSpecification = new AlgorithmSpecification();
            $this->AlgorithmSpecification->deserialize($param["AlgorithmSpecification"]);
        }

        if (array_key_exists("TrainingJobName",$param) and $param["TrainingJobName"] !== null) {
            $this->TrainingJobName = $param["TrainingJobName"];
        }

        if (array_key_exists("HyperParameters",$param) and $param["HyperParameters"] !== null) {
            $this->HyperParameters = $param["HyperParameters"];
        }

        if (array_key_exists("InputDataConfig",$param) and $param["InputDataConfig"] !== null) {
            $this->InputDataConfig = [];
            foreach ($param["InputDataConfig"] as $key => $value){
                $obj = new InputDataConfig();
                $obj->deserialize($value);
                array_push($this->InputDataConfig, $obj);
            }
        }

        if (array_key_exists("OutputDataConfig",$param) and $param["OutputDataConfig"] !== null) {
            $this->OutputDataConfig = new OutputDataConfig();
            $this->OutputDataConfig->deserialize($param["OutputDataConfig"]);
        }

        if (array_key_exists("StoppingCondition",$param) and $param["StoppingCondition"] !== null) {
            $this->StoppingCondition = new StoppingCondition();
            $this->StoppingCondition->deserialize($param["StoppingCondition"]);
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new ResourceConfig();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }

        if (array_key_exists("TrainingStartTime",$param) and $param["TrainingStartTime"] !== null) {
            $this->TrainingStartTime = $param["TrainingStartTime"];
        }

        if (array_key_exists("TrainingEndTime",$param) and $param["TrainingEndTime"] !== null) {
            $this->TrainingEndTime = $param["TrainingEndTime"];
        }

        if (array_key_exists("ModelArtifacts",$param) and $param["ModelArtifacts"] !== null) {
            $this->ModelArtifacts = new ModelArtifacts();
            $this->ModelArtifacts->deserialize($param["ModelArtifacts"]);
        }

        if (array_key_exists("SecondaryStatus",$param) and $param["SecondaryStatus"] !== null) {
            $this->SecondaryStatus = $param["SecondaryStatus"];
        }

        if (array_key_exists("SecondaryStatusTransitions",$param) and $param["SecondaryStatusTransitions"] !== null) {
            $this->SecondaryStatusTransitions = [];
            foreach ($param["SecondaryStatusTransitions"] as $key => $value){
                $obj = new SecondaryStatusTransition();
                $obj->deserialize($value);
                array_push($this->SecondaryStatusTransitions, $obj);
            }
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("TrainingJobStatus",$param) and $param["TrainingJobStatus"] !== null) {
            $this->TrainingJobStatus = $param["TrainingJobStatus"];
        }

        if (array_key_exists("LogUrl",$param) and $param["LogUrl"] !== null) {
            $this->LogUrl = $param["LogUrl"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
