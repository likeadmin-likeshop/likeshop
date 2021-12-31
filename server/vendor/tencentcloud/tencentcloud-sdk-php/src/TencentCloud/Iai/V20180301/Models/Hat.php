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
 * 帽子信息
 *
 * @method AttributeItem getStyle() 获取帽子佩戴状态信息。
AttributeItem对应的Type为 —— 0：不戴帽子，1：普通帽子，2：头盔，3：保安帽。
 * @method void setStyle(AttributeItem $Style) 设置帽子佩戴状态信息。
AttributeItem对应的Type为 —— 0：不戴帽子，1：普通帽子，2：头盔，3：保安帽。
 * @method AttributeItem getColor() 获取帽子颜色。
AttributeItem对应的Type为 —— 0：不戴帽子，1：红色系，2：黄色系，3：蓝色系，4：黑色系，5：灰白色系，6：混色系子。
 * @method void setColor(AttributeItem $Color) 设置帽子颜色。
AttributeItem对应的Type为 —— 0：不戴帽子，1：红色系，2：黄色系，3：蓝色系，4：黑色系，5：灰白色系，6：混色系子。
 */
class Hat extends AbstractModel
{
    /**
     * @var AttributeItem 帽子佩戴状态信息。
AttributeItem对应的Type为 —— 0：不戴帽子，1：普通帽子，2：头盔，3：保安帽。
     */
    public $Style;

    /**
     * @var AttributeItem 帽子颜色。
AttributeItem对应的Type为 —— 0：不戴帽子，1：红色系，2：黄色系，3：蓝色系，4：黑色系，5：灰白色系，6：混色系子。
     */
    public $Color;

    /**
     * @param AttributeItem $Style 帽子佩戴状态信息。
AttributeItem对应的Type为 —— 0：不戴帽子，1：普通帽子，2：头盔，3：保安帽。
     * @param AttributeItem $Color 帽子颜色。
AttributeItem对应的Type为 —— 0：不戴帽子，1：红色系，2：黄色系，3：蓝色系，4：黑色系，5：灰白色系，6：混色系子。
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
        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = new AttributeItem();
            $this->Style->deserialize($param["Style"]);
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = new AttributeItem();
            $this->Color->deserialize($param["Color"]);
        }
    }
}
