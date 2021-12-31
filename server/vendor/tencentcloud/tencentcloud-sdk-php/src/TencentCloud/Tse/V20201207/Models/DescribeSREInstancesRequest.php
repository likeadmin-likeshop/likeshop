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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSREInstances请求参数结构体
 *
 * @method array getFilters() 获取请求过滤参数
 * @method void setFilters(array $Filters) 设置请求过滤参数
 * @method integer getLimit() 获取翻页单页查询限制数量[0,1000], 默认值0
 * @method void setLimit(integer $Limit) 设置翻页单页查询限制数量[0,1000], 默认值0
 * @method integer getOffset() 获取翻页单页偏移量，默认值0
 * @method void setOffset(integer $Offset) 设置翻页单页偏移量，默认值0
 */
class DescribeSREInstancesRequest extends AbstractModel
{
    /**
     * @var array 请求过滤参数
     */
    public $Filters;

    /**
     * @var integer 翻页单页查询限制数量[0,1000], 默认值0
     */
    public $Limit;

    /**
     * @var integer 翻页单页偏移量，默认值0
     */
    public $Offset;

    /**
     * @param array $Filters 请求过滤参数
     * @param integer $Limit 翻页单页查询限制数量[0,1000], 默认值0
     * @param integer $Offset 翻页单页偏移量，默认值0
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
