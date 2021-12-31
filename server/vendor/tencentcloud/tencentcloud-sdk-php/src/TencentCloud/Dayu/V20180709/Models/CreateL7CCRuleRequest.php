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
 * CreateL7CCRule请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getMethod() 获取操作码，取值[query(表示查询)，add(表示添加)，del(表示删除)]
 * @method void setMethod(string $Method) 设置操作码，取值[query(表示查询)，add(表示添加)，del(表示删除)]
 * @method string getRuleId() 获取7层转发规则ID，例如：rule-0000001
 * @method void setRuleId(string $RuleId) 设置7层转发规则ID，例如：rule-0000001
 * @method array getRuleConfig() 获取7层CC自定义规则参数，当操作码为query时，可以不用填写；当操作码为add或del时，必须填写，且数组长度只能为1；
 * @method void setRuleConfig(array $RuleConfig) 设置7层CC自定义规则参数，当操作码为query时，可以不用填写；当操作码为add或del时，必须填写，且数组长度只能为1；
 */
class CreateL7CCRuleRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var string 操作码，取值[query(表示查询)，add(表示添加)，del(表示删除)]
     */
    public $Method;

    /**
     * @var string 7层转发规则ID，例如：rule-0000001
     */
    public $RuleId;

    /**
     * @var array 7层CC自定义规则参数，当操作码为query时，可以不用填写；当操作码为add或del时，必须填写，且数组长度只能为1；
     */
    public $RuleConfig;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
     * @param string $Id 资源ID
     * @param string $Method 操作码，取值[query(表示查询)，add(表示添加)，del(表示删除)]
     * @param string $RuleId 7层转发规则ID，例如：rule-0000001
     * @param array $RuleConfig 7层CC自定义规则参数，当操作码为query时，可以不用填写；当操作码为add或del时，必须填写，且数组长度只能为1；
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

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleConfig",$param) and $param["RuleConfig"] !== null) {
            $this->RuleConfig = [];
            foreach ($param["RuleConfig"] as $key => $value){
                $obj = new CCRuleConfig();
                $obj->deserialize($value);
                array_push($this->RuleConfig, $obj);
            }
        }
    }
}
