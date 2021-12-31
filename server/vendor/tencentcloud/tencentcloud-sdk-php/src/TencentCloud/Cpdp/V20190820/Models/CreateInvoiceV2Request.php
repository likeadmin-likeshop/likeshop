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
 * CreateInvoiceV2请求参数结构体
 *
 * @method integer getInvoicePlatformId() 获取开票平台ID。0：高灯，1：票易通
 * @method void setInvoicePlatformId(integer $InvoicePlatformId) 设置开票平台ID。0：高灯，1：票易通
 * @method integer getTitleType() 获取抬头类型：1：个人/政府事业单位；2：企业
 * @method void setTitleType(integer $TitleType) 设置抬头类型：1：个人/政府事业单位；2：企业
 * @method string getBuyerTitle() 获取购方名称
 * @method void setBuyerTitle(string $BuyerTitle) 设置购方名称
 * @method string getOrderId() 获取业务开票号
 * @method void setOrderId(string $OrderId) 设置业务开票号
 * @method integer getAmountHasTax() 获取含税总金额（单位为分）
 * @method void setAmountHasTax(integer $AmountHasTax) 设置含税总金额（单位为分）
 * @method integer getTaxAmount() 获取总税额（单位为分）
 * @method void setTaxAmount(integer $TaxAmount) 设置总税额（单位为分）
 * @method integer getAmountWithoutTax() 获取不含税总金额（单位为分）。InvoicePlatformId 为1时，传默认值-1
 * @method void setAmountWithoutTax(integer $AmountWithoutTax) 设置不含税总金额（单位为分）。InvoicePlatformId 为1时，传默认值-1
 * @method string getSellerTaxpayerNum() 获取销方纳税人识别号
 * @method void setSellerTaxpayerNum(string $SellerTaxpayerNum) 设置销方纳税人识别号
 * @method string getSellerName() 获取销方名称。（不填默认读取商户注册时输入的信息）
 * @method void setSellerName(string $SellerName) 设置销方名称。（不填默认读取商户注册时输入的信息）
 * @method string getSellerAddress() 获取销方地址。（不填默认读取商户注册时输入的信息）
 * @method void setSellerAddress(string $SellerAddress) 设置销方地址。（不填默认读取商户注册时输入的信息）
 * @method string getSellerPhone() 获取销方电话。（不填默认读取商户注册时输入的信息）
 * @method void setSellerPhone(string $SellerPhone) 设置销方电话。（不填默认读取商户注册时输入的信息）
 * @method string getSellerBankName() 获取销方银行名称。（不填默认读取商户注册时输入的信息）
 * @method void setSellerBankName(string $SellerBankName) 设置销方银行名称。（不填默认读取商户注册时输入的信息）
 * @method string getSellerBankAccount() 获取销方银行账号。（不填默认读取商户注册时输入的信息）
 * @method void setSellerBankAccount(string $SellerBankAccount) 设置销方银行账号。（不填默认读取商户注册时输入的信息）
 * @method string getBuyerTaxpayerNum() 获取购方纳税人识别号（购方票面信息）,若抬头类型为2时，必传
 * @method void setBuyerTaxpayerNum(string $BuyerTaxpayerNum) 设置购方纳税人识别号（购方票面信息）,若抬头类型为2时，必传
 * @method string getBuyerAddress() 获取购方地址。开具专用发票时必填
 * @method void setBuyerAddress(string $BuyerAddress) 设置购方地址。开具专用发票时必填
 * @method string getBuyerBankName() 获取购方银行名称。开具专用发票时必填
 * @method void setBuyerBankName(string $BuyerBankName) 设置购方银行名称。开具专用发票时必填
 * @method string getBuyerBankAccount() 获取购方银行账号。开具专用发票时必填
 * @method void setBuyerBankAccount(string $BuyerBankAccount) 设置购方银行账号。开具专用发票时必填
 * @method string getBuyerPhone() 获取购方电话。开具专用发票时必填
 * @method void setBuyerPhone(string $BuyerPhone) 设置购方电话。开具专用发票时必填
 * @method string getBuyerEmail() 获取收票人邮箱。若填入，会收到发票推送邮件
 * @method void setBuyerEmail(string $BuyerEmail) 设置收票人邮箱。若填入，会收到发票推送邮件
 * @method string getTakerPhone() 获取收票人手机号。若填入，会收到发票推送短信
 * @method void setTakerPhone(string $TakerPhone) 设置收票人手机号。若填入，会收到发票推送短信
 * @method integer getInvoiceType() 获取开票类型：
