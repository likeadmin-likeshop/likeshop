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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例访问凭证信息
 *
 * @method Credentials getCredentials() 获取访问实例所需要的凭据
 * @method void setCredentials(Credentials $Credentials) 设置访问实例所需要的凭据
 * @method string getFleetId() 获取服务部署Id
 * @method void setFleetId(string $FleetId) 设置服务部署Id
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getIpAddress() 获取实例公网IP
 * @method void setIpAddress(string $IpAddress) 设置实例公网IP
 * @method string getOperatingSystem() 获取操作系统
 * @method void setOperatingSystem(string $OperatingSystem) 设置操作系统
 */
class InstanceAccess extends AbstractModel
{
    /**
     * @var Credentials 访问实例所需要的凭据
     */
    public $Credentials;

    /**
     * @var string 服务部署Id
     */
    public $FleetId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例公网IP
     */
    public $IpAddress;

    /**
     * @var string 操作系统
     */
    public $OperatingSystem;

    /**
     * @param Credentials $Credentials 访问实例所需要的凭据
     * @param string $FleetId 服务部署Id
     * @param string $InstanceId 实例ID
     * @param string $IpAddress 实例公网IP
     * @param string $OperatingSystem 操作系统
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
        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = new Credentials();
            $this->Credentials->deserialize($param["Credentials"]);
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("OperatingSystem",$param) and $param["OperatingSystem"] !== null) {
            $this->OperatingSystem = $param["OperatingSystem"];
        }
    }
}
