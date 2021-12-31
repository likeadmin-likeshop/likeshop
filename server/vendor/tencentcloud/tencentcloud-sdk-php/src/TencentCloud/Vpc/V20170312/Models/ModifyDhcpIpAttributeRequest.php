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
 * ModifyDhcpIpAttribute请求参数结构体
 *
 * @method string getDhcpIpId() 获取`DhcpIp`唯一`ID`，形如：`dhcpip-9o233uri`。
 * @method void setDhcpIpId(string $DhcpIpId) 设置`DhcpIp`唯一`ID`，形如：`dhcpip-9o233uri`。
 * @method string getDhcpIpName() 获取`DhcpIp`名称，可任意命名，但不得超过60个字符。
 * @method void setDhcpIpName(string $DhcpIpName) 设置`DhcpIp`名称，可任意命名，但不得超过60个字符。
 */
class ModifyDhcpIpAttributeRequest extends AbstractModel
{
    /**
     * @var string `DhcpIp`唯一`ID`，形如：`dhcpip-9o233uri`。
     */
    public $DhcpIpId;

    /**
     * @var string `DhcpIp`名称，可任意命名，但不得超过60个字符。
     */
    public $DhcpIpName;

    /**
     * @param string $DhcpIpId `DhcpIp`唯一`ID`，形如：`dhcpip-9o233uri`。
     * @param string $DhcpIpName `DhcpIp`名称，可任意命名，但不得超过60个字符。
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
        if (array_key_exists("DhcpIpId",$param) and $param["DhcpIpId"] !== null) {
            $this->DhcpIpId = $param["DhcpIpId"];
        }

        if (array_key_exists("DhcpIpName",$param) and $param["DhcpIpName"] !== null) {
            $this->DhcpIpName = $param["DhcpIpName"];
        }
    }
}
