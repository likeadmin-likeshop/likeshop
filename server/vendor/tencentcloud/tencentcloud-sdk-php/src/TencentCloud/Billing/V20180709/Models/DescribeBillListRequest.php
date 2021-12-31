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
 * DescribeBillList请求参数结构体
 *
 * @method string getStartTime() 获取查询范围的起始时间（包含）
 * @method void setStartTime(string $StartTime) 设置查询范围的起始时间（包含）
 * @method string getEndTime() 获取查询范围的结束时间（包含）
 * @method void setEndTime(string $EndTime) 设置查询范围的结束时间（包含）
 * @method integer getOffset() 获取翻页偏移量，初始值为0
 * @method void setOffset(integer $Offset) 设置翻页偏移量，初始值为0
 * @method integer getLimit() 获取每页的限制数量
 * @method void setLimit(integer $Limit) 设置每页的限制数量
 * @method array getPayType() 获取交易类型： all所有交易类型，recharge充值，return退款，unblock解冻，agentin资金转入，advanced垫付，cash提现，deduct扣费，block冻结，agentout资金转出，repay垫付回款，repayment还款(仅国际信用账户)，adj_refund调增(仅国际信用账户)，adj_deduct调减(仅国际信用账户)
 * @method void setPayType(array $PayType) 设置交易类型： all所有交易类型，recharge充值，return退款，unblock解冻，agentin资金转入，advanced垫付，cash提现，deduct扣费，block冻结，agentout资金转出，repay垫付回款，repayment还款(仅国际信用账户)，adj_refund调增(仅国际信用账户)，adj_deduct调减(仅国际信用账户)
 * @method array getSubPayType() 获取扣费模式，当所选的交易类型中包含扣费deduct时有意义： all所有扣费类型，trade预付费支付，hour_h按量小时结，hour_d按量日结，hour_m按量月结，decompensate调账扣费，other其他扣费
 * @method void setSubPayType(array $SubPayType) 设置扣费模式，当所选的交易类型中包含扣费deduct时有意义： all所有扣费类型，trade预付费支付，hour_h按量小时结，hour_d按量日结，hour_m按量月结，decompensate调账扣费，other其他扣费
 * @method integer getWithZeroAmount() 获取是否返回0元交易金额的交易项，取值：0-不返回，1-返回。不传该参数则不返回
 * @method void setWithZeroAmount(integer $WithZeroAmount) 设置是否返回0元交易金额的交易项，取值：0-不返回，1-返回。不传该参数则不返回
 */
class DescribeBillListRequest extends AbstractModel
{
    /**
     * @var string 查询范围的起始时间（包含）
     */
    public $StartTime;

    /**
     * @var string 查询范围的结束时间（包含）
     */
    public $EndTime;

    /**
     * @var integer 翻页偏移量，初始值为0
     */
    public $Offset;

    /**
     * @var integer 每页的限制数量
     */
    public $Limit;

    /**
     * @var array 交易类型： all所有交易类型，recharge充值，return退款，unblock解冻，agentin资金转入，advanced垫付，cash提现，deduct扣费，block冻结，agentout资金转出，repay垫付回款，repayment还款(仅国际信用账户)，adj_refund调增(仅国际信用账户)，adj_deduct调减(仅国际信用账户)
     */
    public $PayType;

    /**
     * @var array 扣费模式，当所选的交易类型中包含扣费deduct时有意义： all所有扣费类型，trade预付费支付，hour_h按量小时结，hour_d按量日结，hour_m按量月结，decompensate调账扣费，other其他扣费
     */
    public $SubPayType;

    /**
     * @var integer 是否返回0元交易金额的交易项，取值：0-不返回，1-返回。不传该参数则不返回
     */
    public $WithZeroAmount;

    /**
     * @param string $StartTime 查询范围的起始时间（包含）
     * @param string $EndTime 查询范围的结束时间（包含）
     * @param integer $Offset 翻页偏移量，初始值为0
     * @param integer $Limit 每页的限制数量
     * @param array $PayType 交易类型： all所有交易类型，recharge充值，return退款，unblock解冻，agentin资金转入，advanced垫付，cash提现，deduct扣费，block冻结，agentout资金转出，repay垫付回款，repayment还款(仅国际信用账户)，adj_refund调增(仅国际信用账户)，adj_deduct调减(仅国际信用账户)
     * @param array $SubPayType 扣费模式，当所选的交易类型中包含扣费deduct时有意义： all所有扣费类型，trade预付费支付，hour_h按量小时结，hour_d按量日结，hour_m按量月结，decompensate调账扣费，other其他扣费
     * @param integer $WithZeroAmount 是否返回0元交易金额的交易项，取值：0-不返回，1-返回。不传该参数则不返回
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("SubPayType",$param) and $param["SubPayType"] !== null) {
            $this->SubPayType = $param["SubPayType"];
        }

        if (array_key_exists("WithZeroAmount",$param) and $param["WithZeroAmount"] !== null) {
            $this->WithZeroAmount = $param["WithZeroAmount"];
        }
    }
}
