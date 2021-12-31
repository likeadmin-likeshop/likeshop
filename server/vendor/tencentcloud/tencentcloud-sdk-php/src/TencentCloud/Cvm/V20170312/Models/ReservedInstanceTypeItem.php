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
 * 预留实例类型信息。预留实例当前只针对国际站白名单用户开放。
 *
 * @method string getInstanceType() 获取实例类型。
 * @method void setInstanceType(string $InstanceType) 设置实例类型。
 * @method integer getCpu() 获取CPU核数。
 * @method void setCpu(integer $Cpu) 设置CPU核数。
 * @method integer getMemory() 获取内存大小。
 * @method void setMemory(integer $Memory) 设置内存大小。
 * @method integer getGpu() 获取GPU数量。
 * @method void setGpu(integer $Gpu) 设置GPU数量。
 * @method integer getFpga() 获取FPGA数量。
 * @method void setFpga(integer $Fpga) 设置FPGA数量。
 * @method integer getStorageBlock() 获取本地存储块数量。
 * @method void setStorageBlock(integer $StorageBlock) 设置本地存储块数量。
 * @method integer getNetworkCard() 获取网卡数。
 * @method void setNetworkCard(integer $NetworkCard) 设置网卡数。
 * @method float getMaxBandwidth() 获取最大带宽。
 * @method void setMaxBandwidth(float $MaxBandwidth) 设置最大带宽。
 * @method string getFrequency() 获取主频。
 * @method void setFrequency(string $Frequency) 设置主频。
 * @method string getCpuModelName() 获取CPU型号名称。
 * @method void setCpuModelName(string $CpuModelName) 设置CPU型号名称。
 * @method integer getPps() 获取包转发率。
 * @method void setPps(integer $Pps) 设置包转发率。
 * @method Externals getExternals() 获取外部信息。
 * @method void setExternals(Externals $Externals) 设置外部信息。
 * @method string getRemark() 获取备注信息。
 * @method void setRemark(string $Remark) 设置备注信息。
 * @method array getPrices() 获取预留实例配置价格信息。
 * @method void setPrices(array $Prices) 设置预留实例配置价格信息。
 */
class ReservedInstanceTypeItem extends AbstractModel
{
    /**
     * @var string 实例类型。
     */
    public $InstanceType;

    /**
     * @var integer CPU核数。
     */
    public $Cpu;

    /**
     * @var integer 内存大小。
     */
    public $Memory;

    /**
     * @var integer GPU数量。
     */
    public $Gpu;

    /**
     * @var integer FPGA数量。
     */
    public $Fpga;

    /**
     * @var integer 本地存储块数量。
     */
    public $StorageBlock;

    /**
     * @var integer 网卡数。
     */
    public $NetworkCard;

    /**
     * @var float 最大带宽。
     */
    public $MaxBandwidth;

    /**
     * @var string 主频。
     */
    public $Frequency;

    /**
     * @var string CPU型号名称。
     */
    public $CpuModelName;

    /**
     * @var integer 包转发率。
     */
    public $Pps;

    /**
     * @var Externals 外部信息。
     */
    public $Externals;

    /**
     * @var string 备注信息。
     */
    public $Remark;

    /**
     * @var array 预留实例配置价格信息。
     */
    public $Prices;

    /**
     * @param string $InstanceType 实例类型。
     * @param integer $Cpu CPU核数。
     * @param integer $Memory 内存大小。
     * @param integer $Gpu GPU数量。
     * @param integer $Fpga FPGA数量。
     * @param integer $StorageBlock 本地存储块数量。
     * @param integer $NetworkCard 网卡数。
     * @param float $MaxBandwidth 最大带宽。
     * @param string $Frequency 主频。
     * @param string $CpuModelName CPU型号名称。
     * @param integer $Pps 包转发率。
     * @param Externals $Externals 外部信息。
     * @param string $Remark 备注信息。
     * @param array $Prices 预留实例配置价格信息。
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("Fpga",$param) and $param["Fpga"] !== null) {
            $this->Fpga = $param["Fpga"];
        }

        if (array_key_exists("StorageBlock",$param) and $param["StorageBlock"] !== null) {
            $this->StorageBlock = $param["StorageBlock"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("CpuModelName",$param) and $param["CpuModelName"] !== null) {
            $this->CpuModelName = $param["CpuModelName"];
        }

        if (array_key_exists("Pps",$param) and $param["Pps"] !== null) {
            $this->Pps = $param["Pps"];
        }

        if (array_key_exists("Externals",$param) and $param["Externals"] !== null) {
            $this->Externals = new Externals();
            $this->Externals->deserialize($param["Externals"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Prices",$param) and $param["Prices"] !== null) {
            $this->Prices = [];
            foreach ($param["Prices"] as $key => $value){
                $obj = new ReservedInstancePriceItem();
                $obj->deserialize($value);
                array_push($this->Prices, $obj);
            }
        }
    }
}
