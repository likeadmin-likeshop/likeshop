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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 雪碧图
 *
 * @method integer getHeight() 获取雪碧图小图的高度。
 * @method void setHeight(integer $Height) 设置雪碧图小图的高度。
 * @method integer getWidth() 获取雪碧图小图的宽度。
 * @method void setWidth(integer $Width) 设置雪碧图小图的宽度。
 * @method integer getTotalCount() 获取雪碧图小图的总数量。
 * @method void setTotalCount(integer $TotalCount) 设置雪碧图小图的总数量。
 * @method array getImageUrlSet() 获取截取雪碧图输出的地址。
 * @method void setImageUrlSet(array $ImageUrlSet) 设置截取雪碧图输出的地址。
 * @method string getWebVttUrl() 获取雪碧图子图位置与时间关系的 WebVtt 文件地址。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
 * @method void setWebVttUrl(string $WebVttUrl) 设置雪碧图子图位置与时间关系的 WebVtt 文件地址。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
 */
class MediaImageSpriteInfo extends AbstractModel
{
    /**
     * @var integer 雪碧图小图的高度。
     */
    public $Height;

    /**
     * @var integer 雪碧图小图的宽度。
     */
    public $Width;

    /**
     * @var integer 雪碧图小图的总数量。
     */
    public $TotalCount;

    /**
     * @var array 截取雪碧图输出的地址。
     */
    public $ImageUrlSet;

    /**
     * @var string 雪碧图子图位置与时间关系的 WebVtt 文件地址。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
     */
    public $WebVttUrl;

    /**
     * @param integer $Height 雪碧图小图的高度。
     * @param integer $Width 雪碧图小图的宽度。
     * @param integer $TotalCount 雪碧图小图的总数量。
     * @param array $ImageUrlSet 截取雪碧图输出的地址。
     * @param string $WebVttUrl 雪碧图子图位置与时间关系的 WebVtt 文件地址。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
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
        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ImageUrlSet",$param) and $param["ImageUrlSet"] !== null) {
            $this->ImageUrlSet = $param["ImageUrlSet"];
        }

        if (array_key_exists("WebVttUrl",$param) and $param["WebVttUrl"] !== null) {
            $this->WebVttUrl = $param["WebVttUrl"];
        }
    }
}
