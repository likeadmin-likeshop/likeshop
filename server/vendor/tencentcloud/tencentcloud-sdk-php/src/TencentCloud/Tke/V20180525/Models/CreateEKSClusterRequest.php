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
 * CreateEKSCluster请求参数结构体
 *
 * @method string getK8SVersion() 获取k8s版本号。可为1.14.4, 1.12.8。
 * @method void setK8SVersion(string $K8SVersion) 设置k8s版本号。可为1.14.4, 1.12.8。
 * @method string getVpcId() 获取vpc 的Id
 * @method void setVpcId(string $VpcId) 设置vpc 的Id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method array getSubnetIds() 获取子网Id 列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网Id 列表
 * @method string getClusterDesc() 获取集群描述信息
 * @method void setClusterDesc(string $ClusterDesc) 设置集群描述信息
 * @method string getServiceSubnetId() 获取Serivce 所在子网Id
 * @method void setServiceSubnetId(string $ServiceSubnetId) 设置Serivce 所在子网Id
 * @method array getDnsServers() 获取集群自定义的Dns服务器信息
 * @method void setDnsServers(array $DnsServers) 设置集群自定义的Dns服务器信息
 * @method string getExtraParam() 获取扩展参数。须是map[string]string 的json 格式。
 * @method void setExtraParam(string $ExtraParam) 设置扩展参数。须是map[string]string 的json 格式。
 * @method boolean getEnableVpcCoreDNS() 获取是否在用户集群内开启Dns。默认为true
 * @method void setEnableVpcCoreDNS(boolean $EnableVpcCoreDNS) 设置是否在用户集群内开启Dns。默认为true
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
 */
class CreateEKSClusterRequest extends AbstractModel
{
    /**
     * @var string k8s版本号。可为1.14.4, 1.12.8。
     */
    public $K8SVersion;

    /**
     * @var string vpc 的Id
     */
    public $VpcId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var array 子网Id 列表
     */
    public $SubnetIds;

    /**
     * @var string 集群描述信息
     */
    public $ClusterDesc;

    /**
     * @var string Serivce 所在子网Id
     */
    public $ServiceSubnetId;

    /**
     * @var array 集群自定义的Dns服务器信息
     */
    public $DnsServers;

    /**
     * @var string 扩展参数。须是map[string]string 的json 格式。
     */
    public $ExtraParam;

    /**
     * @var boolean 是否在用户集群内开启Dns。默认为true
     */
    public $EnableVpcCoreDNS;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
     */
    public $TagSpecification;

    /**
     * @param string $K8SVersion k8s版本号。可为1.14.4, 1.12.8。
     * @param string $VpcId vpc 的Id
     * @param string $ClusterName 集群名称
     * @param array $SubnetIds 子网Id 列表
     * @param string $ClusterDesc 集群描述信息
     * @param string $ServiceSubnetId Serivce 所在子网Id
     * @param array $DnsServers 集群自定义的Dns服务器信息
     * @param string $ExtraParam 扩展参数。须是map[string]string 的json 格式。
     * @param boolean $EnableVpcCoreDNS 是否在用户集群内开启Dns。默认为true
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
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
        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
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

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
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
