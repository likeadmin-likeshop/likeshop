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
 * 图片中心裁剪处理。
 *
 * @method string getType() 获取图片的裁剪模式，可选 Circle 和 Rectangle。
<li>Circle ： 内切圆裁剪，输出图片半径为 Radius。</li>
<li>Rectangle ： 矩形裁剪，输出图片宽为 Width ， 高为 Height。</li>
 * @method void setType(string $Type) 设置图片的裁剪模式，可选 Circle 和 Rectangle。
<li>Circle ： 内切圆裁剪，输出图片半径为 Radius。</li>
<li>Rectangle ： 矩形裁剪，输出图片宽为 Width ， 高为 Height。</li>
 * @method integer getWidth() 获取输出图片的宽度，单位为像素，当 Type 取值为 Rectangle 时有效。
 * @method void setWidth(integer $Width) 设置输出图片的宽度，单位为像素，当 Type 取值为 Rectangle 时有效。
 * @method integer getHeight() 获取输出图片的高度，单位为像素，当 Type 取值为 Rectangle 时有效。
 * @method void setHeight(integer $Height) 设置输出图片的高度，单位为像素，当 Type 取值为 Rectangle 时有效。
 * @method integer getRadius() 获取输出图片的半径，单位为像素，当 Type 取值为 Circle 时有效。
 * @method void setRadius(integer $Radius) 设置输出图片的半径，单位为像素，当 Type 取值为 Circle 时有效。
 */
class ImageCenterCut extends AbstractModel
{
    /**
     * @var string 图片的裁剪模式，可选 Circle 和 Rectangle。
<li>Circle ： 内切圆裁剪，输出图片半径为 Radius。</li>
<li>Rectangle ： 矩形裁剪，输出图片宽为 Width ， 高为 Height。</li>
     */
    public $Type;

    /**
     * @var integer 输出图片的宽度，单位为像素，当 Type 取值为 Rectangle 时有效。
     */
    public $Width;

    /**
     * @var integer 输出图片的高度，单位为像素，当 Type 取值为 Rectangle 时有效。
     */
    public $Height;

    /**
     * @var integer 输出图片的半径，单位为像素，当 Type 取值为 Circle 时有效。
     */
    public $Radius;

    /**
     * @param string $Type 图片的裁剪模式，可选 Circle 和 Rectangle。
<li>Circle ： 内切圆裁剪，输出图片半径为 Radius。</li>
<li>Rectangle ： 矩形裁剪，输出图片宽为 Width ， 高为 Height。</li>
     * @param integer $Width 输出图片的宽度，单位为像素，当 Type 取值为 Rectangle 时有效。
     * @param integer $Height 输出图片的高度，单位为像素，当 Type 取值为 Rectangle 时有效。
     * @param integer $Radius 输出图片的半径，单位为像素，当 Type 取值为 Circle 时有效。
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Radius",$param) and $param["Radius"] !== null) {
            $this->Radius = $param["Radius"];
        }
    }
}
