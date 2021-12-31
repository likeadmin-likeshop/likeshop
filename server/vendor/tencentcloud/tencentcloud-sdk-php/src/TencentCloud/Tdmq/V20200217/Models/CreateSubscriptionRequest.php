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
 * CreateSubscription请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method string getSubscriptionName() 获取订阅者名称，不支持中字以及除了短线和下划线外的特殊字符且不超过150个字符。
 * @method void setSubscriptionName(string $SubscriptionName) 设置订阅者名称，不支持中字以及除了短线和下划线外的特殊字符且不超过150个字符。
 * @method boolean getIsIdempotent() 获取是否幂等创建，若否不允许创建同名的订阅关系。
 * @method void setIsIdempotent(boolean $IsIdempotent) 设置是否幂等创建，若否不允许创建同名的订阅关系。
 * @method string getRemark() 获取备注，128个字符以内。
 * @method void setRemark(string $Remark) 设置备注，128个字符以内。
 * @method string getClusterId() 获取Pulsar 集群的ID
 * @method void setClusterId(string $ClusterId) 设置Pulsar 集群的ID
 * @method boolean getAutoCreatePolicyTopic() 获取是否自动创建死信和重试主题，True 表示创建，False表示不创建，默认自动创建死信和重试主题。
 * @method void setAutoCreatePolicyTopic(boolean $AutoCreatePolicyTopic) 设置是否自动创建死信和重试主题，True 表示创建，False表示不创建，默认自动创建死信和重试主题。
 */
class CreateSubscriptionRequest extends AbstractModel
{
    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var string 订阅者名称，不支持中字以及除了短线和下划线外的特殊字符且不超过150个字符。
     */
    public $SubscriptionName;

    /**
     * @var boolean 是否幂等创建，若否不允许创建同名的订阅关系。
     */
    public $IsIdempotent;

    /**
     * @var string 备注，128个字符以内。
     */
    public $Remark;

    /**
     * @var string Pulsar 集群的ID
     */
    public $ClusterId;

    /**
     * @var boolean 是否自动创建死信和重试主题，True 表示创建，False表示不创建，默认自动创建死信和重试主题。
     */
    public $AutoCreatePolicyTopic;

    /**
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $TopicName 主题名称。
     * @param string $SubscriptionName 订阅者名称，不支持中字以及除了短线和下划线外的特殊字符且不超过150个字符。
     * @param boolean $IsIdempotent 是否幂等创建，若否不允许创建同名的订阅关系。
     * @param string $Remark 备注，128个字符以内。
     * @param string $ClusterId Pulsar 集群的ID
     * @param boolean $AutoCreatePolicyTopic 是否自动创建死信和重试主题，True 表示创建，False表示不创建，默认自动创建死信和重试主题。
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

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("IsIdempotent",$param) and $param["IsIdempotent"] !== null) {
            $this->IsIdempotent = $param["IsIdempotent"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AutoCreatePolicyTopic",$param) and $param["AutoCreatePolicyTopic"] !== null) {
            $this->AutoCreatePolicyTopic = $param["AutoCreatePolicyTopic"];
        }
    }
}
