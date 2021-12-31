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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNewL4Rule请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP）
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method L4RuleEntry getRule() 获取转发规则
 * @method void setRule(L4RuleEntry $Rule) 设置转发规则
 */
class ModifyNewL4RuleRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP）
     */
    public $Business;

    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var L4RuleEntry 转发规则
     */
    public $Rule;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP）
     * @param string $Id 资源ID
     * @param L4RuleEntry $Rule 转发规则
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new L4RuleEntry();
            $this->Rule->deserialize($param["Rule"]);
        }
    }
}
