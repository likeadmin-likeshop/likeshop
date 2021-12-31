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
 * 收支明细的流水信息
 *
 * @method string getActionType() 获取收支类型：deduct 扣费, recharge 充值, return 退费， block 冻结, unblock 解冻
 * @method void setActionType(string $ActionType) 设置收支类型：deduct 扣费, recharge 充值, return 退费， block 冻结, unblock 解冻
 * @method integer getAmount() 获取流水金额，单位（分）；正数表示入账，负数表示出账
 * @method void setAmount(integer $Amount) 设置流水金额，单位（分）；正数表示入账，负数表示出账
 * @method integer getBalance() 获取可用余额，单位（分）；正数表示入账，负数表示出账
 * @method void setBalance(integer $Balance) 设置可用余额，单位（分）；正数表示入账，负数表示出账
 * @method string getBillId() 获取流水号，如20190131020000236005203583326401
 * @method void setBillId(string $BillId) 设置流水号，如20190131020000236005203583326401
 * @method string getOperationInfo() 获取描述信息
 * @method void setOperationInfo(string $OperationInfo) 设置描述信息
 * @method string getOperationTime() 获取操作时间"2019-01-31 23:35:10.000"
 * @method void setOperationTime(string $OperationTime) 设置操作时间"2019-01-31 23:35:10.000"
 * @method integer getCash() 获取现金账户余额，单位（分）
 * @method void setCash(integer $Cash) 设置现金账户余额，单位（分）
 * @method integer getIncentive() 获取赠送金余额，单位（分）
 * @method void setIncentive(integer $Incentive) 设置赠送金余额，单位（分）
 * @method integer getFreezing() 获取冻结余额，单位（分）
 * @method void setFreezing(integer $Freezing) 设置冻结余额，单位（分）
 * @method string getPayChannel() 获取交易渠道
 * @method void setPayChannel(string $PayChannel) 设置交易渠道
 * @method string getDeductMode() 获取扣费模式：trade 包年包月(预付费)，hourh  按量-小时结，hourd 按量-日结，hourm 按量-月结，month 按量-月结
 * @method void setDeductMode(string $DeductMode) 设置扣费模式：trade 包年包月(预付费)，hourh  按量-小时结，hourd 按量-日结，hourm 按量-月结，month 按量-月结
 */
class BillTransactionInfo extends AbstractModel
{
    /**
     * @var string 收支类型：deduct 扣费, recharge 充值, return 退费， block 冻结, unblock 解冻
     */
    public $ActionType;

    /**
     * @var integer 流水金额，单位（分）；正数表示入账，负数表示出账
     */
    public $Amount;

    /**
     * @var integer 可用余额，单位（分）；正数表示入账，负数表示出账
     */
    public $Balance;

    /**
     * @var string 流水号，如20190131020000236005203583326401
     */
    public $BillId;

    /**
     * @var string 描述信息
     */
    public $OperationInfo;

    /**
     * @var string 操作时间"2019-01-31 23:35:10.000"
     */
    public $OperationTime;

    /**
     * @var integer 现金账户余额，单位（分）
     */
    public $Cash;

    /**
     * @var integer 赠送金余额，单位（分）
     */
    public $Incentive;

    /**
     * @var integer 冻结余额，单位（分）
     */
    public $Freezing;

    /**
     * @var string 交易渠道
     */
    public $PayChannel;

    /**
     * @var string 扣费模式：trade 包年包月(预付费)，hourh  按量-小时结，hourd 按量-日结，hourm 按量-月结，month 按量-月结
     */
    public $DeductMode;

    /**
     * @param string $ActionType 收支类型：deduct 扣费, recharge 充值, return 退费， block 冻结, unblock 解冻
     * @param integer $Amount 流水金额，单位（分）；正数表示入账，负数表示出账
     * @param integer $Balance 可用余额，单位（分）；正数表示入账，负数表示出账
     * @param string $BillId 流水号，如20190131020000236005203583326401
     * @param string $OperationInfo 描述信息
     * @param string $OperationTime 操作时间"2019-01-31 23:35:10.000"
     * @param integer $Cash 现金账户余额，单位（分）
     * @param integer $Incentive 赠送金余额，单位（分）
     * @param integer $Freezing 冻结余额，单位（分）
     * @param string $PayChannel 交易渠道
     * @param string $DeductMode 扣费模式：trade 包年包月(预付费)，hourh  按量-小时结，hourd 按量-日结，hourm 按量-月结，month 按量-月结
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("OperationInfo",$param) and $param["OperationInfo"] !== null) {
            $this->OperationInfo = $param["OperationInfo"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }

        if (array_key_exists("Cash",$param) and $param["Cash"] !== null) {
            $this->Cash = $param["Cash"];
        }

        if (array_key_exists("Incentive",$param) and $param["Incentive"] !== null) {
            $this->Incentive = $param["Incentive"];
        }

        if (array_key_exists("Freezing",$param) and $param["Freezing"] !== null) {
            $this->Freezing = $param["Freezing"];
        }

        if (array_key_exists("PayChannel",$param) and $param["PayChannel"] !== null) {
            $this->PayChannel = $param["PayChannel"];
        }

        if (array_key_exists("DeductMode",$param) and $param["DeductMode"] !== null) {
            $this->DeductMode = $param["DeductMode"];
        }
    }
}
