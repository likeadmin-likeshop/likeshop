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
 * ChangeRoomPlayerProfile请求参数结构体
 *
 * @method string getGameId() 获取游戏资源Id。
 * @method void setGameId(string $GameId) 设置游戏资源Id。
 * @method string getPlayerId() 获取发起修改的玩家Id。
 * @method void setPlayerId(string $PlayerId) 设置发起修改的玩家Id。
 * @method string getCustomProfile() 获取需要修改的玩家自定义属性。
 * @method void setCustomProfile(string $CustomProfile) 设置需要修改的玩家自定义属性。
 */
class ChangeRoomPlayerProfileRequest extends AbstractModel
{
    /**
     * @var string 游戏资源Id。
     */
    public $GameId;

    /**
     * @var string 发起修改的玩家Id。
     */
    public $PlayerId;

    /**
     * @var string 需要修改的玩家自定义属性。
     */
    public $CustomProfile;

    /**
     * @param string $GameId 游戏资源Id。
     * @param string $PlayerId 发起修改的玩家Id。
     * @param string $CustomProfile 需要修改的玩家自定义属性。
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

        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("CustomProfile",$param) and $param["CustomProfile"] !== null) {
            $this->CustomProfile = $param["CustomProfile"];
        }
    }
}
