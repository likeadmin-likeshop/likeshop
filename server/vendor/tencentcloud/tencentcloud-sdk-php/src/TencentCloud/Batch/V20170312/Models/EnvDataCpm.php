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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 黑石计算环境数据
 *
 * @method array getZones() 获取黑石可用区名称列表。如ap-guangzhou-bls-1, 可通过黑石接口[DescribeRegions]( https://cloud.tencent.com/document/api/386/33564)接口获取。不是Batch可用区名称。目前仅支持一个可用区名称。
 * @method void setZones(array $Zones) 设置黑石可用区名称列表。如ap-guangzhou-bls-1, 可通过黑石接口[DescribeRegions]( https://cloud.tencent.com/document/api/386/33564)接口获取。不是Batch可用区名称。目前仅支持一个可用区名称。
 * @method array getInstanceTypes() 获取购买的机型ID。通过黑石接口[DescribeDeviceClass]( https://cloud.tencent.com/document/api/386/32911)查询设备型号，获取机型信息。
 * @method void setInstanceTypes(array $InstanceTypes) 设置购买的机型ID。通过黑石接口[DescribeDeviceClass]( https://cloud.tencent.com/document/api/386/32911)查询设备型号，获取机型信息。
 * @method string getTimeUnit() 获取购买时长单位，取值：m(月)。
 * @method void setTimeUnit(string $TimeUnit) 设置购买时长单位，取值：m(月)。
 * @method integer getTimeSpan() 获取购买时长。
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长。
 * @method integer getRaidId() 获取RAID类型ID。通过黑石接口[DescribeDeviceClassPartition]( https://cloud.tencent.com/document/api/386/32910)查询机型RAID方式以及系统盘大小，获取RAID信息。
 * @method void setRaidId(integer $RaidId) 设置RAID类型ID。通过黑石接口[DescribeDeviceClassPartition]( https://cloud.tencent.com/document/api/386/32910)查询机型RAID方式以及系统盘大小，获取RAID信息。
 * @method integer getOsTypeId() 获取部署服务器的操作系统ID。通过批量计算接口DescribeCpmOsInfo查询操作系统信息。
 * @method void setOsTypeId(integer $OsTypeId) 设置部署服务器的操作系统ID。通过批量计算接口DescribeCpmOsInfo查询操作系统信息。
 * @method array getVirtualPrivateClouds() 获取黑石VPC列表，目前仅支持一个VPC。
 * @method void setVirtualPrivateClouds(array $VirtualPrivateClouds) 设置黑石VPC列表，目前仅支持一个VPC。
 * @method integer getNeedSecurityAgent() 获取是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0。
 * @method void setNeedSecurityAgent(integer $NeedSecurityAgent) 设置是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0。
 * @method integer getNeedMonitorAgent() 获取是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0。
 * @method void setNeedMonitorAgent(integer $NeedMonitorAgent) 设置是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0。
 * @method integer getAutoRenewFlag() 获取自动续费标志位，取值：1(自动续费) 0(不自动续费)，默认取值0。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志位，取值：1(自动续费) 0(不自动续费)，默认取值0。
 * @method integer getIsZoning() 获取数据盘是否格式化，取值：1(格式化) 0(不格式化)，默认取值为1。
 * @method void setIsZoning(integer $IsZoning) 设置数据盘是否格式化，取值：1(格式化) 0(不格式化)，默认取值为1。
 * @method string getFileSystem() 获取指定数据盘的文件系统格式，当前支持 ext4和xfs选项， 默认为ext4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效。
 * @method void setFileSystem(string $FileSystem) 设置指定数据盘的文件系统格式，当前支持 ext4和xfs选项， 默认为ext4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效。
 * @method string getPassword() 获取设置Linux root或Windows Administrator的密码。若不设置此参数，默认情况下会随机生成密码，并以站内信方式通知到用户。
 * @method void setPassword(string $Password) 设置设置Linux root或Windows Administrator的密码。若不设置此参数，默认情况下会随机生成密码，并以站内信方式通知到用户。
 * @method integer getApplyEip() 获取是否分配弹性公网IP，取值：1(分配) 0(不分配)，默认取值0。
 * @method void setApplyEip(integer $ApplyEip) 设置是否分配弹性公网IP，取值：1(分配) 0(不分配)，默认取值0。
 * @method string getEipPayMode() 获取弹性公网IP计费模式，取值：flow(按流量计费) bandwidth(按带宽计费)，默认取值flow。
 * @method void setEipPayMode(string $EipPayMode) 设置弹性公网IP计费模式，取值：flow(按流量计费) bandwidth(按带宽计费)，默认取值flow。
 * @method integer getEipBandwidth() 获取弹性公网IP带宽限制，单位Mb。
 * @method void setEipBandwidth(integer $EipBandwidth) 设置弹性公网IP带宽限制，单位Mb。
 * @method string getImageId() 获取自定义镜像ID，取值生效时用自定义镜像部署物理机。
 * @method void setImageId(string $ImageId) 设置自定义镜像ID，取值生效时用自定义镜像部署物理机。
 * @method integer getSysRootSpace() 获取系统盘根分区大小，单位为G，默认取值10G。通过黑石接口[DescribeDeviceClassPartition]( https://cloud.tencent.com/document/api/386/32910)查询机型RAID方式以及系统盘大小，获取根分区信息。
 * @method void setSysRootSpace(integer $SysRootSpace) 设置系统盘根分区大小，单位为G，默认取值10G。通过黑石接口[DescribeDeviceClassPartition]( https://cloud.tencent.com/document/api/386/32910)查询机型RAID方式以及系统盘大小，获取根分区信息。
 * @method integer getSysDataSpace() 获取/data分区大小，单位为G。如果系统盘还有剩余大小，会分配给/data分区。（特殊情况：如果剩余空间不足10G，并且没有指定/data分区，则剩余空间会分配给Root分区）。
 * @method void setSysDataSpace(integer $SysDataSpace) 设置/data分区大小，单位为G。如果系统盘还有剩余大小，会分配给/data分区。（特殊情况：如果剩余空间不足10G，并且没有指定/data分区，则剩余空间会分配给Root分区）。
 * @method integer getHyperThreading() 获取是否开启超线程，取值：1(开启) 0(关闭)，默认取值1。
 * @method void setHyperThreading(integer $HyperThreading) 设置是否开启超线程，取值：1(开启) 0(关闭)，默认取值1。
 * @method array getLanIps() 获取指定的内网IP列表，不指定时自动分配。
 * @method void setLanIps(array $LanIps) 设置指定的内网IP列表，不指定时自动分配。
 */
class EnvDataCpm extends AbstractModel
{
    /**
     * @var array 黑石可用区名称列表。如ap-guangzhou-bls-1, 可通过黑石接口[DescribeRegions]( https://cloud.tencent.com/document/api/386/33564)接口获取。不是Batch可用区名称。目前仅支持一个可用区名称。
     */
    public $Zones;

    /**
     * @var array 购买的机型ID。通过黑石接口[DescribeDeviceClass]( https://cloud.tencent.com/document/api/386/32911)查询设备型号，获取机型信息。
     */
    public $InstanceTypes;

    /**
     * @var string 购买时长单位，取值：m(月)。
     */
    public $TimeUnit;

    /**
     * @var integer 购买时长。
     */
    public $TimeSpan;

    /**
     * @var integer RAID类型ID。通过黑石接口[DescribeDeviceClassPartition]( https://cloud.tencent.com/document/api/386/32910)查询机型RAID方式以及系统盘大小，获取RAID信息。
     */
    public $RaidId;

    /**
     * @var integer 部署服务器的操作系统ID。通过批量计算接口DescribeCpmOsInfo查询操作系统信息。
     */
    public $OsTypeId;

    /**
     * @var array 黑石VPC列表，目前仅支持一个VPC。
     */
    public $VirtualPrivateClouds;

    /**
     * @var integer 是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0。
     */
    public $NeedSecurityAgent;

    /**
     * @var integer 是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0。
     */
    public $NeedMonitorAgent;

    /**
     * @var integer 自动续费标志位，取值：1(自动续费) 0(不自动续费)，默认取值0。
     */
    public $AutoRenewFlag;

    /**
     * @var integer 数据盘是否格式化，取值：1(格式化) 0(不格式化)，默认取值为1。
     */
    public $IsZoning;

    /**
     * @var string 指定数据盘的文件系统格式，当前支持 ext4和xfs选项， 默认为ext4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效。
     */
    public $FileSystem;

    /**
     * @var string 设置Linux root或Windows Administrator的密码。若不设置此参数，默认情况下会随机生成密码，并以站内信方式通知到用户。
     */
    public $Password;

    /**
     * @var integer 是否分配弹性公网IP，取值：1(分配) 0(不分配)，默认取值0。
     */
    public $ApplyEip;

    /**
     * @var string 弹性公网IP计费模式，取值：flow(按流量计费) bandwidth(按带宽计费)，默认取值flow。
     */
    public $EipPayMode;

    /**
     * @var integer 弹性公网IP带宽限制，单位Mb。
     */
    public $EipBandwidth;

    /**
     * @var string 自定义镜像ID，取值生效时用自定义镜像部署物理机。
     */
    public $ImageId;

    /**
     * @var integer 系统盘根分区大小，单位为G，默认取值10G。通过黑石接口[DescribeDeviceClassPartition]( https://cloud.tencent.com/document/api/386/32910)查询机型RAID方式以及系统盘大小，获取根分区信息。
     */
    public $SysRootSpace;

    /**
     * @var integer /data分区大小，单位为G。如果系统盘还有剩余大小，会分配给/data分区。（特殊情况：如果剩余空间不足10G，并且没有指定/data分区，则剩余空间会分配给Root分区）。
     */
    public $SysDataSpace;

    /**
     * @var integer 是否开启超线程，取值：1(开启) 0(关闭)，默认取值1。
     */
    public $HyperThreading;

    /**
     * @var array 指定的内网IP列表，不指定时自动分配。
     */
    public $LanIps;

    /**
     * @param array $Zones 黑石可用区名称列表。如ap-guangzhou-bls-1, 可通过黑石接口[DescribeRegions]( https://cloud.tencent.com/document/api/386/33564)接口获取。不是Batch可用区名称。目前仅支持一个可用区名称。
     * @param array $InstanceTypes 购买的机型ID。通过黑石接口[DescribeDeviceClass]( https://cloud.tencent.com/document/api/386/32911)查询设备型号，获取机型信息。
     * @param string $TimeUnit 购买时长单位，取值：m(月)。
     * @param integer $TimeSpan 购买时长。
     * @param integer $RaidId RAID类型ID。通过黑石接口[DescribeDeviceClassPartition]( https://cloud.tencent.com/document/api/386/32910)查询机型RAID方式以及系统盘大小，获取RAID信息。
     * @param integer $OsTypeId 部署服务器的操作系统ID。通过批量计算接口DescribeCpmOsInfo查询操作系统信息。
     * @param array $VirtualPrivateClouds 黑石VPC列表，目前仅支持一个VPC。
     * @param integer $NeedSecurityAgent 是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0。
     * @param integer $NeedMonitorAgent 是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0。
     * @param integer $AutoRenewFlag 自动续费标志位，取值：1(自动续费) 0(不自动续费)，默认取值0。
     * @param integer $IsZoning 数据盘是否格式化，取值：1(格式化) 0(不格式化)，默认取值为1。
     * @param string $FileSystem 指定数据盘的文件系统格式，当前支持 ext4和xfs选项， 默认为ext4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效。
     * @param string $Password 设置Linux root或Windows Administrator的密码。若不设置此参数，默认情况下会随机生成密码，并以站内信方式通知到用户。
     * @param integer $ApplyEip 是否分配弹性公网IP，取值：1(分配) 0(不分配)，默认取值0。
     * @param string $EipPayMode 弹性公网IP计费模式，取值：flow(按流量计费) bandwidth(按带宽计费)，默认取值flow。
     * @param integer $EipBandwidth 弹性公网IP带宽限制，单位Mb。
     * @param string $ImageId 自定义镜像ID，取值生效时用自定义镜像部署物理机。
     * @param integer $SysRootSpace 系统盘根分区大小，单位为G，默认取值10G。通过黑石接口[DescribeDeviceClassPartition]( https://cloud.tencent.com/document/api/386/32910)查询机型RAID方式以及系统盘大小，获取根分区信息。
     * @param integer $SysDataSpace /data分区大小，单位为G。如果系统盘还有剩余大小，会分配给/data分区。（特殊情况：如果剩余空间不足10G，并且没有指定/data分区，则剩余空间会分配给Root分区）。
     * @param integer $HyperThreading 是否开启超线程，取值：1(开启) 0(关闭)，默认取值1。
     * @param array $LanIps 指定的内网IP列表，不指定时自动分配。
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
        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("RaidId",$param) and $param["RaidId"] !== null) {
            $this->RaidId = $param["RaidId"];
        }

        if (array_key_exists("OsTypeId",$param) and $param["OsTypeId"] !== null) {
            $this->OsTypeId = $param["OsTypeId"];
        }

        if (array_key_exists("VirtualPrivateClouds",$param) and $param["VirtualPrivateClouds"] !== null) {
            $this->VirtualPrivateClouds = [];
            foreach ($param["VirtualPrivateClouds"] as $key => $value){
                $obj = new CpmVirtualPrivateCloud();
                $obj->deserialize($value);
                array_push($this->VirtualPrivateClouds, $obj);
            }
        }

        if (array_key_exists("NeedSecurityAgent",$param) and $param["NeedSecurityAgent"] !== null) {
            $this->NeedSecurityAgent = $param["NeedSecurityAgent"];
        }

        if (array_key_exists("NeedMonitorAgent",$param) and $param["NeedMonitorAgent"] !== null) {
            $this->NeedMonitorAgent = $param["NeedMonitorAgent"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("IsZoning",$param) and $param["IsZoning"] !== null) {
            $this->IsZoning = $param["IsZoning"];
        }

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ApplyEip",$param) and $param["ApplyEip"] !== null) {
            $this->ApplyEip = $param["ApplyEip"];
        }

        if (array_key_exists("EipPayMode",$param) and $param["EipPayMode"] !== null) {
            $this->EipPayMode = $param["EipPayMode"];
        }

        if (array_key_exists("EipBandwidth",$param) and $param["EipBandwidth"] !== null) {
            $this->EipBandwidth = $param["EipBandwidth"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SysRootSpace",$param) and $param["SysRootSpace"] !== null) {
            $this->SysRootSpace = $param["SysRootSpace"];
        }

        if (array_key_exists("SysDataSpace",$param) and $param["SysDataSpace"] !== null) {
            $this->SysDataSpace = $param["SysDataSpace"];
        }

        if (array_key_exists("HyperThreading",$param) and $param["HyperThreading"] !== null) {
            $this->HyperThreading = $param["HyperThreading"];
        }

        if (array_key_exists("LanIps",$param) and $param["LanIps"] !== null) {
            $this->LanIps = $param["LanIps"];
        }
    }
}
