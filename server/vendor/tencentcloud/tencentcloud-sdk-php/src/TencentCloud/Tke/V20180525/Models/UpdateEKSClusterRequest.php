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
 * UpdateEKSCluster请求参数结构体
 *
 * @method string getClusterId() 获取弹性集群Id
 * @method void setClusterId(string $ClusterId) 设置弹性集群Id
 * @method string getClusterName() 获取弹性集群名称
 * @method void setClusterName(string $ClusterName) 设置弹性集群名称
 * @method string getClusterDesc() 获取弹性集群描述信息
 * @method void setClusterDesc(string $ClusterDesc) 设置弹性集群描述信息
 * @method array getSubnetIds() 获取子网Id 列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网Id 列表
 * @method ClusterPublicLB getPublicLB() 获取弹性容器集群公网访问LB信息
 * @method void setPublicLB(ClusterPublicLB $PublicLB) 设置弹性容器集群公网访问LB信息
 * @method ClusterInternalLB getInternalLB() 获取弹性容器集群内网访问LB信息
 * @method void setInternalLB(ClusterInternalLB $InternalLB) 设置弹性容器集群内网访问LB信息
 * @method string getServiceSubnetId() 获取Service 子网Id
 * @method void setServiceSubnetId(string $ServiceSubnetId) 设置Service 子网Id
 * @method array getDnsServers() 获取集群自定义的dns 服务器信息
 * @method void setDnsServers(array $DnsServers) 设置集群自定义的dns 服务器信息
 * @method string getClearDnsServer() 获取是否清空自定义dns 服务器设置。为1 表示 是。其他表示 否。
 * @method void setClearDnsServer(string $ClearDnsServer) 设置是否清空自定义dns 服务器设置。为1 表示 是。其他表示 否。
 * @method boolean getNeedDeleteCbs() 获取将来删除集群时是否要删除cbs。默认为 FALSE
 * @method void setNeedDeleteCbs(boolean $NeedDeleteCbs) 设置将来删除集群时是否要删除cbs。默认为 FALSE
 */
class UpdateEKSClusterRequest extends AbstractModel
{
    /**
     * @var string 弹性集群Id
     */
    public $ClusterId;

    /**
     * @var string 弹性集群名称
     */
    public $ClusterName;

    /**
     * @var string 弹性集群描述信息
     */
    public $ClusterDesc;

    /**
     * @var array 子网Id 列表
     */
    public $SubnetIds;

    /**
     * @var ClusterPublicLB 弹性容器集群公网访问LB信息
     */
    public $PublicLB;

    /**
     * @var ClusterInternalLB 弹性容器集群内网访问LB信息
     */
    public $InternalLB;

    /**
     * @var string Service 子网Id
     */
    public $ServiceSubnetId;

    /**
     * @var array 集群自定义的dns 服务器信息
     */
    public $DnsServers;

    /**
     * @var string 是否清空自定义dns 服务器设置。为1 表示 是。其他表示 否。
     */
    public $ClearDnsServer;

    /**
     * @var boolean 将来删除集群时是否要删除cbs。默认为 FALSE
     */
    public $NeedDeleteCbs;

    /**
     * @param string $ClusterId 弹性集群Id
     * @param string $ClusterName 弹性集群名称
     * @param string $ClusterDesc 弹性集群描述信息
     * @param array $SubnetIds 子网Id 列表
     * @param ClusterPublicLB $PublicLB 弹性容器集群公网访问LB信息
     * @param ClusterInternalLB $InternalLB 弹性容器集群内网访问LB信息
     * @param string $ServiceSubnetId Service 子网Id
     * @param array $DnsServers 集群自定义的dns 服务器信息
     * @param string $ClearDnsServer 是否清空自定义dns 服务器设置。为1 表示 是。其他表示 否。
     * @param boolean $NeedDeleteCbs 将来删除集群时是否要删除cbs。默认为 FALSE
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

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("PublicLB",$param) and $param["PublicLB"] !== null) {
            $this->PublicLB = new ClusterPublicLB();
            $this->PublicLB->deserialize($param["PublicLB"]);
        }

        if (array_key_exists("InternalLB",$param) and $param["InternalLB"] !== null) {
            $this->InternalLB = new ClusterInternalLB();
            $this->InternalLB->deserialize($param["InternalLB"]);
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

        if (array_key_exists("ClearDnsServer",$param) and $param["ClearDnsServer"] !== null) {
            $this->ClearDnsServer = $param["ClearDnsServer"];
        }

        if (array_key_exists("NeedDeleteCbs",$param) and $param["NeedDeleteCbs"] !== null) {
            $this->NeedDeleteCbs = $param["NeedDeleteCbs"];
        }
    }
}
