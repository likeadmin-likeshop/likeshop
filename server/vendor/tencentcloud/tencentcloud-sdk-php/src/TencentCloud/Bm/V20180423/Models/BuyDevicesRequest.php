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
 * BuyDevices请求参数结构体
 *
 * @method string getZone() 获取可用区ID。通过接口[查询地域以及可用区(DescribeRegions)](https://cloud.tencent.com/document/api/386/33564)获取可用区信息
 * @method void setZone(string $Zone) 设置可用区ID。通过接口[查询地域以及可用区(DescribeRegions)](https://cloud.tencent.com/document/api/386/33564)获取可用区信息
 * @method integer getOsTypeId() 获取部署服务器的操作系统ID。通过接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/product/386/32902)获取操作系统信息
 * @method void setOsTypeId(integer $OsTypeId) 设置部署服务器的操作系统ID。通过接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/product/386/32902)获取操作系统信息
 * @method integer getRaidId() 获取RAID类型ID。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取RAID信息
 * @method void setRaidId(integer $RaidId) 设置RAID类型ID。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取RAID信息
 * @method integer getGoodsCount() 获取购买数量
 * @method void setGoodsCount(integer $GoodsCount) 设置购买数量
 * @method string getVpcId() 获取购买至私有网络ID
 * @method void setVpcId(string $VpcId) 设置购买至私有网络ID
 * @method string getSubnetId() 获取购买至子网ID
 * @method void setSubnetId(string $SubnetId) 设置购买至子网ID
 * @method string getDeviceClassCode() 获取购买的机型ID。通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)获取机型信息
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置购买的机型ID。通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)获取机型信息
 * @method string getTimeUnit() 获取购买时长单位，取值：M(月) D(天)
 * @method void setTimeUnit(string $TimeUnit) 设置购买时长单位，取值：M(月) D(天)
 * @method integer getTimeSpan() 获取购买时长
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长
 * @method integer getNeedSecurityAgent() 获取是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method void setNeedSecurityAgent(integer $NeedSecurityAgent) 设置是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method integer getNeedMonitorAgent() 获取是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method void setNeedMonitorAgent(integer $NeedMonitorAgent) 设置是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method integer getNeedEMRAgent() 获取是否安装EMR Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method void setNeedEMRAgent(integer $NeedEMRAgent) 设置是否安装EMR Agent，取值：1(安装) 0(不安装)，默认取值0
 * @method integer getNeedEMRSoftware() 获取是否安装EMR软件包，取值：1(安装) 0(不安装)，默认取值0
 * @method void setNeedEMRSoftware(integer $NeedEMRSoftware) 设置是否安装EMR软件包，取值：1(安装) 0(不安装)，默认取值0
 * @method integer getApplyEip() 获取是否分配弹性公网IP，取值：1(分配) 0(不分配)，默认取值0
 * @method void setApplyEip(integer $ApplyEip) 设置是否分配弹性公网IP，取值：1(分配) 0(不分配)，默认取值0
 * @method string getEipPayMode() 获取弹性公网IP计费模式，取值：Flow(按流量计费) Bandwidth(按带宽计费)，默认取值Flow
 * @method void setEipPayMode(string $EipPayMode) 设置弹性公网IP计费模式，取值：Flow(按流量计费) Bandwidth(按带宽计费)，默认取值Flow
 * @method integer getEipBandwidth() 获取弹性公网IP带宽限制，单位Mb
 * @method void setEipBandwidth(integer $EipBandwidth) 设置弹性公网IP带宽限制，单位Mb
 * @method integer getIsZoning() 获取数据盘是否格式化，取值：1(格式化) 0(不格式化)，默认取值为1
 * @method void setIsZoning(integer $IsZoning) 设置数据盘是否格式化，取值：1(格式化) 0(不格式化)，默认取值为1
 * @method integer getCpmPayMode() 获取物理机计费模式，取值：1(预付费) 2(后付费)，默认取值为1
 * @method void setCpmPayMode(integer $CpmPayMode) 设置物理机计费模式，取值：1(预付费) 2(后付费)，默认取值为1
 * @method string getImageId() 获取自定义镜像ID，取值生效时用自定义镜像部署物理机
 * @method void setImageId(string $ImageId) 设置自定义镜像ID，取值生效时用自定义镜像部署物理机
 * @method string getPassword() 获取设置Linux root或Windows Administrator的密码
 * @method void setPassword(string $Password) 设置设置Linux root或Windows Administrator的密码
 * @method integer getAutoRenewFlag() 获取自动续费标志位，取值：1(自动续费) 0(不自动续费)，默认取值0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志位，取值：1(自动续费) 0(不自动续费)，默认取值0
 * @method integer getSysRootSpace() 获取系统盘根分区大小，单位为G，默认取值10G。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取根分区信息
 * @method void setSysRootSpace(integer $SysRootSpace) 设置系统盘根分区大小，单位为G，默认取值10G。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取根分区信息
 * @method integer getSysSwaporuefiSpace() 获取系统盘swap分区或/boot/efi分区的大小，单位为G。若是uefi启动的机器，分区为/boot/efi，且此值是默认是2G。 普通机器为swap分区，可以不指定此分区。 机型是否是uefi启动，参见接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)
 * @method void setSysSwaporuefiSpace(integer $SysSwaporuefiSpace) 设置系统盘swap分区或/boot/efi分区的大小，单位为G。若是uefi启动的机器，分区为/boot/efi，且此值是默认是2G。 普通机器为swap分区，可以不指定此分区。 机型是否是uefi启动，参见接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)
 * @method integer getSysUsrlocalSpace() 获取/usr/local分区大小，单位为G
 * @method void setSysUsrlocalSpace(integer $SysUsrlocalSpace) 设置/usr/local分区大小，单位为G
 * @method integer getSysDataSpace() 获取/data分区大小，单位为G。如果系统盘还有剩余大小，会分配给/data分区。（特殊情况：如果剩余空间不足10G，并且没有指定/data分区，则剩余空间会分配给Root分区）
 * @method void setSysDataSpace(integer $SysDataSpace) 设置/data分区大小，单位为G。如果系统盘还有剩余大小，会分配给/data分区。（特殊情况：如果剩余空间不足10G，并且没有指定/data分区，则剩余空间会分配给Root分区）
 * @method integer getHyperThreading() 获取是否开启超线程，取值：1(开启) 0(关闭)，默认取值1
 * @method void setHyperThreading(integer $HyperThreading) 设置是否开启超线程，取值：1(开启) 0(关闭)，默认取值1
 * @method array getLanIps() 获取指定的内网IP列表，不指定时自动分配
 * @method void setLanIps(array $LanIps) 设置指定的内网IP列表，不指定时自动分配
 * @method array getAliases() 获取设备名称列表
 * @method void setAliases(array $Aliases) 设置设备名称列表
 * @method integer getCpuId() 获取CPU型号ID，自定义机型需要传入，取值：
