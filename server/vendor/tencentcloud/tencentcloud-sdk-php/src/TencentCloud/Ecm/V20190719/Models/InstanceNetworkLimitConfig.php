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
 * 机器网络资源限制
 *
 * @method integer getCpuNum() 获取cpu核数
 * @method void setCpuNum(integer $CpuNum) 设置cpu核数
 * @method integer getNetworkInterfaceLimit() 获取网卡数量限制
 * @method void setNetworkInterfaceLimit(integer $NetworkInterfaceLimit) 设置网卡数量限制
 * @method integer getInnerIpPerNetworkInterface() 获取每张网卡内网ip数量限制
 * @method void setInnerIpPerNetworkInterface(integer $InnerIpPerNetworkInterface) 设置每张网卡内网ip数量限制
 * @method integer getPublicIpPerInstance() 获取每个实例的外网ip限制
 * @method void setPublicIpPerInstance(integer $PublicIpPerInstance) 设置每个实例的外网ip限制
 */
class InstanceNetworkLimitConfig extends AbstractModel
{
    /**
     * @var integer cpu核数
     */
    public $CpuNum;

    /**
     * @var integer 网卡数量限制
     */
    public $NetworkInterfaceLimit;

    /**
     * @var integer 每张网卡内网ip数量限制
     */
    public $InnerIpPerNetworkInterface;

    /**
     * @var integer 每个实例的外网ip限制
     */
    public $PublicIpPerInstance;

    /**
     * @param integer $CpuNum cpu核数
     * @param integer $NetworkInterfaceLimit 网卡数量限制
     * @param integer $InnerIpPerNetworkInterface 每张网卡内网ip数量限制
     * @param integer $PublicIpPerInstance 每个实例的外网ip限制
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
        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("NetworkInterfaceLimit",$param) and $param["NetworkInterfaceLimit"] !== null) {
            $this->NetworkInterfaceLimit = $param["NetworkInterfaceLimit"];
        }

        if (array_key_exists("InnerIpPerNetworkInterface",$param) and $param["InnerIpPerNetworkInterface"] !== null) {
            $this->InnerIpPerNetworkInterface = $param["InnerIpPerNetworkInterface"];
        }

        if (array_key_exists("PublicIpPerInstance",$param) and $param["PublicIpPerInstance"] !== null) {
            $this->PublicIpPerInstance = $param["PublicIpPerInstance"];
        }
    }
}
