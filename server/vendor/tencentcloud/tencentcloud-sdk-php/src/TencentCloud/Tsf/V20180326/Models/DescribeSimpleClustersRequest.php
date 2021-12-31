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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSimpleClusters请求参数结构体
 *
 * @method array getClusterIdList() 获取需要查询的集群ID列表，不填或不传入时查询所有内容
 * @method void setClusterIdList(array $ClusterIdList) 设置需要查询的集群ID列表，不填或不传入时查询所有内容
 * @method string getClusterType() 获取需要查询的集群类型，不填或不传入时查询所有内容
 * @method void setClusterType(string $ClusterType) 设置需要查询的集群类型，不填或不传入时查询所有内容
 * @method integer getOffset() 获取查询偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置查询偏移量，默认为0
 * @method integer getLimit() 获取分页个数，默认为20， 取值应为1~50
 * @method void setLimit(integer $Limit) 设置分页个数，默认为20， 取值应为1~50
 * @method string getSearchWord() 获取对id和name进行关键词过滤
 * @method void setSearchWord(string $SearchWord) 设置对id和name进行关键词过滤
 */
class DescribeSimpleClustersRequest extends AbstractModel
{
    /**
     * @var array 需要查询的集群ID列表，不填或不传入时查询所有内容
     */
    public $ClusterIdList;

    /**
     * @var string 需要查询的集群类型，不填或不传入时查询所有内容
     */
    public $ClusterType;

    /**
     * @var integer 查询偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 分页个数，默认为20， 取值应为1~50
     */
    public $Limit;

    /**
     * @var string 对id和name进行关键词过滤
     */
    public $SearchWord;

    /**
     * @param array $ClusterIdList 需要查询的集群ID列表，不填或不传入时查询所有内容
     * @param string $ClusterType 需要查询的集群类型，不填或不传入时查询所有内容
     * @param integer $Offset 查询偏移量，默认为0
     * @param integer $Limit 分页个数，默认为20， 取值应为1~50
     * @param string $SearchWord 对id和name进行关键词过滤
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
        if (array_key_exists("ClusterIdList",$param) and $param["ClusterIdList"] !== null) {
            $this->ClusterIdList = $param["ClusterIdList"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