1：增值税专用发票；
2：增值税普通发票；
3：增值税电子发票；
4：增值税卷式发票；
5：区块链电子发票。
若该字段不填，或值不为1-5，则认为开具”增值税电子发票”
 * @method void setInvoiceType(integer $InvoiceType) 设置开票类型：
1：增值税专用发票；
2：增值税普通发票；
3：增值税电子发票；
4：增值税卷式发票；
5：区块链电子发票。
若该字段不填，或值不为1-5，则认为开具”增值税电子发票”
 * @method string getCallbackUrl() 获取发票结果回传地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置发票结果回传地址
 * @method string getDrawer() 获取开票人姓名。（不填默认读取商户注册时输入的信息）
 * @method void setDrawer(string $Drawer) 设置开票人姓名。（不填默认读取商户注册时输入的信息）
 * @method string getPayee() 获取收款人姓名。（不填默认读取商户注册时输入的信息）
 * @method void setPayee(string $Payee) 设置收款人姓名。（不填默认读取商户注册时输入的信息）
 * @method string getChecker() 获取复核人姓名。（不填默认读取商户注册时输入的信息）
 * @method void setChecker(string $Checker) 设置复核人姓名。（不填默认读取商户注册时输入的信息）
 * @method string getTerminalCode() 获取税盘号
 * @method void setTerminalCode(string $TerminalCode) 设置税盘号
 * @method string getLevyMethod() 获取征收方式。开具差额征税发票时必填2。开具普通征税发票时为空
 * @method void setLevyMethod(string $LevyMethod) 设置征收方式。开具差额征税发票时必填2。开具普通征税发票时为空
 * @method integer getDeduction() 获取差额征税扣除额（单位为分）
 * @method void setDeduction(integer $Deduction) 设置差额征税扣除额（单位为分）
 * @method string getRemark() 获取备注（票面信息）
 * @method void setRemark(string $Remark) 设置备注（票面信息）
 * @method array getItems() 获取项目商品明细
 * @method void setItems(array $Items) 设置项目商品明细
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox。
 * @method integer getUndoPart() 获取撤销部分商品。0-不撤销，1-撤销
 * @method void setUndoPart(integer $UndoPart) 设置撤销部分商品。0-不撤销，1-撤销
 * @method string getOrderDate() 获取订单下单时间（格式 YYYYMMDD）
 * @method void setOrderDate(string $OrderDate) 设置订单下单时间（格式 YYYYMMDD）
 * @method integer getDiscount() 获取订单级别折扣（单位为分）
 * @method void setDiscount(integer $Discount) 设置订单级别折扣（单位为分）
 * @method string getStoreNo() 获取门店编码
 * @method void setStoreNo(string $StoreNo) 设置门店编码
 * @method integer getInvoiceChannel() 获取开票渠道。0：APP渠道，1：线下渠道，2：小程序渠道。不填默认为APP渠道
 * @method void setInvoiceChannel(integer $InvoiceChannel) 设置开票渠道。0：APP渠道，1：线下渠道，2：小程序渠道。不填默认为APP渠道
 */
class CreateInvoiceV2Request extends AbstractModel
{
    /**
     * @var integer 开票平台ID。0：高灯，1：票易通
     */
    public $InvoicePlatformId;

