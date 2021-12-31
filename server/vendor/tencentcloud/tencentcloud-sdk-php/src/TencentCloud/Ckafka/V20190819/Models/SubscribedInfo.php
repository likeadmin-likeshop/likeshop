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
 * 订阅信息实体
 *
 * @method string getTopicName() 获取订阅的主题名
 * @method void setTopicName(string $TopicName) 设置订阅的主题名
 * @method array getPartition() 获取订阅的分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartition(array $Partition) 设置订阅的分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartitionOffset() 获取分区offset信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionOffset(array $PartitionOffset) 设置分区offset信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取订阅的主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置订阅的主题ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubscribedInfo extends AbstractModel
{
    /**
     * @var string 订阅的主题名
     */
    public $TopicName;

    /**
     * @var array 订阅的分区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partition;

    /**
     * @var array 分区offset信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionOffset;

    /**
     * @var string 订阅的主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @param string $TopicName 订阅的主题名
     * @param array $Partition 订阅的分区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartitionOffset 分区offset信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 订阅的主题ID
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("PartitionOffset",$param) and $param["PartitionOffset"] !== null) {
            $this->PartitionOffset = [];
            foreach ($param["PartitionOffset"] as $key => $value){
                $obj = new PartitionOffset();
                $obj->deserialize($value);
                array_push($this->PartitionOffset, $obj);
            }
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
