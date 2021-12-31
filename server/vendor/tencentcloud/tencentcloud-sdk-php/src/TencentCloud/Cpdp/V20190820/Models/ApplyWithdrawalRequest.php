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
 * ApplyWithdrawal请求参数结构体
 *
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getSubAppId() 获取聚鑫计费SubAppId，代表子商户
 * @method void setSubAppId(string $SubAppId) 设置聚鑫计费SubAppId，代表子商户
 * @method string getSettleAcctNo() 获取用于提现
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
 * @method void setSettleAcctNo(string $SettleAcctNo) 设置用于提现
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
 * @method string getSettleAcctName() 获取结算账户户名
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
 * @method void setSettleAcctName(string $SettleAcctName) 设置结算账户户名
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
 * @method string getCurrencyType() 获取币种 RMB
 * @method void setCurrencyType(string $CurrencyType) 设置币种 RMB
 * @method integer getCurrencyUnit() 获取单位，1：元，2：角，3：分
 * @method void setCurrencyUnit(integer $CurrencyUnit) 设置单位，1：元，2：角，3：分
 * @method string getCurrencyAmt() 获取金额
 * @method void setCurrencyAmt(string $CurrencyAmt) 设置金额
 * @method string getTranWebName() 获取交易网名称
 * @method void setTranWebName(string $TranWebName) 设置交易网名称
 * @method string getIdType() 获取会员证件类型
 * @method void setIdType(string $IdType) 设置会员证件类型
 * @method string getIdCode() 获取会员证件号码
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
 * @method void setIdCode(string $IdCode) 设置会员证件号码
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getMidasSignature() 获取按照聚鑫安全密钥计算的签名
 * @method void setMidasSignature(string $MidasSignature) 设置按照聚鑫安全密钥计算的签名
 * @method string getEncryptType() 获取敏感信息加密类型:
RSA: rsa非对称加密，使用RSA-PKCS1-v1_5
AES: aes对称加密，使用AES256-CBC-PCKS7padding
缺省: RSA
 * @method void setEncryptType(string $EncryptType) 设置敏感信息加密类型:
RSA: rsa非对称加密，使用RSA-PKCS1-v1_5
AES: aes对称加密，使用AES256-CBC-PCKS7padding
缺省: RSA
 * @method string getMidasEnvironment() 获取环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method string getCommissionAmount() 获取手续费金额
 * @method void setCommissionAmount(string $CommissionAmount) 设置手续费金额
 * @method string getWithdrawOrderId() 获取提现单号，长度32字节
 * @method void setWithdrawOrderId(string $WithdrawOrderId) 设置提现单号，长度32字节
 */
class ApplyWithdrawalRequest extends AbstractModel
{
    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 聚鑫计费SubAppId，代表子商户
     */
    public $SubAppId;

    /**
     * @var string 用于提现
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
     */
    public $SettleAcctNo;

    /**
     * @var string 结算账户户名
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
     */
    public $SettleAcctName;

    /**
     * @var string 币种 RMB
     */
    public $CurrencyType;

    /**
     * @var integer 单位，1：元，2：角，3：分
     */
    public $CurrencyUnit;

    /**
     * @var string 金额
     */
    public $CurrencyAmt;

    /**
     * @var string 交易网名称
     */
    public $TranWebName;

    /**
     * @var string 会员证件类型
     */
    public $IdType;

    /**
     * @var string 会员证件号码
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
     */
    public $IdCode;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string 按照聚鑫安全密钥计算的签名
     */
    public $MidasSignature;

    /**
     * @var string 敏感信息加密类型:
RSA: rsa非对称加密，使用RSA-PKCS1-v1_5
AES: aes对称加密，使用AES256-CBC-PCKS7padding
缺省: RSA
     */
    public $EncryptType;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @var string 手续费金额
     */
    public $CommissionAmount;

    /**
     * @var string 提现单号，长度32字节
     */
    public $WithdrawOrderId;

    /**
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $SubAppId 聚鑫计费SubAppId，代表子商户
     * @param string $SettleAcctNo 用于提现
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
     * @param string $SettleAcctName 结算账户户名
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
     * @param string $CurrencyType 币种 RMB
     * @param integer $CurrencyUnit 单位，1：元，2：角，3：分
     * @param string $CurrencyAmt 金额
     * @param string $TranWebName 交易网名称
     * @param string $IdType 会员证件类型
     * @param string $IdCode 会员证件号码
<敏感信息>加密详见<a href="https://cloud.tencent.com/document/product/1122/48979" target="_blank">《商户端接口敏感信息加密说明》</a>
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $MidasSignature 按照聚鑫安全密钥计算的签名
     * @param string $EncryptType 敏感信息加密类型:
RSA: rsa非对称加密，使用RSA-PKCS1-v1_5
AES: aes对称加密，使用AES256-CBC-PCKS7padding
缺省: RSA
     * @param string $MidasEnvironment 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     * @param string $CommissionAmount 手续费金额
     * @param string $WithdrawOrderId 提现单号，长度32字节
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
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SettleAcctNo",$param) and $param["SettleAcctNo"] !== null) {
            $this->SettleAcctNo = $param["SettleAcctNo"];
        }

        if (array_key_exists("SettleAcctName",$param) and $param["SettleAcctName"] !== null) {
            $this->SettleAcctName = $param["SettleAcctName"];
        }

        if (array_key_exists("CurrencyType",$param) and $param["CurrencyType"] !== null) {
            $this->CurrencyType = $param["CurrencyType"];
        }

        if (array_key_exists("CurrencyUnit",$param) and $param["CurrencyUnit"] !== null) {
            $this->CurrencyUnit = $param["CurrencyUnit"];
        }

        if (array_key_exists("CurrencyAmt",$param) and $param["CurrencyAmt"] !== null) {
            $this->CurrencyAmt = $param["CurrencyAmt"];
        }

        if (array_key_exists("TranWebName",$param) and $param["TranWebName"] !== null) {
            $this->TranWebName = $param["TranWebName"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("IdCode",$param) and $param["IdCode"] !== null) {
            $this->IdCode = $param["IdCode"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("CommissionAmount",$param) and $param["CommissionAmount"] !== null) {
            $this->CommissionAmount = $param["CommissionAmount"];
        }

        if (array_key_exists("WithdrawOrderId",$param) and $param["WithdrawOrderId"] !== null) {
            $this->WithdrawOrderId = $param["WithdrawOrderId"];
        }
    }
}
