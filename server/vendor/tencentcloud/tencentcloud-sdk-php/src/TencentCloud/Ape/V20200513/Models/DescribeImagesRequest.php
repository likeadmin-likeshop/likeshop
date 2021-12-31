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
 * DescribeImages请求参数结构体
 *
 * @method integer getOffset() 获取页偏移量
 * @method void setOffset(integer $Offset) 设置页偏移量
 * @method integer getLimit() 获取页大小
 * @method void setLimit(integer $Limit) 设置页大小
 * @method string getKeyword() 获取搜索关键字
 * @method void setKeyword(string $Keyword) 设置搜索关键字
 * @method string getOrientation() 获取构图方式，可选以下值：horizontal、vertical、square，分别代表以下含义：横图、竖图、方图
 * @method void setOrientation(string $Orientation) 设置构图方式，可选以下值：horizontal、vertical、square，分别代表以下含义：横图、竖图、方图
 * @method string getImageSenseType() 获取图片类型，可选以下值：照片、插画
 * @method void setImageSenseType(string $ImageSenseType) 设置图片类型，可选以下值：照片、插画
 * @method array getLayeredGalleryIds() 获取分层图库id数组，可选以下数值：1(基础)，2(精选)，3(高级)
 * @method void setLayeredGalleryIds(array $LayeredGalleryIds) 设置分层图库id数组，可选以下数值：1(基础)，2(精选)，3(高级)
 */
class DescribeImagesRequest extends AbstractModel
{
    /**
     * @var integer 页偏移量
     */
    public $Offset;

    /**
     * @var integer 页大小
     */
    public $Limit;

    /**
     * @var string 搜索关键字
     */
    public $Keyword;

    /**
     * @var string 构图方式，可选以下值：horizontal、vertical、square，分别代表以下含义：横图、竖图、方图
     */
    public $Orientation;

    /**
     * @var string 图片类型，可选以下值：照片、插画
     */
    public $ImageSenseType;

    /**
     * @var array 分层图库id数组，可选以下数值：1(基础)，2(精选)，3(高级)
     */
    public $LayeredGalleryIds;

    /**
     * @param integer $Offset 页偏移量
     * @param integer $Limit 页大小
     * @param string $Keyword 搜索关键字
     * @param string $Orientation 构图方式，可选以下值：horizontal、vertical、square，分别代表以下含义：横图、竖图、方图
     * @param string $ImageSenseType 图片类型，可选以下值：照片、插画
     * @param array $LayeredGalleryIds 分层图库id数组，可选以下数值：1(基础)，2(精选)，3(高级)
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Orientation",$param) and $param["Orientation"] !== null) {
            $this->Orientation = $param["Orientation"];
        }

        if (array_key_exists("ImageSenseType",$param) and $param["ImageSenseType"] !== null) {
            $this->ImageSenseType = $param["ImageSenseType"];
        }

        if (array_key_exists("LayeredGalleryIds",$param) and $param["LayeredGalleryIds"] !== null) {
            $this->LayeredGalleryIds = $param["LayeredGalleryIds"];
        }
    }
}
