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
 * 查询订单接口的出参，订单列表
 *
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method integer getAmt() 获取支付金额，单位：分
 * @method void setAmt(integer $Amt) 设置支付金额，单位：分
 * @method string getUserId() 获取用户Id
 * @method void setUserId(string $UserId) 设置用户Id
 * @method string getCashAmt() 获取现金支付金额
 * @method void setCashAmt(string $CashAmt) 设置现金支付金额
 * @method string getMetadata() 获取发货标识，由业务在调用聚鑫下单 接口的时候下发
 * @method void setMetadata(string $Metadata) 设置发货标识，由业务在调用聚鑫下单 接口的时候下发
 * @method string getPayTime() 获取支付时间unix时间戳
 * @method void setPayTime(string $PayTime) 设置支付时间unix时间戳
 * @method string getCouponAmt() 获取抵扣券金额
 * @method void setCouponAmt(string $CouponAmt) 设置抵扣券金额
 * @method string getOrderTime() 获取下单时间unix时间戳
 * @method void setOrderTime(string $OrderTime) 设置下单时间unix时间戳
 * @method string getProductId() 获取物品id
 * @method void setProductId(string $ProductId) 设置物品id
 * @method string getSceneInfo() 获取高速场景信息
 * @method void setSceneInfo(string $SceneInfo) 设置高速场景信息
 * @method string getOrderState() 获取当前订单的订单状态 
0：初始状态，获取聚鑫交易订单成功；  
1：拉起聚鑫支付页面成功，用户未 支付；
2：用户支付成功，正在发货；
3：用户支付成功，发货失败；
4：用户支付成功，发货成功；
5：聚鑫支付页面正在失效中；
6：聚鑫支付页面已经失效；
 * @method void setOrderState(string $OrderState) 设置当前订单的订单状态 
0：初始状态，获取聚鑫交易订单成功；  
1：拉起聚鑫支付页面成功，用户未 支付；
2：用户支付成功，正在发货；
3：用户支付成功，发货失败；
4：用户支付成功，发货成功；
5：聚鑫支付页面正在失效中；
6：聚鑫支付页面已经失效；
 * @method string getChannel() 获取支付渠道：wechat：微信支付;
qqwallet：QQ钱包;
bank：网银
 * @method void setChannel(string $Channel) 设置支付渠道：wechat：微信支付;
qqwallet：QQ钱包;
bank：网银
 * @method string getRefundFlag() 获取是否曾退款
 * @method void setRefundFlag(string $RefundFlag) 设置是否曾退款
 * @method string getOutTradeNo() 获取务支付订单号
 * @method void setOutTradeNo(string $OutTradeNo) 设置务支付订单号
 * @method string getProductName() 获取商品名称
 * @method void setProductName(string $ProductName) 设置商品名称
 * @method string getCallBackTime() 获取支付回调时间，unix时间戳
 * @method void setCallBackTime(string $CallBackTime) 设置支付回调时间，unix时间戳
 * @method string getCurrencyType() 获取ISO 货币代码，CNY
 * @method void setCurrencyType(string $CurrencyType) 设置ISO 货币代码，CNY
 * @method string getAcctSubAppId() 获取微校场景账户Id
 * @method void setAcctSubAppId(string $AcctSubAppId) 设置微校场景账户Id
 * @method string getTransactionId() 获取调用下单接口获取的聚鑫交易订单
 * @method void setTransactionId(string $TransactionId) 设置调用下单接口获取的聚鑫交易订单
 * @method string getChannelOrderId() 获取聚鑫内部渠道订单号
 * @method void setChannelOrderId(string $ChannelOrderId) 设置聚鑫内部渠道订单号
 * @method array getSubOrderList() 获取调用下单接口传进来的 SubOutTradeNoList
 * @method void setSubOrderList(array $SubOrderList) 设置调用下单接口传进来的 SubOutTradeNoList
 * @method string getChannelExternalOrderId() 获取支付机构订单号
 * @method void setChannelExternalOrderId(string $ChannelExternalOrderId) 设置支付机构订单号
 */
class QueryOrderOutOrderList extends AbstractModel
{
    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var integer 支付金额，单位：分
     */
    public $Amt;

    /**
     * @var string 用户Id
     */
    public $UserId;

    /**
     * @var string 现金支付金额
     */
    public $CashAmt;

    /**
     * @var string 发货标识，由业务在调用聚鑫下单 接口的时候下发
     */
    public $Metadata;

    /**
     * @var string 支付时间unix时间戳
     */
    public $PayTime;

    /**
     * @var string 抵扣券金额
     */
    public $CouponAmt;

    /**
     * @var string 下单时间unix时间戳
     */
    public $OrderTime;

    /**
     * @var string 物品id
     */
    public $ProductId;

    /**
     * @var string 高速场景信息
     */
    public $SceneInfo;

