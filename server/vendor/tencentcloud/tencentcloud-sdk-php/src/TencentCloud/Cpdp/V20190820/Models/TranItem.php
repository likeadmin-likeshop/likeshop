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
 * 交易信息
 *
 * @method string getFundSummaryAcctNo() 获取STRING(50)，资金汇总账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFundSummaryAcctNo(string $FundSummaryAcctNo) 设置STRING(50)，资金汇总账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAcctNo() 获取STRING(50)，见证子账户的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAcctNo(string $SubAcctNo) 设置STRING(50)，见证子账户的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberName() 获取STRING(150)，会员名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberName(string $MemberName) 设置STRING(150)，会员名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberGlobalType() 获取STRING(5)，会员证件类型（详情见“常见问题”）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberGlobalType(string $MemberGlobalType) 设置STRING(5)，会员证件类型（详情见“常见问题”）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberGlobalId() 获取STRING(32)，会员证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberGlobalId(string $MemberGlobalId) 设置STRING(32)，会员证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberAcctNo() 获取STRING(50)，会员绑定账户的账号（提现的银行卡）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberAcctNo(string $MemberAcctNo) 设置STRING(50)，会员绑定账户的账号（提现的银行卡）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankType() 获取STRING(10)，会员绑定账户的本他行类型（1: 本行; 2: 他行）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankType(string $BankType) 设置STRING(10)，会员绑定账户的本他行类型（1: 本行; 2: 他行）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAcctOpenBranchName() 获取STRING(150)，会员绑定账户的开户行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAcctOpenBranchName(string $AcctOpenBranchName) 设置STRING(150)，会员绑定账户的开户行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCnapsBranchId() 获取STRING(20)，会员绑定账户的开户行的联行号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCnapsBranchId(string $CnapsBranchId) 设置STRING(20)，会员绑定账户的开户行的联行号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEiconBankBranchId() 获取STRING(20)，会员绑定账户的开户行的超级网银行号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEiconBankBranchId(string $EiconBankBranchId) 设置STRING(20)，会员绑定账户的开户行的超级网银行号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMobile() 获取STRING(30)，会员的手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMobile(string $Mobile) 设置STRING(30)，会员的手机号
注意：此字段可能返回 null，表示取不到有效值。
 */
class TranItem extends AbstractModel
{
    /**
     * @var string STRING(50)，资金汇总账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FundSummaryAcctNo;

    /**
     * @var string STRING(50)，见证子账户的账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAcctNo;

    /**
     * @var string STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranNetMemberCode;

    /**
     * @var string STRING(150)，会员名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberName;

    /**
     * @var string STRING(5)，会员证件类型（详情见“常见问题”）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberGlobalType;

    /**
     * @var string STRING(32)，会员证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberGlobalId;

    /**
     * @var string STRING(50)，会员绑定账户的账号（提现的银行卡）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberAcctNo;

    /**
     * @var string STRING(10)，会员绑定账户的本他行类型（1: 本行; 2: 他行）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankType;

    /**
     * @var string STRING(150)，会员绑定账户的开户行名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AcctOpenBranchName;

    /**
     * @var string STRING(20)，会员绑定账户的开户行的联行号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CnapsBranchId;

    /**
     * @var string STRING(20)，会员绑定账户的开户行的超级网银行号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EiconBankBranchId;

    /**
     * @var string STRING(30)，会员的手机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mobile;

    /**
     * @param string $FundSummaryAcctNo STRING(50)，资金汇总账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAcctNo STRING(50)，见证子账户的账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranNetMemberCode STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberName STRING(150)，会员名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberGlobalType STRING(5)，会员证件类型（详情见“常见问题”）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberGlobalId STRING(32)，会员证件号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberAcctNo STRING(50)，会员绑定账户的账号（提现的银行卡）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankType STRING(10)，会员绑定账户的本他行类型（1: 本行; 2: 他行）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AcctOpenBranchName STRING(150)，会员绑定账户的开户行名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CnapsBranchId STRING(20)，会员绑定账户的开户行的联行号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EiconBankBranchId STRING(20)，会员绑定账户的开户行的超级网银行号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mobile STRING(30)，会员的手机号
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
        if (array_key_exists("FundSummaryAcctNo",$param) and $param["FundSummaryAcctNo"] !== null) {
            $this->FundSummaryAcctNo = $param["FundSummaryAcctNo"];
        }

        if (array_key_exists("SubAcctNo",$param) and $param["SubAcctNo"] !== null) {
            $this->SubAcctNo = $param["SubAcctNo"];
        }

        if (array_key_exists("TranNetMemberCode",$param) and $param["TranNetMemberCode"] !== null) {
            $this->TranNetMemberCode = $param["TranNetMemberCode"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }

        if (array_key_exists("MemberGlobalType",$param) and $param["MemberGlobalType"] !== null) {
            $this->MemberGlobalType = $param["MemberGlobalType"];
        }

        if (array_key_exists("MemberGlobalId",$param) and $param["MemberGlobalId"] !== null) {
            $this->MemberGlobalId = $param["MemberGlobalId"];
        }

        if (array_key_exists("MemberAcctNo",$param) and $param["MemberAcctNo"] !== null) {
            $this->MemberAcctNo = $param["MemberAcctNo"];
        }

        if (array_key_exists("BankType",$param) and $param["BankType"] !== null) {
            $this->BankType = $param["BankType"];
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

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }
    }
}
