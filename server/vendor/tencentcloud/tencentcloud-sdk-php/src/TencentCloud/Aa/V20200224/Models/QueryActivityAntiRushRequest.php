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
 * QueryActivityAntiRush请求参数结构体
 *
 * @method string getAccountType() 获取用户账号类型（默认开通 QQ 开放账号、手机号，手机 MD5 账号类型查询。如需使用微信开放账号，则需要 提交工单 由腾讯云进行资格审核，审核通过后方可正常使用微信开放账号）：
1：QQ 开放帐号。
2：微信开放账号。
4：手机号。
0：其他。
10004：手机号 MD5。
 * @method void setAccountType(string $AccountType) 设置用户账号类型（默认开通 QQ 开放账号、手机号，手机 MD5 账号类型查询。如需使用微信开放账号，则需要 提交工单 由腾讯云进行资格审核，审核通过后方可正常使用微信开放账号）：
1：QQ 开放帐号。
2：微信开放账号。
4：手机号。
0：其他。
10004：手机号 MD5。
 * @method string getUid() 获取用户 ID 不同的 accountType 对应不同的用户 ID。如果是 QQ，则填入对应的 openid，微信用户则填入对应的 openid/unionid，手机号则填入对应真实用户手机号（如13123456789）。
 * @method void setUid(string $Uid) 设置用户 ID 不同的 accountType 对应不同的用户 ID。如果是 QQ，则填入对应的 openid，微信用户则填入对应的 openid/unionid，手机号则填入对应真实用户手机号（如13123456789）。
 * @method string getUserIp() 获取用户的真实外网 IP。若填入非外网有效ip，会返回level=0的风控结果，risktype中会有205的风险码返回作为标识
 * @method void setUserIp(string $UserIp) 设置用户的真实外网 IP。若填入非外网有效ip，会返回level=0的风控结果，risktype中会有205的风险码返回作为标识
 * @method string getPostTime() 获取用户操作时间戳。
 * @method void setPostTime(string $PostTime) 设置用户操作时间戳。
 * @method string getAppIdU() 获取accountType 是QQ开放账号时，该参数必填，表示 QQ 开放平台分配给网站或应用的 AppID，用来唯一标识网站或应用。
 * @method void setAppIdU(string $AppIdU) 设置accountType 是QQ开放账号时，该参数必填，表示 QQ 开放平台分配给网站或应用的 AppID，用来唯一标识网站或应用。
 * @method string getNickName() 获取昵称，UTF-8 编码。
 * @method void setNickName(string $NickName) 设置昵称，UTF-8 编码。
 * @method string getPhoneNumber() 获取手机号。若 accountType 选4（手机号）、或10004（手机号 MD5），则无需重复填写。否则填入对应的手机号（如15912345687）。accountType为1或2时，该字段支持MD5值；
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号。若 accountType 选4（手机号）、或10004（手机号 MD5），则无需重复填写。否则填入对应的手机号（如15912345687）。accountType为1或2时，该字段支持MD5值；
 * @method string getEmailAddress() 获取用户邮箱地址。
 * @method void setEmailAddress(string $EmailAddress) 设置用户邮箱地址。
 * @method string getRegisterTime() 获取注册时间戳。
 * @method void setRegisterTime(string $RegisterTime) 设置注册时间戳。
 * @method string getRegisterIp() 获取注册来源的外网 IP。
 * @method void setRegisterIp(string $RegisterIp) 设置注册来源的外网 IP。
 * @method string getCookieHash() 获取用户 HTTP 请求中的 cookie 进行2次 hash 的值，只要保证相同 cookie 的 hash 值一致即可。
 * @method void setCookieHash(string $CookieHash) 设置用户 HTTP 请求中的 cookie 进行2次 hash 的值，只要保证相同 cookie 的 hash 值一致即可。
 * @method string getAddress() 获取地址。
 * @method void setAddress(string $Address) 设置地址。
 * @method string getLoginSource() 获取登录来源：
