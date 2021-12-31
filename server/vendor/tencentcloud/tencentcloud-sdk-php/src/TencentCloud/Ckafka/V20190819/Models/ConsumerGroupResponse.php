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
 * 消费组返回结果实体
 *
 * @method integer getTotalCount() 获取符合条件的消费组数量
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的消费组数量
 * @method array getTopicList() 获取主题列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicList(array $TopicList) 设置主题列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroupList() 获取消费分组List
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupList(array $GroupList) 设置消费分组List
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPartition() 获取所有分区数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPartition(integer $TotalPartition) 设置所有分区数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartitionListForMonitor() 获取监控的分区列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionListForMonitor(array $PartitionListForMonitor) 设置监控的分区列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalTopic() 获取主题总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTopic(integer $TotalTopic) 设置主题总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTopicListForMonitor() 获取监控的主题列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicListForMonitor(array $TopicListForMonitor) 设置监控的主题列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroupListForMonitor() 获取监控的组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupListForMonitor(array $GroupListForMonitor) 设置监控的组列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerGroupResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的消费组数量
     */
    public $TotalCount;

    /**
     * @var array 主题列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicList;

    /**
     * @var array 消费分组List
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupList;

    /**
     * @var integer 所有分区数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPartition;

    /**
     * @var array 监控的分区列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionListForMonitor;

    /**
     * @var integer 主题总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTopic;

    /**
     * @var array 监控的主题列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicListForMonitor;

    /**
     * @var array 监控的组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupListForMonitor;

    /**
     * @param integer $TotalCount 符合条件的消费组数量
     * @param array $TopicList 主题列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GroupList 消费分组List
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPartition 所有分区数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartitionListForMonitor 监控的分区列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalTopic 主题总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TopicListForMonitor 监控的主题列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GroupListForMonitor 监控的组列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new ConsumerGroupTopic();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }

        if (array_key_exists("GroupList",$param) and $param["GroupList"] !== null) {
            $this->GroupList = [];
            foreach ($param["GroupList"] as $key => $value){
                $obj = new ConsumerGroup();
                $obj->deserialize($value);
                array_push($this->GroupList, $obj);
            }
        }

        if (array_key_exists("TotalPartition",$param) and $param["TotalPartition"] !== null) {
            $this->TotalPartition = $param["TotalPartition"];
        }

        if (array_key_exists("PartitionListForMonitor",$param) and $param["PartitionListForMonitor"] !== null) {
            $this->PartitionListForMonitor = [];
            foreach ($param["PartitionListForMonitor"] as $key => $value){
                $obj = new Partition();
                $obj->deserialize($value);
                array_push($this->PartitionListForMonitor, $obj);
            }
        }

        if (array_key_exists("TotalTopic",$param) and $param["TotalTopic"] !== null) {
            $this->TotalTopic = $param["TotalTopic"];
        }

        if (array_key_exists("TopicListForMonitor",$param) and $param["TopicListForMonitor"] !== null) {
            $this->TopicListForMonitor = [];
            foreach ($param["TopicListForMonitor"] as $key => $value){
                $obj = new ConsumerGroupTopic();
                $obj->deserialize($value);
                array_push($this->TopicListForMonitor, $obj);
            }
        }

        if (array_key_exists("GroupListForMonitor",$param) and $param["GroupListForMonitor"] !== null) {
            $this->GroupListForMonitor = [];
            foreach ($param["GroupListForMonitor"] as $key => $value){
                $obj = new Group();
                $obj->deserialize($value);
                array_push($this->GroupListForMonitor, $obj);
            }
        }
    }
}
