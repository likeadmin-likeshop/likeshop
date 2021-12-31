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
 * DeleteClusterAsGroups请求参数结构体
 *
 * @method string getClusterId() 获取集群ID，通过[DescribeClusters](https://cloud.tencent.com/document/api/457/31862)接口获取。
 * @method void setClusterId(string $ClusterId) 设置集群ID，通过[DescribeClusters](https://cloud.tencent.com/document/api/457/31862)接口获取。
 * @method array getAutoScalingGroupIds() 获取集群伸缩组ID的列表
 * @method void setAutoScalingGroupIds(array $AutoScalingGroupIds) 设置集群伸缩组ID的列表
 * @method boolean getKeepInstance() 获取是否保留伸缩组中的节点(默认值： false(不保留))
 * @method void setKeepInstance(boolean $KeepInstance) 设置是否保留伸缩组中的节点(默认值： false(不保留))
 */
class DeleteClusterAsGroupsRequest extends AbstractModel
{
    /**
     * @var string 集群ID，通过[DescribeClusters](https://cloud.tencent.com/document/api/457/31862)接口获取。
     */
    public $ClusterId;

    /**
     * @var array 集群伸缩组ID的列表
     */
    public $AutoScalingGroupIds;

    /**
     * @var boolean 是否保留伸缩组中的节点(默认值： false(不保留))
     */
    public $KeepInstance;

    /**
     * @param string $ClusterId 集群ID，通过[DescribeClusters](https://cloud.tencent.com/document/api/457/31862)接口获取。
     * @param array $AutoScalingGroupIds 集群伸缩组ID的列表
     * @param boolean $KeepInstance 是否保留伸缩组中的节点(默认值： false(不保留))
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

        if (array_key_exists("AutoScalingGroupIds",$param) and $param["AutoScalingGroupIds"] !== null) {
            $this->AutoScalingGroupIds = $param["AutoScalingGroupIds"];
        }

        if (array_key_exists("KeepInstance",$param) and $param["KeepInstance"] !== null) {
            $this->KeepInstance = $param["KeepInstance"];
        }
    }
}
