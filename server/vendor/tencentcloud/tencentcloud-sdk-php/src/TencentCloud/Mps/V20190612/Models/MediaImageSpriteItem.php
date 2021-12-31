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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 雪碧图信息
 *
 * @method integer getDefinition() 获取雪碧图规格，参见[雪碧图参数模板](https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method void setDefinition(integer $Definition) 设置雪碧图规格，参见[雪碧图参数模板](https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method integer getHeight() 获取雪碧图小图的高度。
 * @method void setHeight(integer $Height) 设置雪碧图小图的高度。
 * @method integer getWidth() 获取雪碧图小图的宽度。
 * @method void setWidth(integer $Width) 设置雪碧图小图的宽度。
 * @method integer getTotalCount() 获取每一张雪碧图大图里小图的数量。
 * @method void setTotalCount(integer $TotalCount) 设置每一张雪碧图大图里小图的数量。
 * @method array getImagePathSet() 获取每一张雪碧图大图的路径。
 * @method void setImagePathSet(array $ImagePathSet) 设置每一张雪碧图大图的路径。
 * @method string getWebVttPath() 获取雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
 * @method void setWebVttPath(string $WebVttPath) 设置雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
 * @method TaskOutputStorage getStorage() 获取雪碧图文件的存储位置。
 * @method void setStorage(TaskOutputStorage $Storage) 设置雪碧图文件的存储位置。
 */
class MediaImageSpriteItem extends AbstractModel
{
    /**
     * @var integer 雪碧图规格，参见[雪碧图参数模板](https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     */
    public $Definition;

    /**
     * @var integer 雪碧图小图的高度。
     */
    public $Height;

    /**
     * @var integer 雪碧图小图的宽度。
     */
    public $Width;

    /**
     * @var integer 每一张雪碧图大图里小图的数量。
     */
    public $TotalCount;

    /**
     * @var array 每一张雪碧图大图的路径。
     */
    public $ImagePathSet;

    /**
     * @var string 雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
     */
    public $WebVttPath;

    /**
     * @var TaskOutputStorage 雪碧图文件的存储位置。
     */
    public $Storage;

    /**
     * @param integer $Definition 雪碧图规格，参见[雪碧图参数模板](https://cloud.tencent.com/document/product/266/33480#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     * @param integer $Height 雪碧图小图的高度。
     * @param integer $Width 雪碧图小图的宽度。
     * @param integer $TotalCount 每一张雪碧图大图里小图的数量。
     * @param array $ImagePathSet 每一张雪碧图大图的路径。
     * @param string $WebVttPath 雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
     * @param TaskOutputStorage $Storage 雪碧图文件的存储位置。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
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

        if (array_key_exists("ImagePathSet",$param) and $param["ImagePathSet"] !== null) {
            $this->ImagePathSet = $param["ImagePathSet"];
        }

        if (array_key_exists("WebVttPath",$param) and $param["WebVttPath"] !== null) {
            $this->WebVttPath = $param["WebVttPath"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new TaskOutputStorage();
            $this->Storage->deserialize($param["Storage"]);
        }
    }
}
