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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 画像标签详情数据对象
 *
 * @method LabelValue getValue() 获取标签数据对象
 * @method void setValue(LabelValue $Value) 设置标签数据对象
 * @method string getLabel() 获取标签表述，如"汽车资讯"、"游戏#手游"等
 * @method void setLabel(string $Label) 设置标签表述，如"汽车资讯"、"游戏#手游"等
 */
class LabelDetailData extends AbstractModel
{
    /**
     * @var LabelValue 标签数据对象
     */
    public $Value;

    /**
     * @var string 标签表述，如"汽车资讯"、"游戏#手游"等
     */
    public $Label;

    /**
     * @param LabelValue $Value 标签数据对象
     * @param string $Label 标签表述，如"汽车资讯"、"游戏#手游"等
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new LabelValue();
            $this->Value->deserialize($param["Value"]);
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
