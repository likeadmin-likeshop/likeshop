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
 * DescribeRollbackTimeValidity返回参数结构体
 *
 * @method integer getPoolId() 获取存储poolID
 * @method void setPoolId(integer $PoolId) 设置存储poolID
 * @method integer getQueryId() 获取回滚任务ID，后续按该时间点回滚时，需要传入
 * @method void setQueryId(integer $QueryId) 设置回滚任务ID，后续按该时间点回滚时，需要传入
 * @method string getStatus() 获取时间点是否有效：pass，检测通过；fail，检测失败
 * @method void setStatus(string $Status) 设置时间点是否有效：pass，检测通过；fail，检测失败
 * @method string getSuggestTime() 获取建议时间点，在Status为fail时，该值才有效
 * @method void setSuggestTime(string $SuggestTime) 设置建议时间点，在Status为fail时，该值才有效
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRollbackTimeValidityResponse extends AbstractModel
{
    /**
     * @var integer 存储poolID
     */
    public $PoolId;

    /**
     * @var integer 回滚任务ID，后续按该时间点回滚时，需要传入
     */
    public $QueryId;

    /**
     * @var string 时间点是否有效：pass，检测通过；fail，检测失败
     */
    public $Status;

    /**
     * @var string 建议时间点，在Status为fail时，该值才有效
     */
    public $SuggestTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PoolId 存储poolID
     * @param integer $QueryId 回滚任务ID，后续按该时间点回滚时，需要传入
     * @param string $Status 时间点是否有效：pass，检测通过；fail，检测失败
     * @param string $SuggestTime 建议时间点，在Status为fail时，该值才有效
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
        if (array_key_exists("PoolId",$param) and $param["PoolId"] !== null) {
            $this->PoolId = $param["PoolId"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuggestTime",$param) and $param["SuggestTime"] !== null) {
            $this->SuggestTime = $param["SuggestTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
