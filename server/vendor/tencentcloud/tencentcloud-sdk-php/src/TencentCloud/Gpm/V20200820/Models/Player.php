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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 玩家信息。
 *
 * @method string getId() 获取玩家 PlayerId 长度 128 [a-zA-Z\d-\._]*
 * @method void setId(string $Id) 设置玩家 PlayerId 长度 128 [a-zA-Z\d-\._]*
 * @method string getName() 获取玩家昵称，长度 128
 * @method void setName(string $Name) 设置玩家昵称，长度 128
 * @method array getMatchAttributes() 获取玩家匹配属性，最多 10 条
 * @method void setMatchAttributes(array $MatchAttributes) 设置玩家匹配属性，最多 10 条
 * @method string getTeam() 获取队伍名，可以传递不同队伍名，长度 128 [a-zA-Z0-9-\.]*
 * @method void setTeam(string $Team) 设置队伍名，可以传递不同队伍名，长度 128 [a-zA-Z0-9-\.]*
 * @method integer getCustomPlayerStatus() 获取自定义玩家状态 透传参数 [0, 99999]
 * @method void setCustomPlayerStatus(integer $CustomPlayerStatus) 设置自定义玩家状态 透传参数 [0, 99999]
 * @method string getCustomProfile() 获取自定义玩家信息 透传参数 长度 1024
 * @method void setCustomProfile(string $CustomProfile) 设置自定义玩家信息 透传参数 长度 1024
 * @method array getRegionLatencies() 获取各区域延迟，最多 20 条
 * @method void setRegionLatencies(array $RegionLatencies) 设置各区域延迟，最多 20 条
 */
class Player extends AbstractModel
{
    /**
     * @var string 玩家 PlayerId 长度 128 [a-zA-Z\d-\._]*
     */
    public $Id;

    /**
     * @var string 玩家昵称，长度 128
     */
    public $Name;

    /**
     * @var array 玩家匹配属性，最多 10 条
     */
    public $MatchAttributes;

    /**
     * @var string 队伍名，可以传递不同队伍名，长度 128 [a-zA-Z0-9-\.]*
     */
    public $Team;

    /**
     * @var integer 自定义玩家状态 透传参数 [0, 99999]
     */
    public $CustomPlayerStatus;

    /**
     * @var string 自定义玩家信息 透传参数 长度 1024
     */
    public $CustomProfile;

    /**
     * @var array 各区域延迟，最多 20 条
     */
    public $RegionLatencies;

    /**
     * @param string $Id 玩家 PlayerId 长度 128 [a-zA-Z\d-\._]*
     * @param string $Name 玩家昵称，长度 128
     * @param array $MatchAttributes 玩家匹配属性，最多 10 条
     * @param string $Team 队伍名，可以传递不同队伍名，长度 128 [a-zA-Z0-9-\.]*
     * @param integer $CustomPlayerStatus 自定义玩家状态 透传参数 [0, 99999]
     * @param string $CustomProfile 自定义玩家信息 透传参数 长度 1024
     * @param array $RegionLatencies 各区域延迟，最多 20 条
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

        if (array_key_exists("MatchAttributes",$param) and $param["MatchAttributes"] !== null) {
            $this->MatchAttributes = [];
            foreach ($param["MatchAttributes"] as $key => $value){
                $obj = new MatchAttribute();
                $obj->deserialize($value);
                array_push($this->MatchAttributes, $obj);
            }
        }

        if (array_key_exists("Team",$param) and $param["Team"] !== null) {
            $this->Team = $param["Team"];
        }

        if (array_key_exists("CustomPlayerStatus",$param) and $param["CustomPlayerStatus"] !== null) {
            $this->CustomPlayerStatus = $param["CustomPlayerStatus"];
        }

        if (array_key_exists("CustomProfile",$param) and $param["CustomProfile"] !== null) {
            $this->CustomProfile = $param["CustomProfile"];
        }

        if (array_key_exists("RegionLatencies",$param) and $param["RegionLatencies"] !== null) {
            $this->RegionLatencies = [];
            foreach ($param["RegionLatencies"] as $key => $value){
                $obj = new RegionLatency();
                $obj->deserialize($value);
                array_push($this->RegionLatencies, $obj);
            }
        }
    }
}
