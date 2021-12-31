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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAccount返回参数结构体
 *
 * @method UsageInfo getAccountUsage() 获取命名空间已使用的信息
 * @method void setAccountUsage(UsageInfo $AccountUsage) 设置命名空间已使用的信息
 * @method LimitsInfo getAccountLimit() 获取命名空间限制的信息
 * @method void setAccountLimit(LimitsInfo $AccountLimit) 设置命名空间限制的信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetAccountResponse extends AbstractModel
{
    /**
     * @var UsageInfo 命名空间已使用的信息
     */
    public $AccountUsage;

    /**
     * @var LimitsInfo 命名空间限制的信息
     */
    public $AccountLimit;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param UsageInfo $AccountUsage 命名空间已使用的信息
     * @param LimitsInfo $AccountLimit 命名空间限制的信息
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
        if (array_key_exists("AccountUsage",$param) and $param["AccountUsage"] !== null) {
            $this->AccountUsage = new UsageInfo();
            $this->AccountUsage->deserialize($param["AccountUsage"]);
        }

        if (array_key_exists("AccountLimit",$param) and $param["AccountLimit"] !== null) {
            $this->AccountLimit = new LimitsInfo();
            $this->AccountLimit->deserialize($param["AccountLimit"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
