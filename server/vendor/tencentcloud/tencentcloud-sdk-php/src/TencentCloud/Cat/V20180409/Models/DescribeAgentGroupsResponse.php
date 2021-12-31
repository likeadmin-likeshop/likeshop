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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentGroups返回参数结构体
 *
 * @method AgentGroup getSysDefaultGroup() 获取用户所属的系统默认拨测分组
 * @method void setSysDefaultGroup(AgentGroup $SysDefaultGroup) 设置用户所属的系统默认拨测分组
 * @method array getCustomGroups() 获取用户创建的拨测分组列表
 * @method void setCustomGroups(array $CustomGroups) 设置用户创建的拨测分组列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentGroupsResponse extends AbstractModel
{
    /**
     * @var AgentGroup 用户所属的系统默认拨测分组
     */
    public $SysDefaultGroup;

    /**
     * @var array 用户创建的拨测分组列表
     */
    public $CustomGroups;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AgentGroup $SysDefaultGroup 用户所属的系统默认拨测分组
     * @param array $CustomGroups 用户创建的拨测分组列表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SysDefaultGroup",$param) and $param["SysDefaultGroup"] !== null) {
            $this->SysDefaultGroup = new AgentGroup();
            $this->SysDefaultGroup->deserialize($param["SysDefaultGroup"]);
        }

        if (array_key_exists("CustomGroups",$param) and $param["CustomGroups"] !== null) {
            $this->CustomGroups = [];
            foreach ($param["CustomGroups"] as $key => $value){
                $obj = new AgentGroup();
                $obj->deserialize($value);
                array_push($this->CustomGroups, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
