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
 * CreateService请求参数结构体
 *
 * @method Scaler getScaler() 获取扩缩容配置
 * @method void setScaler(Scaler $Scaler) 设置扩缩容配置
 * @method string getServiceConfigId() 获取服务配置Id
 * @method void setServiceConfigId(string $ServiceConfigId) 设置服务配置Id
 * @method string getName() 获取服务名称
 * @method void setName(string $Name) 设置服务名称
 * @method string getScaleMode() 获取扩缩容方式，支持AUTO, MANUAL，分别表示自动扩缩容和手动扩缩容
 * @method void setScaleMode(string $ScaleMode) 设置扩缩容方式，支持AUTO, MANUAL，分别表示自动扩缩容和手动扩缩容
 * @method string getResourceGroupId() 获取部署要使用的资源组Id，默认为共享资源组
 * @method void setResourceGroupId(string $ResourceGroupId) 设置部署要使用的资源组Id，默认为共享资源组
 * @method integer getCpu() 获取处理器配置, 单位为1/1000核；范围[100, 256000]
 * @method void setCpu(integer $Cpu) 设置处理器配置, 单位为1/1000核；范围[100, 256000]
 * @method integer getMemory() 获取内存配置, 单位为1M；范围[100, 256000]
 * @method void setMemory(integer $Memory) 设置内存配置, 单位为1M；范围[100, 256000]
 * @method string getCluster() 获取集群，不填则使用默认集群
 * @method void setCluster(string $Cluster) 设置集群，不填则使用默认集群
 * @method string getAuthentication() 获取默认为空，表示不需要鉴权，TOKEN 表示选择 Token 鉴权方式
 * @method void setAuthentication(string $Authentication) 设置默认为空，表示不需要鉴权，TOKEN 表示选择 Token 鉴权方式
 * @method integer getGpu() 获取GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
 * @method void setGpu(integer $Gpu) 设置GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
 * @method integer getGpuMemory() 获取显存配置, 单位为1M，范围 [0, 256000]
 * @method void setGpuMemory(integer $GpuMemory) 设置显存配置, 单位为1M，范围 [0, 256000]
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method string getGpuType() 获取GPU类型
 * @method void setGpuType(string $GpuType) 设置GPU类型
 * @method string getLogTopicId() 获取Cls日志主题ID
 * @method void setLogTopicId(string $LogTopicId) 设置Cls日志主题ID
 */
class CreateServiceRequest extends AbstractModel
{
    /**
     * @var Scaler 扩缩容配置
     */
    public $Scaler;

    /**
     * @var string 服务配置Id
     */
    public $ServiceConfigId;

    /**
     * @var string 服务名称
     */
    public $Name;

    /**
     * @var string 扩缩容方式，支持AUTO, MANUAL，分别表示自动扩缩容和手动扩缩容
     */
    public $ScaleMode;

    /**
     * @var string 部署要使用的资源组Id，默认为共享资源组
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
     * @var string 集群，不填则使用默认集群
     */
    public $Cluster;

    /**
     * @var string 默认为空，表示不需要鉴权，TOKEN 表示选择 Token 鉴权方式
     */
    public $Authentication;

    /**
     * @var integer GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
     */
    public $Gpu;

    /**
     * @var integer 显存配置, 单位为1M，范围 [0, 256000]
     */
    public $GpuMemory;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var string GPU类型
     */
    public $GpuType;

    /**
     * @var string Cls日志主题ID
     */
    public $LogTopicId;

    /**
     * @param Scaler $Scaler 扩缩容配置
     * @param string $ServiceConfigId 服务配置Id
     * @param string $Name 服务名称
     * @param string $ScaleMode 扩缩容方式，支持AUTO, MANUAL，分别表示自动扩缩容和手动扩缩容
     * @param string $ResourceGroupId 部署要使用的资源组Id，默认为共享资源组
     * @param integer $Cpu 处理器配置, 单位为1/1000核；范围[100, 256000]
     * @param integer $Memory 内存配置, 单位为1M；范围[100, 256000]
     * @param string $Cluster 集群，不填则使用默认集群
     * @param string $Authentication 默认为空，表示不需要鉴权，TOKEN 表示选择 Token 鉴权方式
     * @param integer $Gpu GPU算力配置，单位为1/1000 卡，范围 [0, 256000]
     * @param integer $GpuMemory 显存配置, 单位为1M，范围 [0, 256000]
     * @param string $Description 备注
     * @param string $GpuType GPU类型
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
        if (array_key_exists("Scaler",$param) and $param["Scaler"] !== null) {
            $this->Scaler = new Scaler();
            $this->Scaler->deserialize($param["Scaler"]);
        }

        if (array_key_exists("ServiceConfigId",$param) and $param["ServiceConfigId"] !== null) {
            $this->ServiceConfigId = $param["ServiceConfigId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ScaleMode",$param) and $param["ScaleMode"] !== null) {
            $this->ScaleMode = $param["ScaleMode"];
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

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = $param["Authentication"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("GpuMemory",$param) and $param["GpuMemory"] !== null) {
            $this->GpuMemory = $param["GpuMemory"];
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