<br/><li>1: E5-2620v3 (6核) &#42; 2</li><li>2: E5-2680v4 (14核) &#42; 2</li><li>3: E5-2670v3 (12核) &#42; 2</li><li>4: E5-2620v4 (8核) &#42; 2</li><li>5: 4110 (8核) &#42; 2</li><li>6: 6133 (20核) &#42; 2</li><br/>
 * @method void setCpuId(integer $CpuId) 设置CPU型号ID，自定义机型需要传入，取值：
<br/><li>1: E5-2620v3 (6核) &#42; 2</li><li>2: E5-2680v4 (14核) &#42; 2</li><li>3: E5-2670v3 (12核) &#42; 2</li><li>4: E5-2620v4 (8核) &#42; 2</li><li>5: 4110 (8核) &#42; 2</li><li>6: 6133 (20核) &#42; 2</li><br/>
 * @method integer getContainRaidCard() 获取是否有RAID卡，取值：1(有) 0(无)，自定义机型需要传入
 * @method void setContainRaidCard(integer $ContainRaidCard) 设置是否有RAID卡，取值：1(有) 0(无)，自定义机型需要传入
 * @method integer getMemSize() 获取内存大小，单位为G，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method void setMemSize(integer $MemSize) 设置内存大小，单位为G，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method integer getSystemDiskTypeId() 获取系统盘ID，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method void setSystemDiskTypeId(integer $SystemDiskTypeId) 设置系统盘ID，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method integer getSystemDiskCount() 获取系统盘数量，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method void setSystemDiskCount(integer $SystemDiskCount) 设置系统盘数量，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method integer getDataDiskTypeId() 获取数据盘ID，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method void setDataDiskTypeId(integer $DataDiskTypeId) 设置数据盘ID，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method integer getDataDiskCount() 获取数据盘数量，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method void setDataDiskCount(integer $DataDiskCount) 设置数据盘数量，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
 * @method array getTags() 获取绑定的标签列表
 * @method void setTags(array $Tags) 设置绑定的标签列表
 * @method string getFileSystem() 获取指定数据盘的文件系统格式，当前支持 EXT4和XFS选项， 默认为EXT4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效
 * @method void setFileSystem(string $FileSystem) 设置指定数据盘的文件系统格式，当前支持 EXT4和XFS选项， 默认为EXT4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效
 * @method string getBuySession() 获取此参数是为了防止重复发货。如果两次调用传入相同的BuySession，只会发货一次。 不要以设备别名作为BuySession，这样只会第一次购买成功。参数长度为128位，合法字符为大小字母，数字，下划线，横线。
 * @method void setBuySession(string $BuySession) 设置此参数是为了防止重复发货。如果两次调用传入相同的BuySession，只会发货一次。 不要以设备别名作为BuySession，这样只会第一次购买成功。参数长度为128位，合法字符为大小字母，数字，下划线，横线。
 * @method string getSgId() 获取绑定已有的安全组ID。仅在NeedSecurityAgent为1时生效
 * @method void setSgId(string $SgId) 设置绑定已有的安全组ID。仅在NeedSecurityAgent为1时生效
 * @method string getTemplateId() 获取安全组模板ID，由模板创建新安全组并绑定。TemplateId和SgId不能同时传入
 * @method void setTemplateId(string $TemplateId) 设置安全组模板ID，由模板创建新安全组并绑定。TemplateId和SgId不能同时传入
 */
