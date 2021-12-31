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
 * QuerySingleTransactionStatus返回参数结构体
 *
 * @method string getTxnReturnCode() 获取String(20)，返回码
 * @method void setTxnReturnCode(string $TxnReturnCode) 设置String(20)，返回码
 * @method string getTxnReturnMsg() 获取String(100)，返回信息
 * @method void setTxnReturnMsg(string $TxnReturnMsg) 设置String(100)，返回信息
 * @method string getCnsmrSeqNo() 获取String(22)，交易流水号
 * @method void setCnsmrSeqNo(string $CnsmrSeqNo) 设置String(22)，交易流水号
 * @method string getBookingFlag() 获取STRING(2)，记账标志（记账标志。1: 登记挂账; 2: 支付; 3: 提现; 4: 清分; 5: 下单预支付; 6: 确认并付款; 7: 退款; 8: 支付到平台; N: 其他）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBookingFlag(string $BookingFlag) 设置STRING(2)，记账标志（记账标志。1: 登记挂账; 2: 支付; 3: 提现; 4: 清分; 5: 下单预支付; 6: 确认并付款; 7: 退款; 8: 支付到平台; N: 其他）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranStatus() 获取STRING(32)，交易状态（0: 成功; 1: 失败; 2: 待确认; 5: 待处理; 6: 处理中。0和1是终态，2、5、6是中间态，其中2是特指提现后待确认提现是否成功，5是银行收到交易等待处理，6是交易正在处理）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranStatus(string $TranStatus) 设置STRING(32)，交易状态（0: 成功; 1: 失败; 2: 待确认; 5: 待处理; 6: 处理中。0和1是终态，2、5、6是中间态，其中2是特指提现后待确认提现是否成功，5是银行收到交易等待处理，6是交易正在处理）
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
 * @method string getInSubAcctNo() 获取STRING(50)，转入子账户账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInSubAcctNo(string $InSubAcctNo) 设置STRING(50)，转入子账户账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutSubAcctNo() 获取STRING(50)，转出子账户账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutSubAcctNo(string $OutSubAcctNo) 设置STRING(50)，转出子账户账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailMsg() 获取STRING(300)，失败信息（当提现失败时，返回交易失败原因）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailMsg(string $FailMsg) 设置STRING(300)，失败信息（当提现失败时，返回交易失败原因）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldTranFrontSeqNo() 获取STRING(50)，原前置流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldTranFrontSeqNo(string $OldTranFrontSeqNo) 设置STRING(50)，原前置流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QuerySingleTransactionStatusResponse extends AbstractModel
{
    /**
     * @var string String(20)，返回码
     */
    public $TxnReturnCode;

    /**
     * @var string String(100)，返回信息
     */
    public $TxnReturnMsg;

    /**
     * @var string String(22)，交易流水号
     */
    public $CnsmrSeqNo;

    /**
     * @var string STRING(2)，记账标志（记账标志。1: 登记挂账; 2: 支付; 3: 提现; 4: 清分; 5: 下单预支付; 6: 确认并付款; 7: 退款; 8: 支付到平台; N: 其他）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BookingFlag;

    /**
     * @var string STRING(32)，交易状态（0: 成功; 1: 失败; 2: 待确认; 5: 待处理; 6: 处理中。0和1是终态，2、5、6是中间态，其中2是特指提现后待确认提现是否成功，5是银行收到交易等待处理，6是交易正在处理）
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
     * @var string STRING(50)，转入子账户账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InSubAcctNo;

    /**
     * @var string STRING(50)，转出子账户账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutSubAcctNo;

    /**
     * @var string STRING(300)，失败信息（当提现失败时，返回交易失败原因）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailMsg;

    /**
     * @var string STRING(50)，原前置流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldTranFrontSeqNo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TxnReturnCode String(20)，返回码
     * @param string $TxnReturnMsg String(100)，返回信息
     * @param string $CnsmrSeqNo String(22)，交易流水号
     * @param string $BookingFlag STRING(2)，记账标志（记账标志。1: 登记挂账; 2: 支付; 3: 提现; 4: 清分; 5: 下单预支付; 6: 确认并付款; 7: 退款; 8: 支付到平台; N: 其他）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranStatus STRING(32)，交易状态（0: 成功; 1: 失败; 2: 待确认; 5: 待处理; 6: 处理中。0和1是终态，2、5、6是中间态，其中2是特指提现后待确认提现是否成功，5是银行收到交易等待处理，6是交易正在处理）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranAmt STRING(20)，交易金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranDate STRING(8)，交易日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranTime STRING(20)，交易时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InSubAcctNo STRING(50)，转入子账户账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutSubAcctNo STRING(50)，转出子账户账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailMsg STRING(300)，失败信息（当提现失败时，返回交易失败原因）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldTranFrontSeqNo STRING(50)，原前置流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TxnReturnCode",$param) and $param["TxnReturnCode"] !== null) {
            $this->TxnReturnCode = $param["TxnReturnCode"];
        }

        if (array_key_exists("TxnReturnMsg",$param) and $param["TxnReturnMsg"] !== null) {
            $this->TxnReturnMsg = $param["TxnReturnMsg"];
        }

        if (array_key_exists("CnsmrSeqNo",$param) and $param["CnsmrSeqNo"] !== null) {
            $this->CnsmrSeqNo = $param["CnsmrSeqNo"];
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

        if (array_key_exists("InSubAcctNo",$param) and $param["InSubAcctNo"] !== null) {
            $this->InSubAcctNo = $param["InSubAcctNo"];
        }

        if (array_key_exists("OutSubAcctNo",$param) and $param["OutSubAcctNo"] !== null) {
            $this->OutSubAcctNo = $param["OutSubAcctNo"];
        }

        if (array_key_exists("FailMsg",$param) and $param["FailMsg"] !== null) {
            $this->FailMsg = $param["FailMsg"];
        }

        if (array_key_exists("OldTranFrontSeqNo",$param) and $param["OldTranFrontSeqNo"] !== null) {
            $this->OldTranFrontSeqNo = $param["OldTranFrontSeqNo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
