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
 * ModifySubnetAttribute请求参数结构体
 *
 * @method string getSubnetId() 获取子网实例ID。形如：subnet-pxir56ns。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID。形如：subnet-pxir56ns。
 * @method string getSubnetName() 获取子网名称，最大长度不能超过60个字节。
 * @method void setSubnetName(string $SubnetName) 设置子网名称，最大长度不能超过60个字节。
 * @method string getEnableBroadcast() 获取子网是否开启广播。
 * @method void setEnableBroadcast(string $EnableBroadcast) 设置子网是否开启广播。
 */
class ModifySubnetAttributeRequest extends AbstractModel
{
    /**
     * @var string 子网实例ID。形如：subnet-pxir56ns。
     */
    public $SubnetId;

    /**
     * @var string 子网名称，最大长度不能超过60个字节。
     */
    public $SubnetName;

    /**
     * @var string 子网是否开启广播。
     */
    public $EnableBroadcast;

    /**
     * @param string $SubnetId 子网实例ID。形如：subnet-pxir56ns。
     * @param string $SubnetName 子网名称，最大长度不能超过60个字节。
     * @param string $EnableBroadcast 子网是否开启广播。
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("EnableBroadcast",$param) and $param["EnableBroadcast"] !== null) {
            $this->EnableBroadcast = $param["EnableBroadcast"];
        }
    }
}
