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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编辑处理/剪切任务/输出形式信息
 *
 * @method string getType() 获取输出类型，可选值：
Static：静态图；
Dynamic：动态图；
Sprite：雪碧图；
Video：视频。

注1：不同类型时，对应的 TargetInfo.Format 格式支持如下：
Static：jpg、png；
Dynamic：gif；
Sprite：jpg、png；
Video：mp4。

注2：当 Type=Sprite时，TargetInfo指定的尺寸表示小图的大小，最终结果尺寸以输出为准。
 * @method void setType(string $Type) 设置输出类型，可选值：
Static：静态图；
Dynamic：动态图；
Sprite：雪碧图；
Video：视频。

注1：不同类型时，对应的 TargetInfo.Format 格式支持如下：
Static：jpg、png；
Dynamic：gif；
Sprite：jpg、png；
Video：mp4。

注2：当 Type=Sprite时，TargetInfo指定的尺寸表示小图的大小，最终结果尺寸以输出为准。
 * @method string getFillType() 获取背景填充方式，可选值：
White：白色填充；
Black：黑色填充；
Stretch：拉伸；
Gaussian：高斯模糊；
默认White。
 * @method void setFillType(string $FillType) 设置背景填充方式，可选值：
White：白色填充；
Black：黑色填充；
Stretch：拉伸；
Gaussian：高斯模糊；
默认White。
 * @method integer getSpriteRowCount() 获取Type=Sprite时有效，表示雪碧图行数，范围为 [1,200]，默认100。
 * @method void setSpriteRowCount(integer $SpriteRowCount) 设置Type=Sprite时有效，表示雪碧图行数，范围为 [1,200]，默认100。
 * @method integer getSpriteColumnCount() 获取Type=Sprite时有效，表示雪碧图列数，范围为 [1,200]，默认100。
 * @method void setSpriteColumnCount(integer $SpriteColumnCount) 设置Type=Sprite时有效，表示雪碧图列数，范围为 [1,200]，默认100。
 */
class MediaCuttingOutForm extends AbstractModel
{
    /**
     * @var string 输出类型，可选值：
Static：静态图；
Dynamic：动态图；
Sprite：雪碧图；
Video：视频。

注1：不同类型时，对应的 TargetInfo.Format 格式支持如下：
Static：jpg、png；
Dynamic：gif；
Sprite：jpg、png；
Video：mp4。

注2：当 Type=Sprite时，TargetInfo指定的尺寸表示小图的大小，最终结果尺寸以输出为准。
     */
    public $Type;

    /**
     * @var string 背景填充方式，可选值：
White：白色填充；
Black：黑色填充；
Stretch：拉伸；
Gaussian：高斯模糊；
默认White。
     */
    public $FillType;

    /**
     * @var integer Type=Sprite时有效，表示雪碧图行数，范围为 [1,200]，默认100。
     */
    public $SpriteRowCount;

    /**
     * @var integer Type=Sprite时有效，表示雪碧图列数，范围为 [1,200]，默认100。
     */
    public $SpriteColumnCount;

    /**
     * @param string $Type 输出类型，可选值：
Static：静态图；
Dynamic：动态图；
Sprite：雪碧图；
Video：视频。

注1：不同类型时，对应的 TargetInfo.Format 格式支持如下：
Static：jpg、png；
Dynamic：gif；
Sprite：jpg、png；
Video：mp4。

注2：当 Type=Sprite时，TargetInfo指定的尺寸表示小图的大小，最终结果尺寸以输出为准。
     * @param string $FillType 背景填充方式，可选值：
White：白色填充；
Black：黑色填充；
Stretch：拉伸；
Gaussian：高斯模糊；
默认White。
     * @param integer $SpriteRowCount Type=Sprite时有效，表示雪碧图行数，范围为 [1,200]，默认100。
     * @param integer $SpriteColumnCount Type=Sprite时有效，表示雪碧图列数，范围为 [1,200]，默认100。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("SpriteRowCount",$param) and $param["SpriteRowCount"] !== null) {
            $this->SpriteRowCount = $param["SpriteRowCount"];
        }

        if (array_key_exists("SpriteColumnCount",$param) and $param["SpriteColumnCount"] !== null) {
            $this->SpriteColumnCount = $param["SpriteColumnCount"];
        }
    }
}
