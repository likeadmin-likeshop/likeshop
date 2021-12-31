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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片处理参数
 *
 * @method integer getOcrEngineType() 获取ocr引擎
 * @method void setOcrEngineType(integer $OcrEngineType) 设置ocr引擎
 * @method boolean getIsReturnText() 获取是否返回分行文本内容
 * @method void setIsReturnText(boolean $IsReturnText) 设置是否返回分行文本内容
 * @method float getRotateTheAngle() 获取顺时针旋转角度
 * @method void setRotateTheAngle(float $RotateTheAngle) 设置顺时针旋转角度
 * @method boolean getAutoFitDirection() 获取自动适配方向,仅支持优图引擎
 * @method void setAutoFitDirection(boolean $AutoFitDirection) 设置自动适配方向,仅支持优图引擎
 * @method boolean getAutoOptimizeCoordinate() 获取坐标优化
 * @method void setAutoOptimizeCoordinate(boolean $AutoOptimizeCoordinate) 设置坐标优化
 * @method boolean getIsScale() 获取是否开启图片压缩，开启时imageOriginalSize必须正确填写
 * @method void setIsScale(boolean $IsScale) 设置是否开启图片压缩，开启时imageOriginalSize必须正确填写
 * @method integer getImageOriginalSize() 获取原始图片大小(单位byes),用来判断该图片是否需要压缩
 * @method void setImageOriginalSize(integer $ImageOriginalSize) 设置原始图片大小(单位byes),用来判断该图片是否需要压缩
 * @method integer getScaleTargetSize() 获取采用后台默认值(2048Kb)
 * @method void setScaleTargetSize(integer $ScaleTargetSize) 设置采用后台默认值(2048Kb)
 */
class HandleParam extends AbstractModel
{
    /**
     * @var integer ocr引擎
     */
    public $OcrEngineType;

    /**
     * @var boolean 是否返回分行文本内容
     */
    public $IsReturnText;

    /**
     * @var float 顺时针旋转角度
     */
    public $RotateTheAngle;

    /**
     * @var boolean 自动适配方向,仅支持优图引擎
     */
    public $AutoFitDirection;

    /**
     * @var boolean 坐标优化
     */
    public $AutoOptimizeCoordinate;

    /**
     * @var boolean 是否开启图片压缩，开启时imageOriginalSize必须正确填写
     */
    public $IsScale;

    /**
     * @var integer 原始图片大小(单位byes),用来判断该图片是否需要压缩
     */
    public $ImageOriginalSize;

    /**
     * @var integer 采用后台默认值(2048Kb)
     */
    public $ScaleTargetSize;

    /**
     * @param integer $OcrEngineType ocr引擎
     * @param boolean $IsReturnText 是否返回分行文本内容
     * @param float $RotateTheAngle 顺时针旋转角度
     * @param boolean $AutoFitDirection 自动适配方向,仅支持优图引擎
     * @param boolean $AutoOptimizeCoordinate 坐标优化
     * @param boolean $IsScale 是否开启图片压缩，开启时imageOriginalSize必须正确填写
     * @param integer $ImageOriginalSize 原始图片大小(单位byes),用来判断该图片是否需要压缩
     * @param integer $ScaleTargetSize 采用后台默认值(2048Kb)
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
        if (array_key_exists("OcrEngineType",$param) and $param["OcrEngineType"] !== null) {
            $this->OcrEngineType = $param["OcrEngineType"];
        }

        if (array_key_exists("IsReturnText",$param) and $param["IsReturnText"] !== null) {
            $this->IsReturnText = $param["IsReturnText"];
        }

        if (array_key_exists("RotateTheAngle",$param) and $param["RotateTheAngle"] !== null) {
            $this->RotateTheAngle = $param["RotateTheAngle"];
        }

        if (array_key_exists("AutoFitDirection",$param) and $param["AutoFitDirection"] !== null) {
            $this->AutoFitDirection = $param["AutoFitDirection"];
        }

        if (array_key_exists("AutoOptimizeCoordinate",$param) and $param["AutoOptimizeCoordinate"] !== null) {
            $this->AutoOptimizeCoordinate = $param["AutoOptimizeCoordinate"];
        }

        if (array_key_exists("IsScale",$param) and $param["IsScale"] !== null) {
            $this->IsScale = $param["IsScale"];
        }

        if (array_key_exists("ImageOriginalSize",$param) and $param["ImageOriginalSize"] !== null) {
            $this->ImageOriginalSize = $param["ImageOriginalSize"];
        }

        if (array_key_exists("ScaleTargetSize",$param) and $param["ScaleTargetSize"] !== null) {
            $this->ScaleTargetSize = $param["ScaleTargetSize"];
        }
    }
}
