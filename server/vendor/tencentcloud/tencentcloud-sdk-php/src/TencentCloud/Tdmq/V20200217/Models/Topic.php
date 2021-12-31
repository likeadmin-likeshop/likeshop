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
 * 主题实例
 *
 * @method string getAverageMsgSize() 获取最后一次间隔内发布消息的平均byte大小。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageMsgSize(string $AverageMsgSize) 设置最后一次间隔内发布消息的平均byte大小。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerCount() 获取消费者数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerCount(string $ConsumerCount) 设置消费者数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastConfirmedEntry() 获取被记录下来的消息总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastConfirmedEntry(string $LastConfirmedEntry) 设置被记录下来的消息总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLedgerCreatedTimestamp() 获取最后一个ledger创建的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLedgerCreatedTimestamp(string $LastLedgerCreatedTimestamp) 设置最后一个ledger创建的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgRateIn() 获取本地和复制的发布者每秒发布消息的速率。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgRateIn(string $MsgRateIn) 设置本地和复制的发布者每秒发布消息的速率。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgRateOut() 获取本地和复制的消费者每秒分发消息的数量之和。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgRateOut(string $MsgRateOut) 设置本地和复制的消费者每秒分发消息的数量之和。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgThroughputIn() 获取本地和复制的发布者每秒发布消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgThroughputIn(string $MsgThroughputIn) 设置本地和复制的发布者每秒发布消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgThroughputOut() 获取本地和复制的消费者每秒分发消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgThroughputOut(string $MsgThroughputOut) 设置本地和复制的消费者每秒分发消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNumberOfEntries() 获取被记录下来的消息总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumberOfEntries(string $NumberOfEntries) 设置被记录下来的消息总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitions() 获取分区数<=0：topic下无子分区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitions(integer $Partitions) 设置分区数<=0：topic下无子分区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProducerCount() 获取生产者数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProducerCount(string $ProducerCount) 设置生产者数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalSize() 获取以byte计算的所有消息存储总量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSize(string $TotalSize) 设置以byte计算的所有消息存储总量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubTopicSets() 获取分区topic里面的子分区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubTopicSets(array $SubTopicSets) 设置分区topic里面的子分区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicType() 获取topic类型描述：
