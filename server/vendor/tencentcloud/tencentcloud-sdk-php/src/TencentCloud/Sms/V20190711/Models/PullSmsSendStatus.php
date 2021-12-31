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
 * 短信的下发状态详细信息
 *
 * @method string getUserReceiveTime() 获取用户实际接收到短信的时间。
 * @method void setUserReceiveTime(string $UserReceiveTime) 设置用户实际接收到短信的时间。
 * @method integer getUserReceiveUnixTime() 获取用户实际接收到短信的时间，UNIX 时间戳（单位：秒）。
 * @method void setUserReceiveUnixTime(integer $UserReceiveUnixTime) 设置用户实际接收到短信的时间，UNIX 时间戳（单位：秒）。
 * @method string getNationCode() 获取国家（或地区）码。
 * @method void setNationCode(string $NationCode) 设置国家（或地区）码。
 * @method string getPurePhoneNumber() 获取手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method void setPurePhoneNumber(string $PurePhoneNumber) 设置手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method string getPhoneNumber() 获取手机号码，普通格式，示例如：13711112222。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码，普通格式，示例如：13711112222。
 * @method string getSerialNo() 获取本次发送标识 ID。
 * @method void setSerialNo(string $SerialNo) 设置本次发送标识 ID。
 * @method string getReportStatus() 获取实际是否收到短信接收状态，SUCCESS（成功）、FAIL（失败）。
 * @method void setReportStatus(string $ReportStatus) 设置实际是否收到短信接收状态，SUCCESS（成功）、FAIL（失败）。
 * @method string getDescription() 获取用户接收短信状态描述。
 * @method void setDescription(string $Description) 设置用户接收短信状态描述。
 */
class PullSmsSendStatus extends AbstractModel
{
    /**
     * @var string 用户实际接收到短信的时间。
     */
    public $UserReceiveTime;

    /**
     * @var integer 用户实际接收到短信的时间，UNIX 时间戳（单位：秒）。
     */
    public $UserReceiveUnixTime;

    /**
     * @var string 国家（或地区）码。
     */
    public $NationCode;

    /**
     * @var string 手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     */
    public $PurePhoneNumber;

    /**
     * @var string 手机号码，普通格式，示例如：13711112222。
     */
    public $PhoneNumber;

    /**
     * @var string 本次发送标识 ID。
     */
    public $SerialNo;

    /**
     * @var string 实际是否收到短信接收状态，SUCCESS（成功）、FAIL（失败）。
     */
    public $ReportStatus;

    /**
     * @var string 用户接收短信状态描述。
     */
    public $Description;

    /**
     * @param string $UserReceiveTime 用户实际接收到短信的时间。
     * @param integer $UserReceiveUnixTime 用户实际接收到短信的时间，UNIX 时间戳（单位：秒）。
     * @param string $NationCode 国家（或地区）码。
     * @param string $PurePhoneNumber 手机号码,e.164标准，+[国家或地区码][手机号] ，示例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     * @param string $PhoneNumber 手机号码，普通格式，示例如：13711112222。
     * @param string $SerialNo 本次发送标识 ID。
     * @param string $ReportStatus 实际是否收到短信接收状态，SUCCESS（成功）、FAIL（失败）。
     * @param string $Description 用户接收短信状态描述。
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
        if (array_key_exists("UserReceiveTime",$param) and $param["UserReceiveTime"] !== null) {
            $this->UserReceiveTime = $param["UserReceiveTime"];
        }

        if (array_key_exists("UserReceiveUnixTime",$param) and $param["UserReceiveUnixTime"] !== null) {
            $this->UserReceiveUnixTime = $param["UserReceiveUnixTime"];
        }

        if (array_key_exists("NationCode",$param) and $param["NationCode"] !== null) {
            $this->NationCode = $param["NationCode"];
        }

        if (array_key_exists("PurePhoneNumber",$param) and $param["PurePhoneNumber"] !== null) {
            $this->PurePhoneNumber = $param["PurePhoneNumber"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("ReportStatus",$param) and $param["ReportStatus"] !== null) {
            $this->ReportStatus = $param["ReportStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
