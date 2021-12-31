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
 * 玩家信息详情
 *
 * @method string getOpenId() 获取玩家 OpenId。最长不超过64个字符。
 * @method void setOpenId(string $OpenId) 设置玩家 OpenId。最长不超过64个字符。
 * @method string getName() 获取玩家昵称。最长不超过32个字符。
 * @method void setName(string $Name) 设置玩家昵称。最长不超过32个字符。
 * @method string getTeamId() 获取队伍 ID。最长不超过16个字符。
 * @method void setTeamId(string $TeamId) 设置队伍 ID。最长不超过16个字符。
 * @method boolean getIsRobot() 获取是否为机器人。
 * @method void setIsRobot(boolean $IsRobot) 设置是否为机器人。
 * @method string getPlayerId() 获取玩家 PlayerId。出参使用，由后端返回。
 * @method void setPlayerId(string $PlayerId) 设置玩家 PlayerId。出参使用，由后端返回。
 * @method integer getCustomPlayerStatus() 获取自定义玩家状态。非负数，最大不超过4294967295。默认为0。
 * @method void setCustomPlayerStatus(integer $CustomPlayerStatus) 设置自定义玩家状态。非负数，最大不超过4294967295。默认为0。
 * @method string getCustomProfile() 获取自定义玩家属性。最长不超过256个字符。默认为空字符串。
 * @method void setCustomProfile(string $CustomProfile) 设置自定义玩家属性。最长不超过256个字符。默认为空字符串。
 */
class Player extends AbstractModel
{
    /**
     * @var string 玩家 OpenId。最长不超过64个字符。
     */
    public $OpenId;

    /**
     * @var string 玩家昵称。最长不超过32个字符。
     */
    public $Name;

    /**
     * @var string 队伍 ID。最长不超过16个字符。
     */
    public $TeamId;

    /**
     * @var boolean 是否为机器人。
     */
    public $IsRobot;

    /**
     * @var string 玩家 PlayerId。出参使用，由后端返回。
     */
    public $PlayerId;

    /**
     * @var integer 自定义玩家状态。非负数，最大不超过4294967295。默认为0。
     */
    public $CustomPlayerStatus;

    /**
     * @var string 自定义玩家属性。最长不超过256个字符。默认为空字符串。
     */
    public $CustomProfile;

    /**
     * @param string $OpenId 玩家 OpenId。最长不超过64个字符。
     * @param string $Name 玩家昵称。最长不超过32个字符。
     * @param string $TeamId 队伍 ID。最长不超过16个字符。
     * @param boolean $IsRobot 是否为机器人。
     * @param string $PlayerId 玩家 PlayerId。出参使用，由后端返回。
     * @param integer $CustomPlayerStatus 自定义玩家状态。非负数，最大不超过4294967295。默认为0。
     * @param string $CustomProfile 自定义玩家属性。最长不超过256个字符。默认为空字符串。
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("IsRobot",$param) and $param["IsRobot"] !== null) {
            $this->IsRobot = $param["IsRobot"];
        }

        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("CustomPlayerStatus",$param) and $param["CustomPlayerStatus"] !== null) {
            $this->CustomPlayerStatus = $param["CustomPlayerStatus"];
        }

        if (array_key_exists("CustomProfile",$param) and $param["CustomProfile"] !== null) {
            $this->CustomProfile = $param["CustomProfile"];
        }
    }
}
