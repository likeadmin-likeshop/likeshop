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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户流水
 *
 * @method integer getAccountType() 获取账户类型：1-设备接入 2-云存。
 * @method void setAccountType(integer $AccountType) 设置账户类型：1-设备接入 2-云存。
 * @method string getOperation() 获取账户变更类型：Rechareg-充值；CreateOrder-新购。
 * @method void setOperation(string $Operation) 设置账户变更类型：Rechareg-充值；CreateOrder-新购。
 * @method string getDealId() 获取流水ID。
 * @method void setDealId(string $DealId) 设置流水ID。
 * @method integer getAmount() 获取变更金额，单位：分（人民币）。
 * @method void setAmount(integer $Amount) 设置变更金额，单位：分（人民币）。
 * @method integer getBalance() 获取变更后账户余额，单位：分（人民币）。
 * @method void setBalance(integer $Balance) 设置变更后账户余额，单位：分（人民币）。
 * @method integer getOperationTime() 获取变更时间。
 * @method void setOperationTime(integer $OperationTime) 设置变更时间。
 */
class BalanceTransaction extends AbstractModel
{
    /**
     * @var integer 账户类型：1-设备接入 2-云存。
     */
    public $AccountType;

    /**
     * @var string 账户变更类型：Rechareg-充值；CreateOrder-新购。
     */
    public $Operation;

    /**
     * @var string 流水ID。
     */
    public $DealId;

    /**
     * @var integer 变更金额，单位：分（人民币）。
     */
    public $Amount;

    /**
     * @var integer 变更后账户余额，单位：分（人民币）。
     */
    public $Balance;

    /**
     * @var integer 变更时间。
     */
    public $OperationTime;

    /**
     * @param integer $AccountType 账户类型：1-设备接入 2-云存。
     * @param string $Operation 账户变更类型：Rechareg-充值；CreateOrder-新购。
     * @param string $DealId 流水ID。
     * @param integer $Amount 变更金额，单位：分（人民币）。
     * @param integer $Balance 变更后账户余额，单位：分（人民币）。
     * @param integer $OperationTime 变更时间。
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
        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("DealId",$param) and $param["DealId"] !== null) {
            $this->DealId = $param["DealId"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }
    }
}
