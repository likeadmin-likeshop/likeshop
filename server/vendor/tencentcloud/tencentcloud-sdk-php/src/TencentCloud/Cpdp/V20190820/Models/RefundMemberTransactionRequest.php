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
 * RefundMemberTransaction请求参数结构体
 *
 * @method string getOutSubAccountName() 获取转出见证子账户的户名
 * @method void setOutSubAccountName(string $OutSubAccountName) 设置转出见证子账户的户名
 * @method string getInSubAccountName() 获取转入见证子账户的户名
 * @method void setInSubAccountName(string $InSubAccountName) 设置转入见证子账户的户名
 * @method integer getPayChannelSubId() 获取子渠道
 * @method void setPayChannelSubId(integer $PayChannelSubId) 设置子渠道
 * @method string getOutSubAccountNumber() 获取转出见证子账户账号
 * @method void setOutSubAccountNumber(string $OutSubAccountNumber) 设置转出见证子账户账号
 * @method string getMidasSignature() 获取计费签名
 * @method void setMidasSignature(string $MidasSignature) 设置计费签名
 * @method string getInSubAccountNumber() 获取转入见证子账户账号
 * @method void setInSubAccountNumber(string $InSubAccountNumber) 设置转入见证子账户账号
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getBankAccountNumber() 获取父账户账号，资金汇总账号
 * @method void setBankAccountNumber(string $BankAccountNumber) 设置父账户账号，资金汇总账号
 * @method string getOldTransSequenceNumber() 获取原老订单流水号
 * @method void setOldTransSequenceNumber(string $OldTransSequenceNumber) 设置原老订单流水号
 * @method string getMerchantCode() 获取银行注册商户号
 * @method void setMerchantCode(string $MerchantCode) 设置银行注册商户号
 * @method string getRequestType() 获取请求类型，固定为MemberTransactionRefundReq
 * @method void setRequestType(string $RequestType) 设置请求类型，固定为MemberTransactionRefundReq
 * @method string getCurrencyAmount() 获取交易金额
 * @method void setCurrencyAmount(string $CurrencyAmount) 设置交易金额
 * @method string getTransSequenceNumber() 获取交易流水号
 * @method void setTransSequenceNumber(string $TransSequenceNumber) 设置交易流水号
 * @method string getPayChannel() 获取渠道
 * @method void setPayChannel(string $PayChannel) 设置渠道
 * @method string getOldOrderId() 获取原订单号
 * @method void setOldOrderId(string $OldOrderId) 设置原订单号
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getOrderId() 获取订单号
 * @method void setOrderId(string $OrderId) 设置订单号
 * @method string getMidasEnvironment() 获取Midas环境标识 release 现网环境 sandbox 沙箱环境
development 开发环境
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置Midas环境标识 release 现网环境 sandbox 沙箱环境
development 开发环境
 * @method string getOutTransNetMemberCode() 获取转出子账户交易网会员代码
 * @method void setOutTransNetMemberCode(string $OutTransNetMemberCode) 设置转出子账户交易网会员代码
 * @method string getInTransNetMemberCode() 获取转入子账户交易网会员代码
 * @method void setInTransNetMemberCode(string $InTransNetMemberCode) 设置转入子账户交易网会员代码
 * @method string getReservedMessage() 获取保留域
 * @method void setReservedMessage(string $ReservedMessage) 设置保留域
 * @method string getPlatformShortNumber() 获取平台短号(银行分配)
 * @method void setPlatformShortNumber(string $PlatformShortNumber) 设置平台短号(银行分配)
 * @method string getTransType() 获取0-登记挂账，1-撤销挂账
 * @method void setTransType(string $TransType) 设置0-登记挂账，1-撤销挂账
 * @method string getTransFee() 获取交易手续费
 * @method void setTransFee(string $TransFee) 设置交易手续费
 */
class RefundMemberTransactionRequest extends AbstractModel
{
    /**
     * @var string 转出见证子账户的户名
     */
    public $OutSubAccountName;

    /**
     * @var string 转入见证子账户的户名
     */
    public $InSubAccountName;

    /**
     * @var integer 子渠道
     */
    public $PayChannelSubId;

    /**
     * @var string 转出见证子账户账号
     */
    public $OutSubAccountNumber;

    /**
     * @var string 计费签名
     */
    public $MidasSignature;

    /**
     * @var string 转入见证子账户账号
     */
    public $InSubAccountNumber;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string 父账户账号，资金汇总账号
     */
    public $BankAccountNumber;

    /**
     * @var string 原老订单流水号
     */
    public $OldTransSequenceNumber;

    /**
     * @var string 银行注册商户号
     */
    public $MerchantCode;

    /**
     * @var string 请求类型，固定为MemberTransactionRefundReq
     */
    public $RequestType;

    /**
     * @var string 交易金额
     */
    public $CurrencyAmount;

    /**
     * @var string 交易流水号
     */
    public $TransSequenceNumber;

    /**
     * @var string 渠道
     */
    public $PayChannel;

    /**
     * @var string 原订单号
     */
    public $OldOrderId;

    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 订单号
     */
    public $OrderId;