    /**
     * @var integer 抬头类型：1：个人/政府事业单位；2：企业
     */
    public $TitleType;

    /**
     * @var string 购方名称
     */
    public $BuyerTitle;

    /**
     * @var string 业务开票号
     */
    public $OrderId;

    /**
     * @var integer 含税总金额（单位为分）
     */
    public $AmountHasTax;

    /**
     * @var integer 总税额（单位为分）
     */
    public $TaxAmount;

    /**
     * @var integer 不含税总金额（单位为分）。InvoicePlatformId 为1时，传默认值-1
     */
    public $AmountWithoutTax;

    /**
     * @var string 销方纳税人识别号
     */
    public $SellerTaxpayerNum;

    /**
     * @var string 销方名称。（不填默认读取商户注册时输入的信息）
     */
    public $SellerName;

    /**
     * @var string 销方地址。（不填默认读取商户注册时输入的信息）
     */
    public $SellerAddress;

    /**
     * @var string 销方电话。（不填默认读取商户注册时输入的信息）
     */
    public $SellerPhone;

    /**
     * @var string 销方银行名称。（不填默认读取商户注册时输入的信息）
     */
    public $SellerBankName;

    /**
     * @var string 销方银行账号。（不填默认读取商户注册时输入的信息）
     */
    public $SellerBankAccount;

    /**
     * @var string 购方纳税人识别号（购方票面信息）,若抬头类型为2时，必传
     */
    public $BuyerTaxpayerNum;

    /**
     * @var string 购方地址。开具专用发票时必填
     */
    public $BuyerAddress;

    /**
     * @var string 购方银行名称。开具专用发票时必填
     */
    public $BuyerBankName;

    /**
     * @var string 购方银行账号。开具专用发票时必填
     */
    public $BuyerBankAccount;

    /**
     * @var string 购方电话。开具专用发票时必填
     */
    public $BuyerPhone;

    /**
     * @var string 收票人邮箱。若填入，会收到发票推送邮件
     */
    public $BuyerEmail;

    /**
     * @var string 收票人手机号。若填入，会收到发票推送短信
     */
    public $TakerPhone;

    /**
     * @var integer 开票类型：
1：增值税专用发票；
2：增值税普通发票；
3：增值税电子发票；
4：增值税卷式发票；
5：区块链电子发票。
若该字段不填，或值不为1-5，则认为开具”增值税电子发票”
     */
    public $InvoiceType;

    /**
     * @var string 发票结果回传地址
     */
    public $CallbackUrl;

    /**
     * @var string 开票人姓名。（不填默认读取商户注册时输入的信息）
     */
    public $Drawer;

    /**
     * @var string 收款人姓名。（不填默认读取商户注册时输入的信息）
     */
    public $Payee;

    /**
     * @var string 复核人姓名。（不填默认读取商户注册时输入的信息）
     */
    public $Checker;

    /**
     * @var string 税盘号
     */
    public $TerminalCode;

    /**
     * @var string 征收方式。开具差额征税发票时必填2。开具普通征税发票时为空
     */
    public $LevyMethod;

    /**
     * @var integer 差额征税扣除额（单位为分）
     */
    public $Deduction;

    /**
     * @var string 备注（票面信息）
     */
    public $Remark;

    /**
     * @var array 项目商品明细
     */
    public $Items;

    /**
     * @var string 接入环境。沙箱环境填sandbox。
     */
    public $Profile;

    /**
     * @var integer 撤销部分商品。0-不撤销，1-撤销
     */
    public $UndoPart;

    /**
     * @var string 订单下单时间（格式 YYYYMMDD）
     */
    public $OrderDate;

    /**
     * @var integer 订单级别折扣（单位为分）
     */
    public $Discount;

    /**
     * @var string 门店编码
     */
    public $StoreNo;

    /**
     * @var integer 开票渠道。0：APP渠道，1：线下渠道，2：小程序渠道。不填默认为APP渠道
     */
    public $InvoiceChannel;

