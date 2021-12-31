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
 * 服务器实例类型信息
 *
 * @method string getTypeName() 获取类型名，例如“标准型SA1”
 * @method void setTypeName(string $TypeName) 设置类型名，例如“标准型SA1”
 * @method string getInstanceType() 获取类型，例如"SA1.SMALL1"
 * @method void setInstanceType(string $InstanceType) 设置类型，例如"SA1.SMALL1"
 * @method integer getCpu() 获取CPU，例如1核就是1
 * @method void setCpu(integer $Cpu) 设置CPU，例如1核就是1
 * @method integer getMemory() 获取内存，例如2G就是2
 * @method void setMemory(integer $Memory) 设置内存，例如2G就是2
 * @method integer getNetworkCard() 获取网络收到包,例如25万PPS就是25
 * @method void setNetworkCard(integer $NetworkCard) 设置网络收到包,例如25万PPS就是25
 */
class InstanceTypeInfo extends AbstractModel
{
    /**
     * @var string 类型名，例如“标准型SA1”
     */
    public $TypeName;

    /**
     * @var string 类型，例如"SA1.SMALL1"
     */
    public $InstanceType;

    /**
     * @var integer CPU，例如1核就是1
     */
    public $Cpu;

    /**
     * @var integer 内存，例如2G就是2
     */
    public $Memory;

    /**
     * @var integer 网络收到包,例如25万PPS就是25
     */
    public $NetworkCard;

    /**
     * @param string $TypeName 类型名，例如“标准型SA1”
     * @param string $InstanceType 类型，例如"SA1.SMALL1"
     * @param integer $Cpu CPU，例如1核就是1
     * @param integer $Memory 内存，例如2G就是2
     * @param integer $NetworkCard 网络收到包,例如25万PPS就是25
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }
    }
}
