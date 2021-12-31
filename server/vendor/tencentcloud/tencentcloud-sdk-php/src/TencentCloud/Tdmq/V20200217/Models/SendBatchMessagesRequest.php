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
 * SendBatchMessages请求参数结构体
 *
 * @method string getTopic() 获取消息要发送的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
 * @method void setTopic(string $Topic) 设置消息要发送的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
 * @method string getPayload() 获取需要发送消息的内容
 * @method void setPayload(string $Payload) 设置需要发送消息的内容
 * @method string getStringToken() 获取String 类型的 token，可以不填，系统会自动获取
 * @method void setStringToken(string $StringToken) 设置String 类型的 token，可以不填，系统会自动获取
 * @method string getProducerName() 获取producer 的名字，要求全局是唯一的，如果不设置，系统会自动生成
 * @method void setProducerName(string $ProducerName) 设置producer 的名字，要求全局是唯一的，如果不设置，系统会自动生成
 * @method integer getSendTimeout() 获取单位：s。消息发送的超时时间。默认值为：30s
 * @method void setSendTimeout(integer $SendTimeout) 设置单位：s。消息发送的超时时间。默认值为：30s
 * @method integer getMaxPendingMessages() 获取内存中允许缓存的生产消息的最大数量，默认值：1000条
 * @method void setMaxPendingMessages(integer $MaxPendingMessages) 设置内存中允许缓存的生产消息的最大数量，默认值：1000条
 * @method integer getBatchingMaxMessages() 获取每一个batch中消息的最大数量，默认值：1000条/batch
 * @method void setBatchingMaxMessages(integer $BatchingMaxMessages) 设置每一个batch中消息的最大数量，默认值：1000条/batch
 * @method integer getBatchingMaxPublishDelay() 获取每一个batch最大等待的时间，超过这个时间，不管是否达到指定的batch中消息的数量和大小，都会将该batch发送出去，默认：10ms
 * @method void setBatchingMaxPublishDelay(integer $BatchingMaxPublishDelay) 设置每一个batch最大等待的时间，超过这个时间，不管是否达到指定的batch中消息的数量和大小，都会将该batch发送出去，默认：10ms
 * @method integer getBatchingMaxBytes() 获取每一个batch中最大允许的消息的大小，默认：128KB
 * @method void setBatchingMaxBytes(integer $BatchingMaxBytes) 设置每一个batch中最大允许的消息的大小，默认：128KB
 */
class SendBatchMessagesRequest extends AbstractModel
{
    /**
     * @var string 消息要发送的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
     */
    public $Topic;

    /**
     * @var string 需要发送消息的内容
     */
    public $Payload;

    /**
     * @var string String 类型的 token，可以不填，系统会自动获取
     */
    public $StringToken;

    /**
     * @var string producer 的名字，要求全局是唯一的，如果不设置，系统会自动生成
     */
    public $ProducerName;

    /**
     * @var integer 单位：s。消息发送的超时时间。默认值为：30s
     */
    public $SendTimeout;

    /**
     * @var integer 内存中允许缓存的生产消息的最大数量，默认值：1000条
     */
    public $MaxPendingMessages;

    /**
     * @var integer 每一个batch中消息的最大数量，默认值：1000条/batch
     */
    public $BatchingMaxMessages;

    /**
     * @var integer 每一个batch最大等待的时间，超过这个时间，不管是否达到指定的batch中消息的数量和大小，都会将该batch发送出去，默认：10ms
     */
    public $BatchingMaxPublishDelay;

    /**
     * @var integer 每一个batch中最大允许的消息的大小，默认：128KB
     */
    public $BatchingMaxBytes;

    /**
     * @param string $Topic 消息要发送的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
     * @param string $Payload 需要发送消息的内容
     * @param string $StringToken String 类型的 token，可以不填，系统会自动获取
     * @param string $ProducerName producer 的名字，要求全局是唯一的，如果不设置，系统会自动生成
     * @param integer $SendTimeout 单位：s。消息发送的超时时间。默认值为：30s
     * @param integer $MaxPendingMessages 内存中允许缓存的生产消息的最大数量，默认值：1000条
     * @param integer $BatchingMaxMessages 每一个batch中消息的最大数量，默认值：1000条/batch
     * @param integer $BatchingMaxPublishDelay 每一个batch最大等待的时间，超过这个时间，不管是否达到指定的batch中消息的数量和大小，都会将该batch发送出去，默认：10ms
     * @param integer $BatchingMaxBytes 每一个batch中最大允许的消息的大小，默认：128KB
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("StringToken",$param) and $param["StringToken"] !== null) {
            $this->StringToken = $param["StringToken"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("SendTimeout",$param) and $param["SendTimeout"] !== null) {
            $this->SendTimeout = $param["SendTimeout"];
        }

        if (array_key_exists("MaxPendingMessages",$param) and $param["MaxPendingMessages"] !== null) {
            $this->MaxPendingMessages = $param["MaxPendingMessages"];
        }

        if (array_key_exists("BatchingMaxMessages",$param) and $param["BatchingMaxMessages"] !== null) {
            $this->BatchingMaxMessages = $param["BatchingMaxMessages"];
        }

        if (array_key_exists("BatchingMaxPublishDelay",$param) and $param["BatchingMaxPublishDelay"] !== null) {
            $this->BatchingMaxPublishDelay = $param["BatchingMaxPublishDelay"];
        }

        if (array_key_exists("BatchingMaxBytes",$param) and $param["BatchingMaxBytes"] !== null) {
            $this->BatchingMaxBytes = $param["BatchingMaxBytes"];
        }
    }
}
