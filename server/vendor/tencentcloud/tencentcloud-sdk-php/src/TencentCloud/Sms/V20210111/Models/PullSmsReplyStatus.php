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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信回复状态
 *
 * @method string getExtendCode() 获取短信码号扩展号，默认未开通，如需开通请联系 [sms helper](https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81)。
 * @method void setExtendCode(string $ExtendCode) 设置短信码号扩展号，默认未开通，如需开通请联系 [sms helper](https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81)。
 * @method string getCountryCode() 获取国家（或地区）码。
 * @method void setCountryCode(string $CountryCode) 设置国家（或地区）码。
 * @method string getPhoneNumber() 获取手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method string getSignName() 获取短信签名名称。
 * @method void setSignName(string $SignName) 设置短信签名名称。
 * @method string getReplyContent() 获取用户回复的内容。
 * @method void setReplyContent(string $ReplyContent) 设置用户回复的内容。
 * @method integer getReplyTime() 获取回复时间，UNIX 时间戳（单位：秒）。
 * @method void setReplyTime(integer $ReplyTime) 设置回复时间，UNIX 时间戳（单位：秒）。
 * @method string getSubscriberNumber() 获取用户号码，普通格式，示例如：13711112222。
 * @method void setSubscriberNumber(string $SubscriberNumber) 设置用户号码，普通格式，示例如：13711112222。
 */
class PullSmsReplyStatus extends AbstractModel
{
    /**
     * @var string 短信码号扩展号，默认未开通，如需开通请联系 [sms helper](https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81)。
     */
    public $ExtendCode;

    /**
     * @var string 国家（或地区）码。
     */
    public $CountryCode;

    /**
     * @var string 手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     */
    public $PhoneNumber;

    /**
     * @var string 短信签名名称。
     */
    public $SignName;

    /**
     * @var string 用户回复的内容。
     */
    public $ReplyContent;

    /**
     * @var integer 回复时间，UNIX 时间戳（单位：秒）。
     */
    public $ReplyTime;

    /**
     * @var string 用户号码，普通格式，示例如：13711112222。
     */
    public $SubscriberNumber;

    /**
     * @param string $ExtendCode 短信码号扩展号，默认未开通，如需开通请联系 [sms helper](https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81)。
     * @param string $CountryCode 国家（或地区）码。
     * @param string $PhoneNumber 手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     * @param string $SignName 短信签名名称。
     * @param string $ReplyContent 用户回复的内容。
     * @param integer $ReplyTime 回复时间，UNIX 时间戳（单位：秒）。
     * @param string $SubscriberNumber 用户号码，普通格式，示例如：13711112222。
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
        if (array_key_exists("ExtendCode",$param) and $param["ExtendCode"] !== null) {
            $this->ExtendCode = $param["ExtendCode"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }

        if (array_key_exists("ReplyContent",$param) and $param["ReplyContent"] !== null) {
            $this->ReplyContent = $param["ReplyContent"];
        }

        if (array_key_exists("ReplyTime",$param) and $param["ReplyTime"] !== null) {
            $this->ReplyTime = $param["ReplyTime"];
        }

        if (array_key_exists("SubscriberNumber",$param) and $param["SubscriberNumber"] !== null) {
            $this->SubscriberNumber = $param["SubscriberNumber"];
        }
    }
}
