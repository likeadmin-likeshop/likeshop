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
 * 房间信息详情。
 *
 * @method string getName() 获取表示房间名称。最长不超过32个字符。
 * @method void setName(string $Name) 设置表示房间名称。最长不超过32个字符。
 * @method integer getMaxPlayers() 获取表示房间最大玩家数量。最大不超过100人。
 * @method void setMaxPlayers(integer $MaxPlayers) 设置表示房间最大玩家数量。最大不超过100人。
 * @method string getOwnerOpenId() 获取表示房主OpenId。最长不超过16个字符。
 * @method void setOwnerOpenId(string $OwnerOpenId) 设置表示房主OpenId。最长不超过16个字符。
 * @method boolean getIsPrivate() 获取表示是否私有，私有指的是不允许其他玩家通过匹配加入房间。
 * @method void setIsPrivate(boolean $IsPrivate) 设置表示是否私有，私有指的是不允许其他玩家通过匹配加入房间。
 * @method array getPlayers() 获取表示玩家详情列表。
 * @method void setPlayers(array $Players) 设置表示玩家详情列表。
 * @method array getTeams() 获取表示团队属性列表。
 * @method void setTeams(array $Teams) 设置表示团队属性列表。
 * @method string getId() 获取表示房间 ID。出参用，由后端返回。
 * @method void setId(string $Id) 设置表示房间 ID。出参用，由后端返回。
 * @method string getType() 获取表示房间类型。最长不超过32个字符。
 * @method void setType(string $Type) 设置表示房间类型。最长不超过32个字符。
 * @method integer getCreateType() 获取表示创建方式：0.单人主动发起创建房间请求；1.多人在线匹配请求分配房间；2. 直接创建满员房间。调用云API的创房请求默认为3，目前通过云API调用只支持第3种方式。
 * @method void setCreateType(integer $CreateType) 设置表示创建方式：0.单人主动发起创建房间请求；1.多人在线匹配请求分配房间；2. 直接创建满员房间。调用云API的创房请求默认为3，目前通过云API调用只支持第3种方式。
 * @method string getCustomProperties() 获取表示自定义房间属性，不传为空字符串。最长不超过1024个字符。
 * @method void setCustomProperties(string $CustomProperties) 设置表示自定义房间属性，不传为空字符串。最长不超过1024个字符。
 * @method integer getFrameSyncState() 获取表示房间帧同步状态。0表示未开始帧同步，1表示已开始帧同步，用于出参。
 * @method void setFrameSyncState(integer $FrameSyncState) 设置表示房间帧同步状态。0表示未开始帧同步，1表示已开始帧同步，用于出参。
 * @method integer getFrameRate() 获取表示帧率。由控制台设置，用于出参。
 * @method void setFrameRate(integer $FrameRate) 设置表示帧率。由控制台设置，用于出参。
 * @method string getRouteId() 获取表示路由ID。用于出参。
 * @method void setRouteId(string $RouteId) 设置表示路由ID。用于出参。
 * @method integer getCreateTime() 获取表示房间创建的时间戳（单位：秒）。
 * @method void setCreateTime(integer $CreateTime) 设置表示房间创建的时间戳（单位：秒）。
 * @method integer getStartGameTime() 获取表示开始帧同步时的时间戳（单位：秒）,未开始帧同步时返回为0。
 * @method void setStartGameTime(integer $StartGameTime) 设置表示开始帧同步时的时间戳（单位：秒）,未开始帧同步时返回为0。
 * @method boolean getIsForbidJoin() 获取表示是否禁止加入房间。出参使用，默认为False，通过SDK的ChangeRoom接口可以修改。
 * @method void setIsForbidJoin(boolean $IsForbidJoin) 设置表示是否禁止加入房间。出参使用，默认为False，通过SDK的ChangeRoom接口可以修改。
 * @method string getOwner() 获取表示房主PlayerId。
 * @method void setOwner(string $Owner) 设置表示房主PlayerId。
 */
class Room extends AbstractModel
{
    /**
     * @var string 表示房间名称。最长不超过32个字符。
     */
    public $Name;

    /**
     * @var integer 表示房间最大玩家数量。最大不超过100人。
     */
    public $MaxPlayers;

    /**
     * @var string 表示房主OpenId。最长不超过16个字符。
     */
    public $OwnerOpenId;

    /**
     * @var boolean 表示是否私有，私有指的是不允许其他玩家通过匹配加入房间。
     */
    public $IsPrivate;

    /**
     * @var array 表示玩家详情列表。
     */
    public $Players;

    /**
     * @var array 表示团队属性列表。
     */
    public $Teams;

    /**
     * @var string 表示房间 ID。出参用，由后端返回。
     */
    public $Id;

    /**
     * @var string 表示房间类型。最长不超过32个字符。
     */
    public $Type;