    /**
     * @var string Midas环境标识 release 现网环境 sandbox 沙箱环境
development 开发环境
     */
    public $MidasEnvironment;

    /**
     * @var string 转出子账户交易网会员代码
     */
    public $OutTransNetMemberCode;

    /**
     * @var string 转入子账户交易网会员代码
     */
    public $InTransNetMemberCode;

    /**
     * @var string 保留域
     */
    public $ReservedMessage;

    /**
     * @var string 平台短号(银行分配)
     */
    public $PlatformShortNumber;

    /**
     * @var string 0-登记挂账，1-撤销挂账
     */
    public $TransType;

    /**
     * @var string 交易手续费
     */
    public $TransFee;

    /**
     * @param string $OutSubAccountName 转出见证子账户的户名
     * @param string $InSubAccountName 转入见证子账户的户名
     * @param integer $PayChannelSubId 子渠道
     * @param string $OutSubAccountNumber 转出见证子账户账号
     * @param string $MidasSignature 计费签名
     * @param string $InSubAccountNumber 转入见证子账户账号
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $BankAccountNumber 父账户账号，资金汇总账号
     * @param string $OldTransSequenceNumber 原老订单流水号
     * @param string $MerchantCode 银行注册商户号
     * @param string $RequestType 请求类型，固定为MemberTransactionRefundReq
     * @param string $CurrencyAmount 交易金额
     * @param string $TransSequenceNumber 交易流水号
     * @param string $PayChannel 渠道
     * @param string $OldOrderId 原订单号
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $OrderId 订单号
     * @param string $MidasEnvironment Midas环境标识 release 现网环境 sandbox 沙箱环境
development 开发环境
     * @param string $OutTransNetMemberCode 转出子账户交易网会员代码
     * @param string $InTransNetMemberCode 转入子账户交易网会员代码
     * @param string $ReservedMessage 保留域
     * @param string $PlatformShortNumber 平台短号(银行分配)
     * @param string $TransType 0-登记挂账，1-撤销挂账
     * @param string $TransFee 交易手续费
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
        if (array_key_exists("OutSubAccountName",$param) and $param["OutSubAccountName"] !== null) {
            $this->OutSubAccountName = $param["OutSubAccountName"];
        }

        if (array_key_exists("InSubAccountName",$param) and $param["InSubAccountName"] !== null) {
            $this->InSubAccountName = $param["InSubAccountName"];
        }

        if (array_key_exists("PayChannelSubId",$param) and $param["PayChannelSubId"] !== null) {
            $this->PayChannelSubId = $param["PayChannelSubId"];
        }

        if (array_key_exists("OutSubAccountNumber",$param) and $param["OutSubAccountNumber"] !== null) {
            $this->OutSubAccountNumber = $param["OutSubAccountNumber"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("InSubAccountNumber",$param) and $param["InSubAccountNumber"] !== null) {
            $this->InSubAccountNumber = $param["InSubAccountNumber"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("BankAccountNumber",$param) and $param["BankAccountNumber"] !== null) {
            $this->BankAccountNumber = $param["BankAccountNumber"];
        }

        if (array_key_exists("OldTransSequenceNumber",$param) and $param["OldTransSequenceNumber"] !== null) {
            $this->OldTransSequenceNumber = $param["OldTransSequenceNumber"];
        }

        if (array_key_exists("MerchantCode",$param) and $param["MerchantCode"] !== null) {
            $this->MerchantCode = $param["MerchantCode"];
        }

        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }

        if (array_key_exists("CurrencyAmount",$param) and $param["CurrencyAmount"] !== null) {
            $this->CurrencyAmount = $param["CurrencyAmount"];
        }

        if (array_key_exists("TransSequenceNumber",$param) and $param["TransSequenceNumber"] !== null) {
            $this->TransSequenceNumber = $param["TransSequenceNumber"];
        }

        if (array_key_exists("PayChannel",$param) and $param["PayChannel"] !== null) {
            $this->PayChannel = $param["PayChannel"];
        }

        if (array_key_exists("OldOrderId",$param) and $param["OldOrderId"] !== null) {
            $this->OldOrderId = $param["OldOrderId"];
        }

        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("OutTransNetMemberCode",$param) and $param["OutTransNetMemberCode"] !== null) {
            $this->OutTransNetMemberCode = $param["OutTransNetMemberCode"];
        }

        if (array_key_exists("InTransNetMemberCode",$param) and $param["InTransNetMemberCode"] !== null) {
            $this->InTransNetMemberCode = $param["InTransNetMemberCode"];
        }

        if (array_key_exists("ReservedMessage",$param) and $param["ReservedMessage"] !== null) {
            $this->ReservedMessage = $param["ReservedMessage"];
        }

        if (array_key_exists("PlatformShortNumber",$param) and $param["PlatformShortNumber"] !== null) {
            $this->PlatformShortNumber = $param["PlatformShortNumber"];
        }

        if (array_key_exists("TransType",$param) and $param["TransType"] !== null) {
            $this->TransType = $param["TransType"];
        }

        if (array_key_exists("TransFee",$param) and $param["TransFee"] !== null) {
            $this->TransFee = $param["TransFee"];
        }
    }
}
