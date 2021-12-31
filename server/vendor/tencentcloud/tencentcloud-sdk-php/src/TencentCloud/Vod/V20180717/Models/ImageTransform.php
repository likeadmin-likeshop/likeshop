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
 * 图像旋转、翻转等操作
 *
 * @method string getType() 获取类型，取值有：
<li> Rotate：图像旋转。</li>
<li> Flip：图像翻转。</li>
 * @method void setType(string $Type) 设置类型，取值有：
<li> Rotate：图像旋转。</li>
<li> Flip：图像翻转。</li>
 * @method float getRotateAngle() 获取图像以中心点为原点进行旋转的角度，取值范围0~360。当 Type = Rotate 时有效。
 * @method void setRotateAngle(float $RotateAngle) 设置图像以中心点为原点进行旋转的角度，取值范围0~360。当 Type = Rotate 时有效。
 * @method string getFlip() 获取图像翻转动作，取值有：
<li>Horizental：水平翻转，即左右镜像。</li>
<li>Vertical：垂直翻转，即上下镜像。</li>
当 Type = Flip 时有效。
 * @method void setFlip(string $Flip) 设置图像翻转动作，取值有：
<li>Horizental：水平翻转，即左右镜像。</li>
<li>Vertical：垂直翻转，即上下镜像。</li>
当 Type = Flip 时有效。
 */
class ImageTransform extends AbstractModel
{
    /**
     * @var string 类型，取值有：
<li> Rotate：图像旋转。</li>
<li> Flip：图像翻转。</li>
     */
    public $Type;

    /**
     * @var float 图像以中心点为原点进行旋转的角度，取值范围0~360。当 Type = Rotate 时有效。
     */
    public $RotateAngle;

    /**
     * @var string 图像翻转动作，取值有：
<li>Horizental：水平翻转，即左右镜像。</li>
<li>Vertical：垂直翻转，即上下镜像。</li>
当 Type = Flip 时有效。
     */
    public $Flip;

    /**
     * @param string $Type 类型，取值有：
<li> Rotate：图像旋转。</li>
<li> Flip：图像翻转。</li>
     * @param float $RotateAngle 图像以中心点为原点进行旋转的角度，取值范围0~360。当 Type = Rotate 时有效。
     * @param string $Flip 图像翻转动作，取值有：
<li>Horizental：水平翻转，即左右镜像。</li>
<li>Vertical：垂直翻转，即上下镜像。</li>
当 Type = Flip 时有效。
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

        if (array_key_exists("RotateAngle",$param) and $param["RotateAngle"] !== null) {
            $this->RotateAngle = $param["RotateAngle"];
        }

        if (array_key_exists("Flip",$param) and $param["Flip"] !== null) {
            $this->Flip = $param["Flip"];
        }
    }
}
