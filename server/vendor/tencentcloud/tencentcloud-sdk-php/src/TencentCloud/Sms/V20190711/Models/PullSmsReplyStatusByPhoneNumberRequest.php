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
 * PullSmsReplyStatusByPhoneNumber请求参数结构体
 *
 * @method integer getSendDateTime() 获取拉取起始时间，UNIX 时间戳（时间：秒）。
注：最大可拉取当前时期7天前的数据。
 * @method void setSendDateTime(integer $SendDateTime) 设置拉取起始时间，UNIX 时间戳（时间：秒）。
注：最大可拉取当前时期7天前的数据。
 * @method integer getOffset() 获取偏移量。
注：目前固定设置为0。
 * @method void setOffset(integer $Offset) 设置偏移量。
注：目前固定设置为0。
 * @method integer getLimit() 获取拉取最大条数，最多 100。
 * @method void setLimit(integer $Limit) 设置拉取最大条数，最多 100。
 * @method string getPhoneNumber() 获取下发目的手机号码，依据 e.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method void setPhoneNumber(string $PhoneNumber) 设置下发目的手机号码，依据 e.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method string getSmsSdkAppid() 获取短信SdkAppid在 [短信控制台](https://console.cloud.tencent.com/smsv2) 添加应用后生成的实际SdkAppid，例如1400006666。
 * @method void setSmsSdkAppid(string $SmsSdkAppid) 设置短信SdkAppid在 [短信控制台](https://console.cloud.tencent.com/smsv2) 添加应用后生成的实际SdkAppid，例如1400006666。
 * @method integer getEndDateTime() 获取拉取截止时间，UNIX 时间戳（时间：秒）。
 * @method void setEndDateTime(integer $EndDateTime) 设置拉取截止时间，UNIX 时间戳（时间：秒）。
 */
class PullSmsReplyStatusByPhoneNumberRequest extends AbstractModel
{
    /**
     * @var integer 拉取起始时间，UNIX 时间戳（时间：秒）。
注：最大可拉取当前时期7天前的数据。
     */
    public $SendDateTime;

    /**
     * @var integer 偏移量。
注：目前固定设置为0。
     */
    public $Offset;

    /**
     * @var integer 拉取最大条数，最多 100。
     */
    public $Limit;

    /**
     * @var string 下发目的手机号码，依据 e.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     */
    public $PhoneNumber;

    /**
     * @var string 短信SdkAppid在 [短信控制台](https://console.cloud.tencent.com/smsv2) 添加应用后生成的实际SdkAppid，例如1400006666。
     */
    public $SmsSdkAppid;

    /**
     * @var integer 拉取截止时间，UNIX 时间戳（时间：秒）。
     */
    public $EndDateTime;

    /**
     * @param integer $SendDateTime 拉取起始时间，UNIX 时间戳（时间：秒）。
注：最大可拉取当前时期7天前的数据。
     * @param integer $Offset 偏移量。
注：目前固定设置为0。
     * @param integer $Limit 拉取最大条数，最多 100。
     * @param string $PhoneNumber 下发目的手机号码，依据 e.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     * @param string $SmsSdkAppid 短信SdkAppid在 [短信控制台](https://console.cloud.tencent.com/smsv2) 添加应用后生成的实际SdkAppid，例如1400006666。
     * @param integer $EndDateTime 拉取截止时间，UNIX 时间戳（时间：秒）。
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
        if (array_key_exists("SendDateTime",$param) and $param["SendDateTime"] !== null) {
            $this->SendDateTime = $param["SendDateTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("SmsSdkAppid",$param) and $param["SmsSdkAppid"] !== null) {
            $this->SmsSdkAppid = $param["SmsSdkAppid"];
        }

        if (array_key_exists("EndDateTime",$param) and $param["EndDateTime"] !== null) {
            $this->EndDateTime = $param["EndDateTime"];
        }
    }
}
