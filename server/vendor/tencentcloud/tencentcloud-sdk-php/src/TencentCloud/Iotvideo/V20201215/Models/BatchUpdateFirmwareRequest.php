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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchUpdateFirmware请求参数结构体
 *
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getFirmwareVersion() 获取固件新版本号
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置固件新版本号
 * @method string getFirmwareOriVersion() 获取固件原版本号，根据文件列表升级固件不需要填写此参数
 * @method void setFirmwareOriVersion(string $FirmwareOriVersion) 设置固件原版本号，根据文件列表升级固件不需要填写此参数
 * @method integer getUpgradeMethod() 获取升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式
 * @method void setUpgradeMethod(integer $UpgradeMethod) 设置升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式
 * @method string getFileName() 获取设备列表文件名称，根据文件列表升级固件需要填写此参数
 * @method void setFileName(string $FileName) 设置设备列表文件名称，根据文件列表升级固件需要填写此参数
 * @method string getFileMd5() 获取设备列表的文件md5值
 * @method void setFileMd5(string $FileMd5) 设置设备列表的文件md5值
 * @method integer getFileSize() 获取设备列表的文件大小值
 * @method void setFileSize(integer $FileSize) 设置设备列表的文件大小值
 * @method array getDeviceNames() 获取需要升级的设备名称列表
 * @method void setDeviceNames(array $DeviceNames) 设置需要升级的设备名称列表
 */
class BatchUpdateFirmwareRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 固件新版本号
     */
    public $FirmwareVersion;

    /**
     * @var string 固件原版本号，根据文件列表升级固件不需要填写此参数
     */
    public $FirmwareOriVersion;

    /**
     * @var integer 升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式
     */
    public $UpgradeMethod;

    /**
     * @var string 设备列表文件名称，根据文件列表升级固件需要填写此参数
     */
    public $FileName;

    /**
     * @var string 设备列表的文件md5值
     */
    public $FileMd5;

    /**
     * @var integer 设备列表的文件大小值
     */
    public $FileSize;

    /**
     * @var array 需要升级的设备名称列表
     */
    public $DeviceNames;

    /**
     * @param string $ProductID 产品ID
     * @param string $FirmwareVersion 固件新版本号
     * @param string $FirmwareOriVersion 固件原版本号，根据文件列表升级固件不需要填写此参数
     * @param integer $UpgradeMethod 升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式
     * @param string $FileName 设备列表文件名称，根据文件列表升级固件需要填写此参数
     * @param string $FileMd5 设备列表的文件md5值
     * @param integer $FileSize 设备列表的文件大小值
     * @param array $DeviceNames 需要升级的设备名称列表
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

        if (array_key_exists("FirmwareVersion",$param) and $param["FirmwareVersion"] !== null) {
            $this->FirmwareVersion = $param["FirmwareVersion"];
        }

        if (array_key_exists("FirmwareOriVersion",$param) and $param["FirmwareOriVersion"] !== null) {
            $this->FirmwareOriVersion = $param["FirmwareOriVersion"];
        }

        if (array_key_exists("UpgradeMethod",$param) and $param["UpgradeMethod"] !== null) {
            $this->UpgradeMethod = $param["UpgradeMethod"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }
    }
}
