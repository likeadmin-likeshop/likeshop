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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTimerScalingPolicy请求参数结构体
 *
 * @method string getTimerId() 获取定时器ID, 进行encode
 * @method void setTimerId(string $TimerId) 设置定时器ID, 进行encode
 * @method string getFleetId() 获取扩缩容配置服务器舰队ID
 * @method void setFleetId(string $FleetId) 设置扩缩容配置服务器舰队ID
 * @method string getTimerName() 获取定时器名称
 * @method void setTimerName(string $TimerName) 设置定时器名称
 */
class DeleteTimerScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string 定时器ID, 进行encode
     */
    public $TimerId;

    /**
     * @var string 扩缩容配置服务器舰队ID
     */
    public $FleetId;

    /**
     * @var string 定时器名称
     */
    public $TimerName;

    /**
     * @param string $TimerId 定时器ID, 进行encode
     * @param string $FleetId 扩缩容配置服务器舰队ID
     * @param string $TimerName 定时器名称
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
        if (array_key_exists("TimerId",$param) and $param["TimerId"] !== null) {
            $this->TimerId = $param["TimerId"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("TimerName",$param) and $param["TimerName"] !== null) {
            $this->TimerName = $param["TimerName"];
        }
    }
}
