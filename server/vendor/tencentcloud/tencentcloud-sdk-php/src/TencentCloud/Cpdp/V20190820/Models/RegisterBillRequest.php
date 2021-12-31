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
 * RegisterBill请求参数结构体
 *
 * @method string getRequestType() 获取请求类型此接口固定填：RegBillSupportWithdrawReq
 * @method void setRequestType(string $RequestType) 设置请求类型此接口固定填：RegBillSupportWithdrawReq
 * @method string getMerchantCode() 获取商户号
 * @method void setMerchantCode(string $MerchantCode) 设置商户号
 * @method string getPayChannel() 获取支付渠道
 * @method void setPayChannel(string $PayChannel) 设置支付渠道
 * @method integer getPayChannelSubId() 获取子渠道
 * @method void setPayChannelSubId(integer $PayChannelSubId) 设置子渠道
 * @method string getOrderId() 获取交易订单号
 * @method void setOrderId(string $OrderId) 设置交易订单号
 * @method string getBankAccountNo() 获取父账户账号，资金汇总账号
 * @method void setBankAccountNo(string $BankAccountNo) 设置父账户账号，资金汇总账号
 * @method string getPlatformShortNo() 获取平台短号(银行分配)
 * @method void setPlatformShortNo(string $PlatformShortNo) 设置平台短号(银行分配)
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getMidasSignature() 获取计费签名
 * @method void setMidasSignature(string $MidasSignature) 设置计费签名
 * @method string getTransSeqNo() 获取交易流水号
 * @method void setTransSeqNo(string $TransSeqNo) 设置交易流水号
 * @method string getTranFee() 获取暂未使用，默认传0.0
 * @method void setTranFee(string $TranFee) 设置暂未使用，默认传0.0
 * @method string getOrderAmt() 获取挂账金额，以元为单位
 * @method void setOrderAmt(string $OrderAmt) 设置挂账金额，以元为单位
 * @method string getBankSubAccountNo() 获取子账户账号
 * @method void setBankSubAccountNo(string $BankSubAccountNo) 设置子账户账号
 * @method string getTranNetMemberCode() 获取交易网会员代码
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置交易网会员代码
 * @method string getTranType() 获取0,登记挂账，1，撤销挂账
 * @method void setTranType(string $TranType) 设置0,登记挂账，1，撤销挂账
 * @method string getReservedMessage() 获取保留域
 * @method void setReservedMessage(string $ReservedMessage) 设置保留域
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getMidasEnvironment() 获取Midas环境参数
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置Midas环境参数
 */
class RegisterBillRequest extends AbstractModel
{
    /**
     * @var string 请求类型此接口固定填：RegBillSupportWithdrawReq
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
     * @var string 交易订单号
     */
    public $OrderId;

    /**
     * @var string 父账户账号，资金汇总账号
     */
    public $BankAccountNo;

    /**
     * @var string 平台短号(银行分配)
     */
    public $PlatformShortNo;

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
    public $TransSeqNo;

    /**
     * @var string 暂未使用，默认传0.0
     */
    public $TranFee;

    /**
     * @var string 挂账金额，以元为单位
     */
    public $OrderAmt;

    /**
     * @var string 子账户账号
     */
    public $BankSubAccountNo;

    /**
     * @var string 交易网会员代码
     */
    public $TranNetMemberCode;

    /**
     * @var string 0,登记挂账，1，撤销挂账
     */
    public $TranType;

    /**
     * @var string 保留域
     */
    public $ReservedMessage;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string Midas环境参数
     */
    public $MidasEnvironment;

    /**
     * @param string $RequestType 请求类型此接口固定填：RegBillSupportWithdrawReq
     * @param string $MerchantCode 商户号
     * @param string $PayChannel 支付渠道
     * @param integer $PayChannelSubId 子渠道
     * @param string $OrderId 交易订单号
     * @param string $BankAccountNo 父账户账号，资金汇总账号
     * @param string $PlatformShortNo 平台短号(银行分配)
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $MidasSignature 计费签名
     * @param string $TransSeqNo 交易流水号
     * @param string $TranFee 暂未使用，默认传0.0
     * @param string $OrderAmt 挂账金额，以元为单位
     * @param string $BankSubAccountNo 子账户账号
     * @param string $TranNetMemberCode 交易网会员代码
     * @param string $TranType 0,登记挂账，1，撤销挂账
     * @param string $ReservedMessage 保留域
     * @param string $Remark 备注
     * @param string $MidasEnvironment Midas环境参数
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

        if (array_key_exists("BankAccountNo",$param) and $param["BankAccountNo"] !== null) {
            $this->BankAccountNo = $param["BankAccountNo"];
        }

        if (array_key_exists("PlatformShortNo",$param) and $param["PlatformShortNo"] !== null) {
            $this->PlatformShortNo = $param["PlatformShortNo"];
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

        if (array_key_exists("TransSeqNo",$param) and $param["TransSeqNo"] !== null) {
            $this->TransSeqNo = $param["TransSeqNo"];
        }

        if (array_key_exists("TranFee",$param) and $param["TranFee"] !== null) {
            $this->TranFee = $param["TranFee"];
        }

        if (array_key_exists("OrderAmt",$param) and $param["OrderAmt"] !== null) {
            $this->OrderAmt = $param["OrderAmt"];
        }

        if (array_key_exists("BankSubAccountNo",$param) and $param["BankSubAccountNo"] !== null) {
            $this->BankSubAccountNo = $param["BankSubAccountNo"];
        }

        if (array_key_exists("TranNetMemberCode",$param) and $param["TranNetMemberCode"] !== null) {
            $this->TranNetMemberCode = $param["TranNetMemberCode"];
        }

        if (array_key_exists("TranType",$param) and $param["TranType"] !== null) {
            $this->TranType = $param["TranType"];
        }

        if (array_key_exists("ReservedMessage",$param) and $param["ReservedMessage"] !== null) {
            $this->ReservedMessage = $param["ReservedMessage"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}
