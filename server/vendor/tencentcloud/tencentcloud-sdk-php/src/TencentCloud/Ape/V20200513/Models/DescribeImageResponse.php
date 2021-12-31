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
 * DescribeImage返回参数结构体
 *
 * @method integer getImageId() 获取图片ID
 * @method void setImageId(integer $ImageId) 设置图片ID
 * @method string getTitle() 获取图片标题
 * @method void setTitle(string $Title) 设置图片标题
 * @method string getDescription() 获取图片描述
 * @method void setDescription(string $Description) 设置图片描述
 * @method string getPreviewUrl() 获取图片预览链接
 * @method void setPreviewUrl(string $PreviewUrl) 设置图片预览链接
 * @method string getThumbUrl() 获取图片缩略图
 * @method void setThumbUrl(string $ThumbUrl) 设置图片缩略图
 * @method string getVendor() 获取图片供应商
 * @method void setVendor(string $Vendor) 设置图片供应商
 * @method array getMarshals() 获取图片售卖组合信息
 * @method void setMarshals(array $Marshals) 设置图片售卖组合信息
 * @method integer getWidth() 获取宽
 * @method void setWidth(integer $Width) 设置宽
 * @method integer getHeight() 获取高
 * @method void setHeight(integer $Height) 设置高
 * @method string getImageFormat() 获取图片格式 jpg/eps/psd/...
 * @method void setImageFormat(string $ImageFormat) 设置图片格式 jpg/eps/psd/...
 * @method string getImageSenseType() 获取图片类型 摄影图片、插画、漫画、图表、矢量、psd、全景、gif、模板
 * @method void setImageSenseType(string $ImageSenseType) 设置图片类型 摄影图片、插画、漫画、图表、矢量、psd、全景、gif、模板
 * @method string getKeywords() 获取关键词，多关键词用空格分隔
 * @method void setKeywords(string $Keywords) 设置关键词，多关键词用空格分隔
 * @method integer getLayeredGalleryId() 获取分层图库id
 * @method void setLayeredGalleryId(integer $LayeredGalleryId) 设置分层图库id
 * @method string getOrientation() 获取构图方式：horizontal:横图、vertical:竖图、square:方图
 * @method void setOrientation(string $Orientation) 设置构图方式：horizontal:横图、vertical:竖图、square:方图
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageResponse extends AbstractModel
{
    /**
     * @var integer 图片ID
     */
    public $ImageId;

    /**
     * @var string 图片标题
     */
    public $Title;

    /**
     * @var string 图片描述
     */
    public $Description;

    /**
     * @var string 图片预览链接
     */
    public $PreviewUrl;

    /**
     * @var string 图片缩略图
     */
    public $ThumbUrl;

    /**
     * @var string 图片供应商
     */
    public $Vendor;

    /**
     * @var array 图片售卖组合信息
     */
    public $Marshals;

    /**
     * @var integer 宽
     */
    public $Width;

    /**
     * @var integer 高
     */
    public $Height;

    /**
     * @var string 图片格式 jpg/eps/psd/...
     */
    public $ImageFormat;

    /**
     * @var string 图片类型 摄影图片、插画、漫画、图表、矢量、psd、全景、gif、模板
     */
    public $ImageSenseType;

    /**
     * @var string 关键词，多关键词用空格分隔
     */
    public $Keywords;

    /**
     * @var integer 分层图库id
     */
    public $LayeredGalleryId;

    /**
     * @var string 构图方式：horizontal:横图、vertical:竖图、square:方图
     */
    public $Orientation;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ImageId 图片ID
     * @param string $Title 图片标题
     * @param string $Description 图片描述
     * @param string $PreviewUrl 图片预览链接
     * @param string $ThumbUrl 图片缩略图
     * @param string $Vendor 图片供应商
     * @param array $Marshals 图片售卖组合信息
     * @param integer $Width 宽
     * @param integer $Height 高
     * @param string $ImageFormat 图片格式 jpg/eps/psd/...
     * @param string $ImageSenseType 图片类型 摄影图片、插画、漫画、图表、矢量、psd、全景、gif、模板
     * @param string $Keywords 关键词，多关键词用空格分隔
     * @param integer $LayeredGalleryId 分层图库id
     * @param string $Orientation 构图方式：horizontal:横图、vertical:竖图、square:方图
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("ThumbUrl",$param) and $param["ThumbUrl"] !== null) {
            $this->ThumbUrl = $param["ThumbUrl"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("Marshals",$param) and $param["Marshals"] !== null) {
            $this->Marshals = [];
            foreach ($param["Marshals"] as $key => $value){
                $obj = new ImageMarshal();
                $obj->deserialize($value);
                array_push($this->Marshals, $obj);
            }
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ImageFormat",$param) and $param["ImageFormat"] !== null) {
            $this->ImageFormat = $param["ImageFormat"];
        }

        if (array_key_exists("ImageSenseType",$param) and $param["ImageSenseType"] !== null) {
            $this->ImageSenseType = $param["ImageSenseType"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("LayeredGalleryId",$param) and $param["LayeredGalleryId"] !== null) {
            $this->LayeredGalleryId = $param["LayeredGalleryId"];
        }

        if (array_key_exists("Orientation",$param) and $param["Orientation"] !== null) {
            $this->Orientation = $param["Orientation"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
