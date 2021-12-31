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
 * 资源组的伸缩组
 *
 * @method string getId() 获取伸缩组 ID
 * @method void setId(string $Id) 设置伸缩组 ID
 * @method string getRegion() 获取伸缩组所在地域
 * @method void setRegion(string $Region) 设置伸缩组所在地域
 * @method string getZone() 获取伸缩组所在可用区
 * @method void setZone(string $Zone) 设置伸缩组所在可用区
 * @method string getCluster() 获取伸缩组所在集群
 * @method void setCluster(string $Cluster) 设置伸缩组所在集群
 * @method string getRsgId() 获取伸缩组所在资源组 ID
 * @method void setRsgId(string $RsgId) 设置伸缩组所在资源组 ID
 * @method string getName() 获取伸缩组名称
 * @method void setName(string $Name) 设置伸缩组名称
 * @method integer getMaxSize() 获取伸缩组允许的最大节点个数
 * @method void setMaxSize(integer $MaxSize) 设置伸缩组允许的最大节点个数
 * @method integer getMinSize() 获取伸缩组允许的最小节点个数
 * @method void setMinSize(integer $MinSize) 设置伸缩组允许的最小节点个数
 * @method string getCreateTime() 获取伸缩组创建时间
 * @method void setCreateTime(string $CreateTime) 设置伸缩组创建时间
 * @method string getUpdateTime() 获取伸缩组更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置伸缩组更新时间
 * @method string getStatus() 获取伸缩组状态
 * @method void setStatus(string $Status) 设置伸缩组状态
 * @method string getInstanceType() 获取伸缩组节点类型
 * @method void setInstanceType(string $InstanceType) 设置伸缩组节点类型
 * @method integer getInstanceCount() 获取伸缩组内节点个数
 * @method void setInstanceCount(integer $InstanceCount) 设置伸缩组内节点个数
 * @method integer getDesiredSize() 获取伸缩组起始节点数
 * @method void setDesiredSize(integer $DesiredSize) 设置伸缩组起始节点数
 */
class RsgAsGroup extends AbstractModel
{
    /**
     * @var string 伸缩组 ID
     */
    public $Id;

    /**
     * @var string 伸缩组所在地域
     */
    public $Region;

    /**
     * @var string 伸缩组所在可用区
     */
    public $Zone;

    /**
     * @var string 伸缩组所在集群
     */
    public $Cluster;

    /**
     * @var string 伸缩组所在资源组 ID
     */
    public $RsgId;

    /**
     * @var string 伸缩组名称
     */
    public $Name;

    /**
     * @var integer 伸缩组允许的最大节点个数
     */
    public $MaxSize;

    /**
     * @var integer 伸缩组允许的最小节点个数
     */
    public $MinSize;

    /**
     * @var string 伸缩组创建时间
     */
    public $CreateTime;

    /**
     * @var string 伸缩组更新时间
     */
    public $UpdateTime;

    /**
     * @var string 伸缩组状态
     */
    public $Status;

    /**
     * @var string 伸缩组节点类型
     */
    public $InstanceType;

    /**
     * @var integer 伸缩组内节点个数
     */
    public $InstanceCount;

    /**
     * @var integer 伸缩组起始节点数
     */
    public $DesiredSize;

    /**
     * @param string $Id 伸缩组 ID
     * @param string $Region 伸缩组所在地域
     * @param string $Zone 伸缩组所在可用区
     * @param string $Cluster 伸缩组所在集群
     * @param string $RsgId 伸缩组所在资源组 ID
     * @param string $Name 伸缩组名称
     * @param integer $MaxSize 伸缩组允许的最大节点个数
     * @param integer $MinSize 伸缩组允许的最小节点个数
     * @param string $CreateTime 伸缩组创建时间
     * @param string $UpdateTime 伸缩组更新时间
     * @param string $Status 伸缩组状态
     * @param string $InstanceType 伸缩组节点类型
     * @param integer $InstanceCount 伸缩组内节点个数
     * @param integer $DesiredSize 伸缩组起始节点数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("RsgId",$param) and $param["RsgId"] !== null) {
            $this->RsgId = $param["RsgId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("DesiredSize",$param) and $param["DesiredSize"] !== null) {
            $this->DesiredSize = $param["DesiredSize"];
        }
    }
}
