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
 * 账单明细组件对象
 *
 * @method string getComponentCodeName() 获取组件类型:资源组件类型的名称，如内存、硬盘等
 * @method void setComponentCodeName(string $ComponentCodeName) 设置组件类型:资源组件类型的名称，如内存、硬盘等
 * @method string getItemCodeName() 获取组件名称:资源组件的名称，如云数据库MySQL-内存等
 * @method void setItemCodeName(string $ItemCodeName) 设置组件名称:资源组件的名称，如云数据库MySQL-内存等
 * @method string getSinglePrice() 获取组件刊例价:资源组件的原始价格，保持原始粒度
 * @method void setSinglePrice(string $SinglePrice) 设置组件刊例价:资源组件的原始价格，保持原始粒度
 * @method string getSpecifiedPrice() 获取组件指定价
 * @method void setSpecifiedPrice(string $SpecifiedPrice) 设置组件指定价
 * @method string getPriceUnit() 获取价格单位
 * @method void setPriceUnit(string $PriceUnit) 设置价格单位
 * @method string getUsedAmount() 获取组件用量
 * @method void setUsedAmount(string $UsedAmount) 设置组件用量
 * @method string getUsedAmountUnit() 获取组件用量单位
 * @method void setUsedAmountUnit(string $UsedAmountUnit) 设置组件用量单位
 * @method string getTimeSpan() 获取使用时长
 * @method void setTimeSpan(string $TimeSpan) 设置使用时长
 * @method string getTimeUnitName() 获取时长单位
 * @method void setTimeUnitName(string $TimeUnitName) 设置时长单位
 * @method string getCost() 获取组件原价
 * @method void setCost(string $Cost) 设置组件原价
 * @method string getDiscount() 获取折扣率
 * @method void setDiscount(string $Discount) 设置折扣率
 * @method string getReduceType() 获取优惠类型
 * @method void setReduceType(string $ReduceType) 设置优惠类型
 * @method string getRealCost() 获取优惠后总价
 * @method void setRealCost(string $RealCost) 设置优惠后总价
 * @method string getVoucherPayAmount() 获取代金券支付金额
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券支付金额
 * @method string getCashPayAmount() 获取现金支付金额
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金支付金额
 * @method string getIncentivePayAmount() 获取赠送账户支付金额
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送账户支付金额
 * @method string getItemCode() 获取组件类型代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemCode(string $ItemCode) 设置组件类型代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComponentCode() 获取组件名称代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentCode(string $ComponentCode) 设置组件名称代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractPrice() 获取合同价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractPrice(string $ContractPrice) 设置合同价
注意：此字段可能返回 null，表示取不到有效值。
 */
class BillDetailComponent extends AbstractModel
{
    /**
     * @var string 组件类型:资源组件类型的名称，如内存、硬盘等
     */
    public $ComponentCodeName;

    /**
     * @var string 组件名称:资源组件的名称，如云数据库MySQL-内存等
     */
    public $ItemCodeName;

    /**
     * @var string 组件刊例价:资源组件的原始价格，保持原始粒度
     */
    public $SinglePrice;

    /**
     * @var string 组件指定价
     */
    public $SpecifiedPrice;

    /**
     * @var string 价格单位
     */
    public $PriceUnit;

    /**
     * @var string 组件用量
     */
    public $UsedAmount;

    /**
     * @var string 组件用量单位
     */
    public $UsedAmountUnit;

    /**
     * @var string 使用时长
     */
    public $TimeSpan;

    /**
     * @var string 时长单位
     */
    public $TimeUnitName;

    /**
     * @var string 组件原价
     */
    public $Cost;

    /**
     * @var string 折扣率
     */
    public $Discount;

    /**
     * @var string 优惠类型
     */
    public $ReduceType;

    /**
     * @var string 优惠后总价
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
     * @var string 赠送账户支付金额
     */
    public $IncentivePayAmount;

    /**
     * @var string 组件类型代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemCode;

    /**
     * @var string 组件名称代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentCode;

    /**
     * @var string 合同价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractPrice;

    /**
     * @param string $ComponentCodeName 组件类型:资源组件类型的名称，如内存、硬盘等
     * @param string $ItemCodeName 组件名称:资源组件的名称，如云数据库MySQL-内存等
     * @param string $SinglePrice 组件刊例价:资源组件的原始价格，保持原始粒度
     * @param string $SpecifiedPrice 组件指定价
     * @param string $PriceUnit 价格单位
     * @param string $UsedAmount 组件用量
     * @param string $UsedAmountUnit 组件用量单位
     * @param string $TimeSpan 使用时长
     * @param string $TimeUnitName 时长单位
     * @param string $Cost 组件原价
     * @param string $Discount 折扣率
     * @param string $ReduceType 优惠类型
     * @param string $RealCost 优惠后总价
     * @param string $VoucherPayAmount 代金券支付金额
     * @param string $CashPayAmount 现金支付金额
     * @param string $IncentivePayAmount 赠送账户支付金额
     * @param string $ItemCode 组件类型代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComponentCode 组件名称代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractPrice 合同价
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
        if (array_key_exists("ComponentCodeName",$param) and $param["ComponentCodeName"] !== null) {
            $this->ComponentCodeName = $param["ComponentCodeName"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }

        if (array_key_exists("SinglePrice",$param) and $param["SinglePrice"] !== null) {
            $this->SinglePrice = $param["SinglePrice"];
        }

        if (array_key_exists("SpecifiedPrice",$param) and $param["SpecifiedPrice"] !== null) {
            $this->SpecifiedPrice = $param["SpecifiedPrice"];
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

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnitName",$param) and $param["TimeUnitName"] !== null) {
            $this->TimeUnitName = $param["TimeUnitName"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("ReduceType",$param) and $param["ReduceType"] !== null) {
            $this->ReduceType = $param["ReduceType"];
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

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ContractPrice",$param) and $param["ContractPrice"] !== null) {
            $this->ContractPrice = $param["ContractPrice"];
        }
    }
}
