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
 * 用户注册的APPID和应用名称对象
 *
 * @method integer getCaptchaAppId() 获取验证码应用ID
 * @method void setCaptchaAppId(integer $CaptchaAppId) 设置验证码应用ID
 * @method string getAppName() 获取注册应用名称
 * @method void setAppName(string $AppName) 设置注册应用名称
 * @method integer getTcAppId() 获取腾讯云APPID
 * @method void setTcAppId(integer $TcAppId) 设置腾讯云APPID
 * @method string getChannelInfo() 获取渠道信息
 * @method void setChannelInfo(string $ChannelInfo) 设置渠道信息
 */
class CaptchaUserAllAppId extends AbstractModel
{
    /**
     * @var integer 验证码应用ID
     */
    public $CaptchaAppId;

    /**
     * @var string 注册应用名称
     */
    public $AppName;

    /**
     * @var integer 腾讯云APPID
     */
    public $TcAppId;

    /**
     * @var string 渠道信息
     */
    public $ChannelInfo;

    /**
     * @param integer $CaptchaAppId 验证码应用ID
     * @param string $AppName 注册应用名称
     * @param integer $TcAppId 腾讯云APPID
     * @param string $ChannelInfo 渠道信息
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
        if (array_key_exists("CaptchaAppId",$param) and $param["CaptchaAppId"] !== null) {
            $this->CaptchaAppId = $param["CaptchaAppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("TcAppId",$param) and $param["TcAppId"] !== null) {
            $this->TcAppId = $param["TcAppId"];
        }

        if (array_key_exists("ChannelInfo",$param) and $param["ChannelInfo"] !== null) {
            $this->ChannelInfo = $param["ChannelInfo"];
        }
    }
}
