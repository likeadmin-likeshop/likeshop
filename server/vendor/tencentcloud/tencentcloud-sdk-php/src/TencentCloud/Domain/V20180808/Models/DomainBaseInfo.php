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
 * 获取域名基础信息
 *
 * @method string getDomainId() 获取域名资源ID。
 * @method void setDomainId(string $DomainId) 设置域名资源ID。
 * @method string getDomainName() 获取域名名称。
 * @method void setDomainName(string $DomainName) 设置域名名称。
 * @method string getRealNameAuditStatus() 获取域名实名认证状态。
NotUpload：未实名认证
InAudit：实名审核中
Approved：实名审核通过
Reject：实名审核失败
 * @method void setRealNameAuditStatus(string $RealNameAuditStatus) 设置域名实名认证状态。
NotUpload：未实名认证
InAudit：实名审核中
Approved：实名审核通过
Reject：实名审核失败
 * @method string getRealNameAuditUnpassReason() 获取域名实名认证不通过原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealNameAuditUnpassReason(string $RealNameAuditUnpassReason) 设置域名实名认证不通过原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainNameAuditStatus() 获取域名命名审核状态。
NotAudit：命名审核未上传
Pending：命名审核待上传
Auditing：域名命名审核中
Approved：域名命名审核通过
Rejected：域名命名审核拒绝
 * @method void setDomainNameAuditStatus(string $DomainNameAuditStatus) 设置域名命名审核状态。
NotAudit：命名审核未上传
Pending：命名审核待上传
Auditing：域名命名审核中
Approved：域名命名审核通过
Rejected：域名命名审核拒绝
 * @method string getDomainNameAuditUnpassReason() 获取域名命名审核不通过原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainNameAuditUnpassReason(string $DomainNameAuditUnpassReason) 设置域名命名审核不通过原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationDate() 获取注册时间。
 * @method void setCreationDate(string $CreationDate) 设置注册时间。
 * @method string getExpirationDate() 获取到期时间
 * @method void setExpirationDate(string $ExpirationDate) 设置到期时间
 * @method array getDomainStatus() 获取域名状态。
ok：正常
serverHold：注册局暂停解析 
clientHold：注册商暂停解析
pendingTransfer：转移中
renewingPeriod：续费期
redemptionPeriod：偿还期
pendingDelete：删除期
serverTransferProhibited：注册局禁止转移
serverUpdateProhibited：注册局禁止更新
serverDeleteProhibited：注册局禁止删除
clientTransferProhibited：注册商禁止转移
clientUpdateProhibited：注册商禁止更新
clientDeleteProhibited：注册商禁止删除
 * @method void setDomainStatus(array $DomainStatus) 设置域名状态。
ok：正常
serverHold：注册局暂停解析 
clientHold：注册商暂停解析
pendingTransfer：转移中
renewingPeriod：续费期
redemptionPeriod：偿还期
pendingDelete：删除期
serverTransferProhibited：注册局禁止转移
serverUpdateProhibited：注册局禁止更新
serverDeleteProhibited：注册局禁止删除
clientTransferProhibited：注册商禁止转移
clientUpdateProhibited：注册商禁止更新
clientDeleteProhibited：注册商禁止删除
 * @method string getBuyStatus() 获取域名购买状态。
ok：正常
RegisterPending：待注册
RegisterDoing：注册中
RegisterFailed：注册失败
AboutToExpire: 即将过期
RenewPending：已进入续费期，需要进行续费
RenewDoing：续费中
RedemptionPending：已进入赎回期，需要进行续费
RedemptionDoing：赎回中
TransferPending：待转入中
TransferTransing：转入中
TransferFailed：转入失败
 * @method void setBuyStatus(string $BuyStatus) 设置域名购买状态。
ok：正常
RegisterPending：待注册
RegisterDoing：注册中
RegisterFailed：注册失败
AboutToExpire: 即将过期
RenewPending：已进入续费期，需要进行续费
RenewDoing：续费中
RedemptionPending：已进入赎回期，需要进行续费
RedemptionDoing：赎回中
TransferPending：待转入中
TransferTransing：转入中
TransferFailed：转入失败
 * @method string getRegistrarType() 获取注册商类型
