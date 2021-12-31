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
 * 增值税发票信息
 *
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getBuyerName() 获取购方抬头
 * @method void setBuyerName(string $BuyerName) 设置购方抬头
 * @method string getBuyerTaxCode() 获取购方税号
 * @method void setBuyerTaxCode(string $BuyerTaxCode) 设置购方税号
 * @method string getBuyerAddressPhone() 获取购方地址电话
 * @method void setBuyerAddressPhone(string $BuyerAddressPhone) 设置购方地址电话
 * @method string getBuyerBankAccount() 获取购方银行账号
 * @method void setBuyerBankAccount(string $BuyerBankAccount) 设置购方银行账号
 * @method string getSellerName() 获取销方名称
 * @method void setSellerName(string $SellerName) 设置销方名称
 * @method string getSellerTaxCode() 获取销方税号
 * @method void setSellerTaxCode(string $SellerTaxCode) 设置销方税号
 * @method string getSellerAddressPhone() 获取销方地址电话
 * @method void setSellerAddressPhone(string $SellerAddressPhone) 设置销方地址电话
 * @method string getSellerBankAccount() 获取销方银行账号
 * @method void setSellerBankAccount(string $SellerBankAccount) 设置销方银行账号
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getMachineNo() 获取机器编码
 * @method void setMachineNo(string $MachineNo) 设置机器编码
 * @method string getType() 获取发票类型
01：专用发票 
02：货运发票
03：机动车发票 
04：普通发票 
10：电子发票 
11：卷式发票 
14：通行费发票 
15：二手车发票
 * @method void setType(string $Type) 设置发票类型
01：专用发票 
02：货运发票
03：机动车发票 
04：普通发票 
10：电子发票 
11：卷式发票 
14：通行费发票 
15：二手车发票
 * @method string getCheckCode() 获取检验码
 * @method void setCheckCode(string $CheckCode) 设置检验码
 * @method string getIsAbandoned() 获取是否作废（红冲）是否作废（红冲）
Y: 已作废 N：未作废 H：红冲
 * @method void setIsAbandoned(string $IsAbandoned) 设置是否作废（红冲）是否作废（红冲）
Y: 已作废 N：未作废 H：红冲
 * @method string getHasSellerList() 获取是否有销货清单 
Y: 有清单 N：无清单 
卷票无
 * @method void setHasSellerList(string $HasSellerList) 设置是否有销货清单 
Y: 有清单 N：无清单 
卷票无
 * @method string getSellerListTitle() 获取销货清单标题
 * @method void setSellerListTitle(string $SellerListTitle) 设置销货清单标题
 * @method string getSellerListTax() 获取销货清单税额
 * @method void setSellerListTax(string $SellerListTax) 设置销货清单税额
 * @method string getAmountWithoutTax() 获取不含税金额
 * @method void setAmountWithoutTax(string $AmountWithoutTax) 设置不含税金额
 * @method string getTaxAmount() 获取税额
 * @method void setTaxAmount(string $TaxAmount) 设置税额
 * @method string getAmountWithTax() 获取含税金额
 * @method void setAmountWithTax(string $AmountWithTax) 设置含税金额
 * @method array getItems() 获取项目明细
 * @method void setItems(array $Items) 设置项目明细
 */
class VatInvoice extends AbstractModel
{
    /**
     * @var string 发票代码
     */
    public $Code;

    /**
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 开票日期
     */
    public $Date;

    /**
     * @var string 购方抬头
     */
    public $BuyerName;

    /**
     * @var string 购方税号
     */
    public $BuyerTaxCode;

    /**
     * @var string 购方地址电话
     */
    public $BuyerAddressPhone;

    /**
     * @var string 购方银行账号
     */
    public $BuyerBankAccount;

    /**
     * @var string 销方名称
     */
    public $SellerName;

    /**
     * @var string 销方税号
     */
    public $SellerTaxCode;

    /**
     * @var string 销方地址电话
     */
    public $SellerAddressPhone;

    /**
     * @var string 销方银行账号
     */
    public $SellerBankAccount;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 机器编码
     */
    public $MachineNo;

    /**
     * @var string 发票类型
01：专用发票 
02：货运发票
03：机动车发票 
04：普通发票 
10：电子发票 
11：卷式发票 
14：通行费发票 
15：二手车发票
     */
    public $Type;

    /**
     * @var string 检验码
     */
    public $CheckCode;

    /**
     * @var string 是否作废（红冲）是否作废（红冲）
Y: 已作废 N：未作废 H：红冲
     */
    public $IsAbandoned;

