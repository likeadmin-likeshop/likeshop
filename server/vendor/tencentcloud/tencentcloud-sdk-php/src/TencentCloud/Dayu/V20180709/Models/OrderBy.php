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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排序字段
 *
 * @method string getField() 获取排序字段名称，取值[
bandwidth（带宽），
overloadCount（超峰值次数）
]
 * @method void setField(string $Field) 设置排序字段名称，取值[
bandwidth（带宽），
overloadCount（超峰值次数）
]
 * @method string getOrder() 获取升降序，取值为[asc（升序），（升序），desc（降序）， DESC（降序）]
 * @method void setOrder(string $Order) 设置升降序，取值为[asc（升序），（升序），desc（降序）， DESC（降序）]
 */
class OrderBy extends AbstractModel
{
    /**
     * @var string 排序字段名称，取值[
bandwidth（带宽），
overloadCount（超峰值次数）
]
     */
    public $Field;

    /**
     * @var string 升降序，取值为[asc（升序），（升序），desc（降序）， DESC（降序）]
     */
    public $Order;

    /**
     * @param string $Field 排序字段名称，取值[
bandwidth（带宽），
overloadCount（超峰值次数）
]
     * @param string $Order 升降序，取值为[asc（升序），（升序），desc（降序）， DESC（降序）]
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
