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
 * 查询发票结果数据
 *
 * @method string getOrderId() 获取订单号
 * @method void setOrderId(string $OrderId) 设置订单号
 * @method string getOrderSn() 获取业务开票号
 * @method void setOrderSn(string $OrderSn) 设置业务开票号
 * @method integer getStatus() 获取发票状态
 * @method void setStatus(integer $Status) 设置发票状态
 * @method string getMessage() 获取开票描述
 * @method void setMessage(string $Message) 设置开票描述
 * @method string getTicketDate() 获取开票日期
 * @method void setTicketDate(string $TicketDate) 设置开票日期
 * @method string getTicketSn() 获取发票号码
 * @method void setTicketSn(string $TicketSn) 设置发票号码
 * @method string getTicketCode() 获取发票代码
 * @method void setTicketCode(string $TicketCode) 设置发票代码
 * @method string getCheckCode() 获取检验码
 * @method void setCheckCode(string $CheckCode) 设置检验码
 * @method string getAmountWithTax() 获取含税金额(元)
 * @method void setAmountWithTax(string $AmountWithTax) 设置含税金额(元)
 * @method string getAmountWithoutTax() 获取不含税金额(元)
 * @method void setAmountWithoutTax(string $AmountWithoutTax) 设置不含税金额(元)
 * @method string getTaxAmount() 获取税额(元)
 * @method void setTaxAmount(string $TaxAmount) 设置税额(元)
 * @method integer getIsRedWashed() 获取是否被红冲
 * @method void setIsRedWashed(integer $IsRedWashed) 设置是否被红冲
 * @method string getPdfUrl() 获取pdf地址
 * @method void setPdfUrl(string $PdfUrl) 设置pdf地址
 */
class QueryInvoiceResultData extends AbstractModel
{
    /**
     * @var string 订单号
     */
    public $OrderId;

    /**
     * @var string 业务开票号
     */
    public $OrderSn;

    /**
     * @var integer 发票状态
     */
    public $Status;

    /**
     * @var string 开票描述
     */
    public $Message;

    /**
     * @var string 开票日期
     */
    public $TicketDate;

    /**
     * @var string 发票号码
     */
    public $TicketSn;

    /**
     * @var string 发票代码
     */
    public $TicketCode;

    /**
     * @var string 检验码
     */
    public $CheckCode;

    /**
     * @var string 含税金额(元)
     */
    public $AmountWithTax;

    /**
     * @var string 不含税金额(元)
     */
    public $AmountWithoutTax;

    /**
     * @var string 税额(元)
     */
    public $TaxAmount;

    /**
     * @var integer 是否被红冲
     */
    public $IsRedWashed;

    /**
     * @var string pdf地址
     */
    public $PdfUrl;

    /**
     * @param string $OrderId 订单号
     * @param string $OrderSn 业务开票号
     * @param integer $Status 发票状态
     * @param string $Message 开票描述
     * @param string $TicketDate 开票日期
     * @param string $TicketSn 发票号码
     * @param string $TicketCode 发票代码
     * @param string $CheckCode 检验码
     * @param string $AmountWithTax 含税金额(元)
     * @param string $AmountWithoutTax 不含税金额(元)
     * @param string $TaxAmount 税额(元)
     * @param integer $IsRedWashed 是否被红冲
     * @param string $PdfUrl pdf地址
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("OrderSn",$param) and $param["OrderSn"] !== null) {
            $this->OrderSn = $param["OrderSn"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("TicketDate",$param) and $param["TicketDate"] !== null) {
            $this->TicketDate = $param["TicketDate"];
        }

        if (array_key_exists("TicketSn",$param) and $param["TicketSn"] !== null) {
            $this->TicketSn = $param["TicketSn"];
        }

        if (array_key_exists("TicketCode",$param) and $param["TicketCode"] !== null) {
            $this->TicketCode = $param["TicketCode"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("AmountWithTax",$param) and $param["AmountWithTax"] !== null) {
            $this->AmountWithTax = $param["AmountWithTax"];
        }

        if (array_key_exists("AmountWithoutTax",$param) and $param["AmountWithoutTax"] !== null) {
            $this->AmountWithoutTax = $param["AmountWithoutTax"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }

        if (array_key_exists("IsRedWashed",$param) and $param["IsRedWashed"] !== null) {
            $this->IsRedWashed = $param["IsRedWashed"];
        }

        if (array_key_exists("PdfUrl",$param) and $param["PdfUrl"] !== null) {
            $this->PdfUrl = $param["PdfUrl"];
        }
    }
}
