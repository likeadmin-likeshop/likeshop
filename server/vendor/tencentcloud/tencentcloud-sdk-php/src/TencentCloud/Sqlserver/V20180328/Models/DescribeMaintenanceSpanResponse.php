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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMaintenanceSpan返回参数结构体
 *
 * @method array getWeekly() 获取以周为单位，表示周几允许维护，例如：[1,2,3,4,5,6,7]表示周一到周日均为可维护日。
 * @method void setWeekly(array $Weekly) 设置以周为单位，表示周几允许维护，例如：[1,2,3,4,5,6,7]表示周一到周日均为可维护日。
 * @method string getStartTime() 获取每天可维护的开始时间，例如：10:24标识可维护时间窗10点24分开始。
 * @method void setStartTime(string $StartTime) 设置每天可维护的开始时间，例如：10:24标识可维护时间窗10点24分开始。
 * @method integer getSpan() 获取每天可维护的持续时间，单位是h，例如：1 表示从可维护的开始时间起持续1小时。
 * @method void setSpan(integer $Span) 设置每天可维护的持续时间，单位是h，例如：1 表示从可维护的开始时间起持续1小时。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMaintenanceSpanResponse extends AbstractModel
{
    /**
     * @var array 以周为单位，表示周几允许维护，例如：[1,2,3,4,5,6,7]表示周一到周日均为可维护日。
     */
    public $Weekly;

    /**
     * @var string 每天可维护的开始时间，例如：10:24标识可维护时间窗10点24分开始。
     */
    public $StartTime;

    /**
     * @var integer 每天可维护的持续时间，单位是h，例如：1 表示从可维护的开始时间起持续1小时。
     */
    public $Span;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Weekly 以周为单位，表示周几允许维护，例如：[1,2,3,4,5,6,7]表示周一到周日均为可维护日。
     * @param string $StartTime 每天可维护的开始时间，例如：10:24标识可维护时间窗10点24分开始。
     * @param integer $Span 每天可维护的持续时间，单位是h，例如：1 表示从可维护的开始时间起持续1小时。
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
        if (array_key_exists("Weekly",$param) and $param["Weekly"] !== null) {
            $this->Weekly = $param["Weekly"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Span",$param) and $param["Span"] !== null) {
            $this->Span = $param["Span"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
