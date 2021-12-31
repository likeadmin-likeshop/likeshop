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
 * 加入存量节点时的节点池选项
 *
 * @method boolean getAddToNodePool() 获取是否加入节点池
 * @method void setAddToNodePool(boolean $AddToNodePool) 设置是否加入节点池
 * @method string getNodePoolId() 获取节点池id
 * @method void setNodePoolId(string $NodePoolId) 设置节点池id
 * @method boolean getInheritConfigurationFromNodePool() 获取是否继承节点池相关配置
 * @method void setInheritConfigurationFromNodePool(boolean $InheritConfigurationFromNodePool) 设置是否继承节点池相关配置
 */
class NodePoolOption extends AbstractModel
{
    /**
     * @var boolean 是否加入节点池
     */
    public $AddToNodePool;

    /**
     * @var string 节点池id
     */
    public $NodePoolId;

    /**
     * @var boolean 是否继承节点池相关配置
     */
    public $InheritConfigurationFromNodePool;

    /**
     * @param boolean $AddToNodePool 是否加入节点池
     * @param string $NodePoolId 节点池id
     * @param boolean $InheritConfigurationFromNodePool 是否继承节点池相关配置
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
        if (array_key_exists("AddToNodePool",$param) and $param["AddToNodePool"] !== null) {
            $this->AddToNodePool = $param["AddToNodePool"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("InheritConfigurationFromNodePool",$param) and $param["InheritConfigurationFromNodePool"] !== null) {
            $this->InheritConfigurationFromNodePool = $param["InheritConfigurationFromNodePool"];
        }
    }
}
