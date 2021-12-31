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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述云数据库实例的详细信息。
 *
 * @method string getInstanceId() 获取实例 ID，唯一标识一个 TDSQL 实例
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，唯一标识一个 TDSQL 实例
 * @method string getInstanceName() 获取实例名称，用户可修改
 * @method void setInstanceName(string $InstanceName) 设置实例名称，用户可修改
 * @method integer getAppId() 获取实例所属应用 ID
 * @method void setAppId(integer $AppId) 设置实例所属应用 ID
 * @method integer getProjectId() 获取实例所属项目 ID
 * @method void setProjectId(integer $ProjectId) 设置实例所属项目 ID
 * @method string getRegion() 获取实例所在地域名称，如 ap-shanghai
 * @method void setRegion(string $Region) 设置实例所在地域名称，如 ap-shanghai
 * @method string getZone() 获取实例所在可用区名称，如 ap-shanghai-1
 * @method void setZone(string $Zone) 设置实例所在可用区名称，如 ap-shanghai-1
 * @method integer getVpcId() 获取私有网络 ID，基础网络时为 0
 * @method void setVpcId(integer $VpcId) 设置私有网络 ID，基础网络时为 0
 * @method integer getSubnetId() 获取子网 ID，基础网络时为 0
 * @method void setSubnetId(integer $SubnetId) 设置子网 ID，基础网络时为 0
 * @method integer getStatus() 获取实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中
 * @method void setStatus(integer $Status) 设置实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中
 * @method string getVip() 获取内网 IP 地址
 * @method void setVip(string $Vip) 设置内网 IP 地址
 * @method integer getVport() 获取内网端口
 * @method void setVport(integer $Vport) 设置内网端口
 * @method string getWanDomain() 获取外网访问的域名，公网可解析
 * @method void setWanDomain(string $WanDomain) 设置外网访问的域名，公网可解析
 * @method string getWanVip() 获取外网 IP 地址，公网可访问
 * @method void setWanVip(string $WanVip) 设置外网 IP 地址，公网可访问
 * @method integer getWanPort() 获取外网端口
 * @method void setWanPort(integer $WanPort) 设置外网端口
 * @method string getCreateTime() 获取实例创建时间，格式为 2006-01-02 15:04:05
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间，格式为 2006-01-02 15:04:05
 * @method string getUpdateTime() 获取实例最后更新时间，格式为 2006-01-02 15:04:05
 * @method void setUpdateTime(string $UpdateTime) 设置实例最后更新时间，格式为 2006-01-02 15:04:05
 * @method integer getAutoRenewFlag() 获取自动续费标志：0 否，1 是
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志：0 否，1 是
 * @method string getPeriodEndTime() 获取实例到期时间，格式为 2006-01-02 15:04:05
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置实例到期时间，格式为 2006-01-02 15:04:05
 * @method string getUin() 获取实例所属账号
 * @method void setUin(string $Uin) 设置实例所属账号
 * @method string getTdsqlVersion() 获取TDSQL 版本信息
 * @method void setTdsqlVersion(string $TdsqlVersion) 设置TDSQL 版本信息
 * @method integer getMemory() 获取实例内存大小，单位 GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位 GB
 * @method integer getStorage() 获取实例存储大小，单位 GB
 * @method void setStorage(integer $Storage) 设置实例存储大小，单位 GB
 * @method string getUniqueVpcId() 获取字符串型的私有网络ID
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置字符串型的私有网络ID
 * @method string getUniqueSubnetId() 获取字符串型的私有网络子网ID
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置字符串型的私有网络子网ID
 * @method string getOriginSerialId() 获取原始实例ID（过时字段，请勿依赖该值）
 * @method void setOriginSerialId(string $OriginSerialId) 设置原始实例ID（过时字段，请勿依赖该值）
 * @method integer getNodeCount() 获取节点数，2为一主一从，3为一主二从
 * @method void setNodeCount(integer $NodeCount) 设置节点数，2为一主一从，3为一主二从
 * @method integer getIsTmp() 获取是否临时实例，0为否，非0为是
 * @method void setIsTmp(integer $IsTmp) 设置是否临时实例，0为否，非0为是
 * @method string getExclusterId() 获取独享集群ID，为空表示为普通实例
 * @method void setExclusterId(string $ExclusterId) 设置独享集群ID，为空表示为普通实例
 * @method integer getId() 获取数字实例ID（过时字段，请勿依赖该值）
 * @method void setId(integer $Id) 设置数字实例ID（过时字段，请勿依赖该值）
 * @method integer getPid() 获取产品类型 ID
 * @method void setPid(integer $Pid) 设置产品类型 ID
 * @method integer getQps() 获取最大 Qps 值
 * @method void setQps(integer $Qps) 设置最大 Qps 值
 * @method string getPaymode() 获取付费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymode(string $Paymode) 设置付费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLocker() 获取实例处于异步任务时的异步任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocker(integer $Locker) 设置实例处于异步任务时的异步任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取实例目前运行状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置实例目前运行状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWanStatus() 获取外网状态，0-未开通；1-已开通；2-关闭；3-开通中
 * @method void setWanStatus(integer $WanStatus) 设置外网状态，0-未开通；1-已开通；2-关闭；3-开通中
 * @method integer getIsAuditSupported() 获取该实例是否支持审计。1-支持；0-不支持
 * @method void setIsAuditSupported(integer $IsAuditSupported) 设置该实例是否支持审计。1-支持；0-不支持
 * @method string getMachine() 获取机器型号
 * @method void setMachine(string $Machine) 设置机器型号
 * @method integer getIsEncryptSupported() 获取是否支持数据加密。1-支持；0-不支持
 * @method void setIsEncryptSupported(integer $IsEncryptSupported) 设置是否支持数据加密。1-支持；0-不支持
 * @method integer getCpu() 获取实例CPU核数
 * @method void setCpu(integer $Cpu) 设置实例CPU核数
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
 * @method string getDbEngine() 获取数据库引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbEngine(string $DbEngine) 设置数据库引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbVersion() 获取数据库版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
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
class DBInstance extends AbstractModel
{
    /**
     * @var string 实例 ID，唯一标识一个 TDSQL 实例
     */
    public $InstanceId;

