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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按产品汇总总费用
 *
 * @method string getRealTotalCost() 获取总花费
 * @method void setRealTotalCost(string $RealTotalCost) 设置总花费
 * @method string getVoucherPayAmount() 获取代金券金额
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券金额
 * @method string getIncentivePayAmount() 获取赠送金金额
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送金金额
 * @method string getCashPayAmount() 获取现金金额
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金金额
 */
class BusinessSummaryTotal extends AbstractModel
{
    /**
     * @var string 总花费
     */
    public $RealTotalCost;

    /**
     * @var string 代金券金额
     */
    public $VoucherPayAmount;

    /**
     * @var string 赠送金金额
     */
    public $IncentivePayAmount;

    /**
     * @var string 现金金额
     */
    public $CashPayAmount;

    /**
     * @param string $RealTotalCost 总花费
     * @param string $VoucherPayAmount 代金券金额
     * @param string $IncentivePayAmount 赠送金金额
     * @param string $CashPayAmount 现金金额
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
        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }
    }
}
