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
 * 数据源
 *
 * @method CosDataSource getCosDataSource() 获取cos数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosDataSource(CosDataSource $CosDataSource) 设置cos数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileSystemDataSource getFileSystemDataSource() 获取文件系统输入源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSystemDataSource(FileSystemDataSource $FileSystemDataSource) 设置文件系统输入源
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataSource extends AbstractModel
{
    /**
     * @var CosDataSource cos数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosDataSource;

    /**
     * @var FileSystemDataSource 文件系统输入源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSystemDataSource;

    /**
     * @param CosDataSource $CosDataSource cos数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileSystemDataSource $FileSystemDataSource 文件系统输入源
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
        if (array_key_exists("CosDataSource",$param) and $param["CosDataSource"] !== null) {
            $this->CosDataSource = new CosDataSource();
            $this->CosDataSource->deserialize($param["CosDataSource"]);
        }

        if (array_key_exists("FileSystemDataSource",$param) and $param["FileSystemDataSource"] !== null) {
            $this->FileSystemDataSource = new FileSystemDataSource();
            $this->FileSystemDataSource->deserialize($param["FileSystemDataSource"]);
        }
    }
}
