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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CropImage返回参数结构体
 *
 * @method integer getX() 获取裁剪区域左上角X坐标值
 * @method void setX(integer $X) 设置裁剪区域左上角X坐标值
 * @method integer getY() 获取裁剪区域左上角Y坐标值
 * @method void setY(integer $Y) 设置裁剪区域左上角Y坐标值
 * @method integer getWidth() 获取裁剪区域的宽度，单位为像素
 * @method void setWidth(integer $Width) 设置裁剪区域的宽度，单位为像素
 * @method integer getHeight() 获取裁剪区域的高度，单位为像素
 * @method void setHeight(integer $Height) 设置裁剪区域的高度，单位为像素
 * @method integer getOriginalWidth() 获取原图宽度，单位为像素
 * @method void setOriginalWidth(integer $OriginalWidth) 设置原图宽度，单位为像素
 * @method integer getOriginalHeight() 获取原图高度，单位为像素
 * @method void setOriginalHeight(integer $OriginalHeight) 设置原图高度，单位为像素
 * @method integer getCropResult() 获取0：抠图正常；
1：原图过长，指原图的高度是宽度的1.8倍以上；
2：原图过宽，指原图的宽度是高度的1.8倍以上；
3：抠图区域过长，指抠图的高度是主体备选框高度的1.6倍以上；
4：抠图区域过宽，指当没有检测到人脸时，抠图区域宽度是检测出的原图主体区域宽度的1.6倍以上；
5：纯色图，指裁剪区域视觉较为单一、缺乏主体部分 ；
6：宽高比异常，指Width : Height取值超出[1, 2.5]的范围；

以上是辅助决策的参考建议，可以根据业务需求选择采纳或忽视。
 * @method void setCropResult(integer $CropResult) 设置0：抠图正常；
1：原图过长，指原图的高度是宽度的1.8倍以上；
2：原图过宽，指原图的宽度是高度的1.8倍以上；
3：抠图区域过长，指抠图的高度是主体备选框高度的1.6倍以上；
4：抠图区域过宽，指当没有检测到人脸时，抠图区域宽度是检测出的原图主体区域宽度的1.6倍以上；
5：纯色图，指裁剪区域视觉较为单一、缺乏主体部分 ；
6：宽高比异常，指Width : Height取值超出[1, 2.5]的范围；

以上是辅助决策的参考建议，可以根据业务需求选择采纳或忽视。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CropImageResponse extends AbstractModel
{
    /**
     * @var integer 裁剪区域左上角X坐标值
     */
    public $X;

    /**
     * @var integer 裁剪区域左上角Y坐标值
     */
    public $Y;

    /**
     * @var integer 裁剪区域的宽度，单位为像素
     */
    public $Width;

    /**
     * @var integer 裁剪区域的高度，单位为像素
     */
    public $Height;

    /**
     * @var integer 原图宽度，单位为像素
     */
    public $OriginalWidth;

    /**
     * @var integer 原图高度，单位为像素
     */
    public $OriginalHeight;

    /**
     * @var integer 0：抠图正常；
1：原图过长，指原图的高度是宽度的1.8倍以上；
2：原图过宽，指原图的宽度是高度的1.8倍以上；
3：抠图区域过长，指抠图的高度是主体备选框高度的1.6倍以上；
4：抠图区域过宽，指当没有检测到人脸时，抠图区域宽度是检测出的原图主体区域宽度的1.6倍以上；
5：纯色图，指裁剪区域视觉较为单一、缺乏主体部分 ；
6：宽高比异常，指Width : Height取值超出[1, 2.5]的范围；

以上是辅助决策的参考建议，可以根据业务需求选择采纳或忽视。
     */
    public $CropResult;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $X 裁剪区域左上角X坐标值
     * @param integer $Y 裁剪区域左上角Y坐标值
     * @param integer $Width 裁剪区域的宽度，单位为像素
     * @param integer $Height 裁剪区域的高度，单位为像素
     * @param integer $OriginalWidth 原图宽度，单位为像素
     * @param integer $OriginalHeight 原图高度，单位为像素
     * @param integer $CropResult 0：抠图正常；
1：原图过长，指原图的高度是宽度的1.8倍以上；
2：原图过宽，指原图的宽度是高度的1.8倍以上；
3：抠图区域过长，指抠图的高度是主体备选框高度的1.6倍以上；
4：抠图区域过宽，指当没有检测到人脸时，抠图区域宽度是检测出的原图主体区域宽度的1.6倍以上；
5：纯色图，指裁剪区域视觉较为单一、缺乏主体部分 ；
6：宽高比异常，指Width : Height取值超出[1, 2.5]的范围；

以上是辅助决策的参考建议，可以根据业务需求选择采纳或忽视。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("OriginalWidth",$param) and $param["OriginalWidth"] !== null) {
            $this->OriginalWidth = $param["OriginalWidth"];
        }

        if (array_key_exists("OriginalHeight",$param) and $param["OriginalHeight"] !== null) {
            $this->OriginalHeight = $param["OriginalHeight"];
        }

        if (array_key_exists("CropResult",$param) and $param["CropResult"] !== null) {
            $this->CropResult = $param["CropResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
