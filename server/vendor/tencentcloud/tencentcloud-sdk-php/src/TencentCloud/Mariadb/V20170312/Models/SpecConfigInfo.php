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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例可售卖规格详细信息，创建实例和扩容实例时 Pid+MemSize 唯一确定一种售卖规格，磁盘大小可用区间为[MinDataDisk,MaxDataDisk]
 *
 * @method string getMachine() 获取设备型号
 * @method void setMachine(string $Machine) 设置设备型号
 * @method integer getMemory() 获取内存大小，单位 GB
 * @method void setMemory(integer $Memory) 设置内存大小，单位 GB
 * @method integer getMinStorage() 获取数据盘规格最小值，单位 GB
 * @method void setMinStorage(integer $MinStorage) 设置数据盘规格最小值，单位 GB
 * @method integer getMaxStorage() 获取数据盘规格最大值，单位 GB
 * @method void setMaxStorage(integer $MaxStorage) 设置数据盘规格最大值，单位 GB
 * @method string getSuitInfo() 获取推荐的使用场景
 * @method void setSuitInfo(string $SuitInfo) 设置推荐的使用场景
 * @method integer getQps() 获取最大 Qps 值
 * @method void setQps(integer $Qps) 设置最大 Qps 值
 * @method integer getPid() 获取产品类型 Id
 * @method void setPid(integer $Pid) 设置产品类型 Id
 * @method integer getNodeCount() 获取节点个数，2 表示一主一从，3 表示一主二从
 * @method void setNodeCount(integer $NodeCount) 设置节点个数，2 表示一主一从，3 表示一主二从
 * @method integer getCpu() 获取Cpu核数
 * @method void setCpu(integer $Cpu) 设置Cpu核数
 */
class SpecConfigInfo extends AbstractModel
{
    /**
     * @var string 设备型号
     */
    public $Machine;

    /**
     * @var integer 内存大小，单位 GB
     */
    public $Memory;

    /**
     * @var integer 数据盘规格最小值，单位 GB
     */
    public $MinStorage;

    /**
     * @var integer 数据盘规格最大值，单位 GB
     */
    public $MaxStorage;

    /**
     * @var string 推荐的使用场景
     */
    public $SuitInfo;

    /**
     * @var integer 最大 Qps 值
     */
    public $Qps;

    /**
     * @var integer 产品类型 Id
     */
    public $Pid;

    /**
     * @var integer 节点个数，2 表示一主一从，3 表示一主二从
     */
    public $NodeCount;

    /**
     * @var integer Cpu核数
     */
    public $Cpu;

    /**
     * @param string $Machine 设备型号
     * @param integer $Memory 内存大小，单位 GB
     * @param integer $MinStorage 数据盘规格最小值，单位 GB
     * @param integer $MaxStorage 数据盘规格最大值，单位 GB
     * @param string $SuitInfo 推荐的使用场景
     * @param integer $Qps 最大 Qps 值
     * @param integer $Pid 产品类型 Id
     * @param integer $NodeCount 节点个数，2 表示一主一从，3 表示一主二从
     * @param integer $Cpu Cpu核数
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
        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("SuitInfo",$param) and $param["SuitInfo"] !== null) {
            $this->SuitInfo = $param["SuitInfo"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}
