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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealServers请求参数结构体
 *
 * @method integer getProjectId() 获取查询源站的所属项目ID，-1表示所有项目
 * @method void setProjectId(integer $ProjectId) 设置查询源站的所属项目ID，-1表示所有项目
 * @method string getSearchValue() 获取需要查询的源站IP或域名，支持模糊匹配
 * @method void setSearchValue(string $SearchValue) 设置需要查询的源站IP或域名，支持模糊匹配
 * @method integer getOffset() 获取偏移量，默认值是0
 * @method void setOffset(integer $Offset) 设置偏移量，默认值是0
 * @method integer getLimit() 获取返回数量，默认为20个，最大值为50个
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20个，最大值为50个
 * @method array getTagSet() 获取标签列表，当存在该字段时，拉取对应标签下的资源列表。
最多支持5个标签，当存在两个或两个以上的标签时，满足其中任意一个标签时，源站会被拉取出来。
 * @method void setTagSet(array $TagSet) 设置标签列表，当存在该字段时，拉取对应标签下的资源列表。
最多支持5个标签，当存在两个或两个以上的标签时，满足其中任意一个标签时，源站会被拉取出来。
 * @method array getFilters() 获取过滤条件。filter的name取值(RealServerName,RealServerIP)
 * @method void setFilters(array $Filters) 设置过滤条件。filter的name取值(RealServerName,RealServerIP)
 */
class DescribeRealServersRequest extends AbstractModel
{
    /**
     * @var integer 查询源站的所属项目ID，-1表示所有项目
     */
    public $ProjectId;

    /**
     * @var string 需要查询的源站IP或域名，支持模糊匹配
     */
    public $SearchValue;

    /**
     * @var integer 偏移量，默认值是0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20个，最大值为50个
     */
    public $Limit;

    /**
     * @var array 标签列表，当存在该字段时，拉取对应标签下的资源列表。
最多支持5个标签，当存在两个或两个以上的标签时，满足其中任意一个标签时，源站会被拉取出来。
     */
    public $TagSet;

    /**
     * @var array 过滤条件。filter的name取值(RealServerName,RealServerIP)
     */
    public $Filters;

    /**
     * @param integer $ProjectId 查询源站的所属项目ID，-1表示所有项目
     * @param string $SearchValue 需要查询的源站IP或域名，支持模糊匹配
     * @param integer $Offset 偏移量，默认值是0
     * @param integer $Limit 返回数量，默认为20个，最大值为50个
     * @param array $TagSet 标签列表，当存在该字段时，拉取对应标签下的资源列表。
最多支持5个标签，当存在两个或两个以上的标签时，满足其中任意一个标签时，源站会被拉取出来。
     * @param array $Filters 过滤条件。filter的name取值(RealServerName,RealServerIP)
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
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
