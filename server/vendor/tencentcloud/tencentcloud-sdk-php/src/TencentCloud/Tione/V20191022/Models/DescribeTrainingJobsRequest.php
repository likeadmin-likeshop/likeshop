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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrainingJobs请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method string getCreationTimeAfter() 获取创建时间晚于
 * @method void setCreationTimeAfter(string $CreationTimeAfter) 设置创建时间晚于
 * @method string getCreationTimeBefore() 获取创建时间早于
 * @method void setCreationTimeBefore(string $CreationTimeBefore) 设置创建时间早于
 * @method string getNameContains() 获取根据名称过滤
 * @method void setNameContains(string $NameContains) 设置根据名称过滤
 * @method string getStatusEquals() 获取根据状态过滤
 * @method void setStatusEquals(string $StatusEquals) 设置根据状态过滤
 * @method array getFilters() 获取过滤条件。
instance-name - String - 是否必填：否 -（过滤条件）按照名称过滤。
search-by-name - String - 是否必填：否 -（过滤条件）按照名称检索，模糊匹配。
 * @method void setFilters(array $Filters) 设置过滤条件。
instance-name - String - 是否必填：否 -（过滤条件）按照名称过滤。
search-by-name - String - 是否必填：否 -（过滤条件）按照名称检索，模糊匹配。
 */
class DescribeTrainingJobsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var string 创建时间晚于
     */
    public $CreationTimeAfter;

    /**
     * @var string 创建时间早于
     */
    public $CreationTimeBefore;

    /**
     * @var string 根据名称过滤
     */
    public $NameContains;

    /**
     * @var string 根据状态过滤
     */
    public $StatusEquals;

    /**
     * @var array 过滤条件。
instance-name - String - 是否必填：否 -（过滤条件）按照名称过滤。
search-by-name - String - 是否必填：否 -（过滤条件）按照名称检索，模糊匹配。
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制数目
     * @param string $CreationTimeAfter 创建时间晚于
     * @param string $CreationTimeBefore 创建时间早于
     * @param string $NameContains 根据名称过滤
     * @param string $StatusEquals 根据状态过滤
     * @param array $Filters 过滤条件。
instance-name - String - 是否必填：否 -（过滤条件）按照名称过滤。
search-by-name - String - 是否必填：否 -（过滤条件）按照名称检索，模糊匹配。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreationTimeAfter",$param) and $param["CreationTimeAfter"] !== null) {
            $this->CreationTimeAfter = $param["CreationTimeAfter"];
        }

        if (array_key_exists("CreationTimeBefore",$param) and $param["CreationTimeBefore"] !== null) {
            $this->CreationTimeBefore = $param["CreationTimeBefore"];
        }

        if (array_key_exists("NameContains",$param) and $param["NameContains"] !== null) {
            $this->NameContains = $param["NameContains"];
        }

        if (array_key_exists("StatusEquals",$param) and $param["StatusEquals"] !== null) {
            $this->StatusEquals = $param["StatusEquals"];
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
