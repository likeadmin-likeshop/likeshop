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
 * CreateGameServerSession请求参数结构体
 *
 * @method integer getMaximumPlayerSessionCount() 获取最大玩家数量，最小值不小于0
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) 设置最大玩家数量，最小值不小于0
 * @method string getAliasId() 获取别名ID。每个请求需要指定别名ID 或者舰队 ID，如果两个同时指定时，优先选择舰队 ID
 * @method void setAliasId(string $AliasId) 设置别名ID。每个请求需要指定别名ID 或者舰队 ID，如果两个同时指定时，优先选择舰队 ID
 * @method string getCreatorId() 获取创建者ID，最大长度不超过1024个ASCII字符
 * @method void setCreatorId(string $CreatorId) 设置创建者ID，最大长度不超过1024个ASCII字符
 * @method string getFleetId() 获取舰队ID。每个请求需要指定别名ID 或者舰队 ID，如果两个同时指定时，优先选择舰队 ID
 * @method void setFleetId(string $FleetId) 设置舰队ID。每个请求需要指定别名ID 或者舰队 ID，如果两个同时指定时，优先选择舰队 ID
 * @method array getGameProperties() 获取游戏属性，最大长度不超过16组
 * @method void setGameProperties(array $GameProperties) 设置游戏属性，最大长度不超过16组
 * @method string getGameServerSessionData() 获取游戏服务器会话属性详情，最大长度不超过4096个ASCII字符
 * @method void setGameServerSessionData(string $GameServerSessionData) 设置游戏服务器会话属性详情，最大长度不超过4096个ASCII字符
 * @method string getGameServerSessionId() 获取游戏服务器会话自定义ID，最大长度不超过4096个ASCII字符
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏服务器会话自定义ID，最大长度不超过4096个ASCII字符
 * @method string getIdempotencyToken() 获取幂等token，最大长度不超过48个ASCII字符
 * @method void setIdempotencyToken(string $IdempotencyToken) 设置幂等token，最大长度不超过48个ASCII字符
 * @method string getName() 获取游戏服务器会话名称，最大长度不超过1024个ASCII字符
 * @method void setName(string $Name) 设置游戏服务器会话名称，最大长度不超过1024个ASCII字符
 */
class CreateGameServerSessionRequest extends AbstractModel
{
    /**
     * @var integer 最大玩家数量，最小值不小于0
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string 别名ID。每个请求需要指定别名ID 或者舰队 ID，如果两个同时指定时，优先选择舰队 ID
     */
    public $AliasId;

    /**
     * @var string 创建者ID，最大长度不超过1024个ASCII字符
     */
    public $CreatorId;

    /**
     * @var string 舰队ID。每个请求需要指定别名ID 或者舰队 ID，如果两个同时指定时，优先选择舰队 ID
     */
    public $FleetId;

    /**
     * @var array 游戏属性，最大长度不超过16组
     */
    public $GameProperties;

    /**
     * @var string 游戏服务器会话属性详情，最大长度不超过4096个ASCII字符
     */
    public $GameServerSessionData;

    /**
     * @var string 游戏服务器会话自定义ID，最大长度不超过4096个ASCII字符
     */
    public $GameServerSessionId;

    /**
     * @var string 幂等token，最大长度不超过48个ASCII字符
     */
    public $IdempotencyToken;

    /**
     * @var string 游戏服务器会话名称，最大长度不超过1024个ASCII字符
     */
    public $Name;

    /**
     * @param integer $MaximumPlayerSessionCount 最大玩家数量，最小值不小于0
     * @param string $AliasId 别名ID。每个请求需要指定别名ID 或者舰队 ID，如果两个同时指定时，优先选择舰队 ID
     * @param string $CreatorId 创建者ID，最大长度不超过1024个ASCII字符
     * @param string $FleetId 舰队ID。每个请求需要指定别名ID 或者舰队 ID，如果两个同时指定时，优先选择舰队 ID
     * @param array $GameProperties 游戏属性，最大长度不超过16组
     * @param string $GameServerSessionData 游戏服务器会话属性详情，最大长度不超过4096个ASCII字符
     * @param string $GameServerSessionId 游戏服务器会话自定义ID，最大长度不超过4096个ASCII字符
     * @param string $IdempotencyToken 幂等token，最大长度不超过48个ASCII字符
     * @param string $Name 游戏服务器会话名称，最大长度不超过1024个ASCII字符
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
        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("AliasId",$param) and $param["AliasId"] !== null) {
            $this->AliasId = $param["AliasId"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("GameProperties",$param) and $param["GameProperties"] !== null) {
            $this->GameProperties = [];
            foreach ($param["GameProperties"] as $key => $value){
                $obj = new GameProperty();
                $obj->deserialize($value);
                array_push($this->GameProperties, $obj);
            }
        }

        if (array_key_exists("GameServerSessionData",$param) and $param["GameServerSessionData"] !== null) {
            $this->GameServerSessionData = $param["GameServerSessionData"];
        }

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("IdempotencyToken",$param) and $param["IdempotencyToken"] !== null) {
            $this->IdempotencyToken = $param["IdempotencyToken"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
