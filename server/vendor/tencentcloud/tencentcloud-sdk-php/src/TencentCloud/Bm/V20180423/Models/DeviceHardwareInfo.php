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
 * 设备硬件配置信息
 *
 * @method string getInstanceId() 获取设备实例 ID
 * @method void setInstanceId(string $InstanceId) 设置设备实例 ID
 * @method integer getIsElastic() 获取是否自定义机型
 * @method void setIsElastic(integer $IsElastic) 设置是否自定义机型
 * @method integer getCpmPayMode() 获取机型计费模式，1 为预付费，2 为后付费
 * @method void setCpmPayMode(integer $CpmPayMode) 设置机型计费模式，1 为预付费，2 为后付费
 * @method integer getCpuId() 获取自定义机型，CPU 型号 ID（非自定义机型返回0）
 * @method void setCpuId(integer $CpuId) 设置自定义机型，CPU 型号 ID（非自定义机型返回0）
 * @method integer getMem() 获取自定义机型，内存大小, 单位 GB（非自定义机型返回0）
 * @method void setMem(integer $Mem) 设置自定义机型，内存大小, 单位 GB（非自定义机型返回0）
 * @method integer getContainRaidCard() 获取是否有 RAID 卡，0：没有 RAID 卡； 1：有 RAID 卡
 * @method void setContainRaidCard(integer $ContainRaidCard) 设置是否有 RAID 卡，0：没有 RAID 卡； 1：有 RAID 卡
 * @method integer getSystemDiskTypeId() 获取自定义机型系统盘类型ID（若没有则返回0）
 * @method void setSystemDiskTypeId(integer $SystemDiskTypeId) 设置自定义机型系统盘类型ID（若没有则返回0）
 * @method integer getSystemDiskCount() 获取自定义机型系统盘数量（若没有则返回0）
 * @method void setSystemDiskCount(integer $SystemDiskCount) 设置自定义机型系统盘数量（若没有则返回0）
 * @method integer getDataDiskTypeId() 获取自定义机型数据盘类型 ID（若没有则返回0）
 * @method void setDataDiskTypeId(integer $DataDiskTypeId) 设置自定义机型数据盘类型 ID（若没有则返回0）
 * @method integer getDataDiskCount() 获取自定义机型数据盘数量（若没有则返回0）
 * @method void setDataDiskCount(integer $DataDiskCount) 设置自定义机型数据盘数量（若没有则返回0）
 * @method string getCpuDescription() 获取CPU 型号描述
 * @method void setCpuDescription(string $CpuDescription) 设置CPU 型号描述
 * @method string getMemDescription() 获取内存描述
 * @method void setMemDescription(string $MemDescription) 设置内存描述
 * @method string getDiskDescription() 获取磁盘描述
 * @method void setDiskDescription(string $DiskDescription) 设置磁盘描述
 * @method string getNicDescription() 获取网卡描述
 * @method void setNicDescription(string $NicDescription) 设置网卡描述
 * @method string getRaidDescription() 获取是否支持 RAID 的描述
 * @method void setRaidDescription(string $RaidDescription) 设置是否支持 RAID 的描述
 * @method integer getCpu() 获取cpu的核心数。仅是物理服务器未开启超线程的核心数， 超线程的核心数为Cpu*2
 * @method void setCpu(integer $Cpu) 设置cpu的核心数。仅是物理服务器未开启超线程的核心数， 超线程的核心数为Cpu*2
 * @method string getDeviceClassCode() 获取机型外部代号
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置机型外部代号
 */
class DeviceHardwareInfo extends AbstractModel
{
    /**
     * @var string 设备实例 ID
     */
    public $InstanceId;

    /**
     * @var integer 是否自定义机型
     */
    public $IsElastic;

    /**
     * @var integer 机型计费模式，1 为预付费，2 为后付费
     */
    public $CpmPayMode;

    /**
     * @var integer 自定义机型，CPU 型号 ID（非自定义机型返回0）
     */
    public $CpuId;

    /**
     * @var integer 自定义机型，内存大小, 单位 GB（非自定义机型返回0）
     */
    public $Mem;

    /**
     * @var integer 是否有 RAID 卡，0：没有 RAID 卡； 1：有 RAID 卡
     */
    public $ContainRaidCard;

    /**
     * @var integer 自定义机型系统盘类型ID（若没有则返回0）
     */
    public $SystemDiskTypeId;

    /**
     * @var integer 自定义机型系统盘数量（若没有则返回0）
     */
    public $SystemDiskCount;

