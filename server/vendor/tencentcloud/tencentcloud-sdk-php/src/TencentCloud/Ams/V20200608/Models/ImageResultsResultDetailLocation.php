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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片详情位置信息
 *
 * @method float getX() 获取x坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setX(float $X) 设置x坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getY() 获取y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setY(float $Y) 设置y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRotate() 获取旋转角度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotate(float $Rotate) 设置旋转角度
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageResultsResultDetailLocation extends AbstractModel
{
    /**
     * @var float x坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $X;

    /**
     * @var float y坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Y;

    /**
     * @var integer 宽度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 高度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var float 旋转角度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rotate;

    /**
     * @param float $X x坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Y y坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 宽度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 高度
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Rotate 旋转角度
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }
    }
}
