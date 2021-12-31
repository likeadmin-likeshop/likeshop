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
 * DescribePlayer请求参数结构体
 *
 * @method string getGameId() 获取游戏资源Id。
 * @method void setGameId(string $GameId) 设置游戏资源Id。
 * @method string getOpenId() 获取玩家OpenId。
 * @method void setOpenId(string $OpenId) 设置玩家OpenId。
 * @method string getPlayerId() 获取玩家PlayerId，由后台分配，当OpenId不传的时候，PlayerId必传，传入PlayerId可以查询当前PlayerId的玩家信息，当OpenId传入的时候，PlayerId可不传，按照OpenId查询玩家信息。
 * @method void setPlayerId(string $PlayerId) 设置玩家PlayerId，由后台分配，当OpenId不传的时候，PlayerId必传，传入PlayerId可以查询当前PlayerId的玩家信息，当OpenId传入的时候，PlayerId可不传，按照OpenId查询玩家信息。
 */
class DescribePlayerRequest extends AbstractModel
{
    /**
     * @var string 游戏资源Id。
     */
    public $GameId;

    /**
     * @var string 玩家OpenId。
     */
    public $OpenId;

    /**
     * @var string 玩家PlayerId，由后台分配，当OpenId不传的时候，PlayerId必传，传入PlayerId可以查询当前PlayerId的玩家信息，当OpenId传入的时候，PlayerId可不传，按照OpenId查询玩家信息。
     */
    public $PlayerId;

    /**
     * @param string $GameId 游戏资源Id。
     * @param string $OpenId 玩家OpenId。
     * @param string $PlayerId 玩家PlayerId，由后台分配，当OpenId不传的时候，PlayerId必传，传入PlayerId可以查询当前PlayerId的玩家信息，当OpenId传入的时候，PlayerId可不传，按照OpenId查询玩家信息。
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

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }
    }
}