0：其他。
1：PC 网页。
2：移动页面。
3：App。
4：微信公众号。
 * @method void setLoginSource(string $LoginSource) 设置登录来源：
0：其他。
1：PC 网页。
2：移动页面。
3：App。
4：微信公众号。
 * @method string getLoginType() 获取登录方式：
0：其他。
1：手动账号密码输入。
2：动态短信密码登录。
3：二维码扫描登录。
 * @method void setLoginType(string $LoginType) 设置登录方式：
0：其他。
1：手动账号密码输入。
2：动态短信密码登录。
3：二维码扫描登录。
 * @method string getLoginSpend() 获取登录耗时，单位：秒。
 * @method void setLoginSpend(string $LoginSpend) 设置登录耗时，单位：秒。
 * @method string getRootId() 获取用户操作的目的 ID，如点赞等，该字段就是被点赞的消息 ID，如果是投票，则为被投号码的 ID。
 * @method void setRootId(string $RootId) 设置用户操作的目的 ID，如点赞等，该字段就是被点赞的消息 ID，如果是投票，则为被投号码的 ID。
 * @method string getReferer() 获取用户 HTTP 请求的 referer 值。
 * @method void setReferer(string $Referer) 设置用户 HTTP 请求的 referer 值。
 * @method string getJumpUrl() 获取登录成功后跳转页面。
 * @method void setJumpUrl(string $JumpUrl) 设置登录成功后跳转页面。
 * @method string getUserAgent() 获取用户 HTTP 请求的 userAgent。
 * @method void setUserAgent(string $UserAgent) 设置用户 HTTP 请求的 userAgent。
 * @method string getXForwardedFor() 获取用户 HTTP 请求中的 x_forward_for。
 * @method void setXForwardedFor(string $XForwardedFor) 设置用户 HTTP 请求中的 x_forward_for。
 * @method string getMouseClickCount() 获取用户操作过程中鼠标单击次数。
 * @method void setMouseClickCount(string $MouseClickCount) 设置用户操作过程中鼠标单击次数。
 * @method string getKeyboardClickCount() 获取用户操作过程中键盘单击次数。
 * @method void setKeyboardClickCount(string $KeyboardClickCount) 设置用户操作过程中键盘单击次数。
 * @method string getMacAddress() 获取MAC 地址或设备唯一标识。
 * @method void setMacAddress(string $MacAddress) 设置MAC 地址或设备唯一标识。
 * @method string getVendorId() 获取手机制造商 ID，如果手机注册，请带上此信息。
 * @method void setVendorId(string $VendorId) 设置手机制造商 ID，如果手机注册，请带上此信息。
 * @method string getImei() 获取手机设备号。支持以下格式：
1.imei明文
2.idfa明文,
3.imei小写后MD5值小写
4.idfa大写后MD5值小写
 * @method void setImei(string $Imei) 设置手机设备号。支持以下格式：
1.imei明文
2.idfa明文,
3.imei小写后MD5值小写
4.idfa大写后MD5值小写
 * @method string getAppVersion() 获取App 客户端版本。
 * @method void setAppVersion(string $AppVersion) 设置App 客户端版本。
 * @method string getBusinessId() 获取业务 ID 网站或应用在多个业务中使用此服务，通过此 ID 区分统计数据。
 * @method void setBusinessId(string $BusinessId) 设置业务 ID 网站或应用在多个业务中使用此服务，通过此 ID 区分统计数据。
 * @method string getWxSubType() 获取1：微信公众号。
2：微信小程序。
 * @method void setWxSubType(string $WxSubType) 设置1：微信公众号。
2：微信小程序。
 * @method string getRandNum() 获取Token 签名随机数，WxSubType为微信小程序时必填，建议16个字符。
 * @method void setRandNum(string $RandNum) 设置Token 签名随机数，WxSubType为微信小程序时必填，建议16个字符。
 * @method string getWxToken() 获取如果 accountType为2而且wxSubType有填，该字段必选，否则不需要填写；
