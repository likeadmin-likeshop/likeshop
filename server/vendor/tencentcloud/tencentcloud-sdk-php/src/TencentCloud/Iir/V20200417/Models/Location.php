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
namespace TencentCloud\Iir\V20200417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检测到的主体在图片中的矩形框位置（四个顶点坐标）
 *
 * @method integer getXMin() 获取位置矩形框的左上角横坐标
 * @method void setXMin(integer $XMin) 设置位置矩形框的左上角横坐标
 * @method integer getYMin() 获取位置矩形框的左上角纵坐标
 * @method void setYMin(integer $YMin) 设置位置矩形框的左上角纵坐标
 * @method integer getXMax() 获取位置矩形框的右下角横坐标
 * @method void setXMax(integer $XMax) 设置位置矩形框的右下角横坐标
 * @method integer getYMax() 获取位置矩形框的右下角纵坐标
 * @method void setYMax(integer $YMax) 设置位置矩形框的右下角纵坐标
 */
class Location extends AbstractModel
{
    /**
     * @var integer 位置矩形框的左上角横坐标
     */
    public $XMin;

    /**
     * @var integer 位置矩形框的左上角纵坐标
     */
    public $YMin;

    /**
     * @var integer 位置矩形框的右下角横坐标
     */
    public $XMax;

    /**
     * @var integer 位置矩形框的右下角纵坐标
     */
    public $YMax;

    /**
     * @param integer $XMin 位置矩形框的左上角横坐标
     * @param integer $YMin 位置矩形框的左上角纵坐标
     * @param integer $XMax 位置矩形框的右下角横坐标
     * @param integer $YMax 位置矩形框的右下角纵坐标
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
        if (array_key_exists("XMin",$param) and $param["XMin"] !== null) {
            $this->XMin = $param["XMin"];
        }

        if (array_key_exists("YMin",$param) and $param["YMin"] !== null) {
            $this->YMin = $param["YMin"];
        }

        if (array_key_exists("XMax",$param) and $param["XMax"] !== null) {
            $this->XMax = $param["XMax"];
        }

        if (array_key_exists("YMax",$param) and $param["YMax"] !== null) {
            $this->YMax = $param["YMax"];
        }
    }
}
