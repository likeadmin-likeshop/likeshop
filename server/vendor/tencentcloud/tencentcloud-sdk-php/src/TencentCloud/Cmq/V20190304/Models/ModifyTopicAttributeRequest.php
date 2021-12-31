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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTopicAttribute请求参数结构体
 *
 * @method string getTopicName() 获取主题名字，在单个地域同一帐号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。
 * @method void setTopicName(string $TopicName) 设置主题名字，在单个地域同一帐号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。
 * @method integer getMaxMsgSize() 获取消息最大长度。取值范围1024 - 65536 Byte（即1 - 64K），默认值65536。
 * @method void setMaxMsgSize(integer $MaxMsgSize) 设置消息最大长度。取值范围1024 - 65536 Byte（即1 - 64K），默认值65536。
 * @method integer getMsgRetentionSeconds() 获取消息保存时间。取值范围60 - 86400 s（即1分钟 - 1天），默认值86400。
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) 设置消息保存时间。取值范围60 - 86400 s（即1分钟 - 1天），默认值86400。
 * @method boolean getTrace() 获取是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 * @method void setTrace(boolean $Trace) 设置是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 */
class ModifyTopicAttributeRequest extends AbstractModel
{
    /**
     * @var string 主题名字，在单个地域同一帐号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。
     */
    public $TopicName;

    /**
     * @var integer 消息最大长度。取值范围1024 - 65536 Byte（即1 - 64K），默认值65536。
     */
    public $MaxMsgSize;

    /**
     * @var integer 消息保存时间。取值范围60 - 86400 s（即1分钟 - 1天），默认值86400。
     */
    public $MsgRetentionSeconds;

    /**
     * @var boolean 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
     */
    public $Trace;

    /**
     * @param string $TopicName 主题名字，在单个地域同一帐号下唯一。主题名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。
     * @param integer $MaxMsgSize 消息最大长度。取值范围1024 - 65536 Byte（即1 - 64K），默认值65536。
     * @param integer $MsgRetentionSeconds 消息保存时间。取值范围60 - 86400 s（即1分钟 - 1天），默认值86400。
     * @param boolean $Trace 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
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

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }
    }
}
