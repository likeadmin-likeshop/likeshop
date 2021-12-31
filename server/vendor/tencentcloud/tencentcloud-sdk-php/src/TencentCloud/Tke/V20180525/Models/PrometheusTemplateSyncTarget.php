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
 * 云原生Prometheus模板同步目标
 *
 * @method string getRegion() 获取目标所在地域
 * @method void setRegion(string $Region) 设置目标所在地域
 * @method string getInstanceId() 获取目标实例
 * @method void setInstanceId(string $InstanceId) 设置目标实例
 * @method string getClusterId() 获取集群id，只有当采集模板的Level为cluster的时候需要
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id，只有当采集模板的Level为cluster的时候需要
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSyncTime() 获取最后一次同步时间， 用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyncTime(string $SyncTime) 设置最后一次同步时间， 用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取当前使用的模板版本，用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置当前使用的模板版本，用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterType() 获取集群类型，只有当采集模板的Level为cluster的时候需要
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置集群类型，只有当采集模板的Level为cluster的时候需要
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取用于出参，实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置用于出参，实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取用于出参，集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置用于出参，集群名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusTemplateSyncTarget extends AbstractModel
{
    /**
     * @var string 目标所在地域
     */
    public $Region;

    /**
     * @var string 目标实例
     */
    public $InstanceId;

    /**
     * @var string 集群id，只有当采集模板的Level为cluster的时候需要
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 最后一次同步时间， 用于出参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyncTime;

    /**
     * @var string 当前使用的模板版本，用于出参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 集群类型，只有当采集模板的Level为cluster的时候需要
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string 用于出参，实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 用于出参，集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @param string $Region 目标所在地域
     * @param string $InstanceId 目标实例
     * @param string $ClusterId 集群id，只有当采集模板的Level为cluster的时候需要
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SyncTime 最后一次同步时间， 用于出参
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 当前使用的模板版本，用于出参
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterType 集群类型，只有当采集模板的Level为cluster的时候需要
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 用于出参，实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 用于出参，集群名称
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SyncTime",$param) and $param["SyncTime"] !== null) {
            $this->SyncTime = $param["SyncTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
