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
 * 实例详细信息
 *
 * @method integer getWanStatus() 获取外网状态，可能的返回值为：0-未开通外网；1-已开通外网；2-已关闭外网
 * @method void setWanStatus(integer $WanStatus) 设置外网状态，可能的返回值为：0-未开通外网；1-已开通外网；2-已关闭外网
 * @method string getZone() 获取可用区信息
 * @method void setZone(string $Zone) 设置可用区信息
 * @method integer getInitFlag() 获取初始化标志，可能的返回值为：0-未初始化；1-已初始化
 * @method void setInitFlag(integer $InitFlag) 设置初始化标志，可能的返回值为：0-未初始化；1-已初始化
 * @method RoVipInfo getRoVipInfo() 获取只读vip信息。单独开通只读实例访问的只读实例才有该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoVipInfo(RoVipInfo $RoVipInfo) 设置只读vip信息。单独开通只读实例访问的只读实例才有该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取内存容量，单位为 MB
 * @method void setMemory(integer $Memory) 设置内存容量，单位为 MB
 * @method integer getStatus() 获取实例状态，可能的返回值：0-创建中；1-运行中；4-隔离中；5-已隔离
 * @method void setStatus(integer $Status) 设置实例状态，可能的返回值：0-创建中；1-运行中；4-隔离中；5-已隔离
 * @method integer getVpcId() 获取私有网络 ID，例如：51102
 * @method void setVpcId(integer $VpcId) 设置私有网络 ID，例如：51102
 * @method SlaveInfo getSlaveInfo() 获取备机信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveInfo(SlaveInfo $SlaveInfo) 设置备机信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method integer getVolume() 获取硬盘容量，单位为 GB
 * @method void setVolume(integer $Volume) 设置硬盘容量，单位为 GB
 * @method integer getAutoRenew() 获取自动续费标志，可能的返回值：0-未开通自动续费；1-已开通自动续费；2-已关闭自动续费
 * @method void setAutoRenew(integer $AutoRenew) 设置自动续费标志，可能的返回值：0-未开通自动续费；1-已开通自动续费；2-已关闭自动续费
 * @method integer getProtectMode() 获取数据复制方式。0 - 异步复制；1 - 半同步复制；2 - 强同步复制
 * @method void setProtectMode(integer $ProtectMode) 设置数据复制方式。0 - 异步复制；1 - 半同步复制；2 - 强同步复制
 * @method array getRoGroups() 获取只读组详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoGroups(array $RoGroups) 设置只读组详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubnetId() 获取子网 ID，例如：2333
 * @method void setSubnetId(integer $SubnetId) 设置子网 ID，例如：2333
 * @method integer getInstanceType() 获取实例类型，可能的返回值：1-主实例；2-灾备实例；3-只读实例
 * @method void setInstanceType(integer $InstanceType) 设置实例类型，可能的返回值：1-主实例；2-灾备实例；3-只读实例
 * @method integer getProjectId() 获取项目 ID
 * @method void setProjectId(integer $ProjectId) 设置项目 ID
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method string getDeadlineTime() 获取实例到期时间
 * @method void setDeadlineTime(string $DeadlineTime) 设置实例到期时间
 * @method integer getDeployMode() 获取可用区部署方式。可能的值为：0 - 单可用区；1 - 多可用区
 * @method void setDeployMode(integer $DeployMode) 设置可用区部署方式。可能的值为：0 - 单可用区；1 - 多可用区
 * @method integer getTaskStatus() 获取实例任务状态。0 - 没有任务 ,1 - 升级中,2 - 数据导入中,3 - 开放Slave中,4 - 外网访问开通中,5 - 批量操作执行中,6 - 回档中,7 - 外网访问关闭中,8 - 密码修改中,9 - 实例名修改中,10 - 重启中,12 - 自建迁移中,13 - 删除库表中,14 - 灾备实例创建同步中,15 - 升级待切换,16 - 升级切换中,17 - 升级切换完成
 * @method void setTaskStatus(integer $TaskStatus) 设置实例任务状态。0 - 没有任务 ,1 - 升级中,2 - 数据导入中,3 - 开放Slave中,4 - 外网访问开通中,5 - 批量操作执行中,6 - 回档中,7 - 外网访问关闭中,8 - 密码修改中,9 - 实例名修改中,10 - 重启中,12 - 自建迁移中,13 - 删除库表中,14 - 灾备实例创建同步中,15 - 升级待切换,16 - 升级切换中,17 - 升级切换完成
 * @method MasterInfo getMasterInfo() 获取主实例详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterInfo(MasterInfo $MasterInfo) 设置主实例详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceType() 获取实例类型
 * @method void setDeviceType(string $DeviceType) 设置实例类型
 * @method string getEngineVersion() 获取内核版本
 * @method void setEngineVersion(string $EngineVersion) 设置内核版本
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method array getDrInfo() 获取灾备实例详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrInfo(array $DrInfo) 设置灾备实例详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanDomain() 获取外网域名
 * @method void setWanDomain(string $WanDomain) 设置外网域名
 * @method integer getWanPort() 获取外网端口号
 * @method void setWanPort(integer $WanPort) 设置外网端口号
 * @method integer getPayType() 获取付费类型，可能的返回值：0-包年包月；1-按量计费
 * @method void setPayType(integer $PayType) 设置付费类型，可能的返回值：0-包年包月；1-按量计费
 * @method string getCreateTime() 获取实例创建时间
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间
 * @method string getVip() 获取实例 IP
 * @method void setVip(string $Vip) 设置实例 IP
 * @method integer getVport() 获取端口号
 * @method void setVport(integer $Vport) 设置端口号
 * @method integer getCdbError() 获取是否锁定标记
 * @method void setCdbError(integer $CdbError) 设置是否锁定标记
 * @method string getUniqVpcId() 获取私有网络描述符，例如：“vpc-5v8wn9mg”
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络描述符，例如：“vpc-5v8wn9mg”
 * @method string getUniqSubnetId() 获取子网描述符，例如：“subnet-1typ0s7d”
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网描述符，例如：“subnet-1typ0s7d”
 * @method string getPhysicalId() 获取物理 ID
 * @method void setPhysicalId(string $PhysicalId) 设置物理 ID
 * @method integer getCpu() 获取核心数
 * @method void setCpu(integer $Cpu) 设置核心数
 * @method integer getQps() 获取每秒查询数量
 * @method void setQps(integer $Qps) 设置每秒查询数量
 * @method string getZoneName() 获取可用区中文名称
 * @method void setZoneName(string $ZoneName) 设置可用区中文名称
 * @method string getDeviceClass() 获取物理机型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceClass(string $DeviceClass) 设置物理机型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployGroupId() 获取置放群组 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployGroupId(string $DeployGroupId) 设置置放群组 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取可用区 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置可用区 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceNodes() 获取节点数
 * @method void setInstanceNodes(integer $InstanceNodes) 设置节点数
 * @method array getTagList() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer 外网状态，可能的返回值为：0-未开通外网；1-已开通外网；2-已关闭外网
     */
    public $WanStatus;

    /**
     * @var string 可用区信息
     */
    public $Zone;

    /**
     * @var integer 初始化标志，可能的返回值为：0-未初始化；1-已初始化
     */
    public $InitFlag;

    /**
     * @var RoVipInfo 只读vip信息。单独开通只读实例访问的只读实例才有该字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoVipInfo;

    /**
     * @var integer 内存容量，单位为 MB
     */
    public $Memory;

    /**
     * @var integer 实例状态，可能的返回值：0-创建中；1-运行中；4-隔离中；5-已隔离
     */
    public $Status;

    /**
     * @var integer 私有网络 ID，例如：51102
     */
    public $VpcId;

    /**
     * @var SlaveInfo 备机信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveInfo;

    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var integer 硬盘容量，单位为 GB
     */
    public $Volume;

    /**
     * @var integer 自动续费标志，可能的返回值：0-未开通自动续费；1-已开通自动续费；2-已关闭自动续费
     */
    public $AutoRenew;

    /**
     * @var integer 数据复制方式。0 - 异步复制；1 - 半同步复制；2 - 强同步复制
     */
    public $ProtectMode;

    /**
     * @var array 只读组详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoGroups;

    /**
     * @var integer 子网 ID，例如：2333
     */
    public $SubnetId;

    /**
     * @var integer 实例类型，可能的返回值：1-主实例；2-灾备实例；3-只读实例
     */
    public $InstanceType;

    /**
     * @var integer 项目 ID
     */
    public $ProjectId;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var string 实例到期时间
     */
    public $DeadlineTime;

    /**
     * @var integer 可用区部署方式。可能的值为：0 - 单可用区；1 - 多可用区
     */
    public $DeployMode;

    /**
     * @var integer 实例任务状态。0 - 没有任务 ,1 - 升级中,2 - 数据导入中,3 - 开放Slave中,4 - 外网访问开通中,5 - 批量操作执行中,6 - 回档中,7 - 外网访问关闭中,8 - 密码修改中,9 - 实例名修改中,10 - 重启中,12 - 自建迁移中,13 - 删除库表中,14 - 灾备实例创建同步中,15 - 升级待切换,16 - 升级切换中,17 - 升级切换完成
     */
    public $TaskStatus;

    /**
     * @var MasterInfo 主实例详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterInfo;

    /**
     * @var string 实例类型
     */
    public $DeviceType;

    /**
     * @var string 内核版本
     */
    public $EngineVersion;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var array 灾备实例详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrInfo;

    /**
     * @var string 外网域名
     */
    public $WanDomain;

    /**
     * @var integer 外网端口号
     */
    public $WanPort;

    /**
     * @var integer 付费类型，可能的返回值：0-包年包月；1-按量计费
     */
    public $PayType;

    /**
     * @var string 实例创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例 IP
     */
    public $Vip;

    /**
     * @var integer 端口号
     */
    public $Vport;

    /**
     * @var integer 是否锁定标记
     */
    public $CdbError;

    /**
     * @var string 私有网络描述符，例如：“vpc-5v8wn9mg”
     */
    public $UniqVpcId;

    /**
     * @var string 子网描述符，例如：“subnet-1typ0s7d”
     */
    public $UniqSubnetId;

    /**
     * @var string 物理 ID
     */
    public $PhysicalId;

    /**
     * @var integer 核心数
     */
    public $Cpu;

    /**
     * @var integer 每秒查询数量
     */
    public $Qps;

    /**
     * @var string 可用区中文名称
     */
    public $ZoneName;

    /**
     * @var string 物理机型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceClass;

    /**
     * @var string 置放群组 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployGroupId;

    /**
     * @var integer 可用区 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var integer 节点数
     */
    public $InstanceNodes;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @param integer $WanStatus 外网状态，可能的返回值为：0-未开通外网；1-已开通外网；2-已关闭外网
     * @param string $Zone 可用区信息
     * @param integer $InitFlag 初始化标志，可能的返回值为：0-未初始化；1-已初始化
     * @param RoVipInfo $RoVipInfo 只读vip信息。单独开通只读实例访问的只读实例才有该字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 内存容量，单位为 MB
     * @param integer $Status 实例状态，可能的返回值：0-创建中；1-运行中；4-隔离中；5-已隔离
     * @param integer $VpcId 私有网络 ID，例如：51102
     * @param SlaveInfo $SlaveInfo 备机信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例 ID
     * @param integer $Volume 硬盘容量，单位为 GB
     * @param integer $AutoRenew 自动续费标志，可能的返回值：0-未开通自动续费；1-已开通自动续费；2-已关闭自动续费
     * @param integer $ProtectMode 数据复制方式。0 - 异步复制；1 - 半同步复制；2 - 强同步复制
     * @param array $RoGroups 只读组详细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubnetId 子网 ID，例如：2333
     * @param integer $InstanceType 实例类型，可能的返回值：1-主实例；2-灾备实例；3-只读实例
     * @param integer $ProjectId 项目 ID
     * @param string $Region 地域信息
     * @param string $DeadlineTime 实例到期时间
     * @param integer $DeployMode 可用区部署方式。可能的值为：0 - 单可用区；1 - 多可用区
     * @param integer $TaskStatus 实例任务状态。0 - 没有任务 ,1 - 升级中,2 - 数据导入中,3 - 开放Slave中,4 - 外网访问开通中,5 - 批量操作执行中,6 - 回档中,7 - 外网访问关闭中,8 - 密码修改中,9 - 实例名修改中,10 - 重启中,12 - 自建迁移中,13 - 删除库表中,14 - 灾备实例创建同步中,15 - 升级待切换,16 - 升级切换中,17 - 升级切换完成
     * @param MasterInfo $MasterInfo 主实例详细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceType 实例类型
     * @param string $EngineVersion 内核版本
     * @param string $InstanceName 实例名称
     * @param array $DrInfo 灾备实例详细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanDomain 外网域名
     * @param integer $WanPort 外网端口号
     * @param integer $PayType 付费类型，可能的返回值：0-包年包月；1-按量计费
     * @param string $CreateTime 实例创建时间
     * @param string $Vip 实例 IP
     * @param integer $Vport 端口号
     * @param integer $CdbError 是否锁定标记
     * @param string $UniqVpcId 私有网络描述符，例如：“vpc-5v8wn9mg”
     * @param string $UniqSubnetId 子网描述符，例如：“subnet-1typ0s7d”
     * @param string $PhysicalId 物理 ID
     * @param integer $Cpu 核心数
     * @param integer $Qps 每秒查询数量
     * @param string $ZoneName 可用区中文名称
     * @param string $DeviceClass 物理机型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployGroupId 置放群组 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 可用区 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceNodes 节点数
     * @param array $TagList 标签列表
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
        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("RoVipInfo",$param) and $param["RoVipInfo"] !== null) {
            $this->RoVipInfo = new RoVipInfo();
            $this->RoVipInfo->deserialize($param["RoVipInfo"]);
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SlaveInfo",$param) and $param["SlaveInfo"] !== null) {
            $this->SlaveInfo = new SlaveInfo();
            $this->SlaveInfo->deserialize($param["SlaveInfo"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("RoGroups",$param) and $param["RoGroups"] !== null) {
            $this->RoGroups = [];
            foreach ($param["RoGroups"] as $key => $value){
                $obj = new RoGroup();
                $obj->deserialize($value);
                array_push($this->RoGroups, $obj);
            }
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("MasterInfo",$param) and $param["MasterInfo"] !== null) {
            $this->MasterInfo = new MasterInfo();
            $this->MasterInfo->deserialize($param["MasterInfo"]);
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DrInfo",$param) and $param["DrInfo"] !== null) {
            $this->DrInfo = [];
            foreach ($param["DrInfo"] as $key => $value){
                $obj = new DrInfo();
                $obj->deserialize($value);
                array_push($this->DrInfo, $obj);
            }
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("CdbError",$param) and $param["CdbError"] !== null) {
            $this->CdbError = $param["CdbError"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("PhysicalId",$param) and $param["PhysicalId"] !== null) {
            $this->PhysicalId = $param["PhysicalId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfoItem();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
