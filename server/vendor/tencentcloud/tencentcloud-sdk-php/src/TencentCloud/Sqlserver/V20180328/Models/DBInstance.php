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
 * 实例详细信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method integer getProjectId() 获取实例所在项目ID
 * @method void setProjectId(integer $ProjectId) 设置实例所在项目ID
 * @method integer getRegionId() 获取实例所在地域ID
 * @method void setRegionId(integer $RegionId) 设置实例所在地域ID
 * @method integer getZoneId() 获取实例所在可用区ID
 * @method void setZoneId(integer $ZoneId) 设置实例所在可用区ID
 * @method integer getVpcId() 获取实例所在私有网络ID，基础网络时为 0
 * @method void setVpcId(integer $VpcId) 设置实例所在私有网络ID，基础网络时为 0
 * @method integer getSubnetId() 获取实例所在私有网络子网ID，基础网络时为 0
 * @method void setSubnetId(integer $SubnetId) 设置实例所在私有网络子网ID，基础网络时为 0
 * @method integer getStatus() 获取实例状态。取值范围： <li>1：申请中</li> <li>2：运行中</li> <li>3：受限运行中 (主备切换中)</li> <li>4：已隔离</li> <li>5：回收中</li> <li>6：已回收</li> <li>7：任务执行中 (实例做备份、回档等操作)</li> <li>8：已下线</li> <li>9：实例扩容中</li> <li>10：实例迁移中</li> <li>11：只读</li> <li>12：重启中</li>
 * @method void setStatus(integer $Status) 设置实例状态。取值范围： <li>1：申请中</li> <li>2：运行中</li> <li>3：受限运行中 (主备切换中)</li> <li>4：已隔离</li> <li>5：回收中</li> <li>6：已回收</li> <li>7：任务执行中 (实例做备份、回档等操作)</li> <li>8：已下线</li> <li>9：实例扩容中</li> <li>10：实例迁移中</li> <li>11：只读</li> <li>12：重启中</li>
 * @method string getVip() 获取实例访问IP
 * @method void setVip(string $Vip) 设置实例访问IP
 * @method integer getVport() 获取实例访问端口
 * @method void setVport(integer $Vport) 设置实例访问端口
 * @method string getCreateTime() 获取实例创建时间
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间
 * @method string getUpdateTime() 获取实例更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置实例更新时间
 * @method string getStartTime() 获取实例计费开始时间
 * @method void setStartTime(string $StartTime) 设置实例计费开始时间
 * @method string getEndTime() 获取实例计费结束时间
 * @method void setEndTime(string $EndTime) 设置实例计费结束时间
 * @method string getIsolateTime() 获取实例隔离时间
 * @method void setIsolateTime(string $IsolateTime) 设置实例隔离时间
 * @method integer getMemory() 获取实例内存大小，单位G
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位G
 * @method integer getUsedStorage() 获取实例已经使用存储空间大小，单位G
 * @method void setUsedStorage(integer $UsedStorage) 设置实例已经使用存储空间大小，单位G
 * @method integer getStorage() 获取实例存储空间大小，单位G
 * @method void setStorage(integer $Storage) 设置实例存储空间大小，单位G
 * @method string getVersionName() 获取实例版本
 * @method void setVersionName(string $VersionName) 设置实例版本
 * @method integer getRenewFlag() 获取实例续费标记，0-正常续费，1-自动续费，2-到期不续费
 * @method void setRenewFlag(integer $RenewFlag) 设置实例续费标记，0-正常续费，1-自动续费，2-到期不续费
 * @method integer getModel() 获取实例高可用， 1-双机高可用，2-单机，3-跨可用区，4-集群跨可用区，5-集群，9-自研机房
 * @method void setModel(integer $Model) 设置实例高可用， 1-双机高可用，2-单机，3-跨可用区，4-集群跨可用区，5-集群，9-自研机房
 * @method string getRegion() 获取实例所在地域名称，如 ap-guangzhou
 * @method void setRegion(string $Region) 设置实例所在地域名称，如 ap-guangzhou
 * @method string getZone() 获取实例所在可用区名称，如 ap-guangzhou-1
 * @method void setZone(string $Zone) 设置实例所在可用区名称，如 ap-guangzhou-1
 * @method string getBackupTime() 获取备份时间点
 * @method void setBackupTime(string $BackupTime) 设置备份时间点
 * @method integer getPayMode() 获取实例付费模式， 0-按量计费，1-包年包月
 * @method void setPayMode(integer $PayMode) 设置实例付费模式， 0-按量计费，1-包年包月
 * @method string getUid() 获取实例唯一UID
 * @method void setUid(string $Uid) 设置实例唯一UID
 * @method integer getCpu() 获取实例cpu核心数
 * @method void setCpu(integer $Cpu) 设置实例cpu核心数
 * @method string getVersion() 获取实例版本代号
 * @method void setVersion(string $Version) 设置实例版本代号
 * @method string getType() 获取物理机代号
 * @method void setType(string $Type) 设置物理机代号
 * @method integer getPid() 获取计费ID
 * @method void setPid(integer $Pid) 设置计费ID
 * @method string getUniqVpcId() 获取实例所属VPC的唯一字符串ID，格式如：vpc-xxx，基础网络时为空字符串
 * @method void setUniqVpcId(string $UniqVpcId) 设置实例所属VPC的唯一字符串ID，格式如：vpc-xxx，基础网络时为空字符串
 * @method string getUniqSubnetId() 获取实例所属子网的唯一字符串ID，格式如： subnet-xxx，基础网络时为空字符串
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置实例所属子网的唯一字符串ID，格式如： subnet-xxx，基础网络时为空字符串
 * @method string getIsolateOperator() 获取实例隔离操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateOperator(string $IsolateOperator) 设置实例隔离操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubFlag() 获取发布订阅标识，SUB-订阅实例，PUB-发布实例，空值-没有发布订阅的普通实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubFlag(string $SubFlag) 设置发布订阅标识，SUB-订阅实例，PUB-发布实例，空值-没有发布订阅的普通实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getROFlag() 获取只读标识，RO-只读实例，MASTER-有RO实例的主实例，空值-没有只读组的非RO实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setROFlag(string $ROFlag) 设置只读标识，RO-只读实例，MASTER-有RO实例的主实例，空值-没有只读组的非RO实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHAFlag() 获取容灾类型，MIRROR-镜像，ALWAYSON-AlwaysOn, SINGLE-单例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHAFlag(string $HAFlag) 设置容灾类型，MIRROR-镜像，ALWAYSON-AlwaysOn, SINGLE-单例
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceTags() 获取实例绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTags(array $ResourceTags) 设置实例绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var integer 实例所在项目ID
     */
    public $ProjectId;

    /**
     * @var integer 实例所在地域ID
     */
    public $RegionId;

    /**
     * @var integer 实例所在可用区ID
     */
    public $ZoneId;

    /**
     * @var integer 实例所在私有网络ID，基础网络时为 0
     */
    public $VpcId;

    /**
     * @var integer 实例所在私有网络子网ID，基础网络时为 0
     */
    public $SubnetId;

    /**
     * @var integer 实例状态。取值范围： <li>1：申请中</li> <li>2：运行中</li> <li>3：受限运行中 (主备切换中)</li> <li>4：已隔离</li> <li>5：回收中</li> <li>6：已回收</li> <li>7：任务执行中 (实例做备份、回档等操作)</li> <li>8：已下线</li> <li>9：实例扩容中</li> <li>10：实例迁移中</li> <li>11：只读</li> <li>12：重启中</li>
     */
    public $Status;

    /**
     * @var string 实例访问IP
     */
    public $Vip;

    /**
     * @var integer 实例访问端口
     */
    public $Vport;

    /**
     * @var string 实例创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例更新时间
     */
    public $UpdateTime;

    /**
     * @var string 实例计费开始时间
     */
    public $StartTime;

    /**
     * @var string 实例计费结束时间
     */
    public $EndTime;

    /**
     * @var string 实例隔离时间
     */
    public $IsolateTime;

    /**
     * @var integer 实例内存大小，单位G
     */
    public $Memory;

    /**
     * @var integer 实例已经使用存储空间大小，单位G
     */
    public $UsedStorage;

    /**
     * @var integer 实例存储空间大小，单位G
     */
    public $Storage;

    /**
     * @var string 实例版本
     */
    public $VersionName;

    /**
     * @var integer 实例续费标记，0-正常续费，1-自动续费，2-到期不续费
     */
    public $RenewFlag;

    /**
     * @var integer 实例高可用， 1-双机高可用，2-单机，3-跨可用区，4-集群跨可用区，5-集群，9-自研机房
     */
    public $Model;

    /**
     * @var string 实例所在地域名称，如 ap-guangzhou
     */
    public $Region;

    /**
     * @var string 实例所在可用区名称，如 ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var string 备份时间点
     */
    public $BackupTime;

    /**
     * @var integer 实例付费模式， 0-按量计费，1-包年包月
     */
    public $PayMode;

    /**
     * @var string 实例唯一UID
     */
    public $Uid;

    /**
     * @var integer 实例cpu核心数
     */
    public $Cpu;

    /**
     * @var string 实例版本代号
     */
    public $Version;

    /**
     * @var string 物理机代号
     */
    public $Type;

    /**
     * @var integer 计费ID
     */
    public $Pid;

    /**
     * @var string 实例所属VPC的唯一字符串ID，格式如：vpc-xxx，基础网络时为空字符串
     */
    public $UniqVpcId;

    /**
     * @var string 实例所属子网的唯一字符串ID，格式如： subnet-xxx，基础网络时为空字符串
     */
    public $UniqSubnetId;

    /**
     * @var string 实例隔离操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateOperator;

    /**
     * @var string 发布订阅标识，SUB-订阅实例，PUB-发布实例，空值-没有发布订阅的普通实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubFlag;

    /**
     * @var string 只读标识，RO-只读实例，MASTER-有RO实例的主实例，空值-没有只读组的非RO实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ROFlag;

    /**
     * @var string 容灾类型，MIRROR-镜像，ALWAYSON-AlwaysOn, SINGLE-单例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HAFlag;

    /**
     * @var array 实例绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTags;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Name 实例名称
     * @param integer $ProjectId 实例所在项目ID
     * @param integer $RegionId 实例所在地域ID
     * @param integer $ZoneId 实例所在可用区ID
     * @param integer $VpcId 实例所在私有网络ID，基础网络时为 0
     * @param integer $SubnetId 实例所在私有网络子网ID，基础网络时为 0
     * @param integer $Status 实例状态。取值范围： <li>1：申请中</li> <li>2：运行中</li> <li>3：受限运行中 (主备切换中)</li> <li>4：已隔离</li> <li>5：回收中</li> <li>6：已回收</li> <li>7：任务执行中 (实例做备份、回档等操作)</li> <li>8：已下线</li> <li>9：实例扩容中</li> <li>10：实例迁移中</li> <li>11：只读</li> <li>12：重启中</li>
     * @param string $Vip 实例访问IP
     * @param integer $Vport 实例访问端口
     * @param string $CreateTime 实例创建时间
     * @param string $UpdateTime 实例更新时间
     * @param string $StartTime 实例计费开始时间
     * @param string $EndTime 实例计费结束时间
     * @param string $IsolateTime 实例隔离时间
     * @param integer $Memory 实例内存大小，单位G
     * @param integer $UsedStorage 实例已经使用存储空间大小，单位G
     * @param integer $Storage 实例存储空间大小，单位G
     * @param string $VersionName 实例版本
     * @param integer $RenewFlag 实例续费标记，0-正常续费，1-自动续费，2-到期不续费
     * @param integer $Model 实例高可用， 1-双机高可用，2-单机，3-跨可用区，4-集群跨可用区，5-集群，9-自研机房
     * @param string $Region 实例所在地域名称，如 ap-guangzhou
     * @param string $Zone 实例所在可用区名称，如 ap-guangzhou-1
     * @param string $BackupTime 备份时间点
     * @param integer $PayMode 实例付费模式， 0-按量计费，1-包年包月
     * @param string $Uid 实例唯一UID
     * @param integer $Cpu 实例cpu核心数
     * @param string $Version 实例版本代号
     * @param string $Type 物理机代号
     * @param integer $Pid 计费ID
     * @param string $UniqVpcId 实例所属VPC的唯一字符串ID，格式如：vpc-xxx，基础网络时为空字符串
     * @param string $UniqSubnetId 实例所属子网的唯一字符串ID，格式如： subnet-xxx，基础网络时为空字符串
     * @param string $IsolateOperator 实例隔离操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubFlag 发布订阅标识，SUB-订阅实例，PUB-发布实例，空值-没有发布订阅的普通实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ROFlag 只读标识，RO-只读实例，MASTER-有RO实例的主实例，空值-没有只读组的非RO实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HAFlag 容灾类型，MIRROR-镜像，ALWAYSON-AlwaysOn, SINGLE-单例
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceTags 实例绑定的标签列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("IsolateOperator",$param) and $param["IsolateOperator"] !== null) {
            $this->IsolateOperator = $param["IsolateOperator"];
        }

        if (array_key_exists("SubFlag",$param) and $param["SubFlag"] !== null) {
            $this->SubFlag = $param["SubFlag"];
        }

        if (array_key_exists("ROFlag",$param) and $param["ROFlag"] !== null) {
            $this->ROFlag = $param["ROFlag"];
        }

        if (array_key_exists("HAFlag",$param) and $param["HAFlag"] !== null) {
            $this->HAFlag = $param["HAFlag"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
