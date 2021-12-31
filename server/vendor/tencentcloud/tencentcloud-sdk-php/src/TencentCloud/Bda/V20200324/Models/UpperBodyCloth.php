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
 * 上衣属性信息
 *
 * @method UpperBodyClothTexture getTexture() 获取上衣纹理信息。
 * @method void setTexture(UpperBodyClothTexture $Texture) 设置上衣纹理信息。
 * @method UpperBodyClothColor getColor() 获取上衣颜色信息。
 * @method void setColor(UpperBodyClothColor $Color) 设置上衣颜色信息。
 * @method UpperBodyClothSleeve getSleeve() 获取上衣衣袖信息。
 * @method void setSleeve(UpperBodyClothSleeve $Sleeve) 设置上衣衣袖信息。
 */
class UpperBodyCloth extends AbstractModel
{
    /**
     * @var UpperBodyClothTexture 上衣纹理信息。
     */
    public $Texture;

    /**
     * @var UpperBodyClothColor 上衣颜色信息。
     */
    public $Color;

    /**
     * @var UpperBodyClothSleeve 上衣衣袖信息。
     */
    public $Sleeve;

    /**
     * @param UpperBodyClothTexture $Texture 上衣纹理信息。
     * @param UpperBodyClothColor $Color 上衣颜色信息。
     * @param UpperBodyClothSleeve $Sleeve 上衣衣袖信息。
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
        if (array_key_exists("Texture",$param) and $param["Texture"] !== null) {
            $this->Texture = new UpperBodyClothTexture();
            $this->Texture->deserialize($param["Texture"]);
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = new UpperBodyClothColor();
            $this->Color->deserialize($param["Color"]);
        }

        if (array_key_exists("Sleeve",$param) and $param["Sleeve"] !== null) {
            $this->Sleeve = new UpperBodyClothSleeve();
            $this->Sleeve->deserialize($param["Sleeve"]);
        }
    }
}
