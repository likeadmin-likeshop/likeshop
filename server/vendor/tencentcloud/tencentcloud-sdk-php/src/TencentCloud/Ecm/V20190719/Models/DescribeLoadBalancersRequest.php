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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoadBalancers请求参数结构体
 *
 * @method string getEcmRegion() 获取区域。如果不传则默认查询所有区域。
 * @method void setEcmRegion(string $EcmRegion) 设置区域。如果不传则默认查询所有区域。
 * @method array getLoadBalancerIds() 获取负载均衡实例 ID。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置负载均衡实例 ID。
 * @method string getLoadBalancerName() 获取负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称。
 * @method array getLoadBalancerVips() 获取负载均衡实例的 VIP 地址，支持多个。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡实例的 VIP 地址，支持多个。
 * @method array getBackendPrivateIps() 获取负载均衡绑定的后端服务的内网 IP。
 * @method void setBackendPrivateIps(array $BackendPrivateIps) 设置负载均衡绑定的后端服务的内网 IP。
 * @method integer getOffset() 获取数据偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为 0。
 * @method integer getLimit() 获取返回负载均衡实例的数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回负载均衡实例的数量，默认为20，最大值为100。
 * @method integer getWithBackend() 获取负载均衡是否绑定后端服务，0：没有绑定后端服务，1：绑定后端服务，-1：查询全部。 
如果不传则默认查询全部。
 * @method void setWithBackend(integer $WithBackend) 设置负载均衡是否绑定后端服务，0：没有绑定后端服务，1：绑定后端服务，-1：查询全部。 
如果不传则默认查询全部。
 * @method string getVpcId() 获取负载均衡实例所属私有网络唯一ID，如 vpc-bhqkbhdx。
 * @method void setVpcId(string $VpcId) 设置负载均衡实例所属私有网络唯一ID，如 vpc-bhqkbhdx。
 * @method array getFilters() 获取每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。详细的过滤条件如下：
tag-key - String - 是否必填：否 - （过滤条件）按照标签的键过滤。
 * @method void setFilters(array $Filters) 设置每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。详细的过滤条件如下：
tag-key - String - 是否必填：否 - （过滤条件）按照标签的键过滤。
 * @method string getSecurityGroup() 获取安全组。
 * @method void setSecurityGroup(string $SecurityGroup) 设置安全组。
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string 区域。如果不传则默认查询所有区域。
     */
    public $EcmRegion;

    /**
     * @var array 负载均衡实例 ID。
     */
    public $LoadBalancerIds;

    /**
     * @var string 负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var array 负载均衡实例的 VIP 地址，支持多个。
     */
    public $LoadBalancerVips;

    /**
     * @var array 负载均衡绑定的后端服务的内网 IP。
     */
    public $BackendPrivateIps;

    /**
     * @var integer 数据偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回负载均衡实例的数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 负载均衡是否绑定后端服务，0：没有绑定后端服务，1：绑定后端服务，-1：查询全部。 
如果不传则默认查询全部。
     */
    public $WithBackend;

    /**
     * @var string 负载均衡实例所属私有网络唯一ID，如 vpc-bhqkbhdx。
     */
    public $VpcId;

    /**
     * @var array 每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。详细的过滤条件如下：
tag-key - String - 是否必填：否 - （过滤条件）按照标签的键过滤。
     */
    public $Filters;

    /**
     * @var string 安全组。
     */
    public $SecurityGroup;

    /**
     * @param string $EcmRegion 区域。如果不传则默认查询所有区域。
     * @param array $LoadBalancerIds 负载均衡实例 ID。
     * @param string $LoadBalancerName 负载均衡实例的名称。
     * @param array $LoadBalancerVips 负载均衡实例的 VIP 地址，支持多个。
     * @param array $BackendPrivateIps 负载均衡绑定的后端服务的内网 IP。
     * @param integer $Offset 数据偏移量，默认为 0。
     * @param integer $Limit 返回负载均衡实例的数量，默认为20，最大值为100。
     * @param integer $WithBackend 负载均衡是否绑定后端服务，0：没有绑定后端服务，1：绑定后端服务，-1：查询全部。 
如果不传则默认查询全部。
     * @param string $VpcId 负载均衡实例所属私有网络唯一ID，如 vpc-bhqkbhdx。
     * @param array $Filters 每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。详细的过滤条件如下：
tag-key - String - 是否必填：否 - （过滤条件）按照标签的键过滤。
     * @param string $SecurityGroup 安全组。
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("BackendPrivateIps",$param) and $param["BackendPrivateIps"] !== null) {
            $this->BackendPrivateIps = $param["BackendPrivateIps"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("WithBackend",$param) and $param["WithBackend"] !== null) {
            $this->WithBackend = $param["WithBackend"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }
    }
}
