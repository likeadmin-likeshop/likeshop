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
 * DescribeScalingPolicies请求参数结构体
 *
 * @method string getFleetId() 获取服务器舰队ID
 * @method void setFleetId(string $FleetId) 设置服务器舰队ID
 * @method string getStatusFilter() 获取状态过滤条件，取值：ACTIVE表示活跃
 * @method void setStatusFilter(string $StatusFilter) 设置状态过滤条件，取值：ACTIVE表示活跃
 * @method integer getOffset() 获取返回结果偏移，最小值0
 * @method void setOffset(integer $Offset) 设置返回结果偏移，最小值0
 * @method integer getLimit() 获取结果返回最大数量，最小值0，最大值100
 * @method void setLimit(integer $Limit) 设置结果返回最大数量，最小值0，最大值100
 */
class DescribeScalingPoliciesRequest extends AbstractModel
{
    /**
     * @var string 服务器舰队ID
     */
    public $FleetId;

    /**
     * @var string 状态过滤条件，取值：ACTIVE表示活跃
     */
    public $StatusFilter;

    /**
     * @var integer 返回结果偏移，最小值0
     */
    public $Offset;

    /**
     * @var integer 结果返回最大数量，最小值0，最大值100
     */
    public $Limit;

    /**
     * @param string $FleetId 服务器舰队ID
     * @param string $StatusFilter 状态过滤条件，取值：ACTIVE表示活跃
     * @param integer $Offset 返回结果偏移，最小值0
     * @param integer $Limit 结果返回最大数量，最小值0，最大值100
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("StatusFilter",$param) and $param["StatusFilter"] !== null) {
            $this->StatusFilter = $param["StatusFilter"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
