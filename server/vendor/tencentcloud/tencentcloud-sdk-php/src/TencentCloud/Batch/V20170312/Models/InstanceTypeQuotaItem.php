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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例机型配额信息。
 *
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method string getInstanceType() 获取实例机型。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
 * @method string getInstanceChargeType() 获取实例计费模式。取值范围： <br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费<br><li>CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对CDH计费，不对CDH上的实例计费。<br><li>`SPOTPAID`：表示竞价实例付费。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费模式。取值范围： <br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费<br><li>CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对CDH计费，不对CDH上的实例计费。<br><li>`SPOTPAID`：表示竞价实例付费。
 * @method integer getNetworkCard() 获取网卡类型，例如：25代表25G网卡
 * @method void setNetworkCard(integer $NetworkCard) 设置网卡类型，例如：25代表25G网卡
 * @method Externals getExternals() 获取扩展属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternals(Externals $Externals) 设置扩展属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取实例的CPU核数，单位：核。
 * @method void setCpu(integer $Cpu) 设置实例的CPU核数，单位：核。
 * @method integer getMemory() 获取实例内存容量，单位：`GB`。
 * @method void setMemory(integer $Memory) 设置实例内存容量，单位：`GB`。
 * @method string getInstanceFamily() 获取实例机型系列。
 * @method void setInstanceFamily(string $InstanceFamily) 设置实例机型系列。
 * @method string getTypeName() 获取机型名称。
 * @method void setTypeName(string $TypeName) 设置机型名称。
 * @method array getLocalDiskTypeList() 获取本地磁盘规格列表。当该参数返回为空值时，表示当前情况下无法创建本地盘。
 * @method void setLocalDiskTypeList(array $LocalDiskTypeList) 设置本地磁盘规格列表。当该参数返回为空值时，表示当前情况下无法创建本地盘。
 * @method string getStatus() 获取实例是否售卖。取值范围： <br><li>SELL：表示实例可购买<br><li>SOLD_OUT：表示实例已售罄。
 * @method void setStatus(string $Status) 设置实例是否售卖。取值范围： <br><li>SELL：表示实例可购买<br><li>SOLD_OUT：表示实例已售罄。
 * @method ItemPrice getPrice() 获取实例的售卖价格。
 * @method void setPrice(ItemPrice $Price) 设置实例的售卖价格。
 * @method string getSoldOutReason() 获取售罄原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoldOutReason(string $SoldOutReason) 设置售罄原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInstanceBandwidth() 获取内网带宽，单位Gbps。
 * @method void setInstanceBandwidth(float $InstanceBandwidth) 设置内网带宽，单位Gbps。
 * @method integer getInstancePps() 获取网络收发包能力，单位万PPS。
 * @method void setInstancePps(integer $InstancePps) 设置网络收发包能力，单位万PPS。
 * @method integer getStorageBlockAmount() 获取本地存储块数量。
 * @method void setStorageBlockAmount(integer $StorageBlockAmount) 设置本地存储块数量。
 * @method string getCpuType() 获取处理器型号。
 * @method void setCpuType(string $CpuType) 设置处理器型号。
 * @method integer getGpu() 获取实例的GPU数量。
 * @method void setGpu(integer $Gpu) 设置实例的GPU数量。
 * @method integer getFpga() 获取实例的FPGA数量。
 * @method void setFpga(integer $Fpga) 设置实例的FPGA数量。
 * @method string getRemark() 获取实例备注信息。
 * @method void setRemark(string $Remark) 设置实例备注信息。
 */
class InstanceTypeQuotaItem extends AbstractModel
{
    /**
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var string 实例机型。
     */
    public $InstanceType;

    /**
     * @var string 实例计费模式。取值范围： <br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费<br><li>CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对CDH计费，不对CDH上的实例计费。<br><li>`SPOTPAID`：表示竞价实例付费。
     */
    public $InstanceChargeType;

    /**
     * @var integer 网卡类型，例如：25代表25G网卡
     */
    public $NetworkCard;

    /**
     * @var Externals 扩展属性。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Externals;

    /**
     * @var integer 实例的CPU核数，单位：核。
     */
    public $Cpu;

    /**
     * @var integer 实例内存容量，单位：`GB`。
     */
    public $Memory;

