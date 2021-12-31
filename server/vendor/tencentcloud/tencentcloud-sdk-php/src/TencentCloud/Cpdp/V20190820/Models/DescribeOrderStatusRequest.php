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
 * DescribeOrderStatus请求参数结构体
 *
 * @method string getRequestType() 获取请求类型，此接口固定填：QueryOrderStatusReq
 * @method void setRequestType(string $RequestType) 设置请求类型，此接口固定填：QueryOrderStatusReq
 * @method string getMerchantCode() 获取商户号
 * @method void setMerchantCode(string $MerchantCode) 设置商户号
 * @method string getPayChannel() 获取支付渠道
 * @method void setPayChannel(string $PayChannel) 设置支付渠道
 * @method integer getPayChannelSubId() 获取子渠道
 * @method void setPayChannelSubId(integer $PayChannelSubId) 设置子渠道
 * @method string getOrderId() 获取交易订单号或流水号，提现，充值或会员交易请求时的CnsmrSeqNo值
 * @method void setOrderId(string $OrderId) 设置交易订单号或流水号，提现，充值或会员交易请求时的CnsmrSeqNo值
 * @method string getBankAccountNumber() 获取父账户账号，资金汇总账号
 * @method void setBankAccountNumber(string $BankAccountNumber) 设置父账户账号，资金汇总账号
 * @method string getPlatformShortNumber() 获取平台短号(银行分配)
 * @method void setPlatformShortNumber(string $PlatformShortNumber) 设置平台短号(银行分配)
 * @method string getQueryType() 获取功能标志 0：会员间交易 1：提现 2：充值
 * @method void setQueryType(string $QueryType) 设置功能标志 0：会员间交易 1：提现 2：充值
 * @method string getTransSequenceNumber() 获取银行流水号
 * @method void setTransSequenceNumber(string $TransSequenceNumber) 设置银行流水号
 * @method string getMidasSignature() 获取计费签名
 * @method void setMidasSignature(string $MidasSignature) 设置计费签名
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getMidasEnvironment() 获取Midas环境参数
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置Midas环境参数
 * @method string getReservedMessage() 获取保留字段
 * @method void setReservedMessage(string $ReservedMessage) 设置保留字段
 * @method string getBankSubAccountNumber() 获取子账户账号 暂未使用
 * @method void setBankSubAccountNumber(string $BankSubAccountNumber) 设置子账户账号 暂未使用
 * @method string getTransDate() 获取交易日期 暂未使用
 * @method void setTransDate(string $TransDate) 设置交易日期 暂未使用
 */
class DescribeOrderStatusRequest extends AbstractModel
{
    /**
     * @var string 请求类型，此接口固定填：QueryOrderStatusReq
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
     * @var string 交易订单号或流水号，提现，充值或会员交易请求时的CnsmrSeqNo值
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
     * @var string 功能标志 0：会员间交易 1：提现 2：充值
     */
    public $QueryType;

    /**
     * @var string 银行流水号
     */
    public $TransSequenceNumber;

    /**
     * @var string 计费签名
     */
    public $MidasSignature;

    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string Midas环境参数
     */
    public $MidasEnvironment;

    /**
     * @var string 保留字段
     */
    public $ReservedMessage;

    /**
     * @var string 子账户账号 暂未使用
     */
    public $BankSubAccountNumber;

    /**
     * @var string 交易日期 暂未使用
     */
    public $TransDate;

    /**
     * @param string $RequestType 请求类型，此接口固定填：QueryOrderStatusReq
     * @param string $MerchantCode 商户号
     * @param string $PayChannel 支付渠道
     * @param integer $PayChannelSubId 子渠道
     * @param string $OrderId 交易订单号或流水号，提现，充值或会员交易请求时的CnsmrSeqNo值
     * @param string $BankAccountNumber 父账户账号，资金汇总账号
     * @param string $PlatformShortNumber 平台短号(银行分配)
     * @param string $QueryType 功能标志 0：会员间交易 1：提现 2：充值
     * @param string $TransSequenceNumber 银行流水号
     * @param string $MidasSignature 计费签名
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $MidasEnvironment Midas环境参数
     * @param string $ReservedMessage 保留字段
     * @param string $BankSubAccountNumber 子账户账号 暂未使用
     * @param string $TransDate 交易日期 暂未使用
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

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("TransSequenceNumber",$param) and $param["TransSequenceNumber"] !== null) {
            $this->TransSequenceNumber = $param["TransSequenceNumber"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("ReservedMessage",$param) and $param["ReservedMessage"] !== null) {
            $this->ReservedMessage = $param["ReservedMessage"];
        }

        if (array_key_exists("BankSubAccountNumber",$param) and $param["BankSubAccountNumber"] !== null) {
            $this->BankSubAccountNumber = $param["BankSubAccountNumber"];
        }

        if (array_key_exists("TransDate",$param) and $param["TransDate"] !== null) {
            $this->TransDate = $param["TransDate"];
        }
    }
}
