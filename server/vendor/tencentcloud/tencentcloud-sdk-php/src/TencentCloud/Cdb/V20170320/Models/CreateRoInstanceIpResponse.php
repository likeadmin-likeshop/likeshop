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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoInstanceIp返回参数结构体
 *
 * @method integer getRoVpcId() 获取只读实例的私有网络的ID。
 * @method void setRoVpcId(integer $RoVpcId) 设置只读实例的私有网络的ID。
 * @method integer getRoSubnetId() 获取只读实例的子网ID。
 * @method void setRoSubnetId(integer $RoSubnetId) 设置只读实例的子网ID。
 * @method string getRoVip() 获取只读实例的内网IP地址。
 * @method void setRoVip(string $RoVip) 设置只读实例的内网IP地址。
 * @method integer getRoVport() 获取只读实例的内网端口号。
 * @method void setRoVport(integer $RoVport) 设置只读实例的内网端口号。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateRoInstanceIpResponse extends AbstractModel
{
    /**
     * @var integer 只读实例的私有网络的ID。
     */
    public $RoVpcId;

    /**
     * @var integer 只读实例的子网ID。
     */
    public $RoSubnetId;

    /**
     * @var string 只读实例的内网IP地址。
     */
    public $RoVip;

    /**
     * @var integer 只读实例的内网端口号。
     */
    public $RoVport;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RoVpcId 只读实例的私有网络的ID。
     * @param integer $RoSubnetId 只读实例的子网ID。
     * @param string $RoVip 只读实例的内网IP地址。
     * @param integer $RoVport 只读实例的内网端口号。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RoVpcId",$param) and $param["RoVpcId"] !== null) {
            $this->RoVpcId = $param["RoVpcId"];
        }

        if (array_key_exists("RoSubnetId",$param) and $param["RoSubnetId"] !== null) {
            $this->RoSubnetId = $param["RoSubnetId"];
        }

        if (array_key_exists("RoVip",$param) and $param["RoVip"] !== null) {
            $this->RoVip = $param["RoVip"];
        }

        if (array_key_exists("RoVport",$param) and $param["RoVport"] !== null) {
            $this->RoVport = $param["RoVport"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
