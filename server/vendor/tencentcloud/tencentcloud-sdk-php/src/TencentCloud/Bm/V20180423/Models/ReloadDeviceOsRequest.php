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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReloadDeviceOs请求参数结构体
 *
 * @method string getInstanceId() 获取设备的唯一ID
 * @method void setInstanceId(string $InstanceId) 设置设备的唯一ID
 * @method string getPassword() 获取密码。 用户设置的linux root或Windows Administrator密码。密码校验规则: <li> Windows机器密码需12到16位，至少包括三项 `[a-z]`,`[A-Z]`,`[0-9]`和`[()`'`~!@#$%^&*-+=_`|`{}[]:;'<>,.?/]`的特殊符号, 密码不能包含Administrator(不区分大小写); <li> Linux机器密码需8到16位，至少包括两项`[a-z,A-Z]`,`[0-9]`和`[()`'`~!@#$%^&*-+=_`|`{}[]:;'<>,.?/]`的特殊符号
 * @method void setPassword(string $Password) 设置密码。 用户设置的linux root或Windows Administrator密码。密码校验规则: <li> Windows机器密码需12到16位，至少包括三项 `[a-z]`,`[A-Z]`,`[0-9]`和`[()`'`~!@#$%^&*-+=_`|`{}[]:;'<>,.?/]`的特殊符号, 密码不能包含Administrator(不区分大小写); <li> Linux机器密码需8到16位，至少包括两项`[a-z,A-Z]`,`[0-9]`和`[()`'`~!@#$%^&*-+=_`|`{}[]:;'<>,.?/]`的特殊符号
 * @method integer getOsTypeId() 获取操作系统类型ID。通过接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/api/386/32902)获取操作系统信息
 * @method void setOsTypeId(integer $OsTypeId) 设置操作系统类型ID。通过接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/api/386/32902)获取操作系统信息
 * @method integer getRaidId() 获取RAID类型ID。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取RAID信息
 * @method void setRaidId(integer $RaidId) 设置RAID类型ID。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取RAID信息
 * @method integer getIsZoning() 获取是否格式化数据盘。0: 不格式化（默认值）；1：格式化
 * @method void setIsZoning(integer $IsZoning) 设置是否格式化数据盘。0: 不格式化（默认值）；1：格式化
 * @method integer getSysRootSpace() 获取系统盘根分区大小，默认是10G。系统盘的大小参考接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)
 * @method void setSysRootSpace(integer $SysRootSpace) 设置系统盘根分区大小，默认是10G。系统盘的大小参考接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)
 * @method integer getSysSwaporuefiSpace() 获取系统盘swap分区或/boot/efi分区的大小。若是uefi启动的机器，分区为/boot/efi ,且此值是默认是2G。普通机器为swap分区，可以不指定此分区。机型是否是uefi启动，参考接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)
 * @method void setSysSwaporuefiSpace(integer $SysSwaporuefiSpace) 设置系统盘swap分区或/boot/efi分区的大小。若是uefi启动的机器，分区为/boot/efi ,且此值是默认是2G。普通机器为swap分区，可以不指定此分区。机型是否是uefi启动，参考接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)
 * @method integer getSysUsrlocalSpace() 获取/usr/local分区大小
 * @method void setSysUsrlocalSpace(integer $SysUsrlocalSpace) 设置/usr/local分区大小
 * @method string getVpcId() 获取重装到新的私有网络的ID。如果改变VPC子网，则要求与SubnetId同时传参，否则可不填
 * @method void setVpcId(string $VpcId) 设置重装到新的私有网络的ID。如果改变VPC子网，则要求与SubnetId同时传参，否则可不填
 * @method string getSubnetId() 获取重装到新的子网的ID。如果改变VPC子网，则要求与VpcId同时传参，否则可不填
 * @method void setSubnetId(string $SubnetId) 设置重装到新的子网的ID。如果改变VPC子网，则要求与VpcId同时传参，否则可不填
 * @method string getLanIp() 获取重装指定IP地址
 * @method void setLanIp(string $LanIp) 设置重装指定IP地址
 * @method integer getHyperThreading() 获取指定是否开启超线程。 0：关闭超线程；1：开启超线程（默认值）
 * @method void setHyperThreading(integer $HyperThreading) 设置指定是否开启超线程。 0：关闭超线程；1：开启超线程（默认值）
 * @method string getImageId() 获取自定义镜像ID。传此字段则用自定义镜像重装
 * @method void setImageId(string $ImageId) 设置自定义镜像ID。传此字段则用自定义镜像重装
 * @method string getFileSystem() 获取指定数据盘的文件系统格式，当前支持 EXT4和XFS选项， 默认为EXT4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效
 * @method void setFileSystem(string $FileSystem) 设置指定数据盘的文件系统格式，当前支持 EXT4和XFS选项， 默认为EXT4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效
 * @method integer getNeedSecurityAgent() 获取是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method void setNeedSecurityAgent(integer $NeedSecurityAgent) 设置是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method integer getNeedMonitorAgent() 获取是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method void setNeedMonitorAgent(integer $NeedMonitorAgent) 设置是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method integer getNeedEMRAgent() 获取是否安装EMR Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method void setNeedEMRAgent(integer $NeedEMRAgent) 设置是否安装EMR Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method integer getNeedEMRSoftware() 获取是否安装EMR软件包，取值：1(安装) 0(不安装)，默认取值0
 * @method void setNeedEMRSoftware(integer $NeedEMRSoftware) 设置是否安装EMR软件包，取值：1(安装) 0(不安装)，默认取值0
 * @method integer getReserveSgConfig() 获取是否保留安全组配置，取值：1(保留) 0(不保留)，默认取值0
 * @method void setReserveSgConfig(integer $ReserveSgConfig) 设置是否保留安全组配置，取值：1(保留) 0(不保留)，默认取值0
 * @method integer getSysDataSpace() 获取/data分区大小，可不填。除root、swap、usr/local的剩余空间会自动分配到data分区
 * @method void setSysDataSpace(integer $SysDataSpace) 设置/data分区大小，可不填。除root、swap、usr/local的剩余空间会自动分配到data分区
 */
