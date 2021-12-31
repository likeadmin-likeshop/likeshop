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
 * CreateTrainingJob请求参数结构体
 *
 * @method AlgorithmSpecification getAlgorithmSpecification() 获取算法镜像配置
 * @method void setAlgorithmSpecification(AlgorithmSpecification $AlgorithmSpecification) 设置算法镜像配置
 * @method OutputDataConfig getOutputDataConfig() 获取输出数据配置
 * @method void setOutputDataConfig(OutputDataConfig $OutputDataConfig) 设置输出数据配置
 * @method ResourceConfig getResourceConfig() 获取资源实例配置
 * @method void setResourceConfig(ResourceConfig $ResourceConfig) 设置资源实例配置
 * @method string getTrainingJobName() 获取训练任务名称
 * @method void setTrainingJobName(string $TrainingJobName) 设置训练任务名称
 * @method array getInputDataConfig() 获取输入数据配置
 * @method void setInputDataConfig(array $InputDataConfig) 设置输入数据配置
 * @method StoppingCondition getStoppingCondition() 获取中止条件
 * @method void setStoppingCondition(StoppingCondition $StoppingCondition) 设置中止条件
 * @method VpcConfig getVpcConfig() 获取私有网络配置
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置私有网络配置
 * @method string getHyperParameters() 获取算法超级参数
 * @method void setHyperParameters(string $HyperParameters) 设置算法超级参数
 * @method array getEnvConfig() 获取环境变量配置
 * @method void setEnvConfig(array $EnvConfig) 设置环境变量配置
 * @method string getRoleName() 获取角色名称
 * @method void setRoleName(string $RoleName) 设置角色名称
 * @method string getRetryWhenResourceInsufficient() 获取在资源不足（ResourceInsufficient）时后台不定时尝试重新创建训练任务。可取值Enabled/Disabled
默认值为Disabled即不重新尝试。设为Enabled时重新尝试有一定的时间期限，定义在 StoppingCondition 中 MaxWaitTimeInSecond中 ，默认值为1天，超过该期限创建失败。
 * @method void setRetryWhenResourceInsufficient(string $RetryWhenResourceInsufficient) 设置在资源不足（ResourceInsufficient）时后台不定时尝试重新创建训练任务。可取值Enabled/Disabled
默认值为Disabled即不重新尝试。设为Enabled时重新尝试有一定的时间期限，定义在 StoppingCondition 中 MaxWaitTimeInSecond中 ，默认值为1天，超过该期限创建失败。
 */
class CreateTrainingJobRequest extends AbstractModel
{
    /**
     * @var AlgorithmSpecification 算法镜像配置
     */
    public $AlgorithmSpecification;

    /**
     * @var OutputDataConfig 输出数据配置
     */
    public $OutputDataConfig;

    /**
     * @var ResourceConfig 资源实例配置
     */
    public $ResourceConfig;

    /**
     * @var string 训练任务名称
     */
    public $TrainingJobName;

    /**
     * @var array 输入数据配置
     */
    public $InputDataConfig;

    /**
     * @var StoppingCondition 中止条件
     */
    public $StoppingCondition;

    /**
     * @var VpcConfig 私有网络配置
     */
    public $VpcConfig;

    /**
     * @var string 算法超级参数
     */
    public $HyperParameters;

    /**
     * @var array 环境变量配置
     */
    public $EnvConfig;

    /**
     * @var string 角色名称
     */
    public $RoleName;

    /**
     * @var string 在资源不足（ResourceInsufficient）时后台不定时尝试重新创建训练任务。可取值Enabled/Disabled
默认值为Disabled即不重新尝试。设为Enabled时重新尝试有一定的时间期限，定义在 StoppingCondition 中 MaxWaitTimeInSecond中 ，默认值为1天，超过该期限创建失败。
     */
    public $RetryWhenResourceInsufficient;

    /**
     * @param AlgorithmSpecification $AlgorithmSpecification 算法镜像配置
     * @param OutputDataConfig $OutputDataConfig 输出数据配置
     * @param ResourceConfig $ResourceConfig 资源实例配置
     * @param string $TrainingJobName 训练任务名称
     * @param array $InputDataConfig 输入数据配置
     * @param StoppingCondition $StoppingCondition 中止条件
     * @param VpcConfig $VpcConfig 私有网络配置
     * @param string $HyperParameters 算法超级参数
     * @param array $EnvConfig 环境变量配置
     * @param string $RoleName 角色名称
     * @param string $RetryWhenResourceInsufficient 在资源不足（ResourceInsufficient）时后台不定时尝试重新创建训练任务。可取值Enabled/Disabled
默认值为Disabled即不重新尝试。设为Enabled时重新尝试有一定的时间期限，定义在 StoppingCondition 中 MaxWaitTimeInSecond中 ，默认值为1天，超过该期限创建失败。
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

        if (array_key_exists("OutputDataConfig",$param) and $param["OutputDataConfig"] !== null) {
            $this->OutputDataConfig = new OutputDataConfig();
            $this->OutputDataConfig->deserialize($param["OutputDataConfig"]);
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new ResourceConfig();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("TrainingJobName",$param) and $param["TrainingJobName"] !== null) {
            $this->TrainingJobName = $param["TrainingJobName"];
        }

        if (array_key_exists("InputDataConfig",$param) and $param["InputDataConfig"] !== null) {
            $this->InputDataConfig = [];
            foreach ($param["InputDataConfig"] as $key => $value){
                $obj = new InputDataConfig();
                $obj->deserialize($value);
                array_push($this->InputDataConfig, $obj);
            }
        }

        if (array_key_exists("StoppingCondition",$param) and $param["StoppingCondition"] !== null) {
            $this->StoppingCondition = new StoppingCondition();
            $this->StoppingCondition->deserialize($param["StoppingCondition"]);
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("HyperParameters",$param) and $param["HyperParameters"] !== null) {
            $this->HyperParameters = $param["HyperParameters"];
        }

        if (array_key_exists("EnvConfig",$param) and $param["EnvConfig"] !== null) {
            $this->EnvConfig = [];
            foreach ($param["EnvConfig"] as $key => $value){
                $obj = new EnvConfig();
                $obj->deserialize($value);
                array_push($this->EnvConfig, $obj);
            }
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RetryWhenResourceInsufficient",$param) and $param["RetryWhenResourceInsufficient"] !== null) {
            $this->RetryWhenResourceInsufficient = $param["RetryWhenResourceInsufficient"];
        }
    }
}
