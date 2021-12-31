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
 * 贸易材料明细查询数据
 *
 * @method string getMerchantId() 获取商户号
 * @method void setMerchantId(string $MerchantId) 设置商户号
 * @method string getTradeFileId() 获取贸易材料流水号
 * @method void setTradeFileId(string $TradeFileId) 设置贸易材料流水号
 * @method string getTradeOrderId() 获取贸易材料订单号
 * @method void setTradeOrderId(string $TradeOrderId) 设置贸易材料订单号
 * @method string getStatus() 获取审核状态
 * @method void setStatus(string $Status) 设置审核状态
 * @method string getFailReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayerId() 获取付款人ID
 * @method void setPayerId(string $PayerId) 设置付款人ID
 * @method string getPayeeName() 获取收款人姓名
 * @method void setPayeeName(string $PayeeName) 设置收款人姓名
 * @method string getPayeeCountryCode() 获取收款人常驻国家或地区编码
 * @method void setPayeeCountryCode(string $PayeeCountryCode) 设置收款人常驻国家或地区编码
 * @method string getTradeType() 获取交易类型
 * @method void setTradeType(string $TradeType) 设置交易类型
 * @method string getTradeTime() 获取交易日期
 * @method void setTradeTime(string $TradeTime) 设置交易日期
 * @method string getTradeCurrency() 获取交易币种
 * @method void setTradeCurrency(string $TradeCurrency) 设置交易币种
 * @method string getTradeAmount() 获取交易金额
 * @method void setTradeAmount(string $TradeAmount) 设置交易金额
 * @method string getTradeName() 获取交易名称
 * @method void setTradeName(string $TradeName) 设置交易名称
 * @method integer getTradeCount() 获取交易数量
 * @method void setTradeCount(integer $TradeCount) 设置交易数量
 * @method string getGoodsCarrier() 获取货贸承运人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsCarrier(string $GoodsCarrier) 设置货贸承运人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceDetail() 获取服贸交易细节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDetail(string $ServiceDetail) 设置服贸交易细节
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceTime() 获取服贸服务时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceTime(string $ServiceTime) 设置服贸服务时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryTradeData extends AbstractModel
{
    /**
     * @var string 商户号
     */
    public $MerchantId;

    /**
     * @var string 贸易材料流水号
     */
    public $TradeFileId;

    /**
     * @var string 贸易材料订单号
     */
    public $TradeOrderId;

    /**
     * @var string 审核状态
     */
    public $Status;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var string 付款人ID
     */
    public $PayerId;

    /**
     * @var string 收款人姓名
     */
    public $PayeeName;

    /**
     * @var string 收款人常驻国家或地区编码
     */
    public $PayeeCountryCode;

    /**
     * @var string 交易类型
     */
    public $TradeType;

    /**
     * @var string 交易日期
     */
    public $TradeTime;

    /**
     * @var string 交易币种
     */
    public $TradeCurrency;

    /**
     * @var string 交易金额
     */
    public $TradeAmount;

    /**
     * @var string 交易名称
     */
    public $TradeName;

    /**
     * @var integer 交易数量
     */
    public $TradeCount;

    /**
     * @var string 货贸承运人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsCarrier;

    /**
     * @var string 服贸交易细节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDetail;

    /**
     * @var string 服贸服务时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceTime;

    /**
     * @param string $MerchantId 商户号
     * @param string $TradeFileId 贸易材料流水号
     * @param string $TradeOrderId 贸易材料订单号
     * @param string $Status 审核状态
     * @param string $FailReason 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayerId 付款人ID
     * @param string $PayeeName 收款人姓名
     * @param string $PayeeCountryCode 收款人常驻国家或地区编码
     * @param string $TradeType 交易类型
     * @param string $TradeTime 交易日期
     * @param string $TradeCurrency 交易币种
     * @param string $TradeAmount 交易金额
     * @param string $TradeName 交易名称
     * @param integer $TradeCount 交易数量
     * @param string $GoodsCarrier 货贸承运人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceDetail 服贸交易细节
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceTime 服贸服务时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("TradeFileId",$param) and $param["TradeFileId"] !== null) {
            $this->TradeFileId = $param["TradeFileId"];
        }

        if (array_key_exists("TradeOrderId",$param) and $param["TradeOrderId"] !== null) {
            $this->TradeOrderId = $param["TradeOrderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
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
    }
}
