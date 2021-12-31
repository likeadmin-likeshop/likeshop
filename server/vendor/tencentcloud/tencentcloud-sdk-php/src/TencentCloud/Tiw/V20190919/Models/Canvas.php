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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混流画布参数
 *
 * @method LayoutParams getLayoutParams() 获取混流画布宽高配置
 * @method void setLayoutParams(LayoutParams $LayoutParams) 设置混流画布宽高配置
 * @method string getBackgroundColor() 获取背景颜色，默认为黑色，格式为RGB格式，如红色为"#FF0000"
 * @method void setBackgroundColor(string $BackgroundColor) 设置背景颜色，默认为黑色，格式为RGB格式，如红色为"#FF0000"
 */
class Canvas extends AbstractModel
{
    /**
     * @var LayoutParams 混流画布宽高配置
     */
    public $LayoutParams;

    /**
     * @var string 背景颜色，默认为黑色，格式为RGB格式，如红色为"#FF0000"
     */
    public $BackgroundColor;

    /**
     * @param LayoutParams $LayoutParams 混流画布宽高配置
     * @param string $BackgroundColor 背景颜色，默认为黑色，格式为RGB格式，如红色为"#FF0000"
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
        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = new LayoutParams();
            $this->LayoutParams->deserialize($param["LayoutParams"]);
        }

        if (array_key_exists("BackgroundColor",$param) and $param["BackgroundColor"] !== null) {
            $this->BackgroundColor = $param["BackgroundColor"];
        }
    }
}
