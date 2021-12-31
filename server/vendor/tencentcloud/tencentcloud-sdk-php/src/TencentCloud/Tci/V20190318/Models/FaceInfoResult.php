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
 * FaceInfoResult
 *
 * @method float getFaceRatio() 获取人脸尺寸的占比
 * @method void setFaceRatio(float $FaceRatio) 设置人脸尺寸的占比
 * @method integer getFrameHeight() 获取帧高度
 * @method void setFrameHeight(integer $FrameHeight) 设置帧高度
 * @method integer getFrameWidth() 获取帧宽度
 * @method void setFrameWidth(integer $FrameWidth) 设置帧宽度
 * @method integer getHeight() 获取人脸高度
 * @method void setHeight(integer $Height) 设置人脸高度
 * @method integer getLeft() 获取人脸左坐标
 * @method void setLeft(integer $Left) 设置人脸左坐标
 * @method integer getTop() 获取人脸顶坐标
 * @method void setTop(integer $Top) 设置人脸顶坐标
 * @method integer getWidth() 获取人脸宽度
 * @method void setWidth(integer $Width) 设置人脸宽度
 */
class FaceInfoResult extends AbstractModel
{
    /**
     * @var float 人脸尺寸的占比
     */
    public $FaceRatio;

    /**
     * @var integer 帧高度
     */
    public $FrameHeight;

    /**
     * @var integer 帧宽度
     */
    public $FrameWidth;

    /**
     * @var integer 人脸高度
     */
    public $Height;

    /**
     * @var integer 人脸左坐标
     */
    public $Left;

    /**
     * @var integer 人脸顶坐标
     */
    public $Top;

    /**
     * @var integer 人脸宽度
     */
    public $Width;

    /**
     * @param float $FaceRatio 人脸尺寸的占比
     * @param integer $FrameHeight 帧高度
     * @param integer $FrameWidth 帧宽度
     * @param integer $Height 人脸高度
     * @param integer $Left 人脸左坐标
     * @param integer $Top 人脸顶坐标
     * @param integer $Width 人脸宽度
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
        if (array_key_exists("FaceRatio",$param) and $param["FaceRatio"] !== null) {
            $this->FaceRatio = $param["FaceRatio"];
        }

        if (array_key_exists("FrameHeight",$param) and $param["FrameHeight"] !== null) {
            $this->FrameHeight = $param["FrameHeight"];
        }

        if (array_key_exists("FrameWidth",$param) and $param["FrameWidth"] !== null) {
            $this->FrameWidth = $param["FrameWidth"];
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
