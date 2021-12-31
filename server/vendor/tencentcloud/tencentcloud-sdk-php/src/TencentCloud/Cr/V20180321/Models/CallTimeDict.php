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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品拨打时间集合
 *
 * @method CallTimeInfo getMonday() 获取周一
 * @method void setMonday(CallTimeInfo $Monday) 设置周一
 * @method CallTimeInfo getTuesday() 获取周二
 * @method void setTuesday(CallTimeInfo $Tuesday) 设置周二
 * @method CallTimeInfo getWednesday() 获取周三
 * @method void setWednesday(CallTimeInfo $Wednesday) 设置周三
 * @method CallTimeInfo getThursday() 获取周四
 * @method void setThursday(CallTimeInfo $Thursday) 设置周四
 * @method CallTimeInfo getFriday() 获取周五
 * @method void setFriday(CallTimeInfo $Friday) 设置周五
 * @method CallTimeInfo getSaturday() 获取周六
 * @method void setSaturday(CallTimeInfo $Saturday) 设置周六
 * @method CallTimeInfo getSunday() 获取周日
 * @method void setSunday(CallTimeInfo $Sunday) 设置周日
 */
class CallTimeDict extends AbstractModel
{
    /**
     * @var CallTimeInfo 周一
     */
    public $Monday;

    /**
     * @var CallTimeInfo 周二
     */
    public $Tuesday;

    /**
     * @var CallTimeInfo 周三
     */
    public $Wednesday;

    /**
     * @var CallTimeInfo 周四
     */
    public $Thursday;

    /**
     * @var CallTimeInfo 周五
     */
    public $Friday;

    /**
     * @var CallTimeInfo 周六
     */
    public $Saturday;

    /**
     * @var CallTimeInfo 周日
     */
    public $Sunday;

    /**
     * @param CallTimeInfo $Monday 周一
     * @param CallTimeInfo $Tuesday 周二
     * @param CallTimeInfo $Wednesday 周三
     * @param CallTimeInfo $Thursday 周四
     * @param CallTimeInfo $Friday 周五
     * @param CallTimeInfo $Saturday 周六
     * @param CallTimeInfo $Sunday 周日
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
            $this->Monday = new CallTimeInfo();
            $this->Monday->deserialize($param["Monday"]);
        }

        if (array_key_exists("Tuesday",$param) and $param["Tuesday"] !== null) {
            $this->Tuesday = new CallTimeInfo();
            $this->Tuesday->deserialize($param["Tuesday"]);
        }

        if (array_key_exists("Wednesday",$param) and $param["Wednesday"] !== null) {
            $this->Wednesday = new CallTimeInfo();
            $this->Wednesday->deserialize($param["Wednesday"]);
        }

        if (array_key_exists("Thursday",$param) and $param["Thursday"] !== null) {
            $this->Thursday = new CallTimeInfo();
            $this->Thursday->deserialize($param["Thursday"]);
        }

        if (array_key_exists("Friday",$param) and $param["Friday"] !== null) {
            $this->Friday = new CallTimeInfo();
            $this->Friday->deserialize($param["Friday"]);
        }

        if (array_key_exists("Saturday",$param) and $param["Saturday"] !== null) {
            $this->Saturday = new CallTimeInfo();
            $this->Saturday->deserialize($param["Saturday"]);
        }

        if (array_key_exists("Sunday",$param) and $param["Sunday"] !== null) {
            $this->Sunday = new CallTimeInfo();
            $this->Sunday->deserialize($param["Sunday"]);
        }
    }
}
