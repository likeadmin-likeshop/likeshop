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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRsgAsGroup请求参数结构体
 *
 * @method string getRsgId() 获取资源组 ID
 * @method void setRsgId(string $RsgId) 设置资源组 ID
 * @method integer getMaxSize() 获取伸缩组允许的最大节点数
 * @method void setMaxSize(integer $MaxSize) 设置伸缩组允许的最大节点数
 * @method integer getMinSize() 获取伸缩组允许的最小节点数
 * @method void setMinSize(integer $MinSize) 设置伸缩组允许的最小节点数
 * @method string getInstanceType() 获取伸缩组的节点规格
 * @method void setInstanceType(string $InstanceType) 设置伸缩组的节点规格
 * @method string getCluster() 获取资源组所在的集群名
 * @method void setCluster(string $Cluster) 设置资源组所在的集群名
 * @method string getName() 获取伸缩组名称
 * @method void setName(string $Name) 设置伸缩组名称
 * @method integer getDesiredSize() 获取伸缩组期望的节点数
 * @method void setDesiredSize(integer $DesiredSize) 设置伸缩组期望的节点数
 */
class CreateRsgAsGroupRequest extends AbstractModel
{
    /**
     * @var string 资源组 ID
     */
    public $RsgId;

    /**
     * @var integer 伸缩组允许的最大节点数
     */
    public $MaxSize;

    /**
     * @var integer 伸缩组允许的最小节点数
     */
    public $MinSize;

    /**
     * @var string 伸缩组的节点规格
     */
    public $InstanceType;

    /**
     * @var string 资源组所在的集群名
     */
    public $Cluster;

    /**
     * @var string 伸缩组名称
     */
    public $Name;

    /**
     * @var integer 伸缩组期望的节点数
     */
    public $DesiredSize;

    /**
     * @param string $RsgId 资源组 ID
     * @param integer $MaxSize 伸缩组允许的最大节点数
     * @param integer $MinSize 伸缩组允许的最小节点数
     * @param string $InstanceType 伸缩组的节点规格
     * @param string $Cluster 资源组所在的集群名
     * @param string $Name 伸缩组名称
     * @param integer $DesiredSize 伸缩组期望的节点数
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
        if (array_key_exists("RsgId",$param) and $param["RsgId"] !== null) {
            $this->RsgId = $param["RsgId"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DesiredSize",$param) and $param["DesiredSize"] !== null) {
            $this->DesiredSize = $param["DesiredSize"];
        }
    }
}
