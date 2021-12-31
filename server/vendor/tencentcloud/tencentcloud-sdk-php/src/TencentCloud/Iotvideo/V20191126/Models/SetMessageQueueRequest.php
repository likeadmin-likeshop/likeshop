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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetMessageQueue请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getMsgQueueType() 获取消息队列类型 1-CMQ; 2-Ckafka
 * @method void setMsgQueueType(integer $MsgQueueType) 设置消息队列类型 1-CMQ; 2-Ckafka
 * @method string getMsgType() 获取消息类型,整型值（0-31）之间以“,”分隔
0.设备在线状态变更
1.常亮属性(ProConst)变更
2.可写属性(ProWritable)变更
3.只读属性(ProReadonly)变更
4.设备控制(Action)
5.设备事件(Event)
6.系统事件(System)
 * @method void setMsgType(string $MsgType) 设置消息类型,整型值（0-31）之间以“,”分隔
0.设备在线状态变更
1.常亮属性(ProConst)变更
2.可写属性(ProWritable)变更
3.只读属性(ProReadonly)变更
4.设备控制(Action)
5.设备事件(Event)
6.系统事件(System)
 * @method string getTopic() 获取消息队列主题，不超过32字符
 * @method void setTopic(string $Topic) 设置消息队列主题，不超过32字符
 * @method string getInstance() 获取kafka消息队列的实例名，不超过64字符
 * @method void setInstance(string $Instance) 设置kafka消息队列的实例名，不超过64字符
 * @method string getMsgRegion() 获取消息地域，不超过32字符
 * @method void setMsgRegion(string $MsgRegion) 设置消息地域，不超过32字符
 */
class SetMessageQueueRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 消息队列类型 1-CMQ; 2-Ckafka
     */
    public $MsgQueueType;

    /**
     * @var string 消息类型,整型值（0-31）之间以“,”分隔
0.设备在线状态变更
1.常亮属性(ProConst)变更
2.可写属性(ProWritable)变更
3.只读属性(ProReadonly)变更
4.设备控制(Action)
5.设备事件(Event)
6.系统事件(System)
     */
    public $MsgType;

    /**
     * @var string 消息队列主题，不超过32字符
     */
    public $Topic;

    /**
     * @var string kafka消息队列的实例名，不超过64字符
     */
    public $Instance;

    /**
     * @var string 消息地域，不超过32字符
     */
    public $MsgRegion;

    /**
     * @param string $ProductId 产品ID
     * @param integer $MsgQueueType 消息队列类型 1-CMQ; 2-Ckafka
     * @param string $MsgType 消息类型,整型值（0-31）之间以“,”分隔
0.设备在线状态变更
1.常亮属性(ProConst)变更
2.可写属性(ProWritable)变更
3.只读属性(ProReadonly)变更
4.设备控制(Action)
5.设备事件(Event)
6.系统事件(System)
     * @param string $Topic 消息队列主题，不超过32字符
     * @param string $Instance kafka消息队列的实例名，不超过64字符
     * @param string $MsgRegion 消息地域，不超过32字符
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("MsgQueueType",$param) and $param["MsgQueueType"] !== null) {
            $this->MsgQueueType = $param["MsgQueueType"];
        }

        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("MsgRegion",$param) and $param["MsgRegion"] !== null) {
            $this->MsgRegion = $param["MsgRegion"];
        }
    }
}
