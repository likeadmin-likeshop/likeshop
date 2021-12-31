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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点硬件信息
 *
 * @method integer getAppId() 获取用户APPID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户APPID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerialNo() 获取序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialNo(string $SerialNo) 设置序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderNo() 获取机器实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderNo(string $OrderNo) 设置机器实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanIp() 获取master节点绑定外网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanIp(string $WanIp) 设置master节点绑定外网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlag() 获取节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlag(integer $Flag) 设置节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpec() 获取节点规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(string $Spec) 设置节点规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuNum() 获取节点核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuNum(integer $CpuNum) 设置节点核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemSize() 获取节点内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemSize(integer $MemSize) 设置节点内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemDesc() 获取节点内存描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemDesc(string $MemDesc) 设置节点内存描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取节点所在region
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置节点所在region
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取节点所在Zone
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置节点所在Zone
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplyTime() 获取申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyTime(string $ApplyTime) 设置申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFreeTime() 获取释放时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreeTime(string $FreeTime) 设置释放时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskSize() 获取硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(string $DiskSize) 设置硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameTag() 获取节点描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameTag(string $NameTag) 设置节点描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServices() 获取节点部署服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServices(string $Services) 设置节点部署服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageType() 获取磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(integer $StorageType) 设置磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRootSize() 获取系统盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootSize(integer $RootSize) 设置系统盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChargeType() 获取付费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(integer $ChargeType) 设置付费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdbIp() 获取数据库IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdbIp(string $CdbIp) 设置数据库IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCdbPort() 获取数据库端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdbPort(integer $CdbPort) 设置数据库端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHwDiskSize() 获取硬盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHwDiskSize(integer $HwDiskSize) 设置硬盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHwDiskSizeDesc() 获取硬盘容量描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHwDiskSizeDesc(string $HwDiskSizeDesc) 设置硬盘容量描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHwMemSize() 获取内存容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHwMemSize(integer $HwMemSize) 设置内存容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHwMemSizeDesc() 获取内存容量描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHwMemSizeDesc(string $HwMemSizeDesc) 设置内存容量描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmrResourceId() 获取节点资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmrResourceId(string $EmrResourceId) 设置节点资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAutoRenew() 获取续费标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAutoRenew(integer $IsAutoRenew) 设置续费标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceClass() 获取设备标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceClass(string $DeviceClass) 设置设备标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMutable() 获取支持变配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMutable(integer $Mutable) 设置支持变配
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMCMultiDisk() 获取多云盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCMultiDisk(array $MCMultiDisk) 设置多云盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method CdbInfo getCdbNodeInfo() 获取数据库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdbNodeInfo(CdbInfo $CdbNodeInfo) 设置数据库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDestroyable() 获取此节点是否可销毁，1可销毁，0不可销毁
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestroyable(integer $Destroyable) 设置此节点是否可销毁，1可销毁，0不可销毁
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取节点绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置节点绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoFlag() 获取是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoFlag(integer $AutoFlag) 设置是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHardwareResourceType() 获取资源类型, host/pod
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHardwareResourceType(string $HardwareResourceType) 设置资源类型, host/pod
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDynamicSpec() 获取是否浮动规格，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDynamicSpec(integer $IsDynamicSpec) 设置是否浮动规格，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDynamicPodSpec() 获取浮动规格值json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDynamicPodSpec(string $DynamicPodSpec) 设置浮动规格值json字符串
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeHardwareInfo extends AbstractModel
{
    /**
     * @var integer 用户APPID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 序列号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialNo;

    /**
     * @var string 机器实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderNo;

    /**
     * @var string master节点绑定外网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanIp;

    /**
     * @var integer 节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Flag;

    /**
     * @var string 节点规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

    /**
     * @var integer 节点核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuNum;

    /**
     * @var integer 节点内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemSize;

    /**
     * @var string 节点内存描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemDesc;

    /**
     * @var integer 节点所在region
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var integer 节点所在Zone
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyTime;

    /**
     * @var string 释放时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreeTime;

    /**
     * @var string 硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var string 节点描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameTag;

    /**
     * @var string 节点部署服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Services;

    /**
     * @var integer 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var integer 系统盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootSize;

    /**
     * @var integer 付费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string 数据库IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdbIp;

    /**
     * @var integer 数据库端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdbPort;

    /**
     * @var integer 硬盘容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HwDiskSize;

    /**
     * @var string 硬盘容量描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HwDiskSizeDesc;

    /**
     * @var integer 内存容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HwMemSize;

    /**
     * @var string 内存容量描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HwMemSizeDesc;

    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 节点资源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmrResourceId;

    /**
     * @var integer 续费标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAutoRenew;

    /**
     * @var string 设备标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceClass;

    /**
     * @var integer 支持变配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mutable;

    /**
     * @var array 多云盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MCMultiDisk;

    /**
     * @var CdbInfo 数据库信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdbNodeInfo;

    /**
     * @var string 内网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer 此节点是否可销毁，1可销毁，0不可销毁
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destroyable;

    /**
     * @var array 节点绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoFlag;

    /**
     * @var string 资源类型, host/pod
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HardwareResourceType;

    /**
     * @var integer 是否浮动规格，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDynamicSpec;

    /**
     * @var string 浮动规格值json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DynamicPodSpec;

    /**
     * @param integer $AppId 用户APPID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerialNo 序列号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderNo 机器实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanIp master节点绑定外网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Flag 节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Spec 节点规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuNum 节点核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemSize 节点内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemDesc 节点内存描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 节点所在region
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 节点所在Zone
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplyTime 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FreeTime 释放时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskSize 硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameTag 节点描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Services 节点部署服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageType 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RootSize 系统盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChargeType 付费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdbIp 数据库IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CdbPort 数据库端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HwDiskSize 硬盘容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HwDiskSizeDesc 硬盘容量描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HwMemSize 内存容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HwMemSizeDesc 内存容量描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EmrResourceId 节点资源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAutoRenew 续费标志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceClass 设备标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Mutable 支持变配
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MCMultiDisk 多云盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param CdbInfo $CdbNodeInfo 数据库信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip 内网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Destroyable 此节点是否可销毁，1可销毁，0不可销毁
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 节点绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoFlag 是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HardwareResourceType 资源类型, host/pod
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDynamicSpec 是否浮动规格，1是，0否
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DynamicPodSpec 浮动规格值json字符串
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemDesc",$param) and $param["MemDesc"] !== null) {
            $this->MemDesc = $param["MemDesc"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("FreeTime",$param) and $param["FreeTime"] !== null) {
            $this->FreeTime = $param["FreeTime"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NameTag",$param) and $param["NameTag"] !== null) {
            $this->NameTag = $param["NameTag"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            $this->RootSize = $param["RootSize"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("CdbIp",$param) and $param["CdbIp"] !== null) {
            $this->CdbIp = $param["CdbIp"];
        }

        if (array_key_exists("CdbPort",$param) and $param["CdbPort"] !== null) {
            $this->CdbPort = $param["CdbPort"];
        }

        if (array_key_exists("HwDiskSize",$param) and $param["HwDiskSize"] !== null) {
            $this->HwDiskSize = $param["HwDiskSize"];
        }

        if (array_key_exists("HwDiskSizeDesc",$param) and $param["HwDiskSizeDesc"] !== null) {
            $this->HwDiskSizeDesc = $param["HwDiskSizeDesc"];
        }

        if (array_key_exists("HwMemSize",$param) and $param["HwMemSize"] !== null) {
            $this->HwMemSize = $param["HwMemSize"];
        }

        if (array_key_exists("HwMemSizeDesc",$param) and $param["HwMemSizeDesc"] !== null) {
            $this->HwMemSizeDesc = $param["HwMemSizeDesc"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("EmrResourceId",$param) and $param["EmrResourceId"] !== null) {
            $this->EmrResourceId = $param["EmrResourceId"];
        }

        if (array_key_exists("IsAutoRenew",$param) and $param["IsAutoRenew"] !== null) {
            $this->IsAutoRenew = $param["IsAutoRenew"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("Mutable",$param) and $param["Mutable"] !== null) {
            $this->Mutable = $param["Mutable"];
        }

        if (array_key_exists("MCMultiDisk",$param) and $param["MCMultiDisk"] !== null) {
            $this->MCMultiDisk = [];
            foreach ($param["MCMultiDisk"] as $key => $value){
                $obj = new MultiDiskMC();
                $obj->deserialize($value);
                array_push($this->MCMultiDisk, $obj);
            }
        }

        if (array_key_exists("CdbNodeInfo",$param) and $param["CdbNodeInfo"] !== null) {
            $this->CdbNodeInfo = new CdbInfo();
            $this->CdbNodeInfo->deserialize($param["CdbNodeInfo"]);
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Destroyable",$param) and $param["Destroyable"] !== null) {
            $this->Destroyable = $param["Destroyable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoFlag",$param) and $param["AutoFlag"] !== null) {
            $this->AutoFlag = $param["AutoFlag"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("IsDynamicSpec",$param) and $param["IsDynamicSpec"] !== null) {
            $this->IsDynamicSpec = $param["IsDynamicSpec"];
        }

        if (array_key_exists("DynamicPodSpec",$param) and $param["DynamicPodSpec"] !== null) {
            $this->DynamicPodSpec = $param["DynamicPodSpec"];
        }
    }
}
