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
 * 模型服务
 *
 * @method string getId() 获取服务ID
 * @method void setId(string $Id) 设置服务ID
 * @method string getCluster() 获取运行集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCluster(string $Cluster) 设置运行集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取服务名称
 * @method void setName(string $Name) 设置服务名称
 * @method string getRuntime() 获取运行环境
 * @method void setRuntime(string $Runtime) 设置运行环境
 * @method string getModelUri() 获取模型地址
 * @method void setModelUri(string $ModelUri) 设置模型地址
 * @method integer getCpu() 获取处理器配置, 单位为1/1000核
 * @method void setCpu(integer $Cpu) 设置处理器配置, 单位为1/1000核
 * @method integer getMemory() 获取内存配置, 单位为1M
 * @method void setMemory(integer $Memory) 设置内存配置, 单位为1M
 * @method integer getGpu() 获取GPU 配置, 单位为1/1000 卡
 * @method void setGpu(integer $Gpu) 设置GPU 配置, 单位为1/1000 卡
 * @method integer getGpuMemory() 获取显存配置, 单位为1M
 * @method void setGpuMemory(integer $GpuMemory) 设置显存配置, 单位为1M
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getScaleMode() 获取支持AUTO, MANUAL
 * @method void setScaleMode(string $ScaleMode) 设置支持AUTO, MANUAL
 * @method Scaler getScaler() 获取弹性伸缩配置
 * @method void setScaler(Scaler $Scaler) 设置弹性伸缩配置
 * @method ServiceStatus getStatus() 获取服务状态
 * @method void setStatus(ServiceStatus $Status) 设置服务状态
 * @method string getAccessToken() 获取访问密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessToken(string $AccessToken) 设置访问密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigId() 获取服务配置Id
 * @method void setConfigId(string $ConfigId) 设置服务配置Id
 * @method string getConfigName() 获取服务配置名
 * @method void setConfigName(string $ConfigName) 设置服务配置名
 * @method integer getServeSeconds() 获取服务运行时长
 * @method void setServeSeconds(integer $ServeSeconds) 设置服务运行时长
 * @method string getConfigVersion() 获取配置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigVersion(string $ConfigVersion) 设置配置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取服务使用资源组 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置服务使用资源组 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExposes() 获取暴露方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExposes(array $Exposes) 设置暴露方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取Region 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置Region 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取服务使用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置服务使用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuType() 获取GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuType(string $GpuType) 设置GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTopicId() 获取Cls日志主题Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTopicId(string $LogTopicId) 设置Cls日志主题Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelService extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $Id;

    /**
     * @var string 运行集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cluster;

    /**
     * @var string 服务名称
     */
    public $Name;

    /**
     * @var string 运行环境
     */
    public $Runtime;

    /**
     * @var string 模型地址
     */
    public $ModelUri;

    /**
     * @var integer 处理器配置, 单位为1/1000核
     */
    public $Cpu;

    /**
     * @var integer 内存配置, 单位为1M
     */
    public $Memory;

    /**
     * @var integer GPU 配置, 单位为1/1000 卡
     */
    public $Gpu;

    /**
     * @var integer 显存配置, 单位为1M
     */
    public $GpuMemory;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 支持AUTO, MANUAL
     */
    public $ScaleMode;

    /**
     * @var Scaler 弹性伸缩配置
     */
    public $Scaler;

    /**
     * @var ServiceStatus 服务状态
     */
    public $Status;

    /**
     * @var string 访问密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessToken;

    /**
     * @var string 服务配置Id
     */
    public $ConfigId;

    /**
     * @var string 服务配置名
     */
    public $ConfigName;

    /**
     * @var integer 服务运行时长
     */
    public $ServeSeconds;

    /**
     * @var string 配置版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigVersion;

    /**
     * @var string 服务使用资源组 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var array 暴露方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Exposes;

    /**
     * @var string Region 名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 服务使用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuType;

    /**
     * @var string Cls日志主题Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTopicId;

    /**
     * @param string $Id 服务ID
     * @param string $Cluster 运行集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 服务名称
     * @param string $Runtime 运行环境
     * @param string $ModelUri 模型地址
     * @param integer $Cpu 处理器配置, 单位为1/1000核
     * @param integer $Memory 内存配置, 单位为1M
     * @param integer $Gpu GPU 配置, 单位为1/1000 卡
     * @param integer $GpuMemory 显存配置, 单位为1M
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $ScaleMode 支持AUTO, MANUAL
     * @param Scaler $Scaler 弹性伸缩配置
     * @param ServiceStatus $Status 服务状态
     * @param string $AccessToken 访问密钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigId 服务配置Id
     * @param string $ConfigName 服务配置名
     * @param integer $ServeSeconds 服务运行时长
     * @param string $ConfigVersion 配置版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId 服务使用资源组 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Exposes 暴露方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region Region 名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 服务使用资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuType GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTopicId Cls日志主题Id
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("ModelUri",$param) and $param["ModelUri"] !== null) {
            $this->ModelUri = $param["ModelUri"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ScaleMode",$param) and $param["ScaleMode"] !== null) {
            $this->ScaleMode = $param["ScaleMode"];
        }

        if (array_key_exists("Scaler",$param) and $param["Scaler"] !== null) {
            $this->Scaler = new Scaler();
            $this->Scaler->deserialize($param["Scaler"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new ServiceStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ServeSeconds",$param) and $param["ServeSeconds"] !== null) {
            $this->ServeSeconds = $param["ServeSeconds"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("Exposes",$param) and $param["Exposes"] !== null) {
            $this->Exposes = [];
            foreach ($param["Exposes"] as $key => $value){
                $obj = new ExposeInfo();
                $obj->deserialize($value);
                array_push($this->Exposes, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }
    }
}
