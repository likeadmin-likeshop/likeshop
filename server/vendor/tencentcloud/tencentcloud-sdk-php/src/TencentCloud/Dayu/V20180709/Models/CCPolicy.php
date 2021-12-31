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
 * cc自定义规则
 *
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method string getSmode() 获取匹配模式，取值[matching(匹配模式), speedlimit(限速模式)]
 * @method void setSmode(string $Smode) 设置匹配模式，取值[matching(匹配模式), speedlimit(限速模式)]
 * @method string getSetId() 获取策略id
 * @method void setSetId(string $SetId) 设置策略id
 * @method integer getFrequency() 获取每分钟限制的次数
 * @method void setFrequency(integer $Frequency) 设置每分钟限制的次数
 * @method string getExeMode() 获取执行策略模式，拦截或者验证码，取值[alg（验证码）, drop（拦截）]
 * @method void setExeMode(string $ExeMode) 设置执行策略模式，拦截或者验证码，取值[alg（验证码）, drop（拦截）]
 * @method integer getSwitch() 获取生效开关
 * @method void setSwitch(integer $Switch) 设置生效开关
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method array getRuleList() 获取规则列表
 * @method void setRuleList(array $RuleList) 设置规则列表
 * @method array getIpList() 获取IP列表，如果不填时，请传空数组但不能为null；
 * @method void setIpList(array $IpList) 设置IP列表，如果不填时，请传空数组但不能为null；
 * @method string getProtocol() 获取cc防护类型，取值[http，https]
 * @method void setProtocol(string $Protocol) 设置cc防护类型，取值[http，https]
 * @method string getRuleId() 获取可选字段，表示HTTPS的CC防护域名对应的转发规则ID;
 * @method void setRuleId(string $RuleId) 设置可选字段，表示HTTPS的CC防护域名对应的转发规则ID;
 * @method string getDomain() 获取HTTPS的CC防护域名
 * @method void setDomain(string $Domain) 设置HTTPS的CC防护域名
 */
class CCPolicy extends AbstractModel
{
    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var string 匹配模式，取值[matching(匹配模式), speedlimit(限速模式)]
     */
    public $Smode;

    /**
     * @var string 策略id
     */
    public $SetId;

    /**
     * @var integer 每分钟限制的次数
     */
    public $Frequency;

    /**
     * @var string 执行策略模式，拦截或者验证码，取值[alg（验证码）, drop（拦截）]
     */
    public $ExeMode;

    /**
     * @var integer 生效开关
     */
    public $Switch;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var array 规则列表
     */
    public $RuleList;

    /**
     * @var array IP列表，如果不填时，请传空数组但不能为null；
     */
    public $IpList;

    /**
     * @var string cc防护类型，取值[http，https]
     */
    public $Protocol;

    /**
     * @var string 可选字段，表示HTTPS的CC防护域名对应的转发规则ID;
     */
    public $RuleId;

    /**
     * @var string HTTPS的CC防护域名
     */
    public $Domain;

    /**
     * @param string $Name 策略名称
     * @param string $Smode 匹配模式，取值[matching(匹配模式), speedlimit(限速模式)]
     * @param string $SetId 策略id
     * @param integer $Frequency 每分钟限制的次数
     * @param string $ExeMode 执行策略模式，拦截或者验证码，取值[alg（验证码）, drop（拦截）]
     * @param integer $Switch 生效开关
     * @param string $CreateTime 创建时间
     * @param array $RuleList 规则列表
     * @param array $IpList IP列表，如果不填时，请传空数组但不能为null；
     * @param string $Protocol cc防护类型，取值[http，https]
     * @param string $RuleId 可选字段，表示HTTPS的CC防护域名对应的转发规则ID;
     * @param string $Domain HTTPS的CC防护域名
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Smode",$param) and $param["Smode"] !== null) {
            $this->Smode = $param["Smode"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("ExeMode",$param) and $param["ExeMode"] !== null) {
            $this->ExeMode = $param["ExeMode"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new CCRule();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
