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
 * 检测到的单个商品结构体
 *
 * @method string getName() 获取图片中商品的三级分类识别结果，选取所有三级分类中的置信度最大者
 * @method void setName(string $Name) 设置图片中商品的三级分类识别结果，选取所有三级分类中的置信度最大者
 * @method string getParents() 获取三级商品分类对应的一级分类和二级分类，两级之间用“-”（中划线）隔开，例如商品名称是“硬盘”，那么Parents输出为“电脑、办公-电脑配件”
 * @method void setParents(string $Parents) 设置三级商品分类对应的一级分类和二级分类，两级之间用“-”（中划线）隔开，例如商品名称是“硬盘”，那么Parents输出为“电脑、办公-电脑配件”
 * @method integer getConfidence() 获取算法对于Name的置信度，0-100之间，值越高，表示对于Name越确定
 * @method void setConfidence(integer $Confidence) 设置算法对于Name的置信度，0-100之间，值越高，表示对于Name越确定
 * @method integer getXMin() 获取商品坐标X轴的最小值
 * @method void setXMin(integer $XMin) 设置商品坐标X轴的最小值
 * @method integer getYMin() 获取商品坐标Y轴的最小值
 * @method void setYMin(integer $YMin) 设置商品坐标Y轴的最小值
 * @method integer getXMax() 获取商品坐标X轴的最大值
 * @method void setXMax(integer $XMax) 设置商品坐标X轴的最大值
 * @method integer getYMax() 获取商品坐标Y轴的最大值
 * @method void setYMax(integer $YMax) 设置商品坐标Y轴的最大值
 */
class Product extends AbstractModel
{
    /**
     * @var string 图片中商品的三级分类识别结果，选取所有三级分类中的置信度最大者
     */
    public $Name;

    /**
     * @var string 三级商品分类对应的一级分类和二级分类，两级之间用“-”（中划线）隔开，例如商品名称是“硬盘”，那么Parents输出为“电脑、办公-电脑配件”
     */
    public $Parents;

    /**
     * @var integer 算法对于Name的置信度，0-100之间，值越高，表示对于Name越确定
     */
    public $Confidence;

    /**
     * @var integer 商品坐标X轴的最小值
     */
    public $XMin;

    /**
     * @var integer 商品坐标Y轴的最小值
     */
    public $YMin;

    /**
     * @var integer 商品坐标X轴的最大值
     */
    public $XMax;

    /**
     * @var integer 商品坐标Y轴的最大值
     */
    public $YMax;

    /**
     * @param string $Name 图片中商品的三级分类识别结果，选取所有三级分类中的置信度最大者
     * @param string $Parents 三级商品分类对应的一级分类和二级分类，两级之间用“-”（中划线）隔开，例如商品名称是“硬盘”，那么Parents输出为“电脑、办公-电脑配件”
     * @param integer $Confidence 算法对于Name的置信度，0-100之间，值越高，表示对于Name越确定
     * @param integer $XMin 商品坐标X轴的最小值
     * @param integer $YMin 商品坐标Y轴的最小值
     * @param integer $XMax 商品坐标X轴的最大值
     * @param integer $YMax 商品坐标Y轴的最大值
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Parents",$param) and $param["Parents"] !== null) {
            $this->Parents = $param["Parents"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
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
