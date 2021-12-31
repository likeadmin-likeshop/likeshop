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
 * 返回的topic对象
 *
 * @method string getTopicId() 获取主题的ID
 * @method void setTopicId(string $TopicId) 设置主题的ID
 * @method string getTopicName() 获取主题的名称
 * @method void setTopicName(string $TopicName) 设置主题的名称
 * @method string getNote() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNote(string $Note) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class Topic extends AbstractModel
{
    /**
     * @var string 主题的ID
     */
    public $TopicId;

    /**
     * @var string 主题的名称
     */
    public $TopicName;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Note;

    /**
     * @param string $TopicId 主题的ID
     * @param string $TopicName 主题的名称
     * @param string $Note 备注
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
