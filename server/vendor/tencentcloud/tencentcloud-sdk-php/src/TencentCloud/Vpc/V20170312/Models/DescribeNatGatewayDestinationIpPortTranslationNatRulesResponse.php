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
 * DescribeNatGatewayDestinationIpPortTranslationNatRules返回参数结构体
 *
 * @method array getNatGatewayDestinationIpPortTranslationNatRuleSet() 获取NAT网关端口转发规则对象数组。
 * @method void setNatGatewayDestinationIpPortTranslationNatRuleSet(array $NatGatewayDestinationIpPortTranslationNatRuleSet) 设置NAT网关端口转发规则对象数组。
 * @method integer getTotalCount() 获取符合条件的NAT网关端口转发规则对象数目。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的NAT网关端口转发规则对象数目。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNatGatewayDestinationIpPortTranslationNatRulesResponse extends AbstractModel
{
    /**
     * @var array NAT网关端口转发规则对象数组。
     */
    public $NatGatewayDestinationIpPortTranslationNatRuleSet;

    /**
     * @var integer 符合条件的NAT网关端口转发规则对象数目。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $NatGatewayDestinationIpPortTranslationNatRuleSet NAT网关端口转发规则对象数组。
     * @param integer $TotalCount 符合条件的NAT网关端口转发规则对象数目。
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
        if (array_key_exists("NatGatewayDestinationIpPortTranslationNatRuleSet",$param) and $param["NatGatewayDestinationIpPortTranslationNatRuleSet"] !== null) {
            $this->NatGatewayDestinationIpPortTranslationNatRuleSet = [];
            foreach ($param["NatGatewayDestinationIpPortTranslationNatRuleSet"] as $key => $value){
                $obj = new NatGatewayDestinationIpPortTranslationNatRule();
                $obj->deserialize($value);
                array_push($this->NatGatewayDestinationIpPortTranslationNatRuleSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
