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
 * CreateTopic请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getTopicName() 获取主题名，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
 * @method void setTopicName(string $TopicName) 设置主题名，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
 * @method integer getPartitions() 获取0：非分区topic，无分区；非0：具体分区topic的分区数，最大不允许超过128。
 * @method void setPartitions(integer $Partitions) 设置0：非分区topic，无分区；非0：具体分区topic的分区数，最大不允许超过128。
 * @method integer getTopicType() 获取0： 普通消息；
1 ：全局顺序消息；
2 ：局部顺序消息；
3 ：重试队列；
4 ：死信队列；
5 ：事务消息。
 * @method void setTopicType(integer $TopicType) 设置0： 普通消息；
1 ：全局顺序消息；
2 ：局部顺序消息；
3 ：重试队列；
4 ：死信队列；
5 ：事务消息。
 * @method string getRemark() 获取备注，128字符以内。
 * @method void setRemark(string $Remark) 设置备注，128字符以内。
 * @method string getClusterId() 获取Pulsar 集群的ID
 * @method void setClusterId(string $ClusterId) 设置Pulsar 集群的ID
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 主题名，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
     */
    public $TopicName;

    /**
     * @var integer 0：非分区topic，无分区；非0：具体分区topic的分区数，最大不允许超过128。
     */
    public $Partitions;

    /**
     * @var integer 0： 普通消息；
1 ：全局顺序消息；
2 ：局部顺序消息；
3 ：重试队列；
4 ：死信队列；
5 ：事务消息。
     */
    public $TopicType;

    /**
     * @var string 备注，128字符以内。
     */
    public $Remark;

    /**
     * @var string Pulsar 集群的ID
     */
    public $ClusterId;

    /**
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $TopicName 主题名，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
     * @param integer $Partitions 0：非分区topic，无分区；非0：具体分区topic的分区数，最大不允许超过128。
     * @param integer $TopicType 0： 普通消息；
1 ：全局顺序消息；
2 ：局部顺序消息；
3 ：重试队列；
4 ：死信队列；
5 ：事务消息。
     * @param string $Remark 备注，128字符以内。
     * @param string $ClusterId Pulsar 集群的ID
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
