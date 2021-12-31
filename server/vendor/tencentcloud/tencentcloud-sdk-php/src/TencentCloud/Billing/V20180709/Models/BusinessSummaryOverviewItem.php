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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按产品汇总产品详情
 *
 * @method string getBusinessCode() 获取产品码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessCode(string $BusinessCode) 设置产品码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessCodeName() 获取产品名称：云产品大类，如云服务器CVM、云数据库MySQL
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称：云产品大类，如云服务器CVM、云数据库MySQL
 * @method string getRealTotalCost() 获取实际花费
 * @method void setRealTotalCost(string $RealTotalCost) 设置实际花费
 * @method string getRealTotalCostRatio() 获取费用所占百分比，两位小数
 * @method void setRealTotalCostRatio(string $RealTotalCostRatio) 设置费用所占百分比，两位小数
 * @method string getCashPayAmount() 获取现金金额
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金金额
 * @method string getIncentivePayAmount() 获取赠送金金额
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送金金额
 * @method string getVoucherPayAmount() 获取代金券金额
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券金额
 * @method string getBillMonth() 获取账单月份，格式2019-08
 * @method void setBillMonth(string $BillMonth) 设置账单月份，格式2019-08
 */
class BusinessSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string 产品码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessCode;

    /**
     * @var string 产品名称：云产品大类，如云服务器CVM、云数据库MySQL
     */
    public $BusinessCodeName;

    /**
     * @var string 实际花费
     */
    public $RealTotalCost;

    /**
     * @var string 费用所占百分比，两位小数
     */
    public $RealTotalCostRatio;

    /**
     * @var string 现金金额
     */
    public $CashPayAmount;

    /**
     * @var string 赠送金金额
     */
    public $IncentivePayAmount;

    /**
     * @var string 代金券金额
     */
    public $VoucherPayAmount;

    /**
     * @var string 账单月份，格式2019-08
     */
    public $BillMonth;

    /**
     * @param string $BusinessCode 产品码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessCodeName 产品名称：云产品大类，如云服务器CVM、云数据库MySQL
     * @param string $RealTotalCost 实际花费
     * @param string $RealTotalCostRatio 费用所占百分比，两位小数
     * @param string $CashPayAmount 现金金额
     * @param string $IncentivePayAmount 赠送金金额
     * @param string $VoucherPayAmount 代金券金额
     * @param string $BillMonth 账单月份，格式2019-08
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
        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("RealTotalCostRatio",$param) and $param["RealTotalCostRatio"] !== null) {
            $this->RealTotalCostRatio = $param["RealTotalCostRatio"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }
    }
}