0：普通消息；
1：全局顺序消息；
2：局部顺序消息；
3：重试队列；
4：死信队列；
5：事务消息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicType(integer $TopicType) 设置topic类型描述：
0：普通消息；
1：全局顺序消息；
2：局部顺序消息；
3：重试队列；
4：死信队列；
5：事务消息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取主题名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置主题名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取说明，128个字符以内。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置说明，128个字符以内。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最近修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProducerLimit() 获取生产者上限。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProducerLimit(string $ProducerLimit) 设置生产者上限。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerLimit() 获取消费者上限。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerLimit(string $ConsumerLimit) 设置消费者上限。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Topic extends AbstractModel
{
    /**
     * @var string 最后一次间隔内发布消息的平均byte大小。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageMsgSize;

    /**
     * @var string 消费者数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerCount;

    /**
     * @var string 被记录下来的消息总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastConfirmedEntry;

    /**
     * @var string 最后一个ledger创建的时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLedgerCreatedTimestamp;

    /**
     * @var string 本地和复制的发布者每秒发布消息的速率。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgRateIn;

    /**
     * @var string 本地和复制的消费者每秒分发消息的数量之和。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgRateOut;

    /**
     * @var string 本地和复制的发布者每秒发布消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgThroughputIn;

    /**
     * @var string 本地和复制的消费者每秒分发消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgThroughputOut;

    /**
     * @var string 被记录下来的消息总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumberOfEntries;

    /**
     * @var integer 分区数<=0：topic下无子分区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partitions;

    /**
     * @var string 生产者数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProducerCount;

    /**
     * @var string 以byte计算的所有消息存储总量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSize;

    /**
     * @var array 分区topic里面的子分区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubTopicSets;

    /**
     * @var integer topic类型描述：
0：普通消息；
1：全局顺序消息；
2：局部顺序消息；
3：重试队列；
4：死信队列；
5：事务消息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicType;

    /**
     * @var string 环境（命名空间）名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvironmentId;

    /**
     * @var string 主题名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var string 说明，128个字符以内。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 生产者上限。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProducerLimit;

    /**
     * @var string 消费者上限。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerLimit;

    /**
     * @param string $AverageMsgSize 最后一次间隔内发布消息的平均byte大小。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerCount 消费者数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastConfirmedEntry 被记录下来的消息总数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLedgerCreatedTimestamp 最后一个ledger创建的时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgRateIn 本地和复制的发布者每秒发布消息的速率。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgRateOut 本地和复制的消费者每秒分发消息的数量之和。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgThroughputIn 本地和复制的发布者每秒发布消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgThroughputOut 本地和复制的消费者每秒分发消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NumberOfEntries 被记录下来的消息总数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Partitions 分区数<=0：topic下无子分区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProducerCount 生产者数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalSize 以byte计算的所有消息存储总量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubTopicSets 分区topic里面的子分区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicType topic类型描述：
0：普通消息；
1：全局顺序消息；
2：局部顺序消息；
3：重试队列；
4：死信队列；
5：事务消息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvironmentId 环境（命名空间）名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName 主题名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 说明，128个字符以内。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProducerLimit 生产者上限。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerLimit 消费者上限。
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
        if (array_key_exists("AverageMsgSize",$param) and $param["AverageMsgSize"] !== null) {
            $this->AverageMsgSize = $param["AverageMsgSize"];
        }

        if (array_key_exists("ConsumerCount",$param) and $param["ConsumerCount"] !== null) {
            $this->ConsumerCount = $param["ConsumerCount"];
        }

        if (array_key_exists("LastConfirmedEntry",$param) and $param["LastConfirmedEntry"] !== null) {
            $this->LastConfirmedEntry = $param["LastConfirmedEntry"];
        }

        if (array_key_exists("LastLedgerCreatedTimestamp",$param) and $param["LastLedgerCreatedTimestamp"] !== null) {
            $this->LastLedgerCreatedTimestamp = $param["LastLedgerCreatedTimestamp"];
        }

        if (array_key_exists("MsgRateIn",$param) and $param["MsgRateIn"] !== null) {
            $this->MsgRateIn = $param["MsgRateIn"];
        }

        if (array_key_exists("MsgRateOut",$param) and $param["MsgRateOut"] !== null) {
            $this->MsgRateOut = $param["MsgRateOut"];
        }

        if (array_key_exists("MsgThroughputIn",$param) and $param["MsgThroughputIn"] !== null) {
            $this->MsgThroughputIn = $param["MsgThroughputIn"];
        }

        if (array_key_exists("MsgThroughputOut",$param) and $param["MsgThroughputOut"] !== null) {
            $this->MsgThroughputOut = $param["MsgThroughputOut"];
        }

        if (array_key_exists("NumberOfEntries",$param) and $param["NumberOfEntries"] !== null) {
            $this->NumberOfEntries = $param["NumberOfEntries"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("ProducerCount",$param) and $param["ProducerCount"] !== null) {
            $this->ProducerCount = $param["ProducerCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("SubTopicSets",$param) and $param["SubTopicSets"] !== null) {
            $this->SubTopicSets = [];
            foreach ($param["SubTopicSets"] as $key => $value){
                $obj = new PartitionsTopic();
                $obj->deserialize($value);
                array_push($this->SubTopicSets, $obj);
            }
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ProducerLimit",$param) and $param["ProducerLimit"] !== null) {
            $this->ProducerLimit = $param["ProducerLimit"];
        }

        if (array_key_exists("ConsumerLimit",$param) and $param["ConsumerLimit"] !== null) {
            $this->ConsumerLimit = $param["ConsumerLimit"];
        }
    }
}
