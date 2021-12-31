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
 * @method string getSpec() 获取节点规格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(string $Spec) 设置节点规格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageType() 获取存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(integer $StorageType) 设置存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskType() 获取磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemSize() 获取内存容量,单位为M
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemSize(integer $MemSize) 设置内存容量,单位为M
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取CPU核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置CPU核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取数据盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置数据盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRootSize() 获取系统盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootSize(integer $RootSize) 设置系统盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMultiDisks() 获取云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiDisks(array $MultiDisks) 设置云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取规格类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置规格类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLocalDiskNum() 获取本地盘数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDiskNum(integer $LocalDiskNum) 设置本地盘数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskNum() 获取盘数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskNum(integer $DiskNum) 设置盘数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class Resource extends AbstractModel
{
    /**
     * @var string 节点规格描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

    /**
     * @var integer 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var string 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var integer 内存容量,单位为M
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemSize;

    /**
     * @var integer CPU核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 数据盘容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var integer 系统盘容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootSize;

    /**
     * @var array 云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiDisks;

    /**
     * @var array 需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 规格类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var integer 本地盘数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDiskNum;

    /**
     * @var integer 盘数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskNum;

    /**
     * @param string $Spec 节点规格描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageType 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskType 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemSize 内存容量,单位为M
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu CPU核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize 数据盘容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RootSize 系统盘容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MultiDisks 云盘列表，当数据盘为一块云盘时，直接使用DiskType和DiskSize参数，超出部分使用MultiDisks
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 规格类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LocalDiskNum 本地盘数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskNum 盘数量
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

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            $this->RootSize = $param["RootSize"];
        }

        if (array_key_exists("MultiDisks",$param) and $param["MultiDisks"] !== null) {
            $this->MultiDisks = [];
            foreach ($param["MultiDisks"] as $key => $value){
                $obj = new MultiDisk();
                $obj->deserialize($value);
                array_push($this->MultiDisks, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("LocalDiskNum",$param) and $param["LocalDiskNum"] !== null) {
            $this->LocalDiskNum = $param["LocalDiskNum"];
        }

        if (array_key_exists("DiskNum",$param) and $param["DiskNum"] !== null) {
            $this->DiskNum = $param["DiskNum"];
        }
    }
}
