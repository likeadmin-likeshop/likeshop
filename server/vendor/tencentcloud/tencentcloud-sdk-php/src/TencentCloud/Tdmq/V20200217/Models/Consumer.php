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
 *  消费者
 *
 * @method string getConnectedSince() 获取消费者开始连接的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectedSince(string $ConnectedSince) 设置消费者开始连接的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerAddr() 获取消费者地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerAddr(string $ConsumerAddr) 设置消费者地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerName() 获取消费者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerName(string $ConsumerName) 设置消费者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientVersion() 获取消费者版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientVersion(string $ClientVersion) 设置消费者版本。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Consumer extends AbstractModel
{
    /**
     * @var string 消费者开始连接的时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectedSince;

    /**
     * @var string 消费者地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerAddr;

    /**
     * @var string 消费者名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerName;

    /**
     * @var string 消费者版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientVersion;

    /**
     * @param string $ConnectedSince 消费者开始连接的时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerAddr 消费者地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerName 消费者名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientVersion 消费者版本。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ConnectedSince",$param) and $param["ConnectedSince"] !== null) {
            $this->ConnectedSince = $param["ConnectedSince"];
        }

        if (array_key_exists("ConsumerAddr",$param) and $param["ConsumerAddr"] !== null) {
            $this->ConsumerAddr = $param["ConsumerAddr"];
        }

        if (array_key_exists("ConsumerName",$param) and $param["ConsumerName"] !== null) {
            $this->ConsumerName = $param["ConsumerName"];
        }

        if (array_key_exists("ClientVersion",$param) and $param["ClientVersion"] !== null) {
            $this->ClientVersion = $param["ClientVersion"];
        }
    }
}
