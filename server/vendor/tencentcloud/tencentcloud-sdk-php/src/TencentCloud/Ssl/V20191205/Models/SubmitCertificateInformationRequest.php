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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitCertificateInformation请求参数结构体
 *
 * @method string getCertificateId() 获取证书 ID。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID。
 * @method string getCsrType() 获取CSR 生成方式：online = 在线生成, parse = 手动上传。
 * @method void setCsrType(string $CsrType) 设置CSR 生成方式：online = 在线生成, parse = 手动上传。
 * @method string getCsrContent() 获取上传的 CSR 内容。
 * @method void setCsrContent(string $CsrContent) 设置上传的 CSR 内容。
 * @method string getCertificateDomain() 获取绑定证书的域名。
 * @method void setCertificateDomain(string $CertificateDomain) 设置绑定证书的域名。
 * @method array getDomainList() 获取上传的域名数组（多域名证书可以上传）。
 * @method void setDomainList(array $DomainList) 设置上传的域名数组（多域名证书可以上传）。
 * @method string getKeyPassword() 获取私钥密码（非必填）。
 * @method void setKeyPassword(string $KeyPassword) 设置私钥密码（非必填）。
 * @method string getOrganizationName() 获取公司名称。
 * @method void setOrganizationName(string $OrganizationName) 设置公司名称。
 * @method string getOrganizationDivision() 获取部门名称。
 * @method void setOrganizationDivision(string $OrganizationDivision) 设置部门名称。
 * @method string getOrganizationAddress() 获取公司详细地址。
 * @method void setOrganizationAddress(string $OrganizationAddress) 设置公司详细地址。
 * @method string getOrganizationCountry() 获取国家名称，如中国：CN 。
 * @method void setOrganizationCountry(string $OrganizationCountry) 设置国家名称，如中国：CN 。
 * @method string getOrganizationCity() 获取公司所在城市。
 * @method void setOrganizationCity(string $OrganizationCity) 设置公司所在城市。
 * @method string getOrganizationRegion() 获取公司所在省份。
 * @method void setOrganizationRegion(string $OrganizationRegion) 设置公司所在省份。
 * @method string getPostalCode() 获取公司邮编。
 * @method void setPostalCode(string $PostalCode) 设置公司邮编。
 * @method string getPhoneAreaCode() 获取公司座机区号。
 * @method void setPhoneAreaCode(string $PhoneAreaCode) 设置公司座机区号。
 * @method string getPhoneNumber() 获取公司座机号码。
 * @method void setPhoneNumber(string $PhoneNumber) 设置公司座机号码。
 * @method string getVerifyType() 获取证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
 * @method void setVerifyType(string $VerifyType) 设置证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
 * @method string getAdminFirstName() 获取管理人名。
 * @method void setAdminFirstName(string $AdminFirstName) 设置管理人名。
 * @method string getAdminLastName() 获取管理人姓。
 * @method void setAdminLastName(string $AdminLastName) 设置管理人姓。
 * @method string getAdminPhoneNum() 获取管理人手机号码。
 * @method void setAdminPhoneNum(string $AdminPhoneNum) 设置管理人手机号码。
 * @method string getAdminEmail() 获取管理人邮箱地址。
 * @method void setAdminEmail(string $AdminEmail) 设置管理人邮箱地址。
 * @method string getAdminPosition() 获取管理人职位。
 * @method void setAdminPosition(string $AdminPosition) 设置管理人职位。
 * @method string getContactFirstName() 获取联系人名。
 * @method void setContactFirstName(string $ContactFirstName) 设置联系人名。
 * @method string getContactLastName() 获取联系人姓。
 * @method void setContactLastName(string $ContactLastName) 设置联系人姓。
 * @method string getContactEmail() 获取联系人邮箱地址。
 * @method void setContactEmail(string $ContactEmail) 设置联系人邮箱地址。
 * @method string getContactNumber() 获取联系人手机号码。
 * @method void setContactNumber(string $ContactNumber) 设置联系人手机号码。
 * @method string getContactPosition() 获取联系人职位。
 * @method void setContactPosition(string $ContactPosition) 设置联系人职位。
 */
class SubmitCertificateInformationRequest extends AbstractModel
{
    /**
     * @var string 证书 ID。
     */
    public $CertificateId;

    /**
     * @var string CSR 生成方式：online = 在线生成, parse = 手动上传。
     */
    public $CsrType;

    /**
     * @var string 上传的 CSR 内容。
     */
    public $CsrContent;

    /**
     * @var string 绑定证书的域名。
     */
    public $CertificateDomain;

    /**
     * @var array 上传的域名数组（多域名证书可以上传）。
     */
    public $DomainList;

    /**
     * @var string 私钥密码（非必填）。
     */
    public $KeyPassword;

    /**
     * @var string 公司名称。
     */
    public $OrganizationName;

    /**
     * @var string 部门名称。
     */
    public $OrganizationDivision;

    /**
     * @var string 公司详细地址。
     */
    public $OrganizationAddress;

    /**
     * @var string 国家名称，如中国：CN 。
     */
    public $OrganizationCountry;

    /**
     * @var string 公司所在城市。
     */
    public $OrganizationCity;

    /**
     * @var string 公司所在省份。
     */
    public $OrganizationRegion;

    /**
     * @var string 公司邮编。
     */
    public $PostalCode;

    /**
     * @var string 公司座机区号。
     */
    public $PhoneAreaCode;

    /**
     * @var string 公司座机号码。
     */
    public $PhoneNumber;

    /**
     * @var string 证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
     */
    public $VerifyType;

    /**
     * @var string 管理人名。
     */
    public $AdminFirstName;

