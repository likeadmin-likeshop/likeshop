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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商品码信息
 *
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getEnName() 获取产品名称(英文)
 * @method void setEnName(string $EnName) 设置产品名称(英文)
 * @method string getBrandName() 获取品牌名称
 * @method void setBrandName(string $BrandName) 设置品牌名称
 * @method string getType() 获取规格型号
 * @method void setType(string $Type) 设置规格型号
 * @method string getWidth() 获取宽度，单位毫米
 * @method void setWidth(string $Width) 设置宽度，单位毫米
 * @method string getHeight() 获取高度，单位毫米
 * @method void setHeight(string $Height) 设置高度，单位毫米
 * @method string getDepth() 获取深度，单位毫米
 * @method void setDepth(string $Depth) 设置深度，单位毫米
 * @method string getKeyWord() 获取关键字
 * @method void setKeyWord(string $KeyWord) 设置关键字
 * @method string getDescription() 获取简短描述
 * @method void setDescription(string $Description) 设置简短描述
 * @method array getImageLink() 获取图片链接
 * @method void setImageLink(array $ImageLink) 设置图片链接
 * @method string getManufacturerName() 获取厂家名称
 * @method void setManufacturerName(string $ManufacturerName) 设置厂家名称
 * @method string getManufacturerAddress() 获取厂家地址
 * @method void setManufacturerAddress(string $ManufacturerAddress) 设置厂家地址
 * @method string getFirmCode() 获取企业社会信用代码
 * @method void setFirmCode(string $FirmCode) 设置企业社会信用代码
 * @method string getCheckResult() 获取表示数据查询状态
checkResult	状态说明
1	 经查，该商品条码已在中国物品编码中心注册
2	经查，该厂商识别代码已在中国物品编码中心注册，但编码信息未按规定通报。
3	经查，该厂商识别代码已于xxxxx注销，请关注产品生产日期。
4	经查，该企业以及条码未经条码中心注册，属于违法使用
-1	经查，该商品条码被冒用
-2	经查，该厂商识别代码已在中国物品编码中心注册，但该产品已经下市
S001                未找到该厂商识别代码的注册信息。
S002		该厂商识别代码已经在GS1注册，但编码信息未通报
S003		该商品条码已在GS1通报
S004		该商品条码已注销
S005		数字不正确。GS1前缀（3位国家/地区代码）用于特殊用途。
E001		完整性失败：此GTIN的长度无效。
E002		完整性失败：校验位不正确。
E003		完整性失败：字符串包含字母数字字符。
E004		数字不正确。GS1前缀（3位国家/地区代码）不存在。
E005		数字不正确。GS1前缀（3位国家/地区代码）用于特殊用途。
E006		数字不正确。尚未分配该GS1公司前缀。
E008	        经查，该企业厂商识别代码以及条码尚未通报
 * @method void setCheckResult(string $CheckResult) 设置表示数据查询状态
checkResult	状态说明
1	 经查，该商品条码已在中国物品编码中心注册
2	经查，该厂商识别代码已在中国物品编码中心注册，但编码信息未按规定通报。
3	经查，该厂商识别代码已于xxxxx注销，请关注产品生产日期。
4	经查，该企业以及条码未经条码中心注册，属于违法使用
-1	经查，该商品条码被冒用
-2	经查，该厂商识别代码已在中国物品编码中心注册，但该产品已经下市
S001                未找到该厂商识别代码的注册信息。
S002		该厂商识别代码已经在GS1注册，但编码信息未通报
S003		该商品条码已在GS1通报
S004		该商品条码已注销
S005		数字不正确。GS1前缀（3位国家/地区代码）用于特殊用途。
E001		完整性失败：此GTIN的长度无效。
E002		完整性失败：校验位不正确。
E003		完整性失败：字符串包含字母数字字符。
E004		数字不正确。GS1前缀（3位国家/地区代码）不存在。
E005		数字不正确。GS1前缀（3位国家/地区代码）用于特殊用途。
E006		数字不正确。尚未分配该GS1公司前缀。
E008	        经查，该企业厂商识别代码以及条码尚未通报
 * @method string getCategoryCode() 获取UNSPSC分类码
 * @method void setCategoryCode(string $CategoryCode) 设置UNSPSC分类码
 */
class ProductDataRecord extends AbstractModel
{
    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 产品名称(英文)
     */
    public $EnName;

    /**
     * @var string 品牌名称
     */
    public $BrandName;

    /**
     * @var string 规格型号
     */
    public $Type;

    /**
     * @var string 宽度，单位毫米
     */
    public $Width;

    /**
     * @var string 高度，单位毫米
     */
    public $Height;

