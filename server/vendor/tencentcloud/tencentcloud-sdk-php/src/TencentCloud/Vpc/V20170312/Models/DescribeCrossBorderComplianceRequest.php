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
 * DescribeCrossBorderCompliance请求参数结构体
 *
 * @method string getServiceProvider() 获取（精确匹配）服务商，可选值：`UNICOM`。
 * @method void setServiceProvider(string $ServiceProvider) 设置（精确匹配）服务商，可选值：`UNICOM`。
 * @method integer getComplianceId() 获取（精确匹配）合规化审批单`ID`。
 * @method void setComplianceId(integer $ComplianceId) 设置（精确匹配）合规化审批单`ID`。
 * @method string getCompany() 获取（模糊查询）公司名称。
 * @method void setCompany(string $Company) 设置（模糊查询）公司名称。
 * @method string getUniformSocialCreditCode() 获取（精确匹配）统一社会信用代码。
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置（精确匹配）统一社会信用代码。
 * @method string getLegalPerson() 获取（模糊查询）法定代表人。
 * @method void setLegalPerson(string $LegalPerson) 设置（模糊查询）法定代表人。
 * @method string getIssuingAuthority() 获取（模糊查询）发证机关。
 * @method void setIssuingAuthority(string $IssuingAuthority) 设置（模糊查询）发证机关。
 * @method string getBusinessAddress() 获取（模糊查询）营业执照住所。
 * @method void setBusinessAddress(string $BusinessAddress) 设置（模糊查询）营业执照住所。
 * @method integer getPostCode() 获取（精确匹配）邮编。
 * @method void setPostCode(integer $PostCode) 设置（精确匹配）邮编。
 * @method string getManager() 获取（模糊查询）经办人。
 * @method void setManager(string $Manager) 设置（模糊查询）经办人。
 * @method string getManagerId() 获取（精确查询）经办人身份证号。
 * @method void setManagerId(string $ManagerId) 设置（精确查询）经办人身份证号。
 * @method string getManagerAddress() 获取（模糊查询）经办人身份证地址。
 * @method void setManagerAddress(string $ManagerAddress) 设置（模糊查询）经办人身份证地址。
 * @method string getManagerTelephone() 获取（精确匹配）经办人联系电话。
 * @method void setManagerTelephone(string $ManagerTelephone) 设置（精确匹配）经办人联系电话。
 * @method string getEmail() 获取（精确匹配）电子邮箱。
 * @method void setEmail(string $Email) 设置（精确匹配）电子邮箱。
 * @method string getServiceStartDate() 获取（精确匹配）服务开始日期，如：`2020-07-28`。
 * @method void setServiceStartDate(string $ServiceStartDate) 设置（精确匹配）服务开始日期，如：`2020-07-28`。
 * @method string getServiceEndDate() 获取（精确匹配）服务结束日期，如：`2021-07-28`。
 * @method void setServiceEndDate(string $ServiceEndDate) 设置（精确匹配）服务结束日期，如：`2021-07-28`。
 * @method string getState() 获取（精确匹配）状态。待审批：`PENDING`，通过：`APPROVED `，拒绝：`DENY`。
 * @method void setState(string $State) 设置（精确匹配）状态。待审批：`PENDING`，通过：`APPROVED `，拒绝：`DENY`。
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回数量
 * @method void setLimit(integer $Limit) 设置返回数量
 */
class DescribeCrossBorderComplianceRequest extends AbstractModel
{
    /**
     * @var string （精确匹配）服务商，可选值：`UNICOM`。
     */
    public $ServiceProvider;

    /**
     * @var integer （精确匹配）合规化审批单`ID`。
     */
    public $ComplianceId;

    /**
     * @var string （模糊查询）公司名称。
     */
    public $Company;

    /**
     * @var string （精确匹配）统一社会信用代码。
     */
    public $UniformSocialCreditCode;

    /**
     * @var string （模糊查询）法定代表人。
     */
    public $LegalPerson;

    /**
     * @var string （模糊查询）发证机关。
     */
    public $IssuingAuthority;

    /**
     * @var string （模糊查询）营业执照住所。
     */
    public $BusinessAddress;

    /**
     * @var integer （精确匹配）邮编。
     */
    public $PostCode;

    /**
     * @var string （模糊查询）经办人。
     */
    public $Manager;

    /**
     * @var string （精确查询）经办人身份证号。
     */
    public $ManagerId;

    /**
     * @var string （模糊查询）经办人身份证地址。
     */
    public $ManagerAddress;

    /**
     * @var string （精确匹配）经办人联系电话。
     */
    public $ManagerTelephone;

    /**
     * @var string （精确匹配）电子邮箱。
     */
    public $Email;

    /**
     * @var string （精确匹配）服务开始日期，如：`2020-07-28`。
     */
    public $ServiceStartDate;

    /**
     * @var string （精确匹配）服务结束日期，如：`2021-07-28`。
     */
    public $ServiceEndDate;

    /**
     * @var string （精确匹配）状态。待审批：`PENDING`，通过：`APPROVED `，拒绝：`DENY`。
     */
    public $State;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回数量
     */
    public $Limit;

    /**
     * @param string $ServiceProvider （精确匹配）服务商，可选值：`UNICOM`。
     * @param integer $ComplianceId （精确匹配）合规化审批单`ID`。
     * @param string $Company （模糊查询）公司名称。
     * @param string $UniformSocialCreditCode （精确匹配）统一社会信用代码。
     * @param string $LegalPerson （模糊查询）法定代表人。
     * @param string $IssuingAuthority （模糊查询）发证机关。
     * @param string $BusinessAddress （模糊查询）营业执照住所。
     * @param integer $PostCode （精确匹配）邮编。
     * @param string $Manager （模糊查询）经办人。
     * @param string $ManagerId （精确查询）经办人身份证号。
     * @param string $ManagerAddress （模糊查询）经办人身份证地址。
     * @param string $ManagerTelephone （精确匹配）经办人联系电话。
     * @param string $Email （精确匹配）电子邮箱。
     * @param string $ServiceStartDate （精确匹配）服务开始日期，如：`2020-07-28`。
     * @param string $ServiceEndDate （精确匹配）服务结束日期，如：`2021-07-28`。
     * @param string $State （精确匹配）状态。待审批：`PENDING`，通过：`APPROVED `，拒绝：`DENY`。
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回数量
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

        if (array_key_exists("ManagerAddress",$param) and $param["ManagerAddress"] !== null) {
            $this->ManagerAddress = $param["ManagerAddress"];
        }

        if (array_key_exists("ManagerTelephone",$param) and $param["ManagerTelephone"] !== null) {
            $this->ManagerTelephone = $param["ManagerTelephone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
