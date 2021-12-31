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
 * 升级实例 -- 切分分片类型
 *
 * @method array getShardInstanceIds() 获取分片ID数组
 * @method void setShardInstanceIds(array $ShardInstanceIds) 设置分片ID数组
 * @method integer getSplitRate() 获取数据切分比例
 * @method void setSplitRate(integer $SplitRate) 设置数据切分比例
 * @method integer getShardMemory() 获取分片内存大小，单位 GB
 * @method void setShardMemory(integer $ShardMemory) 设置分片内存大小，单位 GB
 * @method integer getShardStorage() 获取分片存储大小，单位 GB
 * @method void setShardStorage(integer $ShardStorage) 设置分片存储大小，单位 GB
 */
class SplitShardConfig extends AbstractModel
{
    /**
     * @var array 分片ID数组
     */
    public $ShardInstanceIds;

    /**
     * @var integer 数据切分比例
     */
    public $SplitRate;

    /**
     * @var integer 分片内存大小，单位 GB
     */
    public $ShardMemory;

    /**
     * @var integer 分片存储大小，单位 GB
     */
    public $ShardStorage;

    /**
     * @param array $ShardInstanceIds 分片ID数组
     * @param integer $SplitRate 数据切分比例
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
        if (array_key_exists("ShardInstanceIds",$param) and $param["ShardInstanceIds"] !== null) {
            $this->ShardInstanceIds = $param["ShardInstanceIds"];
        }

        if (array_key_exists("SplitRate",$param) and $param["SplitRate"] !== null) {
            $this->SplitRate = $param["SplitRate"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }
    }
}
