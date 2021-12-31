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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例扩展信息
 *
 * @method Instance getInstance() 获取实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstance(Instance $Instance) 设置实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHealthyProcessCnt() 获取健康进程数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthyProcessCnt(integer $HealthyProcessCnt) 设置健康进程数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActiveProcessCnt() 获取活跃进程数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveProcessCnt(integer $ActiveProcessCnt) 设置活跃进程数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGameSessionCnt() 获取当前游戏会话总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameSessionCnt(integer $GameSessionCnt) 设置当前游戏会话总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxGameSessionCnt() 获取最大游戏会话数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxGameSessionCnt(integer $MaxGameSessionCnt) 设置最大游戏会话数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPlayerSessionCnt() 获取当前玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayerSessionCnt(integer $PlayerSessionCnt) 设置当前玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxPlayerSessionCnt() 获取最大玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxPlayerSessionCnt(integer $MaxPlayerSessionCnt) 设置最大玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceExtend extends AbstractModel
{
    /**
     * @var Instance 实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instance;

    /**
     * @var string 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer 健康进程数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthyProcessCnt;

    /**
     * @var integer 活跃进程数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveProcessCnt;

    /**
     * @var integer 当前游戏会话总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameSessionCnt;

    /**
     * @var integer 最大游戏会话数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxGameSessionCnt;

    /**
     * @var integer 当前玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayerSessionCnt;

    /**
     * @var integer 最大玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxPlayerSessionCnt;

    /**
     * @param Instance $Instance 实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HealthyProcessCnt 健康进程数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActiveProcessCnt 活跃进程数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GameSessionCnt 当前游戏会话总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxGameSessionCnt 最大游戏会话数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PlayerSessionCnt 当前玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxPlayerSessionCnt 最大玩家会话数
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
        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new Instance();
            $this->Instance->deserialize($param["Instance"]);
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("HealthyProcessCnt",$param) and $param["HealthyProcessCnt"] !== null) {
            $this->HealthyProcessCnt = $param["HealthyProcessCnt"];
        }

        if (array_key_exists("ActiveProcessCnt",$param) and $param["ActiveProcessCnt"] !== null) {
            $this->ActiveProcessCnt = $param["ActiveProcessCnt"];
        }

        if (array_key_exists("GameSessionCnt",$param) and $param["GameSessionCnt"] !== null) {
            $this->GameSessionCnt = $param["GameSessionCnt"];
        }

        if (array_key_exists("MaxGameSessionCnt",$param) and $param["MaxGameSessionCnt"] !== null) {
            $this->MaxGameSessionCnt = $param["MaxGameSessionCnt"];
        }

        if (array_key_exists("PlayerSessionCnt",$param) and $param["PlayerSessionCnt"] !== null) {
            $this->PlayerSessionCnt = $param["PlayerSessionCnt"];
        }

        if (array_key_exists("MaxPlayerSessionCnt",$param) and $param["MaxPlayerSessionCnt"] !== null) {
            $this->MaxPlayerSessionCnt = $param["MaxPlayerSessionCnt"];
        }
    }
}
