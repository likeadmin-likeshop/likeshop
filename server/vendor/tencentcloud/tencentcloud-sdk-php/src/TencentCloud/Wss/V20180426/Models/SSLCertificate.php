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
namespace TencentCloud\Wss\V20180426\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取证书列表（SSLCertificate）返回参数键为 CertificateSet 的内容。
 *
 * @method string getOwnerUin() 获取所属账户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置所属账户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrom() 获取证书来源：trustasia = 亚洲诚信， upload = 用户上传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrom(string $From) 设置证书来源：trustasia = 亚洲诚信， upload = 用户上传
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取证书类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置证书类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertType() 获取证书类型（目前支持：CA = 客户端证书，SVR = 服务器证书）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertType(string $CertType) 设置证书类型（目前支持：CA = 客户端证书，SVR = 服务器证书）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductZhName() 获取证书办法者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductZhName(string $ProductZhName) 设置证书办法者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取主域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置主域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态值 0：审核中，1：已通过，2：审核失败，3：已过期，4：已添加云解析记录，5：OV/EV 证书，待提交资料，6：订单取消中，7：已取消，8：已提交资料， 待上传确认函
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态值 0：审核中，1：已通过，2：审核失败，3：已过期，4：已添加云解析记录，5：OV/EV 证书，待提交资料，6：订单取消中，7：已取消，8：已提交资料， 待上传确认函
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityStatus() 获取漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) 设置漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusMsg() 获取状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusMsg(string $StatusMsg) 设置状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyType() 获取验证类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyType(string $VerifyType) 设置验证类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertBeginTime() 获取证书生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertBeginTime(string $CertBeginTime) 设置证书生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertEndTime() 获取证书过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertEndTime(string $CertEndTime) 设置证书过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidityPeriod() 获取证书过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidityPeriod(string $ValidityPeriod) 设置证书过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsertTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(string $InsertTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method SSLProjectInfo getProjectInfo() 获取项目信息，ProjectId：项目ID，OwnerUin：项目所属的 uin（默认项目为0），Name：项目名称，CreatorUin：创建项目的 uin，CreateTime：项目创建时间，Info：项目说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectInfo(SSLProjectInfo $ProjectInfo) 设置项目信息，ProjectId：项目ID，OwnerUin：项目所属的 uin（默认项目为0），Name：项目名称，CreatorUin：创建项目的 uin，CreateTime：项目创建时间，Info：项目说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubjectAltName() 获取证书包含的多个域名（包含主域名）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubjectAltName(array $SubjectAltName) 设置证书包含的多个域名（包含主域名）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTypeName() 获取证书类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeName(string $TypeName) 设置证书类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusName() 获取状态名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusName(string $StatusName) 设置状态名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVip() 获取是否为 VIP 客户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVip(boolean $IsVip) 设置是否为 VIP 客户
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDv() 获取是否我 DV 版证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDv(boolean $IsDv) 设置是否我 DV 版证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsWildcard() 获取是否为泛域名证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWildcard(boolean $IsWildcard) 设置是否为泛域名证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVulnerability() 获取是否启用了漏洞扫描功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVulnerability(boolean $IsVulnerability) 设置是否启用了漏洞扫描功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCert() 获取证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCert(string $Cert) 设置证书
注意：此字段可能返回 null，表示取不到有效值。
 */
class SSLCertificate extends AbstractModel
{
    /**
     * @var string 所属账户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 证书来源：trustasia = 亚洲诚信， upload = 用户上传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $From;

    /**
     * @var string 证书类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 证书类型（目前支持：CA = 客户端证书，SVR = 服务器证书）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertType;

    /**
     * @var string 证书办法者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductZhName;

    /**
     * @var string 主域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var integer 状态值 0：审核中，1：已通过，2：审核失败，3：已过期，4：已添加云解析记录，5：OV/EV 证书，待提交资料，6：订单取消中，7：已取消，8：已提交资料， 待上传确认函
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulnerabilityStatus;

    /**
     * @var string 状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusMsg;

    /**
     * @var string 验证类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyType;

    /**
     * @var string 证书生效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertBeginTime;

    /**
     * @var string 证书过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertEndTime;

    /**
     * @var string 证书过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidityPeriod;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var SSLProjectInfo 项目信息，ProjectId：项目ID，OwnerUin：项目所属的 uin（默认项目为0），Name：项目名称，CreatorUin：创建项目的 uin，CreateTime：项目创建时间，Info：项目说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectInfo;

    /**
     * @var string 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var array 证书包含的多个域名（包含主域名）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubjectAltName;

    /**
     * @var string 证书类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeName;

    /**
     * @var string 状态名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusName;

    /**
     * @var boolean 是否为 VIP 客户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVip;

    /**
     * @var boolean 是否我 DV 版证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDv;

    /**
     * @var boolean 是否为泛域名证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWildcard;

    /**
     * @var boolean 是否启用了漏洞扫描功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVulnerability;

    /**
     * @var string 证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cert;

    /**
     * @param string $OwnerUin 所属账户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $From 证书来源：trustasia = 亚洲诚信， upload = 用户上传
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 证书类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertType 证书类型（目前支持：CA = 客户端证书，SVR = 服务器证书）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductZhName 证书办法者名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 主域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias 别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态值 0：审核中，1：已通过，2：审核失败，3：已过期，4：已添加云解析记录，5：OV/EV 证书，待提交资料，6：订单取消中，7：已取消，8：已提交资料， 待上传确认函
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityStatus 漏洞扫描状态：INACTIVE = 未开启，ACTIVE = 已开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusMsg 状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyType 验证类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertBeginTime 证书生效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertEndTime 证书过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidityPeriod 证书过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsertTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param SSLProjectInfo $ProjectInfo 项目信息，ProjectId：项目ID，OwnerUin：项目所属的 uin（默认项目为0），Name：项目名称，CreatorUin：创建项目的 uin，CreateTime：项目创建时间，Info：项目说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubjectAltName 证书包含的多个域名（包含主域名）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TypeName 证书类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusName 状态名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVip 是否为 VIP 客户
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDv 是否我 DV 版证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsWildcard 是否为泛域名证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVulnerability 是否启用了漏洞扫描功能
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cert 证书
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("ProductZhName",$param) and $param["ProductZhName"] !== null) {
            $this->ProductZhName = $param["ProductZhName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VulnerabilityStatus",$param) and $param["VulnerabilityStatus"] !== null) {
            $this->VulnerabilityStatus = $param["VulnerabilityStatus"];
        }

        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("CertBeginTime",$param) and $param["CertBeginTime"] !== null) {
            $this->CertBeginTime = $param["CertBeginTime"];
        }

        if (array_key_exists("CertEndTime",$param) and $param["CertEndTime"] !== null) {
            $this->CertEndTime = $param["CertEndTime"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("ProjectInfo",$param) and $param["ProjectInfo"] !== null) {
            $this->ProjectInfo = new SSLProjectInfo();
            $this->ProjectInfo->deserialize($param["ProjectInfo"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("StatusName",$param) and $param["StatusName"] !== null) {
            $this->StatusName = $param["StatusName"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("IsDv",$param) and $param["IsDv"] !== null) {
            $this->IsDv = $param["IsDv"];
        }

        if (array_key_exists("IsWildcard",$param) and $param["IsWildcard"] !== null) {
            $this->IsWildcard = $param["IsWildcard"];
        }

        if (array_key_exists("IsVulnerability",$param) and $param["IsVulnerability"] !== null) {
            $this->IsVulnerability = $param["IsVulnerability"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }
    }
}
