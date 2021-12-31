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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了实例信息。
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getBundleId() 获取套餐 ID。
 * @method void setBundleId(string $BundleId) 设置套餐 ID。
 * @method string getBlueprintId() 获取镜像 ID。
 * @method void setBlueprintId(string $BlueprintId) 设置镜像 ID。
 * @method integer getCPU() 获取实例的 CPU 核数，单位：核。
 * @method void setCPU(integer $CPU) 设置实例的 CPU 核数，单位：核。
 * @method integer getMemory() 获取实例内存容量，单位：GB 。
 * @method void setMemory(integer $Memory) 设置实例内存容量，单位：GB 。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getInstanceChargeType() 获取实例计费模式。取值范围： 
PREPAID：表示预付费，即包年包月。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费模式。取值范围： 
PREPAID：表示预付费，即包年包月。
 * @method SystemDisk getSystemDisk() 获取实例系统盘信息。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘信息。
 * @method array getPrivateAddresses() 获取实例主网卡的内网 IP。 
注意：此字段可能返回 空，表示取不到有效值。
 * @method void setPrivateAddresses(array $PrivateAddresses) 设置实例主网卡的内网 IP。 
注意：此字段可能返回 空，表示取不到有效值。
 * @method array getPublicAddresses() 获取实例主网卡的公网 IP。 
注意：此字段可能返回 空，表示取不到有效值。
 * @method void setPublicAddresses(array $PublicAddresses) 设置实例主网卡的公网 IP。 
注意：此字段可能返回 空，表示取不到有效值。
 * @method InternetAccessible getInternetAccessible() 获取实例带宽信息。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置实例带宽信息。
 * @method string getRenewFlag() 获取自动续费标识。取值范围： 
NOTIFY_AND_MANUAL_RENEW：表示通知即将过期，但不自动续费  
NOTIFY_AND_AUTO_RENEW：表示通知即将过期，而且自动续费 。
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围： 
NOTIFY_AND_MANUAL_RENEW：表示通知即将过期，但不自动续费  
NOTIFY_AND_AUTO_RENEW：表示通知即将过期，而且自动续费 。
 * @method LoginSettings getLoginSettings() 获取实例登录设置。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置。
 * @method string getInstanceState() 获取实例状态。取值范围： 
<li>PENDING：表示创建中</li><li>LAUNCH_FAILED：表示创建失败</li><li>RUNNING：表示运行中</li><li>STOPPED：表示关机</li><li>STARTING：表示开机中</li><li>STOPPING：表示关机中</li><li>REBOOTING：表示重启中</li><li>SHUTDOWN：表示停止待销毁</li><li>TERMINATING：表示销毁中</li>
 * @method void setInstanceState(string $InstanceState) 设置实例状态。取值范围： 
<li>PENDING：表示创建中</li><li>LAUNCH_FAILED：表示创建失败</li><li>RUNNING：表示运行中</li><li>STOPPED：表示关机</li><li>STARTING：表示开机中</li><li>STOPPING：表示关机中</li><li>REBOOTING：表示重启中</li><li>SHUTDOWN：表示停止待销毁</li><li>TERMINATING：表示销毁中</li>
 * @method string getUuid() 获取实例全局唯一 ID。
 * @method void setUuid(string $Uuid) 设置实例全局唯一 ID。
 * @method string getLatestOperation() 获取实例的最新操作。例：StopInstances、ResetInstance。注意：此字段可能返回 空值，表示取不到有效值。
 * @method void setLatestOperation(string $LatestOperation) 设置实例的最新操作。例：StopInstances、ResetInstance。注意：此字段可能返回 空值，表示取不到有效值。
 * @method string getLatestOperationState() 获取实例的最新操作状态。取值范围： 
SUCCESS：表示操作成功 
OPERATING：表示操作执行中 
FAILED：表示操作失败 
注意：此字段可能返回 空值，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置实例的最新操作状态。取值范围： 
SUCCESS：表示操作成功 
OPERATING：表示操作执行中 
FAILED：表示操作失败 
注意：此字段可能返回 空值，表示取不到有效值。
 * @method string getLatestOperationRequestId() 获取实例最新操作的唯一请求 ID。 
注意：此字段可能返回 空值，表示取不到有效值。
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) 设置实例最新操作的唯一请求 ID。 
注意：此字段可能返回 空值，表示取不到有效值。
 * @method string getIsolatedTime() 获取隔离时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置隔离时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredTime() 获取到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlatformType() 获取操作系统平台类型，如 LINUX_UNIX、WINDOWS。
 * @method void setPlatformType(string $PlatformType) 设置操作系统平台类型，如 LINUX_UNIX、WINDOWS。
 * @method string getPlatform() 获取操作系统平台。
 * @method void setPlatform(string $Platform) 设置操作系统平台。
 * @method string getOsName() 获取操作系统名称。
 * @method void setOsName(string $OsName) 设置操作系统名称。
 */
class Instance extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 套餐 ID。
     */
    public $BundleId;

    /**
     * @var string 镜像 ID。
     */
    public $BlueprintId;

    /**
     * @var integer 实例的 CPU 核数，单位：核。
     */
    public $CPU;

    /**
     * @var integer 实例内存容量，单位：GB 。
     */
    public $Memory;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例计费模式。取值范围： 
