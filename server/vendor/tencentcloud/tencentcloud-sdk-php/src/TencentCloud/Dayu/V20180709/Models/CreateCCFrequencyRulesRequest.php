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
 * CreateCCFrequencyRules请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getRuleId() 获取7层转发规则ID（通过获取7层转发规则接口可以获取规则ID）
 * @method void setRuleId(string $RuleId) 设置7层转发规则ID（通过获取7层转发规则接口可以获取规则ID）
 * @method string getMode() 获取匹配规则，取值["include"(前缀匹配)，"equal"(完全匹配)]
 * @method void setMode(string $Mode) 设置匹配规则，取值["include"(前缀匹配)，"equal"(完全匹配)]
 * @method integer getPeriod() 获取统计周期，单位秒，取值[10, 30, 60]
 * @method void setPeriod(integer $Period) 设置统计周期，单位秒，取值[10, 30, 60]
 * @method integer getReqNumber() 获取访问次数，取值[1-10000]
 * @method void setReqNumber(integer $ReqNumber) 设置访问次数，取值[1-10000]
 * @method string getAct() 获取执行动作，取值["alg"（人机识别）, "drop"（拦截）]
 * @method void setAct(string $Act) 设置执行动作，取值["alg"（人机识别）, "drop"（拦截）]
 * @method integer getExeDuration() 获取执行时间，单位秒，取值[1-900]
 * @method void setExeDuration(integer $ExeDuration) 设置执行时间，单位秒，取值[1-900]
 * @method string getUri() 获取URI字符串，必须以/开头，例如/abc/a.php，长度不超过31；当URI=/时，匹配模式只能选择前缀匹配；
 * @method void setUri(string $Uri) 设置URI字符串，必须以/开头，例如/abc/a.php，长度不超过31；当URI=/时，匹配模式只能选择前缀匹配；
 * @method string getUserAgent() 获取User-Agent字符串，长度不超过80
 * @method void setUserAgent(string $UserAgent) 设置User-Agent字符串，长度不超过80
 * @method string getCookie() 获取Cookie字符串，长度不超过40
 * @method void setCookie(string $Cookie) 设置Cookie字符串，长度不超过40
 */
class CreateCCFrequencyRulesRequest extends AbstractModel
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
     * @var string 7层转发规则ID（通过获取7层转发规则接口可以获取规则ID）
     */
    public $RuleId;

    /**
     * @var string 匹配规则，取值["include"(前缀匹配)，"equal"(完全匹配)]
     */
    public $Mode;

    /**
     * @var integer 统计周期，单位秒，取值[10, 30, 60]
     */
    public $Period;

    /**
     * @var integer 访问次数，取值[1-10000]
     */
    public $ReqNumber;

    /**
     * @var string 执行动作，取值["alg"（人机识别）, "drop"（拦截）]
     */
    public $Act;

    /**
     * @var integer 执行时间，单位秒，取值[1-900]
     */
    public $ExeDuration;

    /**
     * @var string URI字符串，必须以/开头，例如/abc/a.php，长度不超过31；当URI=/时，匹配模式只能选择前缀匹配；
     */
    public $Uri;

    /**
     * @var string User-Agent字符串，长度不超过80
     */
    public $UserAgent;

    /**
     * @var string Cookie字符串，长度不超过40
     */
    public $Cookie;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；net表示高防IP专业版）
     * @param string $Id 资源ID
     * @param string $RuleId 7层转发规则ID（通过获取7层转发规则接口可以获取规则ID）
     * @param string $Mode 匹配规则，取值["include"(前缀匹配)，"equal"(完全匹配)]
     * @param integer $Period 统计周期，单位秒，取值[10, 30, 60]
     * @param integer $ReqNumber 访问次数，取值[1-10000]
     * @param string $Act 执行动作，取值["alg"（人机识别）, "drop"（拦截）]
     * @param integer $ExeDuration 执行时间，单位秒，取值[1-900]
     * @param string $Uri URI字符串，必须以/开头，例如/abc/a.php，长度不超过31；当URI=/时，匹配模式只能选择前缀匹配；
     * @param string $UserAgent User-Agent字符串，长度不超过80
     * @param string $Cookie Cookie字符串，长度不超过40
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ReqNumber",$param) and $param["ReqNumber"] !== null) {
            $this->ReqNumber = $param["ReqNumber"];
        }

        if (array_key_exists("Act",$param) and $param["Act"] !== null) {
            $this->Act = $param["Act"];
        }

        if (array_key_exists("ExeDuration",$param) and $param["ExeDuration"] !== null) {
            $this->ExeDuration = $param["ExeDuration"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = $param["Cookie"];
        }
    }
}
