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
 * ModifyL4BackendWeight请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method string getListenerId() 获取负载均衡四层监听器ID，可通过接口DescribeL4Listeners查询。
 * @method void setListenerId(string $ListenerId) 设置负载均衡四层监听器ID，可通过接口DescribeL4Listeners查询。
 * @method string getInstanceId() 获取黑石物理机主机ID、虚拟机IP或者是半托管主机ID。
 * @method void setInstanceId(string $InstanceId) 设置黑石物理机主机ID、虚拟机IP或者是半托管主机ID。
 * @method integer getWeight() 获取权重信息，可选值0~100。
 * @method void setWeight(integer $Weight) 设置权重信息，可选值0~100。
 * @method integer getPort() 获取已绑定的主机端口。
 * @method void setPort(integer $Port) 设置已绑定的主机端口。
 * @method integer getBindType() 获取绑定类型。0：物理机 1：虚拟机 2：半托管机器
 * @method void setBindType(integer $BindType) 设置绑定类型。0：物理机 1：虚拟机 2：半托管机器
 */
class ModifyL4BackendWeightRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡四层监听器ID，可通过接口DescribeL4Listeners查询。
     */
    public $ListenerId;

    /**
     * @var string 黑石物理机主机ID、虚拟机IP或者是半托管主机ID。
     */
    public $InstanceId;

    /**
     * @var integer 权重信息，可选值0~100。
     */
    public $Weight;

    /**
     * @var integer 已绑定的主机端口。
     */
    public $Port;

    /**
     * @var integer 绑定类型。0：物理机 1：虚拟机 2：半托管机器
     */
    public $BindType;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     * @param string $ListenerId 负载均衡四层监听器ID，可通过接口DescribeL4Listeners查询。
     * @param string $InstanceId 黑石物理机主机ID、虚拟机IP或者是半托管主机ID。
     * @param integer $Weight 权重信息，可选值0~100。
     * @param integer $Port 已绑定的主机端口。
     * @param integer $BindType 绑定类型。0：物理机 1：虚拟机 2：半托管机器
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }
    }
}
