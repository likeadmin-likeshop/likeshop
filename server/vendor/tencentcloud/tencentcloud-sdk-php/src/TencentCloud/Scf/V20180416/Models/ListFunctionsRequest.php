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
 * ListFunctions请求参数结构体
 *
 * @method string getOrder() 获取以升序还是降序的方式返回结果，可选值 ASC 和 DESC
 * @method void setOrder(string $Order) 设置以升序还是降序的方式返回结果，可选值 ASC 和 DESC
 * @method string getOrderby() 获取根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName
 * @method void setOrderby(string $Orderby) 设置根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName
 * @method integer getOffset() 获取数据偏移量，默认值为 0
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认值为 0
 * @method integer getLimit() 获取返回数据长度，默认值为 20
 * @method void setLimit(integer $Limit) 设置返回数据长度，默认值为 20
 * @method string getSearchKey() 获取支持FunctionName模糊匹配
 * @method void setSearchKey(string $SearchKey) 设置支持FunctionName模糊匹配
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getDescription() 获取函数描述，支持模糊搜索
 * @method void setDescription(string $Description) 设置函数描述，支持模糊搜索
 * @method array getFilters() 获取过滤条件。
- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。

每次请求的Filters的上限为10，Filter.Values的上限为5。
 * @method void setFilters(array $Filters) 设置过滤条件。
- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。

每次请求的Filters的上限为10，Filter.Values的上限为5。
 */
class ListFunctionsRequest extends AbstractModel
{
    /**
     * @var string 以升序还是降序的方式返回结果，可选值 ASC 和 DESC
     */
    public $Order;

    /**
     * @var string 根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName
     */
    public $Orderby;

    /**
     * @var integer 数据偏移量，默认值为 0
     */
    public $Offset;

    /**
     * @var integer 返回数据长度，默认值为 20
     */
    public $Limit;

    /**
     * @var string 支持FunctionName模糊匹配
     */
    public $SearchKey;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 函数描述，支持模糊搜索
     */
    public $Description;

    /**
     * @var array 过滤条件。
- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。

每次请求的Filters的上限为10，Filter.Values的上限为5。
     */
    public $Filters;

    /**
     * @param string $Order 以升序还是降序的方式返回结果，可选值 ASC 和 DESC
     * @param string $Orderby 根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName
     * @param integer $Offset 数据偏移量，默认值为 0
     * @param integer $Limit 返回数据长度，默认值为 20
     * @param string $SearchKey 支持FunctionName模糊匹配
     * @param string $Namespace 命名空间
     * @param string $Description 函数描述，支持模糊搜索
     * @param array $Filters 过滤条件。
- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。

每次请求的Filters的上限为10，Filter.Values的上限为5。
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
        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Orderby",$param) and $param["Orderby"] !== null) {
            $this->Orderby = $param["Orderby"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
