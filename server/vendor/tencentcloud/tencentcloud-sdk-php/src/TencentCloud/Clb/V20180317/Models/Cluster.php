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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群的详细信息，如集群ID，名称，类型，可用区，标签等
 *
 * @method string getClusterId() 获取集群唯一ID
 * @method void setClusterId(string $ClusterId) 设置集群唯一ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterType() 获取集群类型，如TGW，STGW，VPCGW
 * @method void setClusterType(string $ClusterType) 设置集群类型，如TGW，STGW，VPCGW
 * @method string getClusterTag() 获取集群标签，只有STGW集群有标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterTag(string $ClusterTag) 设置集群标签，只有STGW集群有标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取集群所在可用区，如ap-guangzhou-1
 * @method void setZone(string $Zone) 设置集群所在可用区，如ap-guangzhou-1
 * @method string getNetwork() 获取集群网络类型，如Public，Private
 * @method void setNetwork(string $Network) 设置集群网络类型，如Public，Private
 * @method integer getMaxConn() 获取最大连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxConn(integer $MaxConn) 设置最大连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxInFlow() 获取最大入带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxInFlow(integer $MaxInFlow) 设置最大入带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxInPkg() 获取最大入包量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxInPkg(integer $MaxInPkg) 设置最大入包量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxOutFlow() 获取最大出带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxOutFlow(integer $MaxOutFlow) 设置最大出带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxOutPkg() 获取最大出包量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxOutPkg(integer $MaxOutPkg) 设置最大出包量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxNewConn() 获取最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxNewConn(integer $MaxNewConn) 设置最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHTTPMaxNewConn() 获取http最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHTTPMaxNewConn(integer $HTTPMaxNewConn) 设置http最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHTTPSMaxNewConn() 获取https最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHTTPSMaxNewConn(integer $HTTPSMaxNewConn) 设置https最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHTTPQps() 获取http QPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHTTPQps(integer $HTTPQps) 设置http QPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHTTPSQps() 获取https QPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHTTPSQps(integer $HTTPSQps) 设置https QPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceCount() 获取集群内资源总数目
 * @method void setResourceCount(integer $ResourceCount) 设置集群内资源总数目
 * @method integer getIdleResourceCount() 获取集群内空闲资源数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdleResourceCount(integer $IdleResourceCount) 设置集群内空闲资源数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLoadBalanceDirectorCount() 获取集群内转发机的数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalanceDirectorCount(integer $LoadBalanceDirectorCount) 设置集群内转发机的数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsp() 获取集群的Isp属性，如："BGP","CMCC","CUCC","CTCC","INTERNAL"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsp(string $Isp) 设置集群的Isp属性，如："BGP","CMCC","CUCC","CTCC","INTERNAL"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClustersZone getClustersZone() 获取集群所在的可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClustersZone(ClustersZone $ClustersZone) 设置集群所在的可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClustersVersion() 获取集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClustersVersion(string $ClustersVersion) 设置集群版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class Cluster extends AbstractModel
{
    /**
     * @var string 集群唯一ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群类型，如TGW，STGW，VPCGW
     */
    public $ClusterType;

    /**
     * @var string 集群标签，只有STGW集群有标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterTag;

    /**
     * @var string 集群所在可用区，如ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var string 集群网络类型，如Public，Private
     */
    public $Network;

    /**
     * @var integer 最大连接数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxConn;

    /**
     * @var integer 最大入带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxInFlow;

    /**
     * @var integer 最大入包量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxInPkg;

    /**
     * @var integer 最大出带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxOutFlow;

    /**
     * @var integer 最大出包量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxOutPkg;

    /**
     * @var integer 最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxNewConn;

    /**
     * @var integer http最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HTTPMaxNewConn;

    /**
     * @var integer https最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HTTPSMaxNewConn;

    /**
     * @var integer http QPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HTTPQps;

    /**
     * @var integer https QPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HTTPSQps;

    /**
     * @var integer 集群内资源总数目
     */
    public $ResourceCount;

    /**
     * @var integer 集群内空闲资源数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdleResourceCount;

    /**
     * @var integer 集群内转发机的数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalanceDirectorCount;

    /**
     * @var string 集群的Isp属性，如："BGP","CMCC","CUCC","CTCC","INTERNAL"。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Isp;

    /**
     * @var ClustersZone 集群所在的可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClustersZone;

    /**
     * @var string 集群版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClustersVersion;

    /**
     * @param string $ClusterId 集群唯一ID
     * @param string $ClusterName 集群名称
     * @param string $ClusterType 集群类型，如TGW，STGW，VPCGW
     * @param string $ClusterTag 集群标签，只有STGW集群有标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 集群所在可用区，如ap-guangzhou-1
     * @param string $Network 集群网络类型，如Public，Private
     * @param integer $MaxConn 最大连接数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxInFlow 最大入带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxInPkg 最大入包量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxOutFlow 最大出带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxOutPkg 最大出包量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxNewConn 最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HTTPMaxNewConn http最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HTTPSMaxNewConn https最大新建连接数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HTTPQps http QPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HTTPSQps https QPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceCount 集群内资源总数目
     * @param integer $IdleResourceCount 集群内空闲资源数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LoadBalanceDirectorCount 集群内转发机的数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Isp 集群的Isp属性，如："BGP","CMCC","CUCC","CTCC","INTERNAL"。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClustersZone $ClustersZone 集群所在的可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClustersVersion 集群版本
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

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterTag",$param) and $param["ClusterTag"] !== null) {
            $this->ClusterTag = $param["ClusterTag"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("MaxConn",$param) and $param["MaxConn"] !== null) {
            $this->MaxConn = $param["MaxConn"];
        }

        if (array_key_exists("MaxInFlow",$param) and $param["MaxInFlow"] !== null) {
            $this->MaxInFlow = $param["MaxInFlow"];
        }

        if (array_key_exists("MaxInPkg",$param) and $param["MaxInPkg"] !== null) {
            $this->MaxInPkg = $param["MaxInPkg"];
        }

        if (array_key_exists("MaxOutFlow",$param) and $param["MaxOutFlow"] !== null) {
            $this->MaxOutFlow = $param["MaxOutFlow"];
        }

        if (array_key_exists("MaxOutPkg",$param) and $param["MaxOutPkg"] !== null) {
            $this->MaxOutPkg = $param["MaxOutPkg"];
        }

        if (array_key_exists("MaxNewConn",$param) and $param["MaxNewConn"] !== null) {
            $this->MaxNewConn = $param["MaxNewConn"];
        }

        if (array_key_exists("HTTPMaxNewConn",$param) and $param["HTTPMaxNewConn"] !== null) {
            $this->HTTPMaxNewConn = $param["HTTPMaxNewConn"];
        }

        if (array_key_exists("HTTPSMaxNewConn",$param) and $param["HTTPSMaxNewConn"] !== null) {
            $this->HTTPSMaxNewConn = $param["HTTPSMaxNewConn"];
        }

        if (array_key_exists("HTTPQps",$param) and $param["HTTPQps"] !== null) {
            $this->HTTPQps = $param["HTTPQps"];
        }

        if (array_key_exists("HTTPSQps",$param) and $param["HTTPSQps"] !== null) {
            $this->HTTPSQps = $param["HTTPSQps"];
        }

        if (array_key_exists("ResourceCount",$param) and $param["ResourceCount"] !== null) {
            $this->ResourceCount = $param["ResourceCount"];
        }

        if (array_key_exists("IdleResourceCount",$param) and $param["IdleResourceCount"] !== null) {
            $this->IdleResourceCount = $param["IdleResourceCount"];
        }

        if (array_key_exists("LoadBalanceDirectorCount",$param) and $param["LoadBalanceDirectorCount"] !== null) {
            $this->LoadBalanceDirectorCount = $param["LoadBalanceDirectorCount"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("ClustersZone",$param) and $param["ClustersZone"] !== null) {
            $this->ClustersZone = new ClustersZone();
            $this->ClustersZone->deserialize($param["ClustersZone"]);
        }

        if (array_key_exists("ClustersVersion",$param) and $param["ClustersVersion"] !== null) {
            $this->ClustersVersion = $param["ClustersVersion"];
        }
    }
}
