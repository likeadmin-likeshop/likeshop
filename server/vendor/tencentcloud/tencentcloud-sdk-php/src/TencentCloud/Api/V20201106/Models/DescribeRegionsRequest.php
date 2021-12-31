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
namespace TencentCloud\Api\V20201106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegions请求参数结构体
 *
 * @method string getProduct() 获取待查询产品的名称，例如cvm、vpc
 * @method void setProduct(string $Product) 设置待查询产品的名称，例如cvm、vpc
 */
class DescribeRegionsRequest extends AbstractModel
{
    /**
     * @var string 待查询产品的名称，例如cvm、vpc
     */
    public $Product;

    /**
     * @param string $Product 待查询产品的名称，例如cvm、vpc
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
