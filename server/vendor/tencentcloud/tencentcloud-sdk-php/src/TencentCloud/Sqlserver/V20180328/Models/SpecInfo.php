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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例可售卖的规格信息
 *
 * @method integer getSpecId() 获取实例规格ID，利用DescribeZones返回的SpecId，结合DescribeProductConfig返回的可售卖规格信息，可获悉某个可用区下可购买什么规格的实例
 * @method void setSpecId(integer $SpecId) 设置实例规格ID，利用DescribeZones返回的SpecId，结合DescribeProductConfig返回的可售卖规格信息，可获悉某个可用区下可购买什么规格的实例
 * @method string getMachineType() 获取机型ID
 * @method void setMachineType(string $MachineType) 设置机型ID
 * @method string getMachineTypeName() 获取机型中文名称
 * @method void setMachineTypeName(string $MachineTypeName) 设置机型中文名称
 * @method string getVersion() 获取数据库版本信息。取值为2008R2（表示SQL Server 2008 R2），2012SP3（表示SQL Server 2012），2016SP1（表示SQL Server 2016 SP1）
 * @method void setVersion(string $Version) 设置数据库版本信息。取值为2008R2（表示SQL Server 2008 R2），2012SP3（表示SQL Server 2012），2016SP1（表示SQL Server 2016 SP1）
 * @method string getVersionName() 获取Version字段对应的版本名称
 * @method void setVersionName(string $VersionName) 设置Version字段对应的版本名称
 * @method integer getMemory() 获取内存大小，单位GB
 * @method void setMemory(integer $Memory) 设置内存大小，单位GB
 * @method integer getCPU() 获取CPU核数
 * @method void setCPU(integer $CPU) 设置CPU核数
 * @method integer getMinStorage() 获取此规格下最小的磁盘大小，单位GB
 * @method void setMinStorage(integer $MinStorage) 设置此规格下最小的磁盘大小，单位GB
 * @method integer getMaxStorage() 获取此规格下最大的磁盘大小，单位GB
 * @method void setMaxStorage(integer $MaxStorage) 设置此规格下最大的磁盘大小，单位GB
 * @method integer getQPS() 获取此规格对应的QPS大小
 * @method void setQPS(integer $QPS) 设置此规格对应的QPS大小
 * @method string getSuitInfo() 获取此规格的中文描述信息
 * @method void setSuitInfo(string $SuitInfo) 设置此规格的中文描述信息
 * @method integer getPid() 获取此规格对应的包年包月Pid
 * @method void setPid(integer $Pid) 设置此规格对应的包年包月Pid
 * @method array getPostPid() 获取此规格对应的按量计费Pid列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostPid(array $PostPid) 设置此规格对应的按量计费Pid列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayModeStatus() 获取此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有
 * @method void setPayModeStatus(string $PayModeStatus) 设置此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有
 * @method string getInstanceType() 获取产品类型，HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-基础版本型
 * @method void setInstanceType(string $InstanceType) 设置产品类型，HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-基础版本型
 * @method string getMultiZonesStatus() 获取跨可用区类型，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有
 * @method void setMultiZonesStatus(string $MultiZonesStatus) 设置跨可用区类型，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有
 */
class SpecInfo extends AbstractModel
{
    /**
     * @var integer 实例规格ID，利用DescribeZones返回的SpecId，结合DescribeProductConfig返回的可售卖规格信息，可获悉某个可用区下可购买什么规格的实例
     */
    public $SpecId;

    /**
     * @var string 机型ID
     */
    public $MachineType;

    /**
     * @var string 机型中文名称
     */
    public $MachineTypeName;

    /**
     * @var string 数据库版本信息。取值为2008R2（表示SQL Server 2008 R2），2012SP3（表示SQL Server 2012），2016SP1（表示SQL Server 2016 SP1）
     */
    public $Version;

    /**
     * @var string Version字段对应的版本名称
     */
    public $VersionName;

    /**
     * @var integer 内存大小，单位GB
     */
    public $Memory;

    /**
     * @var integer CPU核数
     */
    public $CPU;

    /**
     * @var integer 此规格下最小的磁盘大小，单位GB
     */
    public $MinStorage;

    /**
     * @var integer 此规格下最大的磁盘大小，单位GB
     */
    public $MaxStorage;

    /**
     * @var integer 此规格对应的QPS大小
     */
    public $QPS;

    /**
     * @var string 此规格的中文描述信息
     */
    public $SuitInfo;

    /**
     * @var integer 此规格对应的包年包月Pid
     */
    public $Pid;

    /**
     * @var array 此规格对应的按量计费Pid列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostPid;

    /**
     * @var string 此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有
     */
    public $PayModeStatus;

    /**
     * @var string 产品类型，HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-基础版本型
     */
    public $InstanceType;

    /**
     * @var string 跨可用区类型，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有
     */
    public $MultiZonesStatus;

    /**
     * @param integer $SpecId 实例规格ID，利用DescribeZones返回的SpecId，结合DescribeProductConfig返回的可售卖规格信息，可获悉某个可用区下可购买什么规格的实例
     * @param string $MachineType 机型ID
     * @param string $MachineTypeName 机型中文名称
     * @param string $Version 数据库版本信息。取值为2008R2（表示SQL Server 2008 R2），2012SP3（表示SQL Server 2012），2016SP1（表示SQL Server 2016 SP1）
     * @param string $VersionName Version字段对应的版本名称
     * @param integer $Memory 内存大小，单位GB
     * @param integer $CPU CPU核数
     * @param integer $MinStorage 此规格下最小的磁盘大小，单位GB
     * @param integer $MaxStorage 此规格下最大的磁盘大小，单位GB
     * @param integer $QPS 此规格对应的QPS大小
     * @param string $SuitInfo 此规格的中文描述信息
     * @param integer $Pid 此规格对应的包年包月Pid
     * @param array $PostPid 此规格对应的按量计费Pid列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayModeStatus 此规格下支持的付费模式，POST-仅支持按量计费 PRE-仅支持包年包月 ALL-支持所有
     * @param string $InstanceType 产品类型，HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-基础版本型
     * @param string $MultiZonesStatus 跨可用区类型，MultiZones-只支持跨可用区，SameZones-只支持同可用区，ALL-支持所有
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
        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineTypeName",$param) and $param["MachineTypeName"] !== null) {
            $this->MachineTypeName = $param["MachineTypeName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("QPS",$param) and $param["QPS"] !== null) {
            $this->QPS = $param["QPS"];
        }

        if (array_key_exists("SuitInfo",$param) and $param["SuitInfo"] !== null) {
            $this->SuitInfo = $param["SuitInfo"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("PostPid",$param) and $param["PostPid"] !== null) {
            $this->PostPid = $param["PostPid"];
        }

        if (array_key_exists("PayModeStatus",$param) and $param["PayModeStatus"] !== null) {
            $this->PayModeStatus = $param["PayModeStatus"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MultiZonesStatus",$param) and $param["MultiZonesStatus"] !== null) {
            $this->MultiZonesStatus = $param["MultiZonesStatus"];
        }
    }
}
