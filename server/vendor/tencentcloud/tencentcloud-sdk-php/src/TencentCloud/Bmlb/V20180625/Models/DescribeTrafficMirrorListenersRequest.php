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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrafficMirrorListeners请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像实例ID。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例ID。
 * @method integer getOffset() 获取分页的偏移量，也即从第几条记录开始查询
 * @method void setOffset(integer $Offset) 设置分页的偏移量，也即从第几条记录开始查询
 * @method integer getLimit() 获取单次查询返回的条目数，默认值：500。
 * @method void setLimit(integer $Limit) 设置单次查询返回的条目数，默认值：500。
 * @method array getSearchLoadBalancerIds() 获取待搜索的负载均衡Id。
 * @method void setSearchLoadBalancerIds(array $SearchLoadBalancerIds) 设置待搜索的负载均衡Id。
 * @method array getSearchLoadBalancerNames() 获取待搜索的负载均衡名称。
 * @method void setSearchLoadBalancerNames(array $SearchLoadBalancerNames) 设置待搜索的负载均衡名称。
 * @method array getSearchVips() 获取待搜索的Vip。
 * @method void setSearchVips(array $SearchVips) 设置待搜索的Vip。
 * @method array getSearchListenerIds() 获取待搜索的监听器ID。
 * @method void setSearchListenerIds(array $SearchListenerIds) 设置待搜索的监听器ID。
 * @method array getSearchListenerNames() 获取待搜索的监听器名称。
 * @method void setSearchListenerNames(array $SearchListenerNames) 设置待搜索的监听器名称。
 * @method array getSearchProtocols() 获取待搜索的协议名称。
 * @method void setSearchProtocols(array $SearchProtocols) 设置待搜索的协议名称。
 * @method array getSearchLoadBalancerPorts() 获取待搜索的端口。
 * @method void setSearchLoadBalancerPorts(array $SearchLoadBalancerPorts) 设置待搜索的端口。
 */
class DescribeTrafficMirrorListenersRequest extends AbstractModel
{
    /**
     * @var string 流量镜像实例ID。
     */
    public $TrafficMirrorId;

    /**
     * @var integer 分页的偏移量，也即从第几条记录开始查询
     */
    public $Offset;

    /**
     * @var integer 单次查询返回的条目数，默认值：500。
     */
    public $Limit;

    /**
     * @var array 待搜索的负载均衡Id。
     */
    public $SearchLoadBalancerIds;

    /**
     * @var array 待搜索的负载均衡名称。
     */
    public $SearchLoadBalancerNames;

    /**
     * @var array 待搜索的Vip。
     */
    public $SearchVips;

    /**
     * @var array 待搜索的监听器ID。
     */
    public $SearchListenerIds;

    /**
     * @var array 待搜索的监听器名称。
     */
    public $SearchListenerNames;

    /**
     * @var array 待搜索的协议名称。
     */
    public $SearchProtocols;

    /**
     * @var array 待搜索的端口。
     */
    public $SearchLoadBalancerPorts;

    /**
     * @param string $TrafficMirrorId 流量镜像实例ID。
     * @param integer $Offset 分页的偏移量，也即从第几条记录开始查询
     * @param integer $Limit 单次查询返回的条目数，默认值：500。
     * @param array $SearchLoadBalancerIds 待搜索的负载均衡Id。
     * @param array $SearchLoadBalancerNames 待搜索的负载均衡名称。
     * @param array $SearchVips 待搜索的Vip。
     * @param array $SearchListenerIds 待搜索的监听器ID。
     * @param array $SearchListenerNames 待搜索的监听器名称。
     * @param array $SearchProtocols 待搜索的协议名称。
     * @param array $SearchLoadBalancerPorts 待搜索的端口。
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchLoadBalancerIds",$param) and $param["SearchLoadBalancerIds"] !== null) {
            $this->SearchLoadBalancerIds = $param["SearchLoadBalancerIds"];
        }

        if (array_key_exists("SearchLoadBalancerNames",$param) and $param["SearchLoadBalancerNames"] !== null) {
            $this->SearchLoadBalancerNames = $param["SearchLoadBalancerNames"];
        }

        if (array_key_exists("SearchVips",$param) and $param["SearchVips"] !== null) {
            $this->SearchVips = $param["SearchVips"];
        }

        if (array_key_exists("SearchListenerIds",$param) and $param["SearchListenerIds"] !== null) {
            $this->SearchListenerIds = $param["SearchListenerIds"];
        }

        if (array_key_exists("SearchListenerNames",$param) and $param["SearchListenerNames"] !== null) {
            $this->SearchListenerNames = $param["SearchListenerNames"];
        }

        if (array_key_exists("SearchProtocols",$param) and $param["SearchProtocols"] !== null) {
            $this->SearchProtocols = $param["SearchProtocols"];
        }

        if (array_key_exists("SearchLoadBalancerPorts",$param) and $param["SearchLoadBalancerPorts"] !== null) {
            $this->SearchLoadBalancerPorts = $param["SearchLoadBalancerPorts"];
        }
    }
}
