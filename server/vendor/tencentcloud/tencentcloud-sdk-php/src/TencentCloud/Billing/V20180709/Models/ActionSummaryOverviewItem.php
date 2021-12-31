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
 * 按交易类型汇总消费详情
 *
 * @method string getActionType() 获取交易类型：包年包月新购/续费/升降配/退款、按量计费扣费、调账补偿/扣费等类型
 * @method void setActionType(string $ActionType) 设置交易类型：包年包月新购/续费/升降配/退款、按量计费扣费、调账补偿/扣费等类型
 * @method string getActionTypeName() 获取交易类型名称
 * @method void setActionTypeName(string $ActionTypeName) 设置交易类型名称
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
class ActionSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string 交易类型：包年包月新购/续费/升降配/退款、按量计费扣费、调账补偿/扣费等类型
     */
    public $ActionType;

    /**
     * @var string 交易类型名称
     */
    public $ActionTypeName;

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
     * @param string $ActionType 交易类型：包年包月新购/续费/升降配/退款、按量计费扣费、调账补偿/扣费等类型
     * @param string $ActionTypeName 交易类型名称
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
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
