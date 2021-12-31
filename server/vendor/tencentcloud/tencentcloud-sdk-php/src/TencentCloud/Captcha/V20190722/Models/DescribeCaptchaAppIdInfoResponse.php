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
 * DescribeCaptchaAppIdInfo返回参数结构体
 *
 * @method string getSchemeColor() 获取界面风格
 * @method void setSchemeColor(string $SchemeColor) 设置界面风格
 * @method integer getLanguage() 获取语言
 * @method void setLanguage(integer $Language) 设置语言
 * @method integer getSceneType() 获取场景
 * @method void setSceneType(integer $SceneType) 设置场景
 * @method integer getEvilInterceptGrade() 获取防控风险等级
 * @method void setEvilInterceptGrade(integer $EvilInterceptGrade) 设置防控风险等级
 * @method integer getSmartVerify() 获取智能验证
 * @method void setSmartVerify(integer $SmartVerify) 设置智能验证
 * @method integer getSmartEngine() 获取智能引擎
 * @method void setSmartEngine(integer $SmartEngine) 设置智能引擎
 * @method integer getCapType() 获取验证码类型
 * @method void setCapType(integer $CapType) 设置验证码类型
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method string getDomainLimit() 获取域名限制
 * @method void setDomainLimit(string $DomainLimit) 设置域名限制
 * @method array getMailAlarm() 获取邮件告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMailAlarm(array $MailAlarm) 设置邮件告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTrafficThreshold() 获取流量控制
 * @method void setTrafficThreshold(integer $TrafficThreshold) 设置流量控制
 * @method string getEncryptKey() 获取加密key
 * @method void setEncryptKey(string $EncryptKey) 设置加密key
 * @method integer getTopFullScreen() 获取是否全屏
 * @method void setTopFullScreen(integer $TopFullScreen) 设置是否全屏
 * @method integer getCaptchaCode() 获取成功返回0 其它失败
 * @method void setCaptchaCode(integer $CaptchaCode) 设置成功返回0 其它失败
 * @method string getCaptchaMsg() 获取返回操作信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCaptchaMsg(string $CaptchaMsg) 设置返回操作信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCaptchaAppIdInfoResponse extends AbstractModel
{
    /**
     * @var string 界面风格
     */
    public $SchemeColor;

    /**
     * @var integer 语言
     */
    public $Language;

    /**
     * @var integer 场景
     */
    public $SceneType;

    /**
     * @var integer 防控风险等级
     */
    public $EvilInterceptGrade;

    /**
     * @var integer 智能验证
     */
    public $SmartVerify;

    /**
     * @var integer 智能引擎
     */
    public $SmartEngine;

    /**
     * @var integer 验证码类型
     */
    public $CapType;

    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var string 域名限制
     */
    public $DomainLimit;

    /**
     * @var array 邮件告警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MailAlarm;

    /**
     * @var integer 流量控制
     */
    public $TrafficThreshold;

    /**
     * @var string 加密key
     */
    public $EncryptKey;

    /**
     * @var integer 是否全屏
     */
    public $TopFullScreen;

    /**
     * @var integer 成功返回0 其它失败
     */
    public $CaptchaCode;

    /**
     * @var string 返回操作信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CaptchaMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SchemeColor 界面风格
     * @param integer $Language 语言
     * @param integer $SceneType 场景
     * @param integer $EvilInterceptGrade 防控风险等级
     * @param integer $SmartVerify 智能验证
     * @param integer $SmartEngine 智能引擎
     * @param integer $CapType 验证码类型
     * @param string $AppName 应用名称
     * @param string $DomainLimit 域名限制
     * @param array $MailAlarm 邮件告警
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TrafficThreshold 流量控制
     * @param string $EncryptKey 加密key
     * @param integer $TopFullScreen 是否全屏
     * @param integer $CaptchaCode 成功返回0 其它失败
     * @param string $CaptchaMsg 返回操作信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SchemeColor",$param) and $param["SchemeColor"] !== null) {
            $this->SchemeColor = $param["SchemeColor"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
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

        if (array_key_exists("CapType",$param) and $param["CapType"] !== null) {
            $this->CapType = $param["CapType"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainLimit",$param) and $param["DomainLimit"] !== null) {
            $this->DomainLimit = $param["DomainLimit"];
        }

        if (array_key_exists("MailAlarm",$param) and $param["MailAlarm"] !== null) {
            $this->MailAlarm = $param["MailAlarm"];
        }

        if (array_key_exists("TrafficThreshold",$param) and $param["TrafficThreshold"] !== null) {
            $this->TrafficThreshold = $param["TrafficThreshold"];
        }

        if (array_key_exists("EncryptKey",$param) and $param["EncryptKey"] !== null) {
            $this->EncryptKey = $param["EncryptKey"];
        }

        if (array_key_exists("TopFullScreen",$param) and $param["TopFullScreen"] !== null) {
            $this->TopFullScreen = $param["TopFullScreen"];
        }

        if (array_key_exists("CaptchaCode",$param) and $param["CaptchaCode"] !== null) {
            $this->CaptchaCode = $param["CaptchaCode"];
        }

        if (array_key_exists("CaptchaMsg",$param) and $param["CaptchaMsg"] !== null) {
            $this->CaptchaMsg = $param["CaptchaMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
