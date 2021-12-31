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
 * ApplyOutwardOrder请求参数结构体
 *
 * @method string getTransactionId() 获取对接方汇出指令编号
 * @method void setTransactionId(string $TransactionId) 设置对接方汇出指令编号
 * @method string getPricingCurrency() 获取定价币种
 * @method void setPricingCurrency(string $PricingCurrency) 设置定价币种
 * @method string getSourceCurrency() 获取源币种
 * @method void setSourceCurrency(string $SourceCurrency) 设置源币种
 * @method string getTargetCurrency() 获取目的币种
 * @method void setTargetCurrency(string $TargetCurrency) 设置目的币种
 * @method string getPayeeType() 获取收款人类型（银行卡填"BANK_ACCOUNT"）
 * @method void setPayeeType(string $PayeeType) 设置收款人类型（银行卡填"BANK_ACCOUNT"）
 * @method string getPayeeAccount() 获取收款人账号
 * @method void setPayeeAccount(string $PayeeAccount) 设置收款人账号
 * @method float getSourceAmount() 获取源币种金额
 * @method void setSourceAmount(float $SourceAmount) 设置源币种金额
 * @method float getTargetAmount() 获取目的金额
 * @method void setTargetAmount(float $TargetAmount) 设置目的金额
 * @method string getPayeeName() 获取收款人姓名（PayeeType为"BANK_COUNT"时必填）
 * @method void setPayeeName(string $PayeeName) 设置收款人姓名（PayeeType为"BANK_COUNT"时必填）
 * @method string getPayeeAddress() 获取收款人地址（PayeeType为"BANK_COUNT"时必填）
 * @method void setPayeeAddress(string $PayeeAddress) 设置收款人地址（PayeeType为"BANK_COUNT"时必填）
 * @method string getPayeeBankAccountType() 获取收款人银行账号类型（PayeeType为"BANK_COUNT"时必填）
个人填"INDIVIDUAL"
企业填"CORPORATE"
 * @method void setPayeeBankAccountType(string $PayeeBankAccountType) 设置收款人银行账号类型（PayeeType为"BANK_COUNT"时必填）
个人填"INDIVIDUAL"
企业填"CORPORATE"
 * @method string getPayeeCountryCode() 获取收款人国家或地区编码（PayeeType为"BANK_COUNT"时必填）
 * @method void setPayeeCountryCode(string $PayeeCountryCode) 设置收款人国家或地区编码（PayeeType为"BANK_COUNT"时必填）
 * @method string getPayeeBankName() 获取收款人开户银行名称（PayeeType为"BANK_COUNT"时必填）
 * @method void setPayeeBankName(string $PayeeBankName) 设置收款人开户银行名称（PayeeType为"BANK_COUNT"时必填）
 * @method string getPayeeBankAddress() 获取收款人开户银行地址（PayeeType为"BANK_COUNT"时必填）
 * @method void setPayeeBankAddress(string $PayeeBankAddress) 设置收款人开户银行地址（PayeeType为"BANK_COUNT"时必填）
 * @method string getPayeeBankDistrict() 获取收款人开户银行所在国家或地区编码（PayeeType为"BANK_COUNT"时必填）
 * @method void setPayeeBankDistrict(string $PayeeBankDistrict) 设置收款人开户银行所在国家或地区编码（PayeeType为"BANK_COUNT"时必填）
 * @method string getPayeeBankSwiftCode() 获取收款银行SwiftCode（PayeeType为"BANK_COUNT"时必填）
 * @method void setPayeeBankSwiftCode(string $PayeeBankSwiftCode) 设置收款银行SwiftCode（PayeeType为"BANK_COUNT"时必填）
 * @method string getPayeeBankType() 获取收款银行国际编码类型
 * @method void setPayeeBankType(string $PayeeBankType) 设置收款银行国际编码类型
 * @method string getPayeeBankCode() 获取收款银行国际编码
 * @method void setPayeeBankCode(string $PayeeBankCode) 设置收款银行国际编码
 * @method string getReferenceForBeneficiary() 获取收款人附言
 * @method void setReferenceForBeneficiary(string $ReferenceForBeneficiary) 设置收款人附言
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox
 */
class ApplyOutwardOrderRequest extends AbstractModel
{
    /**
     * @var string 对接方汇出指令编号
     */
    public $TransactionId;

    /**
     * @var string 定价币种
     */
    public $PricingCurrency;

    /**
     * @var string 源币种
     */
    public $SourceCurrency;

    /**
     * @var string 目的币种
     */
    public $TargetCurrency;

    /**
     * @var string 收款人类型（银行卡填"BANK_ACCOUNT"）
     */
    public $PayeeType;

    /**
     * @var string 收款人账号
     */
    public $PayeeAccount;

    /**
     * @var float 源币种金额
     */
    public $SourceAmount;

    /**
     * @var float 目的金额
     */
    public $TargetAmount;

    /**
     * @var string 收款人姓名（PayeeType为"BANK_COUNT"时必填）
     */
    public $PayeeName;

    /**
     * @var string 收款人地址（PayeeType为"BANK_COUNT"时必填）
     */
    public $PayeeAddress;

    /**
     * @var string 收款人银行账号类型（PayeeType为"BANK_COUNT"时必填）
个人填"INDIVIDUAL"
企业填"CORPORATE"
     */
    public $PayeeBankAccountType;

    /**
     * @var string 收款人国家或地区编码（PayeeType为"BANK_COUNT"时必填）
     */
    public $PayeeCountryCode;

    /**
     * @var string 收款人开户银行名称（PayeeType为"BANK_COUNT"时必填）
     */
    public $PayeeBankName;