class ReloadDeviceOsRequest extends AbstractModel
{
    /**
     * @var string 设备的唯一ID
     */
    public $InstanceId;

    /**
     * @var string 密码。 用户设置的linux root或Windows Administrator密码。密码校验规则: <li> Windows机器密码需12到16位，至少包括三项 `[a-z]`,`[A-Z]`,`[0-9]`和`[()`'`~!@#$%^&*-+=_`|`{}[]:;'<>,.?/]`的特殊符号, 密码不能包含Administrator(不区分大小写); <li> Linux机器密码需8到16位，至少包括两项`[a-z,A-Z]`,`[0-9]`和`[()`'`~!@#$%^&*-+=_`|`{}[]:;'<>,.?/]`的特殊符号
     */
    public $Password;

    /**
     * @var integer 操作系统类型ID。通过接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/api/386/32902)获取操作系统信息
     */
    public $OsTypeId;

    /**
     * @var integer RAID类型ID。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取RAID信息
     */
    public $RaidId;

    /**
     * @var integer 是否格式化数据盘。0: 不格式化（默认值）；1：格式化
     */
    public $IsZoning;

    /**
     * @var integer 系统盘根分区大小，默认是10G。系统盘的大小参考接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)
     */
    public $SysRootSpace;

    /**
     * @var integer 系统盘swap分区或/boot/efi分区的大小。若是uefi启动的机器，分区为/boot/efi ,且此值是默认是2G。普通机器为swap分区，可以不指定此分区。机型是否是uefi启动，参考接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)
     */
    public $SysSwaporuefiSpace;

    /**
     * @var integer /usr/local分区大小
     */
    public $SysUsrlocalSpace;

    /**
     * @var string 重装到新的私有网络的ID。如果改变VPC子网，则要求与SubnetId同时传参，否则可不填
     */
    public $VpcId;

    /**
     * @var string 重装到新的子网的ID。如果改变VPC子网，则要求与VpcId同时传参，否则可不填
     */
    public $SubnetId;

    /**
     * @var string 重装指定IP地址
     */
    public $LanIp;

    /**
     * @var integer 指定是否开启超线程。 0：关闭超线程；1：开启超线程（默认值）
     */
    public $HyperThreading;

    /**
     * @var string 自定义镜像ID。传此字段则用自定义镜像重装
     */
    public $ImageId;

    /**
     * @var string 指定数据盘的文件系统格式，当前支持 EXT4和XFS选项， 默认为EXT4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效
     */
    public $FileSystem;

    /**
     * @var integer 是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0
     */
    public $NeedSecurityAgent;

    /**
     * @var integer 是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0
     */
    public $NeedMonitorAgent;

    /**
     * @var integer 是否安装EMR Agent，取值：1(安装) 0(不安装)，默认取值0
     */
    public $NeedEMRAgent;

    /**
     * @var integer 是否安装EMR软件包，取值：1(安装) 0(不安装)，默认取值0
     */
    public $NeedEMRSoftware;

    /**
     * @var integer 是否保留安全组配置，取值：1(保留) 0(不保留)，默认取值0
     */
    public $ReserveSgConfig;

    /**
     * @var integer /data分区大小，可不填。除root、swap、usr/local的剩余空间会自动分配到data分区
     */
    public $SysDataSpace;

