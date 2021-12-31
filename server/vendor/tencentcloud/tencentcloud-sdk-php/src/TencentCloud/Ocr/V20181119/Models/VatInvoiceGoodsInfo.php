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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发票商品
 *
 * @method string getItem() 获取项目名称
 * @method void setItem(string $Item) 设置项目名称
 * @method string getSpecification() 获取规格型号
 * @method void setSpecification(string $Specification) 设置规格型号
 * @method string getMeasurementDimension() 获取单位
 * @method void setMeasurementDimension(string $MeasurementDimension) 设置单位
 * @method string getPrice() 获取价格
 * @method void setPrice(string $Price) 设置价格
 * @method string getQuantity() 获取数量
 * @method void setQuantity(string $Quantity) 设置数量
 * @method string getAmount() 获取金额
 * @method void setAmount(string $Amount) 设置金额
 * @method string getTaxScheme() 获取税率(如6%、免税)
 * @method void setTaxScheme(string $TaxScheme) 设置税率(如6%、免税)
 * @method string getTaxAmount() 获取税额
 * @method void setTaxAmount(string $TaxAmount) 设置税额
 */
class VatInvoiceGoodsInfo extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $Item;

    /**
     * @var string 规格型号
     */
    public $Specification;

    /**
     * @var string 单位
     */
    public $MeasurementDimension;

    /**
     * @var string 价格
     */
    public $Price;

    /**
     * @var string 数量
     */
    public $Quantity;

    /**
     * @var string 金额
     */
    public $Amount;

    /**
     * @var string 税率(如6%、免税)
     */
    public $TaxScheme;

    /**
     * @var string 税额
     */
    public $TaxAmount;

    /**
     * @param string $Item 项目名称
     * @param string $Specification 规格型号
     * @param string $MeasurementDimension 单位
     * @param string $Price 价格
     * @param string $Quantity 数量
     * @param string $Amount 金额
     * @param string $TaxScheme 税率(如6%、免税)
     * @param string $TaxAmount 税额
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("MeasurementDimension",$param) and $param["MeasurementDimension"] !== null) {
            $this->MeasurementDimension = $param["MeasurementDimension"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("TaxScheme",$param) and $param["TaxScheme"] !== null) {
            $this->TaxScheme = $param["TaxScheme"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }
    }
}
