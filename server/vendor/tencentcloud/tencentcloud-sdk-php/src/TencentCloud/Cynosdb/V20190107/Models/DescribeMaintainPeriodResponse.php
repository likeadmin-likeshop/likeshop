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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMaintainPeriod返回参数结构体
 *
 * @method array getMaintainWeekDays() 获取维护week days
 * @method void setMaintainWeekDays(array $MaintainWeekDays) 设置维护week days
 * @method integer getMaintainStartTime() 获取维护开始时间，单位秒
 * @method void setMaintainStartTime(integer $MaintainStartTime) 设置维护开始时间，单位秒
 * @method integer getMaintainDuration() 获取维护时长，单位秒
 * @method void setMaintainDuration(integer $MaintainDuration) 设置维护时长，单位秒
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMaintainPeriodResponse extends AbstractModel
{
    /**
     * @var array 维护week days
     */
    public $MaintainWeekDays;

    /**
     * @var integer 维护开始时间，单位秒
     */
    public $MaintainStartTime;

    /**
     * @var integer 维护时长，单位秒
     */
    public $MaintainDuration;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MaintainWeekDays 维护week days
     * @param integer $MaintainStartTime 维护开始时间，单位秒
     * @param integer $MaintainDuration 维护时长，单位秒
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
        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
