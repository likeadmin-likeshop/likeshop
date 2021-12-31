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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了k8s节点数据盘相关配置与信息。
 *
 * @method string getDiskType() 获取云盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置云盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSystem() 获取文件系统(ext3/ext4/xfs)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSystem(string $FileSystem) 设置文件系统(ext3/ext4/xfs)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取云盘大小(G）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置云盘大小(G）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoFormatAndMount() 获取是否自动化格式盘并挂载
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoFormatAndMount(boolean $AutoFormatAndMount) 设置是否自动化格式盘并挂载
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMountTarget() 获取挂载目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountTarget(string $MountTarget) 设置挂载目录
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string 云盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var string 文件系统(ext3/ext4/xfs)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSystem;

    /**
     * @var integer 云盘大小(G）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var boolean 是否自动化格式盘并挂载
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoFormatAndMount;

    /**
     * @var string 挂载目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountTarget;

    /**
     * @param string $DiskType 云盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSystem 文件系统(ext3/ext4/xfs)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize 云盘大小(G）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoFormatAndMount 是否自动化格式盘并挂载
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MountTarget 挂载目录
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AutoFormatAndMount",$param) and $param["AutoFormatAndMount"] !== null) {
            $this->AutoFormatAndMount = $param["AutoFormatAndMount"];
        }

        if (array_key_exists("MountTarget",$param) and $param["MountTarget"] !== null) {
            $this->MountTarget = $param["MountTarget"];
        }
    }
}
