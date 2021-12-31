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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源详情
 *
 * @method string getSpec() 获取规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(string $Spec) 设置规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取规格名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecName(string $SpecName) 设置规格名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageType() 获取硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(integer $StorageType) 设置硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskType() 获取硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRootSize() 获取系统盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootSize(integer $RootSize) 设置系统盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemSize() 获取内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemSize(integer $MemSize) 设置内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取CPU个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置CPU个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置规格
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutterResource extends AbstractModel
{
    /**
     * @var string 规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

    /**
     * @var string 规格名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecName;

    /**
     * @var integer 硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var string 硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var integer 系统盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootSize;

    /**
     * @var integer 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemSize;

    /**
     * @var integer CPU个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var string 规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @param string $Spec 规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName 规格名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageType 硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskType 硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RootSize 系统盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemSize 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu CPU个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize 硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 规格
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            $this->RootSize = $param["RootSize"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
