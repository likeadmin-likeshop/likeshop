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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量发消息请求
 *
 * @method string getTopic() 获取消息发往的主题。为 Topic 权限中去除 ProductID 和 DeviceName 的部分，如 “event”
 * @method void setTopic(string $Topic) 设置消息发往的主题。为 Topic 权限中去除 ProductID 和 DeviceName 的部分，如 “event”
 * @method string getPayload() 获取消息内容
 * @method void setPayload(string $Payload) 设置消息内容
 */
class BatchPublishMessage extends AbstractModel
{
    /**
     * @var string 消息发往的主题。为 Topic 权限中去除 ProductID 和 DeviceName 的部分，如 “event”
     */
    public $Topic;

    /**
     * @var string 消息内容
     */
    public $Payload;

    /**
     * @param string $Topic 消息发往的主题。为 Topic 权限中去除 ProductID 和 DeviceName 的部分，如 “event”
     * @param string $Payload 消息内容
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
    }
}
