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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 团队信息
 *
 * @method string getTeamId() 获取团队 ID。
 * @method void setTeamId(string $TeamId) 设置团队 ID。
 * @method string getName() 获取团队名称。
 * @method void setName(string $Name) 设置团队名称。
 * @method integer getMemberCount() 获取团队成员个数
 * @method void setMemberCount(integer $MemberCount) 设置团队成员个数
 * @method string getCreateTime() 获取团队创建时间，格式按照 ISO 8601 标准表示。
 * @method void setCreateTime(string $CreateTime) 设置团队创建时间，格式按照 ISO 8601 标准表示。
 * @method string getUpdateTime() 获取团队最后更新时间，格式按照 ISO 8601 标准表示。
 * @method void setUpdateTime(string $UpdateTime) 设置团队最后更新时间，格式按照 ISO 8601 标准表示。
 */
class TeamInfo extends AbstractModel
{
    /**
     * @var string 团队 ID。
     */
    public $TeamId;

    /**
     * @var string 团队名称。
     */
    public $Name;

    /**
     * @var integer 团队成员个数
     */
    public $MemberCount;

    /**
     * @var string 团队创建时间，格式按照 ISO 8601 标准表示。
     */
    public $CreateTime;

    /**
     * @var string 团队最后更新时间，格式按照 ISO 8601 标准表示。
     */
    public $UpdateTime;

    /**
     * @param string $TeamId 团队 ID。
     * @param string $Name 团队名称。
     * @param integer $MemberCount 团队成员个数
     * @param string $CreateTime 团队创建时间，格式按照 ISO 8601 标准表示。
     * @param string $UpdateTime 团队最后更新时间，格式按照 ISO 8601 标准表示。
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
