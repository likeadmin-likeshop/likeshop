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
 * MigrateOrderRefund请求参数结构体
 *
 * @method string getMerchantId() 获取商户代码
 * @method void setMerchantId(string $MerchantId) 设置商户代码
 * @method string getPayChannel() 获取支付渠道，ALIPAY对应支付宝渠道；UNIONPAY对应银联渠道
 * @method void setPayChannel(string $PayChannel) 设置支付渠道，ALIPAY对应支付宝渠道；UNIONPAY对应银联渠道
 * @method string getPayOrderId() 获取正向支付商户订单号
 * @method void setPayOrderId(string $PayOrderId) 设置正向支付商户订单号
 * @method string getRefundOrderId() 获取退款订单号，最长64位，仅支持数字、 字母
 * @method void setRefundOrderId(string $RefundOrderId) 设置退款订单号，最长64位，仅支持数字、 字母
 * @method integer getRefundAmt() 获取退款金额，单位：分。备注：改字段必须大于0 和小于10000000000的整数。
 * @method void setRefundAmt(integer $RefundAmt) 设置退款金额，单位：分。备注：改字段必须大于0 和小于10000000000的整数。
 * @method string getThirdChannelOrderId() 获取第三方支付机构支付交易号
 * @method void setThirdChannelOrderId(string $ThirdChannelOrderId) 设置第三方支付机构支付交易号
 * @method integer getPayAmt() 获取原始支付金额，单位：分。备注：当该字段为空或者为0 时，系统会默认使用订单当 实付金额作为退款金额
 * @method void setPayAmt(integer $PayAmt) 设置原始支付金额，单位：分。备注：当该字段为空或者为0 时，系统会默认使用订单当 实付金额作为退款金额
 * @method string getProfile() 获取接入环境。沙箱环境填 sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填 sandbox。
 * @method string getRefundReason() 获取退款原因
 * @method void setRefundReason(string $RefundReason) 设置退款原因
 */
class MigrateOrderRefundRequest extends AbstractModel
{
    /**
     * @var string 商户代码
     */
    public $MerchantId;

    /**
     * @var string 支付渠道，ALIPAY对应支付宝渠道；UNIONPAY对应银联渠道
     */
    public $PayChannel;

    /**
     * @var string 正向支付商户订单号
     */
    public $PayOrderId;

    /**
     * @var string 退款订单号，最长64位，仅支持数字、 字母
     */
    public $RefundOrderId;

    /**
     * @var integer 退款金额，单位：分。备注：改字段必须大于0 和小于10000000000的整数。
     */
    public $RefundAmt;

    /**
     * @var string 第三方支付机构支付交易号
     */
    public $ThirdChannelOrderId;

    /**
     * @var integer 原始支付金额，单位：分。备注：当该字段为空或者为0 时，系统会默认使用订单当 实付金额作为退款金额
     */
    public $PayAmt;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。
     */
    public $Profile;

    /**
     * @var string 退款原因
     */
    public $RefundReason;

    /**
     * @param string $MerchantId 商户代码
     * @param string $PayChannel 支付渠道，ALIPAY对应支付宝渠道；UNIONPAY对应银联渠道
     * @param string $PayOrderId 正向支付商户订单号
     * @param string $RefundOrderId 退款订单号，最长64位，仅支持数字、 字母
     * @param integer $RefundAmt 退款金额，单位：分。备注：改字段必须大于0 和小于10000000000的整数。
     * @param string $ThirdChannelOrderId 第三方支付机构支付交易号
     * @param integer $PayAmt 原始支付金额，单位：分。备注：当该字段为空或者为0 时，系统会默认使用订单当 实付金额作为退款金额
     * @param string $Profile 接入环境。沙箱环境填 sandbox。
     * @param string $RefundReason 退款原因
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

        if (array_key_exists("PayOrderId",$param) and $param["PayOrderId"] !== null) {
            $this->PayOrderId = $param["PayOrderId"];
        }

        if (array_key_exists("RefundOrderId",$param) and $param["RefundOrderId"] !== null) {
            $this->RefundOrderId = $param["RefundOrderId"];
        }

        if (array_key_exists("RefundAmt",$param) and $param["RefundAmt"] !== null) {
            $this->RefundAmt = $param["RefundAmt"];
        }

        if (array_key_exists("ThirdChannelOrderId",$param) and $param["ThirdChannelOrderId"] !== null) {
            $this->ThirdChannelOrderId = $param["ThirdChannelOrderId"];
        }

        if (array_key_exists("PayAmt",$param) and $param["PayAmt"] !== null) {
            $this->PayAmt = $param["PayAmt"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("RefundReason",$param) and $param["RefundReason"] !== null) {
            $this->RefundReason = $param["RefundReason"];
        }
    }
}
