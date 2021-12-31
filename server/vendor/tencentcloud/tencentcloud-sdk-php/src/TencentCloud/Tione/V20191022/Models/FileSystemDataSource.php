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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件系统输入数据源
 *
 * @method string getDirectoryPath() 获取文件系统目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirectoryPath(string $DirectoryPath) 设置文件系统目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSystemType() 获取文件系统类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSystemType(string $FileSystemType) 设置文件系统类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSystemAccessMode() 获取文件系统访问模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSystemAccessMode(string $FileSystemAccessMode) 设置文件系统访问模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSystemId() 获取文件系统ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileSystemDataSource extends AbstractModel
{
    /**
     * @var string 文件系统目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DirectoryPath;

    /**
     * @var string 文件系统类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSystemType;

    /**
     * @var string 文件系统访问模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSystemAccessMode;

    /**
     * @var string 文件系统ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSystemId;

    /**
     * @param string $DirectoryPath 文件系统目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSystemType 文件系统类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSystemAccessMode 文件系统访问模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSystemId 文件系统ID
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
        if (array_key_exists("DirectoryPath",$param) and $param["DirectoryPath"] !== null) {
            $this->DirectoryPath = $param["DirectoryPath"];
        }

        if (array_key_exists("FileSystemType",$param) and $param["FileSystemType"] !== null) {
            $this->FileSystemType = $param["FileSystemType"];
        }

        if (array_key_exists("FileSystemAccessMode",$param) and $param["FileSystemAccessMode"] !== null) {
            $this->FileSystemAccessMode = $param["FileSystemAccessMode"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }
    }
}
