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
 * 提交贸易材料结果
 *
 * @method string getMerchantId() 获取商户号
 * @method void setMerchantId(string $MerchantId) 设置商户号
 * @method string getTradeFileId() 获取贸易材料流水号
 * @method void setTradeFileId(string $TradeFileId) 设置贸易材料流水号
 * @method string getTradeCurrency() 获取交易币种
 * @method void setTradeCurrency(string $TradeCurrency) 设置交易币种
 * @method string getTradeAmount() 获取交易金额
 * @method void setTradeAmount(string $TradeAmount) 设置交易金额
 * @method string getPayerId() 获取付款人ID
 * @method void setPayerId(string $PayerId) 设置付款人ID
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 */
class ApplyTradeData extends AbstractModel
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
     * @var string 交易币种
     */
    public $TradeCurrency;

    /**
     * @var string 交易金额
     */
    public $TradeAmount;

    /**
     * @var string 付款人ID
     */
    public $PayerId;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @param string $MerchantId 商户号
     * @param string $TradeFileId 贸易材料流水号
     * @param string $TradeCurrency 交易币种
     * @param string $TradeAmount 交易金额
     * @param string $PayerId 付款人ID
     * @param string $Status 状态
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

        if (array_key_exists("TradeCurrency",$param) and $param["TradeCurrency"] !== null) {
            $this->TradeCurrency = $param["TradeCurrency"];
        }

        if (array_key_exists("TradeAmount",$param) and $param["TradeAmount"] !== null) {
            $this->TradeAmount = $param["TradeAmount"];
        }

        if (array_key_exists("PayerId",$param) and $param["PayerId"] !== null) {
            $this->PayerId = $param["PayerId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
