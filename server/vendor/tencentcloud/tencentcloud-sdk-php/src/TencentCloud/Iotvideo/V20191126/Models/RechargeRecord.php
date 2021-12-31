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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 充值记录列表
 *
 * @method integer getWaterId() 获取流水记录号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaterId(integer $WaterId) 设置流水记录号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBalanceBeforeRecharge() 获取充值前的余额，单位0.01元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBalanceBeforeRecharge(integer $BalanceBeforeRecharge) 设置充值前的余额，单位0.01元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMoney() 获取充值金额，单位0.01元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMoney(integer $Money) 设置充值金额，单位0.01元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperateTime() 获取充值时间, UTC值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateTime(integer $OperateTime) 设置充值时间, UTC值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RechargeRecord extends AbstractModel
{
    /**
     * @var integer 流水记录号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaterId;

    /**
     * @var integer 充值前的余额，单位0.01元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BalanceBeforeRecharge;

    /**
     * @var integer 充值金额，单位0.01元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Money;

    /**
     * @var integer 充值时间, UTC值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateTime;

    /**
     * @param integer $WaterId 流水记录号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BalanceBeforeRecharge 充值前的余额，单位0.01元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Money 充值金额，单位0.01元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperateTime 充值时间, UTC值。
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
        if (array_key_exists("WaterId",$param) and $param["WaterId"] !== null) {
            $this->WaterId = $param["WaterId"];
        }

        if (array_key_exists("BalanceBeforeRecharge",$param) and $param["BalanceBeforeRecharge"] !== null) {
            $this->BalanceBeforeRecharge = $param["BalanceBeforeRecharge"];
        }

        if (array_key_exists("Money",$param) and $param["Money"] !== null) {
            $this->Money = $param["Money"];
        }

        if (array_key_exists("OperateTime",$param) and $param["OperateTime"] !== null) {
            $this->OperateTime = $param["OperateTime"];
        }
    }
}
