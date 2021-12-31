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
 * 输出数据配置
 *
 * @method string getCosOutputBucket() 获取cos输出桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosOutputBucket(string $CosOutputBucket) 设置cos输出桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosOutputKeyPrefix() 获取cos输出key前缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosOutputKeyPrefix(string $CosOutputKeyPrefix) 设置cos输出key前缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileSystemDataSource getFileSystemDataSource() 获取文件系统输出，如果指定了文件系统，那么Cos输出会被忽略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSystemDataSource(FileSystemDataSource $FileSystemDataSource) 设置文件系统输出，如果指定了文件系统，那么Cos输出会被忽略
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputDataConfig extends AbstractModel
{
    /**
     * @var string cos输出桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosOutputBucket;

    /**
     * @var string cos输出key前缀
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosOutputKeyPrefix;

    /**
     * @var FileSystemDataSource 文件系统输出，如果指定了文件系统，那么Cos输出会被忽略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSystemDataSource;

    /**
     * @param string $CosOutputBucket cos输出桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosOutputKeyPrefix cos输出key前缀
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileSystemDataSource $FileSystemDataSource 文件系统输出，如果指定了文件系统，那么Cos输出会被忽略
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
        if (array_key_exists("CosOutputBucket",$param) and $param["CosOutputBucket"] !== null) {
            $this->CosOutputBucket = $param["CosOutputBucket"];
        }

        if (array_key_exists("CosOutputKeyPrefix",$param) and $param["CosOutputKeyPrefix"] !== null) {
            $this->CosOutputKeyPrefix = $param["CosOutputKeyPrefix"];
        }

        if (array_key_exists("FileSystemDataSource",$param) and $param["FileSystemDataSource"] !== null) {
            $this->FileSystemDataSource = new FileSystemDataSource();
            $this->FileSystemDataSource->deserialize($param["FileSystemDataSource"]);
        }
    }
}