    /**
     * @param string $InstanceId 设备的唯一ID
     * @param string $Password 密码。 用户设置的linux root或Windows Administrator密码。密码校验规则: <li> Windows机器密码需12到16位，至少包括三项 `[a-z]`,`[A-Z]`,`[0-9]`和`[()`'`~!@#$%^&*-+=_`|`{}[]:;'<>,.?/]`的特殊符号, 密码不能包含Administrator(不区分大小写); <li> Linux机器密码需8到16位，至少包括两项`[a-z,A-Z]`,`[0-9]`和`[()`'`~!@#$%^&*-+=_`|`{}[]:;'<>,.?/]`的特殊符号
     * @param integer $OsTypeId 操作系统类型ID。通过接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/api/386/32902)获取操作系统信息
     * @param integer $RaidId RAID类型ID。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取RAID信息
     * @param integer $IsZoning 是否格式化数据盘。0: 不格式化（默认值）；1：格式化
     * @param integer $SysRootSpace 系统盘根分区大小，默认是10G。系统盘的大小参考接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)
     * @param integer $SysSwaporuefiSpace 系统盘swap分区或/boot/efi分区的大小。若是uefi启动的机器，分区为/boot/efi ,且此值是默认是2G。普通机器为swap分区，可以不指定此分区。机型是否是uefi启动，参考接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)
     * @param integer $SysUsrlocalSpace /usr/local分区大小
     * @param string $VpcId 重装到新的私有网络的ID。如果改变VPC子网，则要求与SubnetId同时传参，否则可不填
     * @param string $SubnetId 重装到新的子网的ID。如果改变VPC子网，则要求与VpcId同时传参，否则可不填
     * @param string $LanIp 重装指定IP地址
     * @param integer $HyperThreading 指定是否开启超线程。 0：关闭超线程；1：开启超线程（默认值）
     * @param string $ImageId 自定义镜像ID。传此字段则用自定义镜像重装
     * @param string $FileSystem 指定数据盘的文件系统格式，当前支持 EXT4和XFS选项， 默认为EXT4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效
     * @param integer $NeedSecurityAgent 是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0
     * @param integer $NeedMonitorAgent 是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0
     * @param integer $NeedEMRAgent 是否安装EMR Agent，取值：1(安装) 0(不安装)，默认取值0
     * @param integer $NeedEMRSoftware 是否安装EMR软件包，取值：1(安装) 0(不安装)，默认取值0
     * @param integer $ReserveSgConfig 是否保留安全组配置，取值：1(保留) 0(不保留)，默认取值0
     * @param integer $SysDataSpace /data分区大小，可不填。除root、swap、usr/local的剩余空间会自动分配到data分区
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("OsTypeId",$param) and $param["OsTypeId"] !== null) {
            $this->OsTypeId = $param["OsTypeId"];
        }

        if (array_key_exists("RaidId",$param) and $param["RaidId"] !== null) {
            $this->RaidId = $param["RaidId"];
        }

        if (array_key_exists("IsZoning",$param) and $param["IsZoning"] !== null) {
            $this->IsZoning = $param["IsZoning"];
        }

        if (array_key_exists("SysRootSpace",$param) and $param["SysRootSpace"] !== null) {
            $this->SysRootSpace = $param["SysRootSpace"];
        }

        if (array_key_exists("SysSwaporuefiSpace",$param) and $param["SysSwaporuefiSpace"] !== null) {
            $this->SysSwaporuefiSpace = $param["SysSwaporuefiSpace"];
        }

        if (array_key_exists("SysUsrlocalSpace",$param) and $param["SysUsrlocalSpace"] !== null) {
            $this->SysUsrlocalSpace = $param["SysUsrlocalSpace"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("HyperThreading",$param) and $param["HyperThreading"] !== null) {
            $this->HyperThreading = $param["HyperThreading"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("NeedSecurityAgent",$param) and $param["NeedSecurityAgent"] !== null) {
            $this->NeedSecurityAgent = $param["NeedSecurityAgent"];
        }

        if (array_key_exists("NeedMonitorAgent",$param) and $param["NeedMonitorAgent"] !== null) {
            $this->NeedMonitorAgent = $param["NeedMonitorAgent"];
        }

        if (array_key_exists("NeedEMRAgent",$param) and $param["NeedEMRAgent"] !== null) {
            $this->NeedEMRAgent = $param["NeedEMRAgent"];
        }

        if (array_key_exists("NeedEMRSoftware",$param) and $param["NeedEMRSoftware"] !== null) {
            $this->NeedEMRSoftware = $param["NeedEMRSoftware"];
        }

        if (array_key_exists("ReserveSgConfig",$param) and $param["ReserveSgConfig"] !== null) {
            $this->ReserveSgConfig = $param["ReserveSgConfig"];
        }

        if (array_key_exists("SysDataSpace",$param) and $param["SysDataSpace"] !== null) {
            $this->SysDataSpace = $param["SysDataSpace"];
        }
    }
}
