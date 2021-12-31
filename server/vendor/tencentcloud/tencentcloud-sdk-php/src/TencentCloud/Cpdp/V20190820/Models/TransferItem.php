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
 * 转账充值明细信息
 *
 * @method string getInAcctType() 获取STRING(10)，入账类型（02: 会员充值; 03: 资金挂账）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInAcctType(string $InAcctType) 设置STRING(10)，入账类型（02: 会员充值; 03: 资金挂账）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAcctNo() 获取STRING(50)，见证子帐户的帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAcctNo(string $SubAcctNo) 设置STRING(50)，见证子帐户的帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranAmt() 获取STRING(20)，入金金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranAmt(string $TranAmt) 设置STRING(20)，入金金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInAcctNo() 获取STRING(50)，入金账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInAcctNo(string $InAcctNo) 设置STRING(50)，入金账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInAcctName() 获取STRING(150)，入金账户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInAcctName(string $InAcctName) 设置STRING(150)，入金账户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCcy() 获取STRING(3)，币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcy(string $Ccy) 设置STRING(3)，币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountingDate() 获取STRING(8)，会计日期（即银行主机记账日期）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountingDate(string $AccountingDate) 设置STRING(8)，会计日期（即银行主机记账日期）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankName() 获取STRING(150)，银行名称（付款账户银行名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankName(string $BankName) 设置STRING(150)，银行名称（付款账户银行名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取STRING(300)，转账备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置STRING(300)，转账备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrontSeqNo() 获取STRING(52)，见证系统流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrontSeqNo(string $FrontSeqNo) 设置STRING(52)，见证系统流水号
注意：此字段可能返回 null，表示取不到有效值。
 */
class TransferItem extends AbstractModel
{
    /**
     * @var string STRING(10)，入账类型（02: 会员充值; 03: 资金挂账）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InAcctType;

    /**
     * @var string STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranNetMemberCode;

    /**
     * @var string STRING(50)，见证子帐户的帐号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAcctNo;

    /**
     * @var string STRING(20)，入金金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranAmt;

    /**
     * @var string STRING(50)，入金账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InAcctNo;

    /**
     * @var string STRING(150)，入金账户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InAcctName;

    /**
     * @var string STRING(3)，币种
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ccy;

    /**
     * @var string STRING(8)，会计日期（即银行主机记账日期）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountingDate;

    /**
     * @var string STRING(150)，银行名称（付款账户银行名称）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankName;

    /**
     * @var string STRING(300)，转账备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string STRING(52)，见证系统流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrontSeqNo;

    /**
     * @param string $InAcctType STRING(10)，入账类型（02: 会员充值; 03: 资金挂账）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranNetMemberCode STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAcctNo STRING(50)，见证子帐户的帐号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranAmt STRING(20)，入金金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InAcctNo STRING(50)，入金账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InAcctName STRING(150)，入金账户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ccy STRING(3)，币种
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountingDate STRING(8)，会计日期（即银行主机记账日期）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankName STRING(150)，银行名称（付款账户银行名称）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark STRING(300)，转账备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrontSeqNo STRING(52)，见证系统流水号
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
        if (array_key_exists("InAcctType",$param) and $param["InAcctType"] !== null) {
            $this->InAcctType = $param["InAcctType"];
        }

        if (array_key_exists("TranNetMemberCode",$param) and $param["TranNetMemberCode"] !== null) {
            $this->TranNetMemberCode = $param["TranNetMemberCode"];
        }

        if (array_key_exists("SubAcctNo",$param) and $param["SubAcctNo"] !== null) {
            $this->SubAcctNo = $param["SubAcctNo"];
        }

        if (array_key_exists("TranAmt",$param) and $param["TranAmt"] !== null) {
            $this->TranAmt = $param["TranAmt"];
        }

        if (array_key_exists("InAcctNo",$param) and $param["InAcctNo"] !== null) {
            $this->InAcctNo = $param["InAcctNo"];
        }

        if (array_key_exists("InAcctName",$param) and $param["InAcctName"] !== null) {
            $this->InAcctName = $param["InAcctName"];
        }

        if (array_key_exists("Ccy",$param) and $param["Ccy"] !== null) {
            $this->Ccy = $param["Ccy"];
        }

        if (array_key_exists("AccountingDate",$param) and $param["AccountingDate"] !== null) {
            $this->AccountingDate = $param["AccountingDate"];
        }

        if (array_key_exists("BankName",$param) and $param["BankName"] !== null) {
            $this->BankName = $param["BankName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("FrontSeqNo",$param) and $param["FrontSeqNo"] !== null) {
            $this->FrontSeqNo = $param["FrontSeqNo"];
        }
    }
}
