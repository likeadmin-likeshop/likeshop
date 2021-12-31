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
 * 套餐信息。
 *
 * @method string getBundleId() 获取套餐 ID。
 * @method void setBundleId(string $BundleId) 设置套餐 ID。
 * @method integer getMemory() 获取内存大小，单位 GB。
 * @method void setMemory(integer $Memory) 设置内存大小，单位 GB。
 * @method string getSystemDiskType() 获取系统盘类型。
取值范围： 
<li> LOCAL_BASIC：本地硬盘</li><li> LOCAL_SSD：本地 SSD 硬盘</li><li> CLOUD_BASIC：普通云硬盘</li><li> CLOUD_SSD：SSD 云硬盘</li><li> CLOUD_PREMIUM：高性能云硬盘</li>
 * @method void setSystemDiskType(string $SystemDiskType) 设置系统盘类型。
取值范围： 
<li> LOCAL_BASIC：本地硬盘</li><li> LOCAL_SSD：本地 SSD 硬盘</li><li> CLOUD_BASIC：普通云硬盘</li><li> CLOUD_SSD：SSD 云硬盘</li><li> CLOUD_PREMIUM：高性能云硬盘</li>
 * @method integer getSystemDiskSize() 获取系统盘大小。
 * @method void setSystemDiskSize(integer $SystemDiskSize) 设置系统盘大小。
 * @method integer getMonthlyTraffic() 获取每月网络流量，单位 Gb。
 * @method void setMonthlyTraffic(integer $MonthlyTraffic) 设置每月网络流量，单位 Gb。
 * @method boolean getSupportLinuxUnixPlatform() 获取是否支持 Linux/Unix 平台。
 * @method void setSupportLinuxUnixPlatform(boolean $SupportLinuxUnixPlatform) 设置是否支持 Linux/Unix 平台。
 * @method boolean getSupportWindowsPlatform() 获取是否支持 Windows 平台。
 * @method void setSupportWindowsPlatform(boolean $SupportWindowsPlatform) 设置是否支持 Windows 平台。
 * @method Price getPrice() 获取套餐当前单位价格信息。
 * @method void setPrice(Price $Price) 设置套餐当前单位价格信息。
 * @method integer getCPU() 获取CPU 核数。
 * @method void setCPU(integer $CPU) 设置CPU 核数。
 * @method integer getInternetMaxBandwidthOut() 获取峰值带宽，单位 Mbps。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置峰值带宽，单位 Mbps。
 * @method string getInternetChargeType() 获取网络计费类型。
 * @method void setInternetChargeType(string $InternetChargeType) 设置网络计费类型。
 * @method string getBundleSalesState() 获取套餐售卖状态,取值:‘AVAILABLE’(可用) , ‘SOLD_OUT’(售罄)
 * @method void setBundleSalesState(string $BundleSalesState) 设置套餐售卖状态,取值:‘AVAILABLE’(可用) , ‘SOLD_OUT’(售罄)
 * @method string getBundleType() 获取套餐类型。
取值范围：
<li> GENERAL_BUNDLE：通用型</li><li> STORAGE_BUNDLE：存储型 </li>
 * @method void setBundleType(string $BundleType) 设置套餐类型。
取值范围：
<li> GENERAL_BUNDLE：通用型</li><li> STORAGE_BUNDLE：存储型 </li>
 * @method string getBundleDisplayLabel() 获取套餐展示标签.
取值范围:
"ACTIVITY": 活动套餐,
"NORMAL": 普通套餐
"CAREFREE": 无忧套餐
 * @method void setBundleDisplayLabel(string $BundleDisplayLabel) 设置套餐展示标签.
取值范围:
"ACTIVITY": 活动套餐,
"NORMAL": 普通套餐
"CAREFREE": 无忧套餐
 */
class Bundle extends AbstractModel
{
    /**
     * @var string 套餐 ID。
     */
    public $BundleId;

    /**
     * @var integer 内存大小，单位 GB。
     */
    public $Memory;

    /**
     * @var string 系统盘类型。
取值范围： 
<li> LOCAL_BASIC：本地硬盘</li><li> LOCAL_SSD：本地 SSD 硬盘</li><li> CLOUD_BASIC：普通云硬盘</li><li> CLOUD_SSD：SSD 云硬盘</li><li> CLOUD_PREMIUM：高性能云硬盘</li>
     */
    public $SystemDiskType;

