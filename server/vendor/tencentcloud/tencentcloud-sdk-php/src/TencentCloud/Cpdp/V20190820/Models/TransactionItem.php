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
 * 交易明细信息
 *
 * @method string getBookingFlag() 获取STRING(2)，记账标志（1: 转出; 2: 转入）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBookingFlag(string $BookingFlag) 设置STRING(2)，记账标志（1: 转出; 2: 转入）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranStatus() 获取STRING(32)，交易状态（0: 成功）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranStatus(string $TranStatus) 设置STRING(32)，交易状态（0: 成功）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranAmt() 获取STRING(20)，交易金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranAmt(string $TranAmt) 设置STRING(20)，交易金额
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
 * @method string getBookingType() 获取STRING(20)，记账类型（详情见“常见问题”）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBookingType(string $BookingType) 设置STRING(20)，记账类型（详情见“常见问题”）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInSubAcctNo() 获取STRING(50)，转入见证子账户的帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInSubAcctNo(string $InSubAcctNo) 设置STRING(50)，转入见证子账户的帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutSubAcctNo() 获取STRING(50)，转出见证子账户的帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutSubAcctNo(string $OutSubAcctNo) 设置STRING(50)，转出见证子账户的帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取STRING(300)，备注（返回交易订单号）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置STRING(300)，备注（返回交易订单号）
注意：此字段可能返回 null，表示取不到有效值。
 */
class TransactionItem extends AbstractModel
{
    /**
     * @var string STRING(2)，记账标志（1: 转出; 2: 转入）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BookingFlag;

    /**
     * @var string STRING(32)，交易状态（0: 成功）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranStatus;

    /**
     * @var string STRING(20)，交易金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranAmt;

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
     * @var string STRING(20)，记账类型（详情见“常见问题”）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BookingType;

    /**
     * @var string STRING(50)，转入见证子账户的帐号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InSubAcctNo;

    /**
     * @var string STRING(50)，转出见证子账户的帐号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutSubAcctNo;

    /**
     * @var string STRING(300)，备注（返回交易订单号）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $BookingFlag STRING(2)，记账标志（1: 转出; 2: 转入）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranStatus STRING(32)，交易状态（0: 成功）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranAmt STRING(20)，交易金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranDate STRING(8)，交易日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranTime STRING(20)，交易时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrontSeqNo STRING(52)，见证系统流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BookingType STRING(20)，记账类型（详情见“常见问题”）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InSubAcctNo STRING(50)，转入见证子账户的帐号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutSubAcctNo STRING(50)，转出见证子账户的帐号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark STRING(300)，备注（返回交易订单号）
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

        if (array_key_exists("TranAmt",$param) and $param["TranAmt"] !== null) {
            $this->TranAmt = $param["TranAmt"];
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

        if (array_key_exists("BookingType",$param) and $param["BookingType"] !== null) {
            $this->BookingType = $param["BookingType"];
        }

        if (array_key_exists("InSubAcctNo",$param) and $param["InSubAcctNo"] !== null) {
            $this->InSubAcctNo = $param["InSubAcctNo"];
        }

        if (array_key_exists("OutSubAcctNo",$param) and $param["OutSubAcctNo"] !== null) {
            $this->OutSubAcctNo = $param["OutSubAcctNo"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