class BuyDevicesRequest extends AbstractModel
{
    /**
     * @var string 可用区ID。通过接口[查询地域以及可用区(DescribeRegions)](https://cloud.tencent.com/document/api/386/33564)获取可用区信息
     */
    public $Zone;

    /**
     * @var integer 部署服务器的操作系统ID。通过接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/product/386/32902)获取操作系统信息
     */
    public $OsTypeId;

    /**
     * @var integer RAID类型ID。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取RAID信息
     */
    public $RaidId;

    /**
     * @var integer 购买数量
     */
    public $GoodsCount;

    /**
     * @var string 购买至私有网络ID
     */
    public $VpcId;

    /**
     * @var string 购买至子网ID
     */
    public $SubnetId;

    /**
     * @var string 购买的机型ID。通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)获取机型信息
     */
    public $DeviceClassCode;

    /**
     * @var string 购买时长单位，取值：M(月) D(天)
     */
    public $TimeUnit;

    /**
     * @var integer 购买时长
     */
    public $TimeSpan;

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
     * @var integer 是否分配弹性公网IP，取值：1(分配) 0(不分配)，默认取值0
     */
    public $ApplyEip;

    /**
     * @var string 弹性公网IP计费模式，取值：Flow(按流量计费) Bandwidth(按带宽计费)，默认取值Flow
     */
    public $EipPayMode;

    /**
     * @var integer 弹性公网IP带宽限制，单位Mb
     */
    public $EipBandwidth;

