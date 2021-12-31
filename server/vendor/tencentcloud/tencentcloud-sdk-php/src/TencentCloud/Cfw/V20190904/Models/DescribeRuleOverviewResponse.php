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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuleOverview返回参数结构体
 *
 * @method integer getAllTotal() 获取规则总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllTotal(integer $AllTotal) 设置规则总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategyNum() 获取阻断策略规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyNum(integer $StrategyNum) 设置阻断策略规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartRuleNum() 获取启用规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartRuleNum(integer $StartRuleNum) 设置启用规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStopRuleNum() 获取停用规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopRuleNum(integer $StopRuleNum) 设置停用规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemainingNum() 获取剩余配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemainingNum(integer $RemainingNum) 设置剩余配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRuleOverviewResponse extends AbstractModel
{
    /**
     * @var integer 规则总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllTotal;

    /**
     * @var integer 阻断策略规则数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyNum;

    /**
     * @var integer 启用规则数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartRuleNum;

    /**
     * @var integer 停用规则数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopRuleNum;

    /**
     * @var integer 剩余配额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemainingNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AllTotal 规则总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StrategyNum 阻断策略规则数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartRuleNum 启用规则数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StopRuleNum 停用规则数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemainingNum 剩余配额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("StrategyNum",$param) and $param["StrategyNum"] !== null) {
            $this->StrategyNum = $param["StrategyNum"];
        }

        if (array_key_exists("StartRuleNum",$param) and $param["StartRuleNum"] !== null) {
            $this->StartRuleNum = $param["StartRuleNum"];
        }

        if (array_key_exists("StopRuleNum",$param) and $param["StopRuleNum"] !== null) {
            $this->StopRuleNum = $param["StopRuleNum"];
        }

        if (array_key_exists("RemainingNum",$param) and $param["RemainingNum"] !== null) {
            $this->RemainingNum = $param["RemainingNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
