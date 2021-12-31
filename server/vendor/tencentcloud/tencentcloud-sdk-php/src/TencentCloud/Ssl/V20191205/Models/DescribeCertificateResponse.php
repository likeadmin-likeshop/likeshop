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
 * DescribeCertificate返回参数结构体
 *
 * @method string getOwnerUin() 获取用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrom() 获取证书来源：trustasia = 亚洲诚信，upload = 用户上传。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrom(string $From) 设置证书来源：trustasia = 亚洲诚信，upload = 用户上传。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificateType() 获取证书类型：CA = 客户端证书，SVR = 服务器证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateType(string $CertificateType) 设置证书类型：CA = 客户端证书，SVR = 服务器证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageType() 获取证书套餐类型：1 = GeoTrust DV SSL CA - G3， 2 = TrustAsia TLS RSA CA， 3 = SecureSite 增强型企业版（EV Pro）， 4 = SecureSite 增强型（EV）， 5 = SecureSite 企业型专业版（OV Pro）， 6 = SecureSite 企业型（OV）， 7 = SecureSite 企业型（OV）通配符， 8 = Geotrust 增强型（EV）， 9 = Geotrust 企业型（OV）， 10 = Geotrust 企业型（OV）通配符， 11 = TrustAsia 域名型多域名 SSL 证书， 12 = TrustAsia 域名型（DV）通配符， 13 = TrustAsia 企业型通配符（OV）SSL 证书（D3）， 14 = TrustAsia 企业型（OV）SSL 证书（D3）， 15 = TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 16 = TrustAsia 增强型 （EV）SSL 证书（D3）， 17 = TrustAsia 增强型多域名（EV）SSL 证书（D3）， 18 = GlobalSign 企业型（OV）SSL 证书， 19 = GlobalSign 企业型通配符 （OV）SSL 证书， 20 = GlobalSign 增强型 （EV）SSL 证书， 21 = TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 22 = GlobalSign 企业型多域名（OV）SSL 证书， 23 = GlobalSign 企业型通配符多域名（OV）SSL 证书， 24 = GlobalSign 增强型多域名（EV）SSL 证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageType(string $PackageType) 设置证书套餐类型：1 = GeoTrust DV SSL CA - G3， 2 = TrustAsia TLS RSA CA， 3 = SecureSite 增强型企业版（EV Pro）， 4 = SecureSite 增强型（EV）， 5 = SecureSite 企业型专业版（OV Pro）， 6 = SecureSite 企业型（OV）， 7 = SecureSite 企业型（OV）通配符， 8 = Geotrust 增强型（EV）， 9 = Geotrust 企业型（OV）， 10 = Geotrust 企业型（OV）通配符， 11 = TrustAsia 域名型多域名 SSL 证书， 12 = TrustAsia 域名型（DV）通配符， 13 = TrustAsia 企业型通配符（OV）SSL 证书（D3）， 14 = TrustAsia 企业型（OV）SSL 证书（D3）， 15 = TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 16 = TrustAsia 增强型 （EV）SSL 证书（D3）， 17 = TrustAsia 增强型多域名（EV）SSL 证书（D3）， 18 = GlobalSign 企业型（OV）SSL 证书， 19 = GlobalSign 企业型通配符 （OV）SSL 证书， 20 = GlobalSign 增强型 （EV）SSL 证书， 21 = TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 22 = GlobalSign 企业型多域名（OV）SSL 证书， 23 = GlobalSign 企业型通配符多域名（OV）SSL 证书， 24 = GlobalSign 增强型多域名（EV）SSL 证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductZhName() 获取证书颁发者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductZhName(string $ProductZhName) 设置证书颁发者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取备注名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置备注名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusMsg() 获取状态信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusMsg(string $StatusMsg) 设置状态信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyType() 获取验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyType(string $VerifyType) 设置验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityStatus() 获取漏洞扫描状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) 设置漏洞扫描状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertBeginTime() 获取证书生效时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertBeginTime(string $CertBeginTime) 设置证书生效时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertEndTime() 获取证书失效时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertEndTime(string $CertEndTime) 设置证书失效时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidityPeriod() 获取证书有效期：单位(月)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidityPeriod(string $ValidityPeriod) 设置证书有效期：单位(月)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsertTime() 获取申请时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(string $InsertTime) 设置申请时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderId() 获取订单 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置订单 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CertificateExtra getCertificateExtra() 获取证书扩展信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) 设置证书扩展信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DvAuthDetail getDvAuthDetail() 获取DV 认证信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthDetail(DvAuthDetail $DvAuthDetail) 设置DV 认证信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityReport() 获取漏洞扫描评估报告。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityReport(string $VulnerabilityReport) 设置漏洞扫描评估报告。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificateId() 获取证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageTypeName() 获取证书类型名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageTypeName(string $PackageTypeName) 设置证书类型名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusName() 获取状态描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusName(string $StatusName) 设置状态描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubjectAltName() 获取证书包含的多个域名（包含主域名）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubjectAltName(array $SubjectAltName) 设置证书包含的多个域名（包含主域名）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVip() 获取是否为 VIP 客户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVip(boolean $IsVip) 设置是否为 VIP 客户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsWildcard() 获取是否为泛域名证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWildcard(boolean $IsWildcard) 设置是否为泛域名证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDv() 获取是否为 DV 版证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDv(boolean $IsDv) 设置是否为 DV 版证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVulnerability() 获取是否启用了漏洞扫描功能。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVulnerability(boolean $IsVulnerability) 设置是否启用了漏洞扫描功能。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRenewAble() 获取是否可重颁发证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewAble(boolean $RenewAble) 设置是否可重颁发证书。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SubmittedData getSubmittedData() 获取提交的资料信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmittedData(SubmittedData $SubmittedData) 设置提交的资料信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeployable() 获取是否可部署。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployable(boolean $Deployable) 设置是否可部署。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertificateResponse extends AbstractModel
{
    /**
     * @var string 用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 证书来源：trustasia = 亚洲诚信，upload = 用户上传。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $From;

    /**
     * @var string 证书类型：CA = 客户端证书，SVR = 服务器证书。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateType;

    /**
     * @var string 证书套餐类型：1 = GeoTrust DV SSL CA - G3， 2 = TrustAsia TLS RSA CA， 3 = SecureSite 增强型企业版（EV Pro）， 4 = SecureSite 增强型（EV）， 5 = SecureSite 企业型专业版（OV Pro）， 6 = SecureSite 企业型（OV）， 7 = SecureSite 企业型（OV）通配符， 8 = Geotrust 增强型（EV）， 9 = Geotrust 企业型（OV）， 10 = Geotrust 企业型（OV）通配符， 11 = TrustAsia 域名型多域名 SSL 证书， 12 = TrustAsia 域名型（DV）通配符， 13 = TrustAsia 企业型通配符（OV）SSL 证书（D3）， 14 = TrustAsia 企业型（OV）SSL 证书（D3）， 15 = TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 16 = TrustAsia 增强型 （EV）SSL 证书（D3）， 17 = TrustAsia 增强型多域名（EV）SSL 证书（D3）， 18 = GlobalSign 企业型（OV）SSL 证书， 19 = GlobalSign 企业型通配符 （OV）SSL 证书， 20 = GlobalSign 增强型 （EV）SSL 证书， 21 = TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 22 = GlobalSign 企业型多域名（OV）SSL 证书， 23 = GlobalSign 企业型通配符多域名（OV）SSL 证书， 24 = GlobalSign 增强型多域名（EV）SSL 证书。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var string 证书颁发者名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductZhName;

    /**
     * @var string 域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 备注名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var integer 证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 状态信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusMsg;

    /**
     * @var string 验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyType;

    /**
     * @var string 漏洞扫描状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulnerabilityStatus;

    /**
     * @var string 证书生效时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertBeginTime;

    /**
     * @var string 证书失效时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertEndTime;

    /**
     * @var string 证书有效期：单位(月)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidityPeriod;

    /**
     * @var string 申请时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var string 订单 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @var CertificateExtra 证书扩展信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateExtra;

    /**
     * @var DvAuthDetail DV 认证信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthDetail;

    /**
     * @var string 漏洞扫描评估报告。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulnerabilityReport;

    /**
     * @var string 证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateId;

    /**
     * @var string 证书类型名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageTypeName;

    /**
     * @var string 状态描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusName;

    /**
     * @var array 证书包含的多个域名（包含主域名）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubjectAltName;

    /**
     * @var boolean 是否为 VIP 客户。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVip;

    /**
     * @var boolean 是否为泛域名证书。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWildcard;

    /**
     * @var boolean 是否为 DV 版证书。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDv;

    /**
     * @var boolean 是否启用了漏洞扫描功能。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVulnerability;

    /**
     * @var boolean 是否可重颁发证书。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewAble;

    /**
     * @var SubmittedData 提交的资料信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmittedData;

    /**
     * @var boolean 是否可部署。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deployable;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OwnerUin 用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $From 证书来源：trustasia = 亚洲诚信，upload = 用户上传。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificateType 证书类型：CA = 客户端证书，SVR = 服务器证书。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageType 证书套餐类型：1 = GeoTrust DV SSL CA - G3， 2 = TrustAsia TLS RSA CA， 3 = SecureSite 增强型企业版（EV Pro）， 4 = SecureSite 增强型（EV）， 5 = SecureSite 企业型专业版（OV Pro）， 6 = SecureSite 企业型（OV）， 7 = SecureSite 企业型（OV）通配符， 8 = Geotrust 增强型（EV）， 9 = Geotrust 企业型（OV）， 10 = Geotrust 企业型（OV）通配符， 11 = TrustAsia 域名型多域名 SSL 证书， 12 = TrustAsia 域名型（DV）通配符， 13 = TrustAsia 企业型通配符（OV）SSL 证书（D3）， 14 = TrustAsia 企业型（OV）SSL 证书（D3）， 15 = TrustAsia 企业型多域名 （OV）SSL 证书（D3）， 16 = TrustAsia 增强型 （EV）SSL 证书（D3）， 17 = TrustAsia 增强型多域名（EV）SSL 证书（D3）， 18 = GlobalSign 企业型（OV）SSL 证书， 19 = GlobalSign 企业型通配符 （OV）SSL 证书， 20 = GlobalSign 增强型 （EV）SSL 证书， 21 = TrustAsia 企业型通配符多域名（OV）SSL 证书（D3）， 22 = GlobalSign 企业型多域名（OV）SSL 证书， 23 = GlobalSign 企业型通配符多域名（OV）SSL 证书， 24 = GlobalSign 增强型多域名（EV）SSL 证书。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductZhName 证书颁发者名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias 备注名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 证书状态：0 = 审核中，1 = 已通过，2 = 审核失败，3 = 已过期，4 = 已添加DNS记录，5 = 企业证书，待提交，6 = 订单取消中，7 = 已取消，8 = 已提交资料， 待上传确认函，9 = 证书吊销中，10 = 已吊销，11 = 重颁发中，12 = 待上传吊销确认函。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusMsg 状态信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyType 验证类型：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证，EMAIL = 邮件验证。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityStatus 漏洞扫描状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertBeginTime 证书生效时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertEndTime 证书失效时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidityPeriod 证书有效期：单位(月)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsertTime 申请时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderId 订单 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CertificateExtra $CertificateExtra 证书扩展信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DvAuthDetail $DvAuthDetail DV 认证信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityReport 漏洞扫描评估报告。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertificateId 证书 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageTypeName 证书类型名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusName 状态描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubjectAltName 证书包含的多个域名（包含主域名）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVip 是否为 VIP 客户。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsWildcard 是否为泛域名证书。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDv 是否为 DV 版证书。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVulnerability 是否启用了漏洞扫描功能。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RenewAble 是否可重颁发证书。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SubmittedData $SubmittedData 提交的资料信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Deployable 是否可部署。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
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

        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("VulnerabilityStatus",$param) and $param["VulnerabilityStatus"] !== null) {
            $this->VulnerabilityStatus = $param["VulnerabilityStatus"];
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

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("CertificateExtra",$param) and $param["CertificateExtra"] !== null) {
            $this->CertificateExtra = new CertificateExtra();
            $this->CertificateExtra->deserialize($param["CertificateExtra"]);
        }

        if (array_key_exists("DvAuthDetail",$param) and $param["DvAuthDetail"] !== null) {
            $this->DvAuthDetail = new DvAuthDetail();
            $this->DvAuthDetail->deserialize($param["DvAuthDetail"]);
        }

        if (array_key_exists("VulnerabilityReport",$param) and $param["VulnerabilityReport"] !== null) {
            $this->VulnerabilityReport = $param["VulnerabilityReport"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("PackageTypeName",$param) and $param["PackageTypeName"] !== null) {
            $this->PackageTypeName = $param["PackageTypeName"];
        }

        if (array_key_exists("StatusName",$param) and $param["StatusName"] !== null) {
            $this->StatusName = $param["StatusName"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("IsWildcard",$param) and $param["IsWildcard"] !== null) {
            $this->IsWildcard = $param["IsWildcard"];
        }

        if (array_key_exists("IsDv",$param) and $param["IsDv"] !== null) {
            $this->IsDv = $param["IsDv"];
        }

        if (array_key_exists("IsVulnerability",$param) and $param["IsVulnerability"] !== null) {
            $this->IsVulnerability = $param["IsVulnerability"];
        }

        if (array_key_exists("RenewAble",$param) and $param["RenewAble"] !== null) {
            $this->RenewAble = $param["RenewAble"];
        }

        if (array_key_exists("SubmittedData",$param) and $param["SubmittedData"] !== null) {
            $this->SubmittedData = new SubmittedData();
            $this->SubmittedData->deserialize($param["SubmittedData"]);
        }

        if (array_key_exists("Deployable",$param) and $param["Deployable"] !== null) {
            $this->Deployable = $param["Deployable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