    /**
     * @var integer 表示创建方式：0.单人主动发起创建房间请求；1.多人在线匹配请求分配房间；2. 直接创建满员房间。调用云API的创房请求默认为3，目前通过云API调用只支持第3种方式。
     */
    public $CreateType;

    /**
     * @var string 表示自定义房间属性，不传为空字符串。最长不超过1024个字符。
     */
    public $CustomProperties;

    /**
     * @var integer 表示房间帧同步状态。0表示未开始帧同步，1表示已开始帧同步，用于出参。
     */
    public $FrameSyncState;

    /**
     * @var integer 表示帧率。由控制台设置，用于出参。
     */
    public $FrameRate;

    /**
     * @var string 表示路由ID。用于出参。
     */
    public $RouteId;

    /**
     * @var integer 表示房间创建的时间戳（单位：秒）。
     */
    public $CreateTime;

    /**
     * @var integer 表示开始帧同步时的时间戳（单位：秒）,未开始帧同步时返回为0。
     */
    public $StartGameTime;

    /**
     * @var boolean 表示是否禁止加入房间。出参使用，默认为False，通过SDK的ChangeRoom接口可以修改。
     */
    public $IsForbidJoin;

    /**
     * @var string 表示房主PlayerId。
     */
    public $Owner;

    /**
     * @param string $Name 表示房间名称。最长不超过32个字符。
     * @param integer $MaxPlayers 表示房间最大玩家数量。最大不超过100人。
     * @param string $OwnerOpenId 表示房主OpenId。最长不超过16个字符。
     * @param boolean $IsPrivate 表示是否私有，私有指的是不允许其他玩家通过匹配加入房间。
     * @param array $Players 表示玩家详情列表。
     * @param array $Teams 表示团队属性列表。
     * @param string $Id 表示房间 ID。出参用，由后端返回。
     * @param string $Type 表示房间类型。最长不超过32个字符。
     * @param integer $CreateType 表示创建方式：0.单人主动发起创建房间请求；1.多人在线匹配请求分配房间；2. 直接创建满员房间。调用云API的创房请求默认为3，目前通过云API调用只支持第3种方式。
     * @param string $CustomProperties 表示自定义房间属性，不传为空字符串。最长不超过1024个字符。
     * @param integer $FrameSyncState 表示房间帧同步状态。0表示未开始帧同步，1表示已开始帧同步，用于出参。
     * @param integer $FrameRate 表示帧率。由控制台设置，用于出参。
     * @param string $RouteId 表示路由ID。用于出参。
     * @param integer $CreateTime 表示房间创建的时间戳（单位：秒）。
     * @param integer $StartGameTime 表示开始帧同步时的时间戳（单位：秒）,未开始帧同步时返回为0。
     * @param boolean $IsForbidJoin 表示是否禁止加入房间。出参使用，默认为False，通过SDK的ChangeRoom接口可以修改。
     * @param string $Owner 表示房主PlayerId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MaxPlayers",$param) and $param["MaxPlayers"] !== null) {
            $this->MaxPlayers = $param["MaxPlayers"];
        }

        if (array_key_exists("OwnerOpenId",$param) and $param["OwnerOpenId"] !== null) {
            $this->OwnerOpenId = $param["OwnerOpenId"];
        }

        if (array_key_exists("IsPrivate",$param) and $param["IsPrivate"] !== null) {
            $this->IsPrivate = $param["IsPrivate"];
        }

        if (array_key_exists("Players",$param) and $param["Players"] !== null) {
            $this->Players = [];
            foreach ($param["Players"] as $key => $value){
                $obj = new Player();
                $obj->deserialize($value);
                array_push($this->Players, $obj);
            }
        }

        if (array_key_exists("Teams",$param) and $param["Teams"] !== null) {
            $this->Teams = [];
            foreach ($param["Teams"] as $key => $value){
                $obj = new Team();
                $obj->deserialize($value);
                array_push($this->Teams, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateType",$param) and $param["CreateType"] !== null) {
            $this->CreateType = $param["CreateType"];
        }

        if (array_key_exists("CustomProperties",$param) and $param["CustomProperties"] !== null) {
            $this->CustomProperties = $param["CustomProperties"];
        }

        if (array_key_exists("FrameSyncState",$param) and $param["FrameSyncState"] !== null) {
            $this->FrameSyncState = $param["FrameSyncState"];
        }

        if (array_key_exists("FrameRate",$param) and $param["FrameRate"] !== null) {
            $this->FrameRate = $param["FrameRate"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartGameTime",$param) and $param["StartGameTime"] !== null) {
            $this->StartGameTime = $param["StartGameTime"];
        }

        if (array_key_exists("IsForbidJoin",$param) and $param["IsForbidJoin"] !== null) {
            $this->IsForbidJoin = $param["IsForbidJoin"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
