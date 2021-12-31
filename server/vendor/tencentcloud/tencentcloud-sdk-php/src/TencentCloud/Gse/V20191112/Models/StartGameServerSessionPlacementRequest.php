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
 * StartGameServerSessionPlacement请求参数结构体
 *
 * @method string getPlacementId() 获取开始部署游戏服务器会话的唯一标识符，最大值48个ASCII字符，模式：[a-zA-Z0-9-]+
 * @method void setPlacementId(string $PlacementId) 设置开始部署游戏服务器会话的唯一标识符，最大值48个ASCII字符，模式：[a-zA-Z0-9-]+
 * @method string getGameServerSessionQueueName() 获取游戏服务器会话队列名称
 * @method void setGameServerSessionQueueName(string $GameServerSessionQueueName) 设置游戏服务器会话队列名称
 * @method integer getMaximumPlayerSessionCount() 获取游戏服务器允许同时连接到游戏会话的最大玩家数量，最小值1，最大值为玩家会话最大限额
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) 设置游戏服务器允许同时连接到游戏会话的最大玩家数量，最小值1，最大值为玩家会话最大限额
 * @method array getDesiredPlayerSessions() 获取玩家游戏会话信息
 * @method void setDesiredPlayerSessions(array $DesiredPlayerSessions) 设置玩家游戏会话信息
 * @method array getGameProperties() 获取玩家游戏会话属性
 * @method void setGameProperties(array $GameProperties) 设置玩家游戏会话属性
 * @method string getGameServerSessionData() 获取游戏服务器会话数据，最大长度不超过4096个ASCII字符
 * @method void setGameServerSessionData(string $GameServerSessionData) 设置游戏服务器会话数据，最大长度不超过4096个ASCII字符
 * @method string getGameServerSessionName() 获取游戏服务器会话名称，最大长度不超过4096个ASCII字符
 * @method void setGameServerSessionName(string $GameServerSessionName) 设置游戏服务器会话名称，最大长度不超过4096个ASCII字符
 * @method array getPlayerLatencies() 获取玩家延迟
 * @method void setPlayerLatencies(array $PlayerLatencies) 设置玩家延迟
 */
class StartGameServerSessionPlacementRequest extends AbstractModel
{
    /**
     * @var string 开始部署游戏服务器会话的唯一标识符，最大值48个ASCII字符，模式：[a-zA-Z0-9-]+
     */
    public $PlacementId;

    /**
     * @var string 游戏服务器会话队列名称
     */
    public $GameServerSessionQueueName;

    /**
     * @var integer 游戏服务器允许同时连接到游戏会话的最大玩家数量，最小值1，最大值为玩家会话最大限额
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var array 玩家游戏会话信息
     */
    public $DesiredPlayerSessions;

    /**
     * @var array 玩家游戏会话属性
     */
    public $GameProperties;

    /**
     * @var string 游戏服务器会话数据，最大长度不超过4096个ASCII字符
     */
    public $GameServerSessionData;

    /**
     * @var string 游戏服务器会话名称，最大长度不超过4096个ASCII字符
     */
    public $GameServerSessionName;

    /**
     * @var array 玩家延迟
     */
    public $PlayerLatencies;

    /**
     * @param string $PlacementId 开始部署游戏服务器会话的唯一标识符，最大值48个ASCII字符，模式：[a-zA-Z0-9-]+
     * @param string $GameServerSessionQueueName 游戏服务器会话队列名称
     * @param integer $MaximumPlayerSessionCount 游戏服务器允许同时连接到游戏会话的最大玩家数量，最小值1，最大值为玩家会话最大限额
     * @param array $DesiredPlayerSessions 玩家游戏会话信息
     * @param array $GameProperties 玩家游戏会话属性
     * @param string $GameServerSessionData 游戏服务器会话数据，最大长度不超过4096个ASCII字符
     * @param string $GameServerSessionName 游戏服务器会话名称，最大长度不超过4096个ASCII字符
     * @param array $PlayerLatencies 玩家延迟
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
        if (array_key_exists("PlacementId",$param) and $param["PlacementId"] !== null) {
            $this->PlacementId = $param["PlacementId"];
        }

        if (array_key_exists("GameServerSessionQueueName",$param) and $param["GameServerSessionQueueName"] !== null) {
            $this->GameServerSessionQueueName = $param["GameServerSessionQueueName"];
        }

        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("DesiredPlayerSessions",$param) and $param["DesiredPlayerSessions"] !== null) {
            $this->DesiredPlayerSessions = [];
            foreach ($param["DesiredPlayerSessions"] as $key => $value){
                $obj = new DesiredPlayerSession();
                $obj->deserialize($value);
                array_push($this->DesiredPlayerSessions, $obj);
            }
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

        if (array_key_exists("GameServerSessionName",$param) and $param["GameServerSessionName"] !== null) {
            $this->GameServerSessionName = $param["GameServerSessionName"];
        }

        if (array_key_exists("PlayerLatencies",$param) and $param["PlayerLatencies"] !== null) {
            $this->PlayerLatencies = [];
            foreach ($param["PlayerLatencies"] as $key => $value){
                $obj = new PlayerLatency();
                $obj->deserialize($value);
                array_push($this->PlayerLatencies, $obj);
            }
        }
    }
}
