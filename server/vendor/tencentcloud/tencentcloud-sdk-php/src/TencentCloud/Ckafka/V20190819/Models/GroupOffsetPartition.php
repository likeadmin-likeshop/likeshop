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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组偏移量分区对象
 *
 * @method integer getPartition() 获取topic 的 partitionId
 * @method void setPartition(integer $Partition) 设置topic 的 partitionId
 * @method integer getOffset() 获取consumer 提交的 offset 位置
 * @method void setOffset(integer $Offset) 设置consumer 提交的 offset 位置
 * @method string getMetadata() 获取支持消费者提交消息时，传入 metadata 作为它用，当前一般为空字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(string $Metadata) 设置支持消费者提交消息时，传入 metadata 作为它用，当前一般为空字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrorCode() 获取错误码
 * @method void setErrorCode(integer $ErrorCode) 设置错误码
 * @method integer getLogEndOffset() 获取当前 partition 最新的 offset
 * @method void setLogEndOffset(integer $LogEndOffset) 设置当前 partition 最新的 offset
 * @method integer getLag() 获取未消费的消息个数
 * @method void setLag(integer $Lag) 设置未消费的消息个数
 */
class GroupOffsetPartition extends AbstractModel
{
    /**
     * @var integer topic 的 partitionId
     */
    public $Partition;

    /**
     * @var integer consumer 提交的 offset 位置
     */
    public $Offset;

    /**
     * @var string 支持消费者提交消息时，传入 metadata 作为它用，当前一般为空字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var integer 错误码
     */
    public $ErrorCode;

    /**
     * @var integer 当前 partition 最新的 offset
     */
    public $LogEndOffset;

    /**
     * @var integer 未消费的消息个数
     */
    public $Lag;

    /**
     * @param integer $Partition topic 的 partitionId
     * @param integer $Offset consumer 提交的 offset 位置
     * @param string $Metadata 支持消费者提交消息时，传入 metadata 作为它用，当前一般为空字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrorCode 错误码
     * @param integer $LogEndOffset 当前 partition 最新的 offset
     * @param integer $Lag 未消费的消息个数
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
        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("LogEndOffset",$param) and $param["LogEndOffset"] !== null) {
            $this->LogEndOffset = $param["LogEndOffset"];
        }

        if (array_key_exists("Lag",$param) and $param["Lag"] !== null) {
            $this->Lag = $param["Lag"];
        }
    }
}
