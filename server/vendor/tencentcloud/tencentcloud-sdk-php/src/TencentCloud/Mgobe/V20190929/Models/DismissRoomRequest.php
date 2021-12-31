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
namespace TencentCloud\Mgobe\V20190929\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DismissRoom请求参数结构体
 *
 * @method string getGameId() 获取表示游戏资源唯一 ID, 由后台自动分配, 无法修改。
 * @method void setGameId(string $GameId) 设置表示游戏资源唯一 ID, 由后台自动分配, 无法修改。
 * @method string getRoomId() 获取表示游戏房间唯一ID。
 * @method void setRoomId(string $RoomId) 设置表示游戏房间唯一ID。
 */
class DismissRoomRequest extends AbstractModel
{
    /**
     * @var string 表示游戏资源唯一 ID, 由后台自动分配, 无法修改。
     */
    public $GameId;

    /**
     * @var string 表示游戏房间唯一ID。
     */
    public $RoomId;

    /**
     * @param string $GameId 表示游戏资源唯一 ID, 由后台自动分配, 无法修改。
     * @param string $RoomId 表示游戏房间唯一ID。
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
