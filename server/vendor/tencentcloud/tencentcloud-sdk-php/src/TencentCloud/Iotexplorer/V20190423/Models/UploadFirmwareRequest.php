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
 * UploadFirmware请求参数结构体
 *
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getFirmwareVersion() 获取固件版本号
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置固件版本号
 * @method string getMd5sum() 获取固件的MD5值
 * @method void setMd5sum(string $Md5sum) 设置固件的MD5值
 * @method integer getFileSize() 获取固件的大小
 * @method void setFileSize(integer $FileSize) 设置固件的大小
 * @method string getFirmwareName() 获取固件名称
 * @method void setFirmwareName(string $FirmwareName) 设置固件名称
 * @method string getFirmwareDescription() 获取固件描述
 * @method void setFirmwareDescription(string $FirmwareDescription) 设置固件描述
 * @method string getFwType() 获取固件升级模块；可选值 mcu|moudule
 * @method void setFwType(string $FwType) 设置固件升级模块；可选值 mcu|moudule
 */
class UploadFirmwareRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 固件版本号
     */
    public $FirmwareVersion;

    /**
     * @var string 固件的MD5值
     */
    public $Md5sum;

    /**
     * @var integer 固件的大小
     */
    public $FileSize;

    /**
     * @var string 固件名称
     */
    public $FirmwareName;

    /**
     * @var string 固件描述
     */
    public $FirmwareDescription;

    /**
     * @var string 固件升级模块；可选值 mcu|moudule
     */
    public $FwType;

    /**
     * @param string $ProductID 产品ID
     * @param string $FirmwareVersion 固件版本号
     * @param string $Md5sum 固件的MD5值
     * @param integer $FileSize 固件的大小
     * @param string $FirmwareName 固件名称
     * @param string $FirmwareDescription 固件描述
     * @param string $FwType 固件升级模块；可选值 mcu|moudule
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

        if (array_key_exists("Md5sum",$param) and $param["Md5sum"] !== null) {
            $this->Md5sum = $param["Md5sum"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FirmwareName",$param) and $param["FirmwareName"] !== null) {
            $this->FirmwareName = $param["FirmwareName"];
        }

        if (array_key_exists("FirmwareDescription",$param) and $param["FirmwareDescription"] !== null) {
            $this->FirmwareDescription = $param["FirmwareDescription"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }
    }
}
