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
 * DeleteSubscriptions请求参数结构体
 *
 * @method array getSubscriptionTopicSets() 获取订阅关系集合，每次最多删除20个。
 * @method void setSubscriptionTopicSets(array $SubscriptionTopicSets) 设置订阅关系集合，每次最多删除20个。
 * @method string getClusterId() 获取pulsar集群Id。
 * @method void setClusterId(string $ClusterId) 设置pulsar集群Id。
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 */
class DeleteSubscriptionsRequest extends AbstractModel
{
    /**
     * @var array 订阅关系集合，每次最多删除20个。
     */
    public $SubscriptionTopicSets;

    /**
     * @var string pulsar集群Id。
     */
    public $ClusterId;

    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @param array $SubscriptionTopicSets 订阅关系集合，每次最多删除20个。
     * @param string $ClusterId pulsar集群Id。
     * @param string $EnvironmentId 环境（命名空间）名称。
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
        if (array_key_exists("SubscriptionTopicSets",$param) and $param["SubscriptionTopicSets"] !== null) {
            $this->SubscriptionTopicSets = [];
            foreach ($param["SubscriptionTopicSets"] as $key => $value){
                $obj = new SubscriptionTopic();
                $obj->deserialize($value);
                array_push($this->SubscriptionTopicSets, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }
    }
}
