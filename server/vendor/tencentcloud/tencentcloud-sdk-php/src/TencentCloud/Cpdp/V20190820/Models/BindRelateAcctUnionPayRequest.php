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
 * BindRelateAcctUnionPay请求参数结构体
 *
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会员代码（若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”（右侧）进行分隔）
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会员代码（若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”（右侧）进行分隔）
 * @method string getMemberName() 获取STRING(150)，见证子账户的户名（首次绑定的情况下，此字段即为待绑定的提现账户的户名。非首次绑定的情况下，须注意带绑定的提现账户的户名须与留存在后台系统的会员户名一致）
 * @method void setMemberName(string $MemberName) 设置STRING(150)，见证子账户的户名（首次绑定的情况下，此字段即为待绑定的提现账户的户名。非首次绑定的情况下，须注意带绑定的提现账户的户名须与留存在后台系统的会员户名一致）
 * @method string getMemberGlobalType() 获取STRING(5)，会员证件类型（详情见“常见问题”）
 * @method void setMemberGlobalType(string $MemberGlobalType) 设置STRING(5)，会员证件类型（详情见“常见问题”）
 * @method string getMemberGlobalId() 获取STRING(32)，会员证件号码
 * @method void setMemberGlobalId(string $MemberGlobalId) 设置STRING(32)，会员证件号码
 * @method string getMemberAcctNo() 获取STRING(50)，会员的待绑定账户的账号（提现的银行卡）
 * @method void setMemberAcctNo(string $MemberAcctNo) 设置STRING(50)，会员的待绑定账户的账号（提现的银行卡）
 * @method string getBankType() 获取STRING(10)，会员的待绑定账户的本他行类型（1: 本行; 2: 他行）
 * @method void setBankType(string $BankType) 设置STRING(10)，会员的待绑定账户的本他行类型（1: 本行; 2: 他行）
 * @method string getAcctOpenBranchName() 获取STRING(150)，会员的待绑定账户的开户行名称（若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称）
 * @method void setAcctOpenBranchName(string $AcctOpenBranchName) 设置STRING(150)，会员的待绑定账户的开户行名称（若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称）
 * @method string getMobile() 获取STRING(30)，会员的手机号（手机号须由长度为11位的数字构成）
 * @method void setMobile(string $Mobile) 设置STRING(30)，会员的手机号（手机号须由长度为11位的数字构成）
 * @method string getMrchCode() 获取String(22)，商户号（签约客户号）
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号（签约客户号）
 * @method string getCnapsBranchId() 获取STRING(20)，会员的待绑定账户的开户行的联行号（本他行类型为他行的情况下，此字段和下一个字段至少一个不为空）
 * @method void setCnapsBranchId(string $CnapsBranchId) 设置STRING(20)，会员的待绑定账户的开户行的联行号（本他行类型为他行的情况下，此字段和下一个字段至少一个不为空）
 * @method string getEiconBankBranchId() 获取STRING(20)，会员的待绑定账户的开户行的超级网银行号（本他行类型为他行的情况下，此字段和上一个字段至少一个不为空）
 * @method void setEiconBankBranchId(string $EiconBankBranchId) 设置STRING(20)，会员的待绑定账户的开户行的超级网银行号（本他行类型为他行的情况下，此字段和上一个字段至少一个不为空）
 * @method string getReservedMsg() 获取STRING(1027)，保留域
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，保留域
 * @method string getProfile() 获取STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 * @method void setProfile(string $Profile) 设置STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 */
class BindRelateAcctUnionPayRequest extends AbstractModel
{
    /**
     * @var string STRING(32)，交易网会员代码（若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”（右侧）进行分隔）
     */
    public $TranNetMemberCode;

    /**
     * @var string STRING(150)，见证子账户的户名（首次绑定的情况下，此字段即为待绑定的提现账户的户名。非首次绑定的情况下，须注意带绑定的提现账户的户名须与留存在后台系统的会员户名一致）
     */
    public $MemberName;

    /**
     * @var string STRING(5)，会员证件类型（详情见“常见问题”）
     */
    public $MemberGlobalType;

    /**
     * @var string STRING(32)，会员证件号码
     */
    public $MemberGlobalId;

    /**
     * @var string STRING(50)，会员的待绑定账户的账号（提现的银行卡）
     */
    public $MemberAcctNo;

    /**
     * @var string STRING(10)，会员的待绑定账户的本他行类型（1: 本行; 2: 他行）
     */
    public $BankType;

    /**
     * @var string STRING(150)，会员的待绑定账户的开户行名称（若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称）
     */
    public $AcctOpenBranchName;

    /**
     * @var string STRING(30)，会员的手机号（手机号须由长度为11位的数字构成）
     */
    public $Mobile;

    /**
     * @var string String(22)，商户号（签约客户号）
     */
    public $MrchCode;

    /**
     * @var string STRING(20)，会员的待绑定账户的开户行的联行号（本他行类型为他行的情况下，此字段和下一个字段至少一个不为空）
     */
    public $CnapsBranchId;

    /**
     * @var string STRING(20)，会员的待绑定账户的开户行的超级网银行号（本他行类型为他行的情况下，此字段和上一个字段至少一个不为空）
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
     * @param string $TranNetMemberCode STRING(32)，交易网会员代码（若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”（右侧）进行分隔）
     * @param string $MemberName STRING(150)，见证子账户的户名（首次绑定的情况下，此字段即为待绑定的提现账户的户名。非首次绑定的情况下，须注意带绑定的提现账户的户名须与留存在后台系统的会员户名一致）
     * @param string $MemberGlobalType STRING(5)，会员证件类型（详情见“常见问题”）
     * @param string $MemberGlobalId STRING(32)，会员证件号码
     * @param string $MemberAcctNo STRING(50)，会员的待绑定账户的账号（提现的银行卡）
     * @param string $BankType STRING(10)，会员的待绑定账户的本他行类型（1: 本行; 2: 他行）
     * @param string $AcctOpenBranchName STRING(150)，会员的待绑定账户的开户行名称（若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称）
     * @param string $Mobile STRING(30)，会员的手机号（手机号须由长度为11位的数字构成）
     * @param string $MrchCode String(22)，商户号（签约客户号）
     * @param string $CnapsBranchId STRING(20)，会员的待绑定账户的开户行的联行号（本他行类型为他行的情况下，此字段和下一个字段至少一个不为空）
     * @param string $EiconBankBranchId STRING(20)，会员的待绑定账户的开户行的超级网银行号（本他行类型为他行的情况下，此字段和上一个字段至少一个不为空）
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

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("MrchCode",$param) and $param["MrchCode"] !== null) {
            $this->MrchCode = $param["MrchCode"];
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
