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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDashboard返回参数结构体
 *
 * @method integer getZoneTotal() 获取私有域解析总数
 * @method void setZoneTotal(integer $ZoneTotal) 设置私有域解析总数
 * @method integer getZoneVpcCount() 获取私有域关联VPC数量
 * @method void setZoneVpcCount(integer $ZoneVpcCount) 设置私有域关联VPC数量
 * @method integer getRequestTotalCount() 获取历史请求量总数
 * @method void setRequestTotalCount(integer $RequestTotalCount) 设置历史请求量总数
 * @method array getFlowUsage() 获取流量包用量
 * @method void setFlowUsage(array $FlowUsage) 设置流量包用量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDashboardResponse extends AbstractModel
{
    /**
     * @var integer 私有域解析总数
     */
    public $ZoneTotal;

    /**
     * @var integer 私有域关联VPC数量
     */
    public $ZoneVpcCount;

    /**
     * @var integer 历史请求量总数
     */
    public $RequestTotalCount;

    /**
     * @var array 流量包用量
     */
    public $FlowUsage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ZoneTotal 私有域解析总数
     * @param integer $ZoneVpcCount 私有域关联VPC数量
     * @param integer $RequestTotalCount 历史请求量总数
     * @param array $FlowUsage 流量包用量
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
        if (array_key_exists("ZoneTotal",$param) and $param["ZoneTotal"] !== null) {
            $this->ZoneTotal = $param["ZoneTotal"];
        }

        if (array_key_exists("ZoneVpcCount",$param) and $param["ZoneVpcCount"] !== null) {
            $this->ZoneVpcCount = $param["ZoneVpcCount"];
        }

        if (array_key_exists("RequestTotalCount",$param) and $param["RequestTotalCount"] !== null) {
            $this->RequestTotalCount = $param["RequestTotalCount"];
        }

        if (array_key_exists("FlowUsage",$param) and $param["FlowUsage"] !== null) {
            $this->FlowUsage = [];
            foreach ($param["FlowUsage"] as $key => $value){
                $obj = new FlowUsage();
                $obj->deserialize($value);
                array_push($this->FlowUsage, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
