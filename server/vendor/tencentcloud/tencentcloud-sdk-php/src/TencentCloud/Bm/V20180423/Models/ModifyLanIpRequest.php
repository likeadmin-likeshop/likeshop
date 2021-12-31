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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLanIp请求参数结构体
 *
 * @method string getInstanceId() 获取物理机ID
 * @method void setInstanceId(string $InstanceId) 设置物理机ID
 * @method string getVpcId() 获取指定新VPC
 * @method void setVpcId(string $VpcId) 设置指定新VPC
 * @method string getSubnetId() 获取指定新子网
 * @method void setSubnetId(string $SubnetId) 设置指定新子网
 * @method string getLanIp() 获取指定新内网IP
 * @method void setLanIp(string $LanIp) 设置指定新内网IP
 * @method integer getRebootDevice() 获取是否需要重启机器，取值 1(需要) 0(不需要)，默认取值0
 * @method void setRebootDevice(integer $RebootDevice) 设置是否需要重启机器，取值 1(需要) 0(不需要)，默认取值0
 */
class ModifyLanIpRequest extends AbstractModel
{
    /**
     * @var string 物理机ID
     */
    public $InstanceId;

    /**
     * @var string 指定新VPC
     */
    public $VpcId;

    /**
     * @var string 指定新子网
     */
    public $SubnetId;

    /**
     * @var string 指定新内网IP
     */
    public $LanIp;

    /**
     * @var integer 是否需要重启机器，取值 1(需要) 0(不需要)，默认取值0
     */
    public $RebootDevice;

    /**
     * @param string $InstanceId 物理机ID
     * @param string $VpcId 指定新VPC
     * @param string $SubnetId 指定新子网
     * @param string $LanIp 指定新内网IP
     * @param integer $RebootDevice 是否需要重启机器，取值 1(需要) 0(不需要)，默认取值0
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("RebootDevice",$param) and $param["RebootDevice"] !== null) {
            $this->RebootDevice = $param["RebootDevice"];
        }
    }
}
