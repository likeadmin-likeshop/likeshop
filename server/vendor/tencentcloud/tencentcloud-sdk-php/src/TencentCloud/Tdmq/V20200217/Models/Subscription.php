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
 * 订阅者
 *
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getConnectedSince() 获取消费者开始连接的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectedSince(string $ConnectedSince) 设置消费者开始连接的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerAddr() 获取消费者地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerAddr(string $ConsumerAddr) 设置消费者地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerCount() 获取消费者数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerCount(string $ConsumerCount) 设置消费者数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerName() 获取消费者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerName(string $ConsumerName) 设置消费者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgBacklog() 获取堆积的消息数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgBacklog(string $MsgBacklog) 设置堆积的消息数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgRateExpired() 获取于TTL，此订阅下没有被发送而是被丢弃的比例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgRateExpired(string $MsgRateExpired) 设置于TTL，此订阅下没有被发送而是被丢弃的比例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgRateOut() 获取消费者每秒分发消息的数量之和。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgRateOut(string $MsgRateOut) 设置消费者每秒分发消息的数量之和。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgThroughputOut() 获取消费者每秒消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgThroughputOut(string $MsgThroughputOut) 设置消费者每秒消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubscriptionName() 获取订阅名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscriptionName(string $SubscriptionName) 设置订阅名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConsumerSets() 获取消费者集合。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerSets(array $ConsumerSets) 设置消费者集合。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsOnline() 获取是否在线。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOnline(boolean $IsOnline) 设置是否在线。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConsumersScheduleSets() 获取消费进度集合。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumersScheduleSets(array $ConsumersScheduleSets) 设置消费进度集合。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最近修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Subscription extends AbstractModel
{
    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 消费者开始连接的时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectedSince;

    /**
     * @var string 消费者地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerAddr;

    /**
     * @var string 消费者数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerCount;

    /**
     * @var string 消费者名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerName;

    /**
     * @var string 堆积的消息数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgBacklog;

    /**
     * @var string 于TTL，此订阅下没有被发送而是被丢弃的比例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgRateExpired;

    /**
     * @var string 消费者每秒分发消息的数量之和。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgRateOut;

    /**
     * @var string 消费者每秒消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgThroughputOut;

    /**
     * @var string 订阅名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubscriptionName;

    /**
     * @var array 消费者集合。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerSets;

    /**
     * @var boolean 是否在线。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOnline;

    /**
     * @var array 消费进度集合。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumersScheduleSets;

    /**
     * @var string 备注。
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
     * @param string $TopicName 主题名称。
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $ConnectedSince 消费者开始连接的时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerAddr 消费者地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerCount 消费者数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerName 消费者名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgBacklog 堆积的消息数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgRateExpired 于TTL，此订阅下没有被发送而是被丢弃的比例。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgRateOut 消费者每秒分发消息的数量之和。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgThroughputOut 消费者每秒消息的byte。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubscriptionName 订阅名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConsumerSets 消费者集合。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsOnline 是否在线。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConsumersScheduleSets 消费进度集合。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近修改时间。
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ConnectedSince",$param) and $param["ConnectedSince"] !== null) {
            $this->ConnectedSince = $param["ConnectedSince"];
        }

        if (array_key_exists("ConsumerAddr",$param) and $param["ConsumerAddr"] !== null) {
            $this->ConsumerAddr = $param["ConsumerAddr"];
        }

        if (array_key_exists("ConsumerCount",$param) and $param["ConsumerCount"] !== null) {
            $this->ConsumerCount = $param["ConsumerCount"];
        }

        if (array_key_exists("ConsumerName",$param) and $param["ConsumerName"] !== null) {
            $this->ConsumerName = $param["ConsumerName"];
        }

        if (array_key_exists("MsgBacklog",$param) and $param["MsgBacklog"] !== null) {
            $this->MsgBacklog = $param["MsgBacklog"];
        }

        if (array_key_exists("MsgRateExpired",$param) and $param["MsgRateExpired"] !== null) {
            $this->MsgRateExpired = $param["MsgRateExpired"];
        }

        if (array_key_exists("MsgRateOut",$param) and $param["MsgRateOut"] !== null) {
            $this->MsgRateOut = $param["MsgRateOut"];
        }

        if (array_key_exists("MsgThroughputOut",$param) and $param["MsgThroughputOut"] !== null) {
            $this->MsgThroughputOut = $param["MsgThroughputOut"];
        }

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("ConsumerSets",$param) and $param["ConsumerSets"] !== null) {
            $this->ConsumerSets = [];
            foreach ($param["ConsumerSets"] as $key => $value){
                $obj = new Consumer();
                $obj->deserialize($value);
                array_push($this->ConsumerSets, $obj);
            }
        }

        if (array_key_exists("IsOnline",$param) and $param["IsOnline"] !== null) {
            $this->IsOnline = $param["IsOnline"];
        }

        if (array_key_exists("ConsumersScheduleSets",$param) and $param["ConsumersScheduleSets"] !== null) {
            $this->ConsumersScheduleSets = [];
            foreach ($param["ConsumersScheduleSets"] as $key => $value){
                $obj = new ConsumersSchedule();
                $obj->deserialize($value);
                array_push($this->ConsumersScheduleSets, $obj);
            }
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
    }
}
