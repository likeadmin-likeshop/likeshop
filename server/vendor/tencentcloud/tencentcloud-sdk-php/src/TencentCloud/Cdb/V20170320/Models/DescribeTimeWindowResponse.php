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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimeWindow返回参数结构体
 *
 * @method array getMonday() 获取星期一的可维护时间列表。
 * @method void setMonday(array $Monday) 设置星期一的可维护时间列表。
 * @method array getTuesday() 获取星期二的可维护时间列表。
 * @method void setTuesday(array $Tuesday) 设置星期二的可维护时间列表。
 * @method array getWednesday() 获取星期三的可维护时间列表。
 * @method void setWednesday(array $Wednesday) 设置星期三的可维护时间列表。
 * @method array getThursday() 获取星期四的可维护时间列表。
 * @method void setThursday(array $Thursday) 设置星期四的可维护时间列表。
 * @method array getFriday() 获取星期五的可维护时间列表。
 * @method void setFriday(array $Friday) 设置星期五的可维护时间列表。
 * @method array getSaturday() 获取星期六的可维护时间列表。
 * @method void setSaturday(array $Saturday) 设置星期六的可维护时间列表。
 * @method array getSunday() 获取星期日的可维护时间列表。
 * @method void setSunday(array $Sunday) 设置星期日的可维护时间列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTimeWindowResponse extends AbstractModel
{
    /**
     * @var array 星期一的可维护时间列表。
     */
    public $Monday;

    /**
     * @var array 星期二的可维护时间列表。
     */
    public $Tuesday;

    /**
     * @var array 星期三的可维护时间列表。
     */
    public $Wednesday;

    /**
     * @var array 星期四的可维护时间列表。
     */
    public $Thursday;

    /**
     * @var array 星期五的可维护时间列表。
     */
    public $Friday;

    /**
     * @var array 星期六的可维护时间列表。
     */
    public $Saturday;

    /**
     * @var array 星期日的可维护时间列表。
     */
    public $Sunday;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Monday 星期一的可维护时间列表。
     * @param array $Tuesday 星期二的可维护时间列表。
     * @param array $Wednesday 星期三的可维护时间列表。
     * @param array $Thursday 星期四的可维护时间列表。
     * @param array $Friday 星期五的可维护时间列表。
     * @param array $Saturday 星期六的可维护时间列表。
     * @param array $Sunday 星期日的可维护时间列表。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Monday",$param) and $param["Monday"] !== null) {
            $this->Monday = $param["Monday"];
        }

        if (array_key_exists("Tuesday",$param) and $param["Tuesday"] !== null) {
            $this->Tuesday = $param["Tuesday"];
        }

        if (array_key_exists("Wednesday",$param) and $param["Wednesday"] !== null) {
            $this->Wednesday = $param["Wednesday"];
        }

        if (array_key_exists("Thursday",$param) and $param["Thursday"] !== null) {
            $this->Thursday = $param["Thursday"];
        }

        if (array_key_exists("Friday",$param) and $param["Friday"] !== null) {
            $this->Friday = $param["Friday"];
        }

        if (array_key_exists("Saturday",$param) and $param["Saturday"] !== null) {
            $this->Saturday = $param["Saturday"];
        }

        if (array_key_exists("Sunday",$param) and $param["Sunday"] !== null) {
            $this->Sunday = $param["Sunday"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
