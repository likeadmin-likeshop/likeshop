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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络硬盘上下限数据
 *
 * @method integer getMaxBandwidth() 获取网络带宽上限
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置网络带宽上限
 * @method integer getMaxSystemDiskSize() 获取数据盘上限
 * @method void setMaxSystemDiskSize(integer $MaxSystemDiskSize) 设置数据盘上限
 * @method integer getMinBandwidth() 获取网络带宽下限
 * @method void setMinBandwidth(integer $MinBandwidth) 设置网络带宽下限
 * @method integer getMinSystemDiskSize() 获取数据盘下限
 * @method void setMinSystemDiskSize(integer $MinSystemDiskSize) 设置数据盘下限
 * @method integer getMaxDataDiskSize() 获取最大数据盘大小
 * @method void setMaxDataDiskSize(integer $MaxDataDiskSize) 设置最大数据盘大小
 * @method integer getMinDataDiskSize() 获取最小数据盘大小
 * @method void setMinDataDiskSize(integer $MinDataDiskSize) 设置最小数据盘大小
 * @method integer getSuggestBandwidth() 获取建议带宽
 * @method void setSuggestBandwidth(integer $SuggestBandwidth) 设置建议带宽
 * @method integer getSuggestDataDiskSize() 获取建议硬盘大小
 * @method void setSuggestDataDiskSize(integer $SuggestDataDiskSize) 设置建议硬盘大小
 * @method integer getSuggestSystemDiskSize() 获取建议系统盘大小
 * @method void setSuggestSystemDiskSize(integer $SuggestSystemDiskSize) 设置建议系统盘大小
 * @method integer getMaxVcpu() 获取Cpu核数峰值
 * @method void setMaxVcpu(integer $MaxVcpu) 设置Cpu核数峰值
 * @method integer getMinVcpu() 获取Cpu核最小值
 * @method void setMinVcpu(integer $MinVcpu) 设置Cpu核最小值
 * @method integer getMaxVcpuPerReq() 获取单次请求最大cpu核数
 * @method void setMaxVcpuPerReq(integer $MaxVcpuPerReq) 设置单次请求最大cpu核数
 * @method integer getPerBandwidth() 获取带宽步长
 * @method void setPerBandwidth(integer $PerBandwidth) 设置带宽步长
 * @method integer getPerDataDisk() 获取数据盘步长
 * @method void setPerDataDisk(integer $PerDataDisk) 设置数据盘步长
 * @method integer getMaxModuleNum() 获取总模块数量
 * @method void setMaxModuleNum(integer $MaxModuleNum) 设置总模块数量
 */
class NetworkStorageRange extends AbstractModel
{
    /**
     * @var integer 网络带宽上限
     */
    public $MaxBandwidth;

    /**
     * @var integer 数据盘上限
     */
    public $MaxSystemDiskSize;

    /**
     * @var integer 网络带宽下限
     */
    public $MinBandwidth;

    /**
     * @var integer 数据盘下限
     */
    public $MinSystemDiskSize;

    /**
     * @var integer 最大数据盘大小
     */
    public $MaxDataDiskSize;

    /**
     * @var integer 最小数据盘大小
     */
    public $MinDataDiskSize;

    /**
     * @var integer 建议带宽
     */
    public $SuggestBandwidth;

    /**
     * @var integer 建议硬盘大小
     */
    public $SuggestDataDiskSize;

    /**
     * @var integer 建议系统盘大小
     */
    public $SuggestSystemDiskSize;

    /**
     * @var integer Cpu核数峰值
     */
    public $MaxVcpu;

    /**
     * @var integer Cpu核最小值
     */
    public $MinVcpu;

    /**
     * @var integer 单次请求最大cpu核数
     */
    public $MaxVcpuPerReq;

    /**
     * @var integer 带宽步长
     */
    public $PerBandwidth;

    /**
     * @var integer 数据盘步长
     */
    public $PerDataDisk;

    /**
     * @var integer 总模块数量
     */
    public $MaxModuleNum;

    /**
     * @param integer $MaxBandwidth 网络带宽上限
     * @param integer $MaxSystemDiskSize 数据盘上限
     * @param integer $MinBandwidth 网络带宽下限
     * @param integer $MinSystemDiskSize 数据盘下限
     * @param integer $MaxDataDiskSize 最大数据盘大小
     * @param integer $MinDataDiskSize 最小数据盘大小
     * @param integer $SuggestBandwidth 建议带宽
     * @param integer $SuggestDataDiskSize 建议硬盘大小
     * @param integer $SuggestSystemDiskSize 建议系统盘大小
     * @param integer $MaxVcpu Cpu核数峰值
     * @param integer $MinVcpu Cpu核最小值
     * @param integer $MaxVcpuPerReq 单次请求最大cpu核数
     * @param integer $PerBandwidth 带宽步长
     * @param integer $PerDataDisk 数据盘步长
     * @param integer $MaxModuleNum 总模块数量
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
        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("MaxSystemDiskSize",$param) and $param["MaxSystemDiskSize"] !== null) {
            $this->MaxSystemDiskSize = $param["MaxSystemDiskSize"];
        }

        if (array_key_exists("MinBandwidth",$param) and $param["MinBandwidth"] !== null) {
            $this->MinBandwidth = $param["MinBandwidth"];
        }

        if (array_key_exists("MinSystemDiskSize",$param) and $param["MinSystemDiskSize"] !== null) {
            $this->MinSystemDiskSize = $param["MinSystemDiskSize"];
        }

        if (array_key_exists("MaxDataDiskSize",$param) and $param["MaxDataDiskSize"] !== null) {
            $this->MaxDataDiskSize = $param["MaxDataDiskSize"];
        }

        if (array_key_exists("MinDataDiskSize",$param) and $param["MinDataDiskSize"] !== null) {
            $this->MinDataDiskSize = $param["MinDataDiskSize"];
        }

        if (array_key_exists("SuggestBandwidth",$param) and $param["SuggestBandwidth"] !== null) {
            $this->SuggestBandwidth = $param["SuggestBandwidth"];
        }

        if (array_key_exists("SuggestDataDiskSize",$param) and $param["SuggestDataDiskSize"] !== null) {
            $this->SuggestDataDiskSize = $param["SuggestDataDiskSize"];
        }

        if (array_key_exists("SuggestSystemDiskSize",$param) and $param["SuggestSystemDiskSize"] !== null) {
            $this->SuggestSystemDiskSize = $param["SuggestSystemDiskSize"];
        }

        if (array_key_exists("MaxVcpu",$param) and $param["MaxVcpu"] !== null) {
            $this->MaxVcpu = $param["MaxVcpu"];
        }

        if (array_key_exists("MinVcpu",$param) and $param["MinVcpu"] !== null) {
            $this->MinVcpu = $param["MinVcpu"];
        }

        if (array_key_exists("MaxVcpuPerReq",$param) and $param["MaxVcpuPerReq"] !== null) {
            $this->MaxVcpuPerReq = $param["MaxVcpuPerReq"];
        }

        if (array_key_exists("PerBandwidth",$param) and $param["PerBandwidth"] !== null) {
            $this->PerBandwidth = $param["PerBandwidth"];
        }

        if (array_key_exists("PerDataDisk",$param) and $param["PerDataDisk"] !== null) {
            $this->PerDataDisk = $param["PerDataDisk"];
        }

        if (array_key_exists("MaxModuleNum",$param) and $param["MaxModuleNum"] !== null) {
            $this->MaxModuleNum = $param["MaxModuleNum"];
        }
    }
}
