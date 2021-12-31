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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 触发器触发参数
 *
 * @method string getAppId() 获取AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取TKE集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置TKE集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取TKE集群命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置TKE集群命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取TKE集群工作负载名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置TKE集群工作负载名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取TKE集群工作负载中容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置TKE集群工作负载中容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterRegion() 获取TKE集群地域数字ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterRegion(integer $ClusterRegion) 设置TKE集群地域数字ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerInvokePara extends AbstractModel
{
    /**
     * @var string AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string TKE集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string TKE集群命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string TKE集群工作负载名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string TKE集群工作负载中容器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @var integer TKE集群地域数字ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterRegion;

    /**
     * @param string $AppId AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId TKE集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace TKE集群命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName TKE集群工作负载名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName TKE集群工作负载中容器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterRegion TKE集群地域数字ID
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ClusterRegion",$param) and $param["ClusterRegion"] !== null) {
            $this->ClusterRegion = $param["ClusterRegion"];
        }
    }
}
