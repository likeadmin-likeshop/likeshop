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
 * 分布式数据库实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getAppId() 获取应用ID
 * @method void setAppId(integer $AppId) 设置应用ID
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getVpcId() 获取VPC数字ID
 * @method void setVpcId(integer $VpcId) 设置VPC数字ID
 * @method integer getSubnetId() 获取Subnet数字ID
 * @method void setSubnetId(integer $SubnetId) 设置Subnet数字ID
 * @method string getStatusDesc() 获取状态中文描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态中文描述
 * @method integer getStatus() 获取实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中
 * @method void setStatus(integer $Status) 设置实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中
 * @method string getVip() 获取内网IP
 * @method void setVip(string $Vip) 设置内网IP
 * @method integer getVport() 获取内网端口
 * @method void setVport(integer $Vport) 设置内网端口
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getAutoRenewFlag() 获取自动续费标志
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志
 * @method integer getMemory() 获取内存大小，单位 GB
 * @method void setMemory(integer $Memory) 设置内存大小，单位 GB
 * @method integer getStorage() 获取存储大小，单位 GB
 * @method void setStorage(integer $Storage) 设置存储大小，单位 GB
 * @method integer getShardCount() 获取分片个数
 * @method void setShardCount(integer $ShardCount) 设置分片个数
 * @method string getPeriodEndTime() 获取到期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间
 * @method string getIsolatedTimestamp() 获取隔离时间
 * @method void setIsolatedTimestamp(string $IsolatedTimestamp) 设置隔离时间
 * @method string getUin() 获取账号ID
 * @method void setUin(string $Uin) 设置账号ID
 * @method array getShardDetail() 获取分片详情
 * @method void setShardDetail(array $ShardDetail) 设置分片详情
 * @method integer getNodeCount() 获取节点数，2 为一主一从， 3 为一主二从
 * @method void setNodeCount(integer $NodeCount) 设置节点数，2 为一主一从， 3 为一主二从
 * @method integer getIsTmp() 获取临时实例标记，0 为非临时实例
 * @method void setIsTmp(integer $IsTmp) 设置临时实例标记，0 为非临时实例
 * @method string getExclusterId() 获取独享集群ID，为空表示非独享集群实例
 * @method void setExclusterId(string $ExclusterId) 设置独享集群ID，为空表示非独享集群实例
 * @method string getUniqueVpcId() 获取字符串型的私有网络ID
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置字符串型的私有网络ID
 * @method string getUniqueSubnetId() 获取字符串型的私有网络子网ID
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置字符串型的私有网络子网ID
 * @method integer getId() 获取数字实例ID（过时字段，请勿依赖该值）
 * @method void setId(integer $Id) 设置数字实例ID（过时字段，请勿依赖该值）
 * @method string getWanDomain() 获取外网访问的域名，公网可解析
 * @method void setWanDomain(string $WanDomain) 设置外网访问的域名，公网可解析
 * @method string getWanVip() 获取外网 IP 地址，公网可访问
 * @method void setWanVip(string $WanVip) 设置外网 IP 地址，公网可访问
 * @method integer getWanPort() 获取外网端口
 * @method void setWanPort(integer $WanPort) 设置外网端口
 * @method integer getPid() 获取产品类型 ID（过时字段，请勿依赖该值）
 * @method void setPid(integer $Pid) 设置产品类型 ID（过时字段，请勿依赖该值）
 * @method string getUpdateTime() 获取实例最后更新时间，格式为 2006-01-02 15:04:05
 * @method void setUpdateTime(string $UpdateTime) 设置实例最后更新时间，格式为 2006-01-02 15:04:05
 * @method string getDbEngine() 获取数据库引擎
 * @method void setDbEngine(string $DbEngine) 设置数据库引擎
 * @method string getDbVersion() 获取数据库引擎版本
 * @method void setDbVersion(string $DbVersion) 设置数据库引擎版本
 * @method string getPaymode() 获取付费模式
 * @method void setPaymode(string $Paymode) 设置付费模式
 * @method integer getLocker() 获取实例处于异步任务状态时，表示异步任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocker(integer $Locker) 设置实例处于异步任务状态时，表示异步任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWanStatus() 获取外网状态，0-未开通；1-已开通；2-关闭；3-开通中
 * @method void setWanStatus(integer $WanStatus) 设置外网状态，0-未开通；1-已开通；2-关闭；3-开通中
 * @method integer getIsAuditSupported() 获取该实例是否支持审计。1-支持；0-不支持
 * @method void setIsAuditSupported(integer $IsAuditSupported) 设置该实例是否支持审计。1-支持；0-不支持
 * @method integer getCpu() 获取Cpu核数
 * @method void setCpu(integer $Cpu) 设置Cpu核数
 * @method integer getIpv6Flag() 获取实例IPv6标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6Flag(integer $Ipv6Flag) 设置实例IPv6标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVipv6() 获取内网IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipv6(string $Vipv6) 设置内网IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanVipv6() 获取外网IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanVipv6(string $WanVipv6) 设置外网IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWanPortIpv6() 获取外网IPv6端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanPortIpv6(integer $WanPortIpv6) 设置外网IPv6端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWanStatusIpv6() 获取外网IPv6状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanStatusIpv6(integer $WanStatusIpv6) 设置外网IPv6状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDcnFlag() 获取DCN标志，0-无，1-主实例，2-灾备实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDcnFlag(integer $DcnFlag) 设置DCN标志，0-无，1-主实例，2-灾备实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDcnStatus() 获取DCN状态，0-无，1-创建中，2-同步中，3-已断开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDcnStatus(integer $DcnStatus) 设置DCN状态，0-无，1-创建中，2-同步中，3-已断开
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDcnDstNum() 获取DCN灾备实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDcnDstNum(integer $DcnDstNum) 设置DCN灾备实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceType() 获取1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(integer $InstanceType) 设置1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）
注意：此字段可能返回 null，表示取不到有效值。
 */
