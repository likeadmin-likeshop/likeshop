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
 * 询价资源
 *
 * @method string getSpec() 获取需要的规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(string $Spec) 设置需要的规格
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
 * @method integer getCpu() 获取核心数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置核心数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMultiDisks() 获取云盘列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiDisks(array $MultiDisks) 设置云盘列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskCnt() 获取磁盘数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskCnt(integer $DiskCnt) 设置磁盘数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskNum() 获取磁盘数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskNum(integer $DiskNum) 设置磁盘数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLocalDiskNum() 获取本地盘的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDiskNum(integer $LocalDiskNum) 设置本地盘的数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class PriceResource extends AbstractModel
{
    /**
     * @var string 需要的规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

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
     * @var integer 核心数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var array 云盘列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiDisks;

    /**
     * @var integer 磁盘数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskCnt;

    /**
     * @var string 规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 磁盘数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskNum;

    /**
     * @var integer 本地盘的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDiskNum;

    /**
     * @param string $Spec 需要的规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageType 硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskType 硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RootSize 系统盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemSize 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu 核心数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize 硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MultiDisks 云盘列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskCnt 磁盘数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskNum 磁盘数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LocalDiskNum 本地盘的数量
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

        if (array_key_exists("MultiDisks",$param) and $param["MultiDisks"] !== null) {
            $this->MultiDisks = [];
            foreach ($param["MultiDisks"] as $key => $value){
                $obj = new MultiDisk();
                $obj->deserialize($value);
                array_push($this->MultiDisks, $obj);
            }
        }

        if (array_key_exists("DiskCnt",$param) and $param["DiskCnt"] !== null) {
            $this->DiskCnt = $param["DiskCnt"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DiskNum",$param) and $param["DiskNum"] !== null) {
            $this->DiskNum = $param["DiskNum"];
        }

        if (array_key_exists("LocalDiskNum",$param) and $param["LocalDiskNum"] !== null) {
            $this->LocalDiskNum = $param["LocalDiskNum"];
        }
    }
}
