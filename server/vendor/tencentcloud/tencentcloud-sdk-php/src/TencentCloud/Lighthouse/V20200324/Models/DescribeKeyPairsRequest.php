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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKeyPairs请求参数结构体
 *
 * @method array getKeyIds() 获取密钥对 ID 列表。
 * @method void setKeyIds(array $KeyIds) 设置密钥对 ID 列表。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 * @method array getFilters() 获取过滤条件，每次请求的 Filters 的上限为10， Filters.Values 的上限为5。参数不可以同时指定 KeyIds 和 Filters 。详细的过滤条件如下： key-id - String - 是否必填： 否 - （过滤条件）按照KeyID进行过滤; key-name - String - 是否必填： 否 - （过滤条件）按照KeyName进行过滤。
 * @method void setFilters(array $Filters) 设置过滤条件，每次请求的 Filters 的上限为10， Filters.Values 的上限为5。参数不可以同时指定 KeyIds 和 Filters 。详细的过滤条件如下： key-id - String - 是否必填： 否 - （过滤条件）按照KeyID进行过滤; key-name - String - 是否必填： 否 - （过滤条件）按照KeyName进行过滤。
 */
class DescribeKeyPairsRequest extends AbstractModel
{
    /**
     * @var array 密钥对 ID 列表。
     */
    public $KeyIds;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @var array 过滤条件，每次请求的 Filters 的上限为10， Filters.Values 的上限为5。参数不可以同时指定 KeyIds 和 Filters 。详细的过滤条件如下： key-id - String - 是否必填： 否 - （过滤条件）按照KeyID进行过滤; key-name - String - 是否必填： 否 - （过滤条件）按照KeyName进行过滤。
     */
    public $Filters;

    /**
     * @param array $KeyIds 密钥对 ID 列表。
     * @param integer $Offset 偏移量，默认为 0。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
     * @param array $Filters 过滤条件，每次请求的 Filters 的上限为10， Filters.Values 的上限为5。参数不可以同时指定 KeyIds 和 Filters 。详细的过滤条件如下： key-id - String - 是否必填： 否 - （过滤条件）按照KeyID进行过滤; key-name - String - 是否必填： 否 - （过滤条件）按照KeyName进行过滤。
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
        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
