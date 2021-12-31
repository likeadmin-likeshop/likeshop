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
 * 服务器价格信息
 *
 * @method string getInstanceId() 获取物理机ID
 * @method void setInstanceId(string $InstanceId) 设置物理机ID
 * @method string getDeviceClassCode() 获取设备型号
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置设备型号
 * @method integer getIsElastic() 获取是否是弹性机型，1：是，0：否
 * @method void setIsElastic(integer $IsElastic) 设置是否是弹性机型，1：是，0：否
 * @method integer getCpmPayMode() 获取付费模式ID, 1:预付费; 2:后付费; 3:预付费转后付费中
 * @method void setCpmPayMode(integer $CpmPayMode) 设置付费模式ID, 1:预付费; 2:后付费; 3:预付费转后付费中
 * @method string getCpuDescription() 获取Cpu信息描述
 * @method void setCpuDescription(string $CpuDescription) 设置Cpu信息描述
 * @method string getMemDescription() 获取内存信息描述
 * @method void setMemDescription(string $MemDescription) 设置内存信息描述
 * @method string getDiskDescription() 获取硬盘信息描述
 * @method void setDiskDescription(string $DiskDescription) 设置硬盘信息描述
 * @method string getNicDescription() 获取网卡信息描述
 * @method void setNicDescription(string $NicDescription) 设置网卡信息描述
 * @method string getGpuDescription() 获取Gpu信息描述
 * @method void setGpuDescription(string $GpuDescription) 设置Gpu信息描述
 * @method string getRaidDescription() 获取Raid信息描述
 * @method void setRaidDescription(string $RaidDescription) 设置Raid信息描述
 * @method integer getPrice() 获取客户的单价
 * @method void setPrice(integer $Price) 设置客户的单价
 * @method integer getNormalPrice() 获取刊例单价
 * @method void setNormalPrice(integer $NormalPrice) 设置刊例单价
 * @method integer getTotalCost() 获取原价
 * @method void setTotalCost(integer $TotalCost) 设置原价
 * @method integer getRealTotalCost() 获取折扣价
 * @method void setRealTotalCost(integer $RealTotalCost) 设置折扣价
 * @method integer getTimeSpan() 获取计费时长
 * @method void setTimeSpan(integer $TimeSpan) 设置计费时长
 * @method string getTimeUnit() 获取计费时长单位, M:按月计费; D:按天计费
 * @method void setTimeUnit(string $TimeUnit) 设置计费时长单位, M:按月计费; D:按天计费
 * @method integer getGoodsCount() 获取商品数量
 * @method void setGoodsCount(integer $GoodsCount) 设置商品数量
 */
class DevicePriceInfo extends AbstractModel
{
    /**
     * @var string 物理机ID
     */
    public $InstanceId;

    /**
     * @var string 设备型号
     */
    public $DeviceClassCode;

    /**
     * @var integer 是否是弹性机型，1：是，0：否
     */
    public $IsElastic;

    /**
     * @var integer 付费模式ID, 1:预付费; 2:后付费; 3:预付费转后付费中
     */
    public $CpmPayMode;

    /**
     * @var string Cpu信息描述
     */
    public $CpuDescription;

    /**
     * @var string 内存信息描述
     */
    public $MemDescription;

    /**
     * @var string 硬盘信息描述
     */
    public $DiskDescription;

    /**
     * @var string 网卡信息描述
     */
    public $NicDescription;

    /**
     * @var string Gpu信息描述
     */
    public $GpuDescription;

    /**
     * @var string Raid信息描述
     */
    public $RaidDescription;

    /**
     * @var integer 客户的单价
     */
    public $Price;

    /**
     * @var integer 刊例单价
     */
    public $NormalPrice;

    /**
     * @var integer 原价
     */
    public $TotalCost;

    /**
     * @var integer 折扣价
     */
    public $RealTotalCost;

    /**
     * @var integer 计费时长
     */
    public $TimeSpan;

    /**
     * @var string 计费时长单位, M:按月计费; D:按天计费
     */
    public $TimeUnit;

    /**
     * @var integer 商品数量
     */
    public $GoodsCount;

    /**
     * @param string $InstanceId 物理机ID
     * @param string $DeviceClassCode 设备型号
     * @param integer $IsElastic 是否是弹性机型，1：是，0：否
     * @param integer $CpmPayMode 付费模式ID, 1:预付费; 2:后付费; 3:预付费转后付费中
     * @param string $CpuDescription Cpu信息描述
     * @param string $MemDescription 内存信息描述
     * @param string $DiskDescription 硬盘信息描述
     * @param string $NicDescription 网卡信息描述
     * @param string $GpuDescription Gpu信息描述
     * @param string $RaidDescription Raid信息描述
     * @param integer $Price 客户的单价
     * @param integer $NormalPrice 刊例单价
     * @param integer $TotalCost 原价
     * @param integer $RealTotalCost 折扣价
     * @param integer $TimeSpan 计费时长
     * @param string $TimeUnit 计费时长单位, M:按月计费; D:按天计费
     * @param integer $GoodsCount 商品数量
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

        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }

        if (array_key_exists("IsElastic",$param) and $param["IsElastic"] !== null) {
            $this->IsElastic = $param["IsElastic"];
        }

        if (array_key_exists("CpmPayMode",$param) and $param["CpmPayMode"] !== null) {
            $this->CpmPayMode = $param["CpmPayMode"];
        }

        if (array_key_exists("CpuDescription",$param) and $param["CpuDescription"] !== null) {
            $this->CpuDescription = $param["CpuDescription"];
        }

        if (array_key_exists("MemDescription",$param) and $param["MemDescription"] !== null) {
            $this->MemDescription = $param["MemDescription"];
        }

        if (array_key_exists("DiskDescription",$param) and $param["DiskDescription"] !== null) {
            $this->DiskDescription = $param["DiskDescription"];
        }

        if (array_key_exists("NicDescription",$param) and $param["NicDescription"] !== null) {
            $this->NicDescription = $param["NicDescription"];
        }

        if (array_key_exists("GpuDescription",$param) and $param["GpuDescription"] !== null) {
            $this->GpuDescription = $param["GpuDescription"];
        }

        if (array_key_exists("RaidDescription",$param) and $param["RaidDescription"] !== null) {
            $this->RaidDescription = $param["RaidDescription"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("NormalPrice",$param) and $param["NormalPrice"] !== null) {
            $this->NormalPrice = $param["NormalPrice"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("GoodsCount",$param) and $param["GoodsCount"] !== null) {
            $this->GoodsCount = $param["GoodsCount"];
        }
    }
}
