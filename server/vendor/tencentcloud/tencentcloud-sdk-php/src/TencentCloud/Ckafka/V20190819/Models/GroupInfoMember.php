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
 * consumer信息
 *
 * @method string getMemberId() 获取coordinator 为消费分组中的消费者生成的唯一 ID
 * @method void setMemberId(string $MemberId) 设置coordinator 为消费分组中的消费者生成的唯一 ID
 * @method string getClientId() 获取客户消费者 SDK 自己设置的 client.id 信息
 * @method void setClientId(string $ClientId) 设置客户消费者 SDK 自己设置的 client.id 信息
 * @method string getClientHost() 获取一般存储客户的 IP 地址
 * @method void setClientHost(string $ClientHost) 设置一般存储客户的 IP 地址
 * @method Assignment getAssignment() 获取存储着分配给该消费者的 partition 信息
 * @method void setAssignment(Assignment $Assignment) 设置存储着分配给该消费者的 partition 信息
 */
class GroupInfoMember extends AbstractModel
{
    /**
     * @var string coordinator 为消费分组中的消费者生成的唯一 ID
     */
    public $MemberId;

    /**
     * @var string 客户消费者 SDK 自己设置的 client.id 信息
     */
    public $ClientId;

    /**
     * @var string 一般存储客户的 IP 地址
     */
    public $ClientHost;

    /**
     * @var Assignment 存储着分配给该消费者的 partition 信息
     */
    public $Assignment;

    /**
     * @param string $MemberId coordinator 为消费分组中的消费者生成的唯一 ID
     * @param string $ClientId 客户消费者 SDK 自己设置的 client.id 信息
     * @param string $ClientHost 一般存储客户的 IP 地址
     * @param Assignment $Assignment 存储着分配给该消费者的 partition 信息
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientHost",$param) and $param["ClientHost"] !== null) {
            $this->ClientHost = $param["ClientHost"];
        }

        if (array_key_exists("Assignment",$param) and $param["Assignment"] !== null) {
            $this->Assignment = new Assignment();
            $this->Assignment->deserialize($param["Assignment"]);
        }
    }
}
