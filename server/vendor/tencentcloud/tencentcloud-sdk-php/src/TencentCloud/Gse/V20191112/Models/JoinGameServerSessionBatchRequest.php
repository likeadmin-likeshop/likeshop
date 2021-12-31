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
 * JoinGameServerSessionBatch请求参数结构体
 *
 * @method string getGameServerSessionId() 获取游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
 * @method array getPlayerIds() 获取玩家ID列表，最小1组，最大25组
 * @method void setPlayerIds(array $PlayerIds) 设置玩家ID列表，最小1组，最大25组
 * @method PlayerDataMap getPlayerDataMap() 获取玩家自定义数据
 * @method void setPlayerDataMap(PlayerDataMap $PlayerDataMap) 设置玩家自定义数据
 */
class JoinGameServerSessionBatchRequest extends AbstractModel
{
    /**
     * @var string 游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
     */
    public $GameServerSessionId;

    /**
     * @var array 玩家ID列表，最小1组，最大25组
     */
    public $PlayerIds;

    /**
     * @var PlayerDataMap 玩家自定义数据
     */
    public $PlayerDataMap;

    /**
     * @param string $GameServerSessionId 游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
     * @param array $PlayerIds 玩家ID列表，最小1组，最大25组
     * @param PlayerDataMap $PlayerDataMap 玩家自定义数据
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

        if (array_key_exists("PlayerIds",$param) and $param["PlayerIds"] !== null) {
            $this->PlayerIds = $param["PlayerIds"];
        }

        if (array_key_exists("PlayerDataMap",$param) and $param["PlayerDataMap"] !== null) {
            $this->PlayerDataMap = new PlayerDataMap();
            $this->PlayerDataMap->deserialize($param["PlayerDataMap"]);
        }
    }
}
