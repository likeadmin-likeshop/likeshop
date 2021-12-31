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
 * 玩家会话详情
 *
 * @method string getCreationTime() 获取玩家会话创建时间
 * @method void setCreationTime(string $CreationTime) 设置玩家会话创建时间
 * @method string getDnsName() 获取游戏服务器会话运行的DNS标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDnsName(string $DnsName) 设置游戏服务器会话运行的DNS标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFleetId() 获取舰队ID
 * @method void setFleetId(string $FleetId) 设置舰队ID
 * @method string getGameServerSessionId() 获取游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
 * @method string getIpAddress() 获取游戏服务器会话运行的CVM地址
 * @method void setIpAddress(string $IpAddress) 设置游戏服务器会话运行的CVM地址
 * @method string getPlayerData() 获取玩家自定义数据，最大长度2048个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayerData(string $PlayerData) 设置玩家自定义数据，最大长度2048个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlayerId() 获取玩家ID，最大长度1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayerId(string $PlayerId) 设置玩家ID，最大长度1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlayerSessionId() 获取玩家会话ID
 * @method void setPlayerSessionId(string $PlayerSessionId) 设置玩家会话ID
 * @method integer getPort() 获取端口号，最小值不小于1，最大值不超过60000
 * @method void setPort(integer $Port) 设置端口号，最小值不小于1，最大值不超过60000
 * @method string getStatus() 获取玩家会话的状态（RESERVED = 1,ACTIVE = 2,COMPLETED = 3,TIMEDOUT = 4）
 * @method void setStatus(string $Status) 设置玩家会话的状态（RESERVED = 1,ACTIVE = 2,COMPLETED = 3,TIMEDOUT = 4）
 * @method string getTerminationTime() 获取玩家会话终止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerminationTime(string $TerminationTime) 设置玩家会话终止时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class PlayerSession extends AbstractModel
{
    /**
     * @var string 玩家会话创建时间
     */
    public $CreationTime;

    /**
     * @var string 游戏服务器会话运行的DNS标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DnsName;

    /**
     * @var string 舰队ID
     */
    public $FleetId;

    /**
     * @var string 游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
     */
    public $GameServerSessionId;

    /**
     * @var string 游戏服务器会话运行的CVM地址
     */
    public $IpAddress;

    /**
     * @var string 玩家自定义数据，最大长度2048个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayerData;

    /**
     * @var string 玩家ID，最大长度1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayerId;

    /**
     * @var string 玩家会话ID
     */
    public $PlayerSessionId;

    /**
     * @var integer 端口号，最小值不小于1，最大值不超过60000
     */
    public $Port;

    /**
     * @var string 玩家会话的状态（RESERVED = 1,ACTIVE = 2,COMPLETED = 3,TIMEDOUT = 4）
     */
    public $Status;

    /**
     * @var string 玩家会话终止时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerminationTime;

    /**
     * @param string $CreationTime 玩家会话创建时间
     * @param string $DnsName 游戏服务器会话运行的DNS标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FleetId 舰队ID
     * @param string $GameServerSessionId 游戏服务器会话ID，最小长度1个ASCII字符，最大长度不超过256个ASCII字符
     * @param string $IpAddress 游戏服务器会话运行的CVM地址
     * @param string $PlayerData 玩家自定义数据，最大长度2048个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlayerId 玩家ID，最大长度1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlayerSessionId 玩家会话ID
     * @param integer $Port 端口号，最小值不小于1，最大值不超过60000
     * @param string $Status 玩家会话的状态（RESERVED = 1,ACTIVE = 2,COMPLETED = 3,TIMEDOUT = 4）
     * @param string $TerminationTime 玩家会话终止时间
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("DnsName",$param) and $param["DnsName"] !== null) {
            $this->DnsName = $param["DnsName"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("PlayerData",$param) and $param["PlayerData"] !== null) {
            $this->PlayerData = $param["PlayerData"];
        }

        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("PlayerSessionId",$param) and $param["PlayerSessionId"] !== null) {
            $this->PlayerSessionId = $param["PlayerSessionId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TerminationTime",$param) and $param["TerminationTime"] !== null) {
            $this->TerminationTime = $param["TerminationTime"];
        }
    }
}
