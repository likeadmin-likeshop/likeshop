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
 * ModifyRoom请求参数结构体
 *
 * @method string getGameId() 获取游戏资源Id。
 * @method void setGameId(string $GameId) 设置游戏资源Id。
 * @method string getRoomId() 获取房间ID。
 * @method void setRoomId(string $RoomId) 设置房间ID。
 * @method string getPlayerId() 获取发起者的PlayerId。
 * @method void setPlayerId(string $PlayerId) 设置发起者的PlayerId。
 * @method array getChangeRoomOptionList() 获取需要修改的房间选项，0表示房间名称，1表示房主，2表示是否允许观战，3表示是否支持邀请码/密码，4表示是否私有，5表示是否自定义房间属性，6表示是否禁止加人。
 * @method void setChangeRoomOptionList(array $ChangeRoomOptionList) 设置需要修改的房间选项，0表示房间名称，1表示房主，2表示是否允许观战，3表示是否支持邀请码/密码，4表示是否私有，5表示是否自定义房间属性，6表示是否禁止加人。
 * @method string getRoomName() 获取房间名称。
 * @method void setRoomName(string $RoomName) 设置房间名称。
 * @method string getOwner() 获取变更房主。
 * @method void setOwner(string $Owner) 设置变更房主。
 * @method boolean getIsViewed() 获取是否支持观战。
 * @method void setIsViewed(boolean $IsViewed) 设置是否支持观战。
 * @method boolean getIsInvited() 获取是否支持邀请码/密码。
 * @method void setIsInvited(boolean $IsInvited) 设置是否支持邀请码/密码。
 * @method boolean getIsPrivate() 获取是否私有。
 * @method void setIsPrivate(boolean $IsPrivate) 设置是否私有。
 * @method string getCustomProperties() 获取自定义房间属性。
 * @method void setCustomProperties(string $CustomProperties) 设置自定义房间属性。
 * @method boolean getIsForbidJoin() 获取房间是否禁止加人。
 * @method void setIsForbidJoin(boolean $IsForbidJoin) 设置房间是否禁止加人。
 */
class ModifyRoomRequest extends AbstractModel
{
    /**
     * @var string 游戏资源Id。
     */
    public $GameId;

    /**
     * @var string 房间ID。
     */
    public $RoomId;

    /**
     * @var string 发起者的PlayerId。
     */
    public $PlayerId;

    /**
     * @var array 需要修改的房间选项，0表示房间名称，1表示房主，2表示是否允许观战，3表示是否支持邀请码/密码，4表示是否私有，5表示是否自定义房间属性，6表示是否禁止加人。
     */
    public $ChangeRoomOptionList;

    /**
     * @var string 房间名称。
     */
    public $RoomName;

    /**
     * @var string 变更房主。
     */
    public $Owner;

    /**
     * @var boolean 是否支持观战。
     */
    public $IsViewed;

    /**
     * @var boolean 是否支持邀请码/密码。
     */
    public $IsInvited;

    /**
     * @var boolean 是否私有。
     */
    public $IsPrivate;

    /**
     * @var string 自定义房间属性。
     */
    public $CustomProperties;

    /**
     * @var boolean 房间是否禁止加人。
     */
    public $IsForbidJoin;

    /**
     * @param string $GameId 游戏资源Id。
     * @param string $RoomId 房间ID。
     * @param string $PlayerId 发起者的PlayerId。
     * @param array $ChangeRoomOptionList 需要修改的房间选项，0表示房间名称，1表示房主，2表示是否允许观战，3表示是否支持邀请码/密码，4表示是否私有，5表示是否自定义房间属性，6表示是否禁止加人。
     * @param string $RoomName 房间名称。
     * @param string $Owner 变更房主。
     * @param boolean $IsViewed 是否支持观战。
     * @param boolean $IsInvited 是否支持邀请码/密码。
     * @param boolean $IsPrivate 是否私有。
     * @param string $CustomProperties 自定义房间属性。
     * @param boolean $IsForbidJoin 房间是否禁止加人。
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("ChangeRoomOptionList",$param) and $param["ChangeRoomOptionList"] !== null) {
            $this->ChangeRoomOptionList = $param["ChangeRoomOptionList"];
        }

        if (array_key_exists("RoomName",$param) and $param["RoomName"] !== null) {
            $this->RoomName = $param["RoomName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("IsViewed",$param) and $param["IsViewed"] !== null) {
            $this->IsViewed = $param["IsViewed"];
        }

        if (array_key_exists("IsInvited",$param) and $param["IsInvited"] !== null) {
            $this->IsInvited = $param["IsInvited"];
        }

        if (array_key_exists("IsPrivate",$param) and $param["IsPrivate"] !== null) {
            $this->IsPrivate = $param["IsPrivate"];
        }

        if (array_key_exists("CustomProperties",$param) and $param["CustomProperties"] !== null) {
            $this->CustomProperties = $param["CustomProperties"];
        }

        if (array_key_exists("IsForbidJoin",$param) and $param["IsForbidJoin"] !== null) {
            $this->IsForbidJoin = $param["IsForbidJoin"];
        }
    }
}
