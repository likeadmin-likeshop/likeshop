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
namespace TencentCloud\Bizlive\V20190313\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSession请求参数结构体
 *
 * @method string getClientSession() 获取客户端session信息，从JSSDK请求中获得
 * @method void setClientSession(string $ClientSession) 设置客户端session信息，从JSSDK请求中获得
 * @method string getGameId() 获取游戏ID
 * @method void setGameId(string $GameId) 设置游戏ID
 * @method string getUserId() 获取游戏用户ID
 * @method void setUserId(string $UserId) 设置游戏用户ID
 * @method string getGameParas() 获取游戏参数
 * @method void setGameParas(string $GameParas) 设置游戏参数
 * @method string getGameRegion() 获取游戏区域
 * @method void setGameRegion(string $GameRegion) 设置游戏区域
 * @method string getImageUrl() 获取背景图url
 * @method void setImageUrl(string $ImageUrl) 设置背景图url
 * @method string getResolution() 获取分辨率
 * @method void setResolution(string $Resolution) 设置分辨率
 */
class CreateSessionRequest extends AbstractModel
{
    /**
     * @var string 客户端session信息，从JSSDK请求中获得
     */
    public $ClientSession;

    /**
     * @var string 游戏ID
     */
    public $GameId;

    /**
     * @var string 游戏用户ID
     */
    public $UserId;

    /**
     * @var string 游戏参数
     */
    public $GameParas;

    /**
     * @var string 游戏区域
     */
    public $GameRegion;

    /**
     * @var string 背景图url
     */
    public $ImageUrl;

    /**
     * @var string 分辨率
     */
    public $Resolution;

    /**
     * @param string $ClientSession 客户端session信息，从JSSDK请求中获得
     * @param string $GameId 游戏ID
     * @param string $UserId 游戏用户ID
     * @param string $GameParas 游戏参数
     * @param string $GameRegion 游戏区域
     * @param string $ImageUrl 背景图url
     * @param string $Resolution 分辨率
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
        if (array_key_exists("ClientSession",$param) and $param["ClientSession"] !== null) {
            $this->ClientSession = $param["ClientSession"];
        }

        if (array_key_exists("GameId",$param) and $param["GameId"] !== null) {
            $this->GameId = $param["GameId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("GameParas",$param) and $param["GameParas"] !== null) {
            $this->GameParas = $param["GameParas"];
        }

        if (array_key_exists("GameRegion",$param) and $param["GameRegion"] !== null) {
            $this->GameRegion = $param["GameRegion"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
