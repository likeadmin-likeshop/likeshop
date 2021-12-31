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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendSms请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method array getPhone() 获取手机号码,采用 e.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号且要求全为境内手机号,如:+8613800138000
 * @method void setPhone(array $Phone) 设置手机号码,采用 e.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号且要求全为境内手机号,如:+8613800138000
 * @method string getTemplateId() 获取短信模板id(推荐使用模板id发送,使用内容发送时模板id留空)
 * @method void setTemplateId(string $TemplateId) 设置短信模板id(推荐使用模板id发送,使用内容发送时模板id留空)
 * @method array getParams() 获取模板参数，若无模板参数，则设置为空。
 * @method void setParams(array $Params) 设置模板参数，若无模板参数，则设置为空。
 * @method string getSign() 获取短信签名内容，使用 UTF-8 编码，必须填写已审核通过的签名。注：国内短信为必填参数。
 * @method void setSign(string $Sign) 设置短信签名内容，使用 UTF-8 编码，必须填写已审核通过的签名。注：国内短信为必填参数。
 * @method string getSenderId() 获取国际/港澳台短信 senderid，国内短信填空
 * @method void setSenderId(string $SenderId) 设置国际/港澳台短信 senderid，国内短信填空
 * @method integer getSmsType() 获取短信类型：{0:普通短信，1:营销短信}，使用内容发送时必填
 * @method void setSmsType(integer $SmsType) 设置短信类型：{0:普通短信，1:营销短信}，使用内容发送时必填
 * @method integer getInternational() 获取是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。使用内容发送时必填
 * @method void setInternational(integer $International) 设置是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。使用内容发送时必填
 * @method string getContent() 获取发送使用的模板内容,如果有占位符,此处也包括占位符,占位符的实际内容通过Params参数传递,使用模板id发送时此字段为空
 * @method void setContent(string $Content) 设置发送使用的模板内容,如果有占位符,此处也包括占位符,占位符的实际内容通过Params参数传递,使用模板id发送时此字段为空
 */
class SendSmsRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var array 手机号码,采用 e.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号且要求全为境内手机号,如:+8613800138000
     */
    public $Phone;

    /**
     * @var string 短信模板id(推荐使用模板id发送,使用内容发送时模板id留空)
     */
    public $TemplateId;

    /**
     * @var array 模板参数，若无模板参数，则设置为空。
     */
    public $Params;

    /**
     * @var string 短信签名内容，使用 UTF-8 编码，必须填写已审核通过的签名。注：国内短信为必填参数。
     */
    public $Sign;

    /**
     * @var string 国际/港澳台短信 senderid，国内短信填空
     */
    public $SenderId;

    /**
     * @var integer 短信类型：{0:普通短信，1:营销短信}，使用内容发送时必填
     */
    public $SmsType;

    /**
     * @var integer 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。使用内容发送时必填
     */
    public $International;

    /**
     * @var string 发送使用的模板内容,如果有占位符,此处也包括占位符,占位符的实际内容通过Params参数传递,使用模板id发送时此字段为空
     */
    public $Content;

    /**
     * @param string $License 商户证书
     * @param array $Phone 手机号码,采用 e.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号且要求全为境内手机号,如:+8613800138000
     * @param string $TemplateId 短信模板id(推荐使用模板id发送,使用内容发送时模板id留空)
     * @param array $Params 模板参数，若无模板参数，则设置为空。
     * @param string $Sign 短信签名内容，使用 UTF-8 编码，必须填写已审核通过的签名。注：国内短信为必填参数。
     * @param string $SenderId 国际/港澳台短信 senderid，国内短信填空
     * @param integer $SmsType 短信类型：{0:普通短信，1:营销短信}，使用内容发送时必填
     * @param integer $International 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。使用内容发送时必填
     * @param string $Content 发送使用的模板内容,如果有占位符,此处也包括占位符,占位符的实际内容通过Params参数传递,使用模板id发送时此字段为空
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
        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("SenderId",$param) and $param["SenderId"] !== null) {
            $this->SenderId = $param["SenderId"];
        }

        if (array_key_exists("SmsType",$param) and $param["SmsType"] !== null) {
            $this->SmsType = $param["SmsType"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
