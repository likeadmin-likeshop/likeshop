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
 * CreateProduct请求参数结构体
 *
 * @method string getProductName() 获取产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}
 * @method void setProductName(string $ProductName) 设置产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}
 * @method ProductProperties getProductProperties() 获取产品属性
 * @method void setProductProperties(ProductProperties $ProductProperties) 设置产品属性
 * @method string getSkey() 获取创建CLAA产品时，需要Skey
 * @method void setSkey(string $Skey) 设置创建CLAA产品时，需要Skey
 */
class CreateProductRequest extends AbstractModel
{
    /**
     * @var string 产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}
     */
    public $ProductName;

    /**
     * @var ProductProperties 产品属性
     */
    public $ProductProperties;

    /**
     * @var string 创建CLAA产品时，需要Skey
     */
    public $Skey;

    /**
     * @param string $ProductName 产品名称，名称不能和已经存在的产品名称重复。命名规则：[a-zA-Z0-9:_-]{1,32}
     * @param ProductProperties $ProductProperties 产品属性
     * @param string $Skey 创建CLAA产品时，需要Skey
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductProperties",$param) and $param["ProductProperties"] !== null) {
            $this->ProductProperties = new ProductProperties();
            $this->ProductProperties->deserialize($param["ProductProperties"]);
        }

        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }
    }
}