    /**
     * @param integer $InvoicePlatformId 开票平台ID。0：高灯，1：票易通
     * @param integer $TitleType 抬头类型：1：个人/政府事业单位；2：企业
     * @param string $BuyerTitle 购方名称
     * @param string $OrderId 业务开票号
     * @param integer $AmountHasTax 含税总金额（单位为分）
     * @param integer $TaxAmount 总税额（单位为分）
     * @param integer $AmountWithoutTax 不含税总金额（单位为分）。InvoicePlatformId 为1时，传默认值-1
     * @param string $SellerTaxpayerNum 销方纳税人识别号
     * @param string $SellerName 销方名称。（不填默认读取商户注册时输入的信息）
     * @param string $SellerAddress 销方地址。（不填默认读取商户注册时输入的信息）
     * @param string $SellerPhone 销方电话。（不填默认读取商户注册时输入的信息）
     * @param string $SellerBankName 销方银行名称。（不填默认读取商户注册时输入的信息）
     * @param string $SellerBankAccount 销方银行账号。（不填默认读取商户注册时输入的信息）
     * @param string $BuyerTaxpayerNum 购方纳税人识别号（购方票面信息）,若抬头类型为2时，必传
     * @param string $BuyerAddress 购方地址。开具专用发票时必填
     * @param string $BuyerBankName 购方银行名称。开具专用发票时必填
     * @param string $BuyerBankAccount 购方银行账号。开具专用发票时必填
     * @param string $BuyerPhone 购方电话。开具专用发票时必填
     * @param string $BuyerEmail 收票人邮箱。若填入，会收到发票推送邮件
     * @param string $TakerPhone 收票人手机号。若填入，会收到发票推送短信
     * @param integer $InvoiceType 开票类型：
1：增值税专用发票；
2：增值税普通发票；
3：增值税电子发票；
4：增值税卷式发票；
5：区块链电子发票。
若该字段不填，或值不为1-5，则认为开具”增值税电子发票”
     * @param string $CallbackUrl 发票结果回传地址
     * @param string $Drawer 开票人姓名。（不填默认读取商户注册时输入的信息）
     * @param string $Payee 收款人姓名。（不填默认读取商户注册时输入的信息）
     * @param string $Checker 复核人姓名。（不填默认读取商户注册时输入的信息）
     * @param string $TerminalCode 税盘号
     * @param string $LevyMethod 征收方式。开具差额征税发票时必填2。开具普通征税发票时为空
     * @param integer $Deduction 差额征税扣除额（单位为分）
     * @param string $Remark 备注（票面信息）
     * @param array $Items 项目商品明细
     * @param string $Profile 接入环境。沙箱环境填sandbox。
     * @param integer $UndoPart 撤销部分商品。0-不撤销，1-撤销
     * @param string $OrderDate 订单下单时间（格式 YYYYMMDD）
     * @param integer $Discount 订单级别折扣（单位为分）
     * @param string $StoreNo 门店编码
     * @param integer $InvoiceChannel 开票渠道。0：APP渠道，1：线下渠道，2：小程序渠道。不填默认为APP渠道
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
        if (array_key_exists("InvoicePlatformId",$param) and $param["InvoicePlatformId"] !== null) {
            $this->InvoicePlatformId = $param["InvoicePlatformId"];
        }

        if (array_key_exists("TitleType",$param) and $param["TitleType"] !== null) {
            $this->TitleType = $param["TitleType"];
        }

        if (array_key_exists("BuyerTitle",$param) and $param["BuyerTitle"] !== null) {
            $this->BuyerTitle = $param["BuyerTitle"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("AmountHasTax",$param) and $param["AmountHasTax"] !== null) {
            $this->AmountHasTax = $param["AmountHasTax"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }

        if (array_key_exists("AmountWithoutTax",$param) and $param["AmountWithoutTax"] !== null) {
            $this->AmountWithoutTax = $param["AmountWithoutTax"];
        }

        if (array_key_exists("SellerTaxpayerNum",$param) and $param["SellerTaxpayerNum"] !== null) {
            $this->SellerTaxpayerNum = $param["SellerTaxpayerNum"];
        }

        if (array_key_exists("SellerName",$param) and $param["SellerName"] !== null) {
            $this->SellerName = $param["SellerName"];
        }

        if (array_key_exists("SellerAddress",$param) and $param["SellerAddress"] !== null) {
            $this->SellerAddress = $param["SellerAddress"];
        }

        if (array_key_exists("SellerPhone",$param) and $param["SellerPhone"] !== null) {
            $this->SellerPhone = $param["SellerPhone"];
        }

        if (array_key_exists("SellerBankName",$param) and $param["SellerBankName"] !== null) {
            $this->SellerBankName = $param["SellerBankName"];
        }

        if (array_key_exists("SellerBankAccount",$param) and $param["SellerBankAccount"] !== null) {
            $this->SellerBankAccount = $param["SellerBankAccount"];
        }

        if (array_key_exists("BuyerTaxpayerNum",$param) and $param["BuyerTaxpayerNum"] !== null) {
            $this->BuyerTaxpayerNum = $param["BuyerTaxpayerNum"];
        }

        if (array_key_exists("BuyerAddress",$param) and $param["BuyerAddress"] !== null) {
            $this->BuyerAddress = $param["BuyerAddress"];
        }

        if (array_key_exists("BuyerBankName",$param) and $param["BuyerBankName"] !== null) {
            $this->BuyerBankName = $param["BuyerBankName"];
        }

        if (array_key_exists("BuyerBankAccount",$param) and $param["BuyerBankAccount"] !== null) {
            $this->BuyerBankAccount = $param["BuyerBankAccount"];
        }

        if (array_key_exists("BuyerPhone",$param) and $param["BuyerPhone"] !== null) {
            $this->BuyerPhone = $param["BuyerPhone"];
        }

        if (array_key_exists("BuyerEmail",$param) and $param["BuyerEmail"] !== null) {
            $this->BuyerEmail = $param["BuyerEmail"];
        }

        if (array_key_exists("TakerPhone",$param) and $param["TakerPhone"] !== null) {
            $this->TakerPhone = $param["TakerPhone"];
        }

        if (array_key_exists("InvoiceType",$param) and $param["InvoiceType"] !== null) {
            $this->InvoiceType = $param["InvoiceType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Drawer",$param) and $param["Drawer"] !== null) {
            $this->Drawer = $param["Drawer"];
        }

        if (array_key_exists("Payee",$param) and $param["Payee"] !== null) {
            $this->Payee = $param["Payee"];
        }

        if (array_key_exists("Checker",$param) and $param["Checker"] !== null) {
            $this->Checker = $param["Checker"];
        }

        if (array_key_exists("TerminalCode",$param) and $param["TerminalCode"] !== null) {
            $this->TerminalCode = $param["TerminalCode"];
        }

        if (array_key_exists("LevyMethod",$param) and $param["LevyMethod"] !== null) {
            $this->LevyMethod = $param["LevyMethod"];
        }

        if (array_key_exists("Deduction",$param) and $param["Deduction"] !== null) {
            $this->Deduction = $param["Deduction"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new CreateInvoiceItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("UndoPart",$param) and $param["UndoPart"] !== null) {
            $this->UndoPart = $param["UndoPart"];
        }

        if (array_key_exists("OrderDate",$param) and $param["OrderDate"] !== null) {
            $this->OrderDate = $param["OrderDate"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("StoreNo",$param) and $param["StoreNo"] !== null) {
            $this->StoreNo = $param["StoreNo"];
        }

        if (array_key_exists("InvoiceChannel",$param) and $param["InvoiceChannel"] !== null) {
            $this->InvoiceChannel = $param["InvoiceChannel"];
        }
    }
}
