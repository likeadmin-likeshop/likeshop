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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProductList请求参数结构体
 *
 * @method string getModule() 获取固定传值monitor
 * @method void setModule(string $Module) 设置固定传值monitor
 * @method string getOrder() 获取排序方式：DESC/ASC（区分大小写），默认值DESC
 * @method void setOrder(string $Order) 设置排序方式：DESC/ASC（区分大小写），默认值DESC
 * @method integer getOffset() 获取分页查询的偏移量，默认值0
 * @method void setOffset(integer $Offset) 设置分页查询的偏移量，默认值0
 * @method integer getLimit() 获取分页查询的每页数据量，默认值20
 * @method void setLimit(integer $Limit) 设置分页查询的每页数据量，默认值20
 */
class DescribeProductListRequest extends AbstractModel
{
    /**
     * @var string 固定传值monitor
     */
    public $Module;

    /**
     * @var string 排序方式：DESC/ASC（区分大小写），默认值DESC
     */
    public $Order;

    /**
     * @var integer 分页查询的偏移量，默认值0
     */
    public $Offset;

    /**
     * @var integer 分页查询的每页数据量，默认值20
     */
    public $Limit;

    /**
     * @param string $Module 固定传值monitor
     * @param string $Order 排序方式：DESC/ASC（区分大小写），默认值DESC
     * @param integer $Offset 分页查询的偏移量，默认值0
     * @param integer $Limit 分页查询的每页数据量，默认值20
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
