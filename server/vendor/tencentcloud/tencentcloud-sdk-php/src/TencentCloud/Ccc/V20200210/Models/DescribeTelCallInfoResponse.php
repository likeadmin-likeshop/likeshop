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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTelCallInfo返回参数结构体
 *
 * @method integer getTelCallOutCount() 获取电话呼出统计分钟数
 * @method void setTelCallOutCount(integer $TelCallOutCount) 设置电话呼出统计分钟数
 * @method integer getTelCallInCount() 获取电话呼入统计分钟数
 * @method void setTelCallInCount(integer $TelCallInCount) 设置电话呼入统计分钟数
 * @method integer getSeatUsedCount() 获取坐席使用统计个数
 * @method void setSeatUsedCount(integer $SeatUsedCount) 设置坐席使用统计个数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTelCallInfoResponse extends AbstractModel
{
    /**
     * @var integer 电话呼出统计分钟数
     */
    public $TelCallOutCount;

    /**
     * @var integer 电话呼入统计分钟数
     */
    public $TelCallInCount;

    /**
     * @var integer 坐席使用统计个数
     */
    public $SeatUsedCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TelCallOutCount 电话呼出统计分钟数
     * @param integer $TelCallInCount 电话呼入统计分钟数
     * @param integer $SeatUsedCount 坐席使用统计个数
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
        if (array_key_exists("TelCallOutCount",$param) and $param["TelCallOutCount"] !== null) {
            $this->TelCallOutCount = $param["TelCallOutCount"];
        }

        if (array_key_exists("TelCallInCount",$param) and $param["TelCallInCount"] !== null) {
            $this->TelCallInCount = $param["TelCallInCount"];
        }

        if (array_key_exists("SeatUsedCount",$param) and $param["SeatUsedCount"] !== null) {
            $this->SeatUsedCount = $param["SeatUsedCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
