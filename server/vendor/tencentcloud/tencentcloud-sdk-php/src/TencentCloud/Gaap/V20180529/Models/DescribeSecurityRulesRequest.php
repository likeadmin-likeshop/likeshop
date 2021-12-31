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
 * DescribeSecurityRules请求参数结构体
 *
 * @method array getSecurityRuleIds() 获取安全规则ID列表。总数不能超过20个。
 * @method void setSecurityRuleIds(array $SecurityRuleIds) 设置安全规则ID列表。总数不能超过20个。
 */
class DescribeSecurityRulesRequest extends AbstractModel
{
    /**
     * @var array 安全规则ID列表。总数不能超过20个。
     */
    public $SecurityRuleIds;

    /**
     * @param array $SecurityRuleIds 安全规则ID列表。总数不能超过20个。
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
        if (array_key_exists("SecurityRuleIds",$param) and $param["SecurityRuleIds"] !== null) {
            $this->SecurityRuleIds = $param["SecurityRuleIds"];
        }
    }
}
