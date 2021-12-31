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
 * 微信账号信息。
 *
 * @method string getWeChatOpenId() 获取微信的OpenID/UnionID 。
 * @method void setWeChatOpenId(string $WeChatOpenId) 设置微信的OpenID/UnionID 。
 * @method integer getWeChatSubType() 获取微信开放账号类型：
1：微信公众号/微信第三方登录。
2：微信小程序。
 * @method void setWeChatSubType(integer $WeChatSubType) 设置微信开放账号类型：
1：微信公众号/微信第三方登录。
2：微信小程序。
 * @method string getRandStr() 获取随机串。如果WeChatSubType是2，该字段必填。Token签名随机数，建议16个字符。
 * @method void setRandStr(string $RandStr) 设置随机串。如果WeChatSubType是2，该字段必填。Token签名随机数，建议16个字符。
 * @method string getWeChatAccessToken() 获取如果WeChatSubType是1，填入授权的access_token（注意：不是普通access_token，详情请参阅官方说明文档。获取网页版本的access_token时，scope字段必需填写snsapi_userinfo。
如果WeChatSubType是2，填入以session_key为密钥签名随机数RandStr（hmac_sha256签名算法）得到的字符串。
 * @method void setWeChatAccessToken(string $WeChatAccessToken) 设置如果WeChatSubType是1，填入授权的access_token（注意：不是普通access_token，详情请参阅官方说明文档。获取网页版本的access_token时，scope字段必需填写snsapi_userinfo。
如果WeChatSubType是2，填入以session_key为密钥签名随机数RandStr（hmac_sha256签名算法）得到的字符串。
 * @method string getAssociateAccount() 获取用于标识微信用户登录后所关联业务自身的账号ID。
 * @method void setAssociateAccount(string $AssociateAccount) 设置用于标识微信用户登录后所关联业务自身的账号ID。
 * @method string getMobilePhone() 获取账号绑定的手机号。
 * @method void setMobilePhone(string $MobilePhone) 设置账号绑定的手机号。
 * @method string getDeviceId() 获取用户设备号。
 * @method void setDeviceId(string $DeviceId) 设置用户设备号。
 */
class WeChatAccountInfo extends AbstractModel
{
    /**
     * @var string 微信的OpenID/UnionID 。
     */
    public $WeChatOpenId;

    /**
     * @var integer 微信开放账号类型：
1：微信公众号/微信第三方登录。
2：微信小程序。
     */
    public $WeChatSubType;

    /**
     * @var string 随机串。如果WeChatSubType是2，该字段必填。Token签名随机数，建议16个字符。
     */
    public $RandStr;

    /**
     * @var string 如果WeChatSubType是1，填入授权的access_token（注意：不是普通access_token，详情请参阅官方说明文档。获取网页版本的access_token时，scope字段必需填写snsapi_userinfo。
如果WeChatSubType是2，填入以session_key为密钥签名随机数RandStr（hmac_sha256签名算法）得到的字符串。
     */
    public $WeChatAccessToken;

    /**
     * @var string 用于标识微信用户登录后所关联业务自身的账号ID。
     */
    public $AssociateAccount;

    /**
     * @var string 账号绑定的手机号。
     */
    public $MobilePhone;

    /**
     * @var string 用户设备号。
     */
    public $DeviceId;

    /**
     * @param string $WeChatOpenId 微信的OpenID/UnionID 。
     * @param integer $WeChatSubType 微信开放账号类型：
1：微信公众号/微信第三方登录。
2：微信小程序。
     * @param string $RandStr 随机串。如果WeChatSubType是2，该字段必填。Token签名随机数，建议16个字符。
     * @param string $WeChatAccessToken 如果WeChatSubType是1，填入授权的access_token（注意：不是普通access_token，详情请参阅官方说明文档。获取网页版本的access_token时，scope字段必需填写snsapi_userinfo。
如果WeChatSubType是2，填入以session_key为密钥签名随机数RandStr（hmac_sha256签名算法）得到的字符串。
     * @param string $AssociateAccount 用于标识微信用户登录后所关联业务自身的账号ID。
     * @param string $MobilePhone 账号绑定的手机号。
     * @param string $DeviceId 用户设备号。
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
        if (array_key_exists("WeChatOpenId",$param) and $param["WeChatOpenId"] !== null) {
            $this->WeChatOpenId = $param["WeChatOpenId"];
        }

        if (array_key_exists("WeChatSubType",$param) and $param["WeChatSubType"] !== null) {
            $this->WeChatSubType = $param["WeChatSubType"];
        }

        if (array_key_exists("RandStr",$param) and $param["RandStr"] !== null) {
            $this->RandStr = $param["RandStr"];
        }

        if (array_key_exists("WeChatAccessToken",$param) and $param["WeChatAccessToken"] !== null) {
            $this->WeChatAccessToken = $param["WeChatAccessToken"];
        }

        if (array_key_exists("AssociateAccount",$param) and $param["AssociateAccount"] !== null) {
            $this->AssociateAccount = $param["AssociateAccount"];
        }

        if (array_key_exists("MobilePhone",$param) and $param["MobilePhone"] !== null) {
            $this->MobilePhone = $param["MobilePhone"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}
