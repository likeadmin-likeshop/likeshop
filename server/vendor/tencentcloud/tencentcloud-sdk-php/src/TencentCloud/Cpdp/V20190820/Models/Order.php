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
 * 线下查票-订单信息
 *
 * @method float getAmountHasTax() 获取含税金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmountHasTax(float $AmountHasTax) 设置含税金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscount() 获取优惠金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(float $Discount) 设置优惠金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSellerName() 获取销方名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSellerName(string $SellerName) 设置销方名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInvoiceType() 获取发票类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvoiceType(integer $InvoiceType) 设置发票类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取默认“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置默认“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAmount() 获取支付金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmount(float $Amount) 设置支付金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderDate() 获取下单日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderDate(string $OrderDate) 设置下单日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderId() 获取订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStoreNo() 获取门店号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoreNo(string $StoreNo) 设置门店号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置明细
注意：此字段可能返回 null，表示取不到有效值。
 */
class Order extends AbstractModel
{
    /**
     * @var float 含税金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AmountHasTax;

    /**
     * @var float 优惠金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @var string 销方名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SellerName;

    /**
     * @var integer 发票类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvoiceType;

    /**
     * @var string 默认“”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var float 支付金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Amount;

    /**
     * @var string 下单日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderDate;

    /**
     * @var string 订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @var string 门店号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoreNo;

    /**
     * @var array 明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param float $AmountHasTax 含税金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Discount 优惠金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SellerName 销方名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InvoiceType 发票类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 默认“”
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Amount 支付金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderDate 下单日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderId 订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StoreNo 门店号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 明细
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

        if (array_key_exists("SellerName",$param) and $param["SellerName"] !== null) {
            $this->SellerName = $param["SellerName"];
        }

        if (array_key_exists("InvoiceType",$param) and $param["InvoiceType"] !== null) {
            $this->InvoiceType = $param["InvoiceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("OrderDate",$param) and $param["OrderDate"] !== null) {
            $this->OrderDate = $param["OrderDate"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("StoreNo",$param) and $param["StoreNo"] !== null) {
            $this->StoreNo = $param["StoreNo"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new OrderItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
