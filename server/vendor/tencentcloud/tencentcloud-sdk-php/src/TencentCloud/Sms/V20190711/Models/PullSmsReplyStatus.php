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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信回复状态
 *
 * @method string getExtendCode() 获取短信码号扩展号，默认未开通，如需开通请联系 [sms helper](https://cloud.tencent.com/document/product/382/3773)。
 * @method void setExtendCode(string $ExtendCode) 设置短信码号扩展号，默认未开通，如需开通请联系 [sms helper](https://cloud.tencent.com/document/product/382/3773)。
 * @method string getNationCode() 获取国家（或地区）码。
 * @method void setNationCode(string $NationCode) 设置国家（或地区）码。
 * @method string getPhoneNumber() 获取手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method string getSign() 获取短信签名。
 * @method void setSign(string $Sign) 设置短信签名。
 * @method string getReplyContent() 获取用户回复的内容。
 * @method void setReplyContent(string $ReplyContent) 设置用户回复的内容。
 * @method string getReplyTime() 获取回复时间（例如：2019-10-08 17:18:37）。
 * @method void setReplyTime(string $ReplyTime) 设置回复时间（例如：2019-10-08 17:18:37）。
 * @method integer getReplyUnixTime() 获取回复时间，UNIX 时间戳（单位：秒）。
 * @method void setReplyUnixTime(integer $ReplyUnixTime) 设置回复时间，UNIX 时间戳（单位：秒）。
 */
class PullSmsReplyStatus extends AbstractModel
{
    /**
     * @var string 短信码号扩展号，默认未开通，如需开通请联系 [sms helper](https://cloud.tencent.com/document/product/382/3773)。
     */
    public $ExtendCode;

    /**
     * @var string 国家（或地区）码。
     */
    public $NationCode;

    /**
     * @var string 手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     */
    public $PhoneNumber;

    /**
     * @var string 短信签名。
     */
    public $Sign;

    /**
     * @var string 用户回复的内容。
     */
    public $ReplyContent;

    /**
     * @var string 回复时间（例如：2019-10-08 17:18:37）。
     */
    public $ReplyTime;

    /**
     * @var integer 回复时间，UNIX 时间戳（单位：秒）。
     */
    public $ReplyUnixTime;

    /**
     * @param string $ExtendCode 短信码号扩展号，默认未开通，如需开通请联系 [sms helper](https://cloud.tencent.com/document/product/382/3773)。
     * @param string $NationCode 国家（或地区）码。
     * @param string $PhoneNumber 手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     * @param string $Sign 短信签名。
     * @param string $ReplyContent 用户回复的内容。
     * @param string $ReplyTime 回复时间（例如：2019-10-08 17:18:37）。
     * @param integer $ReplyUnixTime 回复时间，UNIX 时间戳（单位：秒）。
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

        if (array_key_exists("NationCode",$param) and $param["NationCode"] !== null) {
            $this->NationCode = $param["NationCode"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("ReplyContent",$param) and $param["ReplyContent"] !== null) {
            $this->ReplyContent = $param["ReplyContent"];
        }

        if (array_key_exists("ReplyTime",$param) and $param["ReplyTime"] !== null) {
            $this->ReplyTime = $param["ReplyTime"];
        }

        if (array_key_exists("ReplyUnixTime",$param) and $param["ReplyUnixTime"] !== null) {
            $this->ReplyUnixTime = $param["ReplyUnixTime"];
        }
    }
}
