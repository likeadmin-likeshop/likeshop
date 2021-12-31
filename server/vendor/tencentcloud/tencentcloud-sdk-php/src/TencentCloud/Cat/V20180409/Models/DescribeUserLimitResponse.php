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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserLimit返回参数结构体
 *
 * @method integer getMaxTaskNum() 获取用户可建立的最大任务数
 * @method void setMaxTaskNum(integer $MaxTaskNum) 设置用户可建立的最大任务数
 * @method integer getMaxAgentNum() 获取用户可用的最大拨测结点数
 * @method void setMaxAgentNum(integer $MaxAgentNum) 设置用户可用的最大拨测结点数
 * @method integer getMaxGroupNum() 获取用户可建立的最大拨测分组数
 * @method void setMaxGroupNum(integer $MaxGroupNum) 设置用户可建立的最大拨测分组数
 * @method integer getMinPeriod() 获取用户可用的最小拨测间隔
 * @method void setMinPeriod(integer $MinPeriod) 设置用户可用的最小拨测间隔
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserLimitResponse extends AbstractModel
{
    /**
     * @var integer 用户可建立的最大任务数
     */
    public $MaxTaskNum;

    /**
     * @var integer 用户可用的最大拨测结点数
     */
    public $MaxAgentNum;

    /**
     * @var integer 用户可建立的最大拨测分组数
     */
    public $MaxGroupNum;

    /**
     * @var integer 用户可用的最小拨测间隔
     */
    public $MinPeriod;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MaxTaskNum 用户可建立的最大任务数
     * @param integer $MaxAgentNum 用户可用的最大拨测结点数
     * @param integer $MaxGroupNum 用户可建立的最大拨测分组数
     * @param integer $MinPeriod 用户可用的最小拨测间隔
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
        if (array_key_exists("MaxTaskNum",$param) and $param["MaxTaskNum"] !== null) {
            $this->MaxTaskNum = $param["MaxTaskNum"];
        }

        if (array_key_exists("MaxAgentNum",$param) and $param["MaxAgentNum"] !== null) {
            $this->MaxAgentNum = $param["MaxAgentNum"];
        }

        if (array_key_exists("MaxGroupNum",$param) and $param["MaxGroupNum"] !== null) {
            $this->MaxGroupNum = $param["MaxGroupNum"];
        }

        if (array_key_exists("MinPeriod",$param) and $param["MinPeriod"] !== null) {
            $this->MinPeriod = $param["MinPeriod"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
