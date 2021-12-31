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
 * PublishCmqMsg请求参数结构体
 *
 * @method string getTopicName() 获取主题名
 * @method void setTopicName(string $TopicName) 设置主题名
 * @method string getMsgContent() 获取消息内容
 * @method void setMsgContent(string $MsgContent) 设置消息内容
 * @method array getMsgTag() 获取消息标签
 * @method void setMsgTag(array $MsgTag) 设置消息标签
 */
class PublishCmqMsgRequest extends AbstractModel
{
    /**
     * @var string 主题名
     */
    public $TopicName;

    /**
     * @var string 消息内容
     */
    public $MsgContent;

    /**
     * @var array 消息标签
     */
    public $MsgTag;

    /**
     * @param string $TopicName 主题名
     * @param string $MsgContent 消息内容
     * @param array $MsgTag 消息标签
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

        if (array_key_exists("MsgContent",$param) and $param["MsgContent"] !== null) {
            $this->MsgContent = $param["MsgContent"];
        }

        if (array_key_exists("MsgTag",$param) and $param["MsgTag"] !== null) {
            $this->MsgTag = $param["MsgTag"];
        }
    }
}
