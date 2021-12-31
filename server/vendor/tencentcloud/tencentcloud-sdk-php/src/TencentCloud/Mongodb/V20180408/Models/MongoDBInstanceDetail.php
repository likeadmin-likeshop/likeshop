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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详情
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getPayMode() 获取付费类型，可能的返回值：1-包年包月；0-按量计费
 * @method void setPayMode(integer $PayMode) 设置付费类型，可能的返回值：1-包年包月；0-按量计费
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getClusterType() 获取集群类型，可能的返回值：0-副本集实例，1-分片实例，
 * @method void setClusterType(integer $ClusterType) 设置集群类型，可能的返回值：0-副本集实例，1-分片实例，
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method string getZone() 获取可用区信息
 * @method void setZone(string $Zone) 设置可用区信息
 * @method integer getNetType() 获取网络类型，可能的返回值：0-基础网络，1-私有网络
 * @method void setNetType(integer $NetType) 设置网络类型，可能的返回值：0-基础网络，1-私有网络
 * @method string getVpcId() 获取私有网络的ID
 * @method void setVpcId(string $VpcId) 设置私有网络的ID
 * @method string getSubnetId() 获取私有网络的子网ID
 * @method void setSubnetId(string $SubnetId) 设置私有网络的子网ID
 * @method integer getStatus() 获取实例状态，可能的返回值：0-待初始化，1-流程处理中，2-运行中，-2-实例已过期
 * @method void setStatus(integer $Status) 设置实例状态，可能的返回值：0-待初始化，1-流程处理中，2-运行中，-2-实例已过期
 * @method string getVip() 获取实例IP
 * @method void setVip(string $Vip) 设置实例IP
 * @method integer getVport() 获取端口号
 * @method void setVport(integer $Vport) 设置端口号
 * @method string getCreateTime() 获取实例创建时间
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间
 * @method string getDeadLine() 获取实例到期时间
 * @method void setDeadLine(string $DeadLine) 设置实例到期时间
 * @method string getMongoVersion() 获取实例版本信息
 * @method void setMongoVersion(string $MongoVersion) 设置实例版本信息
 * @method integer getMemory() 获取实例内存规格，单位为MB
 * @method void setMemory(integer $Memory) 设置实例内存规格，单位为MB
 * @method integer getVolume() 获取实例磁盘规格，单位为MB
 * @method void setVolume(integer $Volume) 设置实例磁盘规格，单位为MB
 * @method integer getCpuNum() 获取实例CPU核心数
 * @method void setCpuNum(integer $CpuNum) 设置实例CPU核心数
 * @method string getMachineType() 获取实例机器类型
 * @method void setMachineType(string $MachineType) 设置实例机器类型
 * @method integer getSecondaryNum() 获取实例从节点数
 * @method void setSecondaryNum(integer $SecondaryNum) 设置实例从节点数
 * @method integer getReplicationSetNum() 获取实例分片数
 * @method void setReplicationSetNum(integer $ReplicationSetNum) 设置实例分片数
 * @method integer getAutoRenewFlag() 获取实例自动续费标志，可能的返回值：0-手动续费，1-自动续费，2-确认不续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置实例自动续费标志，可能的返回值：0-手动续费，1-自动续费，2-确认不续费
 * @method integer getUsedVolume() 获取已用容量，单位MB
 * @method void setUsedVolume(integer $UsedVolume) 设置已用容量，单位MB
 * @method string getMaintenanceStart() 获取维护窗口起始时间
 * @method void setMaintenanceStart(string $MaintenanceStart) 设置维护窗口起始时间
 * @method string getMaintenanceEnd() 获取维护窗口结束时间
 * @method void setMaintenanceEnd(string $MaintenanceEnd) 设置维护窗口结束时间
 * @method array getReplicaSets() 获取分片信息
 * @method void setReplicaSets(array $ReplicaSets) 设置分片信息
 * @method array getReadonlyInstances() 获取只读实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadonlyInstances(array $ReadonlyInstances) 设置只读实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStandbyInstances() 获取灾备实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandbyInstances(array $StandbyInstances) 设置灾备实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCloneInstances() 获取临时实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneInstances(array $CloneInstances) 设置临时实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method MongoDBInstance getRelatedInstance() 获取关联实例信息，对于正式实例，该字段表示它的临时实例信息；对于临时实例，则表示它的正式实例信息;如果为只读/灾备实例,则表示他的主实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedInstance(MongoDBInstance $RelatedInstance) 设置关联实例信息，对于正式实例，该字段表示它的临时实例信息；对于临时实例，则表示它的正式实例信息;如果为只读/灾备实例,则表示他的主实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取实例标签信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置实例标签信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceVer() 获取实例标记
 * @method void setInstanceVer(integer $InstanceVer) 设置实例标记
 * @method integer getClusterVer() 获取实例标记
 * @method void setClusterVer(integer $ClusterVer) 设置实例标记
 * @method integer getProtocol() 获取协议信息，可能的返回值：1-mongodb，2-dynamodb
 * @method void setProtocol(integer $Protocol) 设置协议信息，可能的返回值：1-mongodb，2-dynamodb
 * @method integer getInstanceType() 获取实例类型，可能的返回值，1-正式实例，2-临时实例，3-只读实例，4-灾备实例
 * @method void setInstanceType(integer $InstanceType) 设置实例类型，可能的返回值，1-正式实例，2-临时实例，3-只读实例，4-灾备实例
 * @method string getInstanceStatusDesc() 获取实例状态描述
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) 设置实例状态描述
 * @method string getRealInstanceId() 获取实例对应的物理实例ID，回档并替换过的实例有不同的InstanceId和RealInstanceId，从barad获取监控数据等场景下需要用物理id获取
 * @method void setRealInstanceId(string $RealInstanceId) 设置实例对应的物理实例ID，回档并替换过的实例有不同的InstanceId和RealInstanceId，从barad获取监控数据等场景下需要用物理id获取
 */
