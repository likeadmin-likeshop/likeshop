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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聊天消息
 *
 * @method integer getTimestamp() 获取消息时间戳
 * @method void setTimestamp(integer $Timestamp) 设置消息时间戳
 * @method string getFrom() 获取发消息的用户ID
 * @method void setFrom(string $From) 设置发消息的用户ID
 * @method array getMessages() 获取消息列表
 * @method void setMessages(array $Messages) 设置消息列表
 */
class MessageBody extends AbstractModel
{
    /**
     * @var integer 消息时间戳
     */
    public $Timestamp;

    /**
     * @var string 发消息的用户ID
     */
    public $From;

    /**
     * @var array 消息列表
     */
    public $Messages;

    /**
     * @param integer $Timestamp 消息时间戳
     * @param string $From 发消息的用户ID
     * @param array $Messages 消息列表
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new Message();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }
    }
}
