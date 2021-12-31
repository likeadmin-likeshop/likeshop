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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云盘配置。
 *
 * @method boolean getAvailable() 获取配置是否可用。
 * @method void setAvailable(boolean $Available) 设置配置是否可用。
 * @method string getDiskType() 获取云盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘<br><li>CLOUD_PREMIUM：表示高性能云硬盘<br><li>CLOUD_SSD：SSD表示SSD云硬盘。
 * @method void setDiskType(string $DiskType) 设置云盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘<br><li>CLOUD_PREMIUM：表示高性能云硬盘<br><li>CLOUD_SSD：SSD表示SSD云硬盘。
 * @method string getDiskUsage() 获取云盘类型。取值范围：<br><li>SYSTEM_DISK：表示系统盘<br><li>DATA_DISK：表示数据盘。
 * @method void setDiskUsage(string $DiskUsage) 设置云盘类型。取值范围：<br><li>SYSTEM_DISK：表示系统盘<br><li>DATA_DISK：表示数据盘。
 * @method string getDiskChargeType() 获取付费模式。取值范围：<br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费。
 * @method void setDiskChargeType(string $DiskChargeType) 设置付费模式。取值范围：<br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费。
 * @method integer getMaxDiskSize() 获取最大可配置云盘大小，单位GB。
 * @method void setMaxDiskSize(integer $MaxDiskSize) 设置最大可配置云盘大小，单位GB。
 * @method integer getMinDiskSize() 获取最小可配置云盘大小，单位GB。
 * @method void setMinDiskSize(integer $MinDiskSize) 设置最小可配置云盘大小，单位GB。
 * @method string getZone() 获取云硬盘所属的[可用区](/document/product/213/15753#ZoneInfo)。
 * @method void setZone(string $Zone) 设置云硬盘所属的[可用区](/document/product/213/15753#ZoneInfo)。
 * @method string getDeviceClass() 获取实例机型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceClass(string $DeviceClass) 设置实例机型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceFamily() 获取实例机型系列。详见[实例类型](https://cloud.tencent.com/document/product/213/11518)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceFamily(string $InstanceFamily) 设置实例机型系列。详见[实例类型](https://cloud.tencent.com/document/product/213/11518)
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiskConfig extends AbstractModel
{
    /**
     * @var boolean 配置是否可用。
     */
    public $Available;

    /**
     * @var string 云盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘<br><li>CLOUD_PREMIUM：表示高性能云硬盘<br><li>CLOUD_SSD：SSD表示SSD云硬盘。
     */
    public $DiskType;

    /**
     * @var string 云盘类型。取值范围：<br><li>SYSTEM_DISK：表示系统盘<br><li>DATA_DISK：表示数据盘。
     */
    public $DiskUsage;

    /**
     * @var string 付费模式。取值范围：<br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费。
     */
    public $DiskChargeType;

    /**
     * @var integer 最大可配置云盘大小，单位GB。
     */
    public $MaxDiskSize;

    /**
     * @var integer 最小可配置云盘大小，单位GB。
     */
    public $MinDiskSize;

    /**
     * @var string 云硬盘所属的[可用区](/document/product/213/15753#ZoneInfo)。
     */
    public $Zone;

    /**
     * @var string 实例机型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceClass;

    /**
     * @var string 实例机型系列。详见[实例类型](https://cloud.tencent.com/document/product/213/11518)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceFamily;

    /**
     * @param boolean $Available 配置是否可用。
     * @param string $DiskType 云盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘<br><li>CLOUD_PREMIUM：表示高性能云硬盘<br><li>CLOUD_SSD：SSD表示SSD云硬盘。
     * @param string $DiskUsage 云盘类型。取值范围：<br><li>SYSTEM_DISK：表示系统盘<br><li>DATA_DISK：表示数据盘。
     * @param string $DiskChargeType 付费模式。取值范围：<br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费。
     * @param integer $MaxDiskSize 最大可配置云盘大小，单位GB。
     * @param integer $MinDiskSize 最小可配置云盘大小，单位GB。
     * @param string $Zone 云硬盘所属的[可用区](/document/product/213/15753#ZoneInfo)。
     * @param string $DeviceClass 实例机型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceFamily 实例机型系列。详见[实例类型](https://cloud.tencent.com/document/product/213/11518)
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
        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("MinDiskSize",$param) and $param["MinDiskSize"] !== null) {
            $this->MinDiskSize = $param["MinDiskSize"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }
    }
}
