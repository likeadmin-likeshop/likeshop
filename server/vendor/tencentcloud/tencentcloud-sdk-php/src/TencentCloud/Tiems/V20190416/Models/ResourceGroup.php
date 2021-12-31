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
 * 资源组
 *
 * @method string getId() 获取资源组 Id
 * @method void setId(string $Id) 设置资源组 Id
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getCluster() 获取集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCluster(string $Cluster) 设置集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取资源组名称
 * @method void setName(string $Name) 设置资源组名称
 * @method string getDescription() 获取资源组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置资源组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreated() 获取创建时间
 * @method void setCreated(string $Created) 设置创建时间
 * @method string getUpdated() 获取更新时间
 * @method void setUpdated(string $Updated) 设置更新时间
 * @method integer getInstanceCount() 获取资源组主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置资源组主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServiceCount() 获取使用资源组的服务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCount(integer $ServiceCount) 设置使用资源组的服务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobCount() 获取使用资源组的任务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobCount(integer $JobCount) 设置使用资源组的任务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPublic() 获取资源组是否为公共资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublic(boolean $Public) 设置资源组是否为公共资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取机器类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置机器类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取资源组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置资源组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpu() 获取显卡总张数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpu(integer $Gpu) 设置显卡总张数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取处理器总核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置处理器总核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取内存总量，单位为G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置内存总量，单位为G
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGpuType() 获取Gpu类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuType(array $GpuType) 设置Gpu类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasPrepaid() 获取该资源组下是否有预付费资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasPrepaid(boolean $HasPrepaid) 设置该资源组下是否有预付费资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayMode() 获取资源组是否允许预付费或后付费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(string $PayMode) 设置资源组是否允许预付费或后付费模式
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceGroup extends AbstractModel
{
    /**
     * @var string 资源组 Id
     */
    public $Id;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cluster;

    /**
     * @var string 资源组名称
     */
    public $Name;

    /**
     * @var string 资源组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $Created;

    /**
     * @var string 更新时间
     */
    public $Updated;

    /**
     * @var integer 资源组主机数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var integer 使用资源组的服务数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCount;

    /**
     * @var integer 使用资源组的任务数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobCount;

    /**
     * @var boolean 资源组是否为公共资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Public;

    /**
     * @var string 机器类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 资源组状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 显卡总张数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gpu;

    /**
     * @var integer 处理器总核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 内存总量，单位为G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var array Gpu类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuType;

    /**
     * @var boolean 该资源组下是否有预付费资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasPrepaid;

    /**
     * @var string 资源组是否允许预付费或后付费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @param string $Id 资源组 Id
     * @param string $Region 地域
     * @param string $Cluster 集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 资源组名称
     * @param string $Description 资源组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Created 创建时间
     * @param string $Updated 更新时间
     * @param integer $InstanceCount 资源组主机数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServiceCount 使用资源组的服务数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobCount 使用资源组的任务数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Public 资源组是否为公共资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 机器类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 资源组状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Gpu 显卡总张数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu 处理器总核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 内存总量，单位为G
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GpuType Gpu类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasPrepaid 该资源组下是否有预付费资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayMode 资源组是否允许预付费或后付费模式
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("Updated",$param) and $param["Updated"] !== null) {
            $this->Updated = $param["Updated"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("JobCount",$param) and $param["JobCount"] !== null) {
            $this->JobCount = $param["JobCount"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("HasPrepaid",$param) and $param["HasPrepaid"] !== null) {
            $this->HasPrepaid = $param["HasPrepaid"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
