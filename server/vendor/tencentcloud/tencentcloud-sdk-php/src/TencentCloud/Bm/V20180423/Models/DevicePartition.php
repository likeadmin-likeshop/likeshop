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
 * 物理机分区格式
 *
 * @method integer getSystemDiskSize() 获取系统盘大小
 * @method void setSystemDiskSize(integer $SystemDiskSize) 设置系统盘大小
 * @method integer getDataDiskSize() 获取数据盘大小
 * @method void setDataDiskSize(integer $DataDiskSize) 设置数据盘大小
 * @method boolean getSysIsUefiType() 获取是否兼容Uefi
 * @method void setSysIsUefiType(boolean $SysIsUefiType) 设置是否兼容Uefi
 * @method integer getSysRootSpace() 获取root分区大小
 * @method void setSysRootSpace(integer $SysRootSpace) 设置root分区大小
 * @method integer getSysSwaporuefiSpace() 获取Swaporuefi分区大小
 * @method void setSysSwaporuefiSpace(integer $SysSwaporuefiSpace) 设置Swaporuefi分区大小
 * @method integer getSysUsrlocalSpace() 获取Usrlocal分区大小
 * @method void setSysUsrlocalSpace(integer $SysUsrlocalSpace) 设置Usrlocal分区大小
 * @method integer getSysDataSpace() 获取data分区大小
 * @method void setSysDataSpace(integer $SysDataSpace) 设置data分区大小
 * @method array getDeviceDiskSizeInfoSet() 获取硬盘大小详情
 * @method void setDeviceDiskSizeInfoSet(array $DeviceDiskSizeInfoSet) 设置硬盘大小详情
 */
class DevicePartition extends AbstractModel
{
    /**
     * @var integer 系统盘大小
     */
    public $SystemDiskSize;

    /**
     * @var integer 数据盘大小
     */
    public $DataDiskSize;

    /**
     * @var boolean 是否兼容Uefi
     */
    public $SysIsUefiType;

    /**
     * @var integer root分区大小
     */
    public $SysRootSpace;

    /**
     * @var integer Swaporuefi分区大小
     */
    public $SysSwaporuefiSpace;

    /**
     * @var integer Usrlocal分区大小
     */
    public $SysUsrlocalSpace;

    /**
     * @var integer data分区大小
     */
    public $SysDataSpace;

    /**
     * @var array 硬盘大小详情
     */
    public $DeviceDiskSizeInfoSet;

    /**
     * @param integer $SystemDiskSize 系统盘大小
     * @param integer $DataDiskSize 数据盘大小
     * @param boolean $SysIsUefiType 是否兼容Uefi
     * @param integer $SysRootSpace root分区大小
     * @param integer $SysSwaporuefiSpace Swaporuefi分区大小
     * @param integer $SysUsrlocalSpace Usrlocal分区大小
     * @param integer $SysDataSpace data分区大小
     * @param array $DeviceDiskSizeInfoSet 硬盘大小详情
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
        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
        }

        if (array_key_exists("DataDiskSize",$param) and $param["DataDiskSize"] !== null) {
            $this->DataDiskSize = $param["DataDiskSize"];
        }

        if (array_key_exists("SysIsUefiType",$param) and $param["SysIsUefiType"] !== null) {
            $this->SysIsUefiType = $param["SysIsUefiType"];
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
