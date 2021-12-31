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
 * 图片缩放处理。
 *
 * @method string getType() 获取图片缩放的操作类型。可选模式有：
<li>WidthFirst : 指定图片的宽为 Width ，高度等比缩放。</li>
<li>HeightFirst : 指定图片的高为 Height ，宽度等比缩放。</li>
<li>LongEdgeFirst : 指定图片的长边为 LongEdge ，短边等比缩放。</li>
<li>ShortEdgeFirst : 指定图片的短边为 ShortEdge ，长边等比缩放。</li>
<li>Force : 忽略原图宽高比例，指定图片宽度为 Width，高度为 Height ，强行缩放图片，可能导致目标图片变形。</li>
 * @method void setType(string $Type) 设置图片缩放的操作类型。可选模式有：
<li>WidthFirst : 指定图片的宽为 Width ，高度等比缩放。</li>
<li>HeightFirst : 指定图片的高为 Height ，宽度等比缩放。</li>
<li>LongEdgeFirst : 指定图片的长边为 LongEdge ，短边等比缩放。</li>
<li>ShortEdgeFirst : 指定图片的短边为 ShortEdge ，长边等比缩放。</li>
<li>Force : 忽略原图宽高比例，指定图片宽度为 Width，高度为 Height ，强行缩放图片，可能导致目标图片变形。</li>
 * @method integer getHeight() 获取输出图片的高度，单位为像素。当 Type 取值为 HeightFirst 或 Force 时此字段有效。
 * @method void setHeight(integer $Height) 设置输出图片的高度，单位为像素。当 Type 取值为 HeightFirst 或 Force 时此字段有效。
 * @method integer getWidth() 获取输出图片的宽度，单位为像素。当 Type 取值为 WidthFirst 或 Force 时此字段有效。
 * @method void setWidth(integer $Width) 设置输出图片的宽度，单位为像素。当 Type 取值为 WidthFirst 或 Force 时此字段有效。
 * @method integer getLongEdge() 获取输出图片的长边长度，单位为像素。当 Type 取值为 LongEdgeFirst 时此字段有效。
 * @method void setLongEdge(integer $LongEdge) 设置输出图片的长边长度，单位为像素。当 Type 取值为 LongEdgeFirst 时此字段有效。
 * @method integer getShortEdge() 获取输出图片的短边长度，单位为像素。当 Type 取值为 ShortEdgeFirst 时此字段有效。
 * @method void setShortEdge(integer $ShortEdge) 设置输出图片的短边长度，单位为像素。当 Type 取值为 ShortEdgeFirst 时此字段有效。
 */
class ImageScale extends AbstractModel
{
    /**
     * @var string 图片缩放的操作类型。可选模式有：
<li>WidthFirst : 指定图片的宽为 Width ，高度等比缩放。</li>
<li>HeightFirst : 指定图片的高为 Height ，宽度等比缩放。</li>
<li>LongEdgeFirst : 指定图片的长边为 LongEdge ，短边等比缩放。</li>
<li>ShortEdgeFirst : 指定图片的短边为 ShortEdge ，长边等比缩放。</li>
<li>Force : 忽略原图宽高比例，指定图片宽度为 Width，高度为 Height ，强行缩放图片，可能导致目标图片变形。</li>
     */
    public $Type;

    /**
     * @var integer 输出图片的高度，单位为像素。当 Type 取值为 HeightFirst 或 Force 时此字段有效。
     */
    public $Height;

    /**
     * @var integer 输出图片的宽度，单位为像素。当 Type 取值为 WidthFirst 或 Force 时此字段有效。
     */
    public $Width;

    /**
     * @var integer 输出图片的长边长度，单位为像素。当 Type 取值为 LongEdgeFirst 时此字段有效。
     */
    public $LongEdge;

    /**
     * @var integer 输出图片的短边长度，单位为像素。当 Type 取值为 ShortEdgeFirst 时此字段有效。
     */
    public $ShortEdge;

    /**
     * @param string $Type 图片缩放的操作类型。可选模式有：
<li>WidthFirst : 指定图片的宽为 Width ，高度等比缩放。</li>
<li>HeightFirst : 指定图片的高为 Height ，宽度等比缩放。</li>
<li>LongEdgeFirst : 指定图片的长边为 LongEdge ，短边等比缩放。</li>
<li>ShortEdgeFirst : 指定图片的短边为 ShortEdge ，长边等比缩放。</li>
<li>Force : 忽略原图宽高比例，指定图片宽度为 Width，高度为 Height ，强行缩放图片，可能导致目标图片变形。</li>
     * @param integer $Height 输出图片的高度，单位为像素。当 Type 取值为 HeightFirst 或 Force 时此字段有效。
     * @param integer $Width 输出图片的宽度，单位为像素。当 Type 取值为 WidthFirst 或 Force 时此字段有效。
     * @param integer $LongEdge 输出图片的长边长度，单位为像素。当 Type 取值为 LongEdgeFirst 时此字段有效。
     * @param integer $ShortEdge 输出图片的短边长度，单位为像素。当 Type 取值为 ShortEdgeFirst 时此字段有效。
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

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("LongEdge",$param) and $param["LongEdge"] !== null) {
            $this->LongEdge = $param["LongEdge"];
        }

        if (array_key_exists("ShortEdge",$param) and $param["ShortEdge"] !== null) {
            $this->ShortEdge = $param["ShortEdge"];
        }
    }
}
