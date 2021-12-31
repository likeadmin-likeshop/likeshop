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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 已经存在的实例信息
 *
 * @method boolean getUsable() 获取实例是否支持加入集群(TRUE 可以加入 FALSE 不能加入)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsable(boolean $Usable) 设置实例是否支持加入集群(TRUE 可以加入 FALSE 不能加入)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnusableReason() 获取实例不支持加入的原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnusableReason(string $UnusableReason) 设置实例不支持加入的原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlreadyInCluster() 获取实例已经所在的集群ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlreadyInCluster(string $AlreadyInCluster) 设置实例已经所在的集群ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID形如：ins-xxxxxxxx。
 * @method void setInstanceId(string $InstanceId) 设置实例ID形如：ins-xxxxxxxx。
 * @method string getInstanceName() 获取实例名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivateIpAddresses() 获取实例主网卡的内网IP列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置实例主网卡的内网IP列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPublicIpAddresses() 获取实例主网卡的公网IP列表。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置实例主网卡的公网IP列表。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCPU() 获取实例的CPU核数，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPU(integer $CPU) 设置实例的CPU核数，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取实例内存容量，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置实例内存容量，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsName() 获取操作系统名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsName(string $OsName) 设置操作系统名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取实例机型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoscalingGroupId() 获取伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) 设置伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceChargeType() 获取实例计费模式。取值范围： PREPAID：表示预付费，即包年包月 POSTPAID_BY_HOUR：表示后付费，即按量计费 CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费模式。取值范围： PREPAID：表示预付费，即包年包月 POSTPAID_BY_HOUR：表示后付费，即按量计费 CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExistedInstance extends AbstractModel
{
    /**
     * @var boolean 实例是否支持加入集群(TRUE 可以加入 FALSE 不能加入)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Usable;

    /**
     * @var string 实例不支持加入的原因。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnusableReason;

    /**
     * @var string 实例已经所在的集群ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlreadyInCluster;

    /**
     * @var string 实例ID形如：ins-xxxxxxxx。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var array 实例主网卡的内网IP列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIpAddresses;

    /**
     * @var array 实例主网卡的公网IP列表。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpAddresses;

    /**
     * @var string 创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var integer 实例的CPU核数，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPU;

    /**
     * @var integer 实例内存容量，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var string 操作系统名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsName;

    /**
     * @var string 实例机型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalingGroupId;

    /**
     * @var string 实例计费模式。取值范围： PREPAID：表示预付费，即包年包月 POSTPAID_BY_HOUR：表示后付费，即按量计费 CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargeType;

    /**
     * @param boolean $Usable 实例是否支持加入集群(TRUE 可以加入 FALSE 不能加入)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnusableReason 实例不支持加入的原因。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlreadyInCluster 实例已经所在的集群ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID形如：ins-xxxxxxxx。
     * @param string $InstanceName 实例名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateIpAddresses 实例主网卡的内网IP列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PublicIpAddresses 实例主网卡的公网IP列表。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CPU 实例的CPU核数，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 实例内存容量，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsName 操作系统名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 实例机型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoscalingGroupId 伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceChargeType 实例计费模式。取值范围： PREPAID：表示预付费，即包年包月 POSTPAID_BY_HOUR：表示后付费，即按量计费 CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
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
        if (array_key_exists("Usable",$param) and $param["Usable"] !== null) {
            $this->Usable = $param["Usable"];
        }

        if (array_key_exists("UnusableReason",$param) and $param["UnusableReason"] !== null) {
            $this->UnusableReason = $param["UnusableReason"];
        }

        if (array_key_exists("AlreadyInCluster",$param) and $param["AlreadyInCluster"] !== null) {
            $this->AlreadyInCluster = $param["AlreadyInCluster"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AutoscalingGroupId",$param) and $param["AutoscalingGroupId"] !== null) {
            $this->AutoscalingGroupId = $param["AutoscalingGroupId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }
    }
}
