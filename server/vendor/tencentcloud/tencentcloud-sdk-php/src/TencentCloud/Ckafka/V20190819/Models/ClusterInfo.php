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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群信息实体
 *
 * @method integer getClusterId() 获取集群Id
 * @method void setClusterId(integer $ClusterId) 设置集群Id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method integer getMaxDiskSize() 获取集群最大磁盘 单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDiskSize(integer $MaxDiskSize) 设置集群最大磁盘 单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxBandWidth() 获取集群最大带宽 单位MB/s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置集群最大带宽 单位MB/s
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailableDiskSize() 获取集群当前可用磁盘  单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableDiskSize(integer $AvailableDiskSize) 设置集群当前可用磁盘  单位GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailableBandWidth() 获取集群当前可用带宽 单位MB/s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableBandWidth(integer $AvailableBandWidth) 设置集群当前可用带宽 单位MB/s
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取集群所属可用区，表明集群归属的可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置集群所属可用区，表明集群归属的可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneIds() 获取集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneIds(array $ZoneIds) 设置集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterInfo extends AbstractModel
{
    /**
     * @var integer 集群Id
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var integer 集群最大磁盘 单位GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDiskSize;

    /**
     * @var integer 集群最大带宽 单位MB/s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxBandWidth;

    /**
     * @var integer 集群当前可用磁盘  单位GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableDiskSize;

    /**
     * @var integer 集群当前可用带宽 单位MB/s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableBandWidth;

    /**
     * @var integer 集群所属可用区，表明集群归属的可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var array 集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneIds;

    /**
     * @param integer $ClusterId 集群Id
     * @param string $ClusterName 集群名称
     * @param integer $MaxDiskSize 集群最大磁盘 单位GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxBandWidth 集群最大带宽 单位MB/s
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvailableDiskSize 集群当前可用磁盘  单位GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvailableBandWidth 集群当前可用带宽 单位MB/s
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 集群所属可用区，表明集群归属的可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneIds 集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("AvailableDiskSize",$param) and $param["AvailableDiskSize"] !== null) {
            $this->AvailableDiskSize = $param["AvailableDiskSize"];
        }

        if (array_key_exists("AvailableBandWidth",$param) and $param["AvailableBandWidth"] !== null) {
            $this->AvailableBandWidth = $param["AvailableBandWidth"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }
    }
}
