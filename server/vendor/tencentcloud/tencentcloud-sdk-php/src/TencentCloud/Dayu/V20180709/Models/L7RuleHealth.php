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
 * L7规则健康检查参数
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method integer getEnable() 获取=1表示开启；=0表示关闭
 * @method void setEnable(integer $Enable) 设置=1表示开启；=0表示关闭
 * @method integer getInterval() 获取检测间隔时间，单位秒
 * @method void setInterval(integer $Interval) 设置检测间隔时间，单位秒
 * @method integer getKickNum() 获取不健康阈值，单位次
 * @method void setKickNum(integer $KickNum) 设置不健康阈值，单位次
 * @method integer getAliveNum() 获取健康阈值，单位次
 * @method void setAliveNum(integer $AliveNum) 设置健康阈值，单位次
 * @method string getMethod() 获取HTTP请求方式，取值[HEAD,GET]
 * @method void setMethod(string $Method) 设置HTTP请求方式，取值[HEAD,GET]
 * @method integer getStatusCode() 获取健康检查判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
 * @method void setStatusCode(integer $StatusCode) 设置健康检查判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
 * @method string getUrl() 获取检查目录的URL，默认为/
 * @method void setUrl(string $Url) 设置检查目录的URL，默认为/
 * @method integer getStatus() 获取配置状态，0： 正常，1：配置中，2：配置失败
 * @method void setStatus(integer $Status) 设置配置状态，0： 正常，1：配置中，2：配置失败
 */
class L7RuleHealth extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var integer =1表示开启；=0表示关闭
     */
    public $Enable;

    /**
     * @var integer 检测间隔时间，单位秒
     */
    public $Interval;

    /**
     * @var integer 不健康阈值，单位次
     */
    public $KickNum;

    /**
     * @var integer 健康阈值，单位次
     */
    public $AliveNum;

    /**
     * @var string HTTP请求方式，取值[HEAD,GET]
     */
    public $Method;

    /**
     * @var integer 健康检查判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
     */
    public $StatusCode;

    /**
     * @var string 检查目录的URL，默认为/
     */
    public $Url;

    /**
     * @var integer 配置状态，0： 正常，1：配置中，2：配置失败
     */
    public $Status;

    /**
     * @param string $RuleId 规则ID
     * @param integer $Enable =1表示开启；=0表示关闭
     * @param integer $Interval 检测间隔时间，单位秒
     * @param integer $KickNum 不健康阈值，单位次
     * @param integer $AliveNum 健康阈值，单位次
     * @param string $Method HTTP请求方式，取值[HEAD,GET]
     * @param integer $StatusCode 健康检查判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
     * @param string $Url 检查目录的URL，默认为/
     * @param integer $Status 配置状态，0： 正常，1：配置中，2：配置失败
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("KickNum",$param) and $param["KickNum"] !== null) {
            $this->KickNum = $param["KickNum"];
        }

        if (array_key_exists("AliveNum",$param) and $param["AliveNum"] !== null) {
            $this->AliveNum = $param["AliveNum"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
