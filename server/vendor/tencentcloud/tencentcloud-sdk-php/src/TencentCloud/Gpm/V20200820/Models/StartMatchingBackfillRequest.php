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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartMatchingBackfill请求参数结构体
 *
 * @method string getMatchCode() 获取匹配code
 * @method void setMatchCode(string $MatchCode) 设置匹配code
 * @method array getPlayers() 获取玩家信息
 * @method void setPlayers(array $Players) 设置玩家信息
 * @method string getGameServerSessionId() 获取游戏服务器回话 ID [1-256] 个ASCII 字符
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏服务器回话 ID [1-256] 个ASCII 字符
 * @method string getMatchTicketId() 获取匹配票据 Id 默认 "" 为空则由 GPM 自动生成 长度 [1, 128]
 * @method void setMatchTicketId(string $MatchTicketId) 设置匹配票据 Id 默认 "" 为空则由 GPM 自动生成 长度 [1, 128]
 */
class StartMatchingBackfillRequest extends AbstractModel
{
    /**
     * @var string 匹配code
     */
    public $MatchCode;

    /**
     * @var array 玩家信息
     */
    public $Players;

    /**
     * @var string 游戏服务器回话 ID [1-256] 个ASCII 字符
     */
    public $GameServerSessionId;

    /**
     * @var string 匹配票据 Id 默认 "" 为空则由 GPM 自动生成 长度 [1, 128]
     */
    public $MatchTicketId;

    /**
     * @param string $MatchCode 匹配code
     * @param array $Players 玩家信息
     * @param string $GameServerSessionId 游戏服务器回话 ID [1-256] 个ASCII 字符
     * @param string $MatchTicketId 匹配票据 Id 默认 "" 为空则由 GPM 自动生成 长度 [1, 128]
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
        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }

        if (array_key_exists("Players",$param) and $param["Players"] !== null) {
            $this->Players = [];
            foreach ($param["Players"] as $key => $value){
                $obj = new Player();
                $obj->deserialize($value);
                array_push($this->Players, $obj);
            }
        }

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("MatchTicketId",$param) and $param["MatchTicketId"] !== null) {
            $this->MatchTicketId = $param["MatchTicketId"];
        }
    }
}
