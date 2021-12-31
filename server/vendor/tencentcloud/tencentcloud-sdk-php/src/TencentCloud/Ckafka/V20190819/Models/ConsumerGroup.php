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
 * 用户组实体
 *
 * @method string getConsumerGroupName() 获取用户组名称
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置用户组名称
 * @method array getSubscribedInfo() 获取订阅信息实体
 * @method void setSubscribedInfo(array $SubscribedInfo) 设置订阅信息实体
 */
class ConsumerGroup extends AbstractModel
{
    /**
     * @var string 用户组名称
     */
    public $ConsumerGroupName;

    /**
     * @var array 订阅信息实体
     */
    public $SubscribedInfo;

    /**
     * @param string $ConsumerGroupName 用户组名称
     * @param array $SubscribedInfo 订阅信息实体
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
        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("SubscribedInfo",$param) and $param["SubscribedInfo"] !== null) {
            $this->SubscribedInfo = [];
            foreach ($param["SubscribedInfo"] as $key => $value){
                $obj = new SubscribedInfo();
                $obj->deserialize($value);
                array_push($this->SubscribedInfo, $obj);
            }
        }
    }
}
