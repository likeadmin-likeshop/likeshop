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
 * AcknowledgeMessage请求参数结构体
 *
 * @method string getMessageId() 获取用作标识消息的唯一的ID（可从 receiveMessage 的返回值中获得）
 * @method void setMessageId(string $MessageId) 设置用作标识消息的唯一的ID（可从 receiveMessage 的返回值中获得）
 * @method string getAckTopic() 获取Topic 名字（可从 receiveMessage 的返回值中获得）这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
 * @method void setAckTopic(string $AckTopic) 设置Topic 名字（可从 receiveMessage 的返回值中获得）这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
 * @method string getSubName() 获取订阅者的名字，可以从receiveMessage的返回值中获取到。这里尽量与receiveMessage中的订阅者保持一致，否则没办法正确ack 接收回来的消息。
 * @method void setSubName(string $SubName) 设置订阅者的名字，可以从receiveMessage的返回值中获取到。这里尽量与receiveMessage中的订阅者保持一致，否则没办法正确ack 接收回来的消息。
 */
class AcknowledgeMessageRequest extends AbstractModel
{
    /**
     * @var string 用作标识消息的唯一的ID（可从 receiveMessage 的返回值中获得）
     */
    public $MessageId;

    /**
     * @var string Topic 名字（可从 receiveMessage 的返回值中获得）这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
     */
    public $AckTopic;

    /**
     * @var string 订阅者的名字，可以从receiveMessage的返回值中获取到。这里尽量与receiveMessage中的订阅者保持一致，否则没办法正确ack 接收回来的消息。
     */
    public $SubName;

    /**
     * @param string $MessageId 用作标识消息的唯一的ID（可从 receiveMessage 的返回值中获得）
     * @param string $AckTopic Topic 名字（可从 receiveMessage 的返回值中获得）这里尽量需要使用topic的全路径，如果不指定，默认使用的是：public/default
     * @param string $SubName 订阅者的名字，可以从receiveMessage的返回值中获取到。这里尽量与receiveMessage中的订阅者保持一致，否则没办法正确ack 接收回来的消息。
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
        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("AckTopic",$param) and $param["AckTopic"] !== null) {
            $this->AckTopic = $param["AckTopic"];
        }

        if (array_key_exists("SubName",$param) and $param["SubName"] !== null) {
            $this->SubName = $param["SubName"];
        }
    }
}
