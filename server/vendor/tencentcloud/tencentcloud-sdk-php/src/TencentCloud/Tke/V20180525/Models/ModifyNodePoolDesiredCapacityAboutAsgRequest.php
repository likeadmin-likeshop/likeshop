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
 * ModifyNodePoolDesiredCapacityAboutAsg请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getNodePoolId() 获取节点池id
 * @method void setNodePoolId(string $NodePoolId) 设置节点池id
 * @method integer getDesiredCapacity() 获取节点池所关联的伸缩组的期望实例数
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置节点池所关联的伸缩组的期望实例数
 */
class ModifyNodePoolDesiredCapacityAboutAsgRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 节点池id
     */
    public $NodePoolId;

    /**
     * @var integer 节点池所关联的伸缩组的期望实例数
     */
    public $DesiredCapacity;

    /**
     * @param string $ClusterId 集群id
     * @param string $NodePoolId 节点池id
     * @param integer $DesiredCapacity 节点池所关联的伸缩组的期望实例数
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

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }
    }
}
