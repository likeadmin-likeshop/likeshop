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
 * ResetMsgSubOffsetByTimestamp请求参数结构体
 *
 * @method string getEnvironmentId() 获取命名空间名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间名称。
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method string getSubscription() 获取订阅者名称。
 * @method void setSubscription(string $Subscription) 设置订阅者名称。
 * @method integer getToTimestamp() 获取时间戳，精确到毫秒。
 * @method void setToTimestamp(integer $ToTimestamp) 设置时间戳，精确到毫秒。
 * @method string getClusterId() 获取Pulsar 集群的ID
 * @method void setClusterId(string $ClusterId) 设置Pulsar 集群的ID
 */
class ResetMsgSubOffsetByTimestampRequest extends AbstractModel
{
    /**
     * @var string 命名空间名称。
     */
    public $EnvironmentId;

    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var string 订阅者名称。
     */
    public $Subscription;

    /**
     * @var integer 时间戳，精确到毫秒。
     */
    public $ToTimestamp;

    /**
     * @var string Pulsar 集群的ID
     */
    public $ClusterId;

    /**
     * @param string $EnvironmentId 命名空间名称。
     * @param string $TopicName 主题名称。
     * @param string $Subscription 订阅者名称。
     * @param integer $ToTimestamp 时间戳，精确到毫秒。
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

        if (array_key_exists("Subscription",$param) and $param["Subscription"] !== null) {
            $this->Subscription = $param["Subscription"];
        }

        if (array_key_exists("ToTimestamp",$param) and $param["ToTimestamp"] !== null) {
            $this->ToTimestamp = $param["ToTimestamp"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
