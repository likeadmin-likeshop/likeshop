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
 * CreateProduct请求参数结构体
 *
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method integer getDeviceType() 获取产品设备类型
 * @method void setDeviceType(integer $DeviceType) 设置产品设备类型
 * @method integer getProductVaildYears() 获取产品有效期
 * @method void setProductVaildYears(integer $ProductVaildYears) 设置产品有效期
 * @method array getFeatures() 获取设备功能码
 * @method void setFeatures(array $Features) 设置设备功能码
 * @method string getChipOs() 获取设备操作系统
 * @method void setChipOs(string $ChipOs) 设置设备操作系统
 * @method string getChipManufactureId() 获取芯片厂商id
 * @method void setChipManufactureId(string $ChipManufactureId) 设置芯片厂商id
 * @method string getChipId() 获取芯片id
 * @method void setChipId(string $ChipId) 设置芯片id
 * @method string getProductDescription() 获取产品描述信息
 * @method void setProductDescription(string $ProductDescription) 设置产品描述信息
 * @method integer getEncryptionType() 获取认证方式。2 PSK
 * @method void setEncryptionType(integer $EncryptionType) 设置认证方式。2 PSK
 */
class CreateProductRequest extends AbstractModel
{
    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var integer 产品设备类型
     */
    public $DeviceType;

    /**
     * @var integer 产品有效期
     */
    public $ProductVaildYears;

    /**
     * @var array 设备功能码
     */
    public $Features;

    /**
     * @var string 设备操作系统
     */
    public $ChipOs;

    /**
     * @var string 芯片厂商id
     */
    public $ChipManufactureId;

    /**
     * @var string 芯片id
     */
    public $ChipId;

    /**
     * @var string 产品描述信息
     */
    public $ProductDescription;

    /**
     * @var integer 认证方式。2 PSK
     */
    public $EncryptionType;

    /**
     * @param string $ProductName 产品名称
     * @param integer $DeviceType 产品设备类型
     * @param integer $ProductVaildYears 产品有效期
     * @param array $Features 设备功能码
     * @param string $ChipOs 设备操作系统
     * @param string $ChipManufactureId 芯片厂商id
     * @param string $ChipId 芯片id
     * @param string $ProductDescription 产品描述信息
     * @param integer $EncryptionType 认证方式。2 PSK
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("ProductVaildYears",$param) and $param["ProductVaildYears"] !== null) {
            $this->ProductVaildYears = $param["ProductVaildYears"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }

        if (array_key_exists("ChipOs",$param) and $param["ChipOs"] !== null) {
            $this->ChipOs = $param["ChipOs"];
        }

        if (array_key_exists("ChipManufactureId",$param) and $param["ChipManufactureId"] !== null) {
            $this->ChipManufactureId = $param["ChipManufactureId"];
        }

        if (array_key_exists("ChipId",$param) and $param["ChipId"] !== null) {
            $this->ChipId = $param["ChipId"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }
    }
}
