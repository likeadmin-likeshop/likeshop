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
 * 过滤订阅列表
 *
 * @method boolean getConsumerHasCount() 获取是否仅展示包含真实消费者的订阅。
 * @method void setConsumerHasCount(boolean $ConsumerHasCount) 设置是否仅展示包含真实消费者的订阅。
 * @method boolean getConsumerHasBacklog() 获取是否仅展示消息堆积的订阅。
 * @method void setConsumerHasBacklog(boolean $ConsumerHasBacklog) 设置是否仅展示消息堆积的订阅。
 * @method boolean getConsumerHasExpired() 获取是否仅展示存在消息超期丢弃的订阅。
 * @method void setConsumerHasExpired(boolean $ConsumerHasExpired) 设置是否仅展示存在消息超期丢弃的订阅。
 * @method array getSubscriptionNames() 获取按照订阅名过滤，精确查询。
 * @method void setSubscriptionNames(array $SubscriptionNames) 设置按照订阅名过滤，精确查询。
 */
class FilterSubscription extends AbstractModel
{
    /**
     * @var boolean 是否仅展示包含真实消费者的订阅。
     */
    public $ConsumerHasCount;

    /**
     * @var boolean 是否仅展示消息堆积的订阅。
     */
    public $ConsumerHasBacklog;

    /**
     * @var boolean 是否仅展示存在消息超期丢弃的订阅。
     */
    public $ConsumerHasExpired;

    /**
     * @var array 按照订阅名过滤，精确查询。
     */
    public $SubscriptionNames;

    /**
     * @param boolean $ConsumerHasCount 是否仅展示包含真实消费者的订阅。
     * @param boolean $ConsumerHasBacklog 是否仅展示消息堆积的订阅。
     * @param boolean $ConsumerHasExpired 是否仅展示存在消息超期丢弃的订阅。
     * @param array $SubscriptionNames 按照订阅名过滤，精确查询。
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
        if (array_key_exists("ConsumerHasCount",$param) and $param["ConsumerHasCount"] !== null) {
            $this->ConsumerHasCount = $param["ConsumerHasCount"];
        }

        if (array_key_exists("ConsumerHasBacklog",$param) and $param["ConsumerHasBacklog"] !== null) {
            $this->ConsumerHasBacklog = $param["ConsumerHasBacklog"];
        }

        if (array_key_exists("ConsumerHasExpired",$param) and $param["ConsumerHasExpired"] !== null) {
            $this->ConsumerHasExpired = $param["ConsumerHasExpired"];
        }

        if (array_key_exists("SubscriptionNames",$param) and $param["SubscriptionNames"] !== null) {
            $this->SubscriptionNames = $param["SubscriptionNames"];
        }
    }
}