    /**
     * @var integer 自定义机型数据盘类型 ID（若没有则返回0）
     */
    public $DataDiskTypeId;

    /**
     * @var integer 自定义机型数据盘数量（若没有则返回0）
     */
    public $DataDiskCount;

    /**
     * @var string CPU 型号描述
     */
    public $CpuDescription;

    /**
     * @var string 内存描述
     */
    public $MemDescription;

    /**
     * @var string 磁盘描述
     */
    public $DiskDescription;

    /**
     * @var string 网卡描述
     */
    public $NicDescription;

    /**
     * @var string 是否支持 RAID 的描述
     */
    public $RaidDescription;

    /**
     * @var integer cpu的核心数。仅是物理服务器未开启超线程的核心数， 超线程的核心数为Cpu*2
     */
    public $Cpu;

    /**
     * @var string 机型外部代号
     */
    public $DeviceClassCode;

    /**
     * @param string $InstanceId 设备实例 ID
     * @param integer $IsElastic 是否自定义机型
     * @param integer $CpmPayMode 机型计费模式，1 为预付费，2 为后付费
     * @param integer $CpuId 自定义机型，CPU 型号 ID（非自定义机型返回0）
     * @param integer $Mem 自定义机型，内存大小, 单位 GB（非自定义机型返回0）
     * @param integer $ContainRaidCard 是否有 RAID 卡，0：没有 RAID 卡； 1：有 RAID 卡
     * @param integer $SystemDiskTypeId 自定义机型系统盘类型ID（若没有则返回0）
     * @param integer $SystemDiskCount 自定义机型系统盘数量（若没有则返回0）
     * @param integer $DataDiskTypeId 自定义机型数据盘类型 ID（若没有则返回0）
     * @param integer $DataDiskCount 自定义机型数据盘数量（若没有则返回0）
     * @param string $CpuDescription CPU 型号描述
     * @param string $MemDescription 内存描述
     * @param string $DiskDescription 磁盘描述
     * @param string $NicDescription 网卡描述
     * @param string $RaidDescription 是否支持 RAID 的描述
     * @param integer $Cpu cpu的核心数。仅是物理服务器未开启超线程的核心数， 超线程的核心数为Cpu*2
     * @param string $DeviceClassCode 机型外部代号
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

        if (array_key_exists("IsElastic",$param) and $param["IsElastic"] !== null) {
            $this->IsElastic = $param["IsElastic"];
        }

        if (array_key_exists("CpmPayMode",$param) and $param["CpmPayMode"] !== null) {
            $this->CpmPayMode = $param["CpmPayMode"];
        }

        if (array_key_exists("CpuId",$param) and $param["CpuId"] !== null) {
            $this->CpuId = $param["CpuId"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ContainRaidCard",$param) and $param["ContainRaidCard"] !== null) {
            $this->ContainRaidCard = $param["ContainRaidCard"];
        }

        if (array_key_exists("SystemDiskTypeId",$param) and $param["SystemDiskTypeId"] !== null) {
            $this->SystemDiskTypeId = $param["SystemDiskTypeId"];
        }

        if (array_key_exists("SystemDiskCount",$param) and $param["SystemDiskCount"] !== null) {
            $this->SystemDiskCount = $param["SystemDiskCount"];
        }

        if (array_key_exists("DataDiskTypeId",$param) and $param["DataDiskTypeId"] !== null) {
            $this->DataDiskTypeId = $param["DataDiskTypeId"];
        }

        if (array_key_exists("DataDiskCount",$param) and $param["DataDiskCount"] !== null) {
            $this->DataDiskCount = $param["DataDiskCount"];
        }

        if (array_key_exists("CpuDescription",$param) and $param["CpuDescription"] !== null) {
            $this->CpuDescription = $param["CpuDescription"];
        }

        if (array_key_exists("MemDescription",$param) and $param["MemDescription"] !== null) {
            $this->MemDescription = $param["MemDescription"];
        }

        if (array_key_exists("DiskDescription",$param) and $param["DiskDescription"] !== null) {
            $this->DiskDescription = $param["DiskDescription"];
        }

        if (array_key_exists("NicDescription",$param) and $param["NicDescription"] !== null) {
            $this->NicDescription = $param["NicDescription"];
        }

        if (array_key_exists("RaidDescription",$param) and $param["RaidDescription"] !== null) {
            $this->RaidDescription = $param["RaidDescription"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }
    }
}
