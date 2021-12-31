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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 教师是否在屏幕内判断结果
 *
 * @method string getClass() 获取动作识别结果，InScreen：在屏幕内
OutScreen：不在屏幕内
 * @method void setClass(string $Class) 设置动作识别结果，InScreen：在屏幕内
OutScreen：不在屏幕内
 * @method integer getHeight() 获取识别结果高度
 * @method void setHeight(integer $Height) 设置识别结果高度
 * @method integer getLeft() 获取识别结果左坐标
 * @method void setLeft(integer $Left) 设置识别结果左坐标
 * @method integer getTop() 获取识别结果顶坐标
 * @method void setTop(integer $Top) 设置识别结果顶坐标
 * @method integer getWidth() 获取识别结果宽度
 * @method void setWidth(integer $Width) 设置识别结果宽度
 */
class TeacherOutScreenResult extends AbstractModel
{
    /**
     * @var string 动作识别结果，InScreen：在屏幕内
OutScreen：不在屏幕内
     */
    public $Class;

    /**
     * @var integer 识别结果高度
     */
    public $Height;

    /**
     * @var integer 识别结果左坐标
     */
    public $Left;

    /**
     * @var integer 识别结果顶坐标
     */
    public $Top;

    /**
     * @var integer 识别结果宽度
     */
    public $Width;

    /**
     * @param string $Class 动作识别结果，InScreen：在屏幕内
OutScreen：不在屏幕内
     * @param integer $Height 识别结果高度
     * @param integer $Left 识别结果左坐标
     * @param integer $Top 识别结果顶坐标
     * @param integer $Width 识别结果宽度
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
        if (array_key_exists("Class",$param) and $param["Class"] !== null) {
            $this->Class = $param["Class"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }
    }
}
