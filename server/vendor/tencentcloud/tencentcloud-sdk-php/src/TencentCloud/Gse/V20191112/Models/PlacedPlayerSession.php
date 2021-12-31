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
 * 部署的玩家游戏会话
 *
 * @method string getPlayerId() 获取玩家Id
 * @method void setPlayerId(string $PlayerId) 设置玩家Id
 * @method string getPlayerSessionId() 获取玩家会话Id
 * @method void setPlayerSessionId(string $PlayerSessionId) 设置玩家会话Id
 */
class PlacedPlayerSession extends AbstractModel
{
    /**
     * @var string 玩家Id
     */
    public $PlayerId;

    /**
     * @var string 玩家会话Id
     */
    public $PlayerSessionId;

    /**
     * @param string $PlayerId 玩家Id
     * @param string $PlayerSessionId 玩家会话Id
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
        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("PlayerSessionId",$param) and $param["PlayerSessionId"] !== null) {
            $this->PlayerSessionId = $param["PlayerSessionId"];
        }
    }
}
