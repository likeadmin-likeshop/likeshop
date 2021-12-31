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
 * 服务部署利用率
 *
 * @method integer getActiveGameServerSessionCount() 获取游戏会话数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveGameServerSessionCount(integer $ActiveGameServerSessionCount) 设置游戏会话数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActiveServerProcessCount() 获取活跃进程数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveServerProcessCount(integer $ActiveServerProcessCount) 设置活跃进程数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentPlayerSessionCount() 获取当前游戏玩家数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentPlayerSessionCount(integer $CurrentPlayerSessionCount) 设置当前游戏玩家数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFleetId() 获取服务部署 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetId(string $FleetId) 设置服务部署 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaximumPlayerSessionCount() 获取最大玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) 设置最大玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
 */
class FleetUtilization extends AbstractModel
{
    /**
     * @var integer 游戏会话数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveGameServerSessionCount;

    /**
     * @var integer 活跃进程数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveServerProcessCount;

    /**
     * @var integer 当前游戏玩家数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentPlayerSessionCount;

    /**
     * @var string 服务部署 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetId;

    /**
     * @var integer 最大玩家会话数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaximumPlayerSessionCount;

    /**
     * @param integer $ActiveGameServerSessionCount 游戏会话数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActiveServerProcessCount 活跃进程数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentPlayerSessionCount 当前游戏玩家数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FleetId 服务部署 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaximumPlayerSessionCount 最大玩家会话数
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
        if (array_key_exists("ActiveGameServerSessionCount",$param) and $param["ActiveGameServerSessionCount"] !== null) {
            $this->ActiveGameServerSessionCount = $param["ActiveGameServerSessionCount"];
        }

        if (array_key_exists("ActiveServerProcessCount",$param) and $param["ActiveServerProcessCount"] !== null) {
            $this->ActiveServerProcessCount = $param["ActiveServerProcessCount"];
        }

        if (array_key_exists("CurrentPlayerSessionCount",$param) and $param["CurrentPlayerSessionCount"] !== null) {
            $this->CurrentPlayerSessionCount = $param["CurrentPlayerSessionCount"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }
    }
}
