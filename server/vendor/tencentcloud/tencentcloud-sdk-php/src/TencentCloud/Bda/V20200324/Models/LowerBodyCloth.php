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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 下衣属性信息
 *
 * @method LowerBodyClothColor getColor() 获取下衣颜色信息。
 * @method void setColor(LowerBodyClothColor $Color) 设置下衣颜色信息。
 * @method LowerBodyClothLength getLength() 获取下衣长度信息 。
 * @method void setLength(LowerBodyClothLength $Length) 设置下衣长度信息 。
 * @method LowerBodyClothType getType() 获取下衣类型信息。
 * @method void setType(LowerBodyClothType $Type) 设置下衣类型信息。
 */
class LowerBodyCloth extends AbstractModel
{
    /**
     * @var LowerBodyClothColor 下衣颜色信息。
     */
    public $Color;

    /**
     * @var LowerBodyClothLength 下衣长度信息 。
     */
    public $Length;

    /**
     * @var LowerBodyClothType 下衣类型信息。
     */
    public $Type;

    /**
     * @param LowerBodyClothColor $Color 下衣颜色信息。
     * @param LowerBodyClothLength $Length 下衣长度信息 。
     * @param LowerBodyClothType $Type 下衣类型信息。
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
        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = new LowerBodyClothColor();
            $this->Color->deserialize($param["Color"]);
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = new LowerBodyClothLength();
            $this->Length->deserialize($param["Length"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = new LowerBodyClothType();
            $this->Type->deserialize($param["Type"]);
        }
    }
}
