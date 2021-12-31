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
 * QueryCommonTransferRecharge返回参数结构体
 *
 * @method string getTxnReturnCode() 获取String(20)，返回码
 * @method void setTxnReturnCode(string $TxnReturnCode) 设置String(20)，返回码
 * @method string getTxnReturnMsg() 获取String(100)，返回信息
 * @method void setTxnReturnMsg(string $TxnReturnMsg) 设置String(100)，返回信息
 * @method string getCnsmrSeqNo() 获取String(22)，交易流水号
 * @method void setCnsmrSeqNo(string $CnsmrSeqNo) 设置String(22)，交易流水号
 * @method string getResultNum() 获取STRING(10)，本次交易返回查询结果记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultNum(string $ResultNum) 设置STRING(10)，本次交易返回查询结果记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartRecordNo() 获取STRING(30)，起始记录号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartRecordNo(string $StartRecordNo) 设置STRING(30)，起始记录号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndFlag() 获取STRING(2)，结束标志（0: 否; 1: 是）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndFlag(string $EndFlag) 设置STRING(2)，结束标志（0: 否; 1: 是）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalNum() 获取STRING(10)，符合业务查询条件的记录总数（重复次数，一次最多返回20条记录）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNum(string $TotalNum) 设置STRING(10)，符合业务查询条件的记录总数（重复次数，一次最多返回20条记录）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTranItemArray() 获取交易信息数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranItemArray(array $TranItemArray) 设置交易信息数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReservedMsg() 获取STRING(1027)，保留域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，保留域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryCommonTransferRechargeResponse extends AbstractModel
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
     * @var string STRING(10)，本次交易返回查询结果记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultNum;

    /**
     * @var string STRING(30)，起始记录号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartRecordNo;

    /**
     * @var string STRING(2)，结束标志（0: 否; 1: 是）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndFlag;

    /**
     * @var string STRING(10)，符合业务查询条件的记录总数（重复次数，一次最多返回20条记录）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNum;

    /**
     * @var array 交易信息数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranItemArray;

    /**
     * @var string STRING(1027)，保留域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TxnReturnCode String(20)，返回码
     * @param string $TxnReturnMsg String(100)，返回信息
     * @param string $CnsmrSeqNo String(22)，交易流水号
     * @param string $ResultNum STRING(10)，本次交易返回查询结果记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartRecordNo STRING(30)，起始记录号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndFlag STRING(2)，结束标志（0: 否; 1: 是）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalNum STRING(10)，符合业务查询条件的记录总数（重复次数，一次最多返回20条记录）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TranItemArray 交易信息数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReservedMsg STRING(1027)，保留域
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

        if (array_key_exists("ResultNum",$param) and $param["ResultNum"] !== null) {
            $this->ResultNum = $param["ResultNum"];
        }

        if (array_key_exists("StartRecordNo",$param) and $param["StartRecordNo"] !== null) {
            $this->StartRecordNo = $param["StartRecordNo"];
        }

        if (array_key_exists("EndFlag",$param) and $param["EndFlag"] !== null) {
            $this->EndFlag = $param["EndFlag"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TranItemArray",$param) and $param["TranItemArray"] !== null) {
            $this->TranItemArray = [];
            foreach ($param["TranItemArray"] as $key => $value){
                $obj = new TransferItem();
                $obj->deserialize($value);
                array_push($this->TranItemArray, $obj);
            }
        }

        if (array_key_exists("ReservedMsg",$param) and $param["ReservedMsg"] !== null) {
            $this->ReservedMsg = $param["ReservedMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
