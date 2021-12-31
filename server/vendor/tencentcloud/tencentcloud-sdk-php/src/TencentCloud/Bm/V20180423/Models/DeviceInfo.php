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
 * 物理机信息
 *
 * @method string getInstanceId() 获取设备唯一ID
 * @method void setInstanceId(string $InstanceId) 设置设备唯一ID
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method integer getDeviceStatus() 获取设备状态ID，取值：<li>1：申领设备中</li><li>2：初始化中</li><li>4：运营中</li><li>7：隔离中</li><li>8：已隔离</li><li>10：解隔离中</li><li>16：故障中</li>
 * @method void setDeviceStatus(integer $DeviceStatus) 设置设备状态ID，取值：<li>1：申领设备中</li><li>2：初始化中</li><li>4：运营中</li><li>7：隔离中</li><li>8：已隔离</li><li>10：解隔离中</li><li>16：故障中</li>
 * @method integer getOperateStatus() 获取设备操作状态ID，取值：
<li>1：运行中</li><li>2：正在关机</li><li>3：已关机</li><li>5：正在开机</li><li>7：重启中</li><li>9：重装中</li><li>12：绑定EIP</li><li>13：解绑EIP</li><li>14：绑定LB</li><li>15：解绑LB</li><li>19：更换IP中</li><li>20：制作镜像中</li><li>21：制作镜像失败</li><li>23：故障待重装</li>
 * @method void setOperateStatus(integer $OperateStatus) 设置设备操作状态ID，取值：
<li>1：运行中</li><li>2：正在关机</li><li>3：已关机</li><li>5：正在开机</li><li>7：重启中</li><li>9：重装中</li><li>12：绑定EIP</li><li>13：解绑EIP</li><li>14：绑定LB</li><li>15：解绑LB</li><li>19：更换IP中</li><li>20：制作镜像中</li><li>21：制作镜像失败</li><li>23：故障待重装</li>
 * @method integer getOsTypeId() 获取操作系统ID，参考接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/product/386/32902)
 * @method void setOsTypeId(integer $OsTypeId) 设置操作系统ID，参考接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/product/386/32902)
 * @method integer getRaidId() 获取RAID类型ID，参考接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/product/386/32910)
 * @method void setRaidId(integer $RaidId) 设置RAID类型ID，参考接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/product/386/32910)
 * @method string getAlias() 获取设备别名
 * @method void setAlias(string $Alias) 设置设备别名
 * @method integer getAppId() 获取用户AppId
 * @method void setAppId(integer $AppId) 设置用户AppId
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getWanIp() 获取外网IP
 * @method void setWanIp(string $WanIp) 设置外网IP
 * @method string getLanIp() 获取内网IP
 * @method void setLanIp(string $LanIp) 设置内网IP
 * @method string getDeliverTime() 获取设备交付时间
 * @method void setDeliverTime(string $DeliverTime) 设置设备交付时间
 * @method string getDeadline() 获取设备到期时间
 * @method void setDeadline(string $Deadline) 设置设备到期时间
 * @method integer getAutoRenewFlag() 获取自动续费标识。0: 不自动续费; 1:自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标识。0: 不自动续费; 1:自动续费
 * @method string getDeviceClassCode() 获取设备类型
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置设备类型
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method integer getCpmPayMode() 获取计费模式。1: 预付费; 2: 后付费; 3:预付费转后付费中
 * @method void setCpmPayMode(integer $CpmPayMode) 设置计费模式。1: 预付费; 2: 后付费; 3:预付费转后付费中
 * @method string getDhcpIp() 获取带外IP
 * @method void setDhcpIp(string $DhcpIp) 设置带外IP
 * @method string getVpcName() 获取所在私有网络别名
 * @method void setVpcName(string $VpcName) 设置所在私有网络别名
 * @method string getSubnetName() 获取所在子网别名
 * @method void setSubnetName(string $SubnetName) 设置所在子网别名
 * @method string getVpcCidrBlock() 获取所在私有网络CIDR
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置所在私有网络CIDR
 * @method string getSubnetCidrBlock() 获取所在子网CIDR
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置所在子网CIDR
 * @method integer getIsLuckyDevice() 获取标识是否是竞价实例。0: 普通设备; 1: 竞价实例设备
 * @method void setIsLuckyDevice(integer $IsLuckyDevice) 设置标识是否是竞价实例。0: 普通设备; 1: 竞价实例设备
 */
class DeviceInfo extends AbstractModel
{
    /**
     * @var string 设备唯一ID
     */
    public $InstanceId;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var integer 设备状态ID，取值：<li>1：申领设备中</li><li>2：初始化中</li><li>4：运营中</li><li>7：隔离中</li><li>8：已隔离</li><li>10：解隔离中</li><li>16：故障中</li>
     */
    public $DeviceStatus;

    /**
     * @var integer 设备操作状态ID，取值：
<li>1：运行中</li><li>2：正在关机</li><li>3：已关机</li><li>5：正在开机</li><li>7：重启中</li><li>9：重装中</li><li>12：绑定EIP</li><li>13：解绑EIP</li><li>14：绑定LB</li><li>15：解绑LB</li><li>19：更换IP中</li><li>20：制作镜像中</li><li>21：制作镜像失败</li><li>23：故障待重装</li>
     */
    public $OperateStatus;

