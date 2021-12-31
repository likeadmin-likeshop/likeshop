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
 * DescribeGameServerSessions请求参数结构体
 *
 * @method string getAliasId() 获取别名ID
 * @method void setAliasId(string $AliasId) 设置别名ID
 * @method string getFleetId() 获取舰队ID
 * @method void setFleetId(string $FleetId) 设置舰队ID
 * @method string getGameServerSessionId() 获取游戏服务器会话ID，最小长度不小于1个ASCII字符，最大长度不超过48个ASCII字符
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏服务器会话ID，最小长度不小于1个ASCII字符，最大长度不超过48个ASCII字符
 * @method integer getLimit() 获取单次查询记录数上限
 * @method void setLimit(integer $Limit) 设置单次查询记录数上限
 * @method string getNextToken() 获取页偏移，用于查询下一页，最小长度不小于1个ASCII字符，最大长度不超过1024个ASCII字符
 * @method void setNextToken(string $NextToken) 设置页偏移，用于查询下一页，最小长度不小于1个ASCII字符，最大长度不超过1024个ASCII字符
 * @method string getStatusFilter() 获取游戏服务器会话状态(ACTIVE,ACTIVATING,TERMINATED,TERMINATING,ERROR)
 * @method void setStatusFilter(string $StatusFilter) 设置游戏服务器会话状态(ACTIVE,ACTIVATING,TERMINATED,TERMINATING,ERROR)
 */
class DescribeGameServerSessionsRequest extends AbstractModel
{
    /**
     * @var string 别名ID
     */
    public $AliasId;

    /**
     * @var string 舰队ID
     */
    public $FleetId;

    /**
     * @var string 游戏服务器会话ID，最小长度不小于1个ASCII字符，最大长度不超过48个ASCII字符
     */
    public $GameServerSessionId;

    /**
     * @var integer 单次查询记录数上限
     */
    public $Limit;

    /**
     * @var string 页偏移，用于查询下一页，最小长度不小于1个ASCII字符，最大长度不超过1024个ASCII字符
     */
    public $NextToken;

    /**
     * @var string 游戏服务器会话状态(ACTIVE,ACTIVATING,TERMINATED,TERMINATING,ERROR)
     */
    public $StatusFilter;

    /**
     * @param string $AliasId 别名ID
     * @param string $FleetId 舰队ID
     * @param string $GameServerSessionId 游戏服务器会话ID，最小长度不小于1个ASCII字符，最大长度不超过48个ASCII字符
     * @param integer $Limit 单次查询记录数上限
     * @param string $NextToken 页偏移，用于查询下一页，最小长度不小于1个ASCII字符，最大长度不超过1024个ASCII字符
     * @param string $StatusFilter 游戏服务器会话状态(ACTIVE,ACTIVATING,TERMINATED,TERMINATING,ERROR)
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
        if (array_key_exists("AliasId",$param) and $param["AliasId"] !== null) {
            $this->AliasId = $param["AliasId"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("StatusFilter",$param) and $param["StatusFilter"] !== null) {
            $this->StatusFilter = $param["StatusFilter"];
        }
    }
}
