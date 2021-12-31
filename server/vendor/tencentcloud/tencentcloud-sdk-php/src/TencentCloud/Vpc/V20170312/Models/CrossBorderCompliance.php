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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合规化审批单
 *
 * @method string getServiceProvider() 获取服务商，可选值：`UNICOM`。
 * @method void setServiceProvider(string $ServiceProvider) 设置服务商，可选值：`UNICOM`。
 * @method integer getComplianceId() 获取合规化审批单`ID`。
 * @method void setComplianceId(integer $ComplianceId) 设置合规化审批单`ID`。
 * @method string getCompany() 获取公司全称。
 * @method void setCompany(string $Company) 设置公司全称。
 * @method string getUniformSocialCreditCode() 获取统一社会信用代码。
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置统一社会信用代码。
 * @method string getLegalPerson() 获取法定代表人。
 * @method void setLegalPerson(string $LegalPerson) 设置法定代表人。
 * @method string getIssuingAuthority() 获取发证机关。
 * @method void setIssuingAuthority(string $IssuingAuthority) 设置发证机关。
 * @method string getBusinessLicense() 获取营业执照。
 * @method void setBusinessLicense(string $BusinessLicense) 设置营业执照。
 * @method string getBusinessAddress() 获取营业执照住所。
 * @method void setBusinessAddress(string $BusinessAddress) 设置营业执照住所。
 * @method integer getPostCode() 获取邮编。
 * @method void setPostCode(integer $PostCode) 设置邮编。
 * @method string getManager() 获取经办人。
 * @method void setManager(string $Manager) 设置经办人。
 * @method string getManagerId() 获取经办人身份证号。
 * @method void setManagerId(string $ManagerId) 设置经办人身份证号。
 * @method string getManagerIdCard() 获取经办人身份证。
 * @method void setManagerIdCard(string $ManagerIdCard) 设置经办人身份证。
 * @method string getManagerAddress() 获取经办人身份证地址。
 * @method void setManagerAddress(string $ManagerAddress) 设置经办人身份证地址。
 * @method string getManagerTelephone() 获取经办人联系电话。
 * @method void setManagerTelephone(string $ManagerTelephone) 设置经办人联系电话。
 * @method string getEmail() 获取电子邮箱。
 * @method void setEmail(string $Email) 设置电子邮箱。
 * @method string getServiceHandlingForm() 获取服务受理单。
 * @method void setServiceHandlingForm(string $ServiceHandlingForm) 设置服务受理单。
 * @method string getAuthorizationLetter() 获取授权函。
 * @method void setAuthorizationLetter(string $AuthorizationLetter) 设置授权函。
 * @method string getSafetyCommitment() 获取信息安全承诺书。
 * @method void setSafetyCommitment(string $SafetyCommitment) 设置信息安全承诺书。
 * @method string getServiceStartDate() 获取服务开始时间。
 * @method void setServiceStartDate(string $ServiceStartDate) 设置服务开始时间。
 * @method string getServiceEndDate() 获取服务截止时间。
 * @method void setServiceEndDate(string $ServiceEndDate) 设置服务截止时间。
 * @method string getState() 获取状态。待审批：`PENDING`，已通过：`APPROVED`，已拒绝：`DENY`。
 * @method void setState(string $State) 设置状态。待审批：`PENDING`，已通过：`APPROVED`，已拒绝：`DENY`。
 * @method string getCreatedTime() 获取审批单创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置审批单创建时间。
 */
class CrossBorderCompliance extends AbstractModel
{
    /**
     * @var string 服务商，可选值：`UNICOM`。
     */
    public $ServiceProvider;

    /**
     * @var integer 合规化审批单`ID`。
     */
    public $ComplianceId;

    /**
     * @var string 公司全称。
     */
    public $Company;

    /**
     * @var string 统一社会信用代码。
     */
    public $UniformSocialCreditCode;

    /**
     * @var string 法定代表人。
     */
    public $LegalPerson;

    /**
     * @var string 发证机关。
     */
    public $IssuingAuthority;

    /**
     * @var string 营业执照。
     */
    public $BusinessLicense;

    /**
     * @var string 营业执照住所。
     */
    public $BusinessAddress;

    /**
     * @var integer 邮编。
     */
    public $PostCode;

    /**
     * @var string 经办人。
     */
    public $Manager;

    /**
     * @var string 经办人身份证号。
     */
    public $ManagerId;

    /**
     * @var string 经办人身份证。
     */
    public $ManagerIdCard;

    /**
     * @var string 经办人身份证地址。
     */
    public $ManagerAddress;

    /**
     * @var string 经办人联系电话。
     */
    public $ManagerTelephone;

    /**
     * @var string 电子邮箱。
     */
    public $Email;

