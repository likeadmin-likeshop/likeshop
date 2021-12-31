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
 * 任务
 *
 * @method string getId() 获取任务 Id
 * @method void setId(string $Id) 设置任务 Id
 * @method string getCluster() 获取集群名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCluster(string $Cluster) 设置集群名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取Region 名
 * @method void setRegion(string $Region) 设置Region 名
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getRuntime() 获取Worker 使用的运行环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntime(string $Runtime) 设置Worker 使用的运行环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigId() 获取配置 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(string $ConfigId) 设置配置 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method PredictInput getPredictInput() 获取预测输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPredictInput(PredictInput $PredictInput) 设置预测输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method JobStatus getStatus() 获取任务状态
 * @method void setStatus(JobStatus $Status) 设置任务状态
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getStartTime() 获取任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCancelTime() 获取任务取消时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCancelTime(string $CancelTime) 设置任务取消时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取任务使用资源组 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置任务使用资源组 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取处理器配置, 单位为1/1000核；范围[100, 256000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置处理器配置, 单位为1/1000核；范围[100, 256000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取内存配置, 单位为1M；范围[100, 256000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置内存配置, 单位为1M；范围[100, 256000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpu() 获取GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpu(integer $Gpu) 设置GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpuMemory() 获取显存配置, 单位为1M，范围 [0, 256000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuMemory(integer $GpuMemory) 设置显存配置, 单位为1M，范围 [0, 256000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取任务使用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置任务使用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuType() 获取GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuType(string $GpuType) 设置GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigName() 获取配置名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigName(string $ConfigName) 设置配置名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigVersion() 获取配置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigVersion(string $ConfigVersion) 设置配置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobType() 获取Job类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobType(string $JobType) 设置Job类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method QuantizationInput getQuantizationInput() 获取量化输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuantizationInput(QuantizationInput $QuantizationInput) 设置量化输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTopicId() 获取Cls日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTopicId(string $LogTopicId) 设置Cls日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class Job extends AbstractModel
{
    /**
     * @var string 任务 Id
     */
    public $Id;

    /**
     * @var string 集群名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cluster;

    /**
     * @var string Region 名
     */
    public $Region;

    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string Worker 使用的运行环境
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Runtime;

    /**
     * @var string 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 配置 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var PredictInput 预测输入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PredictInput;

    /**
     * @var JobStatus 任务状态
     */
    public $Status;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 任务取消时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CancelTime;

    /**
     * @var string 任务使用资源组 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var integer 处理器配置, 单位为1/1000核；范围[100, 256000]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 内存配置, 单位为1M；范围[100, 256000]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gpu;

    /**
     * @var integer 显存配置, 单位为1M，范围 [0, 256000]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuMemory;

    /**
     * @var string 任务使用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuType;

    /**
     * @var string 配置名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigName;

    /**
     * @var string 配置版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigVersion;

    /**
     * @var string Job类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobType;

    /**
     * @var QuantizationInput 量化输入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuantizationInput;

    /**
     * @var string Cls日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTopicId;

    /**
     * @param string $Id 任务 Id
     * @param string $Cluster 集群名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region Region 名
     * @param string $Name 任务名称
     * @param string $Runtime Worker 使用的运行环境
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigId 配置 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param PredictInput $PredictInput 预测输入
注意：此字段可能返回 null，表示取不到有效值。
     * @param JobStatus $Status 任务状态
     * @param string $CreateTime 任务创建时间
     * @param string $StartTime 任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CancelTime 任务取消时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId 任务使用资源组 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu 处理器配置, 单位为1/1000核；范围[100, 256000]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 内存配置, 单位为1M；范围[100, 256000]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Gpu GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GpuMemory 显存配置, 单位为1M，范围 [0, 256000]
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 任务使用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuType GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigName 配置名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigVersion 配置版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobType Job类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param QuantizationInput $QuantizationInput 量化输入
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTopicId Cls日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("PredictInput",$param) and $param["PredictInput"] !== null) {
            $this->PredictInput = new PredictInput();
            $this->PredictInput->deserialize($param["PredictInput"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new JobStatus();
            $this->Status->deserialize($param["Status"]);
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

        if (array_key_exists("CancelTime",$param) and $param["CancelTime"] !== null) {
            $this->CancelTime = $param["CancelTime"];
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

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("GpuMemory",$param) and $param["GpuMemory"] !== null) {
            $this->GpuMemory = $param["GpuMemory"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
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
