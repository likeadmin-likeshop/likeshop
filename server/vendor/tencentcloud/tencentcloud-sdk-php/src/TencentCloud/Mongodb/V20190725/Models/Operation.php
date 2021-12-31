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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 需要终止的操作
 *
 * @method string getReplicaSetName() 获取操作所在的分片名
 * @method void setReplicaSetName(string $ReplicaSetName) 设置操作所在的分片名
 * @method string getNodeName() 获取操作所在的节点名
 * @method void setNodeName(string $NodeName) 设置操作所在的节点名
 * @method integer getOpId() 获取操作序号
 * @method void setOpId(integer $OpId) 设置操作序号
 */
class Operation extends AbstractModel
{
    /**
     * @var string 操作所在的分片名
     */
    public $ReplicaSetName;

    /**
     * @var string 操作所在的节点名
     */
    public $NodeName;

    /**
     * @var integer 操作序号
     */
    public $OpId;

    /**
     * @param string $ReplicaSetName 操作所在的分片名
     * @param string $NodeName 操作所在的节点名
     * @param integer $OpId 操作序号
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
        if (array_key_exists("ReplicaSetName",$param) and $param["ReplicaSetName"] !== null) {
            $this->ReplicaSetName = $param["ReplicaSetName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("OpId",$param) and $param["OpId"] !== null) {
            $this->OpId = $param["OpId"];
        }
    }
}
