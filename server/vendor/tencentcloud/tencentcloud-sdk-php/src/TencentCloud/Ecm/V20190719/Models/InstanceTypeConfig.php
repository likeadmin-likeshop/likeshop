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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机型配置
 *
 * @method InstanceFamilyConfig getInstanceFamilyConfig() 获取机型族配置信息
 * @method void setInstanceFamilyConfig(InstanceFamilyConfig $InstanceFamilyConfig) 设置机型族配置信息
 * @method string getInstanceType() 获取机型
 * @method void setInstanceType(string $InstanceType) 设置机型
 * @method integer getVcpu() 获取CPU核数
 * @method void setVcpu(integer $Vcpu) 设置CPU核数
 * @method integer getMemory() 获取内存大小
 * @method void setMemory(integer $Memory) 设置内存大小
 * @method string getFrequency() 获取主频
 * @method void setFrequency(string $Frequency) 设置主频
 * @method string getCpuModelName() 获取处理器型号
 * @method void setCpuModelName(string $CpuModelName) 设置处理器型号
 * @method InstanceFamilyTypeConfig getInstanceFamilyTypeConfig() 获取机型族类别配置信息
 * @method void setInstanceFamilyTypeConfig(InstanceFamilyTypeConfig $InstanceFamilyTypeConfig) 设置机型族类别配置信息
 * @method string getExtInfo() 获取机型额外信息 是一个json字符串，如果存在则表示特殊机型，格式如下：{"dataDiskSize":3200,"systemDiskSize":60, "systemDiskSizeShow":"系统盘默认60G","dataDiskSizeShow":"本地NVMe SSD 硬盘3200 GB"}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtInfo(string $ExtInfo) 设置机型额外信息 是一个json字符串，如果存在则表示特殊机型，格式如下：{"dataDiskSize":3200,"systemDiskSize":60, "systemDiskSizeShow":"系统盘默认60G","dataDiskSizeShow":"本地NVMe SSD 硬盘3200 GB"}
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getVgpu() 获取GPU卡数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVgpu(float $Vgpu) 设置GPU卡数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuModelName() 获取GPU型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuModelName(string $GpuModelName) 设置GPU型号
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceTypeConfig extends AbstractModel
{
    /**
     * @var InstanceFamilyConfig 机型族配置信息
     */
    public $InstanceFamilyConfig;

    /**
     * @var string 机型
     */
    public $InstanceType;

    /**
     * @var integer CPU核数
     */
    public $Vcpu;

    /**
     * @var integer 内存大小
     */
    public $Memory;

    /**
     * @var string 主频
     */
    public $Frequency;

    /**
     * @var string 处理器型号
     */
    public $CpuModelName;

    /**
     * @var InstanceFamilyTypeConfig 机型族类别配置信息
     */
    public $InstanceFamilyTypeConfig;

    /**
     * @var string 机型额外信息 是一个json字符串，如果存在则表示特殊机型，格式如下：{"dataDiskSize":3200,"systemDiskSize":60, "systemDiskSizeShow":"系统盘默认60G","dataDiskSizeShow":"本地NVMe SSD 硬盘3200 GB"}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtInfo;

    /**
     * @var float GPU卡数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vgpu;

    /**
     * @var string GPU型号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuModelName;

    /**
     * @param InstanceFamilyConfig $InstanceFamilyConfig 机型族配置信息
     * @param string $InstanceType 机型
     * @param integer $Vcpu CPU核数
     * @param integer $Memory 内存大小
     * @param string $Frequency 主频
     * @param string $CpuModelName 处理器型号
     * @param InstanceFamilyTypeConfig $InstanceFamilyTypeConfig 机型族类别配置信息
     * @param string $ExtInfo 机型额外信息 是一个json字符串，如果存在则表示特殊机型，格式如下：{"dataDiskSize":3200,"systemDiskSize":60, "systemDiskSizeShow":"系统盘默认60G","dataDiskSizeShow":"本地NVMe SSD 硬盘3200 GB"}
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Vgpu GPU卡数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuModelName GPU型号
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
        if (array_key_exists("InstanceFamilyConfig",$param) and $param["InstanceFamilyConfig"] !== null) {
            $this->InstanceFamilyConfig = new InstanceFamilyConfig();
            $this->InstanceFamilyConfig->deserialize($param["InstanceFamilyConfig"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Vcpu",$param) and $param["Vcpu"] !== null) {
            $this->Vcpu = $param["Vcpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("CpuModelName",$param) and $param["CpuModelName"] !== null) {
            $this->CpuModelName = $param["CpuModelName"];
        }

        if (array_key_exists("InstanceFamilyTypeConfig",$param) and $param["InstanceFamilyTypeConfig"] !== null) {
            $this->InstanceFamilyTypeConfig = new InstanceFamilyTypeConfig();
            $this->InstanceFamilyTypeConfig->deserialize($param["InstanceFamilyTypeConfig"]);
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("Vgpu",$param) and $param["Vgpu"] !== null) {
            $this->Vgpu = $param["Vgpu"];
        }

        if (array_key_exists("GpuModelName",$param) and $param["GpuModelName"] !== null) {
            $this->GpuModelName = $param["GpuModelName"];
        }
    }
}