class DCDBInstanceInfo extends AbstractModel
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
     * @var integer 应用ID
     */
    public $AppId;

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
     * @var integer VPC数字ID
     */
    public $VpcId;

    /**
     * @var integer Subnet数字ID
     */
    public $SubnetId;

    /**
     * @var string 状态中文描述
     */
    public $StatusDesc;

    /**
     * @var integer 实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中
     */
    public $Status;

    /**
     * @var string 内网IP
     */
    public $Vip;

    /**
     * @var integer 内网端口
     */
    public $Vport;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 自动续费标志
     */
    public $AutoRenewFlag;

    /**
     * @var integer 内存大小，单位 GB
     */
    public $Memory;

    /**
     * @var integer 存储大小，单位 GB
     */
    public $Storage;

    /**
     * @var integer 分片个数
     */
    public $ShardCount;

    /**
     * @var string 到期时间
     */
    public $PeriodEndTime;

    /**
     * @var string 隔离时间
     */
    public $IsolatedTimestamp;

    /**
     * @var string 账号ID
     */
    public $Uin;

    /**
     * @var array 分片详情
     */
    public $ShardDetail;

    /**
     * @var integer 节点数，2 为一主一从， 3 为一主二从
     */
    public $NodeCount;

    /**
     * @var integer 临时实例标记，0 为非临时实例
     */
    public $IsTmp;

    /**
     * @var string 独享集群ID，为空表示非独享集群实例
     */
    public $ExclusterId;

    /**
     * @var string 字符串型的私有网络ID
     */
    public $UniqueVpcId;

    /**
     * @var string 字符串型的私有网络子网ID
     */
    public $UniqueSubnetId;

    /**
     * @var integer 数字实例ID（过时字段，请勿依赖该值）
     */
    public $Id;

    /**
     * @var string 外网访问的域名，公网可解析
     */
    public $WanDomain;

    /**
     * @var string 外网 IP 地址，公网可访问
     */
    public $WanVip;

    /**
     * @var integer 外网端口
     */
    public $WanPort;

    /**
     * @var integer 产品类型 ID（过时字段，请勿依赖该值）
     */
    public $Pid;

    /**
     * @var string 实例最后更新时间，格式为 2006-01-02 15:04:05
     */
    public $UpdateTime;

    /**
     * @var string 数据库引擎
     */
    public $DbEngine;

    /**
     * @var string 数据库引擎版本
     */
    public $DbVersion;

    /**
     * @var string 付费模式
     */
    public $Paymode;

    /**
     * @var integer 实例处于异步任务状态时，表示异步任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Locker;

    /**
     * @var integer 外网状态，0-未开通；1-已开通；2-关闭；3-开通中
     */
    public $WanStatus;

    /**
     * @var integer 该实例是否支持审计。1-支持；0-不支持
     */
    public $IsAuditSupported;

    /**
     * @var integer Cpu核数
     */
    public $Cpu;

    /**
     * @var integer 实例IPv6标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6Flag;

    /**
     * @var string 内网IPv6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vipv6;

    /**
     * @var string 外网IPv6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanVipv6;

    /**
     * @var integer 外网IPv6端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanPortIpv6;

    /**
     * @var integer 外网IPv6状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanStatusIpv6;

    /**
     * @var integer DCN标志，0-无，1-主实例，2-灾备实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DcnFlag;

    /**
     * @var integer DCN状态，0-无，1-创建中，2-同步中，3-已断开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DcnStatus;

    /**
     * @var integer DCN灾备实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DcnDstNum;

    /**
     * @var integer 1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $AppId 应用ID
     * @param integer $ProjectId 项目ID
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param integer $VpcId VPC数字ID
     * @param integer $SubnetId Subnet数字ID
     * @param string $StatusDesc 状态中文描述
     * @param integer $Status 实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中
     * @param string $Vip 内网IP
     * @param integer $Vport 内网端口
     * @param string $CreateTime 创建时间
     * @param integer $AutoRenewFlag 自动续费标志
     * @param integer $Memory 内存大小，单位 GB
     * @param integer $Storage 存储大小，单位 GB
     * @param integer $ShardCount 分片个数
     * @param string $PeriodEndTime 到期时间
     * @param string $IsolatedTimestamp 隔离时间
     * @param string $Uin 账号ID
     * @param array $ShardDetail 分片详情
     * @param integer $NodeCount 节点数，2 为一主一从， 3 为一主二从
     * @param integer $IsTmp 临时实例标记，0 为非临时实例
     * @param string $ExclusterId 独享集群ID，为空表示非独享集群实例
     * @param string $UniqueVpcId 字符串型的私有网络ID
     * @param string $UniqueSubnetId 字符串型的私有网络子网ID
     * @param integer $Id 数字实例ID（过时字段，请勿依赖该值）
     * @param string $WanDomain 外网访问的域名，公网可解析
     * @param string $WanVip 外网 IP 地址，公网可访问
     * @param integer $WanPort 外网端口
     * @param integer $Pid 产品类型 ID（过时字段，请勿依赖该值）
     * @param string $UpdateTime 实例最后更新时间，格式为 2006-01-02 15:04:05
     * @param string $DbEngine 数据库引擎
     * @param string $DbVersion 数据库引擎版本
     * @param string $Paymode 付费模式
     * @param integer $Locker 实例处于异步任务状态时，表示异步任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WanStatus 外网状态，0-未开通；1-已开通；2-关闭；3-开通中
     * @param integer $IsAuditSupported 该实例是否支持审计。1-支持；0-不支持
     * @param integer $Cpu Cpu核数
     * @param integer $Ipv6Flag 实例IPv6标志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vipv6 内网IPv6
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanVipv6 外网IPv6
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WanPortIpv6 外网IPv6端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WanStatusIpv6 外网IPv6状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DcnFlag DCN标志，0-无，1-主实例，2-灾备实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DcnStatus DCN状态，0-无，1-创建中，2-同步中，3-已断开
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DcnDstNum DCN灾备实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceType 1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
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

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("IsolatedTimestamp",$param) and $param["IsolatedTimestamp"] !== null) {
            $this->IsolatedTimestamp = $param["IsolatedTimestamp"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ShardDetail",$param) and $param["ShardDetail"] !== null) {
            $this->ShardDetail = [];
            foreach ($param["ShardDetail"] as $key => $value){
                $obj = new ShardInfo();
                $obj->deserialize($value);
                array_push($this->ShardDetail, $obj);
            }
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("IsTmp",$param) and $param["IsTmp"] !== null) {
            $this->IsTmp = $param["IsTmp"];
        }

        if (array_key_exists("ExclusterId",$param) and $param["ExclusterId"] !== null) {
            $this->ExclusterId = $param["ExclusterId"];
        }

        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanVip",$param) and $param["WanVip"] !== null) {
            $this->WanVip = $param["WanVip"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DbEngine",$param) and $param["DbEngine"] !== null) {
            $this->DbEngine = $param["DbEngine"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("IsAuditSupported",$param) and $param["IsAuditSupported"] !== null) {
            $this->IsAuditSupported = $param["IsAuditSupported"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("Vipv6",$param) and $param["Vipv6"] !== null) {
            $this->Vipv6 = $param["Vipv6"];
        }

        if (array_key_exists("WanVipv6",$param) and $param["WanVipv6"] !== null) {
            $this->WanVipv6 = $param["WanVipv6"];
        }

        if (array_key_exists("WanPortIpv6",$param) and $param["WanPortIpv6"] !== null) {
            $this->WanPortIpv6 = $param["WanPortIpv6"];
        }

        if (array_key_exists("WanStatusIpv6",$param) and $param["WanStatusIpv6"] !== null) {
            $this->WanStatusIpv6 = $param["WanStatusIpv6"];
        }

        if (array_key_exists("DcnFlag",$param) and $param["DcnFlag"] !== null) {
            $this->DcnFlag = $param["DcnFlag"];
        }

        if (array_key_exists("DcnStatus",$param) and $param["DcnStatus"] !== null) {
            $this->DcnStatus = $param["DcnStatus"];
        }

        if (array_key_exists("DcnDstNum",$param) and $param["DcnDstNum"] !== null) {
            $this->DcnDstNum = $param["DcnDstNum"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
