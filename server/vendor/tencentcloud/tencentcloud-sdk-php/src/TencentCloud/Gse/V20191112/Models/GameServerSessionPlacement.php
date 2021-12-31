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
 * 游戏会话部署对象
 *
 * @method string getPlacementId() 获取部署Id
 * @method void setPlacementId(string $PlacementId) 设置部署Id
 * @method string getGameServerSessionQueueName() 获取服务部署组名称
 * @method void setGameServerSessionQueueName(string $GameServerSessionQueueName) 设置服务部署组名称
 * @method array getPlayerLatencies() 获取玩家延迟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayerLatencies(array $PlayerLatencies) 设置玩家延迟
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取服务部署状态
 * @method void setStatus(string $Status) 设置服务部署状态
 * @method string getDnsName() 获取分配给正在运行游戏会话的实例的DNS标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDnsName(string $DnsName) 设置分配给正在运行游戏会话的实例的DNS标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGameServerSessionId() 获取游戏会话Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏会话Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGameServerSessionName() 获取游戏会话名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameServerSessionName(string $GameServerSessionName) 设置游戏会话名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGameServerSessionRegion() 获取服务部署区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameServerSessionRegion(string $GameServerSessionRegion) 设置服务部署区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGameProperties() 获取游戏属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameProperties(array $GameProperties) 设置游戏属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaximumPlayerSessionCount() 获取游戏服务器允许同时连接到游戏会话的最大玩家数量，最小值1，最大值为玩家会话最大限额
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) 设置游戏服务器允许同时连接到游戏会话的最大玩家数量，最小值1，最大值为玩家会话最大限额
 * @method string getGameServerSessionData() 获取游戏会话数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameServerSessionData(string $GameServerSessionData) 设置游戏会话数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpAddress() 获取运行游戏会话的实例的IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpAddress(string $IpAddress) 设置运行游戏会话的实例的IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取运行游戏会话的实例的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置运行游戏会话的实例的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchmakerData() 获取游戏匹配数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchmakerData(string $MatchmakerData) 设置游戏匹配数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPlacedPlayerSessions() 获取部署的玩家游戏数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlacedPlayerSessions(array $PlacedPlayerSessions) 设置部署的玩家游戏数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class GameServerSessionPlacement extends AbstractModel
{
    /**
     * @var string 部署Id
     */
    public $PlacementId;

    /**
     * @var string 服务部署组名称
     */
    public $GameServerSessionQueueName;

    /**
     * @var array 玩家延迟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayerLatencies;

    /**
     * @var string 服务部署状态
     */
    public $Status;

    /**
     * @var string 分配给正在运行游戏会话的实例的DNS标识符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DnsName;

    /**
     * @var string 游戏会话Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameServerSessionId;

    /**
     * @var string 游戏会话名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameServerSessionName;

    /**
     * @var string 服务部署区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameServerSessionRegion;

    /**
     * @var array 游戏属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameProperties;

    /**
     * @var integer 游戏服务器允许同时连接到游戏会话的最大玩家数量，最小值1，最大值为玩家会话最大限额
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string 游戏会话数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameServerSessionData;

    /**
     * @var string 运行游戏会话的实例的IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpAddress;

    /**
     * @var integer 运行游戏会话的实例的端口号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 游戏匹配数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchmakerData;

    /**
     * @var array 部署的玩家游戏数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlacedPlayerSessions;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $PlacementId 部署Id
     * @param string $GameServerSessionQueueName 服务部署组名称
     * @param array $PlayerLatencies 玩家延迟
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 服务部署状态
     * @param string $DnsName 分配给正在运行游戏会话的实例的DNS标识符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GameServerSessionId 游戏会话Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GameServerSessionName 游戏会话名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GameServerSessionRegion 服务部署区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GameProperties 游戏属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaximumPlayerSessionCount 游戏服务器允许同时连接到游戏会话的最大玩家数量，最小值1，最大值为玩家会话最大限额
     * @param string $GameServerSessionData 游戏会话数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpAddress 运行游戏会话的实例的IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 运行游戏会话的实例的端口号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchmakerData 游戏匹配数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PlacedPlayerSessions 部署的玩家游戏数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("PlayerLatencies",$param) and $param["PlayerLatencies"] !== null) {
            $this->PlayerLatencies = [];
            foreach ($param["PlayerLatencies"] as $key => $value){
                $obj = new PlayerLatency();
                $obj->deserialize($value);
                array_push($this->PlayerLatencies, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DnsName",$param) and $param["DnsName"] !== null) {
            $this->DnsName = $param["DnsName"];
        }

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("GameServerSessionName",$param) and $param["GameServerSessionName"] !== null) {
            $this->GameServerSessionName = $param["GameServerSessionName"];
        }

        if (array_key_exists("GameServerSessionRegion",$param) and $param["GameServerSessionRegion"] !== null) {
            $this->GameServerSessionRegion = $param["GameServerSessionRegion"];
        }

        if (array_key_exists("GameProperties",$param) and $param["GameProperties"] !== null) {
            $this->GameProperties = [];
            foreach ($param["GameProperties"] as $key => $value){
                $obj = new GameProperty();
                $obj->deserialize($value);
                array_push($this->GameProperties, $obj);
            }
        }

        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("GameServerSessionData",$param) and $param["GameServerSessionData"] !== null) {
            $this->GameServerSessionData = $param["GameServerSessionData"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("MatchmakerData",$param) and $param["MatchmakerData"] !== null) {
            $this->MatchmakerData = $param["MatchmakerData"];
        }

        if (array_key_exists("PlacedPlayerSessions",$param) and $param["PlacedPlayerSessions"] !== null) {
            $this->PlacedPlayerSessions = [];
            foreach ($param["PlacedPlayerSessions"] as $key => $value){
                $obj = new PlacedPlayerSession();
                $obj->deserialize($value);
                array_push($this->PlacedPlayerSessions, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
