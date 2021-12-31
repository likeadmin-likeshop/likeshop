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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品详细信息
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getProductName() 获取产品名
 * @method void setProductName(string $ProductName) 设置产品名
 * @method ProductMetadata getProductMetadata() 获取产品元数据
 * @method void setProductMetadata(ProductMetadata $ProductMetadata) 设置产品元数据
 * @method ProductProperties getProductProperties() 获取产品属性
 * @method void setProductProperties(ProductProperties $ProductProperties) 设置产品属性
 */
class ProductInfo extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 产品名
     */
    public $ProductName;

    /**
     * @var ProductMetadata 产品元数据
     */
    public $ProductMetadata;

    /**
     * @var ProductProperties 产品属性
     */
    public $ProductProperties;

    /**
     * @param string $ProductId 产品ID
     * @param string $ProductName 产品名
     * @param ProductMetadata $ProductMetadata 产品元数据
     * @param ProductProperties $ProductProperties 产品属性
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductMetadata",$param) and $param["ProductMetadata"] !== null) {
            $this->ProductMetadata = new ProductMetadata();
            $this->ProductMetadata->deserialize($param["ProductMetadata"]);
        }

        if (array_key_exists("ProductProperties",$param) and $param["ProductProperties"] !== null) {
            $this->ProductProperties = new ProductProperties();
            $this->ProductProperties->deserialize($param["ProductProperties"]);
        }
    }
}
