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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusters请求参数结构体
 *
 * @method array getClusterIds() 获取指定查询的集群ID列表
 * @method void setClusterIds(array $ClusterIds) 设置指定查询的集群ID列表
 * @method array getFilters() 获取查询过滤条件
 * @method void setFilters(array $Filters) 设置查询过滤条件
 * @method integer getOffset() 获取查询列表偏移量
 * @method void setOffset(integer $Offset) 设置查询列表偏移量
 * @method integer getLimit() 获取查询列表返回记录数，默认值20
 * @method void setLimit(integer $Limit) 设置查询列表返回记录数，默认值20
 * @method integer getIpv6Enable() 获取是否启用Ipv6
 * @method void setIpv6Enable(integer $Ipv6Enable) 设置是否启用Ipv6
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var array 指定查询的集群ID列表
     */
    public $ClusterIds;

    /**
     * @var array 查询过滤条件
     */
    public $Filters;

    /**
     * @var integer 查询列表偏移量
     */
    public $Offset;

    /**
     * @var integer 查询列表返回记录数，默认值20
     */
    public $Limit;

    /**
     * @var integer 是否启用Ipv6
     */
    public $Ipv6Enable;

    /**
     * @param array $ClusterIds 指定查询的集群ID列表
     * @param array $Filters 查询过滤条件
     * @param integer $Offset 查询列表偏移量
     * @param integer $Limit 查询列表返回记录数，默认值20
     * @param integer $Ipv6Enable 是否启用Ipv6
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }
    }
}
