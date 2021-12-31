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
 * MigratePrivateIpAddress请求参数结构体
 *
 * @method string getSourceNetworkInterfaceId() 获取当内网IP绑定的弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method void setSourceNetworkInterfaceId(string $SourceNetworkInterfaceId) 设置当内网IP绑定的弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method string getDestinationNetworkInterfaceId() 获取待迁移的目的弹性网卡实例ID。
 * @method void setDestinationNetworkInterfaceId(string $DestinationNetworkInterfaceId) 设置待迁移的目的弹性网卡实例ID。
 * @method string getPrivateIpAddress() 获取迁移的内网IP地址，例如：10.0.0.6。
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置迁移的内网IP地址，例如：10.0.0.6。
 */
class MigratePrivateIpAddressRequest extends AbstractModel
{
    /**
     * @var string 当内网IP绑定的弹性网卡实例ID，例如：eni-m6dyj72l。
     */
    public $SourceNetworkInterfaceId;

    /**
     * @var string 待迁移的目的弹性网卡实例ID。
     */
    public $DestinationNetworkInterfaceId;

    /**
     * @var string 迁移的内网IP地址，例如：10.0.0.6。
     */
    public $PrivateIpAddress;

    /**
     * @param string $SourceNetworkInterfaceId 当内网IP绑定的弹性网卡实例ID，例如：eni-m6dyj72l。
     * @param string $DestinationNetworkInterfaceId 待迁移的目的弹性网卡实例ID。
     * @param string $PrivateIpAddress 迁移的内网IP地址，例如：10.0.0.6。
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
        if (array_key_exists("SourceNetworkInterfaceId",$param) and $param["SourceNetworkInterfaceId"] !== null) {
            $this->SourceNetworkInterfaceId = $param["SourceNetworkInterfaceId"];
        }

        if (array_key_exists("DestinationNetworkInterfaceId",$param) and $param["DestinationNetworkInterfaceId"] !== null) {
            $this->DestinationNetworkInterfaceId = $param["DestinationNetworkInterfaceId"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }
    }
}