    /**
     * @var string 深度，单位毫米
     */
    public $Depth;

    /**
     * @var string 关键字
     */
    public $KeyWord;

    /**
     * @var string 简短描述
     */
    public $Description;

    /**
     * @var array 图片链接
     */
    public $ImageLink;

    /**
     * @var string 厂家名称
     */
    public $ManufacturerName;

    /**
     * @var string 厂家地址
     */
    public $ManufacturerAddress;

    /**
     * @var string 企业社会信用代码
     */
    public $FirmCode;

    /**
     * @var string 表示数据查询状态
checkResult	状态说明
1	 经查，该商品条码已在中国物品编码中心注册
2	经查，该厂商识别代码已在中国物品编码中心注册，但编码信息未按规定通报。
3	经查，该厂商识别代码已于xxxxx注销，请关注产品生产日期。
4	经查，该企业以及条码未经条码中心注册，属于违法使用
-1	经查，该商品条码被冒用
-2	经查，该厂商识别代码已在中国物品编码中心注册，但该产品已经下市
S001                未找到该厂商识别代码的注册信息。
S002		该厂商识别代码已经在GS1注册，但编码信息未通报
S003		该商品条码已在GS1通报
S004		该商品条码已注销
S005		数字不正确。GS1前缀（3位国家/地区代码）用于特殊用途。
E001		完整性失败：此GTIN的长度无效。
E002		完整性失败：校验位不正确。
E003		完整性失败：字符串包含字母数字字符。
E004		数字不正确。GS1前缀（3位国家/地区代码）不存在。
E005		数字不正确。GS1前缀（3位国家/地区代码）用于特殊用途。
E006		数字不正确。尚未分配该GS1公司前缀。
E008	        经查，该企业厂商识别代码以及条码尚未通报
     */
    public $CheckResult;

    /**
     * @var string UNSPSC分类码
     */
    public $CategoryCode;

    /**
     * @param string $ProductName 产品名称
     * @param string $EnName 产品名称(英文)
     * @param string $BrandName 品牌名称
     * @param string $Type 规格型号
     * @param string $Width 宽度，单位毫米
     * @param string $Height 高度，单位毫米
     * @param string $Depth 深度，单位毫米
     * @param string $KeyWord 关键字
     * @param string $Description 简短描述
     * @param array $ImageLink 图片链接
     * @param string $ManufacturerName 厂家名称
     * @param string $ManufacturerAddress 厂家地址
     * @param string $FirmCode 企业社会信用代码
     * @param string $CheckResult 表示数据查询状态
checkResult	状态说明
1	 经查，该商品条码已在中国物品编码中心注册
2	经查，该厂商识别代码已在中国物品编码中心注册，但编码信息未按规定通报。
3	经查，该厂商识别代码已于xxxxx注销，请关注产品生产日期。
4	经查，该企业以及条码未经条码中心注册，属于违法使用
-1	经查，该商品条码被冒用
-2	经查，该厂商识别代码已在中国物品编码中心注册，但该产品已经下市
S001                未找到该厂商识别代码的注册信息。
S002		该厂商识别代码已经在GS1注册，但编码信息未通报
S003		该商品条码已在GS1通报
S004		该商品条码已注销
S005		数字不正确。GS1前缀（3位国家/地区代码）用于特殊用途。
E001		完整性失败：此GTIN的长度无效。
E002		完整性失败：校验位不正确。
E003		完整性失败：字符串包含字母数字字符。
E004		数字不正确。GS1前缀（3位国家/地区代码）不存在。
E005		数字不正确。GS1前缀（3位国家/地区代码）用于特殊用途。
E006		数字不正确。尚未分配该GS1公司前缀。
E008	        经查，该企业厂商识别代码以及条码尚未通报
     * @param string $CategoryCode UNSPSC分类码
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

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ImageLink",$param) and $param["ImageLink"] !== null) {
            $this->ImageLink = $param["ImageLink"];
        }

        if (array_key_exists("ManufacturerName",$param) and $param["ManufacturerName"] !== null) {
            $this->ManufacturerName = $param["ManufacturerName"];
        }

        if (array_key_exists("ManufacturerAddress",$param) and $param["ManufacturerAddress"] !== null) {
            $this->ManufacturerAddress = $param["ManufacturerAddress"];
        }

        if (array_key_exists("FirmCode",$param) and $param["FirmCode"] !== null) {
            $this->FirmCode = $param["FirmCode"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("CategoryCode",$param) and $param["CategoryCode"] !== null) {
            $this->CategoryCode = $param["CategoryCode"];
        }
    }
}
