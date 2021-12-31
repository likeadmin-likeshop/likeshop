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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAgentTaxPaymentInfo返回参数结构体
 *
 * @method AgentTaxPaymentBatch getAgentTaxPaymentBatch() 获取代理商完税证明批次信息
 * @method void setAgentTaxPaymentBatch(AgentTaxPaymentBatch $AgentTaxPaymentBatch) 设置代理商完税证明批次信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyAgentTaxPaymentInfoResponse extends AbstractModel
{
    /**
     * @var AgentTaxPaymentBatch 代理商完税证明批次信息
     */
    public $AgentTaxPaymentBatch;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AgentTaxPaymentBatch $AgentTaxPaymentBatch 代理商完税证明批次信息
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
        if (array_key_exists("AgentTaxPaymentBatch",$param) and $param["AgentTaxPaymentBatch"] !== null) {
            $this->AgentTaxPaymentBatch = new AgentTaxPaymentBatch();
            $this->AgentTaxPaymentBatch->deserialize($param["AgentTaxPaymentBatch"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
