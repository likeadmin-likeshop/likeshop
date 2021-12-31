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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeNatGateway请求参数结构体
 *
 * @method string getNatId() 获取NAT网关ID，例如：nat-kdm476mp
 * @method void setNatId(string $NatId) 设置NAT网关ID，例如：nat-kdm476mp
 * @method string getVpcId() 获取私有网络ID，例如：vpc-kd7d06of
 * @method void setVpcId(string $VpcId) 设置私有网络ID，例如：vpc-kd7d06of
 * @method integer getMaxConcurrent() 获取并发连接数规格；取值为1000000、3000000、10000000，分别对应小型、中型、大型NAT网关
 * @method void setMaxConcurrent(integer $MaxConcurrent) 设置并发连接数规格；取值为1000000、3000000、10000000，分别对应小型、中型、大型NAT网关
 */
class UpgradeNatGatewayRequest extends AbstractModel
{
    /**
     * @var string NAT网关ID，例如：nat-kdm476mp
     */
    public $NatId;

    /**
     * @var string 私有网络ID，例如：vpc-kd7d06of
     */
    public $VpcId;

    /**
     * @var integer 并发连接数规格；取值为1000000、3000000、10000000，分别对应小型、中型、大型NAT网关
     */
    public $MaxConcurrent;

    /**
     * @param string $NatId NAT网关ID，例如：nat-kdm476mp
     * @param string $VpcId 私有网络ID，例如：vpc-kd7d06of
     * @param integer $MaxConcurrent 并发连接数规格；取值为1000000、3000000、10000000，分别对应小型、中型、大型NAT网关
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
        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("MaxConcurrent",$param) and $param["MaxConcurrent"] !== null) {
            $this->MaxConcurrent = $param["MaxConcurrent"];
        }
    }
}
