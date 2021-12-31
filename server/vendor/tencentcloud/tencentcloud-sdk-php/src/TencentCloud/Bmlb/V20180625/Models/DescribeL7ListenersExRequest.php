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
 * DescribeL7ListenersEx请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取返回的监听器中标识是否绑定在此流量镜像中。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置返回的监听器中标识是否绑定在此流量镜像中。
 * @method string getVpcId() 获取待获取监听器所在的VPC的ID。
 * @method void setVpcId(string $VpcId) 设置待获取监听器所在的VPC的ID。
 * @method integer getOffset() 获取此VPC中获取负载均衡的偏移。
 * @method void setOffset(integer $Offset) 设置此VPC中获取负载均衡的偏移。
 * @method integer getLimit() 获取此VPC中获取负载均衡的数量。
 * @method void setLimit(integer $Limit) 设置此VPC中获取负载均衡的数量。
 * @method array getFilters() 获取过滤条件。
LoadBalancerId - String - （过滤条件）负载均衡ID。
LoadBalancerName - String - （过滤条件）负载均衡名称。
Vip - String - （过滤条件）VIP。
ListenerId - String - （过滤条件）监听器ID。
ListenerName -  String - （过滤条件）监听器名称。
Protocol -  String - （过滤条件）七层协议。
LoadBalancerPort -  String - （过滤条件）监听器端口。
 * @method void setFilters(array $Filters) 设置过滤条件。
LoadBalancerId - String - （过滤条件）负载均衡ID。
LoadBalancerName - String - （过滤条件）负载均衡名称。
Vip - String - （过滤条件）VIP。
ListenerId - String - （过滤条件）监听器ID。
ListenerName -  String - （过滤条件）监听器名称。
Protocol -  String - （过滤条件）七层协议。
LoadBalancerPort -  String - （过滤条件）监听器端口。
 */
class DescribeL7ListenersExRequest extends AbstractModel
{
    /**
     * @var string 返回的监听器中标识是否绑定在此流量镜像中。
     */
    public $TrafficMirrorId;

    /**
     * @var string 待获取监听器所在的VPC的ID。
     */
    public $VpcId;

    /**
     * @var integer 此VPC中获取负载均衡的偏移。
     */
    public $Offset;

    /**
     * @var integer 此VPC中获取负载均衡的数量。
     */
    public $Limit;

    /**
     * @var array 过滤条件。
LoadBalancerId - String - （过滤条件）负载均衡ID。
LoadBalancerName - String - （过滤条件）负载均衡名称。
Vip - String - （过滤条件）VIP。
ListenerId - String - （过滤条件）监听器ID。
ListenerName -  String - （过滤条件）监听器名称。
Protocol -  String - （过滤条件）七层协议。
LoadBalancerPort -  String - （过滤条件）监听器端口。
     */
    public $Filters;

    /**
     * @param string $TrafficMirrorId 返回的监听器中标识是否绑定在此流量镜像中。
     * @param string $VpcId 待获取监听器所在的VPC的ID。
     * @param integer $Offset 此VPC中获取负载均衡的偏移。
     * @param integer $Limit 此VPC中获取负载均衡的数量。
     * @param array $Filters 过滤条件。
LoadBalancerId - String - （过滤条件）负载均衡ID。
LoadBalancerName - String - （过滤条件）负载均衡名称。
Vip - String - （过滤条件）VIP。
ListenerId - String - （过滤条件）监听器ID。
ListenerName -  String - （过滤条件）监听器名称。
Protocol -  String - （过滤条件）七层协议。
LoadBalancerPort -  String - （过滤条件）监听器端口。
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
