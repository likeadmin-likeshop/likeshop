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
 * DescribeDeviceInventory请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getDeviceClassCode() 获取设备型号
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置设备型号
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method integer getCpuId() 获取CPU型号ID，查询自定义机型时必填
 * @method void setCpuId(integer $CpuId) 设置CPU型号ID，查询自定义机型时必填
 * @method integer getMemSize() 获取内存大小，单位为G，查询自定义机型时必填
 * @method void setMemSize(integer $MemSize) 设置内存大小，单位为G，查询自定义机型时必填
 * @method integer getContainRaidCard() 获取是否有RAID卡，取值：1(有) 0(无)，查询自定义机型时必填
 * @method void setContainRaidCard(integer $ContainRaidCard) 设置是否有RAID卡，取值：1(有) 0(无)，查询自定义机型时必填
 * @method integer getSystemDiskTypeId() 获取系统盘类型ID，查询自定义机型时必填
 * @method void setSystemDiskTypeId(integer $SystemDiskTypeId) 设置系统盘类型ID，查询自定义机型时必填
 * @method integer getSystemDiskCount() 获取系统盘数量，查询自定义机型时必填
 * @method void setSystemDiskCount(integer $SystemDiskCount) 设置系统盘数量，查询自定义机型时必填
 * @method integer getDataDiskTypeId() 获取数据盘类型ID，查询自定义机型时可填
 * @method void setDataDiskTypeId(integer $DataDiskTypeId) 设置数据盘类型ID，查询自定义机型时可填
 * @method integer getDataDiskCount() 获取数据盘数量，查询自定义机型时可填
 * @method void setDataDiskCount(integer $DataDiskCount) 设置数据盘数量，查询自定义机型时可填
 */
class DescribeDeviceInventoryRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 设备型号
     */
    public $DeviceClassCode;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var integer CPU型号ID，查询自定义机型时必填
     */
    public $CpuId;

    /**
     * @var integer 内存大小，单位为G，查询自定义机型时必填
     */
    public $MemSize;

    /**
     * @var integer 是否有RAID卡，取值：1(有) 0(无)，查询自定义机型时必填
     */
    public $ContainRaidCard;

    /**
     * @var integer 系统盘类型ID，查询自定义机型时必填
     */
    public $SystemDiskTypeId;

    /**
     * @var integer 系统盘数量，查询自定义机型时必填
     */
    public $SystemDiskCount;

    /**
     * @var integer 数据盘类型ID，查询自定义机型时可填
     */
    public $DataDiskTypeId;

    /**
     * @var integer 数据盘数量，查询自定义机型时可填
     */
    public $DataDiskCount;

    /**
     * @param string $Zone 可用区
     * @param string $DeviceClassCode 设备型号
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param integer $CpuId CPU型号ID，查询自定义机型时必填
     * @param integer $MemSize 内存大小，单位为G，查询自定义机型时必填
     * @param integer $ContainRaidCard 是否有RAID卡，取值：1(有) 0(无)，查询自定义机型时必填
     * @param integer $SystemDiskTypeId 系统盘类型ID，查询自定义机型时必填
     * @param integer $SystemDiskCount 系统盘数量，查询自定义机型时必填
     * @param integer $DataDiskTypeId 数据盘类型ID，查询自定义机型时可填
     * @param integer $DataDiskCount 数据盘数量，查询自定义机型时可填
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

        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CpuId",$param) and $param["CpuId"] !== null) {
            $this->CpuId = $param["CpuId"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("ContainRaidCard",$param) and $param["ContainRaidCard"] !== null) {
            $this->ContainRaidCard = $param["ContainRaidCard"];
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
    }
}
