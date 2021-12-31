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
namespace TencentCloud\Organization\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetOrganizationMember返回参数结构体
 *
 * @method integer getUin() 获取组织成员UIN
 * @method void setUin(integer $Uin) 设置组织成员UIN
 * @method string getName() 获取组织成员名称
 * @method void setName(string $Name) 设置组织成员名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getJoinTime() 获取加入时间
 * @method void setJoinTime(string $JoinTime) 设置加入时间
 * @method integer getNodeId() 获取组织单元ID
 * @method void setNodeId(integer $NodeId) 设置组织单元ID
 * @method string getNodeName() 获取组织单元名称
 * @method void setNodeName(string $NodeName) 设置组织单元名称
 * @method integer getParentNodeId() 获取父组织单元ID
 * @method void setParentNodeId(integer $ParentNodeId) 设置父组织单元ID
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetOrganizationMemberResponse extends AbstractModel
{
    /**
     * @var integer 组织成员UIN
     */
    public $Uin;

    /**
     * @var string 组织成员名称
     */
    public $Name;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 加入时间
     */
    public $JoinTime;

    /**
     * @var integer 组织单元ID
     */
    public $NodeId;

    /**
     * @var string 组织单元名称
     */
    public $NodeName;

    /**
     * @var integer 父组织单元ID
     */
    public $ParentNodeId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Uin 组织成员UIN
     * @param string $Name 组织成员名称
     * @param string $Remark 备注
     * @param string $JoinTime 加入时间
     * @param integer $NodeId 组织单元ID
     * @param string $NodeName 组织单元名称
     * @param integer $ParentNodeId 父组织单元ID
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ParentNodeId",$param) and $param["ParentNodeId"] !== null) {
            $this->ParentNodeId = $param["ParentNodeId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