    /**
     * @var string 是否有销货清单 
Y: 有清单 N：无清单 
卷票无
     */
    public $HasSellerList;

    /**
     * @var string 销货清单标题
     */
    public $SellerListTitle;

    /**
     * @var string 销货清单税额
     */
    public $SellerListTax;

    /**
     * @var string 不含税金额
     */
    public $AmountWithoutTax;

    /**
     * @var string 税额
     */
    public $TaxAmount;

    /**
     * @var string 含税金额
     */
    public $AmountWithTax;

    /**
     * @var array 项目明细
     */
    public $Items;

    /**
     * @param string $Code 发票代码
     * @param string $Number 发票号码
     * @param string $Date 开票日期
     * @param string $BuyerName 购方抬头
     * @param string $BuyerTaxCode 购方税号
     * @param string $BuyerAddressPhone 购方地址电话
     * @param string $BuyerBankAccount 购方银行账号
     * @param string $SellerName 销方名称
     * @param string $SellerTaxCode 销方税号
     * @param string $SellerAddressPhone 销方地址电话
     * @param string $SellerBankAccount 销方银行账号
     * @param string $Remark 备注
     * @param string $MachineNo 机器编码
     * @param string $Type 发票类型
01：专用发票 
02：货运发票
03：机动车发票 
04：普通发票 
10：电子发票 
11：卷式发票 
14：通行费发票 
15：二手车发票
     * @param string $CheckCode 检验码
     * @param string $IsAbandoned 是否作废（红冲）是否作废（红冲）
Y: 已作废 N：未作废 H：红冲
     * @param string $HasSellerList 是否有销货清单 
Y: 有清单 N：无清单 
卷票无
     * @param string $SellerListTitle 销货清单标题
     * @param string $SellerListTax 销货清单税额
     * @param string $AmountWithoutTax 不含税金额
     * @param string $TaxAmount 税额
     * @param string $AmountWithTax 含税金额
     * @param array $Items 项目明细
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("BuyerName",$param) and $param["BuyerName"] !== null) {
            $this->BuyerName = $param["BuyerName"];
        }

        if (array_key_exists("BuyerTaxCode",$param) and $param["BuyerTaxCode"] !== null) {
            $this->BuyerTaxCode = $param["BuyerTaxCode"];
        }

        if (array_key_exists("BuyerAddressPhone",$param) and $param["BuyerAddressPhone"] !== null) {
            $this->BuyerAddressPhone = $param["BuyerAddressPhone"];
        }

        if (array_key_exists("BuyerBankAccount",$param) and $param["BuyerBankAccount"] !== null) {
            $this->BuyerBankAccount = $param["BuyerBankAccount"];
        }

        if (array_key_exists("SellerName",$param) and $param["SellerName"] !== null) {
            $this->SellerName = $param["SellerName"];
        }

        if (array_key_exists("SellerTaxCode",$param) and $param["SellerTaxCode"] !== null) {
            $this->SellerTaxCode = $param["SellerTaxCode"];
        }

        if (array_key_exists("SellerAddressPhone",$param) and $param["SellerAddressPhone"] !== null) {
            $this->SellerAddressPhone = $param["SellerAddressPhone"];
        }

        if (array_key_exists("SellerBankAccount",$param) and $param["SellerBankAccount"] !== null) {
            $this->SellerBankAccount = $param["SellerBankAccount"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MachineNo",$param) and $param["MachineNo"] !== null) {
            $this->MachineNo = $param["MachineNo"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("IsAbandoned",$param) and $param["IsAbandoned"] !== null) {
            $this->IsAbandoned = $param["IsAbandoned"];
        }

        if (array_key_exists("HasSellerList",$param) and $param["HasSellerList"] !== null) {
            $this->HasSellerList = $param["HasSellerList"];
        }

        if (array_key_exists("SellerListTitle",$param) and $param["SellerListTitle"] !== null) {
            $this->SellerListTitle = $param["SellerListTitle"];
        }

        if (array_key_exists("SellerListTax",$param) and $param["SellerListTax"] !== null) {
            $this->SellerListTax = $param["SellerListTax"];
        }

        if (array_key_exists("AmountWithoutTax",$param) and $param["AmountWithoutTax"] !== null) {
            $this->AmountWithoutTax = $param["AmountWithoutTax"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }

        if (array_key_exists("AmountWithTax",$param) and $param["AmountWithTax"] !== null) {
            $this->AmountWithTax = $param["AmountWithTax"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new VatInvoiceItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
