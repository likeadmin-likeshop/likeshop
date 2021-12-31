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
 * UnifiedOrder请求参数结构体
 *
 * @method string getCurrencyType() 获取ISO 货币代码，CNY
 * @method void setCurrencyType(string $CurrencyType) 设置ISO 货币代码，CNY
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getOutTradeNo() 获取支付订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method void setOutTradeNo(string $OutTradeNo) 设置支付订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method string getProductDetail() 获取商品详情，需要URL编码
 * @method void setProductDetail(string $ProductDetail) 设置商品详情，需要URL编码
 * @method string getProductId() 获取商品ID，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method void setProductId(string $ProductId) 设置商品ID，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
 * @method string getProductName() 获取商品名称，需要URL编码
 * @method void setProductName(string $ProductName) 设置商品名称，需要URL编码
 * @method integer getTotalAmt() 获取支付金额，单位： 分
 * @method void setTotalAmt(integer $TotalAmt) 设置支付金额，单位： 分
 * @method string getUserId() 获取用户ID，长度不小于5位，仅支持字母和数字的组合
 * @method void setUserId(string $UserId) 设置用户ID，长度不小于5位，仅支持字母和数字的组合
 * @method string getRealChannel() 获取银行真实渠道.如:bank_pingan
 * @method void setRealChannel(string $RealChannel) 设置银行真实渠道.如:bank_pingan
 * @method integer getOriginalAmt() 获取原始金额
 * @method void setOriginalAmt(integer $OriginalAmt) 设置原始金额
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getMidasSignature() 获取按照聚鑫安全密钥计算的签名
 * @method void setMidasSignature(string $MidasSignature) 设置按照聚鑫安全密钥计算的签名
 * @method string getCallbackUrl() 获取Web端回调地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置Web端回调地址
 * @method string getChannel() 获取指定支付渠道：  wechat：微信支付  qqwallet：QQ钱包 
 bank：网银支付  只有一个渠道时需要指定
 * @method void setChannel(string $Channel) 设置指定支付渠道：  wechat：微信支付  qqwallet：QQ钱包 
 bank：网银支付  只有一个渠道时需要指定
 * @method string getMetadata() 获取透传字段，支付成功回调透传给应用，用于业务透传自定义内容
 * @method void setMetadata(string $Metadata) 设置透传字段，支付成功回调透传给应用，用于业务透传自定义内容
 * @method integer getQuantity() 获取购买数量，不传默认为1
 * @method void setQuantity(integer $Quantity) 设置购买数量，不传默认为1
 * @method string getSubAppId() 获取聚鑫计费SubAppId，代表子商户
 * @method void setSubAppId(string $SubAppId) 设置聚鑫计费SubAppId，代表子商户
 * @method array getSubOrderList() 获取子订单信息列表，格式：子订单号、子应用ID、金额。 压缩后最长不可超过65535字节(去除空格，换行，制表符等无意义字符)
注：接入银行或其他支付渠道服务商模式下，必传
 * @method void setSubOrderList(array $SubOrderList) 设置子订单信息列表，格式：子订单号、子应用ID、金额。 压缩后最长不可超过65535字节(去除空格，换行，制表符等无意义字符)
注：接入银行或其他支付渠道服务商模式下，必传
 * @method integer getTotalMchIncome() 获取结算应收金额，单位：分
 * @method void setTotalMchIncome(integer $TotalMchIncome) 设置结算应收金额，单位：分
 * @method integer getTotalPlatformIncome() 获取平台应收金额，单位：分
 * @method void setTotalPlatformIncome(integer $TotalPlatformIncome) 设置平台应收金额，单位：分
 * @method string getWxOpenId() 获取微信公众号/小程序支付时为必选，需要传微信下的openid
 * @method void setWxOpenId(string $WxOpenId) 设置微信公众号/小程序支付时为必选，需要传微信下的openid
 * @method string getWxSubOpenId() 获取在服务商模式下，微信公众号/小程序支付时wx_sub_openid和wx_openid二选一
 * @method void setWxSubOpenId(string $WxSubOpenId) 设置在服务商模式下，微信公众号/小程序支付时wx_sub_openid和wx_openid二选一
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
 * @method string getWxAppId() 获取微信商户应用ID
 * @method void setWxAppId(string $WxAppId) 设置微信商户应用ID
 * @method string getWxSubAppId() 获取微信商户子应用ID
 * @method void setWxSubAppId(string $WxSubAppId) 设置微信商户子应用ID
 * @method string getPaymentNotifyUrl() 获取支付通知地址
 * @method void setPaymentNotifyUrl(string $PaymentNotifyUrl) 设置支付通知地址
 */
class UnifiedOrderRequest extends AbstractModel
{
    /**
     * @var string ISO 货币代码，CNY
     */
    public $CurrencyType;

    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 支付订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     */
    public $OutTradeNo;

    /**
     * @var string 商品详情，需要URL编码
     */
    public $ProductDetail;

    /**
     * @var string 商品ID，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     */
    public $ProductId;

    /**
     * @var string 商品名称，需要URL编码
     */
    public $ProductName;

    /**
     * @var integer 支付金额，单位： 分
     */
    public $TotalAmt;

    /**
     * @var string 用户ID，长度不小于5位，仅支持字母和数字的组合
     */
    public $UserId;

    /**
     * @var string 银行真实渠道.如:bank_pingan
     */
    public $RealChannel;

    /**
     * @var integer 原始金额
     */
    public $OriginalAmt;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string 按照聚鑫安全密钥计算的签名
     */
    public $MidasSignature;

    /**
     * @var string Web端回调地址
     */
    public $CallbackUrl;

