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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyPayerInfo请求参数结构体
 *
 * @method string getPayerId() 获取付款人ID
 * @method void setPayerId(string $PayerId) 设置付款人ID
 * @method string getPayerType() 获取付款人类型 (个人: INDIVIDUAL, 企业: CORPORATE)
 * @method void setPayerType(string $PayerType) 设置付款人类型 (个人: INDIVIDUAL, 企业: CORPORATE)
 * @method string getPayerName() 获取付款人姓名
 * @method void setPayerName(string $PayerName) 设置付款人姓名
 * @method string getPayerIdType() 获取付款人证件类型 (身份证: ID_CARD, 统一社会信用代码: UNIFIED_CREDIT_CODE)
 * @method void setPayerIdType(string $PayerIdType) 设置付款人证件类型 (身份证: ID_CARD, 统一社会信用代码: UNIFIED_CREDIT_CODE)
 * @method string getPayerIdNo() 获取付款人证件号
 * @method void setPayerIdNo(string $PayerIdNo) 设置付款人证件号
 * @method string getPayerCountryCode() 获取付款人常驻国家或地区编码 (见常见问题-国家/地区编码)
 * @method void setPayerCountryCode(string $PayerCountryCode) 设置付款人常驻国家或地区编码 (见常见问题-国家/地区编码)
 * @method string getPayerContactName() 获取付款人联系人名称
 * @method void setPayerContactName(string $PayerContactName) 设置付款人联系人名称
 * @method string getPayerContactNumber() 获取付款人联系电话
 * @method void setPayerContactNumber(string $PayerContactNumber) 设置付款人联系电话
 * @method string getPayerEmailAddress() 获取付款人联系邮箱
 * @method void setPayerEmailAddress(string $PayerEmailAddress) 设置付款人联系邮箱
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox
 */
class ApplyPayerInfoRequest extends AbstractModel
{
    /**
     * @var string 付款人ID
     */
    public $PayerId;

    /**
     * @var string 付款人类型 (个人: INDIVIDUAL, 企业: CORPORATE)
     */
    public $PayerType;

    /**
     * @var string 付款人姓名
     */
    public $PayerName;

    /**
     * @var string 付款人证件类型 (身份证: ID_CARD, 统一社会信用代码: UNIFIED_CREDIT_CODE)
     */
    public $PayerIdType;

    /**
     * @var string 付款人证件号
     */
    public $PayerIdNo;

    /**
     * @var string 付款人常驻国家或地区编码 (见常见问题-国家/地区编码)
     */
    public $PayerCountryCode;

    /**
     * @var string 付款人联系人名称
     */
    public $PayerContactName;

    /**
     * @var string 付款人联系电话
     */
    public $PayerContactNumber;

    /**
     * @var string 付款人联系邮箱
     */
    public $PayerEmailAddress;

    /**
     * @var string 接入环境。沙箱环境填sandbox
     */
    public $Profile;

    /**
     * @param string $PayerId 付款人ID
     * @param string $PayerType 付款人类型 (个人: INDIVIDUAL, 企业: CORPORATE)
     * @param string $PayerName 付款人姓名
     * @param string $PayerIdType 付款人证件类型 (身份证: ID_CARD, 统一社会信用代码: UNIFIED_CREDIT_CODE)
     * @param string $PayerIdNo 付款人证件号
     * @param string $PayerCountryCode 付款人常驻国家或地区编码 (见常见问题-国家/地区编码)
     * @param string $PayerContactName 付款人联系人名称
     * @param string $PayerContactNumber 付款人联系电话
     * @param string $PayerEmailAddress 付款人联系邮箱
     * @param string $Profile 接入环境。沙箱环境填sandbox
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
        if (array_key_exists("PayerId",$param) and $param["PayerId"] !== null) {
            $this->PayerId = $param["PayerId"];
        }

        if (array_key_exists("PayerType",$param) and $param["PayerType"] !== null) {
            $this->PayerType = $param["PayerType"];
        }

        if (array_key_exists("PayerName",$param) and $param["PayerName"] !== null) {
            $this->PayerName = $param["PayerName"];
        }

        if (array_key_exists("PayerIdType",$param) and $param["PayerIdType"] !== null) {
            $this->PayerIdType = $param["PayerIdType"];
        }

        if (array_key_exists("PayerIdNo",$param) and $param["PayerIdNo"] !== null) {
            $this->PayerIdNo = $param["PayerIdNo"];
        }

        if (array_key_exists("PayerCountryCode",$param) and $param["PayerCountryCode"] !== null) {
            $this->PayerCountryCode = $param["PayerCountryCode"];
        }

        if (array_key_exists("PayerContactName",$param) and $param["PayerContactName"] !== null) {
            $this->PayerContactName = $param["PayerContactName"];
        }

        if (array_key_exists("PayerContactNumber",$param) and $param["PayerContactNumber"] !== null) {
            $this->PayerContactNumber = $param["PayerContactNumber"];
        }

        if (array_key_exists("PayerEmailAddress",$param) and $param["PayerEmailAddress"] !== null) {
            $this->PayerEmailAddress = $param["PayerEmailAddress"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
