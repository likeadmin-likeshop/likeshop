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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateBaselineStrategy请求参数结构体
 *
 * @method integer getStrategyId() 获取策略id
 * @method void setStrategyId(integer $StrategyId) 设置策略id
 * @method string getStrategyName() 获取策略名称
 * @method void setStrategyName(string $StrategyName) 设置策略名称
 * @method integer getScanCycle() 获取检测周期
 * @method void setScanCycle(integer $ScanCycle) 设置检测周期
 * @method string getScanAt() 获取定期检测时间，该时间下发扫描
 * @method void setScanAt(string $ScanAt) 设置定期检测时间，该时间下发扫描
 * @method array getCategoryIds() 获取该策略下选择的基线id数组
 * @method void setCategoryIds(array $CategoryIds) 设置该策略下选择的基线id数组
 * @method integer getIsGlobal() 获取扫描范围是否全部服务器, 1:是  0:否, 为1则为全部专业版主机
 * @method void setIsGlobal(integer $IsGlobal) 设置扫描范围是否全部服务器, 1:是  0:否, 为1则为全部专业版主机
 * @method string getMachineType() 获取云主机类型：cvm：虚拟主机，bms：裸金属，ecm：边缘计算主机
 * @method void setMachineType(string $MachineType) 设置云主机类型：cvm：虚拟主机，bms：裸金属，ecm：边缘计算主机
 * @method string getRegionCode() 获取主机地域
 * @method void setRegionCode(string $RegionCode) 设置主机地域
 * @method array getQuuids() 获取主机id数组
 * @method void setQuuids(array $Quuids) 设置主机id数组
 */
class UpdateBaselineStrategyRequest extends AbstractModel
{
    /**
     * @var integer 策略id
     */
    public $StrategyId;

    /**
     * @var string 策略名称
     */
    public $StrategyName;

    /**
     * @var integer 检测周期
     */
    public $ScanCycle;

    /**
     * @var string 定期检测时间，该时间下发扫描
     */
    public $ScanAt;

    /**
     * @var array 该策略下选择的基线id数组
     */
    public $CategoryIds;

    /**
     * @var integer 扫描范围是否全部服务器, 1:是  0:否, 为1则为全部专业版主机
     */
    public $IsGlobal;

    /**
     * @var string 云主机类型：cvm：虚拟主机，bms：裸金属，ecm：边缘计算主机
     */
    public $MachineType;

    /**
     * @var string 主机地域
     */
    public $RegionCode;

    /**
     * @var array 主机id数组
     */
    public $Quuids;

    /**
     * @param integer $StrategyId 策略id
     * @param string $StrategyName 策略名称
     * @param integer $ScanCycle 检测周期
     * @param string $ScanAt 定期检测时间，该时间下发扫描
     * @param array $CategoryIds 该策略下选择的基线id数组
     * @param integer $IsGlobal 扫描范围是否全部服务器, 1:是  0:否, 为1则为全部专业版主机
     * @param string $MachineType 云主机类型：cvm：虚拟主机，bms：裸金属，ecm：边缘计算主机
     * @param string $RegionCode 主机地域
     * @param array $Quuids 主机id数组
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("ScanCycle",$param) and $param["ScanCycle"] !== null) {
            $this->ScanCycle = $param["ScanCycle"];
        }

        if (array_key_exists("ScanAt",$param) and $param["ScanAt"] !== null) {
            $this->ScanAt = $param["ScanAt"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
