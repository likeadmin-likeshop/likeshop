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
 * 域名列表元素
 *
 * @method integer getDomainId() 获取系统分配给域名的唯一标识
 * @method void setDomainId(integer $DomainId) 设置系统分配给域名的唯一标识
 * @method string getName() 获取域名的原始格式
 * @method void setName(string $Name) 设置域名的原始格式
 * @method string getStatus() 获取域名的状态，正常：ENABLE，暂停：PAUSE，封禁：SPAM
 * @method void setStatus(string $Status) 设置域名的状态，正常：ENABLE，暂停：PAUSE，封禁：SPAM
 * @method integer getTTL() 获取域名默认的解析记录默认TTL值
 * @method void setTTL(integer $TTL) 设置域名默认的解析记录默认TTL值
 * @method string getCNAMESpeedup() 获取是否开启CNAME加速，开启：ENABLE，未开启：DISABLE
 * @method void setCNAMESpeedup(string $CNAMESpeedup) 设置是否开启CNAME加速，开启：ENABLE，未开启：DISABLE
 * @method string getDNSStatus() 获取DNS 设置状态，错误：DNSERROR，正常：空字符串
 * @method void setDNSStatus(string $DNSStatus) 设置DNS 设置状态，错误：DNSERROR，正常：空字符串
 * @method string getGrade() 获取域名的套餐等级代码
 * @method void setGrade(string $Grade) 设置域名的套餐等级代码
 * @method integer getGroupId() 获取域名所属的分组Id
 * @method void setGroupId(integer $GroupId) 设置域名所属的分组Id
 * @method string getSearchEnginePush() 获取是否开启搜索引擎推送优化，是：YES，否：NO
 * @method void setSearchEnginePush(string $SearchEnginePush) 设置是否开启搜索引擎推送优化，是：YES，否：NO
 * @method string getRemark() 获取域名备注说明
 * @method void setRemark(string $Remark) 设置域名备注说明
 * @method string getPunycode() 获取经过punycode编码后的域名格式
 * @method void setPunycode(string $Punycode) 设置经过punycode编码后的域名格式
 * @method array getEffectiveDNS() 获取系统为域名分配的有效DNS
 * @method void setEffectiveDNS(array $EffectiveDNS) 设置系统为域名分配的有效DNS
 * @method integer getGradeLevel() 获取域名套餐等级对应的序号
 * @method void setGradeLevel(integer $GradeLevel) 设置域名套餐等级对应的序号
 * @method string getGradeTitle() 获取套餐名称
 * @method void setGradeTitle(string $GradeTitle) 设置套餐名称
 * @method string getIsVip() 获取是否是付费套餐
 * @method void setIsVip(string $IsVip) 设置是否是付费套餐
 * @method string getVipStartAt() 获取付费套餐开通时间
 * @method void setVipStartAt(string $VipStartAt) 设置付费套餐开通时间
 * @method string getVipEndAt() 获取付费套餐到期时间
 * @method void setVipEndAt(string $VipEndAt) 设置付费套餐到期时间
 * @method string getVipAutoRenew() 获取域名是否开通VIP自动续费，是：YES，否：NO，默认：DEFAULT
 * @method void setVipAutoRenew(string $VipAutoRenew) 设置域名是否开通VIP自动续费，是：YES，否：NO，默认：DEFAULT
 * @method integer getRecordCount() 获取域名下的记录数量
 * @method void setRecordCount(integer $RecordCount) 设置域名下的记录数量
 * @method string getCreatedOn() 获取域名添加时间
 * @method void setCreatedOn(string $CreatedOn) 设置域名添加时间
 * @method string getUpdatedOn() 获取域名更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置域名更新时间
 * @method string getOwner() 获取域名所属账号
 * @method void setOwner(string $Owner) 设置域名所属账号
 */
class DomainListItem extends AbstractModel
{
    /**
     * @var integer 系统分配给域名的唯一标识
     */
    public $DomainId;

    /**
     * @var string 域名的原始格式
     */
    public $Name;

    /**
     * @var string 域名的状态，正常：ENABLE，暂停：PAUSE，封禁：SPAM
     */
    public $Status;

    /**
     * @var integer 域名默认的解析记录默认TTL值
     */
    public $TTL;

    /**
     * @var string 是否开启CNAME加速，开启：ENABLE，未开启：DISABLE
     */
    public $CNAMESpeedup;

    /**
     * @var string DNS 设置状态，错误：DNSERROR，正常：空字符串
     */
    public $DNSStatus;

