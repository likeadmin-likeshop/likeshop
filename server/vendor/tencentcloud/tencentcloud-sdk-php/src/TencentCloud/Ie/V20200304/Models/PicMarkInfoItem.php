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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片水印信息
 *
 * @method integer getPosX() 获取图片水印的X坐标。
 * @method void setPosX(integer $PosX) 设置图片水印的X坐标。
 * @method integer getPosY() 获取图片水印的Y坐标 。
 * @method void setPosY(integer $PosY) 设置图片水印的Y坐标 。
 * @method string getPath() 获取图片水印路径,，如果不从Cos拉取水印，则必填
 * @method void setPath(string $Path) 设置图片水印路径,，如果不从Cos拉取水印，则必填
 * @method CosInfo getCosInfo() 获取图片水印的Cos 信息，从Cos上拉取图片水印时必填。
 * @method void setCosInfo(CosInfo $CosInfo) 设置图片水印的Cos 信息，从Cos上拉取图片水印时必填。
 * @method integer getWidth() 获取图片水印宽度，不填为图片原始宽度。
 * @method void setWidth(integer $Width) 设置图片水印宽度，不填为图片原始宽度。
 * @method integer getHeight() 获取图片水印高度，不填为图片原始高度。
 * @method void setHeight(integer $Height) 设置图片水印高度，不填为图片原始高度。
 * @method integer getStartTime() 获取添加图片水印的开始时间,单位：ms。
 * @method void setStartTime(integer $StartTime) 设置添加图片水印的开始时间,单位：ms。
 * @method integer getEndTime() 获取添加图片水印的结束时间,单位：ms。
 * @method void setEndTime(integer $EndTime) 设置添加图片水印的结束时间,单位：ms。
 */
class PicMarkInfoItem extends AbstractModel
{
    /**
     * @var integer 图片水印的X坐标。
     */
    public $PosX;

    /**
     * @var integer 图片水印的Y坐标 。
     */
    public $PosY;

    /**
     * @var string 图片水印路径,，如果不从Cos拉取水印，则必填
     */
    public $Path;

    /**
     * @var CosInfo 图片水印的Cos 信息，从Cos上拉取图片水印时必填。
     */
    public $CosInfo;

    /**
     * @var integer 图片水印宽度，不填为图片原始宽度。
     */
    public $Width;

    /**
     * @var integer 图片水印高度，不填为图片原始高度。
     */
    public $Height;

    /**
     * @var integer 添加图片水印的开始时间,单位：ms。
     */
    public $StartTime;

    /**
     * @var integer 添加图片水印的结束时间,单位：ms。
     */
    public $EndTime;

    /**
     * @param integer $PosX 图片水印的X坐标。
     * @param integer $PosY 图片水印的Y坐标 。
     * @param string $Path 图片水印路径,，如果不从Cos拉取水印，则必填
     * @param CosInfo $CosInfo 图片水印的Cos 信息，从Cos上拉取图片水印时必填。
     * @param integer $Width 图片水印宽度，不填为图片原始宽度。
     * @param integer $Height 图片水印高度，不填为图片原始高度。
     * @param integer $StartTime 添加图片水印的开始时间,单位：ms。
     * @param integer $EndTime 添加图片水印的结束时间,单位：ms。
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
        if (array_key_exists("PosX",$param) and $param["PosX"] !== null) {
            $this->PosX = $param["PosX"];
        }

        if (array_key_exists("PosY",$param) and $param["PosY"] !== null) {
            $this->PosY = $param["PosY"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new CosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
