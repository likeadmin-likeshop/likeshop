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
 * UpdateCaptchaAppIdInfo请求参数结构体
 *
 * @method integer getCaptchaAppId() 获取验证码应用ID
 * @method void setCaptchaAppId(integer $CaptchaAppId) 设置验证码应用ID
 * @method string getAppName() 获取应用名
 * @method void setAppName(string $AppName) 设置应用名
 * @method string getDomainLimit() 获取域名限制
 * @method void setDomainLimit(string $DomainLimit) 设置域名限制
 * @method integer getSceneType() 获取场景类型
 * @method void setSceneType(integer $SceneType) 设置场景类型
 * @method integer getCapType() 获取验证码类型
 * @method void setCapType(integer $CapType) 设置验证码类型
 * @method integer getEvilInterceptGrade() 获取风险级别
 * @method void setEvilInterceptGrade(integer $EvilInterceptGrade) 设置风险级别
 * @method integer getSmartVerify() 获取智能检测
 * @method void setSmartVerify(integer $SmartVerify) 设置智能检测
 * @method integer getSmartEngine() 获取开启智能引擎
 * @method void setSmartEngine(integer $SmartEngine) 设置开启智能引擎
 * @method string getSchemeColor() 获取web风格
 * @method void setSchemeColor(string $SchemeColor) 设置web风格
 * @method integer getCaptchaLanguage() 获取语言
 * @method void setCaptchaLanguage(integer $CaptchaLanguage) 设置语言
 * @method string getMailAlarm() 获取告警邮箱
 * @method void setMailAlarm(string $MailAlarm) 设置告警邮箱
 * @method integer getTopFullScreen() 获取是否全屏
 * @method void setTopFullScreen(integer $TopFullScreen) 设置是否全屏
 * @method integer getTrafficThreshold() 获取流量限制
 * @method void setTrafficThreshold(integer $TrafficThreshold) 设置流量限制
 */
class UpdateCaptchaAppIdInfoRequest extends AbstractModel
{
    /**
     * @var integer 验证码应用ID
     */
    public $CaptchaAppId;

    /**
     * @var string 应用名
     */
    public $AppName;

    /**
     * @var string 域名限制
     */
    public $DomainLimit;

    /**
     * @var integer 场景类型
     */
    public $SceneType;

    /**
     * @var integer 验证码类型
     */
    public $CapType;

    /**
     * @var integer 风险级别
     */
    public $EvilInterceptGrade;

    /**
     * @var integer 智能检测
     */
    public $SmartVerify;

    /**
     * @var integer 开启智能引擎
     */
    public $SmartEngine;

    /**
     * @var string web风格
     */
    public $SchemeColor;

    /**
     * @var integer 语言
     */
    public $CaptchaLanguage;

    /**
     * @var string 告警邮箱
     */
    public $MailAlarm;

    /**
     * @var integer 是否全屏
     */
    public $TopFullScreen;

    /**
     * @var integer 流量限制
     */
    public $TrafficThreshold;

    /**
     * @param integer $CaptchaAppId 验证码应用ID
     * @param string $AppName 应用名
     * @param string $DomainLimit 域名限制
     * @param integer $SceneType 场景类型
     * @param integer $CapType 验证码类型
     * @param integer $EvilInterceptGrade 风险级别
     * @param integer $SmartVerify 智能检测
     * @param integer $SmartEngine 开启智能引擎
     * @param string $SchemeColor web风格
     * @param integer $CaptchaLanguage 语言
     * @param string $MailAlarm 告警邮箱
     * @param integer $TopFullScreen 是否全屏
     * @param integer $TrafficThreshold 流量限制
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

        if (array_key_exists("DomainLimit",$param) and $param["DomainLimit"] !== null) {
            $this->DomainLimit = $param["DomainLimit"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("CapType",$param) and $param["CapType"] !== null) {
            $this->CapType = $param["CapType"];
        }

        if (array_key_exists("EvilInterceptGrade",$param) and $param["EvilInterceptGrade"] !== null) {
            $this->EvilInterceptGrade = $param["EvilInterceptGrade"];
        }

        if (array_key_exists("SmartVerify",$param) and $param["SmartVerify"] !== null) {
            $this->SmartVerify = $param["SmartVerify"];
        }

        if (array_key_exists("SmartEngine",$param) and $param["SmartEngine"] !== null) {
            $this->SmartEngine = $param["SmartEngine"];
        }

        if (array_key_exists("SchemeColor",$param) and $param["SchemeColor"] !== null) {
            $this->SchemeColor = $param["SchemeColor"];
        }

        if (array_key_exists("CaptchaLanguage",$param) and $param["CaptchaLanguage"] !== null) {
            $this->CaptchaLanguage = $param["CaptchaLanguage"];
        }

        if (array_key_exists("MailAlarm",$param) and $param["MailAlarm"] !== null) {
            $this->MailAlarm = $param["MailAlarm"];
        }

        if (array_key_exists("TopFullScreen",$param) and $param["TopFullScreen"] !== null) {
            $this->TopFullScreen = $param["TopFullScreen"];
        }

        if (array_key_exists("TrafficThreshold",$param) and $param["TrafficThreshold"] !== null) {
            $this->TrafficThreshold = $param["TrafficThreshold"];
        }
    }
}