    /**
     * @var integer 系统盘大小。
     */
    public $SystemDiskSize;

    /**
     * @var integer 每月网络流量，单位 Gb。
     */
    public $MonthlyTraffic;

    /**
     * @var boolean 是否支持 Linux/Unix 平台。
     */
    public $SupportLinuxUnixPlatform;

    /**
     * @var boolean 是否支持 Windows 平台。
     */
    public $SupportWindowsPlatform;

    /**
     * @var Price 套餐当前单位价格信息。
     */
    public $Price;

    /**
     * @var integer CPU 核数。
     */
    public $CPU;

    /**
     * @var integer 峰值带宽，单位 Mbps。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 网络计费类型。
     */
    public $InternetChargeType;

    /**
     * @var string 套餐售卖状态,取值:‘AVAILABLE’(可用) , ‘SOLD_OUT’(售罄)
     */
    public $BundleSalesState;

    /**
     * @var string 套餐类型。
取值范围：
<li> GENERAL_BUNDLE：通用型</li><li> STORAGE_BUNDLE：存储型 </li>
     */
    public $BundleType;

    /**
     * @var string 套餐展示标签.
取值范围:
"ACTIVITY": 活动套餐,
"NORMAL": 普通套餐
"CAREFREE": 无忧套餐
     */
    public $BundleDisplayLabel;

    /**
     * @param string $BundleId 套餐 ID。
     * @param integer $Memory 内存大小，单位 GB。
     * @param string $SystemDiskType 系统盘类型。
取值范围： 
<li> LOCAL_BASIC：本地硬盘</li><li> LOCAL_SSD：本地 SSD 硬盘</li><li> CLOUD_BASIC：普通云硬盘</li><li> CLOUD_SSD：SSD 云硬盘</li><li> CLOUD_PREMIUM：高性能云硬盘</li>
     * @param integer $SystemDiskSize 系统盘大小。
     * @param integer $MonthlyTraffic 每月网络流量，单位 Gb。
     * @param boolean $SupportLinuxUnixPlatform 是否支持 Linux/Unix 平台。
     * @param boolean $SupportWindowsPlatform 是否支持 Windows 平台。
     * @param Price $Price 套餐当前单位价格信息。
     * @param integer $CPU CPU 核数。
     * @param integer $InternetMaxBandwidthOut 峰值带宽，单位 Mbps。
     * @param string $InternetChargeType 网络计费类型。
     * @param string $BundleSalesState 套餐售卖状态,取值:‘AVAILABLE’(可用) , ‘SOLD_OUT’(售罄)
     * @param string $BundleType 套餐类型。
取值范围：
<li> GENERAL_BUNDLE：通用型</li><li> STORAGE_BUNDLE：存储型 </li>
     * @param string $BundleDisplayLabel 套餐展示标签.
取值范围:
"ACTIVITY": 活动套餐,
"NORMAL": 普通套餐
"CAREFREE": 无忧套餐
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
        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("SystemDiskType",$param) and $param["SystemDiskType"] !== null) {
            $this->SystemDiskType = $param["SystemDiskType"];
        }

        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
        }

        if (array_key_exists("MonthlyTraffic",$param) and $param["MonthlyTraffic"] !== null) {
            $this->MonthlyTraffic = $param["MonthlyTraffic"];
        }

        if (array_key_exists("SupportLinuxUnixPlatform",$param) and $param["SupportLinuxUnixPlatform"] !== null) {
            $this->SupportLinuxUnixPlatform = $param["SupportLinuxUnixPlatform"];
        }

        if (array_key_exists("SupportWindowsPlatform",$param) and $param["SupportWindowsPlatform"] !== null) {
            $this->SupportWindowsPlatform = $param["SupportWindowsPlatform"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Price();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("BundleSalesState",$param) and $param["BundleSalesState"] !== null) {
            $this->BundleSalesState = $param["BundleSalesState"];
        }

        if (array_key_exists("BundleType",$param) and $param["BundleType"] !== null) {
            $this->BundleType = $param["BundleType"];
        }

        if (array_key_exists("BundleDisplayLabel",$param) and $param["BundleDisplayLabel"] !== null) {
            $this->BundleDisplayLabel = $param["BundleDisplayLabel"];
        }
    }
}