    /**
     * @var string 域名的套餐等级代码
     */
    public $Grade;

    /**
     * @var integer 域名所属的分组Id
     */
    public $GroupId;

    /**
     * @var string 是否开启搜索引擎推送优化，是：YES，否：NO
     */
    public $SearchEnginePush;

    /**
     * @var string 域名备注说明
     */
    public $Remark;

    /**
     * @var string 经过punycode编码后的域名格式
     */
    public $Punycode;

    /**
     * @var array 系统为域名分配的有效DNS
     */
    public $EffectiveDNS;

    /**
     * @var integer 域名套餐等级对应的序号
     */
    public $GradeLevel;

    /**
     * @var string 套餐名称
     */
    public $GradeTitle;

    /**
     * @var string 是否是付费套餐
     */
    public $IsVip;

    /**
     * @var string 付费套餐开通时间
     */
    public $VipStartAt;

    /**
     * @var string 付费套餐到期时间
     */
    public $VipEndAt;

    /**
     * @var string 域名是否开通VIP自动续费，是：YES，否：NO，默认：DEFAULT
     */
    public $VipAutoRenew;

    /**
     * @var integer 域名下的记录数量
     */
    public $RecordCount;

    /**
     * @var string 域名添加时间
     */
    public $CreatedOn;

    /**
     * @var string 域名更新时间
     */
    public $UpdatedOn;

    /**
     * @var string 域名所属账号
     */
    public $Owner;

    /**
     * @param integer $DomainId 系统分配给域名的唯一标识
     * @param string $Name 域名的原始格式
     * @param string $Status 域名的状态，正常：ENABLE，暂停：PAUSE，封禁：SPAM
     * @param integer $TTL 域名默认的解析记录默认TTL值
     * @param string $CNAMESpeedup 是否开启CNAME加速，开启：ENABLE，未开启：DISABLE
     * @param string $DNSStatus DNS 设置状态，错误：DNSERROR，正常：空字符串
     * @param string $Grade 域名的套餐等级代码
     * @param integer $GroupId 域名所属的分组Id
     * @param string $SearchEnginePush 是否开启搜索引擎推送优化，是：YES，否：NO
     * @param string $Remark 域名备注说明
     * @param string $Punycode 经过punycode编码后的域名格式
     * @param array $EffectiveDNS 系统为域名分配的有效DNS
     * @param integer $GradeLevel 域名套餐等级对应的序号
     * @param string $GradeTitle 套餐名称
     * @param string $IsVip 是否是付费套餐
     * @param string $VipStartAt 付费套餐开通时间
     * @param string $VipEndAt 付费套餐到期时间
     * @param string $VipAutoRenew 域名是否开通VIP自动续费，是：YES，否：NO，默认：DEFAULT
     * @param integer $RecordCount 域名下的记录数量
     * @param string $CreatedOn 域名添加时间
     * @param string $UpdatedOn 域名更新时间
     * @param string $Owner 域名所属账号
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("CNAMESpeedup",$param) and $param["CNAMESpeedup"] !== null) {
            $this->CNAMESpeedup = $param["CNAMESpeedup"];
        }

        if (array_key_exists("DNSStatus",$param) and $param["DNSStatus"] !== null) {
            $this->DNSStatus = $param["DNSStatus"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SearchEnginePush",$param) and $param["SearchEnginePush"] !== null) {
            $this->SearchEnginePush = $param["SearchEnginePush"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Punycode",$param) and $param["Punycode"] !== null) {
            $this->Punycode = $param["Punycode"];
        }

        if (array_key_exists("EffectiveDNS",$param) and $param["EffectiveDNS"] !== null) {
            $this->EffectiveDNS = $param["EffectiveDNS"];
        }

        if (array_key_exists("GradeLevel",$param) and $param["GradeLevel"] !== null) {
            $this->GradeLevel = $param["GradeLevel"];
        }

        if (array_key_exists("GradeTitle",$param) and $param["GradeTitle"] !== null) {
            $this->GradeTitle = $param["GradeTitle"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("VipStartAt",$param) and $param["VipStartAt"] !== null) {
            $this->VipStartAt = $param["VipStartAt"];
        }

        if (array_key_exists("VipEndAt",$param) and $param["VipEndAt"] !== null) {
            $this->VipEndAt = $param["VipEndAt"];
        }

        if (array_key_exists("VipAutoRenew",$param) and $param["VipAutoRenew"] !== null) {
            $this->VipAutoRenew = $param["VipAutoRenew"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
