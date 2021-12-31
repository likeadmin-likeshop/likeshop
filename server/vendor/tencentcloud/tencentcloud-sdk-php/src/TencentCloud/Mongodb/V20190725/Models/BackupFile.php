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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份文件存储信息
 *
 * @method string getReplicateSetId() 获取备份文件所属的副本集/分片ID
 * @method void setReplicateSetId(string $ReplicateSetId) 设置备份文件所属的副本集/分片ID
 * @method string getFile() 获取备份文件保存路径
 * @method void setFile(string $File) 设置备份文件保存路径
 */
class BackupFile extends AbstractModel
{
    /**
     * @var string 备份文件所属的副本集/分片ID
     */
    public $ReplicateSetId;

    /**
     * @var string 备份文件保存路径
     */
    public $File;

    /**
     * @param string $ReplicateSetId 备份文件所属的副本集/分片ID
     * @param string $File 备份文件保存路径
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
        if (array_key_exists("ReplicateSetId",$param) and $param["ReplicateSetId"] !== null) {
            $this->ReplicateSetId = $param["ReplicateSetId"];
        }

        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = $param["File"];
        }
    }
}
