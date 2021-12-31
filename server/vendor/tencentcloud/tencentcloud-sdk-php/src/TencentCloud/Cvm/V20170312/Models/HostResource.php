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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cdh实例的资源信息
 *
 * @method integer getCpuTotal() 获取cdh实例总cpu核数
 * @method void setCpuTotal(integer $CpuTotal) 设置cdh实例总cpu核数
 * @method integer getCpuAvailable() 获取cdh实例可用cpu核数
 * @method void setCpuAvailable(integer $CpuAvailable) 设置cdh实例可用cpu核数
 * @method float getMemTotal() 获取cdh实例总内存大小（单位为:GiB）
 * @method void setMemTotal(float $MemTotal) 设置cdh实例总内存大小（单位为:GiB）
 * @method float getMemAvailable() 获取cdh实例可用内存大小（单位为:GiB）
 * @method void setMemAvailable(float $MemAvailable) 设置cdh实例可用内存大小（单位为:GiB）
 * @method integer getDiskTotal() 获取cdh实例总磁盘大小（单位为:GiB）
 * @method void setDiskTotal(integer $DiskTotal) 设置cdh实例总磁盘大小（单位为:GiB）
 * @method integer getDiskAvailable() 获取cdh实例可用磁盘大小（单位为:GiB）
 * @method void setDiskAvailable(integer $DiskAvailable) 设置cdh实例可用磁盘大小（单位为:GiB）
 * @method string getDiskType() 获取cdh实例磁盘类型
 * @method void setDiskType(string $DiskType) 设置cdh实例磁盘类型
 */
class HostResource extends AbstractModel
{
    /**
     * @var integer cdh实例总cpu核数
     */
    public $CpuTotal;

    /**
     * @var integer cdh实例可用cpu核数
     */
    public $CpuAvailable;

    /**
     * @var float cdh实例总内存大小（单位为:GiB）
     */
    public $MemTotal;

    /**
     * @var float cdh实例可用内存大小（单位为:GiB）
     */
    public $MemAvailable;

    /**
     * @var integer cdh实例总磁盘大小（单位为:GiB）
     */
    public $DiskTotal;

    /**
     * @var integer cdh实例可用磁盘大小（单位为:GiB）
     */
    public $DiskAvailable;

    /**
     * @var string cdh实例磁盘类型
     */
    public $DiskType;

    /**
     * @param integer $CpuTotal cdh实例总cpu核数
     * @param integer $CpuAvailable cdh实例可用cpu核数
     * @param float $MemTotal cdh实例总内存大小（单位为:GiB）
     * @param float $MemAvailable cdh实例可用内存大小（单位为:GiB）
     * @param integer $DiskTotal cdh实例总磁盘大小（单位为:GiB）
     * @param integer $DiskAvailable cdh实例可用磁盘大小（单位为:GiB）
     * @param string $DiskType cdh实例磁盘类型
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
        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }

        if (array_key_exists("DiskTotal",$param) and $param["DiskTotal"] !== null) {
            $this->DiskTotal = $param["DiskTotal"];
        }

        if (array_key_exists("DiskAvailable",$param) and $param["DiskAvailable"] !== null) {
            $this->DiskAvailable = $param["DiskAvailable"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }
    }
}
