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
 * 图像坐标信息。
 *
 * @method integer getX() 获取左上角横坐标。
 * @method void setX(integer $X) 设置左上角横坐标。
 * @method integer getY() 获取左上角纵坐标。
 * @method void setY(integer $Y) 设置左上角纵坐标。
 * @method integer getWidth() 获取人体宽度。
 * @method void setWidth(integer $Width) 设置人体宽度。
 * @method integer getHeight() 获取人体高度。
 * @method void setHeight(integer $Height) 设置人体高度。
 * @method string getLabel() 获取分割选项名称。
 * @method void setLabel(string $Label) 设置分割选项名称。
 */
class ImageRect extends AbstractModel
{
    /**
     * @var integer 左上角横坐标。
     */
    public $X;

    /**
     * @var integer 左上角纵坐标。
     */
    public $Y;

    /**
     * @var integer 人体宽度。
     */
    public $Width;

    /**
     * @var integer 人体高度。
     */
    public $Height;

    /**
     * @var string 分割选项名称。
     */
    public $Label;

    /**
     * @param integer $X 左上角横坐标。
     * @param integer $Y 左上角纵坐标。
     * @param integer $Width 人体宽度。
     * @param integer $Height 人体高度。
     * @param string $Label 分割选项名称。
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
