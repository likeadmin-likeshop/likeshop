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
 * DescribeTimerScalingPolicies请求参数结构体
 *
 * @method string getFleetId() 获取扩缩容配置服务器舰队ID
 * @method void setFleetId(string $FleetId) 设置扩缩容配置服务器舰队ID
 * @method string getTimerName() 获取定时器名称
 * @method void setTimerName(string $TimerName) 设置定时器名称
 * @method string getBeginTime() 获取定时器开始时间
 * @method void setBeginTime(string $BeginTime) 设置定时器开始时间
 * @method string getEndTime() 获取定时器结束时间
 * @method void setEndTime(string $EndTime) 设置定时器结束时间
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method integer getLimit() 获取页大小
 * @method void setLimit(integer $Limit) 设置页大小
 */
class DescribeTimerScalingPoliciesRequest extends AbstractModel
{
    /**
     * @var string 扩缩容配置服务器舰队ID
     */
    public $FleetId;

    /**
     * @var string 定时器名称
     */
    public $TimerName;

    /**
     * @var string 定时器开始时间
     */
    public $BeginTime;

    /**
     * @var string 定时器结束时间
     */
    public $EndTime;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var integer 页大小
     */
    public $Limit;

    /**
     * @param string $FleetId 扩缩容配置服务器舰队ID
     * @param string $TimerName 定时器名称
     * @param string $BeginTime 定时器开始时间
     * @param string $EndTime 定时器结束时间
     * @param integer $Offset 分页偏移量
     * @param integer $Limit 页大小
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("TimerName",$param) and $param["TimerName"] !== null) {
            $this->TimerName = $param["TimerName"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
