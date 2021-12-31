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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量计算可用的InstanceTypeConfig信息
 *
 * @method integer getMem() 获取内存容量，单位：`GB`。
 * @method void setMem(integer $Mem) 设置内存容量，单位：`GB`。
 * @method integer getCpu() 获取CPU核数，单位：核。
 * @method void setCpu(integer $Cpu) 设置CPU核数，单位：核。
 * @method string getInstanceType() 获取实例机型。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method string getInstanceFamily() 获取实例机型系列。
 * @method void setInstanceFamily(string $InstanceFamily) 设置实例机型系列。
 */
class InstanceTypeConfig extends AbstractModel
{
    /**
     * @var integer 内存容量，单位：`GB`。
     */
    public $Mem;

    /**
     * @var integer CPU核数，单位：核。
     */
    public $Cpu;

    /**
     * @var string 实例机型。
     */
    public $InstanceType;

    /**
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var string 实例机型系列。
     */
    public $InstanceFamily;

    /**
     * @param integer $Mem 内存容量，单位：`GB`。
     * @param integer $Cpu CPU核数，单位：核。
     * @param string $InstanceType 实例机型。
     * @param string $Zone 可用区。
     * @param string $InstanceFamily 实例机型系列。
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
        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }
    }
}
