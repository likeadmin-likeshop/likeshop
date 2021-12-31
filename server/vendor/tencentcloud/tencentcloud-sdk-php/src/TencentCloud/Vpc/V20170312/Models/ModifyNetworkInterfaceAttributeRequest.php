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
 * ModifyNetworkInterfaceAttribute请求参数结构体
 *
 * @method string getNetworkInterfaceId() 获取弹性网卡实例ID，例如：eni-pxir56ns。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置弹性网卡实例ID，例如：eni-pxir56ns。
 * @method string getNetworkInterfaceName() 获取弹性网卡名称，最大长度不能超过60个字节。
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) 设置弹性网卡名称，最大长度不能超过60个字节。
 * @method string getNetworkInterfaceDescription() 获取弹性网卡描述，可任意命名，但不得超过60个字符。
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) 设置弹性网卡描述，可任意命名，但不得超过60个字符。
 * @method array getSecurityGroupIds() 获取指定绑定的安全组，例如:['sg-1dd51d']。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置指定绑定的安全组，例如:['sg-1dd51d']。
 */
class ModifyNetworkInterfaceAttributeRequest extends AbstractModel
{
    /**
     * @var string 弹性网卡实例ID，例如：eni-pxir56ns。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 弹性网卡名称，最大长度不能超过60个字节。
     */
    public $NetworkInterfaceName;

    /**
     * @var string 弹性网卡描述，可任意命名，但不得超过60个字符。
     */
    public $NetworkInterfaceDescription;

    /**
     * @var array 指定绑定的安全组，例如:['sg-1dd51d']。
     */
    public $SecurityGroupIds;

    /**
     * @param string $NetworkInterfaceId 弹性网卡实例ID，例如：eni-pxir56ns。
     * @param string $NetworkInterfaceName 弹性网卡名称，最大长度不能超过60个字节。
     * @param string $NetworkInterfaceDescription 弹性网卡描述，可任意命名，但不得超过60个字符。
     * @param array $SecurityGroupIds 指定绑定的安全组，例如:['sg-1dd51d']。
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
