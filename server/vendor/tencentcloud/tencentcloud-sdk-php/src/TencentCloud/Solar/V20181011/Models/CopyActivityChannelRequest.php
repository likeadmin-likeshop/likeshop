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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyActivityChannel请求参数结构体
 *
 * @method string getActivityId() 获取活动ID
 * @method void setActivityId(string $ActivityId) 设置活动ID
 * @method string getChannelFrom() 获取来源渠道ID
 * @method void setChannelFrom(string $ChannelFrom) 设置来源渠道ID
 * @method array getChannelTo() 获取目的渠道id
 * @method void setChannelTo(array $ChannelTo) 设置目的渠道id
 */
class CopyActivityChannelRequest extends AbstractModel
{
    /**
     * @var string 活动ID
     */
    public $ActivityId;

    /**
     * @var string 来源渠道ID
     */
    public $ChannelFrom;

    /**
     * @var array 目的渠道id
     */
    public $ChannelTo;

    /**
     * @param string $ActivityId 活动ID
     * @param string $ChannelFrom 来源渠道ID
     * @param array $ChannelTo 目的渠道id
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
        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ChannelFrom",$param) and $param["ChannelFrom"] !== null) {
            $this->ChannelFrom = $param["ChannelFrom"];
        }

        if (array_key_exists("ChannelTo",$param) and $param["ChannelTo"] !== null) {
            $this->ChannelTo = $param["ChannelTo"];
        }
    }
}
