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
 * BindRelateAcctUnionPay返回参数结构体
 *
 * @method string getReservedMsg() 获取STRING(1027)，保留域（在同名子账户绑定的场景下，若返回"VERIFIED"则说明无需验证直接绑定成功）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，保留域（在同名子账户绑定的场景下，若返回"VERIFIED"则说明无需验证直接绑定成功）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTxnReturnCode() 获取String(20)，返回码
 * @method void setTxnReturnCode(string $TxnReturnCode) 设置String(20)，返回码
 * @method string getTxnReturnMsg() 获取String(100)，返回信息
 * @method void setTxnReturnMsg(string $TxnReturnMsg) 设置String(100)，返回信息
 * @method string getCnsmrSeqNo() 获取String(22)，交易流水号
 * @method void setCnsmrSeqNo(string $CnsmrSeqNo) 设置String(22)，交易流水号
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class BindRelateAcctUnionPayResponse extends AbstractModel
{
    /**
     * @var string STRING(1027)，保留域（在同名子账户绑定的场景下，若返回"VERIFIED"则说明无需验证直接绑定成功）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedMsg;

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
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ReservedMsg STRING(1027)，保留域（在同名子账户绑定的场景下，若返回"VERIFIED"则说明无需验证直接绑定成功）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TxnReturnCode String(20)，返回码
     * @param string $TxnReturnMsg String(100)，返回信息
     * @param string $CnsmrSeqNo String(22)，交易流水号
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
        if (array_key_exists("ReservedMsg",$param) and $param["ReservedMsg"] !== null) {
            $this->ReservedMsg = $param["ReservedMsg"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
