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
 * 退款子订单列表
 *
 * @method integer getPlatformRefundAmt() 获取平台应退金额
 * @method void setPlatformRefundAmt(integer $PlatformRefundAmt) 设置平台应退金额
 * @method integer getRefundAmt() 获取子订单退款金额
 * @method void setRefundAmt(integer $RefundAmt) 设置子订单退款金额
 * @method integer getSubMchRefundAmt() 获取商家应退金额
 * @method void setSubMchRefundAmt(integer $SubMchRefundAmt) 设置商家应退金额
 * @method string getSubOutTradeNo() 获取子订单号
 * @method void setSubOutTradeNo(string $SubOutTradeNo) 设置子订单号
 * @method string getSubRefundId() 获取子退款单号，调用方需要保证 全局唯一性
 * @method void setSubRefundId(string $SubRefundId) 设置子退款单号，调用方需要保证 全局唯一性
 */
class RefundOutSubOrderRefundList extends AbstractModel
{
    /**
     * @var integer 平台应退金额
     */
    public $PlatformRefundAmt;

    /**
     * @var integer 子订单退款金额
     */
    public $RefundAmt;

    /**
     * @var integer 商家应退金额
     */
    public $SubMchRefundAmt;

    /**
     * @var string 子订单号
     */
    public $SubOutTradeNo;

    /**
     * @var string 子退款单号，调用方需要保证 全局唯一性
     */
    public $SubRefundId;

    /**
     * @param integer $PlatformRefundAmt 平台应退金额
     * @param integer $RefundAmt 子订单退款金额
     * @param integer $SubMchRefundAmt 商家应退金额
     * @param string $SubOutTradeNo 子订单号
     * @param string $SubRefundId 子退款单号，调用方需要保证 全局唯一性
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
        if (array_key_exists("PlatformRefundAmt",$param) and $param["PlatformRefundAmt"] !== null) {
            $this->PlatformRefundAmt = $param["PlatformRefundAmt"];
        }

        if (array_key_exists("RefundAmt",$param) and $param["RefundAmt"] !== null) {
            $this->RefundAmt = $param["RefundAmt"];
        }

        if (array_key_exists("SubMchRefundAmt",$param) and $param["SubMchRefundAmt"] !== null) {
            $this->SubMchRefundAmt = $param["SubMchRefundAmt"];
        }

        if (array_key_exists("SubOutTradeNo",$param) and $param["SubOutTradeNo"] !== null) {
            $this->SubOutTradeNo = $param["SubOutTradeNo"];
        }

        if (array_key_exists("SubRefundId",$param) and $param["SubRefundId"] !== null) {
            $this->SubRefundId = $param["SubRefundId"];
        }
    }
}
