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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSnapOverview返回参数结构体
 *
 * @method float getTotalSize() 获取用户快照总大小
 * @method void setTotalSize(float $TotalSize) 设置用户快照总大小
 * @method float getRealTradeSize() 获取用户快照总大小（用于计费）
 * @method void setRealTradeSize(float $RealTradeSize) 设置用户快照总大小（用于计费）
 * @method float getFreeQuota() 获取快照免费额度
 * @method void setFreeQuota(float $FreeQuota) 设置快照免费额度
 * @method integer getTotalNums() 获取快照总个数
 * @method void setTotalNums(integer $TotalNums) 设置快照总个数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetSnapOverviewResponse extends AbstractModel
{
    /**
     * @var float 用户快照总大小
     */
    public $TotalSize;

    /**
     * @var float 用户快照总大小（用于计费）
     */
    public $RealTradeSize;

    /**
     * @var float 快照免费额度
     */
    public $FreeQuota;

    /**
     * @var integer 快照总个数
     */
    public $TotalNums;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $TotalSize 用户快照总大小
     * @param float $RealTradeSize 用户快照总大小（用于计费）
     * @param float $FreeQuota 快照免费额度
     * @param integer $TotalNums 快照总个数
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
        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("RealTradeSize",$param) and $param["RealTradeSize"] !== null) {
            $this->RealTradeSize = $param["RealTradeSize"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("TotalNums",$param) and $param["TotalNums"] !== null) {
            $this->TotalNums = $param["TotalNums"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