    /**
     * @var string 实例机型系列。
     */
    public $InstanceFamily;

    /**
     * @var string 机型名称。
     */
    public $TypeName;

    /**
     * @var array 本地磁盘规格列表。当该参数返回为空值时，表示当前情况下无法创建本地盘。
     */
    public $LocalDiskTypeList;

    /**
     * @var string 实例是否售卖。取值范围： <br><li>SELL：表示实例可购买<br><li>SOLD_OUT：表示实例已售罄。
     */
    public $Status;

    /**
     * @var ItemPrice 实例的售卖价格。
     */
    public $Price;

    /**
     * @var string 售罄原因。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoldOutReason;

    /**
     * @var float 内网带宽，单位Gbps。
     */
    public $InstanceBandwidth;

    /**
     * @var integer 网络收发包能力，单位万PPS。
     */
    public $InstancePps;

    /**
     * @var integer 本地存储块数量。
     */
    public $StorageBlockAmount;

    /**
     * @var string 处理器型号。
     */
    public $CpuType;

    /**
     * @var integer 实例的GPU数量。
     */
    public $Gpu;

    /**
     * @var integer 实例的FPGA数量。
     */
    public $Fpga;

    /**
     * @var string 实例备注信息。
     */
    public $Remark;

    /**
     * @param string $Zone 可用区。
     * @param string $InstanceType 实例机型。
     * @param string $InstanceChargeType 实例计费模式。取值范围： <br><li>PREPAID：表示预付费，即包年包月<br><li>POSTPAID_BY_HOUR：表示后付费，即按量计费<br><li>CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对CDH计费，不对CDH上的实例计费。<br><li>`SPOTPAID`：表示竞价实例付费。
     * @param integer $NetworkCard 网卡类型，例如：25代表25G网卡
     * @param Externals $Externals 扩展属性。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu 实例的CPU核数，单位：核。
     * @param integer $Memory 实例内存容量，单位：`GB`。
     * @param string $InstanceFamily 实例机型系列。
     * @param string $TypeName 机型名称。
     * @param array $LocalDiskTypeList 本地磁盘规格列表。当该参数返回为空值时，表示当前情况下无法创建本地盘。
     * @param string $Status 实例是否售卖。取值范围： <br><li>SELL：表示实例可购买<br><li>SOLD_OUT：表示实例已售罄。
     * @param ItemPrice $Price 实例的售卖价格。
     * @param string $SoldOutReason 售罄原因。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InstanceBandwidth 内网带宽，单位Gbps。
     * @param integer $InstancePps 网络收发包能力，单位万PPS。
     * @param integer $StorageBlockAmount 本地存储块数量。
     * @param string $CpuType 处理器型号。
     * @param integer $Gpu 实例的GPU数量。
     * @param integer $Fpga 实例的FPGA数量。
     * @param string $Remark 实例备注信息。
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }

        if (array_key_exists("Externals",$param) and $param["Externals"] !== null) {
            $this->Externals = new Externals();
            $this->Externals->deserialize($param["Externals"]);
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("LocalDiskTypeList",$param) and $param["LocalDiskTypeList"] !== null) {
            $this->LocalDiskTypeList = [];
            foreach ($param["LocalDiskTypeList"] as $key => $value){
                $obj = new LocalDiskType();
                $obj->deserialize($value);
                array_push($this->LocalDiskTypeList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new ItemPrice();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("SoldOutReason",$param) and $param["SoldOutReason"] !== null) {
            $this->SoldOutReason = $param["SoldOutReason"];
        }

        if (array_key_exists("InstanceBandwidth",$param) and $param["InstanceBandwidth"] !== null) {
            $this->InstanceBandwidth = $param["InstanceBandwidth"];
        }

        if (array_key_exists("InstancePps",$param) and $param["InstancePps"] !== null) {
            $this->InstancePps = $param["InstancePps"];
        }

        if (array_key_exists("StorageBlockAmount",$param) and $param["StorageBlockAmount"] !== null) {
            $this->StorageBlockAmount = $param["StorageBlockAmount"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("Fpga",$param) and $param["Fpga"] !== null) {
            $this->Fpga = $param["Fpga"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
