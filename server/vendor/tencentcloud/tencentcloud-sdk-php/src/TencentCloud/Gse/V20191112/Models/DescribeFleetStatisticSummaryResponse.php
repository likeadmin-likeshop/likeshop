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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFleetStatisticSummary返回参数结构体
 *
 * @method string getTotalUsedTimeSeconds() 获取总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalUsedTimeSeconds(string $TotalUsedTimeSeconds) 设置总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalUsedFlowMegaBytes() 获取总流量，单位MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalUsedFlowMegaBytes(float $TotalUsedFlowMegaBytes) 设置总流量，单位MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFleetStatisticSummaryResponse extends AbstractModel
{
    /**
     * @var string 总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalUsedTimeSeconds;

    /**
     * @var float 总流量，单位MB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalUsedFlowMegaBytes;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TotalUsedTimeSeconds 总时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalUsedFlowMegaBytes 总流量，单位MB
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalUsedTimeSeconds",$param) and $param["TotalUsedTimeSeconds"] !== null) {
            $this->TotalUsedTimeSeconds = $param["TotalUsedTimeSeconds"];
        }

        if (array_key_exists("TotalUsedFlowMegaBytes",$param) and $param["TotalUsedFlowMegaBytes"] !== null) {
            $this->TotalUsedFlowMegaBytes = $param["TotalUsedFlowMegaBytes"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
