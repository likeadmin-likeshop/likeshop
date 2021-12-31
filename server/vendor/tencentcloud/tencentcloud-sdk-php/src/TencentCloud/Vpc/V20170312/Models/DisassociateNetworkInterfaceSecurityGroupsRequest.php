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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateNetworkInterfaceSecurityGroups请求参数结构体
 *
 * @method array getNetworkInterfaceIds() 获取弹性网卡实例ID。形如：eni-pxir56ns。每次请求的实例的上限为100。
 * @method void setNetworkInterfaceIds(array $NetworkInterfaceIds) 设置弹性网卡实例ID。形如：eni-pxir56ns。每次请求的实例的上限为100。
 * @method array getSecurityGroupIds() 获取安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。每次请求的实例的上限为100。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。每次请求的实例的上限为100。
 */
class DisassociateNetworkInterfaceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array 弹性网卡实例ID。形如：eni-pxir56ns。每次请求的实例的上限为100。
     */
    public $NetworkInterfaceIds;

    /**
     * @var array 安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。每次请求的实例的上限为100。
     */
    public $SecurityGroupIds;

    /**
     * @param array $NetworkInterfaceIds 弹性网卡实例ID。形如：eni-pxir56ns。每次请求的实例的上限为100。
     * @param array $SecurityGroupIds 安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。每次请求的实例的上限为100。
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
        if (array_key_exists("NetworkInterfaceIds",$param) and $param["NetworkInterfaceIds"] !== null) {
            $this->NetworkInterfaceIds = $param["NetworkInterfaceIds"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
