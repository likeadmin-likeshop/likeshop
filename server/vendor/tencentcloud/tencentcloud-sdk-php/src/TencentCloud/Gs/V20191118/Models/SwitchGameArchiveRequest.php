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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchGameArchive请求参数结构体
 *
 * @method string getUserId() 获取游戏用户ID
 * @method void setUserId(string $UserId) 设置游戏用户ID
 * @method string getGameId() 获取游戏ID
 * @method void setGameId(string $GameId) 设置游戏ID
 * @method string getGameArchiveUrl() 获取游戏存档Url
 * @method void setGameArchiveUrl(string $GameArchiveUrl) 设置游戏存档Url
 * @method string getGameContext() 获取游戏相关参数
 * @method void setGameContext(string $GameContext) 设置游戏相关参数
 */
class SwitchGameArchiveRequest extends AbstractModel
{
    /**
     * @var string 游戏用户ID
     */
    public $UserId;

    /**
     * @var string 游戏ID
     */
    public $GameId;

    /**
     * @var string 游戏存档Url
     */
    public $GameArchiveUrl;

    /**
     * @var string 游戏相关参数
     */
    public $GameContext;

    /**
     * @param string $UserId 游戏用户ID
     * @param string $GameId 游戏ID
     * @param string $GameArchiveUrl 游戏存档Url
     * @param string $GameContext 游戏相关参数
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("GameId",$param) and $param["GameId"] !== null) {
            $this->GameId = $param["GameId"];
        }

        if (array_key_exists("GameArchiveUrl",$param) and $param["GameArchiveUrl"] !== null) {
            $this->GameArchiveUrl = $param["GameArchiveUrl"];
        }

        if (array_key_exists("GameContext",$param) and $param["GameContext"] !== null) {
            $this->GameContext = $param["GameContext"];
        }
    }
}
