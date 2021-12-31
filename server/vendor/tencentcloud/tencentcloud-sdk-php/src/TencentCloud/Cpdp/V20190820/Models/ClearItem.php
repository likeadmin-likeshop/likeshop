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
 * 银行在途清算结果信息
 *
 * @method string getDate() 获取STRING(8)，日期（格式: 20190101）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置STRING(8)，日期（格式: 20190101）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAcctType() 获取STRING(40)，子账号类型（子帐号类型。1: 普通会员子账号; 2: 挂账子账号; 3: 手续费子账号; 4: 利息子账号; 5: 平台担保子账号; 7: 在途; 8: 理财购买子帐号; 9: 理财赎回子帐号; 10: 平台子拥有结算子帐号）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAcctType(string $SubAcctType) 设置STRING(40)，子账号类型（子帐号类型。1: 普通会员子账号; 2: 挂账子账号; 3: 手续费子账号; 4: 利息子账号; 5: 平台担保子账号; 7: 在途; 8: 理财购买子帐号; 9: 理财赎回子帐号; 10: 平台子拥有结算子帐号）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReconcileStatus() 获取STRING(3)，对账状态（0: 成功; 1: 失败）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReconcileStatus(string $ReconcileStatus) 设置STRING(3)，对账状态（0: 成功; 1: 失败）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReconcileReturnMsg() 获取STRING(300)，对账返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReconcileReturnMsg(string $ReconcileReturnMsg) 设置STRING(300)，对账返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClearingStatus() 获取STRING(20)，清算状态（0: 成功; 1: 失败; 2: 异常; 3: 待处理）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClearingStatus(string $ClearingStatus) 设置STRING(20)，清算状态（0: 成功; 1: 失败; 2: 异常; 3: 待处理）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClearingReturnMsg() 获取STRING(2)，清算返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClearingReturnMsg(string $ClearingReturnMsg) 设置STRING(2)，清算返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalAmt() 获取STRING(300)，待清算总金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalAmt(string $TotalAmt) 设置STRING(300)，待清算总金额
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClearItem extends AbstractModel
{
    /**
     * @var string STRING(8)，日期（格式: 20190101）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var string STRING(40)，子账号类型（子帐号类型。1: 普通会员子账号; 2: 挂账子账号; 3: 手续费子账号; 4: 利息子账号; 5: 平台担保子账号; 7: 在途; 8: 理财购买子帐号; 9: 理财赎回子帐号; 10: 平台子拥有结算子帐号）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAcctType;

    /**
     * @var string STRING(3)，对账状态（0: 成功; 1: 失败）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReconcileStatus;

    /**
     * @var string STRING(300)，对账返回信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReconcileReturnMsg;

    /**
     * @var string STRING(20)，清算状态（0: 成功; 1: 失败; 2: 异常; 3: 待处理）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClearingStatus;

    /**
     * @var string STRING(2)，清算返回信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClearingReturnMsg;

    /**
     * @var string STRING(300)，待清算总金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalAmt;

    /**
     * @param string $Date STRING(8)，日期（格式: 20190101）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAcctType STRING(40)，子账号类型（子帐号类型。1: 普通会员子账号; 2: 挂账子账号; 3: 手续费子账号; 4: 利息子账号; 5: 平台担保子账号; 7: 在途; 8: 理财购买子帐号; 9: 理财赎回子帐号; 10: 平台子拥有结算子帐号）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReconcileStatus STRING(3)，对账状态（0: 成功; 1: 失败）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReconcileReturnMsg STRING(300)，对账返回信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClearingStatus STRING(20)，清算状态（0: 成功; 1: 失败; 2: 异常; 3: 待处理）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClearingReturnMsg STRING(2)，清算返回信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalAmt STRING(300)，待清算总金额
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("SubAcctType",$param) and $param["SubAcctType"] !== null) {
            $this->SubAcctType = $param["SubAcctType"];
        }

        if (array_key_exists("ReconcileStatus",$param) and $param["ReconcileStatus"] !== null) {
            $this->ReconcileStatus = $param["ReconcileStatus"];
        }

        if (array_key_exists("ReconcileReturnMsg",$param) and $param["ReconcileReturnMsg"] !== null) {
            $this->ReconcileReturnMsg = $param["ReconcileReturnMsg"];
        }

        if (array_key_exists("ClearingStatus",$param) and $param["ClearingStatus"] !== null) {
            $this->ClearingStatus = $param["ClearingStatus"];
        }

        if (array_key_exists("ClearingReturnMsg",$param) and $param["ClearingReturnMsg"] !== null) {
            $this->ClearingReturnMsg = $param["ClearingReturnMsg"];
        }

        if (array_key_exists("TotalAmt",$param) and $param["TotalAmt"] !== null) {
            $this->TotalAmt = $param["TotalAmt"];
        }
    }
}
