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
 * CreateAttackDownloadTask请求参数结构体
 *
 * @method string getDomain() 获取域名，所有域名填写all
 * @method void setDomain(string $Domain) 设置域名，所有域名填写all
 * @method string getFromTime() 获取查询起始时间
 * @method void setFromTime(string $FromTime) 设置查询起始时间
 * @method string getToTime() 获取查询结束时间
 * @method void setToTime(string $ToTime) 设置查询结束时间
 * @method string getName() 获取下载任务名字
 * @method void setName(string $Name) 设置下载任务名字
 * @method integer getRiskLevel() 获取风险等级
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
 * @method integer getStatus() 获取拦截状态
 * @method void setStatus(integer $Status) 设置拦截状态
 * @method integer getRuleId() 获取自定义策略ID
 * @method void setRuleId(integer $RuleId) 设置自定义策略ID
 * @method string getAttackIp() 获取攻击者IP
 * @method void setAttackIp(string $AttackIp) 设置攻击者IP
 * @method string getAttackType() 获取攻击类型
 * @method void setAttackType(string $AttackType) 设置攻击类型
 */
class CreateAttackDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string 域名，所有域名填写all
     */
    public $Domain;

    /**
     * @var string 查询起始时间
     */
    public $FromTime;

    /**
     * @var string 查询结束时间
     */
    public $ToTime;

    /**
     * @var string 下载任务名字
     */
    public $Name;

    /**
     * @var integer 风险等级
     */
    public $RiskLevel;

    /**
     * @var integer 拦截状态
     */
    public $Status;

    /**
     * @var integer 自定义策略ID
     */
    public $RuleId;

    /**
     * @var string 攻击者IP
     */
    public $AttackIp;

    /**
     * @var string 攻击类型
     */
    public $AttackType;

    /**
     * @param string $Domain 域名，所有域名填写all
     * @param string $FromTime 查询起始时间
     * @param string $ToTime 查询结束时间
     * @param string $Name 下载任务名字
     * @param integer $RiskLevel 风险等级
     * @param integer $Status 拦截状态
     * @param integer $RuleId 自定义策略ID
     * @param string $AttackIp 攻击者IP
     * @param string $AttackType 攻击类型
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("FromTime",$param) and $param["FromTime"] !== null) {
            $this->FromTime = $param["FromTime"];
        }

        if (array_key_exists("ToTime",$param) and $param["ToTime"] !== null) {
            $this->ToTime = $param["ToTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AttackIp",$param) and $param["AttackIp"] !== null) {
            $this->AttackIp = $param["AttackIp"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }
    }
}
