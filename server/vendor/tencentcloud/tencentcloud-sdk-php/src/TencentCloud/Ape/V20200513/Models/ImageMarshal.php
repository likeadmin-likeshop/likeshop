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
namespace TencentCloud\Ape\V20200513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片售卖组合信息
 *
 * @method integer getMarshalId() 获取售卖组合唯一标识
 * @method void setMarshalId(integer $MarshalId) 设置售卖组合唯一标识
 * @method integer getHeight() 获取图片高度
 * @method void setHeight(integer $Height) 设置图片高度
 * @method integer getWidth() 获取图片宽度
 * @method void setWidth(integer $Width) 设置图片宽度
 * @method integer getSize() 获取图片大小
 * @method void setSize(integer $Size) 设置图片大小
 * @method string getFormat() 获取图片格式
 * @method void setFormat(string $Format) 设置图片格式
 * @method integer getPrice() 获取图片价格(单位:分)
 * @method void setPrice(integer $Price) 设置图片价格(单位:分)
 * @method string getLicenseScope() 获取授权范围
 * @method void setLicenseScope(string $LicenseScope) 设置授权范围
 * @method boolean getIsVip() 获取是否支持VIP购买
 * @method void setIsVip(boolean $IsVip) 设置是否支持VIP购买
 * @method integer getLicenseScopeId() 获取授权范围id
 * @method void setLicenseScopeId(integer $LicenseScopeId) 设置授权范围id
 * @method string getDimensionsName() 获取尺寸
 * @method void setDimensionsName(string $DimensionsName) 设置尺寸
 * @method integer getDimensionsNameId() 获取尺寸id
 * @method void setDimensionsNameId(integer $DimensionsNameId) 设置尺寸id
 */
class ImageMarshal extends AbstractModel
{
    /**
     * @var integer 售卖组合唯一标识
     */
    public $MarshalId;

    /**
     * @var integer 图片高度
     */
    public $Height;

    /**
     * @var integer 图片宽度
     */
    public $Width;

    /**
     * @var integer 图片大小
     */
    public $Size;

    /**
     * @var string 图片格式
     */
    public $Format;

    /**
     * @var integer 图片价格(单位:分)
     */
    public $Price;

    /**
     * @var string 授权范围
     */
    public $LicenseScope;

    /**
     * @var boolean 是否支持VIP购买
     */
    public $IsVip;

    /**
     * @var integer 授权范围id
     */
    public $LicenseScopeId;

    /**
     * @var string 尺寸
     */
    public $DimensionsName;

    /**
     * @var integer 尺寸id
     */
    public $DimensionsNameId;

    /**
     * @param integer $MarshalId 售卖组合唯一标识
     * @param integer $Height 图片高度
     * @param integer $Width 图片宽度
     * @param integer $Size 图片大小
     * @param string $Format 图片格式
     * @param integer $Price 图片价格(单位:分)
     * @param string $LicenseScope 授权范围
     * @param boolean $IsVip 是否支持VIP购买
     * @param integer $LicenseScopeId 授权范围id
     * @param string $DimensionsName 尺寸
     * @param integer $DimensionsNameId 尺寸id
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
        if (array_key_exists("MarshalId",$param) and $param["MarshalId"] !== null) {
            $this->MarshalId = $param["MarshalId"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("LicenseScope",$param) and $param["LicenseScope"] !== null) {
            $this->LicenseScope = $param["LicenseScope"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("LicenseScopeId",$param) and $param["LicenseScopeId"] !== null) {
            $this->LicenseScopeId = $param["LicenseScopeId"];
        }

        if (array_key_exists("DimensionsName",$param) and $param["DimensionsName"] !== null) {
            $this->DimensionsName = $param["DimensionsName"];
        }

        if (array_key_exists("DimensionsNameId",$param) and $param["DimensionsNameId"] !== null) {
            $this->DimensionsNameId = $param["DimensionsNameId"];
        }
    }
}
