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
 * 游戏服务器会话详情（GameServerSessionDetail）
 *
 * @method GameServerSession getGameServerSession() 获取游戏服务器会话
 * @method void setGameServerSession(GameServerSession $GameServerSession) 设置游戏服务器会话
 * @method string getProtectionPolicy() 获取保护策略，可选（NoProtection,FullProtection）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectionPolicy(string $ProtectionPolicy) 设置保护策略，可选（NoProtection,FullProtection）
注意：此字段可能返回 null，表示取不到有效值。
 */
class GameServerSessionDetail extends AbstractModel
{
    /**
     * @var GameServerSession 游戏服务器会话
     */
    public $GameServerSession;

    /**
     * @var string 保护策略，可选（NoProtection,FullProtection）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectionPolicy;

    /**
     * @param GameServerSession $GameServerSession 游戏服务器会话
     * @param string $ProtectionPolicy 保护策略，可选（NoProtection,FullProtection）
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
        if (array_key_exists("GameServerSession",$param) and $param["GameServerSession"] !== null) {
            $this->GameServerSession = new GameServerSession();
            $this->GameServerSession->deserialize($param["GameServerSession"]);
        }

        if (array_key_exists("ProtectionPolicy",$param) and $param["ProtectionPolicy"] !== null) {
            $this->ProtectionPolicy = $param["ProtectionPolicy"];
        }
    }
}
