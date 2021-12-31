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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomRules接口回包中的复杂类型
 *
 * @method string getActionType() 获取动作类型
 * @method void setActionType(string $ActionType) 设置动作类型
 * @method string getBypass() 获取跳过的策略
 * @method void setBypass(string $Bypass) 设置跳过的策略
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method string getRedirect() 获取重定向地址
 * @method void setRedirect(string $Redirect) 设置重定向地址
 * @method string getRuleId() 获取策略ID
 * @method void setRuleId(string $RuleId) 设置策略ID
 * @method string getSortId() 获取优先级
 * @method void setSortId(string $SortId) 设置优先级
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method array getStrategies() 获取策略详情
 * @method void setStrategies(array $Strategies) 设置策略详情
 */
class DescribeCustomRulesRspRuleListItem extends AbstractModel
{
    /**
     * @var string 动作类型
     */
    public $ActionType;

    /**
     * @var string 跳过的策略
     */
    public $Bypass;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var string 重定向地址
     */
    public $Redirect;

    /**
     * @var string 策略ID
     */
    public $RuleId;

    /**
     * @var string 优先级
     */
    public $SortId;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var array 策略详情
     */
    public $Strategies;

    /**
     * @param string $ActionType 动作类型
     * @param string $Bypass 跳过的策略
     * @param string $CreateTime 创建时间
     * @param string $ExpireTime 过期时间
     * @param string $Name 策略名称
     * @param string $Redirect 重定向地址
     * @param string $RuleId 策略ID
     * @param string $SortId 优先级
     * @param string $Status 状态
     * @param array $Strategies 策略详情
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Redirect",$param) and $param["Redirect"] !== null) {
            $this->Redirect = $param["Redirect"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }
    }
}