如果是微信小程序（WxSubType=2），该字段为以ssesion_key为key去签名随机数radnNum得到的值（ hmac_sha256签名算法）；如果是微信公众号或第三方登录，则为授权的access_token（网页版本的access_Token,而且获取token的scope字段必需填写snsapi_userinfo；）
 * @method void setWxToken(string $WxToken) 设置如果 accountType为2而且wxSubType有填，该字段必选，否则不需要填写；
如果是微信小程序（WxSubType=2），该字段为以ssesion_key为key去签名随机数radnNum得到的值（ hmac_sha256签名算法）；如果是微信公众号或第三方登录，则为授权的access_token（网页版本的access_Token,而且获取token的scope字段必需填写snsapi_userinfo；）
 * @method string getCheckDevice() 获取是否识别设备异常：
0：不识别。
1：识别。
 * @method void setCheckDevice(string $CheckDevice) 设置是否识别设备异常：
0：不识别。
1：识别。
 */
class QueryActivityAntiRushRequest extends AbstractModel
{
    /**
     * @var string 用户账号类型（默认开通 QQ 开放账号、手机号，手机 MD5 账号类型查询。如需使用微信开放账号，则需要 提交工单 由腾讯云进行资格审核，审核通过后方可正常使用微信开放账号）：
1：QQ 开放帐号。
2：微信开放账号。
4：手机号。
0：其他。
10004：手机号 MD5。
     */
    public $AccountType;

    /**
     * @var string 用户 ID 不同的 accountType 对应不同的用户 ID。如果是 QQ，则填入对应的 openid，微信用户则填入对应的 openid/unionid，手机号则填入对应真实用户手机号（如13123456789）。
     */
    public $Uid;

    /**
     * @var string 用户的真实外网 IP。若填入非外网有效ip，会返回level=0的风控结果，risktype中会有205的风险码返回作为标识
     */
    public $UserIp;

    /**
     * @var string 用户操作时间戳。
     */
    public $PostTime;

    /**
     * @var string accountType 是QQ开放账号时，该参数必填，表示 QQ 开放平台分配给网站或应用的 AppID，用来唯一标识网站或应用。
     */
    public $AppIdU;

    /**
     * @var string 昵称，UTF-8 编码。
     */
    public $NickName;

    /**
     * @var string 手机号。若 accountType 选4（手机号）、或10004（手机号 MD5），则无需重复填写。否则填入对应的手机号（如15912345687）。accountType为1或2时，该字段支持MD5值；
     */
    public $PhoneNumber;

    /**
     * @var string 用户邮箱地址。
     */
    public $EmailAddress;

    /**
     * @var string 注册时间戳。
     */
    public $RegisterTime;

    /**
     * @var string 注册来源的外网 IP。
     */
    public $RegisterIp;

    /**
     * @var string 用户 HTTP 请求中的 cookie 进行2次 hash 的值，只要保证相同 cookie 的 hash 值一致即可。
     */
    public $CookieHash;

    /**
     * @var string 地址。
     */
    public $Address;

    /**
     * @var string 登录来源：
0：其他。
1：PC 网页。
2：移动页面。
3：App。
4：微信公众号。
     */
    public $LoginSource;

    /**
     * @var string 登录方式：
0：其他。
1：手动账号密码输入。
2：动态短信密码登录。
3：二维码扫描登录。
     */
    public $LoginType;

    /**
     * @var string 登录耗时，单位：秒。
     */
    public $LoginSpend;

    /**
     * @var string 用户操作的目的 ID，如点赞等，该字段就是被点赞的消息 ID，如果是投票，则为被投号码的 ID。
     */
    public $RootId;

    /**
     * @var string 用户 HTTP 请求的 referer 值。
     */
    public $Referer;

    /**
     * @var string 登录成功后跳转页面。
     */
    public $JumpUrl;