    /**
     * @var string 当前订单的订单状态 
0：初始状态，获取聚鑫交易订单成功；  
1：拉起聚鑫支付页面成功，用户未 支付；
2：用户支付成功，正在发货；
3：用户支付成功，发货失败；
4：用户支付成功，发货成功；
5：聚鑫支付页面正在失效中；
6：聚鑫支付页面已经失效；
     */
    public $OrderState;

    /**
     * @var string 支付渠道：wechat：微信支付;
qqwallet：QQ钱包;
bank：网银
     */
    public $Channel;

    /**
     * @var string 是否曾退款
     */
    public $RefundFlag;

    /**
     * @var string 务支付订单号
     */
    public $OutTradeNo;

    /**
     * @var string 商品名称
     */
    public $ProductName;

    /**
     * @var string 支付回调时间，unix时间戳
     */
    public $CallBackTime;

    /**
     * @var string ISO 货币代码，CNY
     */
    public $CurrencyType;

    /**
     * @var string 微校场景账户Id
     */
    public $AcctSubAppId;

    /**
     * @var string 调用下单接口获取的聚鑫交易订单
     */
    public $TransactionId;

    /**
     * @var string 聚鑫内部渠道订单号
     */
    public $ChannelOrderId;

    /**
     * @var array 调用下单接口传进来的 SubOutTradeNoList
     */
    public $SubOrderList;

    /**
     * @var string 支付机构订单号
     */
    public $ChannelExternalOrderId;

    /**
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param integer $Amt 支付金额，单位：分
     * @param string $UserId 用户Id
     * @param string $CashAmt 现金支付金额
     * @param string $Metadata 发货标识，由业务在调用聚鑫下单 接口的时候下发
     * @param string $PayTime 支付时间unix时间戳
     * @param string $CouponAmt 抵扣券金额
     * @param string $OrderTime 下单时间unix时间戳
     * @param string $ProductId 物品id
     * @param string $SceneInfo 高速场景信息
     * @param string $OrderState 当前订单的订单状态 
0：初始状态，获取聚鑫交易订单成功；  
1：拉起聚鑫支付页面成功，用户未 支付；
2：用户支付成功，正在发货；
3：用户支付成功，发货失败；
4：用户支付成功，发货成功；
5：聚鑫支付页面正在失效中；
6：聚鑫支付页面已经失效；
     * @param string $Channel 支付渠道：wechat：微信支付;
qqwallet：QQ钱包;
bank：网银
     * @param string $RefundFlag 是否曾退款
     * @param string $OutTradeNo 务支付订单号
     * @param string $ProductName 商品名称
     * @param string $CallBackTime 支付回调时间，unix时间戳
     * @param string $CurrencyType ISO 货币代码，CNY
     * @param string $AcctSubAppId 微校场景账户Id
     * @param string $TransactionId 调用下单接口获取的聚鑫交易订单
     * @param string $ChannelOrderId 聚鑫内部渠道订单号
     * @param array $SubOrderList 调用下单接口传进来的 SubOutTradeNoList
     * @param string $ChannelExternalOrderId 支付机构订单号
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

        if (array_key_exists("Amt",$param) and $param["Amt"] !== null) {
            $this->Amt = $param["Amt"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("CashAmt",$param) and $param["CashAmt"] !== null) {
            $this->CashAmt = $param["CashAmt"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("CouponAmt",$param) and $param["CouponAmt"] !== null) {
            $this->CouponAmt = $param["CouponAmt"];
        }

        if (array_key_exists("OrderTime",$param) and $param["OrderTime"] !== null) {
            $this->OrderTime = $param["OrderTime"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("SceneInfo",$param) and $param["SceneInfo"] !== null) {
            $this->SceneInfo = $param["SceneInfo"];
        }

        if (array_key_exists("OrderState",$param) and $param["OrderState"] !== null) {
            $this->OrderState = $param["OrderState"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("RefundFlag",$param) and $param["RefundFlag"] !== null) {
            $this->RefundFlag = $param["RefundFlag"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("CallBackTime",$param) and $param["CallBackTime"] !== null) {
            $this->CallBackTime = $param["CallBackTime"];
        }

        if (array_key_exists("CurrencyType",$param) and $param["CurrencyType"] !== null) {
            $this->CurrencyType = $param["CurrencyType"];
        }

        if (array_key_exists("AcctSubAppId",$param) and $param["AcctSubAppId"] !== null) {
            $this->AcctSubAppId = $param["AcctSubAppId"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("SubOrderList",$param) and $param["SubOrderList"] !== null) {
            $this->SubOrderList = [];
            foreach ($param["SubOrderList"] as $key => $value){
                $obj = new QueryOrderOutSubOrderList();
                $obj->deserialize($value);
                array_push($this->SubOrderList, $obj);
            }
        }

        if (array_key_exists("ChannelExternalOrderId",$param) and $param["ChannelExternalOrderId"] !== null) {
            $this->ChannelExternalOrderId = $param["ChannelExternalOrderId"];
        }
    }
}
