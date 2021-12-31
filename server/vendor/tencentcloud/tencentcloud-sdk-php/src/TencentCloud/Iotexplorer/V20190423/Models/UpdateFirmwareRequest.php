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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFirmware请求参数结构体
 *
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method string getFirmwareVersion() 获取固件新的版本号
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置固件新的版本号
 * @method string getFirmwareOriVersion() 获取固件原版本号
 * @method void setFirmwareOriVersion(string $FirmwareOriVersion) 设置固件原版本号
 * @method integer getUpgradeMethod() 获取固件升级方式；0 静默升级 1 用户确认升级   不填默认静默升级
 * @method void setUpgradeMethod(integer $UpgradeMethod) 设置固件升级方式；0 静默升级 1 用户确认升级   不填默认静默升级
 */
class UpdateFirmwareRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var string 固件新的版本号
     */
    public $FirmwareVersion;

    /**
     * @var string 固件原版本号
     */
    public $FirmwareOriVersion;

    /**
     * @var integer 固件升级方式；0 静默升级 1 用户确认升级   不填默认静默升级
     */
    public $UpgradeMethod;

    /**
     * @param string $ProductID 产品ID
     * @param string $DeviceName 设备名
     * @param string $FirmwareVersion 固件新的版本号
     * @param string $FirmwareOriVersion 固件原版本号
     * @param integer $UpgradeMethod 固件升级方式；0 静默升级 1 用户确认升级   不填默认静默升级
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("FirmwareVersion",$param) and $param["FirmwareVersion"] !== null) {
            $this->FirmwareVersion = $param["FirmwareVersion"];
        }

        if (array_key_exists("FirmwareOriVersion",$param) and $param["FirmwareOriVersion"] !== null) {
            $this->FirmwareOriVersion = $param["FirmwareOriVersion"];
        }

        if (array_key_exists("UpgradeMethod",$param) and $param["UpgradeMethod"] !== null) {
            $this->UpgradeMethod = $param["UpgradeMethod"];
        }
    }
}