epp: DNSPod, Inc.（烟台帝思普网络科技有限公司）
qcloud: Tencent Cloud Computing (Beijing) Limited Liability Company（腾讯云计算（北京）有限责任公司）
yunxun: Guangzhou Yunxun Information Technology Co., Ltd.（广州云讯信息科技有限公司）
xinnet: Xin Net Technology Corporation（北京新网数码信息技术有限公司）
 * @method void setRegistrarType(string $RegistrarType) 设置注册商类型
epp: DNSPod, Inc.（烟台帝思普网络科技有限公司）
qcloud: Tencent Cloud Computing (Beijing) Limited Liability Company（腾讯云计算（北京）有限责任公司）
yunxun: Guangzhou Yunxun Information Technology Co., Ltd.（广州云讯信息科技有限公司）
xinnet: Xin Net Technology Corporation（北京新网数码信息技术有限公司）
 * @method array getNameServer() 获取域名绑定的ns
 * @method void setNameServer(array $NameServer) 设置域名绑定的ns
 * @method boolean getLockTransfer() 获取true：开启锁定
false：关闭锁定
 * @method void setLockTransfer(boolean $LockTransfer) 设置true：开启锁定
false：关闭锁定
 * @method string getLockEndTime() 获取锁定结束时间
 * @method void setLockEndTime(string $LockEndTime) 设置锁定结束时间
 */
class DomainBaseInfo extends AbstractModel
{
    /**
     * @var string 域名资源ID。
     */
    public $DomainId;

    /**
     * @var string 域名名称。
     */
    public $DomainName;

    /**
     * @var string 域名实名认证状态。
NotUpload：未实名认证
InAudit：实名审核中
Approved：实名审核通过
Reject：实名审核失败
     */
    public $RealNameAuditStatus;

    /**
     * @var string 域名实名认证不通过原因。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealNameAuditUnpassReason;

    /**
     * @var string 域名命名审核状态。
NotAudit：命名审核未上传
Pending：命名审核待上传
Auditing：域名命名审核中
Approved：域名命名审核通过
Rejected：域名命名审核拒绝
     */
    public $DomainNameAuditStatus;

    /**
     * @var string 域名命名审核不通过原因。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainNameAuditUnpassReason;

    /**
     * @var string 注册时间。
     */
    public $CreationDate;

    /**
     * @var string 到期时间
     */
    public $ExpirationDate;

    /**
     * @var array 域名状态。
ok：正常
serverHold：注册局暂停解析 
clientHold：注册商暂停解析
pendingTransfer：转移中
renewingPeriod：续费期
redemptionPeriod：偿还期
pendingDelete：删除期
serverTransferProhibited：注册局禁止转移
serverUpdateProhibited：注册局禁止更新
serverDeleteProhibited：注册局禁止删除
clientTransferProhibited：注册商禁止转移
clientUpdateProhibited：注册商禁止更新
clientDeleteProhibited：注册商禁止删除
     */
    public $DomainStatus;

    /**
     * @var string 域名购买状态。
ok：正常
RegisterPending：待注册
RegisterDoing：注册中
RegisterFailed：注册失败
AboutToExpire: 即将过期
RenewPending：已进入续费期，需要进行续费
RenewDoing：续费中
RedemptionPending：已进入赎回期，需要进行续费
RedemptionDoing：赎回中
TransferPending：待转入中
TransferTransing：转入中
TransferFailed：转入失败
     */
    public $BuyStatus;

    /**
     * @var string 注册商类型
epp: DNSPod, Inc.（烟台帝思普网络科技有限公司）
qcloud: Tencent Cloud Computing (Beijing) Limited Liability Company（腾讯云计算（北京）有限责任公司）
yunxun: Guangzhou Yunxun Information Technology Co., Ltd.（广州云讯信息科技有限公司）
xinnet: Xin Net Technology Corporation（北京新网数码信息技术有限公司）
     */
    public $RegistrarType;

    /**
     * @var array 域名绑定的ns
     */
    public $NameServer;

    /**
     * @var boolean true：开启锁定
false：关闭锁定
     */
    public $LockTransfer;

    /**
     * @var string 锁定结束时间
     */
    public $LockEndTime;

