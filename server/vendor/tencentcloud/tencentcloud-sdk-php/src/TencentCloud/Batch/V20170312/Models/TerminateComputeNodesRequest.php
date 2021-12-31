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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateComputeNodes请求参数结构体
 *
 * @method string getEnvId() 获取计算环境ID
 * @method void setEnvId(string $EnvId) 设置计算环境ID
 * @method array getComputeNodeIds() 获取计算节点ID列表
 * @method void setComputeNodeIds(array $ComputeNodeIds) 设置计算节点ID列表
 */
class TerminateComputeNodesRequest extends AbstractModel
{
    /**
     * @var string 计算环境ID
     */
    public $EnvId;

    /**
     * @var array 计算节点ID列表
     */
    public $ComputeNodeIds;

    /**
     * @param string $EnvId 计算环境ID
     * @param array $ComputeNodeIds 计算节点ID列表
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ComputeNodeIds",$param) and $param["ComputeNodeIds"] !== null) {
            $this->ComputeNodeIds = $param["ComputeNodeIds"];
        }
    }
}
