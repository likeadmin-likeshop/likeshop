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
namespace TencentCloud\Mgobe\V20201014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveRoomPlayer请求参数结构体
 *
 * @method string getGameId() 获取游戏资源Id。
 * @method void setGameId(string $GameId) 设置游戏资源Id。
 * @method string getRemovePlayerId() 获取被踢出房间的玩家Id。
 * @method void setRemovePlayerId(string $RemovePlayerId) 设置被踢出房间的玩家Id。
 */
class RemoveRoomPlayerRequest extends AbstractModel
{
    /**
     * @var string 游戏资源Id。
     */
    public $GameId;

    /**
     * @var string 被踢出房间的玩家Id。
     */
    public $RemovePlayerId;

    /**
     * @param string $GameId 游戏资源Id。
     * @param string $RemovePlayerId 被踢出房间的玩家Id。
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
        if (array_key_exists("GameId",$param) and $param["GameId"] !== null) {
            $this->GameId = $param["GameId"];
        }

        if (array_key_exists("RemovePlayerId",$param) and $param["RemovePlayerId"] !== null) {
            $this->RemovePlayerId = $param["RemovePlayerId"];
        }
    }
}
