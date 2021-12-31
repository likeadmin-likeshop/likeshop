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
 * DeleteTopic请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka 实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka 实例Id
 * @method string getTopicName() 获取ckafka 主题名称
 * @method void setTopicName(string $TopicName) 设置ckafka 主题名称
 */
class DeleteTopicRequest extends AbstractModel
{
    /**
     * @var string ckafka 实例Id
     */
    public $InstanceId;

    /**
     * @var string ckafka 主题名称
     */
    public $TopicName;

    /**
     * @param string $InstanceId ckafka 实例Id
     * @param string $TopicName ckafka 主题名称
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
