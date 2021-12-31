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
namespace TencentCloud\Market\V20191010\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetUsagePlanUsageAmount返回参数结构体
 *
 * @method integer getMaxRequestNum() 获取最大调用量
 * @method void setMaxRequestNum(integer $MaxRequestNum) 设置最大调用量
 * @method integer getInUseRequestNum() 获取已经调用量
 * @method void setInUseRequestNum(integer $InUseRequestNum) 设置已经调用量
 * @method integer getRemainingRequestNum() 获取剩余调用量
 * @method void setRemainingRequestNum(integer $RemainingRequestNum) 设置剩余调用量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetUsagePlanUsageAmountResponse extends AbstractModel
{
    /**
     * @var integer 最大调用量
     */
    public $MaxRequestNum;

    /**
     * @var integer 已经调用量
     */
    public $InUseRequestNum;

    /**
     * @var integer 剩余调用量
     */
    public $RemainingRequestNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MaxRequestNum 最大调用量
     * @param integer $InUseRequestNum 已经调用量
     * @param integer $RemainingRequestNum 剩余调用量
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
        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
        }

        if (array_key_exists("InUseRequestNum",$param) and $param["InUseRequestNum"] !== null) {
            $this->InUseRequestNum = $param["InUseRequestNum"];
        }

        if (array_key_exists("RemainingRequestNum",$param) and $param["RemainingRequestNum"] !== null) {
            $this->RemainingRequestNum = $param["RemainingRequestNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
