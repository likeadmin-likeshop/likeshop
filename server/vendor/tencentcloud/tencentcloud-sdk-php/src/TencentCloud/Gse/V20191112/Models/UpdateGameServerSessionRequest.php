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
 * UpdateGameServerSession请求参数结构体
 *
 * @method string getGameServerSessionId() 获取游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
 * @method integer getMaximumPlayerSessionCount() 获取最大玩家数量，最小值不小于0
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) 设置最大玩家数量，最小值不小于0
 * @method string getName() 获取游戏服务器会话名称，最小长度不小于1个ASCII字符，最大长度不超过1024个ASCII字符
 * @method void setName(string $Name) 设置游戏服务器会话名称，最小长度不小于1个ASCII字符，最大长度不超过1024个ASCII字符
 * @method string getPlayerSessionCreationPolicy() 获取玩家会话创建策略，包括允许所有玩家加入和禁止所有玩家加入（ACCEPT_ALL,DENY_ALL）
 * @method void setPlayerSessionCreationPolicy(string $PlayerSessionCreationPolicy) 设置玩家会话创建策略，包括允许所有玩家加入和禁止所有玩家加入（ACCEPT_ALL,DENY_ALL）
 * @method string getProtectionPolicy() 获取保护策略，包括不保护、时限保护和完全保护(NoProtection,TimeLimitProtection,FullProtection)
 * @method void setProtectionPolicy(string $ProtectionPolicy) 设置保护策略，包括不保护、时限保护和完全保护(NoProtection,TimeLimitProtection,FullProtection)
 */
class UpdateGameServerSessionRequest extends AbstractModel
{
    /**
     * @var string 游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
     */
    public $GameServerSessionId;

    /**
     * @var integer 最大玩家数量，最小值不小于0
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string 游戏服务器会话名称，最小长度不小于1个ASCII字符，最大长度不超过1024个ASCII字符
     */
    public $Name;

    /**
     * @var string 玩家会话创建策略，包括允许所有玩家加入和禁止所有玩家加入（ACCEPT_ALL,DENY_ALL）
     */
    public $PlayerSessionCreationPolicy;

    /**
     * @var string 保护策略，包括不保护、时限保护和完全保护(NoProtection,TimeLimitProtection,FullProtection)
     */
    public $ProtectionPolicy;

    /**
     * @param string $GameServerSessionId 游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
     * @param integer $MaximumPlayerSessionCount 最大玩家数量，最小值不小于0
     * @param string $Name 游戏服务器会话名称，最小长度不小于1个ASCII字符，最大长度不超过1024个ASCII字符
     * @param string $PlayerSessionCreationPolicy 玩家会话创建策略，包括允许所有玩家加入和禁止所有玩家加入（ACCEPT_ALL,DENY_ALL）
     * @param string $ProtectionPolicy 保护策略，包括不保护、时限保护和完全保护(NoProtection,TimeLimitProtection,FullProtection)
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
        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PlayerSessionCreationPolicy",$param) and $param["PlayerSessionCreationPolicy"] !== null) {
            $this->PlayerSessionCreationPolicy = $param["PlayerSessionCreationPolicy"];
        }

        if (array_key_exists("ProtectionPolicy",$param) and $param["ProtectionPolicy"] !== null) {
            $this->ProtectionPolicy = $param["ProtectionPolicy"];
        }
    }
}