    /**
     * @var string 收款人开户银行地址（PayeeType为"BANK_COUNT"时必填）
     */
    public $PayeeBankAddress;

    /**
     * @var string 收款人开户银行所在国家或地区编码（PayeeType为"BANK_COUNT"时必填）
     */
    public $PayeeBankDistrict;

    /**
     * @var string 收款银行SwiftCode（PayeeType为"BANK_COUNT"时必填）
     */
    public $PayeeBankSwiftCode;

    /**
     * @var string 收款银行国际编码类型
     */
    public $PayeeBankType;

    /**
     * @var string 收款银行国际编码
     */
    public $PayeeBankCode;

    /**
     * @var string 收款人附言
     */
    public $ReferenceForBeneficiary;

    /**
     * @var string 接入环境。沙箱环境填sandbox
     */
    public $Profile;

    /**
     * @param string $TransactionId 对接方汇出指令编号
     * @param string $PricingCurrency 定价币种
     * @param string $SourceCurrency 源币种
     * @param string $TargetCurrency 目的币种
     * @param string $PayeeType 收款人类型（银行卡填"BANK_ACCOUNT"）
     * @param string $PayeeAccount 收款人账号
     * @param float $SourceAmount 源币种金额
     * @param float $TargetAmount 目的金额
     * @param string $PayeeName 收款人姓名（PayeeType为"BANK_COUNT"时必填）
     * @param string $PayeeAddress 收款人地址（PayeeType为"BANK_COUNT"时必填）
     * @param string $PayeeBankAccountType 收款人银行账号类型（PayeeType为"BANK_COUNT"时必填）
个人填"INDIVIDUAL"
企业填"CORPORATE"
     * @param string $PayeeCountryCode 收款人国家或地区编码（PayeeType为"BANK_COUNT"时必填）
     * @param string $PayeeBankName 收款人开户银行名称（PayeeType为"BANK_COUNT"时必填）
     * @param string $PayeeBankAddress 收款人开户银行地址（PayeeType为"BANK_COUNT"时必填）
     * @param string $PayeeBankDistrict 收款人开户银行所在国家或地区编码（PayeeType为"BANK_COUNT"时必填）
     * @param string $PayeeBankSwiftCode 收款银行SwiftCode（PayeeType为"BANK_COUNT"时必填）
     * @param string $PayeeBankType 收款银行国际编码类型
     * @param string $PayeeBankCode 收款银行国际编码
     * @param string $ReferenceForBeneficiary 收款人附言
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
        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("PricingCurrency",$param) and $param["PricingCurrency"] !== null) {
            $this->PricingCurrency = $param["PricingCurrency"];
        }

        if (array_key_exists("SourceCurrency",$param) and $param["SourceCurrency"] !== null) {
            $this->SourceCurrency = $param["SourceCurrency"];
        }

        if (array_key_exists("TargetCurrency",$param) and $param["TargetCurrency"] !== null) {
            $this->TargetCurrency = $param["TargetCurrency"];
        }

        if (array_key_exists("PayeeType",$param) and $param["PayeeType"] !== null) {
            $this->PayeeType = $param["PayeeType"];
        }

        if (array_key_exists("PayeeAccount",$param) and $param["PayeeAccount"] !== null) {
            $this->PayeeAccount = $param["PayeeAccount"];
        }

        if (array_key_exists("SourceAmount",$param) and $param["SourceAmount"] !== null) {
            $this->SourceAmount = $param["SourceAmount"];
        }

        if (array_key_exists("TargetAmount",$param) and $param["TargetAmount"] !== null) {
            $this->TargetAmount = $param["TargetAmount"];
        }

        if (array_key_exists("PayeeName",$param) and $param["PayeeName"] !== null) {
            $this->PayeeName = $param["PayeeName"];
        }

        if (array_key_exists("PayeeAddress",$param) and $param["PayeeAddress"] !== null) {
            $this->PayeeAddress = $param["PayeeAddress"];
        }

        if (array_key_exists("PayeeBankAccountType",$param) and $param["PayeeBankAccountType"] !== null) {
            $this->PayeeBankAccountType = $param["PayeeBankAccountType"];
        }

        if (array_key_exists("PayeeCountryCode",$param) and $param["PayeeCountryCode"] !== null) {
            $this->PayeeCountryCode = $param["PayeeCountryCode"];
        }

        if (array_key_exists("PayeeBankName",$param) and $param["PayeeBankName"] !== null) {
            $this->PayeeBankName = $param["PayeeBankName"];
        }

        if (array_key_exists("PayeeBankAddress",$param) and $param["PayeeBankAddress"] !== null) {
            $this->PayeeBankAddress = $param["PayeeBankAddress"];
        }

        if (array_key_exists("PayeeBankDistrict",$param) and $param["PayeeBankDistrict"] !== null) {
            $this->PayeeBankDistrict = $param["PayeeBankDistrict"];
        }

        if (array_key_exists("PayeeBankSwiftCode",$param) and $param["PayeeBankSwiftCode"] !== null) {
            $this->PayeeBankSwiftCode = $param["PayeeBankSwiftCode"];
        }

        if (array_key_exists("PayeeBankType",$param) and $param["PayeeBankType"] !== null) {
            $this->PayeeBankType = $param["PayeeBankType"];
        }

        if (array_key_exists("PayeeBankCode",$param) and $param["PayeeBankCode"] !== null) {
            $this->PayeeBankCode = $param["PayeeBankCode"];
        }

        if (array_key_exists("ReferenceForBeneficiary",$param) and $param["ReferenceForBeneficiary"] !== null) {
            $this->ReferenceForBeneficiary = $param["ReferenceForBeneficiary"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
