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
 * 消耗组件明细
 *
 * @method string getComponentCodeName() 获取组件类型名称
 * @method void setComponentCodeName(string $ComponentCodeName) 设置组件类型名称
 * @method string getItemCodeName() 获取组件名称
 * @method void setItemCodeName(string $ItemCodeName) 设置组件名称
 * @method string getSinglePrice() 获取刊例价
 * @method void setSinglePrice(string $SinglePrice) 设置刊例价
 * @method string getPriceUnit() 获取刊例价单位
 * @method void setPriceUnit(string $PriceUnit) 设置刊例价单位
 * @method string getUsedAmount() 获取用量
 * @method void setUsedAmount(string $UsedAmount) 设置用量
 * @method string getUsedAmountUnit() 获取用量单位
 * @method void setUsedAmountUnit(string $UsedAmountUnit) 设置用量单位
 * @method string getCost() 获取原价
 * @method void setCost(string $Cost) 设置原价
 * @method string getDiscount() 获取折扣
 * @method void setDiscount(string $Discount) 设置折扣
 * @method string getRealCost() 获取折后价
 * @method void setRealCost(string $RealCost) 设置折后价
 * @method string getVoucherPayAmount() 获取代金券支付金额
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券支付金额
 * @method string getCashPayAmount() 获取现金支付金额
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金支付金额
 * @method string getIncentivePayAmount() 获取赠送金支付金额
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送金支付金额
 */
class CostComponentSet extends AbstractModel
{
    /**
     * @var string 组件类型名称
     */
    public $ComponentCodeName;

    /**
     * @var string 组件名称
     */
    public $ItemCodeName;

    /**
     * @var string 刊例价
     */
    public $SinglePrice;

    /**
     * @var string 刊例价单位
     */
    public $PriceUnit;

    /**
     * @var string 用量
     */
    public $UsedAmount;

    /**
     * @var string 用量单位
     */
    public $UsedAmountUnit;

    /**
     * @var string 原价
     */
    public $Cost;

    /**
     * @var string 折扣
     */
    public $Discount;

    /**
     * @var string 折后价
     */
    public $RealCost;

    /**
     * @var string 代金券支付金额
     */
    public $VoucherPayAmount;

    /**
     * @var string 现金支付金额
     */
    public $CashPayAmount;

    /**
     * @var string 赠送金支付金额
     */
    public $IncentivePayAmount;

    /**
     * @param string $ComponentCodeName 组件类型名称
     * @param string $ItemCodeName 组件名称
     * @param string $SinglePrice 刊例价
     * @param string $PriceUnit 刊例价单位
     * @param string $UsedAmount 用量
     * @param string $UsedAmountUnit 用量单位
     * @param string $Cost 原价
     * @param string $Discount 折扣
     * @param string $RealCost 折后价
     * @param string $VoucherPayAmount 代金券支付金额
     * @param string $CashPayAmount 现金支付金额
     * @param string $IncentivePayAmount 赠送金支付金额
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
        if (array_key_exists("ComponentCodeName",$param) and $param["ComponentCodeName"] !== null) {
            $this->ComponentCodeName = $param["ComponentCodeName"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }

        if (array_key_exists("SinglePrice",$param) and $param["SinglePrice"] !== null) {
            $this->SinglePrice = $param["SinglePrice"];
        }

        if (array_key_exists("PriceUnit",$param) and $param["PriceUnit"] !== null) {
            $this->PriceUnit = $param["PriceUnit"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("UsedAmountUnit",$param) and $param["UsedAmountUnit"] !== null) {
            $this->UsedAmountUnit = $param["UsedAmountUnit"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }
    }
}
