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
 * 团队属性
 *
 * @method string getId() 获取队伍ID。最长不超过16个字符。
 * @method void setId(string $Id) 设置队伍ID。最长不超过16个字符。
 * @method string getName() 获取队伍名称。最长不超过32个字符。
 * @method void setName(string $Name) 设置队伍名称。最长不超过32个字符。
 * @method integer getMinPlayers() 获取队伍最小人数。最大不超过100人。
 * @method void setMinPlayers(integer $MinPlayers) 设置队伍最小人数。最大不超过100人。
 * @method integer getMaxPlayers() 获取队伍最大人数。最大不超过100人。
 * @method void setMaxPlayers(integer $MaxPlayers) 设置队伍最大人数。最大不超过100人。
 */
class Team extends AbstractModel
{
    /**
     * @var string 队伍ID。最长不超过16个字符。
     */
    public $Id;

    /**
     * @var string 队伍名称。最长不超过32个字符。
     */
    public $Name;

    /**
     * @var integer 队伍最小人数。最大不超过100人。
     */
    public $MinPlayers;

    /**
     * @var integer 队伍最大人数。最大不超过100人。
     */
    public $MaxPlayers;

    /**
     * @param string $Id 队伍ID。最长不超过16个字符。
     * @param string $Name 队伍名称。最长不超过32个字符。
     * @param integer $MinPlayers 队伍最小人数。最大不超过100人。
     * @param integer $MaxPlayers 队伍最大人数。最大不超过100人。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MinPlayers",$param) and $param["MinPlayers"] !== null) {
            $this->MinPlayers = $param["MinPlayers"];
        }

        if (array_key_exists("MaxPlayers",$param) and $param["MaxPlayers"] !== null) {
            $this->MaxPlayers = $param["MaxPlayers"];
        }
    }
}