    /**
     * @var integer 数据盘是否格式化，取值：1(格式化) 0(不格式化)，默认取值为1
     */
    public $IsZoning;

    /**
     * @var integer 物理机计费模式，取值：1(预付费) 2(后付费)，默认取值为1
     */
    public $CpmPayMode;

    /**
     * @var string 自定义镜像ID，取值生效时用自定义镜像部署物理机
     */
    public $ImageId;

    /**
     * @var string 设置Linux root或Windows Administrator的密码
     */
    public $Password;

    /**
     * @var integer 自动续费标志位，取值：1(自动续费) 0(不自动续费)，默认取值0
     */
    public $AutoRenewFlag;

    /**
     * @var integer 系统盘根分区大小，单位为G，默认取值10G。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取根分区信息
     */
    public $SysRootSpace;

    /**
     * @var integer 系统盘swap分区或/boot/efi分区的大小，单位为G。若是uefi启动的机器，分区为/boot/efi，且此值是默认是2G。 普通机器为swap分区，可以不指定此分区。 机型是否是uefi启动，参见接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)
     */
    public $SysSwaporuefiSpace;

    /**
     * @var integer /usr/local分区大小，单位为G
     */
    public $SysUsrlocalSpace;

    /**
     * @var integer /data分区大小，单位为G。如果系统盘还有剩余大小，会分配给/data分区。（特殊情况：如果剩余空间不足10G，并且没有指定/data分区，则剩余空间会分配给Root分区）
     */
    public $SysDataSpace;

    /**
     * @var integer 是否开启超线程，取值：1(开启) 0(关闭)，默认取值1
     */
    public $HyperThreading;

    /**
     * @var array 指定的内网IP列表，不指定时自动分配
     */
    public $LanIps;

    /**
     * @var array 设备名称列表
     */
    public $Aliases;

    /**
     * @var integer CPU型号ID，自定义机型需要传入，取值：
<br/><li>1: E5-2620v3 (6核) &#42; 2</li><li>2: E5-2680v4 (14核) &#42; 2</li><li>3: E5-2670v3 (12核) &#42; 2</li><li>4: E5-2620v4 (8核) &#42; 2</li><li>5: 4110 (8核) &#42; 2</li><li>6: 6133 (20核) &#42; 2</li><br/>
     */
    public $CpuId;

    /**
     * @var integer 是否有RAID卡，取值：1(有) 0(无)，自定义机型需要传入
     */
    public $ContainRaidCard;

    /**
     * @var integer 内存大小，单位为G，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     */
    public $MemSize;

    /**
     * @var integer 系统盘ID，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     */
    public $SystemDiskTypeId;

    /**
     * @var integer 系统盘数量，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     */
    public $SystemDiskCount;

    /**
     * @var integer 数据盘ID，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     */
    public $DataDiskTypeId;

    /**
     * @var integer 数据盘数量，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     */
    public $DataDiskCount;

    /**
     * @var array 绑定的标签列表
     */
    public $Tags;

    /**
     * @var string 指定数据盘的文件系统格式，当前支持 EXT4和XFS选项， 默认为EXT4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效
     */
    public $FileSystem;

    /**
     * @var string 此参数是为了防止重复发货。如果两次调用传入相同的BuySession，只会发货一次。 不要以设备别名作为BuySession，这样只会第一次购买成功。参数长度为128位，合法字符为大小字母，数字，下划线，横线。
     */
    public $BuySession;

    /**
     * @var string 绑定已有的安全组ID。仅在NeedSecurityAgent为1时生效
     */
    public $SgId;

    /**
     * @var string 安全组模板ID，由模板创建新安全组并绑定。TemplateId和SgId不能同时传入
     */
    public $TemplateId;

