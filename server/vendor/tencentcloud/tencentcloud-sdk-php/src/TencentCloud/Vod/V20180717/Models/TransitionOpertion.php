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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转场操作
 *
 * @method string getType() 获取转场类型，取值有：
<ul>
<li>图像的转场操作，用于两个视频片段图像间的转场处理：
<ul>
<li>ImageFadeInFadeOut：图像淡入淡出。 </li>
<li>BowTieHorizontal：水平蝴蝶结。 </li>
<li>BowTieVertical：垂直蝴蝶结。 </li>
<li>ButterflyWaveScrawler：晃动。 </li>
<li>Cannabisleaf：枫叶。 </li>
<li>Circle：弧形收放。 </li>
<li>CircleCrop：圆环聚拢。 </li>
<li>Circleopen：椭圆聚拢。 </li>
<li>Crosswarp：横向翘曲。 </li>
<li>Cube：立方体。 </li>
<li>DoomScreenTransition：幕布。 </li>
<li>Doorway：门廊。 </li>
<li>Dreamy：波浪。 </li>
<li>DreamyZoom：水平聚拢。 </li>
<li>FilmBurn：火烧云。 </li>
<li>GlitchMemories：抖动。 </li>
<li>Heart：心形。 </li>
<li>InvertedPageCurl：翻页。 </li>
<li>Luma：腐蚀。 </li>
<li>Mosaic：九宫格。 </li>
<li>Pinwheel：风车。 </li>
<li>PolarFunction：椭圆扩散。 </li>
<li>PolkaDotsCurtain：弧形扩散。 </li>
<li>Radial：雷达扫描 </li>
<li>RotateScaleFade：上下收放。 </li>
<li>Squeeze：上下聚拢。 </li>
<li>Swap：放大切换。 </li>
<li>Swirl：螺旋。 </li>
<li>UndulatingBurnOutSwirl：水流蔓延。 </li>
<li>Windowblinds：百叶窗。 </li>
<li>WipeDown：向下收起。 </li>
<li>WipeLeft：向左收起。 </li>
<li>WipeRight：向右收起。 </li>
<li>WipeUp：向上收起。 </li>
<li>ZoomInCircles：水波纹。 </li>
</ul>
</li>
<li>音频的转场操作，用于两个音频片段间的转场处理：
<ul>
<li>AudioFadeInFadeOut：声音淡入淡出。 </li>
</ul>
</li>
</ul>
 * @method void setType(string $Type) 设置转场类型，取值有：
<ul>
<li>图像的转场操作，用于两个视频片段图像间的转场处理：
<ul>
<li>ImageFadeInFadeOut：图像淡入淡出。 </li>
<li>BowTieHorizontal：水平蝴蝶结。 </li>
<li>BowTieVertical：垂直蝴蝶结。 </li>
<li>ButterflyWaveScrawler：晃动。 </li>
<li>Cannabisleaf：枫叶。 </li>
<li>Circle：弧形收放。 </li>
<li>CircleCrop：圆环聚拢。 </li>
<li>Circleopen：椭圆聚拢。 </li>
<li>Crosswarp：横向翘曲。 </li>
<li>Cube：立方体。 </li>
<li>DoomScreenTransition：幕布。 </li>
<li>Doorway：门廊。 </li>
<li>Dreamy：波浪。 </li>
<li>DreamyZoom：水平聚拢。 </li>
<li>FilmBurn：火烧云。 </li>
<li>GlitchMemories：抖动。 </li>
<li>Heart：心形。 </li>
<li>InvertedPageCurl：翻页。 </li>
<li>Luma：腐蚀。 </li>
<li>Mosaic：九宫格。 </li>
<li>Pinwheel：风车。 </li>
<li>PolarFunction：椭圆扩散。 </li>
<li>PolkaDotsCurtain：弧形扩散。 </li>
<li>Radial：雷达扫描 </li>
<li>RotateScaleFade：上下收放。 </li>
<li>Squeeze：上下聚拢。 </li>
<li>Swap：放大切换。 </li>
<li>Swirl：螺旋。 </li>
<li>UndulatingBurnOutSwirl：水流蔓延。 </li>
<li>Windowblinds：百叶窗。 </li>
<li>WipeDown：向下收起。 </li>
<li>WipeLeft：向左收起。 </li>
<li>WipeRight：向右收起。 </li>
<li>WipeUp：向上收起。 </li>
<li>ZoomInCircles：水波纹。 </li>
</ul>
</li>
<li>音频的转场操作，用于两个音频片段间的转场处理：
<ul>
<li>AudioFadeInFadeOut：声音淡入淡出。 </li>
</ul>
</li>
</ul>
 */
