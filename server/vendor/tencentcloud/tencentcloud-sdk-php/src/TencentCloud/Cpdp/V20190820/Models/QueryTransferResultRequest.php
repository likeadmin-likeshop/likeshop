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
 * QueryTransferResult请求参数结构体
 *
 * @method string getMerchantId() 获取商户号
 * @method void setMerchantId(string $MerchantId) 设置商户号
 * @method string getMerchantAppId() 获取申请商户号的appid或者商户号绑定的appid
 * @method void setMerchantAppId(string $MerchantAppId) 设置申请商户号的appid或者商户号绑定的appid
 * @method integer getTransferType() 获取1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
 * @method void setTransferType(integer $TransferType) 设置1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
 * @method string getTradeSerialNo() 获取交易流水流水号（与 OrderId 不能同时为空）
 * @method void setTradeSerialNo(string $TradeSerialNo) 设置交易流水流水号（与 OrderId 不能同时为空）
 * @method string getOrderId() 获取订单号（与 TradeSerialNo 不能同时为空）
 * @method void setOrderId(string $OrderId) 设置订单号（与 TradeSerialNo 不能同时为空）
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox。
 */
class QueryTransferResultRequest extends AbstractModel
{
    /**
     * @var string 商户号
     */
    public $MerchantId;

    /**
     * @var string 申请商户号的appid或者商户号绑定的appid
     */
    public $MerchantAppId;

    /**
     * @var integer 1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
     */
    public $TransferType;

    /**
     * @var string 交易流水流水号（与 OrderId 不能同时为空）
     */
    public $TradeSerialNo;

    /**
     * @var string 订单号（与 TradeSerialNo 不能同时为空）
     */
    public $OrderId;

    /**
     * @var string 接入环境。沙箱环境填sandbox。
     */
    public $Profile;

    /**
     * @param string $MerchantId 商户号
     * @param string $MerchantAppId 申请商户号的appid或者商户号绑定的appid
     * @param integer $TransferType 1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
     * @param string $TradeSerialNo 交易流水流水号（与 OrderId 不能同时为空）
     * @param string $OrderId 订单号（与 TradeSerialNo 不能同时为空）
     * @param string $Profile 接入环境。沙箱环境填sandbox。
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

        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }

        if (array_key_exists("TransferType",$param) and $param["TransferType"] !== null) {
            $this->TransferType = $param["TransferType"];
        }

        if (array_key_exists("TradeSerialNo",$param) and $param["TradeSerialNo"] !== null) {
            $this->TradeSerialNo = $param["TradeSerialNo"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
