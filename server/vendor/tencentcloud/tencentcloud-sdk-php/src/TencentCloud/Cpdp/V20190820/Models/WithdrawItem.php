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
 * 清分提现明细信息
 *
 * @method string getBookingFlag() 获取STRING(2)，记账标志（01: 提现; 02: 清分 ）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBookingFlag(string $BookingFlag) 设置STRING(2)，记账标志（01: 提现; 02: 清分 ）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranStatus() 获取STRING(32)，交易状态（0: 成功）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranStatus(string $TranStatus) 设置STRING(32)，交易状态（0: 成功）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBookingMsg() 获取STRING(200)，记账说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBookingMsg(string $BookingMsg) 设置STRING(200)，记账说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAcctNo() 获取STRING(50)，见证子帐户的帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAcctNo(string $SubAcctNo) 设置STRING(50)，见证子帐户的帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAcctName() 获取STRING(150)，见证子账户的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAcctName(string $SubAcctName) 设置STRING(150)，见证子账户的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranAmt() 获取STRING(20)，交易金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranAmt(string $TranAmt) 设置STRING(20)，交易金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommission() 获取STRING(20)，手续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommission(string $Commission) 设置STRING(20)，手续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranDate() 获取STRING(8)，交易日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranDate(string $TranDate) 设置STRING(8)，交易日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranTime() 获取STRING(20)，交易时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranTime(string $TranTime) 设置STRING(20)，交易时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrontSeqNo() 获取STRING(52)，见证系统流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrontSeqNo(string $FrontSeqNo) 设置STRING(52)，见证系统流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取STRING(300)，备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置STRING(300)，备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class WithdrawItem extends AbstractModel
{
    /**
     * @var string STRING(2)，记账标志（01: 提现; 02: 清分 ）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BookingFlag;

    /**
     * @var string STRING(32)，交易状态（0: 成功）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranStatus;

    /**
     * @var string STRING(200)，记账说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BookingMsg;

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
     * @var string STRING(150)，见证子账户的名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAcctName;

    /**
     * @var string STRING(20)，交易金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranAmt;

    /**
     * @var string STRING(20)，手续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Commission;

    /**
     * @var string STRING(8)，交易日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranDate;

    /**
     * @var string STRING(20)，交易时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranTime;

    /**
     * @var string STRING(52)，见证系统流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrontSeqNo;

    /**
     * @var string STRING(300)，备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $BookingFlag STRING(2)，记账标志（01: 提现; 02: 清分 ）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranStatus STRING(32)，交易状态（0: 成功）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BookingMsg STRING(200)，记账说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranNetMemberCode STRING(32)，交易网会员代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAcctNo STRING(50)，见证子帐户的帐号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAcctName STRING(150)，见证子账户的名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranAmt STRING(20)，交易金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Commission STRING(20)，手续费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranDate STRING(8)，交易日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranTime STRING(20)，交易时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrontSeqNo STRING(52)，见证系统流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark STRING(300)，备注
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
        if (array_key_exists("BookingFlag",$param) and $param["BookingFlag"] !== null) {
            $this->BookingFlag = $param["BookingFlag"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }

        if (array_key_exists("BookingMsg",$param) and $param["BookingMsg"] !== null) {
            $this->BookingMsg = $param["BookingMsg"];
        }

        if (array_key_exists("TranNetMemberCode",$param) and $param["TranNetMemberCode"] !== null) {
            $this->TranNetMemberCode = $param["TranNetMemberCode"];
        }

        if (array_key_exists("SubAcctNo",$param) and $param["SubAcctNo"] !== null) {
            $this->SubAcctNo = $param["SubAcctNo"];
        }

        if (array_key_exists("SubAcctName",$param) and $param["SubAcctName"] !== null) {
            $this->SubAcctName = $param["SubAcctName"];
        }

        if (array_key_exists("TranAmt",$param) and $param["TranAmt"] !== null) {
            $this->TranAmt = $param["TranAmt"];
        }

        if (array_key_exists("Commission",$param) and $param["Commission"] !== null) {
            $this->Commission = $param["Commission"];
        }

        if (array_key_exists("TranDate",$param) and $param["TranDate"] !== null) {
            $this->TranDate = $param["TranDate"];
        }

        if (array_key_exists("TranTime",$param) and $param["TranTime"] !== null) {
            $this->TranTime = $param["TranTime"];
        }

        if (array_key_exists("FrontSeqNo",$param) and $param["FrontSeqNo"] !== null) {
            $this->FrontSeqNo = $param["FrontSeqNo"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
