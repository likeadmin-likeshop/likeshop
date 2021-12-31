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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例分片详情
 *
 * @method float getUsedVolume() 获取分片已使用容量
 * @method void setUsedVolume(float $UsedVolume) 设置分片已使用容量
 * @method string getReplicaSetId() 获取分片ID
 * @method void setReplicaSetId(string $ReplicaSetId) 设置分片ID
 * @method string getReplicaSetName() 获取分片名
 * @method void setReplicaSetName(string $ReplicaSetName) 设置分片名
 * @method integer getMemory() 获取分片内存规格，单位为MB
 * @method void setMemory(integer $Memory) 设置分片内存规格，单位为MB
 * @method integer getVolume() 获取分片磁盘规格，单位为MB
 * @method void setVolume(integer $Volume) 设置分片磁盘规格，单位为MB
 * @method integer getOplogSize() 获取分片Oplog大小，单位为MB
 * @method void setOplogSize(integer $OplogSize) 设置分片Oplog大小，单位为MB
 * @method integer getSecondaryNum() 获取分片从节点数
 * @method void setSecondaryNum(integer $SecondaryNum) 设置分片从节点数
 * @method string getRealReplicaSetId() 获取分片物理ID
 * @method void setRealReplicaSetId(string $RealReplicaSetId) 设置分片物理ID
 */
class MongodbShardInfo extends AbstractModel
{
    /**
     * @var float 分片已使用容量
     */
    public $UsedVolume;

    /**
     * @var string 分片ID
     */
    public $ReplicaSetId;

    /**
     * @var string 分片名
     */
    public $ReplicaSetName;

    /**
     * @var integer 分片内存规格，单位为MB
     */
    public $Memory;

    /**
     * @var integer 分片磁盘规格，单位为MB
     */
    public $Volume;

    /**
     * @var integer 分片Oplog大小，单位为MB
     */
    public $OplogSize;

    /**
     * @var integer 分片从节点数
     */
    public $SecondaryNum;

    /**
     * @var string 分片物理ID
     */
    public $RealReplicaSetId;

    /**
     * @param float $UsedVolume 分片已使用容量
     * @param string $ReplicaSetId 分片ID
     * @param string $ReplicaSetName 分片名
     * @param integer $Memory 分片内存规格，单位为MB
     * @param integer $Volume 分片磁盘规格，单位为MB
     * @param integer $OplogSize 分片Oplog大小，单位为MB
     * @param integer $SecondaryNum 分片从节点数
     * @param string $RealReplicaSetId 分片物理ID
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
        if (array_key_exists("UsedVolume",$param) and $param["UsedVolume"] !== null) {
            $this->UsedVolume = $param["UsedVolume"];
        }

        if (array_key_exists("ReplicaSetId",$param) and $param["ReplicaSetId"] !== null) {
            $this->ReplicaSetId = $param["ReplicaSetId"];
        }

        if (array_key_exists("ReplicaSetName",$param) and $param["ReplicaSetName"] !== null) {
            $this->ReplicaSetName = $param["ReplicaSetName"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("OplogSize",$param) and $param["OplogSize"] !== null) {
            $this->OplogSize = $param["OplogSize"];
        }

        if (array_key_exists("SecondaryNum",$param) and $param["SecondaryNum"] !== null) {
            $this->SecondaryNum = $param["SecondaryNum"];
        }

        if (array_key_exists("RealReplicaSetId",$param) and $param["RealReplicaSetId"] !== null) {
            $this->RealReplicaSetId = $param["RealReplicaSetId"];
        }
    }
}
