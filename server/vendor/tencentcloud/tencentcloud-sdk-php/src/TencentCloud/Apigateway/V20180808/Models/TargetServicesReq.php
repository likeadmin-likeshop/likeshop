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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tsf serverless入参
 *
 * @method string getVmIp() 获取vm ip
 * @method void setVmIp(string $VmIp) 设置vm ip
 * @method string getVpcId() 获取vpc id
 * @method void setVpcId(string $VpcId) 设置vpc id
 * @method integer getVmPort() 获取vm port
 * @method void setVmPort(integer $VmPort) 设置vm port
 * @method string getHostIp() 获取cvm所在宿主机ip
 * @method void setHostIp(string $HostIp) 设置cvm所在宿主机ip
 * @method string getDockerIp() 获取docker ip
 * @method void setDockerIp(string $DockerIp) 设置docker ip
 */
class TargetServicesReq extends AbstractModel
{
    /**
     * @var string vm ip
     */
    public $VmIp;

    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var integer vm port
     */
    public $VmPort;

    /**
     * @var string cvm所在宿主机ip
     */
    public $HostIp;

    /**
     * @var string docker ip
     */
    public $DockerIp;

    /**
     * @param string $VmIp vm ip
     * @param string $VpcId vpc id
     * @param integer $VmPort vm port
     * @param string $HostIp cvm所在宿主机ip
     * @param string $DockerIp docker ip
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
        if (array_key_exists("VmIp",$param) and $param["VmIp"] !== null) {
            $this->VmIp = $param["VmIp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VmPort",$param) and $param["VmPort"] !== null) {
            $this->VmPort = $param["VmPort"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("DockerIp",$param) and $param["DockerIp"] !== null) {
            $this->DockerIp = $param["DockerIp"];
        }
    }
}