    /**
     * @var string 管理人姓。
     */
    public $AdminLastName;

    /**
     * @var string 管理人手机号码。
     */
    public $AdminPhoneNum;

    /**
     * @var string 管理人邮箱地址。
     */
    public $AdminEmail;

    /**
     * @var string 管理人职位。
     */
    public $AdminPosition;

    /**
     * @var string 联系人名。
     */
    public $ContactFirstName;

    /**
     * @var string 联系人姓。
     */
    public $ContactLastName;

    /**
     * @var string 联系人邮箱地址。
     */
    public $ContactEmail;

    /**
     * @var string 联系人手机号码。
     */
    public $ContactNumber;

    /**
     * @var string 联系人职位。
     */
    public $ContactPosition;

    /**
     * @param string $CertificateId 证书 ID。
     * @param string $CsrType CSR 生成方式：online = 在线生成, parse = 手动上传。
     * @param string $CsrContent 上传的 CSR 内容。
     * @param string $CertificateDomain 绑定证书的域名。
     * @param array $DomainList 上传的域名数组（多域名证书可以上传）。
     * @param string $KeyPassword 私钥密码（非必填）。
     * @param string $OrganizationName 公司名称。
     * @param string $OrganizationDivision 部门名称。
     * @param string $OrganizationAddress 公司详细地址。
     * @param string $OrganizationCountry 国家名称，如中国：CN 。
     * @param string $OrganizationCity 公司所在城市。
     * @param string $OrganizationRegion 公司所在省份。
     * @param string $PostalCode 公司邮编。
     * @param string $PhoneAreaCode 公司座机区号。
     * @param string $PhoneNumber 公司座机号码。
     * @param string $VerifyType 证书验证方式。验证类型：DNS_AUTO = 自动DNS验证（仅支持在腾讯云解析且解析状态正常的域名使用该验证类型），DNS = 手动DNS验证，FILE = 文件验证。
     * @param string $AdminFirstName 管理人名。
     * @param string $AdminLastName 管理人姓。
     * @param string $AdminPhoneNum 管理人手机号码。
     * @param string $AdminEmail 管理人邮箱地址。
     * @param string $AdminPosition 管理人职位。
     * @param string $ContactFirstName 联系人名。
     * @param string $ContactLastName 联系人姓。
     * @param string $ContactEmail 联系人邮箱地址。
     * @param string $ContactNumber 联系人手机号码。
     * @param string $ContactPosition 联系人职位。
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("CsrType",$param) and $param["CsrType"] !== null) {
            $this->CsrType = $param["CsrType"];
        }

        if (array_key_exists("CsrContent",$param) and $param["CsrContent"] !== null) {
            $this->CsrContent = $param["CsrContent"];
        }

        if (array_key_exists("CertificateDomain",$param) and $param["CertificateDomain"] !== null) {
            $this->CertificateDomain = $param["CertificateDomain"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("KeyPassword",$param) and $param["KeyPassword"] !== null) {
            $this->KeyPassword = $param["KeyPassword"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("OrganizationDivision",$param) and $param["OrganizationDivision"] !== null) {
            $this->OrganizationDivision = $param["OrganizationDivision"];
        }

        if (array_key_exists("OrganizationAddress",$param) and $param["OrganizationAddress"] !== null) {
            $this->OrganizationAddress = $param["OrganizationAddress"];
        }

        if (array_key_exists("OrganizationCountry",$param) and $param["OrganizationCountry"] !== null) {
            $this->OrganizationCountry = $param["OrganizationCountry"];
        }

        if (array_key_exists("OrganizationCity",$param) and $param["OrganizationCity"] !== null) {
            $this->OrganizationCity = $param["OrganizationCity"];
        }

        if (array_key_exists("OrganizationRegion",$param) and $param["OrganizationRegion"] !== null) {
            $this->OrganizationRegion = $param["OrganizationRegion"];
        }

        if (array_key_exists("PostalCode",$param) and $param["PostalCode"] !== null) {
            $this->PostalCode = $param["PostalCode"];
        }

        if (array_key_exists("PhoneAreaCode",$param) and $param["PhoneAreaCode"] !== null) {
            $this->PhoneAreaCode = $param["PhoneAreaCode"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("AdminFirstName",$param) and $param["AdminFirstName"] !== null) {
            $this->AdminFirstName = $param["AdminFirstName"];
        }

        if (array_key_exists("AdminLastName",$param) and $param["AdminLastName"] !== null) {
            $this->AdminLastName = $param["AdminLastName"];
        }

        if (array_key_exists("AdminPhoneNum",$param) and $param["AdminPhoneNum"] !== null) {
            $this->AdminPhoneNum = $param["AdminPhoneNum"];
        }

        if (array_key_exists("AdminEmail",$param) and $param["AdminEmail"] !== null) {
            $this->AdminEmail = $param["AdminEmail"];
        }

        if (array_key_exists("AdminPosition",$param) and $param["AdminPosition"] !== null) {
            $this->AdminPosition = $param["AdminPosition"];
        }

        if (array_key_exists("ContactFirstName",$param) and $param["ContactFirstName"] !== null) {
            $this->ContactFirstName = $param["ContactFirstName"];
        }

        if (array_key_exists("ContactLastName",$param) and $param["ContactLastName"] !== null) {
            $this->ContactLastName = $param["ContactLastName"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("ContactNumber",$param) and $param["ContactNumber"] !== null) {
            $this->ContactNumber = $param["ContactNumber"];
        }

        if (array_key_exists("ContactPosition",$param) and $param["ContactPosition"] !== null) {
            $this->ContactPosition = $param["ContactPosition"];
        }
    }
}
