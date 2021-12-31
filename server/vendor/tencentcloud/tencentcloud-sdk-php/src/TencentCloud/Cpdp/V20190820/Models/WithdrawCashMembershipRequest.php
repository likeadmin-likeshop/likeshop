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
 * WithdrawCashMembership请求参数结构体
 *
 * @method string getMrchCode() 获取String(22)，商户号（签约客户号）
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号（签约客户号）
 * @method string getTranWebName() 获取STRING(150)，交易网名称（市场名称）
 * @method void setTranWebName(string $TranWebName) 设置STRING(150)，交易网名称（市场名称）
 * @method string getMemberGlobalType() 获取STRING(5)，会员证件类型（详情见“常见问题”）
 * @method void setMemberGlobalType(string $MemberGlobalType) 设置STRING(5)，会员证件类型（详情见“常见问题”）
 * @method string getMemberGlobalId() 获取STRING(32)，会员证件号码
 * @method void setMemberGlobalId(string $MemberGlobalId) 设置STRING(32)，会员证件号码
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会员代码
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会员代码
 * @method string getMemberName() 获取STRING(150)，会员名称
 * @method void setMemberName(string $MemberName) 设置STRING(150)，会员名称
 * @method string getTakeCashAcctNo() 获取STRING(50)，提现账号（银行卡）
 * @method void setTakeCashAcctNo(string $TakeCashAcctNo) 设置STRING(50)，提现账号（银行卡）
 * @method string getOutAmtAcctName() 获取STRING(150)，出金账户名称（银行卡户名）
 * @method void setOutAmtAcctName(string $OutAmtAcctName) 设置STRING(150)，出金账户名称（银行卡户名）
 * @method string getCcy() 获取STRING(3)，币种（默认为RMB）
 * @method void setCcy(string $Ccy) 设置STRING(3)，币种（默认为RMB）
 * @method string getCashAmt() 获取STRING(20)，可提现金额
 * @method void setCashAmt(string $CashAmt) 设置STRING(20)，可提现金额
 * @method string getRemark() 获取STRING(300)，备注（建议可送订单号，可在对账文件的备注字段获取到）
 * @method void setRemark(string $Remark) 设置STRING(300)，备注（建议可送订单号，可在对账文件的备注字段获取到）
 * @method string getReservedMsg() 获取STRING(1027)，保留域
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，保留域
 * @method string getWebSign() 获取STRING(300)，网银签名
 * @method void setWebSign(string $WebSign) 设置STRING(300)，网银签名
 * @method string getProfile() 获取STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 * @method void setProfile(string $Profile) 设置STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 */
class WithdrawCashMembershipRequest extends AbstractModel
{
    /**
     * @var string String(22)，商户号（签约客户号）
     */
    public $MrchCode;

    /**
     * @var string STRING(150)，交易网名称（市场名称）
     */
    public $TranWebName;

    /**
     * @var string STRING(5)，会员证件类型（详情见“常见问题”）
     */
    public $MemberGlobalType;

    /**
     * @var string STRING(32)，会员证件号码
     */
    public $MemberGlobalId;

    /**
     * @var string STRING(32)，交易网会员代码
     */
    public $TranNetMemberCode;

    /**
     * @var string STRING(150)，会员名称
     */
    public $MemberName;

    /**
     * @var string STRING(50)，提现账号（银行卡）
     */
    public $TakeCashAcctNo;

    /**
     * @var string STRING(150)，出金账户名称（银行卡户名）
     */
    public $OutAmtAcctName;

    /**
     * @var string STRING(3)，币种（默认为RMB）
     */
    public $Ccy;

    /**
     * @var string STRING(20)，可提现金额
     */
    public $CashAmt;

    /**
     * @var string STRING(300)，备注（建议可送订单号，可在对账文件的备注字段获取到）
     */
    public $Remark;

    /**
     * @var string STRING(1027)，保留域
     */
    public $ReservedMsg;

    /**
     * @var string STRING(300)，网银签名
     */
    public $WebSign;

    /**
     * @var string STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
     */
    public $Profile;

    /**
     * @param string $MrchCode String(22)，商户号（签约客户号）
     * @param string $TranWebName STRING(150)，交易网名称（市场名称）
     * @param string $MemberGlobalType STRING(5)，会员证件类型（详情见“常见问题”）
     * @param string $MemberGlobalId STRING(32)，会员证件号码
     * @param string $TranNetMemberCode STRING(32)，交易网会员代码
     * @param string $MemberName STRING(150)，会员名称
     * @param string $TakeCashAcctNo STRING(50)，提现账号（银行卡）
     * @param string $OutAmtAcctName STRING(150)，出金账户名称（银行卡户名）
     * @param string $Ccy STRING(3)，币种（默认为RMB）
     * @param string $CashAmt STRING(20)，可提现金额
     * @param string $Remark STRING(300)，备注（建议可送订单号，可在对账文件的备注字段获取到）
     * @param string $ReservedMsg STRING(1027)，保留域
     * @param string $WebSign STRING(300)，网银签名
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

        if (array_key_exists("TranWebName",$param) and $param["TranWebName"] !== null) {
            $this->TranWebName = $param["TranWebName"];
        }

        if (array_key_exists("MemberGlobalType",$param) and $param["MemberGlobalType"] !== null) {
            $this->MemberGlobalType = $param["MemberGlobalType"];
        }

        if (array_key_exists("MemberGlobalId",$param) and $param["MemberGlobalId"] !== null) {
            $this->MemberGlobalId = $param["MemberGlobalId"];
        }

        if (array_key_exists("TranNetMemberCode",$param) and $param["TranNetMemberCode"] !== null) {
            $this->TranNetMemberCode = $param["TranNetMemberCode"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }

        if (array_key_exists("TakeCashAcctNo",$param) and $param["TakeCashAcctNo"] !== null) {
            $this->TakeCashAcctNo = $param["TakeCashAcctNo"];
        }

        if (array_key_exists("OutAmtAcctName",$param) and $param["OutAmtAcctName"] !== null) {
            $this->OutAmtAcctName = $param["OutAmtAcctName"];
        }

        if (array_key_exists("Ccy",$param) and $param["Ccy"] !== null) {
            $this->Ccy = $param["Ccy"];
        }

        if (array_key_exists("CashAmt",$param) and $param["CashAmt"] !== null) {
            $this->CashAmt = $param["CashAmt"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReservedMsg",$param) and $param["ReservedMsg"] !== null) {
            $this->ReservedMsg = $param["ReservedMsg"];
        }

        if (array_key_exists("WebSign",$param) and $param["WebSign"] !== null) {
            $this->WebSign = $param["WebSign"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