class MongoDBInstanceDetail extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 付费类型，可能的返回值：1-包年包月；0-按量计费
     */
    public $PayMode;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 集群类型，可能的返回值：0-副本集实例，1-分片实例，
     */
    public $ClusterType;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var string 可用区信息
     */
    public $Zone;

    /**
     * @var integer 网络类型，可能的返回值：0-基础网络，1-私有网络
     */
    public $NetType;

    /**
     * @var string 私有网络的ID
     */
    public $VpcId;

    /**
     * @var string 私有网络的子网ID
     */
    public $SubnetId;

    /**
     * @var integer 实例状态，可能的返回值：0-待初始化，1-流程处理中，2-运行中，-2-实例已过期
     */
    public $Status;

    /**
     * @var string 实例IP
     */
    public $Vip;

    /**
     * @var integer 端口号
     */
    public $Vport;

    /**
     * @var string 实例创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例到期时间
     */
    public $DeadLine;

    /**
     * @var string 实例版本信息
     */
    public $MongoVersion;

    /**
     * @var integer 实例内存规格，单位为MB
     */
    public $Memory;

    /**
     * @var integer 实例磁盘规格，单位为MB
     */
    public $Volume;

    /**
     * @var integer 实例CPU核心数
     */
    public $CpuNum;

    /**
     * @var string 实例机器类型
     */
    public $MachineType;

    /**
     * @var integer 实例从节点数
     */
    public $SecondaryNum;

    /**
     * @var integer 实例分片数
     */
    public $ReplicationSetNum;

    /**
     * @var integer 实例自动续费标志，可能的返回值：0-手动续费，1-自动续费，2-确认不续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 已用容量，单位MB
     */
    public $UsedVolume;

    /**
     * @var string 维护窗口起始时间
     */
    public $MaintenanceStart;

    /**
     * @var string 维护窗口结束时间
     */
    public $MaintenanceEnd;

    /**
     * @var array 分片信息
     */
    public $ReplicaSets;

    /**
     * @var array 只读实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadonlyInstances;

    /**
     * @var array 灾备实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandbyInstances;

    /**
     * @var array 临时实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneInstances;

    /**
     * @var MongoDBInstance 关联实例信息，对于正式实例，该字段表示它的临时实例信息；对于临时实例，则表示它的正式实例信息;如果为只读/灾备实例,则表示他的主实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedInstance;

    /**
     * @var array 实例标签信息集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 实例标记
     */
    public $InstanceVer;

    /**
     * @var integer 实例标记
     */
    public $ClusterVer;

    /**
     * @var integer 协议信息，可能的返回值：1-mongodb，2-dynamodb
     */
    public $Protocol;

    /**
     * @var integer 实例类型，可能的返回值，1-正式实例，2-临时实例，3-只读实例，4-灾备实例
     */
    public $InstanceType;

    /**
     * @var string 实例状态描述
     */
    public $InstanceStatusDesc;

    /**
     * @var string 实例对应的物理实例ID，回档并替换过的实例有不同的InstanceId和RealInstanceId，从barad获取监控数据等场景下需要用物理id获取
     */
    public $RealInstanceId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $PayMode 付费类型，可能的返回值：1-包年包月；0-按量计费
     * @param integer $ProjectId 项目ID
     * @param integer $ClusterType 集群类型，可能的返回值：0-副本集实例，1-分片实例，
     * @param string $Region 地域信息
     * @param string $Zone 可用区信息
     * @param integer $NetType 网络类型，可能的返回值：0-基础网络，1-私有网络
     * @param string $VpcId 私有网络的ID
     * @param string $SubnetId 私有网络的子网ID
     * @param integer $Status 实例状态，可能的返回值：0-待初始化，1-流程处理中，2-运行中，-2-实例已过期
     * @param string $Vip 实例IP
     * @param integer $Vport 端口号
     * @param string $CreateTime 实例创建时间
     * @param string $DeadLine 实例到期时间
     * @param string $MongoVersion 实例版本信息
     * @param integer $Memory 实例内存规格，单位为MB
     * @param integer $Volume 实例磁盘规格，单位为MB
     * @param integer $CpuNum 实例CPU核心数
     * @param string $MachineType 实例机器类型
     * @param integer $SecondaryNum 实例从节点数
     * @param integer $ReplicationSetNum 实例分片数
     * @param integer $AutoRenewFlag 实例自动续费标志，可能的返回值：0-手动续费，1-自动续费，2-确认不续费
     * @param integer $UsedVolume 已用容量，单位MB
     * @param string $MaintenanceStart 维护窗口起始时间
     * @param string $MaintenanceEnd 维护窗口结束时间
     * @param array $ReplicaSets 分片信息
     * @param array $ReadonlyInstances 只读实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StandbyInstances 灾备实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CloneInstances 临时实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param MongoDBInstance $RelatedInstance 关联实例信息，对于正式实例，该字段表示它的临时实例信息；对于临时实例，则表示它的正式实例信息;如果为只读/灾备实例,则表示他的主实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 实例标签信息集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceVer 实例标记
     * @param integer $ClusterVer 实例标记
     * @param integer $Protocol 协议信息，可能的返回值：1-mongodb，2-dynamodb
     * @param integer $InstanceType 实例类型，可能的返回值，1-正式实例，2-临时实例，3-只读实例，4-灾备实例
     * @param string $InstanceStatusDesc 实例状态描述
     * @param string $RealInstanceId 实例对应的物理实例ID，回档并替换过的实例有不同的InstanceId和RealInstanceId，从barad获取监控数据等场景下需要用物理id获取
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeadLine",$param) and $param["DeadLine"] !== null) {
            $this->DeadLine = $param["DeadLine"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("SecondaryNum",$param) and $param["SecondaryNum"] !== null) {
            $this->SecondaryNum = $param["SecondaryNum"];
        }

        if (array_key_exists("ReplicationSetNum",$param) and $param["ReplicationSetNum"] !== null) {
            $this->ReplicationSetNum = $param["ReplicationSetNum"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("UsedVolume",$param) and $param["UsedVolume"] !== null) {
            $this->UsedVolume = $param["UsedVolume"];
        }

        if (array_key_exists("MaintenanceStart",$param) and $param["MaintenanceStart"] !== null) {
            $this->MaintenanceStart = $param["MaintenanceStart"];
        }

        if (array_key_exists("MaintenanceEnd",$param) and $param["MaintenanceEnd"] !== null) {
            $this->MaintenanceEnd = $param["MaintenanceEnd"];
        }

        if (array_key_exists("ReplicaSets",$param) and $param["ReplicaSets"] !== null) {
            $this->ReplicaSets = [];
            foreach ($param["ReplicaSets"] as $key => $value){
                $obj = new MongodbShardInfo();
                $obj->deserialize($value);
                array_push($this->ReplicaSets, $obj);
            }
        }

        if (array_key_exists("ReadonlyInstances",$param) and $param["ReadonlyInstances"] !== null) {
            $this->ReadonlyInstances = [];
            foreach ($param["ReadonlyInstances"] as $key => $value){
                $obj = new MongoDBInstance();
                $obj->deserialize($value);
                array_push($this->ReadonlyInstances, $obj);
            }
        }

        if (array_key_exists("StandbyInstances",$param) and $param["StandbyInstances"] !== null) {
            $this->StandbyInstances = [];
            foreach ($param["StandbyInstances"] as $key => $value){
                $obj = new MongoDBInstance();
                $obj->deserialize($value);
                array_push($this->StandbyInstances, $obj);
            }
        }

        if (array_key_exists("CloneInstances",$param) and $param["CloneInstances"] !== null) {
            $this->CloneInstances = [];
            foreach ($param["CloneInstances"] as $key => $value){
                $obj = new MongoDBInstance();
                $obj->deserialize($value);
                array_push($this->CloneInstances, $obj);
            }
        }

        if (array_key_exists("RelatedInstance",$param) and $param["RelatedInstance"] !== null) {
            $this->RelatedInstance = new MongoDBInstance();
            $this->RelatedInstance->deserialize($param["RelatedInstance"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceVer",$param) and $param["InstanceVer"] !== null) {
            $this->InstanceVer = $param["InstanceVer"];
        }

        if (array_key_exists("ClusterVer",$param) and $param["ClusterVer"] !== null) {
            $this->ClusterVer = $param["ClusterVer"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("RealInstanceId",$param) and $param["RealInstanceId"] !== null) {
            $this->RealInstanceId = $param["RealInstanceId"];
        }
    }
}
