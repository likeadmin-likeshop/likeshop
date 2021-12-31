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
 * ApplyTrade请求参数结构体
 *
 * @method string getTradeFileId() 获取贸易材料流水号
 * @method void setTradeFileId(string $TradeFileId) 设置贸易材料流水号
 * @method string getTradeOrderId() 获取贸易材料订单号
 * @method void setTradeOrderId(string $TradeOrderId) 设置贸易材料订单号
 * @method string getPayerId() 获取付款人ID
 * @method void setPayerId(string $PayerId) 设置付款人ID
 * @method string getPayeeName() 获取收款人姓名
 * @method void setPayeeName(string $PayeeName) 设置收款人姓名
 * @method string getPayeeCountryCode() 获取收款人常驻国家或地区编码 (见常见问题)
 * @method void setPayeeCountryCode(string $PayeeCountryCode) 设置收款人常驻国家或地区编码 (见常见问题)
 * @method string getTradeType() 获取贸易类型 (GOODS: 商品, SERVICE: 服务)
 * @method void setTradeType(string $TradeType) 设置贸易类型 (GOODS: 商品, SERVICE: 服务)
 * @method string getTradeTime() 获取交易时间 (格式: yyyyMMdd)
 * @method void setTradeTime(string $TradeTime) 设置交易时间 (格式: yyyyMMdd)
 * @method string getTradeCurrency() 获取交易币种
 * @method void setTradeCurrency(string $TradeCurrency) 设置交易币种
 * @method float getTradeAmount() 获取交易金额
 * @method void setTradeAmount(float $TradeAmount) 设置交易金额
 * @method string getTradeName() 获取交易名称 
(TradeType=GOODS时填写物品名称，可填写多个，格式无要求；
TradeType=SERVICE时填写贸易类别，见常见问题-贸易类别)
 * @method void setTradeName(string $TradeName) 设置交易名称 
(TradeType=GOODS时填写物品名称，可填写多个，格式无要求；
TradeType=SERVICE时填写贸易类别，见常见问题-贸易类别)
 * @method integer getTradeCount() 获取交易数量 (TradeType=GOODS 填写物品数量, TradeType=SERVICE填写服务次数)
 * @method void setTradeCount(integer $TradeCount) 设置交易数量 (TradeType=GOODS 填写物品数量, TradeType=SERVICE填写服务次数)
 * @method string getGoodsCarrier() 获取货贸承运人 (TradeType=GOODS 必填)
 * @method void setGoodsCarrier(string $GoodsCarrier) 设置货贸承运人 (TradeType=GOODS 必填)
 * @method string getServiceDetail() 获取服贸交易细节 (TradeType=GOODS 必填, 见常见问题-交易细节)
 * @method void setServiceDetail(string $ServiceDetail) 设置服贸交易细节 (TradeType=GOODS 必填, 见常见问题-交易细节)
 * @method string getServiceTime() 获取服贸服务时间 (TradeType=GOODS 必填, 见常见问题-服务时间)
 * @method void setServiceTime(string $ServiceTime) 设置服贸服务时间 (TradeType=GOODS 必填, 见常见问题-服务时间)
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox
 */
class ApplyTradeRequest extends AbstractModel
{
    /**
     * @var string 贸易材料流水号
     */
    public $TradeFileId;

    /**
     * @var string 贸易材料订单号
     */
    public $TradeOrderId;

    /**
     * @var string 付款人ID
     */
    public $PayerId;

    /**
     * @var string 收款人姓名
     */
    public $PayeeName;

    /**
     * @var string 收款人常驻国家或地区编码 (见常见问题)
     */
    public $PayeeCountryCode;

    /**
     * @var string 贸易类型 (GOODS: 商品, SERVICE: 服务)
     */
    public $TradeType;

    /**
     * @var string 交易时间 (格式: yyyyMMdd)
     */
    public $TradeTime;

    /**
     * @var string 交易币种
     */
    public $TradeCurrency;

    /**
     * @var float 交易金额
     */
    public $TradeAmount;

    /**
     * @var string 交易名称 
(TradeType=GOODS时填写物品名称，可填写多个，格式无要求；
TradeType=SERVICE时填写贸易类别，见常见问题-贸易类别)
     */
    public $TradeName;

