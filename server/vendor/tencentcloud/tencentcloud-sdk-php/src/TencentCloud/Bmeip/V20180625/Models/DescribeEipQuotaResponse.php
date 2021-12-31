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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEipQuota返回参数结构体
 *
 * @method integer getEipNumQuota() 获取能拥有的EIP个数的总配额，默认是100个
 * @method void setEipNumQuota(integer $EipNumQuota) 设置能拥有的EIP个数的总配额，默认是100个
 * @method integer getCurrentEipNum() 获取当前已使用的EIP个数，包括创建中、绑定中、已绑定、解绑中、未绑定几种状态的EIP个数总和
 * @method void setCurrentEipNum(integer $CurrentEipNum) 设置当前已使用的EIP个数，包括创建中、绑定中、已绑定、解绑中、未绑定几种状态的EIP个数总和
 * @method integer getDailyApplyCount() 获取当天申请EIP次数
 * @method void setDailyApplyCount(integer $DailyApplyCount) 设置当天申请EIP次数
 * @method integer getDailyApplyQuota() 获取每日申请EIP的次数限制
 * @method void setDailyApplyQuota(integer $DailyApplyQuota) 设置每日申请EIP的次数限制
 * @method integer getBatchApplyMax() 获取BatchApplyMax
 * @method void setBatchApplyMax(integer $BatchApplyMax) 设置BatchApplyMax
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEipQuotaResponse extends AbstractModel
{
    /**
     * @var integer 能拥有的EIP个数的总配额，默认是100个
     */
    public $EipNumQuota;

    /**
     * @var integer 当前已使用的EIP个数，包括创建中、绑定中、已绑定、解绑中、未绑定几种状态的EIP个数总和
     */
    public $CurrentEipNum;

    /**
     * @var integer 当天申请EIP次数
     */
    public $DailyApplyCount;

    /**
     * @var integer 每日申请EIP的次数限制
     */
    public $DailyApplyQuota;

    /**
     * @var integer BatchApplyMax
     */
    public $BatchApplyMax;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $EipNumQuota 能拥有的EIP个数的总配额，默认是100个
     * @param integer $CurrentEipNum 当前已使用的EIP个数，包括创建中、绑定中、已绑定、解绑中、未绑定几种状态的EIP个数总和
     * @param integer $DailyApplyCount 当天申请EIP次数
     * @param integer $DailyApplyQuota 每日申请EIP的次数限制
     * @param integer $BatchApplyMax BatchApplyMax
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
        if (array_key_exists("EipNumQuota",$param) and $param["EipNumQuota"] !== null) {
            $this->EipNumQuota = $param["EipNumQuota"];
        }

        if (array_key_exists("CurrentEipNum",$param) and $param["CurrentEipNum"] !== null) {
            $this->CurrentEipNum = $param["CurrentEipNum"];
        }

        if (array_key_exists("DailyApplyCount",$param) and $param["DailyApplyCount"] !== null) {
            $this->DailyApplyCount = $param["DailyApplyCount"];
        }

        if (array_key_exists("DailyApplyQuota",$param) and $param["DailyApplyQuota"] !== null) {
            $this->DailyApplyQuota = $param["DailyApplyQuota"];
        }

        if (array_key_exists("BatchApplyMax",$param) and $param["BatchApplyMax"] !== null) {
            $this->BatchApplyMax = $param["BatchApplyMax"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
