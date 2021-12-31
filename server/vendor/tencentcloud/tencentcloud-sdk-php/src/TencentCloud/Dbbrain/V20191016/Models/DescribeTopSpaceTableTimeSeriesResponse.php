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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopSpaceTableTimeSeries返回参数结构体
 *
 * @method array getTopSpaceTableTimeSeries() 获取返回的Top表空间统计信息的时序数据列表。
 * @method void setTopSpaceTableTimeSeries(array $TopSpaceTableTimeSeries) 设置返回的Top表空间统计信息的时序数据列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTopSpaceTableTimeSeriesResponse extends AbstractModel
{
    /**
     * @var array 返回的Top表空间统计信息的时序数据列表。
     */
    public $TopSpaceTableTimeSeries;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TopSpaceTableTimeSeries 返回的Top表空间统计信息的时序数据列表。
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
        if (array_key_exists("TopSpaceTableTimeSeries",$param) and $param["TopSpaceTableTimeSeries"] !== null) {
            $this->TopSpaceTableTimeSeries = [];
            foreach ($param["TopSpaceTableTimeSeries"] as $key => $value){
                $obj = new TableSpaceTimeSeries();
                $obj->deserialize($value);
                array_push($this->TopSpaceTableTimeSeries, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
