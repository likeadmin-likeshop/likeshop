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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例可售卖规格详细信息，创建实例时Cpu/Memory确定实例规格，存储可选大小为[MinStorageSize,MaxStorageSize]
 *
 * @method integer getCpu() 获取实例CPU，单位：核
 * @method void setCpu(integer $Cpu) 设置实例CPU，单位：核
 * @method integer getMemory() 获取实例内存，单位：GB
 * @method void setMemory(integer $Memory) 设置实例内存，单位：GB
 * @method integer getMaxStorageSize() 获取实例最大可用存储，单位：GB
 * @method void setMaxStorageSize(integer $MaxStorageSize) 设置实例最大可用存储，单位：GB
 * @method integer getMinStorageSize() 获取实例最小可用存储，单位：GB
 * @method void setMinStorageSize(integer $MinStorageSize) 设置实例最小可用存储，单位：GB
 */
class InstanceSpec extends AbstractModel
{
    /**
     * @var integer 实例CPU，单位：核
     */
    public $Cpu;

    /**
     * @var integer 实例内存，单位：GB
     */
    public $Memory;

    /**
     * @var integer 实例最大可用存储，单位：GB
     */
    public $MaxStorageSize;

    /**
     * @var integer 实例最小可用存储，单位：GB
     */
    public $MinStorageSize;

    /**
     * @param integer $Cpu 实例CPU，单位：核
     * @param integer $Memory 实例内存，单位：GB
     * @param integer $MaxStorageSize 实例最大可用存储，单位：GB
     * @param integer $MinStorageSize 实例最小可用存储，单位：GB
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }
    }
}
