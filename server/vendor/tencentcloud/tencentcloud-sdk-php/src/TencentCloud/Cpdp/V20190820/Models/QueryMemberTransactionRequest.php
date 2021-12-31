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
 * QueryMemberTransaction请求参数结构体
 *
 * @method string getMrchCode() 获取String(22)，商户号（签约客户号）
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号（签约客户号）
 * @method string getFunctionFlag() 获取STRING(2)，功能标志（1: 下单预支付; 2: 确认并付款; 3: 退款; 6: 直接支付T+1; 9: 直接支付T+0）
 * @method void setFunctionFlag(string $FunctionFlag) 设置STRING(2)，功能标志（1: 下单预支付; 2: 确认并付款; 3: 退款; 6: 直接支付T+1; 9: 直接支付T+0）
 * @method string getOutSubAcctNo() 获取STRING(50)，转出方的见证子账户的账号（付款方）
 * @method void setOutSubAcctNo(string $OutSubAcctNo) 设置STRING(50)，转出方的见证子账户的账号（付款方）
 * @method string getOutMemberCode() 获取STRING(32)，转出方的交易网会员代码
 * @method void setOutMemberCode(string $OutMemberCode) 设置STRING(32)，转出方的交易网会员代码
 * @method string getOutSubAcctName() 获取STRING(150)，转出方的见证子账户的户名（户名是绑卡时上送的账户名称，如果未绑卡，就送OpenCustAcctId接口上送的用户昵称UserNickname）
 * @method void setOutSubAcctName(string $OutSubAcctName) 设置STRING(150)，转出方的见证子账户的户名（户名是绑卡时上送的账户名称，如果未绑卡，就送OpenCustAcctId接口上送的用户昵称UserNickname）
 * @method string getInSubAcctNo() 获取STRING(50)，转入方的见证子账户的账号（收款方）
 * @method void setInSubAcctNo(string $InSubAcctNo) 设置STRING(50)，转入方的见证子账户的账号（收款方）
 * @method string getInMemberCode() 获取STRING(32)，转入方的交易网会员代码
 * @method void setInMemberCode(string $InMemberCode) 设置STRING(32)，转入方的交易网会员代码
 * @method string getInSubAcctName() 获取STRING(150)，转入方的见证子账户的户名（户名是绑卡时上送的账户名称，如果未绑卡，就送OpenCustAcctId接口上送的用户昵称UserNickname）
 * @method void setInSubAcctName(string $InSubAcctName) 设置STRING(150)，转入方的见证子账户的户名（户名是绑卡时上送的账户名称，如果未绑卡，就送OpenCustAcctId接口上送的用户昵称UserNickname）
 * @method string getTranAmt() 获取STRING(20)，交易金额
 * @method void setTranAmt(string $TranAmt) 设置STRING(20)，交易金额
 * @method string getTranFee() 获取STRING(20)，交易费用（平台收取交易费用）
 * @method void setTranFee(string $TranFee) 设置STRING(20)，交易费用（平台收取交易费用）
 * @method string getTranType() 获取STRING(20)，交易类型（01: 普通交易）
 * @method void setTranType(string $TranType) 设置STRING(20)，交易类型（01: 普通交易）
 * @method string getCcy() 获取STRING(3)，币种（默认: RMB）
 * @method void setCcy(string $Ccy) 设置STRING(3)，币种（默认: RMB）
 * @method string getOrderNo() 获取STRING(50)，订单号（功能标志为1,2,3时必输）
 * @method void setOrderNo(string $OrderNo) 设置STRING(50)，订单号（功能标志为1,2,3时必输）
 * @method string getOrderContent() 获取STRING(500)，订单内容
 * @method void setOrderContent(string $OrderContent) 设置STRING(500)，订单内容
 * @method string getRemark() 获取STRING(300)，备注（建议可送订单号，可在对账文件的备注字段获取到）
 * @method void setRemark(string $Remark) 设置STRING(300)，备注（建议可送订单号，可在对账文件的备注字段获取到）
 * @method string getReservedMsg() 获取STRING(1027)，保留域（若需短信验证码则此项必输短信指令号）
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，保留域（若需短信验证码则此项必输短信指令号）
 * @method string getWebSign() 获取STRING(300)，网银签名（若需短信验证码则此项必输）
 * @method void setWebSign(string $WebSign) 设置STRING(300)，网银签名（若需短信验证码则此项必输）
 * @method string getProfile() 获取STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 * @method void setProfile(string $Profile) 设置STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 */
class QueryMemberTransactionRequest extends AbstractModel
{
    /**
     * @var string String(22)，商户号（签约客户号）
     */
    public $MrchCode;

    /**
     * @var string STRING(2)，功能标志（1: 下单预支付; 2: 确认并付款; 3: 退款; 6: 直接支付T+1; 9: 直接支付T+0）
     */
    public $FunctionFlag;

    /**
     * @var string STRING(50)，转出方的见证子账户的账号（付款方）
     */
    public $OutSubAcctNo;

    /**
     * @var string STRING(32)，转出方的交易网会员代码
     */
    public $OutMemberCode;

    /**
     * @var string STRING(150)，转出方的见证子账户的户名（户名是绑卡时上送的账户名称，如果未绑卡，就送OpenCustAcctId接口上送的用户昵称UserNickname）
     */
    public $OutSubAcctName;

