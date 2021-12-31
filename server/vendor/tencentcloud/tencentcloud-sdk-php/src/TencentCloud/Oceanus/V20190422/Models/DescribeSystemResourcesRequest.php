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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSystemResources请求参数结构体
 *
 * @method array getResourceIds() 获取需要查询的资源ID数组
 * @method void setResourceIds(array $ResourceIds) 设置需要查询的资源ID数组
 * @method integer getOffset() 获取偏移量，仅当设置 Limit 参数时有效
 * @method void setOffset(integer $Offset) 设置偏移量，仅当设置 Limit 参数时有效
 * @method integer getLimit() 获取条数限制，默认返回 20 条
 * @method void setLimit(integer $Limit) 设置条数限制，默认返回 20 条
 * @method array getFilters() 获取查询资源配置列表， 如果不填写，返回该 ResourceIds.N 下所有作业配置列表
 * @method void setFilters(array $Filters) 设置查询资源配置列表， 如果不填写，返回该 ResourceIds.N 下所有作业配置列表
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 */
class DescribeSystemResourcesRequest extends AbstractModel
{
    /**
     * @var array 需要查询的资源ID数组
     */
    public $ResourceIds;

    /**
     * @var integer 偏移量，仅当设置 Limit 参数时有效
     */
    public $Offset;

    /**
     * @var integer 条数限制，默认返回 20 条
     */
    public $Limit;

    /**
     * @var array 查询资源配置列表， 如果不填写，返回该 ResourceIds.N 下所有作业配置列表
     */
    public $Filters;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @param array $ResourceIds 需要查询的资源ID数组
     * @param integer $Offset 偏移量，仅当设置 Limit 参数时有效
     * @param integer $Limit 条数限制，默认返回 20 条
     * @param array $Filters 查询资源配置列表， 如果不填写，返回该 ResourceIds.N 下所有作业配置列表
     * @param string $ClusterId 集群ID
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
