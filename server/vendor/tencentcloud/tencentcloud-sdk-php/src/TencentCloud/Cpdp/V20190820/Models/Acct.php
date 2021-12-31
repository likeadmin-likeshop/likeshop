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
 * 账户信息
 *
 * @method string getSubAcctNo() 获取STRING(50)，见证子账户的账号（可重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAcctNo(string $SubAcctNo) 设置STRING(50)，见证子账户的账号（可重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAcctProperty() 获取STRING(10)，见证子账户的属性（可重复。1: 普通会员子账号; 2: 挂账子账号; 3: 手续费子账号; 4: 利息子账号; 5: 平台担保子账号）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAcctProperty(string $SubAcctProperty) 设置STRING(10)，见证子账户的属性（可重复。1: 普通会员子账号; 2: 挂账子账号; 3: 手续费子账号; 4: 利息子账号; 5: 平台担保子账号）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会员代码（可重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会员代码（可重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAcctName() 获取STRING(150)，见证子账户的名称（可重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAcctName(string $SubAcctName) 设置STRING(150)，见证子账户的名称（可重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAcctAvailBal() 获取STRING(20)，见证子账户可用余额（可重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAcctAvailBal(string $AcctAvailBal) 设置STRING(20)，见证子账户可用余额（可重复）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCashAmt() 获取STRING(20)，见证子账户可提现金额（可重复。开户日期或修改日期）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCashAmt(string $CashAmt) 设置STRING(20)，见证子账户可提现金额（可重复。开户日期或修改日期）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaintenanceDate() 获取STRING(8)，维护日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaintenanceDate(string $MaintenanceDate) 设置STRING(8)，维护日期
注意：此字段可能返回 null，表示取不到有效值。
 */
class Acct extends AbstractModel
{
    /**
     * @var string STRING(50)，见证子账户的账号（可重复）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAcctNo;

    /**
     * @var string STRING(10)，见证子账户的属性（可重复。1: 普通会员子账号; 2: 挂账子账号; 3: 手续费子账号; 4: 利息子账号; 5: 平台担保子账号）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAcctProperty;

    /**
     * @var string STRING(32)，交易网会员代码（可重复）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranNetMemberCode;

    /**
     * @var string STRING(150)，见证子账户的名称（可重复）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAcctName;

    /**
     * @var string STRING(20)，见证子账户可用余额（可重复）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AcctAvailBal;

    /**
     * @var string STRING(20)，见证子账户可提现金额（可重复。开户日期或修改日期）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CashAmt;

    /**
     * @var string STRING(8)，维护日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaintenanceDate;

    /**
     * @param string $SubAcctNo STRING(50)，见证子账户的账号（可重复）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAcctProperty STRING(10)，见证子账户的属性（可重复。1: 普通会员子账号; 2: 挂账子账号; 3: 手续费子账号; 4: 利息子账号; 5: 平台担保子账号）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranNetMemberCode STRING(32)，交易网会员代码（可重复）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAcctName STRING(150)，见证子账户的名称（可重复）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AcctAvailBal STRING(20)，见证子账户可用余额（可重复）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CashAmt STRING(20)，见证子账户可提现金额（可重复。开户日期或修改日期）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaintenanceDate STRING(8)，维护日期
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
        if (array_key_exists("SubAcctNo",$param) and $param["SubAcctNo"] !== null) {
            $this->SubAcctNo = $param["SubAcctNo"];
        }

        if (array_key_exists("SubAcctProperty",$param) and $param["SubAcctProperty"] !== null) {
            $this->SubAcctProperty = $param["SubAcctProperty"];
        }

        if (array_key_exists("TranNetMemberCode",$param) and $param["TranNetMemberCode"] !== null) {
            $this->TranNetMemberCode = $param["TranNetMemberCode"];
        }

        if (array_key_exists("SubAcctName",$param) and $param["SubAcctName"] !== null) {
            $this->SubAcctName = $param["SubAcctName"];
        }

        if (array_key_exists("AcctAvailBal",$param) and $param["AcctAvailBal"] !== null) {
            $this->AcctAvailBal = $param["AcctAvailBal"];
        }

        if (array_key_exists("CashAmt",$param) and $param["CashAmt"] !== null) {
            $this->CashAmt = $param["CashAmt"];
        }

        if (array_key_exists("MaintenanceDate",$param) and $param["MaintenanceDate"] !== null) {
            $this->MaintenanceDate = $param["MaintenanceDate"];
        }
    }
}
