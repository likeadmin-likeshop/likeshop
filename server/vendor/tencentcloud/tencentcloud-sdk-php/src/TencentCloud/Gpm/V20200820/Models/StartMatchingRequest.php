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
 * StartMatching请求参数结构体
 *
 * @method string getMatchCode() 获取匹配 Code。
 * @method void setMatchCode(string $MatchCode) 设置匹配 Code。
 * @method array getPlayers() 获取玩家信息 最多 200 条。
 * @method void setPlayers(array $Players) 设置玩家信息 最多 200 条。
 * @method string getMatchTicketId() 获取匹配票据 ID 默认空字符串，为空则由 GPM 自动生成 长度 128，只能包含数字、字母、. 和 -
 * @method void setMatchTicketId(string $MatchTicketId) 设置匹配票据 ID 默认空字符串，为空则由 GPM 自动生成 长度 128，只能包含数字、字母、. 和 -
 */
class StartMatchingRequest extends AbstractModel
{
    /**
     * @var string 匹配 Code。
     */
    public $MatchCode;

    /**
     * @var array 玩家信息 最多 200 条。
     */
    public $Players;

    /**
     * @var string 匹配票据 ID 默认空字符串，为空则由 GPM 自动生成 长度 128，只能包含数字、字母、. 和 -
     */
    public $MatchTicketId;

    /**
     * @param string $MatchCode 匹配 Code。
     * @param array $Players 玩家信息 最多 200 条。
     * @param string $MatchTicketId 匹配票据 ID 默认空字符串，为空则由 GPM 自动生成 长度 128，只能包含数字、字母、. 和 -
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

        if (array_key_exists("MatchTicketId",$param) and $param["MatchTicketId"] !== null) {
            $this->MatchTicketId = $param["MatchTicketId"];
        }
    }
}
