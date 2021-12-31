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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点
 *
 * @method string getId() 获取节点 ID
 * @method void setId(string $Id) 设置节点 ID
 * @method string getZone() 获取节点所在地区
 * @method void setZone(string $Zone) 设置节点所在地区
 * @method string getInstanceType() 获取节点类型
 * @method void setInstanceType(string $InstanceType) 设置节点类型
 * @method string getInstanceChargeType() 获取节点充值类型
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置节点充值类型
 * @method integer getCpu() 获取Cpu 核数
 * @method void setCpu(integer $Cpu) 设置Cpu 核数
 * @method integer getMemory() 获取内存
 * @method void setMemory(integer $Memory) 设置内存
 * @method integer getGpu() 获取Gpu 核数
 * @method void setGpu(integer $Gpu) 设置Gpu 核数
 * @method string getState() 获取节点状态
 * @method void setState(string $State) 设置节点状态
 * @method string getAbnormalReason() 获取节点故障信息
 * @method void setAbnormalReason(string $AbnormalReason) 设置节点故障信息
 * @method string getCreated() 获取创建时间
 * @method void setCreated(string $Created) 设置创建时间
 * @method string getUpdated() 获取更新时间
 * @method void setUpdated(string $Updated) 设置更新时间
 * @method string getDeadlineTime() 获取到期时间
 * @method void setDeadlineTime(string $DeadlineTime) 设置到期时间
 * @method string getResourceGroupId() 获取所属资源组 ID
 * @method void setResourceGroupId(string $ResourceGroupId) 设置所属资源组 ID
 * @method string getRenewFlag() 获取自动续费标签
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标签
 * @method string getRegion() 获取节点所在地域
 * @method void setRegion(string $Region) 设置节点所在地域
 * @method integer getCpuRequested() 获取当前 Cpu 申请使用量
 * @method void setCpuRequested(integer $CpuRequested) 设置当前 Cpu 申请使用量
 * @method integer getMemoryRequested() 获取当前 Memory 申请使用量
 * @method void setMemoryRequested(integer $MemoryRequested) 设置当前 Memory 申请使用量
 * @method integer getGpuRequested() 获取当前 Gpu 申请使用量
 * @method void setGpuRequested(integer $GpuRequested) 设置当前 Gpu 申请使用量
 * @method string getRsgAsGroupId() 获取节点所在伸缩组 ID
 * @method void setRsgAsGroupId(string $RsgAsGroupId) 设置节点所在伸缩组 ID
 */
class Instance extends AbstractModel
{
    /**
     * @var string 节点 ID
     */
    public $Id;

    /**
     * @var string 节点所在地区
     */
    public $Zone;

    /**
     * @var string 节点类型
     */
    public $InstanceType;

    /**
     * @var string 节点充值类型
     */
    public $InstanceChargeType;

    /**
     * @var integer Cpu 核数
     */
    public $Cpu;

    /**
     * @var integer 内存
     */
    public $Memory;

    /**
     * @var integer Gpu 核数
     */
    public $Gpu;

    /**
     * @var string 节点状态
     */
    public $State;

    /**
     * @var string 节点故障信息
     */
    public $AbnormalReason;

    /**
     * @var string 创建时间
     */
    public $Created;

    /**
     * @var string 更新时间
     */
    public $Updated;

    /**
     * @var string 到期时间
     */
    public $DeadlineTime;

    /**
     * @var string 所属资源组 ID
     */
    public $ResourceGroupId;

    /**
     * @var string 自动续费标签
     */
    public $RenewFlag;

    /**
     * @var string 节点所在地域
     */
    public $Region;

    /**
     * @var integer 当前 Cpu 申请使用量
     */
    public $CpuRequested;

    /**
     * @var integer 当前 Memory 申请使用量
     */
    public $MemoryRequested;

    /**
     * @var integer 当前 Gpu 申请使用量
     */
    public $GpuRequested;

    /**
     * @var string 节点所在伸缩组 ID
     */
    public $RsgAsGroupId;

    /**
     * @param string $Id 节点 ID
     * @param string $Zone 节点所在地区
     * @param string $InstanceType 节点类型
     * @param string $InstanceChargeType 节点充值类型
     * @param integer $Cpu Cpu 核数
     * @param integer $Memory 内存
     * @param integer $Gpu Gpu 核数
     * @param string $State 节点状态
     * @param string $AbnormalReason 节点故障信息
     * @param string $Created 创建时间
     * @param string $Updated 更新时间
     * @param string $DeadlineTime 到期时间
     * @param string $ResourceGroupId 所属资源组 ID
     * @param string $RenewFlag 自动续费标签
     * @param string $Region 节点所在地域
     * @param integer $CpuRequested 当前 Cpu 申请使用量
     * @param integer $MemoryRequested 当前 Memory 申请使用量
     * @param integer $GpuRequested 当前 Gpu 申请使用量
     * @param string $RsgAsGroupId 节点所在伸缩组 ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AbnormalReason",$param) and $param["AbnormalReason"] !== null) {
            $this->AbnormalReason = $param["AbnormalReason"];
        }

        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("Updated",$param) and $param["Updated"] !== null) {
            $this->Updated = $param["Updated"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CpuRequested",$param) and $param["CpuRequested"] !== null) {
            $this->CpuRequested = $param["CpuRequested"];
        }

        if (array_key_exists("MemoryRequested",$param) and $param["MemoryRequested"] !== null) {
            $this->MemoryRequested = $param["MemoryRequested"];
        }

        if (array_key_exists("GpuRequested",$param) and $param["GpuRequested"] !== null) {
            $this->GpuRequested = $param["GpuRequested"];
        }

        if (array_key_exists("RsgAsGroupId",$param) and $param["RsgAsGroupId"] !== null) {
            $this->RsgAsGroupId = $param["RsgAsGroupId"];
        }
    }
}
