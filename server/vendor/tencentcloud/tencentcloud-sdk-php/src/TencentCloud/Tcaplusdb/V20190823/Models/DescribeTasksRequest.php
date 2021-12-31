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
 * DescribeTasks请求参数结构体
 *
 * @method array getClusterIds() 获取需要查询任务所属的集群ID列表
 * @method void setClusterIds(array $ClusterIds) 设置需要查询任务所属的集群ID列表
 * @method array getTaskIds() 获取需要查询的任务ID列表
 * @method void setTaskIds(array $TaskIds) 设置需要查询的任务ID列表
 * @method array getFilters() 获取过滤条件，本接口支持：Content，TaskType, Operator, Time
 * @method void setFilters(array $Filters) 设置过滤条件，本接口支持：Content，TaskType, Operator, Time
 * @method integer getOffset() 获取查询列表偏移量
 * @method void setOffset(integer $Offset) 设置查询列表偏移量
 * @method integer getLimit() 获取查询列表返回记录数
 * @method void setLimit(integer $Limit) 设置查询列表返回记录数
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var array 需要查询任务所属的集群ID列表
     */
    public $ClusterIds;

    /**
     * @var array 需要查询的任务ID列表
     */
    public $TaskIds;

    /**
     * @var array 过滤条件，本接口支持：Content，TaskType, Operator, Time
     */
    public $Filters;

    /**
     * @var integer 查询列表偏移量
     */
    public $Offset;

    /**
     * @var integer 查询列表返回记录数
     */
    public $Limit;

    /**
     * @param array $ClusterIds 需要查询任务所属的集群ID列表
     * @param array $TaskIds 需要查询的任务ID列表
     * @param array $Filters 过滤条件，本接口支持：Content，TaskType, Operator, Time
     * @param integer $Offset 查询列表偏移量
     * @param integer $Limit 查询列表返回记录数
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

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
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
    }
}
