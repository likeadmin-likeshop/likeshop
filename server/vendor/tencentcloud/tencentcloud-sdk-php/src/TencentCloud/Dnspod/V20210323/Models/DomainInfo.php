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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名详情
 *
 * @method integer getDomainId() 获取域名ID
 * @method void setDomainId(integer $DomainId) 设置域名ID
 * @method string getStatus() 获取域名状态
 * @method void setStatus(string $Status) 设置域名状态
 * @method string getGrade() 获取域名套餐等级
 * @method void setGrade(string $Grade) 设置域名套餐等级
 * @method integer getGroupId() 获取域名分组ID
 * @method void setGroupId(integer $GroupId) 设置域名分组ID
 * @method string getIsMark() 获取是否星标域名
 * @method void setIsMark(string $IsMark) 设置是否星标域名
 * @method integer getTTL() 获取TTL(DNS记录缓存时间)
 * @method void setTTL(integer $TTL) 设置TTL(DNS记录缓存时间)
 * @method string getCnameSpeedup() 获取cname加速启用状态
 * @method void setCnameSpeedup(string $CnameSpeedup) 设置cname加速启用状态
 * @method string getRemark() 获取域名备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置域名备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPunycode() 获取域名Punycode
 * @method void setPunycode(string $Punycode) 设置域名Punycode
 * @method string getDnsStatus() 获取域名DNS状态
 * @method void setDnsStatus(string $DnsStatus) 设置域名DNS状态
 * @method array getDnspodNsList() 获取域名的NS列表
 * @method void setDnspodNsList(array $DnspodNsList) 设置域名的NS列表
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getGradeLevel() 获取域名等级代号
 * @method void setGradeLevel(integer $GradeLevel) 设置域名等级代号
 * @method integer getUserId() 获取域名所属的用户ID
 * @method void setUserId(integer $UserId) 设置域名所属的用户ID
 * @method string getIsVip() 获取是否为付费域名
 * @method void setIsVip(string $IsVip) 设置是否为付费域名
 * @method string getOwner() 获取域名所有者的账号
 * @method void setOwner(string $Owner) 设置域名所有者的账号
 * @method string getGradeTitle() 获取域名等级的描述
 * @method void setGradeTitle(string $GradeTitle) 设置域名等级的描述
 * @method string getCreatedOn() 获取域名创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置域名创建时间
 * @method string getUpdatedOn() 获取最后操作时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置最后操作时间
 * @method string getUin() 获取腾讯云账户Uin
 * @method void setUin(string $Uin) 设置腾讯云账户Uin
 * @method array getActualNsList() 获取域名实际使用的NS列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActualNsList(array $ActualNsList) 设置域名实际使用的NS列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordCount() 获取域名的记录数量
 * @method void setRecordCount(integer $RecordCount) 设置域名的记录数量
 * @method string getOwnerNick() 获取域名所有者的账户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerNick(string $OwnerNick) 设置域名所有者的账户昵称
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var integer 域名ID
     */
    public $DomainId;

    /**
     * @var string 域名状态
     */
    public $Status;

    /**
     * @var string 域名套餐等级
     */
    public $Grade;

    /**
     * @var integer 域名分组ID
     */
    public $GroupId;

    /**
     * @var string 是否星标域名
     */
    public $IsMark;

    /**
     * @var integer TTL(DNS记录缓存时间)
     */
    public $TTL;

    /**
     * @var string cname加速启用状态
     */
    public $CnameSpeedup;

    /**
     * @var string 域名备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 域名Punycode
     */
    public $Punycode;

    /**
     * @var string 域名DNS状态
     */
    public $DnsStatus;

    /**
     * @var array 域名的NS列表
     */
    public $DnspodNsList;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 域名等级代号
     */
    public $GradeLevel;

    /**
     * @var integer 域名所属的用户ID
     */
    public $UserId;

    /**
     * @var string 是否为付费域名
     */
    public $IsVip;

    /**
     * @var string 域名所有者的账号
     */
    public $Owner;

    /**
     * @var string 域名等级的描述
     */
    public $GradeTitle;

    /**
     * @var string 域名创建时间
     */
    public $CreatedOn;

    /**
     * @var string 最后操作时间
     */
    public $UpdatedOn;

    /**
     * @var string 腾讯云账户Uin
     */
    public $Uin;

    /**
     * @var array 域名实际使用的NS列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActualNsList;

    /**
     * @var integer 域名的记录数量
     */
    public $RecordCount;

    /**
     * @var string 域名所有者的账户昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerNick;

    /**
     * @param integer $DomainId 域名ID
     * @param string $Status 域名状态
     * @param string $Grade 域名套餐等级
     * @param integer $GroupId 域名分组ID
     * @param string $IsMark 是否星标域名
     * @param integer $TTL TTL(DNS记录缓存时间)
     * @param string $CnameSpeedup cname加速启用状态
     * @param string $Remark 域名备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Punycode 域名Punycode
     * @param string $DnsStatus 域名DNS状态
     * @param array $DnspodNsList 域名的NS列表
     * @param string $Domain 域名
     * @param integer $GradeLevel 域名等级代号
     * @param integer $UserId 域名所属的用户ID
     * @param string $IsVip 是否为付费域名
     * @param string $Owner 域名所有者的账号
     * @param string $GradeTitle 域名等级的描述
     * @param string $CreatedOn 域名创建时间
     * @param string $UpdatedOn 最后操作时间
     * @param string $Uin 腾讯云账户Uin
     * @param array $ActualNsList 域名实际使用的NS列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordCount 域名的记录数量
     * @param string $OwnerNick 域名所有者的账户昵称
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("IsMark",$param) and $param["IsMark"] !== null) {
            $this->IsMark = $param["IsMark"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("CnameSpeedup",$param) and $param["CnameSpeedup"] !== null) {
            $this->CnameSpeedup = $param["CnameSpeedup"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Punycode",$param) and $param["Punycode"] !== null) {
            $this->Punycode = $param["Punycode"];
        }

        if (array_key_exists("DnsStatus",$param) and $param["DnsStatus"] !== null) {
            $this->DnsStatus = $param["DnsStatus"];
        }

        if (array_key_exists("DnspodNsList",$param) and $param["DnspodNsList"] !== null) {
            $this->DnspodNsList = $param["DnspodNsList"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("GradeLevel",$param) and $param["GradeLevel"] !== null) {
            $this->GradeLevel = $param["GradeLevel"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("GradeTitle",$param) and $param["GradeTitle"] !== null) {
            $this->GradeTitle = $param["GradeTitle"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ActualNsList",$param) and $param["ActualNsList"] !== null) {
            $this->ActualNsList = $param["ActualNsList"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("OwnerNick",$param) and $param["OwnerNick"] !== null) {
            $this->OwnerNick = $param["OwnerNick"];
        }
    }
}
