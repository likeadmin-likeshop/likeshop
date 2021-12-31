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
 * DescribeConsumerGroup请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka实例id。
 * @method void setInstanceId(string $InstanceId) 设置ckafka实例id。
 * @method string getGroupName() 获取可选，用户需要查询的group名称。
 * @method void setGroupName(string $GroupName) 设置可选，用户需要查询的group名称。
 * @method string getTopicName() 获取可选，用户需要查询的group中的对应的topic名称，如果指定了该参数，而group又未指定则忽略该参数。
 * @method void setTopicName(string $TopicName) 设置可选，用户需要查询的group中的对应的topic名称，如果指定了该参数，而group又未指定则忽略该参数。
 * @method integer getLimit() 获取本次返回个数限制
 * @method void setLimit(integer $Limit) 设置本次返回个数限制
 * @method integer getOffset() 获取偏移位置
 * @method void setOffset(integer $Offset) 设置偏移位置
 */
class DescribeConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string ckafka实例id。
     */
    public $InstanceId;

    /**
     * @var string 可选，用户需要查询的group名称。
     */
    public $GroupName;

    /**
     * @var string 可选，用户需要查询的group中的对应的topic名称，如果指定了该参数，而group又未指定则忽略该参数。
     */
    public $TopicName;

    /**
     * @var integer 本次返回个数限制
     */
    public $Limit;

    /**
     * @var integer 偏移位置
     */
    public $Offset;

    /**
     * @param string $InstanceId ckafka实例id。
     * @param string $GroupName 可选，用户需要查询的group名称。
     * @param string $TopicName 可选，用户需要查询的group中的对应的topic名称，如果指定了该参数，而group又未指定则忽略该参数。
     * @param integer $Limit 本次返回个数限制
     * @param integer $Offset 偏移位置
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
