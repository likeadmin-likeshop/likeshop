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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例的信息
 *
 * @method Placement getPlacement() 获取实例所在的位置。
 * @method void setPlacement(Placement $Placement) 设置实例所在的位置。
 * @method string getInstanceId() 获取实例`ID`。
 * @method void setInstanceId(string $InstanceId) 设置实例`ID`。
 * @method string getInstanceType() 获取实例机型。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
 * @method integer getCPU() 获取实例的CPU核数，单位：核。
 * @method void setCPU(integer $CPU) 设置实例的CPU核数，单位：核。
 * @method integer getMemory() 获取实例内存容量，单位：`GB`。
 * @method void setMemory(integer $Memory) 设置实例内存容量，单位：`GB`。
 * @method string getRestrictState() 获取实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例<br><li>EXPIRED：表示过期的实例<br><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
 * @method void setRestrictState(string $RestrictState) 设置实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例<br><li>EXPIRED：表示过期的实例<br><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getInstanceChargeType() 获取实例计费模式。取值范围：<br><li>`PREPAID`：表示预付费，即包年包月<br><li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费<br><li>`CDHPAID`：`CDH`付费，即只对`CDH`计费，不对`CDH`上的实例计费。<br><li>`SPOTPAID`：表示竞价实例付费。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费模式。取值范围：<br><li>`PREPAID`：表示预付费，即包年包月<br><li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费<br><li>`CDHPAID`：`CDH`付费，即只对`CDH`计费，不对`CDH`上的实例计费。<br><li>`SPOTPAID`：表示竞价实例付费。
 * @method SystemDisk getSystemDisk() 获取实例系统盘信息。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘信息。
 * @method array getDataDisks() 获取实例数据盘信息。只包含随实例购买的数据盘。
 * @method void setDataDisks(array $DataDisks) 设置实例数据盘信息。只包含随实例购买的数据盘。
 * @method array getPrivateIpAddresses() 获取实例主网卡的内网`IP`列表。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置实例主网卡的内网`IP`列表。
 * @method array getPublicIpAddresses() 获取实例主网卡的公网`IP`列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置实例主网卡的公网`IP`列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternetAccessible getInternetAccessible() 获取实例带宽信息。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置实例带宽信息。
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取实例所属虚拟私有网络信息。
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置实例所属虚拟私有网络信息。
 * @method string getImageId() 获取生产实例所使用的镜像`ID`。
 * @method void setImageId(string $ImageId) 设置生产实例所使用的镜像`ID`。
 * @method string getRenewFlag() 获取自动续费标识。取值范围：<br><li>`NOTIFY_AND_MANUAL_RENEW`：表示通知即将过期，但不自动续费<br><li>`NOTIFY_AND_AUTO_RENEW`：表示通知即将过期，而且自动续费<br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`：表示不通知即将过期，也不自动续费。
<br><li>注意：后付费模式本项为null
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围：<br><li>`NOTIFY_AND_MANUAL_RENEW`：表示通知即将过期，但不自动续费<br><li>`NOTIFY_AND_AUTO_RENEW`：表示通知即将过期，而且自动续费<br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`：表示不通知即将过期，也不自动续费。
<br><li>注意：后付费模式本项为null
 * @method string getCreatedTime() 获取创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method string getExpiredTime() 获取到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。注意：后付费模式本项为null
 * @method void setExpiredTime(string $ExpiredTime) 设置到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。注意：后付费模式本项为null
 * @method string getOsName() 获取操作系统名称。
 * @method void setOsName(string $OsName) 设置操作系统名称。
 * @method array getSecurityGroupIds() 获取实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
 * @method LoginSettings getLoginSettings() 获取实例登录设置。目前只返回实例所关联的密钥。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置。目前只返回实例所关联的密钥。
 * @method string getInstanceState() 获取实例状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>RUNNING：表示运行中<br></li><li>STOPPED：表示关机<br></li><li>STARTING：表示开机中<br></li><li>STOPPING：表示关机中<br></li><li>REBOOTING：表示重启中<br></li><li>SHUTDOWN：表示停止待销毁<br></li><li>TERMINATING：表示销毁中。<br></li>
 * @method void setInstanceState(string $InstanceState) 设置实例状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>RUNNING：表示运行中<br></li><li>STOPPED：表示关机<br></li><li>STARTING：表示开机中<br></li><li>STOPPING：表示关机中<br></li><li>REBOOTING：表示重启中<br></li><li>SHUTDOWN：表示停止待销毁<br></li><li>TERMINATING：表示销毁中。<br></li>
 * @method array getTags() 获取实例关联的标签列表。
 * @method void setTags(array $Tags) 设置实例关联的标签列表。
 * @method string getStopChargingMode() 获取实例的关机计费模式。
