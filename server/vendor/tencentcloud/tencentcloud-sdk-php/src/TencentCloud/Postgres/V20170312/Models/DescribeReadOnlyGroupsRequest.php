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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReadOnlyGroups请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，必须传入主实例ID进行过滤，否则返回值将为空，过滤参数为：db-master-instance-id
 * @method void setFilters(array $Filters) 设置过滤条件，必须传入主实例ID进行过滤，否则返回值将为空，过滤参数为：db-master-instance-id
 * @method integer getPageSize() 获取查询每一页的条数，默认为10
 * @method void setPageSize(integer $PageSize) 设置查询每一页的条数，默认为10
 * @method integer getPageNumber() 获取查询的页码，默认为1
 * @method void setPageNumber(integer $PageNumber) 设置查询的页码，默认为1
 * @method string getOrderBy() 获取查询排序依据，目前支持:ROGroupId,CreateTime,Name
 * @method void setOrderBy(string $OrderBy) 设置查询排序依据，目前支持:ROGroupId,CreateTime,Name
 * @method string getOrderByType() 获取查询排序依据类型，目前支持:desc,asc
 * @method void setOrderByType(string $OrderByType) 设置查询排序依据类型，目前支持:desc,asc
 */
class DescribeReadOnlyGroupsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，必须传入主实例ID进行过滤，否则返回值将为空，过滤参数为：db-master-instance-id
     */
    public $Filters;

    /**
     * @var integer 查询每一页的条数，默认为10
     */
    public $PageSize;

    /**
     * @var integer 查询的页码，默认为1
     */
    public $PageNumber;

    /**
     * @var string 查询排序依据，目前支持:ROGroupId,CreateTime,Name
     */
    public $OrderBy;

    /**
     * @var string 查询排序依据类型，目前支持:desc,asc
     */
    public $OrderByType;

    /**
     * @param array $Filters 过滤条件，必须传入主实例ID进行过滤，否则返回值将为空，过滤参数为：db-master-instance-id
     * @param integer $PageSize 查询每一页的条数，默认为10
     * @param integer $PageNumber 查询的页码，默认为1
     * @param string $OrderBy 查询排序依据，目前支持:ROGroupId,CreateTime,Name
     * @param string $OrderByType 查询排序依据类型，目前支持:desc,asc
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
