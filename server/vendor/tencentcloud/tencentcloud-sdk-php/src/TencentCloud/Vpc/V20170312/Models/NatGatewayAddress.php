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
 * NAT网关绑定的弹性IP
 *
 * @method string getAddressId() 获取弹性公网IP（EIP）的唯一 ID，形如：`eip-11112222`。
 * @method void setAddressId(string $AddressId) 设置弹性公网IP（EIP）的唯一 ID，形如：`eip-11112222`。
 * @method string getPublicIpAddress() 获取外网IP地址，形如：`123.121.34.33`。
 * @method void setPublicIpAddress(string $PublicIpAddress) 设置外网IP地址，形如：`123.121.34.33`。
 * @method boolean getIsBlocked() 获取资源封堵状态。true表示弹性ip处于封堵状态，false表示弹性ip处于未封堵状态。
 * @method void setIsBlocked(boolean $IsBlocked) 设置资源封堵状态。true表示弹性ip处于封堵状态，false表示弹性ip处于未封堵状态。
 */
class NatGatewayAddress extends AbstractModel
{
    /**
     * @var string 弹性公网IP（EIP）的唯一 ID，形如：`eip-11112222`。
     */
    public $AddressId;

    /**
     * @var string 外网IP地址，形如：`123.121.34.33`。
     */
    public $PublicIpAddress;

    /**
     * @var boolean 资源封堵状态。true表示弹性ip处于封堵状态，false表示弹性ip处于未封堵状态。
     */
    public $IsBlocked;

    /**
     * @param string $AddressId 弹性公网IP（EIP）的唯一 ID，形如：`eip-11112222`。
     * @param string $PublicIpAddress 外网IP地址，形如：`123.121.34.33`。
     * @param boolean $IsBlocked 资源封堵状态。true表示弹性ip处于封堵状态，false表示弹性ip处于未封堵状态。
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("IsBlocked",$param) and $param["IsBlocked"] !== null) {
            $this->IsBlocked = $param["IsBlocked"];
        }
    }
}
