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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详情
 *
 * @method string getUin() 获取用户Uin
 * @method void setUin(string $Uin) 设置用户Uin
 * @method integer getAppId() 获取用户AppId
 * @method void setAppId(integer $AppId) 设置用户AppId
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getStatus() 获取实例状态
 * @method void setStatus(string $Status) 设置实例状态
 * @method string getStatusDesc() 获取实例状态中文描述
 * @method void setStatusDesc(string $StatusDesc) 设置实例状态中文描述
 * @method string getDbType() 获取数据库类型
 * @method void setDbType(string $DbType) 设置数据库类型
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method integer getCpu() 获取Cpu，单位：核
 * @method void setCpu(integer $Cpu) 设置Cpu，单位：核
 * @method integer getMemory() 获取内存，单位：GB
 * @method void setMemory(integer $Memory) 设置内存，单位：GB
 * @method integer getStorage() 获取存储量，单位：GB
 * @method void setStorage(integer $Storage) 设置存储量，单位：GB
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getInstanceRole() 获取实例当前角色
 * @method void setInstanceRole(string $InstanceRole) 设置实例当前角色
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getPeriodEndTime() 获取实例过期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置实例过期时间
 * @method integer getNetType() 获取网络类型
 * @method void setNetType(integer $NetType) 设置网络类型
 * @method string getVpcId() 获取VPC网络ID
 * @method void setVpcId(string $VpcId) 设置VPC网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getVip() 获取实例内网IP
 * @method void setVip(string $Vip) 设置实例内网IP
 * @method integer getVport() 获取实例内网端口
 * @method void setVport(integer $Vport) 设置实例内网端口
 * @method string getWanDomain() 获取实例外网域名
 * @method void setWanDomain(string $WanDomain) 设置实例外网域名
 * @method string getCharset() 获取字符集
 * @method void setCharset(string $Charset) 设置字符集
 * @method string getCynosVersion() 获取Cynos内核版本
 * @method void setCynosVersion(string $CynosVersion) 设置Cynos内核版本
 * @method integer getRenewFlag() 获取续费标志
 * @method void setRenewFlag(integer $RenewFlag) 设置续费标志
 */
class CynosdbInstanceDetail extends AbstractModel
{
    /**
     * @var string 用户Uin
     */
    public $Uin;

    /**
     * @var integer 用户AppId
     */
    public $AppId;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

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
     * @var string 实例状态
     */
    public $Status;

    /**
     * @var string 实例状态中文描述
     */
    public $StatusDesc;

    /**
     * @var string 数据库类型
     */
    public $DbType;

    /**
     * @var string 数据库版本
     */
    public $DbVersion;

    /**
     * @var integer Cpu，单位：核
     */
    public $Cpu;

    /**
     * @var integer 内存，单位：GB
     */
    public $Memory;

    /**
     * @var integer 存储量，单位：GB
     */
    public $Storage;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 实例当前角色
     */
    public $InstanceRole;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var string 实例过期时间
     */
    public $PeriodEndTime;

    /**
     * @var integer 网络类型
     */
    public $NetType;

    /**
     * @var string VPC网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 实例内网IP
     */
    public $Vip;

    /**
     * @var integer 实例内网端口
     */
    public $Vport;

    /**
     * @var string 实例外网域名
     */
    public $WanDomain;

    /**
     * @var string 字符集
     */
    public $Charset;

    /**
     * @var string Cynos内核版本
     */
    public $CynosVersion;

    /**
     * @var integer 续费标志
     */
    public $RenewFlag;

    /**
     * @param string $Uin 用户Uin
     * @param integer $AppId 用户AppId
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $ProjectId 项目ID
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param string $Status 实例状态
     * @param string $StatusDesc 实例状态中文描述
     * @param string $DbType 数据库类型
     * @param string $DbVersion 数据库版本
     * @param integer $Cpu Cpu，单位：核
     * @param integer $Memory 内存，单位：GB
     * @param integer $Storage 存储量，单位：GB
     * @param string $InstanceType 实例类型
     * @param string $InstanceRole 实例当前角色
     * @param string $UpdateTime 更新时间
     * @param string $CreateTime 创建时间
     * @param integer $PayMode 付费模式
     * @param string $PeriodEndTime 实例过期时间
     * @param integer $NetType 网络类型
     * @param string $VpcId VPC网络ID
     * @param string $SubnetId 子网ID
     * @param string $Vip 实例内网IP
     * @param integer $Vport 实例内网端口
     * @param string $WanDomain 实例外网域名
     * @param string $Charset 字符集
     * @param string $CynosVersion Cynos内核版本
     * @param integer $RenewFlag 续费标志
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
