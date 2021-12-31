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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMntMbrBindRelateAcctBankCode请求参数结构体
 *
 * @method string getMrchCode() 获取String(22)，商户号（签约客户号）
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号（签约客户号）
 * @method string getSubAcctNo() 获取STRING(50)，见证子账户的账号
 * @method void setSubAcctNo(string $SubAcctNo) 设置STRING(50)，见证子账户的账号
 * @method string getMemberBindAcctNo() 获取STRING(50)，会员绑定账号
 * @method void setMemberBindAcctNo(string $MemberBindAcctNo) 设置STRING(50)，会员绑定账号
 * @method string getAcctOpenBranchName() 获取STRING(150)，开户行名称（若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称）
 * @method void setAcctOpenBranchName(string $AcctOpenBranchName) 设置STRING(150)，开户行名称（若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称）
 * @method string getCnapsBranchId() 获取STRING(20)，大小额行号（CnapsBranchId和EiconBankBranchId两者二选一必填）
 * @method void setCnapsBranchId(string $CnapsBranchId) 设置STRING(20)，大小额行号（CnapsBranchId和EiconBankBranchId两者二选一必填）
 * @method string getEiconBankBranchId() 获取STRING(20)，超级网银行号
 * @method void setEiconBankBranchId(string $EiconBankBranchId) 设置STRING(20)，超级网银行号
 * @method string getReservedMsg() 获取STRING(1027)，保留域
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，保留域
 * @method string getProfile() 获取STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 * @method void setProfile(string $Profile) 设置STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 */
class ModifyMntMbrBindRelateAcctBankCodeRequest extends AbstractModel
{
    /**
     * @var string String(22)，商户号（签约客户号）
     */
    public $MrchCode;

    /**
     * @var string STRING(50)，见证子账户的账号
     */
    public $SubAcctNo;

    /**
     * @var string STRING(50)，会员绑定账号
     */
    public $MemberBindAcctNo;

    /**
     * @var string STRING(150)，开户行名称（若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称）
     */
    public $AcctOpenBranchName;

    /**
     * @var string STRING(20)，大小额行号（CnapsBranchId和EiconBankBranchId两者二选一必填）
     */
    public $CnapsBranchId;

    /**
     * @var string STRING(20)，超级网银行号
     */
    public $EiconBankBranchId;

    /**
     * @var string STRING(1027)，保留域
     */
    public $ReservedMsg;

    /**
     * @var string STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
     */
    public $Profile;

    /**
     * @param string $MrchCode String(22)，商户号（签约客户号）
     * @param string $SubAcctNo STRING(50)，见证子账户的账号
     * @param string $MemberBindAcctNo STRING(50)，会员绑定账号
     * @param string $AcctOpenBranchName STRING(150)，开户行名称（若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称）
     * @param string $CnapsBranchId STRING(20)，大小额行号（CnapsBranchId和EiconBankBranchId两者二选一必填）
     * @param string $EiconBankBranchId STRING(20)，超级网银行号
     * @param string $ReservedMsg STRING(1027)，保留域
     * @param string $Profile STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
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
        if (array_key_exists("MrchCode",$param) and $param["MrchCode"] !== null) {
            $this->MrchCode = $param["MrchCode"];
        }

        if (array_key_exists("SubAcctNo",$param) and $param["SubAcctNo"] !== null) {
            $this->SubAcctNo = $param["SubAcctNo"];
        }

        if (array_key_exists("MemberBindAcctNo",$param) and $param["MemberBindAcctNo"] !== null) {
            $this->MemberBindAcctNo = $param["MemberBindAcctNo"];
        }

        if (array_key_exists("AcctOpenBranchName",$param) and $param["AcctOpenBranchName"] !== null) {
            $this->AcctOpenBranchName = $param["AcctOpenBranchName"];
        }

        if (array_key_exists("CnapsBranchId",$param) and $param["CnapsBranchId"] !== null) {
            $this->CnapsBranchId = $param["CnapsBranchId"];
        }

        if (array_key_exists("EiconBankBranchId",$param) and $param["EiconBankBranchId"] !== null) {
            $this->EiconBankBranchId = $param["EiconBankBranchId"];
        }

        if (array_key_exists("ReservedMsg",$param) and $param["ReservedMsg"] !== null) {
            $this->ReservedMsg = $param["ReservedMsg"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
