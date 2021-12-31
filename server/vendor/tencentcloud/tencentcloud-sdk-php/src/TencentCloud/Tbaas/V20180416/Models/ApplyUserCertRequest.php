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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyUserCert请求参数结构体
 *
 * @method string getModule() 获取模块名，固定字段：cert_mng
 * @method void setModule(string $Module) 设置模块名，固定字段：cert_mng
 * @method string getOperation() 获取操作名，固定字段：cert_apply_for_user
 * @method void setOperation(string $Operation) 设置操作名，固定字段：cert_apply_for_user
 * @method string getClusterId() 获取区块链网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置区块链网络ID，可在区块链网络详情或列表中获取
 * @method string getGroupName() 获取申请证书的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method void setGroupName(string $GroupName) 设置申请证书的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method string getUserIdentity() 获取用户证书标识，用于标识用户证书，要求由纯小写字母组成，长度小于10
 * @method void setUserIdentity(string $UserIdentity) 设置用户证书标识，用于标识用户证书，要求由纯小写字母组成，长度小于10
 * @method string getApplicant() 获取证书申请实体，使用腾讯云账号实名认证的名称
 * @method void setApplicant(string $Applicant) 设置证书申请实体，使用腾讯云账号实名认证的名称
 * @method string getIdentityNum() 获取证件号码。如果腾讯云账号对应的实名认证类型为企业认证，填入“0”；如果腾讯云账号对应的实名认证类型为个人认证，填入个人身份证号码
 * @method void setIdentityNum(string $IdentityNum) 设置证件号码。如果腾讯云账号对应的实名认证类型为企业认证，填入“0”；如果腾讯云账号对应的实名认证类型为个人认证，填入个人身份证号码
 * @method string getCsrData() 获取csr p10证书文件。需要用户根据文档生成证书的CSR文件
 * @method void setCsrData(string $CsrData) 设置csr p10证书文件。需要用户根据文档生成证书的CSR文件
 * @method string getNotes() 获取证书备注信息
 * @method void setNotes(string $Notes) 设置证书备注信息
 */
class ApplyUserCertRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定字段：cert_mng
     */
    public $Module;

    /**
     * @var string 操作名，固定字段：cert_apply_for_user
     */
    public $Operation;

    /**
     * @var string 区块链网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var string 申请证书的组织名称，可以在组织管理列表中获取当前组织的名称
     */
    public $GroupName;

    /**
     * @var string 用户证书标识，用于标识用户证书，要求由纯小写字母组成，长度小于10
     */
    public $UserIdentity;

    /**
     * @var string 证书申请实体，使用腾讯云账号实名认证的名称
     */
    public $Applicant;

    /**
     * @var string 证件号码。如果腾讯云账号对应的实名认证类型为企业认证，填入“0”；如果腾讯云账号对应的实名认证类型为个人认证，填入个人身份证号码
     */
    public $IdentityNum;

    /**
     * @var string csr p10证书文件。需要用户根据文档生成证书的CSR文件
     */
    public $CsrData;

    /**
     * @var string 证书备注信息
     */
    public $Notes;

    /**
     * @param string $Module 模块名，固定字段：cert_mng
     * @param string $Operation 操作名，固定字段：cert_apply_for_user
     * @param string $ClusterId 区块链网络ID，可在区块链网络详情或列表中获取
     * @param string $GroupName 申请证书的组织名称，可以在组织管理列表中获取当前组织的名称
     * @param string $UserIdentity 用户证书标识，用于标识用户证书，要求由纯小写字母组成，长度小于10
     * @param string $Applicant 证书申请实体，使用腾讯云账号实名认证的名称
     * @param string $IdentityNum 证件号码。如果腾讯云账号对应的实名认证类型为企业认证，填入“0”；如果腾讯云账号对应的实名认证类型为个人认证，填入个人身份证号码
     * @param string $CsrData csr p10证书文件。需要用户根据文档生成证书的CSR文件
     * @param string $Notes 证书备注信息
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("UserIdentity",$param) and $param["UserIdentity"] !== null) {
            $this->UserIdentity = $param["UserIdentity"];
        }

        if (array_key_exists("Applicant",$param) and $param["Applicant"] !== null) {
            $this->Applicant = $param["Applicant"];
        }

        if (array_key_exists("IdentityNum",$param) and $param["IdentityNum"] !== null) {
            $this->IdentityNum = $param["IdentityNum"];
        }

        if (array_key_exists("CsrData",$param) and $param["CsrData"] !== null) {
            $this->CsrData = $param["CsrData"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }
    }
}