    /**
     * @var string 服务受理单。
     */
    public $ServiceHandlingForm;

    /**
     * @var string 授权函。
     */
    public $AuthorizationLetter;

    /**
     * @var string 信息安全承诺书。
     */
    public $SafetyCommitment;

    /**
     * @var string 服务开始时间。
     */
    public $ServiceStartDate;

    /**
     * @var string 服务截止时间。
     */
    public $ServiceEndDate;

    /**
     * @var string 状态。待审批：`PENDING`，已通过：`APPROVED`，已拒绝：`DENY`。
     */
    public $State;

    /**
     * @var string 审批单创建时间。
     */
    public $CreatedTime;

    /**
     * @param string $ServiceProvider 服务商，可选值：`UNICOM`。
     * @param integer $ComplianceId 合规化审批单`ID`。
     * @param string $Company 公司全称。
     * @param string $UniformSocialCreditCode 统一社会信用代码。
     * @param string $LegalPerson 法定代表人。
     * @param string $IssuingAuthority 发证机关。
     * @param string $BusinessLicense 营业执照。
     * @param string $BusinessAddress 营业执照住所。
     * @param integer $PostCode 邮编。
     * @param string $Manager 经办人。
     * @param string $ManagerId 经办人身份证号。
     * @param string $ManagerIdCard 经办人身份证。
     * @param string $ManagerAddress 经办人身份证地址。
     * @param string $ManagerTelephone 经办人联系电话。
     * @param string $Email 电子邮箱。
     * @param string $ServiceHandlingForm 服务受理单。
     * @param string $AuthorizationLetter 授权函。
     * @param string $SafetyCommitment 信息安全承诺书。
     * @param string $ServiceStartDate 服务开始时间。
     * @param string $ServiceEndDate 服务截止时间。
     * @param string $State 状态。待审批：`PENDING`，已通过：`APPROVED`，已拒绝：`DENY`。
     * @param string $CreatedTime 审批单创建时间。
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
        if (array_key_exists("ServiceProvider",$param) and $param["ServiceProvider"] !== null) {
            $this->ServiceProvider = $param["ServiceProvider"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("Company",$param) and $param["Company"] !== null) {
            $this->Company = $param["Company"];
        }

        if (array_key_exists("UniformSocialCreditCode",$param) and $param["UniformSocialCreditCode"] !== null) {
            $this->UniformSocialCreditCode = $param["UniformSocialCreditCode"];
        }

        if (array_key_exists("LegalPerson",$param) and $param["LegalPerson"] !== null) {
            $this->LegalPerson = $param["LegalPerson"];
        }

        if (array_key_exists("IssuingAuthority",$param) and $param["IssuingAuthority"] !== null) {
            $this->IssuingAuthority = $param["IssuingAuthority"];
        }

        if (array_key_exists("BusinessLicense",$param) and $param["BusinessLicense"] !== null) {
            $this->BusinessLicense = $param["BusinessLicense"];
        }

        if (array_key_exists("BusinessAddress",$param) and $param["BusinessAddress"] !== null) {
            $this->BusinessAddress = $param["BusinessAddress"];
        }

        if (array_key_exists("PostCode",$param) and $param["PostCode"] !== null) {
            $this->PostCode = $param["PostCode"];
        }

        if (array_key_exists("Manager",$param) and $param["Manager"] !== null) {
            $this->Manager = $param["Manager"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("ManagerIdCard",$param) and $param["ManagerIdCard"] !== null) {
            $this->ManagerIdCard = $param["ManagerIdCard"];
        }

        if (array_key_exists("ManagerAddress",$param) and $param["ManagerAddress"] !== null) {
            $this->ManagerAddress = $param["ManagerAddress"];
        }

        if (array_key_exists("ManagerTelephone",$param) and $param["ManagerTelephone"] !== null) {
            $this->ManagerTelephone = $param["ManagerTelephone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ServiceHandlingForm",$param) and $param["ServiceHandlingForm"] !== null) {
            $this->ServiceHandlingForm = $param["ServiceHandlingForm"];
        }

        if (array_key_exists("AuthorizationLetter",$param) and $param["AuthorizationLetter"] !== null) {
            $this->AuthorizationLetter = $param["AuthorizationLetter"];
        }

        if (array_key_exists("SafetyCommitment",$param) and $param["SafetyCommitment"] !== null) {
            $this->SafetyCommitment = $param["SafetyCommitment"];
        }

        if (array_key_exists("ServiceStartDate",$param) and $param["ServiceStartDate"] !== null) {
            $this->ServiceStartDate = $param["ServiceStartDate"];
        }

        if (array_key_exists("ServiceEndDate",$param) and $param["ServiceEndDate"] !== null) {
            $this->ServiceEndDate = $param["ServiceEndDate"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
