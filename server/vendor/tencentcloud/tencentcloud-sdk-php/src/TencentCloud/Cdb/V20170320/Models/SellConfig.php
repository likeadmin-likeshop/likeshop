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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 售卖配置详情
 *
 * @method string getDevice() 获取设备类型（废弃）
 * @method void setDevice(string $Device) 设置设备类型（废弃）
 * @method string getType() 获取售卖规格描述（废弃）
 * @method void setType(string $Type) 设置售卖规格描述（废弃）
 * @method string getCdbType() 获取实例类型（废弃）
 * @method void setCdbType(string $CdbType) 设置实例类型（废弃）
 * @method integer getMemory() 获取内存大小，单位为MB
 * @method void setMemory(integer $Memory) 设置内存大小，单位为MB
 * @method integer getCpu() 获取CPU核心数
 * @method void setCpu(integer $Cpu) 设置CPU核心数
 * @method integer getVolumeMin() 获取磁盘最小规格，单位为GB
 * @method void setVolumeMin(integer $VolumeMin) 设置磁盘最小规格，单位为GB
 * @method integer getVolumeMax() 获取磁盘最大规格，单位为GB
 * @method void setVolumeMax(integer $VolumeMax) 设置磁盘最大规格，单位为GB
 * @method integer getVolumeStep() 获取磁盘步长，单位为GB
 * @method void setVolumeStep(integer $VolumeStep) 设置磁盘步长，单位为GB
 * @method integer getConnection() 获取链接数
 * @method void setConnection(integer $Connection) 设置链接数
 * @method integer getQps() 获取每秒查询数量
 * @method void setQps(integer $Qps) 设置每秒查询数量
 * @method integer getIops() 获取每秒IO数量
 * @method void setIops(integer $Iops) 设置每秒IO数量
 * @method string getInfo() 获取应用场景描述
 * @method void setInfo(string $Info) 设置应用场景描述
 * @method integer getStatus() 获取状态值，0 表示该规格对外售卖
 * @method void setStatus(integer $Status) 设置状态值，0 表示该规格对外售卖
 * @method integer getTag() 获取标签值（废弃）
 * @method void setTag(integer $Tag) 设置标签值（废弃）
 * @method string getDeviceType() 获取实例类型，可能的取值范围有：UNIVERSAL (通用型), EXCLUSIVE (独享型), BASIC (基础型)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceType(string $DeviceType) 设置实例类型，可能的取值范围有：UNIVERSAL (通用型), EXCLUSIVE (独享型), BASIC (基础型)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceTypeName() 获取实例类型描述，可能的取值范围有：通用型， 独享型， 基础型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceTypeName(string $DeviceTypeName) 设置实例类型描述，可能的取值范围有：通用型， 独享型， 基础型
注意：此字段可能返回 null，表示取不到有效值。
 */
class SellConfig extends AbstractModel
{
    /**
     * @var string 设备类型（废弃）
     */
    public $Device;

    /**
     * @var string 售卖规格描述（废弃）
     */
    public $Type;

    /**
     * @var string 实例类型（废弃）
     */
    public $CdbType;

    /**
     * @var integer 内存大小，单位为MB
     */
    public $Memory;

    /**
     * @var integer CPU核心数
     */
    public $Cpu;

    /**
     * @var integer 磁盘最小规格，单位为GB
     */
    public $VolumeMin;

    /**
     * @var integer 磁盘最大规格，单位为GB
     */
    public $VolumeMax;

    /**
     * @var integer 磁盘步长，单位为GB
     */
    public $VolumeStep;

    /**
     * @var integer 链接数
     */
    public $Connection;

    /**
     * @var integer 每秒查询数量
     */
    public $Qps;

    /**
     * @var integer 每秒IO数量
     */
    public $Iops;

    /**
     * @var string 应用场景描述
     */
    public $Info;

    /**
     * @var integer 状态值，0 表示该规格对外售卖
     */
    public $Status;

    /**
     * @var integer 标签值（废弃）
     */
    public $Tag;

    /**
     * @var string 实例类型，可能的取值范围有：UNIVERSAL (通用型), EXCLUSIVE (独享型), BASIC (基础型)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceType;

    /**
     * @var string 实例类型描述，可能的取值范围有：通用型， 独享型， 基础型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceTypeName;

    /**
     * @param string $Device 设备类型（废弃）
     * @param string $Type 售卖规格描述（废弃）
     * @param string $CdbType 实例类型（废弃）
     * @param integer $Memory 内存大小，单位为MB
     * @param integer $Cpu CPU核心数
     * @param integer $VolumeMin 磁盘最小规格，单位为GB
     * @param integer $VolumeMax 磁盘最大规格，单位为GB
     * @param integer $VolumeStep 磁盘步长，单位为GB
     * @param integer $Connection 链接数
     * @param integer $Qps 每秒查询数量
     * @param integer $Iops 每秒IO数量
     * @param string $Info 应用场景描述
     * @param integer $Status 状态值，0 表示该规格对外售卖
     * @param integer $Tag 标签值（废弃）
     * @param string $DeviceType 实例类型，可能的取值范围有：UNIVERSAL (通用型), EXCLUSIVE (独享型), BASIC (基础型)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceTypeName 实例类型描述，可能的取值范围有：通用型， 独享型， 基础型
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CdbType",$param) and $param["CdbType"] !== null) {
            $this->CdbType = $param["CdbType"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("VolumeMin",$param) and $param["VolumeMin"] !== null) {
            $this->VolumeMin = $param["VolumeMin"];
        }

        if (array_key_exists("VolumeMax",$param) and $param["VolumeMax"] !== null) {
            $this->VolumeMax = $param["VolumeMax"];
        }

        if (array_key_exists("VolumeStep",$param) and $param["VolumeStep"] !== null) {
            $this->VolumeStep = $param["VolumeStep"];
        }

        if (array_key_exists("Connection",$param) and $param["Connection"] !== null) {
            $this->Connection = $param["Connection"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Iops",$param) and $param["Iops"] !== null) {
            $this->Iops = $param["Iops"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("DeviceTypeName",$param) and $param["DeviceTypeName"] !== null) {
            $this->DeviceTypeName = $param["DeviceTypeName"];
        }
    }
}
