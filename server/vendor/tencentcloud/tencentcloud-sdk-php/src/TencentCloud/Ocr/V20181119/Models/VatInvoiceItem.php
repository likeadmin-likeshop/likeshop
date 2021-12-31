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
 * 增值税发票项目明细
 *
 * @method string getLineNo() 获取行号
 * @method void setLineNo(string $LineNo) 设置行号
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getSpec() 获取规格
 * @method void setSpec(string $Spec) 设置规格
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method string getQuantity() 获取数量
 * @method void setQuantity(string $Quantity) 设置数量
 * @method string getUnitPrice() 获取单价
 * @method void setUnitPrice(string $UnitPrice) 设置单价
 * @method string getAmountWithoutTax() 获取不含税金额
 * @method void setAmountWithoutTax(string $AmountWithoutTax) 设置不含税金额
 * @method string getTaxRate() 获取税率
 * @method void setTaxRate(string $TaxRate) 设置税率
 * @method string getTaxAmount() 获取税额
 * @method void setTaxAmount(string $TaxAmount) 设置税额
 */
class VatInvoiceItem extends AbstractModel
{
    /**
     * @var string 行号
     */
    public $LineNo;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 规格
     */
    public $Spec;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @var string 数量
     */
    public $Quantity;

    /**
     * @var string 单价
     */
    public $UnitPrice;

    /**
     * @var string 不含税金额
     */
    public $AmountWithoutTax;

    /**
     * @var string 税率
     */
    public $TaxRate;

    /**
     * @var string 税额
     */
    public $TaxAmount;

    /**
     * @param string $LineNo 行号
     * @param string $Name 名称
     * @param string $Spec 规格
     * @param string $Unit 单位
     * @param string $Quantity 数量
     * @param string $UnitPrice 单价
     * @param string $AmountWithoutTax 不含税金额
     * @param string $TaxRate 税率
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
        if (array_key_exists("LineNo",$param) and $param["LineNo"] !== null) {
            $this->LineNo = $param["LineNo"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("AmountWithoutTax",$param) and $param["AmountWithoutTax"] !== null) {
            $this->AmountWithoutTax = $param["AmountWithoutTax"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }
    }
}