取值范围：<br><li>KEEP_CHARGING：关机继续收费<br><li>STOP_CHARGING：关机停止收费<li>NOT_APPLICABLE：实例处于非关机状态或者不适用关机停止计费的条件<br>
 * @method void setStopChargingMode(string $StopChargingMode) 设置实例的关机计费模式。
取值范围：<br><li>KEEP_CHARGING：关机继续收费<br><li>STOP_CHARGING：关机停止收费<li>NOT_APPLICABLE：实例处于非关机状态或者不适用关机停止计费的条件<br>
 * @method string getUuid() 获取实例全局唯一ID
 * @method void setUuid(string $Uuid) 设置实例全局唯一ID
 * @method string getLatestOperation() 获取实例的最新操作。例：StopInstances、ResetInstance。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperation(string $LatestOperation) 设置实例的最新操作。例：StopInstances、ResetInstance。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationState() 获取实例的最新操作状态。取值范围：<br><li>SUCCESS：表示操作成功<br><li>OPERATING：表示操作执行中<br><li>FAILED：表示操作失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置实例的最新操作状态。取值范围：<br><li>SUCCESS：表示操作成功<br><li>OPERATING：表示操作执行中<br><li>FAILED：表示操作失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationRequestId() 获取实例最新操作的唯一请求 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) 设置实例最新操作的唯一请求 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisasterRecoverGroupId() 获取分散置放群组ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置分散置放群组ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIPv6Addresses() 获取实例的IPv6地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPv6Addresses(array $IPv6Addresses) 设置实例的IPv6地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCamRoleName() 获取CAM角色名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCamRoleName(string $CamRoleName) 设置CAM角色名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHpcClusterId() 获取高性能计算集群`ID`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHpcClusterId(string $HpcClusterId) 设置高性能计算集群`ID`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRdmaIpAddresses() 获取高性能计算集群`IP`列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRdmaIpAddresses(array $RdmaIpAddresses) 设置高性能计算集群`IP`列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Instance extends AbstractModel
{
    /**
     * @var Placement 实例所在的位置。
     */
    public $Placement;

    /**
     * @var string 实例`ID`。
     */
    public $InstanceId;

    /**
     * @var string 实例机型。
     */
    public $InstanceType;

    /**
     * @var integer 实例的CPU核数，单位：核。
     */
    public $CPU;

    /**
     * @var integer 实例内存容量，单位：`GB`。
     */
    public $Memory;

    /**
     * @var string 实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例<br><li>EXPIRED：表示过期的实例<br><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
     */
    public $RestrictState;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例计费模式。取值范围：<br><li>`PREPAID`：表示预付费，即包年包月<br><li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费<br><li>`CDHPAID`：`CDH`付费，即只对`CDH`计费，不对`CDH`上的实例计费。<br><li>`SPOTPAID`：表示竞价实例付费。
     */
    public $InstanceChargeType;

    /**
     * @var SystemDisk 实例系统盘信息。
     */
    public $SystemDisk;

    /**
     * @var array 实例数据盘信息。只包含随实例购买的数据盘。
     */
    public $DataDisks;

    /**
     * @var array 实例主网卡的内网`IP`列表。
     */
    public $PrivateIpAddresses;

    /**
     * @var array 实例主网卡的公网`IP`列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpAddresses;

    /**
     * @var InternetAccessible 实例带宽信息。
     */
    public $InternetAccessible;

    /**
     * @var VirtualPrivateCloud 实例所属虚拟私有网络信息。
     */
    public $VirtualPrivateCloud;

    /**
     * @var string 生产实例所使用的镜像`ID`。
     */
    public $ImageId;

    /**
     * @var string 自动续费标识。取值范围：<br><li>`NOTIFY_AND_MANUAL_RENEW`：表示通知即将过期，但不自动续费<br><li>`NOTIFY_AND_AUTO_RENEW`：表示通知即将过期，而且自动续费<br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`：表示不通知即将过期，也不自动续费。
<br><li>注意：后付费模式本项为null
     */
    public $RenewFlag;

    /**
     * @var string 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $CreatedTime;

    /**
     * @var string 到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。注意：后付费模式本项为null
     */
    public $ExpiredTime;

    /**
     * @var string 操作系统名称。
     */
    public $OsName;

    /**
     * @var array 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
     */
    public $SecurityGroupIds;

    /**
     * @var LoginSettings 实例登录设置。目前只返回实例所关联的密钥。
     */
    public $LoginSettings;

    /**
     * @var string 实例状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>RUNNING：表示运行中<br></li><li>STOPPED：表示关机<br></li><li>STARTING：表示开机中<br></li><li>STOPPING：表示关机中<br></li><li>REBOOTING：表示重启中<br></li><li>SHUTDOWN：表示停止待销毁<br></li><li>TERMINATING：表示销毁中。<br></li>
     */
    public $InstanceState;

    /**
     * @var array 实例关联的标签列表。
     */
    public $Tags;

    /**
     * @var string 实例的关机计费模式。
取值范围：<br><li>KEEP_CHARGING：关机继续收费<br><li>STOP_CHARGING：关机停止收费<li>NOT_APPLICABLE：实例处于非关机状态或者不适用关机停止计费的条件<br>
     */
    public $StopChargingMode;

    /**
     * @var string 实例全局唯一ID
     */
    public $Uuid;

    /**
     * @var string 实例的最新操作。例：StopInstances、ResetInstance。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperation;

    /**
     * @var string 实例的最新操作状态。取值范围：<br><li>SUCCESS：表示操作成功<br><li>OPERATING：表示操作执行中<br><li>FAILED：表示操作失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @var string 实例最新操作的唯一请求 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationRequestId;

    /**
     * @var string 分散置放群组ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisasterRecoverGroupId;

    /**
     * @var array 实例的IPv6地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPv6Addresses;

    /**
     * @var string CAM角色名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CamRoleName;

    /**
     * @var string 高性能计算集群`ID`。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HpcClusterId;

    /**
     * @var array 高性能计算集群`IP`列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RdmaIpAddresses;

    /**
     * @param Placement $Placement 实例所在的位置。
     * @param string $InstanceId 实例`ID`。
     * @param string $InstanceType 实例机型。
     * @param integer $CPU 实例的CPU核数，单位：核。
     * @param integer $Memory 实例内存容量，单位：`GB`。
     * @param string $RestrictState 实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例<br><li>EXPIRED：表示过期的实例<br><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
     * @param string $InstanceName 实例名称。
     * @param string $InstanceChargeType 实例计费模式。取值范围：<br><li>`PREPAID`：表示预付费，即包年包月<br><li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费<br><li>`CDHPAID`：`CDH`付费，即只对`CDH`计费，不对`CDH`上的实例计费。<br><li>`SPOTPAID`：表示竞价实例付费。
     * @param SystemDisk $SystemDisk 实例系统盘信息。
     * @param array $DataDisks 实例数据盘信息。只包含随实例购买的数据盘。
     * @param array $PrivateIpAddresses 实例主网卡的内网`IP`列表。
     * @param array $PublicIpAddresses 实例主网卡的公网`IP`列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternetAccessible $InternetAccessible 实例带宽信息。
     * @param VirtualPrivateCloud $VirtualPrivateCloud 实例所属虚拟私有网络信息。
     * @param string $ImageId 生产实例所使用的镜像`ID`。
     * @param string $RenewFlag 自动续费标识。取值范围：<br><li>`NOTIFY_AND_MANUAL_RENEW`：表示通知即将过期，但不自动续费<br><li>`NOTIFY_AND_AUTO_RENEW`：表示通知即将过期，而且自动续费<br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`：表示不通知即将过期，也不自动续费。
<br><li>注意：后付费模式本项为null
     * @param string $CreatedTime 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     * @param string $ExpiredTime 到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。注意：后付费模式本项为null
     * @param string $OsName 操作系统名称。
     * @param array $SecurityGroupIds 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
     * @param LoginSettings $LoginSettings 实例登录设置。目前只返回实例所关联的密钥。
     * @param string $InstanceState 实例状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>RUNNING：表示运行中<br></li><li>STOPPED：表示关机<br></li><li>STARTING：表示开机中<br></li><li>STOPPING：表示关机中<br></li><li>REBOOTING：表示重启中<br></li><li>SHUTDOWN：表示停止待销毁<br></li><li>TERMINATING：表示销毁中。<br></li>
     * @param array $Tags 实例关联的标签列表。
     * @param string $StopChargingMode 实例的关机计费模式。
取值范围：<br><li>KEEP_CHARGING：关机继续收费<br><li>STOP_CHARGING：关机停止收费<li>NOT_APPLICABLE：实例处于非关机状态或者不适用关机停止计费的条件<br>
     * @param string $Uuid 实例全局唯一ID
     * @param string $LatestOperation 实例的最新操作。例：StopInstances、ResetInstance。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationState 实例的最新操作状态。取值范围：<br><li>SUCCESS：表示操作成功<br><li>OPERATING：表示操作执行中<br><li>FAILED：表示操作失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationRequestId 实例最新操作的唯一请求 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisasterRecoverGroupId 分散置放群组ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IPv6Addresses 实例的IPv6地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CamRoleName CAM角色名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HpcClusterId 高性能计算集群`ID`。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RdmaIpAddresses 高性能计算集群`IP`列表。
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
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

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("StopChargingMode",$param) and $param["StopChargingMode"] !== null) {
            $this->StopChargingMode = $param["StopChargingMode"];
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

        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("IPv6Addresses",$param) and $param["IPv6Addresses"] !== null) {
            $this->IPv6Addresses = $param["IPv6Addresses"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("RdmaIpAddresses",$param) and $param["RdmaIpAddresses"] !== null) {
            $this->RdmaIpAddresses = $param["RdmaIpAddresses"];
        }
    }
}
