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
 * PublishRRPCMessage返回参数结构体
 *
 * @method integer getMessageId() 获取RRPC消息ID
 * @method void setMessageId(integer $MessageId) 设置RRPC消息ID
 * @method string getPayloadBase64() 获取设备回复的消息内容，采用base64编码
 * @method void setPayloadBase64(string $PayloadBase64) 设置设备回复的消息内容，采用base64编码
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class PublishRRPCMessageResponse extends AbstractModel
{
    /**
     * @var integer RRPC消息ID
     */
    public $MessageId;

    /**
     * @var string 设备回复的消息内容，采用base64编码
     */
    public $PayloadBase64;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MessageId RRPC消息ID
     * @param string $PayloadBase64 设备回复的消息内容，采用base64编码
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
        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("PayloadBase64",$param) and $param["PayloadBase64"] !== null) {
            $this->PayloadBase64 = $param["PayloadBase64"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
