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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述分布式数据库分片信息。
 *
 * @method string getInstanceId() 获取所属实例Id
 * @method void setInstanceId(string $InstanceId) 设置所属实例Id
 * @method string getShardSerialId() 获取分片SQL透传Id，用于将sql透传到指定分片执行
 * @method void setShardSerialId(string $ShardSerialId) 设置分片SQL透传Id，用于将sql透传到指定分片执行
 * @method string getShardInstanceId() 获取全局唯一的分片Id
 * @method void setShardInstanceId(string $ShardInstanceId) 设置全局唯一的分片Id
 * @method integer getStatus() 获取状态：0 创建中，1 流程处理中， 2 运行中，3 分片未初始化
 * @method void setStatus(integer $Status) 设置状态：0 创建中，1 流程处理中， 2 运行中，3 分片未初始化
 * @method string getStatusDesc() 获取状态中文描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态中文描述
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getVpcId() 获取字符串格式的私有网络Id
 * @method void setVpcId(string $VpcId) 设置字符串格式的私有网络Id
 * @method string getSubnetId() 获取字符串格式的私有网络子网Id
 * @method void setSubnetId(string $SubnetId) 设置字符串格式的私有网络子网Id
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getMemory() 获取内存大小，单位 GB
 * @method void setMemory(integer $Memory) 设置内存大小，单位 GB
 * @method integer getStorage() 获取存储大小，单位 GB
 * @method void setStorage(integer $Storage) 设置存储大小，单位 GB
 * @method string getPeriodEndTime() 获取到期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间
 * @method integer getNodeCount() 获取节点数，2 为一主一从， 3 为一主二从
 * @method void setNodeCount(integer $NodeCount) 设置节点数，2 为一主一从， 3 为一主二从
 * @method float getStorageUsage() 获取存储使用率，单位为 %
 * @method void setStorageUsage(float $StorageUsage) 设置存储使用率，单位为 %
 * @method float getMemoryUsage() 获取内存使用率，单位为 %
 * @method void setMemoryUsage(float $MemoryUsage) 设置内存使用率，单位为 %
 * @method integer getShardId() 获取数字分片Id（过时字段，请勿依赖该值）
 * @method void setShardId(integer $ShardId) 设置数字分片Id（过时字段，请勿依赖该值）
 * @method integer getPid() 获取产品ProductID
 * @method void setPid(integer $Pid) 设置产品ProductID
 * @method string getProxyVersion() 获取Proxy版本
 * @method void setProxyVersion(string $ProxyVersion) 设置Proxy版本
 * @method string getPaymode() 获取付费模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymode(string $Paymode) 设置付费模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShardMasterZone() 获取分片的主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardMasterZone(string $ShardMasterZone) 设置分片的主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getShardSlaveZones() 获取分片的从可用区列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardSlaveZones(array $ShardSlaveZones) 设置分片的从可用区列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取CPU核数
 * @method void setCpu(integer $Cpu) 设置CPU核数
 * @method string getRange() 获取分片ShardKey的范围（总共64个哈希值），例如： 0-31，32-63
 * @method void setRange(string $Range) 设置分片ShardKey的范围（总共64个哈希值），例如： 0-31，32-63
 */
class DCDBShardInfo extends AbstractModel
{
    /**
     * @var string 所属实例Id
     */
    public $InstanceId;

    /**
     * @var string 分片SQL透传Id，用于将sql透传到指定分片执行
     */
    public $ShardSerialId;

    /**
     * @var string 全局唯一的分片Id
     */
    public $ShardInstanceId;

    /**
     * @var integer 状态：0 创建中，1 流程处理中， 2 运行中，3 分片未初始化
     */
    public $Status;

    /**
     * @var string 状态中文描述
     */
    public $StatusDesc;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 字符串格式的私有网络Id
     */
    public $VpcId;

    /**
     * @var string 字符串格式的私有网络子网Id
     */
    public $SubnetId;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 内存大小，单位 GB
     */
    public $Memory;

    /**
     * @var integer 存储大小，单位 GB
     */
    public $Storage;

    /**
     * @var string 到期时间
     */
    public $PeriodEndTime;

    /**
     * @var integer 节点数，2 为一主一从， 3 为一主二从
     */
    public $NodeCount;

    /**
     * @var float 存储使用率，单位为 %
     */
    public $StorageUsage;

    /**
     * @var float 内存使用率，单位为 %
     */
    public $MemoryUsage;

    /**
     * @var integer 数字分片Id（过时字段，请勿依赖该值）
     */
    public $ShardId;

    /**
     * @var integer 产品ProductID
     */
    public $Pid;

    /**
     * @var string Proxy版本
     */
    public $ProxyVersion;

    /**
     * @var string 付费模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Paymode;

    /**
     * @var string 分片的主可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardMasterZone;

    /**
     * @var array 分片的从可用区列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardSlaveZones;

    /**
     * @var integer CPU核数
     */
    public $Cpu;

    /**
     * @var string 分片ShardKey的范围（总共64个哈希值），例如： 0-31，32-63
     */
    public $Range;

    /**
     * @param string $InstanceId 所属实例Id
     * @param string $ShardSerialId 分片SQL透传Id，用于将sql透传到指定分片执行
     * @param string $ShardInstanceId 全局唯一的分片Id
     * @param integer $Status 状态：0 创建中，1 流程处理中， 2 运行中，3 分片未初始化
     * @param string $StatusDesc 状态中文描述
     * @param string $CreateTime 创建时间
     * @param string $VpcId 字符串格式的私有网络Id
     * @param string $SubnetId 字符串格式的私有网络子网Id
     * @param integer $ProjectId 项目ID
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param integer $Memory 内存大小，单位 GB
     * @param integer $Storage 存储大小，单位 GB
     * @param string $PeriodEndTime 到期时间
     * @param integer $NodeCount 节点数，2 为一主一从， 3 为一主二从
     * @param float $StorageUsage 存储使用率，单位为 %
     * @param float $MemoryUsage 内存使用率，单位为 %
     * @param integer $ShardId 数字分片Id（过时字段，请勿依赖该值）
     * @param integer $Pid 产品ProductID
     * @param string $ProxyVersion Proxy版本
     * @param string $Paymode 付费模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShardMasterZone 分片的主可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ShardSlaveZones 分片的从可用区列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu CPU核数
     * @param string $Range 分片ShardKey的范围（总共64个哈希值），例如： 0-31，32-63
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

        if (array_key_exists("ShardSerialId",$param) and $param["ShardSerialId"] !== null) {
            $this->ShardSerialId = $param["ShardSerialId"];
        }

        if (array_key_exists("ShardInstanceId",$param) and $param["ShardInstanceId"] !== null) {
            $this->ShardInstanceId = $param["ShardInstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("StorageUsage",$param) and $param["StorageUsage"] !== null) {
            $this->StorageUsage = $param["StorageUsage"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }

        if (array_key_exists("ShardMasterZone",$param) and $param["ShardMasterZone"] !== null) {
            $this->ShardMasterZone = $param["ShardMasterZone"];
        }

        if (array_key_exists("ShardSlaveZones",$param) and $param["ShardSlaveZones"] !== null) {
            $this->ShardSlaveZones = $param["ShardSlaveZones"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }
    }
}
