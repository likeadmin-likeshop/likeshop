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
 * CreateMerchant请求参数结构体
 *
 * @method integer getInvoicePlatformId() 获取开票平台ID
 * @method void setInvoicePlatformId(integer $InvoicePlatformId) 设置开票平台ID
 * @method string getTaxpayerName() 获取企业名称
 * @method void setTaxpayerName(string $TaxpayerName) 设置企业名称
 * @method string getTaxpayerNum() 获取销方纳税人识别号
 * @method void setTaxpayerNum(string $TaxpayerNum) 设置销方纳税人识别号
 * @method string getLegalPersonName() 获取注册企业法定代表人名称
 * @method void setLegalPersonName(string $LegalPersonName) 设置注册企业法定代表人名称
 * @method string getContactsName() 获取联系人
 * @method void setContactsName(string $ContactsName) 设置联系人
 * @method string getPhone() 获取联系人手机号
 * @method void setPhone(string $Phone) 设置联系人手机号
 * @method string getAddress() 获取不包含省市名称的地址
 * @method void setAddress(string $Address) 设置不包含省市名称的地址
 * @method integer getRegionCode() 获取地区编码
 * @method void setRegionCode(integer $RegionCode) 设置地区编码
 * @method string getCityName() 获取市（地区）名称
 * @method void setCityName(string $CityName) 设置市（地区）名称
 * @method string getDrawer() 获取开票人
 * @method void setDrawer(string $Drawer) 设置开票人
 * @method string getTaxRegistrationCertificate() 获取税务登记证图片（Base64）字符串，需小于 3M
 * @method void setTaxRegistrationCertificate(string $TaxRegistrationCertificate) 设置税务登记证图片（Base64）字符串，需小于 3M
 * @method string getEmail() 获取联系人邮箱地址
 * @method void setEmail(string $Email) 设置联系人邮箱地址
 * @method string getBusinessMobile() 获取企业电话
 * @method void setBusinessMobile(string $BusinessMobile) 设置企业电话
 * @method string getBankName() 获取银行名称
 * @method void setBankName(string $BankName) 设置银行名称
 * @method string getBankAccount() 获取银行账号
 * @method void setBankAccount(string $BankAccount) 设置银行账号
 * @method string getReviewer() 获取复核人
 * @method void setReviewer(string $Reviewer) 设置复核人
 * @method string getPayee() 获取收款人
 * @method void setPayee(string $Payee) 设置收款人
 * @method string getRegisterCode() 获取注册邀请码
 * @method void setRegisterCode(string $RegisterCode) 设置注册邀请码
 * @method string getState() 获取不填默认为1，有效状态
0：表示无效；
1:表示有效；
2:表示禁止开蓝票；
3:表示禁止冲红。
 * @method void setState(string $State) 设置不填默认为1，有效状态
0：表示无效；
1:表示有效；
2:表示禁止开蓝票；
3:表示禁止冲红。
 * @method string getCallbackUrl() 获取接收推送的消息地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置接收推送的消息地址
 * @method string getProfile() 获取接入环境。沙箱环境填 sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填 sandbox。
 */
class CreateMerchantRequest extends AbstractModel
{
    /**
     * @var integer 开票平台ID
     */
    public $InvoicePlatformId;

    /**
     * @var string 企业名称
     */
    public $TaxpayerName;

    /**
     * @var string 销方纳税人识别号
     */
    public $TaxpayerNum;

    /**
     * @var string 注册企业法定代表人名称
     */
    public $LegalPersonName;

    /**
     * @var string 联系人
     */
    public $ContactsName;

    /**
     * @var string 联系人手机号
     */
    public $Phone;

    /**
     * @var string 不包含省市名称的地址
     */
    public $Address;

    /**
     * @var integer 地区编码
     */
    public $RegionCode;

    /**
     * @var string 市（地区）名称
     */
    public $CityName;

    /**
     * @var string 开票人
     */
    public $Drawer;

    /**
     * @var string 税务登记证图片（Base64）字符串，需小于 3M
     */
    public $TaxRegistrationCertificate;

