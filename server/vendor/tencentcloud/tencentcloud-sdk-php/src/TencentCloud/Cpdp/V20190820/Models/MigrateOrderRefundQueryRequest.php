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
 * MigrateOrderRefundQuery请求参数结构体
 *
 * @method string getMerchantId() 获取商户号
 * @method void setMerchantId(string $MerchantId) 设置商户号
 * @method string getPayChannel() 获取支付渠道，ALIPAY对应支付宝渠道；UNIONPAY对应银联渠道
 * @method void setPayChannel(string $PayChannel) 设置支付渠道，ALIPAY对应支付宝渠道；UNIONPAY对应银联渠道
 * @method string getRefundOrderId() 获取退款订单号，最长64位，仅支持数字、 字母
 * @method void setRefundOrderId(string $RefundOrderId) 设置退款订单号，最长64位，仅支持数字、 字母
 * @method string getTradeSerialNo() 获取退款流水号
 * @method void setTradeSerialNo(string $TradeSerialNo) 设置退款流水号
 * @method string getProfile() 获取接入环境。沙箱环境填 sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填 sandbox。
 */
class MigrateOrderRefundQueryRequest extends AbstractModel
{
    /**
     * @var string 商户号
     */
    public $MerchantId;

    /**
     * @var string 支付渠道，ALIPAY对应支付宝渠道；UNIONPAY对应银联渠道
     */
    public $PayChannel;

    /**
     * @var string 退款订单号，最长64位，仅支持数字、 字母
     */
    public $RefundOrderId;

    /**
     * @var string 退款流水号
     */
    public $TradeSerialNo;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。
     */
    public $Profile;

    /**
     * @param string $MerchantId 商户号
     * @param string $PayChannel 支付渠道，ALIPAY对应支付宝渠道；UNIONPAY对应银联渠道
     * @param string $RefundOrderId 退款订单号，最长64位，仅支持数字、 字母
     * @param string $TradeSerialNo 退款流水号
     * @param string $Profile 接入环境。沙箱环境填 sandbox。
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

        if (array_key_exists("PayChannel",$param) and $param["PayChannel"] !== null) {
            $this->PayChannel = $param["PayChannel"];
        }

        if (array_key_exists("RefundOrderId",$param) and $param["RefundOrderId"] !== null) {
            $this->RefundOrderId = $param["RefundOrderId"];
        }

        if (array_key_exists("TradeSerialNo",$param) and $param["TradeSerialNo"] !== null) {
            $this->TradeSerialNo = $param["TradeSerialNo"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
