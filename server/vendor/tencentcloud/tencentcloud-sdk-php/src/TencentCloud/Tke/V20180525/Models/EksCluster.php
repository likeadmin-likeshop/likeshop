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
 * 弹性集群信息
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getVpcId() 获取Vpc Id
 * @method void setVpcId(string $VpcId) 设置Vpc Id
 * @method array getSubnetIds() 获取子网列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网列表
 * @method string getK8SVersion() 获取k8s 版本号
 * @method void setK8SVersion(string $K8SVersion) 设置k8s 版本号
 * @method string getStatus() 获取集群状态(running运行中，initializing 初始化中，failed异常)
 * @method void setStatus(string $Status) 设置集群状态(running运行中，initializing 初始化中，failed异常)
 * @method string getClusterDesc() 获取集群描述信息
 * @method void setClusterDesc(string $ClusterDesc) 设置集群描述信息
 * @method string getCreatedTime() 获取集群创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置集群创建时间
 * @method string getServiceSubnetId() 获取Service 子网Id
 * @method void setServiceSubnetId(string $ServiceSubnetId) 设置Service 子网Id
 * @method array getDnsServers() 获取集群的自定义dns 服务器信息
 * @method void setDnsServers(array $DnsServers) 设置集群的自定义dns 服务器信息
 * @method boolean getNeedDeleteCbs() 获取将来删除集群时是否要删除cbs。默认为 FALSE
 * @method void setNeedDeleteCbs(boolean $NeedDeleteCbs) 设置将来删除集群时是否要删除cbs。默认为 FALSE
 * @method boolean getEnableVpcCoreDNS() 获取是否在用户集群内开启Dns。默认为TRUE
 * @method void setEnableVpcCoreDNS(boolean $EnableVpcCoreDNS) 设置是否在用户集群内开启Dns。默认为TRUE
 * @method array getTagSpecification() 获取标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class EksCluster extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string Vpc Id
     */
    public $VpcId;

    /**
     * @var array 子网列表
     */
    public $SubnetIds;

    /**
     * @var string k8s 版本号
     */
    public $K8SVersion;

    /**
     * @var string 集群状态(running运行中，initializing 初始化中，failed异常)
     */
    public $Status;

    /**
     * @var string 集群描述信息
     */
    public $ClusterDesc;

    /**
     * @var string 集群创建时间
     */
    public $CreatedTime;

    /**
     * @var string Service 子网Id
     */
    public $ServiceSubnetId;

    /**
     * @var array 集群的自定义dns 服务器信息
     */
    public $DnsServers;

    /**
     * @var boolean 将来删除集群时是否要删除cbs。默认为 FALSE
     */
    public $NeedDeleteCbs;

    /**
     * @var boolean 是否在用户集群内开启Dns。默认为TRUE
     */
    public $EnableVpcCoreDNS;

    /**
     * @var array 标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSpecification;

    /**
     * @param string $ClusterId 集群Id
     * @param string $ClusterName 集群名称
     * @param string $VpcId Vpc Id
     * @param array $SubnetIds 子网列表
     * @param string $K8SVersion k8s 版本号
     * @param string $Status 集群状态(running运行中，initializing 初始化中，failed异常)
     * @param string $ClusterDesc 集群描述信息
     * @param string $CreatedTime 集群创建时间
     * @param string $ServiceSubnetId Service 子网Id
     * @param array $DnsServers 集群的自定义dns 服务器信息
     * @param boolean $NeedDeleteCbs 将来删除集群时是否要删除cbs。默认为 FALSE
     * @param boolean $EnableVpcCoreDNS 是否在用户集群内开启Dns。默认为TRUE
     * @param array $TagSpecification 标签描述列表。
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ServiceSubnetId",$param) and $param["ServiceSubnetId"] !== null) {
            $this->ServiceSubnetId = $param["ServiceSubnetId"];
        }

        if (array_key_exists("DnsServers",$param) and $param["DnsServers"] !== null) {
            $this->DnsServers = [];
            foreach ($param["DnsServers"] as $key => $value){
                $obj = new DnsServerConf();
                $obj->deserialize($value);
                array_push($this->DnsServers, $obj);
            }
        }

        if (array_key_exists("NeedDeleteCbs",$param) and $param["NeedDeleteCbs"] !== null) {
            $this->NeedDeleteCbs = $param["NeedDeleteCbs"];
        }

        if (array_key_exists("EnableVpcCoreDNS",$param) and $param["EnableVpcCoreDNS"] !== null) {
            $this->EnableVpcCoreDNS = $param["EnableVpcCoreDNS"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