    /**
     * @var string 联系人邮箱地址
     */
    public $Email;

    /**
     * @var string 企业电话
     */
    public $BusinessMobile;

    /**
     * @var string 银行名称
     */
    public $BankName;

    /**
     * @var string 银行账号
     */
    public $BankAccount;

    /**
     * @var string 复核人
     */
    public $Reviewer;

    /**
     * @var string 收款人
     */
    public $Payee;

    /**
     * @var string 注册邀请码
     */
    public $RegisterCode;

    /**
     * @var string 不填默认为1，有效状态
0：表示无效；
1:表示有效；
2:表示禁止开蓝票；
3:表示禁止冲红。
     */
    public $State;

    /**
     * @var string 接收推送的消息地址
     */
    public $CallbackUrl;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。
     */
    public $Profile;

    /**
     * @param integer $InvoicePlatformId 开票平台ID
     * @param string $TaxpayerName 企业名称
     * @param string $TaxpayerNum 销方纳税人识别号
     * @param string $LegalPersonName 注册企业法定代表人名称
     * @param string $ContactsName 联系人
     * @param string $Phone 联系人手机号
     * @param string $Address 不包含省市名称的地址
     * @param integer $RegionCode 地区编码
     * @param string $CityName 市（地区）名称
     * @param string $Drawer 开票人
     * @param string $TaxRegistrationCertificate 税务登记证图片（Base64）字符串，需小于 3M
     * @param string $Email 联系人邮箱地址
     * @param string $BusinessMobile 企业电话
     * @param string $BankName 银行名称
     * @param string $BankAccount 银行账号
     * @param string $Reviewer 复核人
     * @param string $Payee 收款人
     * @param string $RegisterCode 注册邀请码
     * @param string $State 不填默认为1，有效状态
0：表示无效；
1:表示有效；
2:表示禁止开蓝票；
3:表示禁止冲红。
     * @param string $CallbackUrl 接收推送的消息地址
     * @param string $Profile 接入环境。沙箱环境填 sandbox。
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
        if (array_key_exists("InvoicePlatformId",$param) and $param["InvoicePlatformId"] !== null) {
            $this->InvoicePlatformId = $param["InvoicePlatformId"];
        }

        if (array_key_exists("TaxpayerName",$param) and $param["TaxpayerName"] !== null) {
            $this->TaxpayerName = $param["TaxpayerName"];
        }

        if (array_key_exists("TaxpayerNum",$param) and $param["TaxpayerNum"] !== null) {
            $this->TaxpayerNum = $param["TaxpayerNum"];
        }

        if (array_key_exists("LegalPersonName",$param) and $param["LegalPersonName"] !== null) {
            $this->LegalPersonName = $param["LegalPersonName"];
        }

        if (array_key_exists("ContactsName",$param) and $param["ContactsName"] !== null) {
            $this->ContactsName = $param["ContactsName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("CityName",$param) and $param["CityName"] !== null) {
            $this->CityName = $param["CityName"];
        }

        if (array_key_exists("Drawer",$param) and $param["Drawer"] !== null) {
            $this->Drawer = $param["Drawer"];
        }

        if (array_key_exists("TaxRegistrationCertificate",$param) and $param["TaxRegistrationCertificate"] !== null) {
            $this->TaxRegistrationCertificate = $param["TaxRegistrationCertificate"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("BusinessMobile",$param) and $param["BusinessMobile"] !== null) {
            $this->BusinessMobile = $param["BusinessMobile"];
        }

        if (array_key_exists("BankName",$param) and $param["BankName"] !== null) {
            $this->BankName = $param["BankName"];
        }

        if (array_key_exists("BankAccount",$param) and $param["BankAccount"] !== null) {
            $this->BankAccount = $param["BankAccount"];
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = $param["Reviewer"];
        }

        if (array_key_exists("Payee",$param) and $param["Payee"] !== null) {
            $this->Payee = $param["Payee"];
        }

        if (array_key_exists("RegisterCode",$param) and $param["RegisterCode"] !== null) {
            $this->RegisterCode = $param["RegisterCode"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
