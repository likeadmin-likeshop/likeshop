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
 * DescribeManagerDetail返回参数结构体
 *
 * @method string getStatus() 获取状态: audit: 审核中 ok: 审核通过 invalid: 失效 expiring: 即将过期 expired: 已过期
 * @method void setStatus(string $Status) 设置状态: audit: 审核中 ok: 审核通过 invalid: 失效 expiring: 即将过期 expired: 已过期
 * @method string getManagerFirstName() 获取管理人姓名
 * @method void setManagerFirstName(string $ManagerFirstName) 设置管理人姓名
 * @method string getManagerMail() 获取管理人邮箱
 * @method void setManagerMail(string $ManagerMail) 设置管理人邮箱
 * @method string getContactFirstName() 获取联系人姓名
 * @method void setContactFirstName(string $ContactFirstName) 设置联系人姓名
 * @method string getManagerLastName() 获取管理人姓名
 * @method void setManagerLastName(string $ManagerLastName) 设置管理人姓名
 * @method string getContactPosition() 获取联系人职位
 * @method void setContactPosition(string $ContactPosition) 设置联系人职位
 * @method string getManagerPosition() 获取管理人职位
 * @method void setManagerPosition(string $ManagerPosition) 设置管理人职位
 * @method string getVerifyTime() 获取核验通过时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyTime(string $VerifyTime) 设置核验通过时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireTime() 获取核验过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置核验过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContactLastName() 获取联系人姓名
 * @method void setContactLastName(string $ContactLastName) 设置联系人姓名
 * @method string getManagerPhone() 获取管理人电话
 * @method void setManagerPhone(string $ManagerPhone) 设置管理人电话
 * @method string getContactPhone() 获取联系人电话
 * @method void setContactPhone(string $ContactPhone) 设置联系人电话
 * @method string getContactMail() 获取联系人邮箱
 * @method void setContactMail(string $ContactMail) 设置联系人邮箱
 * @method string getManagerDepartment() 获取管理人所属部门
 * @method void setManagerDepartment(string $ManagerDepartment) 设置管理人所属部门
 * @method CompanyInfo getCompanyInfo() 获取管理人所属公司信息
 * @method void setCompanyInfo(CompanyInfo $CompanyInfo) 设置管理人所属公司信息
 * @method integer getCompanyId() 获取管理人公司ID
 * @method void setCompanyId(integer $CompanyId) 设置管理人公司ID
 * @method integer getManagerId() 获取管理人ID
 * @method void setManagerId(integer $ManagerId) 设置管理人ID
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeManagerDetailResponse extends AbstractModel
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
     * @var string 管理人邮箱
     */
    public $ManagerMail;

    /**
     * @var string 联系人姓名
     */
    public $ContactFirstName;

    /**
     * @var string 管理人姓名
     */
    public $ManagerLastName;

    /**
     * @var string 联系人职位
     */
    public $ContactPosition;

    /**
     * @var string 管理人职位
     */
    public $ManagerPosition;

    /**
     * @var string 核验通过时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 核验过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 联系人姓名
     */
    public $ContactLastName;

    /**
     * @var string 管理人电话
     */
    public $ManagerPhone;

    /**
     * @var string 联系人电话
     */
    public $ContactPhone;

    /**
     * @var string 联系人邮箱
     */
    public $ContactMail;

    /**
     * @var string 管理人所属部门
     */
    public $ManagerDepartment;

    /**
     * @var CompanyInfo 管理人所属公司信息
     */
    public $CompanyInfo;

    /**
     * @var integer 管理人公司ID
     */
    public $CompanyId;

    /**
     * @var integer 管理人ID
     */
    public $ManagerId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 状态: audit: 审核中 ok: 审核通过 invalid: 失效 expiring: 即将过期 expired: 已过期
     * @param string $ManagerFirstName 管理人姓名
     * @param string $ManagerMail 管理人邮箱
     * @param string $ContactFirstName 联系人姓名
     * @param string $ManagerLastName 管理人姓名
     * @param string $ContactPosition 联系人职位
     * @param string $ManagerPosition 管理人职位
     * @param string $VerifyTime 核验通过时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $ExpireTime 核验过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContactLastName 联系人姓名
     * @param string $ManagerPhone 管理人电话
     * @param string $ContactPhone 联系人电话
     * @param string $ContactMail 联系人邮箱
     * @param string $ManagerDepartment 管理人所属部门
     * @param CompanyInfo $CompanyInfo 管理人所属公司信息
     * @param integer $CompanyId 管理人公司ID
     * @param integer $ManagerId 管理人ID
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ManagerFirstName",$param) and $param["ManagerFirstName"] !== null) {
            $this->ManagerFirstName = $param["ManagerFirstName"];
        }

        if (array_key_exists("ManagerMail",$param) and $param["ManagerMail"] !== null) {
            $this->ManagerMail = $param["ManagerMail"];
        }

        if (array_key_exists("ContactFirstName",$param) and $param["ContactFirstName"] !== null) {
            $this->ContactFirstName = $param["ContactFirstName"];
        }

        if (array_key_exists("ManagerLastName",$param) and $param["ManagerLastName"] !== null) {
            $this->ManagerLastName = $param["ManagerLastName"];
        }

        if (array_key_exists("ContactPosition",$param) and $param["ContactPosition"] !== null) {
            $this->ContactPosition = $param["ContactPosition"];
        }

        if (array_key_exists("ManagerPosition",$param) and $param["ManagerPosition"] !== null) {
            $this->ManagerPosition = $param["ManagerPosition"];
        }

        if (array_key_exists("VerifyTime",$param) and $param["VerifyTime"] !== null) {
            $this->VerifyTime = $param["VerifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ContactLastName",$param) and $param["ContactLastName"] !== null) {
            $this->ContactLastName = $param["ContactLastName"];
        }

        if (array_key_exists("ManagerPhone",$param) and $param["ManagerPhone"] !== null) {
            $this->ManagerPhone = $param["ManagerPhone"];
        }

        if (array_key_exists("ContactPhone",$param) and $param["ContactPhone"] !== null) {
            $this->ContactPhone = $param["ContactPhone"];
        }

        if (array_key_exists("ContactMail",$param) and $param["ContactMail"] !== null) {
            $this->ContactMail = $param["ContactMail"];
        }

        if (array_key_exists("ManagerDepartment",$param) and $param["ManagerDepartment"] !== null) {
            $this->ManagerDepartment = $param["ManagerDepartment"];
        }

        if (array_key_exists("CompanyInfo",$param) and $param["CompanyInfo"] !== null) {
            $this->CompanyInfo = new CompanyInfo();
            $this->CompanyInfo->deserialize($param["CompanyInfo"]);
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
