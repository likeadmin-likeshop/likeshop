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
 * RAID和设备分区结构
 *
 * @method integer getRaidId() 获取RAID类型ID
 * @method void setRaidId(integer $RaidId) 设置RAID类型ID
 * @method string getRaid() 获取RAID名称
 * @method void setRaid(string $Raid) 设置RAID名称
 * @method string getRaidDisplay() 获取RAID名称（前台展示用）
 * @method void setRaidDisplay(string $RaidDisplay) 设置RAID名称（前台展示用）
 * @method integer getSystemDiskSize() 获取系统盘总大小（单位GiB）
 * @method void setSystemDiskSize(integer $SystemDiskSize) 设置系统盘总大小（单位GiB）
 * @method integer getSysRootSpace() 获取系统盘/分区默认大小（单位GiB）
 * @method void setSysRootSpace(integer $SysRootSpace) 设置系统盘/分区默认大小（单位GiB）
 * @method integer getSysSwaporuefiSpace() 获取系统盘swap分区默认大小（单位GiB）
 * @method void setSysSwaporuefiSpace(integer $SysSwaporuefiSpace) 设置系统盘swap分区默认大小（单位GiB）
 * @method integer getSysUsrlocalSpace() 获取系统盘/usr/local分区默认大小（单位GiB）
 * @method void setSysUsrlocalSpace(integer $SysUsrlocalSpace) 设置系统盘/usr/local分区默认大小（单位GiB）
 * @method integer getSysDataSpace() 获取系统盘/data分区默认大小（单位GiB）
 * @method void setSysDataSpace(integer $SysDataSpace) 设置系统盘/data分区默认大小（单位GiB）
 * @method integer getSysIsUefiType() 获取设备是否是uefi启动方式。0:legacy启动; 1:uefi启动
 * @method void setSysIsUefiType(integer $SysIsUefiType) 设置设备是否是uefi启动方式。0:legacy启动; 1:uefi启动
 * @method integer getDataDiskSize() 获取数据盘总大小
 * @method void setDataDiskSize(integer $DataDiskSize) 设置数据盘总大小
 * @method array getDeviceDiskSizeInfoSet() 获取硬盘列表
 * @method void setDeviceDiskSizeInfoSet(array $DeviceDiskSizeInfoSet) 设置硬盘列表
 */
class DeviceClassPartitionInfo extends AbstractModel
{
    /**
     * @var integer RAID类型ID
     */
    public $RaidId;

    /**
     * @var string RAID名称
     */
    public $Raid;

    /**
     * @var string RAID名称（前台展示用）
     */
    public $RaidDisplay;

    /**
     * @var integer 系统盘总大小（单位GiB）
     */
    public $SystemDiskSize;

    /**
     * @var integer 系统盘/分区默认大小（单位GiB）
     */
    public $SysRootSpace;

    /**
     * @var integer 系统盘swap分区默认大小（单位GiB）
     */
    public $SysSwaporuefiSpace;

    /**
     * @var integer 系统盘/usr/local分区默认大小（单位GiB）
     */
    public $SysUsrlocalSpace;

    /**
     * @var integer 系统盘/data分区默认大小（单位GiB）
     */
    public $SysDataSpace;

    /**
     * @var integer 设备是否是uefi启动方式。0:legacy启动; 1:uefi启动
     */
    public $SysIsUefiType;

    /**
     * @var integer 数据盘总大小
     */
    public $DataDiskSize;

    /**
     * @var array 硬盘列表
     */
    public $DeviceDiskSizeInfoSet;

    /**
     * @param integer $RaidId RAID类型ID
     * @param string $Raid RAID名称
     * @param string $RaidDisplay RAID名称（前台展示用）
     * @param integer $SystemDiskSize 系统盘总大小（单位GiB）
     * @param integer $SysRootSpace 系统盘/分区默认大小（单位GiB）
     * @param integer $SysSwaporuefiSpace 系统盘swap分区默认大小（单位GiB）
     * @param integer $SysUsrlocalSpace 系统盘/usr/local分区默认大小（单位GiB）
     * @param integer $SysDataSpace 系统盘/data分区默认大小（单位GiB）
     * @param integer $SysIsUefiType 设备是否是uefi启动方式。0:legacy启动; 1:uefi启动
     * @param integer $DataDiskSize 数据盘总大小
     * @param array $DeviceDiskSizeInfoSet 硬盘列表
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
        if (array_key_exists("RaidId",$param) and $param["RaidId"] !== null) {
            $this->RaidId = $param["RaidId"];
        }

        if (array_key_exists("Raid",$param) and $param["Raid"] !== null) {
            $this->Raid = $param["Raid"];
        }

        if (array_key_exists("RaidDisplay",$param) and $param["RaidDisplay"] !== null) {
            $this->RaidDisplay = $param["RaidDisplay"];
        }

        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
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

        if (array_key_exists("SysIsUefiType",$param) and $param["SysIsUefiType"] !== null) {
            $this->SysIsUefiType = $param["SysIsUefiType"];
        }

        if (array_key_exists("DataDiskSize",$param) and $param["DataDiskSize"] !== null) {
            $this->DataDiskSize = $param["DataDiskSize"];
        }

        if (array_key_exists("DeviceDiskSizeInfoSet",$param) and $param["DeviceDiskSizeInfoSet"] !== null) {
            $this->DeviceDiskSizeInfoSet = [];
            foreach ($param["DeviceDiskSizeInfoSet"] as $key => $value){
                $obj = new DeviceDiskSizeInfo();
                $obj->deserialize($value);
                array_push($this->DeviceDiskSizeInfoSet, $obj);
            }
        }
    }
}