    /**
     * @var string STRING(50)，转入方的见证子账户的账号（收款方）
     */
    public $InSubAcctNo;

    /**
     * @var string STRING(32)，转入方的交易网会员代码
     */
    public $InMemberCode;

    /**
     * @var string STRING(150)，转入方的见证子账户的户名（户名是绑卡时上送的账户名称，如果未绑卡，就送OpenCustAcctId接口上送的用户昵称UserNickname）
     */
    public $InSubAcctName;

    /**
     * @var string STRING(20)，交易金额
     */
    public $TranAmt;

    /**
     * @var string STRING(20)，交易费用（平台收取交易费用）
     */
    public $TranFee;

    /**
     * @var string STRING(20)，交易类型（01: 普通交易）
     */
    public $TranType;

    /**
     * @var string STRING(3)，币种（默认: RMB）
     */
    public $Ccy;

    /**
     * @var string STRING(50)，订单号（功能标志为1,2,3时必输）
     */
    public $OrderNo;

    /**
     * @var string STRING(500)，订单内容
     */
    public $OrderContent;

    /**
     * @var string STRING(300)，备注（建议可送订单号，可在对账文件的备注字段获取到）
     */
    public $Remark;

    /**
     * @var string STRING(1027)，保留域（若需短信验证码则此项必输短信指令号）
     */
    public $ReservedMsg;

    /**
     * @var string STRING(300)，网银签名（若需短信验证码则此项必输）
     */
    public $WebSign;

    /**
     * @var string STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
     */
    public $Profile;

    /**
     * @param string $MrchCode String(22)，商户号（签约客户号）
     * @param string $FunctionFlag STRING(2)，功能标志（1: 下单预支付; 2: 确认并付款; 3: 退款; 6: 直接支付T+1; 9: 直接支付T+0）
     * @param string $OutSubAcctNo STRING(50)，转出方的见证子账户的账号（付款方）
     * @param string $OutMemberCode STRING(32)，转出方的交易网会员代码
     * @param string $OutSubAcctName STRING(150)，转出方的见证子账户的户名（户名是绑卡时上送的账户名称，如果未绑卡，就送OpenCustAcctId接口上送的用户昵称UserNickname）
     * @param string $InSubAcctNo STRING(50)，转入方的见证子账户的账号（收款方）
     * @param string $InMemberCode STRING(32)，转入方的交易网会员代码
     * @param string $InSubAcctName STRING(150)，转入方的见证子账户的户名（户名是绑卡时上送的账户名称，如果未绑卡，就送OpenCustAcctId接口上送的用户昵称UserNickname）
     * @param string $TranAmt STRING(20)，交易金额
     * @param string $TranFee STRING(20)，交易费用（平台收取交易费用）
     * @param string $TranType STRING(20)，交易类型（01: 普通交易）
     * @param string $Ccy STRING(3)，币种（默认: RMB）
     * @param string $OrderNo STRING(50)，订单号（功能标志为1,2,3时必输）
     * @param string $OrderContent STRING(500)，订单内容
     * @param string $Remark STRING(300)，备注（建议可送订单号，可在对账文件的备注字段获取到）
     * @param string $ReservedMsg STRING(1027)，保留域（若需短信验证码则此项必输短信指令号）
     * @param string $WebSign STRING(300)，网银签名（若需短信验证码则此项必输）
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

        if (array_key_exists("FunctionFlag",$param) and $param["FunctionFlag"] !== null) {
            $this->FunctionFlag = $param["FunctionFlag"];
        }

        if (array_key_exists("OutSubAcctNo",$param) and $param["OutSubAcctNo"] !== null) {
            $this->OutSubAcctNo = $param["OutSubAcctNo"];
        }

        if (array_key_exists("OutMemberCode",$param) and $param["OutMemberCode"] !== null) {
            $this->OutMemberCode = $param["OutMemberCode"];
        }

        if (array_key_exists("OutSubAcctName",$param) and $param["OutSubAcctName"] !== null) {
            $this->OutSubAcctName = $param["OutSubAcctName"];
        }

        if (array_key_exists("InSubAcctNo",$param) and $param["InSubAcctNo"] !== null) {
            $this->InSubAcctNo = $param["InSubAcctNo"];
        }

        if (array_key_exists("InMemberCode",$param) and $param["InMemberCode"] !== null) {
            $this->InMemberCode = $param["InMemberCode"];
        }

        if (array_key_exists("InSubAcctName",$param) and $param["InSubAcctName"] !== null) {
            $this->InSubAcctName = $param["InSubAcctName"];
        }

        if (array_key_exists("TranAmt",$param) and $param["TranAmt"] !== null) {
            $this->TranAmt = $param["TranAmt"];
        }

        if (array_key_exists("TranFee",$param) and $param["TranFee"] !== null) {
            $this->TranFee = $param["TranFee"];
        }

        if (array_key_exists("TranType",$param) and $param["TranType"] !== null) {
            $this->TranType = $param["TranType"];
        }

        if (array_key_exists("Ccy",$param) and $param["Ccy"] !== null) {
            $this->Ccy = $param["Ccy"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("OrderContent",$param) and $param["OrderContent"] !== null) {
            $this->OrderContent = $param["OrderContent"];
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
