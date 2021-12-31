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
 * 集群网络相关的参数
 *
 * @method string getClusterCIDR() 获取用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
 * @method void setClusterCIDR(string $ClusterCIDR) 设置用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
 * @method boolean getIgnoreClusterCIDRConflict() 获取是否忽略 ClusterCIDR 冲突错误, 默认不忽略
 * @method void setIgnoreClusterCIDRConflict(boolean $IgnoreClusterCIDRConflict) 设置是否忽略 ClusterCIDR 冲突错误, 默认不忽略
 * @method integer getMaxNodePodNum() 获取集群中每个Node上最大的Pod数量(默认为256)
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) 设置集群中每个Node上最大的Pod数量(默认为256)
 * @method integer getMaxClusterServiceNum() 获取集群最大的service数量(默认为256)
 * @method void setMaxClusterServiceNum(integer $MaxClusterServiceNum) 设置集群最大的service数量(默认为256)
 * @method boolean getIpvs() 获取是否启用IPVS(默认不开启)
 * @method void setIpvs(boolean $Ipvs) 设置是否启用IPVS(默认不开启)
 * @method string getVpcId() 获取集群的VPCID（如果创建空集群，为必传值，否则自动设置为和集群的节点保持一致）
 * @method void setVpcId(string $VpcId) 设置集群的VPCID（如果创建空集群，为必传值，否则自动设置为和集群的节点保持一致）
 * @method boolean getCni() 获取网络插件是否启用CNI(默认开启)
 * @method void setCni(boolean $Cni) 设置网络插件是否启用CNI(默认开启)
 * @method string getKubeProxyMode() 获取service的网络模式，当前参数只适用于ipvs+bpf模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeProxyMode(string $KubeProxyMode) 设置service的网络模式，当前参数只适用于ipvs+bpf模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceCIDR() 获取用于分配service的IP range，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCIDR(string $ServiceCIDR) 设置用于分配service的IP range，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubnets() 获取集群关联的容器子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnets(array $Subnets) 设置集群关联的容器子网
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterNetworkSettings extends AbstractModel
{
    /**
     * @var string 用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
     */
    public $ClusterCIDR;

    /**
     * @var boolean 是否忽略 ClusterCIDR 冲突错误, 默认不忽略
     */
    public $IgnoreClusterCIDRConflict;

    /**
     * @var integer 集群中每个Node上最大的Pod数量(默认为256)
     */
    public $MaxNodePodNum;

    /**
     * @var integer 集群最大的service数量(默认为256)
     */
    public $MaxClusterServiceNum;

    /**
     * @var boolean 是否启用IPVS(默认不开启)
     */
    public $Ipvs;

    /**
     * @var string 集群的VPCID（如果创建空集群，为必传值，否则自动设置为和集群的节点保持一致）
     */
    public $VpcId;

    /**
     * @var boolean 网络插件是否启用CNI(默认开启)
     */
    public $Cni;

    /**
     * @var string service的网络模式，当前参数只适用于ipvs+bpf模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KubeProxyMode;

    /**
     * @var string 用于分配service的IP range，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCIDR;

    /**
     * @var array 集群关联的容器子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subnets;

    /**
     * @param string $ClusterCIDR 用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
     * @param boolean $IgnoreClusterCIDRConflict 是否忽略 ClusterCIDR 冲突错误, 默认不忽略
     * @param integer $MaxNodePodNum 集群中每个Node上最大的Pod数量(默认为256)
     * @param integer $MaxClusterServiceNum 集群最大的service数量(默认为256)
     * @param boolean $Ipvs 是否启用IPVS(默认不开启)
     * @param string $VpcId 集群的VPCID（如果创建空集群，为必传值，否则自动设置为和集群的节点保持一致）
     * @param boolean $Cni 网络插件是否启用CNI(默认开启)
     * @param string $KubeProxyMode service的网络模式，当前参数只适用于ipvs+bpf模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceCIDR 用于分配service的IP range，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Subnets 集群关联的容器子网
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
        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("IgnoreClusterCIDRConflict",$param) and $param["IgnoreClusterCIDRConflict"] !== null) {
            $this->IgnoreClusterCIDRConflict = $param["IgnoreClusterCIDRConflict"];
        }

        if (array_key_exists("MaxNodePodNum",$param) and $param["MaxNodePodNum"] !== null) {
            $this->MaxNodePodNum = $param["MaxNodePodNum"];
        }

        if (array_key_exists("MaxClusterServiceNum",$param) and $param["MaxClusterServiceNum"] !== null) {
            $this->MaxClusterServiceNum = $param["MaxClusterServiceNum"];
        }

        if (array_key_exists("Ipvs",$param) and $param["Ipvs"] !== null) {
            $this->Ipvs = $param["Ipvs"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Cni",$param) and $param["Cni"] !== null) {
            $this->Cni = $param["Cni"];
        }

        if (array_key_exists("KubeProxyMode",$param) and $param["KubeProxyMode"] !== null) {
            $this->KubeProxyMode = $param["KubeProxyMode"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
            $this->Subnets = $param["Subnets"];
        }
    }
}
