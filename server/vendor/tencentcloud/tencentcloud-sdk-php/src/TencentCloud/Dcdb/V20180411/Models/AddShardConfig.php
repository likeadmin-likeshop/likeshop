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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 升级实例 -- 新增分片类型
 *
 * @method integer getShardCount() 获取新增分片的数量
 * @method void setShardCount(integer $ShardCount) 设置新增分片的数量
 * @method integer getShardMemory() 获取分片内存大小，单位 GB
 * @method void setShardMemory(integer $ShardMemory) 设置分片内存大小，单位 GB
 * @method integer getShardStorage() 获取分片存储大小，单位 GB
 * @method void setShardStorage(integer $ShardStorage) 设置分片存储大小，单位 GB
 */
class AddShardConfig extends AbstractModel
{
    /**
     * @var integer 新增分片的数量
     */
    public $ShardCount;

    /**
     * @var integer 分片内存大小，单位 GB
     */
    public $ShardMemory;

    /**
     * @var integer 分片存储大小，单位 GB
     */
    public $ShardStorage;

    /**
     * @param integer $ShardCount 新增分片的数量
     * @param integer $ShardMemory 分片内存大小，单位 GB
     * @param integer $ShardStorage 分片存储大小，单位 GB
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
        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }
    }
}
