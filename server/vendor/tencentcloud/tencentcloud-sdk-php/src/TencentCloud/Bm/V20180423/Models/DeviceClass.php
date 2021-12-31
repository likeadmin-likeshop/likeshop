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
 * 物理机设备类型
 *
 * @method string getDeviceClassCode() 获取机型ID
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置机型ID
 * @method string getCpuDescription() 获取CPU描述
 * @method void setCpuDescription(string $CpuDescription) 设置CPU描述
 * @method string getMemDescription() 获取内存描述
 * @method void setMemDescription(string $MemDescription) 设置内存描述
 * @method string getDiskDescription() 获取硬盘描述
 * @method void setDiskDescription(string $DiskDescription) 设置硬盘描述
 * @method integer getHaveRaidCard() 获取是否支持RAID. 0:不支持; 1:支持
 * @method void setHaveRaidCard(integer $HaveRaidCard) 设置是否支持RAID. 0:不支持; 1:支持
 * @method string getNicDescription() 获取网卡描述
 * @method void setNicDescription(string $NicDescription) 设置网卡描述
 * @method string getGpuDescription() 获取GPU描述
 * @method void setGpuDescription(string $GpuDescription) 设置GPU描述
 * @method float getDiscount() 获取单价折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(float $Discount) 设置单价折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnitPrice() 获取用户刊例价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(integer $UnitPrice) 设置用户刊例价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealPrice() 获取实际价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealPrice(integer $RealPrice) 设置实际价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNormalPrice() 获取官网刊例价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormalPrice(integer $NormalPrice) 设置官网刊例价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceType() 获取设备使用场景类型
 * @method void setDeviceType(string $DeviceType) 设置设备使用场景类型
 * @method integer getSeries() 获取机型系列
 * @method void setSeries(integer $Series) 设置机型系列
 * @method integer getCpu() 获取cpu的核心数。仅是物理服务器未开启超线程的核心数， 超线程的核心数为Cpu*2
 * @method void setCpu(integer $Cpu) 设置cpu的核心数。仅是物理服务器未开启超线程的核心数， 超线程的核心数为Cpu*2
 * @method integer getMem() 获取内存容量。单位G
 * @method void setMem(integer $Mem) 设置内存容量。单位G
 */
class DeviceClass extends AbstractModel
{
    /**
     * @var string 机型ID
     */
    public $DeviceClassCode;

    /**
     * @var string CPU描述
     */
    public $CpuDescription;

    /**
     * @var string 内存描述
     */
    public $MemDescription;

    /**
     * @var string 硬盘描述
     */
    public $DiskDescription;

    /**
     * @var integer 是否支持RAID. 0:不支持; 1:支持
     */
    public $HaveRaidCard;

    /**
     * @var string 网卡描述
     */
    public $NicDescription;

    /**
     * @var string GPU描述
     */
    public $GpuDescription;

    /**
     * @var float 单价折扣
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @var integer 用户刊例价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var integer 实际价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealPrice;

    /**
     * @var integer 官网刊例价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NormalPrice;

    /**
     * @var string 设备使用场景类型
     */
    public $DeviceType;

    /**
     * @var integer 机型系列
     */
    public $Series;

    /**
     * @var integer cpu的核心数。仅是物理服务器未开启超线程的核心数， 超线程的核心数为Cpu*2
     */
    public $Cpu;

    /**
     * @var integer 内存容量。单位G
     */
    public $Mem;

    /**
     * @param string $DeviceClassCode 机型ID
     * @param string $CpuDescription CPU描述
     * @param string $MemDescription 内存描述
     * @param string $DiskDescription 硬盘描述
     * @param integer $HaveRaidCard 是否支持RAID. 0:不支持; 1:支持
     * @param string $NicDescription 网卡描述
     * @param string $GpuDescription GPU描述
     * @param float $Discount 单价折扣
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnitPrice 用户刊例价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealPrice 实际价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NormalPrice 官网刊例价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceType 设备使用场景类型
     * @param integer $Series 机型系列
     * @param integer $Cpu cpu的核心数。仅是物理服务器未开启超线程的核心数， 超线程的核心数为Cpu*2
     * @param integer $Mem 内存容量。单位G
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
        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
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

        if (array_key_exists("HaveRaidCard",$param) and $param["HaveRaidCard"] !== null) {
            $this->HaveRaidCard = $param["HaveRaidCard"];
        }

        if (array_key_exists("NicDescription",$param) and $param["NicDescription"] !== null) {
            $this->NicDescription = $param["NicDescription"];
        }

        if (array_key_exists("GpuDescription",$param) and $param["GpuDescription"] !== null) {
            $this->GpuDescription = $param["GpuDescription"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("RealPrice",$param) and $param["RealPrice"] !== null) {
            $this->RealPrice = $param["RealPrice"];
        }

        if (array_key_exists("NormalPrice",$param) and $param["NormalPrice"] !== null) {
            $this->NormalPrice = $param["NormalPrice"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = $param["Series"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }
    }
}
