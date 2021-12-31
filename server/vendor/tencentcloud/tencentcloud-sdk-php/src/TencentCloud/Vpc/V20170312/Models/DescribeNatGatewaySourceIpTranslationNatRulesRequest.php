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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatGatewaySourceIpTranslationNatRules请求参数结构体
 *
 * @method string getNatGatewayId() 获取NAT网关统一 ID，形如：`nat-123xx454`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关统一 ID，形如：`nat-123xx454`。
 * @method array getFilters() 获取过滤条件:
<li> resource-id，Subnet的ID或者Cvm ID，如`subnet-0yi4hekt`</li>
<li> public-ip-address，弹性IP，如`139.199.232.238`</li>
<li>description，规则描述。</li>
 * @method void setFilters(array $Filters) 设置过滤条件:
<li> resource-id，Subnet的ID或者Cvm ID，如`subnet-0yi4hekt`</li>
<li> public-ip-address，弹性IP，如`139.199.232.238`</li>
<li>description，规则描述。</li>
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 */
class DescribeNatGatewaySourceIpTranslationNatRulesRequest extends AbstractModel
{
    /**
     * @var string NAT网关统一 ID，形如：`nat-123xx454`。
     */
    public $NatGatewayId;

    /**
     * @var array 过滤条件:
<li> resource-id，Subnet的ID或者Cvm ID，如`subnet-0yi4hekt`</li>
<li> public-ip-address，弹性IP，如`139.199.232.238`</li>
<li>description，规则描述。</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @param string $NatGatewayId NAT网关统一 ID，形如：`nat-123xx454`。
     * @param array $Filters 过滤条件:
<li> resource-id，Subnet的ID或者Cvm ID，如`subnet-0yi4hekt`</li>
<li> public-ip-address，弹性IP，如`139.199.232.238`</li>
<li>description，规则描述。</li>
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
