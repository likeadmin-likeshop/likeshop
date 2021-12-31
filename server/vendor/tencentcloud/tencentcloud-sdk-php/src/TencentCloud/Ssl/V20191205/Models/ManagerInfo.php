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
 * 管理人信息
 *
 * @method string getStatus() 获取状态: audit: 审核中 ok: 审核通过 invalid: 失效 expiring: 即将过期 expired: 已过期
 * @method void setStatus(string $Status) 设置状态: audit: 审核中 ok: 审核通过 invalid: 失效 expiring: 即将过期 expired: 已过期
 * @method string getManagerFirstName() 获取管理人姓名
 * @method void setManagerFirstName(string $ManagerFirstName) 设置管理人姓名
 * @method string getManagerLastName() 获取管理人姓名
 * @method void setManagerLastName(string $ManagerLastName) 设置管理人姓名
 * @method string getManagerPosition() 获取管理人职位
 * @method void setManagerPosition(string $ManagerPosition) 设置管理人职位
 * @method string getManagerPhone() 获取管理人电话
 * @method void setManagerPhone(string $ManagerPhone) 设置管理人电话
 * @method string getManagerMail() 获取管理人邮箱
 * @method void setManagerMail(string $ManagerMail) 设置管理人邮箱
 * @method string getManagerDepartment() 获取管理人所属部门
 * @method void setManagerDepartment(string $ManagerDepartment) 设置管理人所属部门
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDomainCount() 获取管理人域名数量
 * @method void setDomainCount(integer $DomainCount) 设置管理人域名数量
 * @method integer getCertCount() 获取管理人证书数量
 * @method void setCertCount(integer $CertCount) 设置管理人证书数量
 * @method integer getManagerId() 获取管理人ID
 * @method void setManagerId(integer $ManagerId) 设置管理人ID
 * @method string getExpireTime() 获取审核有效到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置审核有效到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubmitAuditTime() 获取最近一次提交审核时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitAuditTime(string $SubmitAuditTime) 设置最近一次提交审核时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyTime() 获取审核通过时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyTime(string $VerifyTime) 设置审核通过时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ManagerInfo extends AbstractModel
{
    /**
     * @var string 状态: audit: 审核中 ok: 审核通过 invalid: 失效 expiring: 即将过期 expired: 已过期
     */
    public $Status;

    /**
     * @var string 管理人姓名
     */
    public $ManagerFirstName;

    /**
     * @var string 管理人姓名
     */
    public $ManagerLastName;

    /**
     * @var string 管理人职位
     */
    public $ManagerPosition;

    /**
     * @var string 管理人电话
     */
    public $ManagerPhone;

    /**
     * @var string 管理人邮箱
     */
    public $ManagerMail;

    /**
     * @var string 管理人所属部门
     */
    public $ManagerDepartment;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 管理人域名数量
     */
    public $DomainCount;

    /**
     * @var integer 管理人证书数量
     */
    public $CertCount;

    /**
     * @var integer 管理人ID
     */
    public $ManagerId;

    /**
     * @var string 审核有效到期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 最近一次提交审核时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitAuditTime;

    /**
     * @var string 审核通过时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyTime;

    /**
     * @param string $Status 状态: audit: 审核中 ok: 审核通过 invalid: 失效 expiring: 即将过期 expired: 已过期
     * @param string $ManagerFirstName 管理人姓名
     * @param string $ManagerLastName 管理人姓名
     * @param string $ManagerPosition 管理人职位
     * @param string $ManagerPhone 管理人电话
     * @param string $ManagerMail 管理人邮箱
     * @param string $ManagerDepartment 管理人所属部门
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DomainCount 管理人域名数量
     * @param integer $CertCount 管理人证书数量
     * @param integer $ManagerId 管理人ID
     * @param string $ExpireTime 审核有效到期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubmitAuditTime 最近一次提交审核时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyTime 审核通过时间
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ManagerFirstName",$param) and $param["ManagerFirstName"] !== null) {
            $this->ManagerFirstName = $param["ManagerFirstName"];
        }

        if (array_key_exists("ManagerLastName",$param) and $param["ManagerLastName"] !== null) {
            $this->ManagerLastName = $param["ManagerLastName"];
        }

        if (array_key_exists("ManagerPosition",$param) and $param["ManagerPosition"] !== null) {
            $this->ManagerPosition = $param["ManagerPosition"];
        }

        if (array_key_exists("ManagerPhone",$param) and $param["ManagerPhone"] !== null) {
            $this->ManagerPhone = $param["ManagerPhone"];
        }

        if (array_key_exists("ManagerMail",$param) and $param["ManagerMail"] !== null) {
            $this->ManagerMail = $param["ManagerMail"];
        }

        if (array_key_exists("ManagerDepartment",$param) and $param["ManagerDepartment"] !== null) {
            $this->ManagerDepartment = $param["ManagerDepartment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("CertCount",$param) and $param["CertCount"] !== null) {
            $this->CertCount = $param["CertCount"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SubmitAuditTime",$param) and $param["SubmitAuditTime"] !== null) {
            $this->SubmitAuditTime = $param["SubmitAuditTime"];
        }

        if (array_key_exists("VerifyTime",$param) and $param["VerifyTime"] !== null) {
            $this->VerifyTime = $param["VerifyTime"];
        }
    }
}
