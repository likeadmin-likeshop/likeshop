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
 * DetectProductBeta返回参数结构体
 *
 * @method array getRegionDetected() 获取检测到的图片中的商品位置和品类预测。 
当图片中存在多个商品时，输出多组坐标，按照__显著性__排序（综合考虑面积、是否在中心、检测算法置信度）。 
最多可以输出__3组__检测结果。
 * @method void setRegionDetected(array $RegionDetected) 设置检测到的图片中的商品位置和品类预测。 
当图片中存在多个商品时，输出多组坐标，按照__显著性__排序（综合考虑面积、是否在中心、检测算法置信度）。 
最多可以输出__3组__检测结果。
 * @method ProductInfo getProductInfo() 获取图像识别出的商品的详细信息。 
当图像中检测到多个物品时，会对显著性最高的进行识别。
 * @method void setProductInfo(ProductInfo $ProductInfo) 设置图像识别出的商品的详细信息。 
当图像中检测到多个物品时，会对显著性最高的进行识别。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DetectProductBetaResponse extends AbstractModel
{
    /**
     * @var array 检测到的图片中的商品位置和品类预测。 
当图片中存在多个商品时，输出多组坐标，按照__显著性__排序（综合考虑面积、是否在中心、检测算法置信度）。 
最多可以输出__3组__检测结果。
     */
    public $RegionDetected;

    /**
     * @var ProductInfo 图像识别出的商品的详细信息。 
当图像中检测到多个物品时，会对显著性最高的进行识别。
     */
    public $ProductInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RegionDetected 检测到的图片中的商品位置和品类预测。 
当图片中存在多个商品时，输出多组坐标，按照__显著性__排序（综合考虑面积、是否在中心、检测算法置信度）。 
最多可以输出__3组__检测结果。
     * @param ProductInfo $ProductInfo 图像识别出的商品的详细信息。 
当图像中检测到多个物品时，会对显著性最高的进行识别。
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
        if (array_key_exists("RegionDetected",$param) and $param["RegionDetected"] !== null) {
            $this->RegionDetected = [];
            foreach ($param["RegionDetected"] as $key => $value){
                $obj = new RegionDetected();
                $obj->deserialize($value);
                array_push($this->RegionDetected, $obj);
            }
        }

        if (array_key_exists("ProductInfo",$param) and $param["ProductInfo"] !== null) {
            $this->ProductInfo = new ProductInfo();
            $this->ProductInfo->deserialize($param["ProductInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
