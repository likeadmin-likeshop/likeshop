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
 * 游戏会话详情
 *
 * @method string getCreationTime() 获取游戏服务器会话创建时间
 * @method void setCreationTime(string $CreationTime) 设置游戏服务器会话创建时间
 * @method string getCreatorId() 获取创建者ID，最大长度不超过1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorId(string $CreatorId) 设置创建者ID，最大长度不超过1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentPlayerSessionCount() 获取当前玩家数量，最小值不小于0
 * @method void setCurrentPlayerSessionCount(integer $CurrentPlayerSessionCount) 设置当前玩家数量，最小值不小于0
 * @method string getDnsName() 获取CVM的DNS标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDnsName(string $DnsName) 设置CVM的DNS标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFleetId() 获取舰队ID
 * @method void setFleetId(string $FleetId) 设置舰队ID
 * @method array getGameProperties() 获取游戏属性，最大长度不超过16组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameProperties(array $GameProperties) 设置游戏属性，最大长度不超过16组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGameServerSessionData() 获取游戏服务器会话属性详情，最大长度不超过4096个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameServerSessionData(string $GameServerSessionData) 设置游戏服务器会话属性详情，最大长度不超过4096个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGameServerSessionId() 获取游戏服务器会话ID，最小长度不小于1个ASCII字符，最大长度不超过48个ASCII字符
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏服务器会话ID，最小长度不小于1个ASCII字符，最大长度不超过48个ASCII字符
 * @method string getIpAddress() 获取CVM IP地址
 * @method void setIpAddress(string $IpAddress) 设置CVM IP地址
 * @method string getMatchmakerData() 获取对战进程详情，最大长度不超过400000个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchmakerData(string $MatchmakerData) 设置对战进程详情，最大长度不超过400000个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaximumPlayerSessionCount() 获取最大玩家数量，最小值不小于0
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) 设置最大玩家数量，最小值不小于0
 * @method string getName() 获取游戏服务器会话名称，最大长度不超过1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置游戏服务器会话名称，最大长度不超过1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlayerSessionCreationPolicy() 获取玩家会话创建策略（ACCEPT_ALL,DENY_ALL）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayerSessionCreationPolicy(string $PlayerSessionCreationPolicy) 设置玩家会话创建策略（ACCEPT_ALL,DENY_ALL）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取端口号，最小值不小于1，最大值不超过60000
 * @method void setPort(integer $Port) 设置端口号，最小值不小于1，最大值不超过60000
 * @method string getStatus() 获取游戏服务器会话状态（ACTIVE,ACTIVATING,TERMINATED,TERMINATING,ERROR）
 * @method void setStatus(string $Status) 设置游戏服务器会话状态（ACTIVE,ACTIVATING,TERMINATED,TERMINATING,ERROR）
 * @method string getStatusReason() 获取游戏服务器会话状态附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusReason(string $StatusReason) 设置游戏服务器会话状态附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTerminationTime() 获取终止的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerminationTime(string $TerminationTime) 设置终止的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取实例类型，最大长度不超过128个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置实例类型，最大长度不超过128个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentCustomCount() 获取当前自定义数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentCustomCount(integer $CurrentCustomCount) 设置当前自定义数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxCustomCount() 获取最大自定义数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxCustomCount(integer $MaxCustomCount) 设置最大自定义数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvailabilityStatus() 获取会话可用性状态，是否被屏蔽（Enable,Disable）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailabilityStatus(string $AvailabilityStatus) 设置会话可用性状态，是否被屏蔽（Enable,Disable）
注意：此字段可能返回 null，表示取不到有效值。
 */
class GameServerSession extends AbstractModel
{
    /**
     * @var string 游戏服务器会话创建时间
     */
    public $CreationTime;

    /**
     * @var string 创建者ID，最大长度不超过1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorId;

    /**
     * @var integer 当前玩家数量，最小值不小于0
     */
    public $CurrentPlayerSessionCount;

    /**
     * @var string CVM的DNS标识符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DnsName;

    /**
     * @var string 舰队ID
     */
    public $FleetId;

