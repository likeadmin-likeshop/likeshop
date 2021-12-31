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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityRules请求参数结构体
 *
 * @method string getPolicyId() 获取安全策略ID
 * @method void setPolicyId(string $PolicyId) 设置安全策略ID
 * @method array getRuleList() 获取访问规则列表
 * @method void setRuleList(array $RuleList) 设置访问规则列表
 */
class CreateSecurityRulesRequest extends AbstractModel
{
    /**
     * @var string 安全策略ID
     */
    public $PolicyId;

    /**
     * @var array 访问规则列表
     */
    public $RuleList;

    /**
     * @param string $PolicyId 安全策略ID
     * @param array $RuleList 访问规则列表
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new SecurityPolicyRuleIn();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }
    }
}
