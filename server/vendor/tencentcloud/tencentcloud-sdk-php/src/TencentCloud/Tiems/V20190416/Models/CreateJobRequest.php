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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateJob请求参数结构体
 *
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getResourceGroupId() 获取使用的资源组 Id，默认使用共享资源组
 * @method void setResourceGroupId(string $ResourceGroupId) 设置使用的资源组 Id，默认使用共享资源组
 * @method integer getCpu() 获取处理器配置, 单位为1/1000核；范围[100, 256000]
 * @method void setCpu(integer $Cpu) 设置处理器配置, 单位为1/1000核；范围[100, 256000]
 * @method integer getMemory() 获取内存配置, 单位为1M；范围[100, 256000]
 * @method void setMemory(integer $Memory) 设置内存配置, 单位为1M；范围[100, 256000]
 * @method string getCluster() 获取运行集群
 * @method void setCluster(string $Cluster) 设置运行集群
 * @method PredictInput getPredictInput() 获取预测输入
 * @method void setPredictInput(PredictInput $PredictInput) 设置预测输入
 * @method string getDescription() 获取任务描述
 * @method void setDescription(string $Description) 设置任务描述
 * @method integer getWorkerCount() 获取同时处理任务的 Worker 个数
 * @method void setWorkerCount(integer $WorkerCount) 设置同时处理任务的 Worker 个数
 * @method string getConfigId() 获取使用的配置 Id
 * @method void setConfigId(string $ConfigId) 设置使用的配置 Id
 * @method integer getGpu() 获取GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
 * @method void setGpu(integer $Gpu) 设置GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
 * @method integer getGpuMemory() 获取显存配置, 单位为1M，范围 [0, 256000]
 * @method void setGpuMemory(integer $GpuMemory) 设置显存配置, 单位为1M，范围 [0, 256000]
 * @method string getGpuType() 获取GPU类型
 * @method void setGpuType(string $GpuType) 设置GPU类型
 * @method QuantizationInput getQuantizationInput() 获取量化输入
 * @method void setQuantizationInput(QuantizationInput $QuantizationInput) 设置量化输入
 * @method string getLogTopicId() 获取Cls日志主题ID
 * @method void setLogTopicId(string $LogTopicId) 设置Cls日志主题ID
 */
class CreateJobRequest extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 使用的资源组 Id，默认使用共享资源组
     */
    public $ResourceGroupId;

    /**
     * @var integer 处理器配置, 单位为1/1000核；范围[100, 256000]
     */
    public $Cpu;

    /**
     * @var integer 内存配置, 单位为1M；范围[100, 256000]
     */
    public $Memory;

    /**
     * @var string 运行集群
     */
    public $Cluster;

    /**
     * @var PredictInput 预测输入
     */
    public $PredictInput;

    /**
     * @var string 任务描述
     */
    public $Description;

    /**
     * @var integer 同时处理任务的 Worker 个数
     */
    public $WorkerCount;

    /**
     * @var string 使用的配置 Id
     */
    public $ConfigId;

    /**
     * @var integer GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
     */
    public $Gpu;

    /**
     * @var integer 显存配置, 单位为1M，范围 [0, 256000]
     */
    public $GpuMemory;

    /**
     * @var string GPU类型
     */
    public $GpuType;

    /**
     * @var QuantizationInput 量化输入
     */
    public $QuantizationInput;

    /**
     * @var string Cls日志主题ID
     */
    public $LogTopicId;

    /**
     * @param string $Name 任务名称
     * @param string $ResourceGroupId 使用的资源组 Id，默认使用共享资源组
     * @param integer $Cpu 处理器配置, 单位为1/1000核；范围[100, 256000]
     * @param integer $Memory 内存配置, 单位为1M；范围[100, 256000]
     * @param string $Cluster 运行集群
     * @param PredictInput $PredictInput 预测输入
     * @param string $Description 任务描述
     * @param integer $WorkerCount 同时处理任务的 Worker 个数
     * @param string $ConfigId 使用的配置 Id
     * @param integer $Gpu GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
     * @param integer $GpuMemory 显存配置, 单位为1M，范围 [0, 256000]
     * @param string $GpuType GPU类型
     * @param QuantizationInput $QuantizationInput 量化输入
     * @param string $LogTopicId Cls日志主题ID
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

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("PredictInput",$param) and $param["PredictInput"] !== null) {
            $this->PredictInput = new PredictInput();
            $this->PredictInput->deserialize($param["PredictInput"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WorkerCount",$param) and $param["WorkerCount"] !== null) {
            $this->WorkerCount = $param["WorkerCount"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("GpuMemory",$param) and $param["GpuMemory"] !== null) {
            $this->GpuMemory = $param["GpuMemory"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("QuantizationInput",$param) and $param["QuantizationInput"] !== null) {
            $this->QuantizationInput = new QuantizationInput();
            $this->QuantizationInput->deserialize($param["QuantizationInput"]);
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }
    }
}
