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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 水印信息。
 *
 * @method integer getWatermarkId() 获取水印 ID。
 * @method void setWatermarkId(integer $WatermarkId) 设置水印 ID。
 * @method string getPictureUrl() 获取水印图片 URL。
 * @method void setPictureUrl(string $PictureUrl) 设置水印图片 URL。
 * @method integer getXPosition() 获取显示位置，X 轴偏移。
 * @method void setXPosition(integer $XPosition) 设置显示位置，X 轴偏移。
 * @method integer getYPosition() 获取显示位置，Y 轴偏移。
 * @method void setYPosition(integer $YPosition) 设置显示位置，Y 轴偏移。
 * @method string getWatermarkName() 获取水印名称。
 * @method void setWatermarkName(string $WatermarkName) 设置水印名称。
 * @method integer getStatus() 获取当前状态。0：未使用，1:使用中。
 * @method void setStatus(integer $Status) 设置当前状态。0：未使用，1:使用中。
 * @method string getCreateTime() 获取添加时间。
 * @method void setCreateTime(string $CreateTime) 设置添加时间。
 * @method integer getWidth() 获取水印宽。
 * @method void setWidth(integer $Width) 设置水印宽。
 * @method integer getHeight() 获取水印高。
 * @method void setHeight(integer $Height) 设置水印高。
 */
class WatermarkInfo extends AbstractModel
{
    /**
     * @var integer 水印 ID。
     */
    public $WatermarkId;

    /**
     * @var string 水印图片 URL。
     */
    public $PictureUrl;

    /**
     * @var integer 显示位置，X 轴偏移。
     */
    public $XPosition;

    /**
     * @var integer 显示位置，Y 轴偏移。
     */
    public $YPosition;

    /**
     * @var string 水印名称。
     */
    public $WatermarkName;

    /**
     * @var integer 当前状态。0：未使用，1:使用中。
     */
    public $Status;

    /**
     * @var string 添加时间。
     */
    public $CreateTime;

    /**
     * @var integer 水印宽。
     */
    public $Width;

    /**
     * @var integer 水印高。
     */
    public $Height;

    /**
     * @param integer $WatermarkId 水印 ID。
     * @param string $PictureUrl 水印图片 URL。
     * @param integer $XPosition 显示位置，X 轴偏移。
     * @param integer $YPosition 显示位置，Y 轴偏移。
     * @param string $WatermarkName 水印名称。
     * @param integer $Status 当前状态。0：未使用，1:使用中。
     * @param string $CreateTime 添加时间。
     * @param integer $Width 水印宽。
     * @param integer $Height 水印高。
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
        if (array_key_exists("WatermarkId",$param) and $param["WatermarkId"] !== null) {
            $this->WatermarkId = $param["WatermarkId"];
        }

        if (array_key_exists("PictureUrl",$param) and $param["PictureUrl"] !== null) {
            $this->PictureUrl = $param["PictureUrl"];
        }

        if (array_key_exists("XPosition",$param) and $param["XPosition"] !== null) {
            $this->XPosition = $param["XPosition"];
        }

        if (array_key_exists("YPosition",$param) and $param["YPosition"] !== null) {
            $this->YPosition = $param["YPosition"];
        }

        if (array_key_exists("WatermarkName",$param) and $param["WatermarkName"] !== null) {
            $this->WatermarkName = $param["WatermarkName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
