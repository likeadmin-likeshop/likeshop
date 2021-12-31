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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸属性中的发型信息。
 *
 * @method integer getLength() 获取0：光头，1：短发，2：中发，3：长发，4：绑发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLength(integer $Length) 设置0：光头，1：短发，2：中发，3：长发，4：绑发
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBang() 获取0：有刘海，1：无刘海
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBang(integer $Bang) 设置0：有刘海，1：无刘海
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColor() 获取0：黑色，1：金色，2：棕色，3：灰白色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColor(integer $Color) 设置0：黑色，1：金色，2：棕色，3：灰白色
注意：此字段可能返回 null，表示取不到有效值。
 */
class FaceHairAttributesInfo extends AbstractModel
{
    /**
     * @var integer 0：光头，1：短发，2：中发，3：长发，4：绑发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Length;

    /**
     * @var integer 0：有刘海，1：无刘海
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bang;

    /**
     * @var integer 0：黑色，1：金色，2：棕色，3：灰白色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Color;

    /**
     * @param integer $Length 0：光头，1：短发，2：中发，3：长发，4：绑发
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bang 0：有刘海，1：无刘海
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Color 0：黑色，1：金色，2：棕色，3：灰白色
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
        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Bang",$param) and $param["Bang"] !== null) {
            $this->Bang = $param["Bang"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
