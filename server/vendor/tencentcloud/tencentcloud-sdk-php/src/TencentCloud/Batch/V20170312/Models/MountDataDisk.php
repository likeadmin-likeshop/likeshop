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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据盘挂载选项
 *
 * @method string getLocalPath() 获取挂载点，Linux系统合法路径，或Windows系统盘符,比如"H:\\"
 * @method void setLocalPath(string $LocalPath) 设置挂载点，Linux系统合法路径，或Windows系统盘符,比如"H:\\"
 * @method string getFileSystemType() 获取文件系统类型，Linux系统下支持"EXT3"和"EXT4"两种，默认"EXT3"；Windows系统下仅支持"NTFS"
 * @method void setFileSystemType(string $FileSystemType) 设置文件系统类型，Linux系统下支持"EXT3"和"EXT4"两种，默认"EXT3"；Windows系统下仅支持"NTFS"
 */
class MountDataDisk extends AbstractModel
{
    /**
     * @var string 挂载点，Linux系统合法路径，或Windows系统盘符,比如"H:\\"
     */
    public $LocalPath;

    /**
     * @var string 文件系统类型，Linux系统下支持"EXT3"和"EXT4"两种，默认"EXT3"；Windows系统下仅支持"NTFS"
     */
    public $FileSystemType;

    /**
     * @param string $LocalPath 挂载点，Linux系统合法路径，或Windows系统盘符,比如"H:\\"
     * @param string $FileSystemType 文件系统类型，Linux系统下支持"EXT3"和"EXT4"两种，默认"EXT3"；Windows系统下仅支持"NTFS"
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
        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("FileSystemType",$param) and $param["FileSystemType"] !== null) {
            $this->FileSystemType = $param["FileSystemType"];
        }
    }
}
