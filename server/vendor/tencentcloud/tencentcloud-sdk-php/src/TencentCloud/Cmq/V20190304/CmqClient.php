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

namespace TencentCloud\Cmq\V20190304;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cmq\V20190304\Models as Models;

/**
 * @method Models\ClearQueueResponse ClearQueue(Models\ClearQueueRequest $req) 清除queue中的所有消息
 * @method Models\ClearSubscriptionFilterTagsResponse ClearSubscriptionFilterTags(Models\ClearSubscriptionFilterTagsRequest $req) 清空订阅者消息标签
 * @method Models\CreateQueueResponse CreateQueue(Models\CreateQueueRequest $req) 创建队列接口

 * @method Models\CreateSubscribeResponse CreateSubscribe(Models\CreateSubscribeRequest $req) 创建订阅接口
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 创建主题
 * @method Models\DeleteQueueResponse DeleteQueue(Models\DeleteQueueRequest $req) DeleteQueue
 * @method Models\DeleteSubscribeResponse DeleteSubscribe(Models\DeleteSubscribeRequest $req) 删除订阅
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除主题
 * @method Models\DescribeDeadLetterSourceQueuesResponse DescribeDeadLetterSourceQueues(Models\DescribeDeadLetterSourceQueuesRequest $req) 枚举死信队列源队列
 * @method Models\DescribeQueueDetailResponse DescribeQueueDetail(Models\DescribeQueueDetailRequest $req) 枚举队列
 * @method Models\DescribeSubscriptionDetailResponse DescribeSubscriptionDetail(Models\DescribeSubscriptionDetailRequest $req) 查询订阅详情
 * @method Models\DescribeTopicDetailResponse DescribeTopicDetail(Models\DescribeTopicDetailRequest $req) 查询主题详情 
 * @method Models\ModifyQueueAttributeResponse ModifyQueueAttribute(Models\ModifyQueueAttributeRequest $req) 修改队列属性
 * @method Models\ModifySubscriptionAttributeResponse ModifySubscriptionAttribute(Models\ModifySubscriptionAttributeRequest $req) 修改订阅属性
 * @method Models\ModifyTopicAttributeResponse ModifyTopicAttribute(Models\ModifyTopicAttributeRequest $req) 修改主题属性
 * @method Models\RewindQueueResponse RewindQueue(Models\RewindQueueRequest $req) 回溯队列
 * @method Models\UnbindDeadLetterResponse UnbindDeadLetter(Models\UnbindDeadLetterRequest $req) 解绑死信队列
 */

class CmqClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cmq.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cmq";

    /**
     * @var string
     */
    protected $version = "2019-03-04";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cmq")."\\"."V20190304\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
