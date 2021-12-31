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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翻译结果
 *
 * @method string getSourceText() 获取识别出的源文
 * @method void setSourceText(string $SourceText) 设置识别出的源文
 * @method string getTargetText() 获取翻译后的译文
 * @method void setTargetText(string $TargetText) 设置翻译后的译文
 * @method integer getX() 获取X坐标
 * @method void setX(integer $X) 设置X坐标
 * @method integer getY() 获取Y坐标
 * @method void setY(integer $Y) 设置Y坐标
 * @method integer getW() 获取宽度
 * @method void setW(integer $W) 设置宽度
 * @method integer getH() 获取高度
 * @method void setH(integer $H) 设置高度
 */
class ItemValue extends AbstractModel
{
    /**
     * @var string 识别出的源文
     */
    public $SourceText;

    /**
     * @var string 翻译后的译文
     */
    public $TargetText;

    /**
     * @var integer X坐标
     */
    public $X;

    /**
     * @var integer Y坐标
     */
    public $Y;

    /**
     * @var integer 宽度
     */
    public $W;

    /**
     * @var integer 高度
     */
    public $H;

    /**
     * @param string $SourceText 识别出的源文
     * @param string $TargetText 翻译后的译文
     * @param integer $X X坐标
     * @param integer $Y Y坐标
     * @param integer $W 宽度
     * @param integer $H 高度
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
        if (array_key_exists("SourceText",$param) and $param["SourceText"] !== null) {
            $this->SourceText = $param["SourceText"];
        }

        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }

        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("W",$param) and $param["W"] !== null) {
            $this->W = $param["W"];
        }

        if (array_key_exists("H",$param) and $param["H"] !== null) {
            $this->H = $param["H"];
        }
    }
}