    /**
     * @var string 用户 HTTP 请求的 userAgent。
     */
    public $UserAgent;

    /**
     * @var string 用户 HTTP 请求中的 x_forward_for。
     */
    public $XForwardedFor;

    /**
     * @var string 用户操作过程中鼠标单击次数。
     */
    public $MouseClickCount;

    /**
     * @var string 用户操作过程中键盘单击次数。
     */
    public $KeyboardClickCount;

    /**
     * @var string MAC 地址或设备唯一标识。
     */
    public $MacAddress;

    /**
     * @var string 手机制造商 ID，如果手机注册，请带上此信息。
     */
    public $VendorId;

    /**
     * @var string 手机设备号。支持以下格式：
1.imei明文
2.idfa明文,
3.imei小写后MD5值小写
4.idfa大写后MD5值小写
     */
    public $Imei;

    /**
     * @var string App 客户端版本。
     */
    public $AppVersion;

    /**
     * @var string 业务 ID 网站或应用在多个业务中使用此服务，通过此 ID 区分统计数据。
     */
    public $BusinessId;

    /**
     * @var string 1：微信公众号。
2：微信小程序。
     */
    public $WxSubType;

    /**
     * @var string Token 签名随机数，WxSubType为微信小程序时必填，建议16个字符。
     */
    public $RandNum;

    /**
     * @var string 如果 accountType为2而且wxSubType有填，该字段必选，否则不需要填写；
如果是微信小程序（WxSubType=2），该字段为以ssesion_key为key去签名随机数radnNum得到的值（ hmac_sha256签名算法）；如果是微信公众号或第三方登录，则为授权的access_token（网页版本的access_Token,而且获取token的scope字段必需填写snsapi_userinfo；）
     */
    public $WxToken;

    /**
     * @var string 是否识别设备异常：
0：不识别。
1：识别。
     */
    public $CheckDevice;

