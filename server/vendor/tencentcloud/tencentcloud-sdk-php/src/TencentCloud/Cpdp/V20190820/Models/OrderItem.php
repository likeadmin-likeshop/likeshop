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
 * 线下查票-订单明细
 *
 * @method float getAmountHasTax() 获取明细金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmountHasTax(float $AmountHasTax) 设置明细金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscount() 获取优惠金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(float $Discount) 设置优惠金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取商品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置商品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModels() 获取型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModels(string $Models) 设置型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取数量单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置数量单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取默认“0”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置默认“0”
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPrice() 获取单价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrice(float $Price) 设置单价
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxCode() 获取商品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxCode(string $TaxCode) 设置商品编码
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrderItem extends AbstractModel
{
    /**
     * @var float 明细金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AmountHasTax;

    /**
     * @var float 优惠金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @var string 商品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 型号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Models;

    /**
     * @var integer 数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string 数量单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var string 默认“0”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var float 单价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Price;

    /**
     * @var string 商品编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxCode;

    /**
     * @param float $AmountHasTax 明细金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Discount 优惠金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 商品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Models 型号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 数量单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 默认“0”
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Price 单价
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxCode 商品编码
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
        if (array_key_exists("AmountHasTax",$param) and $param["AmountHasTax"] !== null) {
            $this->AmountHasTax = $param["AmountHasTax"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = $param["Models"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("TaxCode",$param) and $param["TaxCode"] !== null) {
            $this->TaxCode = $param["TaxCode"];
        }
    }
}
