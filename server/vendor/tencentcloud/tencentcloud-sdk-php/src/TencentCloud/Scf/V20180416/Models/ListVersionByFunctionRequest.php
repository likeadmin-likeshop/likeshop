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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListVersionByFunction请求参数结构体
 *
 * @method string getFunctionName() 获取函数名
 * @method void setFunctionName(string $FunctionName) 设置函数名
 * @method string getNamespace() 获取函数所在命名空间
 * @method void setNamespace(string $Namespace) 设置函数所在命名空间
 * @method integer getOffset() 获取数据偏移量，默认值为 0
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认值为 0
 * @method integer getLimit() 获取返回数据长度，默认值为 20
 * @method void setLimit(integer $Limit) 设置返回数据长度，默认值为 20
 * @method string getOrder() 获取以升序还是降序的方式返回结果，可选值 ASC 和 DESC
 * @method void setOrder(string $Order) 设置以升序还是降序的方式返回结果，可选值 ASC 和 DESC
 * @method string getOrderBy() 获取根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime
 * @method void setOrderBy(string $OrderBy) 设置根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime
 */
class ListVersionByFunctionRequest extends AbstractModel
{
    /**
     * @var string 函数名
     */
    public $FunctionName;

    /**
     * @var string 函数所在命名空间
     */
    public $Namespace;

    /**
     * @var integer 数据偏移量，默认值为 0
     */
    public $Offset;

    /**
     * @var integer 返回数据长度，默认值为 20
     */
    public $Limit;

    /**
     * @var string 以升序还是降序的方式返回结果，可选值 ASC 和 DESC
     */
    public $Order;

    /**
     * @var string 根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime
     */
    public $OrderBy;

    /**
     * @param string $FunctionName 函数名
     * @param string $Namespace 函数所在命名空间
     * @param integer $Offset 数据偏移量，默认值为 0
     * @param integer $Limit 返回数据长度，默认值为 20
     * @param string $Order 以升序还是降序的方式返回结果，可选值 ASC 和 DESC
     * @param string $OrderBy 根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
