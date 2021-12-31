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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分区详情
 *
 * @method integer getPartition() 获取Partition ID
 * @method void setPartition(integer $Partition) 设置Partition ID
 * @method integer getLeaderStatus() 获取Leader 运行状态
 * @method void setLeaderStatus(integer $LeaderStatus) 设置Leader 运行状态
 * @method integer getIsrNum() 获取ISR 个数
 * @method void setIsrNum(integer $IsrNum) 设置ISR 个数
 * @method integer getReplicaNum() 获取副本个数
 * @method void setReplicaNum(integer $ReplicaNum) 设置副本个数
 */
class TopicPartitionDO extends AbstractModel
{
    /**
     * @var integer Partition ID
     */
    public $Partition;

    /**
     * @var integer Leader 运行状态
     */
    public $LeaderStatus;

    /**
     * @var integer ISR 个数
     */
    public $IsrNum;

    /**
     * @var integer 副本个数
     */
    public $ReplicaNum;

    /**
     * @param integer $Partition Partition ID
     * @param integer $LeaderStatus Leader 运行状态
     * @param integer $IsrNum ISR 个数
     * @param integer $ReplicaNum 副本个数
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
        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("LeaderStatus",$param) and $param["LeaderStatus"] !== null) {
            $this->LeaderStatus = $param["LeaderStatus"];
        }

        if (array_key_exists("IsrNum",$param) and $param["IsrNum"] !== null) {
            $this->IsrNum = $param["IsrNum"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }
    }
}
