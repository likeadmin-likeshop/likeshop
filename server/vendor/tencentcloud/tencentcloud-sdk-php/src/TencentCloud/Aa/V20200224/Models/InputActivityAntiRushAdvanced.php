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
namespace TencentCloud\Aa\V20200224\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 活动防刷高级版业务入参。
 *
 * @method AccountInfo getAccount() 获取账号信息。
 * @method void setAccount(AccountInfo $Account) 设置账号信息。
 * @method string getUserIp() 获取用户IP（外网有效IP地址）。
 * @method void setUserIp(string $UserIp) 设置用户IP（外网有效IP地址）。
 * @method integer getPostTime() 获取用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）。
 * @method void setPostTime(integer $PostTime) 设置用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）。
 * @method SponsorInfo getSponsor() 获取可选填写。详情请跳转至SponsorInfo查看。
 * @method void setSponsor(SponsorInfo $Sponsor) 设置可选填写。详情请跳转至SponsorInfo查看。
 * @method OnlineScamInfo getOnlineScam() 获取可选填写。详情请跳转至OnlineScamInfo查看。
 * @method void setOnlineScam(OnlineScamInfo $OnlineScam) 设置可选填写。详情请跳转至OnlineScamInfo查看。
 * @method integer getBusinessId() 获取业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
 * @method void setBusinessId(integer $BusinessId) 设置业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
 * @method string getNickname() 获取昵称，UTF-8 编码。
 * @method void setNickname(string $Nickname) 设置昵称，UTF-8 编码。
 * @method string getEmailAddress() 获取用户邮箱地址（非系统自动生成）。
 * @method void setEmailAddress(string $EmailAddress) 设置用户邮箱地址（非系统自动生成）。
 * @method integer getCheckDevice() 获取是否识别设备异常：
0：不识别。
1：识别。
 * @method void setCheckDevice(integer $CheckDevice) 设置是否识别设备异常：
0：不识别。
1：识别。
 * @method string getCookieHash() 获取用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
 * @method void setCookieHash(string $CookieHash) 设置用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
 * @method string getReferer() 获取用户HTTP请求的Referer值。
 * @method void setReferer(string $Referer) 设置用户HTTP请求的Referer值。
 * @method string getUserAgent() 获取用户HTTP请求的User-Agent值。
 * @method void setUserAgent(string $UserAgent) 设置用户HTTP请求的User-Agent值。
 * @method string getXForwardedFor() 获取用户HTTP请求的X-Forwarded-For值。
 * @method void setXForwardedFor(string $XForwardedFor) 设置用户HTTP请求的X-Forwarded-For值。
 * @method string getMacAddress() 获取MAC地址或设备唯一标识。
 * @method void setMacAddress(string $MacAddress) 设置MAC地址或设备唯一标识。
 * @method string getVendorId() 获取手机制造商ID，如果手机注册，请带上此信息。
 * @method void setVendorId(string $VendorId) 设置手机制造商ID，如果手机注册，请带上此信息。
 */
class InputActivityAntiRushAdvanced extends AbstractModel
{
    /**
     * @var AccountInfo 账号信息。
     */
    public $Account;

    /**
     * @var string 用户IP（外网有效IP地址）。
     */
    public $UserIp;

    /**
     * @var integer 用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）。
     */
    public $PostTime;

    /**
     * @var SponsorInfo 可选填写。详情请跳转至SponsorInfo查看。
     */
    public $Sponsor;

    /**
     * @var OnlineScamInfo 可选填写。详情请跳转至OnlineScamInfo查看。
     */
    public $OnlineScam;

    /**
     * @var integer 业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
     */
    public $BusinessId;

    /**
     * @var string 昵称，UTF-8 编码。
     */
    public $Nickname;

    /**
     * @var string 用户邮箱地址（非系统自动生成）。
     */
    public $EmailAddress;

    /**
     * @var integer 是否识别设备异常：
0：不识别。
1：识别。
     */
    public $CheckDevice;

    /**
     * @var string 用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
     */
    public $CookieHash;

    /**
     * @var string 用户HTTP请求的Referer值。
     */
    public $Referer;

    /**
     * @var string 用户HTTP请求的User-Agent值。
     */
    public $UserAgent;

    /**
     * @var string 用户HTTP请求的X-Forwarded-For值。
     */
    public $XForwardedFor;

    /**
     * @var string MAC地址或设备唯一标识。
     */
    public $MacAddress;

    /**
     * @var string 手机制造商ID，如果手机注册，请带上此信息。
     */
    public $VendorId;

    /**
     * @param AccountInfo $Account 账号信息。
     * @param string $UserIp 用户IP（外网有效IP地址）。
     * @param integer $PostTime 用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）。
     * @param SponsorInfo $Sponsor 可选填写。详情请跳转至SponsorInfo查看。
     * @param OnlineScamInfo $OnlineScam 可选填写。详情请跳转至OnlineScamInfo查看。
     * @param integer $BusinessId 业务ID。网站或应用在多个业务中使用此服务，通过此ID区分统计数据。
     * @param string $Nickname 昵称，UTF-8 编码。
     * @param string $EmailAddress 用户邮箱地址（非系统自动生成）。
     * @param integer $CheckDevice 是否识别设备异常：
0：不识别。
1：识别。
     * @param string $CookieHash 用户HTTP请求中的Cookie进行2次hash的值，只要保证相同Cookie的hash值一致即可。
     * @param string $Referer 用户HTTP请求的Referer值。
     * @param string $UserAgent 用户HTTP请求的User-Agent值。
     * @param string $XForwardedFor 用户HTTP请求的X-Forwarded-For值。
     * @param string $MacAddress MAC地址或设备唯一标识。
     * @param string $VendorId 手机制造商ID，如果手机注册，请带上此信息。
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new AccountInfo();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("Sponsor",$param) and $param["Sponsor"] !== null) {
            $this->Sponsor = new SponsorInfo();
            $this->Sponsor->deserialize($param["Sponsor"]);
        }

        if (array_key_exists("OnlineScam",$param) and $param["OnlineScam"] !== null) {
            $this->OnlineScam = new OnlineScamInfo();
            $this->OnlineScam->deserialize($param["OnlineScam"]);
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("CheckDevice",$param) and $param["CheckDevice"] !== null) {
            $this->CheckDevice = $param["CheckDevice"];
        }

        if (array_key_exists("CookieHash",$param) and $param["CookieHash"] !== null) {
            $this->CookieHash = $param["CookieHash"];
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = $param["Referer"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("XForwardedFor",$param) and $param["XForwardedFor"] !== null) {
            $this->XForwardedFor = $param["XForwardedFor"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("VendorId",$param) and $param["VendorId"] !== null) {
            $this->VendorId = $param["VendorId"];
        }
    }
}
