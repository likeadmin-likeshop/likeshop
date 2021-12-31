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
 * 玩家游戏会话信息
 *
 * @method string getPlayerId() 获取与玩家会话关联的唯一玩家标识
 * @method void setPlayerId(string $PlayerId) 设置与玩家会话关联的唯一玩家标识
 * @method string getPlayerData() 获取开发人员定义的玩家数据
 * @method void setPlayerData(string $PlayerData) 设置开发人员定义的玩家数据
 */
class DesiredPlayerSession extends AbstractModel
{
    /**
     * @var string 与玩家会话关联的唯一玩家标识
     */
    public $PlayerId;

    /**
     * @var string 开发人员定义的玩家数据
     */
    public $PlayerData;

    /**
     * @param string $PlayerId 与玩家会话关联的唯一玩家标识
     * @param string $PlayerData 开发人员定义的玩家数据
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

        if (array_key_exists("PlayerData",$param) and $param["PlayerData"] !== null) {
            $this->PlayerData = $param["PlayerData"];
        }
    }
}
