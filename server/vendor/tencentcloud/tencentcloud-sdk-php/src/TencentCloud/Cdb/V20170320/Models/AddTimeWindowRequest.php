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
 * AddTimeWindow请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method array getMonday() 获取星期一的可维护时间段，其中每一个时间段的格式形如：10:00-12:00；起始时间按半个小时对齐；最短半个小时，最长三个小时；可设置多个时间段。 一周中应至少设置一天的时间窗。下同。
 * @method void setMonday(array $Monday) 设置星期一的可维护时间段，其中每一个时间段的格式形如：10:00-12:00；起始时间按半个小时对齐；最短半个小时，最长三个小时；可设置多个时间段。 一周中应至少设置一天的时间窗。下同。
 * @method array getTuesday() 获取星期二的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method void setTuesday(array $Tuesday) 设置星期二的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method array getWednesday() 获取星期三的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method void setWednesday(array $Wednesday) 设置星期三的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method array getThursday() 获取星期四的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method void setThursday(array $Thursday) 设置星期四的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method array getFriday() 获取星期五的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method void setFriday(array $Friday) 设置星期五的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method array getSaturday() 获取星期六的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method void setSaturday(array $Saturday) 设置星期六的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method array getSunday() 获取星期日的可维护时间窗口。 一周中应至少设置一天的时间窗。
 * @method void setSunday(array $Sunday) 设置星期日的可维护时间窗口。 一周中应至少设置一天的时间窗。
 */
class AddTimeWindowRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var array 星期一的可维护时间段，其中每一个时间段的格式形如：10:00-12:00；起始时间按半个小时对齐；最短半个小时，最长三个小时；可设置多个时间段。 一周中应至少设置一天的时间窗。下同。
     */
    public $Monday;

    /**
     * @var array 星期二的可维护时间窗口。 一周中应至少设置一天的时间窗。
     */
    public $Tuesday;

    /**
     * @var array 星期三的可维护时间窗口。 一周中应至少设置一天的时间窗。
     */
    public $Wednesday;

    /**
     * @var array 星期四的可维护时间窗口。 一周中应至少设置一天的时间窗。
     */
    public $Thursday;

    /**
     * @var array 星期五的可维护时间窗口。 一周中应至少设置一天的时间窗。
     */
    public $Friday;

    /**
     * @var array 星期六的可维护时间窗口。 一周中应至少设置一天的时间窗。
     */
    public $Saturday;

    /**
     * @var array 星期日的可维护时间窗口。 一周中应至少设置一天的时间窗。
     */
    public $Sunday;

    /**
     * @param string $InstanceId 实例ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     * @param array $Monday 星期一的可维护时间段，其中每一个时间段的格式形如：10:00-12:00；起始时间按半个小时对齐；最短半个小时，最长三个小时；可设置多个时间段。 一周中应至少设置一天的时间窗。下同。
     * @param array $Tuesday 星期二的可维护时间窗口。 一周中应至少设置一天的时间窗。
     * @param array $Wednesday 星期三的可维护时间窗口。 一周中应至少设置一天的时间窗。
     * @param array $Thursday 星期四的可维护时间窗口。 一周中应至少设置一天的时间窗。
     * @param array $Friday 星期五的可维护时间窗口。 一周中应至少设置一天的时间窗。
     * @param array $Saturday 星期六的可维护时间窗口。 一周中应至少设置一天的时间窗。
     * @param array $Sunday 星期日的可维护时间窗口。 一周中应至少设置一天的时间窗。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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
    }
}
