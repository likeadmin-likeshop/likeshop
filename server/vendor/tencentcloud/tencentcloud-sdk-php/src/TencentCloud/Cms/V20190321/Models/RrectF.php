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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * logo位置信息
 *
 * @method float getCx() 获取logo横坐标
 * @method void setCx(float $Cx) 设置logo横坐标
 * @method float getCy() 获取logo纵坐标
 * @method void setCy(float $Cy) 设置logo纵坐标
 * @method float getHeight() 获取logo图标高度
 * @method void setHeight(float $Height) 设置logo图标高度
 * @method float getRotate() 获取logo图标中心旋转度
 * @method void setRotate(float $Rotate) 设置logo图标中心旋转度
 * @method float getWidth() 获取logo图标宽度
 * @method void setWidth(float $Width) 设置logo图标宽度
 */
class RrectF extends AbstractModel
{
    /**
     * @var float logo横坐标
     */
    public $Cx;

    /**
     * @var float logo纵坐标
     */
    public $Cy;

    /**
     * @var float logo图标高度
     */
    public $Height;

    /**
     * @var float logo图标中心旋转度
     */
    public $Rotate;

    /**
     * @var float logo图标宽度
     */
    public $Width;

    /**
     * @param float $Cx logo横坐标
     * @param float $Cy logo纵坐标
     * @param float $Height logo图标高度
     * @param float $Rotate logo图标中心旋转度
     * @param float $Width logo图标宽度
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
        if (array_key_exists("Cx",$param) and $param["Cx"] !== null) {
            $this->Cx = $param["Cx"];
        }

        if (array_key_exists("Cy",$param) and $param["Cy"] !== null) {
            $this->Cy = $param["Cy"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }
    }
}
