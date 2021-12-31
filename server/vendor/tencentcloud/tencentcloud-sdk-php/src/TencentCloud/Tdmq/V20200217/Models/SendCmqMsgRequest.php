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
 * SendCmqMsg请求参数结构体
 *
 * @method string getQueueName() 获取队列名
 * @method void setQueueName(string $QueueName) 设置队列名
 * @method string getMsgContent() 获取消息内容
 * @method void setMsgContent(string $MsgContent) 设置消息内容
 * @method integer getDelaySeconds() 获取延迟时间
 * @method void setDelaySeconds(integer $DelaySeconds) 设置延迟时间
 */
class SendCmqMsgRequest extends AbstractModel
{
    /**
     * @var string 队列名
     */
    public $QueueName;

    /**
     * @var string 消息内容
     */
    public $MsgContent;

    /**
     * @var integer 延迟时间
     */
    public $DelaySeconds;

    /**
     * @param string $QueueName 队列名
     * @param string $MsgContent 消息内容
     * @param integer $DelaySeconds 延迟时间
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("MsgContent",$param) and $param["MsgContent"] !== null) {
            $this->MsgContent = $param["MsgContent"];
        }

        if (array_key_exists("DelaySeconds",$param) and $param["DelaySeconds"] !== null) {
            $this->DelaySeconds = $param["DelaySeconds"];
        }
    }
}
