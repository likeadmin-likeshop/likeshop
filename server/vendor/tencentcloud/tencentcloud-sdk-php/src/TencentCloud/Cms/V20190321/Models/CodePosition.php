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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 二维码在图片中的位置，由边界点的坐标表示
 *
 * @method float getFloatX() 获取二维码边界点X轴坐标
 * @method void setFloatX(float $FloatX) 设置二维码边界点X轴坐标
 * @method float getFloatY() 获取二维码边界点Y轴坐标
 * @method void setFloatY(float $FloatY) 设置二维码边界点Y轴坐标
 */
class CodePosition extends AbstractModel
{
    /**
     * @var float 二维码边界点X轴坐标
     */
    public $FloatX;

    /**
     * @var float 二维码边界点Y轴坐标
     */
    public $FloatY;

    /**
     * @param float $FloatX 二维码边界点X轴坐标
     * @param float $FloatY 二维码边界点Y轴坐标
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
        if (array_key_exists("FloatX",$param) and $param["FloatX"] !== null) {
            $this->FloatX = $param["FloatX"];
        }

        if (array_key_exists("FloatY",$param) and $param["FloatY"] !== null) {
            $this->FloatY = $param["FloatY"];
        }
    }
}
