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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费进度详情
 *
 * @method integer getPartitions() 获取当前分区id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitions(integer $Partitions) 设置当前分区id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumberOfEntries() 获取消息数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumberOfEntries(integer $NumberOfEntries) 设置消息数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMsgBacklog() 获取消息积压数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgBacklog(integer $MsgBacklog) 设置消息积压数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgRateOut() 获取消费者每秒分发消息的数量之和。
 * @method void setMsgRateOut(string $MsgRateOut) 设置消费者每秒分发消息的数量之和。
 * @method string getMsgThroughputOut() 获取消费者每秒消息的byte。
 * @method void setMsgThroughputOut(string $MsgThroughputOut) 设置消费者每秒消息的byte。
 * @method string getMsgRateExpired() 获取超时丢弃比例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgRateExpired(string $MsgRateExpired) 设置超时丢弃比例。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumersSchedule extends AbstractModel
{
    /**
     * @var integer 当前分区id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partitions;

    /**
     * @var integer 消息数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumberOfEntries;

    /**
     * @var integer 消息积压数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgBacklog;

    /**
     * @var string 消费者每秒分发消息的数量之和。
     */
    public $MsgRateOut;

    /**
     * @var string 消费者每秒消息的byte。
     */
    public $MsgThroughputOut;

    /**
     * @var string 超时丢弃比例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgRateExpired;

    /**
     * @param integer $Partitions 当前分区id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumberOfEntries 消息数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MsgBacklog 消息积压数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgRateOut 消费者每秒分发消息的数量之和。
     * @param string $MsgThroughputOut 消费者每秒消息的byte。
     * @param string $MsgRateExpired 超时丢弃比例。
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
        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("NumberOfEntries",$param) and $param["NumberOfEntries"] !== null) {
            $this->NumberOfEntries = $param["NumberOfEntries"];
        }

        if (array_key_exists("MsgBacklog",$param) and $param["MsgBacklog"] !== null) {
            $this->MsgBacklog = $param["MsgBacklog"];
        }

        if (array_key_exists("MsgRateOut",$param) and $param["MsgRateOut"] !== null) {
            $this->MsgRateOut = $param["MsgRateOut"];
        }

        if (array_key_exists("MsgThroughputOut",$param) and $param["MsgThroughputOut"] !== null) {
            $this->MsgThroughputOut = $param["MsgThroughputOut"];
        }

        if (array_key_exists("MsgRateExpired",$param) and $param["MsgRateExpired"] !== null) {
            $this->MsgRateExpired = $param["MsgRateExpired"];
        }
    }
}