    /**
     * @var integer 交易数量 (TradeType=GOODS 填写物品数量, TradeType=SERVICE填写服务次数)
     */
    public $TradeCount;

    /**
     * @var string 货贸承运人 (TradeType=GOODS 必填)
     */
    public $GoodsCarrier;

    /**
     * @var string 服贸交易细节 (TradeType=GOODS 必填, 见常见问题-交易细节)
     */
    public $ServiceDetail;

    /**
     * @var string 服贸服务时间 (TradeType=GOODS 必填, 见常见问题-服务时间)
     */
    public $ServiceTime;

    /**
     * @var string 接入环境。沙箱环境填sandbox
     */
    public $Profile;

    /**
     * @param string $TradeFileId 贸易材料流水号
     * @param string $TradeOrderId 贸易材料订单号
     * @param string $PayerId 付款人ID
     * @param string $PayeeName 收款人姓名
     * @param string $PayeeCountryCode 收款人常驻国家或地区编码 (见常见问题)
     * @param string $TradeType 贸易类型 (GOODS: 商品, SERVICE: 服务)
     * @param string $TradeTime 交易时间 (格式: yyyyMMdd)
     * @param string $TradeCurrency 交易币种
     * @param float $TradeAmount 交易金额
     * @param string $TradeName 交易名称 
(TradeType=GOODS时填写物品名称，可填写多个，格式无要求；
TradeType=SERVICE时填写贸易类别，见常见问题-贸易类别)
     * @param integer $TradeCount 交易数量 (TradeType=GOODS 填写物品数量, TradeType=SERVICE填写服务次数)
     * @param string $GoodsCarrier 货贸承运人 (TradeType=GOODS 必填)
     * @param string $ServiceDetail 服贸交易细节 (TradeType=GOODS 必填, 见常见问题-交易细节)
     * @param string $ServiceTime 服贸服务时间 (TradeType=GOODS 必填, 见常见问题-服务时间)
     * @param string $Profile 接入环境。沙箱环境填sandbox
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
        if (array_key_exists("TradeFileId",$param) and $param["TradeFileId"] !== null) {
            $this->TradeFileId = $param["TradeFileId"];
        }

        if (array_key_exists("TradeOrderId",$param) and $param["TradeOrderId"] !== null) {
            $this->TradeOrderId = $param["TradeOrderId"];
        }

        if (array_key_exists("PayerId",$param) and $param["PayerId"] !== null) {
            $this->PayerId = $param["PayerId"];
        }

        if (array_key_exists("PayeeName",$param) and $param["PayeeName"] !== null) {
            $this->PayeeName = $param["PayeeName"];
        }

        if (array_key_exists("PayeeCountryCode",$param) and $param["PayeeCountryCode"] !== null) {
            $this->PayeeCountryCode = $param["PayeeCountryCode"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("TradeTime",$param) and $param["TradeTime"] !== null) {
            $this->TradeTime = $param["TradeTime"];
        }

        if (array_key_exists("TradeCurrency",$param) and $param["TradeCurrency"] !== null) {
            $this->TradeCurrency = $param["TradeCurrency"];
        }

        if (array_key_exists("TradeAmount",$param) and $param["TradeAmount"] !== null) {
            $this->TradeAmount = $param["TradeAmount"];
        }

        if (array_key_exists("TradeName",$param) and $param["TradeName"] !== null) {
            $this->TradeName = $param["TradeName"];
        }

        if (array_key_exists("TradeCount",$param) and $param["TradeCount"] !== null) {
            $this->TradeCount = $param["TradeCount"];
        }

        if (array_key_exists("GoodsCarrier",$param) and $param["GoodsCarrier"] !== null) {
            $this->GoodsCarrier = $param["GoodsCarrier"];
        }

        if (array_key_exists("ServiceDetail",$param) and $param["ServiceDetail"] !== null) {
            $this->ServiceDetail = $param["ServiceDetail"];
        }

        if (array_key_exists("ServiceTime",$param) and $param["ServiceTime"] !== null) {
            $this->ServiceTime = $param["ServiceTime"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
