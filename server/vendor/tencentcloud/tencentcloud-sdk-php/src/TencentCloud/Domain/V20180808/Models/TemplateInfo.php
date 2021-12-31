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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Template数据
 *
 * @method string getTemplateId() 获取模板ID
 * @method void setTemplateId(string $TemplateId) 设置模板ID
 * @method string getAuditStatus() 获取认证状态：未实名认证:NotUpload, 实名审核中:InAudit，已实名认证:Approved，实名审核失败:Reject
 * @method void setAuditStatus(string $AuditStatus) 设置认证状态：未实名认证:NotUpload, 实名审核中:InAudit，已实名认证:Approved，实名审核失败:Reject
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getUpdatedOn() 获取更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
 * @method string getUserUin() 获取用户UIN
 * @method void setUserUin(string $UserUin) 设置用户UIN
 * @method string getIsDefault() 获取是否是默认模板: 是:yes，否:no
 * @method void setIsDefault(string $IsDefault) 设置是否是默认模板: 是:yes，否:no
 * @method string getAuditReason() 获取认证失败原因
 * @method void setAuditReason(string $AuditReason) 设置认证失败原因
 * @method CertificateInfo getCertificateInfo() 获取认证信息
 * @method void setCertificateInfo(CertificateInfo $CertificateInfo) 设置认证信息
 * @method ContactInfo getContactInfo() 获取联系人信息
 * @method void setContactInfo(ContactInfo $ContactInfo) 设置联系人信息
 * @method integer getIsValidTemplate() 获取模板是否符合规范， 1是 0 否
 * @method void setIsValidTemplate(integer $IsValidTemplate) 设置模板是否符合规范， 1是 0 否
 * @method string getInvalidReason() 获取不符合规范原因
 * @method void setInvalidReason(string $InvalidReason) 设置不符合规范原因
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var string 模板ID
     */
    public $TemplateId;

    /**
     * @var string 认证状态：未实名认证:NotUpload, 实名审核中:InAudit，已实名认证:Approved，实名审核失败:Reject
     */
    public $AuditStatus;

    /**
     * @var string 创建时间
     */
    public $CreatedOn;

    /**
     * @var string 更新时间
     */
    public $UpdatedOn;

    /**
     * @var string 用户UIN
     */
    public $UserUin;

    /**
     * @var string 是否是默认模板: 是:yes，否:no
     */
    public $IsDefault;

    /**
     * @var string 认证失败原因
     */
    public $AuditReason;

    /**
     * @var CertificateInfo 认证信息
     */
    public $CertificateInfo;

    /**
     * @var ContactInfo 联系人信息
     */
    public $ContactInfo;

    /**
     * @var integer 模板是否符合规范， 1是 0 否
     */
    public $IsValidTemplate;

    /**
     * @var string 不符合规范原因
     */
    public $InvalidReason;

    /**
     * @param string $TemplateId 模板ID
     * @param string $AuditStatus 认证状态：未实名认证:NotUpload, 实名审核中:InAudit，已实名认证:Approved，实名审核失败:Reject
     * @param string $CreatedOn 创建时间
     * @param string $UpdatedOn 更新时间
     * @param string $UserUin 用户UIN
     * @param string $IsDefault 是否是默认模板: 是:yes，否:no
     * @param string $AuditReason 认证失败原因
     * @param CertificateInfo $CertificateInfo 认证信息
     * @param ContactInfo $ContactInfo 联系人信息
     * @param integer $IsValidTemplate 模板是否符合规范， 1是 0 否
     * @param string $InvalidReason 不符合规范原因
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("AuditReason",$param) and $param["AuditReason"] !== null) {
            $this->AuditReason = $param["AuditReason"];
        }

        if (array_key_exists("CertificateInfo",$param) and $param["CertificateInfo"] !== null) {
            $this->CertificateInfo = new CertificateInfo();
            $this->CertificateInfo->deserialize($param["CertificateInfo"]);
        }

        if (array_key_exists("ContactInfo",$param) and $param["ContactInfo"] !== null) {
            $this->ContactInfo = new ContactInfo();
            $this->ContactInfo->deserialize($param["ContactInfo"]);
        }

        if (array_key_exists("IsValidTemplate",$param) and $param["IsValidTemplate"] !== null) {
            $this->IsValidTemplate = $param["IsValidTemplate"];
        }

        if (array_key_exists("InvalidReason",$param) and $param["InvalidReason"] !== null) {
            $this->InvalidReason = $param["InvalidReason"];
        }
    }
}
