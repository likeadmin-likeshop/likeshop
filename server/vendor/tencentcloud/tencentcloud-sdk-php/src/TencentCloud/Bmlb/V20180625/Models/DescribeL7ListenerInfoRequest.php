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
 * DescribeL7ListenerInfo请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method string getSearchKey() 获取查找的键值，可用于模糊查找有该转发域名的监听器。
 * @method void setSearchKey(string $SearchKey) 设置查找的键值，可用于模糊查找有该转发域名的监听器。
 * @method array getInstanceIds() 获取主机ID或虚机IP列表，可用于获取绑定了该主机的监听器。
 * @method void setInstanceIds(array $InstanceIds) 设置主机ID或虚机IP列表，可用于获取绑定了该主机的监听器。
 * @method integer getIfGetBackendInfo() 获取是否获取转发规则下的主机信息。默认为0，不获取。
 * @method void setIfGetBackendInfo(integer $IfGetBackendInfo) 设置是否获取转发规则下的主机信息。默认为0，不获取。
 */
class DescribeL7ListenerInfoRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     */
    public $LoadBalancerId;

    /**
     * @var string 查找的键值，可用于模糊查找有该转发域名的监听器。
     */
    public $SearchKey;

    /**
     * @var array 主机ID或虚机IP列表，可用于获取绑定了该主机的监听器。
     */
    public $InstanceIds;

    /**
     * @var integer 是否获取转发规则下的主机信息。默认为0，不获取。
     */
    public $IfGetBackendInfo;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     * @param string $SearchKey 查找的键值，可用于模糊查找有该转发域名的监听器。
     * @param array $InstanceIds 主机ID或虚机IP列表，可用于获取绑定了该主机的监听器。
     * @param integer $IfGetBackendInfo 是否获取转发规则下的主机信息。默认为0，不获取。
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

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("IfGetBackendInfo",$param) and $param["IfGetBackendInfo"] !== null) {
            $this->IfGetBackendInfo = $param["IfGetBackendInfo"];
        }
    }
}