    /**
     * @var string 指定支付渠道：  wechat：微信支付  qqwallet：QQ钱包 
 bank：网银支付  只有一个渠道时需要指定
     */
    public $Channel;

    /**
     * @var string 透传字段，支付成功回调透传给应用，用于业务透传自定义内容
     */
    public $Metadata;

    /**
     * @var integer 购买数量，不传默认为1
     */
    public $Quantity;

    /**
     * @var string 聚鑫计费SubAppId，代表子商户
     */
    public $SubAppId;

    /**
     * @var array 子订单信息列表，格式：子订单号、子应用ID、金额。 压缩后最长不可超过65535字节(去除空格，换行，制表符等无意义字符)
注：接入银行或其他支付渠道服务商模式下，必传
     */
    public $SubOrderList;

    /**
     * @var integer 结算应收金额，单位：分
     */
    public $TotalMchIncome;

    /**
     * @var integer 平台应收金额，单位：分
     */
    public $TotalPlatformIncome;

    /**
     * @var string 微信公众号/小程序支付时为必选，需要传微信下的openid
     */
    public $WxOpenId;

    /**
     * @var string 在服务商模式下，微信公众号/小程序支付时wx_sub_openid和wx_openid二选一
     */
    public $WxSubOpenId;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @var string 微信商户应用ID
     */
    public $WxAppId;

    /**
     * @var string 微信商户子应用ID
     */
    public $WxSubAppId;

    /**
     * @var string 支付通知地址
     */
    public $PaymentNotifyUrl;

    /**
     * @param string $CurrencyType ISO 货币代码，CNY
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $OutTradeNo 支付订单号，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     * @param string $ProductDetail 商品详情，需要URL编码
     * @param string $ProductId 商品ID，仅支持数字、字母、下划线（_）、横杠字符（-）、点（.）的组合
     * @param string $ProductName 商品名称，需要URL编码
     * @param integer $TotalAmt 支付金额，单位： 分
     * @param string $UserId 用户ID，长度不小于5位，仅支持字母和数字的组合
     * @param string $RealChannel 银行真实渠道.如:bank_pingan
     * @param integer $OriginalAmt 原始金额
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $MidasSignature 按照聚鑫安全密钥计算的签名
     * @param string $CallbackUrl Web端回调地址
     * @param string $Channel 指定支付渠道：  wechat：微信支付  qqwallet：QQ钱包 
 bank：网银支付  只有一个渠道时需要指定
     * @param string $Metadata 透传字段，支付成功回调透传给应用，用于业务透传自定义内容
     * @param integer $Quantity 购买数量，不传默认为1
     * @param string $SubAppId 聚鑫计费SubAppId，代表子商户
     * @param array $SubOrderList 子订单信息列表，格式：子订单号、子应用ID、金额。 压缩后最长不可超过65535字节(去除空格，换行，制表符等无意义字符)
注：接入银行或其他支付渠道服务商模式下，必传
     * @param integer $TotalMchIncome 结算应收金额，单位：分
     * @param integer $TotalPlatformIncome 平台应收金额，单位：分
     * @param string $WxOpenId 微信公众号/小程序支付时为必选，需要传微信下的openid
     * @param string $WxSubOpenId 在服务商模式下，微信公众号/小程序支付时wx_sub_openid和wx_openid二选一
     * @param string $MidasEnvironment 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     * @param string $WxAppId 微信商户应用ID
     * @param string $WxSubAppId 微信商户子应用ID
     * @param string $PaymentNotifyUrl 支付通知地址
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
        if (array_key_exists("CurrencyType",$param) and $param["CurrencyType"] !== null) {
            $this->CurrencyType = $param["CurrencyType"];
        }

        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("ProductDetail",$param) and $param["ProductDetail"] !== null) {
            $this->ProductDetail = $param["ProductDetail"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("TotalAmt",$param) and $param["TotalAmt"] !== null) {
            $this->TotalAmt = $param["TotalAmt"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RealChannel",$param) and $param["RealChannel"] !== null) {
            $this->RealChannel = $param["RealChannel"];
        }

        if (array_key_exists("OriginalAmt",$param) and $param["OriginalAmt"] !== null) {
            $this->OriginalAmt = $param["OriginalAmt"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SubOrderList",$param) and $param["SubOrderList"] !== null) {
            $this->SubOrderList = [];
            foreach ($param["SubOrderList"] as $key => $value){
                $obj = new UnifiedOrderInSubOrderList();
                $obj->deserialize($value);
                array_push($this->SubOrderList, $obj);
            }
        }

        if (array_key_exists("TotalMchIncome",$param) and $param["TotalMchIncome"] !== null) {
            $this->TotalMchIncome = $param["TotalMchIncome"];
        }

        if (array_key_exists("TotalPlatformIncome",$param) and $param["TotalPlatformIncome"] !== null) {
            $this->TotalPlatformIncome = $param["TotalPlatformIncome"];
        }

        if (array_key_exists("WxOpenId",$param) and $param["WxOpenId"] !== null) {
            $this->WxOpenId = $param["WxOpenId"];
        }

        if (array_key_exists("WxSubOpenId",$param) and $param["WxSubOpenId"] !== null) {
            $this->WxSubOpenId = $param["WxSubOpenId"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("WxAppId",$param) and $param["WxAppId"] !== null) {
            $this->WxAppId = $param["WxAppId"];
        }

        if (array_key_exists("WxSubAppId",$param) and $param["WxSubAppId"] !== null) {
            $this->WxSubAppId = $param["WxSubAppId"];
        }

        if (array_key_exists("PaymentNotifyUrl",$param) and $param["PaymentNotifyUrl"] !== null) {
            $this->PaymentNotifyUrl = $param["PaymentNotifyUrl"];
        }
    }
}
