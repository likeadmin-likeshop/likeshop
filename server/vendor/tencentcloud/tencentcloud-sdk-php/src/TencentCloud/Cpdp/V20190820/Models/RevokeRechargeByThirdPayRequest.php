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
 * RevokeRechargeByThirdPay请求参数结构体
 *
 * @method string getRequestType() 获取请求类型此接口固定填：RevokeMemberRechargeThirdPayReq
 * @method void setRequestType(string $RequestType) 设置请求类型此接口固定填：RevokeMemberRechargeThirdPayReq
 * @method string getMerchantCode() 获取商户号
 * @method void setMerchantCode(string $MerchantCode) 设置商户号
 * @method string getPayChannel() 获取支付渠道
 * @method void setPayChannel(string $PayChannel) 设置支付渠道
 * @method integer getPayChannelSubId() 获取子渠道
 * @method void setPayChannelSubId(integer $PayChannelSubId) 设置子渠道
 * @method string getOrderId() 获取原始充值交易订单号
 * @method void setOrderId(string $OrderId) 设置原始充值交易订单号
 * @method string getBankAccountNumber() 获取父账户账号，资金汇总账号
 * @method void setBankAccountNumber(string $BankAccountNumber) 设置父账户账号，资金汇总账号
 * @method string getPlatformShortNumber() 获取平台短号(银行分配)
 * @method void setPlatformShortNumber(string $PlatformShortNumber) 设置平台短号(银行分配)
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getMidasSignature() 获取计费签名
 * @method void setMidasSignature(string $MidasSignature) 设置计费签名
 * @method string getTransSequenceNumber() 获取交易流水号
 * @method void setTransSequenceNumber(string $TransSequenceNumber) 设置交易流水号
 * @method string getTransFee() 获取申请撤销的手续费金额,以元为单位
 * @method void setTransFee(string $TransFee) 设置申请撤销的手续费金额,以元为单位
 * @method string getThirdPayChannel() 获取第三方支付渠道类型 0001-微信 0002-支付宝 0003-京东支付
 * @method void setThirdPayChannel(string $ThirdPayChannel) 设置第三方支付渠道类型 0001-微信 0002-支付宝 0003-京东支付
 * @method string getThirdPayChannelOrderId() 获取第三方渠道订单号或流水号
 * @method void setThirdPayChannelOrderId(string $ThirdPayChannelOrderId) 设置第三方渠道订单号或流水号
 * @method string getOldFrontSequenceNumber() 获取充值接口银行返回的流水号(FrontSeqNo)
 * @method void setOldFrontSequenceNumber(string $OldFrontSequenceNumber) 设置充值接口银行返回的流水号(FrontSeqNo)
 * @method string getCurrencyAmount() 获取申请撤销的金额
 * @method void setCurrencyAmount(string $CurrencyAmount) 设置申请撤销的金额
 * @method string getCurrencyUnit() 获取单位，1：元，2：角，3：分 目前固定填1
 * @method void setCurrencyUnit(string $CurrencyUnit) 设置单位，1：元，2：角，3：分 目前固定填1
 * @method string getCurrencyType() 获取币种 目前固定填RMB
 * @method void setCurrencyType(string $CurrencyType) 设置币种 目前固定填RMB
 * @method string getMidasEnvironment() 获取Midas环境标识
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置Midas环境标识
 * @method string getReservedMessage() 获取保留域
 * @method void setReservedMessage(string $ReservedMessage) 设置保留域
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class RevokeRechargeByThirdPayRequest extends AbstractModel
{
    /**
     * @var string 请求类型此接口固定填：RevokeMemberRechargeThirdPayReq
     */
    public $RequestType;

    /**
     * @var string 商户号
     */
    public $MerchantCode;

    /**
     * @var string 支付渠道
     */
    public $PayChannel;

    /**
     * @var integer 子渠道
     */
    public $PayChannelSubId;

    /**
     * @var string 原始充值交易订单号
     */
    public $OrderId;

    /**
     * @var string 父账户账号，资金汇总账号
     */
    public $BankAccountNumber;

    /**
     * @var string 平台短号(银行分配)
     */
    public $PlatformShortNumber;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 计费签名
     */
    public $MidasSignature;

    /**
     * @var string 交易流水号
     */
    public $TransSequenceNumber;

    /**
     * @var string 申请撤销的手续费金额,以元为单位
     */
    public $TransFee;

    /**
     * @var string 第三方支付渠道类型 0001-微信 0002-支付宝 0003-京东支付
     */
    public $ThirdPayChannel;

    /**
     * @var string 第三方渠道订单号或流水号
     */
    public $ThirdPayChannelOrderId;

    /**
     * @var string 充值接口银行返回的流水号(FrontSeqNo)
     */
    public $OldFrontSequenceNumber;

    /**
     * @var string 申请撤销的金额
     */
    public $CurrencyAmount;

    /**
     * @var string 单位，1：元，2：角，3：分 目前固定填1
     */
    public $CurrencyUnit;

    /**
     * @var string 币种 目前固定填RMB
     */
    public $CurrencyType;

    /**
     * @var string Midas环境标识
     */
    public $MidasEnvironment;

    /**
     * @var string 保留域
     */
    public $ReservedMessage;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $RequestType 请求类型此接口固定填：RevokeMemberRechargeThirdPayReq
     * @param string $MerchantCode 商户号
     * @param string $PayChannel 支付渠道
     * @param integer $PayChannelSubId 子渠道
     * @param string $OrderId 原始充值交易订单号
     * @param string $BankAccountNumber 父账户账号，资金汇总账号
     * @param string $PlatformShortNumber 平台短号(银行分配)
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $MidasSignature 计费签名
     * @param string $TransSequenceNumber 交易流水号
     * @param string $TransFee 申请撤销的手续费金额,以元为单位
     * @param string $ThirdPayChannel 第三方支付渠道类型 0001-微信 0002-支付宝 0003-京东支付
     * @param string $ThirdPayChannelOrderId 第三方渠道订单号或流水号
     * @param string $OldFrontSequenceNumber 充值接口银行返回的流水号(FrontSeqNo)
     * @param string $CurrencyAmount 申请撤销的金额
     * @param string $CurrencyUnit 单位，1：元，2：角，3：分 目前固定填1
     * @param string $CurrencyType 币种 目前固定填RMB
     * @param string $MidasEnvironment Midas环境标识
     * @param string $ReservedMessage 保留域
     * @param string $Remark 备注
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
        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }

        if (array_key_exists("MerchantCode",$param) and $param["MerchantCode"] !== null) {
            $this->MerchantCode = $param["MerchantCode"];
        }

        if (array_key_exists("PayChannel",$param) and $param["PayChannel"] !== null) {
            $this->PayChannel = $param["PayChannel"];
        }

        if (array_key_exists("PayChannelSubId",$param) and $param["PayChannelSubId"] !== null) {
            $this->PayChannelSubId = $param["PayChannelSubId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("BankAccountNumber",$param) and $param["BankAccountNumber"] !== null) {
            $this->BankAccountNumber = $param["BankAccountNumber"];
        }

        if (array_key_exists("PlatformShortNumber",$param) and $param["PlatformShortNumber"] !== null) {
            $this->PlatformShortNumber = $param["PlatformShortNumber"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("TransSequenceNumber",$param) and $param["TransSequenceNumber"] !== null) {
            $this->TransSequenceNumber = $param["TransSequenceNumber"];
        }

        if (array_key_exists("TransFee",$param) and $param["TransFee"] !== null) {
            $this->TransFee = $param["TransFee"];
        }

        if (array_key_exists("ThirdPayChannel",$param) and $param["ThirdPayChannel"] !== null) {
            $this->ThirdPayChannel = $param["ThirdPayChannel"];
        }

        if (array_key_exists("ThirdPayChannelOrderId",$param) and $param["ThirdPayChannelOrderId"] !== null) {
            $this->ThirdPayChannelOrderId = $param["ThirdPayChannelOrderId"];
        }

        if (array_key_exists("OldFrontSequenceNumber",$param) and $param["OldFrontSequenceNumber"] !== null) {
            $this->OldFrontSequenceNumber = $param["OldFrontSequenceNumber"];
        }

        if (array_key_exists("CurrencyAmount",$param) and $param["CurrencyAmount"] !== null) {
            $this->CurrencyAmount = $param["CurrencyAmount"];
        }

        if (array_key_exists("CurrencyUnit",$param) and $param["CurrencyUnit"] !== null) {
            $this->CurrencyUnit = $param["CurrencyUnit"];
        }

        if (array_key_exists("CurrencyType",$param) and $param["CurrencyType"] !== null) {
            $this->CurrencyType = $param["CurrencyType"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("ReservedMessage",$param) and $param["ReservedMessage"] !== null) {
            $this->ReservedMessage = $param["ReservedMessage"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