class TransitionOpertion extends AbstractModel
{
    /**
     * @var string 转场类型，取值有：
<ul>
<li>图像的转场操作，用于两个视频片段图像间的转场处理：
<ul>
<li>ImageFadeInFadeOut：图像淡入淡出。 </li>
<li>BowTieHorizontal：水平蝴蝶结。 </li>
<li>BowTieVertical：垂直蝴蝶结。 </li>
<li>ButterflyWaveScrawler：晃动。 </li>
<li>Cannabisleaf：枫叶。 </li>
<li>Circle：弧形收放。 </li>
<li>CircleCrop：圆环聚拢。 </li>
<li>Circleopen：椭圆聚拢。 </li>
<li>Crosswarp：横向翘曲。 </li>
<li>Cube：立方体。 </li>
<li>DoomScreenTransition：幕布。 </li>
<li>Doorway：门廊。 </li>
<li>Dreamy：波浪。 </li>
<li>DreamyZoom：水平聚拢。 </li>
<li>FilmBurn：火烧云。 </li>
<li>GlitchMemories：抖动。 </li>
<li>Heart：心形。 </li>
<li>InvertedPageCurl：翻页。 </li>
<li>Luma：腐蚀。 </li>
<li>Mosaic：九宫格。 </li>
<li>Pinwheel：风车。 </li>
<li>PolarFunction：椭圆扩散。 </li>
<li>PolkaDotsCurtain：弧形扩散。 </li>
<li>Radial：雷达扫描 </li>
<li>RotateScaleFade：上下收放。 </li>
<li>Squeeze：上下聚拢。 </li>
<li>Swap：放大切换。 </li>
<li>Swirl：螺旋。 </li>
<li>UndulatingBurnOutSwirl：水流蔓延。 </li>
<li>Windowblinds：百叶窗。 </li>
<li>WipeDown：向下收起。 </li>
<li>WipeLeft：向左收起。 </li>
<li>WipeRight：向右收起。 </li>
<li>WipeUp：向上收起。 </li>
<li>ZoomInCircles：水波纹。 </li>
</ul>
</li>
<li>音频的转场操作，用于两个音频片段间的转场处理：
<ul>
<li>AudioFadeInFadeOut：声音淡入淡出。 </li>
</ul>
</li>
</ul>
     */
    public $Type;

    /**
     * @param string $Type 转场类型，取值有：
<ul>
<li>图像的转场操作，用于两个视频片段图像间的转场处理：
<ul>
<li>ImageFadeInFadeOut：图像淡入淡出。 </li>
<li>BowTieHorizontal：水平蝴蝶结。 </li>
<li>BowTieVertical：垂直蝴蝶结。 </li>
<li>ButterflyWaveScrawler：晃动。 </li>
<li>Cannabisleaf：枫叶。 </li>
<li>Circle：弧形收放。 </li>
<li>CircleCrop：圆环聚拢。 </li>
<li>Circleopen：椭圆聚拢。 </li>
<li>Crosswarp：横向翘曲。 </li>
<li>Cube：立方体。 </li>
<li>DoomScreenTransition：幕布。 </li>
<li>Doorway：门廊。 </li>
<li>Dreamy：波浪。 </li>
<li>DreamyZoom：水平聚拢。 </li>
<li>FilmBurn：火烧云。 </li>
<li>GlitchMemories：抖动。 </li>
<li>Heart：心形。 </li>
<li>InvertedPageCurl：翻页。 </li>
<li>Luma：腐蚀。 </li>
<li>Mosaic：九宫格。 </li>
<li>Pinwheel：风车。 </li>
<li>PolarFunction：椭圆扩散。 </li>
<li>PolkaDotsCurtain：弧形扩散。 </li>
<li>Radial：雷达扫描 </li>
<li>RotateScaleFade：上下收放。 </li>
<li>Squeeze：上下聚拢。 </li>
<li>Swap：放大切换。 </li>
<li>Swirl：螺旋。 </li>
<li>UndulatingBurnOutSwirl：水流蔓延。 </li>
<li>Windowblinds：百叶窗。 </li>
<li>WipeDown：向下收起。 </li>
<li>WipeLeft：向左收起。 </li>
<li>WipeRight：向右收起。 </li>
<li>WipeUp：向上收起。 </li>
<li>ZoomInCircles：水波纹。 </li>
</ul>
</li>
<li>音频的转场操作，用于两个音频片段间的转场处理：
<ul>
<li>AudioFadeInFadeOut：声音淡入淡出。 </li>
</ul>
</li>
</ul>
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
    }
}