    /**
     * @param string $DomainId 域名资源ID。
     * @param string $DomainName 域名名称。
     * @param string $RealNameAuditStatus 域名实名认证状态。
NotUpload：未实名认证
InAudit：实名审核中
Approved：实名审核通过
Reject：实名审核失败
     * @param string $RealNameAuditUnpassReason 域名实名认证不通过原因。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainNameAuditStatus 域名命名审核状态。
NotAudit：命名审核未上传
Pending：命名审核待上传
Auditing：域名命名审核中
Approved：域名命名审核通过
Rejected：域名命名审核拒绝
     * @param string $DomainNameAuditUnpassReason 域名命名审核不通过原因。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationDate 注册时间。
     * @param string $ExpirationDate 到期时间
     * @param array $DomainStatus 域名状态。
ok：正常
serverHold：注册局暂停解析 
clientHold：注册商暂停解析
pendingTransfer：转移中
renewingPeriod：续费期
redemptionPeriod：偿还期
pendingDelete：删除期
serverTransferProhibited：注册局禁止转移
serverUpdateProhibited：注册局禁止更新
serverDeleteProhibited：注册局禁止删除
clientTransferProhibited：注册商禁止转移
clientUpdateProhibited：注册商禁止更新
clientDeleteProhibited：注册商禁止删除
     * @param string $BuyStatus 域名购买状态。
ok：正常
RegisterPending：待注册
RegisterDoing：注册中
RegisterFailed：注册失败
AboutToExpire: 即将过期
RenewPending：已进入续费期，需要进行续费
RenewDoing：续费中
RedemptionPending：已进入赎回期，需要进行续费
RedemptionDoing：赎回中
TransferPending：待转入中
TransferTransing：转入中
TransferFailed：转入失败
     * @param string $RegistrarType 注册商类型
epp: DNSPod, Inc.（烟台帝思普网络科技有限公司）
qcloud: Tencent Cloud Computing (Beijing) Limited Liability Company（腾讯云计算（北京）有限责任公司）
yunxun: Guangzhou Yunxun Information Technology Co., Ltd.（广州云讯信息科技有限公司）
xinnet: Xin Net Technology Corporation（北京新网数码信息技术有限公司）
     * @param array $NameServer 域名绑定的ns
     * @param boolean $LockTransfer true：开启锁定
false：关闭锁定
     * @param string $LockEndTime 锁定结束时间
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

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("RealNameAuditStatus",$param) and $param["RealNameAuditStatus"] !== null) {
            $this->RealNameAuditStatus = $param["RealNameAuditStatus"];
        }

        if (array_key_exists("RealNameAuditUnpassReason",$param) and $param["RealNameAuditUnpassReason"] !== null) {
            $this->RealNameAuditUnpassReason = $param["RealNameAuditUnpassReason"];
        }

        if (array_key_exists("DomainNameAuditStatus",$param) and $param["DomainNameAuditStatus"] !== null) {
            $this->DomainNameAuditStatus = $param["DomainNameAuditStatus"];
        }

        if (array_key_exists("DomainNameAuditUnpassReason",$param) and $param["DomainNameAuditUnpassReason"] !== null) {
            $this->DomainNameAuditUnpassReason = $param["DomainNameAuditUnpassReason"];
        }

        if (array_key_exists("CreationDate",$param) and $param["CreationDate"] !== null) {
            $this->CreationDate = $param["CreationDate"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("BuyStatus",$param) and $param["BuyStatus"] !== null) {
            $this->BuyStatus = $param["BuyStatus"];
        }

        if (array_key_exists("RegistrarType",$param) and $param["RegistrarType"] !== null) {
            $this->RegistrarType = $param["RegistrarType"];
        }

        if (array_key_exists("NameServer",$param) and $param["NameServer"] !== null) {
            $this->NameServer = $param["NameServer"];
        }

        if (array_key_exists("LockTransfer",$param) and $param["LockTransfer"] !== null) {
            $this->LockTransfer = $param["LockTransfer"];
        }

        if (array_key_exists("LockEndTime",$param) and $param["LockEndTime"] !== null) {
            $this->LockEndTime = $param["LockEndTime"];
        }
    }
}