    /**
     * @var array 游戏属性，最大长度不超过16组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameProperties;

    /**
     * @var string 游戏服务器会话属性详情，最大长度不超过4096个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameServerSessionData;

    /**
     * @var string 游戏服务器会话ID，最小长度不小于1个ASCII字符，最大长度不超过48个ASCII字符
     */
    public $GameServerSessionId;

    /**
     * @var string CVM IP地址
     */
    public $IpAddress;

    /**
     * @var string 对战进程详情，最大长度不超过400000个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchmakerData;

    /**
     * @var integer 最大玩家数量，最小值不小于0
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string 游戏服务器会话名称，最大长度不超过1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 玩家会话创建策略（ACCEPT_ALL,DENY_ALL）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayerSessionCreationPolicy;

    /**
     * @var integer 端口号，最小值不小于1，最大值不超过60000
     */
    public $Port;

    /**
     * @var string 游戏服务器会话状态（ACTIVE,ACTIVATING,TERMINATED,TERMINATING,ERROR）
     */
    public $Status;

    /**
     * @var string 游戏服务器会话状态附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusReason;

    /**
     * @var string 终止的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerminationTime;

    /**
     * @var string 实例类型，最大长度不超过128个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var integer 当前自定义数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentCustomCount;

    /**
     * @var integer 最大自定义数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxCustomCount;

    /**
     * @var integer 权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string 会话可用性状态，是否被屏蔽（Enable,Disable）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailabilityStatus;

    /**
     * @param string $CreationTime 游戏服务器会话创建时间
     * @param string $CreatorId 创建者ID，最大长度不超过1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentPlayerSessionCount 当前玩家数量，最小值不小于0
     * @param string $DnsName CVM的DNS标识符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FleetId 舰队ID
     * @param array $GameProperties 游戏属性，最大长度不超过16组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GameServerSessionData 游戏服务器会话属性详情，最大长度不超过4096个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GameServerSessionId 游戏服务器会话ID，最小长度不小于1个ASCII字符，最大长度不超过48个ASCII字符
     * @param string $IpAddress CVM IP地址
     * @param string $MatchmakerData 对战进程详情，最大长度不超过400000个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaximumPlayerSessionCount 最大玩家数量，最小值不小于0
     * @param string $Name 游戏服务器会话名称，最大长度不超过1024个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlayerSessionCreationPolicy 玩家会话创建策略（ACCEPT_ALL,DENY_ALL）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 端口号，最小值不小于1，最大值不超过60000
     * @param string $Status 游戏服务器会话状态（ACTIVE,ACTIVATING,TERMINATED,TERMINATING,ERROR）
     * @param string $StatusReason 游戏服务器会话状态附加信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TerminationTime 终止的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 实例类型，最大长度不超过128个ASCII字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentCustomCount 当前自定义数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxCustomCount 最大自定义数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AvailabilityStatus 会话可用性状态，是否被屏蔽（Enable,Disable）
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

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("CurrentPlayerSessionCount",$param) and $param["CurrentPlayerSessionCount"] !== null) {
            $this->CurrentPlayerSessionCount = $param["CurrentPlayerSessionCount"];
        }

        if (array_key_exists("DnsName",$param) and $param["DnsName"] !== null) {
            $this->DnsName = $param["DnsName"];
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

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("MatchmakerData",$param) and $param["MatchmakerData"] !== null) {
            $this->MatchmakerData = $param["MatchmakerData"];
        }

        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PlayerSessionCreationPolicy",$param) and $param["PlayerSessionCreationPolicy"] !== null) {
            $this->PlayerSessionCreationPolicy = $param["PlayerSessionCreationPolicy"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("TerminationTime",$param) and $param["TerminationTime"] !== null) {
            $this->TerminationTime = $param["TerminationTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CurrentCustomCount",$param) and $param["CurrentCustomCount"] !== null) {
            $this->CurrentCustomCount = $param["CurrentCustomCount"];
        }

        if (array_key_exists("MaxCustomCount",$param) and $param["MaxCustomCount"] !== null) {
            $this->MaxCustomCount = $param["MaxCustomCount"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("AvailabilityStatus",$param) and $param["AvailabilityStatus"] !== null) {
            $this->AvailabilityStatus = $param["AvailabilityStatus"];
        }
    }
}
