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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaMiniRiskResult请求参数结构体
 *
 * @method integer getCaptchaType() 获取固定填值：9（滑块验证码）
 * @method void setCaptchaType(integer $CaptchaType) 设置固定填值：9（滑块验证码）
 * @method string getTicket() 获取验证码返回给用户的票据
 * @method void setTicket(string $Ticket) 设置验证码返回给用户的票据
 * @method string getUserIp() 获取用户操作来源的外网 IP
 * @method void setUserIp(string $UserIp) 设置用户操作来源的外网 IP
 * @method integer getCaptchaAppId() 获取验证码应用APPID
 * @method void setCaptchaAppId(integer $CaptchaAppId) 设置验证码应用APPID
 * @method string getAppSecretKey() 获取用于服务器端校验验证码票据的验证密钥，请妥善保密，请勿泄露给第三方
 * @method void setAppSecretKey(string $AppSecretKey) 设置用于服务器端校验验证码票据的验证密钥，请妥善保密，请勿泄露给第三方
 * @method integer getBusinessId() 获取业务 ID，网站或应用在多个业务中使用此服务，通过此 ID 区分统计数据
 * @method void setBusinessId(integer $BusinessId) 设置业务 ID，网站或应用在多个业务中使用此服务，通过此 ID 区分统计数据
 * @method integer getSceneId() 获取场景 ID，网站或应用的业务下有多个场景使用此服务，通过此 ID 区分统计数据
 * @method void setSceneId(integer $SceneId) 设置场景 ID，网站或应用的业务下有多个场景使用此服务，通过此 ID 区分统计数据
 * @method string getMacAddress() 获取mac 地址或设备唯一标识
 * @method void setMacAddress(string $MacAddress) 设置mac 地址或设备唯一标识
 * @method string getImei() 获取手机设备号
 * @method void setImei(string $Imei) 设置手机设备号
 * @method integer getSceneCode() 获取验证场景：1 活动防刷场景，2 登录保护场景，3 注册保护场景。根据需求选择场景参数。
 * @method void setSceneCode(integer $SceneCode) 设置验证场景：1 活动防刷场景，2 登录保护场景，3 注册保护场景。根据需求选择场景参数。
 * @method string getWeChatOpenId() 获取用户操作来源的微信开放账号
 * @method void setWeChatOpenId(string $WeChatOpenId) 设置用户操作来源的微信开放账号
 */
class DescribeCaptchaMiniRiskResultRequest extends AbstractModel
{
    /**
     * @var integer 固定填值：9（滑块验证码）
     */
    public $CaptchaType;

    /**
     * @var string 验证码返回给用户的票据
     */
    public $Ticket;

    /**
     * @var string 用户操作来源的外网 IP
     */
    public $UserIp;

    /**
     * @var integer 验证码应用APPID
     */
    public $CaptchaAppId;

    /**
     * @var string 用于服务器端校验验证码票据的验证密钥，请妥善保密，请勿泄露给第三方
     */
    public $AppSecretKey;

    /**
     * @var integer 业务 ID，网站或应用在多个业务中使用此服务，通过此 ID 区分统计数据
     */
    public $BusinessId;

    /**
     * @var integer 场景 ID，网站或应用的业务下有多个场景使用此服务，通过此 ID 区分统计数据
     */
    public $SceneId;

    /**
     * @var string mac 地址或设备唯一标识
     */
    public $MacAddress;

    /**
     * @var string 手机设备号
     */
    public $Imei;

    /**
     * @var integer 验证场景：1 活动防刷场景，2 登录保护场景，3 注册保护场景。根据需求选择场景参数。
     */
    public $SceneCode;

    /**
     * @var string 用户操作来源的微信开放账号
     */
    public $WeChatOpenId;

    /**
     * @param integer $CaptchaType 固定填值：9（滑块验证码）
     * @param string $Ticket 验证码返回给用户的票据
     * @param string $UserIp 用户操作来源的外网 IP
     * @param integer $CaptchaAppId 验证码应用APPID
     * @param string $AppSecretKey 用于服务器端校验验证码票据的验证密钥，请妥善保密，请勿泄露给第三方
     * @param integer $BusinessId 业务 ID，网站或应用在多个业务中使用此服务，通过此 ID 区分统计数据
     * @param integer $SceneId 场景 ID，网站或应用的业务下有多个场景使用此服务，通过此 ID 区分统计数据
     * @param string $MacAddress mac 地址或设备唯一标识
     * @param string $Imei 手机设备号
     * @param integer $SceneCode 验证场景：1 活动防刷场景，2 登录保护场景，3 注册保护场景。根据需求选择场景参数。
     * @param string $WeChatOpenId 用户操作来源的微信开放账号
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
        if (array_key_exists("CaptchaType",$param) and $param["CaptchaType"] !== null) {
            $this->CaptchaType = $param["CaptchaType"];
        }

        if (array_key_exists("Ticket",$param) and $param["Ticket"] !== null) {
            $this->Ticket = $param["Ticket"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("CaptchaAppId",$param) and $param["CaptchaAppId"] !== null) {
            $this->CaptchaAppId = $param["CaptchaAppId"];
        }

        if (array_key_exists("AppSecretKey",$param) and $param["AppSecretKey"] !== null) {
            $this->AppSecretKey = $param["AppSecretKey"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("SceneCode",$param) and $param["SceneCode"] !== null) {
            $this->SceneCode = $param["SceneCode"];
        }

        if (array_key_exists("WeChatOpenId",$param) and $param["WeChatOpenId"] !== null) {
            $this->WeChatOpenId = $param["WeChatOpenId"];
        }
    }
}
