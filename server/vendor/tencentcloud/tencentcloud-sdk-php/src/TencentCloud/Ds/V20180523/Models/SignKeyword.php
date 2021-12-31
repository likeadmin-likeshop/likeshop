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
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署关键字信息
 *
 * @method string getKeyword() 获取关键字
 * @method void setKeyword(string $Keyword) 设置关键字
 * @method string getOffsetCoordX() 获取X轴偏移坐标
 * @method void setOffsetCoordX(string $OffsetCoordX) 设置X轴偏移坐标
 * @method string getOffsetCoordY() 获取Y轴偏移坐标
 * @method void setOffsetCoordY(string $OffsetCoordY) 设置Y轴偏移坐标
 * @method string getImageWidth() 获取签章图片宽度
 * @method void setImageWidth(string $ImageWidth) 设置签章图片宽度
 * @method string getImageHeight() 获取签章图片高度
 * @method void setImageHeight(string $ImageHeight) 设置签章图片高度
 */
class SignKeyword extends AbstractModel
{
    /**
     * @var string 关键字
     */
    public $Keyword;

    /**
     * @var string X轴偏移坐标
     */
    public $OffsetCoordX;

    /**
     * @var string Y轴偏移坐标
     */
    public $OffsetCoordY;

    /**
     * @var string 签章图片宽度
     */
    public $ImageWidth;

    /**
     * @var string 签章图片高度
     */
    public $ImageHeight;

    /**
     * @param string $Keyword 关键字
     * @param string $OffsetCoordX X轴偏移坐标
     * @param string $OffsetCoordY Y轴偏移坐标
     * @param string $ImageWidth 签章图片宽度
     * @param string $ImageHeight 签章图片高度
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("OffsetCoordX",$param) and $param["OffsetCoordX"] !== null) {
            $this->OffsetCoordX = $param["OffsetCoordX"];
        }

        if (array_key_exists("OffsetCoordY",$param) and $param["OffsetCoordY"] !== null) {
            $this->OffsetCoordY = $param["OffsetCoordY"];
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }
    }
}
