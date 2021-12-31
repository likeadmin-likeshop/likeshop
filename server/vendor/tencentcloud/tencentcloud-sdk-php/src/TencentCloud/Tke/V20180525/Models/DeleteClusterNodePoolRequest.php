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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteClusterNodePool请求参数结构体
 *
 * @method string getClusterId() 获取节点池对应的 ClusterId
 * @method void setClusterId(string $ClusterId) 设置节点池对应的 ClusterId
 * @method array getNodePoolIds() 获取需要删除的节点池 Id 列表
 * @method void setNodePoolIds(array $NodePoolIds) 设置需要删除的节点池 Id 列表
 * @method boolean getKeepInstance() 获取删除节点池时是否保留节点池内节点(节点仍然会被移出集群，但对应的实例不会被销毁)
 * @method void setKeepInstance(boolean $KeepInstance) 设置删除节点池时是否保留节点池内节点(节点仍然会被移出集群，但对应的实例不会被销毁)
 */
class DeleteClusterNodePoolRequest extends AbstractModel
{
    /**
     * @var string 节点池对应的 ClusterId
     */
    public $ClusterId;

    /**
     * @var array 需要删除的节点池 Id 列表
     */
    public $NodePoolIds;

    /**
     * @var boolean 删除节点池时是否保留节点池内节点(节点仍然会被移出集群，但对应的实例不会被销毁)
     */
    public $KeepInstance;

    /**
     * @param string $ClusterId 节点池对应的 ClusterId
     * @param array $NodePoolIds 需要删除的节点池 Id 列表
     * @param boolean $KeepInstance 删除节点池时是否保留节点池内节点(节点仍然会被移出集群，但对应的实例不会被销毁)
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodePoolIds",$param) and $param["NodePoolIds"] !== null) {
            $this->NodePoolIds = $param["NodePoolIds"];
        }

        if (array_key_exists("KeepInstance",$param) and $param["KeepInstance"] !== null) {
            $this->KeepInstance = $param["KeepInstance"];
        }
    }
}