    /**
     * @param string $Zone 可用区ID。通过接口[查询地域以及可用区(DescribeRegions)](https://cloud.tencent.com/document/api/386/33564)获取可用区信息
     * @param integer $OsTypeId 部署服务器的操作系统ID。通过接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/product/386/32902)获取操作系统信息
     * @param integer $RaidId RAID类型ID。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取RAID信息
     * @param integer $GoodsCount 购买数量
     * @param string $VpcId 购买至私有网络ID
     * @param string $SubnetId 购买至子网ID
     * @param string $DeviceClassCode 购买的机型ID。通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)获取机型信息
     * @param string $TimeUnit 购买时长单位，取值：M(月) D(天)
     * @param integer $TimeSpan 购买时长
     * @param integer $NeedSecurityAgent 是否安装安全Agent，取值：1(安装) 0(不安装)，默认取值0
     * @param integer $NeedMonitorAgent 是否安装监控Agent，取值：1(安装) 0(不安装)，默认取值0
     * @param integer $NeedEMRAgent 是否安装EMR Agent，取值：1(安装) 0(不安装)，默认取值0
     * @param integer $NeedEMRSoftware 是否安装EMR软件包，取值：1(安装) 0(不安装)，默认取值0
     * @param integer $ApplyEip 是否分配弹性公网IP，取值：1(分配) 0(不分配)，默认取值0
     * @param string $EipPayMode 弹性公网IP计费模式，取值：Flow(按流量计费) Bandwidth(按带宽计费)，默认取值Flow
     * @param integer $EipBandwidth 弹性公网IP带宽限制，单位Mb
     * @param integer $IsZoning 数据盘是否格式化，取值：1(格式化) 0(不格式化)，默认取值为1
     * @param integer $CpmPayMode 物理机计费模式，取值：1(预付费) 2(后付费)，默认取值为1
     * @param string $ImageId 自定义镜像ID，取值生效时用自定义镜像部署物理机
     * @param string $Password 设置Linux root或Windows Administrator的密码
     * @param integer $AutoRenewFlag 自动续费标志位，取值：1(自动续费) 0(不自动续费)，默认取值0
     * @param integer $SysRootSpace 系统盘根分区大小，单位为G，默认取值10G。通过接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/api/386/32910)获取根分区信息
     * @param integer $SysSwaporuefiSpace 系统盘swap分区或/boot/efi分区的大小，单位为G。若是uefi启动的机器，分区为/boot/efi，且此值是默认是2G。 普通机器为swap分区，可以不指定此分区。 机型是否是uefi启动，参见接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)
     * @param integer $SysUsrlocalSpace /usr/local分区大小，单位为G
     * @param integer $SysDataSpace /data分区大小，单位为G。如果系统盘还有剩余大小，会分配给/data分区。（特殊情况：如果剩余空间不足10G，并且没有指定/data分区，则剩余空间会分配给Root分区）
     * @param integer $HyperThreading 是否开启超线程，取值：1(开启) 0(关闭)，默认取值1
     * @param array $LanIps 指定的内网IP列表，不指定时自动分配
     * @param array $Aliases 设备名称列表
     * @param integer $CpuId CPU型号ID，自定义机型需要传入，取值：
<br/><li>1: E5-2620v3 (6核) &#42; 2</li><li>2: E5-2680v4 (14核) &#42; 2</li><li>3: E5-2670v3 (12核) &#42; 2</li><li>4: E5-2620v4 (8核) &#42; 2</li><li>5: 4110 (8核) &#42; 2</li><li>6: 6133 (20核) &#42; 2</li><br/>
     * @param integer $ContainRaidCard 是否有RAID卡，取值：1(有) 0(无)，自定义机型需要传入
     * @param integer $MemSize 内存大小，单位为G，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     * @param integer $SystemDiskTypeId 系统盘ID，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     * @param integer $SystemDiskCount 系统盘数量，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     * @param integer $DataDiskTypeId 数据盘ID，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     * @param integer $DataDiskCount 数据盘数量，自定义机型需要传入。取值参考接口[查询自定义机型部件信息(DescribeHardwareSpecification)](https://cloud.tencent.com/document/api/386/33565)返回值
     * @param array $Tags 绑定的标签列表
     * @param string $FileSystem 指定数据盘的文件系统格式，当前支持 EXT4和XFS选项， 默认为EXT4。 参数适用于数据盘和Linux， 且在IsZoning为1时生效
     * @param string $BuySession 此参数是为了防止重复发货。如果两次调用传入相同的BuySession，只会发货一次。 不要以设备别名作为BuySession，这样只会第一次购买成功。参数长度为128位，合法字符为大小字母，数字，下划线，横线。
     * @param string $SgId 绑定已有的安全组ID。仅在NeedSecurityAgent为1时生效
     * @param string $TemplateId 安全组模板ID，由模板创建新安全组并绑定。TemplateId和SgId不能同时传入
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("OsTypeId",$param) and $param["OsTypeId"] !== null) {
            $this->OsTypeId = $param["OsTypeId"];
        }

        if (array_key_exists("RaidId",$param) and $param["RaidId"] !== null) {
            $this->RaidId = $param["RaidId"];
        }

        if (array_key_exists("GoodsCount",$param) and $param["GoodsCount"] !== null) {
            $this->GoodsCount = $param["GoodsCount"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
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

        if (array_key_exists("ApplyEip",$param) and $param["ApplyEip"] !== null) {
            $this->ApplyEip = $param["ApplyEip"];
        }

        if (array_key_exists("EipPayMode",$param) and $param["EipPayMode"] !== null) {
            $this->EipPayMode = $param["EipPayMode"];
        }

        if (array_key_exists("EipBandwidth",$param) and $param["EipBandwidth"] !== null) {
            $this->EipBandwidth = $param["EipBandwidth"];
        }

        if (array_key_exists("IsZoning",$param) and $param["IsZoning"] !== null) {
            $this->IsZoning = $param["IsZoning"];
        }

        if (array_key_exists("CpmPayMode",$param) and $param["CpmPayMode"] !== null) {
            $this->CpmPayMode = $param["CpmPayMode"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
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

        if (array_key_exists("SysDataSpace",$param) and $param["SysDataSpace"] !== null) {
            $this->SysDataSpace = $param["SysDataSpace"];
        }

        if (array_key_exists("HyperThreading",$param) and $param["HyperThreading"] !== null) {
            $this->HyperThreading = $param["HyperThreading"];
        }

        if (array_key_exists("LanIps",$param) and $param["LanIps"] !== null) {
            $this->LanIps = $param["LanIps"];
        }

        if (array_key_exists("Aliases",$param) and $param["Aliases"] !== null) {
            $this->Aliases = $param["Aliases"];
        }

        if (array_key_exists("CpuId",$param) and $param["CpuId"] !== null) {
            $this->CpuId = $param["CpuId"];
        }

        if (array_key_exists("ContainRaidCard",$param) and $param["ContainRaidCard"] !== null) {
            $this->ContainRaidCard = $param["ContainRaidCard"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("SystemDiskTypeId",$param) and $param["SystemDiskTypeId"] !== null) {
            $this->SystemDiskTypeId = $param["SystemDiskTypeId"];
        }

        if (array_key_exists("SystemDiskCount",$param) and $param["SystemDiskCount"] !== null) {
            $this->SystemDiskCount = $param["SystemDiskCount"];
        }

        if (array_key_exists("DataDiskTypeId",$param) and $param["DataDiskTypeId"] !== null) {
            $this->DataDiskTypeId = $param["DataDiskTypeId"];
        }

        if (array_key_exists("DataDiskCount",$param) and $param["DataDiskCount"] !== null) {
            $this->DataDiskCount = $param["DataDiskCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("BuySession",$param) and $param["BuySession"] !== null) {
            $this->BuySession = $param["BuySession"];
        }

        if (array_key_exists("SgId",$param) and $param["SgId"] !== null) {
            $this->SgId = $param["SgId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
