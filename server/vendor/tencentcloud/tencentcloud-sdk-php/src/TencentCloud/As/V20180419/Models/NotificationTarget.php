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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知目标
 *
 * @method string getTargetType() 获取目标类型，取值范围包括`CMQ_QUEUE`、`CMQ_TOPIC`。
<li> CMQ_QUEUE，指腾讯云消息队列-队列模型。</li>
<li> CMQ_TOPIC，指腾讯云消息队列-主题模型。</li>
 * @method void setTargetType(string $TargetType) 设置目标类型，取值范围包括`CMQ_QUEUE`、`CMQ_TOPIC`。
<li> CMQ_QUEUE，指腾讯云消息队列-队列模型。</li>
<li> CMQ_TOPIC，指腾讯云消息队列-主题模型。</li>
 * @method string getQueueName() 获取队列名称，如果`TargetType`取值为`CMQ_QUEUE`，则本字段必填。
 * @method void setQueueName(string $QueueName) 设置队列名称，如果`TargetType`取值为`CMQ_QUEUE`，则本字段必填。
 * @method string getTopicName() 获取主题名称，如果`TargetType`取值为`CMQ_TOPIC`，则本字段必填。
 * @method void setTopicName(string $TopicName) 设置主题名称，如果`TargetType`取值为`CMQ_TOPIC`，则本字段必填。
 */
class NotificationTarget extends AbstractModel
{
    /**
     * @var string 目标类型，取值范围包括`CMQ_QUEUE`、`CMQ_TOPIC`。
<li> CMQ_QUEUE，指腾讯云消息队列-队列模型。</li>
<li> CMQ_TOPIC，指腾讯云消息队列-主题模型。</li>
     */
    public $TargetType;

    /**
     * @var string 队列名称，如果`TargetType`取值为`CMQ_QUEUE`，则本字段必填。
     */
    public $QueueName;

    /**
     * @var string 主题名称，如果`TargetType`取值为`CMQ_TOPIC`，则本字段必填。
     */
    public $TopicName;

    /**
     * @param string $TargetType 目标类型，取值范围包括`CMQ_QUEUE`、`CMQ_TOPIC`。
<li> CMQ_QUEUE，指腾讯云消息队列-队列模型。</li>
<li> CMQ_TOPIC，指腾讯云消息队列-主题模型。</li>
     * @param string $QueueName 队列名称，如果`TargetType`取值为`CMQ_QUEUE`，则本字段必填。
     * @param string $TopicName 主题名称，如果`TargetType`取值为`CMQ_TOPIC`，则本字段必填。
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
        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
