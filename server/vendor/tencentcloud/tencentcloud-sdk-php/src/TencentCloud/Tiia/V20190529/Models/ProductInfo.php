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
 * 图像识别出的商品的详细信息。 
当图像中检测到多个物品时，会对显著性最高的物品进行识别。
 *
 * @method integer getFindSKU() 获取1表示找到同款商品，以下字段为同款商品信息； 
0表示未找到同款商品， 具体商品信息为空（参考价格、名称、品牌等），仅提供商品类目和参考图片（商品库中找到的最相似图片，供参考）。  
是否找到同款的判断依据为Score分值，分值越大则同款的可能性越大。
 * @method void setFindSKU(integer $FindSKU) 设置1表示找到同款商品，以下字段为同款商品信息； 
0表示未找到同款商品， 具体商品信息为空（参考价格、名称、品牌等），仅提供商品类目和参考图片（商品库中找到的最相似图片，供参考）。  
是否找到同款的判断依据为Score分值，分值越大则同款的可能性越大。
 * @method Location getLocation() 获取本商品在图片中的坐标，表示为矩形框的四个顶点坐标。
 * @method void setLocation(Location $Location) 设置本商品在图片中的坐标，表示为矩形框的四个顶点坐标。
 * @method string getName() 获取商品名称
 * @method void setName(string $Name) 设置商品名称
 * @method string getBrand() 获取商品品牌
 * @method void setBrand(string $Brand) 设置商品品牌
 * @method string getPrice() 获取参考价格，综合多个信息源，仅供参考。
 * @method void setPrice(string $Price) 设置参考价格，综合多个信息源，仅供参考。
 * @method string getProductCategory() 获取识别结果的商品类目。 
包含：鞋、图书音像、箱包、美妆个护、服饰、家电数码、玩具乐器、食品饮料、珠宝、家居家装、药品、酒水、绿植园艺、其他商品、非商品等。 
当类别为“非商品”时，除Location、Score和本字段之外的商品信息为空。
 * @method void setProductCategory(string $ProductCategory) 设置识别结果的商品类目。 
包含：鞋、图书音像、箱包、美妆个护、服饰、家电数码、玩具乐器、食品饮料、珠宝、家居家装、药品、酒水、绿植园艺、其他商品、非商品等。 
当类别为“非商品”时，除Location、Score和本字段之外的商品信息为空。
 * @method float getScore() 获取输入图片中的主体物品和输出结果的相似度。分值越大，输出结果与输入图片是同款的可能性越高。
 * @method void setScore(float $Score) 设置输入图片中的主体物品和输出结果的相似度。分值越大，输出结果与输入图片是同款的可能性越高。
 * @method string getImage() 获取搜索到的商品配图URL。
 * @method void setImage(string $Image) 设置搜索到的商品配图URL。
 */
class ProductInfo extends AbstractModel
{
    /**
     * @var integer 1表示找到同款商品，以下字段为同款商品信息； 
0表示未找到同款商品， 具体商品信息为空（参考价格、名称、品牌等），仅提供商品类目和参考图片（商品库中找到的最相似图片，供参考）。  
是否找到同款的判断依据为Score分值，分值越大则同款的可能性越大。
     */
    public $FindSKU;

    /**
     * @var Location 本商品在图片中的坐标，表示为矩形框的四个顶点坐标。
     */
    public $Location;

    /**
     * @var string 商品名称
     */
    public $Name;

    /**
     * @var string 商品品牌
     */
    public $Brand;

    /**
     * @var string 参考价格，综合多个信息源，仅供参考。
     */
    public $Price;

    /**
     * @var string 识别结果的商品类目。 
包含：鞋、图书音像、箱包、美妆个护、服饰、家电数码、玩具乐器、食品饮料、珠宝、家居家装、药品、酒水、绿植园艺、其他商品、非商品等。 
当类别为“非商品”时，除Location、Score和本字段之外的商品信息为空。
     */
    public $ProductCategory;

    /**
     * @var float 输入图片中的主体物品和输出结果的相似度。分值越大，输出结果与输入图片是同款的可能性越高。
     */
    public $Score;

    /**
     * @var string 搜索到的商品配图URL。
     */
    public $Image;

    /**
     * @param integer $FindSKU 1表示找到同款商品，以下字段为同款商品信息； 
0表示未找到同款商品， 具体商品信息为空（参考价格、名称、品牌等），仅提供商品类目和参考图片（商品库中找到的最相似图片，供参考）。  
是否找到同款的判断依据为Score分值，分值越大则同款的可能性越大。
     * @param Location $Location 本商品在图片中的坐标，表示为矩形框的四个顶点坐标。
     * @param string $Name 商品名称
     * @param string $Brand 商品品牌
     * @param string $Price 参考价格，综合多个信息源，仅供参考。
     * @param string $ProductCategory 识别结果的商品类目。 
包含：鞋、图书音像、箱包、美妆个护、服饰、家电数码、玩具乐器、食品饮料、珠宝、家居家装、药品、酒水、绿植园艺、其他商品、非商品等。 
当类别为“非商品”时，除Location、Score和本字段之外的商品信息为空。
     * @param float $Score 输入图片中的主体物品和输出结果的相似度。分值越大，输出结果与输入图片是同款的可能性越高。
     * @param string $Image 搜索到的商品配图URL。
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
        if (array_key_exists("FindSKU",$param) and $param["FindSKU"] !== null) {
            $this->FindSKU = $param["FindSKU"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("ProductCategory",$param) and $param["ProductCategory"] !== null) {
            $this->ProductCategory = $param["ProductCategory"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }
    }
}
