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
 * 发送短信状态
 *
 * @method string getSerialNo() 获取发送流水号。
 * @method void setSerialNo(string $SerialNo) 设置发送流水号。
 * @method string getPhoneNumber() 获取手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method integer getFee() 获取计费条数，计费规则请查询 [计费策略](https://cloud.tencent.com/document/product/382/36135)。
 * @method void setFee(integer $Fee) 设置计费条数，计费规则请查询 [计费策略](https://cloud.tencent.com/document/product/382/36135)。
 * @method string getSessionContext() 获取用户Session内容。
 * @method void setSessionContext(string $SessionContext) 设置用户Session内容。
 * @method string getCode() 获取短信请求错误码，具体含义请参考错误码。
 * @method void setCode(string $Code) 设置短信请求错误码，具体含义请参考错误码。
 * @method string getMessage() 获取短信请求错误码描述。
 * @method void setMessage(string $Message) 设置短信请求错误码描述。
 * @method string getIsoCode() 获取国家码或地区码，例如CN,US等，对于未识别出国家码或者地区码，默认返回DEF,具体支持列表请参考国际/港澳台计费总览。
 * @method void setIsoCode(string $IsoCode) 设置国家码或地区码，例如CN,US等，对于未识别出国家码或者地区码，默认返回DEF,具体支持列表请参考国际/港澳台计费总览。
 */
class SendStatus extends AbstractModel
{
    /**
     * @var string 发送流水号。
     */
    public $SerialNo;

    /**
     * @var string 手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     */
    public $PhoneNumber;

    /**
     * @var integer 计费条数，计费规则请查询 [计费策略](https://cloud.tencent.com/document/product/382/36135)。
     */
    public $Fee;

    /**
     * @var string 用户Session内容。
     */
    public $SessionContext;

    /**
     * @var string 短信请求错误码，具体含义请参考错误码。
     */
    public $Code;

    /**
     * @var string 短信请求错误码描述。
     */
    public $Message;

    /**
     * @var string 国家码或地区码，例如CN,US等，对于未识别出国家码或者地区码，默认返回DEF,具体支持列表请参考国际/港澳台计费总览。
     */
    public $IsoCode;

    /**
     * @param string $SerialNo 发送流水号。
     * @param string $PhoneNumber 手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     * @param integer $Fee 计费条数，计费规则请查询 [计费策略](https://cloud.tencent.com/document/product/382/36135)。
     * @param string $SessionContext 用户Session内容。
     * @param string $Code 短信请求错误码，具体含义请参考错误码。
     * @param string $Message 短信请求错误码描述。
     * @param string $IsoCode 国家码或地区码，例如CN,US等，对于未识别出国家码或者地区码，默认返回DEF,具体支持列表请参考国际/港澳台计费总览。
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
        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Fee",$param) and $param["Fee"] !== null) {
            $this->Fee = $param["Fee"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("IsoCode",$param) and $param["IsoCode"] !== null) {
            $this->IsoCode = $param["IsoCode"];
        }
    }
}
