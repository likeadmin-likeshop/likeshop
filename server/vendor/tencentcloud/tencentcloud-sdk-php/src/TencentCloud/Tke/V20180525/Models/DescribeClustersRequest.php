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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusters请求参数结构体
 *
 * @method array getClusterIds() 获取集群ID列表(为空时，
表示获取账号下所有集群)
 * @method void setClusterIds(array $ClusterIds) 设置集群ID列表(为空时，
表示获取账号下所有集群)
 * @method integer getOffset() 获取偏移量,默认0
 * @method void setOffset(integer $Offset) 设置偏移量,默认0
 * @method integer getLimit() 获取最大输出条数，默认20，最大为100
 * @method void setLimit(integer $Limit) 设置最大输出条数，默认20，最大为100
 * @method array getFilters() 获取过滤条件,当前只支持按照单个条件ClusterName进行过滤
 * @method void setFilters(array $Filters) 设置过滤条件,当前只支持按照单个条件ClusterName进行过滤
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var array 集群ID列表(为空时，
表示获取账号下所有集群)
     */
    public $ClusterIds;

    /**
     * @var integer 偏移量,默认0
     */
    public $Offset;

    /**
     * @var integer 最大输出条数，默认20，最大为100
     */
    public $Limit;

    /**
     * @var array 过滤条件,当前只支持按照单个条件ClusterName进行过滤
     */
    public $Filters;

    /**
     * @param array $ClusterIds 集群ID列表(为空时，
表示获取账号下所有集群)
     * @param integer $Offset 偏移量,默认0
     * @param integer $Limit 最大输出条数，默认20，最大为100
     * @param array $Filters 过滤条件,当前只支持按照单个条件ClusterName进行过滤
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
