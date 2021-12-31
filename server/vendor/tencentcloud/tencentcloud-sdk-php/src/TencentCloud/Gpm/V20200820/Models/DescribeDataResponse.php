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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeData返回参数结构体
 *
 * @method ReportOverviewData getOverviewData() 获取匹配概况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverviewData(ReportOverviewData $OverviewData) 设置匹配概况
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReportTrendData getTrendData() 获取匹配请求次数趋势数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrendData(ReportTrendData $TrendData) 设置匹配请求次数趋势数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDataResponse extends AbstractModel
{
    /**
     * @var ReportOverviewData 匹配概况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OverviewData;

    /**
     * @var ReportTrendData 匹配请求次数趋势数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrendData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ReportOverviewData $OverviewData 匹配概况
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReportTrendData $TrendData 匹配请求次数趋势数据
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
        if (array_key_exists("OverviewData",$param) and $param["OverviewData"] !== null) {
            $this->OverviewData = new ReportOverviewData();
            $this->OverviewData->deserialize($param["OverviewData"]);
        }

        if (array_key_exists("TrendData",$param) and $param["TrendData"] !== null) {
            $this->TrendData = new ReportTrendData();
            $this->TrendData->deserialize($param["TrendData"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