    /**
     * @param string $AccountType 用户账号类型（默认开通 QQ 开放账号、手机号，手机 MD5 账号类型查询。如需使用微信开放账号，则需要 提交工单 由腾讯云进行资格审核，审核通过后方可正常使用微信开放账号）：
1：QQ 开放帐号。
2：微信开放账号。
4：手机号。
0：其他。
10004：手机号 MD5。
     * @param string $Uid 用户 ID 不同的 accountType 对应不同的用户 ID。如果是 QQ，则填入对应的 openid，微信用户则填入对应的 openid/unionid，手机号则填入对应真实用户手机号（如13123456789）。
     * @param string $UserIp 用户的真实外网 IP。若填入非外网有效ip，会返回level=0的风控结果，risktype中会有205的风险码返回作为标识
     * @param string $PostTime 用户操作时间戳。
     * @param string $AppIdU accountType 是QQ开放账号时，该参数必填，表示 QQ 开放平台分配给网站或应用的 AppID，用来唯一标识网站或应用。
     * @param string $NickName 昵称，UTF-8 编码。
     * @param string $PhoneNumber 手机号。若 accountType 选4（手机号）、或10004（手机号 MD5），则无需重复填写。否则填入对应的手机号（如15912345687）。accountType为1或2时，该字段支持MD5值；
     * @param string $EmailAddress 用户邮箱地址。
     * @param string $RegisterTime 注册时间戳。
     * @param string $RegisterIp 注册来源的外网 IP。
     * @param string $CookieHash 用户 HTTP 请求中的 cookie 进行2次 hash 的值，只要保证相同 cookie 的 hash 值一致即可。
     * @param string $Address 地址。
     * @param string $LoginSource 登录来源：
0：其他。
1：PC 网页。
2：移动页面。
3：App。
4：微信公众号。
     * @param string $LoginType 登录方式：
0：其他。
1：手动账号密码输入。
2：动态短信密码登录。
3：二维码扫描登录。
     * @param string $LoginSpend 登录耗时，单位：秒。
     * @param string $RootId 用户操作的目的 ID，如点赞等，该字段就是被点赞的消息 ID，如果是投票，则为被投号码的 ID。
     * @param string $Referer 用户 HTTP 请求的 referer 值。
     * @param string $JumpUrl 登录成功后跳转页面。
     * @param string $UserAgent 用户 HTTP 请求的 userAgent。
     * @param string $XForwardedFor 用户 HTTP 请求中的 x_forward_for。
     * @param string $MouseClickCount 用户操作过程中鼠标单击次数。
     * @param string $KeyboardClickCount 用户操作过程中键盘单击次数。
     * @param string $MacAddress MAC 地址或设备唯一标识。
     * @param string $VendorId 手机制造商 ID，如果手机注册，请带上此信息。
     * @param string $Imei 手机设备号。支持以下格式：
1.imei明文
2.idfa明文,
3.imei小写后MD5值小写
4.idfa大写后MD5值小写
     * @param string $AppVersion App 客户端版本。
     * @param string $BusinessId 业务 ID 网站或应用在多个业务中使用此服务，通过此 ID 区分统计数据。
     * @param string $WxSubType 1：微信公众号。
2：微信小程序。
     * @param string $RandNum Token 签名随机数，WxSubType为微信小程序时必填，建议16个字符。
     * @param string $WxToken 如果 accountType为2而且wxSubType有填，该字段必选，否则不需要填写；
如果是微信小程序（WxSubType=2），该字段为以ssesion_key为key去签名随机数radnNum得到的值（ hmac_sha256签名算法）；如果是微信公众号或第三方登录，则为授权的access_token（网页版本的access_Token,而且获取token的scope字段必需填写snsapi_userinfo；）
     * @param string $CheckDevice 是否识别设备异常：
0：不识别。
1：识别。
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
        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("AppIdU",$param) and $param["AppIdU"] !== null) {
            $this->AppIdU = $param["AppIdU"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("RegisterTime",$param) and $param["RegisterTime"] !== null) {
            $this->RegisterTime = $param["RegisterTime"];
        }

        if (array_key_exists("RegisterIp",$param) and $param["RegisterIp"] !== null) {
            $this->RegisterIp = $param["RegisterIp"];
        }

        if (array_key_exists("CookieHash",$param) and $param["CookieHash"] !== null) {
            $this->CookieHash = $param["CookieHash"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("LoginSource",$param) and $param["LoginSource"] !== null) {
            $this->LoginSource = $param["LoginSource"];
        }

        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }

        if (array_key_exists("LoginSpend",$param) and $param["LoginSpend"] !== null) {
            $this->LoginSpend = $param["LoginSpend"];
        }

        if (array_key_exists("RootId",$param) and $param["RootId"] !== null) {
            $this->RootId = $param["RootId"];
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = $param["Referer"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("XForwardedFor",$param) and $param["XForwardedFor"] !== null) {
            $this->XForwardedFor = $param["XForwardedFor"];
        }

        if (array_key_exists("MouseClickCount",$param) and $param["MouseClickCount"] !== null) {
            $this->MouseClickCount = $param["MouseClickCount"];
        }

        if (array_key_exists("KeyboardClickCount",$param) and $param["KeyboardClickCount"] !== null) {
            $this->KeyboardClickCount = $param["KeyboardClickCount"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("VendorId",$param) and $param["VendorId"] !== null) {
            $this->VendorId = $param["VendorId"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("WxSubType",$param) and $param["WxSubType"] !== null) {
            $this->WxSubType = $param["WxSubType"];
        }

        if (array_key_exists("RandNum",$param) and $param["RandNum"] !== null) {
            $this->RandNum = $param["RandNum"];
        }

        if (array_key_exists("WxToken",$param) and $param["WxToken"] !== null) {
            $this->WxToken = $param["WxToken"];
        }

        if (array_key_exists("CheckDevice",$param) and $param["CheckDevice"] !== null) {
            $this->CheckDevice = $param["CheckDevice"];
        }
    }
}
