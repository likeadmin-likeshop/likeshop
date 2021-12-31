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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询实例列表，返回实例的相关信息的对象。
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getRegion() 获取实例所属地域。
 * @method void setRegion(string $Region) 设置实例所属地域。
 * @method integer getHealthScore() 获取健康得分。
 * @method void setHealthScore(integer $HealthScore) 设置健康得分。
 * @method string getProduct() 获取所属产品。
 * @method void setProduct(string $Product) 设置所属产品。
 * @method integer getEventCount() 获取异常事件数量。
 * @method void setEventCount(integer $EventCount) 设置异常事件数量。
 * @method integer getInstanceType() 获取实例类型：1:MASTER；2:DR，3：RO，4:SDR。
 * @method void setInstanceType(integer $InstanceType) 设置实例类型：1:MASTER；2:DR，3：RO，4:SDR。
 * @method integer getCpu() 获取核心数。
 * @method void setCpu(integer $Cpu) 设置核心数。
 * @method integer getMemory() 获取内存，单位MB。
 * @method void setMemory(integer $Memory) 设置内存，单位MB。
 * @method integer getVolume() 获取硬盘存储，单位GB。
 * @method void setVolume(integer $Volume) 设置硬盘存储，单位GB。
 * @method string getEngineVersion() 获取数据库版本。
 * @method void setEngineVersion(string $EngineVersion) 设置数据库版本。
 * @method string getVip() 获取内网地址。
 * @method void setVip(string $Vip) 设置内网地址。
 * @method integer getVport() 获取内网端口。
 * @method void setVport(integer $Vport) 设置内网端口。
 * @method string getSource() 获取接入来源。
 * @method void setSource(string $Source) 设置接入来源。
 * @method string getGroupId() 获取分组ID。
 * @method void setGroupId(string $GroupId) 设置分组ID。
 * @method string getGroupName() 获取分组组名。
 * @method void setGroupName(string $GroupName) 设置分组组名。
 * @method integer getStatus() 获取实例状态：0：发货中；1：运行正常；4：销毁中；5：隔离中。
 * @method void setStatus(integer $Status) 设置实例状态：0：发货中；1：运行正常；4：销毁中；5：隔离中。
 * @method string getUniqSubnetId() 获取子网统一ID。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网统一ID。
 * @method string getDeployMode() 获取cdb类型。
 * @method void setDeployMode(string $DeployMode) 设置cdb类型。
 * @method integer getInitFlag() 获取cdb实例初始化标志：0：未初始化；1：已初始化。
 * @method void setInitFlag(integer $InitFlag) 设置cdb实例初始化标志：0：未初始化；1：已初始化。
 * @method integer getTaskStatus() 获取任务状态。
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态。
 * @method string getUniqVpcId() 获取私有网络统一ID。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络统一ID。
 * @method InstanceConfs getInstanceConf() 获取实例巡检/概览的状态。
 * @method void setInstanceConf(InstanceConfs $InstanceConf) 设置实例巡检/概览的状态。
 * @method string getDeadlineTime() 获取资源到期时间。
 * @method void setDeadlineTime(string $DeadlineTime) 设置资源到期时间。
 * @method boolean getIsSupported() 获取是否是DBbrain支持的实例。
 * @method void setIsSupported(boolean $IsSupported) 设置是否是DBbrain支持的实例。
 * @method string getSecAuditStatus() 获取实例安全审计日志开启状态：ON： 安全审计开启；OFF： 未开启安全审计。
 * @method void setSecAuditStatus(string $SecAuditStatus) 设置实例安全审计日志开启状态：ON： 安全审计开启；OFF： 未开启安全审计。
 * @method string getAuditPolicyStatus() 获取实例审计日志开启状态，ALL_AUDIT： 开启全审计；RULE_AUDIT： 开启规则审计；UNBOUND： 未开启审计。
 * @method void setAuditPolicyStatus(string $AuditPolicyStatus) 设置实例审计日志开启状态，ALL_AUDIT： 开启全审计；RULE_AUDIT： 开启规则审计；UNBOUND： 未开启审计。
 * @method string getAuditRunningStatus() 获取实例审计日志运行状态：normal： 运行中； paused： 欠费暂停。
 * @method void setAuditRunningStatus(string $AuditRunningStatus) 设置实例审计日志运行状态：normal： 运行中； paused： 欠费暂停。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例所属地域。
     */
    public $Region;

    /**
     * @var integer 健康得分。
     */
    public $HealthScore;

    /**
     * @var string 所属产品。
     */
    public $Product;

    /**
     * @var integer 异常事件数量。
     */
    public $EventCount;

    /**
     * @var integer 实例类型：1:MASTER；2:DR，3：RO，4:SDR。
     */
    public $InstanceType;

    /**
     * @var integer 核心数。
     */
    public $Cpu;

    /**
     * @var integer 内存，单位MB。
     */
    public $Memory;

    /**
     * @var integer 硬盘存储，单位GB。
     */
    public $Volume;

    /**
     * @var string 数据库版本。
     */
    public $EngineVersion;

    /**
     * @var string 内网地址。
     */
    public $Vip;

    /**
     * @var integer 内网端口。
     */
    public $Vport;

    /**
     * @var string 接入来源。
     */
    public $Source;

    /**
     * @var string 分组ID。
     */
    public $GroupId;

    /**
     * @var string 分组组名。
     */
    public $GroupName;

    /**
     * @var integer 实例状态：0：发货中；1：运行正常；4：销毁中；5：隔离中。
     */
    public $Status;

    /**
     * @var string 子网统一ID。
     */
    public $UniqSubnetId;

    /**
     * @var string cdb类型。
     */
    public $DeployMode;

    /**
     * @var integer cdb实例初始化标志：0：未初始化；1：已初始化。
     */
    public $InitFlag;

    /**
     * @var integer 任务状态。
     */
    public $TaskStatus;

    /**
     * @var string 私有网络统一ID。
     */
    public $UniqVpcId;

    /**
     * @var InstanceConfs 实例巡检/概览的状态。
     */
    public $InstanceConf;

    /**
     * @var string 资源到期时间。
     */
    public $DeadlineTime;

    /**
     * @var boolean 是否是DBbrain支持的实例。
     */
    public $IsSupported;

    /**
     * @var string 实例安全审计日志开启状态：ON： 安全审计开启；OFF： 未开启安全审计。
     */
    public $SecAuditStatus;

    /**
     * @var string 实例审计日志开启状态，ALL_AUDIT： 开启全审计；RULE_AUDIT： 开启规则审计；UNBOUND： 未开启审计。
     */
    public $AuditPolicyStatus;

    /**
     * @var string 实例审计日志运行状态：normal： 运行中； paused： 欠费暂停。
     */
    public $AuditRunningStatus;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $InstanceName 实例名称。
     * @param string $Region 实例所属地域。
     * @param integer $HealthScore 健康得分。
     * @param string $Product 所属产品。
     * @param integer $EventCount 异常事件数量。
     * @param integer $InstanceType 实例类型：1:MASTER；2:DR，3：RO，4:SDR。
     * @param integer $Cpu 核心数。
     * @param integer $Memory 内存，单位MB。
     * @param integer $Volume 硬盘存储，单位GB。
     * @param string $EngineVersion 数据库版本。
     * @param string $Vip 内网地址。
     * @param integer $Vport 内网端口。
     * @param string $Source 接入来源。
     * @param string $GroupId 分组ID。
     * @param string $GroupName 分组组名。
     * @param integer $Status 实例状态：0：发货中；1：运行正常；4：销毁中；5：隔离中。
     * @param string $UniqSubnetId 子网统一ID。
     * @param string $DeployMode cdb类型。
     * @param integer $InitFlag cdb实例初始化标志：0：未初始化；1：已初始化。
     * @param integer $TaskStatus 任务状态。
     * @param string $UniqVpcId 私有网络统一ID。
     * @param InstanceConfs $InstanceConf 实例巡检/概览的状态。
     * @param string $DeadlineTime 资源到期时间。
     * @param boolean $IsSupported 是否是DBbrain支持的实例。
     * @param string $SecAuditStatus 实例安全审计日志开启状态：ON： 安全审计开启；OFF： 未开启安全审计。
     * @param string $AuditPolicyStatus 实例审计日志开启状态，ALL_AUDIT： 开启全审计；RULE_AUDIT： 开启规则审计；UNBOUND： 未开启审计。
     * @param string $AuditRunningStatus 实例审计日志运行状态：normal： 运行中； paused： 欠费暂停。
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("HealthScore",$param) and $param["HealthScore"] !== null) {
            $this->HealthScore = $param["HealthScore"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("InstanceConf",$param) and $param["InstanceConf"] !== null) {
            $this->InstanceConf = new InstanceConfs();
            $this->InstanceConf->deserialize($param["InstanceConf"]);
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("IsSupported",$param) and $param["IsSupported"] !== null) {
            $this->IsSupported = $param["IsSupported"];
        }

        if (array_key_exists("SecAuditStatus",$param) and $param["SecAuditStatus"] !== null) {
            $this->SecAuditStatus = $param["SecAuditStatus"];
        }

        if (array_key_exists("AuditPolicyStatus",$param) and $param["AuditPolicyStatus"] !== null) {
            $this->AuditPolicyStatus = $param["AuditPolicyStatus"];
        }

        if (array_key_exists("AuditRunningStatus",$param) and $param["AuditRunningStatus"] !== null) {
            $this->AuditRunningStatus = $param["AuditRunningStatus"];
        }
    }
}
