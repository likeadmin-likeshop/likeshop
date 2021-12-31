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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述分片DB节点信息
 *
 * @method string getNodeId() 获取DB节点ID
 * @method void setNodeId(string $NodeId) 设置DB节点ID
 * @method string getRole() 获取DB节点角色，取值为master或者slave
 * @method void setRole(string $Role) 设置DB节点角色，取值为master或者slave
 * @method string getShardId() 获取节点所属分片的分片ID
 * @method void setShardId(string $ShardId) 设置节点所属分片的分片ID
 */
class BriefNodeInfo extends AbstractModel
{
    /**
     * @var string DB节点ID
     */
    public $NodeId;

    /**
     * @var string DB节点角色，取值为master或者slave
     */
    public $Role;

    /**
     * @var string 节点所属分片的分片ID
     */
    public $ShardId;

    /**
     * @param string $NodeId DB节点ID
     * @param string $Role DB节点角色，取值为master或者slave
     * @param string $ShardId 节点所属分片的分片ID
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }
    }
}
