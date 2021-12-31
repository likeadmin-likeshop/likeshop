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
 * 产品转发消息队列配置
 *
 * @method integer getMsgQueueType() 获取消息队列类型 1：CMQ 2：kafka
 * @method void setMsgQueueType(integer $MsgQueueType) 设置消息队列类型 1：CMQ 2：kafka
 * @method string getMsgType() 获取消息类型列表，整型值（0-31）之间以“,”分隔
 * @method void setMsgType(string $MsgType) 设置消息类型列表，整型值（0-31）之间以“,”分隔
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getInstance() 获取实例名称
 * @method void setInstance(string $Instance) 设置实例名称
 * @method string getMsgRegion() 获取消息地域
 * @method void setMsgRegion(string $MsgRegion) 设置消息地域
 */
class MsgQueueData extends AbstractModel
{
    /**
     * @var integer 消息队列类型 1：CMQ 2：kafka
     */
    public $MsgQueueType;

    /**
     * @var string 消息类型列表，整型值（0-31）之间以“,”分隔
     */
    public $MsgType;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 实例名称
     */
    public $Instance;

    /**
     * @var string 消息地域
     */
    public $MsgRegion;

    /**
     * @param integer $MsgQueueType 消息队列类型 1：CMQ 2：kafka
     * @param string $MsgType 消息类型列表，整型值（0-31）之间以“,”分隔
     * @param string $Topic 主题名称
     * @param string $Instance 实例名称
     * @param string $MsgRegion 消息地域
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