    /**
     * @var string 实例名称，用户可修改
     */
    public $InstanceName;

    /**
     * @var integer 实例所属应用 ID
     */
    public $AppId;

    /**
     * @var integer 实例所属项目 ID
     */
    public $ProjectId;

    /**
     * @var string 实例所在地域名称，如 ap-shanghai
     */
    public $Region;

    /**
     * @var string 实例所在可用区名称，如 ap-shanghai-1
     */
    public $Zone;

    /**
     * @var integer 私有网络 ID，基础网络时为 0
     */
    public $VpcId;

    /**
     * @var integer 子网 ID，基础网络时为 0
     */
    public $SubnetId;

    /**
     * @var integer 实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中
     */
    public $Status;

    /**
     * @var string 内网 IP 地址
     */
    public $Vip;

    /**
     * @var integer 内网端口
     */
    public $Vport;

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
     * @var string 实例创建时间，格式为 2006-01-02 15:04:05
     */
    public $CreateTime;

    /**
     * @var string 实例最后更新时间，格式为 2006-01-02 15:04:05
     */
    public $UpdateTime;

    /**
     * @var integer 自动续费标志：0 否，1 是
     */
    public $AutoRenewFlag;

    /**
     * @var string 实例到期时间，格式为 2006-01-02 15:04:05
     */
    public $PeriodEndTime;

    /**
     * @var string 实例所属账号
     */
    public $Uin;

    /**
     * @var string TDSQL 版本信息
     */
    public $TdsqlVersion;

    /**
     * @var integer 实例内存大小，单位 GB
     */
    public $Memory;

    /**
     * @var integer 实例存储大小，单位 GB
     */
    public $Storage;

    /**
     * @var string 字符串型的私有网络ID
     */
    public $UniqueVpcId;

    /**
     * @var string 字符串型的私有网络子网ID
     */
    public $UniqueSubnetId;

    /**
     * @var string 原始实例ID（过时字段，请勿依赖该值）
     */
    public $OriginSerialId;

    /**
     * @var integer 节点数，2为一主一从，3为一主二从
     */
    public $NodeCount;

    /**
     * @var integer 是否临时实例，0为否，非0为是
     */
    public $IsTmp;

    /**
     * @var string 独享集群ID，为空表示为普通实例
     */
    public $ExclusterId;

    /**
     * @var integer 数字实例ID（过时字段，请勿依赖该值）
     */
    public $Id;

