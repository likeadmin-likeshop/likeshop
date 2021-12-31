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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 二维码/条形码坐标信息
 *
 * @method Coord getLeftTop() 获取左上顶点坐标（如果是条形码，X和Y都为-1）
 * @method void setLeftTop(Coord $LeftTop) 设置左上顶点坐标（如果是条形码，X和Y都为-1）
 * @method Coord getRightTop() 获取右上顶点坐标（如果是条形码，X和Y都为-1）
 * @method void setRightTop(Coord $RightTop) 设置右上顶点坐标（如果是条形码，X和Y都为-1）
 * @method Coord getRightBottom() 获取右下顶点坐标（如果是条形码，X和Y都为-1）
 * @method void setRightBottom(Coord $RightBottom) 设置右下顶点坐标（如果是条形码，X和Y都为-1）
 * @method Coord getLeftBottom() 获取左下顶点坐标（如果是条形码，X和Y都为-1）
 * @method void setLeftBottom(Coord $LeftBottom) 设置左下顶点坐标（如果是条形码，X和Y都为-1）
 */
class QrcodePositionObj extends AbstractModel
{
    /**
     * @var Coord 左上顶点坐标（如果是条形码，X和Y都为-1）
     */
    public $LeftTop;

    /**
     * @var Coord 右上顶点坐标（如果是条形码，X和Y都为-1）
     */
    public $RightTop;

    /**
     * @var Coord 右下顶点坐标（如果是条形码，X和Y都为-1）
     */
    public $RightBottom;

    /**
     * @var Coord 左下顶点坐标（如果是条形码，X和Y都为-1）
     */
    public $LeftBottom;

    /**
     * @param Coord $LeftTop 左上顶点坐标（如果是条形码，X和Y都为-1）
     * @param Coord $RightTop 右上顶点坐标（如果是条形码，X和Y都为-1）
     * @param Coord $RightBottom 右下顶点坐标（如果是条形码，X和Y都为-1）
     * @param Coord $LeftBottom 左下顶点坐标（如果是条形码，X和Y都为-1）
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
        if (array_key_exists("LeftTop",$param) and $param["LeftTop"] !== null) {
            $this->LeftTop = new Coord();
            $this->LeftTop->deserialize($param["LeftTop"]);
        }

        if (array_key_exists("RightTop",$param) and $param["RightTop"] !== null) {
            $this->RightTop = new Coord();
            $this->RightTop->deserialize($param["RightTop"]);
        }

        if (array_key_exists("RightBottom",$param) and $param["RightBottom"] !== null) {
            $this->RightBottom = new Coord();
            $this->RightBottom->deserialize($param["RightBottom"]);
        }

        if (array_key_exists("LeftBottom",$param) and $param["LeftBottom"] !== null) {
            $this->LeftBottom = new Coord();
            $this->LeftBottom->deserialize($param["LeftBottom"]);
        }
    }
}
