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
 * 发票开具明细
 *
 * @method string getName() 获取商品名称
 * @method void setName(string $Name) 设置商品名称
 * @method string getTaxCode() 获取税收商品编码
 * @method void setTaxCode(string $TaxCode) 设置税收商品编码
 * @method integer getTotalPrice() 获取不含税商品总价（商品含税价总额/（1+税率））。InvoicePlatformId 为1时，该金额为含税总金额。单位为分。
 * @method void setTotalPrice(integer $TotalPrice) 设置不含税商品总价（商品含税价总额/（1+税率））。InvoicePlatformId 为1时，该金额为含税总金额。单位为分。
 * @method integer getTaxRate() 获取商品税率
 * @method void setTaxRate(integer $TaxRate) 设置商品税率
 * @method integer getTaxAmount() 获取商品税额（不含税商品总价*税率）。单位为分
 * @method void setTaxAmount(integer $TaxAmount) 设置商品税额（不含税商品总价*税率）。单位为分
 * @method string getTaxType() 获取税收商品类别
 * @method void setTaxType(string $TaxType) 设置税收商品类别
 * @method string getModels() 获取商品规格
 * @method void setModels(string $Models) 设置商品规格
 * @method string getUnit() 获取商品单位
 * @method void setUnit(string $Unit) 设置商品单位
 * @method string getTotal() 获取商品数量
 * @method void setTotal(string $Total) 设置商品数量
 * @method string getPrice() 获取不含税商品单价。InvoicePlatformId 为1时，该金额为含税单价。
 * @method void setPrice(string $Price) 设置不含税商品单价。InvoicePlatformId 为1时，该金额为含税单价。
 * @method integer getDiscount() 获取含税折扣总额。单位为分
 * @method void setDiscount(integer $Discount) 设置含税折扣总额。单位为分
 * @method string getPreferentialPolicyFlag() 获取优惠政策标志。0：不使用优惠政策；1：使用优惠政策。
 * @method void setPreferentialPolicyFlag(string $PreferentialPolicyFlag) 设置优惠政策标志。0：不使用优惠政策；1：使用优惠政策。
 * @method string getZeroTaxFlag() 获取零税率标识：
空：非零税率；
0：出口零税率；
1：免税；
2：不征税；
3：普通零税率。
 * @method void setZeroTaxFlag(string $ZeroTaxFlag) 设置零税率标识：
空：非零税率；
0：出口零税率；
1：免税；
2：不征税；
3：普通零税率。
 * @method string getVatSpecialManagement() 获取增值税特殊管理。PreferentialPolicyFlag字段为1时，必填。目前仅支持5%(3%，2%，1.5%)简易征税、免税、不征税。
 * @method void setVatSpecialManagement(string $VatSpecialManagement) 设置增值税特殊管理。PreferentialPolicyFlag字段为1时，必填。目前仅支持5%(3%，2%，1.5%)简易征税、免税、不征税。
 */
class CreateInvoiceItem extends AbstractModel
{
    /**
     * @var string 商品名称
     */
    public $Name;

    /**
     * @var string 税收商品编码
     */
    public $TaxCode;

    /**
     * @var integer 不含税商品总价（商品含税价总额/（1+税率））。InvoicePlatformId 为1时，该金额为含税总金额。单位为分。
     */
    public $TotalPrice;

    /**
     * @var integer 商品税率
     */
    public $TaxRate;

    /**
     * @var integer 商品税额（不含税商品总价*税率）。单位为分
     */
    public $TaxAmount;

    /**
     * @var string 税收商品类别
     */
    public $TaxType;

    /**
     * @var string 商品规格
     */
    public $Models;

    /**
     * @var string 商品单位
     */
    public $Unit;

    /**
     * @var string 商品数量
     */
    public $Total;

    /**
     * @var string 不含税商品单价。InvoicePlatformId 为1时，该金额为含税单价。
     */
    public $Price;

    /**
     * @var integer 含税折扣总额。单位为分
     */
    public $Discount;

    /**
     * @var string 优惠政策标志。0：不使用优惠政策；1：使用优惠政策。
     */
    public $PreferentialPolicyFlag;

    /**
     * @var string 零税率标识：
空：非零税率；
0：出口零税率；
1：免税；
2：不征税；
3：普通零税率。
     */
    public $ZeroTaxFlag;

    /**
     * @var string 增值税特殊管理。PreferentialPolicyFlag字段为1时，必填。目前仅支持5%(3%，2%，1.5%)简易征税、免税、不征税。
     */
    public $VatSpecialManagement;

    /**
     * @param string $Name 商品名称
     * @param string $TaxCode 税收商品编码
     * @param integer $TotalPrice 不含税商品总价（商品含税价总额/（1+税率））。InvoicePlatformId 为1时，该金额为含税总金额。单位为分。
     * @param integer $TaxRate 商品税率
     * @param integer $TaxAmount 商品税额（不含税商品总价*税率）。单位为分
     * @param string $TaxType 税收商品类别
     * @param string $Models 商品规格
     * @param string $Unit 商品单位
     * @param string $Total 商品数量
     * @param string $Price 不含税商品单价。InvoicePlatformId 为1时，该金额为含税单价。
     * @param integer $Discount 含税折扣总额。单位为分
     * @param string $PreferentialPolicyFlag 优惠政策标志。0：不使用优惠政策；1：使用优惠政策。
     * @param string $ZeroTaxFlag 零税率标识：
空：非零税率；
0：出口零税率；
1：免税；
2：不征税；
3：普通零税率。
     * @param string $VatSpecialManagement 增值税特殊管理。PreferentialPolicyFlag字段为1时，必填。目前仅支持5%(3%，2%，1.5%)简易征税、免税、不征税。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaxCode",$param) and $param["TaxCode"] !== null) {
            $this->TaxCode = $param["TaxCode"];
        }

        if (array_key_exists("TotalPrice",$param) and $param["TotalPrice"] !== null) {
            $this->TotalPrice = $param["TotalPrice"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }

        if (array_key_exists("TaxType",$param) and $param["TaxType"] !== null) {
            $this->TaxType = $param["TaxType"];
        }

        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = $param["Models"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("PreferentialPolicyFlag",$param) and $param["PreferentialPolicyFlag"] !== null) {
            $this->PreferentialPolicyFlag = $param["PreferentialPolicyFlag"];
        }

        if (array_key_exists("ZeroTaxFlag",$param) and $param["ZeroTaxFlag"] !== null) {
            $this->ZeroTaxFlag = $param["ZeroTaxFlag"];
        }

        if (array_key_exists("VatSpecialManagement",$param) and $param["VatSpecialManagement"] !== null) {
            $this->VatSpecialManagement = $param["VatSpecialManagement"];
        }
    }
}
