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
 * 获取证书列表（DescribeCertificate）返回参数键为 SubmittedData 的内容。
 *
 * @method string getCsrType() 获取CSR 类型，（online = 在线生成CSR，parse = 粘贴 CSR）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCsrType(string $CsrType) 设置CSR 类型，（online = 在线生成CSR，parse = 粘贴 CSR）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCsrContent() 获取CSR 内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCsrContent(string $CsrContent) 设置CSR 内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificateDomain() 获取域名信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateDomain(string $CertificateDomain) 设置域名信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDomainList() 获取DNS 信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainList(array $DomainList) 设置DNS 信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyPassword() 获取私钥密码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyPassword(string $KeyPassword) 设置私钥密码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationName() 获取企业或单位名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationName(string $OrganizationName) 设置企业或单位名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationDivision() 获取部门。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationDivision(string $OrganizationDivision) 设置部门。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationAddress() 获取地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationAddress(string $OrganizationAddress) 设置地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationCountry() 获取国家。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationCountry(string $OrganizationCountry) 设置国家。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationCity() 获取市。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationCity(string $OrganizationCity) 设置市。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationRegion() 获取省。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationRegion(string $OrganizationRegion) 设置省。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPostalCode() 获取邮政编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostalCode(string $PostalCode) 设置邮政编码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneAreaCode() 获取座机区号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneAreaCode(string $PhoneAreaCode) 设置座机区号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取座机号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置座机号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminFirstName() 获取管理员名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminFirstName(string $AdminFirstName) 设置管理员名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminLastName() 获取管理员姓。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminLastName(string $AdminLastName) 设置管理员姓。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminPhoneNum() 获取管理员电话号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminPhoneNum(string $AdminPhoneNum) 设置管理员电话号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminEmail() 获取管理员邮箱地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminEmail(string $AdminEmail) 设置管理员邮箱地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminPosition() 获取管理员职位。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminPosition(string $AdminPosition) 设置管理员职位。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContactFirstName() 获取联系人名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContactFirstName(string $ContactFirstName) 设置联系人名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContactLastName() 获取联系人姓。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContactLastName(string $ContactLastName) 设置联系人姓。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContactNumber() 获取联系人电话号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContactNumber(string $ContactNumber) 设置联系人电话号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContactEmail() 获取联系人邮箱地址，
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContactEmail(string $ContactEmail) 设置联系人邮箱地址，
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContactPosition() 获取联系人职位。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContactPosition(string $ContactPosition) 设置联系人职位。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyType() 获取验证类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyType(string $VerifyType) 设置验证类型。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubmittedData extends AbstractModel
{
    /**
     * @var string CSR 类型，（online = 在线生成CSR，parse = 粘贴 CSR）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CsrType;

    /**
     * @var string CSR 内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CsrContent;

    /**
     * @var string 域名信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateDomain;

    /**
     * @var array DNS 信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainList;

    /**
     * @var string 私钥密码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyPassword;

    /**
     * @var string 企业或单位名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationName;

    /**
     * @var string 部门。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationDivision;

    /**
     * @var string 地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationAddress;

    /**
     * @var string 国家。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationCountry;

    /**
     * @var string 市。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationCity;

    /**
     * @var string 省。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationRegion;

    /**
     * @var string 邮政编码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostalCode;

    /**
     * @var string 座机区号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneAreaCode;

    /**
     * @var string 座机号码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var string 管理员名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminFirstName;

    /**
     * @var string 管理员姓。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminLastName;

    /**
     * @var string 管理员电话号码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminPhoneNum;

    /**
     * @var string 管理员邮箱地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminEmail;

    /**
     * @var string 管理员职位。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminPosition;

    /**
     * @var string 联系人名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContactFirstName;

    /**
     * @var string 联系人姓。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContactLastName;

    /**
     * @var string 联系人电话号码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContactNumber;

    /**
     * @var string 联系人邮箱地址，
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContactEmail;

    /**
     * @var string 联系人职位。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContactPosition;

    /**
     * @var string 验证类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyType;

    /**
     * @param string $CsrType CSR 类型，（online = 在线生成CSR，parse = 粘贴 CSR）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CsrContent CSR 内容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificateDomain 域名信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DomainList DNS 信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyPassword 私钥密码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationName 企业或单位名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationDivision 部门。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationAddress 地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationCountry 国家。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationCity 市。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationRegion 省。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PostalCode 邮政编码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneAreaCode 座机区号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber 座机号码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminFirstName 管理员名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminLastName 管理员姓。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminPhoneNum 管理员电话号码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminEmail 管理员邮箱地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminPosition 管理员职位。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContactFirstName 联系人名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContactLastName 联系人姓。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContactNumber 联系人电话号码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContactEmail 联系人邮箱地址，
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContactPosition 联系人职位。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyType 验证类型。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ContactNumber",$param) and $param["ContactNumber"] !== null) {
            $this->ContactNumber = $param["ContactNumber"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("ContactPosition",$param) and $param["ContactPosition"] !== null) {
            $this->ContactPosition = $param["ContactPosition"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}
