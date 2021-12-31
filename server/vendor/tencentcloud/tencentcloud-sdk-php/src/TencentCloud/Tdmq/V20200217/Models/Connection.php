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
 * 生产者连接实例
 *
 * @method string getAddress() 获取生产者地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置生产者地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitions() 获取主题分区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitions(integer $Partitions) 设置主题分区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientVersion() 获取生产者版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientVersion(string $ClientVersion) 设置生产者版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProducerName() 获取生产者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProducerName(string $ProducerName) 设置生产者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProducerId() 获取生产者ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProducerId(string $ProducerId) 设置生产者ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAverageMsgSize() 获取消息平均大小(byte)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageMsgSize(string $AverageMsgSize) 设置消息平均大小(byte)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgThroughputIn() 获取生成速率(byte/秒)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgThroughputIn(string $MsgThroughputIn) 设置生成速率(byte/秒)。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Connection extends AbstractModel
{
    /**
     * @var string 生产者地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var integer 主题分区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partitions;

    /**
     * @var string 生产者版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientVersion;

    /**
     * @var string 生产者名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProducerName;

    /**
     * @var string 生产者ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProducerId;

    /**
     * @var string 消息平均大小(byte)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageMsgSize;

    /**
     * @var string 生成速率(byte/秒)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgThroughputIn;

    /**
     * @param string $Address 生产者地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Partitions 主题分区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientVersion 生产者版本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProducerName 生产者名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProducerId 生产者ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AverageMsgSize 消息平均大小(byte)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgThroughputIn 生成速率(byte/秒)。
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("ClientVersion",$param) and $param["ClientVersion"] !== null) {
            $this->ClientVersion = $param["ClientVersion"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("ProducerId",$param) and $param["ProducerId"] !== null) {
            $this->ProducerId = $param["ProducerId"];
        }

        if (array_key_exists("AverageMsgSize",$param) and $param["AverageMsgSize"] !== null) {
            $this->AverageMsgSize = $param["AverageMsgSize"];
        }

        if (array_key_exists("MsgThroughputIn",$param) and $param["MsgThroughputIn"] !== null) {
            $this->MsgThroughputIn = $param["MsgThroughputIn"];
        }
    }
}
