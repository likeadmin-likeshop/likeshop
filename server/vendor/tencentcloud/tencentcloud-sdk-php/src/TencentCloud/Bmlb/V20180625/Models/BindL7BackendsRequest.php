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
 * BindL7Backends请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method string getListenerId() 获取七层监听器实例ID，可通过接口DescribeL7Listeners查询。
 * @method void setListenerId(string $ListenerId) 设置七层监听器实例ID，可通过接口DescribeL7Listeners查询。
 * @method string getDomainId() 获取转发域名实例ID，可通过接口DescribeL7Rules查询。
 * @method void setDomainId(string $DomainId) 设置转发域名实例ID，可通过接口DescribeL7Rules查询。
 * @method string getLocationId() 获取转发路径实例ID，可通过接口DescribeL7Rules查询。
 * @method void setLocationId(string $LocationId) 设置转发路径实例ID，可通过接口DescribeL7Rules查询。
 * @method array getBackendSet() 获取待绑定的主机信息。可以绑定多个主机端口。目前一个七层转发路径下面最多允许绑定255个主机端口。
 * @method void setBackendSet(array $BackendSet) 设置待绑定的主机信息。可以绑定多个主机端口。目前一个七层转发路径下面最多允许绑定255个主机端口。
 * @method integer getBindType() 获取绑定类型。0：物理机，1：虚拟机 2：半托管机器。
 * @method void setBindType(integer $BindType) 设置绑定类型。0：物理机，1：虚拟机 2：半托管机器。
 */
class BindL7BackendsRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     */
    public $LoadBalancerId;

    /**
     * @var string 七层监听器实例ID，可通过接口DescribeL7Listeners查询。
     */
    public $ListenerId;

    /**
     * @var string 转发域名实例ID，可通过接口DescribeL7Rules查询。
     */
    public $DomainId;

    /**
     * @var string 转发路径实例ID，可通过接口DescribeL7Rules查询。
     */
    public $LocationId;

    /**
     * @var array 待绑定的主机信息。可以绑定多个主机端口。目前一个七层转发路径下面最多允许绑定255个主机端口。
     */
    public $BackendSet;

    /**
     * @var integer 绑定类型。0：物理机，1：虚拟机 2：半托管机器。
     */
    public $BindType;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     * @param string $ListenerId 七层监听器实例ID，可通过接口DescribeL7Listeners查询。
     * @param string $DomainId 转发域名实例ID，可通过接口DescribeL7Rules查询。
     * @param string $LocationId 转发路径实例ID，可通过接口DescribeL7Rules查询。
     * @param array $BackendSet 待绑定的主机信息。可以绑定多个主机端口。目前一个七层转发路径下面最多允许绑定255个主机端口。
     * @param integer $BindType 绑定类型。0：物理机，1：虚拟机 2：半托管机器。
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("BackendSet",$param) and $param["BackendSet"] !== null) {
            $this->BackendSet = [];
            foreach ($param["BackendSet"] as $key => $value){
                $obj = new BindL7Backend();
                $obj->deserialize($value);
                array_push($this->BackendSet, $obj);
            }
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }
    }
}
