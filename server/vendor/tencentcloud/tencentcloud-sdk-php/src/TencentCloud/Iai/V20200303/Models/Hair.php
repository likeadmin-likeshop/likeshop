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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 头发信息
 *
 * @method AttributeItem getLength() 获取头发长度信息。
AttributeItem对应的Type为 —— 0：光头，1：短发，2：中发，3：长发，4：绑发。
 * @method void setLength(AttributeItem $Length) 设置头发长度信息。
AttributeItem对应的Type为 —— 0：光头，1：短发，2：中发，3：长发，4：绑发。
 * @method AttributeItem getBang() 获取刘海信息。
AttributeItem对应的Type为 —— 0：无刘海，1：有刘海。
 * @method void setBang(AttributeItem $Bang) 设置刘海信息。
AttributeItem对应的Type为 —— 0：无刘海，1：有刘海。
 * @method AttributeItem getColor() 获取头发颜色信息。
AttributeItem对应的Type为 —— 0：黑色，1：金色，2：棕色，3：灰白色。
 * @method void setColor(AttributeItem $Color) 设置头发颜色信息。
AttributeItem对应的Type为 —— 0：黑色，1：金色，2：棕色，3：灰白色。
 */
class Hair extends AbstractModel
{
    /**
     * @var AttributeItem 头发长度信息。
AttributeItem对应的Type为 —— 0：光头，1：短发，2：中发，3：长发，4：绑发。
     */
    public $Length;

    /**
     * @var AttributeItem 刘海信息。
AttributeItem对应的Type为 —— 0：无刘海，1：有刘海。
     */
    public $Bang;

    /**
     * @var AttributeItem 头发颜色信息。
AttributeItem对应的Type为 —— 0：黑色，1：金色，2：棕色，3：灰白色。
     */
    public $Color;

    /**
     * @param AttributeItem $Length 头发长度信息。
AttributeItem对应的Type为 —— 0：光头，1：短发，2：中发，3：长发，4：绑发。
     * @param AttributeItem $Bang 刘海信息。
AttributeItem对应的Type为 —— 0：无刘海，1：有刘海。
     * @param AttributeItem $Color 头发颜色信息。
AttributeItem对应的Type为 —— 0：黑色，1：金色，2：棕色，3：灰白色。
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
            $this->Length = new AttributeItem();
            $this->Length->deserialize($param["Length"]);
        }

        if (array_key_exists("Bang",$param) and $param["Bang"] !== null) {
            $this->Bang = new AttributeItem();
            $this->Bang->deserialize($param["Bang"]);
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = new AttributeItem();
            $this->Color->deserialize($param["Color"]);
        }
    }
}
