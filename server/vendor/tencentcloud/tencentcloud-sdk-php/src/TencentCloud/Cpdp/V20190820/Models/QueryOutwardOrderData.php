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
 * 查询汇出数据
 *
 * @method string getMerchantId() 获取商户号
 * @method void setMerchantId(string $MerchantId) 设置商户号
 * @method string getTransactionId() 获取对接方汇出指令编号
 * @method void setTransactionId(string $TransactionId) 设置对接方汇出指令编号
 * @method string getAcctDate() 获取财务日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAcctDate(string $AcctDate) 设置财务日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPricingCurrency() 获取定价币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPricingCurrency(string $PricingCurrency) 设置定价币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceCurrency() 获取源币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceCurrency(string $SourceCurrency) 设置源币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceAmount() 获取源金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceAmount(string $SourceAmount) 设置源金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetCurrency() 获取目的币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetCurrency(string $TargetCurrency) 设置目的币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetAmount() 获取目的金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetAmount(string $TargetAmount) 设置目的金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFxRate() 获取汇率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFxRate(string $FxRate) 设置汇率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取指令状态
 * @method void setStatus(string $Status) 设置指令状态
 * @method string getFailReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundAmount() 获取退汇金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundAmount(string $RefundAmount) 设置退汇金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundCurrency() 获取退汇币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundCurrency(string $RefundCurrency) 设置退汇币种
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOutwardOrderData extends AbstractModel
{
    /**
     * @var string 商户号
     */
    public $MerchantId;

    /**
     * @var string 对接方汇出指令编号
     */
    public $TransactionId;

    /**
     * @var string 财务日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AcctDate;

    /**
     * @var string 定价币种
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PricingCurrency;

    /**
     * @var string 源币种
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceCurrency;

    /**
     * @var string 源金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceAmount;

    /**
     * @var string 目的币种
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetCurrency;

    /**
     * @var string 目的金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetAmount;

    /**
     * @var string 汇率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FxRate;

    /**
     * @var string 指令状态
     */
    public $Status;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var string 退汇金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundAmount;

    /**
     * @var string 退汇币种
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundCurrency;

    /**
     * @param string $MerchantId 商户号
     * @param string $TransactionId 对接方汇出指令编号
     * @param string $AcctDate 财务日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PricingCurrency 定价币种
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceCurrency 源币种
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceAmount 源金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetCurrency 目的币种
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetAmount 目的金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FxRate 汇率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 指令状态
     * @param string $FailReason 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundAmount 退汇金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundCurrency 退汇币种
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("AcctDate",$param) and $param["AcctDate"] !== null) {
            $this->AcctDate = $param["AcctDate"];
        }

        if (array_key_exists("PricingCurrency",$param) and $param["PricingCurrency"] !== null) {
            $this->PricingCurrency = $param["PricingCurrency"];
        }

        if (array_key_exists("SourceCurrency",$param) and $param["SourceCurrency"] !== null) {
            $this->SourceCurrency = $param["SourceCurrency"];
        }

        if (array_key_exists("SourceAmount",$param) and $param["SourceAmount"] !== null) {
            $this->SourceAmount = $param["SourceAmount"];
        }

        if (array_key_exists("TargetCurrency",$param) and $param["TargetCurrency"] !== null) {
            $this->TargetCurrency = $param["TargetCurrency"];
        }

        if (array_key_exists("TargetAmount",$param) and $param["TargetAmount"] !== null) {
            $this->TargetAmount = $param["TargetAmount"];
        }

        if (array_key_exists("FxRate",$param) and $param["FxRate"] !== null) {
            $this->FxRate = $param["FxRate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("RefundAmount",$param) and $param["RefundAmount"] !== null) {
            $this->RefundAmount = $param["RefundAmount"];
        }

        if (array_key_exists("RefundCurrency",$param) and $param["RefundCurrency"] !== null) {
            $this->RefundCurrency = $param["RefundCurrency"];
        }
    }
}
