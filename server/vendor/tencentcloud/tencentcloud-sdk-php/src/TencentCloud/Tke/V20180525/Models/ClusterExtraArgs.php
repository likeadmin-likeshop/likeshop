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
 * 集群master自定义参数
 *
 * @method array getKubeAPIServer() 获取kube-apiserver自定义参数，参数格式为["k1=v1", "k1=v2"]， 例如["max-requests-inflight=500","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeAPIServer(array $KubeAPIServer) 设置kube-apiserver自定义参数，参数格式为["k1=v1", "k1=v2"]， 例如["max-requests-inflight=500","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKubeControllerManager() 获取kube-controller-manager自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeControllerManager(array $KubeControllerManager) 设置kube-controller-manager自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKubeScheduler() 获取kube-scheduler自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeScheduler(array $KubeScheduler) 设置kube-scheduler自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEtcd() 获取etcd自定义参数，只支持独立集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEtcd(array $Etcd) 设置etcd自定义参数，只支持独立集群
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterExtraArgs extends AbstractModel
{
    /**
     * @var array kube-apiserver自定义参数，参数格式为["k1=v1", "k1=v2"]， 例如["max-requests-inflight=500","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KubeAPIServer;

    /**
     * @var array kube-controller-manager自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KubeControllerManager;

    /**
     * @var array kube-scheduler自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KubeScheduler;

    /**
     * @var array etcd自定义参数，只支持独立集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Etcd;

    /**
     * @param array $KubeAPIServer kube-apiserver自定义参数，参数格式为["k1=v1", "k1=v2"]， 例如["max-requests-inflight=500","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KubeControllerManager kube-controller-manager自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KubeScheduler kube-scheduler自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Etcd etcd自定义参数，只支持独立集群
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
        if (array_key_exists("KubeAPIServer",$param) and $param["KubeAPIServer"] !== null) {
            $this->KubeAPIServer = $param["KubeAPIServer"];
        }

        if (array_key_exists("KubeControllerManager",$param) and $param["KubeControllerManager"] !== null) {
            $this->KubeControllerManager = $param["KubeControllerManager"];
        }

        if (array_key_exists("KubeScheduler",$param) and $param["KubeScheduler"] !== null) {
            $this->KubeScheduler = $param["KubeScheduler"];
        }

        if (array_key_exists("Etcd",$param) and $param["Etcd"] !== null) {
            $this->Etcd = $param["Etcd"];
        }
    }
}
