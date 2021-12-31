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
 * 图片信息条目
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
 * @method string getKeywords() 获取图片关键词
 * @method void setKeywords(string $Keywords) 设置图片关键词
 * @method integer getWidth() 获取宽
 * @method void setWidth(integer $Width) 设置宽
 * @method integer getHeight() 获取高
 * @method void setHeight(integer $Height) 设置高
 */
class ImageItem extends AbstractModel
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
     * @var string 图片关键词
     */
    public $Keywords;

    /**
     * @var integer 宽
     */
    public $Width;

    /**
     * @var integer 高
     */
    public $Height;

    /**
     * @param integer $ImageId 图片ID
     * @param string $Title 图片标题
     * @param string $Description 图片描述
     * @param string $PreviewUrl 图片预览链接
     * @param string $ThumbUrl 图片缩略图
     * @param string $Vendor 图片供应商
     * @param string $Keywords 图片关键词
     * @param integer $Width 宽
     * @param integer $Height 高
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

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
