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
 * 消费组偏移量返回结果
 *
 * @method integer getTotalCount() 获取符合调节的总结果数
 * @method void setTotalCount(integer $TotalCount) 设置符合调节的总结果数
 * @method array getTopicList() 获取该主题分区数组，其中每个元素为一个 json object
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicList(array $TopicList) 设置该主题分区数组，其中每个元素为一个 json object
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupOffsetResponse extends AbstractModel
{
    /**
     * @var integer 符合调节的总结果数
     */
    public $TotalCount;

    /**
     * @var array 该主题分区数组，其中每个元素为一个 json object
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicList;

    /**
     * @param integer $TotalCount 符合调节的总结果数
     * @param array $TopicList 该主题分区数组，其中每个元素为一个 json object
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
                $obj = new GroupOffsetTopic();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }
    }
}
