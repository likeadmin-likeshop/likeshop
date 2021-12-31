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
 * DescribeDeviceClassPartition请求参数结构体
 *
 * @method string getDeviceClassCode() 获取设备类型代号。代号通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询。标准机型需要传入此参数。虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置设备类型代号。代号通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询。标准机型需要传入此参数。虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
 * @method string getInstanceId() 获取需要查询自定义机型RAID信息时，传入自定义机型实例ID。InstanceId存在时其余参数失效。
 * @method void setInstanceId(string $InstanceId) 设置需要查询自定义机型RAID信息时，传入自定义机型实例ID。InstanceId存在时其余参数失效。
 * @method integer getCpuId() 获取CPU型号ID，查询自定义机型时需要传入
 * @method void setCpuId(integer $CpuId) 设置CPU型号ID，查询自定义机型时需要传入
 * @method integer getMemSize() 获取内存大小，单位为G，查询自定义机型时需要传入
 * @method void setMemSize(integer $MemSize) 设置内存大小，单位为G，查询自定义机型时需要传入
 * @method integer getContainRaidCard() 获取是否有RAID卡，取值：1(有) 0(无)。查询自定义机型时需要传入
 * @method void setContainRaidCard(integer $ContainRaidCard) 设置是否有RAID卡，取值：1(有) 0(无)。查询自定义机型时需要传入
 * @method integer getSystemDiskTypeId() 获取系统盘类型ID，查询自定义机型时需要传入
 * @method void setSystemDiskTypeId(integer $SystemDiskTypeId) 设置系统盘类型ID，查询自定义机型时需要传入
 * @method integer getSystemDiskCount() 获取系统盘数量，查询自定义机型时需要传入
 * @method void setSystemDiskCount(integer $SystemDiskCount) 设置系统盘数量，查询自定义机型时需要传入
 * @method integer getDataDiskTypeId() 获取数据盘类型ID，查询自定义机型时可传入
 * @method void setDataDiskTypeId(integer $DataDiskTypeId) 设置数据盘类型ID，查询自定义机型时可传入
 * @method integer getDataDiskCount() 获取数据盘数量，查询自定义机型时可传入
 * @method void setDataDiskCount(integer $DataDiskCount) 设置数据盘数量，查询自定义机型时可传入
 */
class DescribeDeviceClassPartitionRequest extends AbstractModel
{
    /**
     * @var string 设备类型代号。代号通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询。标准机型需要传入此参数。虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
     */
    public $DeviceClassCode;

    /**
     * @var string 需要查询自定义机型RAID信息时，传入自定义机型实例ID。InstanceId存在时其余参数失效。
     */
    public $InstanceId;

    /**
     * @var integer CPU型号ID，查询自定义机型时需要传入
     */
    public $CpuId;

    /**
     * @var integer 内存大小，单位为G，查询自定义机型时需要传入
     */
    public $MemSize;

    /**
     * @var integer 是否有RAID卡，取值：1(有) 0(无)。查询自定义机型时需要传入
     */
    public $ContainRaidCard;

    /**
     * @var integer 系统盘类型ID，查询自定义机型时需要传入
     */
    public $SystemDiskTypeId;

    /**
     * @var integer 系统盘数量，查询自定义机型时需要传入
     */
    public $SystemDiskCount;

    /**
     * @var integer 数据盘类型ID，查询自定义机型时可传入
     */
    public $DataDiskTypeId;

    /**
     * @var integer 数据盘数量，查询自定义机型时可传入
     */
    public $DataDiskCount;

    /**
     * @param string $DeviceClassCode 设备类型代号。代号通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询。标准机型需要传入此参数。虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
     * @param string $InstanceId 需要查询自定义机型RAID信息时，传入自定义机型实例ID。InstanceId存在时其余参数失效。
     * @param integer $CpuId CPU型号ID，查询自定义机型时需要传入
     * @param integer $MemSize 内存大小，单位为G，查询自定义机型时需要传入
     * @param integer $ContainRaidCard 是否有RAID卡，取值：1(有) 0(无)。查询自定义机型时需要传入
     * @param integer $SystemDiskTypeId 系统盘类型ID，查询自定义机型时需要传入
     * @param integer $SystemDiskCount 系统盘数量，查询自定义机型时需要传入
     * @param integer $DataDiskTypeId 数据盘类型ID，查询自定义机型时可传入
     * @param integer $DataDiskCount 数据盘数量，查询自定义机型时可传入
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
        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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
