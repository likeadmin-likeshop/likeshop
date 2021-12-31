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
 * 检测到的图片中的商品位置和品类预测。 
当图片中存在多个商品时，输出多组坐标，按照__显著性__排序（综合考虑面积、是否在中心、检测算法置信度）。 
最多可以输出__3组__检测结果。
 *
 * @method string getCategory() 获取商品的品类预测结果。 
包含：鞋、图书音像、箱包、美妆个护、服饰、家电数码、玩具乐器、食品饮料、珠宝、家居家装、药品、酒水、绿植园艺、其他商品、非商品等。
 * @method void setCategory(string $Category) 设置商品的品类预测结果。 
包含：鞋、图书音像、箱包、美妆个护、服饰、家电数码、玩具乐器、食品饮料、珠宝、家居家装、药品、酒水、绿植园艺、其他商品、非商品等。
 * @method float getCategoryScore() 获取商品品类预测的置信度
 * @method void setCategoryScore(float $CategoryScore) 设置商品品类预测的置信度
 * @method Location getLocation() 获取检测到的主体在图片中的坐标，表示为矩形框的四个顶点坐标
 * @method void setLocation(Location $Location) 设置检测到的主体在图片中的坐标，表示为矩形框的四个顶点坐标
 */
class RegionDetected extends AbstractModel
{
    /**
     * @var string 商品的品类预测结果。 
包含：鞋、图书音像、箱包、美妆个护、服饰、家电数码、玩具乐器、食品饮料、珠宝、家居家装、药品、酒水、绿植园艺、其他商品、非商品等。
     */
    public $Category;

    /**
     * @var float 商品品类预测的置信度
     */
    public $CategoryScore;

    /**
     * @var Location 检测到的主体在图片中的坐标，表示为矩形框的四个顶点坐标
     */
    public $Location;

    /**
     * @param string $Category 商品的品类预测结果。 
包含：鞋、图书音像、箱包、美妆个护、服饰、家电数码、玩具乐器、食品饮料、珠宝、家居家装、药品、酒水、绿植园艺、其他商品、非商品等。
     * @param float $CategoryScore 商品品类预测的置信度
     * @param Location $Location 检测到的主体在图片中的坐标，表示为矩形框的四个顶点坐标
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("CategoryScore",$param) and $param["CategoryScore"] !== null) {
            $this->CategoryScore = $param["CategoryScore"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }
    }
}
