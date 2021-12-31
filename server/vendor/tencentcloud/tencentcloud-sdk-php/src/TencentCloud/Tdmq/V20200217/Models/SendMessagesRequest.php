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
 * SendMessages请求参数结构体
 *
 * @method string getTopic() 获取消息要发送的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
 * @method void setTopic(string $Topic) 设置消息要发送的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
 * @method string getPayload() 获取要发送的消息的内容
 * @method void setPayload(string $Payload) 设置要发送的消息的内容
 * @method string getStringToken() 获取Token 是用来做鉴权使用的，可以不填，系统会自动获取
 * @method void setStringToken(string $StringToken) 设置Token 是用来做鉴权使用的，可以不填，系统会自动获取
 * @method string getProducerName() 获取设置 producer 的名字，要求全局唯一，用户不配置，系统会随机生成
 * @method void setProducerName(string $ProducerName) 设置设置 producer 的名字，要求全局唯一，用户不配置，系统会随机生成
 * @method integer getSendTimeout() 获取设置消息发送的超时时间，默认为30s
 * @method void setSendTimeout(integer $SendTimeout) 设置设置消息发送的超时时间，默认为30s
 * @method integer getMaxPendingMessages() 获取内存中缓存的最大的生产消息的数量，默认为1000条
 * @method void setMaxPendingMessages(integer $MaxPendingMessages) 设置内存中缓存的最大的生产消息的数量，默认为1000条
 */
class SendMessagesRequest extends AbstractModel
{
    /**
     * @var string 消息要发送的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
     */
    public $Topic;

    /**
     * @var string 要发送的消息的内容
     */
    public $Payload;

    /**
     * @var string Token 是用来做鉴权使用的，可以不填，系统会自动获取
     */
    public $StringToken;

    /**
     * @var string 设置 producer 的名字，要求全局唯一，用户不配置，系统会随机生成
     */
    public $ProducerName;

    /**
     * @var integer 设置消息发送的超时时间，默认为30s
     */
    public $SendTimeout;

    /**
     * @var integer 内存中缓存的最大的生产消息的数量，默认为1000条
     */
    public $MaxPendingMessages;

    /**
     * @param string $Topic 消息要发送的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
     * @param string $Payload 要发送的消息的内容
     * @param string $StringToken Token 是用来做鉴权使用的，可以不填，系统会自动获取
     * @param string $ProducerName 设置 producer 的名字，要求全局唯一，用户不配置，系统会随机生成
     * @param integer $SendTimeout 设置消息发送的超时时间，默认为30s
     * @param integer $MaxPendingMessages 内存中缓存的最大的生产消息的数量，默认为1000条
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
    }
}
