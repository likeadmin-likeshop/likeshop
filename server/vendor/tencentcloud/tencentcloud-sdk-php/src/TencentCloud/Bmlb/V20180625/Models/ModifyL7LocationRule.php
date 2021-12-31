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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改黑石负载均衡七层转发路径时待修改的七层转发规则信息。
 *
 * @method string getDomainId() 获取转发域名实例ID，可通过接口DescribeL7Rules查询。
 * @method void setDomainId(string $DomainId) 设置转发域名实例ID，可通过接口DescribeL7Rules查询。
 * @method string getLocationId() 获取转发路径实例ID，可通过接口DescribeL7Rules查询。
 * @method void setLocationId(string $LocationId) 设置转发路径实例ID，可通过接口DescribeL7Rules查询。
 * @method string getUrl() 获取转发路径。
 * @method void setUrl(string $Url) 设置转发路径。
 * @method integer getSessionExpire() 获取会话保持时间，单位：秒。可选值：30~3600。默认值0，表示不开启会话保持。
 * @method void setSessionExpire(integer $SessionExpire) 设置会话保持时间，单位：秒。可选值：30~3600。默认值0，表示不开启会话保持。
 * @method integer getHealthSwitch() 获取健康检查开关：1（开启）、0（关闭）。默认值0，表示关闭。
 * @method void setHealthSwitch(integer $HealthSwitch) 设置健康检查开关：1（开启）、0（关闭）。默认值0，表示关闭。
 * @method integer getIntervalTime() 获取健康检查检查间隔时间，默认值：5，可选值：5-300，单位：秒。
 * @method void setIntervalTime(integer $IntervalTime) 设置健康检查检查间隔时间，默认值：5，可选值：5-300，单位：秒。
 * @method integer getHealthNum() 获取健康检查健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
 * @method void setHealthNum(integer $HealthNum) 设置健康检查健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
 * @method integer getUnhealthNum() 获取健康检查不健康阈值，默认值：5，表示当连续探测五次不健康则表示该转发不正常，可选值：2-10，单位：次。
 * @method void setUnhealthNum(integer $UnhealthNum) 设置健康检查不健康阈值，默认值：5，表示当连续探测五次不健康则表示该转发不正常，可选值：2-10，单位：次。
 * @method array getHttpCodes() 获取健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
 * @method void setHttpCodes(array $HttpCodes) 设置健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
 * @method string getHttpCheckPath() 获取健康检查检查路径。
 * @method void setHttpCheckPath(string $HttpCheckPath) 设置健康检查检查路径。
 * @method string getHttpCheckDomain() 获取健康检查检查域名。如果规则的域名使用通配符或正则表达式，则健康检查检查域名可自定义，否则必须跟健康检查检查域名一样。不填表示不修改。
 * @method void setHttpCheckDomain(string $HttpCheckDomain) 设置健康检查检查域名。如果规则的域名使用通配符或正则表达式，则健康检查检查域名可自定义，否则必须跟健康检查检查域名一样。不填表示不修改。
 * @method string getBalanceMode() 获取均衡方式：ip_hash、wrr。默认值wrr。
 * @method void setBalanceMode(string $BalanceMode) 设置均衡方式：ip_hash、wrr。默认值wrr。
 * @method string getDomain() 获取转发域名。
 * @method void setDomain(string $Domain) 设置转发域名。
 */
class ModifyL7LocationRule extends AbstractModel
{
    /**
     * @var string 转发域名实例ID，可通过接口DescribeL7Rules查询。
     */
    public $DomainId;

    /**
     * @var string 转发路径实例ID，可通过接口DescribeL7Rules查询。
     */
    public $LocationId;

    /**
     * @var string 转发路径。
     */
    public $Url;

    /**
     * @var integer 会话保持时间，单位：秒。可选值：30~3600。默认值0，表示不开启会话保持。
     */
    public $SessionExpire;

    /**
     * @var integer 健康检查开关：1（开启）、0（关闭）。默认值0，表示关闭。
     */
    public $HealthSwitch;

    /**
     * @var integer 健康检查检查间隔时间，默认值：5，可选值：5-300，单位：秒。
     */
    public $IntervalTime;

    /**
     * @var integer 健康检查健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
     */
    public $HealthNum;

    /**
     * @var integer 健康检查不健康阈值，默认值：5，表示当连续探测五次不健康则表示该转发不正常，可选值：2-10，单位：次。
     */
    public $UnhealthNum;

    /**
     * @var array 健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
     */
    public $HttpCodes;

    /**
     * @var string 健康检查检查路径。
     */
    public $HttpCheckPath;

    /**
     * @var string 健康检查检查域名。如果规则的域名使用通配符或正则表达式，则健康检查检查域名可自定义，否则必须跟健康检查检查域名一样。不填表示不修改。
     */
    public $HttpCheckDomain;

    /**
     * @var string 均衡方式：ip_hash、wrr。默认值wrr。
     */
    public $BalanceMode;

    /**
     * @var string 转发域名。
     */
    public $Domain;

    /**
     * @param string $DomainId 转发域名实例ID，可通过接口DescribeL7Rules查询。
     * @param string $LocationId 转发路径实例ID，可通过接口DescribeL7Rules查询。
     * @param string $Url 转发路径。
     * @param integer $SessionExpire 会话保持时间，单位：秒。可选值：30~3600。默认值0，表示不开启会话保持。
     * @param integer $HealthSwitch 健康检查开关：1（开启）、0（关闭）。默认值0，表示关闭。
     * @param integer $IntervalTime 健康检查检查间隔时间，默认值：5，可选值：5-300，单位：秒。
     * @param integer $HealthNum 健康检查健康阈值，默认值：3，表示当连续探测三次健康则表示该转发正常，可选值：2-10，单位：次。
     * @param integer $UnhealthNum 健康检查不健康阈值，默认值：5，表示当连续探测五次不健康则表示该转发不正常，可选值：2-10，单位：次。
     * @param array $HttpCodes 健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
     * @param string $HttpCheckPath 健康检查检查路径。
     * @param string $HttpCheckDomain 健康检查检查域名。如果规则的域名使用通配符或正则表达式，则健康检查检查域名可自定义，否则必须跟健康检查检查域名一样。不填表示不修改。
     * @param string $BalanceMode 均衡方式：ip_hash、wrr。默认值wrr。
     * @param string $Domain 转发域名。
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("SessionExpire",$param) and $param["SessionExpire"] !== null) {
            $this->SessionExpire = $param["SessionExpire"];
        }

        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnhealthNum",$param) and $param["UnhealthNum"] !== null) {
            $this->UnhealthNum = $param["UnhealthNum"];
        }

        if (array_key_exists("HttpCodes",$param) and $param["HttpCodes"] !== null) {
            $this->HttpCodes = $param["HttpCodes"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("HttpCheckDomain",$param) and $param["HttpCheckDomain"] !== null) {
            $this->HttpCheckDomain = $param["HttpCheckDomain"];
        }

        if (array_key_exists("BalanceMode",$param) and $param["BalanceMode"] !== null) {
            $this->BalanceMode = $param["BalanceMode"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
