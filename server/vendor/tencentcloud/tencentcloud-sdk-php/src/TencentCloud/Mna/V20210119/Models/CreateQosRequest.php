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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateQos请求参数结构体
 *
 * @method SrcAddressInfo getSrcAddressInfo() 获取加速业务源地址信息，SrcIpv6和（SrcIpv4+SrcPublicIpv4）二选一，目前Ipv6不可用，全部填写以Ipv4参数为准。
 * @method void setSrcAddressInfo(SrcAddressInfo $SrcAddressInfo) 设置加速业务源地址信息，SrcIpv6和（SrcIpv4+SrcPublicIpv4）二选一，目前Ipv6不可用，全部填写以Ipv4参数为准。
 * @method DestAddressInfo getDestAddressInfo() 获取加速业务目标地址信息
 * @method void setDestAddressInfo(DestAddressInfo $DestAddressInfo) 设置加速业务目标地址信息
 * @method string getQosMenu() 获取加速套餐
T100K：上/下行保障 100kbps
T200K：上/下行保障 200kbps
T400K：上/下行保障 400kbps
BD1M：下行带宽保障1Mbps
BD2M：下行带宽保障2Mbps
BD4M：下行带宽保障4Mbps
BU1M：上行带宽保障1Mbps
BU2M：上行带宽保障2Mbps
BU4M：上行带宽保障4Mbps
 * @method void setQosMenu(string $QosMenu) 设置加速套餐
T100K：上/下行保障 100kbps
T200K：上/下行保障 200kbps
T400K：上/下行保障 400kbps
BD1M：下行带宽保障1Mbps
BD2M：下行带宽保障2Mbps
BD4M：下行带宽保障4Mbps
BU1M：上行带宽保障1Mbps
BU2M：上行带宽保障2Mbps
BU4M：上行带宽保障4Mbps
 * @method DeviceInfo getDeviceInfo() 获取申请加速的设备信息，包括运营商，操作系统，设备唯一标识等。
 * @method void setDeviceInfo(DeviceInfo $DeviceInfo) 设置申请加速的设备信息，包括运营商，操作系统，设备唯一标识等。
 * @method integer getDuration() 获取期望加速时长（单位分钟），默认值30分钟
 * @method void setDuration(integer $Duration) 设置期望加速时长（单位分钟），默认值30分钟
 * @method Capacity getCapacity() 获取接口能力扩展，如果是电信用户，必须填充CTCC Token字段
 * @method void setCapacity(Capacity $Capacity) 设置接口能力扩展，如果是电信用户，必须填充CTCC Token字段
 */
class CreateQosRequest extends AbstractModel
{
    /**
     * @var SrcAddressInfo 加速业务源地址信息，SrcIpv6和（SrcIpv4+SrcPublicIpv4）二选一，目前Ipv6不可用，全部填写以Ipv4参数为准。
     */
    public $SrcAddressInfo;

    /**
     * @var DestAddressInfo 加速业务目标地址信息
     */
    public $DestAddressInfo;

    /**
     * @var string 加速套餐
T100K：上/下行保障 100kbps
T200K：上/下行保障 200kbps
T400K：上/下行保障 400kbps
BD1M：下行带宽保障1Mbps
BD2M：下行带宽保障2Mbps
BD4M：下行带宽保障4Mbps
BU1M：上行带宽保障1Mbps
BU2M：上行带宽保障2Mbps
BU4M：上行带宽保障4Mbps
     */
    public $QosMenu;

    /**
     * @var DeviceInfo 申请加速的设备信息，包括运营商，操作系统，设备唯一标识等。
     */
    public $DeviceInfo;

    /**
     * @var integer 期望加速时长（单位分钟），默认值30分钟
     */
    public $Duration;

    /**
     * @var Capacity 接口能力扩展，如果是电信用户，必须填充CTCC Token字段
     */
    public $Capacity;

    /**
     * @param SrcAddressInfo $SrcAddressInfo 加速业务源地址信息，SrcIpv6和（SrcIpv4+SrcPublicIpv4）二选一，目前Ipv6不可用，全部填写以Ipv4参数为准。
     * @param DestAddressInfo $DestAddressInfo 加速业务目标地址信息
     * @param string $QosMenu 加速套餐
T100K：上/下行保障 100kbps
T200K：上/下行保障 200kbps
T400K：上/下行保障 400kbps
BD1M：下行带宽保障1Mbps
BD2M：下行带宽保障2Mbps
BD4M：下行带宽保障4Mbps
BU1M：上行带宽保障1Mbps
BU2M：上行带宽保障2Mbps
BU4M：上行带宽保障4Mbps
     * @param DeviceInfo $DeviceInfo 申请加速的设备信息，包括运营商，操作系统，设备唯一标识等。
     * @param integer $Duration 期望加速时长（单位分钟），默认值30分钟
     * @param Capacity $Capacity 接口能力扩展，如果是电信用户，必须填充CTCC Token字段
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
        if (array_key_exists("SrcAddressInfo",$param) and $param["SrcAddressInfo"] !== null) {
            $this->SrcAddressInfo = new SrcAddressInfo();
            $this->SrcAddressInfo->deserialize($param["SrcAddressInfo"]);
        }

        if (array_key_exists("DestAddressInfo",$param) and $param["DestAddressInfo"] !== null) {
            $this->DestAddressInfo = new DestAddressInfo();
            $this->DestAddressInfo->deserialize($param["DestAddressInfo"]);
        }

        if (array_key_exists("QosMenu",$param) and $param["QosMenu"] !== null) {
            $this->QosMenu = $param["QosMenu"];
        }

        if (array_key_exists("DeviceInfo",$param) and $param["DeviceInfo"] !== null) {
            $this->DeviceInfo = new DeviceInfo();
            $this->DeviceInfo->deserialize($param["DeviceInfo"]);
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = new Capacity();
            $this->Capacity->deserialize($param["Capacity"]);
        }
    }
}