PREPAID：表示预付费，即包年包月。
     */
    public $InstanceChargeType;

    /**
     * @var SystemDisk 实例系统盘信息。
     */
    public $SystemDisk;

    /**
     * @var array 实例主网卡的内网 IP。 
注意：此字段可能返回 空，表示取不到有效值。
     */
    public $PrivateAddresses;

    /**
     * @var array 实例主网卡的公网 IP。 
注意：此字段可能返回 空，表示取不到有效值。
     */
    public $PublicAddresses;

    /**
     * @var InternetAccessible 实例带宽信息。
     */
    public $InternetAccessible;

    /**
     * @var string 自动续费标识。取值范围： 
NOTIFY_AND_MANUAL_RENEW：表示通知即将过期，但不自动续费  
NOTIFY_AND_AUTO_RENEW：表示通知即将过期，而且自动续费 。
     */
    public $RenewFlag;

    /**
     * @var LoginSettings 实例登录设置。
     */
    public $LoginSettings;

    /**
     * @var string 实例状态。取值范围： 
<li>PENDING：表示创建中</li><li>LAUNCH_FAILED：表示创建失败</li><li>RUNNING：表示运行中</li><li>STOPPED：表示关机</li><li>STARTING：表示开机中</li><li>STOPPING：表示关机中</li><li>REBOOTING：表示重启中</li><li>SHUTDOWN：表示停止待销毁</li><li>TERMINATING：表示销毁中</li>
     */
    public $InstanceState;

    /**
     * @var string 实例全局唯一 ID。
     */
    public $Uuid;

    /**
     * @var string 实例的最新操作。例：StopInstances、ResetInstance。注意：此字段可能返回 空值，表示取不到有效值。
     */
    public $LatestOperation;

    /**
     * @var string 实例的最新操作状态。取值范围： 
SUCCESS：表示操作成功 
OPERATING：表示操作执行中 
FAILED：表示操作失败 
注意：此字段可能返回 空值，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @var string 实例最新操作的唯一请求 ID。 
注意：此字段可能返回 空值，表示取不到有效值。
     */
    public $LatestOperationRequestId;

    /**
     * @var string 隔离时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ 。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var string 操作系统平台类型，如 LINUX_UNIX、WINDOWS。
     */
    public $PlatformType;

    /**
     * @var string 操作系统平台。
     */
    public $Platform;

    /**
     * @var string 操作系统名称。
     */
    public $OsName;

    /**
     * @param string $InstanceId 实例 ID。
     * @param string $BundleId 套餐 ID。
     * @param string $BlueprintId 镜像 ID。
     * @param integer $CPU 实例的 CPU 核数，单位：核。
     * @param integer $Memory 实例内存容量，单位：GB 。
     * @param string $InstanceName 实例名称。
     * @param string $InstanceChargeType 实例计费模式。取值范围： 
PREPAID：表示预付费，即包年包月。
     * @param SystemDisk $SystemDisk 实例系统盘信息。
     * @param array $PrivateAddresses 实例主网卡的内网 IP。 
注意：此字段可能返回 空，表示取不到有效值。
     * @param array $PublicAddresses 实例主网卡的公网 IP。 
注意：此字段可能返回 空，表示取不到有效值。
     * @param InternetAccessible $InternetAccessible 实例带宽信息。
     * @param string $RenewFlag 自动续费标识。取值范围： 
NOTIFY_AND_MANUAL_RENEW：表示通知即将过期，但不自动续费  
NOTIFY_AND_AUTO_RENEW：表示通知即将过期，而且自动续费 。
     * @param LoginSettings $LoginSettings 实例登录设置。
     * @param string $InstanceState 实例状态。取值范围： 
<li>PENDING：表示创建中</li><li>LAUNCH_FAILED：表示创建失败</li><li>RUNNING：表示运行中</li><li>STOPPED：表示关机</li><li>STARTING：表示开机中</li><li>STOPPING：表示关机中</li><li>REBOOTING：表示重启中</li><li>SHUTDOWN：表示停止待销毁</li><li>TERMINATING：表示销毁中</li>
     * @param string $Uuid 实例全局唯一 ID。
     * @param string $LatestOperation 实例的最新操作。例：StopInstances、ResetInstance。注意：此字段可能返回 空值，表示取不到有效值。
     * @param string $LatestOperationState 实例的最新操作状态。取值范围： 
SUCCESS：表示操作成功 
OPERATING：表示操作执行中 
FAILED：表示操作失败 
注意：此字段可能返回 空值，表示取不到有效值。
     * @param string $LatestOperationRequestId 实例最新操作的唯一请求 ID。 
注意：此字段可能返回 空值，表示取不到有效值。
     * @param string $IsolatedTime 隔离时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredTime 到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ 。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlatformType 操作系统平台类型，如 LINUX_UNIX、WINDOWS。
     * @param string $Platform 操作系统平台。
     * @param string $OsName 操作系统名称。
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

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("PrivateAddresses",$param) and $param["PrivateAddresses"] !== null) {
            $this->PrivateAddresses = $param["PrivateAddresses"];
        }

        if (array_key_exists("PublicAddresses",$param) and $param["PublicAddresses"] !== null) {
            $this->PublicAddresses = $param["PublicAddresses"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestId",$param) and $param["LatestOperationRequestId"] !== null) {
            $this->LatestOperationRequestId = $param["LatestOperationRequestId"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("PlatformType",$param) and $param["PlatformType"] !== null) {
            $this->PlatformType = $param["PlatformType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }
    }
}
