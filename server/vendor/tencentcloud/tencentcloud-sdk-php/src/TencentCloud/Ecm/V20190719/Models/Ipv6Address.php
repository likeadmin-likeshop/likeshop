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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IPv6地址信息。
 *
 * @method string getAddress() 获取IPv6地址，形如：3402:4e00:20:100:0:8cd9:2a67:71f3
 * @method void setAddress(string $Address) 设置IPv6地址，形如：3402:4e00:20:100:0:8cd9:2a67:71f3
 * @method boolean getPrimary() 获取是否是主IP。
 * @method void setPrimary(boolean $Primary) 设置是否是主IP。
 * @method string getAddressId() 获取EIP实例ID，形如：eip-hxlqja90。
 * @method void setAddressId(string $AddressId) 设置EIP实例ID，形如：eip-hxlqja90。
 * @method string getDescription() 获取描述信息。
 * @method void setDescription(string $Description) 设置描述信息。
 * @method boolean getIsWanIpBlocked() 获取公网IP是否被封堵。
 * @method void setIsWanIpBlocked(boolean $IsWanIpBlocked) 设置公网IP是否被封堵。
 * @method string getState() 获取IPv6地址状态：
PENDING：生产中
MIGRATING：迁移中
DELETING：删除中
AVAILABLE：可用的
 * @method void setState(string $State) 设置IPv6地址状态：
PENDING：生产中
MIGRATING：迁移中
DELETING：删除中
AVAILABLE：可用的
 */
class Ipv6Address extends AbstractModel
{
    /**
     * @var string IPv6地址，形如：3402:4e00:20:100:0:8cd9:2a67:71f3
     */
    public $Address;

    /**
     * @var boolean 是否是主IP。
     */
    public $Primary;

    /**
     * @var string EIP实例ID，形如：eip-hxlqja90。
     */
    public $AddressId;

    /**
     * @var string 描述信息。
     */
    public $Description;

    /**
     * @var boolean 公网IP是否被封堵。
     */
    public $IsWanIpBlocked;

    /**
     * @var string IPv6地址状态：
PENDING：生产中
MIGRATING：迁移中
DELETING：删除中
AVAILABLE：可用的
     */
    public $State;

    /**
     * @param string $Address IPv6地址，形如：3402:4e00:20:100:0:8cd9:2a67:71f3
     * @param boolean $Primary 是否是主IP。
     * @param string $AddressId EIP实例ID，形如：eip-hxlqja90。
     * @param string $Description 描述信息。
     * @param boolean $IsWanIpBlocked 公网IP是否被封堵。
     * @param string $State IPv6地址状态：
PENDING：生产中
MIGRATING：迁移中
DELETING：删除中
AVAILABLE：可用的
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsWanIpBlocked",$param) and $param["IsWanIpBlocked"] !== null) {
            $this->IsWanIpBlocked = $param["IsWanIpBlocked"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
