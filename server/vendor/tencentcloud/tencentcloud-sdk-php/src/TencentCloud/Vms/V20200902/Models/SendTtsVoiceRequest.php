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
namespace TencentCloud\Vms\V20200902\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendTtsVoice请求参数结构体
 *
 * @method string getTemplateId() 获取模板 ID，在控制台审核通过的模板 ID。
 * @method void setTemplateId(string $TemplateId) 设置模板 ID，在控制台审核通过的模板 ID。
 * @method string getCalledNumber() 获取被叫手机号码，采用 e.164 标准，格式为+[国家或地区码][用户号码]。
例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method void setCalledNumber(string $CalledNumber) 设置被叫手机号码，采用 e.164 标准，格式为+[国家或地区码][用户号码]。
例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method string getVoiceSdkAppid() 获取在[语音控制台](https://console.cloud.tencent.com/vms)添加应用后生成的实际SdkAppid，示例如1400006666。
 * @method void setVoiceSdkAppid(string $VoiceSdkAppid) 设置在[语音控制台](https://console.cloud.tencent.com/vms)添加应用后生成的实际SdkAppid，示例如1400006666。
 * @method array getTemplateParamSet() 获取模板参数，若模板没有参数，请提供为空数组。
注：语音消息的内容长度不超过350字。
 * @method void setTemplateParamSet(array $TemplateParamSet) 设置模板参数，若模板没有参数，请提供为空数组。
注：语音消息的内容长度不超过350字。
 * @method integer getPlayTimes() 获取播放次数，可选，最多3次，默认2次。
 * @method void setPlayTimes(integer $PlayTimes) 设置播放次数，可选，最多3次，默认2次。
 * @method string getSessionContext() 获取用户的 session 内容，腾讯 server 回包中会原样返回。
 * @method void setSessionContext(string $SessionContext) 设置用户的 session 内容，腾讯 server 回包中会原样返回。
 */
class SendTtsVoiceRequest extends AbstractModel
{
    /**
     * @var string 模板 ID，在控制台审核通过的模板 ID。
     */
    public $TemplateId;

    /**
     * @var string 被叫手机号码，采用 e.164 标准，格式为+[国家或地区码][用户号码]。
例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     */
    public $CalledNumber;

    /**
     * @var string 在[语音控制台](https://console.cloud.tencent.com/vms)添加应用后生成的实际SdkAppid，示例如1400006666。
     */
    public $VoiceSdkAppid;

    /**
     * @var array 模板参数，若模板没有参数，请提供为空数组。
注：语音消息的内容长度不超过350字。
     */
    public $TemplateParamSet;

    /**
     * @var integer 播放次数，可选，最多3次，默认2次。
     */
    public $PlayTimes;

    /**
     * @var string 用户的 session 内容，腾讯 server 回包中会原样返回。
     */
    public $SessionContext;

    /**
     * @param string $TemplateId 模板 ID，在控制台审核通过的模板 ID。
     * @param string $CalledNumber 被叫手机号码，采用 e.164 标准，格式为+[国家或地区码][用户号码]。
例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     * @param string $VoiceSdkAppid 在[语音控制台](https://console.cloud.tencent.com/vms)添加应用后生成的实际SdkAppid，示例如1400006666。
     * @param array $TemplateParamSet 模板参数，若模板没有参数，请提供为空数组。
注：语音消息的内容长度不超过350字。
     * @param integer $PlayTimes 播放次数，可选，最多3次，默认2次。
     * @param string $SessionContext 用户的 session 内容，腾讯 server 回包中会原样返回。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("CalledNumber",$param) and $param["CalledNumber"] !== null) {
            $this->CalledNumber = $param["CalledNumber"];
        }

        if (array_key_exists("VoiceSdkAppid",$param) and $param["VoiceSdkAppid"] !== null) {
            $this->VoiceSdkAppid = $param["VoiceSdkAppid"];
        }

        if (array_key_exists("TemplateParamSet",$param) and $param["TemplateParamSet"] !== null) {
            $this->TemplateParamSet = $param["TemplateParamSet"];
        }

        if (array_key_exists("PlayTimes",$param) and $param["PlayTimes"] !== null) {
            $this->PlayTimes = $param["PlayTimes"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