    /**
     * @var integer 操作系统ID，参考接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/product/386/32902)
     */
    public $OsTypeId;

    /**
     * @var integer RAID类型ID，参考接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/product/386/32910)
     */
    public $RaidId;

    /**
     * @var string 设备别名
     */
    public $Alias;

    /**
     * @var integer 用户AppId
     */
    public $AppId;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 外网IP
     */
    public $WanIp;

    /**
     * @var string 内网IP
     */
    public $LanIp;

    /**
     * @var string 设备交付时间
     */
    public $DeliverTime;

    /**
     * @var string 设备到期时间
     */
    public $Deadline;

    /**
     * @var integer 自动续费标识。0: 不自动续费; 1:自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 设备类型
     */
    public $DeviceClassCode;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var integer 计费模式。1: 预付费; 2: 后付费; 3:预付费转后付费中
     */
    public $CpmPayMode;

    /**
     * @var string 带外IP
     */
    public $DhcpIp;

    /**
     * @var string 所在私有网络别名
     */
    public $VpcName;

    /**
     * @var string 所在子网别名
     */
    public $SubnetName;

    /**
     * @var string 所在私有网络CIDR
     */
    public $VpcCidrBlock;

    /**
     * @var string 所在子网CIDR
     */
    public $SubnetCidrBlock;

    /**
     * @var integer 标识是否是竞价实例。0: 普通设备; 1: 竞价实例设备
     */
    public $IsLuckyDevice;

    /**
     * @param string $InstanceId 设备唯一ID
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param integer $DeviceStatus 设备状态ID，取值：<li>1：申领设备中</li><li>2：初始化中</li><li>4：运营中</li><li>7：隔离中</li><li>8：已隔离</li><li>10：解隔离中</li><li>16：故障中</li>
     * @param integer $OperateStatus 设备操作状态ID，取值：
<li>1：运行中</li><li>2：正在关机</li><li>3：已关机</li><li>5：正在开机</li><li>7：重启中</li><li>9：重装中</li><li>12：绑定EIP</li><li>13：解绑EIP</li><li>14：绑定LB</li><li>15：解绑LB</li><li>19：更换IP中</li><li>20：制作镜像中</li><li>21：制作镜像失败</li><li>23：故障待重装</li>
     * @param integer $OsTypeId 操作系统ID，参考接口[查询操作系统信息(DescribeOsInfo)](https://cloud.tencent.com/document/product/386/32902)
     * @param integer $RaidId RAID类型ID，参考接口[查询机型RAID方式以及系统盘大小(DescribeDeviceClassPartition)](https://cloud.tencent.com/document/product/386/32910)
     * @param string $Alias 设备别名
     * @param integer $AppId 用户AppId
     * @param string $Zone 可用区
     * @param string $WanIp 外网IP
     * @param string $LanIp 内网IP
     * @param string $DeliverTime 设备交付时间
     * @param string $Deadline 设备到期时间
     * @param integer $AutoRenewFlag 自动续费标识。0: 不自动续费; 1:自动续费
     * @param string $DeviceClassCode 设备类型
     * @param array $Tags 标签列表
     * @param integer $CpmPayMode 计费模式。1: 预付费; 2: 后付费; 3:预付费转后付费中
     * @param string $DhcpIp 带外IP
     * @param string $VpcName 所在私有网络别名
     * @param string $SubnetName 所在子网别名
     * @param string $VpcCidrBlock 所在私有网络CIDR
     * @param string $SubnetCidrBlock 所在子网CIDR
     * @param integer $IsLuckyDevice 标识是否是竞价实例。0: 普通设备; 1: 竞价实例设备
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DeviceStatus",$param) and $param["DeviceStatus"] !== null) {
            $this->DeviceStatus = $param["DeviceStatus"];
        }

        if (array_key_exists("OperateStatus",$param) and $param["OperateStatus"] !== null) {
            $this->OperateStatus = $param["OperateStatus"];
        }

        if (array_key_exists("OsTypeId",$param) and $param["OsTypeId"] !== null) {
            $this->OsTypeId = $param["OsTypeId"];
        }

        if (array_key_exists("RaidId",$param) and $param["RaidId"] !== null) {
            $this->RaidId = $param["RaidId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("DeliverTime",$param) and $param["DeliverTime"] !== null) {
            $this->DeliverTime = $param["DeliverTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CpmPayMode",$param) and $param["CpmPayMode"] !== null) {
            $this->CpmPayMode = $param["CpmPayMode"];
        }

        if (array_key_exists("DhcpIp",$param) and $param["DhcpIp"] !== null) {
            $this->DhcpIp = $param["DhcpIp"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }

        if (array_key_exists("IsLuckyDevice",$param) and $param["IsLuckyDevice"] !== null) {
            $this->IsLuckyDevice = $param["IsLuckyDevice"];
        }
    }
}
