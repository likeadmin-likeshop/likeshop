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
 * VerifyOfdVatInvoiceOCR返回参数结构体
 *
 * @method string getType() 获取发票类型
026:增值税电子普通发票
028:增值税电子专用发票
 * @method void setType(string $Type) 设置发票类型
026:增值税电子普通发票
028:增值税电子专用发票
 * @method string getInvoiceCode() 获取发票代码
 * @method void setInvoiceCode(string $InvoiceCode) 设置发票代码
 * @method string getInvoiceNumber() 获取发票号码
 * @method void setInvoiceNumber(string $InvoiceNumber) 设置发票号码
 * @method string getIssueDate() 获取开票日期
 * @method void setIssueDate(string $IssueDate) 设置开票日期
 * @method string getInvoiceCheckCode() 获取验证码
 * @method void setInvoiceCheckCode(string $InvoiceCheckCode) 设置验证码
 * @method string getMachineNumber() 获取机器编号
 * @method void setMachineNumber(string $MachineNumber) 设置机器编号
 * @method string getTaxControlCode() 获取密码区
 * @method void setTaxControlCode(string $TaxControlCode) 设置密码区
 * @method VatInvoiceUserInfo getBuyer() 获取购买方
 * @method void setBuyer(VatInvoiceUserInfo $Buyer) 设置购买方
 * @method VatInvoiceUserInfo getSeller() 获取销售方
 * @method void setSeller(VatInvoiceUserInfo $Seller) 设置销售方
 * @method string getTaxInclusiveTotalAmount() 获取价税合计
 * @method void setTaxInclusiveTotalAmount(string $TaxInclusiveTotalAmount) 设置价税合计
 * @method string getInvoiceClerk() 获取开票人
 * @method void setInvoiceClerk(string $InvoiceClerk) 设置开票人
 * @method string getPayee() 获取收款人
 * @method void setPayee(string $Payee) 设置收款人
 * @method string getChecker() 获取复核人
 * @method void setChecker(string $Checker) 设置复核人
 * @method string getTaxTotalAmount() 获取税额
 * @method void setTaxTotalAmount(string $TaxTotalAmount) 设置税额
 * @method string getTaxExclusiveTotalAmount() 获取不含税金额
 * @method void setTaxExclusiveTotalAmount(string $TaxExclusiveTotalAmount) 设置不含税金额
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 * @method array getGoodsInfos() 获取货物或服务清单
 * @method void setGoodsInfos(array $GoodsInfos) 设置货物或服务清单
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyOfdVatInvoiceOCRResponse extends AbstractModel
{
    /**
     * @var string 发票类型
026:增值税电子普通发票
028:增值税电子专用发票
     */
    public $Type;

    /**
     * @var string 发票代码
     */
    public $InvoiceCode;

    /**
     * @var string 发票号码
     */
    public $InvoiceNumber;

    /**
     * @var string 开票日期
     */
    public $IssueDate;

    /**
     * @var string 验证码
     */
    public $InvoiceCheckCode;

    /**
     * @var string 机器编号
     */
    public $MachineNumber;

    /**
     * @var string 密码区
     */
    public $TaxControlCode;

    /**
     * @var VatInvoiceUserInfo 购买方
     */
    public $Buyer;

    /**
     * @var VatInvoiceUserInfo 销售方
     */
    public $Seller;

    /**
     * @var string 价税合计
     */
    public $TaxInclusiveTotalAmount;

    /**
     * @var string 开票人
     */
    public $InvoiceClerk;

    /**
     * @var string 收款人
     */
    public $Payee;

    /**
     * @var string 复核人
     */
    public $Checker;

    /**
     * @var string 税额
     */
    public $TaxTotalAmount;

    /**
     * @var string 不含税金额
     */
    public $TaxExclusiveTotalAmount;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @var array 货物或服务清单
     */
    public $GoodsInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Type 发票类型
026:增值税电子普通发票
028:增值税电子专用发票
     * @param string $InvoiceCode 发票代码
     * @param string $InvoiceNumber 发票号码
     * @param string $IssueDate 开票日期
     * @param string $InvoiceCheckCode 验证码
     * @param string $MachineNumber 机器编号
     * @param string $TaxControlCode 密码区
     * @param VatInvoiceUserInfo $Buyer 购买方
     * @param VatInvoiceUserInfo $Seller 销售方
     * @param string $TaxInclusiveTotalAmount 价税合计
     * @param string $InvoiceClerk 开票人
     * @param string $Payee 收款人
     * @param string $Checker 复核人
     * @param string $TaxTotalAmount 税额
     * @param string $TaxExclusiveTotalAmount 不含税金额
     * @param string $Note 备注
     * @param array $GoodsInfos 货物或服务清单
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InvoiceCode",$param) and $param["InvoiceCode"] !== null) {
            $this->InvoiceCode = $param["InvoiceCode"];
        }

        if (array_key_exists("InvoiceNumber",$param) and $param["InvoiceNumber"] !== null) {
            $this->InvoiceNumber = $param["InvoiceNumber"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("InvoiceCheckCode",$param) and $param["InvoiceCheckCode"] !== null) {
            $this->InvoiceCheckCode = $param["InvoiceCheckCode"];
        }

        if (array_key_exists("MachineNumber",$param) and $param["MachineNumber"] !== null) {
            $this->MachineNumber = $param["MachineNumber"];
        }

        if (array_key_exists("TaxControlCode",$param) and $param["TaxControlCode"] !== null) {
            $this->TaxControlCode = $param["TaxControlCode"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = new VatInvoiceUserInfo();
            $this->Buyer->deserialize($param["Buyer"]);
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = new VatInvoiceUserInfo();
            $this->Seller->deserialize($param["Seller"]);
        }

        if (array_key_exists("TaxInclusiveTotalAmount",$param) and $param["TaxInclusiveTotalAmount"] !== null) {
            $this->TaxInclusiveTotalAmount = $param["TaxInclusiveTotalAmount"];
        }

        if (array_key_exists("InvoiceClerk",$param) and $param["InvoiceClerk"] !== null) {
            $this->InvoiceClerk = $param["InvoiceClerk"];
        }

        if (array_key_exists("Payee",$param) and $param["Payee"] !== null) {
            $this->Payee = $param["Payee"];
        }

        if (array_key_exists("Checker",$param) and $param["Checker"] !== null) {
            $this->Checker = $param["Checker"];
        }

        if (array_key_exists("TaxTotalAmount",$param) and $param["TaxTotalAmount"] !== null) {
            $this->TaxTotalAmount = $param["TaxTotalAmount"];
        }

        if (array_key_exists("TaxExclusiveTotalAmount",$param) and $param["TaxExclusiveTotalAmount"] !== null) {
            $this->TaxExclusiveTotalAmount = $param["TaxExclusiveTotalAmount"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("GoodsInfos",$param) and $param["GoodsInfos"] !== null) {
            $this->GoodsInfos = [];
            foreach ($param["GoodsInfos"] as $key => $value){
                $obj = new VatInvoiceGoodsInfo();
                $obj->deserialize($value);
                array_push($this->GoodsInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