    /**
     * @var integer 产品类型 ID
     */
    public $Pid;

    /**
     * @var integer 最大 Qps 值
     */
    public $Qps;

    /**
     * @var string 付费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Paymode;

    /**
     * @var integer 实例处于异步任务时的异步任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Locker;

    /**
     * @var string 实例目前运行状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var integer 外网状态，0-未开通；1-已开通；2-关闭；3-开通中
     */
    public $WanStatus;

    /**
     * @var integer 该实例是否支持审计。1-支持；0-不支持
     */
    public $IsAuditSupported;

    /**
     * @var string 机器型号
     */
    public $Machine;

    /**
     * @var integer 是否支持数据加密。1-支持；0-不支持
     */
    public $IsEncryptSupported;

    /**
     * @var integer 实例CPU核数
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
     * @var string 数据库引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbEngine;

    /**
     * @var string 数据库版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbVersion;

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
     * @param string $InstanceId 实例 ID，唯一标识一个 TDSQL 实例
     * @param string $InstanceName 实例名称，用户可修改
     * @param integer $AppId 实例所属应用 ID
     * @param integer $ProjectId 实例所属项目 ID
     * @param string $Region 实例所在地域名称，如 ap-shanghai
     * @param string $Zone 实例所在可用区名称，如 ap-shanghai-1
     * @param integer $VpcId 私有网络 ID，基础网络时为 0
     * @param integer $SubnetId 子网 ID，基础网络时为 0
     * @param integer $Status 实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中
     * @param string $Vip 内网 IP 地址
     * @param integer $Vport 内网端口
     * @param string $WanDomain 外网访问的域名，公网可解析
     * @param string $WanVip 外网 IP 地址，公网可访问
     * @param integer $WanPort 外网端口
     * @param string $CreateTime 实例创建时间，格式为 2006-01-02 15:04:05
     * @param string $UpdateTime 实例最后更新时间，格式为 2006-01-02 15:04:05
     * @param integer $AutoRenewFlag 自动续费标志：0 否，1 是
     * @param string $PeriodEndTime 实例到期时间，格式为 2006-01-02 15:04:05
     * @param string $Uin 实例所属账号
     * @param string $TdsqlVersion TDSQL 版本信息
     * @param integer $Memory 实例内存大小，单位 GB
     * @param integer $Storage 实例存储大小，单位 GB
     * @param string $UniqueVpcId 字符串型的私有网络ID
     * @param string $UniqueSubnetId 字符串型的私有网络子网ID
     * @param string $OriginSerialId 原始实例ID（过时字段，请勿依赖该值）
     * @param integer $NodeCount 节点数，2为一主一从，3为一主二从
     * @param integer $IsTmp 是否临时实例，0为否，非0为是
     * @param string $ExclusterId 独享集群ID，为空表示为普通实例
     * @param integer $Id 数字实例ID（过时字段，请勿依赖该值）
     * @param integer $Pid 产品类型 ID
     * @param integer $Qps 最大 Qps 值
     * @param string $Paymode 付费模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Locker 实例处于异步任务时的异步任务流程ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 实例目前运行状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WanStatus 外网状态，0-未开通；1-已开通；2-关闭；3-开通中
     * @param integer $IsAuditSupported 该实例是否支持审计。1-支持；0-不支持
     * @param string $Machine 机器型号
     * @param integer $IsEncryptSupported 是否支持数据加密。1-支持；0-不支持
     * @param integer $Cpu 实例CPU核数
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
     * @param string $DbEngine 数据库引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbVersion 数据库版本
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TdsqlVersion",$param) and $param["TdsqlVersion"] !== null) {
            $this->TdsqlVersion = $param["TdsqlVersion"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("OriginSerialId",$param) and $param["OriginSerialId"] !== null) {
            $this->OriginSerialId = $param["OriginSerialId"];
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("IsAuditSupported",$param) and $param["IsAuditSupported"] !== null) {
            $this->IsAuditSupported = $param["IsAuditSupported"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("IsEncryptSupported",$param) and $param["IsEncryptSupported"] !== null) {
            $this->IsEncryptSupported = $param["IsEncryptSupported"];
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

        if (array_key_exists("DbEngine",$param) and $param["DbEngine"] !== null) {
            $this->DbEngine = $param["DbEngine"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
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
