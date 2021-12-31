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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProduct请求参数结构体
 *
 * @method string getProductModel() 获取产器型号(APP产品,为APP包名)
 * @method void setProductModel(string $ProductModel) 设置产器型号(APP产品,为APP包名)
 * @method string getProductName() 获取产品名称
仅支持中文、英文、数字、下划线，不超过32个字符
 * @method void setProductName(string $ProductName) 设置产品名称
仅支持中文、英文、数字、下划线，不超过32个字符
 * @method string getProductDescription() 获取产品描述信息
不支持单引号、双引号、退格符、回车符、换行符、制表符、反斜杠、下划线、“%”、“#”、“$”，不超过128字符
 * @method void setProductDescription(string $ProductDescription) 设置产品描述信息
不支持单引号、双引号、退格符、回车符、换行符、制表符、反斜杠、下划线、“%”、“#”、“$”，不超过128字符
 * @method array getFeatures() 获取设备功能码（ypsxth:音频双向通话 ，spdxth:视频单向通话）
 * @method void setFeatures(array $Features) 设置设备功能码（ypsxth:音频双向通话 ，spdxth:视频单向通话）
 * @method string getChipManufactureId() 获取主芯片产商ID
 * @method void setChipManufactureId(string $ChipManufactureId) 设置主芯片产商ID
 * @method string getChipId() 获取主芯片ID
 * @method void setChipId(string $ChipId) 设置主芯片ID
 * @method string getProductRegion() 获取地域：
China-Mainland（中国大陆）
China-Hong Kong, Macao and Taiwan（港澳台地区）
America（美国）
Europe（欧洲）
India（印度）
Other-Overseas（其他境外地区）
 * @method void setProductRegion(string $ProductRegion) 设置地域：
China-Mainland（中国大陆）
China-Hong Kong, Macao and Taiwan（港澳台地区）
America（美国）
Europe（欧洲）
India（印度）
Other-Overseas（其他境外地区）
 * @method integer getProductCate() 获取设备类型, 0-普通视频设备，1-NVR设备
 * @method void setProductCate(integer $ProductCate) 设置设备类型, 0-普通视频设备，1-NVR设备
 * @method integer getAccessMode() 获取接入模型，bit0是0：公版小程序未接入，bit0是1：公版小程序已接入
 * @method void setAccessMode(integer $AccessMode) 设置接入模型，bit0是0：公版小程序未接入，bit0是1：公版小程序已接入
 * @method string getOs() 获取Linux,Android,Liteos等系统
 * @method void setOs(string $Os) 设置Linux,Android,Liteos等系统
 * @method string getChipArch() 获取芯片架构，只是针对操作系统为android的
 * @method void setChipArch(string $ChipArch) 设置芯片架构，只是针对操作系统为android的
 */
class CreateProductRequest extends AbstractModel
{
    /**
     * @var string 产器型号(APP产品,为APP包名)
     */
    public $ProductModel;

    /**
     * @var string 产品名称
仅支持中文、英文、数字、下划线，不超过32个字符
     */
    public $ProductName;

    /**
     * @var string 产品描述信息
不支持单引号、双引号、退格符、回车符、换行符、制表符、反斜杠、下划线、“%”、“#”、“$”，不超过128字符
     */
    public $ProductDescription;

    /**
     * @var array 设备功能码（ypsxth:音频双向通话 ，spdxth:视频单向通话）
     */
    public $Features;

    /**
     * @var string 主芯片产商ID
     */
    public $ChipManufactureId;

    /**
     * @var string 主芯片ID
     */
    public $ChipId;

    /**
     * @var string 地域：
China-Mainland（中国大陆）
China-Hong Kong, Macao and Taiwan（港澳台地区）
America（美国）
Europe（欧洲）
India（印度）
Other-Overseas（其他境外地区）
     */
    public $ProductRegion;

    /**
     * @var integer 设备类型, 0-普通视频设备，1-NVR设备
     */
    public $ProductCate;

    /**
     * @var integer 接入模型，bit0是0：公版小程序未接入，bit0是1：公版小程序已接入
     */
    public $AccessMode;

    /**
     * @var string Linux,Android,Liteos等系统
     */
    public $Os;

    /**
     * @var string 芯片架构，只是针对操作系统为android的
     */
    public $ChipArch;

    /**
     * @param string $ProductModel 产器型号(APP产品,为APP包名)
     * @param string $ProductName 产品名称
仅支持中文、英文、数字、下划线，不超过32个字符
     * @param string $ProductDescription 产品描述信息
不支持单引号、双引号、退格符、回车符、换行符、制表符、反斜杠、下划线、“%”、“#”、“$”，不超过128字符
     * @param array $Features 设备功能码（ypsxth:音频双向通话 ，spdxth:视频单向通话）
     * @param string $ChipManufactureId 主芯片产商ID
     * @param string $ChipId 主芯片ID
     * @param string $ProductRegion 地域：
China-Mainland（中国大陆）
China-Hong Kong, Macao and Taiwan（港澳台地区）
America（美国）
Europe（欧洲）
India（印度）
Other-Overseas（其他境外地区）
     * @param integer $ProductCate 设备类型, 0-普通视频设备，1-NVR设备
     * @param integer $AccessMode 接入模型，bit0是0：公版小程序未接入，bit0是1：公版小程序已接入
     * @param string $Os Linux,Android,Liteos等系统
     * @param string $ChipArch 芯片架构，只是针对操作系统为android的
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
        if (array_key_exists("ProductModel",$param) and $param["ProductModel"] !== null) {
            $this->ProductModel = $param["ProductModel"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }

        if (array_key_exists("ChipManufactureId",$param) and $param["ChipManufactureId"] !== null) {
            $this->ChipManufactureId = $param["ChipManufactureId"];
        }

        if (array_key_exists("ChipId",$param) and $param["ChipId"] !== null) {
            $this->ChipId = $param["ChipId"];
        }

        if (array_key_exists("ProductRegion",$param) and $param["ProductRegion"] !== null) {
            $this->ProductRegion = $param["ProductRegion"];
        }

        if (array_key_exists("ProductCate",$param) and $param["ProductCate"] !== null) {
            $this->ProductCate = $param["ProductCate"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("ChipArch",$param) and $param["ChipArch"] !== null) {
            $this->ChipArch = $param["ChipArch"];
        }
    }
}
