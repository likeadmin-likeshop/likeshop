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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHistoryService返回参数结构体
 *
 * @method integer getBuyStatus() 获取1 可购买 2 只能升降配 3 只能跳到续费管理页
 * @method void setBuyStatus(integer $BuyStatus) 设置1 可购买 2 只能升降配 3 只能跳到续费管理页
 * @method integer getInquireNum() 获取用户已购容量 单位 G
 * @method void setInquireNum(integer $InquireNum) 设置用户已购容量 单位 G
 * @method string getEndTime() 获取到期时间
 * @method void setEndTime(string $EndTime) 设置到期时间
 * @method integer getIsAutoOpenRenew() 获取是否自动续费,0 初始值, 1 开通 2 没开通
 * @method void setIsAutoOpenRenew(integer $IsAutoOpenRenew) 设置是否自动续费,0 初始值, 1 开通 2 没开通
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method integer getStatus() 获取0 没开通 1 正常 2隔离 3销毁
 * @method void setStatus(integer $Status) 设置0 没开通 1 正常 2隔离 3销毁
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHistoryServiceResponse extends AbstractModel
{
    /**
     * @var integer 1 可购买 2 只能升降配 3 只能跳到续费管理页
     */
    public $BuyStatus;

    /**
     * @var integer 用户已购容量 单位 G
     */
    public $InquireNum;

    /**
     * @var string 到期时间
     */
    public $EndTime;

    /**
     * @var integer 是否自动续费,0 初始值, 1 开通 2 没开通
     */
    public $IsAutoOpenRenew;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var integer 0 没开通 1 正常 2隔离 3销毁
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BuyStatus 1 可购买 2 只能升降配 3 只能跳到续费管理页
     * @param integer $InquireNum 用户已购容量 单位 G
     * @param string $EndTime 到期时间
     * @param integer $IsAutoOpenRenew 是否自动续费,0 初始值, 1 开通 2 没开通
     * @param string $ResourceId 资源ID
     * @param integer $Status 0 没开通 1 正常 2隔离 3销毁
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
        if (array_key_exists("BuyStatus",$param) and $param["BuyStatus"] !== null) {
            $this->BuyStatus = $param["BuyStatus"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsAutoOpenRenew",$param) and $param["IsAutoOpenRenew"] !== null) {
            $this->IsAutoOpenRenew = $param["IsAutoOpenRenew"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
