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
 * ReceiveMessage返回参数结构体
 *
 * @method string getMessageID() 获取用作标识消息的唯一主键
 * @method void setMessageID(string $MessageID) 设置用作标识消息的唯一主键
 * @method string getMessagePayload() 获取接收消息的内容
 * @method void setMessagePayload(string $MessagePayload) 设置接收消息的内容
 * @method string getAckTopic() 获取提供给 Ack 接口，用来Ack哪一个topic中的消息
 * @method void setAckTopic(string $AckTopic) 设置提供给 Ack 接口，用来Ack哪一个topic中的消息
 * @method string getErrorMsg() 获取返回的错误信息，如果为空，说明没有错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置返回的错误信息，如果为空，说明没有错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubName() 获取返回订阅者的名字，用来创建 ack consumer时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubName(string $SubName) 设置返回订阅者的名字，用来创建 ack consumer时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ReceiveMessageResponse extends AbstractModel
{
    /**
     * @var string 用作标识消息的唯一主键
     */
    public $MessageID;

    /**
     * @var string 接收消息的内容
     */
    public $MessagePayload;

    /**
     * @var string 提供给 Ack 接口，用来Ack哪一个topic中的消息
     */
    public $AckTopic;

    /**
     * @var string 返回的错误信息，如果为空，说明没有错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string 返回订阅者的名字，用来创建 ack consumer时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MessageID 用作标识消息的唯一主键
     * @param string $MessagePayload 接收消息的内容
     * @param string $AckTopic 提供给 Ack 接口，用来Ack哪一个topic中的消息
     * @param string $ErrorMsg 返回的错误信息，如果为空，说明没有错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubName 返回订阅者的名字，用来创建 ack consumer时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MessageID",$param) and $param["MessageID"] !== null) {
            $this->MessageID = $param["MessageID"];
        }

        if (array_key_exists("MessagePayload",$param) and $param["MessagePayload"] !== null) {
            $this->MessagePayload = $param["MessagePayload"];
        }

        if (array_key_exists("AckTopic",$param) and $param["AckTopic"] !== null) {
            $this->AckTopic = $param["AckTopic"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("SubName",$param) and $param["SubName"] !== null) {
            $this->SubName = $param["SubName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
